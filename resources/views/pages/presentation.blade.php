<?php
  $title = 'Présentation';
  $banner_title = 'La formation Imac';
  $img = 'Groupe_IMAC.jpg';
?>

@extends('layouts.default')

@section('title')
    Imac | {{ $title }}
@endsection

@section('script')
    <script src="../vendor/jquery/dist/jquery.js"></script>
    <script src="{{URL::asset('../js/home.js')}}"></script>
@endsection

@section('content')
    @include('includes.banner', array('img' => $img, 'title' => $banner_title))
    @include('includes.subnav', array('img' => $img, 'title' => $title))
    <!-- @include('includes.ariane', array('title' => $title)) -->
    <div class="container center-content-padding">
        <h1 class="title-1">Qu'est-ce que l'Imac ?</h1>
        <div class="col-2 side-padding">
            <img src="{{URL::asset('images/banners/Groupe_IMAC.jpg')}}" alt="Des ingénieurs Imac" />
        </div>
        <div class="col-2 side-padding">
            <p class="lead">L’IMAC est une formation d’ingénieur en trois ans certifiée par la CTI (Commission des Titres d’Ingénieur). Créée en 19xx, c’est la première formation d’ingénieur publique en France alliant arts et sciences.</p>
            <p>En effet, notre pédagogie pluridisciplinaire nous permet d'associer esprit créatif et savoirs scientifiques. Nous formons des cadres supérieurs évoluant dans les domaines de l’Internet, des jeux vidéo, de l'audiovisuel, de la communication numérique...</p>
        </div>
    </div>

    <div class="light-row">
      <div class="container center-content-padding">
          <h2 class="title-2">Trois ans pour devenir un ingénieur créatif</h2>
          <div class="ligne"><div class="circle"></div></div>
          <div class="strong-framed">
              <div class="year">Première année</div>
              <p class="title-2 color">Découvrir</p>
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

          <div class="ligne"><div class="circle"></div></div>
          <div class="strong-framed">
              <div class="year">Deuxième année</div>
              <p class="title-2 color">Approfondir</p>
              <p class="lead">La deuxième année offre elle aussi un large panel de cours :</p>
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

          <div class="ligne"><div class="circle"></div></div>
          <div class="strong-framed">
              <div class="year">Troisième année</div>
              <p class="title-2 color">Se spécialiser</p>
              <p class="lead">C’est en troisième année que les étudiants choisissent une spécialité. Trois possibilités s’offrent à eux : audiovisuel, 3D ou web.</p>
              <p>En parallèle, les étudiants suivent un tronc commun d’enseignements et des cours de découverte. Il est possible de compléter sa  formation en effectuant un double master cinéma ou un double master informatique.</p>
              <p>Pour perfectionner leur spécialisation, les étudiants partent en stage à partir d’avril.</p>
          </div>

          <div class="ligne"></div>
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

    <div class="container center-content-padding">
        <h2 class="title-2">Les projets</h2>
        <p class="lead side-padding">Dans une logique de professionnalisation, les étudiants mettent en application leurs connaissances en réalisant de multiples projets.</p>
        <div class="frames">
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
        <div class="col-2 side-padding">
            <h3 class="title-3">Les projets à l'Imac</h3>
            <p>Ceux-ci leur permettent de gagner en autonomie, d’acquérir de l’expérience en gestion de projet et de se familiariser avec le travail d’équipe. Ils se déroulent sur plusieurs semaines et sont parfois communs à plusieurs matières (OpenGL et C++, bases de données et HTML…).</p>
        </div>
        <div class="col-2 side-padding">
            <h3 class="title-3">Notre équipement</h3>
            <p>Du matériel est mis à disposition des étudiants :</p>
            <ul>
                <li>les logiciels traditionnels du multimédia</li>
                <li>matériel audiovisuel en libre service (Canon 7D, prise de son, perches, pieds...)</li>
                <li>un fond vert et un drône, Kinect, GoPro2, écran 3D stéréoscopique, Quadrotor, Camsmart, un casque de Réalité Virtuelle Oculus Rift...</li>
            </ul>
        </div>
        <p class="center"><a class="primary-btn" href="#">Découvrir les projets</a></p>
    </div>

    <div class="light-row">
      <div class="container center-content-padding">
        <h2 class="title-2">Les stages</h2>
        <p class="lead side-padding">Véritable tremplin vers la vie active, les stages permettent aux étudiants de découvrir l’environnement dans lequel ils seront amenés à évoluer.</p>
        <div class="frames">
            <div class="framed">
                <p class="big-number">3</p>
                <p class="title-4">stages</p>
                <p>dont 2 obligatoires en deuxième et en troisième année</p>
            </div>
            <div class="framed">
                <p class="big-number">8</p>
                <p class="title-4">mois</p>
                <p>en moyenne passés en entreprise au cours de la formation</p>
            </div>
            <div class="framed">
                <p class="big-number">60</p>
                <p class="title-4">pourcents</p>
                <p>de proposition d’embauche suite au stage de troisième année</p>
            </div>
        </div>
        <div class="col-2 side-padding">
            <h3 class="title-3">Save the date</h3>
            <p>Pour valider leur diplôme, ils doivent réaliser deux stages :</p>
            <ul>
                <li>2 à 4 mois en deuxième année à partir du mois de juin</li>
                <li>4 à 6 mois en dernière année à partir du mois d’avril</li>
            </ul>
            <p>Les élèves de première année ont eux aussi la possibilité d’accomplir un stage de deux mois durant les vacances d’été.</p>
        </div>
        <div class="col-2 side-padding">
            <h3 class="title-3">Partir à l'étranger</h3>
            <p>Les étudiants sont encouragés à effectuer un de leur stage à l'étranger. Certains sont par exemple partis à Londres, Los Angeles, Madrid...</p>
        </div>
        <p class="center"><a class="primary-btn" href="#">Déposer une offre</a></p>
      </div>
    </div>

    <div>
        <div class="container">
            <h2 class="title-2 center">Paroles d'anciens</h2>
            @include('includes.testimonial',$student_testimonials)
        </div>
    </div>
@endsection
