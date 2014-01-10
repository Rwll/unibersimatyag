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

	public function showAdminLogin() 
	{
		return	View::make('admin/login')
			->with('title', 'Login');
	}


	//Login
	public function goLogin()
    {
        $validation = User::validate(Input::all());

        if(!($validation->fails())){
            if(Auth::attempt(array(
                'username' => Input::get('username'),
                'password' => Input::get('password'),
                'role'     => 'admin'
            ))){
                return Redirect::Route('home');
            } else {
                return Redirect::Route('admin-login')
                    ->withErrors('Incorrect username or password')
                    ->withInput(Input::except('password'));
            }
        } else {
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
                return Redirect::Route('home');
        }
    }

    //Login

    //Manage Universities

    public function addUniversity()
        {
            $validation = University::validate(Input::all());

            if($validation->fails()){
                return Redirect::Route('add-university-failed');
                    
            }else{
                $university = new University();
                $university->name = Input::get('name');
                $university->website = Input::get('website');
                $university->email = Input::get('email');
                $university->contact_number = Input::get('contact_number');
                $university->address = Input::get('address');
                $university->description = Input::get('description');
                $university->save();

                return Redirect::Route('add-university-success');
            }	
        }

    public function addUniversityFailed() 
	{
		return	View::make('admin/add_university_failed')
			->with('title', 'Add University Failed');
	}
	
	public function addUniversitySuccess() 
	{
		return	View::make('admin/add_university_success')
			->with('title', 'Add University Success');
	} 
}