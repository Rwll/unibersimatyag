<?php

class AlumniController extends BaseController {

	/* Alumni */
	public function showHome() 
	{
		return View::make('home/home')
			->with('title', 'Homepage');
	}

	public function showUniversities() 
	{
		return View::make('home/universities')
			->with('title', 'Universities');
	}

	public function showEvents() 
	{
		return View::make('home/events')
			->with('title', 'Events');
	}

	public function showGallery() 
	{
		return View::make('home/gallery')
			->with('title', 'Gallery');
	}

	public function showContact() 
	{
		return View::make('home/contact')
			->with('title', 'Contact Us');
	}

	public function showAboutUs() 
	{
		return View::make('home/about_us')
			->with('title', 'About Us');
	}

	public function showRegisterPg1() 
	{
		return View::make('forms/register_alumni_pg1')
			->with('title', 'Register1');
	}

	public function showRegisterPg2() 
	{
		return View::make('forms/register_alumni_pg2')
			->with('title', 'Register2');
	}

	public function showRegisterPg3() 
	{
		return View::make('forms/register_alumni_pg3')
			->with('title', 'Register3');
	}

	public function showRegisterPg4() 
	{
		return View::make('forms/register_alumni_pg4')
			->with('title', 'Register4');
	}
	/*End Alumni */

	

}