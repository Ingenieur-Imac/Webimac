<!-- name form input -->
<div class="form-group">
    {!! Form::label('name','Nom :') !!}
    {!! Form::text('name',null,['class' => 'form-control']) !!}
</div>
<!-- description form input -->
<div class="form-group">
    {!! Form::label('description','Description :') !!}
    {!! Form::textarea('description',null,['class' => 'form-control']) !!}
</div>
<!-- url_image form input -->
@if (isset($old_url_image))
    <div class="form-group">
        {!! Form::label('url_image','URL de la photo du partenariat | Fichier Actuel : '.$old_url_image) !!}
        {!! Form::file('url_image',['class' => 'form-control']) !!}
    </div>
@else
    <div class="form-group">
        {!! Form::label('url_image','URL de la photo du partenariat') !!}
        {!! Form::file('url_image',['class' => 'form-control']) !!}
    </div>
@endif

<!-- submit form input -->
<div class="form-group">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control']) !!}
</div>
