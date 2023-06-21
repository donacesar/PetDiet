<?php

use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\StorePasswordController;
use App\Http\Controllers\FullOrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SmallOrderController;
use Illuminate\Support\Facades\Route;

// Страницы пользователя

Route::get('/', [ \App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/post_show/{post}', [\App\Http\Controllers\BlogController::class, 'show'])->name('post.show');
Route::get('/small-form', [SmallOrderController::class, 'form'])->name('small_form.form');
Route::post('/small-form', [SmallOrderController::class, 'create'])->name('small_form.create');
Route::get('/full-form', function () { return view('full-form'); });
Route::post('/full-form', [FullOrderController::class, 'create'])->name('full_form.create');
Route::get('/success_message', function () {
    return view('success_message');
})->name('success_message');
Route::get('/phone_call/{number}', function ($number) {
    return redirect('tel:+' . $number);
})->name('phone_call');

// Для всяких тестов

Route::get('/test', function () {
    return view('test');
});


Route::middleware('auth')->group(function () {

    // Аутентификация пользователя

    Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {

        Route::get('/', function () {
            return redirect()->route('small_order.index');
        })->name('admin.index');

        Route::get('change-password', ChangePasswordController::class)->name('change.password');
        Route::post('change-password', StorePasswordController::class)->name('store.password');

    });

    // Админка

    Route::get('/small_orders', [SmallOrderController::class, 'index'])->name('small_order.index');
    Route::patch('/finish/{small_order}', [SmallOrderController::class, 'finish'])->name('small_order.finish');
    Route::get('/finished_small_orders', [SmallOrderController::class, 'finishIndex'])->name('finished_small_order.index');
    Route::delete('/small_order/{small_order}', [SmallOrderController::class, 'delete'])->name('small_order.delete');

    Route::get('/full_orders', [FullOrderController::class, 'index'])->name('full_order.index');
    Route::get('/full_order/{full_order}', [FullOrderController::class, 'show'])->name('full_order.show');
    Route::patch('/finish/{full_order}', [FullOrderController::class, 'finish'])->name('full_order.finish');
    Route::get('/finished_full_orders', [FullOrderController::class, 'finishIndex'])->name('finished_full_order.index');
    Route::delete('/full_order/{full_order}', [FullOrderController::class, 'delete'])->name('full_order.delete');

    Route::get('/telegram_bot', [\App\Http\Controllers\TelegramBotController::class, 'index'])->name('telegram_bot.index');
    Route::patch('/telegram_bot', [\App\Http\Controllers\TelegramBotController::class, 'update'])->name('telegram_bot.update');
    Route::get('/bot_success_message', function () {
        return view('bot_success_message');
    })->name('bot_success_message');
    Route::post('/send_message', [\App\Http\Controllers\TelegramBotController::class, 'sendMessage'])->name('send_message');

    Route::get('/admin_blog', [\App\Http\Controllers\BlogController::class, 'adminIndex'])->name('admin_blog.index');
    Route::get('/new_post', [\App\Http\Controllers\BlogController::class, 'form'])->name('blog_form');
    Route::post('/new_post', [\App\Http\Controllers\BlogController::class, 'create'])->name('post.create');
    Route::delete('/delete/{post}', [\App\Http\Controllers\BlogController::class, 'delete'])->name('post.delete');
    Route::post('/edit_post/{post}', [\App\Http\Controllers\BlogController::class, 'edit'])->name('post.edit');
    Route::patch('/update_post/{post}', [\App\Http\Controllers\BlogController::class, 'update'])->name('post.update');
});


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__ . '/auth.php';
