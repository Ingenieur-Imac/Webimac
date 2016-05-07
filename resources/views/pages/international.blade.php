@extends('layouts.default')

@section('title')
    {!! trans("messages.title-int") !!}
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
            <h1 class="title-1">{!! trans("messages.int-title") !!}</h1>
            <p class="lead center">{!! trans("messages.int-container-1-title") !!}</p>
            <p>{!! trans("messages.int-container-1-content") !!}</p>
        </div>
        <div class="frames">
            <div class="framed">
                <p class="big-number">{!! trans("messages.int-framed-1-a") !!}</p>
                <p class="title-4">{!! trans("messages.int-framed-1-b") !!}</p>
                <p>{!! trans("messages.int-framed-1-c") !!}</p>
            </div>
            <div class="framed">
                <p class="big-number">{!! trans("messages.int-framed-2-a") !!}</p>
                <p class="title-4">{!! trans("messages.int-framed-2-b") !!}</p>
                <p>{!! trans("messages.int-framed-2-c") !!}</p>
            </div>
            <div class="framed">
                <p class="big-number">{!! trans("messages.int-framed-3-a") !!}</p>
                <p class="title-4">{!! trans("messages.int-framed-3-b") !!}</p>
                <p>{!! trans("messages.int-framed-3-c") !!}</p>
            </div>
        </div>
    </div>

    <div class="light-row">
        <div class="container">
            <div class="col-10 center-block">
                <h2 class="title-2">{!! trans("messages.int-subtitle") !!}</h2>
                <p class="lead center">{!! trans("messages.int-cliquez") !!}</p>
                <img src="{{URL::asset('images/international/map.png')}}" alt="Carte du monde" />
            </div>
            <div class="col-8 center-block">
                <div class="framed full-framed" alt="allemagne">
                    <p class="big-number">{!! trans("messages.int-m-1-t") !!}</p>
                    <p class="title-4">{!! trans("messages.int-m-1-u-1") !!}</p>
                    <p class="title-4">{!! trans("messages.int-m-1-u-2") !!}</p>
                    <p>{!! trans("messages.int-m-1-c") !!}</p>
                </div>
                <div class="framed full-framed" alt="canada">
                    <p class="big-number">{!! trans("messages.int-m-2-t") !!}</p>
                    <p>{!! trans("messages.int-m-2-c") !!}</p>
                </div>
                <div class="framed full-framed" alt="coreedusud">
                    <p class="big-number">{!! trans("messages.int-m-3-t") !!}</p>
                    <p class="title-4">{!! trans("messages.int-m-3-u-1") !!}</p>
                    <p>{!! trans("messages.int-m-3-c-1") !!}</p>
                    <p class="title-4">{!! trans("messages.int-m-3-u-2") !!}</p>
                    <p>{!! trans("messages.int-m-3-c-2") !!}</p>
                </div>
                <div class="framed full-framed" alt="ecosse">
                    <p class="big-number">{!! trans("messages.int-m-4-t") !!}</p>
                    <p>{!! trans("messages.int-m-4-c") !!}</p>
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
    </div>
@endsection
