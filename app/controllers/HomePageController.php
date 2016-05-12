<?php

/**
* 
*/
class HomePageController extends BaseController
{
	public function	homeAction()
	{
		
		return View::make('index')
		->with('about_me',AboutMe::all())
		->with('categories',Categories::all());
	}

	public function	catprojAction()
	{
		
		return View::make('catproj')
		->with('about_me',AboutMe::all())
		->with('categories',Categories::all());
	}
}