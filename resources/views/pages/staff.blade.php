<?php
  $banner_title = trans("messages.stf-title");
  $img = 'Maths.jpg';
?>


@extends('layouts.default')

@section('title')
    {!! trans("messages.title-stf") !!}
@endsection

@section('content')
    @include('includes.banner', array('img' => $img, 'title' => $banner_title))
    @include('includes.subnav')
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->

    <div class="container">
        <div class="col-10 center-block">
            <h1 class="title-1">{!! trans("messages.stf-c-1") !!}</h1>

            <h2 class="title-2 center">{!! trans("messages.stf-c-2") !!}</h2>
            @include('includes.staffMember', array('staff' => $main_staff))

            <h2 class="title-2 center">{!! trans("messages.stf-c-3") !!}</h2>
            @include('includes.staffMember', array('staff' => $staff))
        </div>
    </div>

@endsection
