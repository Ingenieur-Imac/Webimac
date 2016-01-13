<?php

namespace Imac\Http\Controllers;

use Illuminate\Http\Request;

use Imac\Article;
use Imac\Http\Requests;
use Imac\Http\Controllers\Controller;

class ArticlesController extends Controller {
    public function index(){
        $articles = Article::all();

        return view('articles.index', compact('articles'));
    }

    public function show($id){
        $article = Article::findOrFail($id);

        return view('articles.show',compact('article'));
    }

    public function create(){
        return view('articles.create');
    }
}
