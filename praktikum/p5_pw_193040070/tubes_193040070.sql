-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 03:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040070`
--

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `id` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `ingredient` varchar(50) NOT NULL,
  `size` varchar(20) NOT NULL,
  `colour` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`id`, `picture`, `brand`, `ingredient`, `size`, `colour`, `price`) VALUES
(1, 'foto1.jpg', 'Manzone', 'Semi Wool', 'M,L,', 'Black,Blue,Grey', 'Rp 1.500.000,00'),
(2, 'foto2.jpg', 'Watchout', 'Flanel', 'M,L,XL', 'Black,Red,Blue,White,Navy', 'Rp 250.000,00'),
(3, 'foto3.jpg', 'Eiger', 'Flanel', 'M,L,XL', 'Black,Blue,White,Green', 'Rp 200.000,00'),
(4, 'foto4.jpg', 'Eiger', 'Katun', 'M,L,XL', 'Black,White', 'Rp 175.000,00'),
(5, 'foto5.jpg', '3 Second ', 'Katun', 'M,L,', 'Black,Blue,White,Green,Red', 'Rp 110.000,00'),
(6, 'foto6.jpg', '3 Second', 'Katun', 'M,L,', 'Black,White,Grey', 'Rp 110.000,00'),
(7, 'foto7.jpg', '3 Second', 'Katun', 'M,L,', 'Black,White,Grey,Green', 'Rp 110.000,00'),
(8, 'foto8.jpg', 'Lois', 'Jeans Denim Stretch', '29-34', 'Black,Blue,White', 'Rp 1.500.000,00'),
(9, 'foto9.jpg', 'Wrangler', 'Jeans Denim', '31-34', 'Black,Blue,Navy', 'Rp 1.000.000,00'),
(10, 'foto10.jpg', 'Lea', 'Jenas Denim Lea', '31-34', 'Black,Navy', 'Rp 999.000,00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
