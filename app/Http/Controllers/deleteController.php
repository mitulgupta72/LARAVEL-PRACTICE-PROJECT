<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\page;

class deleteController extends Controller
{
    function erase(){
        $data=page::all();
        return view('deletedata',['members'=>$data]);
    }

    function delete($id){
        $data=page::find($id);
        $data->delete();
        $data=page::all();
        return view('deletedata',['members'=>$data]);
    }

    function updateformfunction($id){
    $data=page::find($id);
    return view('update',['data'=>$data]);
       }

       function updateaction(Request $req){
        $data= page::find($req->id);
        $data->Name=$req->Name;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->save();
        $data=page::all();
        return view('deletedata',['members'=>$data]);
    }
}
