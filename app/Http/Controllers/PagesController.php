<?php

namespace App\Http\Controllers;

use App\Models\{Article, Category};
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $latest_articles = Article::with('category', 'thumbnail')->latest()->take(5)->get();
        $articles = Article::latest()->paginate(10);

        return view('home', compact([
            'latest_articles',
            'articles'
        ]));
    }

    public function show(Article $article)
    {
        return view('admin.article.show', compact('article'));
    }

    public function categories(Category $category)
    {
        $articles = $category->articles()->latest()->get();
        $videos = $category->videos()->latest()->get();

        return view('kategori', compact(['articles', 'videos']));
    }
}
