@extends('layouts.default')

@section('title')
    Partir à l’étranger | IMAC ingénieur
@endsection

@section('script')
    <script src="../vendor/jquery/dist/jquery.js"></script>
    <script src="{{URL::asset('../js/jquery.vmap.min.js')}}"></script>
    <script src="{{URL::asset('../js/jquery.vmap.world.js')}}"></script>
    <script src="{{URL::asset('../js/jquery.vmap.sampledata.js')}}"></script>
    <script>
      jQuery(document).ready(function () {
        var enabledRegions = ['de', 'ca', 'kr', 'gb', 'es', 'jp', 'se', 'tw'];
        jQuery('#vmap').vectorMap({
          map: 'world',
          backgroundColor: null,
          borderColor: null,
          colors: {
            world: '#ffffff',
            de: '#f73c3c',
            ca: '#f73c3c',
            kr: '#f73c3c',
            gb: '#f73c3c',
            es: '#f73c3c',
            jp: '#f73c3c',
            se: '#f73c3c',
            tw: '#f73c3c',
            imac: '#f73c3c'
          },
          hoverColors: {
            world: '#ffffff',
            de: '#ed2626',
            ca: '#ed2626',
            kr: '#ed2626',
            gb: '#ed2626',
            es: '#ed2626',
            jp: '#ed2626',
            se: '#ed2626',
            tw: '#ed2626',
            imac: '#f73c3c'
          },
          hoverOpacity: 0,
          selectedColor: '#ed2626',
          enableZoom: true,
          showLabels: true,
          normalizeFunction: 'polynomial',
          showTooltip: true,
          onRegionClick: function(element, code, region) {
            if(enabledRegions.indexOf(code) === -1){
              event.preventDefault();
            }
            for(var i in $('.full-framed')){
                if($('.full-framed:eq('+i+')').attr('alt') == code){
                    $('.full-framed.selected').removeClass('selected');
                    $('.full-framed:eq('+i+')').addClass('selected');
                    break;
                }
            }
          },
          onLabelShow: function(event, label, code){
            if(enabledRegions.indexOf(code) === -1){
              event.preventDefault();
            }
          }
        });
      });
    </script>
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->
    <div class="container">
        <div class="col-8 center-block">
            <h1 class="title-1">Partir à l'étranger</h1>
            <p class="lead center">L'expérience d'un séjour à l'étranger est forcément enrichissante :</p>
            <p>L'immersion dans une culture différente ouvre de nouveaux horizons, tant sur le plan personnel que professionnel. <cite>"Sur terre, ce ne sont pas les occasions de s'émerveiller qui manquent, mais les émerveillés."</cite> - Éric-Emmanuel Schmitt</p>
        </div>
        <div class="col-11 center-block frames">
            <div class="framed">
                <p class="big-number">36</p>
                <p class="title-4">pays</p>
                <p>à découvrir un peu partout dans le monde</p>
            </div>
            <div class="framed">
                <p class="big-number">+110</p>
                <p class="title-4">universités</p>
                <p>partenaires avec l'UPEM peuvent accueillir les étudiants</p>
            </div>
            <div class="framed">
                <p class="big-number">100%</p>
                <p class="title-4">des étudiants</p>
                <p>reviennent satisfaits et recommandent de partir</p>
            </div>
        </div>
    </div>

    <div class="light-row">
        <div class="container">
            <div class="col-10 center-block">
                <h2 class="title-2">Les destinations préférées des IMAC</h2>
                <p class="lead center">Cliquez sur les destinations !</p>
                <div id="vmap"></div>
            </div>
            <div class="col-8 center-block">
                <div class="framed full-framed" alt="de">
                    <p class="big-number">Allemagne</p>
                    <p class="title-4">Stuttgart Media University - Stuttgart</p>
                    <p class="title-4">Bauhaus-Universität Weimar - Weimar</p>
                    <p>Ces universités répondront aux attentes des passionnés de l’audiovisuel ou du design, en plus de leur ouvrir les portes des mœurs germaniques.</p>
                </div>
                <div class="framed full-framed" alt="ca">
                    <p class="big-number">Canada</p>
                    <p>Grâce au programme BCI, de nombreuses universités sont accessibles pour 1 ou 2 semestre(s). Une infinité de formations peuvent être choisies en corrélation avec les attentes des étudiants de l’IMAC.</p>
                </div>
                <div class="framed full-framed" alt="kr">
                    <p class="big-number">Corée du Sud</p>
                    <p class="title-4">Chonbuk National University - Chonbuk</p>
                    <p>L'Université nationale Chonbuk est une université nationale de Corée du Sud située à Jeonju dans le Jeolla du Nord (c’est à la montagne !)</p>
                    <p class="title-4">Ewha Womans University - Séoul</p>
                    <p>C’est une université très sélective avec un gros département en programmation !</p>
                </div>
                <div class="framed full-framed" alt="gb">
                    <p class="big-number">Écosse</p>
                    <p>Elles sont toutes envisageables pour y partir un an, à condition que le diplôme soit de niveau undergraduate (bachelor). Les futurs webmasters trouveront de quoi ravir leur orientation à l’international.</p>
                </div>
                <div class="framed full-framed" alt="es">
                    <p class="big-number">Espagne</p>
                    <p>Plusieurs partenaires sont établis en Espagne. Il est possible de suivre, entre autres, des cours  de publicité, de relations publiques, de communication, de design ou de photographie.</p>
                </div>
                <div class="framed full-framed" alt="jp">
                    <p class="big-number">Japon</p>
                    <p class="title-4">Future University Hakodate - Hakodate</p>
                    <p>Hakodate est une ville située sur l’île d’Hokkaido, au Nord du Japon (avec de la vraie neige en hiver !). Cette destination apporte non seulement une ouverture sur la culture japonaise mais aussi un cadre d’étude hors du commun autour de la programmation.</p>
                </div>
                <div class="framed full-framed" alt="se">
                    <p class="big-number">Suède</p>
                    <p class="title-4">Malmö University - Malmö</p>
                    <p>Vous pourrez découvrir les joies des pays scandinaves ! Vous rejoindrez l’école d’Art et de Communication pour suivre des cours portés sur les nouvelles technologies.</p>
                </div>
                <div class="framed full-framed" alt="tw">
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
    </div>

    <div class="light-row">
        <div class="container">
            <h2 class="title-2 center">Paroles d'étudiants partis en échange</h2>
        </div>
    </div>

@endsection
