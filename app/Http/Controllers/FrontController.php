<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageSent;
use App\Models\Blog;
use App\Models\Sesion;
use App\Models\tradingaccount;
use App\Models\Message;
use App\Models\Service;
use App\Mail\TradingAccountMail;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Stripe\Stripe;
use Stripe\Charge;
use App\Models\bookings;
use App\Models\guest;
use App\Models\User;
use App\Models\guest_booking;
use App\Models\user_booking;
use App\Models\vehicle;
use App\Models\vehicle_type;
use App\Models\UserExtraAddresses;
use App\Models\GuestExtraAddresses;
use Illuminate\Support\Facades\Auth;


class FrontController extends Controller
{

    public function processPayment(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        try {
            $amountInPence = (int)($request->s_final * 100);
            $charge = Charge::create([
                "amount" => $amountInPence, 
                "currency" => "gbp",
                "source" => $request->stripeToken,
                "description" => "Test Payment",
            ]);
    
            $data = unserialize(base64_decode(session::get('binfo')));
            $vehicldata = vehicle::find($data['vehicle']);
            $distance = (float)$data['distance'];
    
            if (Auth::user()) {
                $user_id = Auth::user()->id;
                $usermail = Auth::user()->email;
                $booking = new user_booking();
                $booking->user_id = $user_id;
                $booking->from_address = $data['from'];
                $booking->to_address = $data['to'];
                $booking->booking_date = $data['b_date'];
                $booking->pick_time_at = $data['p_time_at'];
                $booking->pickup_time_type = $data['pickup_time_type'];
                $booking->pick_time_after = $data['p_time_after'];
                $booking->pick_time_from = $data['p_time_from'];
                $booking->pick_time_to = $data['p_time_to'];
                $booking->package_type = $data['package_type'];
                $booking->quantity = $data['quantity'];
                $booking->weight = $data['weight'];
                $booking->unit = $data['unit'];
                $booking->vehicle_id = $vehicldata->id;
                $booking->coll_name = $data['company_name1'];
                $booking->coll_phone = $data['ph1'];
                $booking->deli_name = $data['company_name2'] ?? null;
                $booking->deli_phone = $data['ph2'] ?? null;
                $booking->length = $data['length'];
                $booking->height = $data['height'];
                $booking->width = $data['width'];
                $booking->size_unit = $data['size_unit'];
                $booking->status = 'pending';
                $booking->distance = $distance;
                $booking->price = $data['ffinal'];
                $booking->ref_no = $data['ref_no'];
                $booking->save();
    
                $dynamicData = session()->get('dynamic_fieldsets');
                if ($dynamicData && is_array($dynamicData)) {
                    foreach ($dynamicData as $item) {
                        $extraAddress = new UserExtraAddresses();
                        $extraAddress->linked_to = $item['linked_to'];
                        $extraAddress->ref_no = $item['auto_generated_id'];
                        $extraAddress->address_type = $item['address_type'];
                        $extraAddress->package_type = $item['package_type'];
                        $extraAddress->quantity = $item['quantity'];
                        $extraAddress->weight = $item['weight'];
                        $extraAddress->unit = $item['unit'];
                        $extraAddress->length = $item['length'];
                        $extraAddress->width = $item['width'];
                        $extraAddress->height = $item['height'];
                        $extraAddress->size_unit = $item['size_unit'];
                        $extraAddress->collection_point = $item['collection_point'];
                        $extraAddress->delivery_point = $item['delivery_point'];
                        $extraAddress->additional_notes = $item['additional_notes'];
                        $extraAddress->company_name = $item['company_name'];
                        $extraAddress->contact_tele = $item['contact_tele'];
                        $extraAddress->booking_id = $booking->id; 
                        $extraAddress->save();
                    }
                }
                session()->forget('dynamic_fieldsets');
                session()->forget('binfo');
                return response()->json(['success' => 'Payment successful!']);
            } else {
                if (session::has('guest_track_id')) {
                    $guest_id = session::get('guest_track_id');
                    $booking = new guest_booking();
                    $booking->guest_id = $guest_id;
                    $booking->from_address = $data['from'];
                    $booking->to_address = $data['to'];
                    $booking->booking_date = $data['b_date'];
                    $booking->pick_time_at = $data['p_time_at'];
                    $booking->pickup_time_type = $data['pickup_time_type'];
                    $booking->pick_time_after = $data['p_time_after'];
                    $booking->pick_time_from = $data['p_time_from'];
                    $booking->pick_time_to = $data['p_time_to'];
                    $booking->package_type = $data['package_type'];
                    $booking->quantity = $data['quantity'];
                    $booking->weight = $data['weight'];
                    $booking->unit = $data['unit'];
                    $booking->vehicle_id = $vehicldata->id;
                    $booking->length = $data['length'];
                    $booking->height = $data['height'];
                    $booking->width = $data['width'];
                    $booking->size_unit = $data['size_unit'];
                    $booking->coll_name = $data['company_name1'];
                    $booking->coll_phone = $data['ph1'];
                    $booking->deli_name = $data['company_name2'] ?? null;
                    $booking->deli_phone = $data['ph2'] ?? null;
                    $booking->status = 'pending';
                    $booking->distance = $distance;
                    $booking->price = $data['ffinal'];
                    $booking->ref_no = $data['ref_no'];
                    $booking->save();
    
                    $dynamicData = session()->get('dynamic_fieldsets');
                    if ($dynamicData && is_array($dynamicData)) {
                        foreach ($dynamicData as $item) {
                            $extraAddress = new GuestExtraAddresses();
                            $extraAddress->linked_to = $item['linked_to'];
                            $extraAddress->ref_no = $item['auto_generated_id'];
                            $extraAddress->address_type = $item['address_type'];
                            $extraAddress->package_type = $item['package_type'];
                            $extraAddress->quantity = $item['quantity'];
                            $extraAddress->weight = $item['weight'];
                            $extraAddress->unit = $item['unit'];
                            $extraAddress->length = $item['length'];
                            $extraAddress->width = $item['width'];
                            $extraAddress->height = $item['height'];
                            $extraAddress->size_unit = $item['size_unit'];
                            $extraAddress->collection_point = $item['collection_point'];
                            $extraAddress->delivery_point = $item['delivery_point'];
                            $extraAddress->additional_notes = $item['additional_notes'];
                            $extraAddress->company_name = $item['company_name'];
                            $extraAddress->contact_tele = $item['contact_tele'];
                            $extraAddress->booking_id = $booking->id; 
                            $extraAddress->save();
                        }
                    }
                    session()->forget('dynamic_fieldsets');
                    session()->forget('binfo');
                    return response()->json([
                        'success' => 'Payment successful!',
                        'redirect_url' => url('/guest-home-page') 
                    ]);
                }
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Payment failed: ' . $e->getMessage()]);
        }
    }
    

    public function check_datetime(Request $request)
    {
        $past = Carbon::createFromFormat('Y-m-d', $request->b_date)->startOfDay();
        $now = Carbon::now()->startOfDay();
    
        if ($past < $now) {
            return response()->json('date_out');
        }
    
        return response()->json('success');
    }

    public function storeAddressFieldsets(Request $request)
    {
        $dynamicData = $request->input('dynamicData');
        session()->put('dynamic_fieldsets', $dynamicData);
        return response()->json(['success' => true, 'message' => 'Dynamic data stored in session']);
    }
    

    function getDistance(Request $request)
    {
        $addresses = $request->points; 
        $totalPoints = count($addresses);
        
        $totalDistance = 0;
        $previousLocation = null;

        foreach ($addresses as $address) {
            $address = trim($address);

            if ($previousLocation !== null) {
                $from = urlencode($previousLocation);
                $to = urlencode($address);

                $geocodeFrom = file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?destinations='.htmlspecialchars($from).'&origins='.$to.'&units=imperial&key=AIzaSyCdCB6iqlUAGnEFSmNmMl1OIZ2tKHIizBI');
                $outputFrom = json_decode($geocodeFrom, true);

                if (isset($outputFrom['rows'][0]['elements'][0]['status']) && $outputFrom['rows'][0]['elements'][0]['status'] == 'OK') {
                    $distance = $outputFrom['rows'][0]['elements'][0]['distance']['value'];
                    $distanceInMiles = round(($distance / 1000) * 0.62137, 2);  
                    $totalDistance += $distanceInMiles;
                }
            }

            $previousLocation = $address;
        }


        return response()->json([
            'totalDistance' => $totalDistance,
            'totalPoints' => $totalPoints
        ]);
    }

    


    public function create_session(Request $request){
        $abc = base64_encode(serialize($request->all()));
        session::put('binfo',$abc);

        try {
            $data = $request->all();
            $session = Sesion::create($data);
    
            return response()->json([
                'message' => 'Session created successfully',
                'session' => $session
            ], 201);
    
        } catch (\Exception $e) {
            Log::error('Error creating session: ' . $e->getMessage(), [
                'data' => $data,
                'exception' => $e,
            ]);
    
            return response()->json([
                'error' => 'An error occurred while creating the session'
            ], 500);
        }
    }

    public function testView(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable|numeric',
            'message' => 'required',
        ]);

