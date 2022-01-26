<?php

namespace App\Http\Controllers;

use App\Models\{Article, Category, Video};
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $latest_articles = Article::with('category', 'thumbnail')->latest()->take(5)->get();
        $articles = Article::latest()->paginate(10);
        $latest_videos = Video::with('category')->latest()->take(2)->get();

        return view('home', compact([
            'latest_articles',
            'articles',
            'latest_videos'
        ]));
    }

    public function show(Article $article)
    {
        return view('admin.article.show', [
            'article' => $article,
            'next' => Article::where('id', '>', $article->id)->orderBy('id')->first(),
			'previous' => Article::where('id', '<', $article->id)->orderBy('id', 'desc')->first(),
            'similar_articles' => $article->relatedArticleByCategories()
        ]);
    }

    public function categories(Category $category)
    {
        $articles = $category->articles()->latest()->get();
        $videos = $category->videos()->latest()->get();

        return view('kategori', compact(['articles', 'videos']));
    }
}
