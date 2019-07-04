-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2019 at 07:50 PM
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
(1, 'udula', 'ss', 455566998, '2019-06-06', 66),
(2, 'co', 'ach', 1234567890, '1982-06-15', 77),
(3, 'co', 'ach2', 1234567890, '2019-06-02', 78),
(4, 'coachiee', 'one', 1234567890, '2019-06-16', 80);

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
(4, 2, 70, '2019-07-06', '14:00:00', '15:00:00', 'rejected'),
(5, 2, 70, '2019-07-13', '15:00:00', '16:00:00', 'pending');

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
(1, 70, '2019-06-19', '20:00:00', '22:00:00');

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
(1, 'T.', 'Perera', 778956369, '2019-06-12', 63),
(2, 'L.', 'Fernando', 778956369, '2019-06-22', 64),
(3, 'D.', 'Jayawardene', 455566998, '2019-06-14', 68),
(4, 'A.B', 'De Silva', 1234567890, '1990-01-09', 71),
(5, 'Ins', 'two', 1234567890, '2001-01-08', 73),
(6, 'sasindu', 'sensly', 785869896, '2019-06-20', 74),
(7, 'shalitha', 'sandaruwan', 455566998, '2019-06-11', 75);

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
(18, 1, 70, '2019-06-29', '13:00:00', '14:00:00', 'pending'),
(22, 2, 70, '2019-06-21', '16:00:00', '17:00:00', 'pending'),
(24, 1, 70, '2019-06-21', '15:00:00', '17:00:00', 'pending'),
(25, 3, 70, '2019-06-21', '15:00:00', '17:00:00', 'pending'),
(29, 5, 70, '2019-06-29', '14:00:00', '15:00:00', 'pending'),
(34, 4, 70, '2019-06-27', '16:00:00', '17:00:00', 'rejected'),
(35, 4, 70, '2019-06-28', '13:00:00', '14:00:00', 'rejected'),
(36, 4, 70, '2019-06-29', '14:00:00', '15:00:00', 'accepted'),
(37, 1, 70, '2019-06-29', '14:00:00', '15:00:00', 'pending'),
(38, 4, 70, '2019-06-02', '13:00:00', '15:00:00', 'rejected'),
(39, 4, 70, '2019-06-30', '19:00:00', '20:00:00', 'rejected'),
(40, 4, 70, '2019-06-30', '16:00:00', '17:00:00', 'rejected'),
(41, 4, 70, '2019-06-29', '00:00:00', '13:00:00', 'pending'),
(42, 4, 70, '2019-06-29', '16:00:00', '17:00:00', 'pending');

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
(1, 'udula', 'sensly', 778956369, '2019-06-22', 65),
(2, 'udula', 'ss', 455566998, '2019-06-05', 67),
(3, 'ma', 'sseur', 1234567890, '1994-02-08', 72);

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
(1, 1, 70, '2019-06-14', '17:00:00', '17:00:00', 'pending'),
(3, 3, 70, '2019-06-28', '15:00:00', '16:00:00', 'accepted');

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
(3, 'Booking Accepted:', 71, 70, 'Will be there at 6 am', '2019-06-23 11:09:20', 'gym_booking', 31, 1),
(4, 'New Booking', 70, 71, 'appointment at 4 on 23rd', '2019-06-23 11:42:33', 'new_booking', NULL, 0),
(6, 'New Booking', 70, 71, '', '2019-06-23 11:12:45', 'new_booking', NULL, 1),
(7, 'New Booking', 70, 71, '', '2019-06-23 11:12:53', 'new_booking', NULL, 1),
(8, 'New Booking', 70, 71, '', '2019-06-23 11:13:02', 'new_booking', NULL, 1),
(9, 'Booking Rejected:', 71, 70, 'Sorry... not available', '2019-06-23 11:13:10', 'gym_booking', 36, 1),
(10, 'Booking Cancelled:', 70, 71, 'sorry,have to cancel', '2019-06-23 11:13:19', 'cancelled_booking', 23, 1),
(11, 'Booking Cancelled:', 71, 70, 'Sorry... not available', '2019-06-23 11:58:49', 'gym_booking', 33, 1),
(12, 'Gym Booking Accepted:', 71, 70, '', '2019-06-23 12:18:38', 'gym_booking', 36, 1),
(13, 'Booking Cancelled:', 71, 70, '', '2019-06-27 18:28:28', 'gym_booking', 36, 0),
(14, 'Booking Cancelled:', 70, 71, '', '2019-06-23 12:20:27', 'cancelled_booking', 32, 1),
(15, 'New Booking', 70, 72, 'hi', '2019-06-27 17:53:18', 'new_booking', NULL, 1),
(16, 'Booking Cancelled:', 70, 72, 'cancelled', '2019-06-27 18:02:25', 'cancelled_booking', 2, 1),
(17, 'New Booking', 70, 72, 'hello', '2019-06-27 18:12:51', 'new_booking', NULL, 1),
(18, 'Masseur Booking Accepted:', 72, 70, 'hellooooo', '2019-06-27 18:21:12', 'masseur_booking', 3, 1),
(19, 'New Resident Register Request:', 79, 58, NULL, '2019-06-27 19:26:55', 'resident_request', NULL, 1),
(20, 'New Employee Register Request:', 80, 58, NULL, '2019-06-28 03:26:08', 'employee_request', NULL, 1),
(21, 'Spa Room Booking Accepted:', 58, 70, 'spa accepted', '2019-06-28 12:41:24', 'spa_booking', 1, 1),
(22, 'Spa Room Booking Accepted:', 58, 70, 'spa', '2019-06-28 12:46:33', 'spa_booking', 1, 1),
(23, 'Spa Room Booking Accepted:', 58, 70, 'spa', '2019-06-28 12:48:08', 'spa_booking', 1, 1),
(24, 'Spa Room Booking Accepted:', 58, 70, '', '2019-06-28 12:49:26', 'spa_booking', 1, 1),
(25, 'New Booking', 70, 63, 'hi', '2019-06-28 14:22:34', 'new_booking', NULL, 1),
(26, 'New Booking', 70, 71, 'hi', '2019-06-28 14:24:08', 'new_booking', NULL, 1),
(27, 'Instructor Booking Cancelled:', 71, 70, 'bye', '2019-06-28 14:29:01', 'gym_booking', 36, 1),
(28, 'New Booking', 70, 71, '', '2019-06-28 14:36:34', 'new_booking', NULL, 1),
(29, 'New Booking', 70, 71, '', '2019-06-28 14:37:04', 'new_booking', NULL, 1),
(30, 'New Booking', 70, 71, '', '2019-06-28 14:37:29', 'new_booking', NULL, 1),
(31, 'New Booking', 70, 71, '', '2019-06-28 14:37:49', 'new_booking', NULL, 1),
(32, 'Instructor Booking Rejected:', 71, 70, '', '2019-07-04 16:04:58', 'gym_booking', 40, 0),
(33, 'Spa Room Booking Rejected:', 58, 70, 'spa not available', '2019-06-28 14:45:30', 'spa_booking', 2, 1),
(34, 'New Spa Room Booking:', 70, 58, NULL, '2019-06-28 15:30:20', 'spa_booking', NULL, 1),
(35, 'New Resident Register Request:', 81, 58, NULL, '2019-06-28 16:23:27', 'resident_request', NULL, 1),
(36, 'New Resident Register Request:', 82, 58, NULL, '2019-06-28 16:42:24', 'resident_request', NULL, 1),
(37, 'New Booking', 70, 80, 'hi coach', '2019-07-02 15:18:04', 'new_booking', NULL, 1),
(38, 'Booking Cancelled:', 70, 80, 'bye coach', '2019-07-02 15:19:14', 'cancelled_booking', 1, 1),
(39, 'New Tennis Courts Booking:', 70, 58, NULL, '2019-07-02 15:20:47', 'tennis_booking', NULL, 1),
(40, 'New Spa Room Booking:', 70, 58, NULL, '2019-07-02 15:24:55', 'spa_booking', NULL, 1),
(41, 'New Tennis Courts Booking:', 70, 58, NULL, '2019-07-02 15:28:15', 'tennis_booking', NULL, 1),
(42, 'New Tennis Courts Booking:', 70, 58, NULL, '2019-07-02 15:30:00', 'tennis_booking', NULL, 1),
(43, 'Booking Cancelled:', 70, 70, 'cancel tennis', '2019-07-02 15:31:05', 'cancelled_booking', 3, 1),
(44, 'Booking Cancelled:', 70, 70, '', '2019-07-02 15:35:11', 'cancelled_booking', 3, 1),
(45, 'New Booking', 70, 77, '', '2019-07-04 16:47:35', 'new_booking', NULL, 0),
(46, 'Booking Cancelled:', 70, 77, '', '2019-07-04 16:47:50', 'cancelled_booking', 2, 0),
(47, 'Booking Cancelled:', 70, 70, '', '2019-07-02 15:46:01', 'cancelled_booking', 1, 1),
(48, 'Tennis Court Booking Rejected:', 58, 70, 'tennis court not available', '2019-07-02 17:21:21', 'tennis_booking', 2, 1),
(49, 'New Booking', 70, 77, '', '2019-07-04 16:47:52', 'new_booking', NULL, 0),
(50, 'New Booking', 70, 77, '', '2019-07-04 16:47:53', 'new_booking', NULL, 0),
(51, 'New Booking', 70, 77, '', '2019-07-04 16:47:55', 'new_booking', NULL, 0),
(52, 'Coach Booking Accepted:', 77, 70, '', '2019-07-02 17:47:58', 'coach_booking', 3, 1),
(53, 'Coach Booking Rejected:', 77, 70, '', '2019-07-02 17:48:11', 'coach_booking', 4, 1),
(54, 'Coach Booking Cancelled:', 77, 70, '', '2019-07-02 17:50:01', 'coach_booking', 3, 1),
(55, 'Instructor Booking Cancelled:', 71, 70, 'cancel 31', '2019-07-04 16:00:52', 'gym_booking', 31, 0),
(56, 'Instructor Booking Cancelled:', 71, 70, '', '2019-07-04 16:00:12', 'gym_booking', 33, 0),
(57, 'New Spa Room Booking:', 70, 58, NULL, '2019-07-02 18:18:04', 'spa_booking', NULL, 1),
(58, 'Spa Room Booking Accepted:', 58, 70, '', '2019-07-04 16:08:23', 'spa_booking', 3, 0),
(59, 'Instructor Booking Cancelled:', 58, 70, 'spa cancelled', '2019-07-04 16:04:38', 'gym_booking', 3, 0),
(60, 'Spa Room Booking Cancelled:', 58, 70, '', '2019-07-02 18:22:16', 'spa_booking', 1, 1),
(61, 'Tennis Court Booking Accepted:', 58, 70, 'Come to the spa', '2019-07-04 17:45:59', 'tennis_booking', 3, 0),
(62, 'Spa Room Booking Accepted:', 58, 70, 'Come to the spa', '2019-07-04 17:45:48', 'spa_booking', 4, 0);

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
(1, 70, '2019-07-01', '15:00:00', '16:00:00');

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
(30, 'udula', 'sensly', 778956369, 'asd', 60),
(31, 'Udula', 'Sensly', 455566998, 'Malwaththa mawatha,Kohuwala', 61),
(32, 'udula', 'asdsdsaa', 775869123, 'Malwaththa mawatha,Kohuwala', 69),
(33, 'Jayani', 'Hewavitharana', 1234567890, 'abc', 70),
(34, 'sensly', 'udula', 778956369, 'A13', 76),
(35, 'res', 'one', 1234567890, 'abc', 79),
(36, 'Jayani', 'Hewavitharana', 1234567890, 'abc', 81),
(37, 'Jayani', 'Hewavitharana', 1234567890, 'abc', 82);

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
(2, 70, '2019-06-29', '14:00:00', '15:00:00', 'rejected'),
(4, 70, '2019-07-05', '14:00:00', '15:00:00', 'accepted'),
(5, 70, '2019-07-06', '13:00:00', '14:00:00', 'pending');

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
(2, 70, '2019-07-18', '14:00:00', '00:00:00', 'rejected'),
(3, 70, '2019-07-06', '14:00:00', '15:00:00', 'accepted');

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
(58, 'udulaindunil@gmail.com', 'udula', '202cb962ac59075b964b07152d234b70', 'admin', 1, 0),
(60, 'rdesilva@gamil.com', 'udulaindunil', '81dc9bdb52d04dc20036dbd8313ed055', 'resident', 0, 0),
(61, 'rdesilva@gamil.com', 'dsdsds', '4ab47e54c2f73ad4c0eb3974709721cd', 'resident', 1, 0),
(63, 'rdesilva@gamil.com', 'dsdsds', '4ab47e54c2f73ad4c0eb3974709721cd', 'instructor', 1, 0),
(64, 'rdesilva@gamil.com', 'jvfivqvn-ca', 'b52c96bea30646abf8170f333bbd42b9', 'instructor', 1, 0),
(65, 'rdesilva@gamil.com', 'jvfivqvn-cax', 'ea416ed0759d46a8de58f63a59077499', 'masseur', 1, 0),
(66, 'rdesilva@gamil.com', 'udulaindunilss', '2d02e669731cbade6a64b58d602cf2a4', 'coach', 1, 0),
(67, 'rdesilva@gamil.com', 'dtepbfba-ca', '202cb962ac59075b964b07152d234b70', 'masseur', 1, 0),
(68, 'rdesilva@gamil.com', 'qwer', '962012d09b8170d912f0669f6d7d9d07', 'instructor', 1, 0),
(69, 'rdesilva@gamil.com', 'Superuserssss', '8f60c8102d29fcd525162d02eed4566b', 'resident', 1, 1),
(70, 'jh@gmail.com', 'jayh', '827ccb0eea8a706c4c34a16891f84e7b', 'resident', 1, 0),
(71, 'ins1@gmail.com', 'ins1', '202cb962ac59075b964b07152d234b70', 'instructor', 1, 0),
(72, 'm1@gmail.com', 'mas1', '202cb962ac59075b964b07152d234b70', 'masseur', 1, 0),
(73, 'ins2@gmail.com', 'ins2', '202cb962ac59075b964b07152d234b70', 'instructor', 1, 0),
(74, 'sasindu@gmail.ocm', 'sasindu', '5a75e38f365c8013ce7c46c48bf3b126', 'instructor', 1, 0),
(75, 'shalitha@gmail.com', 'shalitha', '4e50b72944e3eb1d956ca8ea4bcd5c1e', 'instructor', 0, 0),
(76, 'udulaindunil@gmail.com', 'sensly', '23a819c40d54dd3be5c3b8dc61338230', 'resident', 1, 2),
(77, 'coach1@gmail.com', 'coach1', '202cb962ac59075b964b07152d234b70', 'coach', 1, 1),
(78, 'coach2@gmail.com', 'coach2', '202cb962ac59075b964b07152d234b70', 'coach', 1, 1),
(79, 'res1@gmail.com', 'res1', '202cb962ac59075b964b07152d234b70', 'resident', 1, 1),
(80, 'coachiee@gmial.com', 'coach3', '202cb962ac59075b964b07152d234b70', 'coach', 0, 0),
(81, 'jayani.hewa77@gmail.com', 'JayH', '827ccb0eea8a706c4c34a16891f84e7b', 'resident', 0, 0),
(82, 'jayani.hewa77@gmail.com', 'jay', '827ccb0eea8a706c4c34a16891f84e7b', 'resident', 1, 1);

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
  MODIFY `coach_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coach_booking`
--
ALTER TABLE `coach_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gym_attendance`
--
ALTER TABLE `gym_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `instructor_booking`
--
ALTER TABLE `instructor_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `masseur`
--
ALTER TABLE `masseur`
  MODIFY `masseur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `masseur_booking`
--
ALTER TABLE `masseur_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `pool_attendance`
--
ALTER TABLE `pool_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resident`
--
ALTER TABLE `resident`
  MODIFY `resident_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `spa_room_booking`
--
ALTER TABLE `spa_room_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tennis_court_booking`
--
ALTER TABLE `tennis_court_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

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
