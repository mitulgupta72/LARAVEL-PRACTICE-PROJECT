<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sqlController extends Controller
{
    function index(){
        // echo "<h1>hello from sql controller</h1>";
        return DB::select('select * from users');
    }
}
