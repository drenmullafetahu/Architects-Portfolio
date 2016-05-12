<?php

namespace app\controllers;
use app\Banner;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Input;


class WebsiteSettings extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $banners = banner::all();

        return view('website_settings', ['banners' => $banners]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create_banner()
    {
         banner::create(array(

                'banner_image'=>input::get('banner_image'),
                'banner_desc'=>input::get('banner_desc'),                
            ));

          
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
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
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
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
