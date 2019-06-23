-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2018 at 12:52 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.1.21

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
-- Table structure for table `buyerreg`
--

CREATE TABLE `buyerreg` (
  `fname` varchar(30) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `hno` int(10) NOT NULL,
  `street` varchar(40) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `zip` int(11) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyerreg`
--

INSERT INTO `buyerreg` (`fname`, `sname`, `hno`, `street`, `city`, `state`, `country`, `zip`, `contact`, `email`, `bid`, `password`, `cpassword`) VALUES
('', '', 0, '', '', '', '', 0, 0, 'thenisha3@gmail.com', '', '', ''),
('', '', 0, '', '', '', '', 0, 0, 'thenisha3@gmail.com', '', '', ''),
('thenisha', 'somashekar', 0, '', '', '', '', 0, 0, 'thenisha3@gmail.com', '', '', ''),
('thiviyaa', 'ksha', 0, '', '', '', '', 0, 0, 'thenisha3@gmail.com', '', '', ''),
('thiviyaa', 'ksha', 44, '2nd main road', 'chennai', '', '', 600081, 2147483647, 'thenisha3@gmail.com', '', '', ''),
('thenisha', '12', 0, '2nd main road', 'chennai', '', '', 600081, 2147483647, 'thenisha3@gmail.com', 'rtyui', '1234', '1234'),
('thenisha', 'ert', 12, '2nd main road', 'chennai', '', '', 600081, 2147483647, 'thenisha3@gmail.com', 'rtyui', '1234', '1234'),
('thenisha', '12', 12, '2nd main road', 'chennai', '', '', 600081, 2147483647, 'thenisha3@gmail.com', '123', '1234', '5678');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('thenisha', 3089999),
('thiviyaa', 12345678),
('thenu', 123);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `oname` varchar(50) NOT NULL,
  `owname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zip` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phno` int(11) NOT NULL,
  `fno` varchar(50) NOT NULL,
  `mono` int(11) NOT NULL,
  `bankname` varchar(40) NOT NULL,
  `branchname` varchar(50) NOT NULL,
  `branchaddress` varchar(100) NOT NULL,
  `taccount` int(11) NOT NULL,
  `accountno` int(11) NOT NULL,
  `ifsc` int(11) NOT NULL,
  `regid` int(11) NOT NULL,
  `pancard` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `password1` int(11) NOT NULL,
  `cpassword1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`oname`, `owname`, `address`, `city`, `state`, `zip`, `email`, `phno`, `fno`, `mono`, `bankname`, `branchname`, `branchaddress`, `taccount`, `accountno`, `ifsc`, `regid`, `pancard`, `sid`, `password1`, `cpassword1`) VALUES
('0', '0', '0', '0', '0', 0, '0', 0, '0', 0, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0),
('0', '2', '0', '0', '600081', 0, '523698', 1234, '2147483647', 0, '0', '0', '2', 0, 12369852, 0, 0, 0, 1254, 789, 87),
('0', '2', '0', '0', '600081', 0, '523698', 1234, '2147483647', 0, '0', '0', '2', 0, 12369852, 0, 1234, 0, 1254, 789, 87),
('sekhar', '2nd main road', 'chennai', 'Tamilnadu', '600081', 0, '523698', 1234, '9884753696', 0, 'hdfc', '', '2nd main road', 0, 12369852, 0, 1234, 0, 1254, 789, 87),
('sekhar', '2nd main road', 'chennai', 'Tamilnadu', '600081', 0, '523698', 1234, '9884753696', 0, 'hdfc', '', '2nd main road', 0, 12369852, 0, 1234, 0, 1254, 789, 87);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
