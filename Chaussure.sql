-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 01 mai 2022 à 19:06
-- Version du serveur :  10.3.34-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `abadjeck_reservation`
--

-- --------------------------------------------------------

--
-- Structure de la table `Chaussure`
--

CREATE TABLE `Chaussure` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prix` varchar(4) NOT NULL,
  `description` mediumtext NOT NULL,
  `description2` mediumtext NOT NULL,
  `datesortie` date NOT NULL,
  `taille` varchar(2) NOT NULL,
  `image1` varchar(50) NOT NULL,
  `image2` varchar(50) NOT NULL,
  `image3` varchar(50) NOT NULL,
  `image4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Chaussure`
--

INSERT INTO `Chaussure` (`id`, `nom`, `prix`, `description`, `description2`, `datesortie`, `taille`, `image1`, `image2`, `image3`, `image4`) VALUES
(0, 'Air Jordan 3 Muslin', '200', 'Jordan Brand continue d’expérimenter sur le design de Tinker Hatfield, prochaine étape sur la liste, la Air Jordan 3 SE « Muslin ».', 'Cette itération bénéficie d\'une construction inhabituelle, avec une tige en toile canvas. Sa couleur beige est contrastée par quelques empiècements de daim gris, teinte qui vient aussi border l\'outsole, ainsi que des brandings rouge pour dynamiser l\'ensemble.', '2022-03-08', '10', 'image 4.png', 'image 4.png', 'image 4.png', 'image 4.png'),
(1, 'Yeezy 500 Boost', '300', 'La silhouette bulky combine différents matériaux comme du mesh, du cuir ou du daim dans une teinte monochrome, baptisée « Blush ». Pour finir, elle repose sur une semelle adiPrene, ornée d’un branding adidas ton sur ton.', 'La adidas Yeezy 500 « Blush » est sortie le 16 février, à 220$, au adidas 747 Warehouse Street, Los Angeles, et via adidas Confirmed App (Melrose Avenue et Venice) puis globalement le 14 avril 2018 sur adidas.fr à 10h ainsi que chez certains détaillants, au prix de 200€.\r\n\r\nUpdate\r\nUn restock de la adidas Yeezy 500 « Blush » est prévu pour le 3 mars 2022 sur adidas CONFIRMED et chez certains revendeurs, au prix de 210€. Don’t sleep !', '2022-03-03', '11', 'yeezy500.png', 'yeezy500.png', 'yeezy500.png', 'yeezy500.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Chaussure`
--
ALTER TABLE `Chaussure`
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
