<?php



namespace App\Http\Controllers;



use App\Models\guest_booking;

use App\Models\guest;

use App\Models\User;

use Mail;

use App\Models\user_booking;

use App\Models\vehicle;

use App\Models\vehicle_type;

use App\Models\GuestExtraAddresses;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Session;



class StripeController extends Controller

{

    protected function stripe_pk(){



        return  "sk_test_51IMTL2E3aOKhVh4WyoVGpRVN2KkGbwKf3HiLl3FnbGaFYNy0sxpNRDyQxYXBfE6DWUOMsk4KoMg5TPrP6t61A8uY00m8QWvsR0";

    }

    public function guest_booking(Request $request) {



        \Stripe\Stripe::setApiKey ($this->stripe_pk());



        $data = unserialize(base64_decode(session::get('binfo')));

        $vehicldata = vehicle::find($data['vehicle']);

        $prrice = (float)$vehicldata->price;

        $distance = (float)$data['distance'];

        $price = $prrice * $distance; 

        

        \Stripe\Charge::create(array(

            "amount" => $price * 100,

            "currency" => "usd",

            "source" => $request->input('stripeToken'), // obtained with Stripe.js

            "description" => "Test payment."

        ));

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

            $booking->coll_ppostal_code = $data['pc1'] ?? null; 

            $booking->coll_city= $data['name1'] ?? null;


            $booking->deli_name = $data['company_name2'] ?? null;

            $booking->deli_phone = $data['ph2'] ?? null;

            $booking->deli_postal_code = $data['pc2'] ?? null;

            $booking->deli_city= $data['name2'] ?? null;

            $booking->length= $data['length'];

            $booking->height= $data['height'];

            $booking->width= $data['width'];

            $booking->size_unit= $data['size_unit'];

            $booking->status = 'pending';

            $booking->distance = $distance;

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

                Mail::send('invoice', $data, function($message) use ($request,$guest) {

                    $message->to($guest->email,$guest->name)->subject

                    ('Fast Uk Booking Confirm...');

                    $message->from('fastuk@gmail.com','Fast Uk');

                });

                

            Session::flash ( 'success-message', 'Payment done successfully !' );

            return redirect('/guest-home-page')->with('guestbooked', 'Booking Done');
        }
    }

    public function payment(Request $request) {

        \Stripe\Stripe::setApiKey ($this->stripe_pk());

            $data = unserialize(base64_decode(session::get('binfo')));

           $user_id=Auth::user()->id;

            $vehicldata=vehicle::find($data['vehicle']);

            $prrice = (float)$vehicldata->price;

            $distance = (float)$data['distance'];

            $price=$prrice*$distance;

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

            $booking->coll_ppostal_code = $data['pc1'] ?? null; 

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



            $booking->save();

               \Stripe\Charge::create(array(

                   "amount" => $prrice * 100,

                   "currency" => "usd",

                   "source" => $request->input('stripeToken'), 

                   "description" => "Test payment."

               ));

                $user = User::find(Auth::user()->id);

                 $data = array('data'=>$booking,'user'=>$user);

                Mail::send('invoice', $data, function($message) use ($request,$user) {

                    $message->to($user->email,$user->name)->subject

                    ('Fast Uk Booking Confirm...');

                    $message->from('fastuk@gmail.com','Fast Uk');

                });
                Session::flash ( 'success-message', 'Payment done successfully !' );

            return Redirect::back ();

    }
}

