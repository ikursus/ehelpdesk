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

Route::get('/', function() {

	$page_title = 'Halaman Utama';

	// view() bermaksud cari template dari folder resources/view
	return view('home', compact('page_title') );

});

Route::get('/login', function() {

	$page_title = 'Halaman Login';

	return view('login', compact('page_title'));

});

Route::get('/hubungi', function() {

	$page_title = 'Halaman Hubungi';

	return view('hubungi', compact('page_title'));

});

Route::get('/respon', function() {

	$page_title = 'Halaman Respon';

	return view('respon', compact('page_title'));

});

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
