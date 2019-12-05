-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 05 déc. 2019 à 16:04
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `neutralcrm`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(11) NOT NULL,
  `nom` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `adresse` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `type` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `prenom` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nom` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `mail` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `tel_fixe` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `gsm` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `projet_id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` text COLLATE latin1_general_ci NOT NULL,
  `description` text COLLATE latin1_general_ci,
  `remarque` text COLLATE latin1_general_ci,
  `julien` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `gilles` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `lionel` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `deadline` date DEFAULT NULL,
  `statut` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`projet_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`projet_id`, `titre`, `description`, `remarque`, `julien`, `gilles`, `lionel`, `deadline`, `statut`, `client_id`) VALUES
(1, 'Site archéologique', 'Faire des panneaux pour machin', 'machin machin', 'oui', 'oui', 'non', '2019-12-19', 'avenir', NULL),
(2, 'Design site web', 'Création de la maquette Neutral', 'Ne pas oublier … ', 'non', 'oui', 'non', '2020-01-08', 'encours', NULL),
(3, 'Projet Biche', 'Intérieur appartement Biche', NULL, 'oui', 'oui', 'non', '2020-05-07', 'avenir', NULL),
(4, 'Projet Helmo', 'Design Helmo', NULL, 'non', 'oui', 'non', '2019-11-06', 'termine', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tache`
--

DROP TABLE IF EXISTS `tache`;
CREATE TABLE IF NOT EXISTS `tache` (
  `tache_id` int(11) NOT NULL AUTO_INCREMENT,
  `projet_id` int(11) NOT NULL,
  `utilisateur` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `description` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`tache_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tps_total`
--

DROP TABLE IF EXISTS `tps_total`;
CREATE TABLE IF NOT EXISTS `tps_total` (
  `temps_total_id` int(11) NOT NULL,
  `projet_id` int(11) NOT NULL,
  `temps_total` int(11) DEFAULT NULL,
  `dernier_debut` date DEFAULT NULL,
  `derniere_fin` date DEFAULT NULL,
  PRIMARY KEY (`temps_total_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
