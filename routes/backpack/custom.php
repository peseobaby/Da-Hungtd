<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin', 'is_admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    CRUD::resource('address', 'AddressCrudController');
    CRUD::resource('hotel', 'HotelCrudController');
    CRUD::resource('convenience', 'ConvenienceCrudController');
    CRUD::resource('room', 'RoomCrudController');
    CRUD::resource('room-type', 'RoomTypeCrudController');
    Route::post('address/get-city', 'AddressCrudController@getCity')->name('crud.address.get-city');
    CRUD::resource('event', 'EventCrudController');
    CRUD::resource('order', 'OrderCrudController');
    CRUD::resource('user', 'UserCrudController');
    CRUD::resource('provide', 'ProvideCrudController');
    CRUD::resource('city', 'CityCrudController');
}); // this should be the absolute last line of this file