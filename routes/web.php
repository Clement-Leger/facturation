<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

// Route::get('/', function () {
//     return view('incex');
// });

Route::get('/', [ArticleController::class, 'getArticles'])->name('articles-list');
Route::get('/categories', [CatagoryController::class, 'getCategories'])->name('categories-list');
Route::get('/add-article', [ArticleController::class, 'createArticle'])->name('add-article');