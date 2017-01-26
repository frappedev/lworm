-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2017 at 02:56 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lworm`
--

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE `dummy` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `created_at` bigint(20) NOT NULL,
  `updated_at` bigint(20) NOT NULL,
  `cost` int(11) NOT NULL,
  `description` text,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dummy`
--

INSERT INTO `dummy` (`id`, `name`, `title`, `display_name`, `created_at`, `updated_at`, `cost`, `description`, `active`) VALUES
(1, 'MCA', '', 'Masters In Computer Applications', 0, 0, 0, 'Well again a time waster. Quite true', 0),
(2, 'MID', '', 'Master in Interior Designing', 0, 0, 0, 'Well just a dummy description! yeah dumb as well', 0),
(3, 'BID', '', 'Bachelor in Interior Designing', 0, 0, 0, 'Nothing just feelin awesome', 1),
(4, 'DID', '', 'Diploma in Interior Designing', 0, 0, 0, 'nothing just a bs ftw stuff', 0),
(5, 'BCA', '', 'Bachelor in Computer Applications', 0, 0, 0, 'Total time waster.', 1),
(6, 'BBA', 'bba', 'Bachelor''s of Business & Administration', 0, 0, 0, 'Something to do with teaching business.', 0),
(7, 'BBA', 'bba-1', 'Bachelor''s of Business & Administration', 0, 0, 0, 'Some description to describe the course', 0),
(8, 'BBA', 'bba-2', 'Bachelor''s of Business & Administration', 0, 0, 0, 'Some desc again', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dummy`
--
ALTER TABLE `dummy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dummy`
--
ALTER TABLE `dummy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
