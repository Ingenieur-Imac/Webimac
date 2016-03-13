@extends('admin.admin')

@section('content')
    <h1>Créer une nouvelle parole d'ancien</h1>

    <hr/>

    {!! Form::open(['url' => 'admin/StudentTestimonial',"enctype" => "multipart/form-data"]) !!}

        @include('admin.studentTestimonial._form', ['submitButtonText' => 'Créer une parole d\'ancien'])

    {!! Form::close() !!}

    @include('errors.list');

@endsection
