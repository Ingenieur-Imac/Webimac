@extends('admin.admin',['nav' => 'studentExchangeTestimonial'])

@section('content')
    <h1>Créer une nouvelle parole d'ancien à l'étranger</h1>

    <hr/>

    {!! Form::open(['url' => 'admin/StudentExchangeTestimonial',"enctype" => "multipart/form-data"]) !!}

        @include('admin.studentExchangeTestimonial._form', ['submitButtonText' => 'Créer une parole d\'ancien à l\'étranger'])

    {!! Form::close() !!}

    @include('errors.list');

@endsection
