<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/admin/login', 'Admin\AdminloginController@index')->name('admin.login');
    Route::get('/admin/forgotpassword', 'Admin\AdminloginController@forgotPassword')->name('admin.forgotpassword');
});
