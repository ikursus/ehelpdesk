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

Route::get('/hubungi', 'PageController@hubungi');

Route::get('/respon', 'PageController@respon');


// Route admin
Route::group( [ 'prefix' => 'admin' ], function() {

	Route::get('/dashboard', function() {

		return 'Ini Dashboard Admin';

	});

	Route::get('/users', function() {

		return 'Ini halaman senarai users';

	});


	Route::get('/tickets', function() {

		return 'Ini halaman senarai tickets support.';

	});


	Route::get('/users/{id}', function() {

		return 'Ini halaman senarai profile user.';

	});


	Route::get('/tickets/{id}', function() {

		return 'Ini halaman detail support ticket.';

	});

	Route::get('/users/tambah', function() {

		return 'Ini halaman tambah user.';

	});

	Route::get('/logout', function() {

		return redirect('/login');

	});

} ); // Tutup kepada route group
