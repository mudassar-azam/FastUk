<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::redirect('/admin', '/public/admin');

Route::get('/1', function () {
    return view('welcome');
});



Route::get('/', function () {
    $binfo = unserialize(base64_decode(session('binfo')));
    session()->forget('binfo');
    return view('landing');
});


Route::post('/tradeaccountform', [FrontController::class, 'tradeaccountform'])->name('tradeaccountform');


Route::get('rebook/{id}', [BookController::class, 'rebookview']);


Route::get('/paypal', function () {
    return view('products.welcome');
});



Route::post('to', '\App\Http\Controllers\StripeController@payment');


Route::post('/getdistance', '\App\Http\Controllers\FrontController@getdistance')->name('get.distance');
Route::post('/store-address-fieldsets', [FrontController::class, 'storeAddressFieldsets'])->name('storeSession');
Route::post('/check_datetime', '\App\Http\Controllers\FrontController@check_datetime')->name('check.datetime');


Route::post('/createsession', '\App\Http\Controllers\FrontController@create_session')->name('create.session');


Route::post('/book/byguest', '\App\Http\Controllers\BookController@book_bookings')->name('book.bookings');
Route::post('/book/rebook', '\App\Http\Controllers\BookController@rebook_bookings')->name('rebook.bookings');


Auth::routes();
Route::post('guest/booking', '\App\Http\Controllers\StripeController@guest_booking');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/extra-addresses/{id}', [App\Http\Controllers\HomeController::class, 'extra'])->name('addresses.extra');
Route::post('/createguest', [App\Http\Controllers\GuestController::class, 'index'])->name('create.guest');
Route::post('/loginguest', [App\Http\Controllers\GuestController::class, 'login'])->name('login.guest');
Route::get('/homeguest', [App\Http\Controllers\GuestController::class, 'guest_home'])->name('home.guest');
Route::get('/destroyguest', [App\Http\Controllers\GuestController::class, 'destroy'])->name('destroy.guest');
Route::get('/guest-home-page', [App\Http\Controllers\GuestController::class, 'page_guest_home'])->name('page.guest_home')->middleware('authguest');
Route::get('/guest-extra-addresses/{id}', [App\Http\Controllers\GuestController::class, 'extra'])->name('guest.extra')->middleware('authguest');

Route::post('/guest-booking', [App\Http\Controllers\GuestController::class, 'guestBooking'])->name('book.guestBooking');
Route::get('/loginguest', [App\Http\Controllers\GuestController::class, 'getlogin'])->name('login.guest');
Route::post('/loginguest', [App\Http\Controllers\GuestController::class, 'guestlogin'])->name('guest.login');
Route::post('/logged', [App\Http\Controllers\GuestController::class, 'logged'])->name('logged');


Route::group(['prefix' => 'user'], function () {

    Route::get('bookings', 'App\Http\Controllers\UserController@bookings');
    Route::get('usercancaelbooking', 'App\Http\Controllers\UserController@usercancaelbooking');
    Route::get('userprogressbooking', 'App\Http\Controllers\UserController@userprogressbooking');
    Route::get('usercompletebooking', 'App\Http\Controllers\UserController@usercompletebooking');
    Route::get('profile', 'App\Http\Controllers\UserController@profile');
    Route::get('edit-profile', 'App\Http\Controllers\UserController@editprofile');
    Route::post('save-profile', 'App\Http\Controllers\UserController@saveprofile');
    Route::post('update-balance', 'App\Http\Controllers\UserController@update_balance');
    Route::get('edit-password', 'App\Http\Controllers\UserController@edituserpassword');
    Route::post('/change-password', [UserController::class, 'changeuserPassword'])->name('changeuserPassword');
    
});

Route::get('/admin', function () {
    return redirect("/public/admin/login.php");
});

Route::get('cache-clear', function () {

    \Artisan::call('config:clear');
});


Route::post('/send-message', [FrontController::class, 'testView']);
