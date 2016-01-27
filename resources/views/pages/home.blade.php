<?php
  $title = 'La seule formation <strong>publique</strong> d\'<strong>ingénieur</strong> alliant <strong>arts et sciences</strong>';
  $img = 'Groupe_IMAC.jpg';
  $text = '<p>Associant esprit créatif à compétences scientifiques, l’Imac forme des professionnels dans les domaines du web, du multimédia, de l’audiovisuel.</p>
  <p>Vous aussi, devenez ingénieur créatif !</p>'
?>

@extends('layouts.default')

@section('title')
    Imac | Accueil
@endsection

@section('script')
    <script src="vendor/jquery/dist/jquery.js"></script>
    <script src="{{URL::asset('js/home.js')}}"></script>
@endsection

@section('content')
    @include('includes.banner', array('img' => $img, 'title' => $title, 'text' => $text))

    <div>
        <div class="container center">
            <div class="col-3 side-padding">
                <span class="lnr lnr-magic-wand lnr-7x"></span>
                <h2 class="title-3">Un enseignement<br /> <strong>pluridisciplinaire</strong></h2>
                <p>La formation Imac s’articule autour de trois pôles offrant une culture et des compétences à la fois artistiques et scientifiques : sciences & informatique, multimédia & audiovisuel, culture de l’entreprise. En trois ans, les étudiants deviennent des ingénieurs polyvalents.</p>
                <a class="primary-btn" href="#">Découvrir la formation</a>
            </div>
            <div class="col-3 side-padding">
                <span class="lnr lnr-diamond lnr-7x"></span>
                <h2 class="title-3">Les <strong>projets</strong> au cœur<br /> de la formation</h2>
                <p>Les projets, variés, permettent une mise en application et un réel approfondissement des connaissances acquises en cours. Ils témoignent des compétences professionnelles des étudiants, de leur personnalité ainsi que de leur capacité à travailler en équipe.</p>
                <a class="primary-btn" href="#">Parcourir les projets</a>
            </div>
            <div class="col-3 side-padding">
                <span class="lnr lnr-rocket lnr-7x"></span>
                <h2 class="title-3">Une <strong>insertion<br /> professionnelle</strong> assurée</h2>
                <p>Leur profil polyvalent étant un atout considérable dans le monde du travail, les étudiants IMAC sont embauchés dans les six mois suivant l’obtention de leur diplôme, une grande majorité des suites au stage de troisième année. À l’image de la formation, les secteurs d’activité sont multiples.</p>
                <a class="primary-btn" href="#">Voir les débouchés</a>
            </div>
        </div>
    </div>

    <div class="light-row">
        <div class="container">
            <h2 class="title-2 center">Les <strong>projets</strong> à la une</h2>
            @include('includes.projectHome', $projects)
        </div>
    </div>

    <div>
        <div class="container">
            <h2 class="title-2 center">Paroles d'anciens</h2>
            @include('includes.testimonial', $student_testimonials)
        </div>
    </div>
@endsection
