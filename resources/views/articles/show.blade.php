@extends('app')

@section('content')
    <br/>
    <h1>{{ $article->title }}</h1>
    <hr>

    <article>
        <div class="body">
            {{ $article->content }}
        </div>
    </article>
@endsection
