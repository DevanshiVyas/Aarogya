-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2014 at 06:18 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aarogya1`
--

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
(1, 'locality1', 'area1', 'city1', 'state1', 603203);

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
  PRIMARY KEY (`d_id`),
  KEY `h_id` (`h_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_visit`
--

CREATE TABLE IF NOT EXISTS `doctor_visit` (
  `precription_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `episode_num` int(11) NOT NULL,
  `encounter_num` int(11) NOT NULL,
  `date` date NOT NULL,
  `visit_summary` text,
  PRIMARY KEY (`precription_id`),
  UNIQUE KEY `d_id` (`d_id`,`p_id`,`episode_num`,`encounter_num`),
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('aadi1428@gmail.com', 'aakash', NULL, NULL);

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

--
-- Dumping data for table `inventory_otc`
--

INSERT INTO `inventory_otc` (`ms_id`, `p_id`, `price`, `quantity`) VALUES
(190, 1, 99.00, 1);

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

--
-- Dumping data for table `medical_store`
--

INSERT INTO `medical_store` (`ms_id`, `name`, `a_id`, `licence_number`, `email_id`) VALUES
(190, 'Cute Store', 1, '109', 'aadi1428@gmail.com');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `med_prescribed`
--

CREATE TABLE IF NOT EXISTS `med_prescribed` (
  `prescription_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `consumption_per_day` int(11) NOT NULL,
  PRIMARY KEY (`prescription_id`,`m_id`),
  KEY `m_id` (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `digital_signature` text NOT NULL,
  `licence_number` varchar(30) NOT NULL,
  `patho_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`pa_id`),
  KEY `patho_id` (`patho_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pathology`
--

CREATE TABLE IF NOT EXISTS `pathology` (
  `patho_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `a_id` int(11) NOT NULL,
  `licence_number` varchar(30) NOT NULL,
  PRIMARY KEY (`patho_id`),
  KEY `a_id` (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(7, 'Aakash Shah', 'aadi1428@gmail.com', 'M', '1993-07-14', 1, 'AWESOME'),
(190, 'Aakash Shah', 'aadi1428@gmail.com', 'M', '1993-07-14', 1, 'AWESOME');

-- --------------------------------------------------------

--
-- Table structure for table `person_mobile_number`
--

CREATE TABLE IF NOT EXISTS `person_mobile_number` (
  `ssn` int(11) NOT NULL,
  `mob` int(11) NOT NULL,
  PRIMARY KEY (`ssn`,`mob`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Dumping data for table `product_otc`
--

INSERT INTO `product_otc` (`p_id`, `name`, `mrp`) VALUES
(1, 'Disprin', 60.00);

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
-- Constraints for table `email_password`
--
ALTER TABLE `email_password`
  ADD CONSTRAINT `email_password_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`ssn`),
  ADD CONSTRAINT `email_password_ibfk_2` FOREIGN KEY (`store_id`) REFERENCES `medical_store` (`ms_id`);

--
-- Constraints for table `hospital`
--
ALTER TABLE `hospital`
  ADD CONSTRAINT `hospital_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `address` (`a_id`);

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
-- Constraints for table `medical_store`
--
ALTER TABLE `medical_store`
  ADD CONSTRAINT `medical_store_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `address` (`a_id`),
  ADD CONSTRAINT `medical_store_ibfk_2` FOREIGN KEY (`email_id`) REFERENCES `email_password` (`email_id`) ON DELETE CASCADE;

--
-- Constraints for table `med_prescribed`
--
ALTER TABLE `med_prescribed`
  ADD CONSTRAINT `med_prescribed_ibfk_1` FOREIGN KEY (`prescription_id`) REFERENCES `doctor_visit` (`precription_id`) ON DELETE CASCADE,
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
  ADD CONSTRAINT `pathologist_ibfk_1` FOREIGN KEY (`pa_id`) REFERENCES `person` (`ssn`) ON DELETE CASCADE,
  ADD CONSTRAINT `pathologist_ibfk_2` FOREIGN KEY (`patho_id`) REFERENCES `pathology` (`patho_id`) ON DELETE CASCADE;

--
-- Constraints for table `pathology`
--
ALTER TABLE `pathology`
  ADD CONSTRAINT `pathology_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `address` (`a_id`);

--
-- Constraints for table `patient_history`
--
ALTER TABLE `patient_history`
  ADD CONSTRAINT `patient_history_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `person` (`ssn`);

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
