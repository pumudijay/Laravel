<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function create()
    {
    	# code...
    	return view('contact.create');
    }

    public function store()
    {
    	# code...
    	#dd(request()->all());

    	$data=request()->validate([
    		'name'=> 'required',
    		'email'=> 'required|email',
    		'message'=> 'required',
    	]);

    	Mail::to('laravelmailtestnew@gmail.com')->send(new ContactMail($data));
    	return redirect('contact');
    }
}
