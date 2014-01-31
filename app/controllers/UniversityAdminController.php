<?php

class UniversityAdminController extends BaseController {

	/* University Admin Menu */
	public function showUnivAdminDashboard() 
	{
		return View::make('university_admin/univ_admin_dashboard')
				->with('title', 'Dashboard');
	}

	public function showUnivAdminConversations() 
	{
		return View::make('university_admin/univ_admin_conversations')
				->with('title', 'Conversations');
	}

	public function showUnivAdminManageDepartments() 
	{
		return View::make('university_admin/univ_admin_manage_departments')
				->with('title', 'Manage Departments');
	}

	public function showUnivAdminManageAlumni() 
	{
		return View::make('university_admin/univ_admin_manage_alumni')
				->with('title', 'Manage Alumni');
	}

	public function showUnivAdminStats() 
	{
		return View::make('university_admin/univ_admin_statistics')
				->with('title', 'Statistics');
	}

	/* public function showUAdminLogin() 
	{
		return View::make('university_admin/admin_login')
			    ->with('title', 'Login');
	} */

	public function showUnivAdminProfile() 
	{
		return View::make('university_admin/univ_admin_profile')
				->with('title', 'Profile');
	}

	public function showUnivAdminAccountSettings() 
	{
		return View::make('university_admin/univ_admin_account_settings')
				->with('title', 'Account Settings');
	}

	public function showUnivAdminActivityLogs() 
	{
		return View::make('university_admin/univ_admin_activity_logs')
				->with('title', 'Activity Logs');
	}

	/*End Univer... */

}