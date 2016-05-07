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
                <h2 class="title-3">BDI</h2>
                <h3>Bureau Des Imacs</h3>
                <p>1B100 - Bâtiment Copernic</p>
                <p>Tout au long de l’année, le Bureau des Imac (BDI) s’applique à cultiver cet esprit chaleureux en organisant de nombreux événements, notamment les incontournables JeudImac, soirées conviviales autour d’un verre à Paris. L’occasion de faire des rencontres, d’élargir son carnet d’adresses puisque des anciens IMAC sont aussi de la partie, et surtout de passer un bon moment ! Du week-end d’intégration au Gala en passant par le parrainage et l'élection de nos miss et mister préféré… de vrais moment conviviaux sont créés.</p>
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
                <h2 class="title-3">803Z - Radio PIMP</h2>
                <h3>Association d’Audiovisuel et de Radio</h3>
                <p>Local au RDC du bâtiment Copernic</p>
                <p>Association audiovisuelle universitaire serait la description solennelle de 803Z. Collectif sympa et uni en serait une plus cool. L'association Cinéma de l'UPEM serait la version arrogante. Le mieux, pour décrire 803Z, c'est 803Z.</p>
                <p>Radio PIMP, c’est l’association qui présente chaque semaine des sujets en tout genre !</p>
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
                <h2 class="title-3">SUAPS</h2>
                <h3>Association sportive du campus</h3>
                <p>Maison de l’Étudiant</p>
                <p>Le SUAPS, c’est l’association qui propose des tournois, compétitions et organise de gros événements sur le campus pour faire bouger tout le monde. Beaucoup d’IMAC profitent de leur jeudi après-midi et autres jours suivant les emplois du temps pour se dépenser et passer de bons moments.</p>
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
                <h2 class="title-3">BDK</h2>
                <h3>Bruit du Kouloir</h3>
                <p>1B99 - Bâtiment Copernic</p>
                <p>Le BDK, ou Bruit Du Kouloir, est l’unique association de musiciens sur tout le campus ! Le BDK est là pour toi pour jouer pendant les pauses dèj, après les cours, et ce, dans un local doté de 2 basses, 2 batteries, 4 guitares, 2 claviers, 3 micros et, depuis peu, un large panel de matériel d'effets sonores.</p>
                <p>On est là pour se détendre en musique d’une part, mais faire partie du BDK c’est aussi entrer dans le monde associatif et organiser des événements sur le campus comme des concerts, des jams, de l’animation pour les autres associations....
                <p>L’entrée dans le BDK se fait après une cotisation de 10€ qui serviront à entretenir le matériel. Si tu es motivé(e) pour mettre de la musique dans les oreilles de l’ESIPE, ou si tu es juste drogué(e) à la musique, viens découvrir le Bruit Du Kouloir du 1er étage de Copernic, salle 1B90 (ouvert entre 12h45 et 13h45, tu n’as qu’à te laisser guider par le bruit) !</p>
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
                <h2 class="title-3">FDK</h2>
                <h3>Fond du Kouloir</h3>
                <p>Au fond du couloir du 1e étage - Bâtiment Copernic</p>
                <p>Le FDK, ou Fond Du Kouloir, est la cafétéria étudiante... au fond du couloir. 104m2 de détente, d’espace libre, et de bonheur. Oui, être ingénieur c’est travailler dur. Mais débranche donc tes neurones quelques minutes pour jouer au babyfoot, ou pour profiter d’une boisson chaude accoudé à notre bar ! Les serveurs distribuent des sourires et des cafés ; les serveuses offrent des clins d’oeil et des grenadines.</p>
                <p>Sache qu’être Staff FDK, c’est peser dans le game. Tout le monde te dit bonjour, tu as toujours un canapé réservé, et le café est gratuit. Allez, passe derrière le comptoir !</p>
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
                <h2 class="title-3">Virtual Association</h2>
                <h3>Association de jeux vidéo orienté Réalité Virtuel</h3>
                <p>Maison de l'Étudiant</p>
                <p>Virtual Association est la première association étudiante dédiée au partage de connaissances et à l’organisation d’évènements autour de la réalité virtuelle pour tous.</p>
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
                <h2 class="title-3">Wings of Games</h2>
                <p>1B86 - Bâtiment Copernic</p>
                <p>Dans cette association, vous pourrez retrouver vos amis pour jouer à des jeux de plateaux pendant les pauses.</p>
                <p class="links">
                        <a href="http://wog.leforum.eu/" target="_blank"><span class="lnr lnr-screen"></span></a>
                        <a href="mailto:wingsofgames@outlook.com"><span class="lnr lnr-envelope"></span></a>
                </p>
            </div>
        </div>
    </div>

@endsection
