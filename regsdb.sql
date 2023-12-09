-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 02:44 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `alumni_reponses`
--

CREATE TABLE `alumni_reponses` (
  `alumni_responses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `title`, `description`, `date_time`, `from_time`, `to_time`, `type`) VALUES
(3, 'UDM @28', 'Merlions join us as we celebrate our beloved Universityâ€™s 28th Founding Anniversary with the theme: â€œDestined 2 Be Gr8: Shaping the Future Through Quality Educationâ€ starting from April 23 till April 29, 2023.\r\nWe have lined up different activities for you to enjoy... so join us and have fun let us all celebrate UDMâ€™s 28th Glorious Years!!!', '2023-04-21', '07:40', '08:41', 'Event'),
(4, 'SAP DISTRIBUTION', 'SAP distribution for UDM students officially enrolled during the 2nd Semester of SY 2022-2023\r\n', '2023-12-01', '10:00', '20:00', 'News'),
(5, 'CET WEEK', 'We would like to invite you to participate in the  upcoming week of the College of Engineering and Technology!!!', '2023-12-11', '07:00', '17:00', 'Event'),
(6, 'CET WEEK', 'We would like to invite you to participate in the upcoming week of the College of Engineering and Technology!!!', '2023-12-12', '06:02', '18:02', 'Event'),
(7, 'CET WEEK', 'We would like to invite you to participate in the IT43 exhibit, which will showcase the system that they have developed.', '2023-12-13', '09:00', '14:00', 'Event'),
(8, 'CHRISTMAS BREAK ', 'Please be aware that the Christmas break will begin on December 21, 2023, and classes will resume on January 7, 2023, according to the university calendar.', '2023-12-21', '00:00', '12:00', 'News'),
(11, 'test', 'eahdasdgahd', '2023-12-07', '07:50', '19:48', 'News');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `position_title`, `requirements`, `job`, `monthly_salary`, `education`, `training`, `experience`, `eligibility`, `research`, `community`, `competency`, `assignment`, `open_positions`) VALUES
(1, 'NON-TEACHING VACANT POSITION', 'https://www.facebook.com/udmanila/posts/pfbid06jUoCkPW1NmEeZy4tkbeBLRiGurboopvtHnDqG42k1YoMFtNy4PAH1PG1x6GRGEUl', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test2', '2'),
(3, 'TEACHING VACANT POSITIONS 2023', 'https://www.facebook.com/udmanila/posts/pfbid06jUoCkPW1NmEeZy4tkbeBLRiGurboopvtHnDqG42k1YoMFtNy4PAH1PG1x6GRGEUl', 'test3', 'test3', 'test3', 'test3', 'test3', 'test3', 'test3', 'test3', 'test3', 'test3', '5'),
(9, 'dabdja', 'quillbot.com', '', '', '', '', '', '', '', '', '', '', '');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professional`
--

INSERT INTO `professional` (`id`, `alumni_id`, `rad1`, `rad2`, `rad3`, `rad4`, `rad5`, `rad6`, `rad7`, `rad8`) VALUES
(6, '23 ', '1', '1', '0', '1', '', '', '', ''),
(9, '26 ', '1', '0', '1', '0', '', '', '', ''),
(10, '27 ', '1', '1', '1', '1', '', '', '', ''),
(11, '28 ', '1', '1', '1', '1', '', '', '', ''),
(14, '32 ', '1', '1', '1', '1', '', '', '', ''),
(15, '33 ', '0', '1', '1', '0', '', '', '', '');

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
  `verify_number` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regsinfo`
--

INSERT INTO `regsinfo` (`id`, `fullName`, `img_loc`, `email`, `pass`, `cpass`, `pnum`, `course`, `gender`, `award`, `year_graduated`, `current_job`, `job_experience`, `skill_expertise`, `dateofbirth`, `degree`, `address`, `verified`, `verify_number`, `type`) VALUES
(12, 'UDM ADMIN', '1696529040_355721356_274600031814272_1868331215881352822_n.png', 'udma9126@gmail.com', 'adminako', 'admin0123', 9558456111, 'BSIT', 'Female', 'test', 'test', 'Data Analyst', 'test', 'test', '2023-10-04', 'test', '', '1', '750378', 'admin'),
(23, 'Anne Viray', '', 'anneviray0716@gmail.com', '1234567890', '1234567890', 9235339629, 'BSIT', 'Female', '', '', '', '', '', '', '', '', '1', '950206', 'student'),
(26, 'Nicolo Rae D. Santos', '', 'nicolorae02@gmail.com', 'zxcvbnm', 'zxcvbnm', 9064805623, 'BSBA', 'Male', '', '', '', '', '', '', '', '', '1', '', 'student'),
(27, 'Kim My', '', 'kimmy@gmail.com', 'kimmy', 'kimmy', 9928374598, 'BSIT', 'Male', '', '', '', '', '', '', '', '', '1', '', 'student'),
(33, 'RACHELL ANNE TEALBAN VIRAY', '', 'rachellanneviray16@gmail.com', 'asdfghjkl', 'asdfghjkl', 9235339629, 'BSIT', 'Female', 'test', '2024', 'test', 'test', 'test', '2000-07-16', 'test', 'test', '1', '915160', 'student');

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
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `professional`
--
ALTER TABLE `professional`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `regsinfo`
--
ALTER TABLE `regsinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
