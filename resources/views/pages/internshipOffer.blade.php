@extends('layouts.default')

@section('title')
    Déposer une offre de stage | IMAC ingénieur
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->
    <div class="container">
        <div class="col-8 center-block">
            <h1 class="title-1">Déposer une offre de stage</h1>
            <p class="lead">Nos étudiants effectuent des stages afin de se spécialiser (2 à 4 mois à partir de juin en IMAC2 et 4 à 6 mois à partir d’avril en IMAC3). Si vous êtes intéressé par leur profil, vous pouvez remplir ce formulaire ou joindre un fichier pdf et, après validation par le corps enseignant, nous leur transmettons votre offre.</p>
            <p class="light-text">(Les champs indiqués par une * sont obligatoires.)</p>
            {{ Form::open(['url' => 'foo/bar']) }}
                {!! Form::email('email', null, ['placeholder' => 'Votre e-mail*', 'required' => 'required']) !!}
                {!! Form::text('name', null, ['placeholder' => 'Nom, nom d\'entreprise*', 'required' => 'required']) !!}
                {!! Form::text('position', null, ['placeholder' => 'Intitulé du poste']) !!}
                {!! Form::text('place', null, ['placeholder' => 'Lieu et durée']) !!}
                {!! Form::textarea('task', null, ['placeholder' => 'Profil et mission']) !!}
                {!! Form::label('pdf', 'Uploader un fichier pdf (maximum 25 Mo)'); !!}
                {!! Form::file('pdf', ['accept' => '.pdf']) !!}
                {!! Form::textarea('message', null, ['placeholder' => 'Complément d\'information']) !!}
                {!! Form::label('antispam', 'Complétez l\'opération à trou : 1 + '); !!}
                {!! Form::text('antispam', null, ['placeholder' => '?*', 'class' => 'antispam', 'required' => 'required']) !!} = 2
                {!! Form::submit('Envoyer') !!}
            {{ Form::close() }}
        </div>
    </div>
@endsection
