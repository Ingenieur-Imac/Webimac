<?php

namespace Imac\Http\Controllers;

use Illuminate\Http\Request;

use Imac\Http\Requests;
use Imac\Http\Controllers\Controller;

class PagesController extends Controller{

    public function __construct(){
        $this->middleware('guest');
    }

    public function index(){
        return view('welcome');
    }

    public function about(){
        $name = "Julien Rousset";
        return view('about')->with([
            'first' => 'Julien',
            'last' => 'Rousset'
        ]);
    }


}
