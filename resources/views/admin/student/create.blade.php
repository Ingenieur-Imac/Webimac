@extends('admin.admin')

@section('content')
    <h1>Ajouter un étudiant</h1>

    <hr/>

    {!! Form::open(['url' => 'admin/Student',"enctype" => "multipart/form-data"]) !!}

        @include('admin.student._form', ['submitButtonText' => 'Ajouter'])

    {!! Form::close() !!}

    @include('errors.list');

@endsection
