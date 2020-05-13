-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2020 at 05:37 PM
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
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_class`
--

INSERT INTO `tbl_class` (`id`, `school`, `name`, `date`, `status`) VALUES
(1, '6', 'Form 1', '2019-12-24', 'active'),
(2, '6', 'Form 2', '2019-12-24', 'active'),
(3, '6', 'Form 3', '2019-12-24', 'active'),
(4, '6', 'Form 4', '2019-12-24', 'active');

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
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_exam`
--

INSERT INTO `tbl_exam` (`id`, `school`, `name`, `class`, `term`, `year`, `date`, `status`) VALUES
(1, '6', 'Opener', 'Form 1', 'Term 1', '2017', '2019-12-24', 'deleted'),
(2, '6', 'Closing', 'Form 1', 'Term 1', '2017', '2019-12-24', 'active'),
(3, '6', 'Mid Term', 'Form 1', 'Term 1', '2017', '2019-12-24', 'closed'),
(4, '6', 'Opener', 'Form 2', 'Term 1', '2017', '2020-02-16', 'closed'),
(5, '6', 'Closing', 'Form 1', 'Term 1', '2020', '2020-03-30', 'active'),
(6, '6', 'Closing', 'Form 1', 'Term 2', '2020', '2020-04-12', 'active'),
(7, '6', 'Closing', 'Form 1', 'Term 3', '2020', '2020-04-12', 'active');

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
  `year` varchar(10) NOT NULL,
  `complete` varchar(10) DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_exam_results`
--

INSERT INTO `tbl_exam_results` (`id`, `adm`, `school`, `name`, `class`, `subject`, `marks`, `term`, `exam`, `year`, `complete`) VALUES
(1, '100', '6', 'Vic', 'Form 1', 'English', '60', 'Term 1', 'Opener', '2017', 'yes'),
(2, '101', '6', 'Vic1', 'Form 1', 'English', '65', 'Term 1', 'Opener', '2017', 'yes'),
(3, '102', '6', 'Vic2', 'Form 1', 'English', '78', 'Term 1', 'Opener', '2017', 'no'),
(4, '103', '6', 'Vic3', 'Form 1', 'English', '23', 'Term 1', 'Opener', '2017', 'no'),
(5, '104', '6', 'Vic4', 'Form 1', 'English', '76', 'Term 1', 'Opener', '2017', 'no'),
(6, '105', '6', 'Vic5', 'Form 1', 'English', '34', 'Term 1', 'Opener', '2017', 'no'),
(7, '106', '6', 'Vic6', 'Form 1', 'English', '87', 'Term 1', 'Opener', '2017', 'no'),
(8, '107', '6', 'Vic7', 'Form 1', 'English', '87', 'Term 1', 'Opener', '2017', 'no'),
(9, '108', '6', 'Vic8', 'Form 1', 'English', '56', 'Term 1', 'Opener', '2017', 'no'),
(10, '109', '6', 'Vic9', 'Form 1', 'English', '40', 'Term 1', 'Opener', '2017', 'no'),
(11, '101', '6', 'Vic1', 'Form 1', 'Mathematics', '60', 'Term 1', 'Opener', '2017', 'yes'),
(12, '102', '6', 'Vic2', 'Form 1', 'Mathematics', '70', 'Term 1', 'Opener', '2017', 'no'),
(13, '103', '6', 'Vic3', 'Form 1', 'Mathematics', '34', 'Term 1', 'Opener', '2017', 'no'),
(14, '104', '6', 'Vic4', 'Form 1', 'Mathematics', '25', 'Term 1', 'Opener', '2017', 'no'),
(15, '105', '6', 'Vic5', 'Form 1', 'Mathematics', '89', 'Term 1', 'Opener', '2017', 'no'),
(16, '106', '6', 'Vic6', 'Form 1', 'Mathematics', '98', 'Term 1', 'Opener', '2017', 'no'),
(17, '107', '6', 'Vic7', 'Form 1', 'Mathematics', '67', 'Term 1', 'Opener', '2017', 'no'),
(18, '108', '6', 'Vic8', 'Form 1', 'Mathematics', '87', 'Term 1', 'Opener', '2017', 'no'),
(19, '109', '6', 'Vic9', 'Form 1', 'Mathematics', '45', 'Term 1', 'Opener', '2017', 'no'),
(20, '100', '6', 'Vic', 'Form 2', 'Mathematics', '60', 'Term 1', 'Opener', '2017', 'no'),
(21, '101', '6', 'Vic1', 'Form 1', 'Mathematics', '67', 'Term 1', 'Closing', '2020', 'no'),
(22, '102', '6', 'Vic2', 'Form 1', 'Mathematics', '78', 'Term 1', 'Closing', '2020', 'no'),
(23, '103', '6', 'Vic3', 'Form 1', 'Mathematics', '88', 'Term 1', 'Closing', '2020', 'no'),
(24, '107', '6', 'Vic7', 'Form 1', 'Mathematics', '34', 'Term 1', 'Closing', '2020', 'no'),
(25, '108', '6', 'Vic8', 'Form 1', 'Mathematics', '34', 'Term 1', 'Closing', '2020', 'no'),
(26, '109', '6', 'Vic9', 'Form 1', 'Mathematics', '60', 'Term 1', 'Closing', '2020', 'no'),
(27, '104', '6', 'Vic4', 'Form 1', 'Mathematics', '78', 'Term 1', 'Closing', '2020', 'no'),
(28, '101', '6', 'Vic1', 'Form 1', 'English', '70', 'Term 1', 'Opener', '2017', 'no');

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
(22, 'sample2@gmail.com', '6', '2019-12-25 10:03:14'),
(23, 'sample2@gmail.com', '6', '2019-12-26 08:51:33'),
(24, 'sample2@gmail.com', '6', '2019-12-26 09:14:13'),
(25, 'sample2@gmail.com', '6', '2019-12-28 16:29:43'),
(26, 'sample2@gmail.com', '6', '2020-01-06 09:56:54'),
(27, 'ngangavictor10@gmail.com', '6', '2020-01-25 18:04:15'),
(28, 'ngangavictor10@gmail.com', '5', '2020-01-25 18:04:38'),
(29, 'ngangavictor10@gmail.com', '6', '2020-01-25 18:05:30'),
(30, 'sample2@gmail.com', '6', '2020-01-25 18:07:03'),
(31, 'sample2@gmail.com', '6', '2020-01-31 19:45:56'),
(32, 'sample2@gmail.com', '6', '2020-02-01 17:32:44'),
(33, 'sample2@gmail.com', '6', '2020-02-01 17:46:36'),
(34, 'sample2@gmail.com', '6', '2020-02-02 15:16:44'),
(35, 'sample2@gmail.com', '6', '2020-02-10 10:56:13'),
(36, 'sample2@gmail.com', '6', '2020-02-10 12:57:53'),
(37, 'sample2@gmail.com', '6', '2020-02-10 13:24:07'),
(38, 'sample2@gmail.com', '6', '2020-02-10 17:05:34'),
(39, 'sample2@gmail.com', '6', '2020-02-11 14:38:33'),
(40, 'sample2@gmail.com', '6', '2020-02-12 16:12:16'),
(41, 'sample2@gmail.com', '6', '2020-02-12 16:17:39'),
(42, 'sample2@gmail.com', '6', '2020-02-14 11:19:14'),
(43, 'sample2@gmail.com', '6', '2020-02-15 14:36:12'),
(44, 'sample2@gmail.com', '6', '2020-02-15 19:57:02'),
(45, 'sample2@gmail.com', '6', '2020-02-16 11:56:01'),
(46, 'sample2@gmail.com', '6', '2020-02-16 16:49:04'),
(47, 'sample2@gmail.com', '6', '2020-02-17 15:15:57'),
(48, 'sample2@gmail.com', '6', '2020-02-20 14:59:58'),
(49, 'sample2@gmail.com', '6', '2020-02-23 13:56:50'),
(50, 'sample2@gmail.com', '6', '2020-02-23 14:23:32'),
(51, 'sample2@gmail.com', '6', '2020-02-23 14:44:23'),
(52, 'sample2@gmail.com', '6', '2020-03-24 13:18:29'),
(53, 'sample2@gmail.com', '6', '2020-03-26 13:12:09'),
(54, 'sample2@gmail.com', '6', '2020-03-26 13:13:10'),
(55, 'sample2@gmail.com', '6', '2020-03-27 15:01:18'),
(56, 'sample2@gmail.com', '6', '2020-03-28 21:40:38'),
(57, 'victornganga10@gmail.com', '5', '2020-03-28 21:52:18'),
(58, 'sample2@gmail.com', '6', '2020-03-28 22:04:49'),
(59, 'sample2@gmail.com', '6', '2020-03-29 14:16:55'),
(60, 'sample2@gmail.com', '6', '2020-03-29 14:36:38'),
(61, 'sample2@gmail.com', '6', '2020-03-29 17:42:46'),
(62, 'sample2@gmail.com', '6', '2020-03-30 08:21:52'),
(63, 'sample2@gmail.com', '6', '2020-03-30 08:22:40'),
(64, 'ngangavictor10@gmail.com', '6', '2020-03-30 08:44:26'),
(65, 'ngangavictor10@gmail.com', '6', '2020-03-30 08:45:10'),
(66, 'ngangavictor10@gmail.com', '6', '2020-03-30 10:38:11'),
(67, 'ngangavictor10@gmail.com', '6', '2020-03-30 10:40:17'),
(68, 'sample2@gmail.com', '6', '2020-03-30 10:47:55'),
(69, 'ngangavictor10@gmail.com', '6', '2020-03-30 10:49:13'),
(70, 'sample2@gmail.com', '6', '2020-03-30 11:05:16'),
(71, 'ngangavictor10@gmail.com', '6', '2020-03-30 11:05:43'),
(72, 'ngangavictor10@gmail.com', '6', '2020-04-01 08:36:43'),
(73, 'ngangavictor10@gmail.com', '6', '2020-04-03 20:59:09'),
(74, 'ngangavictor10@gmail.com', '6', '2020-04-10 18:53:00'),
(75, 'sample2@gmail.com', '6', '2020-04-10 19:06:19'),
(76, 'ngangavictor10@gmail.com', '6', '2020-04-12 19:15:44'),
(77, 'ngangavictor10@gmail.com', '6', '2020-05-06 15:07:32'),
(78, 'sample2@gmail.com', '6', '2020-05-06 15:08:06'),
(79, 'sb30pu4016117@pu.ac.ke', '28', '2020-05-06 15:33:39'),
(80, 'sample2@gmail.com', '6', '2020-05-06 16:17:53'),
(81, 'sample2@gmail.com', '6', '2020-05-06 19:56:30'),
(82, 'sample2@gmail.com', '6', '2020-05-06 20:03:52'),
(83, 'sample2@gmail.com', '6', '2020-05-07 10:08:20'),
(84, 'sample2@gmail.com', '6', '2020-05-07 11:02:05'),
(85, 'sample2@gmail.com', '6', '2020-05-08 11:31:30'),
(86, 'ngangavictor10@gmail.com', '6', '2020-05-08 14:44:19'),
(87, 'sample2@gmail.com', '6', '2020-05-08 15:36:54'),
(88, 'sample2@gmail.com', '6', '2020-05-08 15:41:50'),
(89, 'sample2@gmail.com', '6', '2020-05-13 16:48:38');

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
(2, '3', 'Sch1234', 'vic@gmail.com', '1', '12345', '2019-12-15 15:11:51'),
(3, '5', '2344', 'victornganga10@gmail.com', '1', '$2y$10$aliCjIrukaqrSE5VF2S6HeXNbjMpBQKGmr5RSOdqBsWe6v3gpj24C', '2020-03-28 21:49:49');

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
  `date` datetime NOT NULL,
  `logo` text DEFAULT 'empty'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_school`
