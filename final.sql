-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2024 at 12:46 PM
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
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$IElzRe3vNDhhoBbzJhqpZuKuI3N2Kn7fNlCdw.9Z8Y32FpKQl56BW');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(50) NOT NULL,
  `branch` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch`) VALUES
(1, 'Information Communication Technology');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `result_id` int(200) NOT NULL,
  `roll_no` int(200) NOT NULL,
  `branch_id` int(50) NOT NULL,
  `sem_id` int(9) NOT NULL,
  `subj_id` int(200) NOT NULL,
  `marks` int(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`result_id`, `roll_no`, `branch_id`, `sem_id`, `subj_id`, `marks`) VALUES
(36, 145, 1, 5, 75, 70),
(37, 145, 1, 5, 76, 75),
(38, 145, 1, 5, 74, 80),
(39, 145, 1, 5, 79, 85),
(40, 145, 1, 5, 77, 90),
(41, 145, 1, 5, 78, 95),
(42, 145, 1, 5, 75, 70),
(43, 145, 1, 5, 76, 75),
(44, 145, 1, 5, 74, 80),
(45, 145, 1, 5, 79, 85),
(46, 145, 1, 5, 77, 90),
(47, 145, 1, 5, 78, 95),
(48, 86, 1, 5, 75, 80),
(49, 86, 1, 5, 76, 85),
(50, 86, 1, 5, 74, 86),
(51, 86, 1, 5, 79, 90),
(52, 86, 1, 5, 77, 92),
(53, 86, 1, 5, 78, 95),
(54, 67, 1, 5, 75, 70),
(55, 67, 1, 5, 76, 75),
(56, 67, 1, 5, 74, 65),
(57, 67, 1, 5, 79, 68),
(58, 67, 1, 5, 77, 72),
(59, 67, 1, 5, 78, 79),
(60, 48, 1, 5, 75, 81),
(61, 48, 1, 5, 76, 82),
(62, 48, 1, 5, 74, 83),
(63, 48, 1, 5, 79, 84),
(64, 48, 1, 5, 77, 85),
(65, 48, 1, 5, 78, 86),
(66, 27, 1, 5, 75, 80),
(67, 27, 1, 5, 76, 85),
(68, 27, 1, 5, 74, 90),
(69, 27, 1, 5, 79, 95),
(70, 27, 1, 5, 77, 98),
(71, 27, 1, 5, 78, 80),
(72, 126, 1, 5, 75, 78),
(73, 126, 1, 5, 76, 87),
(74, 126, 1, 5, 74, 89),
(75, 126, 1, 5, 79, 95),
(76, 126, 1, 5, 77, 93),
(77, 126, 1, 5, 78, 91),
(78, 6, 1, 5, 75, 90),
(79, 6, 1, 5, 76, 91),
(80, 6, 1, 5, 74, 92),
(81, 6, 1, 5, 79, 93),
(82, 6, 1, 5, 77, 94),
(83, 6, 1, 5, 78, 95),
(84, 25, 1, 5, 75, 80),
(85, 25, 1, 5, 76, 88),
(86, 25, 1, 5, 74, 90),
(87, 25, 1, 5, 79, 99),
(88, 25, 1, 5, 77, 85),
(89, 25, 1, 5, 78, 81),
(90, 166, 1, 5, 75, 90),
(91, 166, 1, 5, 76, 92),
(92, 166, 1, 5, 74, 94),
(93, 166, 1, 5, 79, 96),
(94, 166, 1, 5, 77, 98),
(95, 166, 1, 5, 78, 95),
(96, 109, 1, 5, 75, 80),
(97, 109, 1, 5, 76, 85),
(98, 109, 1, 5, 74, 90),
(99, 109, 1, 5, 79, 95),
(100, 109, 1, 5, 77, 80),
(101, 109, 1, 5, 78, 85),
(102, 145, 1, 5, 75, 78),
(103, 145, 1, 5, 76, 45),
(104, 145, 1, 5, 74, 12),
(105, 145, 1, 5, 79, 0),
(106, 145, 1, 5, 77, 4),
(107, 145, 1, 5, 78, 5),
(108, 67, 1, 5, 75, 88),
(109, 67, 1, 5, 76, 88),
(110, 67, 1, 5, 74, 8),
(111, 67, 1, 5, 79, 88),
(112, 67, 1, 5, 77, 88),
(113, 67, 1, 5, 78, 88);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `sem_id` int(9) NOT NULL,
  `semester` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`sem_id`, `semester`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `reg_id` int(255) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Roll_No` int(160) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `branch_id` int(100) NOT NULL,
  `sem_id` int(8) NOT NULL,
  `Reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`reg_id`, `Name`, `Roll_No`, `Email`, `Gender`, `DOB`, `branch_id`, `sem_id`, `Reg_date`, `status`) VALUES
(15, 'NUFLA G.F.', 6, 'nufla@gmail.com', 'Female', '2000-01-01', 1, 5, '2024-09-29 06:24:21', 1),
(17, 'SAJIYYA A.F.', 25, 'SAJIYYA@gmail.com', 'Female', '2000-05-02', 1, 5, '2024-09-29 06:28:17', 1),
(18, 'JAYAWEERA W.G.C.M.', 48, 'JAYAWEERA@gmail.com', 'Male', '2000-04-03', 1, 5, '2024-09-29 06:28:59', 1),
(19, 'GUNATHILAKA R.H.G.C.', 67, 'gihangunathilakarhgc@gmail.com', 'Male', '2000-08-15', 1, 5, '2024-09-29 06:29:35', 1),
(20, 'ADIKARAM K.K.J.K.B.', 86, 'Jithmi@gmail.com', 'Female', '2000-04-05', 1, 5, '2024-09-29 06:37:00', 1),
(21, 'VITHANAGE M.V.S.C.', 109, 'chamudi@gmail.com', 'Female', '2000-02-01', 1, 5, '2024-09-29 06:37:44', 1),
(22, 'NASHAN Y.M.', 126, 'NASHAN@gmail.com', 'Male', '2000-06-20', 1, 5, '2024-09-29 06:38:36', 1),
(23, 'ABEYSINGHE A.K.U.S.', 145, 'umesha@gmail.com', 'Female', '2000-06-07', 1, 5, '2024-09-29 06:39:18', 1),
(24, 'VITHANAGE A.V.S.A.', 166, 'VITHANAGE@gmail.com', 'Male', '2000-07-08', 1, 5, '2024-09-29 06:40:02', 1),
(25, 'Mr.S.SUJAN', 27, 'sujan@gmail.com', 'Male', '1999-05-06', 1, 5, '2024-09-29 06:41:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subj_id` int(200) NOT NULL,
  `subj_name` varchar(200) NOT NULL,
  `subj_code` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subj_id`, `subj_name`, `subj_code`, `status`) VALUES
(74, 'Computer Architecture and Organization', '3113', 1),
(75, 'Advanced Database Management Systems', '3123', 1),
(76, 'Advanced Web Technologies', '3132', 1),
(77, 'Social and Professional Issues in IT', '3142', 1),
(78, 'Software Engineering ', '3153', 1),
(79, 'Information Security', '3162', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject_comb`
--

CREATE TABLE `subject_comb` (
  `comb_id` int(200) NOT NULL,
  `branch_id` int(50) NOT NULL,
  `sem_id` int(9) NOT NULL,
  `subj_id` int(200) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject_comb`
--

INSERT INTO `subject_comb` (`comb_id`, `branch_id`, `sem_id`, `subj_id`, `status`) VALUES
(78, 1, 5, 74, 1),
(79, 1, 5, 75, 1),
(80, 1, 5, 76, 1),
(81, 1, 5, 77, 1),
(82, 1, 5, 78, 1),
(83, 1, 5, 79, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`sem_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subj_id`);

--
-- Indexes for table `subject_comb`
--
ALTER TABLE `subject_comb`
  ADD PRIMARY KEY (`comb_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `result_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `sem_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `reg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subj_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `subject_comb`
--
ALTER TABLE `subject_comb`
  MODIFY `comb_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
