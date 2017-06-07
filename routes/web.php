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
Route::get('/', function () {
    return view('homepage.index');
});

Route::post('/contact_us', 'EmailsController@send_email');

Route::get('/machines/{machine_name}', function ($machine_name) {
    return view('homepage.'.$machine_name);
});
