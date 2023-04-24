<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ArticleController, CategoryController, SupplierController, migrationController};
use App\Models\Supplier;

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

// CATEGORIES 
Route::get('/categories', [CategoryController::class, 'getCategories'])->name('categories');
Route::get('/add-category', [CategoryController::class, 'addCategory'])->name('add-category');
Route::post('/create-category', [CategoryController::class, 'createCategory'])->name('create-category');

// ARTICLES
Route::get('/add-article', [ArticleController::class, 'addArticle'])->name('add-article');
Route::post('/create-article', [ArticleController::class, 'createArticle'])->name('create-article');

// FOURNISSEURS
Route::get('/suppliers', [SupplierController::class, 'getSuppliers'])->name('suppliers');
Route::get('/add-supplier', [SupplierController::class, 'addSupplier'])->name('add-supplier');
Route::post('/create-supplier', [SupplierController::class, 'createSupplier'])->name('create-supplier');

// MIGRATIONS
Route::get('/migrations', [migrationController::class, 'getMigrations'])->name('migrations');
Route::any('/run-migration', [migrationController::class, 'runMigrations'])->name('run-migrations');