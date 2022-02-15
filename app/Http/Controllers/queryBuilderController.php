<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class queryBuilderController extends Controller
{
    function dbOperation(){
        // return  DB::table('pages')->get();

        $data=DB::table('pages')->get()->toArray();
dd($data);
        return view('queryList',compact('data'));
    }
}
