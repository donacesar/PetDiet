<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

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
