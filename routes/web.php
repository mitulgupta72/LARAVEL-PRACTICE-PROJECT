<?php

use App\Http\Controllers\deleteController;
use App\Http\Controllers\paginationController;
use App\Http\Controllers\membersController;
use App\Http\Controllers\flashSessionController;
use App\Http\Controllers\modelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\userscontroller;
use App\Http\Controllers\user_form;
use App\Http\Controllers\sqlController;
use App\Http\Controllers\httpController;
use App\Http\Controllers\methodController;
use App\Http\Controllers\saveDataController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\uploadController;
use App\Http\Controllers\queryBuilderController;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/{name}', function ($name) {
//     // echo $name;
//     return view('welcome',['name'=>$name]);
// });
Route::get('/', function () {
    return view('user_page');
    // return redirect("abot");  //directly opens redirect tab

});
Route::get('/user', function () {
    return view('users');
});
// });
Route::get('/home', function () {
    return view('hello');
});
Route::get('/about', function () {
    return view('about');
});
Route::view("abot", 'about');  //using this syntex you cant pass data from url
Route::view("xyz", 'contact');  //using this syntex you cant pass data from url

Route::get("users", [Users::class, 'index']);
// Route::get("usercontroller",[userscontroller::class,'loadView']);
//another way of routing controller
Route::get('/usercontroller/{name}', 'App\Http\Controllers\userscontroller@loadView');

// // Route::get("users","Users@index");   //for older versions of laravel
// Route::get("controller_page_name_you_want_as",[controller_real_name::class],'name_of_function_inside_controller')

Route::post("userform", [user_form::class, 'getData']);
Route::view("user_form", 'user_form');


Route::view("noacess", 'noacess');
Route::view("home", 'home')->middleware('midRoute');

Route::group(['middleware' => ['protectedPage']], function () {

    Route::view("userPage", 'user_page');
});

Route::get('sqlController',[sqlController::class,'index']);
Route::get('modelController',[modelController::class,'getdata']);
Route::get('httpController',[httpController::class,'index']);

Route::view('http','http');

Route::put('methodController',[methodController::class,'index']);
Route::view("method",'method');

Route::put('sessionController',[sessionController::class,'index']);
// Route::view('login','sessionLogin');
// Route::view('profile','sessionProfile');

Route::get('/login',function(){
    if(session()->has('user')){

        return redirect('profile');
    }
    return view('sessionLogin');
});

Route::get('/logout',function(){
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('login');
});

Route::post('flashsessioncontroller',[flashSessionController::class,'add']);
Route::view('add','flashSession');

Route::view('upload','upload');
Route::post('uploadcontroller',[uploadController::class,'index']);

Route::get('/profile/{lang}',function($lang){
    App::setlocale($lang);
    return view('LocalisationProfile');
});

Route::view('members','members');
Route::get('memberscontroller',[membersController::class,'index']);


Route::view('pagination','pagination');
Route::get('paginationcontroller',[paginationController::class,'show']);

Route::view('savedata','saveData');
Route::post('savedatacontroller',[saveDataController::class,'input']);


Route::view('deletedata','deleteData');
Route::get('deletecontroller',[deleteController::class,'erase']);
Route::get('delete/{id}',[deleteController::class,'delete']);
Route::get('edit/{id}',[deleteController::class,'updateformfunction']);
Route::post('edit',[deleteController::class,'updateaction']);
Route::view('update','update');



Route::get('querybuildercontroller',[queryBuilderController::class,'dbOperation']);
Route::view('queryList','queryList');













