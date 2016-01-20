<!-- name form input -->
<div class="form-group">
    {!! Form::label('name','Nom :') !!}
    {!! Form::text('name',null,['class' => 'form-control']) !!}
</div>

<!-- main form input -->
<div class="form-group">
    {!! Form::label('main','Principal :') !!}
    {!! Form::checkbox('main','yes') !!}
</div>

<!-- role form input -->
<div class="form-group">
    {!! Form::label('role','Rôle dans l\'école : ') !!}
    {!! Form::text('role',null,['class' => 'form-control']) !!}
</div>

<!-- description form input -->
<div class="form-group">
    {!! Form::label('description','Description :') !!}
    {!! Form::textarea('description',null,['class' => 'form-control']) !!}
</div>

<!-- mail form input -->
<div class="form-group">
    {!! Form::label('mail','Adresse e-mail') !!}
    {!! Form::text('mail',null,['class' => 'form-control']) !!}
</div>

<!-- web_link form input -->
<div class="form-group">
    {!! Form::label('web_link','Lien vers site web') !!}
    {!! Form::text('web_link',null,['class' => 'form-control']) !!}
</div>

<!-- url_image form input -->
@if (isset($old_url_image))
    <div class="form-group">
        {!! Form::label('url_image','URL de la photo du staff | Fichier Actuel : '.$old_url_image) !!}
        {!! Form::file('url_image',['class' => 'form-control']) !!}
    </div>
@else
    <div class="form-group">
        {!! Form::label('url_image','URL de la photo de l\'étudiant') !!}
        {!! Form::file('url_image',['class' => 'form-control']) !!}
    </div>
@endif

<!-- submit form input -->
<div class="form-group">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control']) !!}
</div>
