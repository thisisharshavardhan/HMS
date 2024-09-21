-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2023 at 12:37 PM
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
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sno` int(11) NOT NULL,
  `student_photo` longblob NOT NULL,
  `student_name` varchar(80) NOT NULL,
  `student_pinno` varchar(16) NOT NULL,
  `student_dob` varchar(16) NOT NULL,
  `father_name` varchar(80) NOT NULL,
  `mother_name` varchar(80) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `Year` varchar(5) NOT NULL,
  `student_phone` varchar(10) NOT NULL,
  `father_phone` varchar(10) NOT NULL,
  `mother_phone` varchar(10) NOT NULL,
  `gardian_name` varchar(80) NOT NULL,
  `gardian_phone` varchar(10) NOT NULL,
  `gardian_photo` longblob NOT NULL,
  `Address` varchar(1500) NOT NULL,
  `fatherphoto` longblob NOT NULL,
  `motherphoto` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sno`, `student_photo`, `student_name`, `student_pinno`, `student_dob`, `father_name`, `mother_name`, `branch`, `Year`, `student_phone`, `father_phone`, `mother_phone`, `gardian_name`, `gardian_phone`, `gardian_photo`, `Address`, `fatherphoto`, `motherphoto`) VALUES

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(80) NOT NULL,
  `privilage` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `password`, `privilage`) VALUES
(3, 'HEAD', 'HEAD@PASSWORD', 'HEAD'),
(5, 'FACULTY', 'FACULTYPASSWORD', 'LOW');

-- --------------------------------------------------------

--
-- Table structure for table `_marks`
--

