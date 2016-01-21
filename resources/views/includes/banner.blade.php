<?php $path = "images/banners/".$img ?>

<div class="img-banner" style="background: linear-gradient(rgba(255,255,255,0), rgba(0, 0, 0, 0.9)), url({{ URL::asset($path)}}) center">
    <div class="slanted"></div>
    <div class="container">
        <div class="col-x">
            <h1>{!! $title !!}</h1>
            @if(isset($text))
              {!! $text !!}
            @endif
        </div>
    </div>
</div>
