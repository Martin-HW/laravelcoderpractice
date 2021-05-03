<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", function(){
    return "Martin first";
});
Route::get("/courses/{course}", function($course){
    return "the course is: $course";
});
Route::get("/courses/{team}/{player?}", function($team, $player = null){
    if($player === true){
        return "player is: $player";
    }else{
        return "team is $team n player is $player";
    }
});