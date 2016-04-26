@extends('admin.admin',['nav' => 'tag'])

@section('content')
    <h1>Ajouter un Tag</h1>

    <hr/>

    {!! Form::open(['url' => 'admin/Tag']) !!}

        @include('admin.tag._form', ['submitButtonText' => 'Ajouter'])

    {!! Form::close() !!}

    @include('errors.list');

@endsection
