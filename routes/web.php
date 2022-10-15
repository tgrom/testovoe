<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\IndexController as AdminController;
use \App\Http\Controllers\Students;
use \App\Http\Controllers\Admin\StudentsController as AdminStudentsController;
use \App\Http\Controllers\Account\IndexController as IndexController;

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
})->name('welcome');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'account', 'as' => 'account'], function () {
        Route::get('/', IndexController::class)->name('index');

        //logout
        Route::get('logout', function () {
            \Illuminate\Support\Facades\Auth::logout();
            return redirect()->route('login');
        })->name('logout');
    });


//Adminka
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin.check'], function () {
        Route::get('/', AdminController::class)->name('hello');
        Route::get('/students/export', [AdminStudentsController::class, 'export'])->name('export');
        Route::post('students/import', [AdminStudentsController::class, 'import'])->name('import');
        Route::resource('students', AdminStudentsController::class);


    });

    Route::get('/students', [Students::class, 'index'])->
    name('students');
    Route::get('/students/{id}', [Students::class, 'show'])->where('id','\d+')->
    name('student.show');


});













Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
