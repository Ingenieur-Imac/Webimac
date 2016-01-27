@extends('admin.admin')

@section('content')
    <h1>Ajouter un partenariat</h1>

    <hr/>

    {!! Form::open(['url' => 'admin/Partnership',"enctype" => "multipart/form-data"]) !!}

        @include('admin.partnership._form', ['submitButtonText' => 'Ajouter'])

    {!! Form::close() !!}

    @include('errors.list')

@endsection
