<a href="{{ url('/') }}"><img class="show-menu" src="{{URL::asset('images/logoIMAC.png')}}" alt="Logo IMAC" /></a>
<div class="header-titles inline-block">
    <span class="title-2">{{trans("messages.nav-title")}}</span>
</div>
<input type="checkbox" id="show-menu" role="button">
<label for="show-menu" class="show-menu"><span class="lnr lnr-menu"></span></label>

<ul>
    <li><a href="{{ url('/') }}" {{ Request::is('/') ? "class=active" : '' }}><span class="lnr lnr-home"></span><span class="nav-text">{{trans("messages.nav-c-1")}}</span></a></li>
    <li><a href="{{ url('/formation/presentation') }}" {{ Request::is('formation/*') ? "class=active" : '' }}>{{trans("messages.nav-c-2")}}</a></li>
    <li><a href="{{ url('/realisations') }}" {{ Request::is('realisations/*') || Request::is('realisations') ? "class=active" : '' }}>{{trans("messages.nav-c-3")}}</a></li>
    <li><a href="{{ url('/nos-etudiants') }}" {{ Request::is('nos-etudiants') ? "class=active" : '' }}>{{trans("messages.nav-c-4")}}</a></li>
    <li><a href="{{ url('/vie-etudiante') }}" {{ Request::is('vie-etudiante') ? "class=active" : '' }}>{{trans("messages.nav-c-5")}}</a></li>
    <li><a href="{{ url('/international') }}" {{ Request::is('international') ? "class=active" : '' }}>{{trans("messages.nav-c-6")}}</a></li>
    <li><a href="{{ url('/partenaires') }}" {{ Request::is('partenaires') ? "class=active" : '' }}>{{trans("messages.nav-c-7")}}</a></li>
    <li><a href="{{ url('/contact') }}" {{ Request::is('contact') ? "class=active" : '' }}>{{trans("messages.nav-c-8")}}</a></li>
    <li class="lang"><a href="#">EN</a> | <a href="#" class="color">FR</a></li>
</ul>
