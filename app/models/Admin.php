<?php

class Admin extends Eloquent {

	protected $table = 'admins';

	public static $rules = array(
                'id'        => 'required|alpha|unique:admins',
                'first_name'        => 'required|alpha',
                'last_name'        => 'required|alpha'
    );

	public static function validate($data){
	    return Validator::make($data,self::$rules);
	}
}