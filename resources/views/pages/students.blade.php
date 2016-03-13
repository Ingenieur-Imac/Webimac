@extends('layouts.default')

@section('title')
    Les IMAC | IMAC ingénieur
@endsection

@section('script')
    <script src="vendor/jquery/dist/jquery.js"></script>
    <script src="{{URL::asset('js/slider_promo.js')}}"></script>
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->
    <div class="container center-content-padding">
        <div class="side-padding">
            <h1 class="title-1">Qu'est-ce qu'un ou une IMAC ?</h1>
            <p class="lead">Une abondance de personnalités, de l’entraide, du fun : l’IMAC, c’est un peu comme une deuxième famille ! Avec des promotions de maximum cinquante étudiants où la parité filles/garçons règne, les liens se créent en effet très naturellement.</p>
            <p>Tout au long de l’année, <a href="http://bde.ingenieur-imac.fr/" target="_blank">le Bureau des IMAC (BDI)</a> s’applique à cultiver cet esprit chaleureux en organisant de nombreux événements, notamment les incontournables JeudIMAC, soirées conviviales autour d’un verre à Paris. L’occasion de faire des rencontres, d’élargir son carnet d’adresses puisque des anciens IMAC sont aussi de la partie, et surtout de passer un bon moment !</p>
            <p>À l’heure des partiels, tout le monde s’accroche et s’entraide, l’hétérogénéité des parcours se montrant profitable à tous. Bienvenue chez les IMAC !</p>

            <div class="select-year">
                {{Form::select('year', $select_year)}}
            </div>
        </div>
        <!-- SLIDER DE PROMO -->
            <div class="master-promo">
                {{-- <span class="promo-arrow promo-arrow-left lnr lnr-chevron-left"></span> --}}
                <div style="overflow: hidden">
                    <div class="content-promo" style="width: <?php echo count($promos)*100 ?>%">
                        @foreach ($promos as $promo)
                            <div class="inner-promo" style="width: <?php echo 100/count($promos) ?>%">
                                <div class="ctn-img-promo">
                                    <img src="{{URL::asset('images/promo/'.$promo->url_image)}}" alt="{{$promo->year}}" />
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            {{-- <span class="promo-arrow promo-arrow-right lnr lnr-chevron-right"></span> --}}
            </div>

        <!-- END SLIDER -->
    </div>
@endsection
