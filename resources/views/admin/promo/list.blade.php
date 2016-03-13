@extends('admin.admin',['nav' => 'promo'])

@section('content')
    <h1> Liste des promos</h1>
    <hr/>
    <a href="{{action('AdminPromoController@create')}}"><button class="btn btn-primary">Ajouter une promo</button></a>
    <hr/>
    @if (count($promos) == 0)
        Aucun staff à afficher pour le moment
    @else
        @foreach ($promos as $promo)
            <h3><a href="{{action('AdminPromoController@edit',[$promo->id])}}">{{ $promo->year }} | Nombre d'étudiant : {{$promo->nbStudent}}</a></h3>
        @endforeach
    @endif
@endsection
