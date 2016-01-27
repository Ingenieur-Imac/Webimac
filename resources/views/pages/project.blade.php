@extends('layouts.default')

@section('title')
    Imac | {{ $project->name }}
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => $project->name)) -->
    <div class="container center-content-padding">
        <div class="side-padding">
            <h1 class="title-1">{{ $project->name }}</h1>
            <h2 class="title-2">{{ $project->date }}</h2>
            <div class="media-container">
                @if ($project->platform == 'vimeo')
                    <iframe src="//player.vimeo.com/video/{{$project->url_video}}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                @elseif($project->platform == 'youtube')
                    <iframe src="https://www.youtube.com/embed/{{$project->url_video}}" frameborder="0" allowfullscreen></iframe>
                @elseif($project->platform == 'dailymotion')
                    <iframe frameborder="0" src="//www.dailymotion.com/embed/video/{{$project->url_video}}" allowfullscreen></iframe>
                @else
                    Pas de vidéo à afficher ...
                @endif

            </div>
            <p>{{ $project->description }}</p>
        </div>
    </div>

    <div class="light-row">
        <div class="container">
            <div class="col-3">
                <p>{!! $project->contributors !!}</p>
            </div>
            <div class="col-3">
                <p>{!! $project->name_of_tutors !!}</p>
            </div>
        </div>
        @if(!empty($project->web_link))
            <a class="primary-btn" href="{{ $project->web_link }}">Voir le projet en ligne</a>
        @endif
        @if(!empty($project->github_link))
            <a class="primary-btn" href="{{ $project->github_link }}">Voir le projet sur Github</a>
        @endif
        @if(!empty($project->vimeo_link))
            <a class="primary-btn" href="{{ $project->vimeo_link }}">Voir le projet sur Viméo</a>
        @endif
    </div>
@endsection
