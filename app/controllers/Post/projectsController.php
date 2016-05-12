<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class projectsController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }
*/
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function postdata()
    {
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'project_name' => 'required',
            'project_desc' => 'required',
            'project_imgsrc' => 'required',
            'category' => 'required',
            'user' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return Project::create([
            'project_name' => $data['project_name'],
            'project_desc' => $data['project_desc'],
            'project_imgsrc' =>$data['project_imgsrc'],
            'category' => $data['category'],
            'user' => $data['user'],
        ]);
    }
}
    
}
