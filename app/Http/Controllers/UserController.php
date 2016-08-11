<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Panggil data dari table users
		// $users = User::all();
		// limitkan rekod untuk per page
		$users = User::paginate(2);

		// $users = User::where('role', '=', 'admin')
		// ->where('created_at', '>=', $date )
		// ->select('name', 'email', '')
		// ->get();
		//
		// $users = User::where('role', '=', 'admin')->get();

		return view('admin/users/index', compact('page_title', 'users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$dropdown = array('admin' => 'Admin', 'user' => 'User');

		// view() laravel akan cari template tambah.blade.php dalam direktori resources/views
		return view('admin/users/tambah', compact('dropdown'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store( Request $request )
	{
		// Validation Form untuk tambah user
		$this->validate( $request, array(
			'username' => 'required|min:3|unique:users,username',
			'email' => 'required|email|unique:users,email',
			'password' => 'confirmed|required|min:3'
		));

		// Request semua data dari input field di borang
		$data = $request->all();

		// $data = $request->only('username', 'email');

		// Simpan data ke table users.
		User::create( $data );

		return redirect('admin/users');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return 'Ini halaman senarai profile user.';
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
