<?php
  $title = 'Mentions légales';
?>

@extends('layouts.default')

@section('title')
    Imac | {{ $title }}
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => $title)) -->
    <div class="container center-content-padding">
        <div class="side-padding">
            <h1 class="title-1">Mentions légales</h1>
            <h2 class="title-5">Éditeur</h2>
            <p>Adresse : Ecole d'ingénieur ESIPE-IMAC, Université Paris-Est Marne La Vallée 5 Boulevard Descartes 77420 Champs-sur-Marne
            <p>Numéro de téléphone : 01.60.95.72.16</p>
            <p>Directeur de la publication : M. Venceslas Biri</p>

            <h2 class="title-5">Hébergeur</h2>
            <p>La société ALWAYSDATA, SARL au capital de 5.000 € immatriculée au RCS de Paris sous le numéro 492 893 490 dont le siège social se trouve 62 rue Tiquetonne – 75002 Paris.</p>

            <h2 class="title-5">Crédits</h2>
            <p>Crédits photographiques : M. Mehdi-Antoine Mahfoudi</p>
            <p>Bebau Neue : Original Designed by Ryoichi Tsunekawa, <a href="http://dharmatype.com/" target="_blank"> Dharma Type Foundry</a></p>

            <h2 class="title-5">Propriété intellectuelle</h2>
            <p>L’ensemble des textes et des graphiques, soumis au droit d’auteur, est propriété intellectuelle de la formation ingénieur Imac.</p>
        </div>
    </div>
@endsection
