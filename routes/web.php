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

Route::group(['namespace'=>'Front'], function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::post('user/add', 'HomeController@addUser')->name('user.add');
    Route::post('email/send', 'HomeController@sendEmail')->name('email.send');
});

Auth::routes();

Route::group(['middleware'=>['auth','verified']], function(){
    Route::get('/home', 'HomeController@index')->name('dashboard');
    Route::get('/{role}/profile', 'HomeController@profile')->name('profile');
    Route::post('/account/profileUpdate', 'HomeController@profileUpdate')->name('profile.update');
    Route::post('/account/passwordUpdate', 'HomeController@passwordUpdate')->name('password.update');
    Route::post('/uploadImage', 'HomeController@uploadImage')->name('uploadImage');
});
