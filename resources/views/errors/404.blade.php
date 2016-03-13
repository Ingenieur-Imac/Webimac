@extends('layouts.default')

@section('title')
    Erreur 404 :'(
@endsection

@section('content')
    <div class="container error404">
        <div class="inline-block">
            <h1>Erreur 404</h1>
            <p>Vous avez cassé l'internet <span class="lnr lnr-poop"></span></p>
        </div>
        <div class="inline-block">
            <img src="{{URL::asset('images/winInternet.gif')}}" alt="You Win the Internet" />
        </div>
        <div class="clear"></div>
        <div class="btn btn-black"><a href="{{action('PagesController@index')}}">Retour à la page d'accueil</a></div>
    </div>
@endsection
