<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    //
    public function index(){

        $customer = DB::table('customers')->select('id','name','email')->get();
    	return view('customer',['customers'=>$customer]);
    } 

    public function store(Request $request){

        $data = request()->validate([
            'name'=>'required|min:3',
            'email'=>'required|email'
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
    	DB::table('customers')->insert(
        ['name' => $name,'email' => $email]
        
        );

       return back();
    }
}
