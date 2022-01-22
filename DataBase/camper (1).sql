-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 27 mai 2021 à 10:43
-- Version du serveur :  8.0.21
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `camper`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `email`, `login`, `password`) VALUES
(1, 'seif', 'Rahmouni', 'seif2000rahmouni@gmail.com', 'seif', '2000'),
(4, 'test', 'try', 'try_test@okk.com', 'ok', 'done');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `num_c` int NOT NULL AUTO_INCREMENT,
  `marque` varchar(50) NOT NULL,
  `quantite` int NOT NULL,
  `prix` double NOT NULL,
  `prixTotal` double NOT NULL,
  `cin` int NOT NULL,
  PRIMARY KEY (`num_c`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`num_c`, `marque`, `quantite`, `prix`, `prixTotal`, `cin`) VALUES
(1, 'matla', 2, 134.5, 269, 10203040);

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

DROP TABLE IF EXISTS `favoris`;
CREATE TABLE IF NOT EXISTS `favoris` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nomproduit` varchar(50) NOT NULL,
  `nomclient` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `favoris`
--

INSERT INTO `favoris` (`id`, `nomproduit`, `nomclient`) VALUES
(1, 'pc', 'rahmouni'),
(2, 'clavier', 'ala'),
(3, 'RAM', 'Guest'),
(4, 'CD', 'MARIEM'),
(5, 'DVD', 'AMEL');

-- --------------------------------------------------------

--
-- Structure de la table `inscrit`
--

DROP TABLE IF EXISTS `inscrit`;
CREATE TABLE IF NOT EXISTS `inscrit` (
  `cin` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `inscrit`
--

INSERT INTO `inscrit` (`cin`, `nom`, `prenom`, `ville`, `password`) VALUES
(12345678, 'farid', 'latrech', 'ariana', '007\r\n'),
(14725836, 'test', 'tryyyy', 'Ariana', '1234'),
(10203040, 'okkkk', 'okkkkkk', 'Ariana', '1020'),
(132456456, 'ok', 'ok', 'Ariana', 'ok'),
(123456456, 'rahmouni', 'seif', 'Ariana', '123'),
(12345679, 'iheb', 'ayedi', 'Ariana', '1030'),
(12345674, 'iheb', 'thththth', 'Ariana', '5060'),
(12345274, 'iheb', 'thththth', 'Ariana', '4050'),
(14725896, 'kiki', 'ok', 'Medenine', '258'),
(321654987, 'plpl', 'plpl', 'Ariana', '2020'),
(12312312, 'jijiji', 'jijij', 'Ariana', '2020');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `marque` varchar(50) NOT NULL,
  `descreption` varchar(400) NOT NULL,
  `prix` double NOT NULL,
  `stock` int NOT NULL,
  `vendue` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `marque`, `descreption`, `prix`, `stock`, `vendue`) VALUES
(14, 'Lampe torche', 'HHHHH', 120, 10, 20),
(2, 'Lampe torche LED', 'Lampe torche LED -Zoom télescopique - Noir', 30.5, 50, 10),
(3, 'matla', 'matla 2 personnes', 134.5, 20, 5),
(11, 'Couteau', 'Couteau Multifonction - Couteau Suisse 13 en 1\r\n', 59.3, 50, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
