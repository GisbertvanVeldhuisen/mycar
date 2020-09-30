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

Route::get('/', [\App\Http\Controllers\UserController::class, 'getUsers']);

Route::post('/', [\App\Http\Controllers\UserController::class, 'delete']);
//




Route::get('/admin', function () {
    return view('admin-page');
});

Route::get('/test', function () {
    return view('test');
});


Route::get('/index', 'IndexController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
