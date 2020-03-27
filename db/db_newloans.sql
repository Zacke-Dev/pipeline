-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: March 27, 2020 at 03:40 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schosting_db_modal`
--

-- --------------------------------------------------------

--
-- Table structure for table `closedloans`
--

CREATE TABLE `closedloans` (
    `closedid` int(11),
    `bsa` varchar(3),
    `cfm` varchar(3),
    `checklistcomplete` boolean,
    `cleanupfolder` varchar(3),
	`closingchecks` varchar(3),
	`newloancomplete` boolean,
	`customername` varchar(50),
	`docsindexed` varchar(3),
	`docsmoved` varchar(3),
	`docssigned` varchar(3),
	`fhlbloan` boolean,
	`fhlbdocs` varchar(3),
	`filelocation` varchar(10),
	`firstresconst` varchar(15),
	`gmi` varchar(3),
	`hmda` varchar(3),
	`jhacheck` varchar(3),
	`keyeddate` date,
	`loannumber` int(11),
	`lender` varchar(3),
	`mortgage` varchar(3),
	`notes` varchar(100),
	`payment` varchar(15),
	`pmi` varchar(3),
	`processor` varchar (3),
	`quickbooks` varchar (3),
	`riskrate` varchar (3),
	`srvcmodule` boolean,
	`wire` varchar(3)
	

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `closedloans`
--
ALTER TABLE `closedloans`
  ADD PRIMARY KEY (`closedid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `closedloans`
--
ALTER TABLE `closedloans`
  MODIFY `closedid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