--

INSERT INTO `tbl_school` (`id`, `name`, `phone`, `box`, `town`, `email`, `password`, `population`, `locked`, `status`, `date`, `logo`) VALUES
(5, 'Sample School', '2366', '0700352822', 'Kilifi', 'sample@gmail.com', '$2y$10$bjXiBauPF9uwEHqJfcmhwep0fLHZzhHs9B8CW/6RuaCDAT3TNYhkK', '200', 'no', 'paid', '2019-12-16 17:51:45', 'empty'),
(6, 'Sample2 School', '0700352820', '2345', 'Malindi', 'sample2@gmail.com', '$2y$10$KuEyTROBUJHxFyAIi85vjOWSvQRI/8NuUOkc.LaAqOSS0CJEhzoWW', '200', 'no', 'paid', '2019-12-19 17:16:18', 'http://127.0.0.1/school-sys/images/logo/6.jpg'),
(31, 'Nganga Victor', '0700352822', '5636', 'Kilifi', 'needletester@gmail.com', '$2y$10$4xS/GJcg69jyAd2IUU4vGua6euXuVXy.Nxe7rPwcFRvaLQMCr5Mj6', '563', 'no', 'paid', '2020-05-07 11:01:25', 'empty');

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
(1, '100', '6', 'Vic', 'Form 2', '100', 'not done', '2019-12-07'),
(2, '101', '6', 'Vic1', 'Form 1', '300', 'not done', '2019-12-05'),
(3, '102', '6', 'Vic2', 'Form 1', '320', 'not done', '2019-12-05'),
(4, '103', '6', 'Vic3', 'Form 1', '329', 'not done', '2019-11-08'),
(5, '104', '6', 'Vic4', 'Form 1', '345', 'not done', '2019-12-02'),
(6, '105', '6', 'Vic5', 'Form 1', '301', 'not done', '2019-12-10'),
(7, '106', '6', 'Vic6', 'Form 1', '334', 'not done', '2019-12-24'),
(8, '107', '6', 'Vic7', 'Form 1', '346', 'not done', '2019-12-31'),
(9, '108', '6', 'Vic8', 'Form 1', '378', 'not done', '2019-12-19'),
(10, '109', '6', 'Vic9', 'Form 1', '390', 'not done', '2019-12-01'),
(11, '120', '6', 'Victor Nganga', 'Form 1', '345', 'not done', '1011-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `id` int(11) NOT NULL,
  `school` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`id`, `school`, `name`, `code`, `date`, `status`) VALUES
