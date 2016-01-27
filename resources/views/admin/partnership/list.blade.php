@extends('admin.admin')

@section('content')
    <h1> Liste des partenariats</h1>
    <hr/>
    <a href="{{action('AdminPartnershipController@create')}}"><button class="btn btn-primary">Ajouter un partnenariat</button></a>
    <hr/>
    @if (count($partnerships) == 0)
        Aucun partneriat à afficher pour le moment
    @else
        @foreach ($partnerships as $partnership)
            <h3><a href="{{action('AdminPartnershipController@edit',[$partnership->id])}}">{{ $partnership->name }}</a></h3>
        @endforeach
    @endif
@endsection
