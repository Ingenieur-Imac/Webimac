<?php

namespace Imac\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Imac\Article;
use Imac\Http\Requests;
use Imac\Http\Requests\ArticleRequest;
use Imac\Http\Controllers\Controller;

class ArticlesController extends Controller {

    public function __construct(){
        $this->middleware('auth', ['only' => 'create']);
    }

    public function index(){

        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }

    public function show($id){
        $article = Article::findOrFail($id);

        return view('articles.show', compact('article'));
    }

    public function create(){
        return view('articles.create');
    }

    public function store(ArticleRequest $request){
        $article = new Article($request->all());
        \Auth::user()->articles()->save($article);
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
