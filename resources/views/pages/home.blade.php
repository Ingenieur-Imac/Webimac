<?php
  $title = trans("messages.banner-home-title-1");
  $img = 'Home_banner.jpg';
  $text = trans("messages.banner-home-content");
?>

@extends('layouts.default')

@section('title')
    {!! trans("messages.title-home") !!}
@endsection

@section('script')
    <script src="vendor/jquery/dist/jquery.js"></script>
    <script src="{{URL::asset('js/home.js')}}"></script>
@endsection

@section('content')
    @include('includes.banner', array('img' => $img, 'title' => $title, 'text' => $text))

    <div class="container flex-parent center">
        <div class="col-4 flex-parent-col">
            <span class="lnr lnr-magic-wand lnr-7x"></span>
            <h2 class="title-3 center">{!! trans("messages.home-triblock-1-title") !!}</h2>
            <p class="flex-description">{!! trans("messages.home-triblock-1-description") !!}</p>
            <a class="btn filled-btn primary-btn" href="{{action('PagesController@presentation')}}">{!! trans("messages.home-triblock-1-link") !!}</a>
        </div>
        <div class="col-4 flex-parent-col row-offset">
            <span class="lnr lnr-diamond lnr-7x"></span>
            <h2 class="title-3 center">{!! trans("messages.home-triblock-2-title") !!}</h2>
            <p class="flex-description">{!! trans("messages.home-triblock-2-description") !!}</p>
            <a class="btn filled-btn primary-btn" href="{{action('PagesController@projects')}}">{!! trans("messages.home-triblock-2-link") !!}</a>
        </div>
        <div class="col-4 flex-parent-col row-offset">
            <span class="lnr lnr-rocket lnr-7x"></span>
            <h2 class="title-3 center">{!! trans("messages.home-triblock-3-title") !!}</h2>
            <p class="flex-description">{!! trans("messages.home-triblock-3-description") !!}</p>
            <a class="btn filled-btn primary-btn" href="{{action('PagesController@openings')}}">{!! trans("messages.home-triblock-3-link") !!}</a>
        </div>
    </div>

    <div class="light-row">
        <div class="container">
            <h2 class="title-2">{!! trans("messages.home-project") !!}</h2>
            <div class="flex-parent">
                @include('includes.projectHome', $projects)
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-10 center-block">
            <h2 class="title-2">{!! trans("messages.home-testimonial") !!}</h2>
            @include('includes.testimonial', array('testimonials' => $student_testimonials, 'folder' => 'studentTestimonial'))
        </div>
    </div>
@endsection
