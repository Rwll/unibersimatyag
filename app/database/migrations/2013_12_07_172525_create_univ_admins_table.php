<?php

use Illuminate\Database\Migrations\Migration;

class CreateUnivAdminsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('univ_admins', function($table)
	    {
	        $table->string('first_name');
	        $table->string('last_name');
	        $table->string('middle_name');
	        $table->string('university');
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
		Schema::drop('univ_admins');
	}

}