-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 07:51 PM
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
(18, 'Lama', '0120102120', '../profile_images/18carbon.png', '0001-02-02', '2020-02-02', 'Female', 'Ismallia', 'lama@mail.com', '112233', 1),
(19, 'fatma', '0120120120', '../images/account.png', '0001-10-10', '0001-01-10', 'Female', 'Ismallia', 'fatma@mail.com', '112233', 1),
(25, 'Mina', '012340', '../images/account.png', '2022-12-31', '2022-12-31', 'Male', 'Egypt - Suez', 'mina@mail.com', '123413', 1),
(28, 'Eman', '12312312', '../images/account.png', '2022-12-31', '2022-12-31', 'Female', 'Ismallia', 'eman@mail.com', '123123', 1),
(37, 'sam', '123414', '../images/account.png', '2022-12-31', '2022-12-31', 'Male', 'Japan', 'sam@mail.com', '123123', 1),
(45, 'Peter', '01234', '../images/account.png', '2022-12-31', '2022-12-31', 'Male', 'Ismallia', 'peter@mail.com', '123123', 1),
(51, 'dd', '', '../images/account.png', '2022-08-22', '1970-01-01', 'Male', '', 'dd@mail.com', '1414', 1),
(52, 'Peter', '01211036617', '../images/account.png', '2022-08-23', '2002-02-03', 'Male', 'Peter PEter!', 'Peter.j.torki@gmail.com', 'Peter11', 1),
(61, 'peterstheory', 'fsa', '', '2022-08-27', '2022-08-10', 'Male', 'asf', 'Peter112233@g.com', 'Peter', 0),
(62, 'peterstheory', 'fsa', '', '2022-08-27', '2022-08-10', 'Male', 'asf', 'Peter112233@g.com', 'Peter', 0),
(63, 'peterstheory', 'fsa', '', '2022-08-27', '2022-08-10', 'Male', 'asf', 'Peter112233@g.com', 'Peter', 0),
(64, 'dsadfsf', 'dasd', '', '2022-08-27', '2022-08-02', 'Male', '', 'Peter112233@g.com', 'Peter', 0),
(65, 'Eman', '', '', '2022-08-27', '1970-01-01', 'Female', '', 'eman@gmaim.com', '112233', 0),
(66, 'Peter Joseph', '01210', '', '2022-08-27', '2022-08-11', 'Male', 'elarish', 'lama@mail.com', 'Peter11', 0),
(67, 'Peter Joseph', '01211036617', '../images/account.png', '2022-08-28', '1989-12-10', 'Male', 'Elgish ST', 'Peter123@gmail.com', '123', 1),
(68, 'asfas', '0121013', '', '2022-08-28', '2022-08-04', 'Male', 'safasfasf', 'fasfasf', 'asfas', 0),
(69, 'Peter', '', '', '2022-08-28', '1970-01-01', 'Male', '', 'petopeto@mail.com', '123', 0),
(70, 'Peter', '', '', '2022-08-28', '1970-01-01', 'Male', '', '1661', 'Peter11', 0),
(71, 'daswfd', '', '', '2022-08-28', '1970-01-01', 'Male', '', 'afdsaf', '4465546', 0),
(74, 'Fatema', '012', '', '2022-08-28', '1970-01-01', 'Male', '', 'fatmaaa@mail.com', '112233', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
