-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2026 at 02:16 AM
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
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `user_id`, `score`) VALUES
(1, 1, 0),
(2, 1, 9),
(3, 1, 0),
(4, 1, 0),
(5, 1, 0),
(6, 1, 0),
(7, 2, 1),
(8, 1, 10),
(9, 6, 4),
(10, 1, 0),
(11, 1, 2),
(12, 1, 0),
(13, 6, 7),
(14, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Mario', '$2y$10$Jh/Y6os31EAIfAR6qePGO.zK3LDctSSBGK90X3JqHmq3boblpCNpO'),
(2, 'Jaron', '$2y$10$tYuXZqF4fZ44FvOvKSxP/Of0y.alx0JEOsZExHRBwpTnXi8UURxpW'),
(3, 'Jaron', '$2y$10$q5dpfsrPX8lWq5hIkjwE1uGzaV4tGae7OxGvaW.fzAwxqNpX83/kG'),
(4, 'Jaron', '$2y$10$S9BxAs6GymnU8h2WIHgSle4KQK02sZXFJtzd51YWWeibOqAamrOh6'),
(5, 'Jaron', '$2y$10$/IpwyyEWwn6kLZW9SjYWr.MJkqFDSae11Xyc3SiLcNVdmCmB0fh52'),
(6, 'Isle', '$2y$10$x28BgM/p9If.0912t0MZ3.vd1e1O6tlcosQITCj/2gxyGH71AnrJy'),
(7, 'ProfessorB', '$2y$10$CqPo53u502NPWWuIJJhgR.gCt.Z3TLRj7ZOTl/iKIcVSFdwbzvBE2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
