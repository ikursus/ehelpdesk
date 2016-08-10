<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		DB::table('users')->delete();

		// User 1
    User::create([
			'username' => 'admin',
			'email' => 'admin@gmail.com',
			'name' => 'Ali Baba',
			'password' => bcrypt('admin'),
			'role' => 'admin'
		]);

		// User 2
		User::create([
			'username' => 'staff',
			'email' => 'staff@gmail.com',
			'name' => 'Ahmad Albab',
			'password' => bcrypt('staff'),
			'role' => 'staff'
		]);

		// User 3
		User::create([
			'username' => 'demo',
			'email' => 'demo@gmail.com',
			'name' => 'John Doe',
			'password' => bcrypt('demo'),
			'role' => 'user'
		]);

	}

}
