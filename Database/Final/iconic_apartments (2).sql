-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2019 at 06:37 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iconic_apartments`
--

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `coach_id` int(11) NOT NULL,
  `coach_name` varchar(255) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `tele_num` int(10) NOT NULL,
  `dob` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`coach_id`, `coach_name`, `last_name`, `tele_num`, `dob`, `user_id`) VALUES
(1, 'Coach1', 'coach', 715869789, '2019-07-18', 2),
(2, 'Coach2', 'coach', 785869456, '2019-07-11', 6),
(3, 'Coach3', 'coach', 778989456, '2019-07-18', 14);

-- --------------------------------------------------------

--
-- Table structure for table `coach_booking`
--

CREATE TABLE `coach_booking` (
  `booking_id` int(11) NOT NULL,
  `coach_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL,
  `booking_status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach_booking`
--

INSERT INTO `coach_booking` (`booking_id`, `coach_id`, `user_id`, `date`, `time_from`, `time_to`, `booking_status`) VALUES
(1, 3, 7, '2019-07-06', '18:00:00', '19:00:00', 'pending'),
(2, 1, 7, '2019-07-06', '16:00:00', '17:00:00', 'accepted'),
(3, 1, 7, '2019-07-13', '16:00:00', '17:00:00', 'pending'),
(4, 1, 7, '2019-07-20', '15:00:00', '16:00:00', 'pending'),
(5, 1, 7, '2019-07-27', '17:00:00', '18:00:00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `gym_attendance`
--

CREATE TABLE `gym_attendance` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gym_attendance`
--

INSERT INTO `gym_attendance` (`id`, `user_id`, `date`, `time_from`, `time_to`) VALUES
(1, 7, '2019-07-04', '17:00:00', '18:30:00'),
(2, 7, '2019-07-05', '05:00:00', '19:00:00'),
(3, 7, '2019-07-03', '22:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `instructor_id` int(11) NOT NULL,
  `instructor_name` varchar(255) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `tele_num` int(10) NOT NULL,
  `dob` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instructor_id`, `instructor_name`, `last_name`, `tele_num`, `dob`, `user_id`) VALUES
(1, 'GymInstructor1', 'gym', 772536789, '2018-08-09', 1),
(2, 'GymInstructor2', 'gym', 715869123, '2019-07-11', 4),
(3, 'GymInstructor3', 'gym', 778552369, '2019-07-19', 12);

-- --------------------------------------------------------

--
-- Table structure for table `instructor_booking`
--

