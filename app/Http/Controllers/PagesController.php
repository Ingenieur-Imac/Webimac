<?php

namespace Imac\Http\Controllers;

use Illuminate\Http\Request;
use Imac\Http\Requests;
use Imac\Http\Controllers\Controller;

class PagesController extends Controller{

    public function __construct(){
        //$this->middleware('auth');
    }

    public function index(){
        return view('pages.home');
    }

    public function admission(){
      return view('pages.admission');
    }

    public function contact(){
      return view('pages.contact');
    }

    public function about(){
        $name = "Julien Rousset";
        return view('about')->with([
            'first' => 'Julien',
            'last' => 'Rousset'
        ]);
    }

    public function timer(){
        $ts = null;
        $json = json_decode(file_get_contents(public_path().'/json/timer.json'),TRUE);
        if(isset($json['timer']['timestamp'])){
            $ts = $json['timer']['timestamp'];
        } else {
            abort(404);
        }
        return view('timer',compact('ts'));
    }


}
