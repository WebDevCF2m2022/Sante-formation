-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 07 sep. 2023 à 12:31
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

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
  PRIMARY KEY (`idAccueil`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `actionImages` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `actionDate` date NOT NULL,
  PRIMARY KEY (`idAction`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `agendaText` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `agendaImages` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idAgenda`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'Qui sommes nous ?', 'Notre Association \"Santé & Formation\" contribue activement à la formation, l’éducation et l’insertion\r\nprofessionnelle des personnes précaires.\r\n Nos activités sont axées sur la santé physique et mentale, l’information et la prévention.', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur magni, nisi natus deserunt dolore ab, inventore at veniam cupiditate, sit aliquid alias voluptates iusto ipsa eos placeat. Illo ex officia fuga doloremque ea et minima incidunt, excepturi deleniti ratione nisi quasi debitis dolores quaerat nobis hic praesentium exercitationem molestias adipisci?\r\n\r\n\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, nihil dolorum? Asperiores harum totam quia maiores rem pariatur et, aperiam tempora nihil molestias voluptatum quaerat minus veritatis quo repellendus voluptatibus iusto alias obcaecati sed placeat iste ex corporis natus dolore! Blanditiis assumenda quibusdam quisquam obcaecati debitis nostrum. Nisi, ea reprehenderit!\r\n\r\n\r\n\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam beatae nemo veniam quaerat soluta accusantium necessitatibus sapiente recusandae sint temporibus facilis itaque esse blanditiis odit inventore, ratione dolores aperiam non nihil ipsum expedita sit? Qui, officia debitis ducimus explicabo quis porro aspernatur eum et libero adipisci, esse reiciendis, reprehenderit eligendi!', 'Historique', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit nostrum quia quaerat eius vero qui nesciunt ad, veritatis nihil, ex earum eos libero consequatur aspernatur enim culpa autem aperiam ipsum hic repudiandae obcaecati beatae. Asperiores enim obcaecati id commodi similique, impedit dolor quia voluptate iste temporibus architecto, et hic laboriosam.', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur magni, nisi natus deserunt dolore ab, inventore at veniam cupiditate, sit aliquid alias voluptates iusto ipsa eos placeat. Illo ex officia fuga doloremque ea et minima incidunt, excepturi deleniti ratione nisi quasi debitis dolores quaerat nobis hic praesentium exercitationem molestias adipisci?\r\n\r\n\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, nihil dolorum? Asperiores harum totam quia maiores rem pariatur et, aperiam tempora nihil molestias voluptatum quaerat minus veritatis quo repellendus voluptatibus iusto alias obcaecati sed placeat iste ex corporis natus dolore! Blanditiis assumenda quibusdam quisquam obcaecati debitis nostrum. Nisi, ea reprehenderit!\r\n\r\n\r\n\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam beatae nemo veniam quaerat soluta accusantium necessitatibus sapiente recusandae sint temporibus facilis itaque esse blanditiis odit inventore, ratione dolores aperiam non nihil ipsum expedita sit? Qui, officia debitis ducimus explicabo quis porro aspernatur eum et libero adipisci, esse reiciendis, reprehenderit eligendi!', 'Objectif', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit nostrum quia quaerat eius vero qui nesciunt ad, veritatis nihil, ex earum eos libero consequatur aspernatur enim culpa autem aperiam ipsum hic repudiandae obcaecati beatae. Asperiores enim obcaecati id commodi similique, impedit dolor quia voluptate iste temporibus architecto, et hic laboriosam.', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur magni, nisi natus deserunt dolore ab, inventore at veniam cupiditate, sit aliquid alias voluptates iusto ipsa eos placeat. Illo ex officia fuga doloremque ea et minima incidunt, excepturi deleniti ratione nisi quasi debitis dolores quaerat nobis hic praesentium exercitationem molestias adipisci?\r\n\r\n\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, nihil dolorum? Asperiores harum totam quia maiores rem pariatur et, aperiam tempora nihil molestias voluptatum quaerat minus veritatis quo repellendus voluptatibus iusto alias obcaecati sed placeat iste ex corporis natus dolore! Blanditiis assumenda quibusdam quisquam obcaecati debitis nostrum. Nisi, ea reprehenderit!\r\n\r\n\r\n\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam beatae nemo veniam quaerat soluta accusantium necessitatibus sapiente recusandae sint temporibus facilis itaque esse blanditiis odit inventore, ratione dolores aperiam non nihil ipsum expedita sit? Qui, officia debitis ducimus explicabo quis porro aspernatur eum et libero adipisci, esse reiciendis, reprehenderit eligendi');

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
  PRIMARY KEY (`idContact`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contactaccueil`
--

DROP TABLE IF EXISTS `contactaccueil`;
CREATE TABLE IF NOT EXISTS `contactaccueil` (
  `idContactAccueil` int NOT NULL AUTO_INCREMENT,
  `contactAccueilTitre` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contactAccueilDescription` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contactAccueilName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contactAccueilEmail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contactAccueilMsg` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contactAccueilButton` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idContactAccueil`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `don`
--

INSERT INTO `don` (`idDon`, `donTitre`, `donText`, `donPackTitre`, `donPackImage`, `donPackText`, `donPackButton`) VALUES
(1, 'Faire un don', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, quis delectus odio hic cupiditate recusandae magnam vel totam doloribus, alias aspernatur dolorum omnis sint amet optio nihil beatae eaque debitis vitae fuga temporibus. Dolore in molestias soluta officia eius consequuntur veritatis molestiae. Totam excepturi veritatis aperiam iure quisquam pariatur voluptatum assumenda, voluptatibus illo quas ipsam dicta ad porro, obcaecati at laboriosam sunt placeat expedita. Aliquid, sint a aspernatur veritatis voluptatum minima deserunt? Distinctio voluptatibus, voluptatem totam, necessitatibus consequuntur ab maxime iure eligendi deserunt laborum doloribus repellat rem vero deleniti debitis illo cumque ipsam? Quisquam aspernatur ratione harum nostrum beatae quidem!', '', '', '', 'Donation');

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
  PRIMARY KEY (`idFooter`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `navbarLangue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idNavbar`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `valuers`
--

DROP TABLE IF EXISTS `valuers`;
CREATE TABLE IF NOT EXISTS `valuers` (
  `idValeurs` int NOT NULL AUTO_INCREMENT,
  `valeursTitre` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `valeursText` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `valeursLogo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idValeurs`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `valuers`
--

INSERT INTO `valuers` (`idValeurs`, `valeursTitre`, `valeursText`, `valeursLogo`) VALUES
(1, 'Titre', ' Equité sociale, économique et politique entre les genres', ''),
(2, 'Titre', ' Promotion pour une meilleure justice sociale et économique', ''),
(3, 'Titre', 'Respecter la dignité des personnes précaires', ''),
(4, 'Titre', ' Oeuvrer pour une planète plus saine', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
