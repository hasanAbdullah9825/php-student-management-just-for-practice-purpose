-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 07:07 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `selfproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cgpa` float NOT NULL,
  `gender` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `cgpa`, `gender`, `status`) VALUES
(6, 'Raby', 'raby@gmail.com', '$2y$10$STRePznhWY5If5nlgAF8fO0mDPFHov6WDSjKVGoiwWAuox0grba/m', 3.65, 'Male', 1),
(8, 'Nishita', 'nishita@gmail.com', '$2y$10$be8HFBKXs8GYIRXQ6jY87.GaK0Gl2KSuw9VlF/lRdcGqxz.nq1vva', 3.75, 'Female', 0),
(9, 'Rehana Parvin Lima', 'rehana@gmail.com', '$2y$10$9DiFGpq5a5uV4gh6Rt/MOeofxeyHYmPXyCowsq8/C6Epy11QcHgA6', 3.73, 'Female', 0),
(10, 'Imran Miah', 'imran@gmail.com', '$2y$10$qd5WVUTMaD2GvC1Rf59gJOgh.j7S2aJP1NjacCAcXaJJmsDn9rXxC', 3.5, 'Male', 0),
(11, 'Hasan', 'hasan.techtomorrow@gmail.com', '$2y$10$rkfzXf4Xm04BUj7yprPlW..Sj2mZJUMDvEv10PbRO6OrjvilYCHQ6', 3.71, 'Male', 2),
(13, 'raz', 'raz@gmail.com', '$2y$10$1PhKWy/UqI.UwbchZaSxi.zmP4yuUTM9SdWaQy.21DWGS22FLcnSS', 3.7, 'Male', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
