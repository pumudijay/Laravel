<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index(){

    	
    	$customer=[
    		'abc',
    		'xyz',
    		'pqr',
    	];
    	return view('customer',['customers'=>$customer]);
    } 

    public function store(){

    	
    }
}
