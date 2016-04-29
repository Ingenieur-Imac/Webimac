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
            <h2 class="title-2">Vous voulez recruter un IMAC ?</h2>
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
                  <div class="slider-content" style="width: <?php echo count($promos)*100 ?>%">
                        @foreach ($promos as $promo)
                            <div class="slide" rel="{{$promo->year}}" style="width: <?php echo 100/count($promos) ?>%">
                                <div class="col-9 center-block">
                                    <img src="{{URL::asset('images/promo/'.$promo->url_image)}}" alt="{{$promo->year}}" />
                                </div>
                                    <!-- STUDENTS -->
                                    @if (!empty($students_promo[$promo->year][0]))
                                        <h2 class="title-2 center">La promotion {{ $promo->year }} en détail</h2>
                                        <div class="people">
                                            @foreach ($students_promo[$promo->year] as $student)
                                                <div class="student">
                                                    <div class="people-picture" style="background-image: url('{{ $student->photo }}');"></div>
                                                    <div class="people-info">
                                                        <h3>{{ $student->name }}</h3>
                                                        <div>
                                                            @if (!empty($student->url_web))
                                                                <a href="{{ $student->url_web }}" target="_blank"><span class="lnr lnr-screen"></span></a>
                                                            @endif
                                                            @if (!empty($student->url_linkedin))
                                                                <a href="{{ $student->url_linkedin }}" target="_blank"><span class="icon-linkedin-rect"></span></a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>



        <!-- SLIDER DE PROMO -->
            <!-- <div class="master-promo">
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

        <div class="col-12">
            @foreach ($students_promo as $students)
                <h2 class="title-2 center">La promotion {{ $promo->year }} en détail</h2>
                <div class="students">
                    @foreach ($students as $student)
                        <div class="student">
                            <div class="student-picture" style="background-image: url('{{ $student->photo }}');"></div>
                            <div class="student-info">
                                <h3>{{ $student->name }}</h3>
                                <div>
                                    @if (!empty($student->url_web))
                                        <a href="{{ $student->url_web }}" target="_blank"><span class="lnr lnr-screen"></span></a>
                                    @endif
                                    @if (!empty($student->url_linkedin))
                                        <a href="{{ $student->url_linkedin }}" target="_blank"><span class="icon-linkedin-rect"></span></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div> -->

@endsection
