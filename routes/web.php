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

Route::get('/', function () {
    return view('welcome');
});
Route::group([
    'prefix'     => 'front',
    'namespace'  => 'Front',
], function () { // custom admin routes
    Route::get('hotel', 'HotelController@index')->name('front.hotel.index');
    Route::post('hotel', 'HotelController@store')->name('front.hotel.store');
    Route::get('hotel/edit/{id}', 'HotelController@edit')->name('front.hotel.edit');
    Route::post('hotel/update/{id}', 'HotelController@update')->name('front.hotel.update');
    Route::get('room/{id}', 'RoomController@index')->name('all.room');
    Route::get('user/{id}', 'UserController@show')->name('show.user');
    Route::get('user/edit/{id}', 'UserController@edit')->name('edit.user');
    Route::post('user/update/{id}', 'UserController@store')->name('store.user');
});
