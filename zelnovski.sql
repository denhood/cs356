-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2016 at 12:38 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zelnovski`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CreditCard` int(5) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `CreditLimit` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CreditCard`, `Name`, `Address`, `CreditLimit`) VALUES
(10001, 'David Hill', 'Valley View Dr.', 1000),
(10002, 'Darth Winfrey', 'Westmont Ave.', 1200),
(10003, 'Chris McClain', 'Quail Valley', 1500),
(10004, 'Lisa Darlington', 'Valley View Dr.', 800),
(10005, 'Jim Jonnston', 'Westmont Ave.', 1000),
(10006, 'Dan Krider', 'Valley View Dr.', 1250),
(10007, 'Lonnie Bowe', 'Quail Valley', 2000),
(10008, 'Mary Edna Beckett', 'Westmont Ave.', 1750);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `ID` int(3) NOT NULL,
  `ItemName` varchar(255) NOT NULL,
  `Quantity` int(3) NOT NULL,
  `WholesalePrice` int(3) NOT NULL,
  `RetailPrice` int(3) NOT NULL,
  `Supplier` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`ID`, `ItemName`, `Quantity`, `WholesalePrice`, `RetailPrice`, `Supplier`) VALUES
(1, 'Refrigerator', 5, 500, 600, 1),
(2, 'Gas Range', 6, 250, 325, 3),
(3, 'Electric Range', 3, 275, 335, 2),
(4, 'Color TV', 10, 280, 320, 4),
(5, 'DVD Player', 22, 175, 225, 3),
(6, 'Stereo', 5, 600, 900, 5),
(7, 'Camcorder', 2, 750, 1000, 4),
(8, 'Dishwasher', 8, 280, 345, 3),
(9, 'Garbage Disposal', 13, 160, 210, 1),
(10, 'Air Conditioner', 7, 190, 235, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `InventoryNumber` int(3) NOT NULL,
  `CustomerID` int(5) NOT NULL,
  `Date` date NOT NULL,
  `Item` int(3) NOT NULL,
  `SalesPerson` int(3) NOT NULL,
  `CashCredit` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`InventoryNumber`, `CustomerID`, `Date`, `Item`, `SalesPerson`, `CashCredit`) VALUES
(201, 10001, '2016-04-01', 1, 1, 1),
(202, 10003, '2016-04-01', 2, 3, 0),
(203, 10004, '2016-04-02', 4, 2, 0),
(204, 10002, '2016-04-02', 3, 4, 1),
(205, 10005, '2016-04-02', 7, 6, 1),
(206, 10008, '2016-04-03', 10, 1, 0),
(207, 10006, '2016-04-03', 3, 3, 0),
(208, 10003, '2016-04-04', 4, 4, 1),
(209, 10002, '2016-04-04', 8, 2, 1),
(210, 10001, '2016-04-04', 5, 5, 0),
(211, 10007, '2016-04-04', 9, 2, 0),
(212, 10001, '2016-04-05', 7, 1, 1),
(213, 10003, '2016-04-05', 5, 6, 1),
(214, 10002, '2016-04-05', 1, 3, 1),
(215, 10005, '2016-04-05', 8, 4, 0),
(216, 10004, '2016-04-05', 6, 2, 0),
(217, 10006, '2016-04-06', 8, 1, 0),
(218, 10003, '2016-04-06', 10, 5, 0),
(219, 10007, '2016-04-06', 2, 3, 1),
(220, 10008, '2016-04-06', 1, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `salespeople`
--

CREATE TABLE `salespeople` (
  `ID` int(3) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `CommissionRate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salespeople`
--

INSERT INTO `salespeople` (`ID`, `Name`, `CommissionRate`) VALUES
(1, 'Preston', 5),
(2, 'Austin', 7.5),
(3, 'Orville', 3),
(4, 'Zach', 5),
(5, 'Jordan', 3),
(6, 'Courtney', 7.5),
(7, 'Chris', 3);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `ID` int(3) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`ID`, `Name`) VALUES
(1, 'ABC Wholesalers'),
(2, 'Acme Distributing'),
(3, 'XYZ Warehouse'),
(4, 'PDQ Supply'),
(5, 'QWERTY Quick Get-All');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CreditCard`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`InventoryNumber`);

--
-- Indexes for table `salespeople`
--
ALTER TABLE `salespeople`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
