@extends('layouts.default')

@section('title')
    Réalisations | IMAC ingénieur
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->
    <div class="container">
        <div class="col-8 center-block">
            <h1 class="title-1">Les réalisations</h1>
            <p class="lead">Les enseignements de la formation IMAC sont centrés autour de projets, tous <strong>très variés et pluridisciplinaires</strong>.</p>
            <p>Ils révèlent les compétences et la polyvalence acquises par les étudiants au cours des trois années de formation. La créativité et les profils complémentaires de ces derniers rendent leurs projets uniques et témoins de leur savoir-faire. Jugez par vous-mêmes !</p>
        </div>
        <div class="col-8 center-block">
            <p>Filtrer :
                <span rel="all" class="main-filter main-selected-filter">Tout</span>
                <span rel="heart" class="main-filter">Coup de cœur</span>
                {!! Form::open(array('class'=>'project-main-filters')) !!}
                    {{ Form::select('year', $years) }}
                {!! Form::close() !!}
            </p>
            {!! Form::open(array('class'=>'project-filters')) !!}
            @foreach ($tags as $tag)
                <div class="filter">{!! Form::checkbox('filter', $tag->name,false,["rel" => $tag->id]) !!} {!! $tag->name !!}</div>
            @endforeach
            {!! Form::close() !!}

        </div>
        <div class="col-12 projects">
            @include('includes.project', $projects)
        </div>
    </div>
@endsection

@section('script')
    <script src="vendor/jquery/dist/jquery.js"></script>
    <script src="{{URL::asset('js/filter-projects.js')}}" charset="utf-8"></script>
@endsection
