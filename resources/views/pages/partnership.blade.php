<?php
  $title = 'Entreprises';
?>

@extends('layouts.default')

@section('title')
    Imac | {{ $title }}
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => $title)) -->
    <div class="container center-content-padding">
        <div class="side-padding">
            <h1 class="title-1">Nos partenaires</h1>
            <p class="lead">Intégrée au monde professionnel, l’IMAC a su tisser des liens durables avec plusieurs intervenants majeurs du monde du multimédia.</p>
            <p>Nos étudiants bénéficient par exemple de cours donnés par des intervenants professionnels, profitant ainsi à la fois de leurs compétences et de leur expérience. Ils ont aussi la possibilité de collaborer avec ces partenaires lors de projets.</p>        </div>
        </div>
    </div>
    <div class="container grid">
        <div class="grid-cell">
            <img src=".." alt="<Name logo>" />
            <h2 class="title-4">Name</h2>
            <p>Partnership-type</p>
            <p>Description</p>
            <p><a href="<URL>" target="_blank">Visiter le site de <Name></a></p>
        </div>
        <div class="grid-cell light-row">
            <img src=".." alt="<Name logo>" />
            <p class="title-4">Name</p>
            <p>Partnership-type</p>
            <p>Description Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p><a href="<URL>" target="_blank">Visiter le site de <Name></a></p>
        </div>
        <div class="grid-cell">
            <img src=".." alt="<Name logo>" />
            <p class="title-4">Name</p>
            <p>Partnership-type</p>
            <p>Description</p>
            <p><a href="<URL>" target="_blank">Visiter le site de <Name></a></p>
        </div>
        <div class="grid-cell light-row">
            <img src=".." alt="<Name logo>" />
            <p class="title-4">Name</p>
            <p>Partnership-type</p>
            <p>Description</p>
            <p><a href="<URL>" target="_blank">Visiter le site de <Name></a></p>
        </div>
        <div class="grid-cell">
            <img src=".." alt="<Name logo>" />
            <p class="title-4">Name</p>
            <p>Partnership-type</p>
            <p>Description</p>
            <p><a href="<URL>" target="_blank">Visiter le site de <Name></a></p>
        </div>
        <div class="grid-cell center">
            <p class="title-5">Et vous ?</p>
            <a class="secondary-btn" href="#">Devenir partenaires</a>
        </div>
    </div>
@endsection
