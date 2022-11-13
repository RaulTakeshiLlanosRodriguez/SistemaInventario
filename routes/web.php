<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\MubleController;
use App\Http\Controllers\MuebleController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
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

Route::get('report', [ReportController::class, 'report'])->name('report');
Auth::routes();

Route::group(['middleware'=> ['auth'], 'as'=>'admin.'], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('users', UserController::class);
    Route::resource('muebles', MuebleController::class);
    Route::resource('equipos', EquipoController::class);
});
