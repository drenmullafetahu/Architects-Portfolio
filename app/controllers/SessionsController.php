<?php

use app\models\User;

use \Validator;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class SessionsController extends BaseController{

	public function create()
	{
	
		if(Auth::check(true))
		{
			return Redirect::to('admin/home');
		}
		return View::make('auth.login');
	}
	public function store()
	{	 
		 $rules = array
			 (
	        'username'             => 'required|exists:users',                       
	        'password'             => 'required',              
	   		 );	    
		    $validator = Validator::make(Input::all(), $rules);	    
		    if ($validator->fails())
		     {	       
		        $messages = $validator->messages();	        
		        return Redirect::to('auth/login')->withErrors($validator);
		     }
		     else 
		     {
				if(Auth::attempt(Input::only('username','password')))
				{			
					return Redirect::to('admin/home');
				}	
				return Redirect::to('auth/login');
			 }		 
	}

	public function destroy()
	{
		Auth::logout();
		return Redirect::to('auth/login');
	}
		

}


