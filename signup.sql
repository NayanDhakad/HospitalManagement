-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 09:12 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('nayanyogiprince', 'nayanyogiprince');

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE `medical` (
  `name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `owner` varchar(20) NOT NULL,
  `timing` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`name`, `address`, `owner`, `timing`) VALUES
('Shri Shivam Medical ', 'NolaiPura Ratlam', 'Shivam Gehlot', '06 AM-09 PM'),
('', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `username` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mob` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`username`, `address`, `password`, `mob`) VALUES
('nayan', 'jaora', 'dhakad', 2147483647),
('Ayush', 'Ratlam', 'yogi10', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `patientinfo`
--

CREATE TABLE `patientinfo` (
  `name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `diseases` varchar(20) NOT NULL,
  `registration_date` date NOT NULL,
  `room_no` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientinfo`
--

INSERT INTO `patientinfo` (`name`, `address`, `diseases`, `registration_date`, `room_no`) VALUES
('prakhar Jain', 'Raipur', 'cancer', '0000-00-00', 3208),
('Prince Gupta', 'Jhansi', 'Cough', '0000-00-00', 3133);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_no` int(4) NOT NULL,
  `floor` int(1) NOT NULL,
  `room_size` varchar(10) NOT NULL,
  `rent` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_no`, `floor`, `room_size`, `rent`) VALUES
(3241, 3, '2bed', 1000),
(324, 1, '2bed', 100),
(3244, 3, '2bed', 3000),
(1225, 2, '2bed', 1000),
(3208, 3, '2bed', 1000),
(3227, 3, '2bed', 1000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
