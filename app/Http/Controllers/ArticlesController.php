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
    }

    public function store()
    {
        // Persist the new resource
    }

    public function edit()
    {
        // Show a view to edit an existing resource
    }

    public function update()
    {
        // Persist the edited resource
    }

    public function destroy()
    {
        // Delete the resource
    }
}
