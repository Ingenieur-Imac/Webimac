<ul>
    <li><a href="{{ url('/') }}" {{ Request::is('/') ? "class=active" : '' }}><span class="lnr lnr-home"></span></a></li>
    <li><a href="{{ url('/formation/presentation') }}" {{ Request::is('formation/*') ? "class=active" : '' }}>La formation</a></li>
    <li><a href="{{ url('/realisations') }}" {{ Request::is('realisations/*') ? "class=active" : '' }}>Réalisations</a></li>
    <li><a href="{{ url('/nos-etudiants') }}" {{ Request::is('nos-etudiants') ? "class=active" : '' }}>Nos étudiants</a></li>
    <li><a href="{{ url('/') }}" {{ Request::is('vie-etudiante') ? "class=active" : '' }}>Vie étudiante</a></li>
    <li><a href="{{ url('/') }}" {{ Request::is('international') ? "class=active" : '' }}>International</a></li>
    <li><a href="{{ url('/') }}" {{ Request::is('entreprises') ? "class=active" : '' }}>Entreprises</a></li>
    <li><a href="{{ url('/contact') }}" {{ Request::is('contact') ? "class=active" : '' }}>Contact</a></li>
</ul>
