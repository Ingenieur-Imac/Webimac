@extends('layouts.default')

@section('title')
    {!! trans("messages.title-fptn") !!}
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->
    <div class="container">
        <div class="col-8 center-block">
            <h1 class="title-1">{!! trans("messages.fptn-t") !!}</h1>
            <p class="lead">{!! trans("messages.fptn-st") !!}</p>
            <p class="light-text">{!! trans("messages.fptn-c-0") !!}</p>
            {{ Form::open(['url' => 'foo/bar']) }}
                {!! Form::email('email', null, ['placeholder' => trans("messages.fptn-f-ph-1"), 'required' => 'required']) !!}
                {!! Form::text('name', null, ['placeholder' => trans("messages.fptn-f-ph-2")]) !!}
                {!! Form::text('subject', null, ['placeholder' =>  trans("messages.fptn-f-ph-3"), 'required' => 'required']) !!}
                {!! Form::textarea('message', null, ['placeholder' => trans("messages.fptn-f-ph-4"), 'required' => 'required']) !!}
                {!! Form::label('antispam', trans("messages.fptn-f-ph-5")) !!}
                {!! Form::text('antispam', null, ['placeholder' => trans("messages.fptn-f-ph-6"), 'class' => 'antispam', 'required' => 'required']) !!} = 2
                {!! Form::submit(trans("messages.fptn-f-ph-7")) !!}
            {{ Form::close() }}
        </div>
    </div>
@endsection
