<!-- name form input -->
<div class="form-group">
    {!! Form::label('name','Nom :') !!}
    {!! Form::text('name',null,['class' => 'form-control']) !!}
</div>
<!-- name form input -->
<div class="form-group">
    {!! Form::label('surname','Prénom :') !!}
    {!! Form::text('surname',null,['class' => 'form-control']) !!}
</div>
<!-- promo form input -->
<div class="form-group">
    {!! Form::label('promo','Promotion') !!}
    {!! Form::select('promo',$promos,null,['class' => 'form-control']) !!}
</div>
<!-- url_web form input -->
<div class="form-group">
    {!! Form::label('url_web','Lien vers le site web') !!}
    {!! Form::text('url_web',null,['class' => 'form-control']) !!}
</div>
<!-- url_linkedin form input -->
<div class="form-group">
    {!! Form::label('url_linkedin','Lien vers Linkedin') !!}
    {!! Form::text('url_linkedin',null,['class' => 'form-control']) !!}
</div>
<!-- url_image form input -->
@if (isset($old_url_image))
    <div class="form-group">
        {!! Form::label('url_image','Photo de l\'étudiant | Fichier Actuel : '.$old_url_image) !!}
        <p>Redimensionner la photo en <strong>300*300px maximum</strong> (elle n'est affichée qu'en 80*80px sur le site) et l'optimiser via un site tel que <a href="https://kraken.io/" target="_blank">Kraken.io</a>.</p>
        <p>Renommer les photos avant de les uploads: <strong>prenom_nom_promotion.jpg</strong> (exemple: sonia_mendes_2021.jpg)</p>
        {!! Form::file('url_image',['class' => 'form-control']) !!}
    </div>
@else
    <div class="form-group">
        {!! Form::label('url_image','Photo de l\'étudiant') !!}
        <p>Redimensionner la photo en <strong>300*300px maximum</strong> (elle n'est affichée qu'en 80*80px sur le site) et l'optimiser via un site tel que <a href="https://kraken.io/" target="_blank">Kraken.io</a>.</p>
        <p>Renommer les photos avant de les uploads: <strong>prenom_nom_promotion.jpg</strong> (exemple: sonia_mendes_2021.jpg)</p>
        {!! Form::file('url_image',['class' => 'form-control']) !!}
    </div>
@endif

<!-- submit form input -->
<div class="form-group">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control']) !!}
</div>
