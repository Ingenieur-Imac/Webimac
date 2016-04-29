<div class="subnav">
    <ul>
        <li><a href="{{ url('/formation/presentation') }}" {{ Request::is('formation/presentation') ? "class=active" : '' }}>Présentation</a></li>
        <li><a href="{{ url('/formation/admission') }}" {{ Request::is('formation/admission') ? "class=active" : '' }}>Admission</a></li>
        <li><a href="{{ url('/formation/debouches') }}" {{ Request::is('formation/debouches') ? "class=active" : '' }}>Débouchés</a></li>
        <li><a href="{{ url('/formation/equipe') }}" {{ Request::is('formation/equipe') ? "class=active" : '' }}>Équipe</a></li>
    </ul>
</div>
