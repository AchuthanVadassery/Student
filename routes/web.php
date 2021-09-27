<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StateController;


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
//     // return view('welcome');
//     return view('student_main');
// });
// Route::get('/create-item',[ItemController::class,'create'])->name('item.view');
// Route::get('/index-item',[ItemController::class,'index'])->name('item.index');
// Route::post('/store-item',[ItemController::class,'store'])->name('item.store');
// Route::get('/item/edit/{id}',[ItemController::class,'edit']);
// Route::post('/item/update/{id}',[ItemController::class,'update']);
// Route::post('/item/delete/{id}',[ItemController::class,'delete']);
Route::get('/',[StudentController::class,'create'])->name('student.create');
Route::post('/studentstore',[StudentController::class,'store'])->name('student.store');
 Route::get('/studentedit/{id}',[StudentController::class,'edit'])->name('student.edit');
 Route::post('/studentupdate/{id}',[StudentController::class,'update'])->name('student.update');
 Route::get('/studentdelete/{id}',[StudentController::class,'delete'])->name('student.delete');
// Route::get('/state',function(){
//     return view('state');
// });
// Route::get('dropdownlist','Statedistrictcontroller@getCountries');
// Route::get('dropdownlist/getstates/{id}','DataController@getStates');
Route::get('/dropdownlist/getDistrict/{id}',[StudentController::class,'getDistrict']);
Route::get('/states',[StateController::class,'test']);
