-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 01:37 AM
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
(1, 'foto11.jpg', 'Zalora', 'Brokat', 'M,L,', 'Black,Blue,Grey', 'Rp 549.000'),
(2, 'foto12.jpg', 'Zalora', 'Brokat', 'M,L,XL', 'Black,Red,Blue,White,Navy', 'Rp 99.000'),
(3, 'foto13.jpg', 'Zalora', 'Spandex', 'M,L,XL', 'Black,Blue,White,Green', 'Rp 99.000'),
(4, 'foto14.jpg', 'Zalora', 'Spandex', 'M,L,XL', 'Black,White', 'Rp 250.000'),
(5, 'foto15.jpg', 'Zalora', 'Polyester', 'M,L,', 'Black,Blue,White,Green,Red', 'Rp 250.000'),
(6, 'foto16.jpg', 'Zalora', 'Polyester', 'M,L,', 'Black,White,Grey', 'Rp 380.000'),
(7, 'foto17.jpg', 'Zalora', 'Cotton Commbed', 'M,L,', 'Black,White,Grey,Green', 'Rp 145.000'),
(8, 'foto18.jpg', 'Zalora', 'Cotton Combed', 'M,L', 'Black,Blue,White', 'Rp 999.000'),
(9, 'foto19.jpg', 'Zalora', 'Chiffon', 'M,L', 'Black,Blue,Navy', 'Rp 780.000'),
(10, 'foto20.jpg', 'Zalora', 'Chiffon', 'M,L', 'Black,Navy', 'Rp 875.000');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
