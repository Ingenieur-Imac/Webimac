@extends('admin.admin',['nav' => 'studentTestimonial'])

@section('content')
    <h2>Vous êtes en train le Témoigne de : {{$studentTestimonial->name}}</h2>

    {!! Form::model($studentTestimonial, ['method' => 'PATCH',"enctype" => "multipart/form-data", 'action' => ['AdminStudentTestimonialController@update',$studentTestimonial->id]]) !!}

        @include('admin.studentTestimonial._form', ['submitButtonText' => 'Modifier','old_url_image' => $studentTestimonial->url_image])

    {!! Form::close() !!}

    {!! Form::model($studentTestimonial->id,['method' => 'DELETE','action' => ['AdminStudentTestimonialController@destroy', $studentTestimonial->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Supprimer le témoignage',['class' => 'btn btn-danger form-control']) !!}
        </div>
    {!! Form::close() !!}

    @include('errors.list')
@endsection
