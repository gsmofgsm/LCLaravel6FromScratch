@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <h1>New Article</h1>

                <form method="post" action="/articles">
                    @csrf

                    <div class="group">
                        <div class="field">
                            <label for="title" class="label">Title</label>
                        </div>

                        <div class="control">
                            <input class="input" type="text" name="title" id="title">
                        </div>
                    </div>

                    <div class="group">
                        <div class="field">
                            <label for="excerpt" class="label">Excerpt</label>
                        </div>

                        <div class="control">
                            <textarea class="input" type="text" name="excerpt" id="excerpt"></textarea>
                        </div>
                    </div>

                    <div class="group">
                        <div class="field">
                            <label for="body" class="label">Body</label>
                        </div>

                        <div class="control">
                            <textarea class="input" type="text" name="body" id="body"></textarea>
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
