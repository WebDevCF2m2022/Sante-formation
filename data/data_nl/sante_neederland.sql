-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 10 sep. 2023 à 10:31
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
-- Base de données : `sante_neederland`
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
(1, 'Over ons', '  GEZONDHEID EN TRAINING <br>\r\nInvesteren in een betere toekomst', 'Onze vereniging \"GEZONDHEID EN TRAINING\" draagt actief bij tot de opleiding, vorming en professionele integratie van mensen in precaire situaties.\r\nmensen in precaire situaties.\r\n Onze activiteiten richten zich op fysieke en mentale gezondheid, informatie en preventie.', ' <img src=\"img/pexels-murilo-fonseca-17239050.jpg\" alt=\"\">', '', 'Onze activiteiten', '<img src=\"img/caravan.png\" alt=\"\">', 'Medische caravans', 'Meer informatie', 'Onze trainingen', '<img src=\"img/02.png\" alt=\"\">', 'Economische emancipatie', 'Meer informatie', 'Agenda', '<img src=\"img/r.png\" alt=\"\">', 'Medische caravans', '2024: Binnenkort!'),
(2, '', '', '', '', '', '', '<img src=\"img/08.PNG\" alt=\"\">', 'Water: het belang', '', '', '<img src=\"img/06.PNG\" alt=\"\">', 'Sociale re-integratie ', '', '', '<img src=\"img/r.png\" alt=\"\">', 'Onderwijs', 'Gezondheidsvoorlichting '),
(3, '', '', '', '', '', '', '<img src=\"img/07.PNG\" alt=\"\">', 'Hulp voor gezinnen', '', '', '<img src=\"img/05.jpg\" alt=\"\">', 'Gezondheid door preventive.', '', '', '<img src=\"img/r.png\" alt=\"\">', 'Wetenschappelijke conferentie', 'Bewustmaking van gezondheidseducatie in de wetenschappelijke wereld <br>\r\n Gezondheidsvaardigheden.');

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
(1, 'Onze acties', 'Investeren in een betere toekomst.', 'Onze activiteiten zijn gericht op lichamelijke en geestelijke gezondheid, informatie en preventie.', '2023-01-10', ' Medische caravans ', '<img src=\"img/caravan.png\" alt=\"\">'),
(2, '', '', '', '0000-00-00', 'Humanitaire acties', '<img src=\"img/12.PNG\" alt=\"\">'),
(3, '', '', '', '0000-00-00', ' Hulp voor gezinnen', '<img src=\"img/07.PNG\" alt=\"\">'),
(4, '', '', '', '0000-00-00', 'Water: het belang', '<img src=\"img/08.PNG\" alt=\"\">');

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
(1, 'Agenda', '0000-00-00', '\"Een betere toekomst: ons programma, onze belofte!\"', 'Medische caravans', '<img src=\"img/r.png\" alt=\"\">', '', 'Komt in 2024!', 'Detail'),
(2, '', '0000-00-00', '', 'Gezondheidsvoorlichting enbevordering', '<img src=\"img/r.png\" alt=\"\">', '', ' Binnenkort ', ''),
(3, '', '0000-00-00', '', 'Wetenschappelijke conferentie', '<img src=\"img/r.png\" alt=\"\">', '', 'Bewustwording in de wetenschappelijke wereld <br> over gezondheidseducatie - Binnenkort beschikbaar!', ''),
(4, '', '0000-00-00', '', 'Seminar', '<img src=\"img/r.png\" alt=\"\">', '', 'Water, bron van leven en duurzame ontwikkeling <br> in samenwerking met professor <br> Fatima-Zahra Saoud.\r\nFatima-Zahra Saoud. -Binnenkort beschikbaar!', '');

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
(1, 'Wie zijn wij?', 'Onze vereniging \"Gezondheid & Opleiding\" draagt actief bij tot de opleiding, vorming en professionele integratie van mensen in precaire situaties.\r\nmensen in precaire situaties.\r\n Onze activiteiten richten zich op fysieke en mentale gezondheid, informatie en preventie.', 'Naam organisatie: Vereniging voor gezondheid en vorming (ASF)\r\n<br>\r\nMissie : AdZG is opgericht om gezondheid en onderwijs in Marokkaanse gemeenschappen te bevorderen door gezinnen te ondersteunen bij hun integratie en welzijn.', 'Geschiedenis', 'Er was eens ASF, een vereniging geboren uit de passie van Marokkanen en Belgen met banden met Marokko. Ze begon met medische karavanen, hield zich bezig met onderwijs en sensibiliseerde via conferenties. In tijden van crisis was ASF er. Vandaag zet ze haar reis voort en versterkt ze het onderwijs en de medische zorg in Marokko.', '\"Jouw actie, ons verhaal: samen de wereld veranderen!', 'Doel', 'Vereniging voor gezondheid en vorming (ASF) belichaamt hoop door hulp en steun te bieden aan gezinnen, bevordert multiculturalisme zonder grenzen door culturele banden aan te halen en tegelijkertijd gezondheid, onderwijs en integratie te verbeteren.\r\n ', '\"Ons Doel: Een Betere Wereld Voor Iedereen!\"');

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
(1, 'Contacteer ons', 'Wilt u ons een bericht sturen ?<br>\r\n  Heb je een vraag voor ons?<br> Een probleem ondervonden tijdens je bezoek?<br>  Gebruik dit formulier om contact met ons op te nemen en ik neem zo snel mogelijk contact met je op.', 'Naam:', 'Mail :', 'Category :', 'Bericht:', 'Stuur', 'Administratie', 'Donatie', 'Vrijwilligers', 'Andere', 'Contactgegevens', 'Maatschappelijke zetel:<br>Voltairelaan 138, 1030 Schaarbeek', 'Mail:<br>contact@sante-et-formation.org', 'Tel:0475.60.56.77', 'Sociale netwerken');

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
(1, 'Back-to-school benodigdheden', 'Communicatie: Back-to-school benodigdheden', '30€/kind', '<img id=\"photoDon\" src=\"img/back-to-school.jpg\" alt=\"Fourniture pour rentrée scolaire\">', 'IBAN: BE32 7340 2599 5302', ''),
(2, 'Terug-naar-school kleding', 'Mededeling: Terug naar school kleding', '30€/kind', '<img src=\"img/vetement-enfant.jpg\" alt=\"Vêtement pour rentrée scolaire\" id=\"photoDon\">', 'IBAN: BE32 7340 2599 5302', ''),
(3, 'Aide Alimentaire pour<br> 1 famille et 3 enfants', 'Communication: Aide Alimentaire pour 1 famille et 3 enfants', '30€/enfant', '<img src=\"img/famille.jpg\" alt=\"Aide Alimentaire pour 1 famille et 3 enfants\" id=\"photoDon\">', 'IBAN: BE32 7340 2599 5302', ''),
(4, 'Hulp bij gezondheidszorg:<br>Consulten-Medicijnen', 'Communicatie: Hulp bij gezondheidszorg', '50€/kind', '<img src=\"img/consultation.jpg\" alt=\"Aide pour les soins de santé / Consultations-Médicaments\" id=\"photoDon\">', 'IBAN: BE32 7340 2599 5302', '');

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
(1, 'Doneer', 'We hebben jouw hulp nodig om hoop en verlichting te brengen aan hen die het wanhopig nodig hebben. Elke donatie telt. Maak vandaag het verschil.\r\n<br>\r\nMaak nu een donatie: IBAN BE32 7340 2599 5302\r\n<br>\r\nSamen kunnen we levens veranderen.', 'Donatie', 'ASBL', 'Training', 'Don', 'Agenda', 'Admin', 'Wettelijke kennisgeving', 'Privacybeleid', 'Gezondheid en opleiding', 'Onze vereniging \"Gezondheid en opleiding\" draagt actief bij tot de opleiding, vorming en professionele integratie van mensen in precaire situaties. Onze activiteiten zijn gericht op lichamelijke en geestelijke gezondheid, informatie en preventie.', 'Contactgegevens', 'Maatschappelijke zetel:<p>Voltairelaan 138, 1030 Schaarbeek</p>\r\n', 'Mail:<p>contact@sante-et-formation.org</p>', 'Tel:0475.60.56.77', 'Sociale netwerken', 'Neem contact op met', 'Achternaam, voornaam *', 'Email *', 'Uw bericht *', 'VERZENDEN', 'Gezondheid en training', 'Acties', 'Administratie', 'Donatie', 'Vrijwilligers', 'Andere');

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
(1, 'Onze trainingen', '0000-00-00', 'Economische emancipatie door opleiding', ' Gezondheidseducatie door preventie', '  <img src=\"img/01.png\" alt=\"\">'),
(2, '', '0000-00-00', '', 'Training voor sociale re-integratie ', ' <img src=\"img/05.jpg\" alt=\"\">'),
(3, '', '0000-00-00', '', ' Gezondheidseducatie voor kansarmen', '<img src=\"img/18.PNG\" alt=\"\">');

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
(1, 'ASBL', 'Acties', 'Training', 'Agenda', 'Contact', 'Doneer');

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
  `valeurT` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idValeurs`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `valuers`
--

INSERT INTO `valuers` (`idValeurs`, `valeursTitre`, `valeursLogo`, `valueDescription`, `valeurT`) VALUES
(1, 'Aandelen', '', 'Sociale, economische en politieke gelijkheid tussen de seksen', 'ONZE WAARDEN'),
(2, 'Justitie', '', ' Meer sociale en economische rechtvaardigheid bevorderen', ''),
(3, 'Respect', '', 'De waardigheid van kwetsbare mensen respecteren', ''),
(4, 'Ecologie', '', ' Werken aan een gezondere planeet', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
