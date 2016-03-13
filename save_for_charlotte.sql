-- MySQL dump 10.13  Distrib 5.6.28, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: homestead
-- ------------------------------------------------------
-- Server version	5.6.28-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_01_15_174913_create_projects_table',1),('2016_01_18_155725_create_student_testimonial_table',1),('2016_01_19_161357_create_staff_table',1),('2016_01_26_175510_create_promos_table',1),('2016_01_26_234910_create_partnerships_table',1),('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_01_15_174913_create_projects_table',1),('2016_01_18_155725_create_student_testimonial_table',1),('2016_01_19_161357_create_staff_table',1),('2016_01_26_175510_create_promos_table',1),('2016_01_26_234910_create_partnerships_table',1),('2016_02_28_172416_create_students_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partnerships`
--

DROP TABLE IF EXISTS `partnerships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partnerships` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_web` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partnerships`
--

LOCK TABLES `partnerships` WRITE;
/*!40000 ALTER TABLE `partnerships` DISABLE KEYS */;
INSERT INTO `partnerships` VALUES (1,'Ubisoft','Partenariat Industriel','Un des leaders mondial de la création, édition et distribution de jeux vidéo et de services interactifs, avec un riche portefeuille de marques de renommée internationale.\r\n','https://www.ubisoft.com/fr-FR/studio/paris.aspx','logoUbisoft.png'),(2,'Maison des Arts de Créteil','Partenariat culturel','Centre culturel de production et de diffusion pluridisciplinaire et généraliste (théâtre, danse, art contemporain, festival,...).','http://www.maccreteil.com/fr','logo-mac.png'),(3,'Mikros Image','Partenariat industriel','Société de post-production spécialisée dans la création d’effets visuels numériques et l’animation. ','http://www.mikrosimage.eu/','logo_mikrosimages.jpg'),(4,'Numa','Partenariat pédagogique et institutionnel','Espace de coworking, accélération de start-up, structuration de communautés, programmes de transformation numérique et d’Open Innovation.','https://paris.numa.co/','NUMA-Paris.png'),(5,'Smile','Partenariat industriel','Société d\'experts des architectures web et des solutions open source.','http://www.smile.fr/','logoSmile.png'),(6,'La Ferme du Buisson','Partenariat culturel','Un carrefour culturel unique: espace de plein air, salles de spectacles, cinémas, Centre d’art contemporain, festival… Un point de convergence entre le public et la création.','http://lafermedubuisson.com/','logoFermeDuBuisson.png'),(7,'Pülz','Partenariat industriel','Collectif de travailleurs indépendants, spécialisés dans le large domaine du multimédia : développement, graphisme, motion design, audiovisuel, conseil et formation. ','http://www.pulz.fr/','pulz-logo.png');
/*!40000 ALTER TABLE `partnerships` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,NULL,'ShuttleOFX','ShuttleOFX est une plateforme web permettant le partage de plugins entre développeurs et graphistes. Les plugins sont au format OpenFX, un standard libre de plugins de traitement d’image. L’application a été conçue pour permettre à tout utilisateur de met','ShuttleOFX est une plateforme web permettant le partage de plugins entre développeurs et graphistes.','2016-01-22 00:00:00','Juliette Belin <br/> ​Armand Biteau <br/> Hugo Garrido y Saez​ <br/>','Fabien Castan <br/> Marc-Antoine Arnaud​','Prix de la catégorie TECH et le prix du public lors du Paris Open Source Submit 2015','shuttleofx','ShuttleOFX.png','vimeo','127664921','https://github.com/shuttleofx/ShuttleOFX','http://shuttleofx.org',''),(2,NULL,'Maere : When Lights Die','Maere : When Lights Die est un jeu vidéo de survival horreur pensé et développé pour la réalité virtuelle. Disponible sur PC, MAC et Linux, il sera jouable avec le casque de réalité virtuelle Oculus Rift dès que l\'IMAC en recevra son kit de développement ','Jeu vidéo de survival horreur pensé et développé pour la réalité virtuelle','2016-01-28 09:26:35','Aurélie Beauprez <br/>Thomas Demenat<br/>Tom Duchêne<br/>Thibaut Dumont','Patrice Bouvier','','maere-when-lights-die','Maere.png','vimeo','65384143','','',''),(3,NULL,'Biotope','Biotope est un projet initié par le compositeur et artiste multimédia Pierre Estève et qui porte sur l\'étude des mathématiques soujacentes à la nature. Ce sujet étant extrêmement vaste, le projet s\'est concentré dans un premier temps sur la génération en ','Biotope est un projet initié par le compositeur et artiste multimédia Pierre Estève et qui porte sur l\'étude des mathématiques soujacentes à la nature.','2015-01-27 22:00:00','Florian LEQUERTIER <br/> Mehdi-Antoine MAHFOUDI<br/>Thibaud CARPENTIER<br/>Clément SCHEPENS','Pierre ESTEVE','','biotope','biotope.png','vimeo','127696813','','',''),(4,NULL,'La Machine à Dessiner les Sons','La Machine à Dessiner les Sons est un projet de l’artiste Philippe Dupuy. Le but est de réaliser une installation qui permet de dessiner pour faire du son. Sa volonté était de garder les caractéristiques du dessin traditionnel, c’est-à-dire avec une feuil','Installation qui permet de dessiner pour faire du son.','0000-00-00 00:00:00','Marin Gauthier<br/>Marion Audebert<br/>Manon Grisi<br/>Pascale Ho','Philippe Dupuy','','la-machine-a-dessiner-les-sons','lmadds.png','vimeo','127547015','','http://lamachineadessinerlessons.fr',''),(5,NULL,'Zoey\'s Sight','Zoey\'s Sight est un film d\'animation 3D entièrement procédural. Il a donc été réalisé uniquement en lignes de code, sans l\'aide de logiciel de modélisation classique comme 3DS Max ou Maya. Il met en scène l\'histoire de Zoey, une araignée, qui est entrainé','Zoey\'s Sight est un film d\'animation 3D entièrement procédural','2016-01-28 09:23:18','Gautier Ciaudo<br/>Robin De Lillo<br/>Yann Lanthony<br/>Adrien Kielb','Nadine Dommanget','','zoey-s-sight','zoeys.png','dailymotion','xinu3m','','',''),(6,NULL,'Rallye Provins','Qui ne s’est jamais ennuyé dans un musée ?\r\nLe Rallye Provins est une application web, pour smartphones et tablettes, qui permet de découvrir la ville médiévale de Provins de manière ludique et amusante. Orientée vers les jeunes générations et les tourist','Qui ne s’est jamais ennuyé dans un musée ?','2015-01-26 22:00:00','Matthieu Bresson<br/>Lisa  Françoise<br/>Alice Neichols<br/>Marie Benoist','M.Nozick <br/>M.Ettayeb','','rallye-provins','Rallye_Provins.png','youtube','TDDamupVBRc','','http://provins.ingenieur-imac.fr/',''),(7,NULL,'Carnet ','L‘application Carnet est le fruit de la première collaboration entre La Poste et l‘IMAC. Elle s‘inscrit dans le cadre du projet Factéo qui vise à fournir un smartphone aux plus de 100.000 facteurs en France d‘ici 2015. On retrouve l‘idée du carnet de rout','L‘application Carnet est le fruit de la première collaboration entre La Poste et l‘IMAC.','2013-07-19 20:00:00','Pierre Criulanscy<br/>Hugo Gresse<br/>Pierre Guilloux<br/>Julie Pronzac','Benjamin Liger<br/>Ségolène Naline','','carnet','carnet_Laposte.png','vimeo','65968243','','',''),(8,NULL,'Paris Insolite','Paris Insolite est une application mobile de tourisme alternatif répertoriant des lieux insolites situés à Paris. Elle propose des fonctionnalités telles que la création de parcours, la gestion des favoris ou encore des calculs d\'itinéraires.','Application mobile de tourisme alternatif répertoriant des lieux insolites situés à Paris.','2016-01-28 10:01:12','Juliette Girin<br/>Thaïs Guigon<br/>Eric Luong<br/>Corentin Marc','Valentin Bourgoin','','paris-insolite','paris_insolite.png','vimeo','65749444','','',''),(9,NULL,'Arrows Project','Arrows Project est un projet consistant à créer une démonstration interactive qui se doit le plus réaliste possible, basée sur le scénario suivant : le personnage, en vue à la première personne, est dans un environnement ouvert, menacé par une armée d’arc','Arrows Project est un projet consistant à créer une démonstration interactive qui se doit le plus réaliste possible','2011-01-27 22:00:00','Eléonore Delau<br/>Rémi Génin<br/>Benjamin Liger','Adrien Hérubel<br/>Nadine Dommanget','','arrows-project','arrows.png','dailymotion','xin9g4','','',''),(10,NULL,'Graffiti Light','Graffiti Light est un projet qui à pour but de recréer un effet light painting en vidéo. Il a permit la création de l\'application Dynalux, pensée pour une utilisation dans un spectacle d’art vivant, au sein de la compagnie du clou.','Graffiti Light est un projet qui à pour but de recréer un effet light painting en vidéo','2016-01-26 22:00:00','Guillaume Albespy<br/>Tom Gay','Laurent Renaud','','graffiti-light','Dynalux.png','vimeo','42091300','','',''),(11,NULL,'Azheugaga - hypnotic cubes','Azheugaga est un projet de cinématique non-interactive inspiré du mythe biblique de Moïse ouvrant la mer rouge. Initialement prévu pour être seulement esthétique, la technique a été poussée afin d’afficher une scène constituée de nombreuses informations e','','2016-01-26 22:00:00',' Rémi Génin','','','azheugaga-hypnotic-cubes','hypnotic.png','vimeo','33841745','','',''),(12,NULL,'Cloud Fighter','Cloud Fighter est un jeu en 2D sur Android. A l’aide de nuages qui émettent divers projectiles, vous devez viser des ennemis qui passent de droite à gauche de l’écran. Le but est de survivre et de détruire l’usine ennemie qui se situe à la fin de chaque n','Cloud Fighter est un jeu en 2D sur Android. ','2016-01-28 10:02:01','Céline COGNY<br/>Stéphanie LUU<br/>Gabriel PEYROT','Anthony GIROUD','','cloud-fighter','cloud_Fighter.png','dailymotion','ximp71','','',''),(13,NULL,'Show Must Be Fun','Show Must Be Fun est un projet en partenariat avec Switch, un duo composé de VJ Stello (Stan Walbert) et PiPer (Adrien Winter), et qui depuis 2003 organise des concerts et des shows audio-visuels. Le but de ce projet était de concevoir une application per','Show Must Be Fun est un projet en partenariat avec Switch, un duo composé de VJ Stello (Stan Walbert) et PiPer (Adrien Winter), et qui depuis 2003 organise des concerts et des shows audio-visuels.','2011-01-27 22:00:00','Julien Ducret <br/>Pierre Gouthéraud<br/>Jérémy Busset','Stan Walbert <br/>Adrien Winter <br/>Vincent Nozick','','show-must-be-fun','Show_must.png','dailymotion','xiocyw','','','');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promos`
--

