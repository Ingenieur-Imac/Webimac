-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Host: mysql1.alwaysdata.com
-- Generation Time: Apr 24, 2016 at 03:32 AM
-- Server version: 5.1.66-0+squeeze1
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `imac_dev_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery_student_exchange_testimonials`
--

CREATE TABLE IF NOT EXISTS `gallery_student_exchange_testimonials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_testimonial` int(10) unsigned NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `place` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_01_15_174913_create_projects_table', 1),
('2016_01_18_155725_create_student_testimonial_table', 1),
('2016_01_19_161357_create_staff_table', 1),
('2016_01_26_175510_create_promos_table', 1),
('2016_01_26_234910_create_partnerships_table', 1),
('2016_02_28_172416_create_students_table', 1),
('2016_03_13_211900_create_student_exchange_testimonials_table', 1),
('2016_03_13_212756_gallery_student_exchange_testimonial', 1),
('2016_03_16_200150_create_tags_table', 1),
('2016_03_16_204026_create_project_tags_table', 1),
('2016_04_11_224831_create_project_students_table', 1),
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_01_15_174913_create_projects_table', 1),
('2016_01_18_155725_create_student_testimonial_table', 1),
('2016_01_19_161357_create_staff_table', 1),
('2016_01_26_175510_create_promos_table', 1),
('2016_01_26_234910_create_partnerships_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partnerships`
--

CREATE TABLE IF NOT EXISTS `partnerships` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_web` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `partnerships`
--

-- INSERT INTO `partnerships` (`id`, `name`, `type`, `description`, `url_web`, `url_image`) VALUES
-- (1, 'Ubisoft', 'Partenariat Industriel', 'Un des leaders mondial de la création, édition et distribution de jeux vidéo et de services interactifs, avec un riche portefeuille de marques de renommée internationale.\r\n', 'https://www.ubisoft.com/fr-FR/studio/paris.aspx', 'logoUbisoft.png'),
-- (2, 'Maison des Arts de Créteil', 'Partenariat culturel', 'Centre culturel de production et de diffusion pluridisciplinaire et généraliste (théâtre, danse, art contemporain, festival,...).', 'http://www.maccreteil.com/fr', 'logo-mac.png'),
-- (3, 'Mikros Image', 'Partenariat industriel', 'Société de post-production spécialisée dans la création d’effets visuels numériques et l’animation. ', 'http://www.mikrosimage.eu/', 'logo_mikrosimages.jpg'),
-- (4, 'Numa', 'Partenariat pédagogique et institutionnel', 'Espace de coworking, accélération de start-up, structuration de communautés, programmes de transformation numérique et d’Open Innovation.', 'https://paris.numa.co/', 'NUMA-Paris.png'),
-- (5, 'Smile', 'Partenariat industriel', 'Société d''experts des architectures web et des solutions open source.', 'http://www.smile.fr/', 'logoSmile.png'),
-- (6, 'La Ferme du Buisson', 'Partenariat culturel', 'Un carrefour culturel unique: espace de plein air, salles de spectacles, cinémas, Centre d’art contemporain, festival… Un point de convergence entre le public et la création.', 'http://lafermedubuisson.com/', 'logoFermeDuBuisson.png'),
-- (7, 'Pülz', 'Partenariat industriel', 'Collectif de travailleurs indépendants, spécialisés dans le large domaine du multimédia : développement, graphisme, motion design, audiovisuel, conseil et formation. ', 'http://www.pulz.fr/', 'pulz-logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_gallery` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `contributors` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_of_tutors` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `awards` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_page` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `platform` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_video` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `github_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `web_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vimeo_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `projects_url_page_unique` (`url_page`),
  UNIQUE KEY `projects_id_gallery_unique` (`id_gallery`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `projects`
--

-- INSERT INTO `projects` (`id`, `id_gallery`, `name`, `description`, `excerpt`, `date`, `contributors`, `name_of_tutors`, `awards`, `url_page`, `url_image`, `platform`, `url_video`, `github_link`, `web_link`, `vimeo_link`) VALUES
-- (1, NULL, 'ShuttleOFX', 'ShuttleOFX est une plateforme web permettant le partage de plugins entre développeurs et graphistes. Les plugins sont au format OpenFX, un standard libre de plugins de traitement d’image. L’application a été conçue pour permettre à tout utilisateur de mettre en ligne des plugins OpenFX et de lire leur documentation, ainsi que de les tester sur la plateforme.', 'ShuttleOFX est une plateforme web permettant le partage de plugins entre développeurs et graphistes.', '2015-01-27 23:00:00', 'Juliette Belin <br/> ​Armand Biteau <br/> Hugo Garrido y Saez​ <br/>', 'Fabien Castan <br/> Marc-Antoine Arnaud​', 'Prix de la catégorie TECH et prix du public lors du Paris Open Source Submit 2015', 'shuttleofx', 'ShuttleOFX.png', 'vimeo', '127664921', 'https://github.com/shuttleofx/ShuttleOFX', 'http://shuttleofx.org', ''),
-- (2, NULL, 'Maere : When Lights Die', 'Maere : When Lights Die est un jeu vidéo de survival horreur pensé et développé pour la réalité virtuelle. Disponible sur PC, MAC et Linux, il sera jouable avec le casque de réalité virtuelle Oculus Rift dès que l''IMAC en recevra son kit de développement ! Prepare to dream. Prepare to be afraid. Prepare to run.', 'Jeu vidéo de survival horreur pensé et développé pour la réalité virtuelle', '2013-01-27 23:00:00', 'Aurélie Beauprez <br/>Thomas Demenat<br/>Tom Duchêne<br/>Thibaut Dumont', 'Patrice Bouvier', '', 'maere-when-lights-die', 'Maere.png', 'vimeo', '65384143', '', '', ''),
-- (3, NULL, 'Biotope', 'Biotope est un projet initié par le compositeur et artiste multimédia Pierre Estève et qui porte sur l''étude des mathématiques soujacentes à la nature. Ce sujet étant extrêmement vaste, le projet s''est concentré dans un premier temps sur la génération en temps réel un paysage numérique à l''aide du son.\r\nTout d''abord est venue une phase de recherche, à la fois en analyse du son et en algorithmie afin de modéliser le vivant. Ensuite, un programme a été créé en utilisant Max MSP Jitter afin d''analyser le son entrant, standardiser les informations ainsi capturées et les transmettre à plusieurs modèles mathématiques qui affichent à l''écran un terrain, des arbres qui poussent, etc.\r\nPierre Estève a l''intention de poursuivre ce projet avec de futures équipes IMAC afin d''en étendre les capacités et de créer un logiciel qui pourra être utilisé par n''importe quel artiste dans des spectacles audiovisuels interactifs, voire immersifs à l''aide de micros et de tout autre type de capteurs.', 'Biotope est un projet initié par le compositeur et artiste multimédia Pierre Estève et qui porte sur l''étude des mathématiques soujacentes à la nature.', '2015-01-26 23:00:00', 'Florian LEQUERTIER <br/> Mehdi-Antoine MAHFOUDI<br/>Thibaud CARPENTIER<br/>Clément SCHEPENS', 'Pierre ESTEVE', '', 'biotope', 'biotope.png', 'vimeo', '127696813', '', '', ''),
-- (4, NULL, 'La Machine à Dessiner les Sons', 'La Machine à Dessiner les Sons est un projet de l’artiste Philippe Dupuy. Le but est de réaliser une installation qui permet de dessiner pour faire du son. Sa volonté était de garder les caractéristiques du dessin traditionnel, c’est-à-dire avec une feuille et un crayon (ou autres instruments) et d’ensuite traduire ce dessin sous forme sonore grâce à des instruments mécaniques.\r\nLa première version de la machine était seulement mécanique. Nous avons réalisé une nouvelle planche à dessin, connectée à un ordinateur qui capte plusieurs effets sur la feuille (tel que la pression, les formes, la couleur,...) puis transmet les informations captées aux moteurs qui déclenchent les instruments mécaniques.\r\nNous avons pu la présenter lors du Festival PULP à la Ferme du Buisson.\r\nAinsi conçu, le projet imaginé par Philippe Dupuy prend la forme d’une installation immersive permettant au visiteur de tout âge de créer sa partition dessinée. L’association de couleurs de traits ou d’outils joue une partition musicale inédite, création artistique étonnante, déroutante et ludique où chacun devient dessinateur et musicien.', 'Installation qui permet de dessiner pour faire du son.', '2015-11-29 23:00:00', 'Marin Gauthier<br/>Marion Audebert<br/>Manon Grisi<br/>Pascale Ho', 'Philippe Dupuy', '', 'la-machine-a-dessiner-les-sons', 'lmadds.png', 'vimeo', '127547015', '', 'http://lamachineadessinerlessons.fr', ''),
-- (5, NULL, 'Zoey''s Sight', 'Zoey''s Sight est un film d''animation 3D entièrement procédural. Il a donc été réalisé uniquement en lignes de code, sans l''aide de logiciel de modélisation classique comme 3DS Max ou Maya. Il met en scène l''histoire de Zoey, une araignée, qui est entrainée à travers deux mondes plus ou moins réels par une luciole prénommée Ticky. Ce projet a donc consisté à mettre un œuvre un véritable pipeline de rendu, permettant de visualiser les scènes en temps réel dans OpenGL, puis de les fournir à un moteur de rendu basé sur Pixar''s Renderman, pour obtenir les images les plus détaillées possibles. Enfin, la modélisation procédurale permet de faire reposer le film entier sur un nombre. Si ce nombre est changé, il est possible d''obtenir un film dont l''aspect général sera différent, d''où l''intérêt d''un tel concept.', 'Zoey''s Sight est un film d''animation 3D entièrement procédural.', '2011-01-27 23:00:00', 'Gautier Ciaudo<br/>Robin De Lillo<br/>Yann Lanthony<br/>Adrien Kielb', 'Nadine Dommanget', '', 'zoey-s-sight', 'zoeys.png', 'dailymotion', 'xinu3m', '', '', ''),
-- (6, NULL, 'Rallye Provins', 'Qui ne s’est jamais ennuyé dans un musée ?\r\nLe Rallye Provins est une application web, pour smartphones et tablettes, qui permet de découvrir la ville médiévale de Provins de manière ludique et amusante. Orientée vers les jeunes générations et les touristes venus en famille, elle propose quatre parcours, disponibles en français et en anglais, pour se cultiver à son rythme. Utilisable hors-ligne, elle vous suivra tout au long de votre exploration.', 'Qui ne s’est jamais ennuyé dans un musée ?', '2015-01-25 23:00:00', 'Matthieu Bresson<br/>Lisa  Françoise<br/>Alice Neichols<br/>Marie Benoist', 'M.Nozick <br/>M.Ettayeb', '', 'rallye-provins', 'Rallye_Provins.png', 'youtube', 'TDDamupVBRc', '', 'http://provins.ingenieur-imac.fr/', ''),
-- (7, NULL, 'Carnet ', 'L‘application Carnet est le fruit de la première collaboration entre La Poste et l‘IMAC. Elle s‘inscrit dans le cadre du projet Factéo qui vise à fournir un smartphone aux plus de 100.000 facteurs en France d‘ici 2015. On retrouve l‘idée du carnet de route du facteur, où il prend en note les informations et les problèmes concernant sa tournée, par exemple si une boîte à lettres est cassée. L‘application Carnet remplace cet outil sur mobile, mais en y ajoutant beaucoup de nouvelles fonctionnalités comme la prise de photos et la synchronisation des notes sur le cloud.', 'L‘application Carnet est le fruit de la première collaboration entre La Poste et l‘IMAC.', '2013-07-18 22:00:00', 'Pierre Criulanscy<br/>Hugo Gresse<br/>Pierre Guilloux<br/>Julie Pronzac', 'Benjamin Liger<br/>Ségolène Naline', '', 'carnet', 'carnet_Laposte.png', 'vimeo', '65968243', '', '', ''),
-- (8, NULL, 'Paris Insolite', 'Paris Insolite est une application mobile de tourisme alternatif répertoriant des lieux insolites situés à Paris. Elle propose des fonctionnalités telles que la création de parcours, la gestion des favoris ou encore des calculs d''itinéraires.', 'Application mobile de tourisme alternatif répertoriant des lieux insolites situés à Paris.', '2013-01-27 23:00:00', 'Juliette Girin<br/>Thaïs Guigon<br/>Eric Luong<br/>Corentin Marc', 'Valentin Bourgoin', '', 'paris-insolite', 'paris_insolite.png', 'vimeo', '65749444', '', '', ''),
-- (9, NULL, 'Arrows Project', 'Arrows Project est un projet consistant à créer une démonstration interactive qui se doit le plus réaliste possible, basée sur le scénario suivant : le personnage, en vue à la première personne, est dans un environnement ouvert, menacé par une armée d’archers. Dès que le personnage bouge une volée de flèches lui donnera la mort.', 'Arrows Project est un projet consistant à créer une démonstration interactive qui se doit le plus réaliste possible', '2011-01-26 23:00:00', 'Eléonore Delau<br/>Rémi Génin<br/>Benjamin Liger', 'Adrien Hérubel<br/>Nadine Dommanget', '', 'arrows-project', 'arrows.png', 'dailymotion', 'xin9g4', '', '', ''),
-- (10, NULL, 'Graffiti Light', 'Graffiti Light est un projet qui à pour but de recréer un effet light painting en vidéo. Il a permit la création de l''application Dynalux, pensée pour une utilisation dans un spectacle d’art vivant, au sein de la compagnie du clou.', 'Graffiti Light est un projet qui à pour but de recréer un effet light painting en vidéo', '2012-01-25 23:00:00', 'Guillaume Albespy<br/>Tom Gay', 'Laurent Renaud', '', 'graffiti-light', 'Dynalux.png', 'vimeo', '42091300', '', '', ''),
-- (12, NULL, 'Cloud Fighter', 'Cloud Fighter est un jeu en 2D sur Android. A l’aide de nuages qui émettent divers projectiles, vous devez viser des ennemis qui passent de droite à gauche de l’écran. Le but est de survivre et de détruire l’usine ennemie qui se situe à la fin de chaque niveau.\r\nVous pouvez acheter différentes améliorations comme d’autres types de nuages avec des caractéristiques propres, des périphériques qui tournent autour du nuage et vous aident dans votre mission, et enfin des accessoires pour décorer vos nuages et leur donner du style.', 'Cloud Fighter est un jeu en 2D sur Android. ', '2011-01-27 23:00:00', 'Céline COGNY<br/>Stéphanie LUU<br/>Gabriel PEYROT', 'Anthony GIROUD', '', 'cloud-fighter', 'cloud_Fighter.png', 'dailymotion', 'ximp71', '', '', ''),
-- (13, NULL, 'Show Must Be Fun', 'Show Must Be Fun est un projet en partenariat avec Switch, un duo composé de VJ Stello (Stan Walbert) et PiPer (Adrien Winter), et qui depuis 2003 organise des concerts et des shows audio-visuels. Le but de ce projet était de concevoir une application permettant d’ajouter un côté ludique et une couche d’interactivité pendant un concert. Il répond à une problématique et un concept novateur apporté par le duo Switch. Chaque membre du public est équipé à chaque bras d’un brassard fluorescent vert ou rouge. Des caméras sont fixées sur la scène et dans la salle et capturent un flux vidéo du public effectuant des chorégraphies en rythme. Ce flux vidéo est traité en temps réel par notre application qui, grâce à des outils de vision par ordinateur, détecte les brassards et parvient à déduire le mouvement global du public.', 'Show Must Be Fun est un projet en partenariat avec Switch, un duo composé de VJ Stello (Stan Walbert) et PiPer (Adrien Winter), et qui depuis 2003 organise des concerts et des shows audio-visuels.', '2011-01-26 23:00:00', 'Julien Ducret <br/>Pierre Gouthéraud<br/>Jérémy Busset', 'Stan Walbert <br/>Adrien Winter <br/>Vincent Nozick', '', 'show-must-be-fun', 'Show_must.png', 'dailymotion', 'xiocyw', '', '', ''),
-- (14, NULL, 'Magazine INCLUDE - Première Édition', 'INCLUDE est un magazine de culture visuelle conçu et éditorialisé par la 3eme année de la formation Imac.', 'INCLUDE est un magazine de culture visuelle conçu et éditorialisé par la 3eme année de la formation Imac.', '2016-03-23 23:00:00', 'Promotion Imac3 2016<br/> Jordi Bastide<br/> Armand Biteau<br/> Pauline Boisgallais<br/> Baptiste Bourron<br/> Thibaud Carpentier<br/> Mélissa Masquelier<br/> Alice Neichols', 'Gaëtan Robillard', '', 'magazine-include-premiere-edition', 'miniCouv_1eEdition.png', 'vimeo', '', '', 'http://include.ingenieur-imac.fr/', ''),
-- (15, NULL, 'Oplon', 'Oplon est une solution de gestion et de location de matériel. Cette application a deux facettes prend à cœur un objectif : une démarche en moins d''une minute. Besoin d''un matériel ? L''application vous fournit un support facile à comprendre qui vous permet de sélectionner votre matériel en toute simplicité. Vous êtes gestionnaire ? D''un clic, vous pouvez accéder à l''inventaire, voir les réservations de vos clients et les valider aussi facilement.', 'Oplon est une solution de gestion et de location de matériel.', '2015-04-05 22:00:00', 'Andréas Pinbouen <br/> Pauline Bocognano', 'Robillard Gaëtan', '', 'oplon', 'oplon-min.jpg', 'vimeo', '127669551', '', '', ''),
-- (16, NULL, 'Penser/Improviser', 'C’est à l’initiative du Festival des Rencontres Inattendues de Tournai (Belgique) et dans le cadre de Mons 2015- Capitale de la Culture que l’IRI a lancé son projet : Penser / Improviser.\r\nBernard Stiegler, philosophe spécialisé dans les avancées technologiques et Bernard Lubat, musicien habité par l’improvisation, se sont réunis pour organiser des ateliers de pratique et de réﬂexion autour de la musique improvisée. Les enjeux se trouvent dans l’archivage des ateliers ﬁlmés sur le site www.penserimproviser.org, ainsi que dans la présence des musiciens formés au cours des ateliers au Festival des Inattendues à Tournai cet été\r\n\r\nNotre rôle dans ce projet a été d’en améliorer la communication.', 'Réﬂexion autour de la musique improvisée', '2015-04-05 22:00:00', 'Dorothée Biechy <br/> Laurianne Granmagnat', 'Gaëtan Robillard', '', 'penser-improviser', 'penser_imporoviser.png', 'youtube', '2Si2b4ldQVY', '', '', ''),
-- (17, NULL, 'Cellule Comm''', 'Tous les ans, la Cellule Comm'' est chargée d''assurer la communication de l''IMAC, de l''ESIPE au sein du campus et sur internet.\r\nPlusieurs missions lui sont attribué:\r\n- Maintenir et mettre à jour le site internet (offres de stages, portfolios, photos de promotions, mettre en avant les projets des étudiants,...)\r\n- Organiser les journées événementielles (portes ouvertes, journée des projets,...)\r\n- Réaliser des showreels pour les différentes filières de l''ESIPE\r\n- Promouvoir certains événements et actions du campus (Cordées de la réussite, Dévelo''ponts,...)\r\n- Mettre à jour et renouveler les différentes plaquettes\r\n- Fournir un support technique pour l''association des anciens élèves (Esipe-Alumni)\r\n- Établir une charte graphique pour les documents internes et externes (logos des filières, documents et lettres types,...)', 'Tous les ans, la Cellule Comm'' est chargée d''assurer la communication de l''IMAC, de l''ESIPE au sein du campus et sur internet.', '2015-04-05 22:00:00', 'Melissa Masquelier<br/>Flore Giraudier<br/>Matthieu Denis<br/>Damien Fiorella<br/>Jordan De Almeida<br/>Baptiste Bourron', 'Matthieu Constant', '', 'cellule-comm', 'comm-imac-2015.png', 'youtube', 'R-xKB_Sh2mI', '', '', ''),
-- (18, NULL, 'Neuro Education', ' Depuis quelques années, des découvertes sans précédent ont été faites dans le domaine des neurosciences grâce aux nouvelles techniques d’imagerie cérébrale, révolutionnant ce que nous pensions savoir sur le cerveau et l’apprentissage.\r\nDans ce contexte récent, le projet NeuroÉducation a eu pour but de communiquer autour des avancées actuelles des neurosciences, en particulier sur leur application dans le domaine de l’éducation et sur la théorie des intelligences multiples, développée par Howard Gardner depuis 1983.\r\n\r\nIl s’appuie sur les travaux menés par le GRENE (Groupe de REcherche en NeuroÉducation) et ses partenaires et se divise en trois parties :\r\n- Un documentaire d''une heure, faisant un tour d’horizon des initiatives mises en oeuvre par les partenaires du laboratoire.\r\n- Une vidéo d''animation à destination des collégiens, visant à expliquer les bases des neurosciences et la théorie des intelligences multiples.\r\n- Un site web à destination des professionnels (chercheurs et enseignants) reprenant la théorie des intelligences multiples de façon plus approfondie et permettant le partage de documents au sein de cette communauté.', ' Depuis quelques années, des découvertes sans précédent ont été faites dans le domaine des neurosciences grâce aux nouvelles techniques d’imagerie cérébrale, révolutionnant ce que nous pensions savoir sur le cerveau et l’apprentissage.', '2016-04-06 18:03:49', 'Emeline Cardinet<br/>Thomas Dufraine<br/>Timothé Griere', 'Pascale Toscani', '', 'neuro-education', 'neuroEducation-min.png', 'youtube', 'olcjGT2sQbA', '', 'http://intelligences-multiples.fr/', ''),
-- (19, NULL, 'Estetimage ', 'Estetimage est un projet de recherche et développement sur l''esthétique de l''image. Il consiste en un programme de prise de vue assisté par ordinateur utilisant un appareil photo Reflex. Le programme va dans un premier temps analyser de manière approfondie une photographie. Puis, il va la comparer avec une base de données dans le but de trouver des photos qui lui correspondent afin de récupérer plusieurs sets de réglages différents et "optimaux" pour notre photographie. À ces sets de réglages s''ajoutent d''autres paramètres provenant de nos études statistiques en ligne.\r\nLe programme va ensuite prendre plusieurs photographies avec ces réglages et ainsi proposer à l''utilisateur une série de photographies de la même scène, à la fois différentes et esthétiquement "belle".', 'Estetimage est un projet de recherche et développement sur l''esthétique de l''image. ', '2015-04-05 22:00:00', 'Quentin Bommart <br/>Maximilien Glineur ', 'Chaohui Wang <br/> Vincent Nozick ', '', 'estetimage', 'estetImage-min.png', 'vimeo', '127691322', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `project_students`
--

CREATE TABLE IF NOT EXISTS `project_students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_project` int(10) unsigned NOT NULL,
  `id_student` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `project_tags`
--

CREATE TABLE IF NOT EXISTS `project_tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_project` int(10) unsigned NOT NULL,
  `id_tag` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `promos`
--

CREATE TABLE IF NOT EXISTS `promos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `year` int(10) unsigned NOT NULL,
  `url_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `promos`
--

-- INSERT INTO `promos` (`id`, `year`, `url_image`) VALUES
-- (1, 2017, 'imac2017.jpg'),
-- (2, 2016, 'imac2016.JPG'),
-- (3, 2015, 'imac2015.jpg'),
-- (4, 2014, 'imac2014.jpg'),
-- (5, 2013, 'imac2013.jpg'),
-- (6, 2012, 'imac2012.jpg'),
-- (7, 2011, 'imac2011.jpg'),
-- (8, 2010, 'imac2010.jpg'),
-- (9, 2009, 'imac2009.jpg'),
-- (10, 2008, 'imac2008.png'),
-- (11, 2007, 'imac2007.jpg'),
-- (12, 2018, '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `main` tinyint(1) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `web_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `main`, `name`, `role`, `description`, `mail`, `web_link`, `url_image`) VALUES
(1, 1, 'Vincent Nozick', 'Responsable de la deuxième année', 'Maitre de conférences à l’université Paris-Est Marne-la-Vallée. Il s’est spécialisé en vision par ordinateur, en traitement d’images ainsi qu’en réalité virtuelle.', 'https://fr.linkedin.com/in/vincent-nozick-8030132/fr', 'http://www-igm.univ-mlv.fr/~vnozick/', 'Nozick.jpg'),
(2, 1, 'Venceslas Biri', 'Directeur', 'Professeur d''informatique à l''université Paris-Est Marne-la-Vallée, Vice Président Enseignement et Innovation Pédagogique, et responsable du Master Science de l’image. Il est spécialisé en informatique graphique, en synthèse d''images 3D et en réalité virt', 'http://fr.linkedin.com/in/VenceslasBiri', 'http://igm.univ-mlv.fr/~biri/', 'Biri.jpg'),
(3, 1, 'Gaetan Robillard', '', 'Professeur en communication visuelle et en arts à la Fonderie de l’Image et à École européenne supérieure d''art de Bretagne. Il est spécialisé en arts visuels et en réalisation 3D. Il est aussi artiste et a créé son propre studio d’animation, Tabouret stu', '', '', 'Robillard.jpg'),
(4, 0, 'Stéphane	Trois Carrés', '', 'Artiste et enseignant à l''école Supérieure d''art et de Design Le Havre Rouen', '', 'www.troiscarres.com', 'TroisCarres.jpg'),
(5, 0, 'Sylvain Cherrier', '', 'Internet des objets', 'https://fr.linkedin.com/in/sylvain-cherrier-59a03075', '', 'Cherrier.jpg'),
(6, 0, 'Emilie Verger', '', 'Historienne d’art spécialisée en art du XXe siècle et en médiation culturelle', 'https://fr.linkedin.com/in/emilie-verger-47347267', '', 'emilie_verger.jpg'),
(7, 0, 'Matthieu Moreau', '', 'Directeur de projet / ergonome web. ', 'https://fr.linkedin.com/in/matthieu-moreau-34064538', 'www.netemedia.fr', 'Matthieu_Moreau.jpg'),
(8, 0, 'Özlem Sulak', '', 'Cinema, Visual Arts, Editing', '', '', 'Ozlem.jpg'),
(10, 0, 'Sylvie Donard', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `promo` int(10) unsigned NOT NULL,
  `url_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_web` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_linkedin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=127 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `promo`, `url_image`, `url_web`, `url_linkedin`) VALUES
