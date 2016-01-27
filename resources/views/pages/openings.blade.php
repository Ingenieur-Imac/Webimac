<?php
  $title = 'Débouchés';
  $banner_title = 'La formation Imac';
  $img = 'Groupe_IMAC.jpg';
?>

@extends('layouts.default')

@section('title')
    Imac | {{ $title }}
@endsection

@section('content')
    @include('includes.banner', array('img' => $img, 'title' => $banner_title))
    @include('includes.subnav', array('img' => $img, 'title' => $title))
    <!-- @include('includes.ariane', array('title' => $title)) -->
    <div class="container center-content-padding">
        <div class="side-padding">
            <h1 class="title-1">Après l'Imac</h1>
            <p class="lead">Dans un monde du travail où la polyvalence est recherchée, les qualités de nos ingénieurs sont très appréciées. Grâce aux stages et aux divers projets qu’ils ont réalisés en équipe, ils ont intégré les codes du milieu professionnel et s’adaptent rapidement.</p>
        </div>
        <div class="frames">
            <div class="framed">
                <p class="big-number">95%</p>
                <p class="title-4">d'embauches</p>
                <p>après 6 mois ; les 5% restants poursuivent leurs études</p>
            </div>
            <div class="framed">
                <p class="big-number">8</p>
                <p class="title-4">de métiers</p>
                <p>pour des ingénieurs polyvalents bénéficiant de 2 à 3 stages et d’1 spécialisation</p>
            </div>
            <div class="framed">
                <p class="big-number">31K€</p>
                <p class="title-4">salaire moyen</p>
                <p>dès la première embauche. Une forte demande donc un salaire équivalent</p>
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
              <img src="{{URL::asset('images/banners/Groupe_IMAC.jpg')}}" alt="Des ingénieurs Imac" />
          </div>
          <div class="col-2 side-padding">
              <ul class="lnr-ul">
                  <li><span class="lnr lnr-checkmark-circle"></span>Profil pluridisciplinaire</li>
                  <li><span class="lnr lnr-checkmark-circle"></span>Large spectre de compétences</li>
                  <li><span class="lnr lnr-checkmark-circle"></span>Vision globale d'un projet</li>
                  <li><span class="lnr lnr-checkmark-circle"></span>Esprit d'expertise</li>
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
