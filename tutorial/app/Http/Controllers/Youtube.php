<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
class Youtube extends Controller
{
    //
    public function index($site)
    {
       // echo "Hello youtube";
       return ["site"=>$site];
    }
}
