<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    function index(Request $re){
        // return $re->input();
        // lets not return the data but store it in
        $data=$re->input();
        $re->session()->put('user',$data['user']);
    //    echo session('user');
    return redirect('profile');
    }
}
