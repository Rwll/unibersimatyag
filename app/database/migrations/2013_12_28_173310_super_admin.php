<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class SuperAdmin extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 $user = new User();
                $user->username = 'admin';
                $user->email = 'llewordelmundo@gmail.com';
                $pass = Hash::make('testadmin');
                $user->password = $pass;
                $user->role = 'admin';
                $user->save();

                $admin = new Admin();
                $admin->id = 1;
                $admin->first_name = 'rowell';
                $admin->last_name = 'canlapan';
                $admin->save();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		User::destroy(1);
	}

}