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
    Route::get('/', [App\Http\Controllers\front\homeController::class,'index'])->name('home');
    Route::get('/project/{project:slug}', [App\Http\Controllers\front\projectController::class,'show'])->name('project');
    Route::get('/projects', [App\Http\Controllers\front\projectController::class,'index'])->name('projects');
    Route::get('/demo/{demo:slug}', [App\Http\Controllers\front\demoController::class,'show'])->name('demo');
    Route::get('/demos', [App\Http\Controllers\front\demoController::class,'index'])->name('demos');
    Route::get('/contact', function () {return view('front.contact');})->name('contact');
    Route::post('/contact', function () {return view('front.contact');})->name('post-contact');
    Route::prefix('/blog')->name('blog.')->group(function () {
        Route::get('/', function () {echo "blog";})->name('home');
    });
});

// Back office
Route::prefix('/dashboard')->name('dashboard.')->group(function () {
    Auth::routes();
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


