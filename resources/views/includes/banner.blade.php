<?php $path = "images/banners/".$img ?>


<div class="img-banner" style="background: linear-gradient(rgba(255,255,255,0), rgba(0, 0, 0, 0.7)), url({{ URL::asset($path)}}) center">
    <div class="color-banner">
        <div class="slanted"></div>
        <div class="container">
            <div class="col-x">
                @if(isset($title))
                  <h1>{!! $title !!}</h1>
                @endif
                @if(isset($text))
                  {!! $text !!}
                @endif
            </div>
        </div>
    </div>
</div>
