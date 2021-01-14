<?php

use Illuminate\Support\Facades\Route;

Route::group(['as'=>'admin.', 'prefix'=>'admin', 'namespace'=>'Admin','middleware'=>['auth','role:admin']], function(){
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

