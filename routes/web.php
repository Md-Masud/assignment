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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['as'=>'admin.','prefix'=>'admin'],function (){
    Route::get('dashboard',[App\Http\Controllers\admin\DashboardController::class,'index'])->name('dashboard');
    Route::get('table',[App\Http\Controllers\admin\DashboardController::class,'table'])->name('table');
});
