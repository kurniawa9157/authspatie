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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware'=>['role:writer|admin']],function(){
    Route::get('/view', [App\Http\Controllers\PostController::class, 'view'])->name('view');
    Route::get('/create', [App\Http\Controllers\PostController::class, 'create'])->name('create');
    Route::get('/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('edit');
    Route::get('/delete', [App\Http\Controllers\PostController::class, 'delete'])->name('delete');
});

Route::group(['middleware'=>['role:admin|superadmin']],function(){
    Route::get('/view', [App\Http\Controllers\PostController::class, 'view'])->name('view');
    Route::get('/create', [App\Http\Controllers\PostController::class, 'create'])->name('create');
    Route::get('/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('edit');
    Route::get('/delete', [App\Http\Controllers\PostController::class, 'delete'])->name('delete');
    Route::get('/publish', [App\Http\Controllers\PostController::class, 'publish'])->name('publish');
    Route::get('/unpublish', [App\Http\Controllers\PostController::class, 'unpublish'])->name('unpublish');
});
