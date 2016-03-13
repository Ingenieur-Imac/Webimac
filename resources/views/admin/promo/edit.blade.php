@extends('admin.admin',['nav' => 'promo'])

@section('content')
    <h2>Vous êtes en train de modifier la promo : {{$promo->year}}</h2>

    {!! Form::model($promo, ['method' => 'PATCH',"enctype" => "multipart/form-data", 'action' => ['AdminPromoController@update',$promo->id]]) !!}

        @include('admin.promo._form', ['submitButtonText' => 'Modifier','old_url_image' => $promo->url_image])

    {!! Form::close() !!}

    {!! Form::model($promo->id,['method' => 'DELETE','action' => ['AdminPromoController@destroy', $promo->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Supprimer la promo',['class' => 'btn btn-danger form-control']) !!}
        </div>
    {!! Form::close() !!}

    @include('errors.list')
@endsection
