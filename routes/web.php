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
})->name('home');

<<<<<<< Updated upstream
// Admin panel page
=======
// Admin panel
>>>>>>> Stashed changes
Route::get('/admin-panel', [\App\Http\Controllers\UserController::class, 'getUsers']);

Route::post('/admin-panel', [\App\Http\Controllers\UserController::class, 'delete']);

// Car page
Route::get('/car', function () {
    return view(    'car');
});

Route::get('/car', [\App\Http\Controllers\CarPageController::class, 'getCars']);


<<<<<<< Updated upstream
// Admin page
Route::get('/admin', function () {
    return view('admin-page');
});
=======
Route::post('/', [\App\Http\Controllers\UserController::class, 'delete']);
>>>>>>> Stashed changes

// Home
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

//Index
Route::get('/index', 'IndexController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Post
Route::get('/post', function (){
    return view('post');
});

Route::post('/post', [\App\Http\Controllers\PostController::class, 'create']);

Route::get('/post', [\App\Http\Controllers\PostController::class, 'getPost']);

Route::put('/post', [\App\Http\Controllers\PostController::class, 'deletePost']);

//Single page
Route::get('/{post_id}', [\App\Http\Controllers\PostController::class, 'singlePageContent'])->name('single-page');

//Admin check
Route::middleware(['auth','admin'])->group(function () {
    Route::get('/admin-panel', [\App\Http\Controllers\UserController::class, 'index']);
});
