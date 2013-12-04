<?php

class AdminController extends BaseController {

	public function showAdminDashboard() 
	{
		return View::make('admin/admin_dashboard');
	}

	public function showAdminConversations() 
	{
		return	View::make('admin/admin_conversations');
	}

	public function showManageAdminUniversities() 
	{
		return	View::make('admin/admin_manage_universities');
	}

	public function showManageAdminAlumni() 
	{
		return	View::make('admin/admin_manage_alumni');
	}

	public function showManageAdminAdministrators() 
	{
		return	View::make('admin/admin_manage_administrators');
	}

	public function showAdminStats() 
	{
		return	View::make('admin/admin_statistics');
	}

	public function showAdminBroadcasts() 
	{
		return	View::make('admin/admin_broadcasts');
	}
}