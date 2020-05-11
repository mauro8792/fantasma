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

//use Utils\Helper;
// use Utils\Twilio;
 
// Route::get('/', function () {
//     $from = '+XXXY';
//     $to   = '+YYYY';
//     $body = 'Hello!';
//     $twilio = new Twilio;
//     try {
//         return $twilio->sendSMS($from, $body, $to);
//     } catch (\Throwable $th) {
//         dd($th);
//     }
   
// });

Route::get('/', function () {
     return view('welcome');
});

Route::get('/send', 'SednMessageController@send');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('lang/{lang}', 'LanguageController@swap')->name('lang.swap');

Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');

// Route::group(['prefix' => 'auth'], function () {
//      Route::get('/{provider}', 'Auth\LoginController@redirectToProvider');
//      Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
//  });