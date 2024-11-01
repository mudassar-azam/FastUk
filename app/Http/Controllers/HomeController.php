<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\user_booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserExtraAddresses;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $id=Auth::user()->id;
        $userdata=User::find($id);
        $booking=user_booking::where('user_id',$id)->orderBy('id', 'desc')->take(8)->get();
        $allbooking=user_booking::where('user_id',$id)->count();
        $allbooking_p=user_booking::where('user_id',$id)->sum('price');
        $pending=user_booking::where('user_id',$id)->where('status','pending')->count();
        $inprogress=user_booking::where('user_id',$id)->where('status','progress')->count();
        $cancel=user_booking::where('user_id',$id)->where('status','cancel')->count();
        $complete=user_booking::where('user_id',$id)->where('status','complete')->count();
        return view('dashboard',compact('userdata','booking','complete','allbooking','inprogress','cancel','pending','allbooking_p'));

    }

    public function extra($id)
    {
        $book_id = $id;
        $id=Auth::user()->id;
        $userdata=User::find($id);
        $booking=user_booking::find($book_id);
        $allbooking=user_booking::where('user_id',$id)->count();
        $allbooking_p=user_booking::where('user_id',$id)->sum('price');
        $pending=user_booking::where('user_id',$id)->where('status','pending')->count();
        $inprogress=user_booking::where('user_id',$id)->where('status','progress')->count();
        $cancel=user_booking::where('user_id',$id)->where('status','cancel')->count();
        $complete=user_booking::where('user_id',$id)->where('status','complete')->count();
        $cbooking=UserExtraAddresses::where('booking_id', $book_id)->where('address_type' , 'collection')->orderBy('id', 'desc')->get();
        $dbooking=UserExtraAddresses::where('booking_id', $book_id)->where('address_type' , 'delivery')->orderBy('id', 'desc')->get();
        return view('extra',compact('userdata','booking','cbooking','dbooking','complete','allbooking','inprogress','cancel','pending','allbooking_p'));

    }

}
