<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/category/{category:slug}', [PostController::class, 'category'])->name('posts.category');
Route::get('/posts/post/{post:slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('/legals', [MainController::class, 'legals'])->name('legals');
