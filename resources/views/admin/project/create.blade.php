@extends('admin.admin',['nav' => 'project'])

@section('content')
    <h1>Créer un nouveau projet</h1>

    <hr/>

    {!! Form::open(['url' => 'admin/project',"enctype" => "multipart/form-data"]) !!}

        @include('admin.project._form', ['submitButtonText' => 'Créer un projet'])

    {!! Form::close() !!}

    @include('errors.list');

@endsection
