-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2019 at 12:46 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `a_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `departmanet`
--

CREATE TABLE `departmanet` (
  `id` int(11) NOT NULL,
  `departmant_id` varchar(255) NOT NULL,
  `departmant_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departmanet`
--

INSERT INTO `departmanet` (`id`, `departmant_id`, `departmant_name`) VALUES
(3, 'CSE', 'Computer Science & Technology '),
(7, 'ECO', 'Economics & economy'),
(5, 'EEE', 'Electrical & Electronics Engineering'),
(8, 'LLB', 'Literally Legum Baccalaureus');

-- --------------------------------------------------------

--
-- Table structure for table `intake`
--

CREATE TABLE `intake` (
  `id` int(255) NOT NULL,
  `intake` int(255) NOT NULL,
  `departmant_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intake`
--

INSERT INTO `intake` (`id`, `intake`, `departmant_id`) VALUES
(39, 10, 'TXE'),
(40, 11, 'TXE'),
(41, 12, 'TXE'),
(42, 13, 'TXE'),
(44, 14, 'TXE'),
(51, 15, 'LLB'),
(45, 15, 'TXE'),
(52, 16, 'LLB'),
(46, 16, 'TXE'),
(53, 17, 'LLB'),
(47, 17, 'TXE'),
(55, 18, 'LLB'),
(48, 18, 'TXE'),
(56, 19, 'LLB'),
(49, 19, 'TXE'),
(58, 20, 'LLB'),
(50, 20, 'TXE'),
(59, 21, 'LLB'),
(60, 22, 'LLB'),
(61, 23, 'LLB'),
(62, 24, 'LLB'),
(28, 25, 'EEE'),
(63, 25, 'LLB'),
(29, 26, 'EEE'),
(64, 26, 'LLB'),
(30, 27, 'EEE'),
(31, 28, 'EEE'),
(32, 29, 'EEE'),
(65, 30, 'CSE'),
(33, 30, 'EEE'),
(4, 31, 'CSE'),
(34, 31, 'EEE'),
(5, 32, 'CSE'),
(35, 32, 'EEE'),
(6, 33, 'CSE'),
(36, 33, 'EEE'),
(8, 34, 'CSE'),
(37, 34, 'EEE'),
(9, 35, 'CSE'),
(38, 35, 'EEE'),
(10, 36, 'CSE'),
(11, 37, 'CSE'),
(12, 38, 'CSE'),
(13, 39, 'CSE'),
(14, 40, 'CSE'),
(15, 41, 'ECO'),
(16, 42, 'ECO'),
(17, 43, 'ECO'),
(18, 44, 'ECO'),
(19, 45, 'ECO'),
(20, 46, 'ECO'),
(22, 47, 'ECO'),
(23, 48, 'ECO'),
(24, 49, 'ECO'),
(25, 50, 'ECO');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(255) NOT NULL,
  `room_number` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_number`) VALUES
(10, 301),
(11, 302),
(4, 303),
(5, 304),
(6, 305);

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `id` int(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_teacher` varchar(255) NOT NULL,
  `start_time` time(6) NOT NULL,
  `end_time` time(6) NOT NULL,
  `room_no` int(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `intake` int(255) NOT NULL,
  `section` int(255) NOT NULL,
  `day` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`id`, `course_name`, `course_code`, `course_teacher`, `start_time`, `end_time`, `room_no`, `dept`, `intake`, `section`, `day`) VALUES
(6, 'Computer fundamentals', 'CSE 101', 'DMAA', '08:30:00.000000', '09:30:00.000000', 301, 'CSE', 30, 2, 'Saturday'),
(8, 'Structural Programming Language', 'CSE 201', 'RJT', '11:45:00.000000', '12:45:00.000000', 305, 'CSE', 30, 3, 'Saturday'),
(9, 'Structural Programming Language', 'CSE 201', 'RJT', '09:35:00.000000', '10:35:00.000000', 302, 'CSE', 30, 2, 'Sunday'),
(10, 'Computer Fundamentals Lab', 'CSE 102', 'DMAA', '16:30:00.000000', '17:30:00.000000', 304, 'CSE', 30, 2, 'Monday'),
(11, 'Computer fundamentals', 'CSE 101', 'DMAA', '08:30:00.000000', '08:30:00.000000', 301, 'CSE', 30, 2, 'Tuesday'),
(12, 'Computer fundamentals', 'CSE 101', 'DMAA', '13:15:00.000000', '14:15:00.000000', 303, 'CSE', 30, 2, 'Monday'),
(13, 'Structural Programming Language', 'CSE 201', 'SMM', '10:40:00.000000', '11:40:00.000000', 304, 'CSE', 30, 2, 'Saturday'),
(14, 'Computer Fundamentals Lab', 'CSE 102', 'DMAA', '16:30:00.000000', '17:30:00.000000', 302, 'CSE', 30, 2, 'Saturday'),
(15, 'Computer fundamentals', 'CSE 101', 'DMAA', '08:30:00.000000', '09:30:00.000000', 302, 'CSE', 30, 2, 'Wednesday');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(255) NOT NULL,
  `section` int(255) NOT NULL,
  `intake` int(255) NOT NULL,
  `departmant_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `section`, `intake`, `departmant_id`) VALUES
