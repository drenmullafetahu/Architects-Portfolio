<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/','HomePageController@homeAction'); 
Route::get('/catproj','HomePageController@catprojAction'); 
//Route::get('/categories','CategoryController@index'); 





// Authentication routes...
/*Route::get('auth/login', function(){
	User::create([
		'username'=> 'edonmullafetahu',
		'password'=>Hash::make('edon123')
		]);
});*/
Route::get('auth/login', 'SessionsController@create');
Route::post('auth/login', 'SessionsController@store');
Route::get('auth/logout', 'SessionsController@destroy');

//Route::get('auth/login', 'Auth\AuthController@getLogin');
//Route::post('auth/login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...

//Route::get('admin/auth/register', 'Auth\AuthController@getRegister');
//Route::post('admin/auth/register', 'Auth\AuthController@postRegister');
//Route::resource('sessions','SessionsConreoller');

Route::get('admin/home', 'AdminController@index')->before('auth');
Route::get('admin/categories', 'CategoriesController@Admin_index')->before('auth');;
Route::post('admin/cat/create', 'CategoriesController@create')->before('auth');;
Route::post('admin/cat/store', 'CategoriesController@store')->before('auth');;
Route::get('admin/aboutme', 'AboutMeController@Admin_index')->before('auth');;
Route::post('admin/aboutme/create', 'AboutMeController@create')->before('auth');;
Route::get('admin/projects', 'ProjectsController@Admin_index')->before('auth');;
Route::post('admin/project/create', 'ProjectsController@create')->before('auth');;
//Route::post('admin/project/create', function(){});




Route::get('admin/tables', 'AdminController@tables');
Route::get('admin/WebSettings', 'WebsiteSettings@index');

// banner routes...
Route::post('admin/banner', 'WebsiteSettings@create_banner');
Route::get('admin/banner', 'WebsiteSettings@create_banner');