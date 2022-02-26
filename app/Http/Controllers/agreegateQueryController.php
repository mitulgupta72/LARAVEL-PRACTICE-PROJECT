<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class agreegateQueryController extends Controller
{
    function operation()
    {
        // return "agreegate query controller";
        // return DB::table('pages')->get();
        // return DB::table('pages')->sum('id');
        // return DB::table('pages')->count('id');
        // return DB::table('pages')->avg('id');
        // return DB::table('pages')->max('id');
        // return DB::table('pages')->min('id');
        // return DB::table('pages')->min('name');

        // return two values ek saath like min and max values
        $min = DB::table('pages')->min('id');
        $max = DB::table('pages')->max('id');
        return "min - " . $min . " max - " . $max;
    }
}
