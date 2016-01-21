@extends('admin.admin')

@section('content')
    <h2>Vous êtes en train de modifier le membre du staff : {{$staff->name}}</h2>

    {!! Form::model($staff, ['method' => 'PATCH',"enctype" => "multipart/form-data", 'action' => ['AdminStaffController@update',$staff->id]]) !!}

        @include('admin.staff._form', ['submitButtonText' => 'Modifier','old_url_image' => $staff->url_image])

    {!! Form::close() !!}

    {!! Form::model($staff->id,['method' => 'DELETE','action' => ['AdminStaffController@destroy', $staff->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Supprimer le membre du staff',['class' => 'btn btn-danger form-control']) !!}
        </div>
    {!! Form::close() !!}

    @include('errors.list')
@endsection
