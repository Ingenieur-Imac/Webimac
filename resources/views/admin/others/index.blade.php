@extends('admin.admin',['nav' => 'others'])

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
            {!! Form::label('year','Année de Candidature') !!}
            @if ($application_date['year'] != null)
                {!! Form::text('year',$application_date['year'],['class' => 'form-control','placeholder' => 'Ex : 2016/2017']) !!}
            @else
                {!! Form::text('year',null,['class' => 'form-control','placeholder' => 'Ex : 2016/2017']) !!}
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('openning','Ouverture des Candidatures') !!}
            @if ($application_date['openning'] != null)
                {!! Form::text('openning',$application_date['openning'],['class' => 'form-control']) !!}
            @else
                {!! Form::text('openning',null,['class' => 'form-control']) !!}
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('first_session','Première session') !!}
            @if ($application_date['first_session'] != null)
                {!! Form::text('first_session',$application_date['first_session'],['class' => 'form-control']) !!}
            @else
                {!! Form::text('first_session',null,['class' => 'form-control']) !!}
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('second_session','Deuxième session') !!}
            @if ($application_date['second_session'] != null)
                {!! Form::text('second_session',$application_date['second_session'],['class' => 'form-control']) !!}
            @else
                {!! Form::text('second_session',null,['class' => 'form-control']) !!}
            @endif
        </div>
        {!! Form::submit('Enregistrer les dates de candidatures',['class' => 'btn btn-primary form-control']) !!}
    {!! Form::close() !!}
    <hr/>
    {!! Form::open(['url' => 'admin/others/openning-application']) !!}
        <!-- afficher form input -->
        <div class="form-group">
            {!! Form::label('openning-application','Afficher le bandeau de candidatures :') !!}
            {!! Form::checkbox('openning-application',null,$displayOpenning) !!}
            {!! Form::submit('Enregistrer',['class' => 'btn btn-primary form-control']) !!}
        </div>
@endsection
