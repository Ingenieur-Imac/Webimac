@extends('admin.admin')

@section('content')
    <h2>Vous êtes en train de modifier le Témoignage de : {{$studentExchangeTestimonial->name}}</h2>

    {!! Form::model($studentExchangeTestimonial, ['method' => 'PATCH',"enctype" => "multipart/form-data", 'action' => ['AdminStudentExchangeTestimonialController@update',$studentExchangeTestimonial->id]]) !!}

        @include('admin.studentExchangeTestimonial._form', ['submitButtonText' => 'Modifier','old_url_image' => $studentExchangeTestimonial->url_image])

    {!! Form::close() !!}

    {!! Form::model($studentExchangeTestimonial->id,['method' => 'DELETE','action' => ['AdminStudentExchangeTestimonialController@destroy', $studentExchangeTestimonial->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Supprimer le témoignage',['class' => 'btn btn-danger form-control']) !!}
        </div>
    {!! Form::close() !!}

    @include('errors.list')
@endsection
