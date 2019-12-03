-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 03 déc. 2019 à 14:01
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
-- Structure de la table `todo`
--

DROP TABLE IF EXISTS `todo`;
CREATE TABLE IF NOT EXISTS `todo` (
  `ind` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `title` text COLLATE latin1_general_ci NOT NULL,
  `progress` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `estimated_time` int(5) NOT NULL,
  PRIMARY KEY (`ind`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `todo`
--

INSERT INTO `todo` (`ind`, `user`, `title`, `progress`, `estimated_time`) VALUES
(1, 'gul', 'helmo', 'encours', 3),
(2, 'ju', 'fraipont', 'encours', 4),
(3, 'lio', 'encours', 'Neutral CRM', 10),
(4, 'lio', 'encours', 'Neutral CRM', 10),
(5, 'lio', 'encours', 'Neutral CRM', 10),
(6, 'lio', 'encours', 'Neutral CRM', 10),
(7, 'lio', 'encours', 'fraipont', 10),
(8, 'gul', 'avenir', 'fraipont', 10),
(9, 'lio', 'neutral crm', 'termine', 10),
(10, 'lio', 'neutral crm', 'encours', 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
