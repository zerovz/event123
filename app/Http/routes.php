<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'EventsController@index');
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::resource('events','EventsController');

Route::get('{date}/{title}', 'EventsController@show');
Route::get('events/sell/{id}', 'EventsController@sell');
Route::get('events/generate/{id}/{price}', 'EventsController@generate');

Route::get('ticket/', 'TicketController@index');
Route::post('ticket/', 'TicketController@update');