(37, 1, 12, 'TXE'),
(39, 1, 13, 'TXE'),
(41, 1, 30, 'CSE'),
(9, 1, 31, 'CSE'),
(11, 1, 32, 'CSE'),
(16, 1, 33, 'CSE'),
(18, 1, 34, 'CSE'),
(20, 1, 35, 'CSE'),
(25, 1, 36, 'CSE'),
(28, 1, 37, 'CSE'),
(30, 1, 38, 'CSE'),
(33, 1, 39, 'CSE'),
(34, 1, 40, 'CSE'),
(38, 2, 12, 'TXE'),
(40, 2, 13, 'TXE'),
(42, 2, 30, 'CSE'),
(10, 2, 31, 'CSE'),
(12, 2, 32, 'CSE'),
(17, 2, 33, 'CSE'),
(19, 2, 34, 'CSE'),
(23, 2, 35, 'CSE'),
(27, 2, 36, 'CSE'),
(29, 2, 37, 'CSE'),
(32, 2, 38, 'CSE'),
(35, 2, 40, 'CSE'),
(3, 3, 30, 'CSE'),
(13, 3, 32, 'CSE'),
(24, 3, 35, 'CSE'),
(36, 3, 40, 'CSE'),
(14, 4, 32, 'CSE'),
(15, 5, 32, 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `intake` int(255) NOT NULL,
  `section` int(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_name`, `student_id`, `dept`, `intake`, `section`, `password`) VALUES
(30, 'irfan khan arafat', '14153103049', 'cse', 30, 2, '202cb962ac59075b964b07152d234b70'),
(29, 'Israt jahan ', '14153103059', 'cse', 30, 2, '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `departmant_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `course_code`, `course_name`, `departmant_id`) VALUES
(3, 'CSE 102', 'Computer Fundamentals Lab', 'CSE'),
(5, 'CSE 201', 'Structural Programming Language', 'CSE'),
(10, 'CSE 101', 'Computer fundamentals', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(255) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `teacher_id` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `t_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `teacher_name`, `teacher_id`, `dept`, `t_password`) VALUES
(10, 'Dr.  Mohammad Amir Ali', 'DMAA', 'cse', '202cb962ac59075b964b07152d234b70'),
(11, 'Shamim Reja Shajib', 'SMM', 'cse', '202cb962ac59075b964b07152d234b70'),
(12, 'Rejowana Tonni', 'RJT', 'cse', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`,`username`);

--
-- Indexes for table `departmanet`
--
ALTER TABLE `departmanet`
  ADD PRIMARY KEY (`departmant_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `intake`
--
ALTER TABLE `intake`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `intake` (`intake`,`departmant_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `room_number` (`room_number`);

--
-- Indexes for table `routine`
--
ALTER TABLE `routine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `section` (`section`,`intake`,`departmant_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `id` (`id`) USING BTREE,
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`,`course_name`,`course_code`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`,`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departmanet`
--
ALTER TABLE `departmanet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `intake`
--
ALTER TABLE `intake`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `routine`
--
ALTER TABLE `routine`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
