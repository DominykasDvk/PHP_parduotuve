-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2021 at 11:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `merchandise`
--

CREATE TABLE `merchandise` (
  `ID` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(20) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merchandise`
--

INSERT INTO `merchandise` (`ID`, `name`, `image`, `price`) VALUES
(1, 'Vidutinis dronas', '../img/1.jpg', 600.00),
(2, 'Mini Dronas', '../img/2.jpg', 30.00),
(3, 'Makrroflexas', '../img/3.jpg', 14.99),
(4, 'Diskinis pjuklas', '../img/4.jpg', 250.55),
(5, 'Duona', '../img/5.png', 3.18),
(6, 'Nealkoholinis alus', '../img/6.jpg', 1.99),
(7, 'Zuvu Pirsteliai', '../img/7.jfif', 4.50),
(8, 'Uzkepele', '../img/8.png', 3.50);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `surname`, `username`, `password`) VALUES
('Dominykas', 'Doviakovskis', 'DronuPilotas911', 'Asusg74sx'),
('Patrikas', 'Vandenis', 'kempiniukas', '123'),
('Mauglis', 'Smauglis', 'smauglys', 'palepsis2');

-- --------------------------------------------------------

--
-- Table structure for table `vertinimas`
--

CREATE TABLE `vertinimas` (
  `vardas` varchar(50) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `quest1` varchar(50) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `quest2` varchar(50) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `quest3` varchar(50) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `quest4` varchar(50) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `quest5` varchar(50) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `atsakymas` varchar(50) COLLATE utf8mb4_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_lithuanian_ci;

--
-- Dumping data for table `vertinimas`
--

INSERT INTO `vertinimas` (`vardas`, `quest1`, `quest2`, `quest3`, `quest4`, `quest5`, `atsakymas`) VALUES
('', 'A', 'B', 'A', 'B', 'A', '4'),
('', 'B', 'A', 'B', 'A', 'C', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `merchandise`
--
ALTER TABLE `merchandise`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
