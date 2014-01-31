<?php

//Super Admin

Route::group(array('before' => 'guest'),function(){
	Route::get('/admin_login',array(
        'as'    =>  'admin-login',
        'uses'  =>  'AdminController@showAdminLogin'
	));

	Route::post('/validate_admin_login',array(
        'as'    =>  'admin-login-go',
        'uses'  =>  'AdminController@goLogin'
	));
});

Route::group(array('prefix' => 'admin', 'before' => 'auth.admin'),function(){
        
    Route::get('logout',array(
        'as'    =>  'admin-out',
        'uses'  =>  'AdminController@goLogout'
    ));

	Route::get('/admin_dashboard', array(
		'as'	=>	'admin-dashboard',
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

	Route::get('/admin_profile', array(
		'as'	=>	'admin-profile',
		'uses'	=>	'AdminController@showAdminProfile'
	));

	Route::get('/admin_account_settings', array(
		'as'	=>	'admin-account-settings',
		'uses'	=>	'AdminController@showAdminAccountSettings'
	));

	Route::get('/admin_activity_logs', array(
		'as'	=>	'admin-activity-logs',
		'uses'	=>	'AdminController@showAdminActivityLogs'
	));
	
	//Manage Universities

	Route::post('/view_universities', array(
            'as'   => 'view-universities',
            'uses' => 'AdminController@viewUniversities'
    ));

	Route::post('/add_university', array(
            'as'   => 'add-university',
            'uses' => 'AdminController@addUniversity'
    ));

	Route::get('/add_university_failed', array(
            'as'   => 'add-university-failed',
            'uses' => 'AdminController@addUniversityFailed'
    ));

	Route::get('/add_university_success', array(
            'as'   => 'add-university-success',
            'uses' => 'AdminController@addUniversitySuccess'
    ));
});

// End Super Admin


// University Admin

/* Route::group(array('before' => 'guest'),function(){
	Route::get('uadmin/uadmin_login',array(
        'as'    =>  'univ-admin-login',
        'uses'  =>  'UniversityAdminController@showUAdminLogin'
	));
*/
Route::get('/univ_admin_dashboard', array(
	'as'	=>	'univ-admin-dashboard',
	'uses'	=>	'UniversityAdminController@showUnivAdminDashboard'
));

Route::get('/univ_admin_conversations', array(
	'as'	=>	'univ-admin-conversations',
	'uses'	=>	'UniversityAdminController@showUnivAdminConversations'
));

Route::get('/univ_admin_manage_departments', array(
	'as'	=>	'univ-admin-manage-departments',
	'uses'	=>	'UniversityAdminController@showUnivAdminManageDepartments'
));

Route::get('/univ_admin_manage_alumni', array(
	'as'	=>	'univ-admin-manage-alumni',
	'uses'	=>	'UniversityAdminController@showUnivAdminManageAlumni'
));

Route::get('/univ_admin_statistics', array(
	'as'	=>	'univ-admin-statistics',
	'uses'	=>	'UniversityAdminController@showUnivAdminStats'
));

Route::get('/univ_admin_profile', array(
		'as'	=>	'univ-admin-profile',
		'uses'	=>	'UniversityAdminController@showUnivAdminProfile'
));

Route::get('/univ_admin_account_settings', array(
		'as'	=>	'univ-admin-account-settings',
		'uses'	=>	'UniversityAdminController@showUnivAdminAccountSettings'
));

Route::get('/univ_admin_activity_logs', array(
		'as'	=>	'univ-admin-activity-logs',
		'uses'	=>	'UniversityAdminController@showUnivAdminActivityLogs'
));


// End University Admin

// Alumni

Route::get('/home', array(
	'as'	=>	'home',
	'uses'	=>	'AlumniController@showHome'
));

Route::get('/universities', array(
	'as'	=>	'universities',
	'uses'	=>	'AlumniController@showUniversities'
));

Route::get('/events', array(
	'as'	=>	'events',
	'uses'	=>	'AlumniController@showEvents'
));

Route::get('/gallery', array(
	'as'	=>	'gallery',
	'uses'	=>	'AlumniController@showGallery'
));

Route::get('/contact', array(
	'as'	=>	'contact',
	'uses'	=>	'AlumniController@showContact'
));

Route::get('/about_us', array(
	'as'	=>	'about-us',
	'uses'	=>	'AlumniController@showAboutUs'
));

Route::get('/register_alumni_pg1', array(
	'as'	=>	'register-alumni-pg1',
	'uses'	=>	'AlumniController@showRegisterPg1'
));

Route::get('/register_alumni_pg2', array(
	'as'	=>	'register-alumni-pg2',
	'uses'	=>	'AlumniController@showRegisterPg2'
));

Route::get('/register_alumni_pg3', array(
	'as'	=>	'register-alumni-pg3',
	'uses'	=>	'AlumniController@showRegisterPg3'
));

Route::get('/register_alumni_pg4', array(
	'as'	=>	'register-alumni-pg4',
	'uses'	=>	'AlumniController@showRegisterPg4'
));
// End Alumni
