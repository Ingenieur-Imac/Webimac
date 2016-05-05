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

    <!-- text -->
    <div class="container">
        <div class="col-8 center-block">
            <h1 class="title-1">Qu'est-ce qu'un ou une IMAC ?</h1>
            <p class="lead">Une abondance de personnalités, de l’entraide, du fun : l’IMAC, c’est un peu comme une deuxième famille ! Avec des promotions de maximum cinquante étudiants où la parité filles/garçons règne, les liens se créent en effet très naturellement.</p>
            <p>Tout au long de l’année, <a href="http://bde.ingenieur-imac.fr/" target="_blank">le Bureau des IMAC (BDI)</a> s’applique à cultiver cet esprit chaleureux en organisant de nombreux événements, notamment les incontournables JeudIMAC, soirées conviviales autour d’un verre à Paris. L’occasion de faire des rencontres, d’élargir son carnet d’adresses puisque des anciens IMAC sont aussi de la partie, et surtout de passer un bon moment !</p>
            <p>À l’heure des partiels, tout le monde s’accroche et s’entraide, l’hétérogénéité des parcours se montrant profitable à tous. Bienvenue chez les IMAC !</p>
        </div>
    </div>

    <div class="primary-row">
        <div class="container-fluid center">
            <h2 class="title-2">Envie de travailler avec des IMAC ?</h2>
            <a class="btn filled-btn white-primary-btn" target="_blank" href="#">Déposer une offre</a>
        </div>
    </div>

    <div class="container">
        <div class="col-12">
            <div class="select-year">
                {{Form::select('year', $select_year)}}
            </div>
            <div class="slider">
                <span class="arrow arrow-left lnr lnr-chevron-left"></span>
                <span class="arrow arrow-right lnr lnr-chevron-right"></span>
                <div class="slider-content" style="width: <?php echo count($promos)*100 ?>%; height: auto;">
                    @foreach ($promos as $promo)
                        <div class="slide" style="width: <?php echo 100/count($promos) ?>%">
                            <div class="col-9 center-block">
                                @if (!empty($promo->url_image))
                                    <img src="{{URL::asset('images/promo/'.$promo->url_image)}}" alt="{{$promo->year}}" />
                                @else
                                    <div class="blank"></div>
                                @endif
                            </div>
                                <!-- STUDENTS -->
                                @if (!empty($students_promo[$promo->year][0]))
                                    <h2 class="title-2 center">La promotion {{ $promo->year }} en détail</h2>
                                    @include('includes.student', array('students' => $students_promo[$promo->year]))
                                @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
