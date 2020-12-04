<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\AuthController@showFormLogin')->name('login');
Route::get('login', 'App\Http\Controllers\AuthController@showFormLogin')->name('login');
Route::post('login', 'App\Http\Controllers\AuthController@login');
Route::get('register', 'App\Http\Controllers\AuthController@showFormRegister')->name('register');
Route::post('register', 'App\Http\Controllers\AuthController@register');
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('home', 'App\Http\Controllers\HomeController@index')->name('home');
    Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
 
});
