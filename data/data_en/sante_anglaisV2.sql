-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 10 sep. 2023 à 10:30
-- Version du serveur : 8.0.31
-- Version de PHP : 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sante_anglais`
--

-- --------------------------------------------------------

--
-- Structure de la table `accueil`
--

DROP TABLE IF EXISTS `accueil`;
CREATE TABLE IF NOT EXISTS `accueil` (
  `idAccueil` int NOT NULL AUTO_INCREMENT,
  `accueilTitre` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `accueilText` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `accueilDescription` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `accueilImage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `accueilButton` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `titreAction` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `photoAction` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `textAction` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `buttonAction` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `titreFormation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `photoFormation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `textFormation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `buttonFormation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `titreAgenda` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `photoAgenda` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `textAgenda` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `descriptionAgenda` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idAccueil`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `accueil`
--

INSERT INTO `accueil` (`idAccueil`, `accueilTitre`, `accueilText`, `accueilDescription`, `accueilImage`, `accueilButton`, `titreAction`, `photoAction`, `textAction`, `buttonAction`, `titreFormation`, `photoFormation`, `textFormation`, `buttonFormation`, `titreAgenda`, `photoAgenda`, `textAgenda`, `descriptionAgenda`) VALUES
(1, 'About us', ' HEALTH AND TRAINING <br>\r\n Investing in a better future', 'Our \"Santé & Formation\" association actively contributes to the training, education and professional integration\r\nintegration of disadvantaged people.\r\n Our activities focus on physical and mental health, information and prevention. ', ' <img src=\"img/pexels-murilo-fonseca-17239050.jpg\" alt=\"\">', '', 'Our actions', '<img src=\"img/caravan.png\" alt=\"\">', 'Medical Caravan', 'Read more', 'Training courses', '<img src=\"img/02.png\" alt=\"\">', 'Economic emancipation', 'Read more', 'Calendar', '<img src=\"img/r.png\" alt=\"\">', 'Medical Caravans', '2024: Coming soon!'),
(2, '', '', '', '', '', '', '<img src=\"img/08.PNG\" alt=\"\">', 'The importance of water', '', '', '<img src=\"img/06.PNG\" alt=\"\">', 'Reintegration into society', '', '', '<img src=\"img/r.png\" alt=\"\">', 'Education', 'Health Education '),
(3, '', '', '', '', '', '', '<img src=\"img/07.PNG\" alt=\"\">', 'Family support', '', '', '<img src=\"img/05.jpg\" alt=\"\">', 'Preventive healthcare.', '', '', '<img src=\"img/r.png\" alt=\"\">', 'Scientific conference', 'Raising scientific awareness of health education <br>\r\n Lithotherapy in health.');

-- --------------------------------------------------------

--
-- Structure de la table `action`
--

DROP TABLE IF EXISTS `action`;
CREATE TABLE IF NOT EXISTS `action` (
  `idAction` int NOT NULL AUTO_INCREMENT,
  `actionTitre` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `actionDescription` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `actionText` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `actionDate` date NOT NULL,
  `actionImageText` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `actionImg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idAction`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `action`
--

INSERT INTO `action` (`idAction`, `actionTitre`, `actionDescription`, `actionText`, `actionDate`, `actionImageText`, `actionImg`) VALUES
(1, 'Our actions', 'Investing in a better future .', 'Our activities focus on physical and mental health, information and prevention.', '2023-01-10', 'Medical Caravans', '<img src=\"img/caravan.png\" alt=\"\">'),
(2, '', '', '', '0000-00-00', 'Humanitarian actions', '<img src=\"img/12.PNG\" alt=\"\">'),
(3, '', '', '', '0000-00-00', 'Family assistance', '<img src=\"img/07.PNG\" alt=\"\">'),
(4, '', '', '', '0000-00-00', 'The importance of water', '<img src=\"img/08.PNG\" alt=\"\">');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idAdmin` int NOT NULL AUTO_INCREMENT,
  `login` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pwd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idAdmin`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idAdmin`, `login`, `pwd`) VALUES
(2, 'admin@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b');

-- --------------------------------------------------------

--
-- Structure de la table `agenda`
--

