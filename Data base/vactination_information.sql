-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 28 déc. 2023 à 23:48
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cow_farmer_ahmed_billa`
--

-- --------------------------------------------------------

--
-- Structure de la table `vactination_information`
--

CREATE TABLE `vactination_information` (
  `id` int(11) NOT NULL,
  `number_of_vactination` int(11) NOT NULL,
  `bull_name` varchar(128) NOT NULL,
  `vactination_date` date NOT NULL,
  `result` varchar(128) NOT NULL,
  `calf_name` varchar(128) NOT NULL,
  `birth_date` date NOT NULL,
  `male_female` varchar(128) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vactination_information`
--

INSERT INTO `vactination_information` (`id`, `number_of_vactination`, `bull_name`, `vactination_date`, `result`, `calf_name`, `birth_date`, `male_female`, `note`) VALUES
(1, 2, 'dkskasf', '0000-00-00', 'negative', '', '0000-00-00', 'male', ''),
(2, 2, 'dkskasf', '0000-00-00', 'negative', '', '0000-00-00', 'male', ''),
(3, 2, 'dkskasf', '2023-12-28', 'negative', '', '0000-00-00', 'male', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `vactination_information`
--
ALTER TABLE `vactination_information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `vactination_information`
--
ALTER TABLE `vactination_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
