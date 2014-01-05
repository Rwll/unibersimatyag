<?php

class University extends Eloquent {

	protected $table = 'universities';

	public static $rules = array(
        'name'  	     => 'required',
        'website'  		 => 'required',
        'email'	   		 => 'required',
        'contact_number' => 'required',
        'email'	    	 => 'required',
        'address'	     => 'required',
        'description'	 => 'required'
    );

	public static function validate($data){
	    return Validator::make($data,self::$rules);
	}
}