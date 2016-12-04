@foreach ($projects as $project)
    <div rel="{{$project->date}}" class="project">
        <a href="{{action('PagesController@projects')}}/{{$project->url_page}}">
            <div class="img-project">
                <img src="{{URL::asset('images/projects/'.$project->url_image)}}" alt="{{$project->name}}" />
                <div class="hover-img-project"><span class="lnr lnr-plus-circle"></span></div>
            </div>
        </a>
        <h3 class="title-4">{{$project->name}}</h3>
        <p>{{Lang::locale() == 'en' ? $project->en_excerpt : $project->excerpt}}</p>
        <p class="ctn-tags">
            @foreach ($project->tags as $tag)
                <span rel="{{$tag->id}}" class="tag {{ ($tag->id == 1) ? "important-tag" : '' }}">{{$tag->name}}</span>
            @endforeach
        </p>
    </div>
@endforeach
