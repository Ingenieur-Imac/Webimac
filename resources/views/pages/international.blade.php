@extends('layouts.default')

@section('title')
    {{trans("messages.title-int")}}
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->
    <div class="container center-content-padding">
        <h1 class="title-1">{{trans("messages.int-title")}}</h1>
        <h2 class="title-2">{{trans("messages.int-subtitle")}}</h2>
        <img src="{{URL::asset('images/international/map.png')}}" alt="Des ingénieurs IMAC" />
    </div>

    <div class="light-row">
      <div class="container center-content-padding">
          <p class="lead center side-padding">{{trans("messages.int-container-1-title")}}</p>
          <p class="side-padding">{{trans("messages.int-container-1-content")}}</p>
          <div class="frames">
              <div class="framed">
                  <p class="big-number">{{trans("messages.int-framed-1-a")}}</p>
                  <p class="title-4">{{trans("messages.int-framed-1-b")}}</p>
                  <p>{{trans("messages.int-framed-1-c")}}</p>
              </div>
              <div class="framed">
                  <p class="big-number">{{trans("messages.int-framed-2-a")}}</p>
                  <p class="title-4">{{trans("messages.int-framed-2-b")}}</p>
                  <p>{{trans("messages.int-framed-2-c")}}</p>
              </div>
              <div class="framed">
                  <p class="big-number">{{trans("messages.int-framed-3-a")}}</p>
                  <p class="title-4">{{trans("messages.int-framed-3-b")}}</p>
                  <p>{{trans("messages.int-framed-3-c")}}</p>
              </div>
          </div>
      </div>
    </div>
@endsection
