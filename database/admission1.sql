-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 01:52 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolproject2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission1`
--

CREATE TABLE `admission1` (
  `Id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` varchar(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `class` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission1`
--

INSERT INTO `admission1` (`Id`, `name`, `age`, `gender`, `address`, `class`, `contact`, `email`, `nationality`, `dob`) VALUES
(1, 'Jayaprakash sahoo', '18', 'male', 'bhadrak', '10', '7884565238', 'jayaprakash@gmail.com', 'indian', '2006-06-13'),
(2, 'omprakash', '16', 'male', 'Bhadrak', '10', '8456789525', 'sahuomprakash@gmail.com', 'indian', '2006-07-25'),
(3, 'chandan sahoo', '16', 'male', 'Bhadrak,odisha', '10', '6985785425', 'sahuchandan@gmail.com', 'indian', '2007-06-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission1`
--
ALTER TABLE `admission1`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission1`
--
ALTER TABLE `admission1`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
