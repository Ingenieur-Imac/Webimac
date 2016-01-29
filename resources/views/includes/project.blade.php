@foreach ($projects as $project)
    <div class="project">
        <a href="realisations/{{$project->url_page}}">
            <div class="ctn-img-project">
                <img src="{{URL::asset('images/projects/'.$project->url_image)}}" alt="{{$project->name}}" />
                <div class="hover-project-img"><span class="inside-project-img"><span class="lnr lnr-plus-circle"></span></span></div>
            </div>
        </a>
        <h3 class="title-4">{{$project->name}}</h3>
        <p>{{$project->excerpt}}</p>
        <!--<p><span class="tag">#projet tuteuré</span> <span class="tag">#ananas</span></p>-->
    </div>
@endforeach
