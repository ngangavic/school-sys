-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 25, 2019 at 06:10 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `offlineschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class`
--

CREATE TABLE `tbl_class` (
  `id` int(11) NOT NULL,
  `school` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_class`
--

INSERT INTO `tbl_class` (`id`, `school`, `name`, `date`) VALUES
(1, '6', 'Form 1', '2019-12-24'),
(2, '6', 'Form 2', '2019-12-24'),
(3, '6', 'Form 3', '2019-12-24'),
(4, '6', 'Form 4', '2019-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exam`
--

CREATE TABLE `tbl_exam` (
  `id` int(11) NOT NULL,
  `school` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `class` varchar(10) NOT NULL,
  `term` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_exam`
--

INSERT INTO `tbl_exam` (`id`, `school`, `name`, `class`, `term`, `year`, `date`) VALUES
(1, '6', 'Opener', 'Form 1', 'Term 1', '2017', '2019-12-24'),
(2, '6', 'Closing', 'Form 1', 'Term 1', '2017', '2019-12-24'),
(3, '6', 'Mid Term', 'Form 1', 'Term 1', '2017', '2019-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exam_results`
--

CREATE TABLE `tbl_exam_results` (
  `id` int(11) NOT NULL,
  `adm` varchar(100) NOT NULL,
  `school` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `class` varchar(10) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `marks` varchar(5) NOT NULL,
  `term` varchar(10) NOT NULL,
  `exam` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_exam_results`
--

INSERT INTO `tbl_exam_results` (`id`, `adm`, `school`, `name`, `class`, `subject`, `marks`, `term`, `exam`, `year`) VALUES
(1, '100', '6', 'Vic', 'Form 1', 'English', '50', 'Term 1', 'Opener', '2017'),
(2, '101', '6', 'Vic1', 'Form 1', 'English', '40', 'Term 1', 'Opener', '2017'),
(3, '102', '6', 'Vic2', 'Form 1', 'English', '56', 'Term 1', 'Opener', '2017'),
(4, '103', '6', 'Vic3', 'Form 1', 'English', '67', 'Term 1', 'Opener', '2017'),
(5, '104', '6', 'Vic4', 'Form 1', 'English', '34', 'Term 1', 'Opener', '2017'),
(6, '105', '6', 'Vic5', 'Form 1', 'English', '56', 'Term 1', 'Opener', '2017'),
(7, '106', '6', 'Vic6', 'Form 1', 'English', '12', 'Term 1', 'Opener', '2017'),
(8, '107', '6', 'Vic7', 'Form 1', 'English', '45', 'Term 1', 'Opener', '2017'),
(9, '108', '6', 'Vic8', 'Form 1', 'English', '34', 'Term 1', 'Opener', '2017'),
(10, '109', '6', 'Vic9', 'Form 1', 'English', '30', 'Term 1', 'Opener', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logins`
--

CREATE TABLE `tbl_logins` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_logins`
--

INSERT INTO `tbl_logins` (`id`, `email`, `school`, `date`) VALUES
(1, 'sample@gmail.com', '5', '2019-12-19 17:08:05'),
(2, 'sample@gmail.com', '5', '2019-12-19 17:09:37'),
(3, 'sample@gmail.com', '5', '2019-12-19 17:10:25'),
(4, 'sample@gmail.com', '5', '2019-12-19 17:15:46'),
(5, 'sample2@gmail.com', '6', '2019-12-19 17:16:42'),
(6, 'sample2@gmail.com', '6', '2019-12-19 17:17:44'),
(7, 'sample2@gmail.com', '6', '2019-12-19 17:17:54'),
(8, 'sample@gmail.com', '5', '2019-12-20 09:43:56'),
(9, 'sample@gmail.com', '5', '2019-12-20 09:44:05'),
(10, 'sample2@gmail.com', '6', '2019-12-20 09:44:24'),
(11, 'sample2@gmail.com', '6', '2019-12-20 09:46:14'),
(12, 'sample2@gmail.com', '6', '2019-12-20 09:49:22'),
(13, 'sample2@gmail.com', '6', '2019-12-20 09:53:04'),
(14, 'sample2@gmail.com', '6', '2019-12-20 09:53:52'),
(15, 'sample2@gmail.com', '6', '2019-12-20 09:54:36'),
(16, 'sample2@gmail.com', '6', '2019-12-20 15:52:29'),
(17, 'sample2@gmail.com', '6', '2019-12-20 19:01:03'),
(18, 'sample2@gmail.com', '6', '2019-12-22 16:32:39'),
(19, 'sample2@gmail.com', '6', '2019-12-23 13:45:54'),
(20, 'sample2@gmail.com', '6', '2019-12-23 13:50:59'),
(21, 'sample2@gmail.com', '6', '2019-12-24 22:16:39'),
(22, 'sample2@gmail.com', '6', '2019-12-25 10:03:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parent`
--

CREATE TABLE `tbl_parent` (
  `id` int(11) NOT NULL,
  `school_id` varchar(11) NOT NULL,
  `adm` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL DEFAULT '1',
  `password` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_parent`
--

INSERT INTO `tbl_parent` (`id`, `school_id`, `adm`, `email`, `phone`, `password`, `date`) VALUES
(2, '3', 'Sch1234', 'vic@gmail.com', '1', '12345', '2019-12-15 15:11:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school`
--

CREATE TABLE `tbl_school` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `box` varchar(100) NOT NULL,
  `town` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `population` varchar(10) NOT NULL,
  `locked` varchar(10) NOT NULL DEFAULT 'no',
  `status` varchar(10) NOT NULL DEFAULT 'paid',
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_school`
--

INSERT INTO `tbl_school` (`id`, `name`, `phone`, `box`, `town`, `email`, `password`, `population`, `locked`, `status`, `date`) VALUES
(5, 'Sample School', '2366', '0700352822', 'Kilifi', 'sample@gmail.com', '$2y$10$bjXiBauPF9uwEHqJfcmhwep0fLHZzhHs9B8CW/6RuaCDAT3TNYhkK', '200', 'no', 'paid', '2019-12-16 17:51:45'),
(6, 'Sample2 School', '2345', '0700352821', 'Malindi', 'sample2@gmail.com', '$2y$10$KuEyTROBUJHxFyAIi85vjOWSvQRI/8NuUOkc.LaAqOSS0CJEhzoWW', '2000', 'no', 'paid', '2019-12-19 17:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `id` int(11) NOT NULL,
  `adm` varchar(100) NOT NULL,
  `school` varchar(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `class` varchar(10) NOT NULL,
  `kcpe` varchar(10) NOT NULL,
  `kcse` varchar(10) DEFAULT 'not done',
  `dob` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`id`, `adm`, `school`, `name`, `class`, `kcpe`, `kcse`, `dob`) VALUES
(1, '100', '6', 'Vic', 'Form 1', '100', 'not done', '2019-12-07'),
(2, '101', '6', 'Vic1', 'Form 1', '200', 'not done', '2019-12-05'),
(3, '102', '6', 'Vic2', 'Form 1', '300', 'not done', '2019-12-05'),
(4, '103', '6', 'Vic3', 'Form 1', '329', 'not done', '2019-12-06'),
(5, '104', '6', 'Vic4', 'Form 1', '345', 'not done', '2019-12-02'),
(6, '105', '6', 'Vic5', 'Form 1', '255', 'not done', '2019-12-10'),
(7, '106', '6', 'Vic6', 'Form 1', '234', 'not done', '2019-12-24'),
(8, '107', '6', 'Vic7', 'Form 1', '346', 'not done', '2019-12-31'),
(9, '108', '6', 'Vic8', 'Form 1', '378', 'not done', '2019-12-19'),
(10, '109', '6', 'Vic9', 'Form 1', '390', 'not done', '2019-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `id` int(11) NOT NULL,
  `school` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`id`, `school`, `name`, `date`) VALUES
(1, '6', 'English', '2019-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teachers`
--

CREATE TABLE `tbl_teachers` (
  `id` int(11) NOT NULL,
  `school_id` varchar(10) NOT NULL,
  `name` varchar(100) DEFAULT '1',
  `phone` varchar(20) DEFAULT '1',
  `email` varchar(100) NOT NULL,
  `id_no` varchar(20) DEFAULT '1',
  `password` text NOT NULL,
  `status` varchar(10) DEFAULT 'new',
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_teachers`
--

INSERT INTO `tbl_teachers` (`id`, `school_id`, `name`, `phone`, `email`, `id_no`, `password`, `status`, `date`) VALUES
(1, '1', '1', '1', 'ngangavictor10@gmail.com', '1', '12345', 'new', '2019-12-13 15:48:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_exam`
--
ALTER TABLE `tbl_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_exam_results`
--
ALTER TABLE `tbl_exam_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_logins`
--
ALTER TABLE `tbl_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_parent`
--
ALTER TABLE `tbl_parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_school`
--
ALTER TABLE `tbl_school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_teachers`
--
ALTER TABLE `tbl_teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_class`
--
ALTER TABLE `tbl_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_exam`
--
ALTER TABLE `tbl_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_exam_results`
--
ALTER TABLE `tbl_exam_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_logins`
--
ALTER TABLE `tbl_logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_parent`
--
ALTER TABLE `tbl_parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_school`
--
ALTER TABLE `tbl_school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_teachers`
--
ALTER TABLE `tbl_teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
