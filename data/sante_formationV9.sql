-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 09 sep. 2023 à 20:19
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
-- Base de données : `sante_formation`
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
  `titreAction` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `photoAction` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `textAction` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `buttonAction` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `titreFormation` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `photoFormation` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `textFormation` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `buttonFormation` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `titreAgenda` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `photoAgenda` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `textAgenda` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `descriptionAgenda` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idAccueil`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `accueil`
--

INSERT INTO `accueil` (`idAccueil`, `accueilTitre`, `accueilText`, `accueilDescription`, `accueilImage`, `accueilButton`, `titreAction`, `photoAction`, `textAction`, `buttonAction`, `titreFormation`, `photoFormation`, `textFormation`, `buttonFormation`, `titreAgenda`, `photoAgenda`, `textAgenda`, `descriptionAgenda`) VALUES
(1, 'A propos de nous', '  SANTE ET FORMATION <br>\r\n Investir dans un avenir meilleur', 'Notre Association \"Santé & Formation\" contribue activement à la formation, l’éducation et l’insertion\r\nprofessionnelle des personnes précaires.\r\n Nos activités sont axées sur la santé physique et mentale, l’information et la prévention. ', ' <img src=\"img/pexels-murilo-fonseca-17239050.jpg\" alt=\"\">', '', 'Nos actions', '<img src=\"img/caravan.png\" alt=\"\">', 'Caravane Medical', 'En savoir plus', 'Nos formations', '<img src=\"img/02.png\" alt=\"\">', 'L’émancipation économique', 'En savoir plus', 'Agenda', '<img src=\"img/r.png\" alt=\"\">', 'Caravanes Médicales', '2024: A venir!'),
(2, '', '', '', '', '', '', '<img src=\"img/08.PNG\" alt=\"\">', 'L’eau : l’importance', '', '', '<img src=\"img/06.PNG\" alt=\"\">', 'Réinsertion sociale ', '', '', '<img src=\"img/r.png\" alt=\"\">', 'Education', 'Education à la Santé '),
(3, '', '', '', '', '', '', '<img src=\"img/07.PNG\" alt=\"\">', 'Aide aux familles', '', '', '<img src=\"img/05.jpg\" alt=\"\">', 'La santé par la prévention.', '', '', '<img src=\"img/r.png\" alt=\"\">', 'Conférence scientifique', 'Sensibilisation du monde scientifique à l’éducation à la santé.<br>\r\n La lithéracie en santé.');

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
  `actionImg` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idAction`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `action`
--

