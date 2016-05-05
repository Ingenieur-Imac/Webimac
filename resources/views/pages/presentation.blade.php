<?php
  $title = 'Présentation';
  $banner_title = 'La formation IMAC';
  $img = 'Mégane_Marin-7027.jpg';
?>

@extends('layouts.default')

@section('title')
    Devenir un ingénieur créatif | IMAC ingénieur
@endsection

@section('script')
    <script src="../vendor/jquery/dist/jquery.js"></script>
    <script src="{{URL::asset('../js/home.js')}}"></script>
@endsection

@section('content')
    @include('includes.banner', array('img' => $img, 'title' => $banner_title))
    @include('includes.subnav', array('img' => $img, 'title' => $title))
    <!-- @include('includes.ariane', array('title' => $title)) -->
    <div class="container">
        <div class="col-8 center-block">
            <h1 class="title-1">Qu'est-ce que l'IMAC ?</h1>
        </div>
        <div class="col-5 col-offset-1-2 middle-valign-ib">
            <img src="{{URL::asset('images/banners/Groupe_IMAC.jpg')}}" alt="Des ingénieurs IMAC" />
        </div>
        <div class="col-5 col-offset-1 middle-valign-ib row-offset">
            <p class="lead">L’IMAC est une formation d’ingénieur en trois ans certifiée par la <a href="http://www.cti-commission.fr/" target="_blank" >CTI (Commission des Titres d’Ingénieur)</a>. Créée en 1986, c’est la seule formation d’ingénieur publique en France alliant arts et sciences.</p>
            <p>En effet, la pédagogie pluridisciplinaire de la formation associe esprit créatif et savoirs scientifiques. Nous formons des cadres supérieurs évoluant dans les domaines de l’Internet, des jeux vidéo, de l'audiovisuel, de la communication numérique...</p>
        </div>
    </div>

    <div class="light-row">
        <div class="container">
            <div class="col-11 center center-block">
                <h2 class="title-2">Trois ans pour devenir un ingénieur créatif</h2>
                <div class="ligne"><div class="circle"></div></div>
                <div class="strong-framed">
                    <div class="year">Première année</div>
                    <p class="title-2 color">Découvrir</p>
                    <div class="framed-content">
                        <p class="lead">Les étudiants recrutés par l’IMAC ont des cursus très variés. La première année de formation permet de donner une base commune et solide de connaissances à chacun.</p>
                        <p>
                            <span class="tag">bases de la pratique vidéo</span>
                            <span class="tag">histoire de l'art</span>
                            <span class="tag">initiation à la programmation</span>
                            <span class="tag">découverte du web</span>
                            <span class="tag">approche de la synthèse d'images</span>
                            <span class="tag">design</span>
                            <span class="tag">mise à niveau en mathématiques</span>
                            <span class="tag">histoire du cinéma</span>
                            <span class="tag">...</span>
                        </p>
                    </div>
                </div>

                <div class="ligne"><div class="circle"></div></div>
                <div class="strong-framed">
                    <div class="year">Deuxième année</div>
                    <p class="title-2 color">Approfondir</p>
                    <div class="framed-content">
                        <p class="lead">En deuxième année, les étudiants développent leurs compétences avec des cours plus ciblés.</p>
                        <p>
                            <span class="tag">programmation de jeux</span>
                            <span class="tag">mathématiques pour l'informatique</span>
                            <span class="tag">photographie</span>
                            <span class="tag">administration réseaux</span>
                            <span class="tag">web design</span>
                            <span class="tag">audiovisuel</span>
                            <span class="tag">...</span>
                        </p>
                        <p>Les projets tuteurés occupent une part importante de l’année. À cheval sur les deux semestres, ils permettent aux étudiants d’avoir une première approche d’un projet à mener sur le long terme.</p>
                        <p>Encadrés par des tuteurs professionnels, ils répondent à une demande client.</p>
                    </div>
                </div>

                <div class="ligne"><div class="circle"></div></div>
                <div class="strong-framed">
                    <div class="year">Troisième année</div>
                    <p class="title-2 color">Se spécialiser</p>
                    <div class="framed-content">
                        <p class="lead">C’est en troisième année que les étudiants s’orientent vers le domaine qui les passionnent. Trois thèmes principaux sont proposés, les enseignements peuvent être combinés.</p>
                        <p>En parallèle, les étudiants suivent un tronc commun d’enseignements et des cours de découverte. Il est possible de compléter sa  formation en effectuant un double diplôme cinéma ou un double diplôme informatique option image. Certains étudiants effectuent leur dernière année <a href="{{ url('/international') }}">à l’étranger</a>.</p>
                        <p>Pour terminer leur spécialisation, les étudiants partent en stage à partir d’avril.</p>
                    </div>

                    <div class="strong-framed framed-3">
                        <h3 class="title-3 color center">Web</h3>
                        <div class="lead lnr lnr-code lnr-bigger center"></div>
                        <p>
                            <span class="tag">e-marketing</span>
                            <span class="tag">cloud computing</span>
                            <span class="tag">technologies web et mobile</span>
                            <span class="tag">design de service</span>
                            <span class="tag">python</span>
                            <span class="tag">data design</span>
                            <span class="tag">...</span>
                        </p>
                    </div>
                    <div class="strong-framed framed-3">
                        <h3 class="title-3 color center">3D</h3>
                        <div class="lead lnr lnr-layers lnr-bigger center"></div>
                        <p>
                            <span class="tag">GP/GPU</span>
                            <span class="tag">programmation avancée</span>
                            <span class="tag">réalité augmentée</span>
                            <span class="tag">réalité virtuelle</span>
                            <span class="tag">jeu vidéo</span>
                            <span class="tag">moteur physique</span>
                            <span class="tag">OpenGL avancé</span>
                            <span class="tag">...</span>
                        </p>
                    </div>
                    <div class="strong-framed framed-3">
                        <h3 class="title-3 color center">Audiovisuel</h3>
                        <div class="lead lnr lnr-camera-video lnr-bigger center"></div>
                        <p>
                            <span class="tag">dispositif interactif</span>
                            <span class="tag">sound design</span>
                            <span class="tag">direction artistique</span>
                            <span class="tag">scénographie</span>
                            <span class="tag">nouvelles formes du cinéma</span>
                            <span class="tag">post-production avancée</span>
                            <span class="tag">...</span>
                        </p>
                    </div>
                </div>
          </div>
        </div>
    </div>

    <div class="container">
        <div class="col-8 center-block">
            <h2 class="title-2 center">Les projets</h2>
            <p class="lead side-padding">Dans une logique de professionnalisation, les étudiants mettent en application leurs connaissances en réalisant de multiples projets.</p>
        </div>
        <div class="col-11 center-block frames">
            <div class="framed">
                <p class="big-number">5</p>
                <p class="title-4">projets par semestre</p>
                <p>pouvant compter pour la totalité de la note de la matière</p>
            </div>
            <div class="framed">
                <p class="big-number">1</p>
                <p class="title-4">projet tuteuré</p>
                <p>se déroulant tout au long de la deuxième année</p>
            </div>
            <div class="framed">
                <p class="big-number">4</p>
                <p class="title-4">heures de sommeil</p>
                <p>les nuits précédant les rendus de projet</p>
            </div>
        </div>
        <div class="col-5 col-offset-1">
            <h3 class="title-3">Les projets à l'IMAC</h3>
            <p>Les projets permettent aux étudiants de gagner en autonomie, d’acquérir de l’expérience en gestion de projet et de se familiariser avec le travail d’équipe. Ils se déroulent sur plusieurs semaines et sont parfois communs à plusieurs matières (OpenGL et C++, bases de données et HTML…).</p>
        </div>
        <div class="col-5 row-offset">
            <h3 class="title-3">Notre équipement</h3>
            <p>Du matériel est mis à disposition des étudiants :</p>
            <ul>
                <li>les logiciels traditionnels du multimédia</li>
                <li>matériel audiovisuel en libre service (Canon 7D, prise de son, perches, pieds...)</li>
                <li>un fond vert et un drône, Kinect, GoPro2, écran 3D stéréoscopique, Quadrotor, Camsmart, un casque de Réalité Virtuelle Oculus Rift...</li>
            </ul>
        </div>
        <p class="center"><a class="btn filled-btn primary-btn" href="{{ action('PagesController@projects') }}">Découvrir les projets</a></p>
    </div>

    <div class="light-row">
        <div class="container">
            <div class="col-8 center-block">
                <h2 class="title-2 center">Les stages</h2>
                <p class="lead side-padding">Véritable tremplin vers la vie active, les stages permettent aux étudiants de découvrir l’environnement dans lequel ils seront amenés à évoluer.</p>
            </div>
            <div class="col-11 center-block frames">
                <div class="framed">
                    <p class="big-number">3</p>
                    <p class="title-4">stages</p>
                    <p>dont 2 obligatoires (l'un en IMAC2, l'autre en IMAC3)</p>
                </div>
                <div class="framed">
                    <p class="big-number">8</p>
                    <p class="title-4">mois</p>
                    <p>en moyenne passés en entreprise au cours de la formation</p>
                </div>
                <div class="framed">
                    <p class="big-number">60%</p>
                    <p class="title-4">de proposition</p>
                    <p>d’embauche suite au stage de troisième année</p>
                </div>
            </div>
        <div class="col-5 col-offset-1">
            <h3 class="title-3">Les dates</h3>
            <p>Pour valider leur diplôme, ils doivent réaliser deux stages :</p>
            <ul>
                <li>2 à 4 mois à partir de juin en IMAC2</li>
                <li>4 à 6 mois à partir d’avril en IMAC3</li>
            </ul>
            <p>Les élèves de première année ont la possibilité de faire un stage de deux mois durant les vacances d’été.</p>
        </div>
        <div class="col-5 row-offset">
            <h3 class="title-3">Partir à l'étranger</h3>
            <p>Les étudiants sont encouragés à effectuer un de leur stage à l'étranger. Certains sont par exemple partis à Londres, Los Angeles, Madrid, Tokyo...</p>
        </div>
        <p class="center"><a class="btn filled-btn primary-btn" href="{{ action('PagesController@internshipOffer') }}">Déposer une offre</a></p>
      </div>
    </div>

    <div>
        <div class="container">
            <h2 class="title-2 center">Paroles d'anciens</h2>
            @include('includes.testimonial', $student_testimonials)
        </div>
    </div>
@endsection
