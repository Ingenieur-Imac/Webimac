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
                    <!--<a href="http://bde.ingenieur-imac.fr/" target="_blank"><span class="lnr lnr-screen"></span></a>-->
                    <a href="https://www.facebook.com/BDE.IMAC" target="_blank"><span class="icon-facebook"></span></a>
                    <a href="https://www.instagram.com/bdeimac/" target="_blank"><span class="icon-instagram-filled"></span></a>
                </p>
            </div>
        </div>
    </div>
    <div class="association">
        <div class="container">
            <div class="col-2 col-offset-1 middle-valign-ib center">
                <img src="{{URL::asset('images/associations/bde-esipe.jpg')}}" alt="BDE ESIPE">
            </div>
            <div class="col-7 col-offset-1 middle-valign-ib">
                <h2 class="title-3">{!! trans("messages.sl-ctn-2-a-8-t") !!}</h2>
                <h3>{!! trans("messages.sl-ctn-2-a-8-st") !!}</h3>
                <p>{!! trans("messages.sl-ctn-2-a-8-loc") !!}</p>
                <p>{!! trans("messages.sl-ctn-2-a-8-c") !!}</p>
                <p class="links">
                    <!--<a href="http://bde.ingenieur-imac.fr/" target="_blank"><span class="lnr lnr-screen"></span></a>-->
                    <a href="https://www.facebook.com/bdeesipe" target="_blank"><span class="icon-facebook"></span></a>
                    <a href="mailto:bde.esipe@gmail.com"><span class="lnr lnr-envelope"></span></a>                </p>
            </div>
        </div>
    </div>

    <div class="container">
            <div class="col-2 col-offset-1 middle-valign-ib center">
                <img src="{{URL::asset('images/associations/bde_upem.png')}}" alt="BDE UPEM">
            </div>
            <div class="col-7 col-offset-1 middle-valign-ib">
                <h2 class="title-3">{!! trans("messages.sl-ctn-2-a-9-t") !!}</h2>
                <h3>{!! trans("messages.sl-ctn-2-a-9-st") !!}</h3>
                <p>{!! trans("messages.sl-ctn-2-a-9-loc") !!}</p>
                <p>{!! trans("messages.sl-ctn-2-a-9-c") !!}</p>
                <p class="links">
                    <!--<a href="http://bde.ingenieur-imac.fr/" target="_blank"><span class="lnr lnr-screen"></span></a>-->
                    <a href="https://www.facebook.com/bde.upem77" target="_blank"><span class="icon-facebook"></span></a>
                    <a href="mailto:contact@bde-upem.fr"><span class="lnr lnr-envelope"></span></a>                </p>
            </div>
        </div>
    </div>
    
    <div class="association">
        <div class="container">
            <div class="col-2 col-offset-1 middle-valign-ib center">
                <img src="{{URL::asset('images/associations/803z.png')}}" alt="803Z">
            </div>
            <div class="col-7 col-offset-1 middle-valign-ib">
                <h2 class="title-3">{!! trans("messages.sl-ctn-2-a-2-t") !!}</h2>
                <h3>{!! trans("messages.sl-ctn-2-a-2-st") !!}</h3>
                <p>{!! trans("messages.sl-ctn-2-a-2-loc") !!}</p>
                <p>{!! trans("messages.sl-ctn-2-a-2-c-1") !!}</p>
                <p class="links">
                    <a href="http://www.803z.fr/" target="_blank"><span class="lnr lnr-screen"></span></a>
                    <a href="https://www.facebook.com/803Z.MLV" target="_blank"><span class="icon-facebook"></span></a>
                    <a href="mailto:803z.mlv@gmail.com"><span class="lnr lnr-envelope"></span></a>
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
                <img src="{{URL::asset('images/associations/fdk.png')}}" alt="FDK">
            </div>
            <div class="col-7 col-offset-1 middle-valign-ib">
                <h2 class="title-3">{!! trans("messages.sl-ctn-2-a-5-t") !!}</h2>
                <h3>{!! trans("messages.sl-ctn-2-a-5-st") !!}</h3>
                <p>{!! trans("messages.sl-ctn-2-a-5-loc") !!}</p>
                <p>{!! trans("messages.sl-ctn-2-a-5-c-1") !!}</p>
                <p class="links">
                        <a href="mailto:fdk.esipe@gmail.com"><span class="lnr lnr-envelope"></span></a>
                        <a href="https://www.facebook.com/FDK.ESIPE/?fref=ts" target="_blank"><span class="icon-facebook"></span></a>
                </p>
            </div>
        </div>
    </div>
   
    <div class="association">
        <div class="container">
            <div class="col-2 col-offset-1 middle-valign-ib center">
                <img src="{{URL::asset('images/associations/cineko.png')}}" alt="Cineko">
            </div>
            <div class="col-7 col-offset-1 middle-valign-ib">
                <h2 class="title-3">{!! trans("messages.sl-ctn-2-a-7-t") !!}</h2>
                <p>{!! trans("messages.sl-ctn-2-a-7-loc") !!}</p>
                <p>{!! trans("messages.sl-ctn-2-a-7-c") !!}</p>
                <p class="links">
                    <a href="https://www.facebook.com/CinekoUPEM/" target="_blank"><span class="icon-facebook"></span></a>
                    <a href="https://www.instagram.com/cineko_upem/" target="_blank"><span class="icon-instagram-filled"></span></a>
                    <a href="mailto:association.cineko@gmail.com"><span class="lnr lnr-envelope"></span></a>
                </p>
            </div>
        </div>
    </div>
    <div class="association">
        <div class="container">
            <div class="col-2 col-offset-1 middle-valign-ib center">
                <img src="{{URL::asset('images/associations/u-geek.jpg')}}" alt="u-Geek">
            </div>
            <div class="col-7 col-offset-1 middle-valign-ib">
                <h2 class="title-3">{!! trans("messages.sl-ctn-2-a-6-t") !!}</h2>
                <h3>{!! trans("messages.sl-ctn-2-a-6-st") !!}</h3>
                <p>{!! trans("messages.sl-ctn-2-a-6-loc") !!}</p>
                <p>{!! trans("messages.sl-ctn-2-a-6-c") !!}</p>
                <p class="links">
                    <a href="https://www.facebook.com/UgeekFactory/" target="_blank"><span class="icon-facebook"></span></a>
                    <a href="mailto:ugeekupem@gmail.com"><span class="lnr lnr-envelope"></span></a>
                </p>
            </div>
        </div>
    </div>

    <div class="association">
        <div class="container">
            <div class="col-2 col-offset-1 middle-valign-ib center">
                <img src="{{URL::asset('images/associations/banzai_japan.png')}}" alt="Banzai Japan">
            </div>
            <div class="col-7 col-offset-1 middle-valign-ib">
                <h2 class="title-3">{!! trans("messages.sl-ctn-2-a-10-t") !!}</h2>
                <h3>{!! trans("messages.sl-ctn-2-a-10-st") !!}</h3>
                <p>{!! trans("messages.sl-ctn-2-a-10-loc") !!}</p>
                <p>{!! trans("messages.sl-ctn-2-a-10-c") !!}</p>
                <p class="links">
                    <a href="http://banzaijapan.fr/" target="_blank"><span class="lnr lnr-screen"></span></a>
                    <a href="https://www.facebook.com/banzaijapan.esipe/" target="_blank"><span class="icon-facebook"></span></a>
                    <a href="mailto:esipe.banzai.japan@gmail.com"><span class="lnr lnr-envelope"></span></a>
                </p>
            </div>
        </div>
    </div>

    <div class="association">
        <div class="container">
            <div class="col-2 col-offset-1 middle-valign-ib center">
                <img src="{{URL::asset('images/associations/as-de-coeur.jpg')}}" alt="As de coeur">
            </div>
            <div class="col-7 col-offset-1 middle-valign-ib">
                <h2 class="title-3">{!! trans("messages.sl-ctn-2-a-11-t") !!}</h2>
                <h3>{!! trans("messages.sl-ctn-2-a-11-st") !!}</h3>
                <p>{!! trans("messages.sl-ctn-2-a-11-loc") !!}</p>
                <p>{!! trans("messages.sl-ctn-2-a-11-c") !!}</p>
                <p class="links">
                    <a href="https://www.facebook.com/asdecoeur.upemlv" target="_blank"><span class="icon-facebook"></span></a>
                    <a href="mailto:as.de.coeur.association@gmail.com"><span class="lnr lnr-envelope"></span></a>
                </p>
            </div>
        </div>
    </div>

    <div class="association">
        <div class="container">
            <div class="col-2 col-offset-1 middle-valign-ib center">
                <img src="{{URL::asset('images/associations/aved.png')}}" alt="AVED">
            </div>
            <div class="col-7 col-offset-1 middle-valign-ib">
                <h2 class="title-3">{!! trans("messages.sl-ctn-2-a-12-t") !!}</h2>
                <h3>{!! trans("messages.sl-ctn-2-a-12-st") !!}</h3>
                <p>{!! trans("messages.sl-ctn-2-a-12-loc") !!}</p>
                <p>{!! trans("messages.sl-ctn-2-a-12-c") !!}</p>
                <p class="links">
                    <a href="https://www.facebook.com/AVEDescartes/" target="_blank"><span class="icon-facebook"></span></a>
                    <a href="mailto:asso.aved@gmail.com"><span class="lnr lnr-envelope"></span></a>
                </p>
            </div>
        </div>
    </div>

    <div class="association">
        <div class="container">
            <div class="col-2 col-offset-1 middle-valign-ib center">
                <img src="{{URL::asset('images/associations/eraa.png')}}" alt="ERAA">
            </div>
            <div class="col-7 col-offset-1 middle-valign-ib">
                <h2 class="title-3">{!! trans("messages.sl-ctn-2-a-14-t") !!}</h2>
                <h3>{!! trans("messages.sl-ctn-2-a-14-st") !!}</h3>
                <p>{!! trans("messages.sl-ctn-2-a-14-loc") !!}</p>
                <p>{!! trans("messages.sl-ctn-2-a-14-c") !!}</p>
                <p class="links">
                    <a href="https://eraa.assoconnect.com/" target="_blank"><span class="lnr lnr-screen"></span></a>
                    <a href="mailto:Contact@eraa-bot.fr"><span class="lnr lnr-envelope"></span></a>
                </p>
            </div>
        </div>
    </div>

    <div class="association">
        <div class="container">
            <div class="col-2 col-offset-1 middle-valign-ib center">
                <img src="{{URL::asset('images/associations/kartel.png')}}" alt="Kartel">
            </div>
            <div class="col-7 col-offset-1 middle-valign-ib">
                <h2 class="title-3">{!! trans("messages.sl-ctn-2-a-13-t") !!}</h2>
                <h3>{!! trans("messages.sl-ctn-2-a-13-st") !!}</h3>
                <p>{!! trans("messages.sl-ctn-2-a-13-loc") !!}</p>
                <p>{!! trans("messages.sl-ctn-2-a-13-c") !!}</p>
                <p class="links">
                    <a href="https://www.facebook.com/Le-KARTEL-295958010435454/" target="_blank"><span class="icon-facebook"></span></a>
                    <a href="mailto:lekartel.mlv@gmail.com"><span class="lnr lnr-envelope"></span></a>
                </p>
            </div>
        </div>
    </div>

  
@endsection
