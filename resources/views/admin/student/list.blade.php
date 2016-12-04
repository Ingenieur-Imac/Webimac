@extends('admin.admin',['nav' => 'student'])

@section('content')
    <h1> Liste des étudiants</h1>
    <hr/>
    <a href="{{action('AdminStudentController@create')}}"><button class="btn btn-primary">Ajouter un étudiant</button></a>
    <hr/>
    <div class="input-group">
        <span class="input-group-addon" id="ctrl-search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
        <input id="search" type="text" class="form-control" placeholder="Prénom & Nom" aria-describedby="ctrl-search">
    </div>
    <br/>
    <div class="form-group">
        <select id="select-promo" class="form-control">
            <option value="0">Promotion à chercher</option>
            @foreach($promos as $key => $value)
                <option value="{{$key}}">{{$value}}</option>
            @endforeach
        </select>
    </div>
    @if (count($students) == 0)
        Aucun étudiant à afficher pour le moment
    @else
        @foreach ($students as $student)
            <h3><a rel="{{$student->promo}}" href="{{action('AdminStudentController@edit',[$student->id])}}">{{ ucwords($student->name) }} {{ ucwords($student->surname)}}</a></h3>
        @endforeach
    @endif
@endsection

@section('script')
    <script src="{{URL::asset('js/admin_search.js')}}" charset="utf-8"></script>
@endsection
