<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/small-form', function () {
    return view('small-form');
});
Route::get('/full-form', function () {
    return view('full-form');
});
Route::get('/test', function () {
    return view('test');
});
