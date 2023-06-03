<?php

use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\StorePasswordController;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SmallOrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/test', function () {
    return view('test');
});

Route::middleware('auth')->group(function () {

    Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {

//        Route::get('/', IndexController::class)->name('admin.index');
        Route::get('/', function(){
            return redirect()->route('small_order.index');
        })->name('admin.index');
        Route::get('test', TestController::class)->name('admin.test');
        Route::get('change-password', ChangePasswordController::class)->name('change.password');
        Route::post('change-password', StorePasswordController::class)->name('store.password');

    });
});

Route::get('/small-form', [SmallOrderController::class, 'form'])->name('small_form.form');
Route::post('/small-form', [SmallOrderController::class, 'create'])->name('small_form.create');
Route::get('/success_message', function () { return view('success_message'); })->name('success_message');

Route::middleware('auth')->group(function(){
    Route::get('/small_orders', [SmallOrderController::class, 'index'])->name('small_order.index');
    Route::patch('/finish/{small_order}', [SmallOrderController::class, 'finish'])->name('small_order.finish');
    Route::get('/finished_small_orders', [SmallOrderController::class, 'finishIndex'])->name('finished_small_order.index');
    Route::delete('/small_order/{small_order}', [SmallOrderController::class, 'delete'])->name('small_order.delete');
});


Route::get('/full-form', function () {
    return view('full-form');
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
