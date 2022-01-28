<?php

use App\Models\Article;
use App\Models\Category;
use App\Models\Video;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\SuggestBoxController;

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

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/article/{article}', [PagesController::class, 'show'])->name('article.show');
Route::post('comment/store', [CommentController::class, 'store'])->name('comment.store');
Route::post('suggestbox/store', [SuggestBoxController::class, 'store'])->name('suggestbox.store');
Route::delete('suggestbox/destroy', [SuggestBoxController::class, 'destroy'])->name('admin.suggestbox.destroy');
Route::get('suggestbox/index', [SuggestBoxController::class, 'index'])->name('admin.suggestbox.index');
Route::get('/video', [PagesController::class, 'videos'])->name('video');
Route::get('/category/{category}',[PagesController::class, 'categories'])->name('category.show');
Route::get('/about', [PagesController::class, 'about'])->name('about');

Route::get('/kategori', function () {
    return view('kategori');
})->name('kategori');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

require __DIR__ . '/auth.php';
