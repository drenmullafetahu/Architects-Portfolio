<?php
//use \Categories;
use \Projects;
use \Images;
use Illuminate\Http\Request;
class ProjectsController extends \BaseController {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('Admin.CreateProject')
		->with('projects',Projects::all());
	}
	public function Admin_index()
	{
		return View::make('Admin.CreateProject')
		->with('projects',Projects::all())
		->with('images',Images::all())
		->with('categories',Categories::all());
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
        'name'             => 'required',                       
        'description'      => 'required',             
        'thumbnail_img'    => 'required',
        'category' 		   => 'required'         
   		 );	    
	    $validator = Validator::make(Input::all(), $rules);	    
	    if ($validator->fails())
	     {	       
	        $messages = $validator->messages();	        
	        return Redirect::to('admin/projects')->withErrors($validator);
	     }else 
	     {
			$project=Projects::create(array
				( 
	               	'name'=>input::get('name'),
	               		$slug=preg_replace('/[^A-Za-z0-9-]+/', '-',input::get('name')),
	                'description'=>input::get('description'),
	                'slug'=>$slug,
	                'thumbnail_img'=>input::get('thumbnail_img'),
	                'category'=>input::get('category')                
	            ));
			$image=Images::create(array
				( 
	               	'title'=>input::get('images'),
	               	'filename'=>input::get('images')	
	                        
	            ));



		
	          return Redirect::to('admin/projects');
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
