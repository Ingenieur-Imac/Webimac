@extends('layouts.default')

@section('title')
    {!! trans("messages.title-int") !!}
@endsection

@section('script')
    <script src="../vendor/jquery/dist/jquery.js"></script>
    <script src="{{URL::asset('js/home.js')}}"></script>
    <script src="{{URL::asset('../js/jquery.vmap.min.js')}}"></script>
    <script src="{{URL::asset('../js/jquery.vmap.world.js')}}"></script>
    <script src="{{URL::asset('../js/jquery.vmap.sampledata.js')}}"></script>
    <script>
      jQuery(document).ready(function () {
        var enabledRegions = ['de', 'ca', 'kr', 'gb', 'es', 'jp', 'se', 'tw'];
        jQuery('#vmap').vectorMap({
          map: 'world',
          backgroundColor: null,
          borderColor: null,
          colors: {
            world: '#ffffff',
            de: '#f73c3c',
            ca: '#f73c3c',
            kr: '#f73c3c',
            gb: '#f73c3c',
            es: '#f73c3c',
            jp: '#f73c3c',
            se: '#f73c3c',
            tw: '#f73c3c',
            imac: '#f73c3c'
          },
          hoverColors: {
            world: '#ffffff',
            de: '#ed2626',
            ca: '#ed2626',
            kr: '#ed2626',
            gb: '#ed2626',
            es: '#ed2626',
            jp: '#ed2626',
            se: '#ed2626',
            tw: '#ed2626',
            imac: '#f73c3c'
          },
          hoverOpacity: 0,
          selectedColor: '#ed2626',
          enableZoom: true,
          showLabels: true,
          normalizeFunction: 'polynomial',
          showTooltip: true,
          onRegionClick: function(element, code, region) {
            if(enabledRegions.indexOf(code) === -1){
              event.preventDefault();
            }
            for(var i in $('.full-framed')){
                if($('.full-framed:eq('+i+')').attr('alt') == code){
                    $('.full-framed.selected').removeClass('selected');
                    $('.full-framed:eq('+i+')').addClass('selected');
                    break;
                }
            }
          },
          onLabelShow: function(event, label, code){
            if(enabledRegions.indexOf(code) === -1){
              event.preventDefault();
            }
          }
        });
      });
    </script>
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->
    {{-- <div class="container center-content-padding">
        <h1 class="title-1">{{trans("messages.int-title")}}</h1>
        <h2 class="title-2">{{trans("messages.int-subtitle")}}</h2>
        <img src="{{URL::asset('images/international/map.png')}}" alt="Des ingénieurs IMAC" />
    </div>

    <div class="light-row">
      <div class="container center-content-padding">
          <p class="lead center side-padding">{{trans("messages.int-container-1-title")}}</p>
          <p class="side-padding">{{trans("messages.int-container-1-content")}}</p>

      </div> --}}
    <div class="container">
        <div class="col-8 center-block">
            <h1 class="title-1">{!! trans("messages.int-title") !!}</h1>
            <p class="lead center">{!! trans("messages.int-container-1-title") !!}</p>
            <p>{!! trans("messages.int-container-1-content") !!}</p>
        </div>
        <div class="frames">
            <div class="framed">
                <p class="big-number">{!! trans("messages.int-framed-1-a") !!}</p>
                <p class="title-4">{!! trans("messages.int-framed-1-b") !!}</p>
                <p>{!! trans("messages.int-framed-1-c") !!}</p>
            </div>
            <div class="framed">
                <p class="big-number">{!! trans("messages.int-framed-2-a") !!}</p>
                <p class="title-4">{!! trans("messages.int-framed-2-b") !!}</p>
                <p>{!! trans("messages.int-framed-2-c") !!}</p>
            </div>
            <div class="framed">
                <p class="big-number">{!! trans("messages.int-framed-3-a") !!}</p>
                <p class="title-4">{!! trans("messages.int-framed-3-b") !!}</p>
                <p>{!! trans("messages.int-framed-3-c") !!}</p>
            </div>
        </div>
    </div>

    <div class="light-row">
        <div class="container">
            <div class="col-10 center-block">
                <h2 class="title-2">{!! trans("messages.int-subtitle") !!}</h2>
                <p class="lead center">{!! trans("messages.int-cliquez") !!}</p>
                <div id="vmap"></div>
            </div>
            <div class="col-8 center-block">
                <div class="framed full-framed" alt="de">
                    <p class="big-number">{!! trans("messages.int-m-1-t") !!}</p>
                    <p class="title-4">{!! trans("messages.int-m-1-u-1") !!}</p>
                    <p class="title-4">{!! trans("messages.int-m-1-u-2") !!}</p>
                    <p>{!! trans("messages.int-m-1-c") !!}</p>
                </div>
                <div class="framed full-framed" alt="ca">
                    <p class="big-number">{!! trans("messages.int-m-2-t") !!}</p>
                    <p>{!! trans("messages.int-m-2-c") !!}</p>
                </div>
                <div class="framed full-framed" alt="kr">
                    <p class="big-number">{!! trans("messages.int-m-3-t") !!}</p>
                    <p class="title-4">{!! trans("messages.int-m-3-u-1") !!}</p>
                    <p>{!! trans("messages.int-m-3-c-1") !!}</p>
                    <p class="title-4">{!! trans("messages.int-m-3-u-2") !!}</p>
                    <p>{!! trans("messages.int-m-3-c-2") !!}</p>
                </div>
                <div class="framed full-framed" alt="gb">
                    <p class="big-number">{!! trans("messages.int-m-4-t") !!}</p>
                    <p>{!! trans("messages.int-m-4-c") !!}</p>
                </div>
                <div class="framed full-framed" alt="es">
                    <p class="big-number">{!! trans("messages.int-m-5-t") !!}</p>
                    <p>{!! trans("messages.int-m-5-c") !!}</p>
                </div>
                <div class="framed full-framed" alt="jp">
                    <p class="big-number">{!! trans("messages.int-m-6-t") !!}</p>
                    <p class="title-4">{!! trans("messages.int-m-6-u") !!}</p>
                    <p>{!! trans("messages.int-m-6-c") !!}</p>
                </div>
                <div class="framed full-framed" alt="se">
                    <p class="big-number">{!! trans("messages.int-m-7-t") !!}</p>
                    <p class="title-4">{!! trans("messages.int-m-7-u") !!}</p>
                    <p>{!! trans("messages.int-m-7-c") !!}</p>
                </div>
                <div class="framed full-framed" alt="tw">
                    <p class="big-number">{!! trans("messages.int-m-8-t") !!}</p>
                    <p>{!! trans("messages.int-m-8-c") !!}</p>
                </div>
                <p class="center">{!! trans("messages.int-c-1") !!}</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-8 center-block">
            <h2 class="title-2">{!! trans("messages.int-ctn-2-t") !!}</h2>
            <p class="lead">{!! trans("messages.int-ctn-2-st") !!}</p>
        </div>
        <div class="col-5 center-block">
            <ul class="lnr-ul">
                <li><span class="lnr lnr-checkmark-circle list-puce"></span>{!! trans("messages.int-ctn-2-c-1") !!}</li>
                <li><span class="lnr lnr-checkmark-circle list-puce"></span>{!! trans("messages.int-ctn-2-c-2") !!}</li>
                <li><span class="lnr lnr-checkmark-circle list-puce"></span>{!! trans("messages.int-ctn-2-c-3") !!}</li>
                <li><span class="lnr lnr-checkmark-circle list-puce"></span>{!! trans("messages.int-ctn-2-c-4") !!}</li>
                <li><span class="lnr lnr-checkmark-circle list-puce"></span>{!! trans("messages.int-ctn-2-c-5") !!}</li>
                <li><span class="lnr lnr-checkmark-circle list-puce"></span>{!! trans("messages.int-ctn-2-c-6") !!}</li>
            </ul>
        </div>
    </div>

    <div class="light-row">
        <div class="container">
            <div class="col-10 center-block">
                <h2 class="title-2 center">{!! trans("messages.int-ctn-3-t") !!}</h2>
                @include('includes.testimonial', array('testimonials' => $student_testimonials, 'folder' => 'studentExchangeTestimonial', 'gallery' => $gallery))
                <h2 class="title-2">Paroles d'étudiants partis en échange</h2>
            </div>
        </div>
    </div>

@endsection
