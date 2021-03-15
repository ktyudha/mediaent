<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/detail', function () {
    return view('detail');
})->name('detail');

Route::get('/admin_artikel', function () {
    return view('admin_artikel');
})->name('admin_artikel');

Route::get('/admin_video', function () {
    return view('admin_video');
})->name('admin_video');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/about', function () {
    return view('about');
})->name('about');

require __DIR__.'/auth.php';
