<?php

namespace App\Http\Controllers;

use \App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{
    //
    public function send_email() 
    {
    	$this->validate(request(), [
	    	'name' => 'required',
	    	'email' => 'required|email',
	    	'subject' => 'required',
	    	'body' => 'required'
	    ]);

	    $name = request('name');
	    $email = request('email');
	    $subject = request('subject');
	    $body = request('body');

	    Mail::to(env('MCT_EMAIL'))->send(new ContactUs($name, $email, $subject, $body));

	    return view('homepage.contact-confirmation');

    }
}
