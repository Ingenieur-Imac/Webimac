<!-- name form input -->
<div class="form-group">
    {!! Form::label('name','Prénom + Nom :') !!}
    {!! Form::text('name',null,['class' => 'form-control']) !!}
</div>

<!-- job form input -->
<div class="form-group">
    {!! Form::label('job','Profession et Entreprise :') !!}
    {!! Form::text('job',null,['class' => 'form-control']) !!}
</div>

<!-- year form input -->
<div class="form-group">
    {!! Form::label('year','Année du diplôme :') !!}
    {!! Form::input('number','year',null,['class' => 'form-control']) !!}
</div>

<!-- overview form input -->
<div class="form-group">
    {!! Form::label('overview','Témoignages :') !!}
    {!! Form::textarea('overview',null,['class' => 'form-control']) !!}
</div>

<!-- url_image form input -->
@if (isset($old_url_image))
    <div class="form-group">
        {!! Form::label('url_image','Photo de l\'étudiant | Fichier Actuel : '.$old_url_image) !!}
        {!! Form::file('url_image',['class' => 'form-control']) !!}
    </div>
@else
    <div class="form-group">
        {!! Form::label('url_image','Photo de l\'étudiant') !!}
        {!! Form::file('url_image',['class' => 'form-control']) !!}
    </div>
@endif

<!-- submit form input -->
<div class="form-group">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control']) !!}
</div>
