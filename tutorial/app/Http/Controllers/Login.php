<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function index(Request $request )
    {
        $request->validate(
            ['user'=>'required','email'=>'required|email','password'=>'min:5|max:8']
        );
       print_r($request->input());
    }
}
