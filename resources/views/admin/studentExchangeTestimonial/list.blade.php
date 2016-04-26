@extends('admin.admin',['nav' => 'studentExchangeTestimonial'])

@section('content')
    <h1> Liste des Paroles d'Anciens à L'étranger</h1>
    <hr/>
    <a href="{{action('AdminStudentExchangeTestimonialController@create')}}"><button class="btn btn-primary">Créer une nouvelle Parole d'Ancien à l'étranger</button></a>
    <hr/>
    @if (count($studentExchangeTestimonials) == 0)
        Aucune parole d'ancien à l'étranger à afficher pour le moment
    @else
        @foreach ($studentExchangeTestimonials as $studentExchangeTestimonial)
            <h3><a href="{{action('AdminStudentExchangeTestimonialController@edit',[$studentExchangeTestimonial->id])}}">{{ $studentExchangeTestimonial->name }}</a></h3>
        @endforeach
    @endif
@endsection
