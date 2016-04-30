<div class="testimonial">
    <span class="slider-arrow slider-arrow-left lnr lnr-chevron-left"></span>
    <div class="testi-show">
        <ul style="width: {{ count($student_testimonials)*100 }}%">
            @foreach ($student_testimonials as $student_testimonial)
                <li style="width: {{ 100/count($student_testimonials) }}%">
                    <div class="testi-picture">
                        <img src="{{URL::asset('images/studentTestimonial/'.$student_testimonial->url_image)}}" alt="{{$student_testimonial->name}}" />
                    </div>
                    <div class="testi-body">
                        <h3 class="title-4">{{$student_testimonial->name}} @if ($student_testimonial->year > 0) (IMAC {{$student_testimonial->year}}) @endif</h3>
                        <p class="testi-role">{{$student_testimonial->job}}</p>
                        <blockquote>
                          <p>{{$student_testimonial->overview}}</p>
                        </blockquote>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <span class="slider-arrow slider-arrow-right lnr lnr-chevron-right"></span>
</div>
