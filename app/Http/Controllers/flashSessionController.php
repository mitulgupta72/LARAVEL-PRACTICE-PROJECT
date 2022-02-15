<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class flashSessionController extends Controller
{
    function add(Request $req){
        $data=$req->input('user');
        $req->session()->flash('uer',$data);
    return redirect('add');
    }
}
