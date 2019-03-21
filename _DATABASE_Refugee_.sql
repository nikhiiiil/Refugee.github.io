-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2019 at 06:48 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `refugee`
--

-- --------------------------------------------------------

--
-- Table structure for table `camps`
--

CREATE TABLE `camps` (
  `slno` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `refuge_no` int(100) NOT NULL,
  `area` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camps`
--

INSERT INTO `camps` (`slno`, `name`, `refuge_no`, `area`) VALUES
(2, 'Bidi Bidi', 285000, 'Uganda'),
(5, 'Burma', 110020, 'Burma'),
(4, 'Ethiopia', 123000, 'Ethiopia'),
(3, 'Kakuma', 184550, 'Kenya'),
(1, 'Kutupalong', 886798, 'Bangladesh'),
(6, 'Syria', 298074, 'Syria');

-- --------------------------------------------------------

--
-- Table structure for table `donar`
--

CREATE TABLE `donar` (
  `id` int(100) NOT NULL,
  `donar_name` varchar(100) NOT NULL,
  `organisation` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donar`
--

INSERT INTO `donar` (`id`, `donar_name`, `organisation`, `amount`, `country`) VALUES
(1, 'X', 'Burma', 142356, 'india'),
(2, 'Y', 'Burma', 534324, 'India'),
(3, 'Z', 'Ethiopia', 343563, 'India'),
(4, 'L', 'Syria', 443324, 'India'),
(5, 'A', 'Bidi Bidi', 123122, 'US'),
(6, 'B', 'Kakuma', 3424234, 'Russia'),
(7, 'C', 'Syria', 2342424, 'US'),
(8, 'D', 'Kutupalong', 879796, 'UK'),
(9, 'S', 'Syria', 100000, 'india'),
(10, 'B', 'Kutupalong', 100000, 'india'),
(15, 'N', 'Ethiopia', 234587, 'india'),
(19, 'P', 'Burma', 87655, 'india'),
(20, 'T', 'Kakuma', 4344, 'Dubai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camps`
--
ALTER TABLE `camps`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `donar`
--
ALTER TABLE `donar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organisation` (`organisation`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donar`
--
ALTER TABLE `donar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donar`
--
ALTER TABLE `donar`
  ADD CONSTRAINT `donar_ibfk_1` FOREIGN KEY (`organisation`) REFERENCES `camps` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
