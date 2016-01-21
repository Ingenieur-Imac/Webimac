@extends('admin.admin')

@section('content')
    <h1> Liste des Paroles d'Anciens</h1>
    <hr/>
    <a href="{{action('AdminStudentTestimonialController@create')}}"><button class="btn btn-primary">Créer une nouvelle Parole d'Ancien</button></a>
    <hr/>
    @if (count($studentTestimonials) == 0)
        Aucune parole d'ancien à afficher pour le moment
    @else
        @foreach ($studentTestimonials as $studentTestimonial)
            <h3><a href="{{action('AdminStudentTestimonialController@edit',[$studentTestimonial->id])}}">{{ $studentTestimonial->name }}</a></h3>
        @endforeach
    @endif
@endsection
