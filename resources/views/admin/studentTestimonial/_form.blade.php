<!-- name form input -->
<div class="form-group">
    {!! Form::label('name','Nom :') !!}
    {!! Form::text('name',null,['class' => 'form-control']) !!}
</div>

<!-- job form input -->
<div class="form-group">
    {!! Form::label('job','Emploi :') !!}
    {!! Form::text('job',null,['class' => 'form-control']) !!}
</div>

<!-- year form input -->
<div class="form-group">
    {!! Form::label('year','Année du diplôme :') !!}
    {!! Form::input('number','year',null,['class' => 'form-control']) !!}
</div>
