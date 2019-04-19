@extends('admin.admin',['nav' => 'tag'])

@section('content')
    <h1>Liste des tags</h1>
    <hr/>
    <a href="{{action('AdminTagController@create')}}"><button class="btn btn-primary">Ajouter un Tag</button></a>
    <hr/>
    @if (count($tags) == 0)
        Aucun tag à afficher pour le moment
    @else
        @foreach ($tags as $tag)
            <h3><a href="{{action('AdminTagController@edit',[$tag->id])}}">{{ $tag->name }}</a></h3>
        @endforeach
    @endif
@endsection
