<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class queryBuilderController extends Controller
{
    function dbOperation(){

// $data=DB::table('pages')->get()->toArray();
        // $data=DB::table('pages')->get();
// dd($data);
// return view('queryList',['data'=>$data]);
// return view('queryList',compact('data'));
    // return  DB::table('pages')
    // // ->where('id',4)
    // ->where('address','katni')
    // ->get();
// return DB::table('pages')->find(8);
// return (array)DB::table('pages')->find(6);

// return DB::table('pages')->count();

// return DB::table('pages')
// ->insert(
//     [
//         'Id'=>9,
//         "name"=>"anita",
//         "email"=>"anita@gmail",
//         "address"=>"orrisa"
//     ]
// );


// return DB::table('pages')
// ->where('id',9)
// ->update(
//     [
//         'Id'=>9,
//         "name"=>"anil",
//         "email"=>"anita@gmail",
//         "address"=>"orrisa"
//         ]
//     );

    // return DB::table('pages')
    // ->where('id',9)->delete();

//search for a data  if it doesn't exist insert it
$id=13;
        $data=(array)DB::table('pages')->find($id); //it will find id
        if($data){
            echo "number already exists"; //if already id exists this will be printed
        }else{
            return DB::table('pages')
            ->insert(
                ['id'=>$id,
                 'name'=>'dffd',
                 'address'=>'kanpur',
                 'email'=>"asdknsd@kdsnf"
                ]
            );

        }



}
}
