<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	// public function __construct(Guard $auth, Registrar $registrar)
	// {
	// 	$this->auth = $auth;
	// 	$this->registrar = $registrar;
	//
	// 	$this->middleware('guest', ['except' => 'getLogout']);
	// }

	public function authenticate( Request $request )
	{
		// Tetapkan variables untuk data login
		$email = $request->input('email');
		$password = $request->input('password');

		// Jalankan arahan semakan data login
		if ( Auth::attempt( ['email' => $email, 'password' => $password ] ) )
		{
			// Jika berjaya login, redirect ke panel admin
			// atau ke halaman yang ingin diakses
			return redirect()->intended('admin');
		}

		// Jika tak berjaya login, redirect kembali ke halaman sebelum
		return redirect()->back();
	}

	public function logout()
	{
		// Semak jika ada rekod login
		if( Auth::check() )
		{
			// Jika akses masih ada, log out kan user
			Auth::logout();
		}

		// Redirect ke halaman login
		return redirect('login');
	}

}
