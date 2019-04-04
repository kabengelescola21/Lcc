-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 03 Avril 2019 à 14:07
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `lcc_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `login`, `pwd`) VALUES
(1, 'Axel', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `categoriefood`
--

CREATE TABLE IF NOT EXISTS `categoriefood` (
  `id_catFood` int(11) NOT NULL AUTO_INCREMENT,
  `type_food` varchar(50) NOT NULL,
  PRIMARY KEY (`id_catFood`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `categoriefood`
--

INSERT INTO `categoriefood` (`id_catFood`, `type_food`) VALUES
(1, 'boisson'),
(2, 'autre'),
(3, 'autre');

-- --------------------------------------------------------

--
-- Structure de la table `categorieplace`
--

CREATE TABLE IF NOT EXISTS `categorieplace` (
  `id_catplace` int(11) NOT NULL AUTO_INCREMENT,
  `type_place` varchar(20) NOT NULL,
  `prix` double NOT NULL,
  PRIMARY KEY (`id_catplace`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `comedien`
--

CREATE TABLE IF NOT EXISTS `comedien` (
  `id_comedien` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `description` text,
  `teleplone` int(11) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `fk_idgroupe` int(11) NOT NULL,
  PRIMARY KEY (`id_comedien`),
  KEY `idgroupe` (`fk_idgroupe`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `comedien`
--

INSERT INTO `comedien` (`id_comedien`, `nom`, `description`, `teleplone`, `facebook`, `fk_idgroupe`) VALUES
(7, 'Franck', NULL, NULL, NULL, 1),
(12, 'Mikael', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `detailfood`
--

CREATE TABLE IF NOT EXISTS `detailfood` (
  `id_detailfood` int(11) NOT NULL AUTO_INCREMENT,
  `fk_idfood` int(11) NOT NULL,
  `fk_idreservation` int(11) NOT NULL,
  `prixtotal` double NOT NULL,
  `qte` int(11) NOT NULL,
  PRIMARY KEY (`id_detailfood`),
  KEY `fk_idfood` (`fk_idfood`),
  KEY `fk_idreservation` (`fk_idreservation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id_events` int(11) NOT NULL AUTO_INCREMENT,
  `date_eventdebut` date NOT NULL,
  `heure_eventdebut` time NOT NULL,
  `date_eventfin` date DEFAULT NULL,
  `heure_eventfin` time DEFAULT NULL,
  `fk_idgroupe` int(11) NOT NULL,
  `fk_idlieu` int(11) NOT NULL,
  `fk_idsponsor` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  PRIMARY KEY (`id_events`),
  KEY `fk_idgroupe` (`fk_idgroupe`),
  KEY `fk_idlieu` (`fk_idlieu`),
  KEY `fk_idsponsor` (`fk_idsponsor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id_events`, `date_eventdebut`, `heure_eventdebut`, `date_eventfin`, `heure_eventfin`, `fk_idgroupe`, `fk_idlieu`, `fk_idsponsor`, `nom`) VALUES
(2, '2019-04-03', '12:59:59', NULL, NULL, 1, 1, 1, 'semaine du rire'),
(4, '2019-04-03', '12:59:59', NULL, NULL, 1, 1, 1, 'mois du rire');

-- --------------------------------------------------------

--
-- Structure de la table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `id_food` int(11) NOT NULL AUTO_INCREMENT,
  `nom_food` varchar(50) NOT NULL,
  `fk_idcatfood` int(11) NOT NULL,
  `prix` double NOT NULL,
  PRIMARY KEY (`id_food`),
  UNIQUE KEY `fk_idcatfood` (`fk_idcatfood`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE IF NOT EXISTS `groupe` (
  `id_groupe` int(11) NOT NULL AUTO_INCREMENT,
  `nom_groupe` varchar(50) NOT NULL,
  `description` text,
  `teleplone` int(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fk_idadmin` int(11) NOT NULL,
  PRIMARY KEY (`id_groupe`),
  UNIQUE KEY `fk_idadmin` (`fk_idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `groupe`
--

INSERT INTO `groupe` (`id_groupe`, `nom_groupe`, `description`, `teleplone`, `email`, `fk_idadmin`) VALUES
(1, 'lubumcomedieclub', NULL, 987654432, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE IF NOT EXISTS `lieu` (
  `id_lieu` int(11) NOT NULL AUTO_INCREMENT,
  `nom_lieu` varchar(50) NOT NULL,
  `adresse_lieu` varchar(50) NOT NULL,
  `nbplace` int(11) NOT NULL,
  PRIMARY KEY (`id_lieu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `lieu`
--

INSERT INTO `lieu` (`id_lieu`, `nom_lieu`, `adresse_lieu`, `nbplace`) VALUES
(1, 'hall de l''etoile', 'adresse', 200);

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE IF NOT EXISTS `paiement` (
  `id_paiement` int(11) NOT NULL AUTO_INCREMENT,
  `fk_idreservation` int(11) NOT NULL,
  PRIMARY KEY (`id_paiement`),
  KEY `fk_idreservation` (`fk_idreservation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

CREATE TABLE IF NOT EXISTS `participant` (
  `id_participant` int(11) NOT NULL AUTO_INCREMENT,
  `nom_participant` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_participant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `id_place` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `etat` tinyint(1) NOT NULL DEFAULT '0',
  `fk_idcatplace` int(11) NOT NULL,
  PRIMARY KEY (`id_place`),
  KEY `fk_idcatplace` (`fk_idcatplace`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id_reservation` int(11) NOT NULL AUTO_INCREMENT,
  `fk_idevent` int(11) NOT NULL,
  `fk_idparticipant` int(11) NOT NULL,
  `fk_place` int(11) NOT NULL,
  PRIMARY KEY (`id_reservation`),
  KEY `fk_idevent` (`fk_idevent`),
  KEY `fk_idparticipant` (`fk_idparticipant`),
  KEY `fk_place` (`fk_place`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `sponsor`
--

CREATE TABLE IF NOT EXISTS `sponsor` (
  `id_sponsor` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `logo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_sponsor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `sponsor`
--

INSERT INTO `sponsor` (`id_sponsor`, `nom`, `logo`) VALUES
(1, 'itot', NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `comedien`
--
ALTER TABLE `comedien`
  ADD CONSTRAINT `comedien_ibfk_1` FOREIGN KEY (`fk_idgroupe`) REFERENCES `groupe` (`id_groupe`);

--
-- Contraintes pour la table `detailfood`
--
ALTER TABLE `detailfood`
  ADD CONSTRAINT `detailfood_ibfk_2` FOREIGN KEY (`fk_idreservation`) REFERENCES `reservation` (`id_reservation`),
  ADD CONSTRAINT `detailfood_ibfk_1` FOREIGN KEY (`fk_idfood`) REFERENCES `food` (`id_food`);

--
-- Contraintes pour la table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`fk_idgroupe`) REFERENCES `groupe` (`id_groupe`),
  ADD CONSTRAINT `events_ibfk_2` FOREIGN KEY (`fk_idlieu`) REFERENCES `lieu` (`id_lieu`),
  ADD CONSTRAINT `events_ibfk_3` FOREIGN KEY (`fk_idsponsor`) REFERENCES `sponsor` (`id_sponsor`);

--
-- Contraintes pour la table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`fk_idcatfood`) REFERENCES `categoriefood` (`id_catFood`);

--
-- Contraintes pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD CONSTRAINT `groupe_ibfk_1` FOREIGN KEY (`fk_idadmin`) REFERENCES `admin` (`id_admin`);

--
-- Contraintes pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD CONSTRAINT `paiement_ibfk_1` FOREIGN KEY (`fk_idreservation`) REFERENCES `reservation` (`id_reservation`);

--
-- Contraintes pour la table `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `place_ibfk_1` FOREIGN KEY (`fk_idcatplace`) REFERENCES `categorieplace` (`id_catplace`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
