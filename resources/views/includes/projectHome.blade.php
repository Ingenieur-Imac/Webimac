@foreach ($projects as $project)
    <div class="col-5 col-margin-05 flex-parent-col">
        <img src="{{ URL::asset('images/projects/'.$project->url_image) }}" alt="{{ $project->name }}" />
        <h3 class="title-4">{{$project->name}}</h3>
        <!--<p><span class="tag">#projet tuteuré</span> <span class="tag">#ananas</span></p>-->
        <p class="flex-description">{{ $project->excerpt }}</p>
        <p class="center"><a class="btn filled-btn primary-btn" href="{{ action('PagesController@projects') }}/{{ $project->url_page }}">Voir le projet</a></p>
    </div>
@endforeach
