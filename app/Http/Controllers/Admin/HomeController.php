<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Article, Comment, Video, User};

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.home', [
            'articles' => Article::count(),
            'users' => User::count(),
            'comments' => Comment::count(),
            'videos' => Video::count(),
        ]);
    }
}
