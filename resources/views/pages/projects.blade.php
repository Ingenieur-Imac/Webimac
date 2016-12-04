@extends('layouts.default')

@section('title')
    {{trans("messages.title-pros")}}
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->
    <div class="container">
        <div class="col-12 center-block">
            <h1 class="title-1">{!! trans("messages.pros-t") !!}</h1>
            <p class="lead">{!! trans("messages.pros-st") !!}</p>
            <p>{!! trans("messages.pros-c") !!}</p>
        </div>
        <div class="col-12">
            <div class="filters">
                <p>{!! trans("messages.pros-filter-c-3") !!}
                    <span rel="all" class="main-filter main-selected-filter">{!! trans("messages.pros-filter-c-1") !!}</span><span rel="heart" class="main-filter">{!! trans("messages.pros-filter-c-2") !!}</span>
                    {!! Form::open(array('class'=>'project-main-filters')) !!}
                        {{ Form::select('year', $years) }}
                    {!! Form::close() !!}
                </p>
                {!! Form::open(array('class'=>'project-filters')) !!}
                @foreach ($tags as $tag)
                    @if ($tag->id != 1)
                        <div class="filter">{!! Form::checkbox('filter', $tag->name,false,["rel" => $tag->id, "id" => $tag->id]) !!} {!! Form::label($tag->id,$tag->name) !!}</div>
                    @endif
                @endforeach
                {!! Form::close() !!}
            </div>
        </div>
        <div class="col-12 projects">
            @include('includes.project', $projects)
        </div>
    </div>
@endsection

@section('script')
    <script src="vendor/jquery/dist/jquery.js"></script>
    <script src="{{URL::asset('js/filter-projects.js')}}" charset="utf-8"></script>
@endsection
