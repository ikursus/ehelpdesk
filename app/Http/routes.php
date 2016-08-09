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

	return 'Ini adalah halaman utama';

});

Route::get('/login', function() {

	return 'Ini adalah halaman login';

});

Route::get('/hubungi', function() {

	return 'Ini adalah halaman hubungi';

});

Route::get('/respon', function() {

	return 'Ini adalah halaman respon';

});

// Route parameters
Route::get('admin/dashboard', function() {

	return 'Ini Dashboard Admin';

});

Route::get('admin/users', function() {

	return 'Ini halaman senarai users';

});


Route::get('admin/tickets', function() {

	return 'Ini halaman senarai tickets support.';

});


Route::get('admin/users/{id}', function() {

	return 'Ini halaman senarai profile user.';

});


Route::get('admin/tickets/{id}', function() {

	return 'Ini halaman detail support ticket.';

});

Route::get('admin/users/tambah', function() {

	return 'Ini halaman tambah user.';

});

Route::get('admin/logout', function() {

	return redirect('/login');

});
