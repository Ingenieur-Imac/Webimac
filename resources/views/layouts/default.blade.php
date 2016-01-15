<!DOCTYPE html>
<html>
    <head>
        <title>Imac | Accueil</title>
        <link rel="stylesheet" href="{{URL::asset('css/reset.css')}}" media="screen" title="no title" charset="utf-8">
        <!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">-->
        <link rel="stylesheet" href="{{URL::asset('css/master.css')}}" media="screen" title="no title" charset="utf-8">
    </head>
    <body>
        <header>
            @include('layouts.header')
        </header>
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
