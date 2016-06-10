<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::resource('roles', 'RolesController');

Route::resource('organizations', 'OrganizationsController');

Route::resource('users', 'UsersController');

Route::resource('offers', 'OffersController');

Route::resource('rooms', 'RoomsController');



Route::resource('booking_engines', 'Booking_enginesController');

Route::resource('booking_engine_settings', 'Booking_engine_settingsController');

Route::resource('booking_engine_details', 'Booking_engine_detailsController');

Route::resource('email_templates', 'Email_templatesController');

Route::resource('email_addresses', 'Email_addressesController');

Route::resource('email_settings', 'Email_settingsController');

Route::resource('outboxes', 'OutboxesController');