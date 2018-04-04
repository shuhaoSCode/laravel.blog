<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function index()
    {
        //$articles = Article::all();
        //latest 根据时间倒序
        //$articles = Article::latest()->where('published_at','<=',Carbon::now())->get();
        $articles = Article::latest()->published()->get();
        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        dd($article->published_at->diffForHumans());
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        //$input['published_at'] = Carbon::now();
        Article::create($input);
        return redirect('/articles');
    }
}
