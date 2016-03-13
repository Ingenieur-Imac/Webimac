<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{URL::asset('css/master.css')}}" media="screen" title="no title" charset="utf-8">
        <link rel="icon" href="{{URL::asset('images/favicon.png')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @yield('script')
    </head>
    <body>
        <header>
            @include('layouts.header')
        </header>
        <nav>
            @include('layouts.nav')
        </nav>
        <div>
            @yield('content')
        </div>
        <div class="prefooter">
            @include('layouts.prefooter')
        </div>
        <footer>
            @include('layouts.footer')
        </footer>
    </body>
</html>
