<div class="people">
    @foreach ($staff as $staff_member)
        <div class="staff-member">
            @if (!empty($staff_member->url_image))
            <div class="people-picture" style="background-image: url('{{  URL::asset('images/staff/'.$staff_member->url_image) }}');"></div>
            @else 
            <div class="people-picture" style="background-image: url('{{  URL::asset('images/staff/avatar.png') }}');"></div>            
            @endif
                <h3>{{ $staff_member->surname }} {{ $staff_member->name }}</h3>
                <p class="role">{{ $staff_member->role }}</p>
                <p class="flex-description">{{ $staff_member->description }}</p>
                <p>
                    @if (!empty($staff_member->web_link))
                        <a href="{{ $staff_member->web_link }}" target="_blank"><span class="lnr lnr-screen"></span></a>
                    @endif
                    @if (!empty($staff_member->mail))
                        <a href="{{ $staff_member->mail }}" target="_blank"><span class="icon-linkedin-rect"></span></a>
                    @endif
                </p>
        </div>
    @endforeach
</div>
