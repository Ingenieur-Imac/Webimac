<?php
  $title = 'Admission';
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
            <h1 class="title-1">Les conditions d'admission</h1>
            <h2 class="title-2">Le profil des Imac</h2>
            <p class="lead">Nos étudiants possèdent une imagination et un désir de créer qui dépassent le clivage arts/sciences.</p>

            <p>En effet, leur ouverture d’esprit leur permet d’apprécier aussi bien les arts (arts graphiques, cinéma, musique, arts numériques...) que les sciences (programmation, mathématiques, traitement du signal…) sans pour autant être spécialiste de chacun de ces domaines. En suivant la formation IMAC, ils élargissent leur champ de compétences.</p>

            <p>Dans une volonté de recrutement hétérogène, l'école est accessible sur dossier à tout étudiant disposant d'un niveau BAC+2.</p>
        </div>
    </div>

    <div class="light-row">
      <div class="container center-content-padding">
          <h2 class="title-2">Candidatures</h2>
          <p class="lead side-padding">L'admission repose sur une évaluation du dossier et éventuellement un entretien individuel. Le jury s'intéresse aux connaissances acquises dans différents domaines : sciences (informatique et mathématiques) et aux créations artistiques diverses (multimédia, audiovisuel, créations plastiques...).</p>
          <div class="col-2 side-padding">
              <h3 class="title-3">La procédure de candidature</h3>
              <p>Les candidatures s'effectuent depuis <a href="http://candidatures.univ-mlv.fr" target="_blank"> le site de l'Université Paris-Est Marne-la-Vallée (UPEM)</a>, dont la formation dépend. Les candidatures pour la rentrée <?php echo date('Y'); ?>/<?php echo date('Y')+1; ?> seront ouvertes à partir du vendredi 4 avril 2015.</p>

              <p>Date limite de dépôt des dossiers :</p>
    	        <ul>
                  <li>1ère session : 3 Juin 2016</li>
                  <li>2ème session : 1er septembre 2016</li>
          </div>
          <div class="col-2 side-padding">
              <h3 class="title-3">Le dossier à préparer</h3>
              <p>Le candidat doit fournir obligatoirement son dossier scolaire (relevés de notes), une lettre de motivation et son CV. Il est également fortement conseillé de joindre un portfolio détaillé regroupant des créations ou bien de justifier de sa sensibilité artistique.</p>
              <p>Il est possible d'intégrer l'école directement en 2ème année si les diplômes attestent du niveau requis.</p>
          </div>
          <p class="center"><a class="primary-btn" href="#">Déposer votre candidature</a></p>
      </div>
    </div>

    <div>
        <div class="container">
            <h2 class="title-2 center">Paroles d'anciens</h2>
            @include('includes.testimonial')
        </div>
    </div>
@endsection
