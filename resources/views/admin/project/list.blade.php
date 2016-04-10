@extends('admin.admin',['nav' => 'project'])

@section('content')
    <h1> Liste des Projets</h1>
    <hr/>
    <a href="{{action('AdminProjectController@create')}}"><button class="btn btn-primary">Créer un nouveau projet</button></a>
    <hr/>
    @if (count($projects) == 0)
        Aucun projet à afficher pour le moment
    @else
        @foreach ($projects as $project)
            <h3><a href="{{action('AdminProjectController@edit',[$project->id])}}">{{ $project->name }}</a></h3>
        @endforeach
    @endif
@endsection
