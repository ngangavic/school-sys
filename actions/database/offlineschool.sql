-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2019 at 04:14 PM
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
  `kcse` varchar(10) NOT NULL DEFAULT 'not done',
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for dumped tables
--

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
-- Indexes for table `tbl_teachers`
--
ALTER TABLE `tbl_teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_parent`
--
ALTER TABLE `tbl_parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_school`
--
ALTER TABLE `tbl_school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_teachers`
--
ALTER TABLE `tbl_teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
