@extends('layouts.default')

@section('title')
    {!! trans("messages.title-grsc") !!}
@endsection

@section('script')
    <script src="vendor/jquery/dist/jquery.js"></script>
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->
    <div class="container">
        <div class="col-8 center-block">
            <h1 class="title-1">{!! trans("messages.grsc-ctn-t") !!}</h1>
        </div>

        <div class="resources clearfix">
            <div class="col-5 col-offset-1">
                <h2 class="title-2">{!! trans("messages.grsc-ctn-st-1") !!}</h2>
                <img src="{{URL::asset('images/download/imac-web.png')}}" alt="Logo IMAC fond clair">
                <a class="btn filled-btn primary-btn" href="{{URL::asset('images/download/imac-web.png')}}" target="_blank">{{trans("messages.grsc-ctn-btn-1")}}</a>
                <a class="btn filled-btn primary-btn" href="{{URL::asset('images/download/imac-edition.png')}}" target="_blank">{{trans("messages.grsc-ctn-btn-2")}}</a>
                <a class="btn filled-btn primary-btn" href="{{URL::asset('images/download/imac-vectoriel.eps')}}" target="_blank">{{trans("messages.grsc-ctn-btn-3")}}</a>
            </div>
            <div class="col-5 row-offset">
                <h2 class="title-2">{!! trans("messages.grsc-ctn-st-2") !!}</h2>
                <img src="{{URL::asset('images/download/imac-web-black.png')}}" alt="Logo IMAC fond clair">
                <a class="btn filled-btn primary-btn" href="{{URL::asset('images/download/imac-web-black.png')}}" target="_blank">{{trans("messages.grsc-ctn-btn-1")}}</a>
                <a class="btn filled-btn primary-btn" href="{{URL::asset('images/download/imac-edition-black.png')}}" target="_blank">{{trans("messages.grsc-ctn-btn-2")}}</a>
                <a class="btn filled-btn primary-btn" href="{{URL::asset('images/download/imac-vectoriel-black.eps')}}" target="_blank">{{trans("messages.grsc-ctn-btn-3")}}</a>
            </div>
        </div>

        <div class="resources">
            <div class="col-8 center-block">
                <h2 class="title-2">{!! trans("messages.grsc-ctn-st-3") !!}</h2>
                <video controls src="{{URL::asset('images/download/AnimImac_fullhd_nobackground.mp4')}}">Animation logo IMAC</video>
                <a class="btn filled-btn primary-btn" href="{{URL::asset('images/download/AnimImac_fullhd_nobackground.mp4')}}" target="_blank">{{trans("messages.grsc-ctn-btn-4")}}</a>
            </div>
        </div>

        <div class="resources">
            <div class="col-8 center-block">
                <h2 class="title-2">{!! trans("messages.grsc-ctn-st-4") !!}</h2>
                <a class="btn filled-btn primary-btn" href="{{URL::asset('images/download/resources-imac.zip')}}" target="_blank">{{trans("messages.grsc-ctn-btn-5")}}</a>
            </div>
        </div>

    </div>
@endsection
