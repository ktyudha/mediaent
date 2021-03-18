<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\ArticleController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

Route::middleware(['role:admin'])->group(function () {
    Route::get('/author', [AuthorController::class, 'index'])->name('author');
    Route::post('/author/add', [AuthorController::class, 'add'])->name('author.add');
    Route::post('/author/remove/{email}', [AuthorController::class, 'remove'])->name('author.remove');
});

Route::resource('article', ArticleController::class)->except('show');
