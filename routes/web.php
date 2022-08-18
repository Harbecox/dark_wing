<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AirportController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Auth::routes();

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

Route::get('/index', function()
{
    return View::make('admin.pages.index');
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

    Route::resource('user', UserController::class);

    Route::resource('airport', AirportController::class,['as' => 'admin']);

    Route::post('user/block/{user}', [UserController::class,'block'])->name("user.block");
});

//Route::group(['middleware' => ['auth','isUser']], function () {
//    Route::get('/home', 'HomeController@index')->name('home');
//}); 2
