<?php
  $title = 'Contact';
?>

@extends('layouts.default')

@section('title')
    Imac | {{ $title }}
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => $title)) -->
    <div class="container">
        <div class="side-padding">
            <h1 class="title-1">Nous contacter</h1>
            <div class="col-3 side-padding">
                <h2 class="title-5">Adresse</h2>
                <p>
                    École d'ingénieur IMAC - ESIPE<br />
                    5 boulevard Descartes<br />
                    77420 Champs-sur-Marne
                </p>
                <h2 class="title-5">Accès</h2>
                <p>RER A - Station Noisy-Champs</p>
                <h2 class="title-5">Email</h2>
                <p>sec.imac[at]u-pem.fr</p>
                <h2 class="title-5">Téléphone</h2>
                <p>01.60.95.72.16</p>
                <h2 class="title-5">Secrétariat</h2>
                <p>
                    Bâtiment Copernic - Bureau 1B025<br />
                    Ouverture de 8h30 à 12h et de 13h à 16h
                </p>
            </div>
            <div class="col-2-3 side-padding">
                <div class="media-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2208.1671561461085!2d2.5856766820983466!3d48.839747292836044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60e3214540483%3A0x3261ce9b28031328!2s5+Boulevard+Descartes%2C+77420+Champs-sur-Marne!5e0!3m2!1sfr!2sfr!4v1453393530340" frameborder="0" style="border: 0; height: 325px;" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
