-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 22 mars 2024 à 15:22
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `todolist`
--

-- --------------------------------------------------------

--
-- Structure de la table `todo_category`
--

DROP TABLE IF EXISTS `todo_category`;
CREATE TABLE IF NOT EXISTS `todo_category` (
  `id_Cat` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_Cat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `todo_cat_intermediaire`
--

DROP TABLE IF EXISTS `todo_cat_intermediaire`;
CREATE TABLE IF NOT EXISTS `todo_cat_intermediaire` (
  `id_Task` int NOT NULL,
  `id_Cat` int NOT NULL,
  `id_Cat_Int` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_Task`,`id_Cat`),
  KEY `id_Cat` (`id_Cat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `todo_priority`
--

DROP TABLE IF EXISTS `todo_priority`;
CREATE TABLE IF NOT EXISTS `todo_priority` (
  `id_Prio` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_Prio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `todo_task`
--

DROP TABLE IF EXISTS `todo_task`;
CREATE TABLE IF NOT EXISTS `todo_task` (
  `id_Task` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `_date` date NOT NULL,
  `id_Prio` int NOT NULL,
  `id_User` int NOT NULL,
  PRIMARY KEY (`id_Task`),
  KEY `id_Prio` (`id_Prio`),
  KEY `id_User` (`id_User`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `todo_user`
--

DROP TABLE IF EXISTS `todo_user`;
CREATE TABLE IF NOT EXISTS `todo_user` (
  `id_User` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `motDePasse` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_User`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `todo_user`
--

INSERT INTO `todo_user` (`id_User`, `nom`, `prenom`, `email`, `motDePasse`) VALUES
(1, 'Blankenmeister', 'Sonia', 'sonia.blankenmeister@gmail.com', 'n'),
(2, 'Blankenmeister', 'Sonia', 'sonia.blankenmeister@gmail.com', 'n'),
(3, 'Blankenmeister', 'Sonia', 'sonia.blankenmeister@gmail.com', 'n'),
(4, 'Blankenmeister', 'Sonia', 'sonia.blankenmeister@gmail.com', 'n'),
(12, 'micoud', 'Sonia', 'sonia.blankenmeister@gmail.com', 'jj'),
(13, 'micoud', 'Sonia', 'sonia.blankenmeister@gmail.com', 'jj'),
(14, 'micoud', 'Sonia', 'sonia.blankenmeister@gmail.com', 'jj'),
(15, 'micoud', 'Sonia', 'sonia.blankenmeister@gmail.com', 'jj'),
(16, 'blanc', 'Sonia', 'sonia@gmail.com', 'gg'),
(17, 'blanc', 'Sonia', 'sonia@gmail.com', 'gg'),
(18, 'blanc', 'Sonia', 'sonia@gmail.com', 'gg'),
(19, 'Blankenmeister', 'Sonia', 'someister@gmail.com', 'gg'),
(20, 'fevf', 'vervre', 'evcreee', 'ff'),
(21, 'Blankenmeister', 'Sonia', 'soeister@gmail.com', 'gg'),
(22, 'gf', 'gbtt', 'trytr', 'ff'),
(23, 'dgrt', 'rthtre', 'rehttr', 'gg'),
(24, 'scfe', 'vcrefre', 'ercre', 'gg'),
(25, 'scfe', 'vcrefre', 'ercre', 'gg'),
(26, 'Blankenmeister', 'Sonia', 'sonia.blankenmeister@gmail.com', 'ee'),
(27, 'Blankenmeister', 'Sonia', 'sonia.blankenmeister@gmail.com', 'ee'),
(28, 'fezf', 'fze', 'zfe', 'ff'),
(29, 'ss', 'ss', 'ss', 'f');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
