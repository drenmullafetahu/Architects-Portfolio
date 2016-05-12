<?php
use \Input;
use \Validator;
class CategoriesController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('categories')
		->with('categories',Categories::all());
	}
	public function Admin_index()
	{

		return View::make('Admin.CreateCategories')
		->with('categories',Categories::all());
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		$imagesrcString='../edonmullafetahu/uploads/categories/thumbnail_images/';

		 $rules = array
		 (
        //'name'             => 'required',                       
        //'description'      => 'required',     
        //'slug'             => 'required',
        //'thumbnail_image'  => 'required'         
   		 );	    
	    $validator = Validator::make(Input::all(), $rules);	    
	    if ($validator->fails())
	     {	       
	        $messages = $validator->messages();	        
	        return Redirect::to('admin/categories')->withErrors($validator);
	     }else 
	     {
			Categories::create(array
				(					
	                'name'=>input::get('name'),
	                'description'=>input::get('description'),
	                'slug'=>input::get('slug'),
	                'thumbnail_image'=>input::get('thumbnail_image'),              
	            ));
	          return Redirect::to('admin/categories');
		  }	
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{		
//		echo "<pre>";
//		print_r(Input::file('thumbnail_image'));

		foreach (Input::file('thumbnail_image') as $image) {

			//getname
			$imagename=$image->getClientOriginalName();
			//upload
			$uploadflag = $image->move('../uploads/categories/thumbnail_images',$imagename);

			if($uploadflag){
				$uploadedimage[] = $imagename;
			}
		}	
		return Response::json(['success'=>true, 'message'=>'images uploaded','images'=>$uploadedimage]);	
		return $imagename;
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
