@extends('admin.admin',['nav' => 'tag'])

@section('content')
    <h2>Vous êtes en train de modifier le tag : {{$tag->year}}</h2>

    {!! Form::model($tag, ['method' => 'PATCH', 'action' => ['AdminTagController@update',$tag->id]]) !!}

        @include('admin.tag._form', ['submitButtonText' => 'Modifier'])

    {!! Form::close() !!}

    {!! Form::model($tag->id,['method' => 'DELETE','action' => ['AdminTagController@destroy', $tag->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Supprimer le tag',['class' => 'btn btn-danger form-control']) !!}
        </div>
    {!! Form::close() !!}

    @include('errors.list')
@endsection
