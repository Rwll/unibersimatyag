<?php

class UniversityAdminController extends BaseController {

	/* University Admin Menu */
	public function showUAdminDashboard() 
	{
		return View::make('university_admin/uadmin_dashboard');
	}

	public function showUAdminConversations() 
	{
		return	View::make('university_admin/uadmin_conversations');
	}

	public function showUManageAdminAlumni() 
	{
		return	View::make('university_admin/uadmin_manage_alumni');
	}

	public function showUAdminStats() 
	{
		return	View::make('university_admin/uadmin_statistics');
	}

	public function showUAdminBroadcasts() 
	{
		return	View::make('university_admin/uadmin_broadcasts');
	}
	/*End Univer... */

	/* Alumni Forms */
	public function showRegisterAlumni1() 
	{
		return	View::make('forms/register_alumni_pg1');
	}

	public function showRegisterAlumni2() 
	{
		return	View::make('forms/register_alumni_pg2');
	}

	public function showRegisterAlumni3() 
	{
		return	View::make('forms/register_alumni_pg3');
	}

	public function showRegisterAlumni4() 
	{
		return	View::make('forms/register_alumni_pg4');
	}

}