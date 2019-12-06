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

    public function show(Article $article)
    {
        // Show a single resource

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

        Article::create($this->validateArticle());
        return redirect('/articles');
    }

    public function edit(Article $article)
    {
        // Show a view to edit an existing resource

        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {
        // Persist the edited resource

        $article->update($this->validateArticle());
        return redirect('/articles/' . $article->id);
    }

    public function destroy()
    {
        // Delete the resource
    }

    /**
     * @return mixed
     */
    protected function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
