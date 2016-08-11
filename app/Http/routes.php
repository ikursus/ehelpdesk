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

Route::get('/', 'PageController@index');
Route::get('/login', 'PageController@login');
Route::post('/login', 'Auth\AuthController@authenticate');
Route::get('/hubungi', 'PageController@hubungi');
Route::get('/respon', 'PageController@respon');


// Route admin
Route::group( [ 'prefix' => 'admin' ], function() {

	// Route bagi folder admin
	Route::get('/', 'PageController@admin');
	Route::get('/dashboard', 'PageController@dashboard');

	// Route berkaitan users
	// Akan paparkan senarai users
	Route::get('/users', 'UserController@index');

	// Akan paparkan borang tambah user
	Route::get('/users/tambah', 'UserController@create');
	Route::post('/users/tambah', 'UserController@store');

	// akan paparkan detail / profile user
	Route::get('/users/{id}', 'UserController@show');
	Route::patch('/users/{id}', 'UserController@update');
	Route::get('/users/{id}/delete', 'UserController@destroy');

	// Pengurusan tickets
	Route::get('/tickets', 'TicketController@index');
	Route::get('/tickets/{id}', 'TicketController@show');
	Route::get('/logout', 'Auth\AuthController@logout');

}); // Tutup kepada route group
