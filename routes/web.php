<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DailyScheduleController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\Practice_1Controller;
use App\Http\Controllers\myController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/task',function(){
//     return view('task.index');
// });
// TO VIEW ALL TASK THAT HAVE BEEN CREATED
Route::get('all-task',[DailyScheduleController::class,'index'])->name('index');
// TO VIEW THE CREATE TASK PAGE
Route::get('create-task',[DailyScheduleController::class,'create'])->name('create.task');
// TO STORE THE DATA IN THE DATABASE
Route::post('store-task',[DailyScheduleController::class,'store']);
// TO VIEW THE EDIT PAGE OF A TASK
Route::get('edit-task/{id}',[DailyScheduleController::class,'edit']);

// TO UPDATE A SECIFIC TASK
Route::post('update-task/{id}',[DailyScheduleController::class,'update']);

// TO DELETE A TASK
Route::get('delete-task/{id}',[DailyScheduleController::class,'delete']);


// MY PERSONAL PRACTISE ROUTE
Route::get('timetable',[PracticeController::class,'table']);

Route::get('practice_1/{name}',[Practice_1Controller::class,'practice']);

Route::get('loopPage',[myController::class,'loopPage']);

Route::get('firstAssoc',[myController::class,'firstAssocArray']);

Route::get('firstrequest',[myController::class,'firstrequest']);

Route::get('para/{name}',[myController::class,'parameters']);



// PRODUCT ROUTES
Route::get('creater',[ProductController::class,'createproduct']);

Route::post('store',[ProductController::class,'storeproduct']);

Route::get('index',[ProductController::class,'indexproduct'])->name('index');

Route::get('edit/{code}',[ProductController::class,'editproduct']);

Route::post('update/{code}',[ProductController::class,'updateproduct']);

Route::get('delete/{code}',[ProductController::class,'deleteproduct']);
