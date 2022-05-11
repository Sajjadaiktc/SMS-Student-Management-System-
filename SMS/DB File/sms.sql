-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2020 at 12:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam_tt`
--

CREATE TABLE `exam_tt` (
  `e_tt_id` int(11) NOT NULL,
  `ayear` varchar(50) NOT NULL,
  `class` varchar(20) NOT NULL,
  `sem` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `time` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `block` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_tt`
--

INSERT INTO `exam_tt` (`e_tt_id`, `ayear`, `class`, `sem`, `subject`, `time`, `date`, `block`) VALUES
(1, '2020-2021', 'COMPUTER', 'SEM 1', 'Engineering Mathematics 1', '2:00 PM TO 5:00 PM', '2020-12-12', 101),
(2, '2020-2021', 'COMPUTER', 'SEM 1', 'Engineering Mechanics', '2:00 PM TO 5:00 PM', '2020-12-14', 102),
(3, '2020-2021', 'COMPUTER', 'SEM 1', 'Engineering Physics', '2:00 PM TO 5:00 PM', '2020-12-16', 101),
(4, '2020-2021', 'COMPUTER', 'SEM 1', 'Engineering Chymistry', '2:00 PM TO 5:00 PM', '2020-12-18', 101),
(5, '2020-2021', 'COMPUTER', 'SEM 5', 'Database Management System', '2:00 PM TO 5:00 PM', '2020-12-16', 201),
(6, '2020-2021', 'COMPUTER', 'SEM 5', 'Theory of Computer Science', '2:00 PM TO 5:00 PM', '2020-12-18', 202),
(7, '2020-2021', 'COMPUTER', 'SEM 5', 'Microprocessor', '2:00 PM TO 5:00 PM', '2020-12-20', 201),
(8, '2020-2021', 'COMPUTER', 'SEM 5', 'Computer Network', '2:00 PM TO 5:00 PM', '2020-12-26', 204),
(9, '2020-2021', 'COMPUTER', 'SEM 5', 'Multimedia System', '2:00 PM TO 5:00 PM', '2020-12-28', 201),
(10, '2020-2021', 'COMPUTER', 'SEM 5', 'Analysis of algorithm', '2:00 PM TO 5:00 PM', '2020-12-28', 102),
(11, '2020-2021', 'COMPUTER', 'SEM 2', 'C programming', '2:00 PM TO 5:00 PM', '2020-12-12', 201),
(12, '2020-2021', 'COMPUTER', 'SEM 2', 'Engineering Drawing', '2:00 PM TO 5:00 PM', '2020-12-14', 102),
(13, '2020-2021', 'COMPUTER', 'SEM 2', 'Engineering Mathematics 2', '2:00 PM TO 5:00 PM', '2020-12-16', 201),
(14, '2020-2021', 'COMPUTER', 'SEM 2', 'Engineering Chymistry 2', '2:00 PM TO 5:00 PM', '2020-12-21', 201);

-- --------------------------------------------------------

--
-- Table structure for table `notice_tt`
--

CREATE TABLE `notice_tt` (
  `notice_id` int(11) NOT NULL,
  `ayear` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL,
  `sem` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `notice` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice_tt`
--

INSERT INTO `notice_tt` (`notice_id`, `ayear`, `class`, `sem`, `date`, `notice`) VALUES
(1, '2020-2021', 'COMPUTER', 'SEM 1', '2020-11-12', 'Practical Exam is Schedule on this date.'),
(2, '2020-2021', 'COMPUTER', 'SEM 5', '2020-12-10', 'Tommorow is your prelim exam'),
(3, '2020-2021', 'MECHANICAL', 'SEM 2', '2020-12-02', 'Tommorow is your prelim exam');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `rollno` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `class` varchar(20) NOT NULL,
  `sem` varchar(200) NOT NULL,
  `pcont` varchar(50) NOT NULL,
  `picsource` varchar(350) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(400) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sec_q` varchar(200) NOT NULL,
  `sec_a` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `rollno`, `name`, `class`, `sem`, `pcont`, `picsource`, `username`, `password`, `email`, `sec_q`, `sec_a`) VALUES
(1, 68, 'Ahtesham Syed', 'COMPUTER', 'SEM 1', '9868758585', 'student/Photo.jpg', 'ahtesham123', '944edcd8584685a436a2e50170312e06', 'ahteshamsyed71@gmail.com', 'What is your pet name?', 'Tommy'),
(3, 25, 'Raju Thakur', 'IT', 'SEM 2', '54556586565', 'student/john1.jpg', 'kamlesh', 'a3c76e6279a6b4996820c035f7fb7eeb', 'raj1@gmail.com', 'What is your pet name?', 'jerry'),
(4, 38, 'Sufiyan Kamil', 'COMPUTER', 'SEM 5', '9525452121', 'student/rashid1.jpg', 'Sufiyan', 'd8764a2f5540f39f955f84fac822df3d', 'sufiyan12@gmail.com', 'What is your pet name?', 'jerry'),
(6, 25, 'Raju Thakur', 'IT', 'SEM 2', '54556586565', 'student/john1.jpg', 'Raju', '032b4adf7eead7a877d521efcad47f2b', 'raj1@gmail.com', 'What is your pet name?', 'kalu'),
(7, 56, 'Pooja', 'ELECTRONICS', 'SEM 4', '9867759078', 'student/nature.jpg', 'Pooja', '1fb59e37c3f6d0dcc4a2cddbad364731', 'poja1@gmail.com', 'What is the name of the town where you were born?', 'mumbai'),
(9, 56, 'sanju', 'COMPUTER', 'SEM 1', '9545250215', 'student/nature.jpg', 'Sanju', 'cb0d409b113e754ae98c02c92f02041f', 'san@gmail.com', 'What is the name of the town where you were born?', 'mumbai'),
(10, 11, 'Raj', 'ELECTRONICS', 'SEM 3', '9545250212', 'student/john1.jpg', 'Raj', 'db7c41634fcb72ebc74f7eb6ef970fac', 'raj12@gmail.com', 'What is the name of the town where you were born?', 'mumbai'),
(11, 64, 'mohit', 'CIVIL', 'SEM 4', '9545250215', 'student/rashid1.jpg', 'Mohit', '202cb962ac59075b964b07152d234b70', 'mohit12@gmail.com', 'What is the name of the town where you were born?', 'kalu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam_tt`
--
ALTER TABLE `exam_tt`
  ADD PRIMARY KEY (`e_tt_id`);

--
-- Indexes for table `notice_tt`
--
ALTER TABLE `notice_tt`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam_tt`
--
ALTER TABLE `exam_tt`
  MODIFY `e_tt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notice_tt`
--
ALTER TABLE `notice_tt`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
