-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 12 jan. 2024 à 22:04
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
-- Structure de la table `health_notebook`
--

CREATE TABLE `health_notebook` (
  `id` int(11) NOT NULL,
  `medicineName` varchar(255) NOT NULL,
  `dateOfUse` date NOT NULL,
  `reasonForUse` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `reminderDate` date NOT NULL,
  `alertName` varchar(255) NOT NULL,
  `id_cow` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `health_notebook`
--

INSERT INTO `health_notebook` (`id`, `medicineName`, `dateOfUse`, `reasonForUse`, `quantity`, `reminderDate`, `alertName`, `id_cow`) VALUES
(1, 'm1', '2024-01-12', 'n', 1, '2024-01-13', 'n', 0),
(2, 'm1', '2024-01-12', 'f', 1, '2024-01-16', 'n', 11),
(3, 'dolipran', '2024-01-12', 'non', 1, '2024-01-24', 'no', 11),
(4, 'm1', '2024-01-12', 'w', 1, '0000-00-00', 'w', 11),
(5, 'm1', '2024-01-12', 'w', 3, '0000-00-00', 'weee', 11),
(6, 'm1', '2024-01-12', 'd', 1, '2024-02-11', 'n', 11),
(7, 'm1', '2024-01-12', 'm', 1, '0000-00-00', 'm', 11),
(8, 'm1', '2024-01-12', 'm', 1, '2024-01-13', 'm', 11);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `health_notebook`
--
ALTER TABLE `health_notebook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `health_notebook`
--
ALTER TABLE `health_notebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
