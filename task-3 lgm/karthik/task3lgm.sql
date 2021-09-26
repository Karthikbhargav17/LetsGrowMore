-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2021 at 12:07 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task3lgm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('sinchana', 'sinchana.123'),
('sumana', 'sumana.123');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`) VALUES
(1, '1A'),
(2, '1B'),
(3, '1C'),
(4, '2A'),
(5, '2B'),
(6, '2C'),
(7, '3A'),
(8, '3B'),
(9, '3C'),
(10, '4A'),
(11, '4B'),
(12, '4C');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `roll_no` int(11) NOT NULL,
  `class` varchar(100) NOT NULL,
  `sub1` varchar(20) NOT NULL,
  `marks1` int(11) NOT NULL,
  `sub2` varchar(20) NOT NULL,
  `marks2` int(11) NOT NULL,
  `sub3` varchar(20) NOT NULL,
  `marks3` int(11) NOT NULL,
  `sub4` varchar(20) NOT NULL,
  `marks4` int(11) NOT NULL,
  `sub5` varchar(20) NOT NULL,
  `marks5` int(11) NOT NULL,
  `sub6` varchar(20) NOT NULL,
  `marks6` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`roll_no`, `class`, `sub1`, `marks1`, `sub2`, `marks2`, `sub3`, `marks3`, `sub4`, `marks4`, `sub5`, `marks5`, `sub6`, `marks6`) VALUES
(12, '1A', 'English', 52, 'Hindi', 85, 'Science', 96, 'Social ', 99, 'Computer', 70, 'GK', 85),
(24, '1A', 'English', 98, 'Hindi', 63, 'Science', 93, 'Social', 63, 'Computer', 86, 'GK', 68),
(25, '1A', 'English', 89, 'Hindi', 96, 'Science', 86, 'Social ', 82, 'Computer', 83, 'GK', 55),
(27, '4A', 'English', 99, 'Hindi', 96, 'Science', 100, 'Social', 100, 'Computer', 100, 'GK', 99),
(56, '4A', 'English', 99, 'Hindi', 90, 'Science', 100, 'Social', 100, 'Computer', 100, 'GK', 99),
(100, '2A', 'English', 96, 'Hindi', 78, 'Science', 96, 'Social', 63, 'Computer', 86, 'GK', 75);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `name` varchar(50) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`name`, `roll_no`, `class_id`) VALUES
('Rahul', 12, 1),
('Suhas', 24, 1),
('Ahana', 25, 1),
('Karthik', 27, 10),
('Lokesh', 29, 2),
('Sushmitha', 34, 3),
('Sukesh', 42, 10),
('Sumana', 56, 10),
('Ahana', 67, 2),
('Sushma', 78, 4),
('Harish', 86, 8),
('Poorna', 100, 4),
('samantha', 115, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sub_code` int(11) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `max_marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sub_code`, `sub_name`, `max_marks`) VALUES
(1, 'English', 100),
(2, 'Hindi', 100),
(3, 'Science', 100),
(4, 'Social science', 100),
(5, 'Computer', 100),
(6, 'GK', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`,`password`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`roll_no`,`class`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`roll_no`),
  ADD KEY `fk1` (`class_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sub_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `fk6` FOREIGN KEY (`roll_no`) REFERENCES `students` (`roll_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
