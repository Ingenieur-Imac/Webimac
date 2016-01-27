@foreach ($projects as $project)
    <div class="col-3 project">
        <a href="realisations/{{$project->url_page}}">
            <img src="{{URL::asset('images/projects/'.$project->url_image)}}" alt="{{$project->name}}" />
        </a>
        <h3 class="title-4">{{$project->name}}</h3>
        <p>{{$project->excerpt}}</p>
        <!--<p><span class="tag">#projet tuteuré</span> <span class="tag">#ananas</span></p>-->
    </div>
@endforeach
