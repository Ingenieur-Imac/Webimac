

@foreach ($projects as $project)
    <div class="col-5 col-margin-05 flex-parent-col">
        <a href="{{action('PagesController@projects')}}/{{$project->url_page}}">
            <div class="img-project">
                <img src="{{URL::asset('images/projects/'.$project->url_image)}}" alt="{{$project->name}}" />
                <div class="hover-img-project"><span class="lnr lnr-plus-circle"></span></div>
            </div>
        </a>
        <h3 class="title-4">{{$project->name}}</h3>
        <p class="flex-description">{{Lang::locale() == 'en' ? $project->en_excerpt : $project->excerpt}}</p>
        <p class="ctn-tags">
            @foreach ($project->tags as $tag)
                <span rel="{{$tag->id}}" class="tag {{ ($tag->id == 1) ? "important-tag" : '' }}">{{$tag->name}}</span>
            @endforeach
        </p>
        <p class="center"><a class="btn filled-btn primary-btn" href="{{ action('PagesController@projects') }}/{{ $project->url_page }}">{{trans("messages.pjth-1")}}</a></p>
    </div>
@endforeach
