-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2019 at 02:23 PM
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
(1, 'udula', 'ss', 455566998, '2019-06-06', 66);

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
(4, 'A.', 'De Silva', 1234567890, '1990-01-09', 71),
(5, 'Ins', 'two', 1234567890, '2001-01-08', 73);

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
(30, 4, 70, '2019-06-30', '13:00:00', '14:00:00', 'accepted'),
(31, 4, 70, '2019-06-23', '18:00:00', '19:00:00', 'accepted'),
(33, 4, 70, '2019-06-25', '16:00:00', '17:00:00', 'accepted'),
(34, 4, 70, '2019-06-27', '16:00:00', '17:00:00', 'rejected'),
(35, 4, 70, '2019-06-28', '13:00:00', '14:00:00', 'rejected'),
(36, 4, 70, '2019-06-29', '14:00:00', '15:00:00', 'accepted');

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
(1, 1, 70, '2019-06-14', '17:00:00', '17:00:00', 'pending');

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
(13, 'Booking Cancelled:', 71, 70, '', '2019-06-23 12:18:46', 'gym_booking', 36, 1),
(14, 'Booking Cancelled:', 70, 71, '', '2019-06-23 12:20:27', 'cancelled_booking', 32, 1);

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
(33, 'Jayani', 'Hewavitharana', 1234567890, 'abc', 70);

-- --------------------------------------------------------

--
-- Table structure for table `spa_room_booking`
--

CREATE TABLE `spa_room_booking` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tennis_court_booking`
--

CREATE TABLE `tennis_court_booking` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_from` time NOT NULL,
  `time_to` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `register` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `username`, `password`, `user_type`, `register`) VALUES
(58, 'udulaindunil@gmail.com', 'udula', '202cb962ac59075b964b07152d234b70', 'admin', 1),
(60, 'rdesilva@gamil.com', 'udulaindunil', '81dc9bdb52d04dc20036dbd8313ed055', 'resident', 0),
(61, 'rdesilva@gamil.com', 'dsdsds', '4ab47e54c2f73ad4c0eb3974709721cd', 'resident', 1),
(63, 'rdesilva@gamil.com', 'dsdsds', '4ab47e54c2f73ad4c0eb3974709721cd', 'instructor', 1),
(64, 'rdesilva@gamil.com', 'jvfivqvn-ca', 'b52c96bea30646abf8170f333bbd42b9', 'instructor', 1),
(65, 'rdesilva@gamil.com', 'jvfivqvn-cax', 'ea416ed0759d46a8de58f63a59077499', 'masseur', 1),
(66, 'rdesilva@gamil.com', 'udulaindunilss', '2d02e669731cbade6a64b58d602cf2a4', 'coach', 1),
(67, 'rdesilva@gamil.com', 'dtepbfba-ca', '202cb962ac59075b964b07152d234b70', 'masseur', 1),
(68, 'rdesilva@gamil.com', 'qwer', '962012d09b8170d912f0669f6d7d9d07', 'instructor', 1),
(69, 'rdesilva@gamil.com', 'Superuserssss', '8f60c8102d29fcd525162d02eed4566b', 'resident', 0),
(70, 'jh@gmail.com', 'jayh', '827ccb0eea8a706c4c34a16891f84e7b', 'resident', 1),
(71, 'ins1@gmail.com', 'ins1', '202cb962ac59075b964b07152d234b70', 'instructor', 1),
(72, 'm@gmail.com', 'mas1', '202cb962ac59075b964b07152d234b70', 'masseur', 1),
(73, 'ins2@gmail.com', 'ins2', '202cb962ac59075b964b07152d234b70', 'instructor', 1);

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
  MODIFY `coach_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coach_booking`
--
ALTER TABLE `coach_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gym_attendance`
--
ALTER TABLE `gym_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `instructor_booking`
--
ALTER TABLE `instructor_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `masseur`
--
ALTER TABLE `masseur`
  MODIFY `masseur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `masseur_booking`
--
ALTER TABLE `masseur_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pool_attendance`
--
ALTER TABLE `pool_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident`
--
ALTER TABLE `resident`
  MODIFY `resident_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `spa_room_booking`
--
ALTER TABLE `spa_room_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tennis_court_booking`
--
ALTER TABLE `tennis_court_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

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
