-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 11:58 AM
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
-- Database: `futsa2`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(10) NOT NULL,
  `futsal_id` int(11) NOT NULL,
  `booker_id` int(11) NOT NULL,
  `book_time_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `futsal_id`, `booker_id`, `book_time_id`, `status`, `date`) VALUES
(1, 8, 1, 2, 'expired', '2021-05-29'),
(2, 8, 1, 2, 'expired', '2021-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `book_time`
--

CREATE TABLE `book_time` (
  `book_time_id` int(10) NOT NULL,
  `book_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_time`
--

INSERT INTO `book_time` (`book_time_id`, `book_time`) VALUES
(1, '06:00-07:00 AM'),
(2, '07:00-08:00 AM'),
(3, '08:00-09:00 AM'),
(4, '09:00-10:00 AM');

-- --------------------------------------------------------

--
-- Table structure for table `futsal`
--

CREATE TABLE `futsal` (
  `futsal_id` int(10) NOT NULL,
  `futsal_name` varchar(100) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `futsal`
--

INSERT INTO `futsal` (`futsal_id`, `futsal_name`, `owner`, `address`, `phone_no`, `images`) VALUES
(2, 'B-FIT Futsal Pokhara', 'Jontybhai', 'Bagale tole ', '984666667', 'images/pac.jfif'),
(3, 'ABC Futsal Corner', 'Jontybhai', 'Nadipur', '984666666', 'images/abc.jpg'),
(4, 'Pokhara sports castle', 'Jontybhai', 'Alumaila Tole', '984666668', 'images/pc.jpg'),
(5, 'Airport sport centre', 'Jontybhai', 'Chathey', '984666668', 'images/ppx.jfif'),
(6, 'Ranipauwa Sports Academy', 'Jontybhai', 'Ranipauwa', '984666666', 'images/abc.jpg'),
(7, 'Pokhara Futsal Centre', 'Jontybhai', 'Malepatan', '984666666', 'images/ppx.jfif'),
(8, 'Burlakoti House', 'Sirish Burlakoti', 'Jhapa', '9861886847', 'https://anilblon.files.wordpress.com/2015/08/futsal-in-nepal.jpg'),
(9, '', 'Burlakoti ', 'Rambazar, Pokhara', '1234567890', 'https://anilblon.files.wordpress.com/2015/08/futsal-in-nepal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `owner_pending`
--

CREATE TABLE `owner_pending` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `futsal_name` varchar(100) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `phone_no` varchar(30) NOT NULL,
  `role` varchar(10) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `address`, `phone_no`, `role`) VALUES
(1, 'kusal lamsal', 'journeytous2024@gmail.com', '202cb962ac59075b964b07152d234b70', 'pokhara', '9861886847', 'user'),
(2, 'Sirish Burlakoti', 'leosirish@gmail.com', '202cb962ac59075b964b07152d234b70', 'Jhapa', '9861886847', 'owner'),
(3, 'KusalJr', 'kusaljr@gmail.com', '202cb962ac59075b964b07152d234b70', 'Rambazar, Pokhara', '1234567890', 'admin'),
(4, 'Burlakoti ', 'boula@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'Rambazar, Pokhara', '1234567890', 'owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `futsal_id` (`futsal_id`),
  ADD KEY `booker_id` (`booker_id`),
  ADD KEY `book_time_id` (`book_time_id`);

--
-- Indexes for table `book_time`
--
ALTER TABLE `book_time`
  ADD PRIMARY KEY (`book_time_id`);

--
-- Indexes for table `futsal`
--
ALTER TABLE `futsal`
  ADD PRIMARY KEY (`futsal_id`);

--
-- Indexes for table `owner_pending`
--
ALTER TABLE `owner_pending`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book_time`
--
ALTER TABLE `book_time`
  MODIFY `book_time_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `futsal`
--
ALTER TABLE `futsal`
  MODIFY `futsal_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `owner_pending`
--
ALTER TABLE `owner_pending`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`futsal_id`) REFERENCES `futsal` (`futsal_id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`booker_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`book_time_id`) REFERENCES `book_time` (`book_time_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
