<?php

namespace Imac\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Imac\Http\Requests;
use Imac\Http\Controllers\Controller;

class AdminPagesController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => 'login']);
        $this->middleware('guest',['only' => 'login']);
    }

    public function login(){
        return view('admin.auth.login');
    }

    public function admHome(){
        return view('admin.pages.home');
    }

    public function logout(){
        Auth::logout();
        return redirect('admin');
    }

}