(1, '6', 'Mathematics', '101', '2020-02-13', 'active'),
(2, '6', 'English', '102', '2020-02-13', 'active'),
(3, '6', 'Kiswahili', '103', '2020-02-13', 'active'),
(4, '6', 'Chemistry', '201', '2020-03-30', 'active'),
(6, '6', 'Biology', '404', '2020-05-13', 'active');

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
(6, '6', 'Nganga Victor', '0700352822', 'ngangavictor10@gmail.com', '35667329', '$2y$10$cjoG/tbNhlt/kG1sgeGpjOtewJQoUQ0MhOCA7JSZnEML48b/izX2S', 'new', '2020-03-30 08:27:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teachers_assigned`
--

CREATE TABLE `tbl_teachers_assigned` (
  `id` int(11) NOT NULL,
  `school` varchar(100) NOT NULL,
  `teacher_id` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `year` year(4) NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_teachers_assigned`
--

INSERT INTO `tbl_teachers_assigned` (`id`, `school`, `teacher_id`, `class`, `subject`, `year`, `status`, `date`) VALUES
(4, '6', '6', 'Form 1', 'Mathematics', 2020, 'active', '2020-03-30'),
(5, '6', '6', 'Form 4', 'Chemistry', 2020, 'active', '2020-03-30');

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
-- Indexes for table `tbl_teachers_assigned`
--
ALTER TABLE `tbl_teachers_assigned`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_class`
--
ALTER TABLE `tbl_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_exam`
--
ALTER TABLE `tbl_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_exam_results`
--
ALTER TABLE `tbl_exam_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_logins`
--
ALTER TABLE `tbl_logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `tbl_parent`
--
ALTER TABLE `tbl_parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_school`
--
ALTER TABLE `tbl_school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_teachers`
--
ALTER TABLE `tbl_teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_teachers_assigned`
--
ALTER TABLE `tbl_teachers_assigned`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
