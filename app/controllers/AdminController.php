<?php

class AdminController extends BaseController {

	public function showDashboard() 
	{
		return View::make('dashboard');
	}

	public function showConversations() 
	{
		return	View::make('conversations');
	}

	public function showManageUniversities() 
	{
		return	View::make('manageuniversities');
	}

	public function showManageAlumni() 
	{
		return	View::make('managealumni');
	}

	public function showManageAdministrators() 
	{
		return	View::make('manageadministrators');
	}

	public function showStatistics() 
	{
		return	View::make('statistics');
	}

	public function showBroadcasts() 
	{
		return	View::make('broadcasts');
	}





}