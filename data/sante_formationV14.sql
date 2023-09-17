-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 17 sep. 2023 à 11:20
-- Version du serveur : 5.7.36
-- Version de PHP : 8.1.0

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

CREATE TABLE `accueil` (
  `idAccueil` int(11) NOT NULL,
  `accueilTitre` varchar(150) NOT NULL,
  `accueilText` text NOT NULL,
  `accueilDescription` mediumtext NOT NULL,
  `accueilImage` varchar(255) NOT NULL,
  `accueilButton` varchar(150) NOT NULL,
  `titreAction` varchar(255) NOT NULL,
  `photoAction` varchar(255) NOT NULL,
  `textAction` varchar(255) NOT NULL,
  `buttonAction` varchar(255) NOT NULL,
  `titreFormation` varchar(255) NOT NULL,
  `photoFormation` varchar(255) NOT NULL,
  `textFormation` varchar(255) NOT NULL,
  `buttonFormation` varchar(255) NOT NULL,
  `titreAgenda` varchar(255) NOT NULL,
  `photoAgenda` varchar(255) NOT NULL,
  `textAgenda` varchar(255) NOT NULL,
  `descriptionAgenda` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `accueil`
--

INSERT INTO `accueil` (`idAccueil`, `accueilTitre`, `accueilText`, `accueilDescription`, `accueilImage`, `accueilButton`, `titreAction`, `photoAction`, `textAction`, `buttonAction`, `titreFormation`, `photoFormation`, `textFormation`, `buttonFormation`, `titreAgenda`, `photoAgenda`, `textAgenda`, `descriptionAgenda`) VALUES
(1, 'A propos de nous', 'Il était une fois ASF, une association née de la passion de Marocains et de Belges liés au Maroc. Elle a commencé par des caravanes médicales, s\'est engagée dans l\'éducation, et a sensibilisé par des conférences. En temps de crise, ASF était là. Aujourd\'hui, elle continue son voyage, renforçant l\'éducation et les soins médicaux pour le Maroc.\r\n', 'Notre Association \"Santé & Formation\" contribue activement à la formation, l’éducation et l’insertion\r\nprofessionnelle des personnes précaires.\r\n Nos activités sont axées sur la santé physique et mentale, l’information et la prévention. ', ' <img src=\"img/pexels-murilo-fonseca-17239050.jpg\" alt=\"\">', '', 'Nos actions', '<img src=\"img/caravan.png\" alt=\"\">', 'Caravane Medical', 'En savoir plus', 'Nos formations', '<img src=\"img/02.png\" alt=\"\">', 'L’émancipation économique', 'En savoir plus', 'Agenda', '<img src=\"img/r.png\" alt=\"\">', 'Caravanes Médicales', '2024: A venir!'),
(2, '', '', '', '', '', '', '<img src=\"img/08.PNG\" alt=\"\">', 'L’eau : l’importance', '', '', '<img src=\"img/06.PNG\" alt=\"\">', 'Réinsertion sociale ', '', '', '<img src=\"img/r.png\" alt=\"\">', 'Education', 'Education à la Santé '),
(3, '', '', '', '', '', '', '<img src=\"img/07.PNG\" alt=\"\">', 'Aide aux familles', '', '', '<img src=\"img/05.jpg\" alt=\"\">', 'La santé par la prévention.', '', '', '<img src=\"img/r.png\" alt=\"\">', 'Conférence scientifique', 'Sensibilisation du monde scientifique à l’éducation à la santé.<br>\r\n La lithéracie en santé.');

-- --------------------------------------------------------

--
-- Structure de la table `action`
--

CREATE TABLE `action` (
  `idAction` int(11) NOT NULL,
  `actionTitre` varchar(150) NOT NULL,
  `actionDescription` mediumtext NOT NULL,
  `actionText` longtext NOT NULL,
  `actionDate` date NOT NULL,
  `actionImageText` longtext NOT NULL,
  `actionImg` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `login` varchar(150) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idAdmin`, `login`, `pwd`) VALUES
(2, 'admin@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b');

-- --------------------------------------------------------

--
-- Structure de la table `agenda`
--

CREATE TABLE `agenda` (
  `idAgenda` int(11) NOT NULL,
  `agendaTitre` varchar(150) NOT NULL,
  `agendaDate` date NOT NULL,
  `agendaDescription` mediumtext NOT NULL,
  `agendaTextDetail` varchar(255) NOT NULL,
  `agendaImages` varchar(255) NOT NULL,
  `agendaTitrelmage` varchar(255) NOT NULL,
  `agendaText` varchar(255) NOT NULL,
  `agendaDetail` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `agenda`
--

INSERT INTO `agenda` (`idAgenda`, `agendaTitre`, `agendaDate`, `agendaDescription`, `agendaTextDetail`, `agendaImages`, `agendaTitrelmage`, `agendaText`, `agendaDetail`) VALUES
(1, 'Agenda', '0000-00-00', '\"Votre Action, Notre Histoire : Changeons le Monde Ensemble !\"', 'Caravanes Médicales', '<img src=\"img/r.png\" alt=\"\">', '', 'A venir 2024 !', 'Détail'),
(2, '', '0000-00-00', '', 'Education à la Santé et Promotion à la Santé', '<img src=\"img/r.png\" alt=\"\">', '', ' A venir!', ''),
(3, '', '0000-00-00', '', 'Conférence scientifique', '<img src=\"img/r.png\" alt=\"\">', '', 'Sensibilisation du monde scientifique <br> à l’éducation à la santé - A venir !', ''),
(4, '', '0000-00-00', '', ' Séminaire', '<img src=\"img/r.png\" alt=\"\">', '', 'l’Eau Source de Vie et le développement <br> durable en collaboration avec la professeure <br>\r\nFatima-Zahra Saoud. -A Venir!', '');

-- --------------------------------------------------------

--
-- Structure de la table `asbl`
--

CREATE TABLE `asbl` (
  `idasbl` int(11) NOT NULL,
  `titreSomme` varchar(255) NOT NULL,
  `textSomme` mediumtext NOT NULL,
  `descriptionSomme` longtext NOT NULL,
  `titreHistory` varchar(255) NOT NULL,
  `textHistory` mediumtext NOT NULL,
  `descriptionHistory` longtext NOT NULL,
  `titreObjectif` varchar(255) NOT NULL,
  `textObjectif` mediumtext NOT NULL,
  `descriptionObjectif` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `asbl`
--

INSERT INTO `asbl` (`idasbl`, `titreSomme`, `textSomme`, `descriptionSomme`, `titreHistory`, `textHistory`, `descriptionHistory`, `titreObjectif`, `textObjectif`, `descriptionObjectif`) VALUES
(1, 'Qui sommes nous ?', 'Notre Association \"Santé & Formation\" contribue activement à la formation, l’éducation et l’insertion\r\nprofessionnelle des personnes précaires.\r\n Nos activités sont axées sur la santé physique et mentale, l’information et la prévention.', 'Nom de l\'Organisation : Association Santé et Formation (ASF)\r\n<br>\r\nMission : L\'ASF a été créée pour promouvoir la santé et l\'éducation au sein des communautés marocaines en soutenant les familles dans leur intégration et leur bien-être.\r\n', 'Historique', 'Il était une fois ASF, une association née de la passion de Marocains et de Belges liés au Maroc. Elle a commencé par des caravanes médicales, s\'est engagée dans l\'éducation, et a sensibilisé par des conférences. En temps de crise, ASF était là. Aujourd\'hui, elle continue son voyage, renforçant l\'éducation et les soins médicaux pour le Maroc.', '\"Votre Action, Notre Histoire : Changeons le Monde Ensemble !\"', 'Objectif', 'L\'Association Santé et Formation (ASF) incarne l\'espoir en offrant aide et soutien aux familles , favorise le multiculturalisme sans frontière en renforçant les liens culturels , tout en améliorant la santé, l\'éducation, et l\'intégration.\r\n\r\n ', '\"Notre Objectif : Un Monde Meilleur Pour Tous !\"');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `idContact` int(11) NOT NULL,
  `contactTitre` varchar(150) NOT NULL,
  `contactText` mediumtext NOT NULL,
  `contactName` varchar(150) NOT NULL,
  `contactEmail` varchar(255) NOT NULL,
  `contactCategorie` varchar(255) NOT NULL,
  `contactMessage` varchar(255) NOT NULL,
  `contactButton` varchar(150) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `contactCoor` varchar(255) NOT NULL,
  `contactSiege` varchar(255) NOT NULL,
  `contactMailCoo` varchar(255) NOT NULL,
  `contactTel` varchar(255) NOT NULL,
  `contactReseaux` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`idContact`, `contactTitre`, `contactText`, `contactName`, `contactEmail`, `contactCategorie`, `contactMessage`, `contactButton`, `option1`, `option2`, `option3`, `option4`, `contactCoor`, `contactSiege`, `contactMailCoo`, `contactTel`, `contactReseaux`) VALUES
(1, 'Contactez-nous', 'Une envie de nous envoyer un message ?<br>\r\n Une question à nous poser ?<br> Un problème rencontré lors de votre visite ? <br> Veuillez utiliser ce formulaire pour prendre contact avec nous !<br>Je me ferai un plaisir de vous répondre dans les plus brefs délais .', 'Nom:', 'Mail :', 'Categorie :', 'Message :', 'Envoyer', 'Administration', 'Donation', 'Bénévole', 'Autre', 'Coordonnées', 'Siège social:<br>Avenue voltaire 138, 1030 Schaerbeek', 'Mail:<br>contact@sante-et-formation.org', 'Tel:', 'Réseaux sociaux');

-- --------------------------------------------------------

--
-- Structure de la table `contactaccueil`
--

CREATE TABLE `contactaccueil` (
  `idContactAccueil` int(11) NOT NULL,
  `contactAccueilTitre` varchar(150) NOT NULL,
  `contactAccueilDescription` mediumtext NOT NULL,
  `contactAccueilName` varchar(255) NOT NULL,
  `contactAccueilEmail` varchar(255) NOT NULL,
  `contactAccueilMsg` mediumtext NOT NULL,
  `contactAccueilButton` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `don`
--

CREATE TABLE `don` (
  `idDon` int(11) NOT NULL,
  `donTitre` varchar(150) NOT NULL,
  `donText` mediumtext NOT NULL,
  `donPackTitre` varchar(150) NOT NULL,
  `donPackImage` varchar(255) NOT NULL,
  `donPackText` mediumtext NOT NULL,
  `donPackButton` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `don`
--

INSERT INTO `don` (`idDon`, `donTitre`, `donText`, `donPackTitre`, `donPackImage`, `donPackText`, `donPackButton`) VALUES
(1, 'Fournitures pour rentrée scolaire', 'Communication: Fournitures pour rentrée scolaire', '30€/enfant', '<img id=\"photoDon\" src=\"img/back-to-school.jpg\" alt=\"Fourniture pour rentrée scolaire\">', 'IBAN: BE32 7340 2599 5302', ''),
(2, 'Vêtement pour rentrée scolaire', 'Communication: Vêtement pour rentrée scolaire', '30€/enfant', '<img src=\"img/vetement-enfant.jpg\" alt=\"Vêtement pour rentrée scolaire\" id=\"photoDon\">', 'IBAN: BE32 7340 2599 5302', ''),
(3, 'Aide Alimentaire pour<br> 1 famille et 3 enfants', 'Communication: Aide Alimentaire pour 1 famille et 3 enfants', '50€', '<img src=\"img/famille.jpg\" alt=\"Aide Alimentaire pour 1 famille et 3 enfants\" id=\"photoDon\">', 'IBAN: BE32 7340 2599 5302', ''),
(4, 'Aide pour les soins de santé:<br>Consultations-Médicaments', 'Communication: Aide pour les soins de santé', '50€', '<img src=\"img/consultation.jpg\" alt=\"Aide pour les soins de santé / Consultations-Médicaments\" id=\"photoDon\">', 'IBAN: BE32 7340 2599 5302', '');

-- --------------------------------------------------------

--
-- Structure de la table `footer`
--

CREATE TABLE `footer` (
  `idFooter` int(11) NOT NULL,
  `footerFaireUnDonTitre` varchar(150) NOT NULL,
  `footerFaireUnDonText` mediumtext NOT NULL,
  `footerFaireUnDonButton` varchar(150) NOT NULL,
  `footerAsbl` varchar(255) NOT NULL,
  `footerFormation` varchar(255) NOT NULL,
  `footerDon` varchar(255) NOT NULL,
  `footerAgenda` varchar(255) NOT NULL,
  `footerAdmin` varchar(255) NOT NULL,
  `footerMention` varchar(255) NOT NULL,
  `footerPolitique` varchar(255) NOT NULL,
  `footerTitre` varchar(255) NOT NULL,
  `footerDescription` varchar(255) NOT NULL,
  `footerCoordonnee` varchar(255) NOT NULL,
  `footerSiegeSociete` varchar(255) NOT NULL,
  `footerMail` varchar(255) NOT NULL,
  `footerTelephone` varchar(255) NOT NULL,
  `footerReseauxSocial` varchar(255) NOT NULL,
  `footerContactTitre` varchar(255) NOT NULL,
  `footerContactNom` varchar(255) NOT NULL,
  `footerContactEmail` varchar(255) NOT NULL,
  `footerContactMsg` varchar(255) NOT NULL,
  `footerContactButton` varchar(255) NOT NULL,
  `footerCopyrigth` varchar(255) NOT NULL,
  `footerAction` varchar(255) NOT NULL,
  `footerOp1` varchar(255) NOT NULL,
  `footerOp2` varchar(255) NOT NULL,
  `footerOp3` varchar(255) NOT NULL,
  `footerOp4` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `footer`
--

INSERT INTO `footer` (`idFooter`, `footerFaireUnDonTitre`, `footerFaireUnDonText`, `footerFaireUnDonButton`, `footerAsbl`, `footerFormation`, `footerDon`, `footerAgenda`, `footerAdmin`, `footerMention`, `footerPolitique`, `footerTitre`, `footerDescription`, `footerCoordonnee`, `footerSiegeSociete`, `footerMail`, `footerTelephone`, `footerReseauxSocial`, `footerContactTitre`, `footerContactNom`, `footerContactEmail`, `footerContactMsg`, `footerContactButton`, `footerCopyrigth`, `footerAction`, `footerOp1`, `footerOp2`, `footerOp3`, `footerOp4`) VALUES
(1, 'Faire un don', 'Nous avons besoin de votre aide pour apporter de l\'espoir et des secours à ceux qui en ont désespérément besoin. Chaque don compte. Faites la différence aujourd\'hui.\r\n<br>\r\nFaites un don maintenant : IBAN BE32 7340 2599 5302\r\n<br>\r\nEnsemble, nous pouvons changer des vies.', 'Donation', 'L\'ASBL', 'Formations', 'Don', 'Agenda', 'Admin', 'Mention légales', 'Politique de confidentialité', 'Santé et formation', 'Notre Association \"Santé & Formation\" contribue activement à la formation, l’éducation et l’insertion professionnelle des personnes précaires. Nos activités sont axées sur la santé physique et mentale, l’information et la prévention', 'Coordonnées', 'Siège social:<p>Avenue voltaire 138, 1030 Schaerbeek</p>\r\n', 'Mail:<p>contact@sante-et-formation.org</p>', 'Tel:', 'Réseaux sociaux', 'Contact', 'Nom, prénom *', 'Email *', 'Votre message *', 'ENVOYER', 'Santé-et-formation', 'Actions', 'Administration', 'Donation', 'Bénévole', 'Autre');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `idFormation` int(11) NOT NULL,
  `formationTitre` varchar(150) NOT NULL,
  `formationDate` date NOT NULL,
  `formationDescription` mediumtext NOT NULL,
  `formationText` longtext NOT NULL,
  `formationImage` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `navbar` (
  `idNavbar` int(11) NOT NULL,
  `navbarAsbl` varchar(255) NOT NULL,
  `navbarAction` varchar(255) NOT NULL,
  `navbarFormation` varchar(255) NOT NULL,
  `navbarAgenda` varchar(255) NOT NULL,
  `navbarContact` varchar(255) NOT NULL,
  `navbarDon` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `navbar`
--

INSERT INTO `navbar` (`idNavbar`, `navbarAsbl`, `navbarAction`, `navbarFormation`, `navbarAgenda`, `navbarContact`, `navbarDon`) VALUES
(1, 'ASBL', 'Actions', 'Formations', 'Agenda', 'Contact', 'Faire un don');

-- --------------------------------------------------------

--
-- Structure de la table `valuers`
--

CREATE TABLE `valuers` (
  `idValeurs` int(11) NOT NULL,
  `valeursTitre` varchar(150) NOT NULL,
  `valeursLogo` varchar(255) NOT NULL,
  `valueDescription` varchar(255) NOT NULL,
  `valeurT` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `valuers`
--

INSERT INTO `valuers` (`idValeurs`, `valeursTitre`, `valeursLogo`, `valueDescription`, `valeurT`) VALUES
(1, 'Equité', '', ' Equité sociale, économique et politique entre les genres', 'NOS VALEURS'),
(2, 'Justice', '', ' Promotion pour une meilleure justice sociale et économique', ''),
(3, 'Respect', '', 'Respecter la dignité des personnes précaires', ''),
(4, 'Ecologie', '', ' Oeuvrer pour une planète plus saine', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accueil`
--
ALTER TABLE `accueil`
  ADD PRIMARY KEY (`idAccueil`);

--
-- Index pour la table `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`idAction`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Index pour la table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`idAgenda`);

--
-- Index pour la table `asbl`
--
ALTER TABLE `asbl`
  ADD PRIMARY KEY (`idasbl`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`idContact`);

--
-- Index pour la table `contactaccueil`
--
ALTER TABLE `contactaccueil`
  ADD PRIMARY KEY (`idContactAccueil`);

--
-- Index pour la table `don`
--
ALTER TABLE `don`
  ADD PRIMARY KEY (`idDon`);

--
-- Index pour la table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`idFooter`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`idFormation`);

--
-- Index pour la table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`idNavbar`);

--
-- Index pour la table `valuers`
--
ALTER TABLE `valuers`
  ADD PRIMARY KEY (`idValeurs`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `accueil`
--
ALTER TABLE `accueil`
  MODIFY `idAccueil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `action`
--
ALTER TABLE `action`
  MODIFY `idAction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `idAgenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `asbl`
--
ALTER TABLE `asbl`
  MODIFY `idasbl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `idContact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `contactaccueil`
--
ALTER TABLE `contactaccueil`
  MODIFY `idContactAccueil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `don`
--
ALTER TABLE `don`
  MODIFY `idDon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `footer`
--
ALTER TABLE `footer`
  MODIFY `idFooter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `idFormation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `navbar`
--
ALTER TABLE `navbar`
  MODIFY `idNavbar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `valuers`
--
ALTER TABLE `valuers`
  MODIFY `idValeurs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
