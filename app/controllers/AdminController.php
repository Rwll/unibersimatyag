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

	public function showAdminLogin() 
	{
		return	View::make('admin/admin_login')
			->with('title', 'Login');
	}

	public function goLogin()
    {
            $validation = User::validate(Input::all());

            if(!($validation->fails())){
                    if(Auth::attempt(array(
                            'username'        => Input::get('username'),
                            'password'        => Input::get('password'),
                            'role'                => 'admin'
                            ))){
                            return Redirect::Route('home_routeA1');
                    } else {
                            return Redirect::Route('admin-login')
                                    ->withErrors('Incorrect username or password')
                                    ->withInput(Input::except('password'));
                    }
            }else{
                    return Redirect::Route('admin-login')
                            ->withErrors($validation)
                            ->withInput(Input::except('password'));
            }
    }

    public function goLogout()
    {
            Auth::logout();
            if(Auth::guest()){
                    return Redirect::Route('admin-login');
            }else {
                    return Redirect::Route('home_routeA1');
            }
    }
 
}