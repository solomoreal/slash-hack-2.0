-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 02:25 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slash_hack`
--

-- --------------------------------------------------------

--
-- Table structure for table `share_testimony`
--

CREATE TABLE `share_testimony` (
  `testimony_id` varchar(25) NOT NULL,
  `passport` varchar(30) NOT NULL,
  `email` varchar(70) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `phone` varchar(11) NOT NULL,
  `testimony` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `share_testimony`
--

INSERT INTO `share_testimony` (`testimony_id`, `passport`, `email`, `first_name`, `last_name`, `phone`, `testimony`, `date`) VALUES
('Testimony/001', '', '', '', NULL, '', '                        ', '2017-11-25 16:50:17'),
('Testimony/0002', '', 'chidibaby@gmail.com', 'jackson ', 'Cena', '09087654334', 'God bless Ngofor helpin g me out of this issue.                         ', '2017-11-25 16:52:50'),
('Testimony/002', '', 'jackson@gmail.com', 'emmanuel', NULL, '09087654334', ' this is the most lucrative help i have ever seen. thanks to the councilor i got , that brought me out of  distress                       ', '2017-11-25 16:57:19'),
('Testimony/003', '', '', '', NULL, '', '                        ', '2017-11-25 17:00:24'),
('Testimony/004', '', 'jackson@gmail.com', 'uche', NULL, '09021805432', 'fdjfddffdsaaas                        \r\n                       ', '2017-11-26 21:08:01'),
('Testimony/005', 'Testimony_005.jpeg', 'kalu@gmail.com', 'ikeogu', 'chidera', '09087654334', 'testimony time                        \r\n                       ', '2017-11-27 13:28:29'),
('Testimony/006', 'Testimony_006.jpeg', 'ikeogu322@gmail.com', 'ikeogu', 'Ikeogu', '11111111111', 'Body they sweet me                        \r\n                       ', '2017-11-27 13:31:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `share_testimony`
--
ALTER TABLE `share_testimony`
  ADD PRIMARY KEY (`testimony_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
