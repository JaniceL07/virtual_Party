-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 07, 2022 at 06:39 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `virtualparty`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(25) NOT NULL,
  `PhoneNumber` int(12) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `NumberofParticipants` int(100) NOT NULL,
  `Theme` varchar(50) NOT NULL,
  `PartyDate` date NOT NULL,
  `PartyTime` time(6) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`ID`, `Name`, `PhoneNumber`, `Email`, `NumberofParticipants`, `Theme`, `PartyDate`, `PartyTime`, `UserID`) VALUES
(1, 'flower', 175236985, 'flower@gmail.com', 15, 'Meow-Meow', '2022-02-02', '07:38:00.000000', 0),
(6, 'flower', 131315132, 'flower@gmail.com', 20, 'Meow-Meow', '2022-02-25', '06:40:00.000000', 0),
(7, 'flower', 151369820, 'flower@gmail.com', 4, 'KFC vs McDonald', '2016-06-15', '04:49:00.000000', 0),
(8, 'janice', 151369820, 'jefa@gmail.com', 20, 'KFC vs McDonald', '2015-05-05', '06:35:00.000000', NULL),
(9, 'ckboss', 151369820, 'ckboss@gmail.com', 20, 'Meow-Meow', '2016-05-05', '06:40:00.000000', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
