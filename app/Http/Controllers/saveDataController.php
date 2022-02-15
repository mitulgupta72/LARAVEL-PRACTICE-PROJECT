<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\page;

class saveDataController extends Controller
{
    function input(Request $req){
        $newData= new page();
        $newData->id=$req->id;
        $newData->name=$req->name;
        $newData->email=$req->email;
        $newData->address=$req->address;
        $newData->save();

        return redirect('savedata');
    }
}
