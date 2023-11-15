-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 11, 2023 at 11:06 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive_user`
--

CREATE TABLE `archive_user` (
  `id` int NOT NULL DEFAULT '0',
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int NOT NULL,
  `birthdate` date NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `archive_user`
--

INSERT INTO `archive_user` (`id`, `firstname`, `middlename`, `lastname`, `address`, `age`, `birthdate`, `contact`, `email`) VALUES
(3, 'Marijon Himaya', 'Tampong, Sogod Southern Leyte', 22, '2001-01-28', '09123456789', 'himayamarijon123@gmail.com'),
(12, 'Hydra', 'United States', 21, '2002-10-28', '09123456789', 'zylemax@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int NOT NULL,
  `birthdate` date NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `firstname`, `middlename`, `lastname`, `address`, `age`, `birthdate`, `contact`, `email`) VALUES
(1, 'Sandra Baul', 'Canlupao Tomas Oppus Southern Leyte', 21, '2002-10-28', '0987654321', 'wabinsandra@gmail.com'),
(4, 'Jhiela Laroga', 'Canlupao Tomas Oppus Southern Leyte', 21, '2001-06-05', '09012345678', 'jhielalaroga@gmail.com'),
(10, 'Zal Gabriel Banque', 'United States', 21, '2002-02-10', '09123456789', 'zylemax@gmail.com');

--
-- Triggers `info`
--
DELIMITER $$
CREATE TRIGGER `archive_user_before_delete` BEFORE DELETE ON `info` FOR EACH ROW BEGIN
	INSERT INTO archive_user SELECT * FROM info WHERE id = OLD.id;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
