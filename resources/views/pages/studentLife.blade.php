@extends('layouts.default')

@section('title')
    {!! trans("messages.title-sl") !!}
@endsection

@section('content')
    <!-- @include('includes.ariane', array('title' => 'Youpi')) -->

    <div class="container">
        <div class="col-8 center-block">
            <h1 class="title-1">{!! trans("messages.sl-ctn-1-t") !!}</h1>
            <p class="lead">{!! trans("messages.sl-ctn-1-st") !!}</p>
            <p>{!! trans("messages.sl-ctn-1-c") !!}</p>
        </div>
    </div>

    <div class="association">
        <div class="container">
            <div class="col-2 col-offset-1 middle-valign-ib center">
                <img src="{{URL::asset('images/associations/BDI.png')}}" alt="BDI">
            </div>
            <div class="col-7 col-offset-1 middle-valign-ib">
                <h2 class="title-3">{!! trans("messages.sl-ctn-2-a-1-t") !!}</h2>
                <h3>{!! trans("messages.sl-ctn-2-a-1-st") !!}</h3>
                <p>{!! trans("messages.sl-ctn-2-a-1-loc") !!}</p>
                <p>{!! trans("messages.sl-ctn-2-a-1-c") !!}</p>
                <p class="links">
                    <a href="http://bde.ingenieur-imac.fr/" target="_blank"><span class="lnr lnr-screen"></span></a>
                    <a href="https://www.facebook.com/BDE.IMAC?fref=ts" target="_blank"><span class="icon-facebook"></span></a>
                </p>
            </div>
        </div>
    </div>
    <div class="association">
        <div class="container">
            <div class="col-2 col-offset-1 middle-valign-ib center">
                <img src="{{URL::asset('images/associations/803z.jpg')}}" alt="803Z">
            </div>
            <div class="col-7 col-offset-1 middle-valign-ib">
                <h2 class="title-3">{!! trans("messages.sl-ctn-2-a-2-t") !!}</h2>
                <h3>{!! trans("messages.sl-ctn-2-a-2-st") !!}</h3>
                <p>{!! trans("messages.sl-ctn-2-a-2-loc") !!}</p>
                <p>{!! trans("messages.sl-ctn-2-a-2-c-1") !!}</p>
                <p>{!! trans("messages.sl-ctn-2-a-2-c-2") !!}</p>
                <p class="links">
                    <a href="http://www.803z.fr/" target="_blank"><span class="lnr lnr-screen"></span></a>
                    <a href="https://www.facebook.com/803Z.MLV" target="_blank"><span class="icon-facebook"></span></a>
                    <a href="mailto:contact@803z.fr"><span class="lnr lnr-envelope"></span></a>
                </p>
            </div>
        </div>
    </div>
    <div class="association">
        <div class="container">
            <div class="col-2 col-offset-1 middle-valign-ib center"></div>
            <div class="col-7 col-offset-1 middle-valign-ib">
                <h2 class="title-3">{!! trans("messages.sl-ctn-2-a-3-t") !!}</h2>
                <h3>{!! trans("messages.sl-ctn-2-a-3-st") !!}</h3>
                <p>{!! trans("messages.sl-ctn-2-a-3-loc") !!}</p>
                <p>{!! trans("messages.sl-ctn-2-a-3-c") !!}</p>
                <p class="links">
                    <a href="http://www.u-pem.fr/vie-du-campus/vie-sportive/le-service-universitaire-pour-les-activites-physiques-et-sportives-suaps/" target="_blank"><span class="lnr lnr-screen"></span></a>
                    <a href="mailto:suaps@u-pem.fr"><span class="lnr lnr-envelope"></span></a>
                </p>
            </div>
        </div>
    </div>
    <div class="association">
        <div class="container">
            <div class="col-2 col-offset-1 middle-valign-ib center">
                <img src="{{URL::asset('images/associations/BDK.jpg')}}" alt="BDK">
            </div>
            <div class="col-7 col-offset-1 middle-valign-ib">
                <h2 class="title-3">{!! trans("messages.sl-ctn-2-a-4-t") !!}</h2>
                <h3>{!! trans("messages.sl-ctn-2-a-4-st") !!}</h3>
                <p>{!! trans("messages.sl-ctn-2-a-4-loc") !!}</p>
                <p>{!! trans("messages.sl-ctn-2-a-4-c-1") !!}</p>
                <p>{!! trans("messages.sl-ctn-2-a-4-c-2") !!}</p>
                <p>{!! trans("messages.sl-ctn-2-a-4-c-3") !!}</p>
                <p class="links">
                        <a href="https://www.facebook.com/bruitdukouloir/" target="_blank"><span class="icon-facebook"></span></a>
                        <a href="mailto:bruitdukouloir@gmail.com"><span class="lnr lnr-envelope"></span></a>
                        <a href="https://www.instagram.com/bdk_upem/" target="_blank"><span class="icon-instagram-filled"></span></a>
                </p>
            </div>
        </div>
    </div>
    <div class="association">
        <div class="container">
            <div class="col-2 col-offset-1 middle-valign-ib center">
                <img src="{{URL::asset('images/associations/FDK.jpg')}}" alt="FDK">
            </div>
            <div class="col-7 col-offset-1 middle-valign-ib">
                <h2 class="title-3">{!! trans("messages.sl-ctn-2-a-5-t") !!}</h2>
                <h3>{!! trans("messages.sl-ctn-2-a-5-st") !!}</h3>
                <p>{!! trans("messages.sl-ctn-2-a-5-loc") !!}</p>
                <p>{!! trans("messages.sl-ctn-2-a-5-c-1") !!}</p>
                <p>{!! trans("messages.sl-ctn-2-a-5-c-2") !!}</p>
                <p class="links">
                        <a href="https://www.facebook.com/FDK.ESIPE/?fref=ts" target="_blank"><span class="icon-facebook"></span></a>
                </p>
            </div>
        </div>
    </div>
    <div class="association">
        <div class="container">
            <div class="col-2 col-offset-1 middle-valign-ib center">
                <img src="{{URL::asset('images/associations/Virtual-association.jpg')}}" alt="Virtual Association">
            </div>
            <div class="col-7 col-offset-1 middle-valign-ib">
                <h2 class="title-3">{!! trans("messages.sl-ctn-2-a-6-t") !!}</h2>
                <h3>{!! trans("messages.sl-ctn-2-a-6-st") !!}</h3>
                <p>{!! trans("messages.sl-ctn-2-a-6-loc") !!}</p>
                <p>{!! trans("messages.sl-ctn-2-a-6-c") !!}</p>
                <p class="links">
                    <a href="http://virtualassociation.fr/" target="_blank"><span class="lnr lnr-screen"></span></a>
                    <a href="https://www.facebook.com/virtualassociation/" target="_blank"><span class="icon-facebook"></span></a>
                    <a href="mailto:bonjour@virtualassociation.fr"><span class="lnr lnr-envelope"></span></a>
                </p>
            </div>
        </div>
    </div>
    <div class="association">
        <div class="container">
            <div class="col-2 col-offset-1 middle-valign-ib center">
                <img src="{{URL::asset('images/associations/WOG.jpg')}}" alt="Wings of Games">
            </div>
            <div class="col-7 col-offset-1 middle-valign-ib">
                <h2 class="title-3">{!! trans("messages.sl-ctn-2-a-7-t") !!}</h2>
                <p>{!! trans("messages.sl-ctn-2-a-7-loc") !!}</p>
                <p>{!! trans("messages.sl-ctn-2-a-7-c") !!}</p>
                <p class="links">
                    <a href="http://wog.leforum.eu/" target="_blank"><span class="lnr lnr-screen"></span></a>
                    <a href="mailto:wingsofgames@outlook.com"><span class="lnr lnr-envelope"></span></a>
                </p>
            </div>
        </div>
    </div>

@endsection
