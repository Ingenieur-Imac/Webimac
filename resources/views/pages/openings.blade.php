<?php
  $title = 'Débouchés';
  $banner_title = 'La formation IMAC';
  $img = 'Groupe_Chill.jpg';
?>

@extends('layouts.default')

@section('title')
    Après l’IMAC | IMAC ingénieur
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
      <div class="container center-content-padding">
          <h2 class="title-2">Les secteurs d'activité</h2>
          <p class="lead side-padding">À l’image de la formation pluridisciplinaire, les secteurs de débouchés sont multiples.</p>
          <span class="secondary-btn">Informatique, web</span>
      </div>
    </div>

    <div class="light-row">
      <div class="container center-content-padding">
          <h2 class="title-2">Les compétences reconnues en entreprise</h2>
          <div class="col-2 side-padding">
              <img src="{{URL::asset('images/banners/Groupe_PostIt-7131.jpg')}}" alt="Des ingénieurs IMAC" />
          </div>
          <div class="col-2 side-padding">
              <ul class="lnr-ul">
                  <li><span class="lnr lnr-checkmark-circle"></span>Profil pluridisciplinaire</li>
                  <li><span class="lnr lnr-checkmark-circle"></span>Forte capacité d'adaptation</li>
                  <li><span class="lnr lnr-checkmark-circle"></span>Vision globale d'un projet</li>
                  <li><span class="lnr lnr-checkmark-circle"></span>Apprentissage rapide</li>
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
