-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 06, 2023 at 10:25 AM
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
-- Database: `reg_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg_forms`
--

DROP TABLE IF EXISTS `reg_forms`;
CREATE TABLE IF NOT EXISTS `reg_forms` (
  `Cand_name` varchar(30) DEFAULT NULL,
  `Cand_address` varchar(80) DEFAULT NULL,
  `cand_degree` varchar(30) DEFAULT NULL,
  `cand_contact` int DEFAULT NULL,
  `f_name` varchar(30) DEFAULT NULL,
  `f_contact` varchar(30) DEFAULT NULL,
  `college_d` varchar(70) DEFAULT NULL,
  `college_regno` int DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reg_forms`
--

INSERT INTO `reg_forms` (`Cand_name`, `Cand_address`, `cand_degree`, `cand_contact`, `f_name`, `f_contact`, `college_d`, `college_regno`) VALUES
('SIDD', 'PUNE', 'BTech', 678905432, 'M', '9076532145', 'SASTRA', 753142963),
('MALVIKA K', 'THANJAVUR', 'BTech', 125478963, 'KANNAN S', '5679832234', 'SASTRA', 124018034),
('SRADDHAA', 'TRICHY', 'BTech', 2147483647, 'S', '9087652314', 'SASTRA', 143698751),
('KAUSHIKA', 'TRICHY', 'BTech', 2147483647, 'D', '9806548721', 'SASTRA', 124015963),
('', '', '', 0, '', '', '', 0),
('megna', 'banglore', 'btech', 2147483647, 'Kannan S', '7532148965', 'cts', 7531496);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
