<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/admin_dashboard', array(
	'as'	=>	'home_route',
	'uses'	=>	'AdminController@showWelcome'
));

Route::get('/', array(
	'as'	=>	'home_route2',
	'uses'	=>	'AdminController@showWelcome'
));
Route::get('/admin_conversations', 'AdminController@showAdminConversations');
Route::get('/admin_manage_universities', 'AdminController@showManageAdminUniversities');
