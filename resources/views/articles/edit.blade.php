@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <h1>Update Article</h1>

                <form method="POST" action="{{ $article->path() }}">
                    @csrf
                    @method('PUT')

                    <div class="group">
                        <div class="field">
                            <label for="title" class="label">Title</label>
                        </div>

                        <div class="control">
                            <input class="input" type="text" name="title" id="title" value="{{ $article->title }}">
                        </div>
                    </div>

                    <div class="group">
                        <div class="field">
                            <label for="excerpt" class="label">Excerpt</label>
                        </div>

                        <div class="control">
                            <textarea class="input" type="text" name="excerpt" id="excerpt">{{ $article->excerpt }}</textarea>
                        </div>
                    </div>

                    <div class="group">
                        <div class="field">
                            <label for="body" class="label">Body</label>
                        </div>

                        <div class="control">
                            <textarea class="input" type="text" name="body" id="body">{{ $article->body }}</textarea>
                        </div>
                    </div>

                    <div class="group">
                        <div class="control">
                            <button class="button" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
