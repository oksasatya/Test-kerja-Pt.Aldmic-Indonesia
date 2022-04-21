<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();

// login
Route::get('/', 'Auth\LoginController@index')->name('login');
Route::post('/', 'Auth\LoginController@login')->name('send.login');

// register
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register')->name('send.register');
// logout
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// landing page
Route::group(['middleware' => 'auth'], function () {
    Route::get('/landing-page', 'LandingPageController@index')->name('landing-page');
});



// // reset password
// // Password reset link request routes...
// Route::get('password/email', 'ForgotPasswordController@showLinkRequestForm')->name('password.email');
// Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail');

// // Password reset routes...
// Route::get('password/reset', 'ResetPasswordController@showResetForm')->name('password.request');
// Route::post('password/reset', 'ResetPasswordController@reset')->name('password.reset');


Route::get('/home', 'HomeController@index')->name('home');
