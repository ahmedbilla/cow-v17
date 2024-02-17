-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2023 at 09:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cow_farmer_ahmed_billa`
--

-- --------------------------------------------------------

--
-- Table structure for table `cow_information`
--

CREATE TABLE `cow_information` (
  `Cow_Name` varchar(128) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Gender` varchar(128) NOT NULL,
  `Weight_kg` int(128) NOT NULL,
  `Mother_of_the_Cow` varchar(128) NOT NULL,
  `Father_of_the_Cow` varchar(128) NOT NULL,
  `Breed` varchar(128) NOT NULL,
  `Number_of_Births` varchar(128) NOT NULL,
  `Seller_Name` varchar(128) NOT NULL,
  `Date_of_Purchase` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cow_information`
--

INSERT INTO `cow_information` (`Cow_Name`, `Date_of_Birth`, `Gender`, `Weight_kg`, `Mother_of_the_Cow`, `Father_of_the_Cow`, `Breed`, `Number_of_Births`, `Seller_Name`, `Date_of_Purchase`) VALUES
('MA000BI9030', '2023-12-25', 'female', 343, 'MA000BI9031', 'MA000BI9032', 'longhorn', '4', 'Mohamed', '2023-12-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cow_information`
--
ALTER TABLE `cow_information`
  ADD PRIMARY KEY (`Cow_Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
