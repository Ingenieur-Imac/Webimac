<!-- year form input -->
<div class="form-group">
    {!! Form::label('year','Année :') !!}
    {!! Form::number('year',null,['class' => 'form-control']) !!}
</div>
<!-- url_image form input -->
@if (isset($old_url_image))
    <div class="form-group">
        {!! Form::label('url_image','URL de la photo de classe | Fichier Actuel : '.$old_url_image) !!}
        <p>Redimensionner la photo en 3000*3000px maximum et l'optimiser via un site tel que <a href="https://kraken.io/" target="_blank">Kraken.io</a>.</p>
        <p>Pour éviter les conflits avec d'autres photos de promotion, merci de nommer la photo ainsi avant de l'uploads: promotion_annee (exemple: promotion_2021.jpg)</p>
        {!! Form::file('url_image',['class' => 'form-control']) !!}
    </div>
@else
    <div class="form-group">
        {!! Form::label('url_image','URL de la photo de classe') !!}
        <p>Redimensionner la photo en 3000*3000px maximum et l'optimiser via un site tel que <a href="https://kraken.io/" target="_blank">Kraken.io</a>.</p>
        <p>Pour éviter les conflits avec d'autres photos de promotion, merci de nommer la photo ainsi avant de l'uploads: promotion_annee (exemple: promotion_2021.jpg)</p>
        {!! Form::file('url_image',['class' => 'form-control']) !!}
    </div>
@endif

<!-- submit form input -->
<div class="form-group">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control']) !!}
</div>
