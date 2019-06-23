-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2018 at 09:59 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foreign`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `fname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `hno` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zip` int(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buyercart`
--

CREATE TABLE `buyercart` (
  `bid` varchar(50) NOT NULL,
  `pid1` varchar(50) NOT NULL,
  `pid2` varchar(50) NOT NULL,
  `pid3` varchar(50) NOT NULL,
  `pqty1` varchar(50) NOT NULL,
  `pqty2` varchar(50) NOT NULL,
  `pqty3` varchar(50) NOT NULL,
  `pprice1` varchar(50) NOT NULL,
  `pprice2` varchar(50) NOT NULL,
  `pprice3` varchar(50) NOT NULL,
  `sum` varchar(50) NOT NULL,
  `tax` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `priceinreg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pname` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `ptype` int(11) NOT NULL,
  `pbrand` int(11) NOT NULL,
  `pprice` int(11) NOT NULL,
  `pqty` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `oname` int(11) NOT NULL,
  `owname` int(11) NOT NULL,
  `address` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `zip` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `phno` int(11) NOT NULL,
  `fno` int(11) NOT NULL,
  `mono` int(11) NOT NULL,
  `bname` int(11) NOT NULL,
  `branchname` int(11) NOT NULL,
  `branchaddress` int(11) NOT NULL,
  `taccount` int(11) NOT NULL,
  `accountno` int(11) NOT NULL,
  `ifsc` int(11) NOT NULL,
  `regid` int(11) NOT NULL,
  `pancard` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`bid`),
  ADD UNIQUE KEY `fname` (`fname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
