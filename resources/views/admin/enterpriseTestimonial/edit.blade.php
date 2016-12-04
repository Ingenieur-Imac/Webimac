@extends('admin.admin',['nav' => 'enterpriseTestimonial'])

@section('content')
    <h2>Vous êtes en train de modifier le Témoignage de : {{$enterpriseTestimonial->name}}</h2>

    {!! Form::model($enterpriseTestimonial, ['method' => 'PATCH',"enctype" => "multipart/form-data", 'action' => ['AdminEnterpriseTestimonialController@update',$enterpriseTestimonial->id]]) !!}

        @include('admin.enterpriseTestimonial._form', ['submitButtonText' => 'Modifier','old_url_image' => $enterpriseTestimonial->url_image])

    {!! Form::close() !!}

    {!! Form::model($enterpriseTestimonial->id,['method' => 'DELETE','action' => ['AdminEnterpriseTestimonialController@destroy', $enterpriseTestimonial->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Supprimer le témoignage',['class' => 'btn btn-danger form-control']) !!}
        </div>
    {!! Form::close() !!}

    @include('errors.list')
@endsection
