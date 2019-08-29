<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Redirector;
use App\Http\Requests\ArticleFormRequest;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show')->with('article', $article);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function abc()
    {
        return view('articles.abc');
    }

    public function store(ArticleFormRequest $request)
    {
        $title = Input::get('title');
        $content = Input::get('content');
        Article::create([
            'title' => $title,
            'content'=> $content
        ]);

        return redirect()->route('article.index');
    }

}
