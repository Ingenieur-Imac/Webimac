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
            <div class="question">
                {!! Form::checkbox("question", "q5", false, ["id" => "q5"]) !!} {!! Form::label("q5", trans("messages.faq-ctn-q5")) !!}
                <div class="answer">
                    {!! trans("messages.faq-ctn-a5") !!}
                </div>
            </div>
            <div class="question">
                {!! Form::checkbox("question", "q6", false, ["id" => "q6"]) !!} {!! Form::label("q6", trans("messages.faq-ctn-q6")) !!}
                <div class="answer">
                    {!! trans("messages.faq-ctn-a6") !!}
                </div>
            </div>
            <div class="question">
                {!! Form::checkbox("question", "q7", false, ["id" => "q7"]) !!} {!! Form::label("q7", trans("messages.faq-ctn-q7")) !!}
                <div class="answer">
                    {!! trans("messages.faq-ctn-a7") !!}
                </div>
            </div>
            <div class="question">
                {!! Form::checkbox("question", "q8", false, ["id" => "q8"]) !!} {!! Form::label("q8", trans("messages.faq-ctn-q8")) !!}
                <div class="answer">
                    {!! trans("messages.faq-ctn-a8") !!}
                </div>
            </div>
            <div class="question">
                {!! Form::checkbox("question", "q9", false, ["id" => "q9"]) !!} {!! Form::label("q9", trans("messages.faq-ctn-q9")) !!}
                <div class="answer">
                    {!! trans("messages.faq-ctn-a9") !!}
                </div>
            </div>
            <div class="question">
                {!! Form::checkbox("question", "q10", false, ["id" => "q10"]) !!} {!! Form::label("q10", trans("messages.faq-ctn-q10")) !!}
                <div class="answer">
                    {!! trans("messages.faq-ctn-a10") !!}
                </div>
            </div>
            <div class="question">
                {!! Form::checkbox("question", "q11", false, ["id" => "q11"]) !!} {!! Form::label("q11", trans("messages.faq-ctn-q11")) !!}
                <div class="answer">
                    {!! trans("messages.faq-ctn-a11") !!}
                </div>
            </div>
        </div>
    </div>
@endsection
