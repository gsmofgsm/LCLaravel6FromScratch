<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        // Show a list of resources

        $articles = Article::latest()->paginate(2);
        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        // Show a single resource

        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        // Show a view to create a new resource

        return view('articles.create');
    }

    public function store()
    {
        // Persist the new resource

        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
        $article = new Article;
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();
        return redirect('/articles');
    }

    public function edit($id)
    {
        // Show a view to edit an existing resource

        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    public function update($id)
    {
        // Persist the edited resource

        $article = Article::find($id);
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();
        return redirect('/articles/' . $id);
    }

    public function destroy()
    {
        // Delete the resource
    }
}
