@extends('admin.admin',['nav' => 'enterpriseTestimonial'])

@section('content')
    <h1> Liste des Paroles d'Entreprises</h1>
    <hr/>
    <a href="{{action('AdminEnterpriseTestimonialController@create')}}"><button class="btn btn-primary">Créer une nouvelle Parole d'Entreprise</button></a>
    <hr/>
    @if (count($enterpriseTestimonials) == 0)
        Aucune parole d'entreprise à afficher pour le moment
    @else
        @foreach ($enterpriseTestimonials as $enterpriseTestimonial)
            <h3><a href="{{action('AdminEnterpriseTestimonialController@edit',[$enterpriseTestimonial->id])}}">{{ $enterpriseTestimonial->name }}</a></h3>
        @endforeach
    @endif
@endsection
