<!-- name form input -->
<div class="form-group">
    {!! Form::label('name','Nom :') !!}
    {!! Form::text('name',null,['class' => 'form-control']) !!}
</div>
<!-- type form input -->
<div class="form-group">
    {!! Form::label('type','Type de partenariat : ') !!}
    {!! Form::text('type',null,['class' => 'form-control']) !!}
</div>
<!-- description form input -->
<div class="form-group">
    {!! Form::label('description','Description :') !!}
    {!! Form::textarea('description',null,['class' => 'form-control']) !!}
</div>
<!-- url_image form input -->
@if (isset($old_url_image))
    <div class="form-group">
        {!! Form::label('url_image','Logo du partenaire | Fichier Actuel : '.$old_url_image) !!}
        {!! Form::file('url_image',['class' => 'form-control']) !!}
    </div>
@else
    <div class="form-group">
        {!! Form::label('url_image','Logo du partenaire') !!}
        {!! Form::file('url_image',['class' => 'form-control']) !!}
    </div>
@endif

<!-- url_web form input -->
<div class="form-group">
    {!! Form::label('url_web','Lien vers leur site web : ') !!}
    {!! Form::text('url_web',null,['class' => 'form-control']) !!}
</div>

<!-- submit form input -->
<div class="form-group">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control']) !!}
</div>
