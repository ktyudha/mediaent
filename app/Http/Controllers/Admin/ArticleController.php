<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:articles',
            'category' => 'required|exists:categories,id',
            'thumbnail' => 'required|mimes:jpg,bmp,png',
            'body' => 'required|string|max:5000'
        ]);

        $slug = Str::slug($request->title);

        $article = Article::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'slug' => $slug,
            'category_id' => $request->category,
            'body' => $request->body,
        ]);

        // thumbnail store
        $extension = $request->file('thumbnail')->extension();
        $name = $slug . '.' . $extension;
        $path = $request->file('thumbnail')->storeAs(
            'public/images', $name
        );

        $article->thumbnail()->create([
            'url' => $path
        ]);

        // return redirect()->route('admin.article.show', compact('article'));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('admin.article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('admin.article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:5000'
        ]);

        $article->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body' => $request->body,
        ]);

        return redirect()->route('admin.article.show', compact('article'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('admin.home');
    }
}
