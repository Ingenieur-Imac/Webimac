@extends('admin.admin')

@section('content')
    <h1> Liste du staff</h1>
    <hr/>
    <a href="{{action('AdminStaffController@create')}}"><button class="btn btn-primary">Ajouter un membre du staff</button></a>
    <hr/>
    <h2> Principaux Membres</h2>
    @if (count($staffs_main) == 0)
        Aucun staff à afficher pour le moment
    @else
        @foreach ($staffs_main as $staff)
            <h3><a href="{{action('AdminStaffController@edit',[$staff->id])}}">{{ $staff->name }}</a></h3>
        @endforeach
    @endif
    <h2> Membres secondaires </h2>
    @if (count($staffs) == 0)
        Aucun staff à afficher pour le moment
    @else
        @foreach ($staffs as $staff)
            <h3><a href="{{action('AdminStaffController@edit',[$staff->id])}}">{{ $staff->name }}</a></h3>
        @endforeach
    @endif
@endsection
