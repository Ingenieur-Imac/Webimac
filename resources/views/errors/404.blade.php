@extends('layouts.default')

@section('title')
    Erreur 404 :'(
@endsection

@section('content')
    <div class="container">
        <div class="col-4 col-offset-2 middle-valign-ib center">
            <h1 class="title-1">Erreur 404</h1>
            <p class="lead">Vous avez cassé l'internet...</p>
            <p class="lead"><span class="lnr lnr-poop"></span></p>
        </div>
        <div class="col-4 middle-valign-ib">
            <img src="{{URL::asset('images/winInternet.gif')}}" alt="You Win the Internet" />
        </div>
        <div class="col-12 center">
            <a href="{{ action('PagesController@index') }}" class="btn dark-btn">Retour à la page d'accueil</a>
        </div>
    </div>
@endsection
