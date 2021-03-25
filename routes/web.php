<?php

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArticleController;

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
    $articles_recent = Article::with('category', 'thumbnail')->latest()->take(4)->get();
    $articles_lifestyle = Category::find(1)->articles()->latest()->take(4)->get();
    $articles_hiburan = Category::find(2)->articles()->latest()->take(4)->get();
    $articles_teknologi = Category::find(3)->articles()->latest()->take(4)->get();
    $articles_explore = Category::find(4)->articles()->latest()->take(4)->get();

    return view('home', compact(['articles_recent', 'articles_lifestyle', 'articles_hiburan', 'articles_teknologi', 'articles_explore']));
})->name('home');

Route::get('/article/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/kategori', function () {
    return view('kategori');
})->name('kategori');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/coba', function () {
    return view('coba');
})->name('coba');

Route::get('/category/{category}', function (Category $category) {
    $articles = $category->articles()->latest()->get();

    return view('kategori', compact('articles'));
})->name('category.show');

require __DIR__ . '/auth.php';
