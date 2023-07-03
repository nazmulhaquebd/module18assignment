<?php

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

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

Route::delete('/posts/{id}/delete', [PostController::class, 'delete'])->name('posts.delete');
Route::get('/posts', [PostController::class, 'index']);

Route::get('/categories/{id}/posts', [CategoryController::class, 'getPosts'])->name('categories.posts');
Route::get('/latest-posts', [CategoryController::class, 'index']);
