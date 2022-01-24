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
    $articles_recent = Article::with('category', 'thumbnail')->latest()->take(5)->get();
    // $articles_lifestyle = Category::find(1)->articles()->latest()->take(4)->get();
    // $articles_hiburan = Category::find(2)->articles()->latest()->take(4)->get();
    // $articles_teknologi = Category::find(3)->articles()->latest()->take(4)->get();
    // $articles_explore = Category::find(4)->articles()->latest()->take(4)->get();
    // $video_lifestyle = Category::find(1)->videos()->latest()->first();
    // $video_hiburan = Category::find(2)->videos()->latest()->first();
    // $video_teknologi = Category::find(3)->videos()->latest()->first();
    // $video_explore = Category::find(4)->videos()->latest()->first();
    $articles = Article::latest()->paginate(10);

    return view('home', compact([
        'articles_recent',
        // 'articles_lifestyle',
        // 'articles_hiburan',
        // 'articles_teknologi',
        // 'articles_explore',
        // 'video_lifestyle',
        // 'video_hiburan',
        // 'video_teknologi',
        // 'video_explore',
        'articles'
]));
})->name('home');

Route::get('/article/{article}', [ArticleController::class, 'show'])->name('article.show');

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
    $videos = $category->videos()->latest()->get();

    return view('kategori', compact(['articles', 'videos']));
})->name('category.show');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

require __DIR__ . '/auth.php';
