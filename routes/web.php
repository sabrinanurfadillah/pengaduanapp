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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'],  function(){


    Route::group(['prefix' => 'home'], function(){
        Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
        Route::get('/profile', 'App\Http\Controllers\ProfileController@index')->name('profile');
        Route::resource('users', 'App\Http\Controllers\UserController');
        Route::get('/lihatpengaduan', 'App\Http\Controllers\HomeController@lihatpengaduan');
    });

});