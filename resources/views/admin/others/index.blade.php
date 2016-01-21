@extends('admin.admin');

@section('content')
    <h1>Autres éléments du site</h1>
    <hr/>
    <h2>Timer JPO</h2>
    {!! Form::open(['url' => 'admin/others/timer']) !!}
        <div class="form-group">
            {{--$date->format('d/m/Y')--}}
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
@endsection
