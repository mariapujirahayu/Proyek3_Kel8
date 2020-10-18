-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 07:02 PM
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
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `idKonsumen` int(10) NOT NULL,
  `NamaKonsumen` varchar(255) NOT NULL,
  `NoTelpKonsumen` int(25) NOT NULL,
  `EmailKonsumen` varchar(255) NOT NULL,
  `idLogin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`idKonsumen`, `NamaKonsumen`, `NoTelpKonsumen`, `EmailKonsumen`, `idLogin`) VALUES
(1, 'a', 8145678, 'a@gmail.com', 3),
(3, 'Afifah Mila', 2147483647, 'afi@gmail.com', 5),
(4, 'bila', 898172899, 'bila@gmail.com', 6),
(5, 'dena', 8977765, 'dena@gmail.com', 7),
(6, 'dini triana', 123456, 'diniiii@gmail.com', 8),
(7, 'bachtiar', 2147483647, 'bachtiar@gmail.com', 9),
(8, 'deni', 87809970, 'deni@gmail.com', 10),
(9, 'Chika ', 9876543, 'dewi@gmail.com', 11),
(10, 'Dewi', 987654, 'chika@gmail.com', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`idKonsumen`),
  ADD KEY `fk_login_konsumen` (`idLogin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `idKonsumen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD CONSTRAINT `fk_login_konsumen` FOREIGN KEY (`idLogin`) REFERENCES `login` (`idLogin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
