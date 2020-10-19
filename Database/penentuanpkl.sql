-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2020 at 08:57 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penentuanpkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `idInstansi` int(11) NOT NULL,
  `NamaInstansi` varchar(255) NOT NULL,
  `notelpInstansi` int(13) NOT NULL,
  `alamatInstansi` varchar(200) NOT NULL,
  `jobdesk` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`idInstansi`, `NamaInstansi`, `notelpInstansi`, `alamatInstansi`, `jobdesk`, `foto`) VALUES
(53, 'contoh 2', 2, '2', '2', '2.PNG'),
(55, 'contoh 4', 89, 'jj', '8', '21 - Copy (4).PNG'),
(56, 'contoh5', 55555, 'gg', 'gg', '3.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_akademik`
--

CREATE TABLE `kriteria_akademik` (
  `id_akademik` int(11) NOT NULL,
  `akademik` varchar(50) NOT NULL,
  `target` int(11) NOT NULL,
  `faktor` varchar(11) NOT NULL,
  `faktorpersen` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_akademik`
--

INSERT INTO `kriteria_akademik` (`id_akademik`, `akademik`, `target`, `faktor`, `faktorpersen`) VALUES
(1, 'IPK', 3, 'CF', 0.03),
(2, 'Kemampuan Dasar', 5, 'SF', 0.03);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_keahlian`
--

CREATE TABLE `kriteria_keahlian` (
  `id_keahlian` int(11) NOT NULL,
  `keahlian` varchar(50) NOT NULL,
  `target` int(11) NOT NULL,
  `faktor` varchar(50) NOT NULL,
  `faktorpersen` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_keahlian`
--

INSERT INTO `kriteria_keahlian` (`id_keahlian`, `keahlian`, `target`, `faktor`, `faktorpersen`) VALUES
(1, 'Pemrograman Mobile', 3, 'CF', 0.03),
(2, 'Jaringan', 4, 'CF', 0.03),
(3, 'Desain', 3, 'SF', 0.03);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_kemampuan`
--

CREATE TABLE `kriteria_kemampuan` (
  `id_kemampuan` int(11) NOT NULL,
  `kemampuan` varchar(50) NOT NULL,
  `target` int(11) NOT NULL,
  `faktor` varchar(50) NOT NULL,
  `faktorpersen` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_kemampuan`
--

INSERT INTO `kriteria_kemampuan` (`id_kemampuan`, `kemampuan`, `target`, `faktor`, `faktorpersen`) VALUES
(1, 'Database', 4, 'CF', 0.02),
(2, 'Web', 5, 'CF', 0.02),
(3, 'Pemrograman Mobile', 3, 'CF', 0.02),
(4, 'Jaringan', 4, 'SF', 0.02),
(5, 'Desain', 3, 'SF', 0.02);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_kepribadian`
--

CREATE TABLE `kriteria_kepribadian` (
  `id_kepribadian` int(11) NOT NULL,
  `kepribadian` varchar(50) NOT NULL,
  `target` int(11) NOT NULL,
  `faktor` varchar(50) NOT NULL,
  `faktorpersen` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_kepribadian`
--

INSERT INTO `kriteria_kepribadian` (`id_kepribadian`, `kepribadian`, `target`, `faktor`, `faktorpersen`) VALUES
(1, 'Keaktifan', 5, 'CF', 0.02),
(2, 'Kedisiplinan', 4, 'SF', 0.02);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `idLogin` int(10) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `loginLevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`idLogin`, `Username`, `Password`, `loginLevel`) VALUES
(1, 'admin', 'admin', 1),
(2, 'user', 'user', 2),
(3, 'a', 'a', 2),
(5, 'afi', '123', 2),
(6, 'bila', '123', 2),
(7, 'dena', 'dena', 2),
(8, 'dini', '110199', 2),
(9, 'bachtiar', 'bachtiar', 2),
(10, 'deni', 'deni', 2),
(11, 'Mrs. Dewi Ratna', '123', 2),
(12, 'Chika', '123', 2),
(14, 'q', 'q', 2),
(15, 'maria', '123', 2),
(16, 'linda', '123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `idMahasiswa` int(10) NOT NULL,
  `NamaMahasiswa` varchar(255) NOT NULL,
  `NoTelpMahasiswa` int(25) NOT NULL,
  `EmailMahasiswa` varchar(255) NOT NULL,
  `idLogin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`idMahasiswa`, `NamaMahasiswa`, `NoTelpMahasiswa`, `EmailMahasiswa`, `idLogin`) VALUES
(1, 'a', 8145678, 'a@gmail.com', 3),
(3, 'Afifah Mila', 2147483647, 'afi@gmail.com', 5),
(4, 'bila', 898172899, 'bila@gmail.com', 6),
(5, 'dena', 8977765, 'dena@gmail.com', 7),
(6, 'dini triana', 123456, 'diniiii@gmail.com', 8),
(7, 'bachtiar', 2147483647, 'bachtiar@gmail.com', 9),
(8, 'deni', 87809970, 'deni@gmail.com', 10),
(9, 'Chika ', 9876543, 'dewi@gmail.com', 11),
(10, 'Dewi', 987654, 'chika@gmail.com', 12),
(11, 'q', 0, 'q@g.com', 14),
(12, '1', 1, '1@g.v', 15),
(13, 'linda', 9876, 'l@g.co', 16);

-- --------------------------------------------------------

--
-- Table structure for table `matching`
--

CREATE TABLE `matching` (
  `idMatching` int(11) NOT NULL,
  `nilaiPemrograman` int(11) NOT NULL,
  `nilaiJaringan` int(11) NOT NULL,
  `nilaiIOT` int(11) NOT NULL,
  `nilaiMultimedia` int(11) NOT NULL,
  `IPK` int(11) NOT NULL,
  `idMahasiswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matching`
--

INSERT INTO `matching` (`idMatching`, `nilaiPemrograman`, `nilaiJaringan`, `nilaiIOT`, `nilaiMultimedia`, `IPK`, `idMahasiswa`) VALUES
(1, 90, 90, 90, 90, 98, 0),
(2, 89, 9, 89, 89, 89, 3);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_mahasiswa`
--

CREATE TABLE `nilai_mahasiswa` (
  `id_nilai` int(11) NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `a1` int(11) NOT NULL,
  `a2` int(11) NOT NULL,
  `b1` int(11) NOT NULL,
  `b2` int(11) NOT NULL,
  `b3` int(11) NOT NULL,
  `b4` int(11) NOT NULL,
  `b5` int(11) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `d1` int(11) NOT NULL,
  `d2` int(11) NOT NULL,
  `d3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_mahasiswa`
--

INSERT INTO `nilai_mahasiswa` (`id_nilai`, `nama_mahasiswa`, `a1`, `a2`, `b1`, `b2`, `b3`, `b4`, `b5`, `c1`, `c2`, `d1`, `d2`, `d3`) VALUES
(1, 'Ani', 3, 5, 3, 4, 4, 5, 5, 5, 5, 2, 4, 3),
(2, 'Ana', 4, 5, 4, 4, 5, 5, 5, 5, 5, 3, 4, 4),
(3, 'Ano', 4, 4, 5, 4, 3, 3, 4, 5, 4, 4, 3, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`idInstansi`);

--
-- Indexes for table `kriteria_akademik`
--
ALTER TABLE `kriteria_akademik`
  ADD PRIMARY KEY (`id_akademik`);

--
-- Indexes for table `kriteria_keahlian`
--
ALTER TABLE `kriteria_keahlian`
  ADD PRIMARY KEY (`id_keahlian`);

--
-- Indexes for table `kriteria_kemampuan`
--
ALTER TABLE `kriteria_kemampuan`
  ADD PRIMARY KEY (`id_kemampuan`);

--
-- Indexes for table `kriteria_kepribadian`
--
ALTER TABLE `kriteria_kepribadian`
  ADD PRIMARY KEY (`id_kepribadian`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idLogin`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`idMahasiswa`),
  ADD KEY `fk_login_konsumen` (`idLogin`);

--
-- Indexes for table `matching`
--
ALTER TABLE `matching`
  ADD PRIMARY KEY (`idMatching`);

--
-- Indexes for table `nilai_mahasiswa`
--
ALTER TABLE `nilai_mahasiswa`
  ADD PRIMARY KEY (`id_nilai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `idInstansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `kriteria_akademik`
--
ALTER TABLE `kriteria_akademik`
  MODIFY `id_akademik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kriteria_keahlian`
--
ALTER TABLE `kriteria_keahlian`
  MODIFY `id_keahlian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kriteria_kemampuan`
--
ALTER TABLE `kriteria_kemampuan`
  MODIFY `id_kemampuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kriteria_kepribadian`
--
ALTER TABLE `kriteria_kepribadian`
  MODIFY `id_kepribadian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `idLogin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `idMahasiswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `matching`
--
ALTER TABLE `matching`
  MODIFY `idMatching` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nilai_mahasiswa`
--
ALTER TABLE `nilai_mahasiswa`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `fk_login_konsumen` FOREIGN KEY (`idLogin`) REFERENCES `login` (`idLogin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
