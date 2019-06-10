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
    'namespace' => 'Front',
], function () { // custom admin routes

    Route::get('/', 'HomeController@index')->name('front.home.index');
    Route::get('hotel/{id}', 'HotelController@index')->name('front.hotel.index');
    Route::get('hotel/search', 'HotelController@search')->name('front.hotel.search');
    Route::get('hotel/show/{id}', 'HotelController@show')->name('front.hotel.show');
    Route::get('hotel', 'HotelController@create')->name('front.hotel.create');
    Route::post('hotel', 'HotelController@store')->name('front.hotel.store');
    Route::get('hotel/edit/{id}', 'HotelController@edit')->name('front.hotel.edit');
    Route::post('hotel/update/{id}', 'HotelController@update')->name('front.hotel.update');

    Route::get('room/ad-search', 'RoomController@searchAdvance')->name('show.search-ad');
    Route::get('room/create', 'RoomController@create')->name('add.room');
    Route::get('room/{id}', 'RoomController@index')->name('all.room');
    Route::get('room/active/{id}', 'RoomController@getActive')->name('active.room');
    Route::get('room/unactive/{id}', 'RoomController@getUnactive')->name('unactive.room');
    Route::get('room/edit/{id}', 'RoomController@edit')->name('edit.room');
    Route::post('room/store/', 'RoomController@store')->name('store.room');
    Route::get('room/convenience/{id}', 'RoomController@convenience')->name('convenience.room');
    Route::post('room/convenience/{id}', 'RoomController@updateConvenience')->name('convenience.update');
    Route::post('room/image/{id}', 'RoomController@image')->name('image.room');
    Route::post('room/price/{id}', 'RoomController@price')->name('price.room');
    Route::get('room/show/{id}', 'RoomController@show')->name('show.room');
    Route::post('room/search', 'RoomController@search')->name('show.search');
    Route::get('room/search/{idProvince}', 'RoomController@searchProvince')->name('show.search-province');


    Route::get('user/{id}', 'UserController@show')->name('show.user');
    Route::get('user/edit/{id}', 'UserController@edit')->name('edit.user');
    Route::post('user/update/{id}', 'UserController@store')->name('store.user');
    Route::post('user/store/{id}', 'UserController@store')->name('store.user');
    Route::post('user/update/{id}', 'UserController@update')->name('update.user');

    Route::get('order/show/{id}', 'OrderController@show')->name('show.order');
    Route::get('order/guest/in/{id}', 'OrderController@guestIn')->name('guest.in');
    Route::get('order/guest/out/{id}', 'OrderController@guestOut')->name('guest.out');
    Route::get('order/guest/at/{id}', 'OrderController@guestAt')->name('guest.at');

    Route::get('feedback/room/{id}', 'FeedbackController@feedback')-> name('feedback');
    Route::post('feedback/room/{id}', 'FeedbackController@store')-> name('store.feedback');
    Route::post('order/set-order/{id}', 'OrderController@setOrder')->name('set.order');
    Route::post('order/update/{id}', 'OrderController@update')->name('update.order');
    Route::get('order/myorder/{id}', 'OrderController@showOrder')->name('my.order');
    Route::get('room/detail/{id}', 'RoomController@detail')->name('room.detail');
    Route::get('order/accept/{id}', 'OrderController@accept')->name('accept.order');
    Route::get('order/destroy/{id}', 'OrderController@destroy')->name('destroy.order');
    Route::get('event/create/{id}', 'EventController@create')->name('create.event');


    //auth
    // Authentication Routes...
    Route::group([
        'prefix' => 'front',
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

