<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function index(Request $request )
    {
       print_r($request->input());
    }
}
