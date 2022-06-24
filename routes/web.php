<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', [App\Http\Controllers\MainController::class, 'home'])->name('home');
Route::get('/movie', [App\Http\Controllers\MainController::class, 'movie'])->name('movie.movie');
Route::get('/movie-details/{id}', [App\Http\Controllers\MainController::class, 'movieDetails'])->name('movie.movieDetails');
Route::get('/pricing', [App\Http\Controllers\MainController::class, 'pricing'])->name('pricing.pricing');
Route::get('/details/{id}', [App\Http\Controllers\MainController::class, 'details'])->name('details.details');
Route::get('/contact-us', [App\Http\Controllers\MainController::class, 'contact'])->name('contact.contact');
Route::post('/netflix-contact', [App\Http\Controllers\MainController::class, 'save'])->name('contact.contactSave');

Route::get('paywithpaypal', array('as' => 'paywithpaypal','uses' => 'App\Http\Controllers\PaypalController@payWithPaypal',));
Route::post('paypal', array('as' => 'paypal','uses' => 'App\Http\Controllers\PaypalController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'status','uses' => 'App\Http\Controllers\PaypalController@getPaymentStatus',));
