@extends('layouts.default')

@section('title')
    {{trans("messages.title-ml")}}
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->
    <div class="container center-content-padding">
        <div class="side-padding">
            <h1 class="title-1">{{trans("messages.ml-title")}}</h1>
            <h2 class="title-5">{{trans("messages.ml-1-title")}}</h2>
            <p>{{trans("messages.ml-1-c-1")}}</p>
            <p>{{trans("messages.ml-1-c-2")}}</p>
            <p>{{trans("messages.ml-1-c-3")}}</p>

            <h2 class="title-5">{{trans("messages.ml-2-title")}}</h2>
            <p>{{trans("messages.ml-2-c")}}</p>

            <h2 class="title-5">{{trans("messages.ml-3-title")}}</h2>
            <p>{{trans("messages.ml-3-c-1")}}</p>
            <p>{{trans("messages.ml-3-c-2")}}<a href="http://dharmatype.com/" target="_blank"> Dharma Type Foundry</a></p>

            <h2 class="title-5">{{trans("messages.ml-4-title")}}</h2>
            <p>{{trans("messages.ml-4-c")}}</p>
        </div>
    </div>
@endsection
