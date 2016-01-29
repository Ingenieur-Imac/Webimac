<a href="{{ url('/') }}"><img class="show-menu" src="{{URL::asset('images/new_logo_IMAC.png')}}" alt="Logo IMAC" /></a>
<input type="checkbox" id="show-menu" role="button">
<label for="show-menu" class="show-menu"><span class="lnr lnr-menu"></span></label>

<ul>
    <li><a href="{{ url('/') }}" {{ Request::is('/') ? "class=active" : '' }}><span class="lnr lnr-home"></span><span class="nav-text">Accueil</span></a></li>
    <li><a href="{{ url('/formation/presentation') }}" {{ Request::is('formation/*') ? "class=active" : '' }}>La formation</a></li>
    <li><a href="{{ url('/realisations') }}" {{ Request::is('realisations/*') ? "class=active" : '' }}  {{ Request::is('realisations') ? "class=active" : '' }}>Réalisations</a></li>
    <li><a href="{{ url('/nos-etudiants') }}" {{ Request::is('nos-etudiants') ? "class=active" : '' }}>Nos étudiants</a></li>
    <!--<li><a href="{{ url('/') }}" {{ Request::is('vie-etudiante') ? "class=active" : '' }}>Vie étudiante</a></li>-->
    <li><a href="{{ url('/international') }}" {{ Request::is('international') ? "class=active" : '' }}>International</a></li>
    <li><a href="{{ url('/partenaires') }}" {{ Request::is('partenaires') ? "class=active" : '' }}>Partenaires</a></li>
    <li><a href="{{ url('/contact') }}" {{ Request::is('contact') ? "class=active" : '' }}>Contact</a></li>
</ul>
