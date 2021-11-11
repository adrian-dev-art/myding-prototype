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




    Route::get('/', [PostController::class, 'index'])->middleware(['auth']);
    Route::get('/post/{id}', [PostController::class, 'show']);
    Route::get('/categories/{category:name}', [PostController::class, 'showByCategories']);
    Route::get('/profile/{id}', [UserController::class, 'show']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
