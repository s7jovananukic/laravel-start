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

    $tasks = [
        'Got o store',
        'Go to market',
        'Go anywhere'
    ];

    return view('welcome', [
        'tasks' => $tasks
    ]);

});

Route::get('/about', function () {

    return view('about');

});

Route::get('/contact', function () {

    return view('contact');

});

//Route::get('/home', function () {
//    $data = [];
//    $data['version']= '0.1.1';
//    return view('welcome', $data);
//});