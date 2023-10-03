-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 01:58 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_acteurs`
--

-- --------------------------------------------------------

--
-- Table structure for table `acteur`
--

CREATE TABLE `acteur` (
  `id_act` int(11) NOT NULL,
  `nom_act` varchar(20) DEFAULT NULL,
  `pren_act` varchar(50) DEFAULT NULL,
  `civ_act` varchar(20) DEFAULT NULL,
  `date_nais_act` date DEFAULT NULL,
  `sexe_act` varchar(20) DEFAULT NULL,
  `email_act` text DEFAULT NULL,
  `nbr_enfant` int(11) DEFAULT NULL,
  `tel_act` int(11) DEFAULT NULL,
  `mot_pass_act` text DEFAULT NULL,
  `fonct_act` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acteur`
--

INSERT INTO `acteur` (`id_act`, `nom_act`, `pren_act`, `civ_act`, `date_nais_act`, `sexe_act`, `email_act`, `nbr_enfant`, `tel_act`, `mot_pass_act`, `fonct_act`) VALUES
(21, 'Camara', 'Ismael', 'Monsieur', '2001-04-18', 'M', 'camara13280@gmail.com', 0, 711118720, '$2y$10$nQ165wrm9A2z1t7zNNdrde3jwCdRsu/gFmhO8.ZoVn/1w4StXU7uO', 'Développeur'),
(22, 'BEDA', 'LUC', 'IVOIRIENNE', '2002-10-18', 'M', 'rayouyoumignon@gmail.com', 3, 777124251, '$2y$10$AxnDeHxHCTTgO70ifILVBu2UwlSKZM3MUc5BqldwslrNCy1VPtNCa', 'INFIRMIER');

-- --------------------------------------------------------

--
-- Table structure for table `actualite`
--

