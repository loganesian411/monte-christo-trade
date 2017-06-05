<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use \App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('homepage.index');
});

Route::post('/confirmation', function () {
    
    $name = request('name');
    $email = request('email');
    $subject = request('subject');
    $text= request('message');

    Mail::to(env('MCT_EMAIL'))->send(new ContactUs($name, $email, $subject, $text));

    return view('homepage.contact-confirmation');
});

Route::get('/machines/{machine_name}', function ($machine_name) {
    return view('homepage.'.$machine_name);
});

Route::get('/shop/login', function () {
    return view('login');
});

Route::get('/shop/orders/{customer}', function(\App\Customer $customer) {
	return view('orders.orders', compact('customer'));
});

Route::get('/shop/checkout/{customer}', function(\App\Customer $customer) {
	return view('checkout', compact('customer'));
});