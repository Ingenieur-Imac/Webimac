@extends('layouts.default')

@section('title')
    {{trans("messages.title-ptn")}}
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->
    <div class="container">
        <div class="col-8 center-block">
            <h1 class="title-1">{{trans("messages.ptn-ctn-1-t")}}</h1>
            <p class="lead">{{trans("messages.ptn-ctn-1-st")}}</p>
            <p>{{trans("messages.ptn-ctn-1-c")}}</p>
        </div>

        <div class="grid">
            @foreach ($partnerships as $partnership)
            <div class="grid-cell">
                <img src="{{URL::asset('../images/partnership/'.$partnership->url_image)}}" alt="{{$partnership->name}}" />
                <h2 class="title-4">{{$partnership->name}}</h2>
                <p><em>{{$partnership->type}}</em></p>
                <p>{{$partnership->description}}</p>
                <p><a href="{{$partnership->url_web}}" target="_blank">{{trans("messages.ptn-ctn-2-c")}} {{$partnership->name}}</a></p>
            </div>
            @endforeach
            <div class="grid-cell center">
                <div class="valign-content">
                    <p class="title-2">{{trans("messages.ptn-ctn-2-st")}}</p>
                    <a class="btn filling-btn dark-btn" href="{{ action('PagesController@newPartnership') }}">{{trans("messages.ptn-ctn-2-l")}}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="light-row">
        <div class="container">
            <div class="col-8 center-block">
                <h2 class="title-2 center">{{trans("messages.ptn-ctn-3-c-1-t")}}</h2>
                <p class="lead">{{trans("messages.ptn-ctn-3-c-1-st")}}</p>
            </div>
            <div class="col-5 col-offset-1">
                <h3 class="title-3">{{trans("messages.ptn-ctn-3-c-2-t")}}</h3>
                <ul class="lnr-ul">
                  <li><span class="lnr lnr-checkmark-circle"></span>{{trans("messages.ptn-ctn-3-c-2-c-1")}}</li>
                  <li><span class="lnr lnr-checkmark-circle"></span>{{trans("messages.ptn-ctn-3-c-2-c-2")}}</li>
                  <li><span class="lnr lnr-checkmark-circle"></span>{{trans("messages.ptn-ctn-3-c-2-c-3")}}</li>
                  <li><span class="lnr lnr-checkmark-circle"></span>{{trans("messages.ptn-ctn-3-c-2-c-4")}}</li>
                </ul>
            </div>
            <div class="col-5 col-offset-1">
                <h3 class="title-3">{{trans("messages.ptn-ctn-3-c-3-t")}}</h3>
                <ul class="lnr-ul">
                  <li><span class="lnr lnr-checkmark-circle"></span> <strong>{{trans("messages.ptn-ctn-3-c-3-c-1")}}</strong></li>
                  <li><span class="lnr lnr-checkmark-circle"></span> <strong>{{trans("messages.ptn-ctn-3-c-3-c-2")}}</strong></li>
                  <li><span class="lnr lnr-checkmark-circle"></span> <strong>{{trans("messages.ptn-ctn-3-c-3-c-3")}}</strong></li>
                  <li><span class="lnr lnr-checkmark-circle"></span> <strong>{{trans("messages.ptn-ctn-3-c-3-c-4")}}</strong></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
