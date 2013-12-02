<?php

class AdminController extends BaseController {

	public function showWelcome() 
	{
		return View::make('admin_dashboard');
	}

	public function showAdminConversations() 
	{
		return	View::make('admin_conversations');
	}

	public function showManageAdminUniversities() 
	{
		return	View::make('admin_manage_universities');
	}





}