-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 09:57 AM
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
-- Database: `pw_193040073`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Id` int(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Nrp` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Jurusan` varchar(20) NOT NULL,
  `Gambar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`Id`, `Nama`, `Nrp`, `Email`, `Jurusan`, `Gambar`) VALUES
(1, 'Angga Rizki Saputra', '193040071', '193040071@mail.unpas.ac.id', 'Teknik Informatika', 'angga.jpg'),
(2, 'Arman Muhammad Sidik', '193040072', '193040072@mail.unpas.ac.id', 'Teknik Informatika', 'arman.jpg'),
(3, 'Hannan Fakhrul Hakim', '193040073', '193040073@mail.unpas.ac.id', 'Teknik Informatika', 'hannan.jpg'),
(4, 'Nura Nuraeni', '193040074', '193040074@mail.unpas.ac.id', 'Teknik Informatika', 'nura.jpg'),
(5, 'Sarah Nurlatifah', '193040075', '193040075@mail.unpas.ac.id', 'Teknik Informatika', 'sarah.jpg'),
(6, 'Sukma Julianti', '193040076', '193040076@mail.unpas.ac.id', 'Teknik Informatika', 'sukma.jpg'),
(7, 'Dimas Jatnika', '193040077', '193040077@mail.unpas.ac.id', 'Teknik Informatika', 'dimas.jpg'),
(8, 'Agus Awaludin', '193040078', '193040078@mail.unpas.ac.id', 'Teknik Informatika', 'agus.jpg'),
(9, 'Adnan Ibnu Faruqi', '193040079', '193040079@mail.unpas.ac.id', 'Teknik Informatika', 'adnan.jpg'),
(10, 'Hisyam Muhammad Rasidin', '193040080', '193040080@mail.unpas.ac.id', 'Teknik Informatika', 'hisyam.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