CREATE TABLE `actualite` (
  `id_actu` int(11) NOT NULL,
  `lib_actu` varchar(150) DEFAULT NULL,
  `desc_actu` text DEFAULT NULL,
  `photo_actu` text DEFAULT NULL,
  `date_actu` date DEFAULT NULL,
  `cat_actu` varchar(155) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actualite`
--

INSERT INTO `actualite` (`id_actu`, `lib_actu`, `desc_actu`, `photo_actu`, `date_actu`, `cat_actu`) VALUES
(3, 'L’Université Virtuelle de Côte d’Ivoire connecte à l’intranet le village Allakro dans le cadre du voisinage open day', 'L’Université Virtuelle de Côte d’Ivoire a abrité la 2e édition du voisinage open day, le jeudi 29 Septembre 2022. Cette édition du voisinage open day qui avait pour thème : “l’accompagnement des porteurs de projets : quelles pratiques pour quels résultats”, s’est déroulée en présence d’un parterre d’invités tels que les Responsables de Structures d’Accompagnement à l’Entrepreneuriat Innovant (RSAEI), les présidents et représentants d’associations d’entrepreneurs et d’incubateur.\n\n\n\nLe voisinage de l’UVCI est un laboratoire de fabrication (Fablab) tenu par les étudiants. Au sein du voisinage, ils mènent des activités innovatrices. Ce laboratoire repose sur l’un des piliers de l’établissement qui est l’employabilité. En effet, l’UVCI dans l’optique d’accompagner l’insertion professionnelle de tous ses étudiants, taux d’insertion professionnelle qui s’élève déjà à environs 80%, a mis en place un incubateur, dont la mission consiste à accueillir et accompagner les porteurs de projets, afin de faciliter la création de leurs entreprises.\n\n\n\nDans l’optique de présenter les créations et les innovations des apprenants du voisinage au grand public, surtout aux acteurs nationaux de l’accompagnement des étudiants dans l’entrepreneuriat, l’UVCI a initié le voisinage open day qui est une journée dédiée à la célébration de la réalisation des étudiants du fablab.\n\n\n\nCette cérémonie a été meublée par de brillantes présentations, telles que la conférence enrichissante faite par M.Kouassi Herman Christian président d’incub’ivoire sur le thème de l’édition,  ainsi que des expositions des différents prototypes innovants réalisés par les étudiants, la présentation des différentes start-up de l’UVCI faite par le porte-parole des gérants de statut-up, M.Dago Dassi Ange, la présentation des réalisations du voisinage faite par le Président de l’association voisinage, M.Doré Mohamed et par le lancement de l’intranet communautaire qui va permettre au village d’allakro de pouvoir interagir sans internet.\n\n\n\nLe Directeur Général, satisfait de la créativité, de l’innovation dont ses étudiants ont fait preuve, n’a pas hésité à faire la promotion du modèle pédagogique de l’UVCI, qui permet aux étudiants de réaliser des projets concrets et innovants qui les rendent autonomes.\n\n\n\nEn somme, les étudiants de l’UVCI ont un cadre bien approprié, le voisinage qui leur permet de faire éclore leur génie. Ils disposent d’un temps assez large que leur offre le modèle de formation à distance, pour faire montre de leur ingéniosité au sein du fablab et pour entreprendre.', 'https://uvci.edu.ci/portail/images/articles/large/3cf120925cfa4dc60ffb6548f67cbd5f.jpg', '2022-10-20', 'Média'),
(8, 'FÊTE DE NOËL : UNE ONG PARTAGE LA MAGIE DE NOËL AVEC LES ENFANTS D’ALLAKRO (COCODY)', 'Quartier précaire de la commune huppée de Cocody, Allakro a reçu la visite de l’Ong Le droit de vivre qui a mis la joie dans le cœur des enfants, le vendredi 17 décembre 2021. Les parents du quartier Allakro ont pu avoir la joie dans le cœur à l’idée de voir leurs enfants être cadeautés par une Ong. En cette fin d’année, cet événement heureux vient amoindrir la pénibilité de la vie qu\'ils mènent. \n\nUn peu plus de 100 tout-petits ont manifesté la joie de recevoir un présent en ces temps de fête de fin d\'année. En effet, les enfants du quartier précaire Allakro situé dans la commune de Cocody ont reçu des cadeaux. Ils ont par la même occasion reçu la magie de Noël. Source Adjuwa', 'https://linfodrome.com/media/article/images/src/72710-robert-assi-a-allakro-linfodrome.webp', '2023-08-13', 'SOCIÉTÉ'),
(23, 'Action Sociale / Fin du jeûne Catholique : Mme Koné Colette offre des vivres à 600 familles du quartier d’Allakro', 'La Directrice générale de l’Agence de régulation de la mutualité sociale (AIRMS) Koné Colette a fait le samedi 16 mars, un don de vivres d’une valeur de près de 2 millions de FCFA, à 600 familles du quartier Allakro de la commune de Cocody. Source: Aidjan.net', 'https://media-files.abidjan.net/photo/jeune-0001(2).jpg', '2016-03-27', 'SOCIÉTÉ');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email_admin` text DEFAULT NULL,
  `mot_pass_admin` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email_admin`, `mot_pass_admin`) VALUES
(77, 'camara13280@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `amenagement`
--

CREATE TABLE `amenagement` (
  `id_am` int(11) NOT NULL,
  `nom_am` varchar(20) DEFAULT NULL,
  `pren_am` varchar(50) DEFAULT NULL,
  `sexe_am` varchar(20) DEFAULT NULL,
  `date_nais_am` date DEFAULT NULL,
  `provenance` varchar(50) DEFAULT NULL,
  `mode_heber` varchar(150) DEFAULT NULL,
  `lieu_hab_am` varchar(150) DEFAULT NULL,
  `fonct_am` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `amenagement`
--

INSERT INTO `amenagement` (`id_am`, `nom_am`, `pren_am`, `sexe_am`, `date_nais_am`, `provenance`, `mode_heber`, `lieu_hab_am`, `fonct_am`) VALUES
(11, 'kouakou', 'Michael', 'M', '1968-08-17', 'Adjame', 'Je vie chez ma tante Akissi', 'J\'habite près du vieux sidibe', 'Maçon'),
(12, 'Mamadou', 'Diarra', 'M', '1995-04-10', 'Abobo-avocatier', 'Je vie chez mon oncle', 'Près de la boulangerie  du village', 'enseignant'),
(13, 'KOUADIO ', 'ADJOUA', 'M', '2003-08-14', 'Abobo-n\'dotré', 'A côté de la boulangerie', 'Non loin de la boulangerie en bas du quartier', 'Menusier');

-- --------------------------------------------------------

--
-- Table structure for table `centresante`
--

CREATE TABLE `centresante` (
  `id_centre` int(11) NOT NULL,
  `nom_centre` varchar(80) DEFAULT NULL,
  `local_centre` text DEFAULT NULL,
  `serv_centre` varchar(155) DEFAULT NULL,
  `desc_centre` text DEFAULT NULL,
  `photo_centre` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `centresante`
--

INSERT INTO `centresante` (`id_centre`, `nom_centre`, `local_centre`, `serv_centre`, `desc_centre`, `photo_centre`) VALUES
(1, 'polyclinique des 2 plateau', '9272+68G, ABIDJAN', 'Ophtamologie, Néphrologie, rhumatologie, neurologie, neurochirurgie.', 'Situé au Deux Plateaux derrière l’école La Farandole, La Polyclinique des 2 Plateaux est un établissement hospitalier qui offre toutes les commodités et répond aux besoins de ses patients.\n', 'https://editorial01.shutterstock.com/preview-440/10361139d/9b729e99/Shutterstock_10361139d.jpg'),
(2, 'MATERNITE Marie Thérèse  HOUPHOUET BOIGNY  220 Logements', 'Abidjan, Côte d\'Ivoire, Lagunes', 'Ophtamologie, Néphrologie, rhumatologie, neurologie, neurochirurgie', 'Maternite Marie Thérèse Houphouet Boigny 220 Logements est située à Abidjan, Côte d\'Ivoire, Lagunes. Entreprises similaires à proximité. Red Cross of Adjame.\n', 'data:image/jpeg;base64,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');

-- --------------------------------------------------------

--
-- Table structure for table `deces`
--

CREATE TABLE `deces` (
  `id_dec` int(11) NOT NULL,
  `nom_dec` varchar(20) DEFAULT NULL,
  `pren_dec` varchar(50) DEFAULT NULL,
  `sexe_dec` varchar(20) DEFAULT NULL,
  `date_nais_dec` date DEFAULT NULL,
  `date_dec` date DEFAULT NULL,
  `lieu_dec` varchar(150) DEFAULT NULL,
  `cause_dec` varchar(150) DEFAULT NULL,
  `nom_parent` varchar(20) DEFAULT NULL,
  `pren_parent` varchar(50) DEFAULT NULL,
  `lieu_habit_dec` varchar(150) DEFAULT NULL,
  `fonct_dec` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deces`
--

INSERT INTO `deces` (`id_dec`, `nom_dec`, `pren_dec`, `sexe_dec`, `date_nais_dec`, `date_dec`, `lieu_dec`, `cause_dec`, `nom_parent`, `pren_parent`, `lieu_habit_dec`, `fonct_dec`) VALUES
(1, 'Koffi', 'Krah Marc', 'M', '1995-08-02', '2023-08-16', 'Allakro', 'Paludisme', 'Koffi', 'Jean Elise', 'Prés de la boulangérie', 'enseignant'),
(2, 'Koffi', 'Krah Marc', 'M', '1995-08-02', '2023-08-30', 'Allakro', 'Paludisme', 'Koffi', 'Jean Elise', 'Prés de la boulangérie', 'enseignat'),
(15, 'Koffi', 'Krah Marc', 'M', '1995-08-02', '2023-08-30', 'Allakro', 'Paludisme', 'Koffi', 'Jean Elise', 'Prés de la boulangérie', 'enseignat');

-- --------------------------------------------------------

--
-- Table structure for table `deces_attente`
--

CREATE TABLE `deces_attente` (
  `id_dec` int(11) NOT NULL,
  `nom_dec` varchar(20) DEFAULT NULL,
  `pren_dec` varchar(50) DEFAULT NULL,
  `sexe_dec` varchar(20) DEFAULT NULL,
  `date_nais_dec` date DEFAULT NULL,
  `date_dec` date DEFAULT NULL,
  `lieu_dec` varchar(150) DEFAULT NULL,
  `cause_dec` varchar(150) DEFAULT NULL,
  `nom_parent` varchar(20) DEFAULT NULL,
  `pren_parent` varchar(50) DEFAULT NULL,
  `lieu_habit_dec` varchar(150) DEFAULT NULL,
  `fonct_dec` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deces_attente`
--

INSERT INTO `deces_attente` (`id_dec`, `nom_dec`, `pren_dec`, `sexe_dec`, `date_nais_dec`, `date_dec`, `lieu_dec`, `cause_dec`, `nom_parent`, `pren_parent`, `lieu_habit_dec`, `fonct_dec`) VALUES
(6, 'Koume', 'Jean wilfried', 'M', '1995-02-25', '2023-05-18', 'A son domicile', 'Cancer', 'Kouame', 'Benjamin', 'En face de la boulangerie du quartier', 'Professeur'),
(7, 'Koume', 'Jean wilfried', 'M', '1995-02-25', '2023-05-18', 'A son domicile', 'Cancer', 'Kouame', 'Benjamin', 'En face de la boulangerie du quartier', 'Professeur');

-- --------------------------------------------------------

--
-- Table structure for table `demenagement`
--

CREATE TABLE `demenagement` (
  `id_dem` int(11) NOT NULL,
  `nom_dem` varchar(20) DEFAULT NULL,
  `pren_dem` varchar(50) DEFAULT NULL,
  `sexe_dem` varchar(20) DEFAULT NULL,
  `date_nais_dem` date DEFAULT NULL,
  `lieu_hab_dem` varchar(150) DEFAULT NULL,
  `nouveau_dem` varchar(150) DEFAULT NULL,
  `fonct_dem` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demenagement`
--

INSERT INTO `demenagement` (`id_dem`, `nom_dem`, `pren_dem`, `sexe_dem`, `date_nais_dem`, `lieu_hab_dem`, `nouveau_dem`, `fonct_dem`) VALUES
(8, 'Camara', 'Ismael', 'M', '2001-04-18', ' j\'habite à côté de chez COULIBALY', 'Abobo-Akeikoi', 'Peintre');

-- --------------------------------------------------------

--
-- Table structure for table `maladie`
--

CREATE TABLE `maladie` (
  `id_mal` int(11) NOT NULL,
  `lib_mal` varchar(150) DEFAULT NULL,
  `desc_mal` text DEFAULT NULL,
  `photo_mal` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maladie`
--

INSERT INTO `maladie` (`id_mal`, `lib_mal`, `desc_mal`, `photo_mal`) VALUES
(1, 'Dengue en Côte d\'Ivoire', 'Le 23 mars 2022, le ministère de la Santé de Côte d\'Ivoire a notifié à l\'Organisation Mondiale de la Santé (OMS) 11 cas confirmés de dengue, dont 1 décès. \n\nNeuf cas provenaient d\'Abidjan (notamment des districts de Cocody Bingerville et de Treichville Marcory), et 2 cas de l\'arrière-pays des districts d\'Adiaké et de Daloa.\nUne infection par la dengue a également été diagnostiquée récemment chez un voyageur de retour en Suisse qui avait séjourné en Côte d\'Ivoire. \n\nDes foyers de dengue ont été enregistrés à plusieurs reprises ces dernières années en Côte d\'Ivoire.\n\nRecommandations aux voyageurs :\n\nIl est conseillé de se protéger contre les piqûres de moustiques :\n\nport de vêtements couvrants imprégnés d\'insecticide\nutilisation de répulsif anti-moustique sur la peau découverte\nSi vous avez de la fièvre : prenez des médicaments contenant le principe actif paracétamol et veillez à boire suffisamment. N\'utilisez pas d\'Aspirine® (ou tout médicament contenant de l\'acide acétylsalicylique) à cause du risque de saignements en cas d\'infection par la dengue.\n\nSi vous séjournez dans des zones de paludisme et vous avez une fièvre >37,5 °C, vous devez toujours consulter un médecin pour exclure le paludisme par un frottis sanguin sur place.\n\nSource : Healthytravel.ch\n\nMaladie : Dengue\n\nVaccin : DENGVAXIA\n\nRéférence principale :www.healthytravel.ch', 'data:image/jpeg;base64,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'),
(2, 'Maladie à coronavirus 2019 (COVID-19)', 'L\'Organisation Mondiale de la Santé (OMS) a annoncé, ce vendredi 05 Mai 2023, la fin de l\'alerte maximale qu\'elle avait déclarée à propos de la pandémie de la Covid 19 .  \n\n\n \"C\'est avec beaucoup d\'espoir que je déclare que le Covid-19 n\'est plus une urgence sanitaire de portée\n\n\ninternationale\", a affirmé le directeur général de l\'OMS, Tedros Adhanom Ghebreyesus, estimant que la pandémie avait fait \"au moins 20 millions\" de morts, presque trois fois plus que le bilan officiel de son organisation. \n\n\nLa baisse observée depuis plus d\'un an a conduit en effet l\'organisation a levé son plus haut niveau d\'alerte sur la pandémie, estimant qu\'elle était désormais suffisamment sous contrôle. \n\n\n\"Depuis plus d\'un an, la pandémie suit une tendance à la baisse, l\'immunité de la population augmentant grâce à la vaccination et à l\'infection, la mortalité diminuant et la pression sur les systèmes de santé s\'atténuant.\n\n\nCette tendance a permis à la plupart des pays de retrouver la vie telle que nous la connaissions auparavant\", s\'est félicité le directeur général de l\'OMS.\n\n\nLa pandémie de Covid a causé la mort de près de 15 millions de personnes dans le monde, estimait l\'Organisation mondiale de la santé (OMS) au 05 Mai 2022 .\n\n\nR-SEKONGO ', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNKfv_xBuOU9xh-zd8zgT-Xo1fylkMFq615g&usqp=CAU');

-- --------------------------------------------------------

--
-- Table structure for table `naissance`
--

CREATE TABLE `naissance` (
  `id_nais` int(11) NOT NULL,
  `nom_enf` varchar(20) DEFAULT NULL,
  `pren_enf` varchar(50) DEFAULT NULL,
  `sexe_enf` varchar(20) DEFAULT NULL,
  `date_nais_enf` date DEFAULT NULL,
  `mode_nais` varchar(150) DEFAULT NULL,
  `nom_pere` varchar(20) DEFAULT NULL,
  `pren_pere` varchar(50) DEFAULT NULL,
  `nom_mere` varchar(20) DEFAULT NULL,
  `pren_mere` varchar(50) DEFAULT NULL,
  `lieu_hab_enf` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `naissance`
--

INSERT INTO `naissance` (`id_nais`, `nom_enf`, `pren_enf`, `sexe_enf`, `date_nais_enf`, `mode_nais`, `nom_pere`, `pren_pere`, `nom_mere`, `pren_mere`, `lieu_hab_enf`) VALUES
(1, 'Adama', 'sanogo', 'Feminin', '2019-08-02', 'Voie basse', 'Adama', 'Mamadou', 'Ballo', 'Fatoumata', 'En face de la mosqué'),
(15, 'Adama', 'sanogo', 'Masculin', '2019-08-02', 'Voie basse', 'Adama', 'Mamadou', 'Ballo', 'Fatoumata', 'En face de la mosqué'),
(16, 'Adama', 'sanogo', 'Feminin', '2019-08-02', 'Voie basse', 'Adama', 'Mamadou', 'Ballo', 'Fatoumata', 'En face de la mosqué');

-- --------------------------------------------------------

--
-- Table structure for table `naissance_attente`
--

CREATE TABLE `naissance_attente` (
  `id_nais` int(11) NOT NULL,
  `nom_enf` varchar(20) DEFAULT NULL,
  `pren_enf` varchar(50) DEFAULT NULL,
  `sexe_enf` varchar(20) DEFAULT NULL,
  `date_nais_enf` date DEFAULT NULL,
  `mode_nais` varchar(150) DEFAULT NULL,
  `nom_pere` varchar(20) DEFAULT NULL,
  `pren_pere` varchar(50) DEFAULT NULL,
  `nom_mere` varchar(20) DEFAULT NULL,
  `pren_mere` varchar(50) DEFAULT NULL,
  `lieu_hab_enf` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `offre`
--

CREATE TABLE `offre` (
  `id_off` int(11) NOT NULL,
  `serv_off` varchar(150) DEFAULT NULL,
  `qualif_off` varchar(150) DEFAULT NULL,
  `tel_off` varchar(30) DEFAULT NULL,
  `photo_off` blob DEFAULT NULL,
  `desc_off` text DEFAULT NULL,
  `date_off` date DEFAULT NULL,
  `nom_off` varchar(30) DEFAULT NULL,
  `pren_off` varchar(50) DEFAULT NULL,
  `email_off` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offre`
--

INSERT INTO `offre` (`id_off`, `serv_off`, `qualif_off`, `tel_off`, `photo_off`, `desc_off`, `date_off`, `nom_off`, `pren_off`, `email_off`) VALUES
(1, 'COURS D’ANGLAIS ET GARDE D’ENFANTS', 'étudiante en master à l’ENS Saclay', '575454145', 0x646174613a696d6167652f6a7065673b6261736536342c2f396a2f34414151536b5a4a5267414241514141415141424141442f3277434541416b47427841534567385145413850465255574542555645424956454138514542555146526357466855564668555a4853676747426f6c47785556495449684a536b724c6934754678387a4f444d744e7967744c69734243676f4b4467304f476841514769346c494355744c5338744c5373744b7930744c5330744c5330744c5330744c5330744c5330744c5330744c5330744c5330744c5330744c5330744c5330744c5330744c5330744c662f4141424549414c634245774d4249674143455145444551482f78414163414145414151554241514141414141414141414141414141415149444241594842516a2f7841424f45414142417749444177594a4277674743774141414141424141494442424546456945474d55454845794a52595845554d6f47526c61477877644557516c4a5659704b694a57527964494b7a777641564d7a527a3466456a4a445644593357446b364f7930762f454142734241514143417745424141414141414141414141414141414341774545425159482f3851414e7845414167454342414d4742514d42435141414141414141414543417845454569457851564668425847426b6148774579497973644753776546434642556a4d314a6967714c692f396f4144414d424141495241784541507744724349693344584349694149694941694967434969414969494169496743496941496949416949674349694149694941694967434969414969494169496743496941684552415369496743496941496949416949674349694149694941694967434946645a44312b5a59627345726c6b425847776e755751426263716c573538696555734341645a56664d7436765756577055637a4d3252527a54657232714443332b536d666a726272746f716c6d37466b576a4231465733516c5a614a6e5a6a4b6a4349525a6a6d6737777244344f727a4b616d694c69576b55454b564d774552454152455142455241516949674a524551424552414552454152455142455241455261317433745933446f5750794238736a6932474d7579673562467a3348666c6263627435634270653477335a584d70584e6c527253644175474d3556735444737838454976717a6d48687475712b652f7258576467647032346a544f6d45526a637955787974766e626e445775757831686357654e3475505759664558417a6b356d787878674b3469685674334a68464b7051465367727a38637865476b676b7161687862477743396864784a4e6d74614f4c695341755a56664c566f376d6350317630444a5070626a6d6131752f7342387158734c4857577541615745507636722f42564d466741745a324132756269554435444749354933354a6f77374d3355586139703335534c37397861527276577a685a766357734c717055705a594261664e726c614c6e7a4a7a7844737232325066634b335273365a4a634732505a633376317163525a63687763446653317863655a5757563870485731792b39674f3959306b5a43796768436970574d74584d5246584c4862755643755475566845524145524542434969416c455241455245415245514245524145524541584a65585342326244354c484c6c6e5a6667486b7875413779416675727253386a617a42715771706a445753434e6a7049386a377461357375595a63704f674a7557397a696f564638704b4f357a44596e59476e716f714f72644b3537532b54776d456e4b4f69584e59317062306871476b334f6f3357585a73486f346f596d785178736a59322b566a4768725272726f46353245344e4453736a706f474e6a62633552653563363133456b367564594539656e59766259327741576e547a4f5462324e79726c6a4652573557715362584b6c51727a574c504f6e4b313533453274593664742b4b764b67526661635277615430644e326975724c74774d493844613742497178744e464f484f696255353547427a6d6832574b554e44694c4732596736486775583765386e484e413147487876637a2f6530344c7048742b314865376e44726271527730304862487475434374583230725a344b4b726d706865526b665149414f5546774470414f4f5670633633325671316e4b4d3031737a5a704b4d6f74506447686367376e4e71612b4d676938455a4c534344646a794e522f3143757a4c6a2f49595a4a616e45716d527a6e4f4d635963393270632b5237334858396765634c734257777469686b7145525a4d4671576e6137586a317149365a6f31336c5a434c4f5a3273597374796c564b6b716e6e4e4c324e757459734c6c5243785a47574b796756544b793439696c463244567a47524556785745524542434969416c45524145524541524551424561776e6346636242316c59636b6a4e69326a5745376c6b4e6941344b7451632b526e4b573434674e2f2b433474742f74516179664a45627752456950716b6475644965752b34646e3652585774714a484e6f36317a6434705a69447842357432712b6647626c7359574e3235506446566432575533375a374870616d6e3844644b577a7874456c464c6655766a3651593736567266744e4c6765336f6d792b4d654630734e51575a484f446d794d2b684b7878593976646d6162646c6c77576d6e63787a58734e6e4e63484e505534473458594f54366f4468574e623472706d564c572f526255526a4d502b35484b746645302f683172706153562b365564482b704e666f6469796a5050437a336a396e2b48397a6346436c517179776c655a74486a444b536e6c71586a4e6c41445758746d6b63624e62666871642f41585870726e504c4c575769705952383656377a334d626c462f4c49664d7136737373477a59776c483431614d48733372334b37666f6d594f43593156346a5677736c666145767a7569594d6b65534f376e4233456732446453642f426270746f376d714b7164764c674774376e506144367272554f53434d47575a353369477a65347662632b6f6564653979713157576d696a763438317a327459302b397a5670705870756374583752323638562f6271644343536972614a6638414a2b6c6a6e2b7a6531456c412b515278784f593977644b3074797575426134634e787431334859757955316579614b4f574d336139676530386372686655646677587a77353179537575386c64615830686a76306f4a6e4e463965673770443857667a4b654671504e6c6533416474595348772f6a51566e6657334650692b46302b4e72752b7641334b626f6b4335494931757137716c78633632613167664b7269336d65624b5556534c426b6768574c4732584b6577384f2f7356354338645957557a4452444259414b7455746344755653507144466d62597168587167614171797259753649506349694b526768455241536949674349726b55643965437733594644497956665a454232717342564b7079624c45724246434b4a6b6c46434943785730346b6a6c694f3538626d487563307439362b624758476a6859376e44714933723662587a7674524147566c617762685579323769386d3372573368487130555631737a42585275534b71764c50487838486239316b723344317a75584e6d7536316c5964547a53504461646b7270414334434d4f4d67614c417547585557754e65316256576e4770477a34612f6466755530354f4430392b37483065693539796631474a35706f366f5657515267786d614e774f61396a5a37686336634c6c626f78386c2b506d584972532b48504c76334851705533556a6d5474336d61754b3871754a4e6d7247745935726d78524e5a6470446d3835637664714f4f72523546364f3039466a6c5450504547536d455063493274797777755a6d364a4f3750706278723856653264354d48356d76724a47426f49504e4d4f59757438317a72574136774c39345774556c4b7038735976784f76684b644843503431536f6d37625231657637393653366d4879547a4f46615744633647514f4863576e32674c4f355936676d616c6a34637935336c4c79442f77436f586e34646a624b54453636626d69385a36687257746347574c70723376593841644f315965336d30446132534237597a486b59574737772b2b6f4934433174664f71473071626a6657353031527154786b612b583563752b6d375438654e7655786341776a6e3662455867586445794b526e63484f4c767774637665354961764c55547738487735682b6c475262315064356c6535495a32383557514f73512b4d4f74626547754c535038417972796469597a44697363562f46664d77396f445874396f437a42577953584f33722f506f52784d6e55574a6f76676c4a667054667248314f306f694c6f6e6c437a4e6d3367364b77586e72506e562b575332673371777259374547517052464d695a454930437571476a5164796c554d734c632b347247575450754b786c5a44596a4c6349694b5a4568455241536949674a6a6263325755417159575743754b6d5475574a5749524555544952455142464b684153766e6a61702b6174726a2b647a447a50635063766f594c357678702b616f716e6464544d66504934726177753737696974736a455735386b582b3058667155763779454c54467666493346657471582f52704d76333547482b426246662f41433256552f715232465546774738714a4832574f5464614559334e7075786d4b6c7a674e547547703767724d5576412b645837634646717a4639443537446939306b6a766e534f643579586539557a7835683238466b546a707548327a3756534e533041366b3241367a354678466436492b697963494a7554736c7a30535056354e36677834684330365a3276593779744a487261315a64454d754f6b666e7376346e502f38417057396a4f6335353073514473734d6f592f4c64725a5377383264644c35387133366e4d6e67777a56446855383164306f685a6e3532317941334c6b2b7a667972627030354f4b302f7150505933475571646565567157616e6c306133752b562f493264575a5a626142654e5234787a644e4161703545676a594a335a48456337617a6a305732414a7562364475586f7270526a6655383232464b4931704f6756765567464c52714f395a44474143336e56416973346453686e544a5a532b694b4655544c56516441465956796f336a7556745852324b33754552464977516949674a565554626b4b6c58615962796f79646b5a526b4b464b68556c6752464b414969735654475061364e354e6e43787353303250614e79684f616975704f45637a4c67654e33485854755661784b4b6b62474842736b7a723238655179577477626663466c714e4b626b74647a4e5743692f6c3249587a3574304c5968586633353967583049766e336234666c47752f7676617870573968767166636174625a48674572726e493034436b7154784e5752323245555871314b354535646135482f3748502b74752f64784b2b7372774b36656a4e364a75705246726c6f56324b5731675661554659617544696d4a74744c4d33716c65504d34685a4f4352744c6a646f4e726b58414e6a324b64706f73745655742f34727a3543363439716e4150474b34744257724a64582b35376274435762732b55756359767a635466746b715a72595149324e6264784a445147334e794c72334f59643148314c794e6d4c637932347671654e754a5872335a39452f65487758546535343162466d72684f52776333517449494e6943434e7857573931726b72467143334b62416a5138622b3558366f484b377646315857724f6a526e55573654666b5a6a484e4e4c6d797977766b4f56766d4856326c584a524c46613768727733377638414e58384c79354a4e312b506a2b4c355063734b6f79583647363344506238533870566e4f4e474e6156527563746672746257326b6261386e716b6e774f6e474d57334652305854707a2f6739536e6d4432676a796a714b764c417772352f6b39367a31365441313556385043704c64372b4461763432756146614b6a4e706539455170554b56746c5a6a3141334b30736d567477735a5851324b354c5549694b52676845524153723950753871734b2f5437764b6f7a324a52334c79685369704a6846616d6d61305863566756315a6e59396a5259754738337459372f5574544559326a51547a79317465334870352b5262546f796d394e755a365a43787a41372b5374526d684c643438764256514d34727a7a376263356130762b332f6b374563416f78306e3666796262484751516265734c49576f4f2f6e2b6649765a774f6d734449666e57793636373964504d742f41592b5661726b6a543733665a66703536654a713472444b46504d3564326d2f716573766e376c416344694e6351644f6441386f6a594865734664386b6b73766d724561726e5a5a70722f77425a4b2b532f366269373372302b47547532636173396b59373131766b662f73632f363237393345755a5933427a626f6f37574c6161456b66616b594a6a363543756f636b4d5a384366397171656677526a334b366f2f6b4b344c553363425a4449674271706a6a74337134744b55723747776f6d4a4a486275564b797946596c6a74334b555a634759614e4d326832504e524f365a73775a6d417530734a3654514733766d484142574b44597038524c756661623657794f374f4f62735735755263326f736c61545866373954727878646170686c536c4b3864466179325732747238447a4d4d77313854417a4f77324a31796e696239617a4f5966394a6e335438566661727355642b3562744671564e536c37315a793671797a63592b39444562527664635a6d323439452f4665684f475a5348454276456b697736745432713641764d78356a6a4762466f614e58584a44695164414f48386855597565536a4b536a66523663394f50546e304c4b454d31534d623275397a4835336d33585a497a7349633033486146564c55756b73484f594c647257372b4b31344c4b627546766776455178446163466451663841546d6476742b312b64397a76797769566e66586e59326d6b79415a577561342f4f7351566b4c787342633370414232596a706164485132417676342b6f7232563750417a55364558464a4b327932585438395468596d47536f342f66333752434969323746424b785a6d574e2b7632724b564c3233466c6d4c7377316f59694969764b79455245424b7530353368576b61624736784a5851526d716c4162366f5171567557486a754c704836616b6e5164515765366e59797a655a652f54704f3141586e775079504249766c4f6f58715655526562736178776350477a4545634f74655277556669516e4e724e5575723658666b347933656a64744574306a7156506c615730664c3863506250456b594841673769764d69697354666754367446367268612f59764d592b356431456d3363567945766d567a6f554737506b56754b39624371634e416b506a472b5855364d4e75485876586b75587159535846757534614e3038703971374859304b6373557336766f32756a58483864536a744279564235586256583775586e3646654c314753436f6b2b6a4449373772436663766e756b707a49364f4962337662474f39784452375633666242317147755035724b504f306a33726b6d774e487a7549556a625844586d51396e4e744c6766764271393153646b326561716174496e6c486a44635271576a634243423343474d42644e354a59725964453736557378383068622f43756438716b5758455a667452524f2f41472f777271664a78446b773269485847352f333548762f69554b722f776f2b424b6d766e5a73696853693143386851716b51474a50486255626c5a344c4d6e48524b7363313062396e76577655563579622f414e4c4c366274424c2f6368547833314f355a5374307736506c56355730766f5258562b74686556744131786a3063774e336b456b4f64626347396664324c3156346530735a737831394166467564536478743342616661627468616a74665468707078384c6238316f58344a587278377a7751736b62682f6b73567031437979764555754a364f6f657467626747754959347573626d335230334e486151526f56355654577a683737766530356a647564777466573239657a684469595874594c50476257326866715736386261623172542b4e31317364566c4443304642745854656d693672537a6276763131733771326a686f4b56617132754b5775766a7953664453356e78566b6c763631782f626376527765596c787a79384347737a45334f2b3975363638694c634c4c324e6e387654487a744f7678665a7857657a4b6c535749676e4c7a6235634e645879346330786a4978564b545338726667397045564a4b396563417848377a336c46424b6c624255516949674a52455147754e323459306c70772f4744596b584748796b58485562366856664c794c3675786e30644c3856734b4b4c696d53557247715665324d54745268324d672f38414c7062483172464731342b72735a394879726455584e7848592b4772547a744e506a5a37396538766869716b565a476956473142634c4e772f46514f4e3643652f6475566d506147326e67474c572f554b6a344c6f4b685666334668453732666d584c7447736c5a57386a516a744750712f46765238367a4b54612f4c6f374438574c514f69426830313772636b577a682b7a4b4e4365656e645076646e33387975726a4b6c574f5761543844544d543270696e686c676668324d355a49334d5035506d473864613578736a6a7a734b71325331394a4f787234584d316a664738584c535873624a6c7a6a6f3249366e6551393656443242326a6d673934423971333365316b7a56567233614f4b387044716d75713256464c51596b4765444d59375052544d635a47766b4a4e7247347975594c33344c324e696472735670756170367a447178394d795049317a4b43595473796a6f626741386141627236337670723156466a4975766d5a7a644458766c37463958597a364f6c2b4b664c324c3675787230644c3856734b4a6b694d7872337939692b72735a3948532f46513762324f787468754d6b3230483948796935367233305778496d53497a484c33636f4f4f486e4c344c4a716639482f71395a30473954744f6e336a4c334c4c6f6556467735696c6d6f617039566b6361714f4f4573657832726f3278776b6c78754379354e7241333158525653414e53414c6e6562616e765663714d5753565671335131504264755a42455043734e7855533535435778304537324e5958754d626378746d495a6c424e7439316d2f4c794c3675786e30644c3856734b4b6170785768687a62314e652b586b5831646a506f3658347242786261324f566f745159794844785163506d444e2b704936375857336f7136324770316f4f45316f79564f744b6e4a536a756a6e597833387878583066556642582f6c482b595972364f71506774397569357937437761325438326262375472766c35476f304732415930734f4834754151624f5a6838326135336b6b2b7275586c53593232357930474c577562666b2b6631366231304e466455374a77315345595454616a74723646634d6656684a796a6258665130466d304e6862774446664a68395238466d345a74654969623464697842336b5964506d374233623175436c596f646b34656a4e5468644e6452557831577046786c617a4e652b586b5831646a506f36583471695462754d69777737476652307678577949756a6b5271356a563237614d4a412f6f37474e546258443551504b627261455253496b49694943555245415245514245524145524541554969414b5552414552454152455142455241455245415245514245524146434967436c4551454b5552414552454152455145496949442f32513d3d, 'Bonjour Hello Namaste, Je suis Shikhar d’Allakro, étudiante en master à l’ENS Saclay. Je suis disponible pour donner des cours à domicile.', '2023-08-14', 'Ble', 'Constance', 'ble@gmail.com'),
(2, 'JARDINIER PROPOSE SES SERVICES', 'Jardinage', '515454545', '', 'Bonjour si vous recherchez un vrai jardinier confirmé qui connaît parfaitement son métier fruit de nombreuses années d’expérience n’hésitez pas à me contacter.', '2023-08-13', 'Kacou', 'Lucas', 'lucas@gmail.com'),
(3, 'BABY-SITTING Allakro', 'NouNou', '415451265', 0x646174613a696d6167652f6a7065673b6261736536342c2f396a2f34414151536b5a4a5267414241514141415141424141442f3277434541416f4843425555464267564652555a4742676147786f624842735a47786f6447526f6848526f5a4778306347526f644953306b47783071495267614a54636d4b6934784e44513047794d36507a6f795069307a4e4445424377734c454138514878495348544d7249536f314d7a4d7a4d7a4d314d7a4d7a4d544d7a4d7a4d7a4d7a4d7a4d7a4d7a4d7a4d7a4d7a4d7a4d7a4d7a4d7a4d7a4d7a4d7a4d7a4d7a4d7a4d7a4d7a4d304d544d7a4d2f2f4141424549414c634245774d4249674143455145444551482f7841416341414141427745424141414141414141414141414141414141674d454251594841516a2f784142484541414341514944425155464251594542415546414141424168454141775153495155785156466842694a78675a45544d714778384164435573485246474a7967704c6849364b7938535244553849564d7a526a73334f546f394c692f385141476745414177454241514541414141414141414141414141414145434177514642762f45414377524141494341514d4441675545417741414141414141414142416845444569457842454652457851464d6d467867564b526f6641694e4c482f3267414d41774541416845444551412f414e565555635556614d4b525161697675726f726a377141456d7150327a6a7859737663304a56535143596b38415477453865464f4d64693074493179345956524a5077395a494564617833375339756939635157334a51495a574349594d5a6b45416777514e6556425248397075324637462f34636c454d356b44453574644d78346752752b6451647130306268545332306e6454744c7363592b667a6f41666735493436616752506c774938366134304954334e4f50304f464f3278515732447649424936634e54386439644631534162674a6551493451654d2f47676f69477477416165624132376577563458725a33614d6b3931313471772b5234485775342f4463563148496178346e6a55626d6a64396556416d656d746a375374346d796c3630325a48456a6d4f61734f444179434f5970384b79583746386332652f5a6e7546567541666859454959343667722f4145697461464d6867706c6958703235675646593756576b774d726138684231704d5246326355716838586345365a62613863737749367364664371376432726e563772614d79584645626c4a61326f6a2b55314a596d3658467934526c53796a5a462f6549793235363574656d55436f6e46374f7934613073676530426b78757a367166495a6653764e79536b2b4f462f50314a593178643162627663587650336264736457457a39636a7a714c4e304934535a796a66785a70566d6e6f5a6a2b61704237482f414242552b396b456443494448786871594732464a6269784d66777a7638392f6e307134527546554e4c59512f77436334336a55716568436e38366159477a6e747663752b34474a484e79592b587a6d7048423459463143385061453953326f6b2b58787074744f356d43326b3043714359356b366645672b565a4b32394b2f74455563326334526a6350644155726c346232677a784d6b30327739673237777a455a5134414a4937785a6733796f2b3162716f36493269367449313142614a41336a39616262573731753165517945626436465366534b313071767569686e74687a37527033735a4867444835552b374a57414c6c792b337532685051735a792b6b452b5170486171416d33634734677236366a2f556165595a31544343325065754d39787567567369672b4f5578353050354b5866595859615932626a4b37535759733638684248726f4b736d4877712b7a735843514553325750377849303852424a394b7137346c665a356966637a7036355350454343504b6e5731736177653161566a6c533069782b3879616b6a385551504d3836557364704c376a476d304d616352647a4763696e7572303639546f543543704b33673559715471676b387061594867414435673147396d724f613851654576364439637450446957433357423375595037717141506e2f414a6a536e486653757768373259373758314f347a413452436766436d4c6b745a396f414d794e6c63644a336a776b487a4e506577366e2f41424750552b586370445a6f487447552b34366b45487a492f7741707157716b2f7741414f3736537a7149496445444c7049677351522f556668554a69635769357264736b694e5a33456a6542347871616b786a6f76766263514a5549644a3771714e4f4f767652786b3030375159504c467751447849334d443772447a67655972544865796b5077513261685379715033664d554b326f656b394c4375697543674b365367346f723771364b342b36674450667448326739754c4d454a6556653850756d32344c534f6f5a64656e6e575237564447346337466d3379574c6552596b7a7048477464376667746374666752546d6943305843464243747041797a4a4234566b376f7075504875686d6a64756e546470753655463161475670664b75334631314e4f6c733579594d514a7054454b70686551674853674b445772714d6774787a6b2f6e316f2b4a747746472b414950506a7231704733595664354a2b76476e74753453514d7664336137682b6c4177595a684f6b5275494f73644f673864394d4e704e33744248517949707a374f4c6d6d6d6848694a6e5872534f5067714e30675149476f385a704179642b792f6141743751535a693472572f4e69724b547a3153504f7439466564507339773575625277367754446c6a4837694d344a365342586f7061614d324a33655652324b5545745075497374314945676541332b6e576e37632f536b4c7469565a654445413951534d33714a396154455576464d5468626f6e3337794c2f6b442f4f705862754442747167487546492f6c4948796d6e31725a6939395745716268614f6874685238365765795365397152386574632b504536616c335643534b7469646b46726864535151514e3239585568343667612b6c5248614844354857426f5166684661474c5148446a2f61736b376239706c75585461733643327a4b626b6a764851484b493041494f76474e4b30574e52344b51532f7446624346767674756b3839356a3465523531434c7468327a454b716b78724234626a4a4e4e47766c6a4c67744845363665664369753652414f586f4e504b69474b4d62476f304c584c354a556d63796a4c6d69574931356e39376c54765a31355774505a4c524b6e4a6d3031393444586a507a70472f68665a6f48527951644d726538444775764834553175706e314a41303338666e4e4f554531534355412b464c7461533264446d5a684f3871514e334c556e576e754b62496932776453414a47386239665754347a54545a4e775a39546d5969424f386d644e654e4a34374d6d49594d64566e774562767272574d6f76555a74424d6345414344565541582b4937324a3861355a64726c334d32387933796f584d4f5a4538667970665a714b533541494b71774a4f376876506b6147396d796f6a7a5a376c4c6b67674631797954414765424a50436933324b573342364e2b55656f46477731774170636a4d464b795078434e3368533232724f5568564d67674a484455672f6e384b79586b6b6b657a4a467644584c68346767654c4571422f6c576d6543634e614c677755634354796e516e70444830707a69597434544b446f50697a6432664953664d307a78566b5738486149304c7353782f6c6c6651566d6d704f2f4c4475633753326a6d444c4535564f6834676b417a784241333034325a6a4576496246324959416a704a33672f78622b766a53654848744d4d56496c37517a673857527666587741796e797148755372676f6452455478423465466152347275686a362f32667843735656637747346a6352776f56495774766b415333725036554b7255785762714b364b4b4b61375332705a77795a3731784558574d78314d6277716a566a344131326c6a3055483356514e7066616e686b6b57625679386542622f44543161582f79315374762f61426a4d5343675957555033625568694f545844336950444c5251575833747874327a68526d444b39396c794332434e32734e636a5651704a385a4936726a5a746c32306157596b7941544a314f34446554703530675037314b396e4556735a68383668304e78465a5767686753464b6c54763337714768785979776f7a474e42314a715274374a754d4377575250446a35564a3437594274596d3761796c6372537536636a6b4d6b4562345535654f716d724c73537945534f7347756563326e73646d50456d74796a32396b584750757834514b6d396e646d7954336a48502f65726c6332635144637435536677734e2f6765464d6b784f4a4a6757415048756e3577616c355a4e476977786939794c76396d456951786e667571713766744c614f51377a77306e3035627130664557376d52637879467555475043644b7a507456694c5a764d695334515a633079532f337a503841535035596f78536b324c50474b6a64466c2b7962424e2b326d34426f6c707978364f794c624235546c636a6f7338713267563562774f3037746c7739713431746871437246543538474851794b3358374d747558635a67793935383770636443304146674652314a4141457738544843757338356c756969734b4d61346141453874455a61564e4649704156507437747a396c777a42544632374e753348764352336e483849336453745970597367616e534f483139654e576e37537362375448756d6152625655484953717577486d322f705658573941694e354878342f476770484c7a36365632786446747330417877496d6645476c6c745245372f7149382f6c585574686978304133363874782f4c343071474175476c39576b2b636e644a6e6f594e6355362f65313034457a346d6b3749596a5834372f43674e49394451413175484b2b6767672f586e532b4c6333474c7364576954345272384b5176734164504f615068594d5a6c4c43524b6777592f64503475586c536173544a522b3961522f43666b666a526352634b32776b61466a357a724c56624737496f67466f587a42495a537962787075377747752f7a705448396a486a4e625a474169464d2b30596a664579706b636f724430704c74735a7055797257375a7a7262416b74335948585454774d557474362b467532725336354942504d37746650583070533234744f39357436495948484f784b78346a4b6167634f3561344c6a3738344f766a5070575358662b324a466a7878426932647859456a6d4175552f3636503275745a4d4e59586b37656552636f2b644e37344a764c43677931745250335a644a493868486e532f6257573967763363726e7a4c4c50776a31724b4f306f2f6b4563325934516f783346786250554d4d704651463151444834474e7678673933382f53706d367342462f7744634c656830714e5642637550316b2b594a672b68725343334768723747685439734e4f764f506c58616574437339436973522b307646334878376934436f74717157787242517977636678466a4d66686a377462624e59743971377a6a7a2b3762747235643576384176727552624b684645595631476b5547716842534b656247614d54687a797632542f38416c536d68636364506c547a5a544263525959376864744e36584650355541626c327932626d51596856373173642f6d55456b2f302b39345a6f3331564d4e63414d6a6364347253327a75384c6f67316b2f656e655043715a7466736d316f6c724a2f77354a796e6567337744754b446878485775584c6a64366b6476543556576d51533369677135675a4643316a73357a3574424d67435350486c544739684c6c7443553159382f6438787870346d776a63524c74344241567a4d5a3041676b456c76644561394e61796974584231536c6f2b5a3745523237326d693459657a75444f35414755793048556b515a58546a31724b58676b6744514c772b756c50397334704c324a75506147573057415867537171713574645a614d32757665706f67437334483454386a5852434f6c556365584a726439686a577566596266624a6937663351316c68305a686344656f52665373697255667351767864785676385357332f6f5a31502b7356736370734663726b304a6f41346154753341716c6d4941414a4a4a6741446d65416f354e49596c43364d6f304a42413859302b4e49447a707472464737694c74774751317832552f756c79515350434b527457326e335a6e723135304c534d72414d437251444234534a672f4c796f37584e644165663555466a6e69444f6f6e794f6e2b394e6231776a55626754364556787232376438503978363054326e446366487a486c507a6f4164706556674a4d486670366a34664f6d6d4b764552423566375533567944346271497a53545142313768593954542f596c706d76576b58336d7549414f75594766685450445747633555566d504a64654f6c6150324137505a4c7674626e766f6b356543463877585869304b2f68497057726f656c315a667354733562715132386167386a41336568706b32464e7651746d4d37756f4f376d616d6b5031362f7254585a56724e63754f544d58485051616d463859414a3554314e616f7a4b2f327037464e695148744656664d43776159654a477035695442347872307a626247776354595a3176576d5253546c63775550495a6c6b547567622b6c6270694d644769634f5031396364314d37324a5a7756634b796e51717967676a6943443448547835545763735365344757624b734d2b516b695362626a4e706f4437334f4e4f5646375633446d4e73694774756748554e62316a70492b565766745a73706c79587243776750665764553067522b35773654794f6b547454436674566b5a594e793252456d4d7953446c4a35695a483852727a4a78634a72554b74794873584d35444863705944774157666a4a71757335304d486d644f50365659624e6c317435437044512b6e455331516773737241504b3739344f75756d684661776b67535a4d5957354b4c7633637137535748674b4e59332f69352b46436c7354704e394665667531573050326a46337276426e5a56355a554f52443571696e7a723041683146656138546246743374677945643042356857496e345636434c59336e4b656c644c37713631493265497069466872526953424933384b344b4d42514236683266657a326b663853716655413066475767364f68334d724431424652585979376e774746626e5a7454343546422b4971634e4a6a345a554d466868634e744930674d663452452b75673836592f616e65503747317444766e50483451705971656b4154303647702f737a6159575137724474774f384b5064384e4e664f6f5437533771326342644f6864357469662f6359426f3845442b6c5a596f61556235386d7158305268415135546c4f6f495057446f592b487870786a634c374e4a3644314d54584d4952375141376a3961394b553231667a516f334455395364644f6b553338314571744e6b4d6f71362f5a526a526132696f62515862623278346e4b346e784e7550456971596e4f7048596c777069734f343372657445655472576869656d5a726b30556d75545347474a6f684e416d754530415a7232733743457562316d544a664d696a57475a72696c52305a697041345a542b4b614269646e7570332f4f51654949353136475931534f3175445672715a56544d7973544b2b396c49336b613854725579644b7a54482f6b394a6c6c7643736441704a343647664f4b4c667778476a41783145483556637335746a577a6c484568684878416f58724b335942746e31412b565a2b7164586f4b76715542724c435349506d41666a547a5a47794c6d497543327041306b6b3767425631547337594772495365724761366f743451466b6864444c4866484c6e76345565726642486f4e4f323968747333425738466261367a6b7352454d6f457878546941663071346468677a596632726a76336e6134656742436f423079715055316e574d7650696269676e566971714f556b41664f746f3254674262744967476971463941522b6c56695675337947655355564663436a4c432f584c2b31526d79677932797576657558576761453572726e55384e43504b44774e53324a59515a4d446e7748475430707473354d7733385849595237724f7857443531306e49487732474a31366d4f58315079626e58587354376f6e36472f346568703166594b496a54335142784d62674f50486f504b676d484a316366797959336a66455a6a70786f454d5674786d5538516447486b65686d7144746d796348694377424e6c77437637724a415a66364e527a793944576e50626b524141694142365656397637503972626532334856542b46687550715344304a46595a73616e476d4d6f5748326a625a7a5a76484c336d43584276416d426d36474239613035624658422f68336c52314535574b6c5757426f527855785666786c6e69773158756b63644445654933556239765a694d327557526f643445447a727a5669584b4b317653496934566b54754a477031336e665172743346674577792f774177424f75757443743759725051613778343135707846334f37335078737a456369784a4d6574656c554f6f727a666a4c4873376a322b4b4f366630735650797275516d4e706d6b786f336a5468554c45414b574a494141424a4a4f674141314a5049556e69374c4c4b756a4b34453557557134386a4234557842714d44536150496d6a4130416568767334755a396d3459386c5a6636586466797130697154396b7479646d57784f71766448684e78322b54566471514255724a667471783275487366783344354149762b742f53745a5136657459443971574e39707447344a2f38744c6476703775632f362f6851686c51616b626a6152396461554a70466454506c3555774f496c53665a304c2b31345976377674374d2f2f6354345579696a5956347549333458516a71517750355541656c7931444e53544e716647686d71514643613454524d31634a6f4136787147327061444e50454c48787a4566415649346e454c62557378674350695948784e56793637737261366d5742486b4450587648537153766b61644f30493754736c77316f35557a694177424d676a66726f444d382b64567535617532484b4f4270754a6741395662535235534f6c574d586934415962745152776e516a776e547a423456494668637437684d5645734d6170473636695637376c4878473079494169665835565464703753755848444f30724f6747692b6e4f72687462414f6279774e436672362b6858634a73736b4f727742424c53424b356454727642377538486e7a704c456b544c4c4a6b7a324e7778755967584d7559576c4e794a6745364241547731616635545674327232707871746b74323761444c6d476a4d2b76756d533066645033614c324e324a2b7a324657373358664b626e376f2b376238524f76556e705375444275597a45586d482b47685331626e63374c6d7a6b63774d3854784950577268476b524b5770684e6a625076334757376a486134387a62744d526b534449646b57467a63744e4e2b2b4975794d4c61616d59337871574a694d76556b674478717437517866733754584a67746f4478456b66715053706e5a627941544a6a33516565733638514a67487161304a5a4a5957796666654d35473765454834522b5a346e7970303331386149682b76536a5439656c41684239445558696b6e4e3964616b38526345664c352f6d4b5971752b6b426d5062505a6e7338397765376368674f4963454268352b39356e6c565277796b537034666e6c2f537237322f76454a617478377a73656e64482f774456565847594f476b48574a4d38526d6b377552623049726779564754586b62716947784b64343663766b4b464f726967453568723952384b465a32545a364657764f2b322f2f55346a2f774374652f38416b657651774e656675304b5a635a69564f6e2f4558704d54414e31395934364864787230454e6b3973587358694c6c713169374e2b30476b4f677a4e4b4654497a454b526d4258555164644e617572375062464a6b326868304a6a5335624a59626f6b53413648776e787173595873665a61477765302f656a565244655956315a644f42314736724e677346744444734d2b4b544557346767726b63636f4f6f506d66586a7a354a66553763556471726b7976744a7355594c454732747a4f6a4b475669494f386944774a4544556378555a6d713966615a733474615338674d57795a364269415a3847432b7072506c75534257754f57714a7a5a6f615a4e4c67336637494c67474233362b3075664e66582b395873334f745a35396c6a78676c6b51417a414838575a6937482f4d422f4c56345678424a452f4c2b3961475976667668454c4d5941424a4a3444696138783759326763526675336a2f7741793437674865417a4571504951504b74512b314c745345736e43327a3337676834344a39346566752b42626c574f7538654e416a7478754138364d4275464a6f4f4a6f3975547769656441427a7934564b396c384b743347596532323433464a38456c7950416849383669347179665a2f59445936323334467550384135475435754b414e6f7a556350545150536976556c446a4e5843314a5a715a37563269746d32584f2f636f356e394b545956657833616f7a414c4162656370316d435072396431516f7565794d784b535470377935744470393445677a35544a496d467462547569353751755365524a4b78796a6750436e6c3761495a537761496d6333753637773865364448764454546344757147525332526373636f37735878317846495a5433574249384e7a66723555585a57305661636a4267474b6b6a644935644e61684d6534396e4e304f67414f566b37796d64494564306b2b4f3438674b6a4f7a754c396e65794751747a54574e4450644a6a6a71523569716b36494e476242713770634737556e7970676d774c61346b33427143423365414f34547a4767302f6434376966443468726336797645486831704d3470335a6f444b674d6e654761654250335630694e356a5854753151457066634b43543441385a33514f7644703033553077347a6e5151676d414f73362b6665506e534b57576336377551334477384254387767676566365541516e6131732f734c494f58326c78455051534a62797a442b6d724e7372483262684b326267634b63756749476d6b426a6f323767616f48617374637649712b2f4b6859503369326e6833733158625a577a4746744c596649696744754c42592f6562704a6b3041574e574d542b666a2f4147704b347a746f4d6f484d6d655049666e544f337334327a49757349336b37687a6b37754138685232764a45414d3547387149586a725078306d675171625158566d6b387a386830704233304a33446839665844725356373267393155586647624d33487845656c4a32376c786c5074496e3930523430674b64396f64762f41414659623159612f7741595a59396376705657326a634b684c673179757339566351523871742f62475877397964775a43504258543870716e586d7a32542f41412f46442f6175447161553078506b64746766774e433842766a2b31436b734c74484b6967384251724830352b43715a745659583235736c4d666941654c687831446f722f384164486c5735316c583274594c4a667458754432796838626244587849754b503561394a435a44624232726762646f4a6973486e634d534c716e765154497a4173735275306e634f4e5737413970646d6f4a7433485464495933324838714e6d5565565a5775744842714a515575545747615565456a56647037597764367936653351357751564a796b7a706f7251527057512f7370557373677753415a4547446f664130364c56775551676f38437935584f7252644e6d39747a68375357625672757149425a6f4a356b7141654d3861376950744278444b5643497367695153643469527531385a716c41306161304d693837413748706a634f6356656534486432524168574d71414b58597372456e504969527a343038742f5a62596a5739656e6e33506c6c507a7133646e46466a4259533277672b77446b64626a5a7a357961654a74693058396e6d47614a696459357879726d79546c71704d374d63493655326a4c4e722f41476233376665733342635566644979763547594a394b71574b77723232794f724977344e495078336a72586f786c444361696470624b74586c4b334c61754f6f314855486834306f35704c6e63715854786c3875786771767a2b764b7272396d75476d3764752f685255484c76746d502f786a317062627659416f432b48596e65526261446d6a584b7262775933544d38785866733174334674337977495175675752427a4b487a6a58585356486a505774347a556c73637338636f756d583958705a5770686e4f67416b6b774b654d7157316d34776b377a75696f6e6b5564693459584a574c5a7170653163614c39306b456c454a56644e436676454478302f6c6e6446546d32385136714c5673356d754b6478584d672f4751544c4c41654e444a4142304e5271595a4c64736852425865446f5936316e504a61324e73654c53376b525470416b3656443373575561564d455434486d44307154327538644b723573467a4f356566507735314d4e76384149724c4a56754c416d354d4d79724f6f424b676e2b45484b6645696f374f63773568642f67322f7831715a56416f676268554c696c797566456a31676a3556704f32634d31344e4632446a5264746f57456b5148484f4e2f722b6454616d64414933616374782f4d31514e68597a324a55743772614d4f68342b5658733431414d7749317266484b343738674c75775164616a377549362f585077464e73546a38786a362f74545a726e31772f7742683861757868634a676d7659314947676c7965575664442f6f486d6176695757476b68427534466a77336267505771527333472b7976706c747339786c59424241475764537a4851475133716556572b33695833745964656f4b4f427078673575484148645441637068453935675849316c7a6d6a5467446f4e334155375652456350384165695772345953734562745050516a6544304e4a7334424f55794f49346a58654f6c4249686a54426a7a48725466466b684749336b4750474b5878356c51773466583656446258633349746f2b563168744e2b73783869615447516d31304c324c7138665a7438425035565363456a43336c59524c4d4279495a6542334855384b764f49764d565a4c697778556a5471434e617a37427647347744364765593347447272584c3145564a4178485838522b4643704b336c49456f7338642f36304b692f7157625a4e595832373751726a4d57665a734461742f77434862313061444c4f50346d694f697257374f6b694f644e6354675575493174314449774b737047684234615631555a4f5a353046646d726a7466734266573433734372573537755a697267636a3353444736655049564750324d78772f35536e7764615974534949476744553065796d4d472b30665548355551396d4d5678746e3050365544314968356d757364443447703741646b73546333497748525a31485055482f414871627733326558442f356a4f504251506e4e4f67547667303745345a4c39697951597941495930494541456443436f724d76744d736d7869384f754556383975336e4c49437a426d59784d412f6458635275625866566777477963565951573756363856476f55734f372f4445454439505643377362454d32624b6378494a4a615365704d79545556334e4e54717246657a5061752f63554a66773178472f47464f513774366e764c504953504372626375367177334742366d42506e4872556667396d3556427548574e594a50506470346576716e6a3851317532366b54494f556a51416e647165522b5659354d644b306457444c62706b6779614d50764b51566e694f452f455552455231467856304f724c7842336d427a6d5a484835732f2f41425947354942305168744e354f5750392b744a345279486d30325a745355313031314242314652434d755561357052716e334a472f594264665a6b4b516d59474e444a6a2f742b4e5166615548455953387665743362594c6137324379574856536f6b4877715778694d4a754b43485546765a6e3732346b4b52704a6a313554544b37745575794662624c4c4b7477466538564d6e4b42724d6354777a527659454b5363705851513078696c597a374f6250754257784e2b43376f693553495a455561413870685352307070746a6143323942336d626376546d5479302b6453323348764d72433072726d424763323349486b515037664b6d57734e63396f56754b512f456d53442f4354387170593364736e4a6c584346396c583061345469625959483357314b72305a4a6868312b484a547453523752496949534933524a69493455757546355532786543303034567134577152787a64736a5377706e696251624e7a4d4565496b666e547534736155334a704e4335436c75355047492b473731716678725a4d70456858524736537971664b712b3977534e654d315a634f345a4c424d613277703366646c666d4b76487a51684330356d6e5766312b766f437575796a68464d376c37362b763936304173335a6a425a69627261524b716563366d4479363853545676526742762b58687166536f445931706c747043456a49444a596761695441426762366e467345714343366e694d302b676152773656516d776c2b335066516748385133486b4841336a58356d6b4d5168594365362b3845616b486f667644647636567a4657436f4c49304858654f3632683063445765752f77444e716d4a396f736a517164564a31426a6e7842424f75347a51416c65326b43696769474a594d4f52454167654a493961683866684d784e30485854764c7647703038494d65464e735268726a444d53464a5a7942797a452f6c422f6c4649706576577a4b777734727a314245486e426a7971577830484f4b61505a334e593931774e52794a356971456d484e75626245466b4957515a4233616738694344563575596933644f565a747671436a6145634a5766574b7a7a427351574453534472766d5a316d654d6973736932426b676c3353753057306d6772745a36523262754b4a69476866485375716154784a314172704f646a634a58636c48416f34465553492b79484b7548446a6c546b4c58517449517a53336b4d676163663170367a4b64574b672b5879726d536a676b56563271594b30396767646542486c4e474c44722f53333655596e53544e52574e326939736b2b795230344d626d556e2b5849616c306a61455a7a644a723837456d4845786c4a3652423864666f30533567467564313758642f6579783843545662326832684e79336c542f68326b484f7244687742437a7633794e514e3470545a6e6147364762326c7848552b376f676a3059452b664b70636b6265686b6a7a2f4259724f78374b524344515241426a77696e713230413041413950576f4a653043734e47494d7833516d587a6d53666853654b7854334e5733446342754858782b565a547952696151777a6c396959763475327637353544556575366b502f454278746d503468486f616a4d42637a63504d62716b597242356d2b44703976464b6d4a4b75484a7a66733671334d5730426e784547615669337642756a7775585150545046646968543961516e3038524337683066556c7a2f41424a5a6234736850786f69576253616c4659636862584e3635737677705734314a46365872794432305375646f634374396955732b7a49472b524c38744630553966577156696468346c57397773504566455457717342476f704d325236306e6d6b793367692b4e6a4b30324c69502b6b33772f57724a59326463396c62514c444a4d6b6b5272716433556d72674c5131356e5838714e374d5253576153344a3974457034324e63626534486b61376132427143544f753642426a6e304e584432596d6b485166587970504e4e3979316868344f344c616c7853467549724c48335242486b5351337771775748566c7a495a485436305036315844476c4b596538625a7a412b5031755031757262466e6431497979394d6d726954397868352f583971724f50734333634a5167417156493464306949413553664477476b7262783658415368424b364d7646664562786f65504f7176747a486a4f46586878355351422b766c5858657877303036595a686e6550756966723966474b533967704d422b657138447276353673665077706b6d307847342b5867543876696165594f36686e75376f42303362784938353943654649596e694d49747a7558524a4875734e447869443443617065334c475334633272677757347341464b6b2f7651305430484b7444763273326e45626a382f503961724f3039697666767965366d564d783436466841484d694e6546524e57674b35686249794b546f534a386a7150675251715178647447646a376f6b674163414e4238414b46514f6a5931704b364f3936664b6e4b577a763039614a63734e4d355446624935326d4a6f684e4b43326152624757316a4d3669524931333961364e7032662b6f6e725363307535636345354b31462f734c354b36467071323172502f55486f3336556d647357662b702f6c663841536c3673664b4b39706d6645582b772f6968464d4632355947396d506772666e53567a62397267726e79582f4150616b3873504a70486f633734677961646536427a7070657761747655476f702b30756b4c62336353333541666e54562b3046343767712b414a2b5a7148314546334f6a48384c366838704c3773643476594e703936696f5046646937467a52677745364654425538776163584e71336d3375664b423868547a5a65315347435844496233574f7042354538516679715939524754716a584a384e7a776a715454613749694d46324e7534624f3976326c304543465a6c344765367a45415431354369324676762f7743702f77414c6646724d73524a414c75704f61514e774d613669727579426875423868545045374d53344347476e4c643871306e6a6a49346f39564e636b4e674c375a737177564a304d45442b586d50685530583444553148596a59423079584758706f666d4a2b4e4f724747757175584b47367a413878584f38556b645565715575525a7268484b69746556524c74416f763748644f38715055306a633247484d33474c4834447747345534346d2b535a64536c787546766258736344506d503170453752746e63666a547064673276772f4f6c423264742f676a7a2f414c3162774c79524871706670474459354f6446474b484d552f66737a612f324a70706965794670786f376f656175772b55564436642b54655055792f5346743469756a45434e5431704f7832504337385263492f696638334e5037505a7579506561342f77444537522f6c697039435273737938444638554e59493070742b334b547671784a736977502b57766e4a2b5a717164707468505942765756757567315a45797336434e3642684c72306d523147346654794538305632486e747764615475596b41622f7742617075473237683767482f45334c5a5034374a59634f4e747a3134634b65596132397876384c45574c306277726b50784f7473366a6452376552487559432b30374a646c7557325a584257485573446c427a465448764177644470546f624f754f786468424a6e77336a3045742f534b64345a373176513464696678426b6a6542704c6143542f6c70772b3058414265316c6e686e5364335578773538427a4e64574f476d4e48486c6e716c597a573274765572723874326e7748394a6f357862763771783162634e4f583175616a767442447063747576556f57587a644a4148696550576b77344e7a4c4f676e7730352b73655a717a4956653479714e63785054574239656f4e4e337852564c6a6e67736a792f33705134684a4c45384e50442b394d4e75587837504b4e4d35413868716679705067614b336d6f5533784f4b434d566761523851442b64436f6f6f32764662585732636949575941616b776f303031393437366a376e74623376764366685851656e487a6f554b304f61556e5a4762597442536b626f4939442f656f34304b46655a6e2b646e324877332f576a2b662b6e61464368575233417273304b464167554b46436b414b4677537036616a796f554b424d6d396c625568526d33534662393038434f616e6c7771664c554b46656c676b334657664d6645634d4935485337734e61664e52364643746a474549306752584b37516f4e46464945304a6f554b426e4a6f554b46414859726c436851414b354e646f55444b5a327237435738564e79786c745839547953346633674233575034683567384d6d78754475346534793346475a4444413554423035456736554b46556375614b512f774f32735261494b58726d54666c5a7334476f3368354a4867663171667776617a4d763841697249306c30476e43433174764d39307a584b4649785a4a324c6471346f64466c54454d724f68365471445036436c3765415136484f334c4e6363394239376d5a6f554b4269793453316237325864707850546354485031714a32694d35447a33524d7279455470365236554b464a6a5242766477354a4e3333795354414d51544b2f3559727443685445662f396b3d, 'Société anonyme, leader dans le secteur du service à la personne recrute des nounous.\n\nLe salarié est employé de la société de service à la personne qui le missionne au domicile d’un ou de plusieurs clients.\n\nLes horaires de travail sont réguliers et liés aux besoins du client.\n\nTÂCHES À ACCOMPLIR :\n\nToutes ces tâches se feront en prenant en considération le rythme et les besoins de l’enfant :\n\nEffectuer les actes du quotidien nécessaires à l’enfant en respectant ses rythmes (toilette, habillage,\n\nsieste )', '1900-01-22', 'N\'tare', 'Marccel', 'marcel@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `offre_attente`
--

CREATE TABLE `offre_attente` (
  `id_off` int(11) NOT NULL,
  `serv_off` varchar(150) DEFAULT NULL,
  `qualif_off` varchar(150) DEFAULT NULL,
  `tel_off` varchar(30) DEFAULT NULL,
  `photo_off` blob DEFAULT NULL,
  `desc_off` text DEFAULT NULL,
  `date_off` date DEFAULT NULL,
  `nom_off` varchar(30) DEFAULT NULL,
  `pren_off` varchar(50) DEFAULT NULL,
  `email_off` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offre_attente`
--

INSERT INTO `offre_attente` (`id_off`, `serv_off`, `qualif_off`, `tel_off`, `photo_off`, `desc_off`, `date_off`, `nom_off`, `pren_off`, `email_off`) VALUES
(4, 'JARDINIER PROPOSE SES SERVICES', 'Jardinage', '515454545', '', 'Bonjour si vous recherchez un vrai jardinier confirmé qui connaît parfaitement son métier fruit de nombreuses années d’expérience n’hésitez pas ', '2023-08-13', 'Fofana', 'Ibrahima', 'Fofana@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacie`
--

CREATE TABLE `pharmacie` (
  `id_phar` int(11) NOT NULL,
  `nom_phar` varchar(80) DEFAULT NULL,
  `photo_phar` text DEFAULT NULL,
  `local_phar` text DEFAULT NULL,
  `period_gard` text DEFAULT NULL,
  `desc_phar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacie`
--

INSERT INTO `pharmacie` (`id_phar`, `nom_phar`, `photo_phar`, `local_phar`, `period_gard`, `desc_phar`) VALUES
(1, 'PHARMACIE SARAH ', 'https://media-files.abidjan.net/pagesjaunes/__medium/sarah.jpg', 'Route camp Gendarmerie Agban, Centre commercial Carine N Couture, Face Qtier Chicane - 220 logements\nAdjamé - 09 BP 407 Abidjan 09\nAbidjan - Côte d’Ivoire', '\nLundi	08H00 — 18H00\nMardi	08H00 — 18H00\nMercredi	08H00 — 18H00\nJeudi	08H00 — 18H00\nVendredi	08H00 — 18H00\nSamedi	08H00 — 18H00\nDimanche	08H00 — 18H00', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad quas pariatur ratione, quaerat assumenda quia quidem perspiciatis sint facere fugiat possimus! Voluptatum quasi eveniet magnam corrupti possimus, sit minima at?'),
(2, 'PHARMACIE II PLATEAUX-AGBAN', 'data:image/jpeg;base64,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', 'Deux plateaux Agban', 'Horaires : \nvendredi	07:30–20:00\nsamedi	07:30–13:00\ndimanche	Fermé\nlundi	07:30–20:00\nmardi	07:30–20:00\nmercredi	07:30–20:00\njeudi	07:30–20:00\nHoraires : \nvendredi	07:30–20:00\nsamedi	07:30–13:00\ndimanche	Fermé\nlundi	07:30–20:00\nmardi	07:30–20:00\nmercredi	07:30–20:00\njeudi	07:30–20:00\n', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad quas pariatur ratione, quaerat assumenda quia quidem perspiciatis sint facere fugiat possimus! Voluptatum quasi eveniet magnam corrupti possimus, sit minima at?');

-- --------------------------------------------------------

--
-- Table structure for table `projet`
--

CREATE TABLE `projet` (
  `id_proj` int(11) NOT NULL,
  `lib_proj` varchar(150) DEFAULT NULL,
  `desc_proj` text DEFAULT NULL,
  `auteur_proj` varchar(80) DEFAULT NULL,
  `date_proj` date DEFAULT NULL,
  `photo_proj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projet`
--

INSERT INTO `projet` (`id_proj`, `lib_proj`, `desc_proj`, `auteur_proj`, `date_proj`, `photo_proj`) VALUES
(1, 'Humanité numérique : l’Université virtuelle de Côte d’Ivoire au service du quartier précaire d’Allakro', 'Mitoyen au siège de l’Université virtuelle de Côte d’Ivoire (UVCI), le quartier précaire d’Allakro servira de champ d’étude à la promotion de licence 2021-2022 de l’UVCI en vue de résoudre des problèmes d’inclusion communautaire par la diffusion de solutions numériques.\n\n(Cio Mag) – Chefferie, associations de jeunes et de femmes… C’est avec une forte délégation que la communauté villageoise d’Allakro, quartier précaire de la commune résidentielle de Cocody située dans Abidjan nord, s’est présentée le jeudi 27 janvier 2022 au siège de l’UVCI pour participer à la cérémonie de lancement de la 3e promotion du Projet collectif tuteuré (PCT) visant, cette année, l’inclusion des structures de l’UVCI au sein de ladite communauté.\n\nFondé en 1974, Allakro abrite le siège de l’UVCI depuis 2017. Dans le cadre du projet voisinage faisant le pont entre l’UVCI et ses environs, diverses actions de portée sociale, telles que l’installation de panneaux miroir, sont menées par l’université en faveur des populations d’Allakro. Cette année est particulièrement innovante en ce sens que l’UVCI, qui veut améliorer son impact sociétal, va se servir de ce quartier comme champ d’étude de sa promotion de licence 2021-2022.\n\nLes spécialités de l’UVCI au service d’Allakro\n\nBase de données, développement d’applications et e-services, e-commerce et marketing digital, réseaux et sécurité informatique, communication digitale, multimédia et art numérique… Spécialité par spécialité, les 134 étudiants de cette promotion seront mobilisés entre janvier et juin 2022 pour résoudre des problèmes d’inclusion communautaire d’Allakro.\n\nDans l’attente des résultats, le PCT 2021-2022 évoque des initiatives qui pourraient faciliter le commerce en ligne, ouvrir les populations d’Allakro sur le monde extérieur, faciliter l’accès et l’usage des réseaux sociaux, et accélérer le processus de développement de la communauté.\n\nA terme, les 2000 bénéficiaires du projet, dont un grand nombre exerce des activités professionnelles sur le site et hors du site, pourront vivre et travailler dans un environnement offrant plus de liberté, de visibilité et de revenu.\n\n« Cette année, nous avons voulu pour cette promotion résoudre le problème de l’inclusion communautaire (…) Il s’agit pour nous de faire en sorte que le savoir que nous emmagasinons au niveau de nos universités puisse être utile », a expliqué le directeur général de l’UVCI, Prof. Koné Tiémoman, devant ses convives du jour. Figurait, le chef de cabinet du ministère de la Jeunesse, de l’insertion professionnelle et du service civique, Kouamé Fils David Vincent, parrain de cette promotion.\n\nHumanité numérique\n\nTroisième université publique en termes d’effectif avec 14.000 étudiants, l’Université virtuelle de Côte d’Ivoire pratique la techno-pédagogie. En plus de la formation et la recherche, elle promeut l’employabilité. Grâce à ses laboratoires de fabrique (FabLab) et ses incubateurs, elle apprend à ses étudiants à monter des projets d’entreprise. A ce jour, six sociétés à responsabilité limité ont été déjà créées par les étudiants de l’UVCI, la première en 2018 et la dernière en 2020.\n\nSi la pandémie de Covid a jeté un éclairage sur les besoins des quartiers défavorisés, elle a surtout renforcé l’idée d’ajouter l’humanité numérique comme quatrième pilier de l’UVCI, après la formation, la recherche et l’employabilité.\n\nL’humanité numérique, un concept novateur qui vise selon Prof. Koné Tiémoman à faire en sorte que la collaboration entre l’être humain et la machine soit à l’avantage de l’humain ; que le numérique soit beaucoup plus au service de l’être humain et non une contrainte.\n\nC’est fort de ce concept d’humanité numérique que le premier Projet collectif tuteuré a été lancé au cours de l’année académique 2019-2020. Il a mobilisé 534 étudiants pour résoudre des problèmes au sein de l’entreprise Fortic Group. En 2020-2021, 478 étudiants ont été mis au service du ministère de l’Education nationale pour numériser et simplifier la gestion des permutations des enseignants. Cette année, il s’agira pour la promotion 3 de travailler sur l’inclusion communautaire des structures de l’UVCI. Des initiatives qui traduisent sans doute une extension de l’aire d’influence de cette université, en qualité de transformateur numérique des pratiques pédagogiques.\n\nSOURCE :\n\nAnselme Akéko\n\nJournaliste spécialisé en économie numérique, télécoms/tic, mobile money, cybercriminalité, inclusion numérique et financière, et transition digitale. Passionné de web journalisme, Anselme Akéko est Responsable éditorial Cio Mag Online et correspondant en Côte d’Ivoire. Contact : +225 05 55 46 49 94 (WhatsApp)', 'Université virtuelle de côte d\'ivoire', '2023-02-01', 'https://uvci.edu.ci/portail/images/articles/large/allakro-1.jpg'),
(2, 'L\'université virtuelle de côte d\'ivoire à procédée à une remise de dons aux habitants d\'Allakro', 'Ce lundi 16 septembre 2019, la Direction Générale de l’Université Virtuelle de Côte d’Ivoire (UVCI) a procédé à la remise officielle d’une dizaine de tablettes, de 15 tables et de 60 chaises à l’école primaire du village d’Allakro. Ce don s\'inscrit dans le projet voisinage, projet initié par l\'UVCI dans le cadre du programme social d\'aide aux démunis.', 'Université virtuelle de côte d\'ivoire', '2019-09-16', 'https://scontent.fabj2-1.fna.fbcdn.net/v/t1.6435-9/70294477_2528738157412653_3457260115625771008_n.jpg?stp=dst-jpg_p180x540&_nc_cat=107&ccb=1-7&_nc_sid=730e14&_nc_ohc=CCYr3T5nnmYAX88OEKC&_nc_ht=scontent.fabj2-1.fna&oh=00_AfApanq_O91NegeuTaSRS1pbT-bsBPmIuqHZ5Ig3hyEL4Q&oe=650F4849');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acteur`
--
ALTER TABLE `acteur`
  ADD PRIMARY KEY (`id_act`);

--
-- Indexes for table `actualite`
--
ALTER TABLE `actualite`
  ADD PRIMARY KEY (`id_actu`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `amenagement`
--
ALTER TABLE `amenagement`
  ADD PRIMARY KEY (`id_am`);

--
-- Indexes for table `centresante`
--
ALTER TABLE `centresante`
  ADD PRIMARY KEY (`id_centre`);

--
-- Indexes for table `deces`
--
ALTER TABLE `deces`
  ADD PRIMARY KEY (`id_dec`);

--
-- Indexes for table `deces_attente`
--
ALTER TABLE `deces_attente`
  ADD PRIMARY KEY (`id_dec`);

--
-- Indexes for table `demenagement`
--
ALTER TABLE `demenagement`
  ADD PRIMARY KEY (`id_dem`);

--
-- Indexes for table `maladie`
--
ALTER TABLE `maladie`
  ADD PRIMARY KEY (`id_mal`);

--
-- Indexes for table `naissance`
--
ALTER TABLE `naissance`
  ADD PRIMARY KEY (`id_nais`);

--
-- Indexes for table `naissance_attente`
--
ALTER TABLE `naissance_attente`
  ADD PRIMARY KEY (`id_nais`);

--
-- Indexes for table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`id_off`);

--
-- Indexes for table `offre_attente`
--
ALTER TABLE `offre_attente`
  ADD PRIMARY KEY (`id_off`);

--
-- Indexes for table `pharmacie`
--
ALTER TABLE `pharmacie`
  ADD PRIMARY KEY (`id_phar`);

--
-- Indexes for table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id_proj`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acteur`
--
ALTER TABLE `acteur`
  MODIFY `id_act` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `actualite`
--
ALTER TABLE `actualite`
  MODIFY `id_actu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `amenagement`
--
ALTER TABLE `amenagement`
  MODIFY `id_am` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `centresante`
--
ALTER TABLE `centresante`
  MODIFY `id_centre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `deces`
--
ALTER TABLE `deces`
  MODIFY `id_dec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `deces_attente`
--
ALTER TABLE `deces_attente`
  MODIFY `id_dec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `demenagement`
--
ALTER TABLE `demenagement`
  MODIFY `id_dem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `maladie`
--
ALTER TABLE `maladie`
  MODIFY `id_mal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `naissance`
--
ALTER TABLE `naissance`
  MODIFY `id_nais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `naissance_attente`
--
ALTER TABLE `naissance_attente`
  MODIFY `id_nais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `offre`
--
ALTER TABLE `offre`
  MODIFY `id_off` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `offre_attente`
--
ALTER TABLE `offre_attente`
  MODIFY `id_off` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pharmacie`
--
ALTER TABLE `pharmacie`
  MODIFY `id_phar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `projet`
--
ALTER TABLE `projet`
  MODIFY `id_proj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
