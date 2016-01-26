<?php
  $title = 'International';
?>

@extends('layouts.default')

@section('title')
    Imac | {{ $title }}
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => $title)) -->
    <div class="container center-content-padding">
        <h1 class="title-1">Partir à l'étranger</h1>
        <h2 class="title-2">Les destinations préférées des Imac</h2>
        <img src="{{URL::asset('images/international/map.png')}}" alt="Des ingénieurs Imac" />
    </div>

    <div class="light-row">
      <div class="container center-content-padding">
          <p class="lead center side-padding">L'expérience d'un séjour à l'étranger est forcément enrichissante :</p>
          <p class="side-padding">L'immersion dans une culture différente ouvre de nouveaux horizons, tant sur le plan personnel que professionnel. <cite>"Sur terre, ce ne sont pas les occasions de s'émerveiller qui manquent, mais les émerveillés."</cite> - Éric-Emmanuel Schmitt</p>
          <div class="frames">
              <div class="framed">
                  <p class="big-number">3</p>
                  <p class="title-4">continents</p>
                  <p>à découvrir : Amérique du Nord, Asie, Europe</p>
              </div>
              <div class="framed">
                  <p class="big-number">+100</p>
                  <p class="title-4">universités</p>
                  <p>partenaires avec l'UPEM peuvent accueillir les étudiants</p>
              </div>
              <div class="framed">
                  <p class="big-number">25%</p>
                  <p class="title-4">des étudiants</p>
                  <p>se laissent tenter par l'aventure et partent pour leur dernière année</p>
              </div>
          </div>
      </div>
    </div>
@endsection
