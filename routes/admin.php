<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ChangeContentController;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
| 
*/

Route::group(['middleware' => 'AdminMiddleware'], function () {
    Route::get('/create/blog', [BlogController::class, 'seeBlog']);
    Route::post('/create/blog', [BlogController::class, 'storeBlog']);
    Route::resource('blogs', BlogController::class);
    Route::get('/blogs/delete/{blog}', [BlogController::class, 'destroy'])->name('blogs.delete');
    Route::get('/change/content', [ChangeContentController::class, 'allPages']);
    Route::get('/change/content/edit/{page}', [ChangeContentController::class, 'editContent']);
    Route::post('/change/content/update', [ChangeContentController::class, 'updateContent']);
});

Route::get('/register', [AdminController::class, 'indexRegister']);
Route::post('/register', [AdminController::class, 'register'])->name('register');
Route::get('/login', [AdminController::class, 'indexLogin']);
Route::post('/login', [AdminController::class, 'login'])->name('login');
