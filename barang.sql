-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 06:58 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storeid`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idBarang` int(11) NOT NULL,
  `NamaBarang` varchar(255) NOT NULL,
  `JumlahBarang` int(11) NOT NULL,
  `HargaBarang` int(11) NOT NULL,
  `idKategori` int(11) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idBarang`, `NamaBarang`, `JumlahBarang`, `HargaBarang`, `idKategori`, `supplier`, `foto`) VALUES
(1, 'Almamater Polinema', 20, 190000, 4, 'Sasa', 'almet.png'),
(2, 'Minute Maid', 17, 5500, 2, 'bambang', 'pulpy.png'),
(4, 'Sosis Goreng', 5, 3000, 3, 'dinda', 'sosisgoreng.png'),
(5, 'Better', 1, 1500, 1, 'afifah', 'better.jpg'),
(6, 'Pilus', 2, 500, 1, 'garuda', 'pilus.jpg'),
(7, 'chocolatoss', 1, 1000, 1, 'Bambang', 'chocolatos.jpg'),
(8, 'Nabati 8g', 80, 500, 1, 'Bambang', 'nabati.jpg'),
(9, 'Biskuit Selimut', 80, 500, 1, 'Bambang', 'selimut.jpg'),
(10, 'Makaroni', 84, 500, 1, 'Dina', 'makaroni.jpg'),
(11, 'Tango', 68, 1000, 1, 'Kirana', 'tango.jpg'),
(12, 'Rosta', 50, 1000, 1, 'Garuda', 'rosta.jpg'),
(13, 'Kris Bee', 40, 1000, 1, 'Kirana', 'krisbee.jpg'),
(14, 'Leo', 177, 1000, 1, 'Bambang', 'leo.jpg'),
(15, 'Tic Tac', 100, 1000, 1, 'Bambang', 'tictac.jpg'),
(16, 'Jetz', 100, 1000, 1, 'Kirana', 'jetz.jpg'),
(17, 'Beng-Beng', 100, 1500, 1, 'Kirana', 'bengbeng.jpg'),
(18, 'Wallens', 97, 1500, 1, 'Bam', 'wallens.jpg'),
(19, 'Better', 98, 2000, 1, 'Bam', 'better.jpg'),
(20, 'Fullo', 87, 2000, 1, 'Kirana', 'fullo.jpg'),
(21, 'Nabati Rolls', 98, 2000, 1, 'Bambang', 'nabatorolls.jpg'),
(22, 'Roma Sari Gandum', 100, 2000, 1, 'Kirana', 'sarigandum.jpg'),
(23, 'Nabati 50g', 100, 2500, 1, 'Bambang', 'nabati50.jpg'),
(24, 'Seragam HMA', 30, 150000, 4, 'Siti', 'hma.jpg'),
(25, 'Seragam HME', 50, 150000, 4, 'Siti', 'hme.png'),
(26, 'Seragam HMM', 50, 150000, 4, 'Siti', 'hmm.jpg'),
(27, 'Seragam HMS', 50, 150000, 4, 'Siti', 'hms.png'),
(28, 'Seragam HMTI', 50, 150000, 4, 'Siti', 'hmti.jpg'),
(29, 'Jaket Polinema Navy', 50, 200000, 4, 'Suli', 'jaketBiru.PNG'),
(30, 'Jaket Polinema Putih', 50, 150000, 4, 'Suli', 'jaketPutih.PNG'),
(31, 'Kerupuk Sambal', 20, 3000, 3, 'Dewi', 'krupuksambal.jpg'),
(32, 'Tahu Kres', 8, 3000, 3, 'Dewi', 'tahukres.jpg'),
(33, 'Tela - Tela', 10, 3000, 3, 'Wiwik', 'telatela.jpg'),
(34, 'Indomie Goreng', 39, 5000, 3, 'Indofood', 'indomie.jpg'),
(35, 'Pop Mie', 48, 5000, 3, 'Sari', 'pop.jpg'),
(36, 'Sarimi Duo', 50, 6000, 3, 'Sari', 'sarimieduo.jpg'),
(37, 'Nutriforce', 14, 2500, 2, 'Nadia', 'nutriforce.png'),
(38, 'Teh Pucuk', 40, 3000, 2, 'Wiwik', 'tehpucuk.jpg'),
(39, 'Mineral', 50, 2500, 2, 'Wiwik', 'mineral.jpg'),
(40, 'Fanta 250ml', 49, 3500, 2, 'Wiwik', 'fanta250.jpg'),
(41, 'coca cola 250ml', 50, 3500, 2, 'Wiwik', 'cocacola250ml.png'),
(42, 'coca cola 380ml', 40, 4500, 2, 'Susi', 'cocacola380ml.jpg'),
(43, 'Nutriboost', 30, 6000, 2, 'Susi', 'nutriboost.jpg'),
(44, 'Kopi', 30, 3000, 2, 'Susi', 'kopi.jpg'),
(45, 'Es Teh', 50, 3000, 2, 'Susi', 'esteh.jpg'),
(46, 'Buah', 28, 2000, 1, 'toko', 'category-1.jpg'),
(47, '1', 1, 1, 1, '1', ''),
(48, '1', 1, 1, 2, '2', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idBarang`),
  ADD KEY `fk_barang_kategori` (`idKategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `fk_barang_kategori` FOREIGN KEY (`idKategori`) REFERENCES `kategori` (`idKategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
