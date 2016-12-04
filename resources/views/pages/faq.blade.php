@extends('layouts.default')

@section('title')
    {!! trans("messages.title-faq") !!}
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->
    <div class="container">
        <div class="col-8 center-block">
            <h1 class="title-1">{!! trans("messages.faq-ctn-t") !!}</h1>
            <p class="lead">{!! trans("messages.faq-ctn-st") !!}<a href="{{action('PagesController@contact')}}">{!! trans("messages.faq-ctn-link") !!}</a>.</p>

            <!-- Questions -->
            <div class="question">
                {!! Form::checkbox("question", "q1", true, ["id" => "q1"]) !!} {!! Form::label("q1", trans("messages.faq-ctn-q1")) !!}
                <div class="answer">
                    {!! trans("messages.faq-ctn-a1") !!}
                </div>
            </div>
            <div class="question">
                {!! Form::checkbox("question", "q2", false, ["id" => "q2"]) !!} {!! Form::label("q2", trans("messages.faq-ctn-q2")) !!}
                <div class="answer">
                    {!! trans("messages.faq-ctn-a2") !!}
                </div>
            </div>
            <div class="question">
                {!! Form::checkbox("question", "q3", false, ["id" => "q3"]) !!} {!! Form::label("q3", trans("messages.faq-ctn-q3")) !!}
                <div class="answer">
                    {!! trans("messages.faq-ctn-a3") !!}
                </div>
            </div>
            <div class="question">
                {!! Form::checkbox("question", "q4", false, ["id" => "q4"]) !!} {!! Form::label("q4", trans("messages.faq-ctn-q4")) !!}
                <div class="answer">
                    {!! trans("messages.faq-ctn-a4") !!}
                </div>
            </div>
        </div>
    </div>
@endsection
