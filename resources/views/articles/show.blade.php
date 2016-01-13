@extends('app')

@section('content')
    <h1>{{$article->title}}</h1>

    <article class="">
        {{$article->body}}
    </article>
@stop
