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

<!-- url_image form input -->
@if (isset($old_url_image))
    <div class="form-group">
        {!! Form::label('url_image','Photo de l\'étudiant | Fichier Actuel : '.$old_url_image) !!}
        {!! Form::file('url_image',['class' => 'form-control']) !!}
    </div>
@else
    <div class="form-group">
        {!! Form::label('url_image','Photo de l\'étudiant') !!}
        {!! Form::file('url_image',['class' => 'form-control','id' => 'url_image']) !!}
    </div>
@endif

 <img id="url_photo_student" class="url_photo_student" src="@if(isset($old_url_image))/images/studentExchangeTestimonial/{{$old_url_image}}@else  @endif" alt="current profil picture" />

<!-- Gallery form input -->
<div class="form-group">
    {!! Form::label('url_gallery','Galerie de photos') !!}
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
