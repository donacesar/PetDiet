<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::group(['namespace' => 'App\Http\Controllers\Admin' , 'prefix'=>'admin'], function() {
    Route::get('/', IndexController::class)->name('admin.index');
    Route::get('/test', TestController::class)->name('admin.test');

});


//Route::get('/admin', \App\Http\Controllers\Admin\IndexController::class)->name('admin.index');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/small-form/{attr}', FormController::class);
Route::get('/small-form', function () {
    return view('small-form');
});

Route::get('/full-form', function () {
    return view('full-form');
});

Route::get('/test', function () {
    return view('test');
});
