<?php

namespace Imac\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Imac\Article;
use Imac\Http\Requests;
use Imac\Http\Requests\ArticleRequest;
use Imac\Http\Controllers\Controller;

class ArticlesController extends Controller {
    public function index(){
        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }

    public function show($id){
        Carbon::setLocale('fr');

        $article = Article::findOrFail($id);

        return view('articles.show', compact('article'));
    }

    public function create(){
        return view('articles.create');
    }

    public function store(ArticleRequest $request){
        Article::create($request->all());

        return redirect('articles');
    }

    public function edit($id){
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update($id, ArticleRequest  $request){
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');

    }
}
