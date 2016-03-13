@extends('admin.admin')

@section('content')
    <h2>Vous êtes en train de modifier le partenariat : {{$partnership->name}}</h2>

    {!! Form::model($partnership, ['method' => 'PATCH',"enctype" => "multipart/form-data", 'action' => ['AdminPartnershipController@update',$partnership->id]]) !!}

        @include('admin.partnership._form', ['submitButtonText' => 'Modifier','old_url_image' => $partnership->url_image])

    {!! Form::close() !!}

    {!! Form::model($partnership->id,['method' => 'DELETE','action' => ['AdminPartnershipController@destroy', $partnership->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Supprimer le partnenariat',['class' => 'btn btn-danger form-control']) !!}
        </div>
    {!! Form::close() !!}

    @include('errors.list')
@endsection
