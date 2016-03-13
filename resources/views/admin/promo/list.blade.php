@extends('admin.admin')

@section('content')
    <h1> Liste des promos</h1>
    <hr/>
    <a href="{{action('AdminPromoController@create')}}"><button class="btn btn-primary">Ajouter une promo</button></a>
    <hr/>
    @if (count($promos) == 0)
        Aucun staff à afficher pour le moment
    @else
        @foreach ($promos as $promo)
            <h3><a href="{{action('AdminPromoController@edit',[$promo->id])}}">{{ $promo->year }}</a></h3>
        @endforeach
    @endif
@endsection
