-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 03, 2023 at 05:50 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chillflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(40) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `fav` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `pwd`, `fav`) VALUES
('Admin@admin.com', 'Darpan', 'Food');

-- --------------------------------------------------------

--
-- Table structure for table `category1`
--

DROP TABLE IF EXISTS `category1`;
CREATE TABLE IF NOT EXISTS `category1` (
  `m_id` int NOT NULL,
  `s_pos` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `poster` varchar(70) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category1`
--

INSERT INTO `category1` (`m_id`, `s_pos`, `poster`) VALUES
(1, 's1', 'HP1.jpg'),
(2, 's2', 'HP2.jpg'),
(3, 's3', 'Jumanji.jpg'),
(4, 's4', 'Spider Man No Way Home.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `no` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(30) NOT NULL,
  `feedback` varchar(600) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`no`, `user_id`, `feedback`) VALUES
(1, 'drpnrn124@gmail.com', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

DROP TABLE IF EXISTS `header`;
CREATE TABLE IF NOT EXISTS `header` (
  `m_id` int NOT NULL,
  `s_pos` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `poster` varchar(70) NOT NULL,
  PRIMARY KEY (`m_id`),
  UNIQUE KEY `m_name` (`s_pos`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`m_id`, `s_pos`, `poster`) VALUES
(1, 's1', 'edr.jpg'),
(2, 's2', 'Extraction.jpg'),
(3, 's3', 'extraction 2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `id` int NOT NULL AUTO_INCREMENT,
  `m_id` int NOT NULL,
  `maker_id` varchar(30) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=182 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `m_id`, `maker_id`, `m_name`, `user_id`, `time`) VALUES
(166, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'ranarinkal1001@gmail.com', '2023-10-13'),
(53, 1, 'darpanrana@maker.com', 'Extraction', 'divya@gmail.com', '2023-10-09'),
(54, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'divya@gmail.com', '2023-10-09'),
(56, 1, 'darpanrana@maker.com', 'Extraction', 'ivy@gmail.com', '2023-10-09'),
(57, 1, 'darpanrana@maker.com', 'Extraction', 'ivy@gmail.com', '2023-10-09'),
(58, 1, 'darpanrana@maker.com', 'Extraction', 'ivy@gmail.com', '2023-10-09'),
(169, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'ranarinkal1001@gmail.com', '2023-10-13'),
(61, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'ivy@gmail.com', '2023-10-09'),
(64, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'ivy@gmail.com', '2023-10-09'),
(65, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'ivy@gmail.com', '2023-10-09'),
(171, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'drpnrn124@gmail.com', '2023-10-14'),
(69, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'ivy@gmail.com', '2023-10-09'),
(70, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'ivy@gmail.com', '2023-10-09'),
(71, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'ivy@gmail.com', '2023-10-09'),
(164, 1, 'darpanrana@maker.com', 'Extraction', 'ranarinkal1001@gmail.com', '2023-10-13'),
(123, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'drpnrn124@gmail.com', '2023-10-09'),
(122, 1, 'darpanrana@maker.com', 'Extraction', 'drpnrn124@gmail.com', '2023-10-09'),
(121, 1, 'darpanrana@maker.com', 'Extraction', 'drpnrn124@gmail.com', '2023-10-09'),
(117, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'darpan@gamil.com', '2023-10-09'),
(118, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'darpan@gamil.com', '2023-10-09'),
(119, 1, 'darpanrana@maker.com', 'Extraction', 'darpan@gamil.com', '2023-10-09'),
(120, 1, 'darpanrana@maker.com', 'Extraction', 'darpan@gamil.com', '2023-10-09'),
(165, 1, 'darpanrana@maker.com', 'Extraction', 'ranarinkal1001@gmail.com', '2023-10-13'),
(168, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'ranarinkal1001@gmail.com', '2023-10-13'),
(167, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'ranarinkal1001@gmail.com', '2023-10-13'),
(162, 1, 'darpanrana@maker.com', 'Extraction', 'drpnrn124@gmail.com', '2023-10-12'),
(173, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'drpnrn124@gmail.com', '2023-10-17'),
(172, 5, 'ssraja123@maker.com', 'War', 'drpnrn124@gmail.com', '2023-10-16'),
(170, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'drpnrn124@gmail.com', '2023-10-13'),
(163, 1, 'darpanrana@maker.com', 'Extraction', 'ranarinkal1001@gmail.com', '2023-10-13'),
(124, 2, '', 'Evil Dead Rise', 'drpnrn124@gmail.com', '2023-10-09'),
(125, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'drpnrn124@gmail.com', '2023-10-09'),
(126, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'drpnrn124@gmail.com', '2023-10-09'),
(127, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'drpnrn124@gmail.com', '2023-10-09'),
(128, 1, 'darpanrana@maker.com', 'Extraction', 'abc@gmail.com', '2023-10-09'),
(129, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'abc@gmail.com', '2023-10-09'),
(130, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'abc@gmail.com', '2023-10-09'),
(131, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'drpnrn124@gmail.com', '2023-10-10'),
(132, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'drpnrn124@gmail.com', '2023-10-10'),
(133, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'shivam12@gmail.com', '2023-10-10'),
(134, 1, 'darpanrana@maker.com', 'Extraction', 'shivam12@gmail.com', '2023-10-10'),
(135, 1, 'darpanrana@maker.com', 'Extraction', 'shivam12@gmail.com', '2023-10-10'),
(136, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'shivam12@gmail.com', '2023-10-10'),
(137, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'shivam12@gmail.com', '2023-10-10'),
(138, 1, 'darpanrana@maker.com', 'Extraction', 'drpnrn124@gmail.com', '2023-10-10'),
(139, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'drpnrn124@gmail.com', '2023-10-10'),
(140, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'demo4@gmail.com', '2023-10-10'),
(141, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'demo4@gmail.com', '2023-10-10'),
(142, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'drpnrn124@gmail.com', '2023-10-10'),
(143, 1, 'darpanrana@maker.com', 'Extraction', 'drpnrn124@gmail.com', '2023-10-10'),
(144, 3, 'ssraja123@maker.com', 'Fast X', 'drpnrn124@gmail.com', '2023-10-10'),
(145, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'drpnrn124@gmail.com', '2023-10-10'),
(146, 1, 'darpanrana@maker.com', 'Extraction', 'moma@gmail.com', '2023-10-10'),
(147, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'moma@gmail.com', '2023-10-10'),
(148, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'moma@gmail.com', '2023-10-10'),
(149, 1, 'darpanrana@maker.com', 'Extraction', 'drpnrn124@gmail.com', '2023-10-10'),
(150, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'archananayak@gmail.com', '2023-10-11'),
(151, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'archananayak@gmail.com', '2023-10-11'),
(152, 1, 'darpanrana@maker.com', 'Extraction', 'archananayak@gmail.com', '2023-10-11'),
(153, 3, 'ssraja123@maker.com', 'Fast X', 'archananayak@gmail.com', '2023-10-11'),
(154, 4, 'ssraja123@maker.com', 'Brahmastra', 'drpnrn124@gmail.com', '2023-10-12'),
(155, 4, 'ssraja123@maker.com', 'Brahmastra', 'drpnrn124@gmail.com', '2023-10-12'),
(156, 4, 'ssraja123@maker.com', 'Brahmastra', 'drpnrn124@gmail.com', '2023-10-12'),
(157, 1, 'darpanrana@maker.com', 'Extraction', 'drpnrn124@gmail.com', '2023-10-12'),
(158, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'drpnrn124@gmail.com', '2023-10-12'),
(159, 3, 'ssraja123@maker.com', 'Fast X', 'drpnrn124@gmail.com', '2023-10-12'),
(160, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'drpnrn124@gmail.com', '2023-10-12'),
(161, 3, 'ssraja123@maker.com', 'Fast X', 'drpnrn124@gmail.com', '2023-10-12'),
(174, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'drpnrn124@gmail.com', '2023-10-17'),
(175, 4, 'ssraja123@maker.com', 'Brahmastra', 'drpnrn124@gmail.com', '2023-10-18'),
(176, 3, 'ssraja123@maker.com', 'Fast X', 'drpnrn124@gmail.com', '2023-10-18'),
(177, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'drpnrn124@gmail.com', '2023-10-18'),
(178, 1, 'darpanrana@maker.com', 'Extraction', 'drpnrn124@gmail.com', '2023-10-18'),
(179, 2, 'darpanrana@maker.com', 'Evil Dead Rise', 'drpnrn124@gmail.com', '2023-10-29'),
(180, 1, 'darpanrana@maker.com', 'Extraction', 'drpnrn124@gmail.com', '2023-10-29'),
(181, 5, 'ssraja123@maker.com', 'War', 'drpnrn124@gmail.com', '2023-10-29');

-- --------------------------------------------------------

--
-- Table structure for table `maker`
--

DROP TABLE IF EXISTS `maker`;
CREATE TABLE IF NOT EXISTS `maker` (
  `id` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `fav` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `maker`
--

INSERT INTO `maker` (`id`, `name`, `pwd`, `fav`) VALUES
('darpanrana@maker.com', 'Darpan', 'rana@123', 'Food'),
('ssraja123@maker.com', 'S.S Rajamouli', 'rajamouli123', 'Traveling'),
('demo1@maker.com', 'Demo1', 'demo1', 'Food');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

DROP TABLE IF EXISTS `movie`;
CREATE TABLE IF NOT EXISTS `movie` (
  `m_id` int NOT NULL AUTO_INCREMENT,
  `maker_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `m_name` varchar(20) NOT NULL,
  `about` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `poster` varchar(70) NOT NULL,
  `src` varchar(70) NOT NULL,
  `category` varchar(10) NOT NULL,
  `year` int NOT NULL,
  `duration` varchar(10) NOT NULL,
  `rating` int NOT NULL,
  `subscription` tinyint(1) NOT NULL,
  PRIMARY KEY (`m_id`),
  UNIQUE KEY `m_name` (`m_name`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`m_id`, `maker_id`, `m_name`, `about`, `poster`, `src`, `category`, `year`, `duration`, `rating`, `subscription`) VALUES
(1, 'darpanrana@maker.com', 'Extraction', 'Oppenheimer is a 2023 epic biographical drama film written and directed by Christopher Nolan and starring Cillian Murphy as J. Robert Oppenheimer, the American theoretical physicist credited with beigns.', 'extraction 2.jpg', 'OPPENHEIMER.mp4', 'Action', 2020, '2h32m', 3, 0),
(2, 'darpanrana@maker.com', 'Evil Dead Rise', 'hello', 'edr.jpg', 'BRAHMĀSTRA.mp4', 'Horror', 2022, '2h23m', 1, 1),
(3, 'ssraja123@maker.com', 'Fast X', 'Fast And Furious 10 is a 2023 American action film directed by Louis Leterrier from a screenplay written by Dan Mazeau and Justin Lin, both of whom also co-wrote the story with Zach Dean. It is the sequel to F9.', 'Fast X.jpg', 'OPPENHEIMER.mp4', 'Action', 2019, '3h00m', 1, 0),
(4, 'ssraja123@maker.com', 'Brahmastra', 'The film was first conceived by Mukerji in 2011, with core elements being inspired by Indian history and stories he heard in his childhood. Its development was first revealed in July 2014 with a planned release for 2016, but its official announcement arrived in October 2017 revealing that the film would be titled Brahmāstra and would be a trilogy.', 'Brahmastra.jpg', 'BRAHMĀSTRA.mp4', 'Comedy', 2019, '2h38m', 4, 0),
(5, 'ssraja123@maker.com', 'War', 'War is a 2019 Indian Hindi-language action thriller film directed by Siddharth Anand and written by Anand, Aditya Chopra, Shridhar Raghavan and Abbas Tyrewala. Produced by Yash Raj Films, the film is the third installment in the YRF Spy Universe. It stars Hrithik Roshan and Tiger Shroff in lead roles with Vaani Kapoor, Ashutosh Rana and Anupriya Goenka playing supporting roles.', 'War.jpg', 'OPPENHEIMER.mp4', 'Action', 2019, '2h23m', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `movie_master`
--

DROP TABLE IF EXISTS `movie_master`;
CREATE TABLE IF NOT EXISTS `movie_master` (
  `m_id` int NOT NULL AUTO_INCREMENT,
  `act1` varchar(20) NOT NULL,
  `act2` varchar(20) NOT NULL,
  `act3` varchar(20) NOT NULL,
  `act4` varchar(20) NOT NULL,
  `act5` varchar(20) NOT NULL,
  `director` varchar(20) NOT NULL,
  `producer` varchar(20) NOT NULL,
  `writer` varchar(20) NOT NULL,
  `sound` varchar(20) NOT NULL,
  `editor` varchar(20) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `movie_master`
--

INSERT INTO `movie_master` (`m_id`, `act1`, `act2`, `act3`, `act4`, `act5`, `director`, `producer`, `writer`, `sound`, `editor`) VALUES
(1, 'example1', 'example2', 'example3', 'example4', 'example5', 'example6', 'example7', 'example8', 'example9', 'example10'),
(2, 'Lily Sullivan', 'Alyssa Sutherland', 'Morgan Davies', 'Gabrielle Echols', 'Nell Fisher', 'Lee Cronin', 'Bruce Campbell', 'Sam Raimi', 'Alani Lewis', 'Samuel Headey'),
(3, 'Mark Sinclair', 'Mayte Michelle', 'Tyrese Darnell', 'Christopher Brian', 'Jhon Cena', 'Louis Leterrier', 'Neal H. Moritz', 'Dan Mazeau', ' Brian Tyler', 'Dylan Highsmith'),
(4, 'Ranbir Kapoor', 'Alia Bhatt', 'Amitabh Bachchan', 'Nagarjun', 'Mouni Roy', 'Aryan Mukharji', 'Karan Johar', 'Aryan Mukharji', 'Pritam', 'Prakash Kurup'),
(5, 'Hrithik Roshan', 'Tiger Shroff', 'Vaani Kapoor', 'Ashutosh Rana', 'Anupriya Goenka', 'Siddharth Anand', 'Aditya Chopra', 'Aditya Chopra', 'Sanchit Balhara', 'Aarif Sheikh'),
(6, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
CREATE TABLE IF NOT EXISTS `packages` (
  `ptype` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `desc` varchar(20) NOT NULL,
  `price` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `days` varchar(20) NOT NULL,
  PRIMARY KEY (`ptype`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`ptype`, `desc`, `price`, `days`) VALUES
('Free', 'Access Limited Movie', '0', 'Free'),
('Basic', 'Access All Movies', '149', '30 Days'),
('Premium', 'Access All Movies', '299', '75 Days');

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

DROP TABLE IF EXISTS `pending`;
CREATE TABLE IF NOT EXISTS `pending` (
  `m_name` varchar(20) NOT NULL,
  `maker_id` varchar(30) NOT NULL,
  `about` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `poster` varchar(70) NOT NULL,
  `src` varchar(70) NOT NULL,
  `category` varchar(10) NOT NULL,
  `year` int NOT NULL,
  `duration` varchar(10) NOT NULL,
  `subscription` int NOT NULL,
  `act1` varchar(20) NOT NULL,
  `act2` varchar(20) NOT NULL,
  `act3` varchar(20) NOT NULL,
  `act4` varchar(20) NOT NULL,
  `act5` varchar(20) NOT NULL,
  `director` varchar(20) NOT NULL,
  `producer` varchar(20) NOT NULL,
  `writer` varchar(20) NOT NULL,
  `sound` varchar(20) NOT NULL,
  `editor` varchar(20) NOT NULL,
  PRIMARY KEY (`m_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recovery`
--

DROP TABLE IF EXISTS `recovery`;
CREATE TABLE IF NOT EXISTS `recovery` (
  `id` varchar(30) NOT NULL,
  `que` varchar(50) NOT NULL,
  `ans` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int NOT NULL,
  `cat1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cat2` varchar(20) NOT NULL,
  `cat3` varchar(20) NOT NULL,
  `cat4` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `cat1`, `cat2`, `cat3`, `cat4`) VALUES
(1, 'Action', 'Comedy', 'Horror', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `top`
--

DROP TABLE IF EXISTS `top`;
CREATE TABLE IF NOT EXISTS `top` (
  `m_id` int NOT NULL,
  `s_pos` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `poster` varchar(70) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `top`
--

INSERT INTO `top` (`m_id`, `s_pos`, `poster`) VALUES
(1, 's1', 'edr.jpg'),
(2, 's2', 'extraction 2.jpg'),
(3, 's3', 'Extraction.jpg'),
(4, 's4', 'Fast X.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trending`
--

DROP TABLE IF EXISTS `trending`;
CREATE TABLE IF NOT EXISTS `trending` (
  `m_id` int NOT NULL,
  `s_pos` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `poster` varchar(70) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `trending`
--

INSERT INTO `trending` (`m_id`, `s_pos`, `poster`) VALUES
(1, 's1', 'Jumanji.jpg'),
(2, 's2', 'HP1.jpg'),
(3, 's3', 'Spider Man No Way Home.jpg'),
(4, 's4', 'Fast X.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `fav` varchar(20) NOT NULL,
  `subscription` int NOT NULL,
  `exp` date NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `pwd`, `fav`, `subscription`, `exp`) VALUES
('Darpan', 'drpnrn124@gmail.com', '12345', 'Traveling', 0, '0000-00-00'),
('Ravi', 'ravi123@gmail.com', 'ravi123', 'Game', 0, '0000-00-00'),
('raj', 'raj123@gmail.com', 'raj123', 'Playing', 0, '0000-00-00'),
('Hitesh', 'hitesh3@gmail.com', 'hitesh', 'Cricket', 0, '0000-00-00'),
('Darpan', 'darpan@gamil.com', 'abcd', 'Football', 0, '0000-00-00'),
('Darpan', 'demo4@gmail.com', '12345', 'Swimming', 149, '2023-11-09'),
('Darpan', 'abc@gmail.com', 'qwer', 'Table Tennis', 149, '2023-11-08'),
('Virang', 'virang@gmail.com', '12345', 'Football', 0, '0000-00-00'),
('Divyanshi', 'divya@gmail.com', '1234', 'Game', 149, '2023-11-08'),
('demo1', 'demo2@gmail.com', 'demo1', 'Cricket', 299, '2023-12-22'),
('ivy', 'ivy@gmail.com', '1510', 'Cooking', 299, '2023-12-23'),
('Shivam', 'shivam12@gmail.com', 'shivam123', 'Travelling', 149, '2023-11-09'),
('Rinkal', 'ranarinkal1001@gmail.com', 'RANA1001', 'Eating', 0, '0000-00-00'),
('Archana Nayak', 'archananayak@gmail.com', 'archana121', 'Art', 0, '0000-00-00'),
('Demo5', 'demo5@gmail.com', 'demo5', 'Food', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

DROP TABLE IF EXISTS `year`;
CREATE TABLE IF NOT EXISTS `year` (
  `m_id` int NOT NULL,
  `s_pos` varchar(50) NOT NULL,
  `poster` varchar(200) NOT NULL,
  PRIMARY KEY (`s_pos`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`m_id`, `s_pos`, `poster`) VALUES
(1, 's1', 'Spider Man No Way Home.jpg'),
(2, 's2', 'Jumanji.jpg'),
(3, 's3', 'HP2.jpg'),
(4, 's4', 'HP1.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