CREATE TABLE `_marks` (
  `pin` varchar(16) NOT NULL,
  `id` int(6) UNSIGNED NOT NULL,
  `m1_101` int(11) DEFAULT NULL,
  `m1_102` int(11) DEFAULT NULL,
  `m1_103` int(11) DEFAULT NULL,
  `m1_104` int(11) DEFAULT NULL,
  `m1_105` int(11) DEFAULT NULL,
  `m1_106` int(11) DEFAULT NULL,
  `m1_107` int(11) DEFAULT NULL,
  `m1_108` int(11) DEFAULT NULL,
  `m1_109` int(11) DEFAULT NULL,
  `m1_110` int(11) DEFAULT NULL,
  `m1_301` int(11) DEFAULT NULL,
  `m1_302` int(11) DEFAULT NULL,
  `m1_303` int(11) DEFAULT NULL,
  `m1_304` int(11) DEFAULT NULL,
  `m1_305` int(11) DEFAULT NULL,
  `m1_306` int(11) DEFAULT NULL,
  `m1_307` int(11) DEFAULT NULL,
  `m1_308` int(11) DEFAULT NULL,
  `m1_309` int(11) DEFAULT NULL,
  `m1_310` int(11) DEFAULT NULL,
  `m1_401` int(11) DEFAULT NULL,
  `m1_402` int(11) DEFAULT NULL,
  `m1_403` int(11) DEFAULT NULL,
  `m1_404` int(11) DEFAULT NULL,
  `m1_405` int(11) DEFAULT NULL,
  `m1_406` int(11) DEFAULT NULL,
  `m1_407` int(11) DEFAULT NULL,
  `m1_408` int(11) DEFAULT NULL,
  `m1_409` int(11) DEFAULT NULL,
  `m1_410` int(11) DEFAULT NULL,
  `m1_501` int(11) DEFAULT NULL,
  `m1_502` int(11) DEFAULT NULL,
  `m1_503` int(11) DEFAULT NULL,
  `m1_504` int(11) DEFAULT NULL,
  `m1_505` int(11) DEFAULT NULL,
  `m1_506` int(11) DEFAULT NULL,
  `m1_507` int(11) DEFAULT NULL,
  `m1_508` int(11) DEFAULT NULL,
  `m1_509` int(11) DEFAULT NULL,
  `m1_510` int(11) DEFAULT NULL,
  `m2_101` int(11) DEFAULT NULL,
  `m2_102` int(11) DEFAULT NULL,
  `m2_103` int(11) DEFAULT NULL,
  `m2_104` int(11) DEFAULT NULL,
  `m2_105` int(11) DEFAULT NULL,
  `m2_106` int(11) DEFAULT NULL,
  `m2_107` int(11) DEFAULT NULL,
  `m2_108` int(11) DEFAULT NULL,
  `m2_109` int(11) DEFAULT NULL,
  `m2_110` int(11) DEFAULT NULL,
  `m2_301` int(11) DEFAULT NULL,
  `m2_302` int(11) DEFAULT NULL,
  `m2_303` int(11) DEFAULT NULL,
  `m2_304` int(11) DEFAULT NULL,
  `m2_305` int(11) DEFAULT NULL,
  `m2_306` int(11) DEFAULT NULL,
  `m2_307` int(11) DEFAULT NULL,
  `m2_308` int(11) DEFAULT NULL,
  `m2_309` int(11) DEFAULT NULL,
  `m2_310` int(11) DEFAULT NULL,
  `m2_401` int(11) DEFAULT NULL,
  `m2_402` int(11) DEFAULT NULL,
  `m2_403` int(11) DEFAULT NULL,
  `m2_404` int(11) DEFAULT NULL,
  `m2_405` int(11) DEFAULT NULL,
  `m2_406` int(11) DEFAULT NULL,
  `m2_407` int(11) DEFAULT NULL,
  `m2_408` int(11) DEFAULT NULL,
  `m2_409` int(11) DEFAULT NULL,
  `m2_410` int(11) DEFAULT NULL,
  `m2_501` int(11) DEFAULT NULL,
  `m2_502` int(11) DEFAULT NULL,
  `m2_503` int(11) DEFAULT NULL,
  `m2_504` int(11) DEFAULT NULL,
  `m2_505` int(11) DEFAULT NULL,
  `m2_506` int(11) DEFAULT NULL,
  `m2_507` int(11) DEFAULT NULL,
  `m2_508` int(11) DEFAULT NULL,
  `m2_509` int(11) DEFAULT NULL,
  `m2_510` int(11) DEFAULT NULL,
  `s_101` int(11) DEFAULT NULL,
  `s_102` int(11) DEFAULT NULL,
  `s_103` int(11) DEFAULT NULL,
  `s_104` int(11) DEFAULT NULL,
  `s_105` int(11) DEFAULT NULL,
  `s_106` int(11) DEFAULT NULL,
  `s_107` int(11) DEFAULT NULL,
  `s_108` int(11) DEFAULT NULL,
  `s_109` int(11) DEFAULT NULL,
  `s_110` int(11) DEFAULT NULL,
  `s_301` int(11) DEFAULT NULL,
  `s_302` int(11) DEFAULT NULL,
  `s_303` int(11) DEFAULT NULL,
  `s_304` int(11) DEFAULT NULL,
  `s_305` int(11) DEFAULT NULL,
  `s_306` int(11) DEFAULT NULL,
  `s_307` int(11) DEFAULT NULL,
  `s_308` int(11) DEFAULT NULL,
  `s_309` int(11) DEFAULT NULL,
  `s_310` int(11) DEFAULT NULL,
  `s_401` int(11) DEFAULT NULL,
  `s_402` int(11) DEFAULT NULL,
  `s_403` int(11) DEFAULT NULL,
  `s_404` int(11) DEFAULT NULL,
  `s_405` int(11) DEFAULT NULL,
  `s_406` int(11) DEFAULT NULL,
  `s_407` int(11) DEFAULT NULL,
  `s_408` int(11) DEFAULT NULL,
  `s_409` int(11) DEFAULT NULL,
  `s_410` int(11) DEFAULT NULL,
  `s_501` int(11) DEFAULT NULL,
  `s_502` int(11) DEFAULT NULL,
  `s_503` int(11) DEFAULT NULL,
  `s_504` int(11) DEFAULT NULL,
  `s_505` int(11) DEFAULT NULL,
  `s_506` int(11) DEFAULT NULL,
  `s_507` int(11) DEFAULT NULL,
  `s_508` int(11) DEFAULT NULL,
  `s_509` int(11) DEFAULT NULL,
  `s_510` int(11) DEFAULT NULL,
  `m3_101` int(11) DEFAULT NULL,
  `m3_102` int(11) DEFAULT NULL,
  `m3_103` int(11) DEFAULT NULL,
  `m3_104` int(11) DEFAULT NULL,
  `m3_105` int(11) DEFAULT NULL,
  `m3_106` int(11) DEFAULT NULL,
  `m3_107` int(11) DEFAULT NULL,
  `m3_108` int(11) DEFAULT NULL,
  `m3_109` int(11) DEFAULT NULL,
  `m3_110` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_marks`
--

INSERT INTO `_marks` (`pin`, `id`, `m1_101`, `m1_102`, `m1_103`, `m1_104`, `m1_105`, `m1_106`, `m1_107`, `m1_108`, `m1_109`, `m1_110`, `m1_301`, `m1_302`, `m1_303`, `m1_304`, `m1_305`, `m1_306`, `m1_307`, `m1_308`, `m1_309`, `m1_310`, `m1_401`, `m1_402`, `m1_403`, `m1_404`, `m1_405`, `m1_406`, `m1_407`, `m1_408`, `m1_409`, `m1_410`, `m1_501`, `m1_502`, `m1_503`, `m1_504`, `m1_505`, `m1_506`, `m1_507`, `m1_508`, `m1_509`, `m1_510`, `m2_101`, `m2_102`, `m2_103`, `m2_104`, `m2_105`, `m2_106`, `m2_107`, `m2_108`, `m2_109`, `m2_110`, `m2_301`, `m2_302`, `m2_303`, `m2_304`, `m2_305`, `m2_306`, `m2_307`, `m2_308`, `m2_309`, `m2_310`, `m2_401`, `m2_402`, `m2_403`, `m2_404`, `m2_405`, `m2_406`, `m2_407`, `m2_408`, `m2_409`, `m2_410`, `m2_501`, `m2_502`, `m2_503`, `m2_504`, `m2_505`, `m2_506`, `m2_507`, `m2_508`, `m2_509`, `m2_510`, `s_101`, `s_102`, `s_103`, `s_104`, `s_105`, `s_106`, `s_107`, `s_108`, `s_109`, `s_110`, `s_301`, `s_302`, `s_303`, `s_304`, `s_305`, `s_306`, `s_307`, `s_308`, `s_309`, `s_310`, `s_401`, `s_402`, `s_403`, `s_404`, `s_405`, `s_406`, `s_407`, `s_408`, `s_409`, `s_410`, `s_501`, `s_502`, `s_503`, `s_504`, `s_505`, `s_506`, `s_507`, `s_508`, `s_509`, `s_510`, `m3_101`, `m3_102`, `m3_103`, `m3_104`, `m3_105`, `m3_106`, `m3_107`, `m3_108`, `m3_109`, `m3_110`) VALUES
('21030-CM-146', 4, 46, 146, 30, 0, 0, 0, 0, 0, 0, 50, 46, 146, 30, 0, 0, 0, 0, 0, 0, 50, 46, 146, 30, 0, 0, 0, 0, 0, 0, 50, 46, 146, 30, 0, 0, 0, 0, 0, 0, 50, 46, 146, 30, 0, 0, 0, 0, 0, 0, 50, 46, 146, 30, 0, 0, 0, 0, 0, 0, 50, 46, 146, 30, 0, 0, 0, 0, 0, 0, 50, 46, 146, 30, 0, 0, 0, 0, 0, 0, 50, 46, 146, 30, 0, 0, 0, 0, 0, 0, 50, 46, 146, 30, 0, 0, 0, 0, 0, 0, 50, 46, 146, 30, 0, 0, 0, 0, 0, 0, 50, 46, 146, 30, 0, 0, 0, 0, 0, 0, 50, 46, 146, 30, 0, 0, 0, 0, 0, 0, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `_marks`
--
ALTER TABLE `_marks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `_marks`
--
ALTER TABLE `_marks`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;