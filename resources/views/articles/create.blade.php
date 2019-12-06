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
                            <input
                                class="input @error('title') is-danger @enderror"
                                type="text"
                                name="title"
                                id="title"
                                value="{{ old('title') }}">
                            @error('title')
                                <p class="help is-danger">{{ $errors->first('title') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="group">
                        <div class="field">
                            <label for="excerpt" class="label">Excerpt</label>
                        </div>

                        <div class="control">
                            <textarea class="input @error('excerpt') is-danger @enderror" type="text" name="excerpt" id="excerpt">
                                {{ old('excerpt') }}
                            </textarea>
                            @error('excerpt')
                                <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="group">
                        <div class="field">
                            <label for="body" class="label">Body</label>
                        </div>

                        <div class="control">
                            <textarea class="input @error('body') is-danger @enderror" type="text" name="body" id="body">
                                {{ old('body') }}
                            </textarea>
                            @error('body')
                                <p class="help is-danger">{{ $errors->first('body') }}</p>
                            @enderror
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
