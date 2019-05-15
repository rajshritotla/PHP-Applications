-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2018 at 12:49 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `analyze_numerical_data_week4`
--
CREATE DATABASE IF NOT EXISTS `analyze_numerical_data_week4` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `analyze_numerical_data_week4`;

-- --------------------------------------------------------

--
-- Table structure for table `data_table`
--

DROP TABLE IF EXISTS `data_table`;
CREATE TABLE `data_table` (
  `sr_no` int(11) NOT NULL,
  `data` varchar(20) NOT NULL,
  `time` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_table`
--

INSERT INTO `data_table` (`sr_no`, `data`, `time`) VALUES
(68, '37', 1538820795),
(69, 'kjk', 1538820837),
(70, '', 1538820842),
(71, '56', 1538820887),
(72, '895.2369', 1538820895),
(73, '62', 1538820904),
(74, 'ajsfjdk', 1538820947),
(75, 'ajsfjdk', 1538820981),
(76, 'ajsfjdk', 1538821001),
(77, 'ajsfjdk', 1538821022),
(78, '%237qe', 1538821060),
(79, '63.2', 1538821068),
(80, '63.2', 1538821117),
(81, '7998.236', 1538821143),
(82, '895', 1538821150),
(83, '856', 1538821157),
(84, '2324', 1538821162),
(85, '534', 1538821168),
(86, '34234', 1538821176),
(87, '3425', 1538821182),
(88, '3425', 1538821206),
(89, '3425', 1538821267),
(90, '56789', 1538821361),
(91, '56789', 1538821396),
(92, '56789', 1538821472),
(93, '56789', 1538821508),
(94, '56789', 1538821586),
(95, '56789', 1538821679),
(96, '56789', 1538821726),
(97, '56789', 1538821830),
(98, '56789', 1538821854),
(99, '3425', 1538821934),
(100, '56789', 1538822036),
(101, '56789', 1538822083),
(102, '56789', 1538822307),
(103, '56789', 1538822393),
(104, '3425', 1538822507),
(105, '3425', 1538822577),
(106, '3425', 1538822598),
(107, '3425', 1538822606),
(108, '3425', 1538822645),
(109, '67', 1538822720);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_table`
--
ALTER TABLE `data_table`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_table`
--
ALTER TABLE `data_table`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
