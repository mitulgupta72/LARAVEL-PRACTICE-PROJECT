<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userscontroller extends Controller
{
    function loadView($nae){
        return view("users",['name'=>$nae]);
    }
}
