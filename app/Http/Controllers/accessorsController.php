<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class accessorsController extends Controller
{
    function index(){
        return member::all();
    }
}
