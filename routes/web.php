<?php

use App\Http\Controllers\Admin\AirportController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [\App\Http\Controllers\Front\IndexController::class,"index"])->name("index");

Route::get('/partnership', [\App\Http\Controllers\Front\IndexController::class,"index"])->name("partnership");

Route::get('/contact', [\App\Http\Controllers\Front\IndexController::class,"index"])->name("contact");

Route::get('/download_menu', [\App\Http\Controllers\Front\IndexController::class,"download"])->name("download_menu");

Route::get('/news', [\App\Http\Controllers\Front\NewsController::class,"index"])->name("all_news");

Route::get('/airports', [\App\Http\Controllers\Front\AirportsController::class,"index"])->name("all_airports");

Route::get('/news/{id}', [\App\Http\Controllers\Front\NewsController::class,"show"])->name("show_news");

Route::get('/airports/{id}', [\App\Http\Controllers\Front\AirportsController::class,"show"])->name("show_airport");

Route::post('logout', [LoginController::class, 'logout'])->name('logout');



Route::prefix('personal')->middleware("auth")->group(function (){

    Route::get('account', [App\Http\Controllers\Front\UserAccountController::class, 'index'])->name('account');

    Route::get('order', [App\Http\Controllers\Front\UserAccountController::class, 'order'])->name('order');

});



Route::prefix('admin_panel')->middleware('admin.status')->group(function () {

    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');

    Route::resource('post', PostController::class);

    Route::resource('menu', MenuController::class);

    Route::resource('user', UserController::class);

    Route::resource('menu', MenuController::class);

    Route::post('pdf', [MenuController::class,"upload"])->name("admin.pdf");

    Route::resource('airport', AirportController::class,['as' => 'admin']);

    Route::post('user/block/{user}', [UserController::class,'block'])->name("user.block");
});