(1, 'AUDEBERT Marion', 2, '', '', ''),
(2, 'BASTIDE Jordi', 2, '', '', ''),
(3, 'BELIN Juliette', 2, '', '', ''),
(4, 'BENOIST Marie', 2, '', '', ''),
(5, 'BERTHE Gwen', 2, '', '', ''),
(6, 'BIECHY Dorothee', 2, '', '', ''),
(7, 'BITEAU Armand', 2, '', '', ''),
(8, 'BOCOGNANO Pauline', 2, '', '', ''),
(9, 'BOMMART Quentin', 2, '', '', ''),
(10, 'BOURRON Baptiste', 2, '', '', ''),
(11, 'BRESSON Mathieu', 2, '', '', ''),
(12, 'CARDINET Emeline', 2, '', '', ''),
(13, 'CARPENTIER Thibaud', 2, '', '', ''),
(14, 'CASSARD-BOISGALLAIS Pauline', 2, '', '', ''),
(15, 'DE ALMEIDA Jordan', 2, '', '', ''),
(16, 'DENIS Matthieu', 2, '', '', ''),
(17, 'DUFRAINE Thomas', 2, '', '', ''),
(18, 'ENGEL Maxime', 2, '', '', ''),
(19, 'FIORELLA Damien', 2, '', '', ''),
(20, 'FRANCOISE Lisa', 2, '', '', ''),
(21, 'GARRIDO Y SAEZ Hugo', 2, '', '', ''),
(22, 'GAUTHIER Marin', 2, '', '', ''),
(23, 'GERARD Paul', 2, '', '', ''),
(24, 'GILBERT Maxime', 2, '', '', ''),
(25, 'GIRAUDIER Flore', 2, '', '', ''),
(26, 'GLINEUR Maximilien', 2, '', '', ''),
(27, 'GRANMAGNAT Lauriane', 2, '', '', ''),
(28, 'GRIERE Timothe', 2, '', '', ''),
(29, 'GRISI Manon', 2, '', '', ''),
(30, 'HO Pascale', 2, '', '', ''),
(31, 'LASNE Robin', 2, '', '', ''),
(32, 'LEQUERTIER Florian', 2, '', '', ''),
(33, 'MAHFOUDI Mehdi-antoine', 2, '', '', ''),
(34, 'MASQUELIER Melissa', 2, '', '', ''),
(35, 'NEICHOLS Alice', 2, '', '', ''),
(36, 'OBLET Alexis', 2, '', '', ''),
(37, 'PINBOUEN Andreas-williams', 2, '', '', ''),
(38, 'SCHEPENS Clement', 2, '', '', ''),
(39, 'TRIBOUILLOIS Denis', 2, '', '', ''),
(40, 'ASSANTE DI CAPILLO Christophe', 1, '', '', ''),
(41, 'BANCOURT Remi', 1, '', '', ''),
(42, 'BELHAJ Dorian', 1, '', '', ''),
(43, 'BOUHOUILI Asmae', 1, '', '', ''),
(44, 'BURCKEL Megane', 1, '', '', ''),
(45, 'CARLIER Maelle', 1, '', '', ''),
(46, 'CASEAU Charlotte', 1, '', '', ''),
(47, 'CHARLES Pierre', 1, '', '', ''),
(48, 'CHARTIER Louis', 1, '', '', ''),
(49, 'CLAISSE Pierre', 1, '', '', ''),
(50, 'COGNY Sophie', 1, '', '', ''),
(51, 'COMPAIN Guilhem', 1, '', '', ''),
(52, 'COSTANTINI Theo', 1, '', '', ''),
(53, 'COUILLARD Quentin', 1, '', '', ''),
(54, 'DA ROCHA Melina', 1, '', '', ''),
(55, 'DAIRE Olivier', 1, '', '', ''),
(56, 'DARRAUD Charlie', 1, '', '', ''),
(57, 'DE LILLO Gregoire', 1, '', '', ''),
(58, 'DEHAIS Julia', 1, '', '', ''),
(59, 'FALCONNET Olivier', 1, '', '', ''),
(60, 'FELLER Alexander', 1, '', '', ''),
(61, 'FOLLETTI Gregoire', 1, '', '', ''),
(62, 'FRANCOIS Romain', 1, '', '', ''),
(63, 'GOYENECHE Mathias', 1, '', '', ''),
(64, 'GUITTARD Quentin', 1, '', '', ''),
(65, 'HERNANDEZ Jerome', 1, '', '', ''),
(66, 'HORAND Lucas', 1, '', '', ''),
(67, 'JESTIN Alice', 1, '', '', ''),
(68, 'JUNGERS Robin', 1, '', '', ''),
(69, 'KADDOURI Chamseddine', 1, '', '', ''),
(70, 'LE BRETON Yohan', 1, '', '', ''),
(71, 'LEMERLE Faustine', 1, '', '', ''),
(72, 'LIMOGE Corentin', 1, '', '', ''),
(73, 'MAIXENT Alice', 1, '', '', ''),
(74, 'MIGOT Bettina', 1, '', '', ''),
(75, 'MILESI Lorenzo', 1, '', '', ''),
(76, 'MOUROT Valentin', 1, '', '', ''),
(77, 'NOEL Celine', 1, '', '', ''),
(78, 'NORTIER Charlotte', 1, '', '', ''),
(79, 'QUESNEL Jeremie', 1, '', '', ''),
(80, 'RADJAYA Nancy', 1, '', '', ''),
(81, 'ROUSSET Julien', 1, '', '', ''),
(82, 'ROZEN SUDRY Lea', 1, '', '', ''),
(83, 'TANTOT Jules', 1, '', '', ''),
(84, 'TAOUI Isa', 1, '', '', ''),
(85, 'VIALE Victor', 1, '', '', ''),
(86, 'BACON Valentin', 12, '', '', ''),
(87, 'BAR Vanessa', 12, '', '', ''),
(88, 'BAUDOUIN Ariane', 12, '', '', ''),
(89, 'BAZIRE Julien', 12, '', '', ''),
(90, 'BESSOL Matthieu', 12, '', '', ''),
(91, 'BURLET Irene', 12, '', '', ''),
(92, 'BUSQUET Noemie', 12, '', '', ''),
(93, 'COUAVOUX Lisa', 12, '', '', ''),
(94, 'CRESPIN--POMMIER Mael', 12, '', '', ''),
(95, 'CRESPY Baptiste', 12, '', '', ''),
(96, 'DECHOMET Corentin', 12, '', '', ''),
(97, 'DELANNOY Vincent', 12, '', '', ''),
(98, 'DEMIERE Antoine', 12, '', '', ''),
(99, 'DUCOUX Arthur', 12, '', '', ''),
(100, 'DUSSOUCHAUD Lucas', 12, '', '', ''),
(101, 'FERRE Quentin', 12, '', '', ''),
(102, 'FLIRDEN Hugo', 12, '', '', ''),
(103, 'GOLDBAUM Coralie', 12, '', '', ''),
(104, 'GUILLOT Sophie', 12, '', '', ''),
(105, 'HADDAD Joya', 12, '', '', ''),
(106, 'LA-SELVA Andrea', 12, '', '', ''),
(107, 'LAPEYRE Anfray', 12, '', '', ''),
(108, 'LECOQ Yoan', 12, '', '', ''),
(109, 'LEURET Antonin', 12, '', '', ''),
(110, 'MANACH Owen', 12, '', '', ''),
(111, 'MERSCH Melodie', 12, '', '', ''),
(112, 'OLIVIER Baptiste', 12, '', '', ''),
(113, 'PAQUE Melanie', 12, '', '', ''),
(114, 'PRIGENT Marion', 12, '', '', ''),
(115, 'PUECH Julie', 12, '', '', ''),
(116, 'QUEMERE Quentin', 12, '', '', ''),
(117, 'REHO Alexandre', 12, '', '', ''),
(118, 'RESPAUD-BOUNY-STOUT Henri', 12, '', '', ''),
(119, 'RITOUX Elise', 12, '', '', ''),
(120, 'ROCHE Maureen', 12, '', '', ''),
(121, 'ROUSSEL Heloise', 12, '', '', ''),
(122, 'SALTON Sophie', 12, '', '', ''),
(123, 'VIEN Caroline', 12, '', '', ''),
(124, 'VILA Marion', 12, '', '', ''),
(125, 'VINCENT Steeve', 12, '', '', ''),
(126, 'VIVIER Pauline', 12, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_exchange_testimonials`
--

CREATE TABLE IF NOT EXISTS `student_exchange_testimonials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(10) unsigned DEFAULT NULL,
  `overview` longtext COLLATE utf8_unicode_ci NOT NULL,
  `url_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_testimonials`
--

CREATE TABLE IF NOT EXISTS `student_testimonials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(10) unsigned DEFAULT NULL,
  `overview` longtext COLLATE utf8_unicode_ci NOT NULL,
  `url_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `student_testimonials`
--

-- INSERT INTO `student_testimonials` (`id`, `name`, `job`, `year`, `overview`, `url_image`) VALUES
-- (1, 'Julie Pronzac', 'UX designer chez Nealite', 2014, 'L''IMAC m''a apporté une large culture numérique ainsi que l''ouverture d''esprit nécessaire pour m''orienter vers le métier de designer d''expérience. Être ingénieur créatif est un vrai plus dans ces métiers qui mêlent les compétences. Je recommanderais cette école pour tous les passionnés d''innovation numérique qui veulent expérimenter dans des domaines variés, et découvrir des personnes fantastiques !', 'julie-pronzac.png'),
-- (2, 'Thibaut Dumont ', 'Ingénieur R&D reconnaissance musicale chez MyMusicTeacher', 0, 'Après avoir terminé mon cursus par une année d''échange et un stage de recherche en Corée du sud, j''ai rejoint une jeune startup sur le développement d''un jeu vidéo d''apprentissage de la guitare. La grande force de l''IMAC est selon moi de former des ingénieurs créatifs capables de maîtriser à la fois les enjeux techniques et la dimension artistique ou ludique d''un projet multimédia, une capacité essentielle dans un monde ou les technologies de pointes vont de pair avec des innovations d''interface ou de design[...]', 'Thibaut-Dumont.png'),
-- (3, 'Marie Fétiveau', 'Lead Software Developer, RodeoFX, Montréal', 0, 'L''IMAC est une des rares formations à concilier sciences de l''ingénieur et arts. Ces trois années d''école m''ont permis d''acquérir des bases solides au travers des cours et des divers projets inter-diplômes, mais aussi de diversifier ma culture aussi bien technique qu''artistique, de dépasser mes limites et de nouer des relations amicales et professionnelles qui après toutes ces années continuent d''enrichir ma vie. ', 'Marie_Fétiveau.jpg'),
-- (4, 'Valentin Bourgoin', 'Directeur Technique chez 909c', 0, 'Je la recommanderais car c''est important, dans le monde professionnel d''aujourd''hui, d''avoir plusieurs cordes à son arc et de savoir sans cesse évoluer. La pluridisciplinarité de l''IMAC permet à ses diplômés de posséder, en plus d''un certain savoir faire, d''une culture technique et artistique très appréciée en entreprise.', 'Valentin_Bourgoin.jpg'),
-- (5, 'Sanaa Belkouch', 'Chef de projet digital', 0, 'Je recommande l''IMAC à toute personne qui aime créer, qui s''intéresse à la fois à l''art et aux nouvelles technologies. Apprenez à coder même si, à priori, ce n''est pas ce qui vous fait vibrer. Car cela vous ouvrira plusieurs perspectives. Pensez à l''entrepreneuriat et n''ayez pas peur de vous lancer dans la réalisation de vos idées et de vos projets[...]', 'Sana_ Belkouch.jpg'),
-- (6, 'Arnaud Trouvé', 'Chef de projet Post-production Audiovisuelle - Gingalab (Goyave Production)', 0, 'Venant d''un parcours très scientifique (prépa MPSI), l''IMAC m''a apporté une culture de l''image, et une rencontre avec des profils très variés et complémentaires. Je ne connais pas de formation publique aussi riche d''enseignements et diversifiée dans ses projets multimédia. Je la recommande chaudement à tous ceux qui rêvent de cinéma et d''informatique, et souhaitent un premier pas dans le domaine des effets visuels et de la post-production.', 'photo_Arnaud_Trouve.jpg'),
-- (7, 'Elisa Prana', 'Développeuse logiciel chez Mikros Image', 0, 'L''IMAC m''a avant tout permis de découvrir la programmation, tout en gardant un esprit ouvert et critique grâce aux autres matières. L''apprentissage par projets est également très formateur. C''est lors de mon projet tuteuré et mes stages que j''ai pu découvrir le monde des effets spéciaux, où je travaille maintenant.\r\nJe recommanderai l''IMAC à tout personne intéressée par le multimédia et l''aspect pluridisciplinaire de la formation.', 'E_Prana.jpg'),
-- (8, 'Adrien Herubel', 'Graphics programmer at Ubisoft Motion Pictures', 0, 'L''IMAC à travers sa formation plutôt variée laisse suffisamment de liberté à ses étudiants pour leur permettre de devenir de réels spécialistes dans le domaine de leur choix tout en leur ouvrant les yeux sur un grand ensemble des possibles dans les technologies de l''image et du son. En plus d''avoir développé mes compétences, l''école m''a permis de découvrir mon milieu professionnel actuel, et continue d''être un vivier de recrutement pour les besoins en ingénieurs de l''animation et du cinéma.', 'Adrien_Herubel.jpeg'),
-- (9, 'Cyrill Durigon', 'Motion designer / Directeur Artistique - Freelance', 0, 'L''Imac est pour moi une formation exigeante forte de son éclectisme. Applications, jeux vidéo, web, dispositifs interactifs, vidéos, les étudiants sont confrontés aux aspects artistiques et techniques dans tous les domaines. J''ai personnellement apprécié pouvoir m''investir dans ces projets très variés. Aujourd''hui encore, j''ai toujours à cœur de créer et d’innover. ', 'Cyrill_Durigon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`) VALUES
(1, 'Julien Rousset', 'julien@imac.fr', '$2y$10$E/FJS3ebDMLPdFq0XR2xruGVOyy.R3lPpxshhPTqU4lra91shQ2Fu', 'Mq2h4md701uXox7fBkIWyeqbUAZzIJ3NXqxnFbyp01pMdVGQQb2tZWaDHN2Y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
