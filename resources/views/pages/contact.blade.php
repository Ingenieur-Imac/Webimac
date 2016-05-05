<?php
  $banner_title = '';
  $img = 'hand.jpg';
?>

@extends('layouts.default')

@section('title')
    Nous contacter | IMAC ingénieur
@endsection

@section('script')
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
    <script src="{{URL::asset('js/map.js')}}"></script>
@endsection

@section('content')
    @include('includes.banner', array('img' => $img, 'title' => $banner_title))
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->
    <div class="container">
        <div class="col-12">
            <h1 class="title-1">Nous contacter</h1>
        </div>
        <div class="col-3 col-offset-1">
            <h2 class="title-5">Adresse</h2>
            <p>
                École d'ingénieur IMAC - ESIPE<br />
                5 boulevard Descartes<br />
                77420 Champs-sur-Marne
            </p>
            <h2 class="title-5">Accès</h2>
            <p>RER A - Station Noisy-Champs</p>
            <h2 class="title-5">Email</h2>
            <p>sec.imac[at]u-pem.fr</p>
            <h2 class="title-5">Téléphone</h2>
            <p>01.60.95.72.16</p>
            <h2 class="title-5">Secrétariat</h2>
            <p>Bâtiment Copernic - Bureau 1B025</p>
            <p>
                Du lundi au vendredi : 7h45 - 12h45 et 13h45 - 16h<br />
                Fermé le vendredi après-midi
            </p>
            <h2 class="title-5">Nous suivre</h2>
            <p class="social-icons">
                <a href="https://www.linkedin.com/grps/Ing%C3%A9nieur-IMAC-3693605/about?" target="_blank">
                    <span class="icon-linkedin color"></span>
                </a>
                <a href="https://www.facebook.com/ingenieur.imac.officiel/" target="_blank">
                    <span class="icon-facebook color"></span>
                </a>
                <a href="https://twitter.com/imac_ingenieur" target="_blank">
                    <span class="icon-twitter-bird color"></span>
                </a>
            </p>
        </div>
        <div class="col-6 col-offset-1">
            <p class="light-text">(Les champs indiqués par une * sont obligatoires.)</p>
            {{ Form::open(['url' => 'foo/bar', 'class' => 'clearfix']) }}
                {!! Form::email('email', null, ['placeholder' => 'Votre e-mail*', 'required' => 'required']) !!}
                {!! Form::text('name', null, ['placeholder' => 'Nom, nom d\'entreprise']) !!}
                {!! Form::text('subject', null, ['placeholder' => 'Objet de l\'e-mail*', 'required' => 'required']) !!}
                {!! Form::textarea('message', null, ['placeholder' => 'Message*', 'required' => 'required']) !!}
                {!! Form::label('antispam', 'Complétez l\'opération à trou : 1 + '); !!}
                {!! Form::text('antispam', null, ['placeholder' => '?*', 'class' => 'antispam', 'required' => 'required']) !!} = 2
                {!! Form::submit('Envoyer') !!}
            {{ Form::close() }}

        </div>
    </div>

    <div id="map"></div>
@endsection
