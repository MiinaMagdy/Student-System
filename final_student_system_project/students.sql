-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 22, 2022 at 06:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_skills`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `image_path` varchar(250) NOT NULL,
  `enroll_date` date NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `phone`, `image_path`, `enroll_date`, `birth_date`, `gender`, `address`, `email`, `password`, `is_active`) VALUES
(18, 'Lama', '0120102120', 'assets/images/account.png', '0001-02-02', '2020-02-02', 'Female', 'Ismallia', 'lama@mail.com', '112233', 1),
(19, 'fatma', '0120120120', 'assets/images/account.png', '0001-10-10', '0001-01-10', 'Female', 'Ismallia', 'fatma@mail.com', '112233', 1),
(25, 'Mina', '012340', 'assets/images/account.png', '2022-12-31', '2022-12-31', 'Male', 'Egypt - Suez', 'mina@mail.com', '123413', 1),
(28, 'Eman', '12312312', 'assets/images/account.png', '2022-12-31', '2022-12-31', 'Female', 'Ismallia', 'eman@mail.com', '123123', 1),
(37, 'sam', '123414', 'assets/images/account.png', '2022-12-31', '2022-12-31', 'Male', 'Japan', 'sam@mail.com', '123123', 1),
(45, 'Peter', '01234', 'assets/images/account.png', '2022-12-31', '2022-12-31', 'Male', 'Ismallia', 'peter@mail.com', '123123', 1),
(51, 'dd', '', 'assets/images/account.png', '2022-08-22', '1970-01-01', 'Male', '', 'dd@mail.com', '1414', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
