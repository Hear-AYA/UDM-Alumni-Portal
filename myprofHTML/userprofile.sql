-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 08:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userprofile`
--

-- --------------------------------------------------------

--
-- Table structure for table `myprofile`
--

CREATE TABLE `myprofile` (
  `id` int(11) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Mname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cnum` int(20) NOT NULL,
  `aa` varchar(255) NOT NULL,
  `grad` varchar(255) NOT NULL,
  `cjob` varchar(255) NOT NULL,
  `jobexp` varchar(255) NOT NULL,
  `saexp` varchar(255) NOT NULL,
  `gender` text NOT NULL,
  `dob` date NOT NULL,
  `course` varchar(100) NOT NULL,
  `avatar1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myprofile`
--

INSERT INTO `myprofile` (`id`, `Fname`, `Mname`, `Lname`, `email`, `cnum`, `aa`, `grad`, `cjob`, `jobexp`, `saexp`, `gender`, `dob`, `course`, `avatar1`) VALUES
(2, 'Jan', 'B', 'Espi', 'jan@sample.com', 2147483647, 'wards', '2020', 'IT', 'IT', 'IT', 'Male', '2023-09-20', 'BSIT', '2.png'),
(3, 'zaizai', 'S', 'Santos', 'zaizai@gmail.com', 2147483647, 'iT', '2020', 'IT', 'IT', 'IT', 'Female', '2002-12-10', 'BSIT', '2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myprofile`
--
ALTER TABLE `myprofile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myprofile`
--
ALTER TABLE `myprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
