<?php

use Illuminate\Database\Migrations\Migration;

class CreateAlumniTable1 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alumni_educ', function($table)
	    {
	    	$table->integer('alumni_id')->unsigned();
	        $table->foreign('alumni_id')->references('id')->on('alumni');
	        $table->string('id_number')->unique();
	        $table->string('course');
	        $table->string('major');
	        $table->integer('batch_year');
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
		Schema::drop('alumni_educ');
	}

}