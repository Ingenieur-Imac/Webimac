<?php
  $title = trans("messages.title-op");
  $banner_title = trans("messages.banner-op-title");
  $img = 'Groupe_Chill.jpg';
?>

@extends('layouts.default')

@section('title')
    {{trans("messages.title-bal-op")}}
@endsection

@section('script')
    <script src="../vendor/jquery/dist/jquery.js"></script>
    <script src="{{URL::asset('../js/opening.js')}}"></script>
    <script src="{{URL::asset('../js/home.js')}}"></script>
@endsection

@section('content')
    @include('includes.banner', array('img' => $img, 'title' => $banner_title))
    @include('includes.subnav', array('img' => $img, 'title' => $title))
    <!-- @include('includes.ariane', array('title' => $title)) -->
    <div class="container">
        <div class="col-8 center-block">
            <h1 class="title-1">{!! trans("messages.op-ctn-1-c-1-t") !!}</h1>
            <p class="lead">{!! trans("messages.op-ctn-1-c-1-st") !!}</p>
            <p>{!! trans("messages.op-ctn-1-c-1-c") !!}</p>
        </div>
        <div class="col-11 center-block frames">
            <div class="framed">
                <p class="big-number">{!! trans("messages.op-ctn-1-c-2-t") !!}</p>
                <p class="title-4">{!! trans("messages.op-ctn-1-c-2-st") !!}</p>
                <p>{!! trans("messages.op-ctn-1-c-2-c") !!}</p>
            </div>
            <div class="framed">
                <p class="big-number">{!! trans("messages.op-ctn-1-c-3-t") !!}</p>
                <p class="title-4">{!! trans("messages.op-ctn-1-c-3-st") !!}</p>
                <p>{!! trans("messages.op-ctn-1-c-3-c") !!}</p>
            </div>
            <div class="framed">
                <p class="big-number">{!! trans("messages.op-ctn-1-c-4-t") !!}</p>
                <p class="title-4">{!! trans("messages.op-ctn-1-c-4-st") !!}</p>
                <p>{!! trans("messages.op-ctn-1-c-4-c") !!}</p>
            </div>
        </div>
    </div>

    <div class="light-row">
        <div class="container center">
            <div class="col-10 center-block">
                <h2 class="title-2"></h2>
                <p class="lead"></p>
                <span class="activity-sectors-title selected" alt="informatiqueweb">{!! trans("messages.op-ctn-2-c-1") !!}</span>
                <span class="activity-sectors-title" alt="jeuvideo">{!! trans("messages.op-ctn-2-c-2") !!}</span>
                <span class="activity-sectors-title" alt="multimediaanimation">{!! trans("messages.op-ctn-2-c-3") !!}</span>
                <span class="activity-sectors-title" alt="commmarketpub">{!! trans("messages.op-ctn-2-c-4") !!}</span>
                <span class="activity-sectors-title" alt="audiovisuelspecnum">{!! trans("messages.op-ctn-2-c-5") !!}</span>
                <span class="activity-sectors-title" alt="enseignrecherche">{!! trans("messages.op-ctn-2-c-6") !!}</span>
            </div>
      </div>
    </div>
    <div class="arrow-bottom"></div>

    <div class="container">
        <div class="col-7 center-block">
            <div class="framed activity-panel selected" alt="informatiqueweb">
                <p class="activity-panel-title">{!! trans("messages.op-ctn-3-c-1-t") !!}</p>
                <p class="activity-panel-text">{!! trans("messages.op-ctn-3-c-1-c") !!}</p>
            </div>
            <div class="framed activity-panel" alt="jeuvideo">
                <p class="activity-panel-title">{!! trans("messages.op-ctn-3-c-2-t") !!}</p>
                <p class="activity-panel-text">{!! trans("messages.op-ctn-3-c-2-c") !!}</p>
            </div>
            <div class="framed activity-panel" alt="multimediaanimation">
                <p class="activity-panel-title">{!! trans("messages.op-ctn-3-c-3-t") !!}</p>
                <p class="activity-panel-text">{!! trans("messages.op-ctn-3-c-3-c") !!}</p>
            </div>
            <div class="framed activity-panel" alt="commmarketpub">
                <p class="activity-panel-title">{!! trans("messages.op-ctn-3-c-4-t") !!}</p>
                <p class="activity-panel-text">{!! trans("messages.op-ctn-3-c-4-c") !!}</p>
            </div>
            <div class="framed activity-panel" alt="audiovisuelspecnum">
                <p class="activity-panel-title">{!! trans("messages.op-ctn-3-c-5-t") !!}</p>
                <p class="activity-panel-text">{!! trans("messages.op-ctn-3-c-5-c") !!}</p>
            </div>
            <div class="framed activity-panel" alt="enseignrecherche">
                <p class="activity-panel-title">{!! trans("messages.op-ctn-3-c-6-t") !!}</p>
                <p class="activity-panel-text">{!! trans("messages.op-ctn-3-c-6-c") !!}</p>
            </div>
        </div>
    </div>

    <div class="light-row">
        <div class="container">
            <h2 class="title-2">{!! trans("messages.op-ctn-4-t") !!}</h2>
            <div class="col-4 col-offset-2 middle-valign-ib">
                <img src="{{URL::asset('images/banners/Groupe_PostIt-7131.jpg')}}" alt="Des ingénieurs Imac" />
            </div>
            <div class="col-4 row-offset middle-valign-ib">
                <ul class="lnr-ul">
                    <li><span class="lnr lnr-checkmark-circle list-puce"></span>{!! trans("messages.op-ctn-4-c-1") !!}</li>
                    <li><span class="lnr lnr-checkmark-circle list-puce"></span>{!! trans("messages.op-ctn-4-c-2") !!}</li>
                    <li><span class="lnr lnr-checkmark-circle list-puce"></span>{!! trans("messages.op-ctn-4-c-3") !!}</li>
                    <li><span class="lnr lnr-checkmark-circle list-puce"></span>{!! trans("messages.op-ctn-4-c-4") !!}</li>
                </ul>
            </div>
        </div>
    </div>

    <div>
        <div class="container">
            <h2 class="title-2">{!! trans("messages.home-testimonial") !!}</h2>
            @include('includes.testimonial', $student_testimonials)
        </div>
    </div>
@endsection
