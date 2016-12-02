-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Host: mysql1.alwaysdata.com
-- Generation Time: Dec 02, 2016 at 03:58 PM
-- Server version: 5.1.66-0+squeeze1
-- PHP Version: 5.6.16

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
-- Table structure for table `enterprise_testimonials`
--

CREATE TABLE IF NOT EXISTS `enterprise_testimonials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `overview` longtext COLLATE utf8_unicode_ci NOT NULL,
  `url_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `en_overview` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `enterprise_testimonials`
--

INSERT INTO `enterprise_testimonials` (`id`, `name`, `description`, `overview`, `url_image`, `en_overview`) VALUES
(2, 'Playapp', NULL, 'Les élèves que nous avons eu la chance de recevoir de l''IMAC ont tous démontré leurs compétences en développement web. Certains étaient plus orientés front et intégration et d''autres plus back, mais tous avaient une certaine polyvalence très appréciable !\r\nLeurs principaux atouts sont leur volonté de tester de nouvelles choses et de savoir collaborer avec une équipe.\r\nLes étudiants que nous avons accueillis étaient d''une part efficaces dans leur travail au quotidien mais aussi totalement intégrés dans la vie de l''agence ce qui prouve le bon état d''esprit de la formation.', 'logo_playapp_new.png', ''),
(3, 'Benoit MAUJEAN, R&D Manager chez Mikros Image', NULL, 'Depuis une dizaine d’années déjà, Mikros Image a eu l’occasion à de nombreuses reprises d’engager avec bonheur des développeurs et des développeuses issus de l’IMAC, avec des qualités qui se confirment au fil des promos: une bonne culture générale de l’image, des réflexes déjà solides de travail collectif, une aisance souvent rapidement affirmée de prendre en main des chantiers, même complexes.', 'Logo_Mikros.jpg', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `gallery_student_exchange_testimonials`
--

INSERT INTO `gallery_student_exchange_testimonials` (`id`, `id_testimonial`, `url`, `place`) VALUES
(2, 2, 'Stu1.jpg', 0),
(3, 2, 'Stu2.jpg', 0),
(4, 2, 'Stu3.jpg', 0),
(5, 3, 'IMG_9404.JPG', 0),
(6, 3, 'tumblr_nxl32jfgwl1uklg2vo1_1280.jpg', 0),
(7, 3, 'tumblr_o0p3g2TecZ1uklg2vo1_1280.jpg', 0),
(8, 4, '13020504_10209900711261292_1749870105_n.jpg', 0),
(9, 4, '13023588_10209900723021586_793132670_n.jpg', 0),
(10, 4, '13023591_10209900723061587_1079097893_n.jpg', 0),
(11, 5, '13152898_1328610810488987_894839512_n.jpg', 0),
(12, 1, 'Taiwan (2).jpg', 0),
(13, 1, 'Taiwan (3).jpg', 0),
(14, 1, '13014944_803635676435292_212062435_n.jpg', 0),
(15, 5, 'IMG_0558.JPG', 0);

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
('2016_04_26_195645_AddOrderToPartnerships', 1),
('2016_04_27_041914_create_enterprise_testimonials_table', 1),
('2016_04_27_144251_updateDescriptionInStaff', 1),
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
('2016_01_26_234910_create_partnerships_table', 1),
('2016_04_26_195645_AddOrderToPartnerships', 2),
('2016_04_27_041914_create_enterprise_testimonials_table', 2),
('2016_04_27_144251_updateDescriptionInStaff', 3),
('2016_04_28_025645_AddOrderToStaffMain', 4),
('2016_05_07_004220_updatei18nSeveralItems', 5),
('2016_05_13_013337_i18nProjectExcerpt', 6),
('2016_05_22_192116_addDefaultImgToStudent', 7);

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
  `order` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `partnerships`
--

INSERT INTO `partnerships` (`id`, `name`, `type`, `description`, `url_web`, `url_image`, `order`) VALUES
(1, 'Ubisoft', 'Partenariat Industriel', 'Un des leaders mondial de la création, édition et distribution de jeux vidéo et de services interactifs, avec un riche portefeuille de marques de renommée internationale.\r\n', 'https://www.ubisoft.com/fr-FR/studio/paris.aspx', 'logoUbisoft.png', 0),
(2, 'Maison des Arts de Créteil', 'Partenariat culturel', 'Centre culturel de production et de diffusion pluridisciplinaire et généraliste (théâtre, danse, art contemporain, festival,...).', 'http://www.maccreteil.com/fr', 'logo-mac.png', 3),
(3, 'Mikros Image', 'Partenariat industriel', 'Société de post-production spécialisée dans la création d’effets visuels numériques et l’animation. ', 'http://www.mikrosimage.eu/', 'logo_mikrosimages.jpg', 2),
(4, 'Numa', 'Partenariat pédagogique et institutionnel', 'Espace de coworking, accélération de start-up, structuration de communautés, programmes de transformation numérique et d’Open Innovation.', 'https://paris.numa.co/', 'NUMA-Paris.png', 4),
(5, 'Smile', 'Partenariat industriel', 'Société d''experts des architectures web et des solutions open source.', 'http://www.smile.fr/', 'logoSmile.png', 1),
(6, 'La Ferme du Buisson', 'Partenariat culturel', 'Un carrefour culturel unique: espace de plein air, salles de spectacles, cinémas, Centre d’art contemporain, festival… Un point de convergence entre le public et la création.', 'http://lafermedubuisson.com/', 'logoFermeDuBuisson.png', 6),
(7, 'Pülz', 'Partenariat industriel', 'Collectif de travailleurs indépendants, spécialisés dans le large domaine du multimédia : développement, graphisme, motion design, audiovisuel, conseil et formation. ', 'http://www.pulz.fr/', 'pulz-logo.png', 5);

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
  `en_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `en_excerpt` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `projects_url_page_unique` (`url_page`),
  UNIQUE KEY `projects_id_gallery_unique` (`id_gallery`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=94 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `id_gallery`, `name`, `description`, `excerpt`, `date`, `contributors`, `name_of_tutors`, `awards`, `url_page`, `url_image`, `platform`, `url_video`, `github_link`, `web_link`, `vimeo_link`, `en_description`, `en_excerpt`) VALUES
(1, NULL, 'ShuttleOFX 2015', 'ShuttleOFX est une plateforme web permettant le partage de plugins entre développeurs et graphistes. Les plugins sont au format OpenFX, un standard libre de plugins de traitement d’image. L’application a été conçue pour permettre à tout utilisateur de mettre en ligne des plugins OpenFX et de lire leur documentation, ainsi que de les tester sur la plateforme.', 'ShuttleOFX est une plateforme web permettant le partage de plugins entre développeurs et graphistes.', '2015-01-26 23:00:00', 'Juliette Belin <br/> ​Armand Biteau <br/> Hugo Garrido y Saez​ <br/>', 'Fabien Castan <br/> Marc-Antoine Arnaud​', 'Prix de la catégorie TECH et prix du public lors du Paris Open Source Submit 2015', 'shuttleofx', 'ShuttleOFX.png', 'vimeo', '127664921', 'https://github.com/shuttleofx/ShuttleOFX', 'http://shuttleofx.org', '', '', ''),
(2, NULL, 'Maere : When Lights Die', 'Maere : When Lights Die est un jeu vidéo de survival horreur pensé et développé pour la réalité virtuelle. Disponible sur PC, MAC et Linux, il sera jouable avec le casque de réalité virtuelle Oculus Rift dès que l''IMAC en recevra son kit de développement ! Prepare to dream. Prepare to be afraid. Prepare to run.', 'Jeu vidéo de survival horreur pensé et développé pour la réalité virtuelle', '2013-01-26 23:00:00', 'Aurélie Beauprez <br/>Thomas Demenat<br/>Tom Duchêne<br/>Thibaut Dumont', 'Patrice Bouvier', '', 'maere-when-lights-die', 'Maere.png', 'vimeo', '65384143', '', '', '', '', ''),
(3, NULL, 'Biotope', 'Biotope est un projet initié par le compositeur et artiste multimédia Pierre Estève et qui porte sur l''étude des mathématiques soujacentes à la nature. Ce sujet étant extrêmement vaste, le projet s''est concentré dans un premier temps sur la génération en temps réel un paysage numérique à l''aide du son.\r\nTout d''abord est venue une phase de recherche, à la fois en analyse du son et en algorithmie afin de modéliser le vivant. Ensuite, un programme a été créé en utilisant Max MSP Jitter afin d''analyser le son entrant, standardiser les informations ainsi capturées et les transmettre à plusieurs modèles mathématiques qui affichent à l''écran un terrain, des arbres qui poussent, etc.\r\nPierre Estève a l''intention de poursuivre ce projet avec de futures équipes IMAC afin d''en étendre les capacités et de créer un logiciel qui pourra être utilisé par n''importe quel artiste dans des spectacles audiovisuels interactifs, voire immersifs à l''aide de micros et de tout autre type de capteurs.', 'Biotope est un projet initié par le compositeur et artiste multimédia Pierre Estève et qui porte sur l''étude des mathématiques soujacentes à la nature.', '2015-01-25 23:00:00', 'Florian LEQUERTIER <br/> Mehdi-Antoine MAHFOUDI<br/>Thibaud CARPENTIER<br/>Clément SCHEPENS', 'Pierre ESTEVE', '', 'biotope', 'biotope.png', 'vimeo', '127696813', '', '', '', '', ''),
(4, NULL, 'La Machine à Dessiner les Sons', 'La Machine à Dessiner les Sons est un projet de l’artiste Philippe Dupuy. Le but est de réaliser une installation qui permet de dessiner pour faire du son. Sa volonté était de garder les caractéristiques du dessin traditionnel, c’est-à-dire avec une feuille et un crayon (ou autres instruments) et d’ensuite traduire ce dessin sous forme sonore grâce à des instruments mécaniques.\r\nLa première version de la machine était seulement mécanique. Nous avons réalisé une nouvelle planche à dessin, connectée à un ordinateur qui capte plusieurs effets sur la feuille (tel que la pression, les formes, la couleur,...) puis transmet les informations captées aux moteurs qui déclenchent les instruments mécaniques.\r\nNous avons pu la présenter lors du Festival PULP à la Ferme du Buisson.\r\nAinsi conçu, le projet imaginé par Philippe Dupuy prend la forme d’une installation immersive permettant au visiteur de tout âge de créer sa partition dessinée. L’association de couleurs de traits ou d’outils joue une partition musicale inédite, création artistique étonnante, déroutante et ludique où chacun devient dessinateur et musicien.', 'Installation qui permet de dessiner pour faire du son.', '2015-11-28 23:00:00', 'Marin Gauthier<br/>Marion Audebert<br/>Manon Grisi<br/>Pascale Ho', 'Philippe Dupuy', '', 'la-machine-a-dessiner-les-sons', 'lmadds.png', 'vimeo', '127547015', '', 'http://lamachineadessinerlessons.fr', '', '', ''),
(5, NULL, 'Zoey''s Sight', 'Zoey''s Sight est un film d''animation 3D entièrement procédural. Il a donc été réalisé uniquement en lignes de code, sans l''aide de logiciel de modélisation classique comme 3DS Max ou Maya. Il met en scène l''histoire de Zoey, une araignée, qui est entrainée à travers deux mondes plus ou moins réels par une luciole prénommée Ticky. Ce projet a donc consisté à mettre un œuvre un véritable pipeline de rendu, permettant de visualiser les scènes en temps réel dans OpenGL, puis de les fournir à un moteur de rendu basé sur Pixar''s Renderman, pour obtenir les images les plus détaillées possibles. Enfin, la modélisation procédurale permet de faire reposer le film entier sur un nombre. Si ce nombre est changé, il est possible d''obtenir un film dont l''aspect général sera différent, d''où l''intérêt d''un tel concept.', 'Zoey''s Sight est un film d''animation 3D entièrement procédural.', '2011-01-26 23:00:00', 'Gautier Ciaudo<br/>Robin De Lillo<br/>Yann Lanthony<br/>Adrien Kielb', 'Nadine Dommanget', '', 'zoey-s-sight', 'zoeys.png', 'dailymotion', 'xinu3m', '', '', '', '', ''),
(6, NULL, 'Rallye Provins', 'Qui ne s’est jamais ennuyé dans un musée ?\r\nLe Rallye Provins est une application web, pour smartphones et tablettes, qui permet de découvrir la ville médiévale de Provins de manière ludique et amusante. Orientée vers les jeunes générations et les touristes venus en famille, elle propose quatre parcours, disponibles en français et en anglais, pour se cultiver à son rythme. Utilisable hors-ligne, elle vous suivra tout au long de votre exploration.', 'Qui ne s’est jamais ennuyé dans un musée ?', '2015-01-24 23:00:00', 'Matthieu Bresson<br/>Lisa  Françoise<br/>Alice Neichols<br/>Marie Benoist', 'M.Nozick <br/>M.Ettayeb', '', 'rallye-provins', 'Rallye_Provins.png', 'youtube', 'TDDamupVBRc', '', 'http://provins.ingenieur-imac.fr/', '', '', ''),
(7, NULL, 'Carnet ', 'L‘application Carnet est le fruit de la première collaboration entre La Poste et l‘IMAC. Elle s‘inscrit dans le cadre du projet Factéo qui vise à fournir un smartphone aux plus de 100.000 facteurs en France d‘ici 2015. On retrouve l‘idée du carnet de route du facteur, où il prend en note les informations et les problèmes concernant sa tournée, par exemple si une boîte à lettres est cassée. L‘application Carnet remplace cet outil sur mobile, mais en y ajoutant beaucoup de nouvelles fonctionnalités comme la prise de photos et la synchronisation des notes sur le cloud.', 'L‘application Carnet est le fruit de la première collaboration entre La Poste et l‘IMAC.', '2013-07-17 22:00:00', 'Pierre Criulanscy<br/>Hugo Gresse<br/>Pierre Guilloux<br/>Julie Pronzac', 'Benjamin Liger<br/>Ségolène Naline', '', 'carnet', 'carnet_Laposte.png', 'vimeo', '65968243', '', '', '', '', ''),
(8, NULL, 'Paris Insolite', 'Paris Insolite est une application mobile de tourisme alternatif répertoriant des lieux insolites situés à Paris. Elle propose des fonctionnalités telles que la création de parcours, la gestion des favoris ou encore des calculs d''itinéraires.', 'Application mobile de tourisme alternatif répertoriant des lieux insolites situés à Paris.', '2013-01-26 23:00:00', 'Juliette Girin<br/>Thaïs Guigon<br/>Eric Luong<br/>Corentin Marc', 'Valentin Bourgoin', '', 'paris-insolite', 'paris_insolite.png', 'vimeo', '65749444', '', '', '', '', ''),
(9, NULL, 'Arrows Project', 'Arrows Project est un projet consistant à créer une démonstration interactive qui se doit le plus réaliste possible, basée sur le scénario suivant : le personnage, en vue à la première personne, est dans un environnement ouvert, menacé par une armée d’archers. Dès que le personnage bouge une volée de flèches lui donnera la mort.', 'Arrows Project est un projet consistant à créer une démonstration interactive qui se doit le plus réaliste possible', '2011-01-25 23:00:00', 'Eléonore Delau<br/>Rémi Génin<br/>Benjamin Liger', 'Adrien Hérubel<br/>Nadine Dommanget', '', 'arrows-project', 'arrows.png', 'dailymotion', 'xin9g4', '', '', '', '', ''),
(10, NULL, 'Graffiti Light', 'Graffiti Light est un projet qui à pour but de recréer un effet light painting en vidéo. Il a permit la création de l''application Dynalux, pensée pour une utilisation dans un spectacle d’art vivant, au sein de la compagnie du clou.\r\n\r\nGuillaume Albespy et Tom Gay', 'Graffiti Light est un projet qui à pour but de recréer un effet light painting en vidéo', '2012-04-27 22:00:00', 'Guillaume Albespy<br/>Tom Gay', 'Laurent Renaud', '', 'graffiti-light', 'Dynalux.png', 'vimeo', 'https://vimeo.com/42091300', '', '', '', '', ''),
(12, NULL, 'Cloud Fighter', 'Cloud Fighter est un jeu en 2D sur Android. A l’aide de nuages qui émettent divers projectiles, vous devez viser des ennemis qui passent de droite à gauche de l’écran. Le but est de survivre et de détruire l’usine ennemie qui se situe à la fin de chaque niveau.\r\nVous pouvez acheter différentes améliorations comme d’autres types de nuages avec des caractéristiques propres, des périphériques qui tournent autour du nuage et vous aident dans votre mission, et enfin des accessoires pour décorer vos nuages et leur donner du style.', 'Cloud Fighter est un jeu en 2D sur Android. ', '2011-01-26 23:00:00', 'Céline COGNY<br/>Stéphanie LUU<br/>Gabriel PEYROT', 'Anthony GIROUD', '', 'cloud-fighter', 'cloud_Fighter.png', 'dailymotion', 'ximp71', '', '', '', '', ''),
(13, NULL, 'Show Must Be Fun', 'Show Must Be Fun est un projet en partenariat avec Switch, un duo composé de VJ Stello (Stan Walbert) et PiPer (Adrien Winter), et qui depuis 2003 organise des concerts et des shows audio-visuels. Le but de ce projet était de concevoir une application permettant d’ajouter un côté ludique et une couche d’interactivité pendant un concert. Il répond à une problématique et un concept novateur apporté par le duo Switch. Chaque membre du public est équipé à chaque bras d’un brassard fluorescent vert ou rouge. Des caméras sont fixées sur la scène et dans la salle et capturent un flux vidéo du public effectuant des chorégraphies en rythme. Ce flux vidéo est traité en temps réel par notre application qui, grâce à des outils de vision par ordinateur, détecte les brassards et parvient à déduire le mouvement global du public.', 'Show Must Be Fun est un projet en partenariat avec Switch, un duo composé de VJ Stello (Stan Walbert) et PiPer (Adrien Winter), et qui depuis 2003 organise des concerts et des shows audio-visuels.', '2011-01-25 23:00:00', 'Julien Ducret <br/>Pierre Gouthéraud<br/>Jérémy Busset', 'Stan Walbert <br/>Adrien Winter <br/>Vincent Nozick', '', 'show-must-be-fun', 'Show_must.png', 'dailymotion', 'xiocyw', '', '', '', '', ''),
(14, NULL, 'Magazine INCLUDE - Première Édition', 'INCLUDE est un magazine de culture visuelle conçu et éditorialisé par la 3eme année de la formation Imac.', 'INCLUDE est un magazine de culture visuelle conçu et éditorialisé par la 3eme année de la formation Imac.', '2016-03-22 23:00:00', 'Promotion Imac3 2016<br/> Jordi Bastide<br/> Armand Biteau<br/> Pauline Boisgallais<br/> Baptiste Bourron<br/> Thibaud Carpentier<br/> Mélissa Masquelier<br/> Alice Neichols', 'Gaëtan Robillard', '', 'magazine-include-premiere-edition', 'miniCouv_1eEdition.png', 'vimeo', '', '', 'http://include.ingenieur-imac.fr/', '', '', ''),
(15, NULL, 'Oplon', 'Oplon est une solution de gestion et de location de matériel. Cette application a deux facettes prend à cœur un objectif : une démarche en moins d''une minute. Besoin d''un matériel ? L''application vous fournit un support facile à comprendre qui vous permet de sélectionner votre matériel en toute simplicité. Vous êtes gestionnaire ? D''un clic, vous pouvez accéder à l''inventaire, voir les réservations de vos clients et les valider aussi facilement.', 'Oplon est une solution de gestion et de location de matériel.', '2015-04-04 22:00:00', 'Andréas Pinbouen <br/> Pauline Bocognano', 'Robillard Gaëtan', '', 'oplon', 'oplon-min.jpg', 'vimeo', '127669551', '', '', '', '', ''),
(16, NULL, 'Penser/Improviser', 'C’est à l’initiative du Festival des Rencontres Inattendues de Tournai (Belgique) et dans le cadre de Mons 2015- Capitale de la Culture que l’IRI a lancé son projet : Penser / Improviser.\r\nBernard Stiegler, philosophe spécialisé dans les avancées technologiques et Bernard Lubat, musicien habité par l’improvisation, se sont réunis pour organiser des ateliers de pratique et de réﬂexion autour de la musique improvisée. Les enjeux se trouvent dans l’archivage des ateliers ﬁlmés sur le site www.penserimproviser.org, ainsi que dans la présence des musiciens formés au cours des ateliers au Festival des Inattendues à Tournai cet été\r\n\r\nNotre rôle dans ce projet a été d’en améliorer la communication.', 'Réﬂexion autour de la musique improvisée', '2015-04-04 22:00:00', 'Dorothée Biechy <br/> Laurianne Granmagnat', 'Gaëtan Robillard', '', 'penser-improviser', 'penser_imporoviser.png', 'youtube', '2Si2b4ldQVY', '', '', '', '', ''),
(17, NULL, 'Com IMAC 2015', 'Tous les ans, la Cellule Comm'' est chargée d''assurer la communication de l''IMAC, de l''ESIPE au sein du campus et sur internet.\r\nPlusieurs missions lui sont attribué:\r\n- Maintenir et mettre à jour le site internet (offres de stages, portfolios, photos de promotions, mettre en avant les projets des étudiants,...)\r\n- Organiser les journées événementielles (portes ouvertes, journée des projets,...)\r\n- Réaliser des showreels pour les différentes filières de l''ESIPE\r\n- Promouvoir certains événements et actions du campus (Cordées de la réussite, Dévelo''ponts,...)\r\n- Mettre à jour et renouveler les différentes plaquettes\r\n- Fournir un support technique pour l''association des anciens élèves (Esipe-Alumni)\r\n- Établir une charte graphique pour les documents internes et externes (logos des filières, documents et lettres types,...)', 'Tous les ans, la Cellule Comm'' est chargée d''assurer la communication de l''IMAC, de l''ESIPE au sein du campus et sur internet.', '2015-04-04 22:00:00', 'Melissa Masquelier<br/>Flore Giraudier<br/>Matthieu Denis<br/>Damien Fiorella<br/>Jordan De Almeida<br/>Baptiste Bourron', 'Matthieu Constant', '', 'cellule-comm', 'comm-imac-2015.png', 'youtube', 'R-xKB_Sh2mI', '', '', '', '', ''),
(18, NULL, 'Neuro Education', ' Depuis quelques années, des découvertes sans précédent ont été faites dans le domaine des neurosciences grâce aux nouvelles techniques d’imagerie cérébrale, révolutionnant ce que nous pensions savoir sur le cerveau et l’apprentissage.\r\nDans ce contexte récent, le projet NeuroÉducation a eu pour but de communiquer autour des avancées actuelles des neurosciences, en particulier sur leur application dans le domaine de l’éducation et sur la théorie des intelligences multiples, développée par Howard Gardner depuis 1983.\r\n\r\nIl s’appuie sur les travaux menés par le GRENE (Groupe de REcherche en NeuroÉducation) et ses partenaires et se divise en trois parties :\r\n- Un documentaire d''une heure, faisant un tour d’horizon des initiatives mises en oeuvre par les partenaires du laboratoire.\r\n- Une vidéo d''animation à destination des collégiens, visant à expliquer les bases des neurosciences et la théorie des intelligences multiples.\r\n- Un site web à destination des professionnels (chercheurs et enseignants) reprenant la théorie des intelligences multiples de façon plus approfondie et permettant le partage de documents au sein de cette communauté.', ' Depuis quelques années, des découvertes sans précédent ont été faites dans le domaine des neurosciences grâce aux nouvelles techniques d’imagerie cérébrale, révolutionnant ce que nous pensions savoir sur le cerveau et l’apprentissage.', '2016-04-06 16:03:49', 'Emeline Cardinet<br/>Thomas Dufraine<br/>Timothé Griere', 'Pascale Toscani', '', 'neuro-education', 'neuroEducation-min.png', 'youtube', 'olcjGT2sQbA', '', 'http://intelligences-multiples.fr/', '', '', ''),
(19, NULL, 'Estetimage ', 'Estetimage est un projet de recherche et développement sur l''esthétique de l''image. Il consiste en un programme de prise de vue assisté par ordinateur utilisant un appareil photo Reflex. Le programme va dans un premier temps analyser de manière approfondie une photographie. Puis, il va la comparer avec une base de données dans le but de trouver des photos qui lui correspondent afin de récupérer plusieurs sets de réglages différents et "optimaux" pour notre photographie. À ces sets de réglages s''ajoutent d''autres paramètres provenant de nos études statistiques en ligne.\r\nLe programme va ensuite prendre plusieurs photographies avec ces réglages et ainsi proposer à l''utilisateur une série de photographies de la même scène, à la fois différentes et esthétiquement "belle".', 'Estetimage est un projet de recherche et développement sur l''esthétique de l''image. ', '2015-04-04 22:00:00', 'Quentin Bommart <br/>Maximilien Glineur ', 'Chaohui Wang <br/> Vincent Nozick ', '', 'estetimage', 'estetImage-min.png', 'vimeo', '127691322', '', '', '', '', ''),
(20, NULL, 'Un jour d''écume', 'L''Écume des Jours raconte l’amour fatal de Colin et Chloé dans un monde dérangeant de fantaisie, à l’étrangeté grinçante mais familière. Écrit par Boris Vian alors qu''il était ingénieur, ce roman deviendra un des plus iconiques du XXe siècle.\r\nNotre film veut en raconter une histoire. Une histoire du roman, une histoire de son auteur, une histoire de ses personnages.\r\nUn Jour d''Écume a pour but de vous plonger dans l''univers de L''Écume des Jours et de vous immerger dans le quotidien de Boris Vian durant quelques séances d''écriture et d''imagination de son roman, en mêlant prise de vue réelle et animations pour donner vie entre ses mains à ses personnages et son univers unique.', 'L''Écume des Jours raconte l’amour fatal de Colin et Chloé dans un monde dérangeant de fantaisie, à l’étrangeté grinçante mais familière', '2015-04-21 22:00:00', 'Pauline C. Boisgallais<br/>Robin Lasne', 'Stéphane Trois Carrés', '', 'un-jour-d-ecume', 'unjourdecume_logo.jpg', 'youtube', 'SKrU2Qf1Dqc', '', '', '', '', ''),
(21, NULL, 'Morphologie Kinect', 'Le projet vise à estimer le poids d’un individu à l’aide d’une Kinect. Grâce au capteur de profondeur de la Kinect nous pouvons mesurer et estimer un certain nombre de caractéristiques de l’individu : sa taille, la longueur de ses membres, son tour de taille… A partir de ces données nous essayons d’estimer son poids.\r\nPour ce faire nous avons fait passer un grand nombre de personnes pour constituer une base de données. Nous utilisons ensuite ces données pour “apprendre” à notre programme les liens qu’il peut exister entre ces paramètres morphologiques et le poids de l’individu. Le programme est basé sur un réseau de neurones artificiels, un algorithme qui vise à reproduire le fonctionnement du cerveau humain. ', 'Le projet vise à estimer le poids d’un individu à l’aide d’une Kinect.', '2015-04-21 22:00:00', 'Gwen Berthe<br/>Paul Gérard<br/>Denis Tribouillois', 'Chaohui Wang <br/> Vincent Nozick', '', 'morphologie-kinect', 'Morphologie_Kinect.jpg', 'youtube', 'b1fJU28d6Bo', '', '', '', '', ''),
(22, NULL, 'Com IMAC 2014', 'La cellule de communication IMAC s''est occupée, comme chaque année, de promouvoir la formation IMAC et l''ESIPE via différents supports de communication : internet, print, salons, journées portes ouvertes. Cette année la cellule de communication a réalisé plusieurs flyers, affiches pour l''ESIPE, a réalisé une vidéo pour les Cordées de la réussite, a animé la journée portes ouvertes de l''Université de Marne la Vallée ainsi que la journée des projets IMAC du 16 mai, a réaliser des photos promotionnelles et enfin a revu le site et fourni un backoffice au site web pour en simplifier la gestion.', 'La cellule de communication IMAC s''est occupée, comme chaque année, de promouvoir la formation IMAC et l''ESIPE.', '2014-04-21 22:00:00', 'Clara BAUDRY<br/>Florent FRANCOIS<br/>Sonia LAURENT<br/>Romain SANFILIPPO<br/>Xavier VANSTEENE', 'Mathieu CONSTANT', '', 'com-imac', 'com-IMAC.jpg', 'vimeo', '95453144', '', '', '', '', ''),
(23, NULL, 'Buttle OFX 2015', 'Buttle OFX est un outil de manipulation d’images orienté traitements par lots pour les professionnels et les amateurs. Il permet d’effectuer un traitement à partir d’une séquence d’images et ﬁnalement d’exporter cette dernière en movie très simplement et intuitivement.\r\n\r\nC’est un logiciel libre et collaboratif évoluant depuis 3 ans, il est ainsi continuellement mis à jour que ce soit dans son code source ou ses dépendances. Il est basé sur la bibliothèque d’effets Tuttle OFX proposant une large gamme de plugins de qualité puisque respectant les standards openFX ', 'Buttle OFX est un outil de manipulation d’images orienté traitements par lots pour les professionnels et les amateurs.', '2015-04-21 22:00:00', 'Jordi Bastide<br/>Maxime Engel<br/>Maxime Gilbert<br/>Mathias Goyheneche<br/>Alexis Oblet', 'Fabien Castan<br/>Clément Champetier', '', 'buttle-ofx', 'buttle_logo.jpg', 'youtube', 'e1HIiyxV3fU', '', '', '', '', ''),
(24, NULL, 'Visualisation Medicale', 'VUX est une application en WebGL permettant de lire des scans IRM. Cette application innovante réalisée dans le cadre du projet tuteuré à l''IMAC permet aux patients et aux médecins d''observer des radios en 2D et en 3D. ', 'VUX est une application en WebGL permettant de lire des scans IRM.', '2016-04-27 22:00:00', '', 'Christopher Tarento', '', 'visualisation-medicale', 'vux_logo.jpg', 'vimeo', '94464738', '', '', '', '', ''),
(25, NULL, 'Virtuose', 'Virtuose est une application d’édition musicale interactive qui propose de modifier une piste MIDI à l''aide du mouvements des mains, détectées par la Kinect, tout en plongeant l''utilisateur dans une scène en 3D avec l''Oculus Rift . L''originalité du projet lui permet de plaire aussi bien aux musiciens quelque peu lassés du clavier et de la souris qu''aux non-initiés qui trouveront une application ludique proposant une expérience de réalité virtuelle différente de celles qu''il a pu connaître. ', 'Virtuose est une application d’édition musicale interactive qui propose de modifier une piste MIDI à l''aide de la Kinect.', '2016-04-27 22:00:00', '', 'Laurent Julia', '', 'virtuose', 'virtuose_logo.jpg', 'vimeo', '94140599', '', '', '', '', ''),
(26, NULL, 'Solar Decathlon', 'Le Solar Decathlon Europe 2014 est une compétition internationale d''architecture durable et d''énergie solaire, le but est de concevoir un habitat fonctionnel, utilisant le soleil comme seule source d''énergie. Au sein de l''équipe Team Paris, nous nous occupons de la communication durant développement du projet.', 'Le Solar Decathlon Europe 2014 est une compétition internationale d''architecture durable et d''énergie solaire.', '2016-04-28 09:17:01', '', 'Vicent Nozick', '', 'solar-decathlon', 'liv-lib.jpg', 'vimeo', '94070992', '', '', '', '', ''),
(27, NULL, 'Late', 'LATE (Live A Time Experience) est un projet innovant de court-métrage interactif avec l''Oculus Rift.\r\nPour ceux qui ne connaissent pas encore l''Oculus Rift, il s''agit d''un casque de réalité virtuel, principalement\r\nutilisé dans le domaine du jeu vidéo et qui permet une immersion totale de l''utilisateur.\r\nL''interactivité du projet se traduit par le fait que l''utilisateur aura la possibilité de choisir à plusieurs\r\nmoments de l''expérience la suite de son expérience.', 'LATE est un projet innovant de court-métrage interactif avec l''Oculus Rift.', '2016-04-27 22:00:00', '', 'Frank Charpentier <br/> Vincent Nozick', '', 'late', 'late_logo.jpg', 'vimeo', '93472896', '', '', '', '', ''),
(28, NULL, 'LightMAP', 'LightMAP est un logiciel de Vidéo Mapping opensource basé sur OpenFrameworks. Il permet de projeter images et videos dans l''espace.', 'LightMAP est un logiciel de Vidéo Mapping opensource basé sur OpenFrameworks. ', '2016-04-27 22:00:00', '', 'Thomas Pachoud', '', 'lightmap', 'lightMap_logo.jpg', 'vimeo', '94503999', '', '', '', '', ''),
(29, NULL, 'La Fille', 'Le défit était clairement fixé, faire de la BD musicale éponyme à succès LA FILLE co réaliser par Barbara Carlotti, et Christophe Blain, un opéra-rock,dont ladite fille serait le personnage central. La Fille réapparaît donc en guest-star d''un show multi médias qui se transforme en road-movie scénique. Il a fallu compter sur une chanteuse-narratrice qui n''est autre que barbara, une équipe d''animation, montage, et tournage dont nous faisions partie, des musiciens-acteurs, de l’image dessinée par christophe blain (animée par nos soins ou non), pour explorer les dimensions multiples de ce rêve américain assez surprenant.', 'Le défit était clairement fixé, faire de la BD musicale LA FILLE un opéra-rock.', '2016-04-28 09:05:12', '', 'Magali Desbazeille', '', 'la-fille', 'laFille_logo.jpg', 'vimeo', '94523432', '', '', '', '', ''),
(30, NULL, 'Komuso', 'Komuso est un éditeur de partitions en ligne de shakuhachi (flûte traditionnelle japonaise) sur pc et tablettes. Cette application web réalisée en HTML5 permet aux amateurs de cet instrument de composer leurs morceaux dans les règles avec un grand choix de symboles et de notes ainsi que toutes les fonctionnalités de base d''un éditeur de partition classique.', 'Komuso est un éditeur de partitions en ligne de shakuhachi (flûte traditionnelle japonaise).', '2016-04-27 22:00:00', '', '', '', 'komuso', 'komuso_logo.jpg', 'vimeo', '94406814', '', '', '', '', ''),
(31, NULL, 'Battlesheep', 'BattleSheep est un jeu en 2D réalisé dans le cadre du cours de synthèse d’image. Les mououtons se déplace en empruntant le chemin le plus court pour atteindre l''arrivée. Le joueur peut les aider en détruisant des murs ou en ajoutant des éléments sur leur passage. Ce jeu est inspiré du gameplay des Lemmings.\r\n\r\nTechnologie : C OpenGL\r\nIMAC1', 'BattleSheep est un jeu en 2D réalisé dans le cadre du cours de synthèse d’image. ', '2016-04-26 22:00:00', '', '', '', 'battlesheep', 'battlesheep1.jpg', 'vimeo', '', '', '', '', '', ''),
(32, NULL, 'Frigal', 'Frigal est un jeu en 3D réalisé dans le cadre du cours de synthèse d’image. Le joueur incarne un yaourt qui doit parcourir le « frigal » en évitant tous les obstacles pour parvenir à sauver sa dulcinée. Pour cela, il peut créer des portails lui permettant de passer d’un endroit à un autre. Ce jeu est inspiré du gameplay de déplacement du jeu Portal.\r\n\r\nTechnologie : C++ et OpenGL 3\r\nIMAC 2', 'Frigal est un jeu en 3D réalisé dans le cadre du cours de synthèse d’image. ', '2016-04-26 22:00:00', '', '', '', 'frigal', 'frigal.jpg', 'vimeo', '', '', '', '', '', ''),
(33, NULL, 'Azheugaga - Hypnotic Cubes', 'Azheugaga est un projet de cinématique non-interactive inspiré du mythe biblique de Moïse ouvrant la mer rouge. Initialement prévu pour être seulement esthétique, la technique a été poussée afin d’afficher une scène constituée de nombreuses informations en temps-réel et rendant un effet fluide.\r\n\r\nTechnologie : C++ OpenGL3.3 GLSL 1.50L\r\nIMAC 3', 'Azheugaga est un projet de cinématique non-interactive inspiré du mythe biblique de Moïse ouvrant la mer rouge. ', '2016-04-26 22:00:00', '', '', '', 'azheugaga-hypnotic-cubes', 'hypnotic.jpg', 'vimeo', '33841745', '', '', '', '', ''),
(34, NULL, 'Edouard et Vincent', 'Edouard et Vincent est un court métrage de 10 minutes réalisé dans le cadre du cours d’Audiovisuel. Vincent, ventriloque, a pour fidèle compagnon Edouard une petite peluche. Un soir, après un spectacle, Vincent perd connaissance et est emmené à l’hôpital. A ce moment là, Edouard prend vie et part à la recherche de son propriétaire..\r\n\r\nTechnologie : Premier Pro\r\nIMAC 2 - Promo 2014', 'Edouard et Vincent est un court métrage de 10 minutes réalisé dans le cadre du cours d’Audiovisuel', '2014-04-26 22:00:00', '', '', '', 'edouard-et-vincent', 'EdouardEtVincent.jpg', 'dailymotion', 'xmzh5c_edouard-et-vincent_creation', '', '', '', '', ''),
(35, NULL, 'HOLO X1', 'Holo X1 est une courte publicité réalisée dans le cadre du cours d’After Effect, pour l’Holo X1, premier ordinateur holographique. Cette video nous donne une vision futuriste de l’informatique à l’aide d’effets spéciaux et de séquences videos.\r\n\r\nProjet d''After Effects et Premier Pro\r\nIMAC3 Promo 2011\r\n\r\nRéalisé par Florian LAMY et Sébastien POYER', 'Holo X1 est une courte publicité réalisée dans le cadre du cours d’After Effect, pour l’Holo X1, premier ordinateur holographique. ', '2014-04-26 22:00:00', '', '', '', 'holo-x1', 'holox1.jpg', 'vimeo', '33842182', '', '', '', '', ''),
(36, NULL, 'Judgement day is not for today', 'Judgement day is not for today est un court métrage d’animation 3D réalisé dans le cadre du cours de 3DSMAX. Cette animation, basée sur le thème de Terminator, met en scène un robot qui a une mission à accomplir.\r\n\r\n3DSmax\r\nIMAC 2 ', 'Court métrage d''animation 3D réalisé dans le cadre du cours de 3DSmax', '2014-04-26 22:00:00', '', '', '', 'judgement-day-is-not-for-today', 'JudgementDay.jpg', 'youtube', 'watch?v=5pVSaQazjRI', '', '', '', '', ''),
(37, NULL, 'The 7th Boulevard', 'The 7th Boulevard est un court-métrage de 10 minutes réalisé dans le cadre du cours d’Audiovisuel. Il présente l’aventure d’un jeune acteur bouleversé par le déclin du cinéma. Cependant, une nouvelle révolution commence...\r\n\r\nAdobe Premiere Pro\r\nAdobe After Effects\r\n\r\nIMAC 2 - Promo 2012\r\n\r\nRomain BERTOZZI, Romain BRAUN, Jean-Marc DANANCHE, Thomas DURRENBERGER et Charly KRAFT', 'Court-métrage de 10 minutes réalisé dans le cadre du cours d’Audiovisuel.', '2014-04-26 22:00:00', '', '', '', 'the-7th-boulevard', 'The7thBoulevard.jpg', 'vimeo', '33441609', '', '', '', '', ''),
(38, NULL, 'Ad Vitam Aeternam', 'Il est seul et a tout perdu. Un but inatteignable va le transcender jusqu’à accomplir ce que jamais aucun autre ne fera avant ou après lui. L’amour est-il le moteur de la vie jusqu’à la mort ? Mélangeant des techniques d’animation 3D, 2D et des images réelles, Ad Vitam Aeternam est un projet de troisième année s’inspirant du mouvement de science-fiction Cyberpunk.\r\n\r\nAdobe Premier\r\nAdobe After Effets\r\n\r\nIMAC 3\r\n\r\nJulien MICHOT, Jérémy BUSSET, Marlène VIELLESCAZES, Mélanie BLONDEL et Florian LAMY\r\n\r\nSound Designer : Muadhib\r\nMixage Voix : Sylvain Thévenin', 'Court-métrage de motion design réalisé dans le cadre du cours d''audiovisuel de Stéphane Troiscarrés, en dernière école d''ingénieurs IMAC', '2014-04-26 22:00:00', '', 'Stéphane Troiscarrés', '', 'ad-vitam-aeternam', 'AdVitamAeternam.jpg', 'dailymotion', 'xpsozh_ad-vitam-aeternam_creation', '', '', '', '', ''),
(39, NULL, 'Tenebris Tugurium', 'Tenbris Tugurium est une animation 3D réalisé dans le cadre du cours de 3DSMAX mettant en scène un bûcheron face à la mort.\r\n\r\n3Dsmax, Adobe Premiere Pro\r\n\r\nIMAC 2\r\nTimothée Cottier & Léo Yvin.', 'Tenbris Tugurium est une animation 3D réalisé dans le cadre du cours de 3DSMAX mettant en scène un bûcheron face à la mort.', '2014-04-26 22:00:00', '', '', '', 'tenebris-tugurium', 'tenebris.jpg', 'vimeo', '35151324', '', '', '', '', ''),
(40, NULL, 'Racerstein', 'Racerstein est un jeu de course aérienne en 3D. Le but est de parvenir le premier à la ligne d’arrivée sans être détruit. Durant toute la course, le joueur doit éviter les obstacles et les autres joueurs. Il a aussi la possibilité d’obtenir des bonus pour accélérer, par exemple.\r\n\r\nC++ OpenGL 3\r\nIMAC 2\r\n\r\nPar Rémi Génin, Anne-Elise Poirot, Julien Ducret, Chloé Agostini et Nicolas Gouard.', 'Projet réalisé en deuxième année de l''école d''ingénieurs IMAC', '2014-04-26 22:00:00', '', '', '', 'racerstein', 'racerstein.jpg', 'dailymotion', 'xgy60x_racerstein-demo-in-game_videogames', '', '', '', '', ''),
(41, NULL, 'Drive by night', 'Le but de ce projet était d’utiliser les nouvelles technologies informatiques afin d’afficher au minimum 100 lumières dans une très grande scène. Ce projet repousse les limites techniques tout en produisant une oeuvre artistique. Il a été réalisé dans le cadre du double diplôme IMAC/Master SIS.\r\n\r\nC++ OpenGL3.3 GLSL\r\nIMAC 2\r\nRémi Génin et Robin De Lillo', 'Le but de ce projet était d’utiliser les nouvelles technologies informatiques afin d’afficher au minimum 100 lumières dans une très grande scène.', '2012-04-26 22:00:00', '', '', '', 'drive-by-night', 'drive.jpg', 'vimeo', '39475515', '', '', '', '', ''),
(42, NULL, 'Umbra viventis', 'Jouez avec votre ombre ! Umbra Viventis est un dispositif intéractif réalisé dans le cadre du festival « le corps au travail » à la Ferme du Buisson. L’installation est constituée d’un couloir plongé dans l’obscurité muni d’un système de captation d’ombres. Au passage d’un visiteur dans cet espace, son ombre est projetée au mur puis modifiée suivant ses déplacements.\r\n\r\nKinect openframeworks utilitaires C++\r\nIMAC 3', ' Trailer du projet de dispositif interactif "Umbra Viventis", présenté en 2012 à la Ferme du Buisson dans le cadre du festival ''le corps au travail''', '2014-04-26 22:00:00', '', '', '', 'umbra-viventis', 'umbraviventis.jpg', 'dailymotion', 'xpjnak_umbra-viventis-ferme-du-buisson-24-25-mars-2012_creation', '', 'https://umbraviventisproject.wordpress.com/', '', '', ''),
(43, NULL, 'Damn', 'Delicious Acrostics Maker for Nerdz est un site web qui permet de générer facilement des acrostiches. Il suffit de rentrer un mot, puis un genre pour qu’un poème, dont les initiales de chaque vers créés un mot qui peut être lu à la verticale, se génère automatiquement.\r\n\r\nHTML CSS\r\nIMAC 1', 'Site web qui permet de générer facilement des acrostiches. ', '2014-04-26 22:00:00', '', '', '', 'damn', 'damn.jpg', 'vimeo', '', '', '', '', '', ''),
(44, NULL, '404 Answers', '404answers est un site internet communautaire ayant pour objectif de permettre aux internautes de partager leurs idées à propos de sites web, applications mobiles, logiciels et de donner leurs avis. En bref, soit la communauté donne une réponse à votre recherche, soit vous donnez une bonne idée qui pourrait intéresser des développeurs.\r\n\r\nDjango Premiere Pro\r\nIMAC 3 - Promo 2012\r\n\r\nPierre Gouthéraud', 'Site web communautaire ayant pour objectif de permettre aux internautes de partager leurs idées à propos de sites web, applications mobiles, logiciels et de donner leurs avis.', '2014-04-26 22:00:00', '', '', '', '404-answers', '404answers.jpg', 'vimeo', '33806754', '', '', '', '', ''),
(45, NULL, 'Super Angry Mario', 'Super Angry Mario est un jeu en 2D basé sur le gameplay du célèbre jeu Angry Birds. Le joueur, armé de son lance-pierre, doit lancer des carapaces et atteindre le plus d’ennemis possible en détruisant des structures. Super Angry Mario propose plusieurs niveaux et styles de jeu.\r\n\r\nJava / jbox2D\r\nIMAC 2 - Promo 2013\r\nGuillaume Bouhier', 'Super Angry Mario est un jeu en 2D basé sur le gameplay du célèbre jeu Angry Birds. ', '2014-04-26 22:00:00', '', '', '', 'super-angry-mario', 'superangrymario.jpg', 'vimeo', '34473302', '', '', '', '', ''),
(46, NULL, 'Angry Food', 'Angry Food est un jeu en 2D basé sur le gameplay du jeu Angry Birds. Le joueur, incarne, à travers le monde, des groupes d’aliments en rébellion. Armé de son lance-pierre, il doit lancer des baguettes explosives kamikazes sur des français à bérets ou des yakitoris sur des sumis japonais pour les éliminer.\r\n\r\nDéveloppement en JAVA d''un jeu de type Angry Foods avec le moteur physique JBox2D\r\nIMAC 2', 'Angry Food est un jeu en 2D basé sur le gameplay du jeu Angry Birds. ', '2016-04-26 22:00:00', '', '', '', 'angry-food', 'angryfood.jpg', 'vimeo', '34529031', '', '', '', '', ''),
(47, NULL, 'AP3DV', 'A Pure 3D Video est un projet expérimental dont le but final est de créer une courte vidéo d’animation utilisant un modèle d’illumination global: le Progressive Photon Mapping. Ce projet est donc axé sur la synthèse d''images et la programmation mais aussi sur la modélisation 3D et l''animation.\r\n\r\nJean-Marc Dananché, Vincent Lesueur et Léo Yvin\r\nIMAC 2 - Promo 2013', 'A Pure 3D Video est un projet expérimental dont le but final est de créer une courte vidéo d’animation utilisant un modèle d’illumination global', '2012-04-26 22:00:00', '', 'Venceslas Biri', '', 'ap3dv', 'ap3dv.jpg', 'vimeo', '41708278', '', '', '', '', ''),
(48, NULL, 'Com IMAC 2012', 'La cellule communication de l''IMAC a pour but d''assurer la visibilité de l''école d''ingénieur IMAC. Pour cela, elle utilise différents moyens : print, web, audiovisuel, communication et évènementiel. Cette année, la tâche principale a été la refonte du site de l''école. La com''IMAC a aussi réalisé une brochure administrative et entreprise, ainsi qu''un visuel évènementiel. En vidéo, elle a créé une nouvelle animation du logo, un showreel et a assuré deux couvertures évènementielles. En communication générale, la com''IMAC a imaginé des sweats à l''image de l''école, et un nouveau logo. Enfin, elle s''est rendue dans différents établissements pour promouvoir l''école (IUT, lycées, prépas et salons).\r\n\r\nPromo 2014\r\nJeremy BARDEAU, Timothée COTTIER, Adèle LENNON, Cyrill DURIGON, Alexandre VOINEY et Benjamin PERNEY', 'Vidéo showreel de l''école d''ingénieur IMAC reprenant les différents travaux des étudiants.', '2012-04-27 22:00:00', '', 'Venceslas Biri', '', 'com-imac-2013', 'comimac.jpg', 'vimeo', '54669756', '', '', '', '', ''),
(49, NULL, 'Com ESIPE', 'Dans le cadre de nos cours de 2e année, nous devions réaliser un projet tuteuré entre le mois de novembre et le mois de mai. Le but de notre projet était de réaliser une vidéo promotionnelle de l’ESIPE MLV, une école voisine. Cette vidéo doit s’intégrer sur le site de l’ESIPE MLV et inciter les potentiels futurs étudiants à s’y inscrire. Cette vidéo est destinée à être publiée sur le site internet de l’ESIPE MLV mais aussi présentée lors des salons ou des journées portes ouvertes.\r\n\r\nIMAC 2 - Promo 2016\r\nManuel Jordan, Tom Yanowitz et Timothée Chevalier', ' Réaliser la vidéo promotionnelle de l’ESIPE MLV, une école voisine', '2012-04-26 22:00:00', '', 'Francoise Utheza', '', 'com-esipe', 'comesipe.jpg', 'vimeo', '41667886', '', '', '', '', ''),
(52, NULL, 'Its a small schizophrenic world', 'It''s a small schizophrenic world est un réseau social qui donne à tous les passionnés de cinéma, amateurs et professionnels, la possibilité de contribuer à un même projet cinématographique : un film collaboratif. Nous cherchons à regrouper et élargir tous les talents créatifs et techniques de divers horizons et ainsi apporter une nouvelle dimension au cinéma, là où le partage est privilégié!\r\n\r\nArnaud Desfontaines, Emeline Esteves, Charly Kraft, Alexandre Mahë et Holy Razafinjoelina', 'Réseau social qui donne à tous les passionnés de cinéma, amateurs et professionnels, la possibilité de contribuer à un même projet cinématographique', '2012-04-26 22:00:00', '', 'Frank Charpentier', '', 'its-a-small-schizophrenic-world', 'schizo.jpg', 'vimeo', '41649359', '', '', '', '', ''),
(53, NULL, 'Leds Go', 'Le projet tuteuré Led’s Go c’est d’abord une rencontre, une collaboration entre un groupe de six étudiants de l’école d’ingénieur IMAC et le Collectif 18.3, un collectif de danseurs et comédiens dans le but de réaliser une installation pour la scénographie d’un spectacle vivant. Ceci prend la forme d''une grille de 7x5m illuminé grâce au vidéo-mapping, la projection de vidéo sur cette grille.\r\n\r\nRomain Braun, Guillaume Bréda, Thomas Durrenberger, Michel Doudin, Guénolé Guémas et Hye-Seung Lee', 'Réalisation d''une installation pour la scénographie d’un spectacle vivant avec le collectif 18.3', '2012-04-26 22:00:00', '', 'Malte Mager', '', 'leds-go', 'led.jpg', 'vimeo', '41737488', '', '', '', '', ''),
(54, NULL, 'Logiciel Stopmotion Tweedy', 'Le logiciel de Stop Motion Tweedy permet à tout amateur de cette discipline de réaliser ce type de vidéo de A à Z. Tweedy permet de piloter un appareil photo depuis son interface et propose plusieurs outils d''aide à la réalisation. En effet, la vision en temps réel permet de voir sur l''écran les modifications de la scène et d''avoir ainsi rapidement l''aperçu du résultat, du cadrage, etc. sans avoir à prendre plusieurs photos pour au final n''en garder qu''une ; l''onion skin permet de voir la différence entre deux ou plusieurs images consécutives grâce à des niveaux de transparence ; le réglage de l''appareil photo peut se faire depuis l''application, ce qui permet de ne plus y toucher et risquer de le déplacer une fois l''installation faite ; le montage se fait grâce à une manipulation classique, à la manière de toute plateforme de montage ; l''export se fait dans un format qui permet de transférer le projet dans le logiciel de montage de son choix. Tweedy réunit donc un maximum de fonctionnalités qui facilitent la réalisation d''une vidéo de Stop Motion. Ce logiciel est Open Source. Ainsi, tout utilisateur a la possibilité de développer de nouvelles fonctionnalités qui apporteront une amélioration à celui-ci. Il est également multiplateforme et fonctionne aujourd''hui sous Linux et MacOs.\r\n\r\nStéphanie Brière, Solvejg Bougeois, Guillaume Bonvoust et Julien Hennet', 'Tweedy permet de piloter un appareil photo depuis son interface et propose plusieurs outils d''aide à la réalisation.', '2012-04-26 22:00:00', '', 'Fabien Castan', '', 'logiciel-stopmotion-tweedy', 'tweedy.jpg', 'vimeo', '41666990', '', '', '', '', ''),
(55, NULL, 'PICRI 2', 'Le projet PICRI (Partenariat Institutions Citoyens pour la Recherche et l''Innovvation) est « La mémoire enfouie des Correspondants de l’Humanité », dont le sujet de recherche est : "A la rencontre d’une mémoire de la région Ile de France : L’espace francilien dans le regard des correspondants photographiques de l’Humanité." Le projet a été réalisé en collaboration avec trois étudiants du master Culture et Métiers du Web : Carole Andriantsitohaina, Sophie Boiche et Jean-François Hamet. Notre rôle a été de poursuivre le développement du site commencé l''année dernière. Nous avons ainsi effectué une refonte graphique et ergonomique afin de mettre davantage en valeur les photographies à travers des modules innovants et interactive tels qu''une photothèque, une carte Google Map, une frise chronologique, des parcours franciliens ou encore un espace pédagogique.\r\n\r\nAnne Delort et Léonore Savoye', '', '2012-04-26 22:00:00', '', 'Thierry Bonzon', '', 'picri-2', 'regard.jpg', 'vimeo', '', '', '', '', '', ''),
(56, NULL, 'Tableau virtuel Kinect Quickslider', 'QuickSlider est un logiciel permettant de passer les slides d’un diaporama (Powerpoint, PDF...) sans avoir besoin de souris ni de clavier mais uniquement grâce à une kinect chargée de détecter des mouvements humains définis.\r\n\r\nMaëlle PARIEZ, Karine AVAKOVA, Aryane HOFBAUER et Jacqueline JAYACHANDRAN', 'Vidéo de promotion d''un logiciel permettant passer les slides d''un diaporama à l''aide de la technologie kinect', '2012-04-26 22:00:00', '', 'Fériel GOULAMHOUSSEN', '', 'tableau-virtuel-kinect-quickslider', 'quick.jpg', 'vimeo', '41686799', '', '', '', '', ''),
(57, NULL, 'WebGL IMAC', 'Le projet WebGL IMAC consiste en la création d''un site internet utilisant la technologie WebGL et ayant pour but de présenter les projets tuteurés des étudiants de l''école d''ingénieur IMAC. Mais le WebGL c''est quoi ? Le WebGL est une spécification d''affichage 3D pour les navigateurs Web permettant d''intégrer du contenu OpenGL directement dans le code Javascript d''une page internet. Et le contenu de ce site web ? Ce site web est divisé en 3 univers, présentant chacun un aspect de la formation IMAC, à savoir : La communication, le multimédia et l''audiovisuel. Venez découvrir les projets des étudiants en naviguant de façon innovante d''un univers à l''autre.\r\n\r\nRomain BERTOZZI et Simon CARRE', 'Le projet WebGL IMAC consiste en la création d''un site internet utilisant la technologie WebGL et ayant pour but de présenter les projets tuteurés des étudiants de l''école d''ingénieur IMAC', '2012-04-26 22:00:00', '', 'Venceslas Biri', '', 'webgl-imac', 'webgl.jpg', 'vimeo', '41674978', '', '', '', '', ''),
(58, NULL, '2038', '2038 est un projet de court-métrage d''anticipation, réalisé dans le cadre des études de l''école d''ingénieurs IMAC en collaboration avec l''association audiovisuelle 803Z. Résumé : dans une société futuriste, un étudiant conçoit une machine pouvant révolutionner la condition humaine.\r\n\r\nNadia Mazouz, Keven Akyurek et Alexandre Horiot', 'Court-métrage d''anticipation en collaboration avec l''association audiovisuelle 803Z', '2013-04-26 22:00:00', '', 'Frank Charpentier', '', '2018', '2038.jpg', 'vimeo', '66175926', '', '', '', '', ''),
(60, NULL, 'Canal Nivernais', 'Le projet du canal du Nivernais consiste en la réalisation d''une application Androïd basée sur la réalité augmentée. Cette application permettra aux utilisateurs du canal de découvrir la région d''une nouvelle façon.\r\n\r\nTifaine Caumont, Pierre-Baptiste Lallican et Flavien Leygues', 'Application Androïd basée sur la réalité augmentée.', '2013-04-26 22:00:00', '', 'Frédéric Rolland et Gilles Chamillard', '', 'canal-nivernais', 'canal.jpg', 'vimeo', '66062380', '', '', '', '', ''),
(61, NULL, 'Com IMAC 2013', 'La cellule communication de l''IMAC avait pour but d''assurer la communication externe et interne de l''école : salons étudiants, rencontres des métiers du web, cordées de la réussite.\r\nL''équipe a également réalisé cette année le showreel de l''Esipe ainsi que les logos des filières de l''Esipe.\r\n\r\nLauriane Anthony, Fany Durand, Océane Rennesson, Timothée Riom et Jérémy Ta', 'Assurer la communication externe et interne de l''école', '2013-04-26 22:00:00', '', 'Vincent Nozick', '', 'com-imac-2014', 'comimac_0.jpg', 'vimeo', '67005300', '', '', '', '', ''),
(62, NULL, 'Electronic Wallpaper 2.0', 'EWP 2.0 est le premier logiciel de montage vidéo procédural. En se basant non plus sur le découpage temporel des vidéos mais sur le tracé laissé par l’utilisateur sur les rushes, EWP 2.0 s’inscrit dans le cadre des nouvelles pensées du numérique en révolutionnant le montage vidéo. Ergonomique et intuitif, EWP 2.0 est destiné à tous les professionnels, amateurs mais aussi aux curieux. EWP 2.0, expérimentez le montage instinctif !\r\n\r\nDamaris Ankou, Charlotte Hochart et Cécilia Lejeune', 'EWP 2.0 est le premier logiciel de montage vidéo procédural.', '2013-04-26 22:00:00', '', 'Stéphane Trois Carrés', '', 'electronic-wallpaper-2-0', 'ew.jpg', 'vimeo', '', '', '', '', '', ''),
(63, NULL, 'Hydro-gene', 'Hydro-gene Engine est un moteur de rendu 3D capable d''afficher en temps réel des terrains composés de millions de polygones et enrichis de données hydrologiques. Hydro-gene permet de naviguer dans ces terrains, et de visualiser ces informations dans le cadre de l''étude du comportement de l''eau à l''échelle géologique.\r\n\r\nFlora Jullien, Jérémie Defaye et Cédric Bidaud', 'Moteur de rendu 3D capable d''afficher en temps réel des terrains composés de millions de polygones et enrichis de données hydrologiques. ', '2013-04-26 22:00:00', '', 'Adrien Hérubel', '', 'hydro-gene', 'hydrogene.jpg', 'vimeo', '66016707', '', '', '', '', ''),
(64, NULL, 'Lightbeats', 'Le projet Lightbeats consiste en la création d''un logiciel de V-jing en temps réel: le logiciel doit permettre le déclenchement, la lecture et la modification de calques vidéo ou effet, parfaitement synchronisés avec le jeu de musiciens utilisant des instruments tels que des séquenceurs, utilisant le protocole MIDI.\r\n\r\nArnaud Gicquello, Jonathan Carly, Julien Creus et Tom Gay', 'Création d''un logiciel de V-jing en temps réel', '2013-04-26 22:00:00', '', '', '', 'lightbeats', 'lightbeat.jpg', 'vimeo', '66173479', '', '', '', '', '');
INSERT INTO `projects` (`id`, `id_gallery`, `name`, `description`, `excerpt`, `date`, `contributors`, `name_of_tutors`, `awards`, `url_page`, `url_image`, `platform`, `url_video`, `github_link`, `web_link`, `vimeo_link`, `en_description`, `en_excerpt`) VALUES
(67, NULL, 'Euclid was wrong', 'Euclid Was Wrong est un puzzle-game à la troisième personne dans un univer non-euclidien.\r\n\r\nL''histoire se déroule dans le monde de Pseudaria, où les géométriciens ont réussi à synthétiser l''ultime paradoxe, rémettant en cause le 5e postulat d''Euclide. Ce paradoxe fut confiné au sein du claveau, le coeur de l''Usine, alimentant tout le royaume en énergie.\r\nMais malheureusement, un jour, le coeur surchauffe, et tous les paradoxes qu''il contenait s''échappent !\r\n\r\n    Monia Arrada\r\n    Nicolas Bertrand\r\n    Laury Landrau\r\n    Andre Sochard\r\n', 'Euclid Was Wrong est un puzzle-game à la troisième personne dans un univer non-euclidien.', '2016-04-28 09:18:53', '', 'Adrien Herubel', '', 'euclid-was-wrong', 'EuclidewasWrong.jpg', 'vimeo', '94471002', '', '', '', '', ''),
(68, NULL, 'Data Gare', 'DataGare est un projet de visualisation des données de la SNCF, s''inscrivant dans le cadre du programme Data Shaker mis en place par le NUMA (anciennement La Cantine).\r\nIl s''agit d''une application interactive et ludique de comparaison et de visualisation animée des données sur les gares Transilien.\r\nLe dispositif est projeté en grand format sur un mur de plusieurs mètres (10x3m).\r\nL''un des principaux enjeux a été de créer une expérience utilisateur unique, d''une part en tactilisant le mur, et d''autre part, en donnant vie à des jeux de données statiques.\r\nLe projet s''appuie sur un logiciel graphique 2D/3D en temps réel, AAASeed, basé sur du LUA et du C, conçu par l''artiste programmeur Mâa Berriet.\r\n\r\n    Marine Dos\r\n    Audrey Guénée\r\n    Maxime Kharlamoff\r\n    Lionel Mullot\r\n', 'DataGare est un projet de visualisation des données de la SNCF, s''inscrivant dans le cadre du programme Data Shaker mis en place par le NUMA', '2016-04-27 22:00:00', '', 'Venceslas Biri', '', 'data-gare', 'data_gare_logo.jpg', 'vimeo', '94057697', '', '', '', '', ''),
(71, NULL, 'Buttle OFX 2014', 'ButtleOFX est un logiciel de compositing OpenSource. Il permet d’appliquer des effets à des images ou des vidéos, et a été pensé pour être simple d’utilisation tout en restant performant.\r\nLe projet a été commencé en 2012 - 2013 par une autre équipe de l’IMAC et a été reprise par la nôtre en Octobre 2013, avec pour objectif de sortir une version installable : ButtleOFX Alpha. \r\n\r\nAvec,  Lucie Delaire, Jonathan Douet, Anthony Guiot, Virginie Lalande et Baptiste Moizard\r\n', 'ButtleOFX est un logiciel de compositing OpenSource. Il permet d’appliquer des effets à des images ou des vidéos, et a été pensé pour être simple d’utilisation tout en restant performant.', '2014-04-27 22:00:00', '', 'Fabien Castan', '', 'buttle-ofx-2014', 'BOFX_2014.jpg', 'vimeo', '94228348', '', '', '', '', ''),
(72, NULL, 'Xtract yourself!', 'Xtract yourself! est un programme permettant de réaliser une extraction de fond. Ceci consiste à détecter tout ce qui passe devant le fond, au premier plan. On peut alors détecter tout changement dans l''image : personne qui passe devant, ajout ou déplacement d''un objet, ... Nous nous sommes principalement penchées sur une méthode qui s''adapte aux changements de fond lent (ainsi, un objet qui reste immobile un certain temps entre dans le fond.) et sur une détection robuste aux changements de luminosité qui détecte aussi les ombres. Le but était de réaliser une extraction efficace que pourrait utiliser le centre de création numérique Le Cube dans le cadre de son projet Living Art, mais notre extraction peut aussi avoir d''autres applications telles que le jeu vidéo.\r\n\r\n    Sanaa Belkouch\r\n    Marjory Gaillot\r\n    Chloé Laugier\r\n', 'Xtract yourself! est un programme permettant de réaliser une extraction de fond. ', '2016-04-28 09:15:21', '', 'Didier Bouchon <br/> Vincent Nozick', '', 'xtract-yourself', 'xtract.jpg', 'vimeo', '23636592', '', '', '', '', ''),
(73, NULL, 'Stereo iphone', 'Stereo iPhone consiste en la création d''une application iPhone permettant d''effectuer une rectification épipolaire sur une paire d''images acquises avec un iPhone dans le but de générer une paire d''images stéréoscopiques confortables. Stereo iPhone est un projet technique, visant à produire une application ludique mêlant des technologies actuellement en vogue, à savoir la programmation mobile et la stéréoscopie.\r\n\r\nAvec  Alice LOESER et Imane HACHEMAOUI\r\n', 'Application iPhone permettant d''effectuer une rectification épipolaire sur une paire d''images', '2011-04-27 22:00:00', '', 'Vincent Nozick', '', 'stereo-iphone', 'stereo_phot_logo.jpg', 'dailymotion', 'xin149_stereo-iphone_tech', '', '', '', '', ''),
(74, NULL, 'PICRI', 'Le projet du PICRI est « La mémoire enfouie des Correspondants de l’Humanité », dont le sujet de recherche est : « A la rencontre d’une mémoire de la région Ile de France : L’espace francilien dans le regard des correspondants photographiques de l’Humanité ». Le site que nous avons conçu et développé doit permettre de mettre en valeur les archives des correspondants de l''Humanité à travers des dispositifs interactifs comme une Google Map, une photothèque et prochainement une frise interactive. Le site a été réalisé en collaboration avec le Master Culture et Métier du web et en particulier Morgane Louis et Laure Neria.\r\n\r\nAvec  Julien Michot et Timothée ROLDAO\r\n', 'A la rencontre d’une mémoire de la région Ile de France', '2016-04-28 15:52:15', '', 'Thierry Bonzon <br/> Venceslas Biri', '', 'picri', 'picri.jpg', 'dailymotion', 'xinysc_imac-2011-projet-picri_tech', '', '', '', '', ''),
(75, NULL, 'Morphing', 'MorphImac est un projet tuteuré de 2e année d''école d''ingénieurs IMAC, qui a pour objectif la création de plugin en C++, pour créer des morphings entre plusieurs images dans le logiciel de compositing Nuke. L''équipe est composée de Mélanie Blondel, Adrien Bruneliere et Vincent Jubault.', 'Création de plugin en C++, pour créer des morphings entre plusieurs images dans le logiciel de compositing Nuke', '2011-04-27 22:00:00', '', 'Fabien Castan', '', 'morphing', 'morphimac.jpg', 'dailymotion', 'xinxge_morphimac-presentation-du-projet-morphing-imac-2_tech', '', '', '', '', ''),
(76, NULL, 'Ligue des droits de l''homme', 'La Ligue des Droits de l''Homme est une organisation non gouvernementale française. Elle souhaite sensibiliser vis-à-vis de la protection des données personnelles sur Internet, un sujet plus que jamais d''actualité. Pour cela, elle veut mettre en place la diffusion de contenus vidéo sur Internet afin de toucher le plus de monde possible. Trois courtes vignettes avec un message fort et explicite ont été réalisées par nous, étudiants à l''IMAC. Elles sont destinées à être diffusées largement afin de sensibiliser et interpeller le plus grand nombre possible.\r\n\r\nAvec Odile Bellerose, Fiona Charbonnier, Florian Lamy\r\n', 'Vidéos de sensibilation aux droits de l''Homme ', '2011-04-27 22:00:00', '', 'Pierre-Jérôme Adjedj', '', 'ligue-des-droits-de-l-homme', 'ligue_logo.jpg', 'dailymotion', 'xio03t_protegez-vos-donnees-personnelles-projet-tuteure-imac-ligue-des-droits-de-l-homme-2011_creation', '', '', '', '', ''),
(77, NULL, 'Le jour des bébés', 'La maternité des Bluets, pionnière dans un certain nombre de domaines (accouchement sans douleur, rapport mère-enfant, accompagnement de l’allaitement...) continue à innover pour maintenir la tradition de l’établissement. Dans ce cadre, un projet initié par Julianna Vamos, psychologue aux Bluets et une partie de l’équipe est de faire rentrer l’art aux Bluets sous différentes formes. Ainsi, nous avons décidé de concevoir un aquarium interactif dans lequel serait représentés chacun des nouveaux-nés sous la forme d''un poisson à l''apparence d''origami. Chacun devient alors libre d''intéragir avec l''ensemble des poissons : l''aquarium devient un point de rencontre et de discussion entre les nouvelles familles.\r\n\r\nAvec AGOSTINI Chloé, PERRIN Manon, SIDIBE Ndia\r\n', 'Aquarium interactif', '2011-04-27 22:00:00', '', 'ADJEDJ Pierre-Jérôme <br/> RAYNAL Benjamin', '', 'le-jour-des-bebes', 'bb_logo.jpg', 'vimeo', '', '', '', '', '', ''),
(78, NULL, 'Happy People', 'L''objectif premier de ce projet a été de concevoir un site web à l''image de la compagnie For happy people & Co afin d''augmenter sa visibilité sur internet. Présentant à la fois la compagnie, ses membres et ses spectacles, ce site web se veut en même temps informatif et ludique. Pour cela, une mascotte suit l''internaute durant toute sa visite, afin de construire un univers décalé et amusant. On pourra également retrouver l''actualité de la compagnie, auquel s''ajoute un calendrier des spectacles, qui sera mis à jour grâce à une partie administration (visible uniquement par l''administrateur du site).\r\n\r\nAvec Caroline CAMPAN, Anne-Elise POIROT, Sébastien POYER\r\n', 'Site internet ', '2011-04-27 22:00:00', '', 'Jean-François AUGUSTE <br/> Venceslas BIRI', '', 'happy-people', 'happy_logo.jpg', 'dailymotion', 'xinxdx_projet-tuteure-for-happy-people-co_creation', '', '', '', '', ''),
(79, NULL, 'Psycho Rodeo', 'Ce projet est un défi à la fois artistique et technique puisqu''il mélange l''audiovisuel (écriture d''un scénario, tournage, montage) et le multimédia (création d''un site web et d''une interface Flash).\r\n\r\nA mi-chemin entre un film et un jeu vidéo, Psycho-Rodeo se démarque par son originalité scénaristique et technique. Vous incarnez Jim, un jeune homme perdu qui ne se sent plus maître de son corps. Au cours de l''aventure, vos choix influenceront la suite, vous créez donc votre propre histoire ! Saurez-vous sortir Jim de l''impasse ou au contraire allez-vous lui donner encore plus d''ennuis ?\r\n\r\nAvec Jean-François Biondi, Nicolas Gouard, Thomas Jacquey, Virgile Marin\r\n', 'Film interactif ', '2011-04-27 22:00:00', '', 'Philippe Sisbane', '', 'psycho-rodeo', 'psycho_rodeo_logo.jpg', 'dailymotion', 'xio2xz_psycho-rodeo-bande-annonce_creation', '', '', '', '', ''),
(80, NULL, 'Buttle OFX 2013', 'ButtleOFX est un logiciel de compositing OpenSource. Le compositing est notamment utilisé dans les effets spéciaux pour modifier et associer plusieurs sources d''images (vidéos, images, 3D...). ButtleOFX est une interface graphique dédiée au moteur de compositing TuttleOFX, permettant ainsi de gérer tous les plugins OpenFX.\r\n\r\nEquipe : Clément Champetier, Xochitl Florimont, Aurélien Greffard, Elisa Prana et Arthur Tourneret', 'ButtleOFX est un logiciel de compositing OpenSource.', '2013-05-01 22:00:00', '', 'Fabien Castan', '', 'buttle-ofx-2013', 'buttle (1).jpg', 'vimeo', '65510614', '', '', '', '', ''),
(81, NULL, 'Zombibli', 'Zombibli est un jeu de tir stylisé arcade, créé à l''occasion de l''inauguration de la bibliothèque George Perec à l''Université Paris-Est Marne-La-Vallée, ayant pour but de sensibiliser les étudiants aux règles de bonne conduite. Le but est de maintenir l''ordre au sein de la bibliothèque malgré une invasion de zombies.\r\n\r\nEquipe : Alexandre Ghozzi, Antoine Gibier, Florent Fouchier et Hugo Zaversnik', 'Zombibli est un jeu de tir stylisé arcade, créé à l''occasion de l''inauguration de la bibliothèque George Perec', '2013-05-01 22:00:00', '', 'Christine Costeceque et Vincent Nozick', '', 'zombibli', 'zombi.jpg', 'vimeo', '65933894', '', '', '', '', ''),
(82, NULL, 'Vulgarisation Scientifique', 'Ce projet de vulgarisation scientifique a pour but de rendre accessible par le grand public des sujets de recherche à travers de courtes animations.', 'Rendre accessible par le grand public des sujets de recherche', '2013-05-01 22:00:00', '', 'Vincent Nozick', '', 'vulgarisation-scientifique', 'vulgar.jpg', 'vimeo', '65569359', '', '', '', '', ''),
(83, NULL, 'PlantS', 'PlantS est une application destinée à la modélisation 3D de modèles de plantes et d''arbres. Elle a pour but de permettre à des chercheurs ayant imaginé des algorithmes et des grammaires de plantes de visualiser graphiquement le rendu de leurs modèles. Les modèles de plantes/d''arbres sont lus à partir de fichiers XML et leur rendu est effectué en openGL.', 'Application destinée à la modélisation 3D de modèles de plantes et d''arbres.', '2013-05-01 22:00:00', '', 'Dominique REVUZ et Venceslas BIRI', '', 'plants', 'plants.jpg', 'vimeo', '66468678', '', '', '', '', ''),
(84, NULL, 'Com IMAC 2011', 'Comme chaque année, l''enjeu de la cellule com''IMAC est de promouvoir l''école d''ingénieur IMAC, et ce à travers divers support tels que l''audiovisuel, le web, le print ou encore lors d''événements. Cette année, notre objectif principal était de faire connaître l''école sur Internet. Nous avons donc amélioré le site de l''école et fait un gros travail de promotion de celle-ci sur de nombreux forums, sites internet et médias sociaux. Mais nous avons également réalisé une nouvelle plaquette destinée aux étudiants, retravaillé la plaquette destinée aux entreprises, participé à de nombreux événements (salons, portes ouvertes, journées des métiers du web, cordées de la réussite). Enfin, nous avons produit un spot vidéo de présentation de l''école que vous pouvez découvrir ci-dessous.\r\n\r\nEquipe : Aurélie Fruitière, Arthur Muchir, Lucas Schrike, Thomas Sebire et Marlène Vieillescazes', 'L''enjeu de la cellule com''IMAC est de promouvoir l''école d''ingénieur IMAC', '2011-05-01 22:00:00', '', '', '', 'com-imac-2011', 'com.jpg', 'dailymotion', 'xh8zfk_hands-presentation-de-l-ecole-d-ingenieurs-imac_school', '', '', '', '', ''),
(85, NULL, 'Capture La MAC', 'Capture la MAC est un projet d’application sur tablette développé pour la Maison des Arts et de la Culture de Créteil.\r\nLa MAC est un établissement culturel prestigieux d''Île-de-France, disposant d’une salle de spectacle de plus de 1200 places, soit la plus grande de la région. Elle organise depuis plus de 20 ans le festival EXIT, consacré aux art numériques et vecteur d’une rencontre entre l’art et les nouvelles technologies.\r\nLe projet a pour objectif d’apporter un support numérique ludique aux classes d’enfants en visite sur place, qui souhaitent découvrir les parties cachées du grand théâtre. Il fait appel à la fois à des techniques de localisation en intérieur et de vidéo 360°, et cherche ainsi à créer un lien fort entre espaces virtuels et tangibles.', ' Capture la MAC est une application iPad. C’est une visite augmentée et ludique de la salle de spectacle de la Maison des Arts et de la Culture de Créteil.', '2016-05-15 16:16:49', '', 'Gaëtan Robillard', '', 'capture-la-mac', 'logo.png', 'vimeo', '166359087', '', '', '', 'Capture La MAC is a tablet application project, developped for the “Maison des Arts et de la Culture” of Creteil, France.\r\nThis place is a prestigious cultural center in the region of Paris, with a 1200+ places theatre, the biggest in the region. The center has been organizing the EXIT festival for over 20 years, dedicated to media arts and blending both art and new technologies.\r\nThe project aims to provide a digital and playful support for children visiting the Center, who are looking for hidden part of the big Theatre. It features an indoor positionning system and 360° videos, so as to create a strong link between virtual and physical worlds.', 'Capture la Mac is an iPad application. It is an augmented and playful tour of the Art and Culture Center of Creteil theatre.'),
(86, NULL, 'La Noctambule', '<p> Nous sommes partis d’un énoncé simple : filmer un conte moderne. \r\nLe premier choix que nous avons fait est donc celui de ne pas reprendre un conte déjà existant pour le transposer dans le monde actuel, mais plutôt de s’inspirer de tous ceux que nous connaissons et d’étudier la structure narrative du conte pour en créer un. Ainsi, les enjeux moraux ont été redéfinis pour prétendre à une lecture moderne d’un schéma traditionnel. </p>\r\n<p>Le petit chaperon rouge, Barbe Bleue, Hansel et Grethel, Le vilain petit canard, Boucle d’or, Le petit poucet, autant d’histoires que tout un chacun connaît et qui partagent de nombreux point communs. Nous nous sommes donc intéressés aux différents éléments du conte :\r\nAtemporalité et symboles, Personnages-types, Structure narrative et le Sujet </p>\r\n\r\nSynopsis:\r\n<p>Alpha, jeune femme solitaire et perdue est un soir approchée par Bêta, un jeune homme qui lui propose d’intégrer l’Organisation, groupuscule qui détient pouvoir et reconnaissance sociale. Elle devra alors choisir de tenir ses convictions morales ou d’accomplir les différentes tâches qui lui seront demandées lors d’un parcours initiatique dans la nuit. </p>\r\n', 'Notre projet tuteuré consiste en la réalisation d’un court métrage reprenant les codes et la structure narrative du conte.', '2016-05-12 22:00:00', '', 'Stéphane TroisCarrés', '', 'la-noctambule', 'noctambule260.png', 'vimeo', '166197875', '', '', 'https://vimeo.com/157456177', '<p>We started with a simple statement : to shoot a modern tale. We decided not to work on an existing story and bring it into the modern world, but rather to get inspiration from all those we know and study the narrative structure of the tale to create one of our own. \r\nThus, the moral issues were redefined to claim a modern interpretation of a traditional pattern.</p>\r\n<p>Little Red Riding Hood, Bluebeard, Hansel and Gretel , The Ugly Duckling , Goldilocks , Tom Thumb , many stories that everyone knows and share many common points . We were therefore interested in the various elements of the tale : Timelessness and symbols, Characters, Narrative structure and of course the Subject.</p>\r\n\r\nSynopsis:\r\n<p>Alpha, a young  solitary and lost woman is approched by Bêta, a man who offers her to join the Organization, a small group wich possesses power and social recognition.  She will have to choose between holding her moral convictions or accomplishing different tasks that she will have to fufil during an initiatory journey in the night. </p>\r\n', 'Our supervised project is the creation of a short film following the codes and the narrative structure of the tale.'),
(87, NULL, 'ShuttleOFX 2016', 'ShuttleOFX est une plateforme web permettant le partage de plugins de traitement d''image entre développeurs, graphistes et chercheurs. \r\nLes plugins sont codés au format OpenFX, un standard libre pour des plugins de traitement d’image.\r\nCette application permet notamment aux utilisateurs de mettre en ligne un plugin (voire de le creer directement sur la plateforme), de lire sa documentation, mais également de le tester avant de le telecharger.', 'Plateforme web de partage plugins OpenFX', '2016-05-12 22:00:00', '', 'Fabien Castan', '', 'shuttleofx-2016', 'ShuttleOFX.png', 'youtube', 'TdTZ0LIvo2o', 'https://github.com/shuttleofx/ShuttleOFX', 'http://www.shuttleofx.org/', '', 'ShuttleOFX is a web plateform allowing to share image processing plugins between devellopers, graphists and researchers.\r\nThe plugins are coded in the OpenFX format, a free standard for image processing plugins.\r\nThis application allows for instance to upload a plugin (if note creating it directly on the plateform), to read it''s documentation and also to test it before downloading it.', 'Web platform for sharing OpenFX plugins'),
(88, NULL, 'Webimac – Site de l’Imac', 'Le projet tuteuré Webimac vous permet de naviguer désormais sur un site tout neuf et optimisé pour présenter la formation IMAC.\r\n \r\nNous devions concevoir le design d’interface et réaliser son intégration. Pour assurer la pérennité du site, une partie administrative simple d’utilisation devait être incluse au projet.\r\n \r\nLa communauté des IMAC nous a grandement aidés pour la création des contenus (paroles d’anciens et des étudiants partis à l’étranger, traduction du site, shooting photo).\r\n \r\nNous avons ainsi pu travailler avec de nombreux interlocuteurs  dans une démarche centrée sur l’utilisateur, découvrir une nouvelle technologie, Laravel, acquérir de nouvelles méthodes de travail et comprendre les enjeux d’un site corporate.\r\n', 'Refonte Globale du site web de l’IMAC', '2016-05-12 22:00:00', '', 'Julie Pronzac <br/> Valentin Bourgoin </br>Vincent Nozick', '', 'webimac-site-de-l-imac', 'imageWebimac.jpg', 'vimeo', '166342560', 'https://github.com/Ingenieur-Imac/Webimac', '', '', 'Webimac tutored project allows you to navigate on a new and optimized website which presents IMAC training.\r\nWe redesigned and coded new interfaces. This website is powered by Laravel.\r\nIMAC''s community helped us to create contents (former’s words, photo shooting, translation…)\r\nWe worked with many interlocutors with a uses-center', 'Global redesign of IMAC website'),
(89, NULL, 'Utaupia', 'Utaupia est un site Internet ayant pour but de cataloguer et caractériser des banques vocales de voix synthétisées associées à des personnages, les Utauloids, qui servent à créer la voix chantée d''un morceau de musique. \r\nUtaupia a pour vocation de devenir la référence sur la recherche de banques vocales pour le logiciel UTAU, grâce à un système de caractérisation par mots-clés et une base de données conséquente.', 'Utaupia est un site Internet ayant pour but de cataloguer et caractériser des Utauloids, voix synthétisées associées à des personnages.', '2016-05-24 22:00:00', '', 'Sylvain Zorninger', '', 'utaupia', 'utauloid.png', 'vimeo', '', '', '', '', 'Utaupia is a website that aims to catalog and describe vocal sound banks of synthesized voices, associated with characters called Utauloids, that are used to create voices for songs.\r\nUtaupia hopes to become the reference on Utauloid sound bank search for the software UTAU, thanks to a keyword-based characterisation system and a important knowledge database.', 'Utaupia is a website that aims to catalog and describe Utauloids, synthesized voices associated with characters.'),
(90, NULL, 'BeC3', 'BeC3 est une plateforme pour le développement rapide d’application pour l’Internet des Objets développée au sein de l’université Paris-Est Marne-La- Vallée. Elle permet de faire interagir des objets virtuels (du cloud, ou des services comme twitter par exemple), des téléphones Android et iOS, quelques fonctionnalités sur des ordinateurs (panneau de contrôle interactif, synthèse de voix), et des objets spécialisés (bouton électriques, prise électriques, capteurs de mouvement, ouverture de portes). Le projet est un challenge de communication qui consiste à proposer et réaliser une installation originale dans ses usages et à communiquer dessus pour toucher un maximum de public.', 'BeC3 est une plateforme pour le développement rapide d’application pour l’Internet des Objets.', '2016-06-29 12:39:28', '', 'Sylvain Cherrier', '', 'bec3', 'bec3.png', 'vimeo', '166273237', 'https://github.com/PierreChls/BeC3-lib', 'https://bec3.com/', '', 'BeC3 is a platform for rapid application development for the Internet of Things developed in the Paris-Est Marne-La-Vallée university. It allows to interact virtual objects (from cloud, or services like twitter for example), Android and iOS phones, some features on computers (interactive control panel, voice synthesis), and special objects (electric buttons, electric outlet, motion sensors, door opening). The project is a communication challenge which consists to imagine and release an original installation by its uses and to communicate on it to reach a maximum audience.', ' BeC3 is a platform for rapid application development for the Internet of Things.'),
(91, NULL, 'Comm''IMAC', 'L''équipe communication de l''IMAC est chargée des réalisations graphiques et audiovisuelles de l''école. Elle gère également les réseaux sociaux (Facebook, Twitter, Vimeo, Gmail) de la formation. Ainsi que l''organisation des événements tels que les journées portes ouvertes et celles des projets tuteurés.', ' La Comm''IMAC est la cellule communication de la formation d''ingénieur IMAC.', '2016-06-28 22:00:00', '', 'Venceslas Biri', '', 'comm-imac', 'visuel_comm_260_150.png', 'vimeo', '166360509', '', '', '', 'The communication team works on graphic and audiovisual realizations to promote the school. We also manage IMAC''s social networks (Facebook, Twitter, Vimeo, Gmail). Moreover, the unit is in charge of events like open day and the presentation project day. ', 'Comm''IMAC is the communication unit of the engineering school IMAC.'),
(92, NULL, 'Paris Clap', 'Paris Clap est une application web qui vous propose la découverte de la capitale sous la thématique des films qui y ont été tournés. Il s''agit d''une application visant à simplifier la visite des lieux de tournages à Paris. Son utilisation principale est une carte interactive basée sur l''API Google Maps. Sur cette carte, on retrouve des marqueurs (de différentes couleurs en fonction du genre des films) qui localisent les lieux de tournage et grâce à l’option de géolocalisation l’internaute peut se rendre à l’endroit qui lui plaît très facilement. La carte dispose d’options de filtrage et de recherche pour pouvoir trouver le plus rapidement possible le film qui intéresse. L’application propose également des balades thématiques (ex: la nouvelle vague) pour les plus cinéphiles qui souhaiteraient redécouvrir Paris d''une manière originale. \r\n', 'Paris Clap est une application web mobile qui permet de découvrir Paris par les lieux de tournages de films.', '2016-06-29 09:03:09', '', 'Vincent Nozick <br/> Tewfik Ettayeb', '', 'paris-clap', 'parisclaplogo-02.jpg', 'youtube', 'umS1t7TMeMo', '', 'http://parisclap.ingenieur-imac.fr/', '', 'Paris Clap is a web application which enables you to discover Paris under the theme of the movies that were shot in its streets. It is an application aiming at simplifying the visit of those particular places. It’s main usage is an interactive map based on the Google Maps API. On the map we can see markers (with different colors depending on the genres of the movies) which are used to locate the shooting places and, thanks to the geolocalisation option, the internaute can easely be guided to the location he likes. The map displays searching and  filtering options allowing you to find any movie quickly. The application also offers thematic walks (ex: the “nouvelle vague”) for the most filmgoing persons who would like to rediscover Paris in an original way.\r\n', 'Paris Clap is a mobile web application. You can discover Paris and visit shooting movies places.'),
(93, NULL, 'A Firefly’s Journey', 'Hervé : A Firefly’s Journey est une expérience contemplative pensée et conçue pour l’Oculus Rift. Incarnez une luciole qui se promène librement dans un univers varié, original et plein de surprises. Laissez vous porter par cet univers onirique lors d’une balade sonore et visuelle.', 'Hervé : A Firefly’s Journey est une expérience contemplative pensée et conçue pour l’Oculus Rift.', '2016-06-28 22:00:00', '', 'Vincent Nozick', '', 'a-firefly-s-journey', 'title_comm.png', 'vimeo', '166483911', 'https://github.com/yohanlb/Firefly', 'http://afireflysjourney.com/', '', 'Hervé : A Firefly’s Journey is a contemplative experience developed and designed for the Oculus Rift. Fly like a firefly and take a walk in a wonderful and original world full of surprises. Be immersed in a dreamlike universe, and take yourself to this one-of-a-kind stroll.\r\n', 'Hervé : A Firefly’s Journey is a contemplative experience developed and designed for the Oculus Rift.');

-- --------------------------------------------------------

--
-- Table structure for table `project_students`
--

CREATE TABLE IF NOT EXISTS `project_students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned NOT NULL,
  `student_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=89 ;

--
-- Dumping data for table `project_students`
--

INSERT INTO `project_students` (`id`, `project_id`, `student_id`) VALUES
(2, 1, 62),
(3, 1, 48),
(4, 1, 44),
(9, 3, 74),
(10, 3, 79),
(11, 4, 63),
(12, 3, 73),
(13, 3, 54),
(14, 4, 71),
(15, 4, 70),
(16, 4, 42),
(17, 6, 52),
(18, 6, 61),
(19, 6, 76),
(20, 6, 45),
(21, 14, 43),
(22, 14, 48),
(23, 14, 55),
(24, 14, 54),
(25, 14, 76),
(26, 14, 75),
(27, 14, 51),
(28, 15, 49),
(29, 15, 78),
(30, 16, 47),
(31, 16, 68),
(32, 17, 51),
(33, 17, 75),
(34, 17, 66),
(35, 17, 57),
(36, 17, 60),
(37, 17, 56),
(38, 19, 67),
(39, 19, 50),
(40, 20, 55),
(41, 20, 72),
(42, 21, 46),
(43, 21, 64),
(44, 21, 80),
(46, 23, 59),
(47, 23, 65),
(48, 23, 43),
(49, 23, 77),
(50, 23, 104),
(51, 85, 83),
(52, 85, 92),
(53, 85, 109),
(54, 85, 120),
(55, 85, 124),
(56, 86, 98),
(57, 86, 125),
(58, 86, 99),
(59, 86, 89),
(60, 87, 81),
(61, 87, 96),
(62, 87, 116),
(63, 87, 100),
(64, 88, 122),
(65, 88, 119),
(66, 88, 123),
(67, 88, 101),
(68, 90, 113),
(69, 90, 88),
(70, 90, 106),
(72, 91, 102),
(73, 91, 97),
(74, 91, 108),
(75, 91, 112),
(76, 91, 121),
(77, 92, 85),
(78, 92, 87),
(79, 92, 114),
(80, 93, 86),
(81, 93, 90),
(82, 93, 107),
(83, 93, 111),
(84, 93, 118),
(85, 93, 115),
(86, 89, 93),
(87, 89, 126),
(88, 89, 95);

-- --------------------------------------------------------

--
-- Table structure for table `project_tags`
--

CREATE TABLE IF NOT EXISTS `project_tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=248 ;

--
-- Dumping data for table `project_tags`
--

INSERT INTO `project_tags` (`id`, `project_id`, `tag_id`) VALUES
(2, 23, 2),
(3, 23, 0),
(4, 1, 1),
(5, 1, 2),
(6, 3, 1),
(7, 1, 5),
(8, 2, 1),
(9, 2, 7),
(10, 3, 5),
(11, 4, 6),
(12, 4, 4),
(13, 5, 1),
(14, 5, 5),
(15, 5, 4),
(16, 6, 4),
(17, 6, 2),
(18, 7, 2),
(19, 7, 1),
(20, 7, 4),
(21, 6, 1),
(22, 8, 4),
(23, 8, 1),
(24, 8, 2),
(25, 9, 4),
(26, 9, 1),
(27, 9, 7),
(29, 10, 1),
(31, 10, 4),
(32, 12, 4),
(33, 12, 1),
(34, 13, 4),
(35, 13, 1),
(37, 15, 4),
(38, 15, 2),
(39, 16, 4),
(40, 17, 4),
(41, 18, 6),
(42, 17, 8),
(43, 14, 6),
(44, 19, 4),
(45, 19, 5),
(46, 5, 3),
(47, 10, 6),
(48, 20, 4),
(49, 20, 3),
(50, 21, 4),
(51, 21, 6),
(52, 22, 4),
(53, 22, 8),
(54, 23, 5),
(55, 23, 4),
(56, 24, 4),
(58, 25, 6),
(59, 25, 4),
(60, 26, 4),
(61, 26, 8),
(62, 27, 3),
(63, 27, 4),
(64, 27, 6),
(65, 28, 4),
(66, 28, 6),
(67, 29, 3),
(68, 29, 4),
(69, 30, 6),
(70, 30, 4),
(71, 67, 4),
(72, 67, 6),
(73, 68, 4),
(74, 68, 6),
(75, 72, 4),
(76, 72, 6),
(77, 71, 6),
(78, 71, 5),
(79, 71, 4),
(80, 73, 4),
(82, 73, 6),
(83, 74, 4),
(84, 74, 3),
(85, 75, 4),
(86, 75, 6),
(87, 76, 4),
(89, 76, 8),
(90, 76, 3),
(91, 77, 4),
(92, 77, 6),
(93, 78, 8),
(94, 78, 2),
(95, 78, 4),
(96, 79, 3),
(97, 79, 4),
(98, 79, 6),
(99, 48, 8),
(100, 48, 6),
(101, 48, 4),
(102, 57, 2),
(103, 57, 6),
(104, 57, 4),
(105, 57, 3),
(107, 56, 5),
(108, 55, 2),
(109, 55, 4),
(110, 55, 5),
(111, 54, 5),
(112, 54, 6),
(113, 54, 4),
(114, 54, 3),
(115, 53, 4),
(116, 53, 8),
(117, 53, 3),
(118, 53, 5),
(119, 53, 6),
(120, 52, 3),
(121, 52, 8),
(122, 52, 4),
(123, 49, 4),
(124, 49, 8),
(125, 49, 3),
(127, 31, 5),
(128, 32, 5),
(130, 33, 5),
(131, 33, 7),
(132, 34, 3),
(133, 35, 6),
(134, 36, 6),
(136, 37, 3),
(137, 38, 6),
(138, 39, 6),
(139, 40, 5),
(140, 41, 5),
(141, 42, 5),
(142, 42, 6),
(144, 43, 2),
(145, 44, 2),
(146, 44, 8),
(147, 45, 5),
(148, 46, 5),
(149, 47, 5),
(150, 47, 7),
(151, 58, 3),
(152, 58, 4),
(154, 60, 5),
(155, 60, 8),
(156, 62, 5),
(157, 62, 3),
(158, 62, 4),
(159, 63, 5),
(160, 63, 4),
(161, 64, 5),
(162, 2, 9),
(163, 9, 9),
(164, 2, 10),
(165, 3, 10),
(166, 3, 6),
(167, 4, 10),
(168, 5, 10),
(169, 9, 10),
(170, 18, 4),
(171, 13, 10),
(172, 13, 6),
(173, 16, 8),
(174, 19, 10),
(175, 24, 10),
(176, 25, 10),
(177, 27, 10),
(178, 28, 10),
(179, 30, 2),
(180, 31, 10),
(181, 31, 4),
(182, 32, 10),
(183, 33, 10),
(184, 33, 1),
(185, 40, 10),
(186, 41, 10),
(187, 42, 10),
(188, 42, 9),
(189, 45, 10),
(190, 45, 9),
(191, 46, 9),
(192, 46, 10),
(193, 47, 10),
(196, 56, 4),
(197, 56, 10),
(199, 60, 10),
(200, 61, 8),
(201, 61, 4),
(202, 61, 3),
(203, 64, 6),
(204, 63, 10),
(205, 68, 10),
(206, 68, 8),
(207, 71, 10),
(208, 73, 10),
(209, 75, 10),
(210, 77, 10),
(212, 79, 9),
(213, 80, 10),
(214, 80, 4),
(215, 83, 10),
(216, 82, 10),
(217, 81, 9),
(218, 81, 10),
(219, 84, 4),
(220, 84, 8),
(221, 85, 4),
(222, 85, 3),
(223, 85, 6),
(224, 86, 3),
(225, 86, 4),
(226, 87, 4),
(227, 87, 2),
(228, 87, 10),
(229, 88, 2),
(230, 88, 4),
(231, 88, 8),
(232, 90, 2),
(233, 90, 6),
(234, 90, 8),
(235, 90, 4),
(236, 91, 3),
(237, 91, 8),
(239, 92, 2),
(240, 92, 8),
(241, 92, 6),
(242, 92, 4),
(243, 93, 1),
(244, 93, 4),
(245, 93, 9),
(246, 89, 2),
(247, 89, 4);

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

INSERT INTO `promos` (`id`, `year`, `url_image`) VALUES
(1, 2017, 'imac2017.jpg'),
(2, 2016, 'imac2016.JPG'),
(3, 2015, 'imac2015.jpg'),
(4, 2014, 'imac2014.jpg'),
(5, 2013, 'imac2013.jpg'),
(6, 2012, 'imac2012.jpg'),
(7, 2011, 'imac2011.jpg'),
(8, 2010, 'imac2010.jpg'),
(9, 2009, 'imac2009.jpg'),
(10, 2008, 'imac2008.png'),
(11, 2007, 'imac2007.jpg'),
(12, 2018, 'promo_imac2018.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `main` tinyint(1) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `web_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `main`, `name`, `surname`, `role`, `description`, `mail`, `web_link`, `url_image`, `order`) VALUES
(1, 1, 'Nozick', 'Vincent', 'Responsable de la deuxième année', 'Maitre de conférences à l’université Paris-Est Marne-la-Vallée. Il s’est spécialisé en vision par ordinateur, en traitement d’images ainsi qu’en réalité virtuelle.', 'https://fr.linkedin.com/in/vincent-nozick-8030132/fr', 'http://www-igm.univ-mlv.fr/~vnozick/', 'Nozick.jpg', 1),
(2, 1, 'Biri', 'Venceslas', 'Directeur', 'Professeur d''informatique à l''université Paris-Est Marne-la-Vallée, Vice Président Enseignement et Innovation Pédagogique, et responsable du Master Science de l’image. Il est spécialisé en informatique graphique, en synthèse d''images 3D et en réalité virt', 'http://fr.linkedin.com/in/VenceslasBiri', 'http://igm.univ-mlv.fr/~biri/', 'Biri.jpg', 2),
(3, 1, 'Robillard', 'Gaetan', '', 'Professeur en communication visuelle et en arts à la Fonderie de l’Image et à École européenne supérieure d''art de Bretagne. Il est spécialisé en arts visuels et en réalisation 3D. Il est aussi artiste et a créé son propre studio d’animation, Tabouret stu', '', '', 'Robillard.jpg', 0),
(4, 0, 'Trois Carrés', 'Stéphane', '', 'Artiste et enseignant à l''école Supérieure d''art et de Design Le Havre Rouen', '', 'http://www.troiscarres.com', 'TroisCarres.jpg', NULL),
(5, 0, 'Cherrier', 'Sylvain', '', 'Internet des objets', 'https://fr.linkedin.com/in/sylvain-cherrier-59a03075', '', 'Cherrier.jpg', NULL),
(6, 0, 'Verger', 'Emilie', '', 'Historienne d’art spécialisée en art du XXe siècle et en médiation culturelle', 'https://fr.linkedin.com/in/emilie-verger-47347267', '', 'emilie_verger.jpg', NULL),
(7, 0, 'Moreau', 'Matthieu', '', 'Directeur de projet / ergonome web. ', 'https://fr.linkedin.com/in/matthieu-moreau-34064538', 'http://www.netemedia.fr', 'Matthieu_Moreau.jpg', NULL),
(8, 0, 'Sulak', 'Özlem', '', 'Cinema, Visual Arts, Editing', '', '', 'Ozlem.jpg', NULL),
(10, 0, 'Donard', 'Sylvie', 'Directrice des études ', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `promo` int(10) unsigned NOT NULL,
  `url_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `url_web` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_linkedin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=216 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `surname`, `promo`, `url_image`, `url_web`, `url_linkedin`) VALUES
(1, 'bacon', 'valentin', 12, 'avatar.png', '', ''),
(2, 'bar', 'vanessa', 12, 'vanessa.jpg', 'http://vportfolio.craym.eu/', 'https://fr.linkedin.com/in/vanessa-bar-85010092'),
(4, 'Bazire', 'Julien', 12, 'bazire_julien.jpg', 'http://julienbazire.com/', ''),
(5, 'bessol', 'matthieu', 12, 'matthieur bessol.jpg', 'http://www.matthieubessol.com/', 'https://www.linkedin.com/in/matthieubessol'),
(6, 'burlet', 'irène', 12, 'avatar.png', '', ''),
(7, 'busquet', 'noemie', 12, 'avatar.png', '', ''),
(8, 'couavoux', 'lisa', 12, 'avatar.png', '', ''),
(9, 'crespin--pommier', 'mael', 12, 'avatar.png', '', ''),
(11, 'Dechomet', 'Corentin', 12, 'corentin dechomet.jpg', 'http://www.corentindechomet.fr/', 'www.linkedin.com/in/corentindechomet'),
(12, 'delannoy', 'vincent', 12, 'vincent delannoy.png', '', 'https://fr.linkedin.com/in/vincent-delannoy-442100b5'),
(13, 'demiere', 'antoine', 12, 'avatar.png', '', ''),
(14, 'ducoux', 'arthur', 12, 'avatar.png', '', ''),
(15, 'Dussouchaud', 'Lucas', 12, 'dussouchaud_lucas.jpg', 'http://noisiv.fr/#/', ''),
(16, 'ferre', 'quentin', 12, 'avatar.png', '', ''),
(18, 'goldbaum', 'coralie', 12, 'coralie.jpg', 'http://www.coraliegoldbaum.fr/', 'https://fr.linkedin.com/in/coralie-goldbaum-0a596687'),
(20, 'Haddad', 'Joya', 12, 'joya.jpg', 'http://www.joyaghaddad.com/', 'https://www.linkedin.com/in/joyahaddad'),
(22, 'Lapeyre', 'anfray', 12, 'anfray.jpg', 'http://www.anfraylapeyre.com', 'https://fr.linkedin.com/in/anfray-lapeyre-53353295'),
(23, 'Lecoq', 'Yoan', 12, 'yoan lecoq.jpg', 'http://www.yoanlecoq.com/', ''),
(24, 'leuret', 'antonin', 12, 'antonin.jpg', '', 'https://fr.linkedin.com/in/antonin-leuret-91171aba'),
(25, 'manach', 'owen', 12, 'avatar.png', '', ''),
(26, 'Mersch', 'Mélodie', 12, 'melodie.jpg', '', ''),
(27, 'olivier', 'baptiste', 12, 'avatar.png', '', ''),
(28, 'paque', 'melanie', 12, 'avatar.png', '', ''),
(29, 'prigent', 'marion', 12, 'avatar.png', '', ''),
(30, 'puech', 'julie', 12, 'julie.jpg', '', 'https://fr.linkedin.com/in/julie-puech-723242118'),
(32, 'Reho', 'Alexandre', 12, 'reho.jpg', 'http://www.aleqsandr.fr/', 'https://www.linkedin.com/in/alexandre-reho-49b243112'),
(33, 'respaud-bouny-stout', 'henri', 12, 'avatar.png', '', ''),
(34, 'ritoux', 'elise', 12, 'avatar.png', '', ''),
(35, 'roche', 'maureen', 12, 'maureen.JPG', 'http://www.maureenroche.fr', 'https://fr.linkedin.com/in/maureen-roche-5086a589'),
(36, 'roussel', 'heloise', 12, 'avatar.png', '', ''),
(37, 'salton', 'sophie', 12, 'sophie.jpg', 'http://sophie-salton.com/', 'https://fr.linkedin.com/in/sophie-salton-155b01b4'),
(38, 'vien', 'caroline', 12, 'caroline.jpg', 'http://www.carolinevien.com/', 'https://fr.linkedin.com/in/carolinevien'),
(39, 'vila', 'marion', 12, 'marion.jpg', 'http://vila-marion.fr/', ''),
(40, 'vincent', 'steeve', 12, 'steeve.jpg', '', ''),
(41, 'Vivier', 'Pauline', 12, 'pauline.jpg', '', 'https://fr.linkedin.com/in/pauline-vivier-6b8943122'),
(42, 'audebert', 'marion', 2, 'Marion_Audebert.jpg', '', 'https://fr.linkedin.com/in/marionaudebert'),
(43, 'bastide', 'jordi', 2, 'jordi_Bastide.jpg', 'http://jordi-bastide.com/', 'https://fr.linkedin.com/in/jordibastide'),
(44, 'belin', 'juliette', 2, 'Juliette_Belin.jpg', 'http://jbelin.com', 'https://www.linkedin.com/in/juliettebelin'),
(45, 'benoist', 'marie', 2, 'avatar.png', '', ''),
(46, 'berthe', 'gwen', 2, 'avatar.png', '', ''),
(47, 'biechy', 'dorothee', 2, 'avatar.png', '', ''),
(48, 'Biteau', 'armand', 2, 'Armand_Biteau.jpg', 'http://www.armandbiteau.com', 'https://fr.linkedin.com/in/armandbiteau'),
(49, 'bocognano', 'pauline', 2, 'avatar.png', '', ''),
(50, 'bommart', 'quentin', 2, 'Quentin_Bommart.jpg', 'http://kouglov.deviantart.com/', 'https://fr.linkedin.com/in/quentin-bommart-36b173105'),
(51, 'bourron', 'baptiste', 2, 'Baptiste_Bourron.jpg', 'http://baptistebourron.alwaysdata.net/', ''),
(52, 'bresson ', 'mathieu', 2, 'avatar.png', '', ''),
(53, 'cardinet', 'emeline', 2, 'avatar.png', '', ''),
(54, 'carpentier', 'thibaud', 2, 'Thibaud_Carpentier.jpg', 'http://thibaudcarpentier.com', 'https://fr.linkedin.com/in/thibaud-carpentier-318a3393'),
(55, 'cassard-boisgallais', 'pauline', 2, 'avatar.png', '', ''),
(56, 'de almeida', 'jordan', 2, 'avatar.png', '', ''),
(57, 'denis', 'matthieu', 2, 'avatar.png', '', ''),
(58, 'dufraine', 'thomas', 2, 'avatar.png', '', ''),
(59, 'engel', 'maxime', 2, 'Maxime_Engel.jpeg', 'http://www.maxime-engel.fr/', 'https://fr.linkedin.com/in/maxime-engel-84414495'),
(60, 'fiorella', 'damien', 2, 'avatar.png', '', ''),
(61, 'francoise', 'lisa', 2, 'Lisa_Francoise.jpg', 'http://lisafrancoise.fr', 'https://fr.linkedin.com/in/lisa-françoise-272591113'),
(62, 'garrido y saez', 'hugo', 2, 'hufo_garrido.jpg', 'http://letsdovoodoo.com/', 'https://fr.linkedin.com/in/hugo-garrido-y-saez-b6869a71'),
(63, 'Gauthier', 'Marin', 2, 'marin.jpg', 'http://www.maringauthier.fr/', 'https://www.linkedin.com/in/maringauthier'),
(64, 'gerard', 'paul', 2, 'avatar.png', '', ''),
(65, 'gilbert', 'maxime', 2, 'Maxime_Gilbert.png', 'http://www.maximegilbert.fr/', 'https://se.linkedin.com/in/mxmgilbert'),
(66, 'Giraudier', 'Flore', 2, 'Flore_Girauder.jpg', 'http://floregiraudier.com/', ''),
(67, 'glineur', 'maximilien', 2, 'Maximilen_Glineur.jpg', 'http://www.maximilien-glineur.fr', 'https://www.linkedin.com/in/maximilien-glineur-16788553'),
(68, 'granmagnat', 'lauriane', 2, 'avatar.png', '', ''),
(69, 'griere', 'timothe', 2, 'Portrait1.jpg', 'http://timothegriere.fr/', 'https://www.linkedin.com/in/timothegriere'),
(70, 'grisi', 'manon', 2, 'Manon_Grisi.jpg', 'http://www.manongrisi.com/', 'https://www.linkedin.com/in/manongrisi'),
(71, 'Ho', 'Pascale', 2, 'Pascale_Ho.png', 'http://hisu.fr/', 'https://fr.linkedin.com/in/hphisu'),
(72, 'lasne', 'robin', 2, 'avatar.png', '', ''),
(73, 'lequertier', 'florian', 2, 'avatar.png', '', ''),
(74, 'mahfoudi', 'mehdi-antoine', 2, 'avatar.png', '', ''),
(75, 'masquelier', 'melissa', 2, 'avatar.png', '', ''),
(76, 'neichols', 'alice', 2, 'avatar.png', '', ''),
(77, 'oblet', 'alexis', 2, 'avatar.png', '', ''),
(78, 'pinbouen', 'andréas williams', 2, 'Andreas_Pinbouen.jpg', 'http://andreas-pinbouen.com/', 'https://fr.linkedin.com/in/andréas-pinbouen-95a11667'),
(79, 'schepens', 'clément', 2, 'Clement_Schepens.png', '', 'https://fr.linkedin.com/in/clément-schepens-50a25958'),
(80, 'tribouillois', 'denis', 2, 'Denis_Tribouillois.jpg', '', 'https://www.linkedin.com/in/denistribouillois'),
(81, 'Assante di capillo', 'Christophe', 1, '11347416_957978974233308_1774346482_o.jpg', 'http://christophe-assante.alwaysdata.net/', 'https://fr.linkedin.com/in/christophe-assante-971a01114'),
(82, 'Bancourt', 'rémi', 1, 'Rémi_B.jpg', 'http://www.remibancourt.fr', 'https://fr.linkedin.com/in/rémi-bancourt-157aa3106'),
(83, 'Belhaj', 'Dorian', 1, 'Dorian_Belhaj.jpg', 'http://www.dorian-belhaj.fr/', 'https://fr.linkedin.com/in/dorian-belhaj-36485965'),
(84, 'Bouhouili', 'asmae', 1, 'asmae_B.jpg', '', ''),
(85, 'burckel', 'mégane', 1, 'Megane_Burckel.jpg', 'http://meganeupload.fr', 'https://www.linkedin.com/in/mégane-burckel-a5862182?trk=nav_responsive_tab_profile'),
(86, 'carlier', 'maëlle', 1, 'Maelle_Carlier.jpg', 'http://maellecarlier.com', 'https://fr.linkedin.com/in/maëlle-carlier-35b78562'),
(87, 'Caseau', 'charlotte', 1, 'Charlotte_c.jpg', '', 'https://www.linkedin.com/in/charlottecaseau'),
(88, 'charles', 'pierre', 1, 'Pierre_Charles.jpg', 'http://www.pierre-charles.com/', 'https://fr.linkedin.com/in/pierrechls'),
(89, 'Chartier', 'louis', 1, 'louis_Chartier.jpg', 'http://www.louis-chartier.com/', 'https://fr.linkedin.com/in/louis-chartier-541717bb'),
(90, 'claisse', 'pierre', 1, 'Pierre_Claisse.jpg', 'http://www.pierreclaisse.com/', 'https://www.linkedin.com/in/pierreclaisse'),
(91, 'cogny', 'sophie', 1, 'Sophie_Cogny.jpg', 'http://www.doyoubuzz.com/sophie-cogny', 'https://www.linkedin.com/in/sophie-cogny-39905983'),
(92, 'compain', 'guilhem', 1, 'Guilhem_Compain.jpg', 'http://guilhemcompain.fr/', 'https://fr.linkedin.com/in/guilhem-compain-729b31113'),
(93, 'Costantini', 'théo', 1, 'théo.jpg', 'http://www.theocostantini.com/', 'https://fr.linkedin.com/in/theo-costantini-55b75b51'),
(94, 'Couillard', 'quentin', 1, 'Quentin_couillard.jpg', 'www.quentincouillard.com', 'https://fr.linkedin.com/in/quentin-couillard-121407b4'),
(95, 'da rocha', 'mélina', 1, 'Melina_Da_Rocha.jpg', '', 'https://fr.linkedin.com/in/mélina-da-rocha-51446291'),
(96, 'daire', 'olivier', 1, 'Oliver_Daire.jpg', 'http://www.olivierdaire.com/', 'https://www.linkedin.com/in/olivierdaire'),
(97, 'Darraud', 'Charlie', 1, 'Charlie_Darraud.jpg', 'https://www.charlie-darraud.com', 'https://fr.linkedin.com/in/charlie-darraud-b1b47265'),
(98, 'De lillo', 'Grégoire', 1, 'Gregoire_De_Lillo.jpg', 'http://www.gregoiredelillo.com/', 'https://www.linkedin.com/in/grégoire-de-lillo-239713112'),
(99, 'dehais', 'julia', 1, 'Julie_Dehais.jpg', 'http://juliadehais.tumblr.com/', 'https://www.linkedin.com/in/julia-dehais-82b55811a?authType=NAME_SEARCH&authToken=l2iF'),
(100, 'Falconnet', 'olivier', 1, 'oliver_F.jpg', '', 'https://fr.linkedin.com/in/olivier-falconnet-4a47a5b8'),
(101, 'Feller', 'alexander', 1, 'Alexander_Feller.jpg', 'http://www.marchanddesel.fr/', 'https://www.linkedin.com/in/alexanderfeller'),
(102, 'folletti', 'grégoire', 1, 'Gregoire_Folletti.jpg', '', ''),
(103, 'françois', 'romain', 1, 'Romain_Francois.jpg', 'http://romainfrancois.fr ', 'https://www.linkedin.com/in/romain-fran%C3%A7ois-07924685'),
(104, 'goyeneche', 'mathias', 1, 'avatar.png', '', ''),
(105, 'guittard', 'quentin', 1, 'Quentin_Guittard.jpg', 'http://quentinguittard.fr/', 'https://www.linkedin.com/in/quentin-guittard-43888994?trk=nav_responsive_tab_profile_pic'),
(106, 'Hernandez', 'jerome', 1, 'jerome_H.jpg', '', ''),
(107, 'horand', 'lucas', 1, 'Lucas_Horand.png', 'http://luhof.fr', 'https://www.linkedin.com/in/lucas-horand-2786246a'),
(108, 'Jestin', 'Alice', 1, 'aliceJestin.jpg', 'http://www.alicejestin.com', ''),
(109, 'jungers', 'robin', 1, 'Robin_Jungers.jpg', 'http://robinjungers.com/', 'https://fr.linkedin.com/in/robinjungers'),
(110, 'kaddouri', 'chamseddine', 1, 'chamse_Kaddouri.jpg', '', 'https://fr.linkedin.com/in/chamseddine-kaddouri-5137508a'),
(111, 'le breton', 'yohan', 1, 'Yohan_Le_Breton.jpg', 'http://yohanlebreton.fr/', 'https://fr.linkedin.com/in/yohanlb'),
(112, 'lemerle', 'faustine', 1, 'avatar.png', '', ''),
(113, 'Limoge', 'corentin', 1, 'corentin_limoge.jpg', 'http://corentin-limoge.fr/', ''),
(114, 'Maixent', 'Alice', 1, 'Alice_Maixent.jpg', 'http://www.alicemaixent.com/', 'https://www.linkedin.com/in/alice-maixent-42590410a'),
(115, 'Migot', 'bettina', 1, 'Bettina_M.jpg', '', 'https://www.linkedin.com/in/bettinamigot'),
(116, 'Milesi', 'lorenzo', 1, 'lorenzo-milesi.bmp', 'http://lorenzomilesi-portfolio.fr', '    https://fr.linkedin.com/in/lorenzomilesi'),
(117, 'mourot', 'valentin', 1, 'avatar.png', '', ''),
(118, 'noël', 'céline', 1, 'Celine_Noel.jpg', '', 'https://www.linkedin.com/in/céline-noël-6aa045bb'),
(119, 'Nortier', 'Charlotte', 1, 'Charlotte_Nortier.jpg', 'http://digitalkid.fr/', 'https://fr.linkedin.com/in/charlotte-nortier-20a61884'),
(120, 'quesnel', 'jérémie', 1, 'Jeremie_Quesnel.jpg', 'http://www.jeremiequesnel.fr/', 'https://fr.linkedin.com/in/jeremie-quesnel-376b4480'),
(121, 'Radjaya', 'nancy', 1, 'Nancy_Radjaya.jpg', 'http://www.nancy-radjaya.com', 'https://www.linkedin.com/in/nancyradjaya'),
(122, 'Rousset', 'Julien', 1, 'Julien_Rousset.jpg', 'http://julien-rousset.fr/', 'https://www.linkedin.com/in/julien-rousset-75a6a1b4'),
(123, 'Rozen sudry', 'Léa', 1, '01e8e18.png', 'http://www.lrozensudry.fr', 'https://fr.linkedin.com/in/léa-rozen-sudry-b9687466'),
(124, 'Tantot', 'Jules', 1, 'jules_tantot.jpg', '', ''),
(125, 'taoui', 'isa', 1, 'Isa_Taoui.jpg', 'https://isataoui.persona.co/', ''),
(126, 'viale', 'victor', 1, 'Victore_Viale.jpg', 'http://www.victorviale.com', 'https://fr.linkedin.com/in/victorviale'),
(127, 'monia arrada', '', 3, 'avatar.png', '', ''),
(128, 'marina avataneo', '', 3, 'avatar.png', '', ''),
(129, 'clara baudry', '', 3, 'avatar.png', '', ''),
(130, 'brice berthelot', '', 3, 'avatar.png', '', ''),
(131, 'nicolas bertrand', '', 3, 'avatar.png', '', ''),
(132, 'maxime blondeau', '', 3, 'avatar.png', '', ''),
(133, 'alexandre bordereau', '', 3, 'avatar.png', '', ''),
(134, 'alizee camarasa', '', 3, 'avatar.png', '', ''),
(135, 'mawuli cave', '', 3, 'avatar.png', '', ''),
(136, 'jean-noel chiganne', '', 3, 'avatar.png', '', ''),
(137, 'emilie coulombel', '', 3, 'avatar.png', '', ''),
(138, 'bruno cronert', '', 3, 'avatar.png', '', ''),
(139, 'lucie delaire', '', 3, 'avatar.png', '', ''),
(140, 'marine dos', '', 3, 'avatar.png', '', ''),
(141, 'jonathan douet', '', 3, 'avatar.png', '', ''),
(142, 'thibault fievet', '', 3, 'avatar.png', '', ''),
(143, 'jerome fillette', '', 3, 'avatar.png', '', ''),
(144, 'Florent françois', '', 3, 'avatar.png', '', ''),
(145, 'audrey guÃ‰nÃ‰e', '', 3, 'avatar.png', '', ''),
(146, 'gaetan guerrero', '', 3, 'avatar.png', '', ''),
(147, 'angeline guignard', '', 3, 'avatar.png', '', ''),
(148, 'anthony guiot', '', 3, 'avatar.png', '', ''),
(149, 'alexandre horiot', '', 3, 'avatar.png', '', ''),
(150, 'marie huertas', '', 3, 'avatar.png', '', ''),
(151, 'maxime kharlamoff', '', 3, 'avatar.png', '', ''),
(152, 'virginie lalande', '', 3, 'avatar.png', '', ''),
(153, 'laury landrau', '', 3, 'avatar.png', '', ''),
(154, 'sonia laurent', '', 3, 'avatar.png', '', ''),
(155, 'marion le corre', '', 3, 'avatar.png', '', ''),
(156, 'matthieu lefebvre', '', 3, 'avatar.png', '', ''),
(157, 'elena loyatho', '', 3, 'avatar.png', '', ''),
(158, 'adrien megueddem', '', 3, 'avatar.png', '', ''),
(159, 'thomas michaud', '', 3, 'avatar.png', '', ''),
(160, 'baptiste moizard', '', 3, 'avatar.png', '', ''),
(161, 'lionel mullot', '', 3, 'avatar.png', '', ''),
(162, 'laetitia nanni', '', 3, 'avatar.png', '', ''),
(163, 'julie po', '', 3, 'avatar.png', '', ''),
(164, 'cyril resseguier', '', 3, 'avatar.png', '', ''),
(165, 'laetitia riffaud', '', 3, 'avatar.png', '', ''),
(166, 'romain sanfilippo', '', 3, 'avatar.png', '', ''),
(167, 'André sochard', '', 3, 'avatar.png', '', ''),
(168, 'xavier vansteene', '', 3, 'avatar.png', '', ''),
(169, 'morgan villedieu', '', 3, 'avatar.png', '', ''),
(170, 'keven akyurek', '', 4, 'avatar.png', '', ''),
(171, 'damaris ankou', '', 4, 'avatar.png', '', ''),
(172, 'lauriane anthony', '', 4, 'avatar.png', '', ''),
(173, 'Aurélie Beauprez', '', 4, 'avatar.png', '', ''),
(174, 'cedric bidaud', '', 4, 'avatar.png', '', ''),
(175, 'regis broage', '', 4, 'avatar.png', '', ''),
(176, 'jonathan carly', '', 4, 'avatar.png', '', ''),
(177, 'tifaine caumont', '', 4, 'avatar.png', '', ''),
(178, 'clement champetier', '', 4, 'avatar.png', '', ''),
(179, 'julien creus', '', 4, 'avatar.png', '', ''),
(180, 'pierre criulanscy', '', 4, 'avatar.png', '', ''),
(181, 'jeremie defaye', '', 4, 'avatar.png', '', ''),
(182, 'thomas demenat', '', 4, 'avatar.png', '', ''),
(183, 'arnaud desfontaines', '', 4, 'avatar.png', '', ''),
(184, 'tom duchene', '', 4, 'avatar.png', '', ''),
(185, 'thibaut dumont', '', 4, 'avatar.png', '', ''),
(186, 'fany durand', '', 4, 'avatar.png', '', ''),
(187, 'xochitl florimont', '', 4, 'avatar.png', '', ''),
(188, 'florent fouchier', '', 4, 'avatar.png', '', ''),
(189, 'alexandre ghozzi', '', 4, 'avatar.png', '', ''),
(190, 'nicolas giannuzzi', '', 4, 'avatar.png', '', ''),
(191, 'antoine gibier', '', 4, 'avatar.png', '', ''),
(192, 'arnaud gicquello', '', 4, 'avatar.png', '', ''),
(193, 'juliette girin', '', 4, 'avatar.png', '', ''),
(194, 'aurelien greffard', '', 4, 'avatar.png', '', ''),
(195, 'hugo gresse', '', 4, 'avatar.png', '', ''),
(196, 'thais guigon', '', 4, 'avatar.png', '', ''),
(197, 'pierre guilloux', '', 4, 'avatar.png', '', ''),
(198, 'charlotte hochart', '', 4, 'avatar.png', '', ''),
(199, 'flora jullien', '', 4, 'avatar.png', '', ''),
(200, 'bastien laby', '', 4, 'avatar.png', '', ''),
(201, 'pierre-baptiste lallican', '', 4, 'avatar.png', '', ''),
(202, 'cecilia lejeune', '', 4, 'avatar.png', '', ''),
(203, 'flavien leygues', '', 4, 'avatar.png', '', ''),
(204, 'eric luong', '', 4, 'avatar.png', '', ''),
(205, 'corentin marc', '', 4, 'avatar.png', '', ''),
(206, 'nadia mazouz', '', 4, 'avatar.png', '', ''),
(207, 'elisa prana', '', 4, 'avatar.png', '', ''),
(208, 'julie pronzac', '', 4, 'avatar.png', '', ''),
(209, 'oceane rennesson', '', 4, 'avatar.png', '', ''),
(210, 'timothee riom', '', 4, 'avatar.png', '', ''),
(211, 'guillaume segado', '', 4, 'avatar.png', '', ''),
(212, 'jeremy ta', '', 4, 'avatar.png', '', ''),
(213, 'arthur tourneret', '', 4, 'avatar.png', '', ''),
(214, 'hugo zaversnik', '', 4, 'avatar.png', '', ''),
(215, 'L''Haridon', 'Mickaël', 12, 'avatar.png', '', '');

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
  `en_overview` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `student_exchange_testimonials`
--

INSERT INTO `student_exchange_testimonials` (`id`, `name`, `job`, `year`, `overview`, `url_image`, `en_overview`) VALUES
(1, 'Matthieu Bresson', 'Taiwan - National Tsing Hua University - Semestre d''Automne 2015', 2016, 'J''ai choisi Taïwan pour mon ultime semestre d''études à l''automne 2015, au sein de National Tsing Hua University. \r\nJe pourrais décrire les montagnes qui côtoient l''océan, les mille-et-un plats qui ravissent le palais, la richesse de cultures anciennes fondues dans une société moderne. Mais même les explications les plus éloquentes ne pourront pas rendre justice à ce que m''a apporté ce séjour là-bas. Quant à la barrière de la langue, elle s''est inclinée devant la gentillesse des habitants. \r\nPour moi, Taïwan est la perle de l''Asie.', 'matthieur_bresson.jpg', ''),
(2, 'Timothé Grière', 'Allemagne - Stuttgart Media University - Semestre d''Automne 2015', 0, 'Partir en Erasmus à Stuttgart était une expérience unique. La filière Audiovisual Media proposée par la Hochschule der Medien, permet de se spécialiser en audiovisuel, tout en s’immergeant dans le monde professionnel grâce à des moyens techniques avancés. Les promotions, composées d’étudiants internationaux, ajoutent un point de vue européen et international à la formation. Stuttgart est un bon compromis pour bénéficier des avantages d’un semestre à l’étranger, sans partir trop loin.', 'Portrait1.jpg', ''),
(3, 'Manon Grisi', 'Japon - Future University of Hakodate - Semestre d''Automne 2015', 0, 'Pour ma troisième année j’ai eu l’occasion de partir au Japon pendant 6 mois a Hakodate. J’ai ainsi pu travailler sur des projets originaux et innovant, mais j’ai également découvert une approche de travail différente de celle que je connaissais. Cette expérience m’a permis d’avoir un nouveau regard sur le monde numérique. J’ai d’ailleurs réalisé mon stage de fin d''études a Hiroshima. Culturellement aussi d’ailleurs, le Japon est un pays qui foisonne de choses a découvrir, goûter, tester… Une vraie expérience très enrichissante !', '12469522_10208177400929842_890586282176768866_o.jpg', ''),
(4, 'Marie Benoist', 'Suède - Malmo University - Semestre d''Automne 2015', 0, 'J’ai effectué mon dernier semestre d’études en Suède à l’Université de Malmö afin d’élargir mes domaines de compétences. En effet pour ma troisième année à l’IMAC j’ai décidé de partir à l’étranger avec pour but d’améliorer mon anglais mais aussi de découvrir une autre culture. Durant mes cinq mois dans cette petite ville nordique située à seulement 20 min en train de Copenhague j’ai eu la chance de suivre deux cours en anglais : “Designing for Wearables” et “Experimental Game Interactions”. Ces cours étaient extrêmement intéressants et le mode d’éducation à la Suédoise m’a beaucoup séduit (peu de cours théoriques et beaucoup de pratique). Cette expérience a sans doute été la meilleure de toute ma scolarité, j’ai considérablement augmenté mon niveau d’anglais mais j’ai surtout rencontré des gens des quatre coins du globe. C’était une expérience unique, dans un pays dépaysant où les gens sont accueillants et l’éducation exceptionnelle.', '13023473_10209900738021961_183563738_n.jpg', ''),
(5, 'Flore Giraudier', 'Espagne - Université Internationale de Catalogne - Semestre d''Automne 2015', 0, 'En troisième année à l’IMAC j’ai choisis de partir à l’étranger en ERASMUS à Barcelone. J’ai donc passé un semestre à l’Université Internationale de Catalogne (UIC), où j’ai suivi des cours de Publicité, Relations publiques, Audio-visuel et Communication, Langage publicitaire, Anglais professionnel, Design et Photographie.\r\n\r\nLes cours étaient en Anglais ou en Espagnol selon la matière, ce qui m’a permis d’acquérir une certaine aisance dans ces deux langues. Au quotidien, la vie en Espagne m’a beaucoup plus, au tel point que je suis restée à Barcelone pour réaliser mon stage de fin d’études.\r\n\r\nFinalement, je conseille à tous les étudiants de vivre une expérience d’au moins un semestre à l’étranger car quelque soit le pays, c’est vraiment l’occasion de s’offrir un peu d’ouverture d’esprit et une belle expérience à l’étranger qui sera un atout certain pour une embauche future dans le monde du travail.', '13162167_1328618270488241_393219620_n.jpg', '');

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
  `en_overview` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `student_testimonials`
--

INSERT INTO `student_testimonials` (`id`, `name`, `job`, `year`, `overview`, `url_image`, `en_overview`) VALUES
(1, 'Julie Pronzac', 'UX designer chez Nealite', 2014, 'L''IMAC m''a apporté une large culture numérique ainsi que l''ouverture d''esprit nécessaire pour m''orienter vers le métier de designer d''expérience. Être ingénieur créatif est un vrai plus dans ces métiers qui mêlent les compétences. Je recommanderais cette école pour tous les passionnés d''innovation numérique qui veulent expérimenter dans des domaines variés, et découvrir des personnes fantastiques !', 'julie-pronzac.png', 'IMAC brought me a strong digital culture, as well as the openmindedness necessary to become a User Experience Designer. To be a creative engineer brings much value to these multi-skilled jobs. I would recommend the school to all digital innovation addicts, who want to experiment working in different areas, and discover amazing people!'),
(2, 'Thibaut Dumont ', 'Ingénieur R&D reconnaissance musicale chez MyMusicTeacher', 0, 'Après avoir terminé mon cursus par une année d''échange et un stage de recherche en Corée du sud, j''ai rejoint une jeune startup sur le développement d''un jeu vidéo d''apprentissage de la guitare. Mes travaux s''étendent aujourd''hui du game-design au traitement du signal en passant par la musique ; la pluralité des enseignements de l''IMAC est donc au cœur de mon travail. \r\nLa grande force de l''IMAC est selon moi de former des ingénieurs créatifs capables de maîtriser à la fois les enjeux techniques et la dimension artistique ou ludique d''un projet multimédia, une capacité essentielle dans un monde ou les technologies de pointes vont de paire avec des innovations d''interface ou de design. ', 'Thibaut-Dumont.png', 'After I finished my studies with a year abroad and a research internship in South Korea, I joined a recent startup developing a guitar-learning video game. My work now involves game design, signal processing, music ; the plurality of what is taught at IMAC is at the heart of my job. The great strength of IMAC is, in my opinion, that it trains creative engineers, who are able to master technical stakes and the artistic dimension of a multimedia project. It is an essential skill in a world where the latest technologies will be paired with user interface or design innovations. '),
(3, 'Marie Fétiveau', 'Lead Software Developer, RodeoFX, Montréal', 0, 'L''IMAC est une des rares formations à concilier sciences de l''ingénieur et arts. Ces trois années d''école m''ont permis d''acquérir des bases solides au travers des cours et des divers projets inter-diplômes, mais aussi de diversifier ma culture aussi bien technique qu''artistique, de dépasser mes limites et de nouer des relations amicales et professionnelles qui après toutes ces années continuent d''enrichir ma vie. ', 'Marie_Fétiveau.jpg', 'IMAC is one of a few trainings to conciliate engineering sciences and arts. These three years in the school allowed me to acquire solid basic knowledge through the lectures and diverse inter-diplomas projects, but also to diversify my culture, technical or artistic, reach my limits and go further, and tie personal and professional bonds that after all these years, keep on making my life greater.'),
(4, 'Valentin Bourgoin', 'Directeur Technique chez 909c', 0, 'Je recommanderais l''IMAC car c''est important, dans le monde professionnel d''aujourd''hui, d''avoir plusieurs cordes à son arc et de savoir sans cesse évoluer. La pluridisciplinarité de l''IMAC permet à ses diplômés de posséder, en plus d''un certain savoir faire, d''une culture technique et artistique très appréciée en entreprise.', 'Valentin_Bourgoin.jpg', 'I would recommend IMAC because it is important in the job market nowadays to be multi-skilled and know how to evolve, endlessly. IMAC''s multidisciplinarity allows graduates to possess, more than their specific skills, a culture in arts and tech that will be much appreciated in a company.'),
(5, 'Sanaa Belkouch', 'Chef de projet digital', 0, 'L''IMAC est une école qui forme des profils créatifs, curieux et des esprits ouverts à l''adoption de nouvelles technologies et méthodologies. Le bagage à la fois technique et artistique permet ensuite aux IMAC de proposer une vision évolutive du digital et une capacité à comprendre ses différentes contraintes et métiers.\r\nGrâce à l''IMAC je suis ingénieur Multimédia. Cette pluridisciplinarité est la différence que je recommande à chacun de cultiver. Apprendre à analyser et être curieux, à trier, à se former, c''est ce qui vous permettra ensuite de ne jamais vous sentir dépassé(e) dans un secteur qui évolue de façon continue et de plus en plus rapide.\r\nJe recommande l''IMAC à toute personne qui aime créer, qui s''intéresse à la fois à l''art et aux nouvelles technologies. Apprenez à coder même si, à priori, ce n''est pas ce qui vous fait vibrer. Car cela vous ouvrira plusieurs perspectives. Pensez à l''entrepreneuriat et n''ayez pas peur de vous lancer dans la réalisation de vos idées et de vos projets', 'Sana_ Belkouch.jpg', 'IMAC is a school that trains artistic, curious personnalities open to the use of new technologies and methodologies. The technical and artistic knowledge retrieved allows IMAC students to have an evolutove vision of the digital world and a capacity to understand different constraints and jobs.  Thanks to IMAC, I am a Multimedia engineer. This pluridisciplinarity is the difference I recommend everyone would develop. Learning how to analyse, being curious, training oneself, is what will give you the keys to never feel overwhelmed in an environment in continuous and fast evolution.'),
(6, 'Arnaud Trouvé', 'Chef de projet Post-production Audiovisuelle - Gingalab (Goyave Production)', 0, 'Venant d''un parcours très scientifique (prépa MPSI), l''IMAC m''a apporté une culture de l''image, et une rencontre avec des profils très variés et complémentaires. Je ne connais pas de formation publique aussi riche d''enseignements et diversifiée dans ses projets multimédia. Je la recommande chaudement à tous ceux qui rêvent de cinéma et d''informatique, et souhaitent un premier pas dans le domaine des effets visuels et de la post-production.', 'photo_Arnaud_Trouve.jpg', 'Coming from a truly scientific background (preparatory classes), IMAC brought me interest in image, and the opportunity to meet many different and complementary lecturers. I don''t know of a public programme that would be so knowledge-packed and diverse in its multimedia projects. I recommend it to anyone dreaming of cinema and IT, and want to make their forst steps in visual effects and  post-production.e d''enseignements et diversifiée dans ses projets multimédia.'),
(7, 'Elisa Prana', 'Développeuse logiciel chez Mikros Image', 0, 'L''IMAC m''a avant tout permis de découvrir la programmation, tout en gardant un esprit ouvert et critique grâce aux autres matières. L''apprentissage par projets est également très formateur. C''est lors de mon projet tuteuré et mes stages que j''ai pu découvrir le monde des effets spéciaux, où je travaille maintenant.\r\nJe recommanderai l''IMAC à tout personne intéressée par le multimédia et l''aspect pluridisciplinaire de la formation.', 'E_Prana.jpg', 'Fist of all, I discovered programming with IMAC, while still keeping an open and critical mind thanks to the other subjects. Learning through projects also is a great experience. It was while working on my tutored projects and internships that I discovered the special effects world, where I work now.\r\nI would recomment IMAC to anyone interested in multimedia and the pluridisciplinarity offered.'),
(8, 'Adrien Herubel', 'Graphics programmer at Ubisoft Motion Pictures', 0, 'L''IMAC à travers sa formation plutôt variée laisse suffisamment de liberté à ses étudiants pour leur permettre de devenir de réels spécialistes dans le domaine de leur choix tout en leur ouvrant les yeux sur un grand ensemble des possibles dans les technologies de l''image et du son. En plus d''avoir développé mes compétences, l''école m''a permis de découvrir mon milieu professionnel actuel, et continue d''être un vivier de recrutement pour les besoins en ingénieurs de l''animation et du cinéma.', 'Adrien_Herubel.jpeg', 'IMAC, through its diverse training, leaves enough freedom to students to allow them to become true specialists in a field they will choose, while opening their eyes up to a great ensemble of possibilities in image and sound technologies. The school developed my skills, and it also was the place where I discovered my current professional environment. It continues to be a breeding ground for engineers, in animation and cinema.'),
(9, 'Cyrill Durigon', 'Motion designer / Directeur Artistique - Freelance', 0, 'L''Imac est pour moi une formation exigeante forte de son éclectisme. Applications, jeux vidéo, web, dispositifs interactifs, vidéos, les étudiants sont confrontés aux aspects artistiques et techniques dans tous les domaines. J''ai personnellement apprécié pouvoir m''investir dans ces projets très variés. Aujourd''hui encore, j''ai toujours à cœur de créer et d’innover. ', 'Cyrill_Durigon.jpg', 'To me, IMAC is a programme that is strong because it is diverse. Applications, video games, web, interactive installations, video, the students are confronted to artistic and technical aspects in all fields. I personnally appreciated the opportunity to get involved in such different projects. Today still, I aim to create and innovate.'),
(10, 'Aurélie Fruitière', 'Commerciale dans la Silicon Valley', 0, 'Pluridisciplinarité! Si en tant qu''étudiante ce mot m''inquiétait, aujourd''hui, en tant que professionnelle, c''est l''atout de l''école d''ingénieur IMAC que je met en avant. En entretien d''embauche ou au sein d''une équipe, fasse aux ingénieurs spécialistes, aux commerciaux de formation ou aux chargés de communication/marketing, c''est la qualité qui permet de se démarquer!', '579205_792089064154562_972753922_n.jpg', ''),
(11, 'Lauren AGOPIAN', 'VFX Developer, Hair & Fur TD Specialist at Mikros Image.', 2009, 'L''IMAC est la formation parfaite pour travailler dans le secteur des VFX.\r\nSpécialisé dans le "poil" et les "forêts" à Mikros Image, mon bagage technique est un véritable atout, en tant que TD / Graphiste, me permettant de développer les outils nécessaires à la création d''effets visuels assez techniques, mais également d''avoir la capacité de scripter, pour se faciliter la vie, et gagner en productivité... ( pour le coté créatif... )\r\nAu delà du caractère technique, il est essentiel, dans ce genre de milieu professionnel, d’être au contact des graphistes et de comprendre leurs problématiques, afin d''y répondre au mieux et se faire comprendre... En sortant de cette formation, l’intégration au milieu professionnel est facilité par la faculté d’être opérationnel, assez rapidement, sur le terrain !', 'lauren.jpg', ''),
(12, 'Floriane Brin', 'Lead Developer, à Los Angeles chez O+O Inc', 0, 'L''IMAC m''a apporté des connaissances techniques solides dans différents domaines, mais également la possibilité de développer mon côté artistique.\r\nJ''ai beaucoup apprécié le travail d’équipe, que ce soit entre étudiants ou entre étudiants et professeurs.\r\nLa formation m''a permis de faire de bonnes études, dans des matières innovantes, de faire des stages à l’étranger et de trouver le travail que j''ai actuellement. L''ambiance était super sympa, et j''ai trouvé un job dès la fin de mes études, donc je ne peux que recommander l''IMAC !', '0986a8b.jpg', 'IMAC brought me solid technical knowledge in a wide variety of fields. But it also helped me develop an artistic edge. I really appreciated the team work there, between students or with teachers. The school allowed me to intern abroad and find my current job.\r\nWith IMAC, I completed long-term education, in innovating subjects. The day-to-day life was great, and I found a job at the end of my studies, so I can only recommend IMAC!'),
(13, 'Thomas Pachou', 'Créateur et Artiste en nouvelles technologies dans le spectacle ', 2008, 'L''IMAC m’a apporté toutes les clefs nécessaires pour faire de moi l''artiste et le créateur que je suis. On peut sans problème apprendre à utiliser de nouvelles techno, se les approprier et les adapter à ses besoins.\r\nMon métier fait que je dois beaucoup apprendre "sur le tas". Par la suite, j''ai donc pu me former en électronique, en robotique ou encore en système interactif pour faire de mes spectacles ce qu''ils sont.\r\n\r\nC’est un métier complexe et qui demande de nombreuses compétences ; La richesse de l’IMAC est nécessaire.\r\nJe recommande régulièrement cette formation à des personnes souhaitant être multi-compétentes. On ne sort pas « super technicien » ou « super-pointu » (c’est dans le milieu du travail que l''on se spécialise vraiment de toute manière) mais ça nous donne les clefs pour pouvoir discuter avec plein de monde (techniciens, graphistes, communicants). D''ailleurs, tous les IMAC exercent des métiers différents et complémentaires.', 'thomas_pachoud.jpg', 'IMAC brought me all the necessary elements to help me grow as an artist and a creator. You can easily learn how to use new technologies, make them yours and adapt them to your needs. My work involves a lot of learning "on the job". After the school, I could get trained in electronics, robotics or interactive systems to shape my shows how they are now.\r\n\r\nIt''s a complex job that requires many skills ; the diversity of IMAC is necessary.\r\nI recommend this programme on a regular basis to people who wish to acquire multiple skills. You don''t get our a "super-technician" or "super-specialist" (it is in the job market you will get specialized anyway) but it gives you the keys to debate with many people (in tech, graphism, communication). All IMAC alumni have different and complementary jobs.'),
(14, 'Thibaut Dumont ', 'Ingénieur R&D reconnaissance musicale chez MyMusicTeacher', 0, 'Après avoir terminé mon cursus par une année d''échange et un stage de recherche en Corée du sud, j''ai rejoint une jeune startup sur le développement d''un jeu vidéo d''apprentissage de la guitare. Mes travaux s''étendent aujourd''hui du game-design au traitement du signal en passant par la musique ; la pluralité des enseignements de l''IMAC est donc au cœur de mon travail. La grande force de l''IMAC est selon moi de former des ingénieurs créatifs capables de maîtriser à la fois les enjeux techniques et la dimension artistique ou ludique d''un projet multimédia, une capacité essentielle dans un monde ou les technologies de pointes vont de paire avec des innovations d''interface ou de design.', 'Thibaut_Dumont .png', 'After I finished my studies with a year abroad and a research internship in South Korea, I joined a recent startup developing a guitar-learning video game. My work now involves game design, signal processing, music ; the plurality of what is taught at IMAC is at the heart of my job. The great strength of IMAC is, in my opinion, that it trains creative engineers, who are able to master technical stakes and the artistic dimension of a multimedia project. It is an essential skill in a world where the latest technologies will be paired with user interface or design innovations. ');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `en_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `en_name`) VALUES
(1, 'coup de coeur', ''),
(2, 'web', ''),
(3, 'audiovisuel', ''),
(4, 'projet tuteuré', ''),
(6, 'multimédia', ''),
(8, 'communication', ''),
(9, 'jeu vidéo', ''),
(10, 'programmation', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`) VALUES
(1, 'Julien Rousset', 'julien@imac.fr', '$2y$10$E/FJS3ebDMLPdFq0XR2xruGVOyy.R3lPpxshhPTqU4lra91shQ2Fu', 'Mq2h4md701uXox7fBkIWyeqbUAZzIJ3NXqxnFbyp01pMdVGQQb2tZWaDHN2Y'),
(2, 'Web Imac', 'admin@imac.fr', '$2y$10$JvTP8w/YjxCPGdeZ6No/De8dzt4sBC.gsuaIW7HgunzSVuZcjRmr6', 'Veg0qfrP9rTheJEgAMoySuL66uujSlnK7cluDGUxw9GObwn9vdaYlGcmJHoI');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
