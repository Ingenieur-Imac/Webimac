<div class="people">
    @foreach ($students as $student)
        <div class="student">
            <div class="people-picture" style="background-image: url('{{URL::asset('images/student/'.$student->url_image)}}');"></div>
            <div class="student-info">
                <h3>{{ $student->surname }} {{ $student->name }}</h3>
                <div>
                    @if (!empty($student->url_web))
                        <a href="{{ $student->url_web }}" target="_blank"><span class="lnr lnr-screen"></span></a>
                    @endif
                    @if (!empty($student->url_linkedin))
                        <a href="{{ $student->url_linkedin }}" target="_blank"><span class="icon-linkedin-rect"></span></a>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>
