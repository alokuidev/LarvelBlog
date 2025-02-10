<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

//Route::view('/admin','admin.login');

Route::get('about/{name?}',function($name = null){
    $users = ['A','B','C','D','E'];
    $name = 'Alok Singh';
    return view('about', ['name' => $name, 'users'=> $users]);     
});

Route::redirect('/abc','/');
Route::view('user-form','user-form');

Route::get('/user',[UserController::class,'getUser']);
//Route::get('/welcome/{number}',[UserController::class,'getUserName']);

Route::get('user-home',[UserController::class,'userHome']);
Route::get('user-about',[UserController::class,'userAbout']);
Route::get('admin',[UserController::class,'adminLogin']);
Route::get('aboutFolder',[UserController::class,'aboutFolder']);