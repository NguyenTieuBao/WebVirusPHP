<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\User\UserController;

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

//User
Route::get('/', [UserController::class, 'index'])->name('user');
Route::get('/virus', [UserController::class, 'virus'])->name('virus');
Route::get('/virus/show', [UserController::class, 'show'])->name('showVirus');

// Login Admin
Route::get('admin', [LoginController::class, 'index'])->name('login');
Route::post('admin/store', [LoginController::class, 'store']);

// Admin
Route::get('admin/signOut', [LoginController::class, 'signOut'])->name('signout')->middleware('auth');
Route::resource('/category', CategoryController::class)->middleware('auth');
Route::resource('/product', ProductController::class)->middleware('auth');
Route::resource('/contact', ContactController::class);