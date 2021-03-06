<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        // Show a list of resources

        if ($tag = request('tag')) {
            $tag = Tag::where('name', $tag)->firstOrFail();
            $articles = $tag->articles;
        } else {
            $articles = Article::latest()->paginate(2);
        }
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

        return view('articles.create', [
            'tags' => Tag::all()
        ]);
    }

    public function store()
    {
        // Persist the new resource

        $this->validateArticle();
        $article = new Article(request(['title', 'excerpt', 'body']));
        $article->user_id = 1;
        $article->save();

        $article->tags()->attach(request('tags'));
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
        return redirect($article->path());
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
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }
}
