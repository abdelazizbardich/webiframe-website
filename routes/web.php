<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
Route::get('/lang/{lang}', [App\Http\Controllers\localeController::class,'setLocalse'])->name('set-lang');

// Front office
Route::prefix('/')->group(function () {
    Route::get('/', function () {return view('front/index');})->name('welcome');
    Route::get('/project', function () {return view('front/project');})->name('project');
    Route::get('/demo', function () {return view('front/demo');})->name('demo');
});

// Back office
Route::prefix('/dashboard')->group(function () {
    Auth::routes();
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


