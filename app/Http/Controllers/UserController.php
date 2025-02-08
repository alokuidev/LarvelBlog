<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(){
        return "Code Step By step";
    }

    function getUserName($number){
        return view('welcome',['number' => $number ]);
    }
}
