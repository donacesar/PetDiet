<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
