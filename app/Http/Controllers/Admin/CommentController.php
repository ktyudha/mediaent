<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
class CommentController extends Controller
{
    public function store(Request $request)
    {
        $article = Article::find($request->article_id);
        $request->validate([
            'body' => 'required|string|max:5000'
        ]);

        $article->comments()->create([
            'user_id' => auth()->user()->id,
            'commentable_id' => $request->article_id,
            'body' => $request->body,
        ]);

        return redirect()->route('article.show', compact('article'));
    }
}
