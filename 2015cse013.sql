-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2018 at 02:17 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2015cse013`
--

-- --------------------------------------------------------

--
-- Table structure for table `cand`
--

CREATE TABLE `cand` (
  `name` varchar(10) NOT NULL,
  `section` tinyint(2) NOT NULL,
  `vote` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cand`
--

INSERT INTO `cand` (`name`, `section`, `vote`) VALUES
('akshat', 1, 1),
('akash', 1, NULL),
('amaan', 1, NULL),
('amulya', 2, NULL),
('aranee', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `idnumber` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `section` tinyint(2) NOT NULL,
  `role` varchar(5) DEFAULT NULL,
  `vote` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`idnumber`, `password`, `section`, `role`, `vote`) VALUES
('2015cse005', '1234', 2, 'USER', NULL),
('2015cse006', '1234', 2, 'USER', NULL),
('2015cse012', '1234', 1, 'USER', 1),
('2015cse013', '1234', 1, 'USER', 1),
('2015cse017', '1234', 1, 'USER', NULL),
('2015cse020', '1234', 1, 'USER', NULL),
('akshat', '1234', 1, 'ADMIN', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idnumber`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