INSERT INTO `action` (`idAction`, `actionTitre`, `actionDescription`, `actionText`, `actionDate`, `actionImageText`, `actionImg`) VALUES
(1, 'Nos actions', 'Investir dans un avenir meilleur . ', 'Nos activités sur la santé physique et mentale, l’information et la prévention.', '2023-01-10', ' Caravanes Médicales', '<img src=\"img/caravan.png\" alt=\"\">'),
(2, '', '', '', '0000-00-00', 'Actions Humanitaires', '<img src=\"img/12.PNG\" alt=\"\">'),
(3, '', '', '', '0000-00-00', ' Aide aux familles', '<img src=\"img/07.PNG\" alt=\"\">'),
(4, '', '', '', '0000-00-00', 'L’eau : l’importance', '<img src=\"img/08.PNG\" alt=\"\">');

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
(1, 'Agenda', '0000-00-00', 'Slogan en long', 'Caravanes Médicales', '<img src=\"img/r.png\" alt=\"\">', '', 'A venir 2024 !', 'Détail'),
(2, '', '0000-00-00', '', 'Education à la Santé et Promotion à la Santé', '<img src=\"img/r.png\" alt=\"\">', '', ' A venir!', ''),
(3, '', '0000-00-00', '', 'Conférence scientifique', '<img src=\"img/r.png\" alt=\"\">', '', 'Sensibilisation du monde scientifique <br> à l’éducation à la santé - A venir !', ''),
(4, '', '0000-00-00', '', ' Séminaire', '<img src=\"img/r.png\" alt=\"\">', '', 'l’Eau Source de Vie et le développement <br> durable en collaboration avec la professeure <br>\r\nFatima-Zahra Saoud. -A Venir!', '');

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
(1, 'Qui sommes nous ?', 'Notre Association \"Santé & Formation\" contribue activement à la formation, l’éducation et l’insertion\r\nprofessionnelle des personnes précaires.\r\n Nos activités sont axées sur la santé physique et mentale, l’information et la prévention.', 'Nom de l\'Organisation : Association Santé et Formation (ASF)\r\n<br>\r\nMission : L\'ASF a été créée pour promouvoir la santé et l\'éducation au sein des communautés marocaines en soutenant les familles dans leur intégration et leur bien-être.\r\n', 'Historique', 'Il était une fois ASF, une association née de la passion de Marocains et de Belges liés au Maroc. Elle a commencé par des caravanes médicales, s\'est engagée dans l\'éducation, et a sensibilisé par des conférences. En temps de crise, ASF était là. Aujourd\'hui, elle continue son voyage, renforçant l\'éducation et les soins médicaux pour le Maroc.', '\"Votre Action, Notre Histoire : Changeons le Monde Ensemble !\"', 'Objectif', 'L\'Association Santé et Formation (ASF) incarne l\'espoir en offrant aide et soutien aux familles , favorise le multiculturalisme sans frontière en renforçant les liens culturels , tout en améliorant la santé, l\'éducation, et l\'intégration.\r\n\r\n ', '\"Notre Objectif : Un Monde Meilleur Pour Tous !\"');

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
  `contactCoor` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `contactSiege` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `contactMailCoo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `contactTel` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `contactReseaux` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idContact`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`idContact`, `contactTitre`, `contactText`, `contactName`, `contactEmail`, `contactCategorie`, `contactMessage`, `contactButton`, `option1`, `option2`, `option3`, `option4`, `contactCoor`, `contactSiege`, `contactMailCoo`, `contactTel`, `contactReseaux`) VALUES
(1, 'Contactez-nous', 'Une envie de nous envoyer un message ?<br>\r\n Une question à nous poser ?<br> Un problème rencontré lors de votre visite ? <br> Veuillez utiliser ce formulaire pour prendre contact avec nous !<br>Je me ferai un plaisir de vous répondre dans les plus brefs délais .', 'Nom:', 'Mail :', 'Categorie :', 'Message :', 'Envoyer', 'Administration', 'Donation', 'Bénévole', 'Autre', 'Coordonnées', 'Siège social:<br>Avenue voltaire 138, 1030 Schaerbeek', 'Mail:<br>contact@sante-et-formation.org', 'Tel:', 'Réseaux sociaux');

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
(1, 'Fournitures pour rentrée scolaire', 'Communication: Fournitures pour rentrée scolaire', '30€/enfant', '<img id=\"photoDon\" src=\"img/back-to-school.jpg\" alt=\"Fourniture pour rentrée scolaire\">', 'IBAN: BE32 7340 2599 5302', ''),
(2, 'Vêtement pour rentrée scolaire', 'Communication: Vêtement pour rentrée scolaire', '30€/enfant', '<img src=\"img/vetement-enfant.jpg\" alt=\"Vêtement pour rentrée scolaire\" id=\"photoDon\">', 'IBAN: BE32 7340 2599 5302', ''),
(3, 'Aide Alimentaire pour<br> 1 famille et 3 enfants', 'Communication: Aide Alimentaire pour 1 famille et 3 enfants', '30€/enfant', '<img src=\"img/famille.jpg\" alt=\"Aide Alimentaire pour 1 famille et 3 enfants\" id=\"photoDon\">', 'IBAN: BE32 7340 2599 5302', ''),
(4, 'Aide pour les soins de santé:<br>Consultations-Médicaments', 'Communication: Aide pour les soins de santé', '50€/enfant', '<img src=\"img/consultation.jpg\" alt=\"Aide pour les soins de santé / Consultations-Médicaments\" id=\"photoDon\">', 'IBAN: BE32 7340 2599 5302', '');

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
  `footerAction` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `footerOp1` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `footerOp2` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `footerOp3` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `footerOp4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idFooter`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `footer`
