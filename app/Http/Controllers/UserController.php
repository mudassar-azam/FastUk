<?php

namespace App\Http\Controllers;

use App\Models\guest_booking;
use App\Models\User;
use App\Models\user_booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //


    public function bookings(){

        $id=Auth::user()->id;
        $userdata=User::find($id);
        $booking=user_booking::where('user_id',$id)->paginate(8);
        return view('pages.userbookings',compact('booking','userdata'));
    }

    public function usercancaelbooking()
    {
         $id=Auth::user()->id;
         $userdata=User::find($id);
        $booking=user_booking::where('user_id',$id)->where('status', 'cancel')->paginate(8);
        return view('pages.usercancelbooking',compact('booking', 'userdata')); 
    }

      public function userprogressbooking()
    {
         $id=Auth::user()->id;
         $userdata=User::find($id);
        $booking=user_booking::where('user_id',$id)->where('status', 'progress')->paginate(8);
        return view('pages.userprogressbooking',compact('booking','userdata')); 
    }

      public function usercompletebooking()
    {
         $id=Auth::user()->id;
         $userdata=User::find($id);
        $booking=user_booking::where('user_id',$id)->where('status', 'complete')->paginate(8);
        return view('pages.usercompletebooking',compact('booking', 'userdata')); 
    }

    public function profile(){
        $id=Auth::user()->id;
        $userdata=User::find($id);
        return view('pages.userprofile',compact('userdata'));

    }
    public function editprofile(){
        $id=Auth::user()->id;
        $userdata=User::find($id);
        return view('pages.user-editprofile',compact('userdata'));

    }
 public function saveprofile(Request $request){


        $id=Auth::user()->id;
        $user=User::find($id);
        $user->name=$request->name;
        $user->phone=$request->phone;
        $user->telephone=$request->telephone;
        $user->address=$request->address;
        $user->company_name = $request->company_name;
        $user->company_vet = $request->company_vet;
        $user->company_address = $request->company_address;

    if ($request->hasFile('image')) {
    // Delete the old service image (optional)
    $oldImagePath = public_path('authuserimage/' . $user->image);
    if (is_file($oldImagePath)) {
        unlink($oldImagePath);
    }

    // Upload and save the new service image
    $userImage = $request->file('image');
    $userImageName = time() . '_' . $userImage->getClientOriginalName();
    $userImage->move(public_path('authuserimage'), $userImageName);
    $user->image = $userImageName;
}


        $user->update();
       return redirect('/home')->with('success', 'Profile Updated Successfully.');

    }

    public function edituserpassword()
    {
        $id=Auth::user()->id;
        $userdata=User::find($id);
        return view('pages.user-editpassword' ,compact('userdata'));
    }

    public function changeuserPassword(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|min:8',
        'confirm_password' => 'required|same:new_password',
    ]);

    // Get the authenticated user
    $user = Auth::user();

    // Verify the current password
    if (!Hash::check($validatedData['current_password'], $user->password)) {
        return redirect()->back()->with('error', 'Current password is incorrect.');
    }

    // Update the user's password
    $user->password = Hash::make($validatedData['new_password']);
    $user->save();

    return redirect()->back()->with('success', 'Password changed successfully.');
}

    public function update_balance(Request $request){



        if(isset($request->submit_type) && $request->submit_type == 'stript'){

            \Stripe\Stripe::setApiKey('sk_test_51IMTL2E3aOKhVh4WyoVGpRVN2KkGbwKf3HiLl3FnbGaFYNy0sxpNRDyQxYXBfE6DWUOMsk4KoMg5TPrP6t61A8uY00m8QWvsR0');

            \Stripe\Charge::create(array(
                "amount" => $request->balance * 100,
                "currency" => "usd",
                "source" => $request->input('stripeToken'), // obtained with Stripe.js
                "description" => "Test Fastuk payment."
            ));

            $id = Auth::user()->id;
            $user = User::find($id);
            $prev_bal = $user->balance;
            $user->balance = $prev_bal + $request->balance;
            $user->update();
            Session::flash('success-message', 'Balance Added');
            return redirect()->back();

        }else {


            $id = Auth::user()->id;
            $user = User::find($id);
            $prev_bal = $user->balance;
            $user->balance = $prev_bal + $request->balance;
            $user->update();
            Session::flash('success-message', 'Balance Added');
            return 'ok';

        }

    }
}
