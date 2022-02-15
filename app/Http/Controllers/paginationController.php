<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\page;

class paginationController extends Controller
{
    function show(){
        $data=page::paginate(3);
        return view('pagination',['info'=>$data]);
    }
}
