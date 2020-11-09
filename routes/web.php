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
Route::get('/', [\App\Http\Controllers\HomePageController::class, 'getHome'])->name('home');

//elementen
Route::get('/elementen', function () {
    return view('welcome');
});

// Car page
Route::get('/car', function () {
    return view('car');
});

Route::get('/car', [\App\Http\Controllers\CarPageController::class, 'getCars']);

Route::post('/car', [\App\Http\Controllers\CarPageController::class, 'reportButton']);

// Admin page
Route::get('/admin', function () {
    return view('admin-page');
});
//Route::post('/', [\App\Http\Controllers\UserController::class, 'delete']);

Route::post('/home-edit', [\App\Http\Controllers\HomePageController::class, 'updateOrCreate']);
Route::post('/home-edit', [\App\Http\Controllers\HomePageController::class, 'updateOrCreate']);


Route::get('/home-edit', [\App\Http\Controllers\HomePageController::class, 'getFormInfo']);

Auth::routes();

//Post
Route::get('/post', function (){
    return view('post');
});

Route::post('/post', [\App\Http\Controllers\PostController::class, 'create']);

Route::get('/post', [\App\Http\Controllers\PostController::class, 'getPost']);

Route::put('/post', [\App\Http\Controllers\PostController::class, 'deletePost']);

//Admin check
Route::middleware(['auth','admin'])->group(function () {
    Route::get('/home-edit', [\App\Http\Controllers\UserController::class, 'index1']);
    Route::get('/admin', [\App\Http\Controllers\UserController::class, 'index2']);
    Route::get('/admin-panel', [\App\Http\Controllers\AdminController::class, 'adminPanel']);
    Route::post('/admin-panel', [\App\Http\Controllers\AdminController::class, 'deleteUser']);
    Route::post('/admin-panel', [\App\Http\Controllers\AdminController::class, 'deletePost']);
});

//Single page for post (moet onderaan in web.php)
Route::get('/{post_id}', [\App\Http\Controllers\PostController::class, 'singlePageContent'])->name('single-page');
