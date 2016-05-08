<div class="testimonial">
    <span class="slider-arrow slider-arrow-left lnr lnr-chevron-left"></span>
    <div class="testi-show">
        <ul style="width: {{ count($testimonials)*100 }}%">
            @foreach ($testimonials as $testimonial)
                <li style="width: {{ 100/count($testimonials) }}%">
                    <div class="people-picture" style="background-image: url('{{URL::asset('images/'.$folder.'/'.$testimonial->url_image)}}');"></div>
                    <div class="testi-body col-offset-1">
                        <h3 class="title-4">{{$testimonial->name}} @if ($testimonial->year > 0 || !empty($testimonial->year)) - Promo {{$testimonial->year}} @endif</h3>
                        @if(!empty($testimonial->job))
                            <p class="testi-role">{{$testimonial->job}}</p>
                        @endif
                        <blockquote>
                            <p>{{$testimonial->overview}}</p>
                        </blockquote>
                    </div>
                    @if(isset($gallery))
                        <div class="gallery">
                            @foreach ($gallery[$testimonial->id] as $picture)
                                <img src="{{URL::asset('images/gallery/'.$picture->url)}}" alt="Photo - {{$testimonial->name}}">
                            @endforeach
                        </div>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
    <span class="slider-arrow slider-arrow-right lnr lnr-chevron-right"></span>
</div>
