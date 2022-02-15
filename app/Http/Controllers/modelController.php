<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class modelController extends Controller
{
    function getdata(){
        return User::all();
    }
}
