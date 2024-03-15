<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('myroute/{ten}', function($ten){
    return 'Hallo ' .$ten; });

Route::get('myroute/{userID?}/{name?}', function($userID = 1, $name = "PNV"){
    return "<h2 style ='color: blue'>UserId: .$userID <br> Name: .$name</h2>";
});
    
