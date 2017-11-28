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
-- Table structure for table `share_story`
--

CREATE TABLE `share_story` (
  `story_id` varchar(15) NOT NULL,
  `email` varchar(35) DEFAULT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `story` varchar(20000) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `share_story`
--

INSERT INTO `share_story` (`story_id`, `email`, `first_name`, `last_name`, `phone`, `story`, `date`) VALUES
('story/0001', 'jackson@gmail.com', 'uche', 'Ikeogu', '09087654334', '                            \r\n                              help me oooo  \r\n                            ', '2017-11-25 06:41:45'),
('story/002', 'chidibaby@gmail.com', 'uche', 'Ikeogu', '09087654334', 'this is a fucking case ooooo!\r\na woman assulting a man                            \r\n                                \r\n                            ', '2017-11-25 06:45:16'),
('story/003', NULL, NULL, NULL, NULL, '                            \r\n                                \r\n                            ', '2017-11-25 17:01:32'),
('story/004', NULL, NULL, NULL, NULL, '                            \r\n                                \r\n                            ', '2017-11-25 17:04:27'),
('story/005', NULL, NULL, NULL, NULL, '                            \r\n                                \r\n                            ', '2017-11-25 18:45:03'),
('story/006', 'kalu@gmail.com', 'emmanuel', 'Ikeogu', '09021805432', 'hello how are u                            \r\n                                \r\n                            ', '2017-11-26 06:05:30'),
('story/007', NULL, NULL, NULL, NULL, '                            \r\n                                \r\n                            ', '2017-11-26 21:44:10'),
('', 'jackson@gmail.com', 'ikeogu', 'Ikeogu', '09087654334', 'just testing                        \r\n                       ', '2017-11-27 12:20:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `share_story`
--
ALTER TABLE `share_story`
  ADD PRIMARY KEY (`story_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
