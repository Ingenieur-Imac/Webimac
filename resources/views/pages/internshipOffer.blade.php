@extends('layouts.default')

@section('title')
    {!! trans("messages.title-finsp") !!}
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->
    <div class="container">
        <div class="col-8 center-block">
            <h1 class="title-1">{!! trans("messages.finsp-t") !!}</h1>
            <p class="lead">{!! trans("messages.finsp-st") !!}</p>
            <p class="light-text">{!! trans("messages.finsp-c") !!}</p>
            {{ Form::open(['url' => 'mail/internship',"enctype" => "multipart/form-data"]) }}
                {!! Form::email('email', null, ['placeholder' => trans("messages.finsp-ph-1"), 'required' => 'required']) !!}
                {!! Form::text('name', null, ['placeholder' => trans("messages.finsp-ph-2"), 'required' => 'required']) !!}
                {!! Form::text('position', null, ['placeholder' => trans("messages.finsp-ph-3")]) !!}
                {!! Form::text('place', null, ['placeholder' => trans("messages.finsp-ph-4")]) !!}
                {!! Form::textarea('task', null, ['placeholder' => trans("messages.finsp-ph-5")]) !!}
                {!! Form::label('pdf', trans("messages.finsp-ph-6")); !!}
                {!! Form::file('pdf', ['accept' => '.pdf']) !!}
                {!! Form::textarea('message', null, ['placeholder' => trans("messages.finsp-ph-7")]) !!}
                {!! Form::label('antispam', trans("messages.finsp-ph-8")); !!}
                {!! Form::text('antispam', null, ['placeholder' => trans("messages.finsp-ph-9"), 'class' => 'antispam', 'required' => 'required']) !!} = 2
                {!! Form::submit(trans("messages.finsp-ph-10")) !!}
            {{ Form::close() }}
        </div>
    </div>
@endsection
