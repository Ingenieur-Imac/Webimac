@extends('layouts.default')

@section('title')
    Nos partenaires | IMAC ingénieur
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->
    <div class="container">
        <div class="col-8 center-block">
            <h1 class="title-1">Nos partenaires</h1>
            <p class="lead">Intégrée au monde professionnel, l’IMAC a su tisser des liens durables avec plusieurs intervenants majeurs du monde du multimédia.</p>
            <p>Nos étudiants bénéficient par exemple de cours donnés par des intervenants professionnels, profitant ainsi à la fois de leurs compétences et de leur expérience. Ils ont aussi la possibilité de collaborer avec ces partenaires lors de projets.</p>
        </div>

        <div class="grid">
            @foreach ($partnerships as $partnership)
            <div class="grid-cell">
                <img src="{{URL::asset('../images/partnership/'.$partnership->url_image)}}" alt="{{$partnership->name}}" />
                <h2 class="title-4">{{$partnership->name}}</h2>
                <p><em>{{$partnership->type}}</em></p>
                <p>{{$partnership->description}}</p>
                <p><a href="{{$partnership->url_web}}" target="_blank">Visiter le site de {{$partnership->name}}</a></p>
            </div>
            @endforeach
            <div class="grid-cell center">
                <div class="valign-content">
                    <p class="title-2">Et vous ?</p>
                    <a class="btn filling-btn dark-btn" href="#">Devenir partenaires</a>
                </div>
            </div>
        </div>
    </div>

    <div class="light-row">
        <div class="container">
            <div class="col-8 center-block">
                <h2 class="title-2 center">Les jeudis de l'entreprise</h2>
                <p class="lead">Tout au long de l’année, nos partenaires viennent présenter leurs entreprises et leur travail à nos étudiants lors des traditionnels « jeudis de l’entreprises ».</p>
            </div>
            <div class="col-5 col-offset-1">
                <h3 class="title-3">De nombreuses opportunités</h3>
                <ul class="lnr-ul">
                  <li><span class="lnr lnr-checkmark-circle"></span> Rencontrer des professionnels du milieu</li>
                  <li><span class="lnr lnr-checkmark-circle"></span> Partager des savoir-faire</li>
                  <li><span class="lnr lnr-checkmark-circle"></span> Découvrir des méthodes de travail</li>
                  <li><span class="lnr lnr-checkmark-circle"></span> Connaitre les opportunités qui s'offrent aux étudiants</li>
                </ul>
            </div>
            <div class="col-5 col-offset-1">
                <h3 class="title-3">Les participants</h3>
                <ul class="lnr-ul">
                  <li><span class="lnr lnr-checkmark-circle"></span> <strong>Ubisoft</strong></li>
                  <li><span class="lnr lnr-checkmark-circle"></span> <strong>Mikros Image</strong></li>
                  <li><span class="lnr lnr-checkmark-circle"></span> <strong>Smile</strong></li>
                  <li><span class="lnr lnr-checkmark-circle"></span> <strong>et d’autres selon les années</strong></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
