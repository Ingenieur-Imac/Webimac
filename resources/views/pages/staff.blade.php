<?php
  $banner_title = 'La formation IMAC';
  $img = 'Groupe_Chill.jpg';
?>


@extends('layouts.default')

@section('title')
    L'équipe pédagogique de l'IMAC | IMAC ingénieur
@endsection

@section('content')
    @include('includes.banner', array('img' => $img, 'title' => $banner_title))
    @include('includes.subnav')
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->

    <div class="container">
        <div class="col-10 center-block">
            <h1 class="title-1">L'équipe</h1>

            <h2 class="title-2 center">L'équipe dirigeante</h2>
            @include('includes.staffMember', array('staff' => $main_staff))

            <h2 class="title-2 center">Quelques intervenants de l'IMAC</h2>
            @include('includes.staffMember', array('staff' => $staff))
        </div>
    </div>

@endsection
