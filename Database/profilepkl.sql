-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 01:44 AM
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
-- Database: `profilepkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `hasilhitung`
--

CREATE TABLE `hasilhitung` (
  `id_hasil` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `hasil` double NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasilhitung`
--

INSERT INTO `hasilhitung` (`id_hasil`, `id_mahasiswa`, `nama_instansi`, `hasil`, `tanggal`) VALUES
(4, 2, 'Cahaya Matahari', 4.34, '2020-11-02 20:38:00'),
(5, 2, 'Harapan', 4.415, '2020-11-02 20:38:00'),
(6, 2, 'Abadi', 4.175, '2020-11-02 20:38:00'),
(7, 2, 'Cahaya Matahari', 4.34, '2020-11-02 20:43:00'),
(8, 2, 'Harapan', 4.415, '2020-11-02 20:43:00'),
(9, 2, 'Abadi', 4.175, '2020-11-02 20:43:00'),
(10, 4, 'Cahaya Matahari', 4, '2020-11-02 21:01:00'),
(11, 4, 'Harapan', 4.39, '2020-11-02 21:01:00'),
(12, 4, 'Abadi', 4.435, '2020-11-02 21:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id_instansi` int(11) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `nomorhp` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `jobdesk` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ka1` int(11) NOT NULL,
  `ka2` int(11) NOT NULL,
  `kb1` int(11) NOT NULL,
  `kb2` int(11) NOT NULL,
  `kb3` int(11) NOT NULL,
  `kb4` int(11) NOT NULL,
  `kb5` int(11) NOT NULL,
  `kc1` int(11) NOT NULL,
  `kc2` int(11) NOT NULL,
  `kd1` int(11) NOT NULL,
  `kd2` int(11) NOT NULL,
  `kd3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id_instansi`, `nama_instansi`, `nomorhp`, `alamat`, `jobdesk`, `foto`, `ka1`, `ka2`, `kb1`, `kb2`, `kb3`, `kb4`, `kb5`, `kc1`, `kc2`, `kd1`, `kd2`, `kd3`) VALUES
(1, 'Cahaya Matahari', 64517261, 'Jl. Teladan Jaya No. 20 Surabaya', 'Membuat Website Penilaian Karyawan', '6_2.jpg', 3, 5, 3, 4, 4, 5, 5, 5, 5, 2, 4, 3),
(3, 'Harapan', 8918272, 'Kediri', 'Web', '6_2.jpg', 4, 5, 4, 4, 5, 5, 5, 5, 5, 3, 4, 4),
(5, 'Abadi', 8128712, 'Jl Kandangan Raya, Semarang', 'Membuat Web Sistem Informasi', 'virtualbackground.jpg', 4, 4, 5, 4, 3, 3, 4, 5, 4, 4, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama`, `email`, `username`, `pass`) VALUES
(1, 'user', 'user@gmail.com', 'user', 'user'),
(2, 'maria', 'maria@gmail.com', 'maria', 'maria'),
(3, 'user2', 'user2@gmail.com', 'user2', 'user2'),
(4, 'puput', 'puput@gmail.com', 'puput', 'puput');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_mahasiswa`
--

CREATE TABLE `nilai_mahasiswa` (
  `id_nilai` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
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

INSERT INTO `nilai_mahasiswa` (`id_nilai`, `id_mahasiswa`, `a1`, `a2`, `b1`, `b2`, `b3`, `b4`, `b5`, `c1`, `c2`, `d1`, `d2`, `d3`) VALUES
(1, 1, 3, 5, 4, 5, 3, 4, 3, 5, 4, 3, 4, 3),
(3, 2, 4, 5, 1, 4, 5, 3, 3, 4, 2, 2, 4, 3),
(4, 3, 4, 4, 3, 3, 1, 5, 5, 3, 3, 4, 4, 5),
(5, 4, 4, 4, 5, 5, 2, 5, 3, 4, 4, 3, 5, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `hasilhitung`
--
ALTER TABLE `hasilhitung`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `nilai_mahasiswa`
--
ALTER TABLE `nilai_mahasiswa`
  ADD PRIMARY KEY (`id_nilai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hasilhitung`
--
ALTER TABLE `hasilhitung`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id_instansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nilai_mahasiswa`
--
ALTER TABLE `nilai_mahasiswa`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
