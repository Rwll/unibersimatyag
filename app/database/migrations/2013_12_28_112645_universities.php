<?php

use Illuminate\Database\Migrations\Migration;

class Universities extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('universities', function($table)
	    {
	        $table->increments('id');
	        $table->string('name');
	        $table->string('website');
	        $table->string('email');
	        $table->string('contact_number');
	        $table->string('address');
	        $table->string('description');
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
		Schema::drop('universities');
	}

}