--

INSERT INTO `footer` (`idFooter`, `footerFaireUnDonTitre`, `footerFaireUnDonText`, `footerFaireUnDonButton`, `footerAsbl`, `footerFormation`, `footerDon`, `footerAgenda`, `footerAdmin`, `footerMention`, `footerPolitique`, `footerTitre`, `footerDescription`, `footerCoordonnee`, `footerSiegeSociete`, `footerMail`, `footerTelephone`, `footerReseauxSocial`, `footerContactTitre`, `footerContactNom`, `footerContactEmail`, `footerContactMsg`, `footerContactButton`, `footerCopyrigth`, `footerAction`, `footerOp1`, `footerOp2`, `footerOp3`, `footerOp4`) VALUES
(1, 'Faire un don', 'Nous avons besoin de votre aide pour apporter de l\'espoir et des secours à ceux qui en ont désespérément besoin. Chaque don compte. Faites la différence aujourd\'hui.\r\n<br>\r\nFaites un don maintenant : IBAN BE32 7340 2599 5302\r\n<br>\r\nEnsemble, nous pouvons changer des vies.', 'Donation', 'L\'ASBL', 'Formations', 'Don', 'Agenda', 'Admin', 'Mention légales', 'Politique de confidentialité', 'Santé et formation', 'Notre Association \"Santé & Formation\" contribue activement à la formation, l’éducation et l’insertion professionnelle des personnes précaires. Nos activités sont axées sur la santé physique et mentale, l’information et la prévention', 'Coordonées', 'Siège social:<p>Avenue voltaire 138, 1030 Schaerbeek</p>\r\n', 'Mail:<p>contact@sante-et-formation.org</p>', 'Tel:', 'Réseaux sociaux', 'Contact', 'Nom, prénom *', 'Email *', 'Votre message *', 'ENVOYER', 'Santé-et-formation', 'Actions', 'Administration', 'Donation', 'Bénévole', 'Autre');

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
(1, 'Nos Formations', '0000-00-00', 'L’émancipation économique par la voie de la formation', ' Education à la santé par la prévention', '  <img src=\"img/01.png\" alt=\"\">'),
(2, '', '0000-00-00', '', 'Formation pour la réinsertion sociale ', ' <img src=\"img/05.jpg\" alt=\"\">'),
(3, '', '0000-00-00', '', ' Education à la santé aux personnes précaires', '<img src=\"img/18.PNG\" alt=\"\">');

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
(1, 'ASBL', 'Actions', 'Formations', 'Agenda', 'Contact', 'Faire un don');

-- --------------------------------------------------------

--
-- Structure de la table `valuers`
--

DROP TABLE IF EXISTS `valuers`;
CREATE TABLE IF NOT EXISTS `valuers` (
  `idValeurs` int NOT NULL AUTO_INCREMENT,
  `valeursTitre` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `valeursLogo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `valueDescription` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idValeurs`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `valuers`
--

INSERT INTO `valuers` (`idValeurs`, `valeursTitre`, `valeursLogo`, `valueDescription`) VALUES
(1, 'Equité', '', ' Equité sociale, économique et politique entre les genres'),
(2, 'Justice', '', ' Promotion pour une meilleure justice sociale et économique'),
(3, 'Respect', '', 'Respecter la dignité des personnes précaires'),
(4, 'Ecologie', '', ' Oeuvrer pour une planète plus saine'),
(5, 'Solidarité', '', 'Ensemble unis pour un monde meilleur.'),
(6, 'Education', '', 'Eduquer pour un avenir brillant.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
