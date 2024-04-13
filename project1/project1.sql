-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2024 at 07:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `notice` varchar(100) NOT NULL,
  `uploaded_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice`, `uploaded_time`) VALUES
(1, 'Exam is Cancelled today', '2024-04-12 08:00:38'),
(2, 'Notice 1', '2024-04-12 08:01:48'),
(3, 'Notice 2', '2024-04-12 08:01:48'),
(4, 'Notice 3', '2024-04-12 08:02:32'),
(5, 'Notice 4', '2024-04-12 08:02:32'),
(6, 'Notice 5', '2024-04-12 08:03:06'),
(7, 'Notice 6', '2024-04-12 08:03:06'),
(8, 'Notice 7', '2024-04-12 08:03:32'),
(9, 'Notice 8', '2024-04-12 08:03:32'),
(10, 'Exam is Cancelled today', '2024-04-12 08:03:56'),
(11, 'call me', '2024-04-12 16:16:50');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `mobile` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fullname`, `email`, `password`, `mobile`) VALUES
(12, 'allu arjun', 'allu98@gmail.com', 'fa2fe96e809852a7d8203d03845d2a03', '76543218788'),
(13, 'allu arjun', 'allu98@gmail.com', 'fa2fe96e809852a7d8203d03845d2a03', '76543218788'),
(14, 'allu arjun', 'allu98@gmail.com', 'fa2fe96e809852a7d8203d03845d2a03', '76543218788'),
(15, 'anjali', 'anjali@123', 'e10adc3949ba59abbe56e057f20f883e', '65645111'),
(16, 'ankita', 'ankita@123', 'dbc4d84bfcfe2284ba11beffb853a8c4', '684521515'),
(17, 'salman', 'sallu@123', '2a516e41fbdc605bfa91ec516ce416ea', '987875556'),
(18, 'anjali', 'anjali@123', '827ccb0eea8a706c4c34a16891f84e7b', '5345346354364'),
(19, 'shlok', 'shlp@gmail.com', '2f7c7d16551bb41f388304fc764ba76a', '888888888'),
(20, 'ram charan', 'ram@gmail.com', '6a557ed1005dddd940595b8fc6ed47b2', '777777777777'),
(21, 'sanika korde', 'sanika@123', '123321', '4454484515484'),
(22, 'apurva', 'apurva123@gmail.com', '123', '4844847858'),
(23, 'aniket', 'ani@911', '12345', '7766554534'),
(24, 'nikhil', 'nikhil@gmail.com', '350d89c1cd6592bbbd1ed2e8a4f3ddba', '934392842394');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phoneNumber` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
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
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
