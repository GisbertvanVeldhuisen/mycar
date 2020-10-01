<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Routes for welcome blade
Route::get('/', function () {
    return view('welcome');
});

// Admin panel page
Route::get('/admin-panel', [\App\Http\Controllers\UserController::class, 'getUsers']);

Route::post('/admin-panel', [\App\Http\Controllers\UserController::class, 'delete']);

// Car page
Route::get('/car', function () {
    return view('car');
});

Route::get('/car', [\App\Http\Controllers\CarPageController::class, 'getBrands']);

Route::get('/admin', function () {
    return view('admin-page');
});

Route::get('/home-edit', function () {
    return view('home-page-edit');
});

Route::post('/home-edit', [\App\Http\Controllers\HomePageController::class, 'updateOrCreate']);

Route::get('/test2', [\App\Http\Controllers\HomePageController::class, 'getHome']);

Route::get('/home-edit', [\App\Http\Controllers\HomePageController::class, 'getFormInfo']);

Route::get('/home2', function () {
    return view('home-page');
});

Route::get('/home2', [\App\Http\Controllers\HomePageController::class, 'getHome']);

Route::get('/index', 'IndexController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
