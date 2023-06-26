-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 16 juin 2023 à 09:31
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
-- Base de données : `sante-formation`
--

-- --------------------------------------------------------

--
-- Structure de la table `accueil`
--

DROP TABLE IF EXISTS `accueil`;
CREATE TABLE IF NOT EXISTS `accueil` (
  `idaccueil` int NOT NULL AUTO_INCREMENT,
  `titreaccueil` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `textaccueil` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `descriptionaccueil` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `imageaccueil` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `buttonaccueil` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idaccueil`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `action`
--

DROP TABLE IF EXISTS `action`;
CREATE TABLE IF NOT EXISTS `action` (
  `idaction` int NOT NULL AUTO_INCREMENT,
  `actionTitre` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `actionDescription` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `actionText` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `actionImages` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `actionDate` date DEFAULT NULL,
  PRIMARY KEY (`idaction`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `action`
--

INSERT INTO `action` (`idaction`, `actionTitre`, `actionDescription`, `actionText`, `actionImages`, `actionDate`) VALUES
(1, 'teste pour db ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nWhere can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.\r\n', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int NOT NULL AUTO_INCREMENT,
  `login` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pwd` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `agenda`
--

DROP TABLE IF EXISTS `agenda`;
CREATE TABLE IF NOT EXISTS `agenda` (
  `idagenda` int NOT NULL AUTO_INCREMENT,
  `agendaTitre` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `agendaDate` date NOT NULL,
  `agendaDescription` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `agendaText` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `agendaImages` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`idagenda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `idcontact` int NOT NULL AUTO_INCREMENT,
  `titrecontact` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `textcontact` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `namecontact` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `emailcontact` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `categoriecontact` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `messagecontact` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `buttoncontact` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idcontact`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contactaccueil`
--

DROP TABLE IF EXISTS `contactaccueil`;
CREATE TABLE IF NOT EXISTS `contactaccueil` (
  `idcontactacc` int NOT NULL AUTO_INCREMENT,
  `titrecontactacc` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `descriptioncontactacc` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `namecontactacc` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `emailcontactacc` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `msgcontactacc` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `buttoncontact` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idcontactacc`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `don`
--

DROP TABLE IF EXISTS `don`;
CREATE TABLE IF NOT EXISTS `don` (
  `iddon` int NOT NULL AUTO_INCREMENT,
  `titredon` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `textdon` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `packtitredon` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `packimagedon` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `packtextdon` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `packbuttondon` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`iddon`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `idformation` int NOT NULL AUTO_INCREMENT,
  `formationTitre` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `formationDate` date NOT NULL,
  `formationDescription` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `formationText` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `formationImages` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`idformation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `valeurs`
--

DROP TABLE IF EXISTS `valeurs`;
CREATE TABLE IF NOT EXISTS `valeurs` (
  `idvaleurs` int NOT NULL AUTO_INCREMENT,
  `titrevaleurs` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `textvaleurs` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `logovaleurs` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idvaleurs`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
