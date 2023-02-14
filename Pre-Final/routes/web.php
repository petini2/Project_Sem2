<?php
namespace App\Http\Controllers;

use App\Http\Controllers\MovieController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Frontend\MovieController as FrontendMovieController;
use App\Http\Controllers\Frontend\OffersController as FrontendOffersController;
use App\Http\Controllers\Frontend\CastListsController as FrontendCastListsController;
use App\Http\Controllers\Frontend\BookingController as FrontendBookingController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// user
Auth::routes();
Route::get('/home',[HomeController::class, 'index'])->name('home');
//user
Route::get('/userindex', [FrontendMovieController::class, 'userindex'])->name('user.userindex');
Route::get('/About', function(){
    return view('user.userabout');
});
Route::get('/cataloge', [FrontendMovieController::class, 'index'])->name('user.cataloge');

Route::get('/detail/{id}', [FrontendCastListsController::class,'show'])->name('user.detail');

Route::get('/faq', function(){
    return view('user.faq');
});
Route::get('/newsandoffers', [FrontendOffersController::class, 'index'])->name('user.offers');

Route::get('/search', [FrontendMovieController::class, 'search'])->name('user.search');
Route::get('/edit', function(){
    return view('user.edit');
});
Route::post('/interestmovie/{id}', [InterestController::class, 'store'])->name('user.markinterest');

Route::get('/interest', 'InterestController@index')->name('user.interest');



Route::patch('user/{user}/update', 'UserController@update')->name('user.update');

Route::post('/alert', 'AlertController@store')->name('alert');
Route::get('/alert', 'AlertController@store')->name('alertn');

Route::get('/showbooking',[FrontendBookingController::class, 'index'])->name('user.booking');
// user
//admin
Route::resource('/ad', AdminController::class);
Route::resource('/show', AShowController::class);
Route::resource('/showtime', AShowtimeController::class);
Route::resource('/movie', AMovieController::class);
Route::resource('/cast', ACastController::class);
Route::resource('/castlist', ACastlistController::class);
Route::resource('/auser', AUserController::class);
Route::resource('/newsoffer', OfferController::class);
//admin
//guest
Route::get('/',[FrontendMovieController::class, 'guest'])->name('guest.layout');
Route::get('/gcataloge', 'GuestController@cataloge');
Route::get('/gdetail/{id}', [FrontendCastListsController::class,'gshow'])->name('guest.detail');
Route::get('/about', function(){
    return view('guest.about');
});
//contact
Route::get('/contact-us', [ContactController::class, 'contact']);

Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');


