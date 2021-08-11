-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2021 at 09:38 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `denr`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `isactive` int(1) NOT NULL,
  `isdeleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstname`, `lastname`, `isactive`, `isdeleted`) VALUES
(1, '43', '43', 1, 1),
(2, 'John S', 'Parong', 1, 1),
(3, 'John', '', 1, 1),
(4, 'John', 'dsadsa', 1, 1),
(5, 'DENRs', 'SFC', 1, 1),
(6, '1', '1', 1, 0),
(7, '1', '1', 1, 0),
(8, '21', '21', 1, 0),
(9, '5', '5', 1, 0),
(10, '6', '6', 1, 0),
(11, '11', '11', 1, 0),
(12, '32132', '321321', 1, 0),
(13, '321321', '3211', 1, 0),
(14, '321321', '312321', 1, 0),
(15, '3213', '321321', 1, 0),
(16, 'John', '32121', 1, 0),
(17, '321', '421321', 1, 0),
(18, '555', '55', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `logger`
--

CREATE TABLE `logger` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logger`
--

INSERT INTO `logger` (`id`, `username`, `password`) VALUES
(2, 'admin2', '$2y$12$oLaXHeE3XFhgoJqzBHqzkeiyfUpSlVUlZaHTByDat/FjgA2z4U7hy'),
(3, 'admins', '$2y$12$iTiV6njzrUsX9QiitA8t1.VLR1itJl/Bolx7Wd8AIzjyvtVU0iUji'),
(4, 'admin1234', '$2y$12$.ofnM1OcnLejtGqYUcxisOQmuoU9O6ns2Iv/Nvogj58jR2.2G0vta'),
(5, 'admin12344', '$2y$12$YMs0/KGukaPBZ6O18a8vYuz1V/8REnwUlVSbdIK4wP0HgmUmOFCda'),
(6, 'admin4', '$2y$12$Y70oIHBXcjJtUOcXN1wDueuCtW9t0wZUvAGtFPDaXx93jlJrNFHEi'),
(7, 'admin', '$2y$12$v3nO91um8Duk5YIpqGb.Au/Gxz24N2J.5yP4h6N15Pnby5zcFMzyu'),
(8, 'admin12345678', '$2y$12$XmwG.kNLc6Nfk1X02X9.M.3YFK6NQKuGVRJ0fWzcEZaGyje2DMhK6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logger`
--
ALTER TABLE `logger`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `logger`
--
ALTER TABLE `logger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
