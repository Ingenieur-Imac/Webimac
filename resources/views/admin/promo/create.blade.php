@extends('admin.admin')

@section('content')
    <h1>Ajouter une promo</h1>

    <hr/>

    {!! Form::open(['url' => 'admin/Promo',"enctype" => "multipart/form-data"]) !!}

        @include('admin.promo._form', ['submitButtonText' => 'Ajouter'])

    {!! Form::close() !!}

    @include('errors.list');

@endsection
