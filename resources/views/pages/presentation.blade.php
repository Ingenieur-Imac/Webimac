<?php
  $title = trans("messages.prs-title");
  $banner_title = trans("messages.prs-title-banner");
  $img = 'Mégane_Marin-7027.jpg';
?>

@extends('layouts.default')

@section('title')
    {!! trans("messages.title-prs") !!}
@endsection

@section('script')
    <script src="../vendor/jquery/dist/jquery.js"></script>
    <script src="{{URL::asset('../js/home.js')}}"></script>
@endsection

@section('content')
    @include('includes.banner', array('img' => $img, 'title' => $banner_title))
    @include('includes.subnav', array('img' => $img, 'title' => $title))
    <!-- @include('includes.ariane', array('title' => $title)) -->
    <div class="container">
        <div class="col-8 center-block">
            <h1 class="title-1">{!! trans("messages.prs-ctn-1-t") !!}</h1>
        </div>
        <div class="col-5 col-offset-1-2 middle-valign-ib">
            <img src="{{URL::asset('images/banners/Groupe_IMAC.jpg')}}" alt="Des ingénieurs IMAC" />
        </div>
        <div class="col-5 col-offset-1 middle-valign-ib row-offset">
            <p class="lead">{!! trans("messages.prs-ctn-1-st") !!}</p>
            <p>{!! trans("messages.prs-ctn-1-c") !!}</p>
        </div>
    </div>

    <div class="light-row">
        <div class="container">
            <div class="col-11 center center-block">
                <h2 class="title-2"></h2>
                <div class="ligne"><div class="circle"></div></div>
                <div class="strong-framed">
                    <div class="year">{!! trans("messages.prs-ctn-2-c-1-t") !!}</div>
                    <p class="title-2 color">{!! trans("messages.prs-ctn-2-c-1-st") !!}</p>
                    <div class="framed-content">
                        <p class="lead">{!! trans("messages.prs-ctn-2-c-1-sst") !!}</p>
                        <p>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-1-c-1") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-1-c-2") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-1-c-3") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-1-c-4") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-1-c-5") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-1-c-6") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-1-c-7") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-1-c-8") !!}</span>
                            <span class="tag">...</span>
                        </p>
                    </div>
                </div>

                <div class="ligne"><div class="circle"></div></div>
                <div class="strong-framed">
                    <div class="year">{!! trans("messages.prs-ctn-2-c-2-t") !!}</div>
                    <p class="title-2 color">{!! trans("messages.prs-ctn-2-c-2-st") !!}</p>
                    <div class="framed-content">
                        <p class="lead">{!! trans("messages.prs-ctn-2-c-2-sst") !!}</p>
                        <p>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-2-c-1") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-2-c-2") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-2-c-3") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-2-c-4") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-2-c-5") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-2-c-6") !!}</span>
                            <span class="tag">...</span>
                        </p>
                        <p>{!! trans("messages.prs-ctn-2-c-2-c-7") !!}</p>
                        <p>{!! trans("messages.prs-ctn-2-c-2-c-8") !!}</p>
                    </div>
                </div>

                <div class="ligne"><div class="circle"></div></div>
                <div class="strong-framed">
                    <div class="year">{!! trans("messages.prs-ctn-2-c-3-t") !!}</div>
                    <p class="title-2 color">{!! trans("messages.prs-ctn-2-c-3-st") !!}</p>
                    <div class="framed-content">
                        <p class="lead">{!! trans("messages.prs-ctn-2-c-3-sst-1") !!}</p>
                        <p>{!! trans("messages.prs-ctn-2-c-3-sst-2") !!}</p>
                        <p>{!! trans("messages.prs-ctn-2-c-3-sst-3") !!}</p>
                    </div>

                    <div class="strong-framed framed-3">
                        <h3 class="title-3 color center">{!! trans("messages.prs-ctn-2-c-3-c-1-t") !!}</h3>
                        <div class="lead lnr lnr-code lnr-bigger center"></div>
                        <p>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-3-c-1-c-1") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-3-c-1-c-2") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-3-c-1-c-3") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-3-c-1-c-4") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-3-c-1-c-5") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-3-c-1-c-6") !!}</span>
                            <span class="tag">...</span>
                        </p>
                    </div>
                    <div class="strong-framed framed-3">
                        <h3 class="title-3 color center">{!! trans("messages.prs-ctn-2-c-3-c-2-t") !!}</h3>
                        <div class="lead lnr lnr-layers lnr-bigger center"></div>
                        <p>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-3-c-2-c-1") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-3-c-2-c-2") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-3-c-2-c-3") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-3-c-2-c-4") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-3-c-2-c-5") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-3-c-2-c-6") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-3-c-2-c-7") !!}</span>
                            <span class="tag">...</span>
                        </p>
                    </div>
                    <div class="strong-framed framed-3">
                        <h3 class="title-3 color center">{!! trans("messages.prs-ctn-2-c-3-c-3-t") !!}</h3>
                        <div class="lead lnr lnr-camera-video lnr-bigger center"></div>
                        <p>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-3-c-3-c-1") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-3-c-3-c-2") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-3-c-3-c-3") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-3-c-3-c-4") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-3-c-3-c-5") !!}</span>
                            <span class="tag">{!! trans("messages.prs-ctn-2-c-3-c-3-c-6") !!}</span>
                            <span class="tag">...</span>
                        </p>
                    </div>
                </div>
          </div>
        </div>
    </div>

    <div class="container">
        <div class="col-8 center-block">
            <h2 class="title-2 center">{!! trans("messages.prs-ctn-3-t") !!}</h2>
            <p class="lead side-padding">{!! trans("messages.prs-ctn-3-st") !!}</p>
        </div>
        <div class="col-11 center-block frames">
            <div class="framed">
                <p class="big-number">{!! trans("messages.prs-ctn-3-b-1-t") !!}</p>
                <p class="title-4">{!! trans("messages.prs-ctn-3-b-1-st") !!}</p>
                <p>{!! trans("messages.prs-ctn-3-b-1-c") !!}</p>
            </div>
            <div class="framed">
                <p class="big-number">{!! trans("messages.prs-ctn-3-b-2-t") !!}</p>
                <p class="title-4">{!! trans("messages.prs-ctn-3-b-2-st") !!}</p>
                <p>{!! trans("messages.prs-ctn-3-b-2-c") !!}</p>
            </div>
            <div class="framed">
                <p class="big-number">{!! trans("messages.prs-ctn-3-b-3-t") !!}</p>
                <p class="title-4">{!! trans("messages.prs-ctn-3-b-3-st") !!}</p>
                <p>{!! trans("messages.prs-ctn-3-b-3-c") !!}</p>
            </div>
        </div>
        <div class="col-5 col-offset-1">
            <h3 class="title-3">{!! trans("messages.prs-ctn-3-c-1-t") !!}</h3>
            <p>{!! trans("messages.prs-ctn-3-c-1-c") !!}</p>
        </div>
        <div class="col-5 row-offset">
            <h3 class="title-3">{!! trans("messages.prs-ctn-3-c-2-t") !!}</h3>
            <p>{!! trans("messages.prs-ctn-3-c-2-st") !!}</p>
            <ul>
                <li>{!! trans("messages.prs-ctn-3-c-2-c-1") !!}</li>
                <li>{!! trans("messages.prs-ctn-3-c-2-c-2") !!}</li>
                <li>{!! trans("messages.prs-ctn-3-c-2-c-3") !!}</li>
            </ul>
        </div>
        <p class="center"><a class="btn filled-btn primary-btn" href="{{ action('PagesController@projects') }}">{!! trans("messages.prs-ctn-3-c-3-c") !!}</a></p>
    </div>

    <div class="light-row">
        <div class="container">
            <div class="col-8 center-block">
                <h2 class="title-2 center">{!! trans("messages.prs-ctn-4-t") !!}</h2>
                <p class="lead side-padding">{!! trans("messages.prs-ctn-4-st") !!}</p>
            </div>
            <div class="col-11 center-block frames">
                <div class="framed">
                    <p class="big-number">{!! trans("messages.prs-ctn-4-b-1-t") !!}</p>
                    <p class="title-4">{!! trans("messages.prs-ctn-4-b-1-st") !!}</p>
                    <p>{!! trans("messages.prs-ctn-4-b-1-c") !!}</p>
                </div>
                <div class="framed">
                    <p class="big-number">{!! trans("messages.prs-ctn-4-b-2-t") !!}</p>
                    <p class="title-4">{!! trans("messages.prs-ctn-4-b-2-st") !!}</p>
                    <p>{!! trans("messages.prs-ctn-4-b-2-c") !!}</p>
                </div>
                <div class="framed">
                    <p class="big-number">{!! trans("messages.prs-ctn-4-b-3-t") !!}</p>
                    <p class="title-4">{!! trans("messages.prs-ctn-4-b-3-st") !!}</p>
                    <p>{!! trans("messages.prs-ctn-4-b-3-c") !!}</p>
                </div>
            </div>
        <div class="col-5 col-offset-1">
            <h3 class="title-3">{!! trans("messages.prs-ctn-4-c-1-t") !!}</h3>
            <p>{!! trans("messages.prs-ctn-4-c-1-c-1") !!}</p>
            <ul>
                <li>{!! trans("messages.prs-ctn-4-c-1-c-2") !!}</li>
                <li>{!! trans("messages.prs-ctn-4-c-1-c-3") !!}</li>
            </ul>
            <p>{!! trans("messages.prs-ctn-4-c-1-c-4") !!}</p>
        </div>
        <div class="col-5 row-offset">
            <h3 class="title-3">{!! trans("messages.prs-ctn-4-c-2-t") !!}</h3>
            <p>{!! trans("messages.prs-ctn-4-c-2-c-1") !!}</p>
        </div>
        <p class="center"><a class="btn filled-btn primary-btn" href="{{ action('PagesController@internshipOffer') }}">{!! trans("messages.prs-ctn-4-c-2-l-1") !!}</a></p>
      </div>
    </div>

    <div class="container">
        <div class="col-10 center-block">
            <h2 class="title-2">{!! trans("messages.home-testimonial") !!}</h2>
            @include('includes.testimonial', array('testimonials' => $student_testimonials, 'folder' => 'studentTestimonial'))
        </div>
    </div>
@endsection
