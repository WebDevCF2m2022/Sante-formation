-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 17 sep. 2023 à 20:00
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
-- Base de données : `sante_anglais`
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
(1, 'About us', ' HEALTH AND TRAINING <br>\r\n Investing in a better future <br>\r\nOnce upon a time, ASF was an association born of the passion of Moroccans and Belgians for Morocco. It began with medical caravans, became involved in education, and raised awareness through conferences. In times of crisis, ASF was there. Today, it continues its journey, strengthening education and medical care for Morocco.', 'Our \"Santé & Formation\" association actively contributes to the training, education and professional integration\r\nintegration of disadvantaged people.\r\n Our activities focus on physical and mental health, information and prevention. ', ' <img src=\"img/pexels-murilo-fonseca-17239050.jpg\" alt=\"\">', '', 'Our actions', 'img/caravan.png', 'Medical Caravan', 'Read more', 'Training courses', 'img/02.png', 'Economic emancipation', 'Read more', 'Calendar', 'img/r.png', 'Medical Caravans', '2024: Coming soon!'),
(2, '', '', '', '', '', '', 'img/08.PNG', 'The importance of water', '', '', 'img/06.PNG', 'Reintegration into society', '', '', 'img/r.png', 'Education', 'Health Education '),
(3, '', '', '', '', '', '', 'img/07.PNG', 'Family support', '', '', 'img/05.jpg', 'Preventive healthcare.', '', '', 'img/r.png', 'Scientific conference', 'Raising scientific awareness of health education <br>\r\n Lithotherapy in health.');

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
(1, 'Our actions', 'Investing in a better future .', 'Our activities focus on physical and mental health, information and prevention.', '2023-01-10', 'Medical Caravans', 'img/caravan.png'),
(2, '', '', '', '0000-00-00', 'Humanitarian actions', 'img/12.PNG'),
(3, '', '', '', '0000-00-00', 'Family assistance', 'img/07.PNG'),
(4, '', '', '', '0000-00-00', 'The importance of water', 'img/08.PNG');

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
(1, 'Calendar', '0000-00-00', '\"A Better Future: Our Program, Our Commitment!\"', 'Medical Caravans', 'img/r.png', '', 'Coming soon 2024!', 'Detail'),
(2, '', '0000-00-00', '', 'Health Education & Promotion', 'img/r.png', '', '  Coming soon!', ''),
(3, '', '0000-00-00', '', 'Scientific conference', 'img/r.png', '', 'Raising awareness of the scientific world <br> in health education - Coming soon!', ''),
(4, '', '0000-00-00', '', ' Seminar', 'img/r.png', '', 'Water Source of Life and sustainable <br> development in collaboration with Professor <br>\r\nFatima-Zahra Saoud. -Coming soon!', '');

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
(1, 'Who we are ?', 'Our \"Health & Training\" association actively contributes to the training, education and professional integration\r\nintegration of disadvantaged people.\r\n Our activities focus on physical and mental health, information and prevention.', 'Organization name: : Association Health & Training (ASF)\r\n<br>\r\nMission: ASF was created to promote health and education in Moroccan communities by supporting families in their integration and well-being.', 'History', 'Once upon a time, ASF was an association born of the passion of Moroccans and Belgians for Morocco. It began with medical caravans, became involved in education, and raised awareness through conferences. In times of crisis, ASF was there. Today, it continues its journey, strengthening education and medical care for Morocco.', '\"Your Action, Our Story: Changing the World Together!\"', 'Objective', 'The Association Santé et Formation (ASF) embodies hope by offering help and support to families, promotes multiculturalism without borders by strengthening cultural ties, while improving health, education and integration.\r\n\r\n ', '\"Our Goal: A Better World For All!\"');

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
(1, 'Contact us!', 'A desire to send us a message ?<br>\r\nA question for us  ?<br> A problem encountered during your visit ? <br> Please use this form to contact us !<br>I will be pleased to answer you as soon as possible.', 'Name:', 'Mail :', 'Categories :', 'Message :', 'Send', 'Management', 'Donation', 'Volunteer', 'Other', 'Contact', 'Registered office:<br>Avenue voltaire 138, 1030 Schaerbeek', 'Mail:<br>contact@sante-et-formation.org', 'Tel:0475.60.56.77', 'Social networking');

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
(1, 'Back-to-school supplies', 'Communication: Back-to-school supplies', '30€/child', 'img/back-to-school.jpg', 'IBAN: BE32 7340 2599 5302 <br>\r\nMAROC: 3106401017102604777301 24 ', ''),
(2, 'Back-to-school clothing', 'Communication: Back-to-school clothing', '30€/child', 'img/vetement-enfant.jpg ', 'IBAN: BE32 7340 2599 5302 <br>\r\nMAROC: 3106401017102604777301 24 ', ''),
(3, 'Food Assistance for<br> 1 family and 3 children', 'Communication: Food  assistance for 1 family and 3 children', '50€', 'img/famille.jpg', 'IBAN: BE32 7340 2599 5302 <br>\r\nMAROC: 3106401017102604777301 24 ', ''),
(4, 'Health care assistance:<br>Consultations-Medication', 'Communication: Healthcare assistance', '50€', 'img/consultation.jpg', 'IBAN: BE32 7340 2599 5302 <br>\r\nMAROC: 3106401017102604777301 24 ', '');

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
(1, 'Make a donation', 'We need your help to bring hope and relief to those who desperately need it. Every donation counts. Make a difference today.\r\n<br>\r\nMake a donation now: IBAN BE32 7340 2599 5302\r\n<br>\r\nTogether, we can change people\'s lives.', 'Donation', 'L\'ASBL', 'Training', 'Don', 'Calendar', 'Admin', 'Legal notice', 'Privacy policy', 'Health & Training', 'Our \"Santé & Formation\" association actively contributes to the training, education and professional integration of people in precarious situations. Our activities focus on physical and mental health, information and prevention.', 'Contact', 'Registered office:<p>Avenue voltaire 138, 1030 Schaerbeek</p>\r\n', 'Mail:<p>contact@sante-et-formation.org</p>', 'Tel:0475.60.56.77', 'Social networks', 'Contact', 'Last name, first name *', 'Email *', 'Your message *', 'SEND ', 'Health & Training', 'Actions', 'Management', 'Donation', 'Volunteer', 'Other');

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
(1, 'Our training courses', '0000-00-00', 'Economic emancipation through training', 'Health education through prevention', 'img/01.png'),
(2, '', '0000-00-00', '', 'Training for social reintegration ', 'img/05.jpg'),
(3, '', '0000-00-00', '', ' Health education for disadvantaged people', 'img/18.PNG');

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
(1, 'ASBL', 'Actions', 'Training', 'Calendar', 'Contact', 'Donation');

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
(1, 'Equity', '', ' Social, economic and political equity between the sexes', 'OUR VALUES'),
(2, 'Justice', '', ' Promoting greater social and economic justice', ''),
(3, 'Respect', '', 'Respecting the dignity of vulnerable people', ''),
(4, 'Ecology', '', 'Working towards a healthier planet', '');

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
