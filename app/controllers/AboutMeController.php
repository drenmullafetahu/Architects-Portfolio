<?php
use \Input;
use \Validator;
class AboutMeController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('Public.partials.AboutMe')
		->with('about_me',AboutMe::all());
	}
	public function Admin_index()
	{

		return View::make('Admin.AboutMe')
		->with('about_me',AboutMe::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		 $rules = array
		 (
        'title'             => 'required',                       
        'description'       => 'required',              
   		 );	    
	    $validator = Validator::make(Input::all(), $rules);	    
	    if ($validator->fails())
	     {	       
	        $messages = $validator->messages();	        
	        return Redirect::to('admin/aboutme')->withErrors($validator);
	     }else 
	     {
			AboutMe::create(array
				(
	                'title'=>input::get('title'),
	                'description'=>input::get('description'),	                              
	            ));
	          return Redirect::to('admin/aboutme');
	          
		  }	
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
