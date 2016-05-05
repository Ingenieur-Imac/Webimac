@extends('layouts.default')

@section('title')
    Devenir partenaire | IMAC ingénieur
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->
    <div class="container">
        <div class="col-8 center-block">
            <h1 class="title-1">Devenir partenaire</h1>
            <p class="lead">Si vous êtes intéressé pour devenir partenaire de la formation IMAC, veuillez remplir le formulaire ci-dessous et nous vous recontacterons dans les plus brefs délais.</p>
            <p class="light-text">(Les champs indiqués par une * sont obligatoires.)</p>
            {{ Form::open(['url' => 'foo/bar']) }}
                {!! Form::email('email', null, ['placeholder' => 'Votre e-mail*', 'required' => 'required']) !!}
                {!! Form::text('name', null, ['placeholder' => 'Nom, nom d\'entreprise']) !!}
                {!! Form::text('subject', null, ['placeholder' => 'Objet de l\'e-mail*', 'required' => 'required']) !!}
                {!! Form::textarea('message', null, ['placeholder' => 'Message*', 'required' => 'required']) !!}
                {!! Form::label('antispam', 'Complétez l\'opération à trou : 1 + '); !!}
                {!! Form::text('antispam', null, ['placeholder' => '?*', 'class' => 'antispam', 'required' => 'required']) !!} = 2
                {!! Form::submit('Envoyer') !!}
            {{ Form::close() }}
        </div>
    </div>
@endsection
