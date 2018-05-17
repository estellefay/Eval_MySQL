-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 17 Mai 2018 à 12:31
-- Version du serveur :  10.1.26-MariaDB-0+deb9u1
-- Version de PHP :  7.0.27-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blod2`
--

-- --------------------------------------------------------

--
-- Structure de la table `Comments`
--

CREATE TABLE `Comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8_bin NOT NULL,
  `comments` text COLLATE utf8_bin NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `Comments`
--

INSERT INTO `Comments` (`id`, `user`, `comments`, `createdAt`) VALUES
(1, 'admin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2018-05-17 12:29:01'),
(2, 'admin', 'Donec imperdiet neque ac dolor lacinia varius.', '2018-05-17 12:29:01'),
(3, 'admin', 'Phasellus efficitur odio placerat, pulvinar quam vel, ornare urna.', '2018-05-17 12:31:23'),
(4, 'admin', 'Fusce malesuada sem tristique sem imperdiet, porttitor consequat orci interdum.', '2018-05-17 12:31:23'),
(5, 'admin', 'Nullam ac dolor at lacus vestibulum ultricies et vitae purus', '2018-05-17 12:31:23'),
(6, 'admin', 'Nullam ac dolor at lacus vestibulum ultricies et vitae purus', '2018-05-17 12:31:23'),
(7, 'admin', 'Nullam ac dolor at lacus vestibulum ultricies et vitae purus', '2018-05-17 12:31:23'),
(8, 'estelle', 'Nullam ac dolor at lacus vestibulum ultricies et vitae purus', '2018-05-17 12:31:23'),
(9, 'estelle', 'Nullam ac dolor at lacus vestibulum ultricies et vitae purus', '2018-05-17 12:31:23'),
(10, 'toto', 'Nullam ac dolor at lacus vestibulum ultricies et vitae purus', '2018-05-17 12:31:23'),
(11, 'toto', 'Nullam ac dolor at lacus vestibulum ultricies et vitae purus', '2018-05-17 12:31:23'),
(12, 'laura', 'Nullam ac dolor at lacus vestibulum ultricies et vitae purus', '2018-05-17 12:31:23');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Comments`
--
ALTER TABLE `Comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Comments`
--
ALTER TABLE `Comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
