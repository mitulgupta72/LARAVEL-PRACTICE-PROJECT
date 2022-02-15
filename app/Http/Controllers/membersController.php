<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\member;

class membersController extends Controller
{
    function index(){
        $data= member::all();
        return view('members',['m'=>$data]);

    }
}