DROP TABLE IF EXISTS `promos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `year` int(10) unsigned NOT NULL,
  `url_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promos`
--

LOCK TABLES `promos` WRITE;
/*!40000 ALTER TABLE `promos` DISABLE KEYS */;
INSERT INTO `promos` VALUES (1,2017,'imac2017.jpg'),(2,2016,'imac2016.JPG'),(3,2015,'imac2015.jpg');
/*!40000 ALTER TABLE `promos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `main` tinyint(1) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `web_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_testimonials`
--

DROP TABLE IF EXISTS `student_testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_testimonials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(10) unsigned DEFAULT NULL,
  `overview` longtext COLLATE utf8_unicode_ci NOT NULL,
  `url_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_testimonials`
--

LOCK TABLES `student_testimonials` WRITE;
/*!40000 ALTER TABLE `student_testimonials` DISABLE KEYS */;
INSERT INTO `student_testimonials` VALUES (1,'Julie Pronzac','UX designer chez Nealite',2014,'L\'IMAC m\'a apporté une large culture numérique ainsi que l\'ouverture d\'esprit nécessaire pour m\'orienter vers le métier de designer d\'expérience. Être ingénieur créatif est un vrai plus dans ces métiers qui mêlent les compétences. Je recommanderais cette ','julie-pronzac.png'),(2,'Thibaut Dumont ','Ingénieur R&D reconnaissance musicale chez MyMusicTeacher',0,'Après avoir terminé mon cursus par une année d\'échange et un stage de recherche en Corée du sud, j\'ai rejoint une jeune startup sur le développement d\'un jeu vidéo d\'apprentissage de la guitare. Mes travaux s\'étendent aujourd\'hui du game-design au traitem','Thibaut-Dumont.png'),(3,'Marie Fétiveau','Lead Software Developer, RodeoFX, Montréal',0,'L\'IMAC est une des rares formations à concilier sciences de l\'ingénieur et arts. Ces trois années d\'école m\'ont permis d\'acquérir des bases solides au travers des cours et des divers projets inter-diplômes, mais aussi de diversifier ma culture aussi bien ','Marie_Fétiveau.jpg'),(4,'Valentin Bourgoin','Directeur Technique chez 909c',0,'Je recommanderais l\'IMAC car c\'est important, dans le monde professionnel d\'aujourd\'hui, d\'avoir plusieurs cordes à son arc et de savoir sans cesse évoluer. La pluridisciplinarité de l\'IMAC permet à ses diplômés de posséder, en plus d\'un certain savoir fa','Valentin_Bourgoin.jpg'),(5,'Sanaa Belkouch','Chef de projet digital',0,'Je recommande l\'IMAC à toute personne qui aime créer, qui s\'intéresse à la fois à l\'art et aux nouvelles technologies. Apprenez à coder même si, à priori, ce n\'est pas ce qui vous fait vibrer. Car cela vous ouvrira plusieurs perspectives. Pensez à l\'entre','Sana_ Belkouch.jpg'),(6,'Arnaud Trouvé','Chef de projet Post-production Audiovisuelle - Gingalab (Goyave Production)',0,'Venant d\'un parcours très scientifique (prépa MPSI), l\'IMAC m\'a apporté une culture de l\'image, et une rencontre avec des profils très variés et complémentaires. Je ne connais pas de formation publique aussi riche d\'enseignements et diversifiée dans ses p','photo_Arnaud_Trouve.jpg');
/*!40000 ALTER TABLE `student_testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `promo` int(10) unsigned NOT NULL,
  `url_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_web` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_linkedin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Julien Rousset','julien@imac.fr','$2y$10$E/FJS3ebDMLPdFq0XR2xruGVOyy.R3lPpxshhPTqU4lra91shQ2Fu','Mq2h4md701uXox7fBkIWyeqbUAZzIJ3NXqxnFbyp01pMdVGQQb2tZWaDHN2Y');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-02 20:09:44
