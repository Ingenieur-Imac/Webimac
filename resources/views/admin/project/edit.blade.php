@extends('admin.admin')

@section('content')
    <h2>Vous êtes en train de modifier le Projet : {{$project->name}}</h2>

    {!! Form::model($project, ['method' => 'PATCH', 'action' => ['AdminProjectController@update',$project->id]]) !!}

        @include('admin.project._form', ['submitButtonText' => 'Modifier'])

    {!! Form::close() !!}

    {!! Form::model($project->id,['method' => 'DELETE','action' => ['AdminProjectController@delete', $project->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Supprimer le projet',['class' => 'btn btn-danger form-control']) !!}
        </div>
    {!! Form::close() !!}

    @include('errors.list')
@endsection
