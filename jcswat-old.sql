-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 05:43 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jcswat`
--

-- --------------------------------------------------------

--
-- Table structure for table `bs_admissions`
--

CREATE TABLE `bs_admissions` (
  `sno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `matric_group` varchar(255) NOT NULL,
  `matric_marks_obtain` varchar(255) NOT NULL,
  `matric_total_marks` varchar(255) NOT NULL,
  `matric_board` varchar(255) NOT NULL,
  `fsc_group` varchar(255) NOT NULL,
  `marks_obtain` varchar(255) NOT NULL,
  `total_marks` varchar(255) NOT NULL,
  `board` varchar(255) NOT NULL,
  `deptt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bs_admissions`
--

INSERT INTO `bs_admissions` (`sno`, `name`, `f_name`, `gender`, `contact_no`, `address`, `matric_group`, `matric_marks_obtain`, `matric_total_marks`, `matric_board`, `fsc_group`, `marks_obtain`, `total_marks`, `board`, `deptt`) VALUES
(1, 'd', 'd', 'male', '1', '1', 'science', '1', '1', '1', 'Pre Engineering', '1', '1', '1', 'Computer Science'),
(2, 'asd', 'fn', 'female', '1', '2', 'science', '1', '1', '1', 'Pre Engineering', '1', '1', '1', 'Computer Science'),
(3, 'Afzal Khan', 'Saleem Khan', 'male', '03331232343', 'Mingora swat', 'science', '990', '1100', 'BISE Swat', 'Pre Medical', '930', '1100', 'BISE Swat', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `event_news`
--

CREATE TABLE `event_news` (
  `s_no` int(11) NOT NULL,
  `news_message` varchar(255) NOT NULL,
  `publish_date` datetime NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_news`
--

INSERT INTO `event_news` (`s_no`, `news_message`, `publish_date`, `title`) VALUES
(1, 'News one descreption', '2020-12-13 11:12:54', 'new news title'),
(3, 'lkadsdsfjals', '2021-01-01 12:34:17', 'kdsjfl'),
(4, 'sdlfkjkjasd', '2021-01-01 12:34:22', 'lkasdjsf');

-- --------------------------------------------------------

--
-- Table structure for table `fsc_admissions`
--

CREATE TABLE `fsc_admissions` (
  `sno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `matric_group` varchar(255) NOT NULL,
  `matric_marks_obtain` varchar(255) NOT NULL,
  `matric_total_marks` varchar(255) NOT NULL,
  `matric_board` varchar(255) NOT NULL,
  `deptt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fsc_admissions`
--

INSERT INTO `fsc_admissions` (`sno`, `name`, `f_name`, `gender`, `contact_no`, `address`, `matric_group`, `matric_marks_obtain`, `matric_total_marks`, `matric_board`, `deptt`) VALUES
(1, 'd', 'w', 'male', '11', '1', 'science', '1', '1', '1', 'Computer Science'),
(2, 'Sami', 'Khan', 'male', '9495', 'mingora', 'arts', '990', '1100', 'swat', 'Arts'),
(3, 'Waseem Alam', 'Fawad Alam', 'male', '0333123243', 'Rahimabad Swat', 'science', '854', '1100', 'BISE Swat', 'Pre-Medical'),
(4, 'Waseem Alam', 'Fawad Alam', 'male', '0333123243', 'Rahimabad Swat', 'science', '854', '1100', 'BISE Swat', 'Pre-Medical'),
(5, 'Akram', 'Khan', 'male', '03343453444', 'Mian gano chem Saidu Sharif Swat', 'science', '990', '1100', 'BISE Swat', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `s_no` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'subscriber',
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`s_no`, `first_name`, `last_name`, `email`, `password`, `role`, `is_active`) VALUES
(1, 'A', 'A', 'a@a', '0cc175b9c0f1b6a831c399e269772661', 'admin', 1),
(2, 'B', 'B', 'b@b', '92eb5ffee6ae2fec3ad71c777531578f', 'subscriber', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bs_admissions`
--
ALTER TABLE `bs_admissions`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `event_news`
--
ALTER TABLE `event_news`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `fsc_admissions`
--
ALTER TABLE `fsc_admissions`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bs_admissions`
--
ALTER TABLE `bs_admissions`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event_news`
--
ALTER TABLE `event_news`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fsc_admissions`
--
ALTER TABLE `fsc_admissions`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
