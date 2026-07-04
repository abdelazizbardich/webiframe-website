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

    Route::get('/contact', [App\Http\Controllers\front\contactController::class,'index'])->name('contact');
    Route::post('/contact', [App\Http\Controllers\front\contactController::class,'store'])->name('post-contact');
    Route::get('/quotation',[App\Http\Controllers\front\quotationController::class,'index'])->name('quotation');
    Route::post('/quotation',[App\Http\Controllers\front\quotationController::class,'store'])->name('post-quotation');
    Route::post('/audit',[App\Http\Controllers\front\auditController::class,'store'])->name('post-audit');
    Route::post('/order',[App\Http\Controllers\front\orderController::class,'store'])->name('post-order');
    Route::post('/order/confirmed/{order:id}',[App\Http\Controllers\front\orderController::class,'confirm'])->name('post-order-confirmed');
    // Route::prefix('/blog')->name('blog.')->group(function () {
    //     Route::get('/', function () {echo "blog";})->name('home');
    // });
});

// Back office
Auth::routes(['register' => false]);
Route::prefix('/dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [App\Http\Controllers\back\HomeController::class, 'index'])->name('home');
    Route::get('/posts', [App\Http\Controllers\back\postsController::class, 'index'])->name('posts.all');
    Route::prefix('/project')->name('project.')->group(function () {
        Route::get('/all', [App\Http\Controllers\back\projectController::class, 'index'])->name('all');
        Route::get('/create', [App\Http\Controllers\back\projectController::class, 'create'])->name('create');
        Route::post('/save', [App\Http\Controllers\back\projectController::class, 'store'])->name('store');
        Route::get('/delete/{project}', [App\Http\Controllers\back\projectController::class, 'delete'])->name('delete');
    });
    Route::prefix('/categories')->name('categories.')->group(function () {
        Route::get('/all', [App\Http\Controllers\back\categoryController::class, 'index'])->name('all');
        Route::get('/create', [App\Http\Controllers\back\categoryController::class, 'create'])->name('create');
        Route::post('/save', [App\Http\Controllers\back\categoryController::class, 'store'])->name('store');
        Route::get('/delete', [App\Http\Controllers\back\categoryController::class, 'delete'])->name('delete');
    });
    Route::prefix('/demo')->name('demo.')->group(function () {
        Route::get('/all', [App\Http\Controllers\back\demoController::class, 'index'])->name('all');
        Route::get('/create', [App\Http\Controllers\back\demoController::class, 'create'])->name('create');
        Route::post('/save', [App\Http\Controllers\back\demoController::class, 'store'])->name('store');
        Route::get('/delete/{demo}', [App\Http\Controllers\back\demoController::class, 'delete'])->name('delete');
    });
    Route::get('/orders', [App\Http\Controllers\back\orderController::class, 'index'])->name('orders.all');
    Route::get('/quotations', [App\Http\Controllers\back\quotationController::class, 'index'])->name('quotations.all');
    Route::get('/contacts', [App\Http\Controllers\back\contactController::class, 'index'])->name('contacts.all');
});


