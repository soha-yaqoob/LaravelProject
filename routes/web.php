<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirstController ;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('index');
});

Route::get ('ab',function () {
    return view('about');
});

Route::get('cont', function () {
    return view('contact');
});

Route::get('users',[MyFirstController::class,'selectUser']);
Route::get('std',[MyFirstController::class,'selectStudents']);
Route::get('assoc',[MyFirstController::class,'selectMembers']);
Route::get('add',function(){
    return view('add');
});
Route::post('add',[MyFirstController::class,'addRecord']);
Route::get('select',[MyFirstController::class,'selectRecords']);
Route::get('edit/{id}',[MyFirstController::class,'editData']);
Route::post('edit/{id}',[MyFirstController::class,'updateData']);

Route::get('delete/{id}',[MyFirstController::class,'deleteRecord']);
Route::delete('delete/{id}',[MyFirstController::class,'deleteRecord']);
R