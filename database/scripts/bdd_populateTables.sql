-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 09 Avril 2019 à 14:02
-- Version du serveur :  5.7.25-0ubuntu0.18.04.2
-- Version de PHP :  7.2.15-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `e-commerce`
--

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `label`, `menu`) VALUES
(1, 'Top', 'V'),
(2, 'Pull', 'V'),
(3, 'Gilet', 'V'),
(4, 'Chemisier', 'V'),
(5, 'Boots', 'C'),
(6, 'Escarpin', 'C');

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id`, `categorie_id`, `description`, `prix`, `mis en avant`, `nouveaute`) VALUES
(1, 1, 'Top noir dentelle doublee', 17, 1, 0),
(2, 2, 'Pull LALY pull couleur moutarde dos nu et detail sur les manches', 34, 1, 0),
(3, 3, 'Gilet tout doux à boule de sapin', 39, 1, 0),
(4, 4, 'Leo col lavallière couleurs terre, doublé ', 25, 1, 0),
(5, 5, 'boots a talon en cuir', 49, 1, 0),
(6, 6, 'YUMMY - Escarpins à talons hauts', 26.99, 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
