@extends('admin.admin',['nav' => 'others'])

@section('content')
    <h1>Autres éléments du site</h1>
    <hr/>
    <h2>Timer JPO</h2>
    {!! Form::open(['url' => 'admin/others/timer']) !!}
        <div class="form-group">
            {!! Form::label('display-date','Afficher le bandeau de portes ouvertes :') !!}
            {!! Form::checkbox('display-date',null,$displayDate) !!}
        </div>
        <div class="form-group">
            {!! Form::label('date','Jour de la JPO') !!}
            @if ($date != null)
                {!! Form::text('date',$date,['class' => 'form-control']) !!}
            @else
                {!! Form::text('date',null,['class' => 'form-control']) !!}
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('date_en','Jour de la JPO (anglais)') !!}
            @if ($date != null)
                {!! Form::text('date_en',$date_en,['class' => 'form-control']) !!}
            @else
                {!! Form::text('date_en',null,['class' => 'form-control']) !!}
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
    {!! Form::close() !!}
    <hr/>
    {!! Form::open(['url' => 'admin/others/mailing-list']) !!}
        <!-- afficher form input -->
        <div class="form-group">
            {!! Form::label('IMAC1','Mailing liste des IMAC1 :') !!}
            {!! Form::text('IMAC1',$mailingList["IMAC1"],['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('IMAC2','Mailing liste des IMAC2 :') !!}
            {!! Form::text('IMAC2',$mailingList["IMAC2"],['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('IMAC3','Mailing liste des IMAC3 :') !!}
            {!! Form::text('IMAC3',$mailingList["IMAC3"],['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Enregistrer',['class' => 'btn btn-primary form-control']) !!}
    {!! Form::close() !!}
    <p><br/><br/></p>
@endsection
