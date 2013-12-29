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
Route::get('/admin_login',array(
        'as'        =>        'admin-login',
        'uses'        =>        'AdminController@showAdminLogin'
));

Route::post('admin/admin_login',array(
        'as'        =>        'admin-login-go',
        'uses'        =>        'AdminController@goLogin'
));

Route::group(array('prefix' => 'admin', 'before' => 'auth.admin'),function(){
        
    Route::get('logout',array(
            'as'        =>        'admin-out',
            'uses'        =>        'AdminController@goLogout'
    ));

	Route::get('/admin_dashboard', array(
		'as'	=>	'home_routeA1',
		'uses'	=>	'AdminController@showAdminDashboard'
	));

	Route::get('/', array(
		'as'	=>	'home_routeA',
		'uses'	=>	'AdminController@showAdminDashboard'
	));

	Route::get('/admin_conversations', array(
		'as'	=>	'admin-conversations',
		'uses'	=>	'AdminController@showAdminConversations'
	));

	Route::get('/admin_manage_universities', array(
		'as'	=>	'admin-manage-universities',
		'uses'	=>	'AdminController@showManageAdminUniversities'
	));

	Route::get('/admin_manage_alumni', array(
		'as'	=>	'admin-manage-alumni',
		'uses'	=>	'AdminController@showManageAdminAlumni'
	));

	Route::get('/admin_manage_administrators', array(
		'as'	=>	'admin-manage-admins',
		'uses'	=>	'AdminController@showManageAdminAdministrators'
	));

	Route::get('/admin_statistics', array(
		'as'	=>	'admin-statistics',
		'uses'	=>	'AdminController@showAdminStats'
	));

	Route::get('/admin_broadcasts', array(
		'as'	=>	'admin-broadcasts',
		'uses'	=>	'AdminController@showAdminBroadcasts'
	));
});
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
Route::get('/register_alumni_pg1', 'UniversityAdminController@showRegisterAlumni1');
Route::get('/register_alumni_pg2', 'UniversityAdminController@showRegisterAlumni2');
Route::get('/register_alumni_pg3', 'UniversityAdminController@showRegisterAlumni3');
Route::get('/register_alumni_pg4', 'UniversityAdminController@showRegisterAlumni4');
/*End University Admin*/