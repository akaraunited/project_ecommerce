<?php

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

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('public.index');
// });
Route::namespace('Frontend')->group(function(){
    Route::get('/','ListingController@index')->name('app.index');
    Route::get('/about','ListingController@about')->name('app.about');
    Route::get('/kitchen','ListingController@kitchen')->name('app.kitchen');
    Route::get('/household','ListingController@household')->name('app.household');
    Route::get('/faqs','ListingController@faqs')->name('app.faqs');
    Route::get('/icons','ListingController@icons')->name('app.icons');
    Route::get('/typography','ListingController@typography')->name('app.typography');
    Route::get('/contact','ListingController@contact')->name('app.contact');
});
Route::prefix('layout')->group(function(){
  Route::post('/register','AuthController@register')->middleware('guest')->name('register');
  Route::post('/login','AuthController@login')->middleware('guest')->name('login');
  Route::post('/logout','AuthController@logout')->name('logout');
    
});