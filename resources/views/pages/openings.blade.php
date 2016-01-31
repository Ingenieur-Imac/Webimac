<?php
  $title = 'Débouchés';
  $banner_title = 'La formation IMAC';
  $img = 'Groupe_Chill.jpg';
?>

@extends('layouts.default')

@section('title')
    Après l’IMAC | IMAC ingénieur
@endsection

@section('script')
    <script src="../vendor/jquery/dist/jquery.js"></script>
    <script src="{{URL::asset('../js/opening.js')}}"></script>
    <script src="{{URL::asset('../js/home.js')}}"></script>
@endsection

@section('content')
    @include('includes.banner', array('img' => $img, 'title' => $banner_title))
    @include('includes.subnav', array('img' => $img, 'title' => $title))
    <!-- @include('includes.ariane', array('title' => $title)) -->
    <div class="container center-content-padding">
        <div class="side-padding">
            <h1 class="title-1">Après l'IMAC</h1>
            <p class="lead">Les ingénieurs IMAC sont très appréciés pour leurs compétences et leur polyvalence atypique dans les domaines des arts et des sciences.</p>
            <p>Leur immersion dans le monde professionnel et leurs échanges tant avec les techniciens qu’avec les graphistes sont grandement facilités. Les stages et les divers projets réalisés en équipe leur permettent d’intégrer les codes et réflexes du milieu professionnel.</p>
        </div>
        <div class="frames">
            <div class="framed">
                <p class="big-number">95%</p>
                <p class="title-4">d'embauches</p>
                <p>après 6 mois ; les 5% restants poursuivent leurs études</p>
            </div>
            <div class="framed">
                <p class="big-number">+∞</p>
                <p class="title-4">de métiers</p>
                <p>dans les domaines des Arts et des Sciences</p>
            </div>
            <div class="framed">
                <p class="big-number">31K€</p>
                <p class="title-4">salaire moyen</p>
                <p>dès la première embauche, salaire équivalent à la forte demande</p>
            </div>
        </div>
    </div>

    <div class="light-row">
      <div class="container center-content-padding center">
          <h2 class="title-2">Les secteurs d'activité</h2>
          <p class="lead side-padding">À l’image de la formation pluridisciplinaire, les secteurs de débouchés sont multiples.</p>
          <span class="secondary-btn activity-sectors-title selected" alt="informatiqueweb">Informatique, web</span>
          <span class="secondary-btn activity-sectors-title" alt="jeuvideo">Jeux vidéo</span>
          <span class="secondary-btn activity-sectors-title" alt="multimediaanimation">Multimédia, Animation</span>
          <span class="secondary-btn activity-sectors-title" alt="commmarketpub">Communication, Marketing, Publicité</span>
          <span class="secondary-btn activity-sectors-title" alt="audiovisuelspecnum">Audiovisuel, Spectacle numérique</span>
          <span class="secondary-btn activity-sectors-title" alt="enseignrecherche">Enseignement & Recherche</span>
      </div>
    </div>
    <div class="arrow-bottom"></div>
        <div class="container center-content-padding activity-panel-container">
            <div class="framed activity-panel selected" alt="informatiqueweb">
                <p class="activity-panel-title">Métier de l'informatique et du Web</p>
                <p class="activity-panel-text">
                    Chef de projet web<br/>
                    Développeur web<br/>
                    Consultant web<br/>
                    Programmeur "full stack"<br/>
                    UX designer<br/>
                    Développeur BDD<br/>
                    Ingénieur informaticien<br/>
                    Chargé de production<br/>
                    Développeur d'application embarqués et mobile<br/>
                    ...
                </p>
            </div>
            <div class="framed activity-panel" alt="jeuvideo">
                <p class="activity-panel-title">Métier du Jeu Vidéo</p>
                <p class="activity-panel-text">
                    Ingénieur informaticien<br/>
                    Chef de projet web<br/>
                    Développeur R&D en post-production<br/>
                    Directeur technique en post-production<br/>
                    ...
                </p>
            </div>
            <div class="framed activity-panel" alt="multimediaanimation">
                <p class="activity-panel-title">Métier du Multimédia et de l'Animation</p>
                <p class="activity-panel-text">
                    Réalisateur multimédia<br/>
                    Directeur artistique<br/>
                    Directeur technique en post-production<br/>
                    Chargé de production<br/>
                    ...
                </p>
            </div>
            <div class="framed activity-panel" alt="commmarketpub">
                <p class="activity-panel-title">Métier de la Communication, du Marketing et de la Publicité</p>
                <p class="activity-panel-text">
                    Directeur de la communication<br/>
                    Cadre de l’événementiel<br/>
                    Consultant e-busines<br/>
                    Consultant en SSII<br/>
                    Chargé de production<br/>
                    ...
                </p>
            </div>
            <div class="framed activity-panel" alt="audiovisuelspecnum">
                <p class="activity-panel-title">Métier de l'Audiovisuel et du Spectacle Numérique</p>
                <p class="activity-panel-text">
                    Ingénieur artistique<br/>
                    Intermittent du spectacle<br/>
                    Directeur artistique<br/>
                    ...
                </p>
            </div>
            <div class="framed activity-panel" alt="enseignrecherche">
                <p class="activity-panel-title">Métier de l'Enseignement et de la Recherche</p>
                <p class="activity-panel-text">
                    Enseignement<br/>
                    Chercheur (R&D)<br/>
                    ...
                </p>
            </div>
        </div>
    <div class="light-row">
        <div class="container center-content-padding">
            <h2 class="title-2">Les compétences reconnues en entreprise</h2>
        </div>
        <div class="container center-content-padding center ctn-inline-middle">
            <div class="col-2 side-padding inline-middle">
                <img src="{{URL::asset('images/banners/Groupe_PostIt-7131.jpg')}}" alt="Des ingénieurs Imac" />
            </div>
            <div class="col-2 side-padding inline-middle">
                <ul class="lnr-ul">
                    <li class="list-competences"><span class="lnr lnr-checkmark-circle list-puce"></span>Profil pluridisciplinaire</li>
                    <li class="list-competences"><span class="lnr lnr-checkmark-circle list-puce"></span>Forte capacité d'adaptation</li>
                    <li class="list-competences"><span class="lnr lnr-checkmark-circle list-puce"></span>Vision globale d'un projet</li>
                    <li class="list-competences"><span class="lnr lnr-checkmark-circle list-puce"></span>Apprentissage rapide</li>
                </ul>
            </div>
        </div>
    </div>

    <div>
        <div class="container">
            <h2 class="title-2 center">Paroles d'anciens</h2>
            @include('includes.testimonial', $student_testimonials)
        </div>
    </div>
@endsection
