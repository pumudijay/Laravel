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
class Youtube extends Controller
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
