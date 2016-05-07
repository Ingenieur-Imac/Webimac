<?php
  $title = trans("messages.banner-admission-title");
  $banner_title = trans("messages.banner-admission-subtitle");
  $img = 'DSC00034.jpg';
?>

@extends('layouts.default')

@section('title')
    {{!! trans("messages.title-admission") !!}}
@endsection

@section('script')
    <script src="../vendor/jquery/dist/jquery.js"></script>
    <script src="{{URL::asset('../js/home.js')}}"></script>
@endsection

@section('content')
    @include('includes.banner', array('img' => $img, 'title' => $banner_title))
    @include('includes.subnav', array('img' => $img, 'title' => $title))
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->
    <div class="container">
        <div class="col-8 center-block">
            <h1 class="title-1">{!! trans("messages.admission-container-1-title") !!}</h1>
            <h2 class="title-2 center">{!! trans("messages.admission-container-1-subtitle") !!}</h2>
            <p class="lead">{!! trans("messages.admission-container-1-content-1") !!}</p>
            <p>{!! trans("messages.admission-container-1-content-2") !!}</p>
            <p>{!! trans("messages.admission-container-1-content-3") !!}</p>

            <div class="secondary-color-framed">
                <div class="secondary-color-framed">
                    <p class="secondary-color-framed-title">{!! trans("messages.admission-container-1-content-4-t") !!}</p>
                    <p>{!! trans("messages.admission-container-1-content-4-c") !!}</p>
                </div>
                <div class="secondary-color-framed">
                    <p class="secondary-color-framed-title">{!! trans("messages.admission-container-1-content-5-t") !!}</p>
                    <p>{!! trans("messages.admission-container-1-content-5-c") !!}</p>
                </div>
                <p class="secondary-color-framed-title bottom">{!! trans("messages.admission-container-1-content-6") !!}<br /><span class="lnr lnr-heart"></span></p>
            </div>
        </div>
    </div>

    <div class="light-row">
        <div class="container">
            <div class="col-8 center-block">
                <h2 class="title-2 center">{!! trans("messages.admission-container-2-title") !!}</h2>
                <p class="lead side-padding">{!! trans("messages.admission-container-2-subtitle") !!}</p>
            </div>
            <div class="col-4 col-offset-2">
                <h3 class="title-3"><span class="lnr lnr-pencil lnr-bigger"></span>{!! trans("messages.admission-container-2-content-1-t") !!}</h3>
                <p>{!! trans("messages.admission-container-2-content-1-c1-1") !!} {$dates['year'] !!} {!! trans("messages.admission-container-2-content-1-c1-2") !!} {$dates['openning'] !!}{!! trans("messages.admission-container-2-content-1-c1-3") !!}</p>
                <p>{!! trans("messages.admission-container-2-content-1-c2") !!}</p>
      	        <ul>
                    <li>{!! trans("messages.admission-container-2-content-1-c3") !!}{$dates['first_session'] !!}</li>
                    <li>{!! trans("messages.admission-container-2-content-1-c4") !!}{$dates['second_session'] !!}</li>
            </div>
            <div class="col-4 row-offset">
                <h3 class="title-3"><span class="lnr lnr-paperclip lnr-bigger"></span>{!! trans("messages.admission-container-2-content-2-t") !!}</h3>
                <p>{!! trans("messages.admission-container-2-content-2-c1") !!}</p>
                <p>{!! trans("messages.admission-container-2-content-2-c1") !!}</p>
            </div>
                <p class="center"><a class="btn filled-btn primary-btn" target="_BLANK" href="https://candidatures.u-pem.fr/">{!! trans("messages.admission-container-2-content-2-l") !!}</a></p>
        </div>
    </div>

    <div>
        <div class="container">
            <h2 class="title-2 center">{!! trans("messages.home-testimonial") !!}</h2>
            @include('includes.testimonial', $student_testimonials)
        </div>
    </div>
@endsection
