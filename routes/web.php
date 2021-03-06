<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth;
use App\Http\Controllers\UserController;

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



    Route::get('/', [PostController::class, 'index'])->middleware('auth');

    Route::resource('post', PostController::class)->middleware('auth');
    Route::get('/post/checkSlug/', [PostController::class, 'checkSlug'])->middleware('auth');

    Route::get('/categories/{category:name}', [PostController::class, 'showByCategories']);
    Route::get('/profile/{user:username}', [UserController::class, 'show'])->name('profile');
    
   

require __DIR__.'/auth.php';
