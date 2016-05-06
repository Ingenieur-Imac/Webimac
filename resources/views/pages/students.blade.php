@extends('layouts.default')

@section('title')
    {{trans("messages.title-sts")}}
@endsection

@section('script')
    <script src="vendor/jquery/dist/jquery.js"></script>
    <script src="{{URL::asset('js/slider_promo.js')}}"></script>
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->

    <!-- text -->
    <div class="container">
        <div class="col-8 center-block">
            <h1 class="title-1">{{trans("messages.sts-ctn-1-t")}}</h1>
            <p class="lead">{{trans("messages.sts-ctn-1-st")}}</p>
            <p>{{trans("messages.sts-ctn-1-c-1")}}</p>
            <p>{{trans("messages.sts-ctn-1-c-2")}}</p>
        </div>
    </div>

    <div class="primary-row">
        <div class="container-fluid center">
            <h2 class="title-2">{{trans("messages.sts-ctn-2-t")}}</h2>
            <a class="btn filled-btn white-primary-btn" href="{{ action('PagesController@internshipOffer') }}">{{trans("messages.sts-ctn-2-l")}}</a>
        </div>
    </div>

    <div class="container">
        <div class="col-12">
            <div class="select-year">
                {{Form::select('year', $select_year)}}
            </div>
            <div class="slider">
                <span class="arrow arrow-left lnr lnr-chevron-left"></span>
                <span class="arrow arrow-right lnr lnr-chevron-right"></span>
                <div class="slider-content" style="width: <?php echo count($promos)*100 ?>%; height: auto;">
                    @foreach ($promos as $promo)
                        <div class="slide" rel="{{$promo->year}}" style="width: <?php echo 100/count($promos) ?>%">
                            <div class="col-9 center-block">
                                @if (!empty($promo->url_image))
                                    <img src="{{URL::asset('images/promo/'.$promo->url_image)}}" alt="{{$promo->year}}" />
                                @else
                                    <div class="blank"></div>
                                @endif
                            </div>
                                <!-- STUDENTS -->
                                @if (!empty($students_promo[$promo->year][0]))
                                    <h2 class="title-2 center">La promotion {{ $promo->year }} en détail</h2>
                                    @include('includes.student', array('students' => $students_promo[$promo->year]))
                                @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
