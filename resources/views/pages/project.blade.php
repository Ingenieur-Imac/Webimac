@extends('layouts.default')

@section('title')
    Imac | {{ $project->name }}
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => $project->name)) -->
    <div class="container center-content-padding">
        <div class="side-padding">
            <a href="{{ url('/realisations') }}" class="close lnr lnr-cross"></a>
            <h1 class="center">{{ $project->name }}</h1>
            <p class="title-2">{{ $project->date }}</p>
            <div class="media-container">
                @if ($project->platform == 'vimeo')
                    <iframe src="//player.vimeo.com/video/{{$project->url_video}}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                @elseif($project->platform == 'youtube')
                    <iframe src="https://www.youtube.com/embed/{{$project->url_video}}" frameborder="0" allowfullscreen></iframe>
                @elseif($project->platform == 'dailymotion')
                    <iframe frameborder="0" src="//www.dailymotion.com/embed/video/{{$project->url_video}}" allowfullscreen></iframe>
                @else
                    {{trans("messages.pro-c-1")}}
                @endif
            </div>
            <p>{{ $project->description }}</p>

            <div class="project-item">
                <span class="lnr lnr-users lnr-2x"></span>
                <div class="project-item-content">
                    <p class="title-3">{!! trans("messages.pro-c-2") !!}</p>
                    <p>{!! $project->contributors !!}</p>
                </div>

                <div class="project-item-content">
                    <p class="title-3">{!! trans("messages.pro-c-3") !!}</p>
                    <p>{!! $project->name_of_tutors !!}</p>
                </div>
            </div>
            @if(!empty($project->awards))
            <div class="project-item">
                <span class="lnr lnr-license lnr-2x"></span>
                <p class="project-item-content">{{$project->awards}}</p>
            </div>
            @endif
            <div class="center">
                @if(!empty($project->web_link))
                    <a class="primary-btn" target="_BLANK" href="{{ $project->web_link }}">{!! trans("messages.pro-c-4") !!}</a>
                @endif
                @if(!empty($project->github_link))
                    <a class="primary-btn" target="_BLANK" href="{{ $project->github_link }}">{!! trans("messages.pro-c-5") !!}</a>
                @endif
                @if(!empty($project->vimeo_link))
                    <a class="primary-btn" target="_BLANK" href="{{ $project->vimeo_link }}">{!! trans("messages.pro-c-6") !!}</a>
                @endif
            </div>
        </div>
    </div>
@endsection
