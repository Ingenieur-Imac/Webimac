@extends('layouts.default')

@section('title')
    {{trans("messages.title-int")}}
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->
    {{-- <div class="container center-content-padding">
        <h1 class="title-1">{{trans("messages.int-title")}}</h1>
        <h2 class="title-2">{{trans("messages.int-subtitle")}}</h2>
        <img src="{{URL::asset('images/international/map.png')}}" alt="Des ingénieurs IMAC" />
    </div>

    <div class="light-row">
      <div class="container center-content-padding">
          <p class="lead center side-padding">{{trans("messages.int-container-1-title")}}</p>
          <p class="side-padding">{{trans("messages.int-container-1-content")}}</p>

      </div> --}}
    <div class="container">
        <div class="col-8 center-block">
            <h1 class="title-1">Partir à l'étranger</h1>
            <p class="lead center">L'expérience d'un séjour à l'étranger est forcément enrichissante :</p>
            <p>L'immersion dans une culture différente ouvre de nouveaux horizons, tant sur le plan personnel que professionnel. <cite>"Sur terre, ce ne sont pas les occasions de s'émerveiller qui manquent, mais les émerveillés."</cite> - Éric-Emmanuel Schmitt</p>
        </div>
        <div class="frames">
            <div class="framed">
                <p class="big-number">{{trans("messages.int-framed-1-a")}}</p>
                <p class="title-4">{{trans("messages.int-framed-1-b")}}</p>
                <p>{{trans("messages.int-framed-1-c")}}</p>
            </div>
            <div class="framed">
                <p class="big-number">{{trans("messages.int-framed-2-a")}}</p>
                <p class="title-4">{{trans("messages.int-framed-2-b")}}</p>
                <p>{{trans("messages.int-framed-2-c")}}</p>
            </div>
            <div class="framed">
                <p class="big-number">{{trans("messages.int-framed-3-a")}}</p>
                <p class="title-4">{{trans("messages.int-framed-3-b")}}</p>
                <p>{{trans("messages.int-framed-3-c")}}</p>
            </div>
        </div>
    </div>

    <div class="light-row">
        <div class="container">
            <div class="col-10 center-block">
                <h2 class="title-2">Les destinations préférées des IMAC</h2>
                <p class="lead center">Cliquez sur les destinations !</p>
                <img src="{{URL::asset('images/international/map.png')}}" alt="Carte du monde" />
            </div>
            <div class="col-8 center-block">
                <div class="framed full-framed" alt="allemagne">
                    <p class="big-number">Allemagne</p>
                    <p class="title-4">Stuttgart Media University - Stuttgart</p>
                    <p class="title-4">Bauhaus-Universität Weimar - Weimar</p>
                    <p>Ces universités répondront aux attentes des passionnés de l’audiovisuel ou du design, en plus de leur ouvrir les portes des mœurs germaniques.</p>
                </div>
                <div class="framed full-framed" alt="canada">
                    <p class="big-number">Canada</p>
                    <p>Grâce au programme BCI, de nombreuses universités sont accessibles pour 1 ou 2 semestre(s). Une infinité de formations peuvent être choisies en corrélation avec les attentes des étudiants de l’IMAC.</p>
                </div>
                <div class="framed full-framed" alt="coreedusud">
                    <p class="big-number">Corée du Sud</p>
                    <p class="title-4">Chonbuk National University - Chonbuk</p>
                    <p>L'Université nationale Chonbuk est une université nationale de Corée du Sud située à Jeonju dans le Jeolla du Nord (c’est à la montagne !)</p>
                    <p class="title-4">Ewha Womans University - Séoul</p>
                    <p>C’est une université très sélective avec un gros département en programmation !</p>
                </div>
                <div class="framed full-framed" alt="ecosse">
                    <p class="big-number">Écosse</p>
                    <p>Elles sont toutes envisageables à condition que le diplôme soit de niveau undergraduate (bachelor). Les futurs webmasters trouveront de quoi ravir leur orientation à l’international.</p>
                </div>
                <div class="framed full-framed" alt="espagne">
                    <p class="big-number">Espagne</p>
                    <p>Surprise.</p>
                </div>
                <div class="framed full-framed" alt="japon">
                    <p class="big-number">Japon</p>
                    <p class="title-4">Future University Hakodate - Hakodate</p>
                    <p>Hakodate est une ville située sur l’île d’Hokkaido, au Nord du Japon (avec de la vraie neige en hiver !). Cette destination apporte non seulement une ouverture sur la culture japonaise mais aussi un cadre d’étude hors du commun autour de la programmation.</p>
                </div>
                <div class="framed full-framed" alt="suede">
                    <p class="big-number">Suède</p>
                    <p class="title-4">Malmö University - Malmö</p>
                    <p>Vous pourrez découvrir les joies des pays scandinaves ! Les cours sont orientés autour de la gestion de projet et la création de jeux vidéo.</p>
                </div>
                <div class="framed full-framed" alt="suede">
                    <p class="big-number">Taïwan</p>
                    <p>Plusieurs universités sont proposées sur cette magnifique île arborant la côté chinoise, permettant de bénéficier d’un cadre de vue exotique.</p>
                </div>
                <p class="center">Pour plus d'informations, visitez <a href="http://www.u-pem.fr/international/etudes-a-letranger-sortants/" target="_blank">la page dédiée sur le site de l'UPEM</a>.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-8 center-block">
            <h2 class="title-2">Les avantages</h2>
            <p class="lead">Profitez du fait d'être étudiant pour partir plus facilement à l'international avant vos débuts dans la vie active !</p>
        </div>
        <div class="col-5 center-block">
            <ul class="lnr-ul">
                <li><span class="lnr lnr-checkmark-circle list-puce"></span>S'ouvrir à une <strong>autre culture</strong></li>
                <li><span class="lnr lnr-checkmark-circle list-puce"></span>Enrichir son <strong>expérience personnelle</strong></li>
                <li><span class="lnr lnr-checkmark-circle list-puce"></span>Exercer ses <strong>facultés d'adaptation</strong></li>
                <li><span class="lnr lnr-checkmark-circle list-puce"></span>Améliorer son <strong>niveau de langue</strong></li>
                <li><span class="lnr lnr-checkmark-circle list-puce"></span>Travailler avec de <strong>nouvelles méthodologies</strong></li>
                <li><span class="lnr lnr-checkmark-circle list-puce"></span><strong>Se démarquer</strong> auprès des entreprises</li>
            </ul>
        </div>
>>>>>>> dev-front
    </div>
@endsection
