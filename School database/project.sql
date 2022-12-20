-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 09:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `Class_id` int(11) NOT NULL,
  `Class_year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`Class_id`, `Class_year`) VALUES
(101, 2000),
(102, 2000),
(201, 2001),
(202, 2001),
(301, 2002),
(302, 2002),
(401, 2003),
(402, 2003),
(501, 2004),
(502, 2004),
(601, 2005),
(602, 2005);

-- --------------------------------------------------------

--
-- Table structure for table `class_student`
--

CREATE TABLE `class_student` (
  `Class_id` int(11) NOT NULL,
  `Student_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_subject`
--

CREATE TABLE `class_subject` (
  `Class_id` int(11) NOT NULL,
  `Subject_id` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_subject`
--

INSERT INTO `class_subject` (`Class_id`, `Subject_id`) VALUES
(101, 'math10');

-- --------------------------------------------------------

--
-- Table structure for table `demelit`
--

CREATE TABLE `demelit` (
  `Student_id` int(11) NOT NULL,
  `point` int(6) NOT NULL,
  `demelitpoint` int(6) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demelit`
--

INSERT INTO `demelit` (`Student_id`, `point`, `demelitpoint`, `reason`) VALUES
(1001, 100, 0, 'คะแนนเริ่มต้น');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_id` int(11) NOT NULL,
  `Student_name` text NOT NULL,
  `Phone` text NOT NULL,
  `Email` text NOT NULL,
  `DOB` text NOT NULL,
  `Inhabited` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_id`, `Student_name`, `Phone`, `Email`, `DOB`, `Inhabited`) VALUES
(1001, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `Subject_id` char(6) NOT NULL,
  `Subject_name` text NOT NULL,
  `Teacher_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`Subject_id`, `Subject_name`, `Teacher_id`) VALUES
('math10', 'คณิต', 101);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Teacher_id` int(11) NOT NULL,
  `Teacher_name` text NOT NULL,
  `Phone` text NOT NULL,
  `Email` text NOT NULL,
  `DOB` text NOT NULL,
  `Inhabited` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Teacher_id`, `Teacher_name`, `Phone`, `Email`, `DOB`, `Inhabited`) VALUES
(101, 'พอกัน ที', '0999669999', 'email@email.com', '06/03/2003', '16/666');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(11) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('ronans', '38e6828c268ce0d3010f8d22b6ac8326'),
('test', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`Class_id`);

--
-- Indexes for table `class_student`
--
ALTER TABLE `class_student`
  ADD KEY `Class_id` (`Class_id`),
  ADD KEY `Student_id` (`Student_id`);

--
-- Indexes for table `class_subject`
--
ALTER TABLE `class_subject`
  ADD KEY `class_subject_ibfk_1` (`Class_id`),
  ADD KEY `class_subject_ibfk_2` (`Subject_id`);

--
-- Indexes for table `demelit`
--
ALTER TABLE `demelit`
  ADD KEY `class_demelit_ibfk_1` (`Student_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_id`);

--
-- Indexes for table `sub`
--
ALTER TABLE `sub`
  ADD PRIMARY KEY (`Subject_id`),
  ADD KEY `Teacher_id` (`Teacher_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Teacher_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `Teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_student`
--
ALTER TABLE `class_student`
  ADD CONSTRAINT `Class_id` FOREIGN KEY (`Class_id`) REFERENCES `class` (`Class_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Student_id` FOREIGN KEY (`Student_id`) REFERENCES `student` (`Student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `class_subject`
--
ALTER TABLE `class_subject`
  ADD CONSTRAINT `class_subject_ibfk_1` FOREIGN KEY (`Class_id`) REFERENCES `class` (`Class_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `class_subject_ibfk_2` FOREIGN KEY (`Subject_id`) REFERENCES `sub` (`Subject_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `demelit`
--
ALTER TABLE `demelit`
  ADD CONSTRAINT `class_demelit_ibfk_1` FOREIGN KEY (`Student_id`) REFERENCES `student` (`Student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub`
--
ALTER TABLE `sub`
  ADD CONSTRAINT `Teacher_id` FOREIGN KEY (`Teacher_id`) REFERENCES `teacher` (`Teacher_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
