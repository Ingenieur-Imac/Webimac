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
                <iframe src="//player.vimeo.com/video/{{$project->url_video}}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <p>{{ $project->description }}</p>

            <div class="project-item">
                <span class="lnr lnr-users lnr-2x"></span>
                <div class="project-item-content">
                    <p class="title-3">Contributeurs</p>
                    <p>{!! $project->contributors !!}</p>
                </div>

                <div class="project-item-content">
                    <p class="title-3">Tuteur(s)</p>
                    <p>{!! $project->name_of_tutors !!}</p>
                </div>
            </div>
            @if(!empty($project->awards || $project->name))
            <div class="project-item">
                <span class="lnr lnr-license lnr-2x"></span>
                <p class="project-item-content">sec.imac[at]u-pem.fr</p>
            </div>
            @endif
            <div class="center">
                @if(!empty($project->web_link || $project->name))
                    <a class="primary-btn" href="{{ $project->web_link }}">Voir le projet en ligne</a>
                @endif
                @if(!empty($project->github_link || $project->name))
                    <a class="primary-btn" href="{{ $project->github_link }}">Voir le projet sur Github</a>
                @endif
                @if(!empty($project->vimeo_link || $project->name))
                    <a class="primary-btn" href="{{ $project->vimeo_link }}">Voir le projet sur Viméo</a>
                @endif
            </div>
        </div>
    </div>
@endsection
