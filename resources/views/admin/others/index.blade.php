@extends('admin.admin');

@section('content')
    <h1>Autres éléments du site</h1>
    <hr/>
    <h2>Timer JPO</h2>
    {!! Form::open(['url' => 'admin/others/timer']) !!}
        <div class="form-group">
            {!! Form::label('date','Jour de la JPO') !!}
            @if ($date != null)
                {!! Form::date('date',$date->format('Y-m-d'),['class' => 'form-control']) !!}
            @else
                {!! Form::date('date',null,['class' => 'form-control']) !!}
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('time','Heure de la JPO') !!}
            @if ($date != null)
                {!! Form::time('time',$date->format('H:i'),['class' => 'form-control']) !!}
            @else
                {!! Form::time('time',null,['class' => 'form-control']) !!}
            @endif
        </div>
        {!! Form::submit('Enregistrer la date des JPO',['class' => 'btn btn-primary form-control']) !!}
    {!! Form::close() !!}

    <hr/>
    <h2>Dates de Candidatures</h2>
    {!! Form::open(['url' => 'admin/others/application']) !!}
        <div class="form-group">
            {!! Form::label('openning','Ouverture des Candidatures') !!}
            @if ($application_date['openning'] != null)
                {!! Form::text('openning',$application_date['openning'],['class' => 'form-control']) !!}
            @else
                {!! Form::text('openning',null,['class' => 'form-control']) !!}
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('first_session','Fin de la première session') !!}
            @if ($application_date['first_session'] != null)
                {!! Form::text('first_session',$application_date['first_session'],['class' => 'form-control']) !!}
            @else
                {!! Form::text('first_session',null,['class' => 'form-control']) !!}
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('second_session','Fin de la deuxième session') !!}
            @if ($application_date['second_session'] != null)
                {!! Form::text('second_session',$application_date['second_session'],['class' => 'form-control']) !!}
            @else
                {!! Form::text('second_session',null,['class' => 'form-control']) !!}
            @endif
        </div>
        {!! Form::submit('Enregistrer les dates de candidature',['class' => 'btn btn-primary form-control']) !!}
    {!! Form::close() !!}
@endsection
