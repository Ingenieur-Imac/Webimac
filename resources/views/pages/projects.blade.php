<?php
  $title = 'Les réalisations';
?>

@extends('layouts.default')

@section('title')
    Imac | {{ $title }}
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => $title)) -->
    <div class="container center-content-padding">
        <div class="side-padding">
            <h1 class="title-1">Les réalisations</h1>
            <p class="lead">Les enseignements de la formation Imac sont centrés autour de projets, tous très variés et pluridisciplinaires.</p>
            <p>Ils révèlent les compétences et la polyvalence acquises par les étudiants au cours des trois années de formation. La créativité et les profils complémentaires de ces derniers rendent leurs projets uniques et témoins de leur savoir-faire. Jugez par vous-mêmes !</p>
        </div>

        @include('includes.project', $projects)
        @include('includes.project', $projects)
        @include('includes.project', $projects)
        @include('includes.project', $projects)
        @include('includes.project', $projects)
    </div>
@endsection
