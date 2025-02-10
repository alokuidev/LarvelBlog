<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserForm extends Controller
{
    function addUser(Request $request){
        //return $request;
        echo "User Name is $request->name";
        echo '<br/>';
        echo $request->email;
        echo '<br/>';
        echo $request->city;
    }
}
