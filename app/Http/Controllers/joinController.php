<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class joinController extends Controller
{
    function join(){
        return DB::table('employee')
        ->join('company','employe_id','=','employee.id')
        ->select('company.*')
        // ->select('employee.*')
        // ->where('company.name','google')
        ->where('employee.id',1)
        ->get();
    }
}
