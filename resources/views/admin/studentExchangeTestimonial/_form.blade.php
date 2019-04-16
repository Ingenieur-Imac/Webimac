<!-- name form input -->
<div class="form-group">
    {!! Form::label('name','Prénom + Nom :') !!}
    {!! Form::text('name',null,['class' => 'form-control']) !!}
</div>

<!-- job form input -->
<div class="form-group">
    {!! Form::label('job','Autres informations :') !!}
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

<!-- english overview form input -->
<div class="form-group">
    {!! Form::label('en_overview','Témoignages en Anglais :') !!}
    {!! Form::textarea('en_overview',null,['class' => 'form-control']) !!}
</div>

<!-- url_image form input -->
@if (isset($old_url_image))
    <div class="form-group">
        {!! Form::label('url_image','Photo de l\'étudiant | Fichier Actuel : '.$old_url_image) !!}
        <p>Recadrer la photo sur le buste et visage</p>
        <p>Redimensionner la photo en <strong>320*320px maximum</strong> (elle est affichée qu'en 160*160px sur le site) et l'optimiser via un site tel que <a href="https://kraken.io/" target="_blank">Kraken.io</a>.</p>
        <p>Renommer les photos avant de les uploads: <strong>prenom_nom_promotion_temoignage.jpg</strong> (exemple: sonia_mendes_2021_temoignage_etranger.jpg)</p>
        {!! Form::file('url_image',['class' => 'form-control']) !!}
    </div>
@else
    <div class="form-group">
        {!! Form::label('url_image','Photo de l\'étudiant') !!}
        <p>Recadrer la photo sur le buste et visage</p>
        <p>Redimensionner la photo en <strong>320*320px maximum</strong> (elle est affichée qu'en 160*160px sur le site) et l'optimiser via un site tel que <a href="https://kraken.io/" target="_blank">Kraken.io</a>.</p>
        <p>Renommer les photos avant de les uploads: <strong>prenom_nom_promotion_temoignage.jpg</strong> (exemple: sonia_mendes_2021_temoignage_etranger.jpg)</p>
        {!! Form::file('url_image',['class' => 'form-control','id' => 'url_image']) !!}
    </div>
@endif

 <img id="url_photo_student" class="url_photo_student" src="@if(isset($old_url_image))/images/studentExchangeTestimonial/{{$old_url_image}}@else  @endif" alt="current profil picture" />

<!-- Gallery form input -->
<div class="form-group">
    {!! Form::label('url_gallery','Galerie de photos') !!}
    <p>Redimensionner les photo en <strong>1920*1080px maximum</strong> et l'optimiser via un site tel que <a href="https://kraken.io/" target="_blank">Kraken.io</a>.</p>
    <p>Renommer les photos avant de les uploads: <strong>prenom_nom_promotion_temoignage_etranger_description.jpg</strong> (exemple: sonia_mendes_2021_temoignage_etranger_cascade.jpg)</p>
    {!! Form::file('url_gallery[]',['multiple' => true,'class' => 'form-control','id' => 'url_gallery']) !!}
</div>

<div id="url_photo_gallery" class="jumbotron">
    @if(isset($gallery))
        @foreach($gallery as $file)
            <div class="ctn-image-gallery">
                <img src="/images/gallery/{{$file->url}}" class="url_photo_student"/>
                <span onclick="deletePic({{$file->id}},this)" class="remove-image glyphicon glyphicon-remove" aria-hidden="true"></span>
            </div>
        @endforeach
    @endif
</div>
<!-- submit form input -->
<div class="form-group">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control']) !!}
</div>
