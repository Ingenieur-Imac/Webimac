@extends('admin.admin',['nav' => 'project'])

@section('content')
    <h1> Liste des Projets</h1>
    <hr/>
    <a href="{{action('AdminProjectController@create')}}"><button class="btn btn-primary">Créer un nouveau projet</button></a>
    <hr/>
    <div class="input-group">
        <span class="input-group-addon" id="ctrl-search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
        <input id="search" type="text" class="form-control" placeholder="Nom du Projet" aria-describedby="ctrl-search">
    </div>
    @if (count($projects) == 0)
        Aucun projet à afficher pour le moment
    @else
        @foreach ($projects as $project)
            <h3><a href="{{action('AdminProjectController@edit',[$project->id])}}">{{ $project->name }}</a></h3>
        @endforeach
    @endif
@endsection
@section('script')
    <script src="{{URL::asset('js/admin_search.js')}}" charset="utf-8"></script>
@endsection
