<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class methodController extends Controller
{
    function index(Request $req){
        // return "reached controller method";
        return $req->input();
    }
}
