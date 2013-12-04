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

/*Super Admin*/
Route::get('/admin_dashboard', array(
	'as'	=>	'home_routeA1',
	'uses'	=>	'AdminController@showAdminDashboard'
));

Route::get('/', array(
	'as'	=>	'home_routeA',
	'uses'	=>	'AdminController@showAdminDashboard'
));

Route::get('/admin_conversations', 'AdminController@showAdminConversations');
Route::get('/admin_manage_universities', 'AdminController@showManageAdminUniversities');
Route::get('/admin_manage_alumni', 'AdminController@showManageAdminAlumni');
Route::get('/admin_manage_administrators', 'AdminController@showManageAdminAdministrators');
Route::get('/admin_statistics', 'AdminController@showAdminStats');
Route::get('/admin_broadcasts', 'AdminController@showAdminBroadcasts');
/*End Super Admin*/

/*University Admin*/
Route::get('/uadmin_dashboard', array(
	'as'	=>	'home_routeUA1',
	'uses'	=>	'UniversityAdminController@showUAdminDashboard'
));

Route::get('/', array(
	'as'	=>	'home_routeUA',
	'uses'	=>	'UniversityAdminController@showUAdminDashboard'
));

Route::get('/uadmin_conversations', 'UniversityAdminController@showUAdminConversations');
Route::get('/uadmin_manage_alumni', 'UniversityAdminController@showUManageAdminAlumni');
Route::get('/uadmin_statistics', 'UniversityAdminController@showUAdminStats');
Route::get('/uadmin_broadcasts', 'UniversityAdminController@showUAdminBroadcasts');
/*End University Admin*/