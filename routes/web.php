<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Models\Category;


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

// Route::get('/', function () {
//     return view('user.show');
// });
    
Route::get('/', [PostController::class, 'index']);

Route::get('/post/{id}', [PostController::class, 'show']);

Route::get('/categories/{category:name}',  [PostController::class, 'showByCategories']);

// Route::get('/categories/{category:name}', function(Category $category){
//     return view('user.index',[
//         'post' => $category->posts,
//         'category' => $category->name,
//     ]);
// });