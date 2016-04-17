@foreach ($projects as $project)
    <div class="project">
        <a href="{{action('PagesController@projects')}}/{{$project->url_page}}">
            <div class="img-project">
                <img src="{{URL::asset('images/projects/'.$project->url_image)}}" alt="{{$project->name}}" />
                <div class="hover-img-project"><span class="lnr lnr-plus-circle"></span></div>
            </div>
        </a>
        <h3 class="title-4">{{$project->name}}</h3>
        <p>{{$project->excerpt}}</p>
        <p>
            @foreach ($project->tags as $tag)
                <span class="tag {{ ($tag->name == 'Coup de cœur') ? "important-tag" : '' }}">{{$tag->name}}</span>
            @endforeach
        </p>
    </div>
@endforeach
