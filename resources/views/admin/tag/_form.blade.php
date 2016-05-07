<!-- name form input -->
<div class="form-group">
    {!! Form::label('name','Nom du tag') !!}
    {!! Form::text('name',null,['class' => 'form-control']) !!}
</div>

<!-- english name form input -->
<div class="form-group">
    {!! Form::label('en_name','Nom du tag en Anglais') !!}
    {!! Form::text('en_name',null,['class' => 'form-control']) !!}
</div>

<!-- submit form input -->
<div class="form-group">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control']) !!}
</div>
