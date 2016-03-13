@extends('admin.admin')

@section('content')
    <h1> Liste des étudiants</h1>
    <hr/>
    <a href="{{action('AdminStudentController@create')}}"><button class="btn btn-primary">Ajouter un étudiant</button></a>
    <hr/>
    @if (count($students) == 0)
        Aucun étudiant à afficher pour le moment
    @else
        @foreach ($students as $student)
            <h3><a href="{{action('AdminStudentController@edit',[$student->id])}}">{{ $student->name }}</a></h3>
        @endforeach
    @endif
@endsection
