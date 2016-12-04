<div class="subnav">
    <ul>
        <li><a href="{{ url('/formation/presentation') }}" {{ Request::is('formation/presentation') ? "class=active" : '' }}>{{trans("messages.snav-1")}}</a></li>
        <li><a href="{{ url('/formation/admission') }}" {{ Request::is('formation/admission') ? "class=active" : '' }}>{{trans("messages.snav-2")}}</a></li>
        <li><a href="{{ url('/formation/debouches') }}" {{ Request::is('formation/debouches') ? "class=active" : '' }}>{{trans("messages.snav-3")}}</a></li>
        <li><a href="{{ url('/formation/equipe') }}" {{ Request::is('formation/equipe') ? "class=active" : '' }}>{{trans("messages.snav-4")}}</a></li>
    </ul>
</div>
