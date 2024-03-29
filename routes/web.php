<?php

use App\Http\Controllers\Admin\AirportController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [\App\Http\Controllers\Front\IndexController::class,"index"])->name("index");

Route::get('/partnership', [\App\Http\Controllers\Front\IndexController::class,"partnership"])->name("partnership");

Route::get('/contact', [\App\Http\Controllers\Front\IndexController::class,"contact"])->name("contact");

Route::get('/download_menu', [\App\Http\Controllers\Front\IndexController::class,"download"])->name("download_menu");

Route::get('/news', [\App\Http\Controllers\Front\NewsController::class,"index"])->name("all_news");

Route::get('/airports', [\App\Http\Controllers\Front\AirportsController::class,"index"])->name("all_airports");

Route::get('/news/{slug}', [\App\Http\Controllers\Front\NewsController::class,"show"])->name("show_news");

Route::get('/airports/{slug}', [\App\Http\Controllers\Front\AirportsController::class,"show"])->name("show_airport");

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('order', [App\Http\Controllers\Front\UserAccountController::class, 'order'])->name('order');

Route::get('download_order/{order}', [App\Http\Controllers\Front\UserAccountController::class, 'download_order'])->name('order.download');

Route::get('upload_image', [App\Http\Controllers\Front\UserAccountController::class, 'upload_image'])->name('image.upload');

Route::get('get_menu', [App\Http\Controllers\Front\IndexController::class, 'get_menu'])->name('getMenu');

Route::get('get_posts', [App\Http\Controllers\Front\IndexController::class, 'get_posts'])->name('getPosts');

Route::prefix('personal')->middleware("auth")->group(function (){

    Route::get('account', [App\Http\Controllers\Front\UserAccountController::class, 'index'])->name('account');

    Route::post('upload_pdf',[\App\Http\Controllers\Front\UserAccountController::class,'upload_pdf'])->name('upload_pdf');
});

Route::prefix('admin_panel')->middleware('admin.status')->group(function () {

    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');

    Route::resource('post', PostController::class);

    Route::resource('menu', MenuController::class);

    Route::resource('user', UserController::class);

    Route::resource('menu', MenuController::class);

    Route::resource('order', OrderController::class);

    Route::post('order/change_status', [OrderController::class,'changeStatus'])->name('order.status');

    Route::post('pdf', [MenuController::class,"upload"])->name("admin.pdf");

    Route::resource('airport', AirportController::class,['as' => 'admin']);

    Route::post('airport/search', [AirportController::class,"search"])->name("admin.airport.search");

    Route::post('user/block/{user}', [UserController::class,'block'])->name("user.block");

    Route::post('order_pdf', [OrderController::class,"update"])->name("order_pdf");

    Route::get('pages',[\App\Http\Controllers\Admin\PagesController::class,"index"])->name("pages.index");

    Route::post('pages',[\App\Http\Controllers\Admin\PagesController::class,"save"])->name("pages.save");
});

