@extends('admin.admin',['nav' => 'enterpriseTestimonial'])

@section('content')
    <h1>Créer une nouvelle parole d'ancien</h1>

    <hr/>

    {!! Form::open(['url' => 'admin/EnterpriseTestimonial',"enctype" => "multipart/form-data"]) !!}

        @include('admin.enterpriseTestimonial._form', ['submitButtonText' => 'Créer une parole d\'ancien'])

    {!! Form::close() !!}

    @include('errors.list');

@endsection
