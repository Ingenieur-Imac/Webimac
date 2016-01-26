<div class="testimonial">
    <span class="testi-arrow testi-arrow-left lnr lnr-chevron-left"></span>
    <div class="master-testimonial">
        @foreach ($student_testimonials as $student_testimonial)
            <div class="ctn-testimonial">
                <div class="inner-testimonial">
                    <img class="testi-picture" src="{{URL::asset('images/studentTestimonial/'.$student_testimonial->url_image)}}" alt="{{$student_testimonial->name}}" />
                    <div class="testi-body">
                        <h3 class="title-4">{{$student_testimonial->name}}</h3>
                        <p class="testi-role">{{$student_testimonial->job}}</p>
                        <blockquote>
                          <p>{{$student_testimonial->overview}}</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <span class="testi-arrow testi-arrow-right lnr lnr-chevron-right"></span>
</div>
