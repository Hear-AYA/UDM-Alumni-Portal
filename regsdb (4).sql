-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 12:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(250) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(999) NOT NULL,
  `date_time` varchar(500) NOT NULL,
  `from_time` varchar(500) NOT NULL,
  `to_time` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `title`, `description`, `date_time`, `from_time`, `to_time`, `type`) VALUES
(3, 'test', 'test', '2023-09-29', '07:40', '08:41', 'Event');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(20) NOT NULL,
  `position_title` varchar(500) NOT NULL,
  `requirements` varchar(500) NOT NULL,
  `job` varchar(500) NOT NULL,
  `monthly_salary` varchar(500) NOT NULL,
  `education` varchar(500) NOT NULL,
  `training` varchar(500) NOT NULL,
  `experience` varchar(500) NOT NULL,
  `eligibility` varchar(500) NOT NULL,
  `research` varchar(500) NOT NULL,
  `community` varchar(500) NOT NULL,
  `competency` varchar(500) NOT NULL,
  `assignment` varchar(500) NOT NULL,
  `open_positions` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `position_title`, `requirements`, `job`, `monthly_salary`, `education`, `training`, `experience`, `eligibility`, `research`, `community`, `competency`, `assignment`, `open_positions`) VALUES
(1, 'test12', 'Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem ', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test2', '2'),
(3, 'test4', 'test3 test3test3 test3 test3test3', 'test3', 'test3', 'test3', 'test3', 'test3', 'test3', 'test3', 'test3', 'test3', 'test3', '5');

-- --------------------------------------------------------

--
-- Table structure for table `professional`
--

CREATE TABLE `professional` (
  `id` int(250) NOT NULL,
  `alumni_id` varchar(500) NOT NULL,
  `rad1` varchar(500) NOT NULL,
  `rad2` varchar(500) NOT NULL,
  `rad3` varchar(500) NOT NULL,
  `rad4` varchar(500) NOT NULL,
  `rad5` varchar(500) NOT NULL,
  `rad6` varchar(500) NOT NULL,
  `rad7` varchar(500) NOT NULL,
  `rad8` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `professional`
--

INSERT INTO `professional` (`id`, `alumni_id`, `rad1`, `rad2`, `rad3`, `rad4`, `rad5`, `rad6`, `rad7`, `rad8`) VALUES
(2, '12 ', '1', '0', '1', '1', '0', '1', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `regsinfo`
--

CREATE TABLE `regsinfo` (
  `id` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `img_loc` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `cpass` varchar(100) NOT NULL,
  `pnum` bigint(10) NOT NULL,
  `course` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `award` varchar(250) NOT NULL,
  `year_graduated` varchar(250) NOT NULL,
  `current_job` varchar(250) NOT NULL,
  `job_experience` varchar(250) NOT NULL,
  `skill_expertise` varchar(250) NOT NULL,
  `dateofbirth` varchar(250) NOT NULL,
  `degree` varchar(250) NOT NULL,
  `address` varchar(500) NOT NULL,
  `verified` varchar(500) NOT NULL,
  `verify_number` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regsinfo`
--

INSERT INTO `regsinfo` (`id`, `fullName`, `img_loc`, `email`, `pass`, `cpass`, `pnum`, `course`, `gender`, `award`, `year_graduated`, `current_job`, `job_experience`, `skill_expertise`, `dateofbirth`, `degree`, `address`, `verified`, `verify_number`) VALUES
(12, 'Alexander Avendano', '1696529040_355721356_274600031814272_1868331215881352822_n.png', 'a.avendano008@gmail.com', 'admin', 'admin', 9558456111, 'BSIT', 'Female', 'test', 'test', 'test', 'test', 'test', '2023-10-04', 'test', '', '1', '407411'),
(13, 'Test1 test1', '', 'test@gmail.com', 'test', 'test', 9558456111, 'test', 'Male', 'test', 'test', 'test', '', '', '', '', 'test', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professional`
--
ALTER TABLE `professional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regsinfo`
--
ALTER TABLE `regsinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `professional`
--
ALTER TABLE `professional`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `regsinfo`
--
ALTER TABLE `regsinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
