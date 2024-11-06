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

class FrontController extends Controller
{

    public function processPayment(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        try {
            $charge = Charge::create([
                "amount" => 1000, 
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test Payment",
            ]);

            return response()->json(['success' => 'Payment successful!']);
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