DROP TABLE IF EXISTS `agenda`;
CREATE TABLE IF NOT EXISTS `agenda` (
  `idAgenda` int NOT NULL AUTO_INCREMENT,
  `agendaTitre` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `agendaDate` date NOT NULL,
  `agendaDescription` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `agendaTextDetail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `agendaImages` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `agendaTitrelmage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `agendaText` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `agendaDetail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idAgenda`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `agenda`
--

INSERT INTO `agenda` (`idAgenda`, `agendaTitre`, `agendaDate`, `agendaDescription`, `agendaTextDetail`, `agendaImages`, `agendaTitrelmage`, `agendaText`, `agendaDetail`) VALUES
(1, 'Calendar', '0000-00-00', '\"A Better Future: Our Program, Our Commitment!\"', 'Medical Caravans', '<img src=\"img/r.png\" alt=\"\">', '', 'Coming soon 2024!', 'Detail'),
(2, '', '0000-00-00', '', 'Health Education & Promotion', '<img src=\"img/r.png\" alt=\"\">', '', '  Coming soon!', ''),
(3, '', '0000-00-00', '', 'Scientific conference', '<img src=\"img/r.png\" alt=\"\">', '', 'Raising awareness of the scientific world <br> in health education - Coming soon!', ''),
(4, '', '0000-00-00', '', ' Seminar', '<img src=\"img/r.png\" alt=\"\">', '', 'Water Source of Life and sustainable <br> development in collaboration with Professor <br>\r\nFatima-Zahra Saoud. -Coming soon!', '');

-- --------------------------------------------------------

--
-- Structure de la table `asbl`
--

DROP TABLE IF EXISTS `asbl`;
CREATE TABLE IF NOT EXISTS `asbl` (
  `idasbl` int NOT NULL AUTO_INCREMENT,
  `titreSomme` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `textSomme` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `descriptionSomme` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `titreHistory` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `textHistory` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `descriptionHistory` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `titreObjectif` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `textObjectif` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `descriptionObjectif` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idasbl`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `asbl`
--

INSERT INTO `asbl` (`idasbl`, `titreSomme`, `textSomme`, `descriptionSomme`, `titreHistory`, `textHistory`, `descriptionHistory`, `titreObjectif`, `textObjectif`, `descriptionObjectif`) VALUES
(1, 'Who we are ?', 'Our \"Health & Training\" association actively contributes to the training, education and professional integration\r\nintegration of disadvantaged people.\r\n Our activities focus on physical and mental health, information and prevention.', 'Organization name: : Association Health & Training (ASF)\r\n<br>\r\nMission: ASF was created to promote health and education in Moroccan communities by supporting families in their integration and well-being.', 'History', 'Once upon a time, ASF was an association born of the passion of Moroccans and Belgians for Morocco. It began with medical caravans, became involved in education, and raised awareness through conferences. In times of crisis, ASF was there. Today, it continues its journey, strengthening education and medical care for Morocco.', '\"Your Action, Our Story: Changing the World Together!\"', 'Objective', 'The Association Santé et Formation (ASF) embodies hope by offering help and support to families, promotes multiculturalism without borders by strengthening cultural ties, while improving health, education and integration.\r\n\r\n ', '\"Our Goal: A Better World For All!\"');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `idContact` int NOT NULL AUTO_INCREMENT,
  `contactTitre` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contactText` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contactName` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contactEmail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contactCategorie` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contactMessage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contactButton` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `option1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `option2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `option3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `option4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contactCoor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contactSiege` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contactMailCoo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contactTel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contactReseaux` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idContact`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`idContact`, `contactTitre`, `contactText`, `contactName`, `contactEmail`, `contactCategorie`, `contactMessage`, `contactButton`, `option1`, `option2`, `option3`, `option4`, `contactCoor`, `contactSiege`, `contactMailCoo`, `contactTel`, `contactReseaux`) VALUES
(1, 'Contact us!', 'A desire to send us a message ?<br>\r\nA question for us  ?<br> A problem encountered during your visit ? <br> Please use this form to contact us !<br>I will be pleased to answer you as soon as possible.', 'Name:', 'Mail :', 'Categories :', 'Message :', 'Send', 'Management', 'Donation', 'Volunteer', 'Other', 'Contact', 'Registered office:<br>Avenue voltaire 138, 1030 Schaerbeek', 'Mail:<br>contact@sante-et-formation.org', 'Tel:', 'Social networking');

-- --------------------------------------------------------

--
-- Structure de la table `don`
--

DROP TABLE IF EXISTS `don`;
CREATE TABLE IF NOT EXISTS `don` (
  `idDon` int NOT NULL AUTO_INCREMENT,
  `donTitre` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `donText` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `donPackTitre` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `donPackImage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `donPackText` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `donPackButton` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idDon`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `don`
--

INSERT INTO `don` (`idDon`, `donTitre`, `donText`, `donPackTitre`, `donPackImage`, `donPackText`, `donPackButton`) VALUES
(1, 'Back-to-school supplies', 'Communication: Back-to-school supplies', '30€/child', '<img id=\"photoDon\" src=\"img/back-to-school.jpg\" alt=\"Fourniture pour rentrée scolaire\">', 'IBAN: BE32 7340 2599 5302', ''),
(2, 'Back-to-school clothing', 'Communication: Back-to-school clothing', '30€/child', '<img src=\"img/vetement-enfant.jpg\" alt=\"Vêtement pour rentrée scolaire\" id=\"photoDon\">', 'IBAN: BE32 7340 2599 5302', ''),
(3, 'Food Assistance for<br> 1 family and 3 children', 'Communication: Food  assistance for 1 family and 3 children', '30€/child', '<img src=\"img/famille.jpg\" alt=\"Aide Alimentaire pour 1 famille et 3 enfants\" id=\"photoDon\">', 'IBAN: BE32 7340 2599 5302', ''),
(4, 'Health care assistance:<br>Consultations-Medication', 'Communication: Healthcare assistance', '50€/child', '<img src=\"img/consultation.jpg\" alt=\"Aide pour les soins de santé / Consultations-Médicaments\" id=\"photoDon\">', 'IBAN: BE32 7340 2599 5302', '');

-- --------------------------------------------------------

--
-- Structure de la table `footer`
--

DROP TABLE IF EXISTS `footer`;
CREATE TABLE IF NOT EXISTS `footer` (
  `idFooter` int NOT NULL AUTO_INCREMENT,
  `footerFaireUnDonTitre` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerFaireUnDonText` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerFaireUnDonButton` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerAsbl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerFormation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerDon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerAgenda` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerAdmin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerMention` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerPolitique` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerTitre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerDescription` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerCoordonnee` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerSiegeSociete` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerMail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerTelephone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerReseauxSocial` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerContactTitre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerContactNom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerContactEmail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerContactMsg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerContactButton` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerCopyrigth` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerAction` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerOp1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerOp2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerOp3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `footerOp4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idFooter`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `footer`
--

INSERT INTO `footer` (`idFooter`, `footerFaireUnDonTitre`, `footerFaireUnDonText`, `footerFaireUnDonButton`, `footerAsbl`, `footerFormation`, `footerDon`, `footerAgenda`, `footerAdmin`, `footerMention`, `footerPolitique`, `footerTitre`, `footerDescription`, `footerCoordonnee`, `footerSiegeSociete`, `footerMail`, `footerTelephone`, `footerReseauxSocial`, `footerContactTitre`, `footerContactNom`, `footerContactEmail`, `footerContactMsg`, `footerContactButton`, `footerCopyrigth`, `footerAction`, `footerOp1`, `footerOp2`, `footerOp3`, `footerOp4`) VALUES
(1, 'Make a donation', 'We need your help to bring hope and relief to those who desperately need it. Every donation counts. Make a difference today.\r\n<br>\r\nMake a donation now: IBAN BE32 7340 2599 5302\r\n<br>\r\nTogether, we can change people\'s lives.', 'Donation', 'L\'ASBL', 'Training', 'Don', 'Calendar', 'Admin', 'Legal notice', 'Privacy policy', 'Health & Training', 'Our \"Santé & Formation\" association actively contributes to the training, education and professional integration of people in precarious situations. Our activities focus on physical and mental health, information and prevention.', 'Contact', 'Registered office:<p>Avenue voltaire 138, 1030 Schaerbeek</p>\r\n', 'Mail:<p>contact@sante-et-formation.org</p>', 'Tel:', 'Social networks', 'Contact', 'Last name, first name *', 'Email *', 'Your message *', 'SEND ', 'Health & Training', 'Actions', 'Management', 'Donation', 'Volunteer', 'Other');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `idFormation` int NOT NULL AUTO_INCREMENT,
  `formationTitre` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `formationDate` date NOT NULL,
  `formationDescription` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `formationText` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `formationImage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idFormation`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`idFormation`, `formationTitre`, `formationDate`, `formationDescription`, `formationText`, `formationImage`) VALUES
(1, 'Our training courses', '0000-00-00', 'Economic emancipation through training', 'Health education through prevention', '  <img src=\"img/01.png\" alt=\"\">'),
(2, '', '0000-00-00', '', 'Training for social reintegration ', ' <img src=\"img/05.jpg\" alt=\"\">'),
(3, '', '0000-00-00', '', ' Health education for disadvantaged people', '<img src=\"img/18.PNG\" alt=\"\">');

-- --------------------------------------------------------

--
-- Structure de la table `navbar`
--

DROP TABLE IF EXISTS `navbar`;
CREATE TABLE IF NOT EXISTS `navbar` (
  `idNavbar` int NOT NULL AUTO_INCREMENT,
  `navbarAsbl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `navbarAction` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `navbarFormation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `navbarAgenda` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `navbarContact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `navbarDon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idNavbar`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `navbar`
--

INSERT INTO `navbar` (`idNavbar`, `navbarAsbl`, `navbarAction`, `navbarFormation`, `navbarAgenda`, `navbarContact`, `navbarDon`) VALUES
(1, 'ASBL', 'Actions', 'Training', 'Calendar', 'Contact', 'Make a donation');

-- --------------------------------------------------------

--
-- Structure de la table `valuers`
--

DROP TABLE IF EXISTS `valuers`;
CREATE TABLE IF NOT EXISTS `valuers` (
  `idValeurs` int NOT NULL AUTO_INCREMENT,
  `valeursTitre` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `valeursLogo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `valueDescription` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `valeurT` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idValeurs`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `valuers`
--

INSERT INTO `valuers` (`idValeurs`, `valeursTitre`, `valeursLogo`, `valueDescription`, `valeurT`) VALUES
(1, 'Equity', '', ' Social, economic and political equity between the sexes', 'OUR VALUES'),
(2, 'Justice', '', ' Promoting greater social and economic justice', ''),
(3, 'Respect', '', 'Respecting the dignity of vulnerable people', ''),
(4, 'Ecology', '', 'Working towards a healthier planet', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