        // Create a new message record
        $message = new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->message = $request->message;
        $message->save();

        // Send email notification with the $message instance
        Mail::to('info@fastukcouriers.co.uk')->send(new MessageSent($message));

        // Redirect to the homepage
        return redirect('/')->with('success', 'Message sent successfully!');
    }


    public function showblogs()
    {
        return view('blogs');
    }

    public function blogdetail($id)
    {
        $blog = Blog::find($id);
        return view('blogdetail', compact('blog'));
    }

public function servicedetail($slug)
{
    $service = Service::where('slug', $slug)->firstOrFail();
    return view('servicedetail', compact('service'));
}

public function showSitemap()
{
    $xmlFilePath = public_path('sitemap.xml');
    $xmlContent = file_get_contents($xmlFilePath);

    return view('sitemap', compact('xmlContent'));
}

public function tradeaccountform(Request $request)
{


    // Store the form data in the tradingaccounts table
    $tradingAccount = tradingaccount::create([
        'company_name' => $request->input('company_name'),
        'contact_name' => $request->input('contact_name'),
        'trading_address' => $request->input('trading_address'),
        'email' => $request->input('email'),
        'phone' => $request->input('phone'),
        'invoice_address' => $request->input('invoice_address'),
        'account_email' => $request->input('account_email'),
        'account_phone' => $request->input('account_phone'),
        'company_number' => $request->input('company_number'),
        'vat_number' => $request->input('vat_number'),
        'payment_terms' => $request->input('payment_terms'),
        'date' => $request->input('date'),
        'name_position' => $request->input('name_position'),
    ]);

    Mail::to('info@fastukcouriers.co.uk')->send(new TradingAccountMail($request->all()));

    return redirect()->back()->with('success', 'Company will contact you soon!');
}



}
