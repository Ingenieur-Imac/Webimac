@extends('layouts.default')

@section('title')
    {{trans("messages.title-sl")}}
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->

    <div class="container">
        <div class="col-8 center-block">
            <h1 class="title-1">{{trans("messages.sl-ctn-1-t")}}</h1>
            <p class="lead">{{trans("messages.sl-ctn-1-st")}}</p>
            <p>{{trans("messages.sl-ctn-1-c")}}</p>
        </div>
    </div>

    <!-- Boucle for à faire ici avec toutes les associations -->
    <!-- Mettre les bons noms de variables + tests pour liens existants -->
    <div class="association">
        <div class="container">
            <div class="col-2 col-offset-1 middle-valign-ib">
                <img src="{{URL::asset('images/student/DSC_0035.jpg')}}" alt="">
            </div>
            <div class="col-7 col-offset-1 middle-valign-ib">
                <h2 class="title-3">Nom de l'association</h2>
                <p>Salle blabla</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p class="links">
                        <a href="#" target="_blank"><span class="lnr lnr-map-marker"></span></a>
                        <a href="#" target="_blank"><span class="icon-facebook"></span></a>
                        <a href="#" target="_blank"><span class="lnr lnr-envelope"></span></a>
                </p>
            </div>
        </div>
    </div>

@endsection
