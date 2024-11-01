<?php



namespace App\Http\Controllers;



use App\Mail\Invoice;

use App\Models\bookings;

use App\Models\guest;

use App\Models\User;

use App\Models\guest_booking;

use App\Models\user_booking;

use App\Models\vehicle;

use App\Models\vehicle_type;
use App\Models\UserExtraAddresses;
use App\Models\GuestExtraAddresses;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Mail;

class BookController extends Controller

{
    public function book_bookings(Request $request){
        $data = unserialize(base64_decode(session::get('binfo')));

        $vehicldata = vehicle::find($data['vehicle']);

        $prrice = (float)$vehicldata->price;

        $distance = (float)$data['distance'];

        if(Auth::user()){

            $user_id=Auth::user()->id;

            $usermail=Auth::user()->email;

            $booking = new user_booking();

            $booking->user_id = $user_id;

            $booking->from_address = $data['from'];

            $booking->to_address= $data['to'];

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

            $booking->vehicle_id =$vehicldata->id;

            $booking->coll_name =$data['company_name1'];

            $booking->coll_phone =$data['ph1'];

            $booking->coll_postal_code = $data['pc1'] ?? null; 

            $booking->coll_city= $data['name1'] ?? null;


            $booking->deli_name = $data['company_name2'] ?? null;

            $booking->deli_phone = $data['ph2'] ?? null;

            $booking->deli_postal_code = $data['pc2'] ?? null;

            $booking->deli_city= $data['name2'] ?? null;

            $booking->length= $data['length'];

            $booking->height= $data['height'];

            $booking->width= $data['width'];

            $booking->size_unit= $data['size_unit'];

            $booking->status= 'pending';

            $booking->distance= $distance;

            $booking->price= $data['ffinal'];



        if ($request->paytype == "paypal"){
            $booking->save();

            $dynamicData = session()->get('dynamic_fieldsets');

            if ($dynamicData && is_array($dynamicData)) {
                foreach ($dynamicData as $data) {
                    $extraAddress = new UserExtraAddresses();
                    $extraAddress->linked_to = $data['linked_to'];
                    $extraAddress->address_type = $data['address_type'];
                    $extraAddress->package_type = $data['package_type'];
                    $extraAddress->quantity = $data['quantity'];
                    $extraAddress->weight = $data['weight'];
                    $extraAddress->unit = $data['unit'];
                    $extraAddress->length = $data['length'];
                    $extraAddress->width = $data['width'];
                    $extraAddress->height = $data['height'];
                    $extraAddress->size_unit = $data['size_unit'];
                    $extraAddress->collection_point = $data['collection_point'];
                    $extraAddress->delivery_point = $data['delivery_point'];
                    $extraAddress->additional_notes = $data['additional_notes'];
                    $extraAddress->company_name = $data['company_name'];
                    $extraAddress->contact_name = $data['contact_name'];
                    $extraAddress->contact_tele = $data['contact_tele'];
                    $extraAddress->postal_code = $data['postal_code'];
                    $extraAddress->booking_id = $booking->id; 
                    $extraAddress->save();
                }
            }

            session()->forget('dynamic_fieldsets');
            session::forget('binfo');


            $user = User::find(Auth::user()->id);
            $data = array('data'=>$booking,'user'=>$user);
            // Mail::send('invoice', $data, function($message) use ($usermail) {
            //     $message->to([$usermail, 'sales@fastukcouriers.co.uk'])->subject('Fast Uk Booking Confirm...');
            // });
            Session::flash ( 'success-message', 'Payment done successfully !' );
            return redirect()->back();
        }else if($request->paytype == "wallet"){
                $userw = User::find(Auth::user()->id);
                if((int)$userw->balance > $price){
                    $bl = $userw->balance;
                    $userw->balance = $bl - $price;
                    $userw->save();
                    $booking->save();
                }else{
                    $check = (int)$userw->balance - (int)$price;
                    if($check <= $userw->credit_limit){
                        Session::flash ( 'credit-limit', 'Your Credit Limit Is Over Please Add Balance To Wallet' );
                         return redirect()->back();
                    }else{

                    $bl = $userw->balance;

                    $userw->balance = $bl - $price;

                    $userw->save();

                     $booking->save();
                    }
                }

                 $user = User::find(Auth::user()->id);

                $data = array('data'=>$booking,'user'=>$user);

            //   Mail::send('invoice', $data, function($message) use ($usermail) {

            //     $message->to([$usermail, 'sales@fastukcouriers.co.uk'])

            //     ->subject('Fast Uk Booking Confirm...');

            //      });





            Session::flash ( 'success-message', 'Payment done successfully !' );



            return redirect()->back();





        }else{



            echo 'SomeThing Went Wrong';

        }



        }else {

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


                $booking->coll_name =$data['company_name1'];

                $booking->coll_phone =$data['ph1'];
    
                $booking->coll_postal_code = $data['pc1'] ?? null; 
    
                $booking->coll_city= $data['name1'] ?? null;
    
    
                $booking->deli_name = $data['company_name2'] ?? null;
    
                $booking->deli_phone = $data['ph2'] ?? null;
    
                $booking->deli_postal_code = $data['pc2'] ?? null;
    
                $booking->deli_city= $data['name2'] ?? null;

                $booking->status = 'pending';

                $booking->distance = $request->distance;

                $booking->price= $data['ffinal'];



                $booking->save();

                $dynamicData = session()->get('dynamic_fieldsets');

                if ($dynamicData && is_array($dynamicData)) {
                    foreach ($dynamicData as $data) {
                        $extraAddress = new GuestExtraAddresses();
                        $extraAddress->linked_to = $data['linked_to'];
                        $extraAddress->address_type = $data['address_type'];
                        $extraAddress->package_type = $data['package_type'];
                        $extraAddress->quantity = $data['quantity'];
                        $extraAddress->weight = $data['weight'];
                        $extraAddress->unit = $data['unit'];
                        $extraAddress->length = $data['length'];
                        $extraAddress->width = $data['width'];
                        $extraAddress->height = $data['height'];
                        $extraAddress->size_unit = $data['size_unit'];
                        $extraAddress->collection_point = $data['collection_point'];
                        $extraAddress->delivery_point = $data['delivery_point'];
                        $extraAddress->additional_notes = $data['additional_notes'];
                        $extraAddress->company_name = $data['company_name'];
                        $extraAddress->contact_name = $data['contact_name'];
                        $extraAddress->contact_tele = $data['contact_tele'];
                        $extraAddress->postal_code = $data['postal_code'];
                        $extraAddress->booking_id = $booking->id; 
                        $extraAddress->save();
                    }
                }
    
                session()->forget('dynamic_fieldsets');
                session::forget('binfo');



                 $guest = guest::where('track_id',$guest_id)->first();

                   $data = array('data'=>$booking,'user'=>$guest);

            //   Mail::send('invoice', $data, function($message) use ($request,$guest) {

            //         $message->to('sales@fastukcouriers.co.uk')->subject

            //         ('Fast Uk Booking Confirm...');

            //     });





                Session::flash ( 'success-message', 'Payment done successfully !' );

                return redirect('/guest-home-page')->with('guestbooked', 'Booking Done');





            }

        }



    }







    public function rebook(Request $request) {

        // Get the user's previous booking details from the database

        $user = Auth::user();

        $previousBooking = user_booking::where('user_id', $user->id)

            ->orderBy('created_at', 'desc') // You might need to adjust this based on your database structure

            ->first();



        if (!$previousBooking) {

            return redirect()->back()->with('error-message', 'No previous booking found.');

        }



        // Clone the previous booking data and update any necessary fields

        $newBooking = $previousBooking->replicate();

        // Update any fields that need to be changed for the rebooking

        $newBooking->status = 'pending'; // You might want to set this to a default status



        // Save the new booking

        $newBooking->save();



        // Optionally, you can send an email notification for the rebooking

        Mail::send('invoice', ['data' => $newBooking, 'user' => $user], function ($message) use ($user) {

            $message->to('sales@fastukcouriers.co.uk')->subject('Fast Uk Booking Confirm...');

        });



        Session::flash('success-message', 'Rebooking done successfully!');



        return redirect()->back();

    }



    public function rebookview($id){

        $rebookings = user_booking::find($id);

        return view('rebook', compact('rebookings'));

    }





    public function rebook_bookings(Request $request){

        // dd($request);



        $data = unserialize(base64_decode(session::get('binfo')));

        $vehicldata = vehicle::find($data['vehicle']);

        // dd($vehicldata);

        $prrice = (float)$vehicldata->price;

        $distance = (float)$data['distance'];

        $price = $request->price;



        if(Auth::user()){

            $user_id=Auth::user()->id;

            $booking = new user_booking();

            $usermail=Auth::user()->email;

            $booking->user_id = $user_id;

            $booking->from_address = $data['from'];

            $booking->to_address= $data['to'];

            $booking->booking_date = $data['b_date'];

            $booking->pick_time_at =$data['p_time_at'];

            $booking->pickup_time_type = $data['pickup_time_type'];

            $booking->pick_time_after = $data['p_time_after'];

            $booking->pick_time_from = $data['p_time_from'];

            $booking->pick_time_to = $data['p_time_to'];

            $booking->package_type = $data['package_type'];

            $booking->quantity = $data['quantity'];

            $booking->weight = $data['weight'];

            $booking->unit = $data['unit'];

            $booking->vehicle_id =$vehicldata->id;

            $booking->coll_name =$data['company_name1'];

            $booking->coll_phone =$data['ph1'];

            $booking->coll_postal_code = $data['pc1'] ?? null; 

            $booking->coll_city= $data['name1'] ?? null;


            $booking->deli_name = $data['company_name2'] ?? null;

            $booking->deli_phone = $data['ph2'] ?? null;

            $booking->deli_postal_code = $data['pc2'] ?? null;

            $booking->deli_city= $data['name2'] ?? null;

            $booking->length= $data['length'];

            $booking->height= $data['height'];

            $booking->width= $data['width'];

            $booking->size_unit= $data['size_unit'];


            $booking->status= 'pending';

            $booking->distance= $distance;

            $booking->price= $data['ffinal'];



        if ($request->paytype == "paypal"){





            $booking->save();



            $user = User::find(Auth::user()->id);

                $data = array('data'=>$booking,'user'=>$user);

                   Mail::send('invoice', $data, function($message) use ($usermail) {

        $message->to([$usermail, 'sales@fastukcouriers.co.uk'])

                ->subject('Fast Uk Booking Confirm...');

    });





            Session::flash ( 'success-message', 'Payment done successfully !' );



            return redirect()->back();

        }else if($request->paytype == "wallet"){





                $userw = User::find(Auth::user()->id);

                if((int)$userw->balance > $price){

                    $bl = $userw->balance;

                    $userw->balance = $bl - $price;

                    $userw->save();

                     $booking->save();



                }else{



                    $check = (int)$userw->balance - (int)$price;

                    if($check <= $userw->credit_limit){



                        Session::flash ( 'credit-limit', 'Your Credit Limit Is Over Please Add Balance To Wallet' );

                         return redirect()->back();

                    }else{



                    $bl = $userw->balance;

                    $userw->balance = $bl - $price;

                    $userw->save();

                     $booking->save();

                    }
                }

                 $user = User::find(Auth::user()->id);

                $data = array('data'=>$booking,'user'=>$user);

            Mail::send('invoice', $data, function($message) use ($usermail) {

        $message->to([$usermail, 'sales@fastukcouriers.co.uk'])

                ->subject('Fast Uk Booking Confirm...');

    });

            Session::flash ( 'success-message', 'Payment done successfully !' );



            return redirect()->back();





        }else{



            echo 'SomeThing Went Wrong';

        }



        }else {

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

                $booking->coll_name = $data['name1'];

                $booking->coll_phone = $data['ph1'];

                $booking->coll_address = $data['address1'];

                $booking->coll_city = $data['city1'];

                $booking->deli_name = $data['name2'];

                $booking->deli_phone = $data['ph2'];

                $booking->deli_address = $data['aaddress2'];

                $booking->deli_city = $data['city2'];

                $booking->length= $data['length'];

                $booking->height= $data['height'];
    
                $booking->width= $data['width'];
    
                $booking->size_unit= $data['size_unit'];

                $booking->status = 'pending';

                $booking->distance = $request->distance;

                $booking->price= $price;



                $booking->save();





                 $guest = guest::where('track_id',$guest_id)->first();

                   $data = array('data'=>$booking,'user'=>$guest);

              Mail::send('invoice', $data, function($message) use ($request,$guest) {

                    $message->to('sales@fastukcouriers.co.uk')->subject

                    ('Fast Uk Booking Confirm...');

                });





                Session::flash ( 'success-message', 'Payment done successfully !' );

                return redirect('/guest-home-page')->with('guestbooked', 'Booking Done');





            }

        }



    }



}

