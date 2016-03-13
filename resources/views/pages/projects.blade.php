@extends('layouts.default')

@section('title')
    Réalisations | IMAC ingénieur
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->
    <div class="container center-content-padding">
        <div class="side-padding">
            <h1 class="title-1">Les réalisations</h1>
            <p class="lead">Les enseignements de la formation IMAC sont centrés autour de projets, tous <strong>très variés et pluridisciplinaires</strong>.</p>
            <p>Ils révèlent les compétences et la polyvalence acquises par les étudiants au cours des trois années de formation. La créativité et les profils complémentaires de ces derniers rendent leurs projets uniques et témoins de leur savoir-faire. Jugez par vous-mêmes !</p>
        </div>
        <div class="ctn-projects">
            @include('includes.project', $projects)
        </div>
    </div>
@endsection
