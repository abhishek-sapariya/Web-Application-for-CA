-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2019 at 06:20 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form-16`
--

-- --------------------------------------------------------

--
-- Table structure for table `80d`
--

CREATE TABLE `80d` (
  `PAN` varchar(20) NOT NULL,
  `max` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `PAN` varchar(20) NOT NULL,
  `flatno` varchar(10) NOT NULL,
  `building` varchar(15) NOT NULL,
  `street` varchar(50) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `City` varchar(25) NOT NULL,
  `pincode` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`PAN`, `flatno`, `building`, `street`, `Area`, `City`, `pincode`) VALUES
('ffr456789', '1', 'hello', 'mvroad', 'chanakya society', 'vidyanagar', '398888');

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
('ff33434433', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `allowance`
--

CREATE TABLE `allowance` (
  `PAN` varchar(20) NOT NULL,
  `nature` varchar(100) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `age` varchar(20) NOT NULL,
  `PAN` varchar(20) NOT NULL,
  `aadhaar` varchar(20) NOT NULL,
  `enrollmentno` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`firstname`, `middlename`, `lastname`, `dob`, `age`, `PAN`, `aadhaar`, `enrollmentno`, `email`, `mobileno`) VALUES
('vimarsh', 'harshad', 'rathod', '1999-10-28', '', 'ffr456789', '473459745734', '', 'vimarshrathod23@gmail.com', '8155915134');

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE `deductions` (
  `PAN` varchar(20) NOT NULL,
  `80C` varchar(10) NOT NULL,
  `80CCC` varchar(10) NOT NULL,
  `80CCD1` varchar(10) NOT NULL,
  `total_80C` varchar(10) NOT NULL,
  `80CCD1B` varchar(10) NOT NULL,
  `80CCD2` varchar(10) NOT NULL,
  `80E` varchar(10) NOT NULL,
  `80G` varchar(10) NOT NULL,
  `donation` varchar(20) NOT NULL,
  `80TTA` varchar(10) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `PAN` varchar(20) NOT NULL,
  `salary_17_1` varchar(10) NOT NULL,
  `salary_17_2` varchar(10) NOT NULL,
  `salary_17_3` varchar(10) NOT NULL,
  `total_sal` varchar(20) NOT NULL,
  `sal_other_emp` varchar(20) NOT NULL,
  `deduction_1` varchar(10) NOT NULL,
  `deduction_2` varchar(10) NOT NULL,
  `deduction_3` varchar(10) NOT NULL,
  `total_ded` varchar(20) NOT NULL,
  `income_house` varchar(20) NOT NULL,
  `income_other` varchar(20) NOT NULL,
  `relief` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tax_cal`
--

CREATE TABLE `tax_cal` (
  `year` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `tax%` varchar(20) NOT NULL,
  `additional_tax` varchar(20) NOT NULL,
  `surcharge` varchar(20) NOT NULL,
  `max` varchar(20) NOT NULL,
  `min` varchar(20) NOT NULL,
  `cess` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax_cal`
--

INSERT INTO `tax_cal` (`year`, `age`, `tax%`, `additional_tax`, `surcharge`, `max`, `min`, `cess`) VALUES
('2018-19', '0-60', '0', '0', '0', '250000', '0', '4'),
('2018-19', '0-60', '5', '0', '0', '500000', '250000', '4'),
('2018-19', '0-60', '20', '0', '0', '1000000', '500000', '4'),
('2018-19', '0-60', '30', '0', '0', '5000000', '1000000', '4'),
('2018-19', '0-60', '30', '0', '10', '10000000', '5000000', '4'),
('2018-19', '0-60', '30', '0', '15', '0', '10000000', '4'),
('2018-19', '60-80', '0', '0', '0', '300000', '0', '4'),
('2018-19', '60-80', '5', '0', '0', '500000', '300000', '4'),
('2018-19', '60-80', '20', '0', '0', '1000000', '500000', '4'),
('2018-19', '60-80', '30', '0', '0', '5000000', '1000000', '4'),
('2018-19', '60-80', '30', '0', '10', '10000000', '5000000', '4'),
('2018-19', '60-80', '30', '0', '15', '0', '10000000', '4'),
('2018-19', '80-more', '0', '0', '0', '500000', '0', '4'),
('2018-19', '80-more', '20', '0', '0', '1000000', '500000', '4'),
('2018-19', '80-more', '30', '0', '0', '5000000', '1000000', '4'),
('2018-19', '80-more', '30', '0', '10', '10000000', '5000000', '4'),
('2018-19', '80-more', '30', '0', '15', '0', '10000000', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allowance`
--
ALTER TABLE `allowance`
  ADD KEY `PAN` (`PAN`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`PAN`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allowance`
--
ALTER TABLE `allowance`
  ADD CONSTRAINT `allowance_ibfk_1` FOREIGN KEY (`PAN`) REFERENCES `client` (`PAN`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
