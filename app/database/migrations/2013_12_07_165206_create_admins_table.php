<?php

use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admins', function($table)
	    {
	        $table->increments('id');
	        $table->string('first_name');
	        $table->string('last_name');
	        $table->string('middle_name');
	        $table->string('username');
	        $table->string('password');
	        $table->timestamps();
	    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('admins');
	}

}