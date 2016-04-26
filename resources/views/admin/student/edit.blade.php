@extends('admin.admin',['nav' => 'student'])

@section('content')
    <h2>Vous êtes en train de modifier : {{$student->name}}</h2>

    {!! Form::model($student, ['method' => 'PATCH',"enctype" => "multipart/form-data", 'action' => ['AdminStudentController@update',$student->id]]) !!}

        @include('admin.student._form', ['submitButtonText' => 'Modifier','old_url_image' => $student->url_image])

    {!! Form::close() !!}

    {!! Form::model($student->id,['method' => 'DELETE','action' => ['AdminStudentController@destroy', $student->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Supprimer l\'étudiant',['class' => 'btn btn-danger form-control']) !!}
        </div>
    {!! Form::close() !!}

    @include('errors.list')
@endsection
