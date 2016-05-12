<?php

class AdminController extends BaseController 
{

    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('Admin.home');
    }
    public function createProject()
    {      
        return View::make('Admin.CreateProject');        
    }

    public function tables()
    {
        $projects = project::all();

        return view('Admin.tables', ['projects' => $projects]);

       // return view('Admin.tables');
    }

    protected function validator(array $project)
    {
        return Validator::make($project, [
            'project_name' => 'required|max:255',
            'project_desc' => 'required||min:255',
            'project_imgsrc' => 'required|min:6',
            'project_category' => 'required|min:6',
            'project_user' => 'required|min:6',
        ]);
    }

    public function createP()
    {   
         project::create(array(
                'project_name'=>input::get('project_name'),
                'project_desc'=>input::get('project_desc'),
                'project_imgsrc'=>input::get('project_imgsrc'),
                'project_category'=>input::get('project_category'),
                'project_user'=>input::get('project_user'),
            ));

          return redirect('admin/newProject');
    }
    
}


