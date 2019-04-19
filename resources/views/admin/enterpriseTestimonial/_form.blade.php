<!-- name form input -->
<div class="form-group">
    {!! Form::label('name','Nom :') !!}
    {!! Form::text('name',null,['class' => 'form-control']) !!}
</div>

{{-- <!-- description form input -->
<div class="form-group">
    {!! Form::label('description','Description :') !!}
    {!! Form::text('description',null,['class' => 'form-control']) !!}
</div> --}}

<!-- overview form input -->
<div class="form-group">
    {!! Form::label('overview','Témoignages :') !!}
    {!! Form::textarea('overview',null,['class' => 'form-control']) !!}
</div>

<!-- english overview form input -->
<div class="form-group">
    {!! Form::label('en_overview','Témoignages en Anglais :') !!}
    {!! Form::textarea('en_overview',null,['class' => 'form-control']) !!}
</div>

<!-- url_image form input -->
@if (isset($old_url_image))
    <div class="form-group">
        {!! Form::label('url_image','URL de la photo de l\'entreprise | Fichier Actuel : '.$old_url_image) !!}
        <p>Redimensionner la photo en <strong>500*500px maximum</strong> et l'optimiser via un site tel que <a href="https://kraken.io/" target="_blank">Kraken.io</a>.</p>
        <p>Renommer la photo avant de l'uploads: <strong>entreprise_annee.jpg</strong> (exemple: ubisoft_2021.jpg)</p>
        {!! Form::file('url_image',['class' => 'form-control']) !!}
    </div>
@else
    <div class="form-group">
        {!! Form::label('url_image','URL de la photo de l\'entreprise') !!}
        <p>Redimensionner la photo en <strong>500*500px maximum</strong> et l'optimiser via un site tel que <a href="https://kraken.io/" target="_blank">Kraken.io</a>.</p>
        <p>Renommer la photo avant de l'uploads: <strong>entreprise_annee.jpg</strong> (exemple: ubisoft_2021.jpg)</p>
        {!! Form::file('url_image',['class' => 'form-control']) !!}
    </div>
@endif

<!-- submit form input -->
<div class="form-group">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control']) !!}
</div>
