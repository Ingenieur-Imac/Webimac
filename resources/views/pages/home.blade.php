<?php
  $title = 'La seule formation <strong>publique d\'ingénieur</strong> alliant <strong>arts et sciences</strong>';
  $img = 'Table_work2.jpg';
  $text = '<p>Associant esprit créatif à compétences scientifiques, l’IMAC forme des professionnels dans les domaines du web, du multimédia, de l’audiovisuel, de la communication.</p>
  <p>Vous aussi, devenez ingénieur créatif !</p>'
?>

@extends('layouts.default')

@section('title')
    IMAC - La seule formation publique d’ingénieur alliant Arts et Sciences
@endsection

@section('script')
    <script src="vendor/jquery/dist/jquery.js"></script>
    <script src="{{URL::asset('js/home.js')}}"></script>
@endsection

@section('content')
    @include('includes.banner', array('img' => $img, 'title' => $title, 'text' => $text))

    <div class="container flex-parent center">
        <div class="col-4 flex-parent-col">
            <span class="lnr lnr-magic-wand lnr-7x"></span>
            <h2 class="title-3 center">Un enseignement<br /> <strong>pluridisciplinaire</strong></h2>
            <p class="flex-description">La formation IMAC s’articule autour de trois pôles offrant une culture et des compétences à la fois artistiques et scientifiques : sciences & informatique, multimédia & audiovisuel, culture de l’entreprise. En trois ans, les étudiants deviennent des ingénieurs polyvalents.</p>
            <a class="btn filled-btn primary-btn" href="{{action('PagesController@presentation')}}">Découvrir la formation</a>
        </div>
        <div class="col-4 flex-parent-col">
            <span class="lnr lnr-diamond lnr-7x"></span>
            <h2 class="title-3 center">Les <strong>projets</strong> au cœur<br /> de la formation</h2>
            <p class="flex-description">Les projets, variés, permettent une mise en application et un réel approfondissement des connaissances acquises en cours. Ils témoignent des compétences professionnelles des étudiants, de leur personnalité ainsi que de leur capacité à travailler en équipe.</p>
            <a class="btn filled-btn primary-btn" href="{{action('PagesController@projects')}}">Parcourir les projets</a>
        </div>
        <div class="col-4 flex-parent-col">
            <span class="lnr lnr-rocket lnr-7x"></span>
            <h2 class="title-3 center">Une <strong>insertion<br /> professionnelle</strong> assurée</h2>
            <p class="flex-description">Leur profil polyvalent étant un atout considérable dans le monde du travail, les étudiants IMAC sont embauchés dans les six mois suivant l’obtention de leur diplôme, une grande majorité des suites au stage de troisième année. À l’image de la formation, les secteurs d’activité sont multiples.</p>
            <a class="btn filled-btn primary-btn" href="{{action('PagesController@openings')}}">Voir les débouchés</a>
        </div>
    </div>

    <div class="light-row">
        <div class="container">
            <h2 class="title-2 center">Les <strong>projets</strong> à la une</h2>
            <div class="flex-parent">
                @include('includes.projectHome', $projects)
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
