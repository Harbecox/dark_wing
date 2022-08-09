<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('user.status')->name('home');

Route::prefix('admin_panel')->middleware('admin.status')->group(function () {

    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');

    Route::resource('post', PostController::class);

    Route::resource('user', UserController::class);

    Route::post('user/block/{user}', [UserController::class,'block'])->name("user.block");

});

Route::group(['middleware' => ['auth','isUser']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});
