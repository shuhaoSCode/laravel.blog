@extends('app')

@section('content')
    <br/>
    <h2>Articles</h2>
    <hr>
    @foreach($articles as $article)
        <h3><a href="{{ url('/articles/show',$article->id) }}">{{ $article->title }}</a></h3>
        <article>
            <div class="body">
                姓名：<a href="http://google.com">{{ $article->content }}</a>
            </div>
        </article>
    @endforeach
@endsection
