<!DOCTYPE html>
<html>
    <head>
        <title>Imac | Accueil</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" media="screen" title="bootstrap" charset="utf-8">
        <link rel="stylesheet" href="{{URL::asset('css/master.admin.css')}}" media="screen" title ="bootstrap" charset="utf-8">
    </head>
    <body>
        <div class="container">
            <div class="menu">
                <div class="list-group">
                  <a href="{{action('AdminPagesController@admHome')}}" class="list-group-item active">
                    Accueil
                  </a>
                  <a href="{{action('AdminProjectController@listAll')}}" class="list-group-item">Projets</a>
                  <a href="{{action('AdminStudentTestimonialController@index')}}" class="list-group-item">Paroles d'Anciens</a>
                  <a href="{{action('AdminStaffController@index')}}" class="list-group-item">Staff</a>
                  <a href="{{action('AdminOthersController@index')}}" class="list-group-item">Autres</a>
                  <a href="{{action('AdminPagesController@logout')}}" class="list-group-item">Se déconnecter</a>
                  <a href="{{action('PagesController@index')}}" class="list-group-item">Retour au site</a>
                </div>
            </div>
            <section>
                @yield('content')
            </section>
            <footer>
                @yield('footer')
            </footer>
        </div>
    </body>
</html>
