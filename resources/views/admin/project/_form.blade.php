<div class="form-group">
    {!! Form::label('name','Nom :') !!}
    {!! Form::text('name',null,['class' => 'form-control']) !!}
</div>

<!-- excerpt form input -->
<div class="form-group">
    {!! Form::label('excerpt','Extrait : ') !!}
    {!! Form::text('excerpt',null,['class' => 'form-control']) !!}
</div>

<!-- description form input -->
<div class="form-group">
    {!! Form::label('description','Description :') !!}
    {!! Form::text('description',null,['class' => 'form-control']) !!}
</div>

<!-- url_image form input -->
@if (isset($old_url_image))
    <div class="form-group">
        {!! Form::label('url_image','URL de l\'image de présentation | Fichier Actuel : '.$old_url_image) !!}
        {!! Form::file('url_image',['class' => 'form-control']) !!}
    </div>
@else
    <div class="form-group">
        {!! Form::label('url_image','URL de l\'image de présentation') !!}
        {!! Form::file('url_image',['class' => 'form-control']) !!}
    </div>
@endif

<!-- name_of_tutors form input -->
<div class="form-group">
    {!! Form::label('name_of_tutors','Nom des tuteurs') !!}
    {!! Form::text('name_of_tutors',null,['class' => 'form-control']) !!}
</div>

<!-- web_link form input -->
<div class="form-group">
    {!! Form::label('web_link','Lien vers le site web') !!}
    {!! Form::text('web_link',null,['class' => 'form-control']) !!}
</div>

<!-- github_link form input -->
<div class="form-group">
    {!! Form::label('github_link','Lien vers GitHub') !!}
    {!! Form::text('github_link',null,['class' => 'form-control']) !!}
</div>

<!-- vimeo_link form input -->
<div class="form-group">
    {!! Form::label('vimeo_link','Lien vers Viméo') !!}
    {!! Form::text('vimeo_link',null,['class' => 'form-control']) !!}
</div>

<!-- url_video form input -->
<div class="form-group">
    {!! Form::label('url_video','Url de la vidéo de présentation') !!}
    {!! Form::text('url_video',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('date','Crée le :') !!}
    {!! Form::input('date','date',date('Y-m-d'),['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control']) !!}
</div>
