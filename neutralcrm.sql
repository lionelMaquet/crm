-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 15 jan. 2020 à 14:54
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.4.1

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

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `nom` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `adresse` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `type` varchar(20) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `prenom` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nom` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `mail` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `tel_fixe` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `gsm` varchar(100) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `projet_id` int(11) NOT NULL,
  `titre` text COLLATE latin1_general_ci NOT NULL,
  `description` text COLLATE latin1_general_ci DEFAULT NULL,
  `remarque` text COLLATE latin1_general_ci DEFAULT NULL,
  `julien` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `gilles` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `lionel` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `deadline` date DEFAULT NULL,
  `statut` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `client_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`projet_id`, `titre`, `description`, `remarque`, `julien`, `gilles`, `lionel`, `deadline`, `statut`, `client_id`) VALUES
(75, 'vcb', 'cvb', 'cvbvc', 'oui', 'oui', 'oui', '2019-12-06', 'termine', NULL),
(74, 'test 3 fÃ©vrier', '   Ici je peux à présent modifier le texte. s Ici je peux à présent modifier le texte. s Ici je peux à présent modifier le texte. s Ici je peux à présent modifier le texte. s Ici je peux à présent modifier le texte. s Ici je peux à présent modifier le texte. s Ici je peux à présent modifier le texte. s Ici je peux à présent modifier le texte. s Ici je peux à présent modifier le texte. s Ici je peux à présent modifier le texte. s Ici je peux à présent modifier le texte. s Ici je peux à présent modifier le texte. s Ici je peux à présent modifier le texte. s Ici je peux à présent modifier le texte. s Ici je peux à présent modifier le texte. s Ici je peux à présent modifier le texte. s Ici je peux à présent modifier le texte. s Ici je peux à présent modifier le texte. s Ici je peux ', 'test 3 fÃ©vrier', 'oui', 'oui', 'oui', '2020-02-03', 'termine', NULL),
(73, 'test 1er janvier', ' test 1er janvier ', 'test 1er janvier', 'oui', 'oui', 'oui', '2020-01-01', 'termine', NULL),
(72, 'test 1er janvier ', ' qsdqsdsq', 'test 1er janvierqsdsqd', 'oui', 'oui', 'oui', '1970-01-01', 'avenir', NULL),
(71, 'test 1er janvier', '       test 1er janviereferferfrefreqsdqsdqsdfsdf', 'test 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqqtest 1er janvierqsdqqqq', 'oui', 'oui', 'oui', '1970-01-01', 'avenir', NULL),
(70, 'sdf', ' dsfje peux leq moifiers', 'dsfsdf', 'oui', 'non', 'non', '2019-12-05', 'termine', NULL),
(69, 'sdf', 'dsf', 'dsfsdf', 'oui', 'oui', 'oui', '2019-12-05', 'avenir', NULL),
(68, 'sdf', 'dsf', 'dsfsdf', 'non', 'non', 'non', '2019-12-05', 'avenir', NULL),
(67, 'sdf', 'dsf', 'dsfsdf', 'oui', 'oui', 'oui', '2019-12-05', 'avenir', NULL),
(66, 'ljh', 'kjkl', 'jkljkl', 'non', 'non', 'non', '2019-12-07', 'avenir', NULL),
(65, ';:', ',;:', ';,:;,:', 'oui', 'oui', 'oui', '2019-07-12', 'avenir', NULL),
(64, 'Projet test 1', 'Projet test 1', 'Projet test 1', 'oui', 'oui', 'oui', '2019-07-12', 'avenir', NULL),
(76, 'Mon premier projet', 'CrÃ©ation de la maquette', 'CrÃ©ation de la maquette', 'oui', 'oui', 'oui', '2020-02-08', 'avenir', NULL),
(77, 'aa', 'aa', 'aa', 'oui', 'oui', 'oui', '2019-12-07', 'avenir', NULL),
(78, 'Projet de Ju', 'Projet de Ju', 'Projet de Ju', 'oui', 'oui', 'non', '2019-12-06', 'avenir', NULL),
(79, 'pp', 'pp', 'ppp', 'oui', 'non', 'oui', '2019-12-06', 'avenir', NULL),
(80, 'Projet de Lio ', ' sdfdsf', 'sdfsdfdsf', 'non', 'oui', 'oui', '2019-12-07', 'avenir', NULL),
(81, '', '', '', 'non', 'non', 'non', '2020-04-09', 'avenir', NULL),
(82, 'test taches', 'allo', 'sdsqd', 'oui', 'oui', 'oui', '2020-01-03', 'avenir', NULL),
(83, '', '', '', 'oui', 'oui', 'oui', '1970-01-01', 'avenir', NULL),
(84, 'Création du site web', 'Créer le site', '', 'non', 'oui', 'oui', '2020-04-09', 'avenir', NULL),
(85, '', '', '', 'oui', 'non', 'non', '1970-01-01', 'avenir', NULL),
(86, 'CRM', '   azeaze', 'azeaze', 'oui', 'oui', 'oui', '2020-01-04', 'encours', NULL),
(88, '', '', '', 'oui', 'oui', 'non', '2020-03-06', 'avenir', NULL),
(87, 'zezrzr', 'ezrezrzerzerzerezrzerze', 'zerzerzerzerzerzerezr', 'non', 'non', 'non', '2020-01-30', 'avenir', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tache`
--

CREATE TABLE `tache` (
  `tache_id` int(11) NOT NULL,
  `projet_id` int(11) NOT NULL,
  `utilisateur` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `description` text COLLATE latin1_general_ci NOT NULL,
  `fait` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT 'non'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `tache`
--

INSERT INTO `tache` (`tache_id`, `projet_id`, `utilisateur`, `description`, `fait`) VALUES
(1, 2, 'julien', 'azezae', 'non'),
(2, 82, 'lionel', 'test tache lio', 'non'),
(3, 80, '', 'lionel', 'non'),
(4, 80, '', 'gilles', 'non'),
(5, 80, 'qsds', 'gilles', 'non'),
(6, 73, 'testju', 'julien', 'non'),
(7, 73, 'testju', 'julien', 'non'),
(8, 73, '', 'all', 'non'),
(9, 73, 'test', 'lionel', 'non'),
(10, 73, 'testtache lio', 'lionel', 'non'),
(11, 73, '', 'all', 'non'),
(12, 73, 'tes tache lio', 'lionel', 'non'),
(13, 69, 'test tâche ju', 'julien', 'non'),
(14, 69, 'lionel', 'tache lio', 'non'),
(123, 83, 'julien', 'Faire les trucs de Fraipont', 'non'),
(16, 79, 'all', 'qsdqsdqsdsqdqsdqqqqqqqqqqqqqqqqqqqqazdbhasdgusavduazvdauzydg khvajzdcyazgkdcazhdgkjvazctydghjazvducgk ahzvdukg hazvdukg azhvdgk jazhvgdk jazhvdg bjzavgdk jvazdg jhazvcgkd jhavzgk dzacg kdhavz ukgdau kgdazu kdg', 'non'),
(17, 79, 'all', 'qs', 'non'),
(18, 79, 'all', 'qsd', 'non'),
(19, 79, 'all', 'qsd', 'non'),
(20, 79, 'all', 'qsd', 'non'),
(21, 79, 'all', 'qsd', 'non'),
(23, 78, 'gilles', 'Faire un truc', 'non'),
(24, 78, 'gilles', 'gilles 78', 'non'),
(124, 84, 'lionel', 'Développement de la page Index', 'non'),
(125, 84, 'lionel', 'Développement de la page machin', 'non'),
(126, 84, 'gilles', 'Design de la page Index', 'non'),
(127, 85, 'undefined', '', 'non'),
(128, 85, 'julien', 'hu', 'non'),
(132, 86, 'lionel', 'Changer logo Neutral en Neutral agency', 'oui'),
(131, 86, 'lionel', 'Rajouter un lien vers la partie projets depuis la partie \"ajouter projet\"', 'oui'),
(129, 86, 'lionel', 'Rajouter la possibilité de barrer les tâches', 'oui'),
(134, 72, 'julien', 'sdsd', 'oui'),
(137, 72, 'julien', 'bjhbjkh', 'non'),
(142, 86, 'lionel', 'Pouvoir modifier la deadline', 'non'),
(143, 86, 'lionel', 'Pouvoir supprimer des utilisateurs des projets', 'non');

-- --------------------------------------------------------

--
-- Structure de la table `todo`
--

CREATE TABLE `todo` (
  `ind` int(10) UNSIGNED NOT NULL,
  `user` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `title` text COLLATE latin1_general_ci NOT NULL,
  `progress` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `estimated_time` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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
(10, 'lio', 'neutral crm', 'encours', 10),
(11, 'ju', 'tesettest', 'encours', 3);

-- --------------------------------------------------------

--
-- Structure de la table `tps_total`
--

CREATE TABLE `tps_total` (
  `temps_total_id` int(11) NOT NULL,
  `projet_id` int(11) NOT NULL,
  `temps_total` int(11) DEFAULT NULL,
  `dernier_debut` date DEFAULT NULL,
  `derniere_fin` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`projet_id`);

--
-- Index pour la table `tache`
--
ALTER TABLE `tache`
  ADD PRIMARY KEY (`tache_id`);

--
-- Index pour la table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`ind`);

--
-- Index pour la table `tps_total`
--
ALTER TABLE `tps_total`
  ADD PRIMARY KEY (`temps_total_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `projet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT pour la table `tache`
--
ALTER TABLE `tache`
  MODIFY `tache_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT pour la table `todo`
--
ALTER TABLE `todo`
  MODIFY `ind` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
