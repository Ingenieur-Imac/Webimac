@extends('admin.admin',['nav' => 'home'])

@section('content')
    <div class="jumbotron text-center">
        <h1>Back Office Web IMAC</h1>
        <div>
            <img src="{{URL::asset('images/logoIMAC.png')}}" width="200" alt="" />
        </div>
        <blockquote>
            <p>Anana is life, anana is truth</p>
        </blockquote>
    </div>
    <div class="well well-lg text-center">La documentation est par ici<br/><a href="#"><button type="button" class="btn btn-primary">Documentation</button></div></a>
@endsection
