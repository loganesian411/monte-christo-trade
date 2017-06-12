<?php

Route::get('/', function () {
    return view('homepage.index');
});

Route::post('/contact_us', 'EmailsController@sendEmail');

Route::get('/machines/{machine_name}', function ($machine_name) {
    return view('homepage.'.$machine_name);
});

Route::get('/shop/login', function () {
    return view('login');
});

// TODO: Update this to be a controller method. Probably customers@createOrder??
Route::get('/shop/orders/{customer}', function(\App\Customer $customer) {
	return view('orders.orders', compact('customer'));
});

// TODO: Update this to be a controller method. Probably customers@show??
Route::get('/shop/checkout/{customer}', function(\App\Customer $customer) {
	return view('checkout', compact('customer'));
});

Route::get('/customer/{customer}/edit', 'CustomersController@edit');

Route::patch('/shop/checkout/{customer}', 'CustomersController@update');
