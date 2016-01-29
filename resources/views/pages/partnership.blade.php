@extends('layouts.default')

@section('title')
    Nos partenaires | IMAC ingénieur
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->
    <div class="container center-content-padding">
        <div class="side-padding">
            <h1 class="title-1">Nos partenaires</h1>
            <p class="lead">Intégrée au monde professionnel, l’IMAC a su tisser des liens durables avec plusieurs intervenants majeurs du monde du multimédia.</p>
            <p>Nos étudiants bénéficient par exemple de cours donnés par des intervenants professionnels, profitant ainsi à la fois de leurs compétences et de leur expérience. Ils ont aussi la possibilité de collaborer avec ces partenaires lors de projets.</p>        </div>
        </div>
    </div>
    <div class="container grid">
        @foreach ($partnerships as $partnership)
            <div class="grid-cell">
                <img src="{{URL::asset('../images/partnership/'.$partnership->url_image)}}" alt="{{$partnership->name}}" />
                <h2 class="title-4">{{$partnership->name}}</h2>
                <p>{{$partnership->type}}</p>
                <p>{{$partnership->description}}</p>
                <p><a href="{{$partnership->url_web}}" target="_blank">Visiter le site de {{$partnership->name}}</a></p>
            </div>
        @endforeach
        <div class="grid-cell center">
            <p class="title-5">Et vous ?</p>
            <a class="secondary-btn" href="#">Devenir partenaires</a>
        </div>
    </div>
@endsection
