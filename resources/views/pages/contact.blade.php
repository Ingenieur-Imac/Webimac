<?php
  $banner_title = trans("messages.banner-contact-title");
  $img = 'hand.jpg';
?>

@extends('layouts.default')

@section('title')
    {{trans("messages.title-contact")}}
@endsection

@section('content')
    @include('includes.banner', array('img' => $img, 'title' => $banner_title))
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->
    <div class="container">
        <div class="col-12">
            <h1 class="title-1">{{trans("messages.contact-form-title")}}</h1>
        </div>
        <div class="col-6 col-offset-1">
            {{ Form::open(array('url' => 'foo/bar')) }}
                {!! Form::email('email', null, ['placeholder'=> trans("messages.contact-input-ph-1")]) !!}
                {!! Form::text('name', null, ['placeholder'=> trans("messages.contact-input-ph-2")]) !!}
                {!! Form::text('subject', null, ['placeholder'= trans("messages.contact-input-ph-3")]) !!}
                {!! Form::textarea('message', null, ['placeholder' =>  trans("messages.contact-input-ph-4")]) !!}
                {!! Form::label('antispam',  trans("messages.contact-input-ph-5")); !!}
                {!! Form::text('antispam', null, ['placeholder'=> trans("messages.contact-input-ph-6")]) !!}
                {!! Form::submit( trans("messages.contact-input-ph-7")) !!}
            {{ Form::close() }}
        </div>
        <div class="col-3 col-offset-1">
            <h2 class="title-5">{{trans("messages.contanct-info-1")}}</h2>
            <p>
                École d'ingénieur IMAC - ESIPE<br />
                5 boulevard Descartes<br />
                77420 Champs-sur-Marne
            </p>
            <h2 class="title-5">{{trans("messages.contanct-info-2")}}</h2>
            <p>RER A - Station Noisy-Champs</p>
            <h2 class="title-5">{{trans("messages.contanct-info-3")}}</h2>
            <p>sec.imac[at]u-pem.fr</p>
            <h2 class="title-5">{{trans("messages.contanct-info-4")}}</h2>
            <p>01.60.95.72.16</p>
            <h2 class="title-5">{{trans("messages.contanct-info-5")}}</h2>
            <p>{{trans("messages.contanct-info-6")}}</p>
            <p>
                {{trans("messages.contact-info-7")}}<br />
                {{trans("messages.contact-info-8")}}
            </p>
            <h2 class="title-5">{{trans("messages.contact-info-9")}}</h2>
            <a href="https://www.linkedin.com/grps/Ing%C3%A9nieur-IMAC-3693605/about?" target="_blank">
                <span class="icon-linkedin color"></span>
            </a>
            <a href="https://www.facebook.com/ingenieur.imac.officiel/" target="_blank">
                <span class="icon-facebook color"></span>
            </a>
            <a href="https://twitter.com/imac_ingenieur" target="_blank">
                <span class="icon-twitter-bird color"></span>
            </a>
        </div>
        <div class="fluid-container">
            <div class="media-container">
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2208.1671561461085!2d2.5856766820983466!3d48.839747292836044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60e3214540483%3A0x3261ce9b28031328!2s5+Boulevard+Descartes%2C+77420+Champs-sur-Marne!5e0!3m2!1sfr!2sfr!4v1453393530340" frameborder="0" style="border: 0; height: 325px;" allowfullscreen></iframe> -->
            </div>
        </div>
    </div>
@endsection
