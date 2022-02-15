<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class users extends Controller
{
    public function index()
    {
        // echo $usr."<br>";
        // echo "hello there fro m=cntroller";
        // return ["name"=>"mitul","age"=>555] ;
        $data=['m','i','t','u','l'];
        return view("welcome",['users'=>$data]);
    }
}
