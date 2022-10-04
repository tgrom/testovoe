<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\IndexController as AdminController;
use \App\Http\Controllers\Students;
use \App\Http\Controllers\Admin\StudentsController as AdminStudentsController;

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


//Adminka
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', AdminController::class)->name('hello');
    Route::resource('students', AdminStudentsController::class);
});


Route::get('/students', [Students::class, 'index'])->
        name('students');
Route::get('/students/{id}', [Students::class, 'show'])->where('id','\d+')->
        name('student.show');

