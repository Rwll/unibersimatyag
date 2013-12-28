<?php

use Illuminate\Database\Migrations\Migration;

class CreateAlumniTable3 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alumni_contact', function($table)
	    {
	    	$table->integer('alumni_id')
	    		  ->unsigned();
	        $table->foreign('alumni_id')
	        	  ->references('id')
	        	  ->on('alumni');
	        $table->integer('mobile_number')->unique();
	        $table->integer('telephone_number')->unique();
	        $table->string('address');
	        $table->string('email')->unique();
	        $table->string('username')->unique();
	        $table->string('password');
	        $table->primary('alumni_id');
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
		Schema::drop('alumni_contact');
	}

}