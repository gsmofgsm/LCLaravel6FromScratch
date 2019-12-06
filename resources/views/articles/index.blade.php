@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                {{ $articles }}
                @foreach($articles as $article)
                    <div>
                        <div class="title">
                            <h2><a href="/articles/{{$article->id}}">{{ $article->title }}</a></h2>
                            <span class="byline">{{ $article->excerpt }}</span></div>
                        <p><img src="/images/banner.jpg" alt="" class="image image-full"/></p>
                        <p>{{ $article->body }}</p>
                    </div>
                @endforeach
                {{ $articles }}
            </div>
        </div>
    </div>
@endsection
