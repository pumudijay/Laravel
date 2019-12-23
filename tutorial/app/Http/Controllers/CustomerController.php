<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    //
    public function index(){

        $customer = DB::table('customers')->select('id','name')->get();
    	return view('customer',['customers'=>$customer]);
    } 

    public function store(Request $request){

        $name = $request->input('name');
    	DB::table('customers')->insert(
        ['name' => $name]
        
        );

       return back();
    }
}
