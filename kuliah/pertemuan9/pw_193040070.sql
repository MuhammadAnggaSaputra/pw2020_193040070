-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 09:15 AM
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
-- Database: `pw_193040070`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `ID` int(11) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `NRP` char(9) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `JURUSAN` varchar(50) NOT NULL,
  `GAMBAR` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`ID`, `NAMA`, `NRP`, `EMAIL`, `JURUSAN`, `GAMBAR`) VALUES
(1, 'Dimas Nanda Herlambang', '193040040', 'dimas@unpas.ac.id', 'Teknik Informatika', 'foto1.jpg'),
(2, 'Muhammad Viqri Febriana', '193040041', 'viqri@unpas.ac.id', 'Teknik Informatika', 'foto2.jpg'),
(3, 'Suhendani', '193040042', 'suhendani@unpas.ac.id', 'Teknik Informatika', 'foto3.jpg'),
(4, 'Herlan Nurachman', '193040043', 'herlan@unpas.ac.id', 'Teknik Informatika', 'foto4.jpg'),
(5, 'Rayhan Abduhuda', '193040044', 'rayhan@unpas.ac.id', 'Teknik Informatika', 'foto5.jpg'),
(6, 'Dian Nuryana', '193040045', 'dian@unpas.ac.id', 'Teknik Informatika', 'foto6.jpg'),
(7, 'Aji Nuansa Sangarie', '193040046', 'Aji@unpas.ac.id', 'Teknik Informatika', 'foto7.jpg'),
(8, 'Fauzan Ihsanudin', '193040047', 'fauzan@unpas.ac.id', 'Teknik Informatika', 'foto8.jpg'),
(9, 'Sultan Jihad Abiyu', '193040048', 'sultan@unpas.ac.id', 'Teknik Informatika', 'foto9.jpg'),
(10, 'Salsabila Nada Adzani', '193040050', 'salsa@unpas.ac.id', 'Teknik Informatika', 'foto10.jpg'),
(11, 'Usep Syaiful Hidayat', '193040051', 'dimas@unpas.ac.id', 'Teknik Informatika', 'foto11.jpg'),
(12, 'Adinda Fadhil Patria', '193040052', 'dida@unpas.ac.id', 'Teknik Informatika', 'foto12.jpg'),
(13, 'Fauzan Nursalma', '193040053', 'fauzan@unpas.ac.id', 'Teknik Informatika', 'foto13.jpg'),
(14, 'Aldi Ageng', '193040054', 'aldi@unpas.ac.id', 'Teknik Informatika', 'foto13.jpg'),
(15, 'Devi Ayu Lestari', '193040055', 'devi@unpas.ac.id', 'Teknik Informatika', 'foto14.jpg'),
(16, 'Sahid Jafar', '193040056', 'sahid@unpas.ac.id', 'Teknik Informatika', 'foto15.jpg'),
(17, 'Rio Alfian Santoso', '193040057', 'rio@unpas.ac.id', 'Teknik Informatika', 'foto16.jpg'),
(18, 'Bayu Cucan Herdian', '193040058', 'bayu@unpas.ac.id', 'Teknik Informatika', 'foto17.jpg'),
(19, 'Muhammad Naufal Hamid', '193040059', 'naufal@unpas.ac.id', 'Teknik Informatika', 'foto18.jpg'),
(20, 'Muhammad Rafid Rabani', '193040061', 'rafid@unpas.ac.id', 'Teknik Informatika', 'foto19.jpg'),
(21, 'Rifky Gema Fauzi', '193040062', 'rifky@unpas.ac.id', 'Teknik Informatika', 'foto20.jpg'),
(22, 'Akbar Muhammad Farabi', '193040064', 'akbar@unpas.ac.id', 'Teknik Informatika', 'foto21.jpg'),
(23, 'Fikry Aditya Nugraha', '193040066', 'fikry@unpas.ac.id', 'Teknik Informatika', 'foto22.jpg'),
(24, 'Mika Quarta', '193040067', 'mika@unpas.ac.id', 'Teknik Informatika', 'foto23.jpg'),
(25, 'Rifky Maulana', '193040068', 'rifku@unpas.ac.id', 'Teknik Informatika', 'foto24.jpg'),
(26, 'Agam Febriansyah', '193040069', 'agam@unpas.ac.id', 'Teknik Informatika', 'foto25.jpg'),
(27, 'Muhammad Angga Saputra', '193040070', 'angga@unpas.ac.id', 'Teknik Informatika', 'foto26.jpg'),
(28, 'Tresna Eka Widiana', '193040071', 'tresna@unpas.ac.id', 'Teknik Informatika', 'foto27.jpg'),
(29, 'Rofil Rusmeina', '193040072', 'rofi@unpas.ac.id', 'Teknik Informatika', 'foto28.jpg'),
(30, 'Hannan Fakhrul Hakim', '193040073', 'hannan@unpas.ac.id', 'Teknik Informatika', 'foto29.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
