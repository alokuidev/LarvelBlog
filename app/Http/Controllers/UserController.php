<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\facades\view;

class UserController extends Controller
{
    function getUser(){
        return "Code Step By step";
    }

    function getUserName($number){
        return view('welcome',['number' => $number ]);
    }

    function userHome(){
        return view('home');
    }
    function aboutFolder(){
        return view('about.about');
    }
    function userAbout(){
        return view('about');
    }
    function adminLogin(){
        if(View::exists('admin.login')){
            return view('admin.login');
        }
        {
            echo 'No Views Found';
        }
        
    }

}
