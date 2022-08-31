<?php

use App\Http\Controllers\Admin\AirportController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Auth::routes();

Route::get('/', [\App\Http\Controllers\Front\IndexController::class,"index"])->name("index");

//Route::get('/upload', [\App\Http\Controllers\FileUploadController::class,"getFileUploadForm"])->name('admin.menu.create');
//Route::post('upload', [\App\Http\Controllers\FileUploadController::class, 'store' ])->name('store.file');

Route::get('/news', function()
{
    return View::make('admin.pages.news');
});

Route::get('/airports', function()
{
    return View::make('admin.pages.airports');
});

Route::get('/contact', function()
{
    return View::make('admin.pages.contact');
});

Route::get('/order', function()
{
    return View::make('admin.pages.order');
});

Route::get('/partnership', function()
{
    return View::make('admin.pages.partnership');
});

Route::get('/personal', function()
{
    return View::make('admin.pages.personal');
});

Route::get('/port', function()
{
    return View::make('admin.pages.port');
});

Route::get('/post', function()
{
    return View::make('admin.pages.post');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('user.status')->name('home');

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

//Route::group(['middleware' => ['auth','isUser']], function () {
//    Route::get('/home', 'HomeController@index')->name('home');
//}); 2
