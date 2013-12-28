<?php

class AdminController extends BaseController {

	public function showAdminDashboard() 
	{
		return View::make('admin/admin_dashboard')
			->with('title', 'Dashboard');
	}

	public function showAdminConversations() 
	{
		return	View::make('admin/admin_conversations')
			->with('title', 'Conversations');
	}

	public function showManageAdminUniversities() 
	{
		return	View::make('admin/admin_manage_universities')
			->with('title', 'Manage Universities');
	}

	public function showManageAdminAlumni() 
	{
		return	View::make('admin/admin_manage_alumni')
			->with('title', 'Manage Alumni');
	}

	public function showManageAdminAdministrators() 
	{
		return	View::make('admin/admin_manage_administrators')
			->with('title', 'Manage Administrators');
	}

	public function showAdminStats() 
	{
		return	View::make('admin/admin_statistics')
			->with('title', 'Statistics');
	}

	public function showAdminBroadcasts() 
	{
		return	View::make('admin/admin_broadcasts')
			->with('title', 'Broadcasts');
	}
}