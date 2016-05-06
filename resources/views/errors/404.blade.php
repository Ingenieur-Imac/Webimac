@extends('layouts.default')

@section('title')
    {{trans("messages.404-1")}}
@endsection

@section('content')
    <div class="container">
        <div class="col-4 col-offset-2 middle-valign-ib center">
            <h1 class="title-1">{{trans("messages.404-2")}}</h1>
            <p class="lead">{{trans("messages.404-3")}}</p>
        </div>
        <div class="col-4 middle-valign-ib">
            <img src="{{URL::asset('images/winInternet.gif')}}" alt="You Win the Internet" />
        </div>
        <div class="col-12 center">
            <a href="{{ action('PagesController@index') }}" class="btn dark-btn">{{trans("messages.404-4")}}</a>
        </div>
    </div>
@endsection
