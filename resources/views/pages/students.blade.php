<?php
  $title = 'Nos étudiants';
?>

@extends('layouts.default')

@section('title')
    Imac | {{ $title }}
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => $title)) -->
    <div class="container center-content-padding">
        <div class="side-padding">
            <h1 class="title-1">Qu'est-ce qu'un-e Imac ?</h1>
            <p class="lead">Une abondance de personnalités, de l’entraide, du fun : l’Imac, c’est un peu comme une deuxième famille ! Avec des promotions de maximum cinquante étudiants, les liens se créent en effet très naturellement.</p>
            <p>Tout au long de l’année, <a href="#">le Bureau des Imac (BDI)</a> s’applique à cultiver cet esprit chaleureux en organisant de nombreux événements, notamment les incontournables JeudImac, soirées conviviales autour d’un verre à Paris. L’occasion de faire des rencontres, d’élargir son carnet d’adresses puisque des anciens Imac sont aussi de la partie, et surtout de passer un bon moment !</p>
            <p>À l’heure des partiels, tout le monde s’accroche et s’entraide, l’hétérogénéité des parcours se montrant profitable à tous. Bienvenue chez les Imacs !</p>
        </div>
    </div>
@endsection
