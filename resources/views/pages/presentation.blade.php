<?php
  $title = 'Présentation';
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
        <h1 class="title-1">Qu'est-ce que l'Imac ?</h1>
        <div class="col-2 side-padding">
            <img src="{{URL::asset('images/banners/Groupe_IMAC.jpg')}}" alt="Des ingénieurs Imac" />
        </div>
        <div class="col-2 side-padding">
            <p class="lead">L’IMAC est une formation d’ingénieur en trois ans certifiée par la CTI (Commission des Titres d’Ingénieur). Créée en 19xx, c’est la première formation d’ingénieur publique en France alliant arts et sciences.</p>
            <p>En effet, notre pédagogie pluridisciplinaire nous permet d'associer esprit créatif et savoirs scientifiques. Nous formons des cadres supérieurs évoluant dans les domaines de l’Internet, des jeux vidéo, de l'audiovisuel, de la communication numérique...</p>
        </div>
    </div>

    <div class="light-row">
      <div class="container center-content-padding">
          <h2 class="title-2">Trois ans pour devenir un ingénieur créatif</h2>
          <p>Truc méga-relou à intégrer</p>
      </div>
    </div>

    <div class="container center-content-padding">
        <h2 class="title-2">Les projets</h2>
        <p class="lead side-padding">Dans une logique de professionnalisation, les étudiants mettent en application leurs connaissances en réalisant de multiples projets.</p>
        <div class="col-3 framed">
            <p>5</p>
            <p>projets par semestre</p>
            <p>pouvant compter pour la totalité de la note de la matière</p>
        </div>
        <div class="col-2 side-padding">
            <h3 class="title-3">Les projets à l'IMAC</h3>
            <p>Ceux-ci leur permettent de gagner en autonomie, d’acquérir de l’expérience en gestion de projet et de se familiariser avec le travail d’équipe. Ils se déroulent sur plusieurs semaines et sont parfois communs à plusieurs matières (OpenGL et C++, bases de données et HTML…).</p>
        </div>
        <div class="col-2 side-padding">
            <h3 class="title-3">Soutien technique</h3>
            <p>Du matériel est mis à disposition des étudiants :</p>
            <ul>
                <li>les logiciels traditionnels du multimédia</li>
                <li>matériel audiovisuel en libre service (Canon 7D, prise de son, perches, pieds...)</li>
                <li>un fond vert et un drône, Kinect, GoPro2, écran 3D stéréoscopique, Quadrotor, Camsmart, un casque de Réalité Virtuelle Oculus Rift...</li>
            </ul>
        </div>
        <p class="center"><a class="primary-btn" href="#">Découvrir les projets</a></p>
    </div>

    <div class="light-row">
      <div class="container center-content-padding">
          <h2 class="title-2">Les stages</h2>
      </div>
    </div>

    <div>
        <div class="container">
            <h2 class="title-2 center">Paroles d'anciens</h2>
            @include('includes.testimonial')
        </div>
    </div>
@endsection
