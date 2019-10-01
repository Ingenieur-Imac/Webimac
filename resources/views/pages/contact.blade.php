<?php
  $banner_title = '';
  $img = 'hand.jpg';
?>

@extends('layouts.default')

@section('title')
    {!! trans("messages.title-contact") !!}
@endsection

@section('script')
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
    <script src="{!! URL::asset('js/map.js') !!}"></script>
@endsection

@section('content')
    @include('includes.banner', array('img' => $img, 'title' => $banner_title))
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->
    <div class="container">
        <div class="col-12">
            <h1 class="title-1">{!! trans("messages.contact-form-title") !!}</h1>
        </div>
        <div class="col-3 col-offset-1">
            <h2 class="title-5">{!! trans("messages.contact-info-1") !!}</h2>
            <p>
                École d'ingénieur IMAC - ESIPE<br />
                5 boulevard Descartes<br />
                77420 Champs-sur-Marne
            </p>
            <h2 class="title-5">{!! trans("messages.contact-info-2") !!}</h2>
            <p>RER A - Station Noisy-Champs</p>
            <h2 class="title-5">{!! trans("messages.contact-info-3") !!}</h2>
            <p>sec.imac[at]u-pem.fr</p>
            <h2 class="title-5">{!! trans("messages.contact-info-4") !!}</h2>
            <p>01.60.95.72.16</p>
            <h2 class="title-5">{!! trans("messages.contact-info-5") !!}</h2>
            <p>{!! trans("messages.contact-info-6") !!}</p>
            <p>
                {!! trans("messages.contact-info-7") !!}<br />
                {!! trans("messages.contact-info-8") !!}
            </p>
            <h2 class="title-5">{!! trans("messages.contact-info-9") !!}</h2>
            <p class="social-icons">
                <a href="https://www.linkedin.com/school/ingenieur-imac/" target="_blank">
                    <span class="icon-linkedin color"></span>
                </a>
                <a href="https://www.facebook.com/ingenieur.imac.officiel/" target="_blank">
                    <span class="icon-facebook color"></span>
                </a>
                <a href="https://twitter.com/imac_ingenieur" target="_blank">
                    <span class="icon-twitter-bird color"></span>
                </a>
                <a href="https://www.instagram.com/imacworldwide/" target="_blank">
                    <span class="icon-instagram color"></span>
                </a>
            </p>
        </div>
        <div class="col-6 col-offset-1">
            <p class="light-text">(Les champs indiqués par une * sont obligatoires.)</p>
            {!!  Form::open(['url' => 'mail/contact', 'class' => 'clearfix'])  !!}
                {!! Form::email('email', null, ['placeholder' => trans("messages.contact-input-ph-1"), 'required' => 'required']) !!}
                {!! Form::text('name', null, ['placeholder' => trans("messages.contact-input-ph-2")]) !!}
                {!! Form::text('subject', null, ['placeholder' => trans("messages.contact-input-ph-3"), 'required' => 'required']) !!}
                {!! Form::textarea('message', null, ['placeholder' => trans("messages.contact-input-ph-4"), 'required' => 'required']) !!}
                {!! Form::label('antispam', trans("messages.contact-input-ph-5")); !!}
                {!! Form::text('antispam', null, ['placeholder' => trans("messages.contact-input-ph-6"), 'class' => 'antispam', 'required' => 'required']) !!} = 2
                {!! Form::submit(trans("messages.contact-input-ph-7")) !!}
            {!!  Form::close()  !!}
        </div>
    </div>

    <div id="map"></div>
@endsection
