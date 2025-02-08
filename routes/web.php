<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('about/{name?}',function($name = null){
    return view('about', ['name' => $name]);     
});

Route::redirect('/abc','/');

Route::get('/user',[UserController::class,'getUser']);
//Route::get('/welcome/{number}',[UserController::class,'getUserName']);