@extends('admin.admin',['nav' => 'staff'])

@section('content')
    <h1>Ajouter un membre du staff</h1>

    <hr/>

    {!! Form::open(['url' => 'admin/Staff',"enctype" => "multipart/form-data"]) !!}

        @include('admin.staff._form', ['submitButtonText' => 'Ajouter'])

    {!! Form::close() !!}

    @include('errors.list');

@endsection
