<!DOCTYPE html>
<html>
<head>
    <title>Imac | Accueil</title>
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" media="screen" title="bootstrap" charset="utf-8">
    <link rel="stylesheet" href="{{URL::asset('css/master.admin.css')}}" media="screen" title ="bootstrap" charset="utf-8">
</head>
<body>
    <div class="container">
        <div class="menu">
            <div class="list-group">
                <a href="{{action('AdminPagesController@admHome')}}" class="list-group-item @if($nav == 'home') active  @endif">
                    Accueil
                </a>
                <a href="{{action('AdminPromoController@index')}}" class="list-group-item @if($nav == 'promo') active  @endif">Promotions</a>
                <a href="{{action('AdminStudentController@index')}}" class="list-group-item @if($nav == 'student') active  @endif">Etudiants</a>
                <a href="{{action('AdminProjectController@listAll')}}" class="list-group-item @if($nav == 'project') active  @endif">Projets</a>
                <a href="{{action('AdminTagController@index')}}" class="list-group-item @if($nav == 'tag') active @endif">Tags</a>
                <a href="{{action('AdminStudentTestimonialController@index')}}" class="list-group-item @if($nav == 'studentTestimonial') active  @endif">Paroles d'Anciens</a>
                <a href="{{action('AdminStudentExchangeTestimonialController@index')}}" class="list-group-item @if($nav == 'studentExchangeTestimonial') active  @endif">Paroles d'Anciens à l'étranger</a>
                <a href="{{action('AdminStaffController@index')}}" class="list-group-item @if($nav == 'staff') active  @endif">Staff</a>
                <a href="{{action('AdminPartnershipController@index')}}" class="list-group-item @if($nav == 'partnership') active  @endif">Partenariats</a>
                <a href="{{action('AdminOthersController@index')}}" class="list-group-item @if($nav == 'others') active  @endif">Autres</a>
                <a href="{{action('AdminPagesController@logout')}}" class="list-group-item">Se déconnecter</a>
                <a href="{{action('PagesController@index')}}" class="list-group-item">Retour au site</a>
            </div>
        </div>
        <section>
            @if($nav != 'home')
                <div class="text-center">
                    <a href="{{action('AdminPagesController@admHome')}}"><img src="{{URL::asset('images/logoIMAC.png')}}" width="40" alt="" /></a>
                </div>
            @endif
            @yield('content')
        </section>
        <footer>
            @yield('footer')
        </footer>
        <script src="../../../vendor/jquery/dist/jquery.js"></script>
        <script src="{{URL::asset('js/admin_file_upload.js')}}" charset="utf-8"></script>
        <script src="{{URL::asset('js/admin_tags.js')}}" charset="utf-8"></script>
        <script src="{{URL::asset('js/admin_project_students.js')}}" charset="utf-8"></script>
        @yield('script')
    </div>
</body>
</html>
