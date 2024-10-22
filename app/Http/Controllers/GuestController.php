<?php



namespace App\Http\Controllers;



use App\Models\guest;

use App\Models\guest_booking;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use App\Models\GuestExtraAddresses;
use Illuminate\Support\Str;
use Mail;

class GuestController extends Controller

{
    public function guestBooking(Request $request)
    {
       

        try {
            $track_id = Str::random(12); 
    
            $already_id = guest::where('track_id', $track_id)->first();
    
            if ($already_id != null) {
                return response()->json(['status' => 'already_id']);
            }
    
            $guest = new guest();
            $guest->track_id = $track_id;
            
            $guest->save();
    
            
            return response()->json(['status' => 'done', 'track_id' => $guest->track_id]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    public function getlogin(Request $request)
    {
      return view("auth.guestlogin");
    }
    
    public function guestlogin(Request $request)
    {
    
                $trackId = $request->trackid;
            
                $check = guest::where('track_id', $trackId)->first();
            
                if (is_null($check)) {
                    return response()->json(['status' => 0]);
                }
            
                return response()->json(['status' => 1]);
            }
        
    
    
        public function logged(Request $request)
        {
            $track_id=$request->track_id;
    
            $check=guest::where('track_id',$track_id)->first();
    
            if($check == null){
    
                return response()->json(['status'=>0]);
    
            }else{
                   session()->put('track_id', $check->track_id);
    
            $booking = guest_booking::where('guest_id', $check->track_id)->get();
    
            return view('pages.guest_home', compact('booking'));
        }
    }
        

    public function index(Request $request){



        $name=$request->name;

        $fname=$request->fname;

        $phone=$request->phone;

        $address=$request->address;


        $track_id=$request->track_id;



        $alreadyguest = guest::where('phone',$phone)->first();

        $already_id = guest::where('track_id',$track_id)->first();



//        if ($alreadyguest == null){





        if ($already_id != null) {



            return response()->json(['status' => 'already_id']);





        }



            $guest= new guest();

            $guest->track_id =$track_id;

            $guest->name = $name;

            $guest->email = $request->email;

            $guest->fname = $fname;

            $guest->phone = $phone;

            $guest->address = $address;



            $guest->save();



            $data = array('guest_id'=>$track_id);

            // Mail::send('email', $data, function($message) use ($request) {

            //     $message->to($request->email, $request->name)->subject

            //     ('Fast uk Guest Account');

            //     $message->from('fastuk@gmail.com','Fast Uk');

            // });



            return response()->json(['status' => 'done','track_id'=>$guest->track_id]);





//        }else{

//            return response()->json(['status' => 'erroroccur']);

//        }



    }



    public function login(Request $request){



        $track_id=$request->trackid;



        $check=guest::where('track_id',$track_id)->first();

        if($check == null){

            return response()->json(['status'=>0]);

        }else{

            return response()->json(['status'=>1]);



        }



    }



    public function guest_home(Request $request){



        Session::put('guest_track_id',$request->trackid);



        return response()->json(['status'=>1]);

    }

    public function destroy(){



        Session::forget('guest_track_id');



        return redirect('/');

    }

    public function page_guest_home(){



        $id=session::get('guest_track_id');

        $booking=guest_booking::where('guest_id',$id)->get();

        return view('pages.guest_home',compact('booking'));

    }

    public function extra($id){


        $booking = GuestExtraAddresses::where('booking_id',$id)->get();

        return view('g-extra',compact('booking'));

    }



}

