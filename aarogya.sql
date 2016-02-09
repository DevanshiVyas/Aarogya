-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2014 at 03:15 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aarogya`
--
CREATE DATABASE IF NOT EXISTS `aarogya` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aarogya`;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `locality` varchar(60) NOT NULL,
  `area` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pincode` int(11) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`a_id`, `locality`, `area`, `city`, `state`, `pincode`) VALUES
(1, '27/1, Bina Park Society,', 'Ghatlodia', 'Ahmedabad', 'Gujarat', 380061);

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
  `p_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`p_id`,`d_id`),
  KEY `d_id` (`d_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `d_id` int(11) NOT NULL,
  `h_id` int(11) DEFAULT NULL,
  `degree` varchar(20) NOT NULL,
  `digital_signature` text NOT NULL,
  `licence_number` varchar(30) NOT NULL,
  `visiting_days` varchar(30) NOT NULL,
  `visiting_time_morning` varchar(30) DEFAULT NULL,
  `visiting_time_evening` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`d_id`),
  KEY `h_id` (`h_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`d_id`, `h_id`, `degree`, `digital_signature`, `licence_number`, `visiting_days`, `visiting_time_morning`, `visiting_time_evening`) VALUES
(1, 1, 'hghg', 'fdgfg', 'fh', 'Monday to Saturday', '10am to 1pm', '6pm to 10pm');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_visit`
--

CREATE TABLE IF NOT EXISTS `doctor_visit` (
  `prescription_id` int(11) NOT NULL AUTO_INCREMENT,
  `d_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `episode_num` int(11) NOT NULL,
  `encounter_num` int(11) NOT NULL,
  `date` date NOT NULL,
  `visit_summary` text,
  PRIMARY KEY (`prescription_id`),
  KEY `p_id` (`p_id`),
  KEY `d_id` (`d_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=437 ;

--
-- Dumping data for table `doctor_visit`
--

INSERT INTO `doctor_visit` (`prescription_id`, `d_id`, `p_id`, `episode_num`, `encounter_num`, `date`, `visit_summary`) VALUES
(15, 1, 2, 1, 1, '2014-03-29', NULL),
(16, 1, 2, 1, 2, '2014-03-29', NULL),
(24, 1, 2, 1, 3, '2014-03-29', NULL),
(25, 1, 2, 2, 1, '2014-03-30', NULL),
(28, 1, 2, 2, 2, '2014-03-30', NULL),
(80, 1, 2, 2, 3, '2014-03-30', NULL),
(81, 1, 2, 2, 4, '2014-03-30', NULL),
(82, 1, 2, 2, 5, '2014-03-30', NULL),
(83, 1, 2, 2, 6, '2014-03-30', NULL),
(84, 1, 2, 2, 7, '2014-03-30', NULL),
(85, 1, 2, 2, 8, '2014-03-30', NULL),
(86, 1, 2, 2, 9, '2014-03-30', NULL),
(87, 1, 2, 2, 10, '2014-03-30', NULL),
(88, 1, 2, 2, 11, '2014-03-30', NULL),
(89, 1, 2, 2, 12, '2014-03-30', NULL),
(90, 1, 2, 2, 13, '2014-03-30', NULL),
(91, 1, 2, 2, 14, '2014-03-30', NULL),
(92, 1, 2, 2, 15, '2014-03-30', NULL),
(93, 1, 2, 2, 16, '2014-03-30', NULL),
(94, 1, 2, 2, 17, '2014-03-30', NULL),
(95, 1, 2, 2, 18, '2014-03-30', NULL),
(96, 1, 2, 2, 19, '2014-03-30', NULL),
(97, 1, 2, 2, 20, '2014-03-30', NULL),
(98, 1, 2, 2, 21, '2014-03-30', NULL),
(99, 1, 2, 2, 22, '2014-03-30', NULL),
(100, 1, 2, 2, 23, '2014-03-30', NULL),
(101, 1, 2, 2, 24, '2014-03-30', NULL),
(102, 1, 2, 2, 25, '2014-03-30', NULL),
(103, 1, 2, 2, 26, '2014-03-30', NULL),
(104, 1, 2, 2, 27, '2014-03-30', NULL),
(105, 1, 2, 2, 28, '2014-03-30', NULL),
(106, 1, 2, 2, 29, '2014-03-30', NULL),
(107, 1, 2, 2, 30, '2014-03-30', NULL),
(108, 1, 2, 2, 31, '2014-03-30', NULL),
(109, 1, 2, 2, 32, '2014-03-30', NULL),
(110, 1, 2, 2, 33, '2014-03-30', NULL),
(111, 1, 2, 2, 34, '2014-03-30', NULL),
(112, 1, 2, 2, 35, '2014-03-30', NULL),
(113, 1, 2, 2, 36, '2014-03-30', NULL),
(114, 1, 2, 2, 37, '2014-03-30', NULL),
(115, 1, 2, 2, 38, '2014-03-30', NULL),
(116, 1, 2, 2, 39, '2014-03-30', NULL),
(117, 1, 2, 2, 40, '2014-03-30', NULL),
(118, 1, 2, 2, 41, '2014-03-30', NULL),
(119, 1, 2, 2, 42, '2014-03-30', NULL),
(120, 1, 2, 2, 43, '2014-03-30', NULL),
(121, 1, 2, 2, 44, '2014-03-30', NULL),
(122, 1, 2, 2, 45, '2014-03-30', NULL),
(123, 1, 2, 2, 46, '2014-03-30', NULL),
(124, 1, 2, 2, 47, '2014-03-30', NULL),
(125, 1, 2, 2, 48, '2014-03-30', NULL),
(126, 1, 2, 2, 49, '2014-03-30', NULL),
(127, 1, 2, 2, 50, '2014-03-30', NULL),
(128, 1, 2, 2, 51, '2014-03-30', NULL),
(129, 1, 2, 2, 52, '2014-03-30', NULL),
(130, 1, 2, 2, 53, '2014-03-30', NULL),
(131, 1, 2, 2, 54, '2014-03-30', NULL),
(132, 1, 2, 2, 55, '2014-03-30', NULL),
(133, 1, 2, 2, 56, '2014-03-30', NULL),
(134, 1, 2, 2, 57, '2014-03-30', NULL),
(135, 1, 2, 2, 58, '2014-03-30', NULL),
(136, 1, 2, 2, 59, '2014-03-30', NULL),
(137, 1, 2, 2, 60, '2014-03-30', NULL),
(138, 1, 2, 2, 61, '2014-03-30', NULL),
(139, 1, 2, 2, 62, '2014-03-30', NULL),
(140, 1, 2, 2, 63, '2014-03-30', NULL),
(141, 1, 2, 2, 64, '2014-03-30', NULL),
(142, 1, 2, 2, 65, '2014-03-30', NULL),
(143, 1, 2, 2, 66, '2014-03-30', NULL),
(144, 1, 2, 2, 67, '2014-03-30', NULL),
(145, 1, 2, 2, 68, '2014-03-30', NULL),
(146, 1, 2, 2, 69, '2014-03-30', NULL),
(147, 1, 2, 2, 70, '2014-03-30', NULL),
(148, 1, 2, 2, 71, '2014-03-30', NULL),
(149, 1, 2, 2, 72, '2014-03-30', NULL),
(150, 1, 2, 2, 73, '2014-03-30', NULL),
(151, 1, 2, 2, 74, '2014-03-30', NULL),
(152, 1, 2, 2, 75, '2014-03-30', NULL),
(153, 1, 2, 2, 76, '2014-03-30', NULL),
(154, 1, 2, 2, 77, '2014-03-30', NULL),
(155, 1, 2, 2, 78, '2014-03-30', NULL),
(156, 1, 2, 2, 79, '2014-03-30', NULL),
(157, 1, 2, 2, 80, '2014-03-30', NULL),
(158, 1, 2, 2, 81, '2014-03-30', NULL),
(159, 1, 2, 2, 82, '2014-03-30', NULL),
(160, 1, 2, 2, 83, '2014-03-30', NULL),
(161, 1, 2, 2, 84, '2014-03-30', NULL),
(162, 1, 2, 2, 85, '2014-03-30', NULL),
(163, 1, 2, 2, 86, '2014-03-30', NULL),
(164, 1, 2, 2, 87, '2014-03-30', NULL),
(165, 1, 2, 2, 88, '2014-03-30', NULL),
(166, 1, 2, 2, 89, '2014-03-30', NULL),
(167, 1, 2, 2, 90, '2014-03-30', NULL),
(168, 1, 2, 2, 91, '2014-03-30', NULL),
(169, 1, 2, 2, 92, '2014-03-30', NULL),
(170, 1, 2, 2, 93, '2014-03-30', NULL),
(171, 1, 2, 2, 94, '2014-03-30', NULL),
(172, 1, 2, 2, 95, '2014-03-30', NULL),
(173, 1, 2, 2, 96, '2014-03-30', NULL),
(174, 1, 2, 2, 97, '2014-03-30', NULL),
(175, 1, 2, 2, 98, '2014-03-30', NULL),
(176, 1, 2, 2, 99, '2014-03-30', NULL),
(177, 1, 2, 2, 100, '2014-03-30', NULL),
(178, 1, 2, 2, 101, '2014-03-30', NULL),
(179, 1, 2, 2, 102, '2014-03-30', NULL),
(180, 1, 2, 2, 103, '2014-03-30', NULL),
(181, 1, 2, 2, 104, '2014-03-30', NULL),
(182, 1, 2, 2, 105, '2014-03-30', NULL),
(183, 1, 2, 2, 106, '2014-03-30', NULL),
(184, 1, 2, 2, 107, '2014-03-30', NULL),
(185, 1, 2, 2, 108, '2014-03-30', NULL),
(186, 1, 2, 2, 109, '2014-03-30', NULL),
(187, 1, 2, 2, 110, '2014-03-30', NULL),
(188, 1, 2, 2, 111, '2014-03-30', NULL),
(189, 1, 2, 2, 112, '2014-03-30', NULL),
(190, 1, 2, 2, 113, '2014-03-30', NULL),
(191, 1, 2, 2, 114, '2014-03-30', NULL),
(192, 1, 2, 2, 115, '2014-03-30', NULL),
(193, 1, 2, 2, 116, '2014-03-30', NULL),
(194, 1, 2, 2, 117, '2014-03-30', NULL),
(195, 1, 2, 2, 118, '2014-03-30', NULL),
(196, 1, 2, 2, 119, '2014-03-30', NULL),
(197, 1, 2, 2, 120, '2014-03-30', NULL),
(198, 1, 2, 2, 121, '2014-03-30', NULL),
(199, 1, 2, 2, 122, '2014-03-30', NULL),
(200, 1, 2, 2, 123, '2014-03-30', NULL),
(201, 1, 2, 2, 124, '2014-03-30', NULL),
(202, 1, 2, 2, 125, '2014-03-30', NULL),
(203, 1, 2, 2, 126, '2014-03-30', NULL),
(204, 1, 2, 2, 127, '2014-03-30', NULL),
(205, 1, 2, 2, 128, '2014-03-30', NULL),
(206, 1, 2, 2, 129, '2014-03-30', NULL),
(207, 1, 2, 2, 130, '2014-03-30', NULL),
(208, 1, 2, 2, 131, '2014-03-30', NULL),
(209, 1, 2, 2, 132, '2014-03-30', NULL),
(210, 1, 2, 2, 133, '2014-03-30', NULL),
(211, 1, 2, 2, 134, '2014-03-30', NULL),
(212, 1, 2, 2, 135, '2014-03-30', NULL),
(213, 1, 2, 2, 136, '2014-03-30', NULL),
(214, 1, 2, 2, 137, '2014-03-30', NULL),
(215, 1, 2, 2, 138, '2014-03-30', NULL),
(216, 1, 2, 2, 139, '2014-03-30', NULL),
(217, 1, 2, 2, 140, '2014-03-30', NULL),
(218, 1, 2, 2, 141, '2014-03-30', NULL),
(219, 1, 2, 2, 142, '2014-03-30', NULL),
(220, 1, 2, 2, 143, '2014-03-30', NULL),
(221, 1, 2, 2, 144, '2014-03-30', NULL),
(222, 1, 2, 2, 145, '2014-03-30', NULL),
(223, 1, 2, 2, 146, '2014-03-30', NULL),
(224, 1, 2, 2, 147, '2014-03-30', NULL),
(225, 1, 2, 2, 148, '2014-03-30', NULL),
(226, 1, 2, 2, 149, '2014-03-30', NULL),
(227, 1, 2, 2, 150, '2014-03-30', NULL),
(228, 1, 2, 2, 151, '2014-03-30', NULL),
(229, 1, 2, 2, 152, '2014-03-30', NULL),
(230, 1, 2, 2, 153, '2014-03-30', NULL),
(231, 1, 2, 2, 154, '2014-03-30', NULL),
(232, 1, 2, 2, 155, '2014-03-30', NULL),
(233, 1, 2, 2, 156, '2014-03-30', NULL),
(234, 1, 2, 2, 157, '2014-03-30', NULL),
(235, 1, 2, 2, 158, '2014-03-30', NULL),
(236, 1, 2, 2, 159, '2014-03-30', NULL),
(237, 1, 2, 2, 160, '2014-03-30', NULL),
(238, 1, 2, 2, 161, '2014-03-30', NULL),
(239, 1, 2, 2, 162, '2014-03-30', NULL),
(240, 1, 2, 2, 163, '2014-03-30', NULL),
(241, 1, 2, 2, 164, '2014-03-30', NULL),
(242, 1, 2, 2, 165, '2014-03-30', NULL),
(243, 1, 2, 2, 166, '2014-03-30', NULL),
(244, 1, 2, 2, 167, '2014-03-30', NULL),
(245, 1, 2, 2, 168, '2014-03-30', NULL),
(246, 1, 2, 2, 169, '2014-03-30', NULL),
(247, 1, 2, 2, 170, '2014-03-30', NULL),
(248, 1, 2, 2, 171, '2014-03-30', NULL),
(249, 1, 2, 2, 172, '2014-03-30', NULL),
(250, 1, 2, 2, 173, '2014-03-30', NULL),
(251, 1, 2, 2, 174, '2014-03-30', NULL),
(252, 1, 2, 2, 175, '2014-03-30', NULL),
(253, 1, 2, 2, 176, '2014-03-30', NULL),
(254, 1, 2, 2, 177, '2014-03-30', NULL),
(255, 1, 2, 2, 178, '2014-03-30', NULL),
(256, 1, 2, 2, 179, '2014-03-30', NULL),
(257, 1, 2, 2, 180, '2014-03-30', NULL),
(258, 1, 2, 2, 181, '2014-03-30', NULL),
(259, 1, 2, 2, 182, '2014-03-30', NULL),
(260, 1, 2, 2, 183, '2014-03-30', NULL),
(264, 1, 2, 2, 187, '2014-03-30', NULL),
(267, 1, 2, 2, 190, '2014-03-30', NULL),
(268, 1, 2, 2, 191, '2014-03-30', NULL),
(269, 1, 2, 2, 192, '2014-03-30', NULL),
(270, 1, 2, 2, 193, '2014-03-30', NULL),
(271, 1, 2, 2, 194, '2014-03-30', NULL),
(272, 1, 2, 2, 195, '2014-03-30', NULL),
(276, 1, 2, 2, 196, '2014-03-30', NULL),
(285, 1, 2, 4, 1, '2014-03-31', NULL),
(286, 1, 2, 4, 2, '2014-03-31', NULL),
(287, 1, 2, 4, 3, '2014-03-31', NULL),
(288, 1, 2, 4, 4, '2014-03-31', NULL),
(289, 1, 2, 4, 5, '2014-03-31', NULL),
(290, 1, 2, 4, 6, '2014-03-31', NULL),
(291, 1, 2, 4, 7, '2014-03-31', NULL),
(292, 1, 2, 4, 8, '2014-03-31', NULL),
(293, 1, 2, 4, 9, '2014-03-31', NULL),
(294, 1, 2, 4, 10, '2014-03-31', NULL),
(295, 1, 2, 4, 11, '2014-03-31', NULL),
(296, 1, 2, 4, 12, '2014-03-31', NULL),
(298, 1, 2, 4, 13, '2014-03-31', 'This is a faad prescr. hahaha fhgjg dgd jghkkkkkkkkkkkkkkkkkkkkkkkkkkkk jgjjg . see you soon. good bye. miss you.'),
(299, 1, 2, 4, 14, '2014-03-31', 'This is a faad prescr. hahaha fhgjg dgd jghkkkkkkkkkkkkkkkkkkkkkkkkkkkk jgjjg . see you soon. good bye. miss you.'),
(300, 1, 2, 4, 15, '2014-03-31', 'This is a faad prescr. hahaha fhgjg dgd jghkkkkkkkkkkkkkkkkkkkkkkkkkkkk jgjjg . see you soon. good bye. miss you.'),
(301, 1, 2, 4, 16, '2014-03-31', 'This is a faad prescr. hahaha fhgjg dgd jghkkkkkkkkkkkkkkkkkkkkkkkkkkkk jgjjg . see you soon. good bye. miss you.'),
(302, 1, 2, 4, 17, '2014-03-31', 'This is a faad prescr. hahaha fhgjg dgd jghkkkkkkkkkkkkkkkkkkkkkkkkkkkk jgjjg . see you soon. good bye. miss you.'),
(303, 1, 2, 4, 18, '2014-03-31', 'This is a faad prescr. hahaha fhgjg dgd jghkkkkkkkkkkkkkkkkkkkkkkkkkkkk jgjjg . see you soon. good bye. miss you.'),
(304, 1, 2, 4, 19, '2014-03-31', 'This is a faad prescr. hahaha fhgjg dgd jghkkkkkkkkkkkkkkkkkkkkkkkkkkkk jgjjg . see you soon. good bye. miss you.'),
(305, 1, 2, 4, 20, '2014-03-31', 'This is a faad prescr. hahaha fhgjg dgd jghkkkkkkkkkkkkkkkkkkkkkkkkkkkk jgjjg . see you soon. good bye. miss you.'),
(306, 1, 2, 4, 21, '2014-03-31', 'This is a faad prescr. hahaha fhgjg dgd jghkkkkkkkkkkkkkkkkkkkkkkkkkkkk jgjjg . see you soon. good bye. miss you.'),
(307, 1, 2, 4, 22, '2014-03-31', 'This is a faad prescr. hahaha fhgjg dgd jghkkkkkkkkkkkkkkkkkkkkkkkkkkkk jgjjg . see you soon. good bye. miss you.'),
(308, 1, 2, 4, 23, '2014-03-31', 'This is a faad prescr. hahaha fhgjg dgd jghkkkkkkkkkkkkkkkkkkkkkkkkkkkk jgjjg . see you soon. good bye. miss you.'),
(314, 1, 2, 4, 24, '2014-03-31', 'This is a faad prescr. hahaha fhgjg dgd  see you soon. good bye. miss you.'),
(315, 1, 2, 4, 25, '2014-03-31', 'This is a faad prescr. hahaha fhgjg dgd  see you soon. good bye. miss you.'),
(316, 1, 2, 4, 26, '2014-03-31', 'This is a faad prescr. hahaha fhgjg dgd  see you soon. good bye. miss you.'),
(317, 1, 2, 4, 27, '2014-03-31', 'This is a faad prescr. hahaha fhgjg dgd  see you soon. good bye. miss you.'),
(318, 1, 2, 4, 28, '2014-03-31', 'This is a faad prescr. hahaha fhgjg dgd  see you soon. good bye. miss you.'),
(319, 1, 2, 4, 29, '2014-03-31', 'This is a faad prescr. hahaha fhgjg dgd  see you soon. good bye. miss you.'),
(320, 1, 2, 4, 30, '2014-03-31', 'This is a faad prescr. hahaha fhgjg dgd  see you soon. good bye. miss you.'),
(323, 1, 2, 4, 31, '2014-03-31', 'This is a faad prescr. hahaha fhgjg dgd  see you soon. good bye. miss you.'),
(355, 1, 2, 4, 32, '2014-03-31', 'This is a faad prescr. hahaha fhgjg dgd  see you soon. good bye. miss you.'),
(398, 1, 2, 5, 1, '2014-04-01', 'sdd'),
(399, 1, 2, 5, 2, '2014-04-01', 'sdd'),
(403, 1, 2, 5, 3, '2014-04-01', 'zxcz'),
(426, 1, 2, 5, 1, '2014-04-02', 'For cold'),
(429, 1, 2, 5, 2, '2014-04-02', ''),
(431, 1, 2, 5, 3, '2014-04-02', 'sd'),
(432, 1, 2, 5, 4, '2014-04-02', ''),
(434, 1, 2, 5, 5, '2014-04-02', 'jgjcxgcj'),
(435, 1, 0, 1, 1, '2014-04-03', ''),
(436, 1, 2, 6, 1, '2014-04-03', '');

-- --------------------------------------------------------

--
-- Table structure for table `email_password`
--

CREATE TABLE IF NOT EXISTS `email_password` (
  `email_id` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `person_id` int(11) DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`email_id`),
  KEY `person_id` (`person_id`),
  KEY `store_id` (`store_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_password`
--

INSERT INTO `email_password` (`email_id`, `password`, `person_id`, `store_id`) VALUES
('a@a.com', 'as', 2, NULL),
('p@y.com', 'we', 1, NULL),
('v@g.com', 'vipul', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `haematology`
--

CREATE TABLE IF NOT EXISTS `haematology` (
  `lab_report_id` int(11) NOT NULL,
  `count_id` int(11) NOT NULL,
  `result` varchar(20) NOT NULL,
  PRIMARY KEY (`lab_report_id`,`count_id`),
  KEY `haematology_ibfk_2` (`count_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `h_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `a_id` int(11) NOT NULL,
  `licence_number` varchar(30) NOT NULL,
  PRIMARY KEY (`h_id`),
  KEY `a_id` (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`h_id`, `name`, `a_id`, `licence_number`) VALUES
(1, 'Aarogya hospital', 1, 'dfgfg');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_contact_number`
--

CREATE TABLE IF NOT EXISTS `hospital_contact_number` (
  `h_id` int(11) NOT NULL,
  `contact_number` bigint(11) NOT NULL,
  PRIMARY KEY (`h_id`,`contact_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital_contact_number`
--

INSERT INTO `hospital_contact_number` (`h_id`, `contact_number`) VALUES
(1, 7926420466),
(1, 7927662466),
(1, 7930125992);

-- --------------------------------------------------------

--
-- Table structure for table `inventory_non_otc`
--

CREATE TABLE IF NOT EXISTS `inventory_non_otc` (
  `ms_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `price` double(4,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`ms_id`,`m_id`),
  KEY `m_id` (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_otc`
--

CREATE TABLE IF NOT EXISTS `inventory_otc` (
  `ms_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `price` double(4,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`ms_id`,`p_id`),
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lab_report`
--

CREATE TABLE IF NOT EXISTS `lab_report` (
  `report_id` int(11) NOT NULL AUTO_INCREMENT,
  `pathologist_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `reffered_doc_id` int(11) DEFAULT NULL,
  `reffered_doc_name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `test_type_id` int(11) NOT NULL,
  `Summary` longtext,
  PRIMARY KEY (`report_id`),
  KEY `pathologist_id` (`pathologist_id`),
  KEY `patient_id` (`patient_id`),
  KEY `reffered_doc_id` (`reffered_doc_id`),
  KEY `test_type_id` (`test_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lab_test_count`
--

CREATE TABLE IF NOT EXISTS `lab_test_count` (
  `count_id` int(11) NOT NULL AUTO_INCREMENT,
  `lab_test_type_id` int(11) NOT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `unit` varchar(15) DEFAULT NULL,
  `reference` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`count_id`),
  KEY `lab_test_type_id` (`lab_test_type_id`),
  KEY `sub_cat_id` (`sub_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `lab_test_count`
--

INSERT INTO `lab_test_count` (`count_id`, `lab_test_type_id`, `sub_cat_id`, `name`, `unit`, `reference`) VALUES
(1, 1, 1, 'Haemoglobin', 'gm%', '11.5 - 16.0'),
(2, 1, 1, 'Total Leucocyte Count', '/cumm', '5000 - 11000'),
(3, 1, 2, 'Neutrophils', '%', '40 - 75'),
(4, 1, 2, 'Lymphocytes', '%', 'Upto 60'),
(5, 1, 2, 'Eosinophils', '%', '01 - 06'),
(6, 1, 2, 'Monocytes', '%', '02 - 10'),
(7, 1, 2, 'Basophils', '%', '00 - 01'),
(8, 1, 2, 'R.B.C Count', 'mill/cumm', '4.5 - 6.5'),
(9, 1, 2, 'Packed Cell Volume (PCV)', '%', '40 - 54'),
(10, 1, 2, 'MCV', 'fl', '80 - 100'),
(11, 1, 2, 'MCH', 'pg', '27 - 33'),
(12, 1, 2, 'MCHC', 'gm%', '31 - 37'),
(13, 1, 2, 'Platelet Count', 'lacs/cumm', '1.5 - 4.5'),
(14, 1, 2, 'Malaria Parasites', NULL, NULL),
(15, 1, 2, 'E.S.R (Westergrens)', 'mm/1st hr.', '0 - 15');

-- --------------------------------------------------------

--
-- Table structure for table `lab_test_sub_categories`
--

CREATE TABLE IF NOT EXISTS `lab_test_sub_categories` (
  `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`sub_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `lab_test_sub_categories`
--

INSERT INTO `lab_test_sub_categories` (`sub_cat_id`, `name`) VALUES
(1, 'Complete Blood Count'),
(2, 'Differential Leucocyte Count'),
(3, 'Physical Examination'),
(4, 'Chemical Examination'),
(5, 'Microscopic Examination');

-- --------------------------------------------------------

--
-- Table structure for table `lab_test_type`
--

CREATE TABLE IF NOT EXISTS `lab_test_type` (
  `lab_test_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`lab_test_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `lab_test_type`
--

INSERT INTO `lab_test_type` (`lab_test_type_id`, `name`) VALUES
(1, 'haematology'),
(2, 'urine_routine'),
(3, 'liver_function_ test'),
(4, 'kidney_function_test(KFT)'),
(5, 'immunology-serology'),
(6, 'microbiology');

-- --------------------------------------------------------

--
-- Table structure for table `medical_store`
--

CREATE TABLE IF NOT EXISTS `medical_store` (
  `ms_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `a_id` int(11) NOT NULL,
  `licence_number` varchar(30) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  PRIMARY KEY (`ms_id`),
  UNIQUE KEY `email_id` (`email_id`),
  KEY `a_id` (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `ida_code` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mrp` double(4,2) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`m_id`, `ida_code`, `name`, `mrp`) VALUES
(1, '1', 'ABC', 20.00),
(2, '2', 'AXY', 12.00),
(3, '3', 'CYZ', 34.00),
(4, '4', 'DAAL', 23.00),
(5, '5', 'DARK', 87.00),
(6, '6', 'DEST', 23.00);

-- --------------------------------------------------------

--
-- Table structure for table `med_prescribed`
--

CREATE TABLE IF NOT EXISTS `med_prescribed` (
  `prescription_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `dosage` varchar(30) NOT NULL,
  PRIMARY KEY (`prescription_id`,`m_id`),
  KEY `m_id` (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `med_prescribed`
--

INSERT INTO `med_prescribed` (`prescription_id`, `m_id`, `quantity`, `dosage`) VALUES
(15, 4, 0, '0'),
(24, 1, 16, '1 Tablet per day'),
(25, 1, 0, 'SELECT'),
(25, 3, 0, 'SELECT'),
(25, 4, 0, 'SELECT'),
(28, 1, 0, 'SELECT'),
(28, 3, 0, 'SELECT'),
(80, 1, 0, 'SELECT'),
(80, 3, 0, 'SELECT'),
(81, 3, 0, 'SELECT'),
(81, 4, 0, 'SELECT'),
(81, 5, 0, 'SELECT'),
(82, 3, 0, 'SELECT'),
(82, 4, 0, 'SELECT'),
(82, 5, 0, 'SELECT'),
(83, 3, 0, 'SELECT'),
(83, 4, 0, 'SELECT'),
(83, 5, 0, 'SELECT'),
(84, 3, 0, 'SELECT'),
(84, 4, 0, 'SELECT'),
(84, 5, 0, 'SELECT'),
(85, 3, 0, 'SELECT'),
(85, 4, 0, 'SELECT'),
(85, 5, 0, 'SELECT'),
(86, 3, 0, 'SELECT'),
(86, 4, 0, 'SELECT'),
(86, 5, 0, 'SELECT'),
(87, 3, 0, 'SELECT'),
(87, 4, 0, 'SELECT'),
(87, 5, 0, 'SELECT'),
(88, 3, 0, 'SELECT'),
(88, 4, 0, 'SELECT'),
(88, 5, 0, 'SELECT'),
(89, 3, 0, 'SELECT'),
(89, 4, 0, 'SELECT'),
(89, 5, 0, 'SELECT'),
(90, 3, 0, 'SELECT'),
(90, 4, 0, 'SELECT'),
(90, 5, 0, 'SELECT'),
(91, 3, 0, 'SELECT'),
(91, 4, 0, 'SELECT'),
(91, 5, 0, 'SELECT'),
(92, 3, 0, 'SELECT'),
(92, 4, 0, 'SELECT'),
(92, 5, 0, 'SELECT'),
(93, 3, 0, 'SELECT'),
(93, 4, 0, 'SELECT'),
(93, 5, 0, 'SELECT'),
(94, 3, 0, 'SELECT'),
(94, 4, 0, 'SELECT'),
(94, 5, 0, 'SELECT'),
(95, 3, 0, 'SELECT'),
(95, 4, 0, 'SELECT'),
(95, 5, 0, 'SELECT'),
(96, 3, 0, 'SELECT'),
(96, 4, 0, 'SELECT'),
(96, 5, 0, 'SELECT'),
(97, 3, 0, 'SELECT'),
(97, 4, 0, 'SELECT'),
(97, 5, 0, 'SELECT'),
(98, 3, 0, 'SELECT'),
(98, 4, 0, 'SELECT'),
(98, 5, 0, 'SELECT'),
(99, 3, 0, 'SELECT'),
(99, 4, 0, 'SELECT'),
(99, 5, 0, 'SELECT'),
(100, 3, 0, 'SELECT'),
(100, 4, 0, 'SELECT'),
(100, 5, 0, 'SELECT'),
(101, 3, 0, 'SELECT'),
(101, 4, 0, 'SELECT'),
(101, 5, 0, 'SELECT'),
(102, 3, 0, 'SELECT'),
(102, 4, 0, 'SELECT'),
(102, 5, 0, 'SELECT'),
(103, 3, 0, 'SELECT'),
(103, 4, 0, 'SELECT'),
(103, 5, 0, 'SELECT'),
(104, 3, 0, 'SELECT'),
(104, 4, 0, 'SELECT'),
(104, 5, 0, 'SELECT'),
(105, 3, 0, 'SELECT'),
(105, 4, 0, 'SELECT'),
(105, 5, 0, 'SELECT'),
(106, 3, 0, 'SELECT'),
(106, 4, 0, 'SELECT'),
(106, 5, 0, 'SELECT'),
(107, 3, 0, 'SELECT'),
(107, 4, 0, 'SELECT'),
(107, 5, 0, 'SELECT'),
(108, 3, 0, 'SELECT'),
(108, 4, 0, 'SELECT'),
(108, 5, 0, 'SELECT'),
(109, 3, 0, 'SELECT'),
(109, 4, 0, 'SELECT'),
(109, 5, 0, 'SELECT'),
(110, 3, 0, 'SELECT'),
(110, 4, 0, 'SELECT'),
(110, 5, 0, 'SELECT'),
(111, 3, 0, 'SELECT'),
(111, 4, 0, 'SELECT'),
(111, 5, 0, 'SELECT'),
(112, 3, 0, 'SELECT'),
(112, 4, 0, 'SELECT'),
(112, 5, 0, 'SELECT'),
(113, 3, 0, 'SELECT'),
(113, 4, 0, 'SELECT'),
(113, 5, 0, 'SELECT'),
(114, 3, 0, 'SELECT'),
(114, 4, 0, 'SELECT'),
(114, 5, 0, 'SELECT'),
(115, 3, 0, 'SELECT'),
(115, 4, 0, 'SELECT'),
(115, 5, 0, 'SELECT'),
(116, 3, 0, 'SELECT'),
(116, 4, 0, 'SELECT'),
(116, 5, 0, 'SELECT'),
(117, 3, 0, 'SELECT'),
(117, 4, 0, 'SELECT'),
(117, 5, 0, 'SELECT'),
(118, 3, 0, 'SELECT'),
(118, 4, 0, 'SELECT'),
(118, 5, 0, 'SELECT'),
(119, 3, 0, 'SELECT'),
(119, 4, 0, 'SELECT'),
(119, 5, 0, 'SELECT'),
(120, 3, 0, 'SELECT'),
(120, 4, 0, 'SELECT'),
(120, 5, 0, 'SELECT'),
(121, 3, 0, 'SELECT'),
(121, 4, 0, 'SELECT'),
(121, 5, 0, 'SELECT'),
(122, 3, 0, 'SELECT'),
(122, 4, 0, 'SELECT'),
(122, 5, 0, 'SELECT'),
(123, 3, 0, 'SELECT'),
(123, 4, 0, 'SELECT'),
(123, 5, 0, 'SELECT'),
(124, 3, 0, 'SELECT'),
(124, 4, 0, 'SELECT'),
(124, 5, 0, 'SELECT'),
(125, 3, 0, 'SELECT'),
(125, 4, 0, 'SELECT'),
(125, 5, 0, 'SELECT'),
(126, 3, 0, 'SELECT'),
(126, 4, 0, 'SELECT'),
(126, 5, 0, 'SELECT'),
(127, 3, 0, 'SELECT'),
(127, 4, 0, 'SELECT'),
(127, 5, 0, 'SELECT'),
(128, 3, 0, 'SELECT'),
(128, 4, 0, 'SELECT'),
(128, 5, 0, 'SELECT'),
(129, 3, 0, 'SELECT'),
(129, 4, 0, 'SELECT'),
(129, 5, 0, 'SELECT'),
(130, 3, 0, 'SELECT'),
(130, 4, 0, 'SELECT'),
(130, 5, 0, 'SELECT'),
(131, 3, 0, 'SELECT'),
(131, 4, 0, 'SELECT'),
(131, 5, 0, 'SELECT'),
(132, 3, 0, 'SELECT'),
(132, 4, 0, 'SELECT'),
(132, 5, 0, 'SELECT'),
(133, 3, 0, 'SELECT'),
(133, 4, 0, 'SELECT'),
(133, 5, 0, 'SELECT'),
(134, 3, 0, 'SELECT'),
(134, 4, 0, 'SELECT'),
(134, 5, 0, 'SELECT'),
(135, 3, 0, 'SELECT'),
(135, 4, 0, 'SELECT'),
(135, 5, 0, 'SELECT'),
(136, 3, 0, 'SELECT'),
(136, 4, 0, 'SELECT'),
(136, 5, 0, 'SELECT'),
(137, 3, 0, 'SELECT'),
(137, 4, 0, 'SELECT'),
(137, 5, 0, 'SELECT'),
(138, 3, 0, 'SELECT'),
(138, 4, 0, 'SELECT'),
(138, 5, 0, 'SELECT'),
(139, 3, 0, 'SELECT'),
(139, 4, 0, 'SELECT'),
(139, 5, 0, 'SELECT'),
(140, 3, 0, 'SELECT'),
(140, 4, 0, 'SELECT'),
(140, 5, 0, 'SELECT'),
(141, 3, 0, 'SELECT'),
(141, 4, 0, 'SELECT'),
(141, 5, 0, 'SELECT'),
(142, 3, 0, 'SELECT'),
(142, 4, 0, 'SELECT'),
(142, 5, 0, 'SELECT'),
(143, 3, 0, 'SELECT'),
(143, 4, 0, 'SELECT'),
(143, 5, 0, 'SELECT'),
(144, 3, 0, 'SELECT'),
(144, 4, 0, 'SELECT'),
(144, 5, 0, 'SELECT'),
(145, 3, 0, 'SELECT'),
(145, 4, 0, 'SELECT'),
(145, 5, 0, 'SELECT'),
(146, 3, 0, 'SELECT'),
(146, 4, 0, 'SELECT'),
(146, 5, 0, 'SELECT'),
(147, 3, 0, 'SELECT'),
(147, 4, 0, 'SELECT'),
(147, 5, 0, 'SELECT'),
(148, 3, 0, 'SELECT'),
(148, 4, 0, 'SELECT'),
(148, 5, 0, 'SELECT'),
(149, 3, 0, 'SELECT'),
(149, 4, 0, 'SELECT'),
(149, 5, 0, 'SELECT'),
(150, 3, 0, 'SELECT'),
(150, 4, 0, 'SELECT'),
(150, 5, 0, 'SELECT'),
(151, 3, 0, 'SELECT'),
(151, 4, 0, 'SELECT'),
(151, 5, 0, 'SELECT'),
(152, 3, 0, 'SELECT'),
(152, 4, 0, 'SELECT'),
(152, 5, 0, 'SELECT'),
(153, 3, 0, 'SELECT'),
(153, 4, 0, 'SELECT'),
(153, 5, 0, 'SELECT'),
(154, 3, 0, 'SELECT'),
(154, 4, 0, 'SELECT'),
(154, 5, 0, 'SELECT'),
(155, 3, 0, 'SELECT'),
(155, 4, 0, 'SELECT'),
(155, 5, 0, 'SELECT'),
(156, 3, 0, 'SELECT'),
(156, 4, 0, 'SELECT'),
(156, 5, 0, 'SELECT'),
(157, 3, 0, 'SELECT'),
(157, 4, 0, 'SELECT'),
(157, 5, 0, 'SELECT'),
(158, 3, 0, 'SELECT'),
(158, 4, 0, 'SELECT'),
(158, 5, 0, 'SELECT'),
(159, 3, 0, 'SELECT'),
(159, 4, 0, 'SELECT'),
(159, 5, 0, 'SELECT'),
(160, 3, 0, 'SELECT'),
(160, 4, 0, 'SELECT'),
(160, 5, 0, 'SELECT'),
(161, 3, 0, 'SELECT'),
(161, 4, 0, 'SELECT'),
(161, 5, 0, 'SELECT'),
(162, 3, 0, 'SELECT'),
(162, 4, 0, 'SELECT'),
(162, 5, 0, 'SELECT'),
(163, 3, 0, 'SELECT'),
(163, 4, 0, 'SELECT'),
(163, 5, 0, 'SELECT'),
(164, 3, 0, 'SELECT'),
(164, 4, 0, 'SELECT'),
(164, 5, 0, 'SELECT'),
(165, 3, 0, 'SELECT'),
(165, 4, 0, 'SELECT'),
(165, 5, 0, 'SELECT'),
(166, 3, 0, 'SELECT'),
(166, 4, 0, 'SELECT'),
(166, 5, 0, 'SELECT'),
(167, 3, 0, 'SELECT'),
(167, 4, 0, 'SELECT'),
(167, 5, 0, 'SELECT'),
(168, 3, 0, 'SELECT'),
(168, 4, 0, 'SELECT'),
(168, 5, 0, 'SELECT'),
(169, 3, 0, 'SELECT'),
(169, 4, 0, 'SELECT'),
(169, 5, 0, 'SELECT'),
(170, 3, 0, 'SELECT'),
(170, 4, 0, 'SELECT'),
(170, 5, 0, 'SELECT'),
(171, 3, 0, 'SELECT'),
(171, 4, 0, 'SELECT'),
(171, 5, 0, 'SELECT'),
(172, 3, 0, 'SELECT'),
(172, 4, 0, 'SELECT'),
(172, 5, 0, 'SELECT'),
(173, 3, 0, 'SELECT'),
(173, 4, 0, 'SELECT'),
(173, 5, 0, 'SELECT'),
(174, 3, 0, 'SELECT'),
(174, 4, 0, 'SELECT'),
(174, 5, 0, 'SELECT'),
(175, 3, 0, 'SELECT'),
(175, 4, 0, 'SELECT'),
(175, 5, 0, 'SELECT'),
(176, 3, 0, 'SELECT'),
(176, 4, 0, 'SELECT'),
(176, 5, 0, 'SELECT'),
(177, 3, 0, 'SELECT'),
(177, 4, 0, 'SELECT'),
(177, 5, 0, 'SELECT'),
(178, 3, 0, 'SELECT'),
(178, 4, 0, 'SELECT'),
(178, 5, 0, 'SELECT'),
(179, 3, 0, 'SELECT'),
(179, 4, 0, 'SELECT'),
(179, 5, 0, 'SELECT'),
(180, 3, 0, 'SELECT'),
(180, 4, 0, 'SELECT'),
(180, 5, 0, 'SELECT'),
(181, 3, 0, 'SELECT'),
(181, 4, 0, 'SELECT'),
(181, 5, 0, 'SELECT'),
(182, 3, 0, 'SELECT'),
(182, 4, 0, 'SELECT'),
(182, 5, 0, 'SELECT'),
(183, 3, 0, 'SELECT'),
(183, 4, 0, 'SELECT'),
(183, 5, 0, 'SELECT'),
(184, 3, 0, 'SELECT'),
(184, 4, 0, 'SELECT'),
(184, 5, 0, 'SELECT'),
(185, 3, 0, 'SELECT'),
(185, 4, 0, 'SELECT'),
(185, 5, 0, 'SELECT'),
(186, 3, 0, 'SELECT'),
(186, 4, 0, 'SELECT'),
(186, 5, 0, 'SELECT'),
(187, 3, 0, 'SELECT'),
(187, 4, 0, 'SELECT'),
(187, 5, 0, 'SELECT'),
(188, 3, 0, 'SELECT'),
(188, 4, 0, 'SELECT'),
(188, 5, 0, 'SELECT'),
(189, 3, 0, 'SELECT'),
(189, 4, 0, 'SELECT'),
(189, 5, 0, 'SELECT'),
(190, 3, 0, 'SELECT'),
(190, 4, 0, 'SELECT'),
(190, 5, 0, 'SELECT'),
(191, 3, 0, 'SELECT'),
(191, 4, 0, 'SELECT'),
(191, 5, 0, 'SELECT'),
(192, 3, 0, 'SELECT'),
(192, 4, 0, 'SELECT'),
(192, 5, 0, 'SELECT'),
(193, 3, 0, 'SELECT'),
(193, 4, 0, 'SELECT'),
(193, 5, 0, 'SELECT'),
(194, 3, 0, 'SELECT'),
(194, 4, 0, 'SELECT'),
(194, 5, 0, 'SELECT'),
(195, 3, 0, 'SELECT'),
(195, 4, 0, 'SELECT'),
(195, 5, 0, 'SELECT'),
(196, 3, 0, 'SELECT'),
(196, 4, 0, 'SELECT'),
(196, 5, 0, 'SELECT'),
(197, 3, 0, 'SELECT'),
(197, 4, 0, 'SELECT'),
(197, 5, 0, 'SELECT'),
(198, 3, 0, 'SELECT'),
(198, 4, 0, 'SELECT'),
(198, 5, 0, 'SELECT'),
(199, 3, 0, 'SELECT'),
(199, 4, 0, 'SELECT'),
(199, 5, 0, 'SELECT'),
(200, 3, 0, 'SELECT'),
(200, 4, 0, 'SELECT'),
(200, 5, 0, 'SELECT'),
(201, 3, 0, 'SELECT'),
(201, 4, 0, 'SELECT'),
(201, 5, 0, 'SELECT'),
(202, 3, 0, 'SELECT'),
(202, 4, 0, 'SELECT'),
(202, 5, 0, 'SELECT'),
(203, 3, 0, 'SELECT'),
(203, 4, 0, 'SELECT'),
(203, 5, 0, 'SELECT'),
(204, 3, 0, 'SELECT'),
(204, 4, 0, 'SELECT'),
(204, 5, 0, 'SELECT'),
(205, 3, 0, 'SELECT'),
(205, 4, 0, 'SELECT'),
(205, 5, 0, 'SELECT'),
(206, 3, 0, 'SELECT'),
(206, 4, 0, 'SELECT'),
(206, 5, 0, 'SELECT'),
(207, 3, 0, 'SELECT'),
(207, 4, 0, 'SELECT'),
(207, 5, 0, 'SELECT'),
(208, 3, 0, 'SELECT'),
(208, 4, 0, 'SELECT'),
(208, 5, 0, 'SELECT'),
(209, 3, 0, 'SELECT'),
(209, 4, 0, 'SELECT'),
(209, 5, 0, 'SELECT'),
(210, 3, 0, 'SELECT'),
(210, 4, 0, 'SELECT'),
(210, 5, 0, 'SELECT'),
(211, 3, 0, 'SELECT'),
(211, 4, 0, 'SELECT'),
(211, 5, 0, 'SELECT'),
(212, 3, 0, 'SELECT'),
(212, 4, 0, 'SELECT'),
(212, 5, 0, 'SELECT'),
(213, 3, 0, 'SELECT'),
(213, 4, 0, 'SELECT'),
(213, 5, 0, 'SELECT'),
(214, 3, 0, 'SELECT'),
(214, 4, 0, 'SELECT'),
(214, 5, 0, 'SELECT'),
(215, 3, 0, 'SELECT'),
(215, 4, 0, 'SELECT'),
(215, 5, 0, 'SELECT'),
(216, 3, 0, 'SELECT'),
(216, 4, 0, 'SELECT'),
(216, 5, 0, 'SELECT'),
(217, 3, 0, 'SELECT'),
(217, 4, 0, 'SELECT'),
(217, 5, 0, 'SELECT'),
(218, 3, 0, 'SELECT'),
(218, 4, 0, 'SELECT'),
(218, 5, 0, 'SELECT'),
(219, 3, 0, 'SELECT'),
(219, 4, 0, 'SELECT'),
(219, 5, 0, 'SELECT'),
(220, 3, 0, 'SELECT'),
(220, 4, 0, 'SELECT'),
(220, 5, 0, 'SELECT'),
(221, 3, 0, 'SELECT'),
(221, 4, 0, 'SELECT'),
(221, 5, 0, 'SELECT'),
(222, 3, 0, 'SELECT'),
(222, 4, 0, 'SELECT'),
(222, 5, 0, 'SELECT'),
(223, 3, 0, 'SELECT'),
(223, 4, 0, 'SELECT'),
(223, 5, 0, 'SELECT'),
(224, 3, 0, 'SELECT'),
(224, 4, 0, 'SELECT'),
(224, 5, 0, 'SELECT'),
(225, 3, 0, 'SELECT'),
(225, 4, 0, 'SELECT'),
(225, 5, 0, 'SELECT'),
(226, 3, 0, 'SELECT'),
(226, 4, 0, 'SELECT'),
(226, 5, 0, 'SELECT'),
(227, 3, 0, 'SELECT'),
(227, 4, 0, 'SELECT'),
(227, 5, 0, 'SELECT'),
(228, 3, 0, 'SELECT'),
(228, 4, 0, 'SELECT'),
(228, 5, 0, 'SELECT'),
(229, 3, 0, 'SELECT'),
(229, 4, 0, 'SELECT'),
(229, 5, 0, 'SELECT'),
(230, 3, 0, 'SELECT'),
(230, 4, 0, 'SELECT'),
(230, 5, 0, 'SELECT'),
(231, 3, 0, 'SELECT'),
(231, 4, 0, 'SELECT'),
(231, 5, 0, 'SELECT'),
(232, 3, 0, 'SELECT'),
(232, 4, 0, 'SELECT'),
(232, 5, 0, 'SELECT'),
(233, 3, 0, 'SELECT'),
(233, 4, 0, 'SELECT'),
(233, 5, 0, 'SELECT'),
(234, 3, 0, 'SELECT'),
(234, 4, 0, 'SELECT'),
(234, 5, 0, 'SELECT'),
(235, 3, 0, 'SELECT'),
(235, 4, 0, 'SELECT'),
(235, 5, 0, 'SELECT'),
(236, 3, 0, 'SELECT'),
(236, 4, 0, 'SELECT'),
(236, 5, 0, 'SELECT'),
(237, 3, 0, 'SELECT'),
(237, 4, 0, 'SELECT'),
(237, 5, 0, 'SELECT'),
(238, 3, 0, 'SELECT'),
(238, 4, 0, 'SELECT'),
(238, 5, 0, 'SELECT'),
(239, 2, 0, 'SELECT'),
(239, 3, 0, 'SELECT'),
(240, 2, 0, 'SELECT'),
(240, 3, 0, 'SELECT'),
(241, 2, 0, 'SELECT'),
(241, 3, 0, 'SELECT'),
(242, 2, 0, 'SELECT'),
(242, 3, 0, 'SELECT'),
(243, 2, 0, 'SELECT'),
(243, 3, 0, 'SELECT'),
(244, 2, 0, 'SELECT'),
(244, 3, 0, 'SELECT'),
(245, 2, 0, 'SELECT'),
(245, 3, 0, 'SELECT'),
(246, 2, 0, 'SELECT'),
(246, 3, 0, 'SELECT'),
(247, 2, 0, 'SELECT'),
(247, 3, 0, 'SELECT'),
(248, 2, 0, 'SELECT'),
(248, 3, 0, 'SELECT'),
(249, 2, 0, 'SELECT'),
(249, 3, 0, 'SELECT'),
(250, 2, 0, 'SELECT'),
(250, 3, 0, 'SELECT'),
(251, 2, 0, 'SELECT'),
(251, 3, 0, 'SELECT'),
(252, 2, 0, 'SELECT'),
(252, 3, 0, 'SELECT'),
(253, 2, 0, 'SELECT'),
(253, 3, 0, 'SELECT'),
(254, 2, 0, 'SELECT'),
(254, 3, 0, 'SELECT'),
(255, 2, 0, 'SELECT'),
(255, 3, 0, 'SELECT'),
(256, 2, 0, 'SELECT'),
(256, 3, 0, 'SELECT'),
(257, 2, 0, 'SELECT'),
(257, 3, 0, 'SELECT'),
(258, 2, 0, 'SELECT'),
(258, 3, 0, 'SELECT'),
(259, 2, 0, 'SELECT'),
(259, 3, 0, 'SELECT'),
(260, 2, 0, 'SELECT'),
(260, 3, 0, 'SELECT'),
(264, 2, 0, 'SELECT'),
(264, 3, 0, 'SELECT'),
(267, 2, 0, 'SELECT'),
(267, 3, 0, 'SELECT'),
(268, 2, 0, 'SELECT'),
(268, 3, 0, 'SELECT'),
(269, 2, 0, 'SELECT'),
(269, 3, 0, 'SELECT'),
(270, 2, 0, 'SELECT'),
(270, 3, 0, 'SELECT'),
(271, 2, 0, 'SELECT'),
(271, 3, 0, 'SELECT'),
(272, 3, 0, ''),
(272, 4, 0, ''),
(272, 6, 0, ''),
(276, 2, 30, '1-0-1'),
(276, 3, 45, '1-1-1'),
(285, 4, 0, ''),
(286, 4, 0, ''),
(287, 4, 0, ''),
(288, 1, 10, '1-1-1'),
(288, 3, 30, '1-0-1'),
(288, 6, 40, '1-1-0'),
(289, 5, 20, '1-0-1'),
(290, 2, 40, '1-0-1'),
(291, 2, 10, '1-0-1'),
(291, 5, 20, '1-1-0'),
(292, 1, 30, '1-0-1'),
(293, 1, 0, ''),
(293, 3, 0, ''),
(294, 1, 40, '1-0-1'),
(295, 4, 0, ''),
(298, 4, 50, '1-0-1'),
(299, 4, 50, '1-0-1'),
(300, 4, 50, '1-0-1'),
(301, 4, 50, '1-0-1'),
(302, 4, 50, '1-0-1'),
(303, 4, 50, '1-0-1'),
(304, 4, 50, '1-0-1'),
(305, 4, 50, '1-0-1'),
(306, 4, 50, '1-0-1'),
(307, 4, 50, '1-0-1'),
(308, 4, 50, '1-0-1'),
(315, 3, 70, ''),
(316, 1, 40, ''),
(317, 1, 40, ''),
(317, 5, 1, ''),
(318, 1, 40, ''),
(319, 1, 40, ''),
(319, 5, 1, ''),
(320, 1, 60, ''),
(320, 2, 10, ''),
(323, 1, 60, ''),
(323, 2, 10, ''),
(355, 1, 60, ''),
(355, 2, 10, ''),
(398, 1, 2, ''),
(399, 1, 2, ''),
(403, 2, 12, ''),
(403, 5, 12, ''),
(403, 6, 2, ''),
(426, 3, 10, '1-0-1'),
(429, 3, 1, ''),
(431, 4, 1, ''),
(431, 6, 12, '1-0-1'),
(432, 2, 12, '1-0-1'),
(434, 5, 23, '1'),
(434, 6, 14, '1-0-1'),
(435, 1, 10, '0-1-1'),
(435, 4, 0, 'dhosa'),
(436, 3, 30, '2'),
(436, 5, 90, '6');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `o_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `ms_id` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`o_id`),
  KEY `p_id` (`p_id`),
  KEY `ms_id` (`ms_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_non_otc`
--

CREATE TABLE IF NOT EXISTS `order_non_otc` (
  `o_id` int(11) NOT NULL,
  `pres_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`o_id`,`pres_id`,`m_id`),
  KEY `pres_id` (`pres_id`,`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_otc`
--

CREATE TABLE IF NOT EXISTS `order_otc` (
  `o_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`o_id`,`prod_id`),
  KEY `prod_id` (`prod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pathologist`
--

CREATE TABLE IF NOT EXISTS `pathologist` (
  `pa_id` int(11) NOT NULL,
  `designation` varchar(20) DEFAULT NULL,
  `digital_signature` text NOT NULL,
  `licence_number` varchar(30) NOT NULL,
  `patho_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`pa_id`),
  KEY `patho_id` (`patho_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pathologist`
--

INSERT INTO `pathologist` (`pa_id`, `designation`, `digital_signature`, `licence_number`, `patho_id`) VALUES
(3, 'MD', 'n,znv', '999111', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pathologist_lab_test_type`
--

CREATE TABLE IF NOT EXISTS `pathologist_lab_test_type` (
  `pathologist_id` int(11) NOT NULL,
  `lab_test_type_id` int(11) NOT NULL,
  PRIMARY KEY (`pathologist_id`,`lab_test_type_id`),
  KEY `pathologist_lab_test_type_ibfk_2` (`lab_test_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pathology`
--

CREATE TABLE IF NOT EXISTS `pathology` (
  `patho_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `a_id` int(11) NOT NULL,
  `licence_number` varchar(30) NOT NULL,
  PRIMARY KEY (`patho_id`),
  KEY `a_id` (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pathology`
--

INSERT INTO `pathology` (`patho_id`, `name`, `a_id`, `licence_number`) VALUES
(1, 'Aarogya Pathology', 1, '99gghj');

-- --------------------------------------------------------

--
-- Table structure for table `patient_doctor`
--

CREATE TABLE IF NOT EXISTS `patient_doctor` (
  `p_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  PRIMARY KEY (`p_id`,`d_id`),
  KEY `p_id` (`p_id`),
  KEY `patient_doctor_ibfk_2` (`d_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_doctor`
--

INSERT INTO `patient_doctor` (`p_id`, `d_id`) VALUES
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient_history`
--

CREATE TABLE IF NOT EXISTS `patient_history` (
  `p_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `event` varchar(100) NOT NULL,
  `prescription_path` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`p_id`,`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_pathology`
--

CREATE TABLE IF NOT EXISTS `patient_pathology` (
  `patient_id` int(11) NOT NULL,
  `pathology_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`pathology_id`),
  KEY `patient_pathology_ibfk_2` (`pathology_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_pathology`
--

INSERT INTO `patient_pathology` (`patient_id`, `pathology_id`) VALUES
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `ssn` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `gender` char(1) NOT NULL,
  `dob` date NOT NULL,
  `a_id` int(11) NOT NULL,
  `person_type` varchar(15) NOT NULL,
  PRIMARY KEY (`ssn`),
  KEY `email_id` (`email_id`),
  KEY `a_id` (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`ssn`, `name`, `email_id`, `gender`, `dob`, `a_id`, `person_type`) VALUES
(0, 'Dr. Vipul', 'v@g.com', 'M', '1993-02-26', 1, 'pathologist'),
(1, 'DR. pups', 'p@y.com', 'F', '1993-02-18', 1, 'doctor'),
(2, 'pskdpk', 'a@a.com', 'm', '1993-03-11', 1, 'patient'),
(3, 'Dr. Vipul', 'v@g.com', 'M', '1993-02-26', 1, 'pathologist');

-- --------------------------------------------------------

--
-- Table structure for table `person_mobile_number`
--

CREATE TABLE IF NOT EXISTS `person_mobile_number` (
  `ssn` int(11) NOT NULL,
  `mob` bigint(12) NOT NULL,
  PRIMARY KEY (`ssn`,`mob`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person_mobile_number`
--

INSERT INTO `person_mobile_number` (`ssn`, `mob`) VALUES
(1, 919825656466),
(1, 919999999996);

-- --------------------------------------------------------

--
-- Table structure for table `product_otc`
--

CREATE TABLE IF NOT EXISTS `product_otc` (
  `p_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mrp` decimal(4,2) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `store_contact_number`
--

CREATE TABLE IF NOT EXISTS `store_contact_number` (
  `ms_id` int(11) NOT NULL,
  `contact_number` int(11) NOT NULL,
  PRIMARY KEY (`ms_id`,`contact_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sugar_level_record`
--

CREATE TABLE IF NOT EXISTS `sugar_level_record` (
  `p_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `value` decimal(5,2) NOT NULL,
  PRIMARY KEY (`p_id`,`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `weight_record`
--

CREATE TABLE IF NOT EXISTS `weight_record` (
  `p_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `value` decimal(4,1) NOT NULL,
  PRIMARY KEY (`p_id`,`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `person` (`ssn`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`d_id`) REFERENCES `doctor` (`d_id`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `person` (`ssn`) ON DELETE CASCADE,
  ADD CONSTRAINT `doctor_ibfk_2` FOREIGN KEY (`h_id`) REFERENCES `hospital` (`h_id`) ON DELETE CASCADE;

--
-- Constraints for table `doctor_visit`
--
ALTER TABLE `doctor_visit`
  ADD CONSTRAINT `doctor_visit_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `doctor` (`d_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `doctor_visit_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `person` (`ssn`) ON DELETE CASCADE;

--
-- Constraints for table `haematology`
--
ALTER TABLE `haematology`
  ADD CONSTRAINT `haematology_ibfk_1` FOREIGN KEY (`lab_report_id`) REFERENCES `lab_report` (`report_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `haematology_ibfk_2` FOREIGN KEY (`count_id`) REFERENCES `lab_test_count` (`count_id`);

--
-- Constraints for table `hospital`
--
ALTER TABLE `hospital`
  ADD CONSTRAINT `hospital_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `address` (`a_id`);

--
-- Constraints for table `hospital_contact_number`
--
ALTER TABLE `hospital_contact_number`
  ADD CONSTRAINT `hospital_contact_number_ibfk_1` FOREIGN KEY (`h_id`) REFERENCES `hospital` (`h_id`) ON DELETE CASCADE;

--
-- Constraints for table `inventory_non_otc`
--
ALTER TABLE `inventory_non_otc`
  ADD CONSTRAINT `inventory_non_otc_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `medicine` (`m_id`),
  ADD CONSTRAINT `inventory_non_otc_ibfk_2` FOREIGN KEY (`ms_id`) REFERENCES `medical_store` (`ms_id`);

--
-- Constraints for table `inventory_otc`
--
ALTER TABLE `inventory_otc`
  ADD CONSTRAINT `inventory_otc_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product_otc` (`p_id`),
  ADD CONSTRAINT `inventory_otc_ibfk_2` FOREIGN KEY (`ms_id`) REFERENCES `medical_store` (`ms_id`);

--
-- Constraints for table `lab_report`
--
ALTER TABLE `lab_report`
  ADD CONSTRAINT `lab_report_ibfk_1` FOREIGN KEY (`pathologist_id`) REFERENCES `pathologist` (`pa_id`),
  ADD CONSTRAINT `lab_report_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `person` (`ssn`),
  ADD CONSTRAINT `lab_report_ibfk_3` FOREIGN KEY (`reffered_doc_id`) REFERENCES `doctor` (`d_id`),
  ADD CONSTRAINT `lab_report_ibfk_4` FOREIGN KEY (`test_type_id`) REFERENCES `lab_test_type` (`lab_test_type_id`);

--
-- Constraints for table `lab_test_count`
--
ALTER TABLE `lab_test_count`
  ADD CONSTRAINT `lab_test_count_ibfk_1` FOREIGN KEY (`lab_test_type_id`) REFERENCES `lab_test_type` (`lab_test_type_id`),
  ADD CONSTRAINT `lab_test_count_ibfk_2` FOREIGN KEY (`sub_cat_id`) REFERENCES `lab_test_sub_categories` (`sub_cat_id`);

--
-- Constraints for table `medical_store`
--
ALTER TABLE `medical_store`
  ADD CONSTRAINT `medical_store_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `address` (`a_id`),
  ADD CONSTRAINT `medical_store_ibfk_2` FOREIGN KEY (`email_id`) REFERENCES `email_password` (`email_id`) ON DELETE CASCADE;

--
-- Constraints for table `med_prescribed`
--
ALTER TABLE `med_prescribed`
  ADD CONSTRAINT `med_prescribed_ibfk_1` FOREIGN KEY (`prescription_id`) REFERENCES `doctor_visit` (`prescription_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `med_prescribed_ibfk_2` FOREIGN KEY (`m_id`) REFERENCES `medicine` (`m_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `person` (`ssn`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`ms_id`) REFERENCES `medical_store` (`ms_id`);

--
-- Constraints for table `order_non_otc`
--
ALTER TABLE `order_non_otc`
  ADD CONSTRAINT `order_non_otc_ibfk_1` FOREIGN KEY (`o_id`) REFERENCES `orders` (`o_id`),
  ADD CONSTRAINT `order_non_otc_ibfk_2` FOREIGN KEY (`pres_id`, `m_id`) REFERENCES `med_prescribed` (`prescription_id`, `m_id`);

--
-- Constraints for table `order_otc`
--
ALTER TABLE `order_otc`
  ADD CONSTRAINT `order_otc_ibfk_1` FOREIGN KEY (`o_id`) REFERENCES `orders` (`o_id`),
  ADD CONSTRAINT `order_otc_ibfk_2` FOREIGN KEY (`prod_id`) REFERENCES `product_otc` (`p_id`);

--
-- Constraints for table `pathologist`
--
ALTER TABLE `pathologist`
  ADD CONSTRAINT `pathologist_ibfk_1` FOREIGN KEY (`pa_id`) REFERENCES `person` (`ssn`) ON DELETE CASCADE;

--
-- Constraints for table `pathologist_lab_test_type`
--
ALTER TABLE `pathologist_lab_test_type`
  ADD CONSTRAINT `pathologist_lab_test_type_ibfk_2` FOREIGN KEY (`lab_test_type_id`) REFERENCES `lab_test_type` (`lab_test_type_id`),
  ADD CONSTRAINT `pathologist_lab_test_type_ibfk_1` FOREIGN KEY (`pathologist_id`) REFERENCES `pathologist` (`pa_id`);

--
-- Constraints for table `pathology`
--
ALTER TABLE `pathology`
  ADD CONSTRAINT `pathology_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `address` (`a_id`);

--
-- Constraints for table `patient_doctor`
--
ALTER TABLE `patient_doctor`
  ADD CONSTRAINT `patient_doctor_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `person` (`ssn`) ON DELETE CASCADE,
  ADD CONSTRAINT `patient_doctor_ibfk_2` FOREIGN KEY (`d_id`) REFERENCES `doctor` (`d_id`) ON DELETE CASCADE;

--
-- Constraints for table `patient_history`
--
ALTER TABLE `patient_history`
  ADD CONSTRAINT `patient_history_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `person` (`ssn`);

--
-- Constraints for table `patient_pathology`
--
ALTER TABLE `patient_pathology`
  ADD CONSTRAINT `patient_pathology_ibfk_2` FOREIGN KEY (`pathology_id`) REFERENCES `pathology` (`patho_id`),
  ADD CONSTRAINT `patient_pathology_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `person` (`ssn`);

--
-- Constraints for table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`email_id`) REFERENCES `email_password` (`email_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `person_ibfk_2` FOREIGN KEY (`a_id`) REFERENCES `address` (`a_id`);

--
-- Constraints for table `person_mobile_number`
--
ALTER TABLE `person_mobile_number`
  ADD CONSTRAINT `person_mobile_number_ibfk_1` FOREIGN KEY (`ssn`) REFERENCES `person` (`ssn`) ON DELETE CASCADE;

--
-- Constraints for table `store_contact_number`
--
ALTER TABLE `store_contact_number`
  ADD CONSTRAINT `store_contact_number_ibfk_1` FOREIGN KEY (`ms_id`) REFERENCES `medical_store` (`ms_id`);

--
-- Constraints for table `sugar_level_record`
--
ALTER TABLE `sugar_level_record`
  ADD CONSTRAINT `sugar_level_record_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `person` (`ssn`);

--
-- Constraints for table `weight_record`
--
ALTER TABLE `weight_record`
  ADD CONSTRAINT `weight_record_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `person` (`ssn`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
