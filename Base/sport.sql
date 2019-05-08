-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 08 Mai 2019 à 12:49
-- Version du serveur :  5.6.11-log
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sport`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `pseudo` varchar(15) NOT NULL,
  `motPasse` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`pseudo`, `motPasse`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `idCategorie` int(11) NOT NULL,
  `idAuteur` int(11) NOT NULL,
  `titre` varchar(100) DEFAULT NULL,
  `dateParution` date DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `photo` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `idCategorie`, `idAuteur`, `titre`, `dateParution`, `description`, `photo`) VALUES
(1, 1, 1, 'Tournoi ATP de Barcelone : Rafael Nadal éliminé en demi par Dominic Thiem', '2019-04-27', 'Le numéro 2 mondial, a été sorti samedi en deux sets (6-4, 6-4) par l\'Autrichien (5e mondial) en demi-finales. Après Monte-Carlo, il s\'agit d\'un nouvel échec sur terre battue pour l\'Espagnol à un mois de Roland-Garros.\r\n\r\n\r\nC\'était son premier gros test, face à un Top 10 mondial, l\'un des rares joueurs du circuit capables de le faire vaciller sur terre battue, après sa désillusion de Monte-Carlo (défaite en demi-finale contre Fabio Fognini). Et Rafael Nadal a failli face à un Dominic Thiem qui a', 'tennis1.jpg'),
(2, 1, 1, 'Tournoi ATP de Barcelone : Dominic Thiem s\'impose en finale face à Medvedev', '2019-04-28', 'L\'Autrichien Dominic Thiem a remporté dimanche le tournoi de Barcelone. Il a battu en finale Daniil Medvedev (6-4, 6-0).\r\n\r\n\r\nAprès sa belle semaine barcelonaise ponctuée d\'un neuvième titre sur terre battue, Dominic Thiem se pose comme un candidat plus que sérieux pour Roland-Garros (26 mai-9 juin). Auteur d\'un début de partie complètement manqué, l\'Autrichien s\'est ensuite remis dans le sens de la marche pour battre Daniil Medvedev avec aplomb.', 'tennis2.jpg'),
(3, 2, 2, 'Ligue des champions : Lionel Messi (Barça) sans pitié pour Liverpool', '2019-05-02', 'C\'est quand Barcelone a vraiment tremblé que l\'Argentin s\'est occupé de tout contre Liverpool (3-0). Deux buts, des accélérations comme des flèches, le capitaine du Barça, qui a atteint les 600 réalisations en club, reste au-dessus de tous, et même de son équipe.\r\n\r\n\r\nRemontons la trace récente du génie au Camp Nou, cette saison, en Ligue des champions : doublé en huitièmes face à Lyon (5-1), doublé en quarts devant Manchester United (3-0), doublé en demi-finales face à Liverpool (3-0). Lionel M', 'foot1.jpg'),
(4, 2, 2, 'Ligue des champions : l\'Ajax fait un grand pas vers la finale après sa victoire', '2019-04-30', 'Sensation de cette Ligue des champions, l\'Ajax Amsterdam s\'est imposée 1-0 sur la pelouse de Tottenham, en demi-finales aller de la Ligue des champions ce mardi. Van de Beek a inscrit le seul but de la rencontre.\r\n\r\nC\'est beau, c\'est frais, et semaine après semaine, match après match, une immense sensation continue de marquer au fer « Orange » cette édition de la Ligue des champions. Qui aurait parié, en début de saison, sur les chances de voir l\'Ajax Amsterdam disputer la finale de la C 1 ? Plu', 'foot2.jpg');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `articlevue`
--
CREATE TABLE `articlevue` (
`id` int(11)
,`idAuteur` int(11)
,`idCategorie` int(11)
,`nomCateg` varchar(15)
,`nomAuteur` varchar(15)
,`titre` varchar(100)
,`dateParution` date
,`description` varchar(500)
,`photo` varchar(15)
);

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `idAuteur` int(11) NOT NULL,
  `pseudo` varchar(15) DEFAULT NULL,
  `nomAuteur` varchar(15) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `auteur`
--

INSERT INTO `auteur` (`idAuteur`, `pseudo`, `nomAuteur`, `age`) VALUES
(1, 'ChristopheM', 'Christophe Marc', 31),
(2, 'Steph', 'Stéphane Agus', 40);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idCateg` int(11) NOT NULL,
  `nomCateg` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`idCateg`, `nomCateg`) VALUES
(1, 'TENNIS'),
(2, 'FOOTBALL');

-- --------------------------------------------------------

--
-- Structure de la vue `articlevue`
--
DROP TABLE IF EXISTS `articlevue`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `articlevue`  AS  select `article`.`id` AS `id`,`article`.`idAuteur` AS `idAuteur`,`article`.`idCategorie` AS `idCategorie`,`categorie`.`nomCateg` AS `nomCateg`,`auteur`.`nomAuteur` AS `nomAuteur`,`article`.`titre` AS `titre`,`article`.`dateParution` AS `dateParution`,`article`.`description` AS `description`,`article`.`photo` AS `photo` from ((`article` join `categorie` on((`article`.`idCategorie` = `categorie`.`idCateg`))) join `auteur` on((`article`.`idAuteur` = `auteur`.`idAuteur`))) ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCategorie` (`idCategorie`),
  ADD KEY `idAuteur` (`idAuteur`);

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`idAuteur`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idCateg`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `idAuteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idCateg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
