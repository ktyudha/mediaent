<?php

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
    return view('home');
})->name('home');

Route::get('/article/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/detail', function () {
    return view('detail');
})->name('detail');

Route::get('/admin_video', function () {
    return view('admin_video');
})->name('admin_video');

Route::get('/admin_calendar', function () {
    return view('admin_calendar');
})->name('admin_calendar');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/kategori', function () {
    return view('kategori');
})->name('kategori');

Route::get('/about', function () {
    return view('about');
})->name('about');

require __DIR__.'/auth.php';
