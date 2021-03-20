<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('category')->get('id', 'title', 'created_at');
        $articles = Article::all();
        return view('admin.article.index', compact('articles'));
    }

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

        return redirect()->route('article.show', compact('article'));
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
            // harus dibenerin
            // 'title' => 'required|string|max:255|unique:articles',
            'title' => 'required|string|max:255',
            'category' => 'required|exists:categories,id',
            'thumbnail' => 'mimes:jpg,bmp,png',
            'body' => 'required|string|max:5000'
        ]);

        $slug = Str::slug($request->title);

        $article->update([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'slug' => $slug,
            'category_id' => $request->category,
            'body' => $request->body,
        ]);

        if ($request->hasFile('thumbnail')) {
            //perlu di refactor
            Storage::delete($article->thumbnail->url);

            $extension = $request->file('thumbnail')->extension();
            $name = $slug . '.' . $extension;
            $path = $request->file('thumbnail')->storeAs(
                'public/images', $name
            );

            $article->thumbnail()->update([
                'url' => $path
            ]);
        }

        // return redirect()->route('admin.article.show', compact('article'));
        return redirect()->route('admin.article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Storage::delete($article->thumbnail->url);
        $article->thumbnail()->delete();
        $article->delete();

        return redirect()->back();
    }
}