CREATE TABLE `instructor_booking` (
  `booking_id` int(11) NOT NULL,
  `instructor_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL,
  `booking_status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor_booking`
--

INSERT INTO `instructor_booking` (`booking_id`, `instructor_id`, `user_id`, `date`, `time_from`, `time_to`, `booking_status`) VALUES
(1, 2, 7, '2019-07-06', '10:00:00', '12:00:00', 'pending'),
(2, 1, 7, '2019-07-06', '10:00:00', '11:00:00', 'accepted'),
(3, 1, 7, '2019-07-13', '10:00:00', '11:00:00', 'rejected'),
(4, 1, 7, '2019-07-20', '11:00:00', '12:00:00', 'accepted'),
(5, 1, 7, '2019-07-26', '09:00:00', '10:00:00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `masseur`
--

CREATE TABLE `masseur` (
  `masseur_id` int(11) NOT NULL,
  `masseur_name` varchar(255) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `tele_num` int(10) NOT NULL,
  `dob` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masseur`
--

INSERT INTO `masseur` (`masseur_id`, `masseur_name`, `last_name`, `tele_num`, `dob`, `user_id`) VALUES
(1, 'Masseur1', 'masseur', 778956369, '2019-07-19', 3),
(2, 'Masseur2', 'masseur', 775869789, '2019-07-18', 5),
(3, 'Masseur3', 'masseur', 767359286, '2019-07-18', 13);

-- --------------------------------------------------------

--
-- Table structure for table `masseur_booking`
--

CREATE TABLE `masseur_booking` (
  `booking_id` int(11) NOT NULL,
  `masseur_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL,
  `booking_status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masseur_booking`
--

INSERT INTO `masseur_booking` (`booking_id`, `masseur_id`, `user_id`, `date`, `time_from`, `time_to`, `booking_status`) VALUES
(1, 1, 7, '2019-07-06', '10:00:00', '11:00:00', 'accepted'),
(2, 1, 7, '2019-07-07', '10:00:00', '11:00:00', 'pending'),
(3, 1, 7, '2019-07-21', '09:00:00', '10:00:00', 'pending'),
(4, 1, 7, '2019-08-11', '10:00:00', '11:00:00', 'pending'),
(5, 1, 7, '2019-08-25', '11:00:00', '12:00:00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `message` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type` varchar(225) NOT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `visibility` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `title`, `from_id`, `to_id`, `message`, `time`, `type`, `booking_id`, `visibility`) VALUES
(1, 'New Employee Register Request:', 1, 58, NULL, '2019-07-04 20:10:49', 'employee_request', NULL, 1),
(2, 'New Employee Register Request:', 2, 58, NULL, '2019-07-04 20:11:46', 'employee_request', NULL, 1),
(3, 'New Employee Register Request:', 3, 58, NULL, '2019-07-04 20:13:24', 'employee_request', NULL, 1),
(4, 'New Employee Register Request:', 4, 58, NULL, '2019-07-04 20:14:21', 'employee_request', NULL, 1),
(5, 'New Employee Register Request:', 5, 58, NULL, '2019-07-04 20:15:12', 'employee_request', NULL, 1),
(6, 'New Employee Register Request:', 6, 58, NULL, '2019-07-04 20:15:58', 'employee_request', NULL, 1),
(7, 'New Resident Register Request:', 7, 58, NULL, '2019-07-04 20:17:11', 'resident_request', NULL, 1),
(8, 'New Resident Register Request:', 8, 58, NULL, '2019-07-04 20:18:10', 'resident_request', NULL, 1),
(9, 'New Resident Register Request:', 9, 58, NULL, '2019-07-04 20:18:55', 'resident_request', NULL, 1),
(10, 'New Resident Register Request:', 10, 58, NULL, '2019-07-04 20:19:47', 'resident_request', NULL, 1),
(11, 'New Resident Register Request:', 11, 58, NULL, '2019-07-04 20:20:32', 'resident_request', NULL, 1),
(12, 'New Employee Register Request:', 12, 58, NULL, '2019-07-04 20:21:13', 'employee_request', NULL, 1),
(13, 'New Employee Register Request:', 13, 58, NULL, '2019-07-04 20:21:48', 'employee_request', NULL, 1),
(14, 'New Employee Register Request:', 14, 58, NULL, '2019-07-04 20:22:36', 'employee_request', NULL, 1),
(15, 'New Booking', 7, 4, '', '2019-07-05 03:30:19', 'new_booking', NULL, 1),
(16, 'New Tennis Courts Booking', 7, 15, NULL, '2019-07-05 03:42:50', 'tennis_booking', NULL, 1),
(17, 'New Booking', 7, 14, 'Need an extra racket', '2019-07-05 03:46:32', 'new_booking', NULL, 1),
(18, 'New Spa Room Booking', 7, 15, NULL, '2019-07-05 03:50:34', 'spa_booking', NULL, 1),
(19, 'New Booking', 7, 3, '', '2019-07-05 04:33:12', 'new_booking', NULL, 0),
(20, 'New Booking', 7, 1, '', '2019-07-05 04:21:18', 'new_booking', NULL, 0),
(21, 'New Booking', 7, 1, '', '2019-07-05 04:07:57', 'new_booking', NULL, 1),
(22, 'New Booking', 7, 1, '', '2019-07-05 04:08:26', 'new_booking', NULL, 1),
(23, 'New Booking', 7, 1, '', '2019-07-05 04:09:18', 'new_booking', NULL, 1),
(24, 'New Booking', 7, 1, '', '2019-07-05 04:10:18', 'new_booking', NULL, 1),
(25, 'New Tennis Courts Booking', 7, 15, NULL, '2019-07-05 04:11:29', 'tennis_booking', NULL, 1),
(26, 'New Tennis Courts Booking', 7, 15, NULL, '2019-07-05 04:12:05', 'tennis_booking', NULL, 1),
(27, 'New Booking', 7, 2, 'Need an extra racket', '2019-07-05 04:12:39', 'new_booking', NULL, 1),
(28, 'New Booking', 7, 2, '', '2019-07-05 04:13:13', 'new_booking', NULL, 1),
(29, 'New Tennis Courts Booking', 7, 15, NULL, '2019-07-05 04:13:47', 'tennis_booking', NULL, 1),
(30, 'New Booking', 7, 2, '', '2019-07-05 04:14:10', 'new_booking', NULL, 1),
(31, 'New Tennis Courts Booking', 7, 15, NULL, '2019-07-05 04:14:32', 'tennis_booking', NULL, 1),
(32, 'New Booking', 7, 2, '', '2019-07-05 04:14:54', 'new_booking', NULL, 1),
(33, 'New Spa Room Booking', 7, 15, NULL, '2019-07-05 04:15:38', 'spa_booking', NULL, 1),
(34, 'New Booking', 7, 3, '', '2019-07-05 04:16:06', 'new_booking', NULL, 1),
(35, 'New Spa Room Booking', 7, 15, NULL, '2019-07-05 04:16:59', 'spa_booking', NULL, 1),
(36, 'New Booking', 7, 3, '', '2019-07-05 04:17:28', 'new_booking', NULL, 1),
(37, 'New Spa Room Booking', 7, 15, NULL, '2019-07-05 04:17:56', 'spa_booking', NULL, 1),
(38, 'New Booking', 7, 3, '', '2019-07-05 04:18:25', 'new_booking', NULL, 1),
(39, 'New Spa Room Booking', 7, 15, NULL, '2019-07-05 04:18:59', 'spa_booking', NULL, 1),
(40, 'New Booking', 7, 3, '', '2019-07-05 04:19:24', 'new_booking', NULL, 1),
(41, 'Instructor Booking Accepted: Booking ID : ', 1, 7, '', '2019-07-05 04:22:25', 'gym_booking', 2, 1),
(42, 'Instructor Booking Rejected: Booking ID : ', 1, 7, 'Sorry... not available', '2019-07-05 04:23:25', 'gym_booking', 3, 1),
(43, 'Instructor Booking Accepted: Booking ID : ', 1, 7, '', '2019-07-05 04:23:44', 'gym_booking', 4, 1),
(44, 'Booking Cancelled: Booking ID : ', 7, 1, '', '2019-07-05 04:28:28', 'cancelled_booking', 6, 1),
(45, 'Tennis Court Booking Cancelled: Booking ID : ', 7, 7, 'Cancel tennis court booking on 07/27', '2019-07-05 04:32:19', 'cancelled_booking', 5, 1),
(46, 'Masseur Booking Accepted: Booking ID : ', 3, 7, '', '2019-07-05 04:33:29', 'masseur_booking', 1, 1),
(47, 'Coach Booking Accepted: Booking ID : ', 2, 7, '', '2019-07-05 04:34:49', 'coach_booking', 2, 1),
(48, 'Spa Room Booking Accepted:', 15, 7, '', '2019-07-05 04:36:41', 'spa_booking', 1, 1),
(49, 'Tennis Court Booking Accepted:', 15, 7, '', '2019-07-05 04:37:01', 'tennis_booking', 1, 1),
(50, 'Tennis Court Booking Rejected:', 15, 7, '', '2019-07-05 04:37:07', 'tennis_booking', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pool_attendance`
--

CREATE TABLE `pool_attendance` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pool_attendance`
--

INSERT INTO `pool_attendance` (`id`, `user_id`, `date`, `time_from`, `time_to`) VALUES
(1, 7, '2019-07-05', '09:00:00', '09:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `resident_id` int(11) NOT NULL,
  `resident_name` varchar(255) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `tele_num` int(10) NOT NULL,
  `appartment_no` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`resident_id`, `resident_name`, `last_name`, `tele_num`, `appartment_no`, `user_id`) VALUES
(1, 'Resident1', 'residentone', 775869789, 'A12', 7),
(2, 'Resident2', 'residenttwo', 715645689, 'A09', 8),
(3, 'Resident3', 'residentthree', 785869896, 'B13', 9),
(4, 'Resident4', 'residentfour', 455566998, 'C14', 10),
(5, 'Resident5', 'residentfive', 784512369, 'D13', 11);

-- --------------------------------------------------------

--
-- Table structure for table `spa_room_booking`
--

CREATE TABLE `spa_room_booking` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL,
  `booking_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spa_room_booking`
--

INSERT INTO `spa_room_booking` (`booking_id`, `user_id`, `date`, `time_from`, `time_to`, `booking_status`) VALUES
(1, 7, '2019-07-06', '10:00:00', '11:00:00', 'accepted'),
(2, 7, '2019-07-07', '10:00:00', '11:00:00', 'pending'),
(3, 7, '2019-07-21', '09:00:00', '10:00:00', 'pending'),
(4, 7, '2019-08-11', '10:00:00', '11:00:00', 'pending'),
(5, 7, '2019-08-25', '11:00:00', '12:00:00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tennis_court_booking`
--

CREATE TABLE `tennis_court_booking` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL,
  `booking_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tennis_court_booking`
--

INSERT INTO `tennis_court_booking` (`booking_id`, `user_id`, `date`, `time_from`, `time_to`, `booking_status`) VALUES
(1, 7, '2019-07-06', '18:00:00', '19:00:00', 'accepted'),
(2, 7, '2019-07-06', '16:00:00', '17:00:00', 'rejected'),
(3, 7, '2019-07-13', '16:00:00', '17:00:00', 'pending'),
(4, 7, '2019-07-20', '15:00:00', '16:00:00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `register` tinyint(1) NOT NULL,
  `login` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `username`, `password`, `user_type`, `register`, `login`) VALUES
(1, 'udulaindunil@gmail.com', 'GymInstructor1', '202cb962ac59075b964b07152d234b70', 'instructor', 1, 0),
(2, 'udulaindunil@gmail.com', 'Coach1', '202cb962ac59075b964b07152d234b70', 'coach', 1, 0),
(3, 'udulaindunil@gmail.com', 'Masseur1', '202cb962ac59075b964b07152d234b70', 'masseur', 1, 0),
(4, 'udulaindunil@gmail.com', 'GymInstructor2', '202cb962ac59075b964b07152d234b70', 'instructor', 1, 0),
(5, 'udulaindunil@gmail.com', 'Masseur2', '202cb962ac59075b964b07152d234b70', 'masseur', 1, 1),
(6, 'udulaindunil@gmail.com', 'Coach2', '202cb962ac59075b964b07152d234b70', 'coach', 1, 1),
(7, 'udulaindunil@gmail.com', 'Resident1', '202cb962ac59075b964b07152d234b70', 'resident', 1, 0),
(8, 'udulaindunil@gmail.com', 'Resident2', '202cb962ac59075b964b07152d234b70', 'resident', 1, 1),
(9, 'udulaindunil@gmail.com', 'Resident3', '202cb962ac59075b964b07152d234b70', 'resident', 1, 1),
(10, 'udulaindunil@gmail.com', 'Resident4', '202cb962ac59075b964b07152d234b70', 'resident', 0, 0),
(11, 'udulaindunil@gmail.com', 'Resident5', '202cb962ac59075b964b07152d234b70', 'resident', 0, 0),
(12, 'udulaindunil@gmail.com', 'GymInstructor3', '202cb962ac59075b964b07152d234b70', 'instructor', 0, 0),
(13, 'udulaindunil@gmail.com', 'Masseur3', '202cb962ac59075b964b07152d234b70', 'masseur', 0, 0),
(14, 'udulaindunil@gmail.com', 'Coach3', '202cb962ac59075b964b07152d234b70', 'coach', 0, 0),
(15, 'udulaindunil@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70', 'admin', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`coach_id`),
  ADD KEY `coach_ibfk_1` (`user_id`);

--
-- Indexes for table `coach_booking`
--
ALTER TABLE `coach_booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `coach_id` (`coach_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `gym_attendance`
--
ALTER TABLE `gym_attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`instructor_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `instructor_booking`
--
ALTER TABLE `instructor_booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `instructor_id` (`instructor_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `masseur`
--
ALTER TABLE `masseur`
  ADD PRIMARY KEY (`masseur_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `masseur_booking`
--
ALTER TABLE `masseur_booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `masseur_id` (`masseur_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `pool_attendance`
--
ALTER TABLE `pool_attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`resident_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `spa_room_booking`
--
ALTER TABLE `spa_room_booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tennis_court_booking`
--
ALTER TABLE `tennis_court_booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `coach_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coach_booking`
--
ALTER TABLE `coach_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gym_attendance`
--
ALTER TABLE `gym_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `instructor_booking`
--
ALTER TABLE `instructor_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `masseur`
--
ALTER TABLE `masseur`
  MODIFY `masseur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `masseur_booking`
--
ALTER TABLE `masseur_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `pool_attendance`
--
ALTER TABLE `pool_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resident`
--
ALTER TABLE `resident`
  MODIFY `resident_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `spa_room_booking`
--
ALTER TABLE `spa_room_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tennis_court_booking`
--
ALTER TABLE `tennis_court_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coach`
--
ALTER TABLE `coach`
  ADD CONSTRAINT `coach_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `coach_booking`
--
ALTER TABLE `coach_booking`
  ADD CONSTRAINT `coach_booking_ibfk_1` FOREIGN KEY (`coach_id`) REFERENCES `coach` (`coach_id`),
  ADD CONSTRAINT `coach_booking_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `gym_attendance`
--
ALTER TABLE `gym_attendance`
  ADD CONSTRAINT `gym_attendance_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `instructor_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `instructor_booking`
--
ALTER TABLE `instructor_booking`
  ADD CONSTRAINT `instructor_booking_ibfk_1` FOREIGN KEY (`instructor_id`) REFERENCES `instructor` (`instructor_id`),
  ADD CONSTRAINT `instructor_booking_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `masseur`
--
ALTER TABLE `masseur`
  ADD CONSTRAINT `masseur_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `masseur_booking`
--
ALTER TABLE `masseur_booking`
  ADD CONSTRAINT `masseur_booking_ibfk_1` FOREIGN KEY (`masseur_id`) REFERENCES `masseur` (`masseur_id`),
  ADD CONSTRAINT `masseur_booking_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `pool_attendance`
--
ALTER TABLE `pool_attendance`
  ADD CONSTRAINT `pool_attendance_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `resident`
--
ALTER TABLE `resident`
  ADD CONSTRAINT `resident_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `spa_room_booking`
--
ALTER TABLE `spa_room_booking`
  ADD CONSTRAINT `spa_room_booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `tennis_court_booking`
--
ALTER TABLE `tennis_court_booking`
  ADD CONSTRAINT `tennis_court_booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
