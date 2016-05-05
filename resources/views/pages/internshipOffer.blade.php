@extends('layouts.default')

@section('title')
    Déposer une offre de stage | IMAC ingénieur
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->
    <div class="container">
        <div class="col-8 center-block">
            <h1 class="title-1">Déposer une offre de stage</h1>
            <p class="lead">Texte que Charlotte va écrire quand elle voudra une pause.</p>
            <p class="light-text">(Les champs indiqués par une * sont obligatoires.)</p>
            {{ Form::open(['url' => 'foo/bar']) }}
                {!! Form::email('email', null, ['placeholder' => 'Votre e-mail*', 'required' => 'required']) !!}
                {!! Form::text('name', null, ['placeholder' => 'Nom, nom d\'entreprise*', 'required' => 'required']) !!}
                {!! Form::text('position', null, ['placeholder' => 'Intitulé du poste']) !!}
                {!! Form::text('place', null, ['placeholder' => 'Lieu']) !!}
                {!! Form::text('duration', null, ['placeholder' => 'Durée']) !!}
                {!! Form::textarea('profile', null, ['placeholder' => 'Profil']) !!}
                {!! Form::textarea('task', null, ['placeholder' => 'Mission']) !!}
                {!! Form::text('terms', null, ['placeholder' => 'Comment postuler']) !!}
                {!! Form::label('pdf', 'Uploader un fichier pdf (maximum 25 Mo)'); !!}
                {!! Form::file('pdf', ['accept' => '.pdf']) !!}
                {!! Form::label('antispam', 'Complétez l\'opération à trou : 1 + '); !!}
                {!! Form::text('antispam', null, ['placeholder' => '?*', 'class' => 'antispam', 'required' => 'required']) !!} = 2
                {!! Form::submit('Envoyer') !!}
            {{ Form::close() }}
        </div>
    </div>
@endsection
