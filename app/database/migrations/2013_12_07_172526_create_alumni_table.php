<?php

use Illuminate\Database\Migrations\Migration;

class CreateAlumniTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alumni', function($table)
	    {
	        $table->increments('id');
	        $table->string('first_name');
	        $table->string('last_name');
	        $table->string('middle_name');
	        $table->enum('gender',array('male','female'));
	        $table->date('birth_date');
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
		Schema::drop('alumni');
	}

}