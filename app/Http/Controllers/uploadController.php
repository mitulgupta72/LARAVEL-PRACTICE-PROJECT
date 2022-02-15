<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    function index(Request $req){
        $filename=$req->file('file') ->getClientOriginalName() ;
      return $req->file('file') ->storeAs('docs', $filename) ;
        // return $req->file('file')->store('docs');
    }
}
