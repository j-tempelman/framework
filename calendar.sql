-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2017 at 11:20 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calendar`
--

-- --------------------------------------------------------

--
-- Table structure for table `birthdays`
--

CREATE TABLE `birthdays` (
  `id` int(11) NOT NULL,
  `person` varchar(255) NOT NULL,
  `day` tinyint(4) NOT NULL,
  `month` tinyint(4) NOT NULL,
  `year` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birthdays`
--

INSERT INTO `birthdays` (`id`, `person`, `day`, `month`, `year`) VALUES
(1, 'Vera', 5, 8, 1963),
(2, 'Nadia', 14, 5, 1996),
(3, 'Petrov', 7, 12, 1985),
(4, 'Anoushka', 22, 2, 1981),
(5, 'Dimitri', 21, 5, 2001),
(6, 'Anna', 28, 4, 1989),
(7, 'Miroslav', 17, 7, 2010),
(8, 'Vesela', 14, 5, 1992),
(9, 'Vlad', 18, 3, 1975),
(10, 'Mila', 22, 2, 1993),
(11, 'Goran', 19, 12, 2006),
(12, 'Brana', 7, 3, 1967),
(13, 'Darko', 4, 6, 1973),
(14, 'Dragoslav', 13, 6, 1982),
(15, 'Godemir', 9, 9, 1984),
(16, 'Boris', 19, 4, 2001),
(17, 'Ludmila', 5, 5, 1969),
(18, 'Stanibor', 14, 5, 1999);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birthdays`
--
ALTER TABLE `birthdays`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birthdays`
--
ALTER TABLE `birthdays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
