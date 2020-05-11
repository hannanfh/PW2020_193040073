-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 04:41 AM
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
-- Database: `tubes_193040073`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `Id` int(10) NOT NULL,
  `cover` varchar(10) NOT NULL,
  `namaBuku` varchar(50) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `penerbit` varchar(20) NOT NULL,
  `harga` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`Id`, `cover`, `namaBuku`, `pengarang`, `penerbit`, `harga`) VALUES
(1, '1.jpg', '~SEBUAH SENI UNTUK BERSKAP BODO AMAT~', 'MARK MANSON', 'GRAMEDIA.COM', 'Rp.99.000'),
(2, '2.jpg', '~NANTI KITA CERITA TENTANG HARI INI~', 'MARCHELLA FP', 'GRAMEDIA.COM', 'Rp.99.000'),
(3, '3.jpg', '~ORANG-ORANG BIASA~', 'ANDREA HIRATA', 'GRAMEDIA.COM', 'Rp.99.000'),
(4, '4.jpg', '~11:11~', 'FIERSA BESARI', 'GRAMEDIA.COM', 'Rp.99.000'),
(5, '5.jpg', '~FATE GRAND ORDER~', 'TAKESHI KAWAGUCHI', 'GRAMEDIA.COM', 'Rp.99.000'),
(6, '6.jpg', '~KOMIK MUSLIM CILIK CINTAI MASJID~', 'DK.WARDHANI', 'GRAMEDIA.COM', 'Rp.99.000'),
(7, '7.jpg', '~OTORITAS HADIS-HADIS~', 'FAIQOTUL MALA', 'GRAMEDIA.COM', 'Rp.99.000'),
(8, '8.jpg', '~MUSLIM PRODUKTIF~', 'MOHAMMED FARIS', 'GRAMEDIA.COM', 'Rp.99.000'),
(9, '9.jpeg', '~KALA~', 'STEFANI BELLA-SYAHID MUHAMMAD', 'GRAMEDIA.COM', 'Rp.99.000'),
(10, '10.jpg', '~LASKAR PELANGI~', 'ANDREA HIRATA', 'GRAMEDIA.COM', 'Rp.99.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
