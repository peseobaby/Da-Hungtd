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


Route::group([
    'namespace'  => 'Front',
], function () { // custom admin routes
    Route::get('/', 'HomeController@index')->name('front.home.index');
    Route::get('hotel', 'HotelController@index')->name('front.hotel.index');
    Route::post('hotel', 'HotelController@store')->name('front.hotel.store');
    Route::get('hotel/edit/{id}', 'HotelController@edit')->name('front.hotel.edit');
    Route::post('hotel/update/{id}', 'HotelController@update')->name('front.hotel.update');
    Route::get('room/{id}', 'RoomController@index')->name('all.room');
    Route::get('user/{id}', 'UserController@show')->name('show.user');
    Route::get('user/edit/{id}', 'UserController@edit')->name('edit.user');
    Route::post('user/update/{id}', 'UserController@store')->name('store.user');
    Route::get('hotel/search', 'HotelController@search')->name('front.hotel.search');

    //auth
    // Authentication Routes...
    Route::group([
        'prefix'  => 'front',
    ], function () {
        Route::get('login', 'Auth\LoginController@showLoginForm')->name('front.auth.login');
        Route::post('login', 'Auth\LoginController@customLogin');
        Route::get('logout', 'Auth\LoginController@logout')->name('front.auth.logout');
        Route::post('logout', 'Auth\LoginController@logout');

        // Registration Routes...
        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('front.auth.register');
        Route::post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('front.auth.password.reset');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('front.auth.password.reset.token');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('front.auth.password.email');
    });


});


