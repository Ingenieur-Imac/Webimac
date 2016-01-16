@extends('admin.admin')

@section('content')
    <h1>Créer un nouveau projet</h1>

    <hr/>

    {!! Form::open(['url' => 'admin/project']) !!}

        @include('admin.project._form', ['submitButtonText' => 'Créer un projet'])

    {!! Form::close() !!}

    @include('errors.list');

@endsection
