<div class="container">
    <a href="{{ url('/') }}">
        <img src="{{URL::asset('images/logoIMAC.png')}}" alt="Logo IMAC" />
        <div class="header-titles">
            <p class="title-2">{{trans("messages.hdr-title")}}</p>
            <p><em>{{trans("messages.hdr-motto")}}</em></p>
        </div>
    </a>
    <div class="lang">
        <p><a href="{{ url('/setLang/en') }}" {{ Lang::locale() == 'en' ? "class=color" : '' }}>EN</a> | <a href="{{ url('/setLang/fr') }}" {{ Lang::locale() == 'fr' ? "class=color" : '' }}>FR</a></p>
    </div>
</div>
