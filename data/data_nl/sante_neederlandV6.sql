-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 17 sep. 2023 à 20:01
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
-- Base de données : `sante_neederland`
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
(1, 'Over ons', '  GEZONDHEID EN TRAINING <br>\r\nInvesteren in een betere toekomst <br>\r\nEr was eens AdZG, een vereniging geboren uit de passie van Marokkanen en Belgen met banden met Marokko. Ze begon met medische karavanen, hield zich bezig met onderwijs en sensibiliseerde via conferenties. In tijden van crisis was AdZG er. Vandaag zet ze haar reis voort en versterkt ze het onderwijs en de medische zorg in Marokko.', 'Onze vereniging \"GEZONDHEID EN TRAINING\" draagt actief bij tot de opleiding, vorming en professionele integratie van mensen in precaire situaties.\r\nmensen in precaire situaties.\r\n Onze activiteiten richten zich op fysieke en mentale gezondheid, informatie en preventie.', ' <img src=\"img/pexels-murilo-fonseca-17239050.jpg\" alt=\"\">', '', 'Onze activiteiten', 'img/caravan.png', 'Medische caravans', 'Meer informatie', 'Onze trainingen', 'img/02.png', 'Economische emancipatie', 'Meer informatie', 'Agenda', 'img/r.png', 'Medische caravans', '2024: Binnenkort!'),
(2, '', '', '', '', '', '', 'img/08.PNG', 'Water: het belang', '', '', 'img/06.PNG', 'Sociale re-integratie ', '', '', 'img/r.png', 'Onderwijs', 'Gezondheidsvoorlichting '),
(3, '', '', '', '', '', '', 'img/07.PNG', 'Hulp voor gezinnen', '', '', 'img/05.jpg', 'Gezondheid door preventive.', '', '', 'img/r.png', 'Wetenschappelijke conferentie', 'Bewustmaking van gezondheidseducatie in de wetenschappelijke wereld <br>\r\n Gezondheidsvaardigheden.');

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
(1, 'Onze acties', 'Investeren in een betere toekomst.', 'Onze activiteiten zijn gericht op lichamelijke en geestelijke gezondheid, informatie en preventie.', '2023-01-10', ' Medische caravans ', 'img/caravan.png'),
(2, '', '', '', '0000-00-00', 'Humanitaire acties', 'img/12.PNG'),
(3, '', '', '', '0000-00-00', ' Hulp voor gezinnen', 'img/07.PNG'),
(4, '', '', '', '0000-00-00', 'Water: het belang', 'img/08.PNG');

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
(1, 'Agenda', '0000-00-00', '\"Een betere toekomst: ons programma, onze belofte!\"', 'Medische caravans', 'img/r.png', '', 'Komt in 2024!', 'Detail'),
(2, '', '0000-00-00', '', 'Gezondheidsvoorlichting enbevordering', 'img/r.png', '', ' Binnenkort ', ''),
(3, '', '0000-00-00', '', 'Wetenschappelijke conferentie', 'img/r.png', '', 'Bewustwording in de wetenschappelijke wereld <br> over gezondheidseducatie - Binnenkort beschikbaar!', ''),
(4, '', '0000-00-00', '', 'Seminar', 'img/r.png', '', 'Water, bron van leven en duurzame ontwikkeling <br> in samenwerking met professor <br> Fatima-Zahra Saoud.\r\nFatima-Zahra Saoud. -Binnenkort beschikbaar!', '');

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
(1, 'Wie zijn wij?', 'Onze vereniging \"Gezondheid & Opleiding\" draagt actief bij tot de opleiding, vorming en professionele integratie van mensen in precaire situaties.\r\nmensen in precaire situaties.\r\n Onze activiteiten richten zich op fysieke en mentale gezondheid, informatie en preventie.', 'Naam organisatie: Vereniging voor gezondheid en vorming (ASF)\r\n<br>\r\nMissie : AdZG is opgericht om gezondheid en onderwijs in Marokkaanse gemeenschappen te bevorderen door gezinnen te ondersteunen bij hun integratie en welzijn.', 'Geschiedenis', 'Er was eens ASF, een vereniging geboren uit de passie van Marokkanen en Belgen met banden met Marokko. Ze begon met medische karavanen, hield zich bezig met onderwijs en sensibiliseerde via conferenties. In tijden van crisis was ASF er. Vandaag zet ze haar reis voort en versterkt ze het onderwijs en de medische zorg in Marokko.', '\"Jouw actie, ons verhaal: samen de wereld veranderen!', 'Doel', 'Vereniging voor gezondheid en vorming (ASF) belichaamt hoop door hulp en steun te bieden aan gezinnen, bevordert multiculturalisme zonder grenzen door culturele banden aan te halen en tegelijkertijd gezondheid, onderwijs en integratie te verbeteren.\r\n ', '\"Ons Doel: Een Betere Wereld Voor Iedereen!\"');

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
(1, 'Contacteer ons', 'Wilt u ons een bericht sturen ?<br>\r\n  Heb je een vraag voor ons?<br> Een probleem ondervonden tijdens je bezoek?<br>  Gebruik dit formulier om contact met ons op te nemen en ik neem zo snel mogelijk contact met je op.', 'Naam:', 'Mail :', 'Category :', 'Bericht:', 'Stuur', 'Administratie', 'Donatie', 'Vrijwilligers', 'Andere', 'Contactgegevens', 'Maatschappelijke zetel:<br>Voltairelaan 138, 1030 Schaarbeek', 'Mail:<br>contact@sante-et-formation.org', 'Tel:0475.60.56.77', 'Sociale netwerken');

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
(1, 'Aardbeving - Dringend', 'Een team vrijwilligers vertrekt later deze week om de zwaarst getroffenen te helpen in de bergen bij\r\nMarrakech ', 'Ook jij kunt helpen door een donatie te doen op onze \r\nrekening : ', 'img/24.jpg', 'IBAN: BE32 7340 2599 5302 <br>\r\nMAROC: 3106401017102604777301 24 ', ''),
(2, 'Terug-naar-school kleding', 'Mededeling: Terug naar school kleding', '30€/kind', 'img/vetement-enfant.jpg', 'IBAN: BE32 7340 2599 5302 <br>\r\nMAROC: 3106401017102604777301 24 ', ''),
(3, 'Voedselhulp voor <br>1 gezin en 3 kinderen', 'Communicatie: Voedselhulp voor 1 gezin en 3 kinderen', '50€', 'img/famille.jpg', 'IBAN: BE32 7340 2599 5302 <br>\r\nMAROC: 3106401017102604777301 24 ', ''),
(4, 'Hulp bij gezondheidszorg:<br>Consulten-Medicijnen', 'Communicatie: Hulp bij gezondheidszorg', '50€', 'img/consultation.jpg', 'IBAN: BE32 7340 2599 5302 <br>\r\nMAROC: 3106401017102604777301 24 ', ''),
(5, 'Back-to-school benodigdheden', 'Communicatie: Back-to-school benodigdheden', '30€/kind', 'img/back-to-school.jpg', 'IBAN: BE32 7340 2599 5302 <br>\r\nMAROC: 3106401017102604777301 24 ', '');

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
(1, 'Doneer', 'We hebben jouw hulp nodig om hoop en verlichting te brengen aan hen die het wanhopig nodig hebben. Elke donatie telt. Maak vandaag het verschil.\r\n<br>\r\nMaak nu een donatie: IBAN BE32 7340 2599 5302\r\n<br>\r\nSamen kunnen we levens veranderen.', 'Donatie', 'ASBL', 'Training', 'Don', 'Agenda', 'Admin', 'Wettelijke kennisgeving', 'Privacybeleid', 'Gezondheid en opleiding', 'Onze vereniging \"Gezondheid en opleiding\" draagt actief bij tot de opleiding, vorming en professionele integratie van mensen in precaire situaties. Onze activiteiten zijn gericht op lichamelijke en geestelijke gezondheid, informatie en preventie.', 'Contactgegevens', 'Maatschappelijke zetel:<p>Voltairelaan 138, 1030 Schaarbeek</p>\r\n', 'Mail:<p>contact@sante-et-formation.org</p>', 'Tel:0475.60.56.77', 'Sociale netwerken', 'Neem contact op met', 'Achternaam, voornaam *', 'Email *', 'Uw bericht *', 'VERZENDEN', 'Gezondheid en training', 'Acties', 'Administratie', 'Donatie', 'Vrijwilligers', 'Andere');

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
(1, 'Onze trainingen', '0000-00-00', 'Economische emancipatie door opleiding', ' Gezondheidseducatie door preventie', 'img/01.png'),
(2, '', '0000-00-00', '', 'Training voor sociale re-integratie ', 'img/05.jpg'),
(3, '', '0000-00-00', '', ' Gezondheidseducatie voor kansarmen', 'img/18.PNG');

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
(1, 'ASBL', 'Acties', 'Training', 'Agenda', 'Contact', 'Doneer');

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
(1, 'Aandelen', '', 'Sociale, economische en politieke gelijkheid tussen de seksen', 'ONZE WAARDEN'),
(2, 'Justitie', '', ' Meer sociale en economische rechtvaardigheid bevorderen', ''),
(3, 'Respect', '', 'De waardigheid van kwetsbare mensen respecteren', ''),
(4, 'Ecologie', '', ' Werken aan een gezondere planeet', '');

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
  MODIFY `idDon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
