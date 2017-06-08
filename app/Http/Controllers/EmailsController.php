<?php

namespace App\Http\Controllers;

use \App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{
    //
    public function sendEmail(Request $request) 
    {
    	$this->validate($request, [
	    	'name' => 'required',
	    	'email' => 'required|email',
	    	'subject' => 'required',
	    	'body' => 'required'
	    ]);

	    $name = $request->get('name');
	    $email = $request->get('email');
	    $subject = $request->get('subject');
	    $body = $request->get('body');

	    Mail::to(env('MCT_EMAIL'))->send(new ContactUs($name, $email, $subject, $body));

	    return view('homepage.contact-confirmation');

    }
}
