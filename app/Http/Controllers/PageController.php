<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$page_title = 'Halaman Utama';

		// view() bermaksud cari template dari folder resources/view
		return view('home', compact('page_title') );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function login()
	{
		$page_title = 'Halaman Login';

		return view('login', compact('page_title'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function hubungi()
	{
		$page_title = 'Halaman Hubungi';

		return view('hubungi', compact('page_title'));
	}


	public function respon()
	{
		$page_title = 'Halaman Respon';

		return view('respon', compact('page_title'));
	}

	public function dashboard()
	{
		// cari folder resources/views/admin/dashboard.blade.php
		return view('admin/dashboard');
	}

	public function admin()
	{
		// Fungsi redirect ke halaman lain
		return redirect('admin/dashboard');
	}

}
