<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

/***** return array *****/
/*class Youtube extends Controller
{
    //
    public function index()
    {
        // echo "Hello youtube";
        return ["site" => "YOUTUBE"];
    }
}*/

/***** pass parameters *****/
/*class Youtube extends Controller
{
    //
    public function index($site)
    {
       // echo "Hello youtube";
       return ["site"=>$site];
    }
}
*/
/***** return view *****/
/*class Youtube extends Controller
{
    public function index()
    {
        //return view('youtube');

        //$profile='Laravel';
        //return view('admin.profile',['data'=>$profile]);

        
        // if view exists
        if (View::exists('admin.profile')) {
            $profile = 'Laravel';
            return view('admin.profile',['data'=>$profile]);
        }
    }
}
*/

/***** Http Requests *****/
class Youtube extends Controller
{
    public function index(Request $request)
    {
        //print_r($request->input());
        //print_r($request->url());
        //print_r($request->method());
        //print_r($request->path());

        echo ($request->input('name'));
        if($request->isMethod("get"))
        {
            echo "get request";
        }
        else
        {
            echo "post method";
        }


    }
}
