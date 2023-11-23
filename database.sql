-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 09:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `addfunda`
--

CREATE TABLE `addfunda` (
  `id` int(1) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `s1` text NOT NULL,
  `s2` text NOT NULL,
  `s3` text NOT NULL,
  `s4` text NOT NULL,
  `s5` text NOT NULL,
  `s6` text NOT NULL,
  `s7` text NOT NULL,
  `s8` text NOT NULL,
  `s9` text NOT NULL,
  `s10` text NOT NULL,
  `s11` text NOT NULL,
  `s12` text NOT NULL,
  `s13` text NOT NULL,
  `s14` text NOT NULL,
  `s15` text NOT NULL,
  `s16` text NOT NULL,
  `s17` text NOT NULL,
  `s18` text NOT NULL,
  `s19` text NOT NULL,
  `s20` text NOT NULL,
  `s21` text NOT NULL,
  `s22` text NOT NULL,
  `s23` text NOT NULL,
  `s24` text NOT NULL,
  `s25` text NOT NULL,
  `s26` text NOT NULL,
  `s27` text NOT NULL,
  `s28` text NOT NULL,
  `s29` text NOT NULL,
  `s30` text NOT NULL,
  `s31` text NOT NULL,
  `s32` text NOT NULL,
  `s33` text NOT NULL,
  `s34` text NOT NULL,
  `s35` text NOT NULL,
  `s36` text NOT NULL,
  `s37` text NOT NULL,
  `s38` text NOT NULL,
  `s39` text NOT NULL,
  `s40` text NOT NULL,
  `s41` text NOT NULL,
  `s42` text NOT NULL,
  `s43` text NOT NULL,
  `s44` text NOT NULL,
  `s45` text NOT NULL,
  `s46` text NOT NULL,
  `s47` text NOT NULL,
  `s48` text NOT NULL,
  `s49` text NOT NULL,
  `s50` text NOT NULL,
  `s51` text NOT NULL,
  `s52` text NOT NULL,
  `s53` text NOT NULL,
  `s54` text NOT NULL,
  `s55` text NOT NULL,
  `s56` text NOT NULL,
  `s57` text NOT NULL,
  `s58` text NOT NULL,
  `s59` text NOT NULL,
  `s60` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addfunda`
--

INSERT INTO `addfunda` (`id`, `sname`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`, `s11`, `s12`, `s13`, `s14`, `s15`, `s16`, `s17`, `s18`, `s19`, `s20`, `s21`, `s22`, `s23`, `s24`, `s25`, `s26`, `s27`, `s28`, `s29`, `s30`, `s31`, `s32`, `s33`, `s34`, `s35`, `s36`, `s37`, `s38`, `s39`, `s40`, `s41`, `s42`, `s43`, `s44`, `s45`, `s46`, `s47`, `s48`, `s49`, `s50`, `s51`, `s52`, `s53`, `s54`, `s55`, `s56`, `s57`, `s58`, `s59`, `s60`) VALUES
(34, 'titan', '1', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, 'titan', '1', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(36, 'hul', '11', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(1) NOT NULL,
  `cname` varchar(155) NOT NULL,
  `cemail` varchar(155) NOT NULL,
  `cphone` int(10) NOT NULL,
  `csub` varchar(155) NOT NULL,
  `cmsg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `cname`, `cemail`, `cphone`, `csub`, `cmsg`) VALUES
(6, 'sarvesh', 'ssss@gmail.com', 2147483647, 'subject', 'welcome to fundatech');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(15) NOT NULL,
  `stname` varchar(100) NOT NULL,
  `cmweb` varchar(200) NOT NULL,
  `bse` varchar(200) NOT NULL,
  `nse` varchar(200) NOT NULL,
  `cp` varchar(50) NOT NULL,
  `mp` varchar(50) NOT NULL,
  `fv` varchar(50) NOT NULL,
  `hl` varchar(50) NOT NULL,
  `pe` varchar(50) NOT NULL,
  `abt` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `stname`, `cmweb`, `bse`, `nse`, `cp`, `mp`, `fv`, `hl`, `pe`, `abt`) VALUES
(1, 'titan', 'dhnjdjhdhjzdh', 'sfhgsfhfdh', 'sfrhfshfsdh', 'fhfdhf', 'shfhg', 'fhfd', 'hgfdhfd', 'h', 'hfsh'),
(2, 'titan', 'dhnjdjhdhjzdh', 'sfhgsfhfdh', 'sfrhfshfsdh', 'fhfdhf', 'shfhg', 'fhfd', 'hgfdhfd', 'h', 'hfsh'),
(3, 'titan', 'dhnjdjhdhjzdh', 'sfhgsfhfdh', 'sfrhfshfsdh', 'fhfdhf', 'shfhg', 'fhfd', 'hgfdhfd', 'h', 'hfsh'),
(4, 'wrwar', 'qwfqwfqwf', 'fwqeafw', 'faewfa', 'fgafea', 'faf', 'afawf', 'fa', 'afaf', 'fawf');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonecode` int(10) NOT NULL,
  `phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `password`, `gender`, `email`, `phonecode`, `phone`) VALUES
(1, 'rajsarvesh', '123456', 'm', 'ssss@gmail.com', 91, 9579256020),
(2, 'sarvesh', 'S@rvesh', 'm', 'sp5196988@gmail.com', 91, 9579256020),
(3, 'sarvesh', 'S@rvesh', 'm', 'sss#s@gmail.com', 91, 4984198498),
(4, 'sarvesh_98', 'dgsdgsrgs', 'm', 'ssss####@gmail.com', 91, 0),
(5, 'sarvesh', 'gherstgrsg', 'm', 'ss#ss@gmail.com', 91, 0),
(6, 'sarvesh_98', 'bsfdhbsrfhsr', 'm', 'sss######s@gmail.com', 91, 0),
(7, 'rhgrhrdshg', 'dfhdhhde', 'm', 'ss!!!!!ss@gmail.com', 91, 9579256020),
(8, 'sarvesh_98', 'adadad', 'm', 'ssss#@gmail.com', 91, 9579256020),
(9, 'aditya patil', 'adity@123', 'm', 'aditya@gmail.com', 91, 1010101010),
(10, 'pratilk', '123', 'm', 'pratilk@123', 91, 9579256020),
(11, 'hrishi', 'hr@123', 'm', 'hrishi@gmail.com', 91, 1654149465),
(12, 'prathmesh', '123456', 'm', 'prathmesh@gmail.com', 91, 1654154598);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addfunda`
--
ALTER TABLE `addfunda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addfunda`
--
ALTER TABLE `addfunda`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
