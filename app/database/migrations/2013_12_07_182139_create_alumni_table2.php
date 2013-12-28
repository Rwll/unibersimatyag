<?php

use Illuminate\Database\Migrations\Migration;

class CreateAlumniTable2 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alumni_employment', function($table)
	    {
	    	$table->integer('alumni_id')
	    		  ->unsigned();
	        $table->foreign('alumni_id')
	        	  ->references('alumni_id')
	        	  ->on('alumni_educ');
	        $table->string('job_position');
	        $table->string('company');
	        $table->integer('salary');
	        $table->enum('employment_type',
	        		array('full_time','part_time', 'casual', 'contractual'));
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
		Schema::drop('alumni_employment');
	}

}