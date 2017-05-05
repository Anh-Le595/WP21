-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2016 at 02:20 
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_soft_share`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(10) NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Password` char(32) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `GroupID` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Password`, `Email`, `GroupID`) VALUES
(1, 'AnhLe595', '5555', 'matocdo1995@yahoo.com', 0),
(2, 'Phi Anh', '1111', 'npa@1995.com', 0),
(3, 'Minh Dung', '2222', 'nvmd@1995.com', 0),
(4, 'Minh Dung', '2222', 'nvmd@1995.com', 0),
(5, 'Duy Dam', '3333', 'dvd@1995.com', 0),
(6, 'Trinh Hoai Chuong', '3333', 'thc@1995.com', 0),
(7, 'An Luu', '1234', 'lta@1995.com', 0),
(8, 'Cuong Seven', '2345', 'npc@1995.com', 0),
(10, 'Hai Ho', '6666', 'hth@1995.com', 0),
(11, 'Duc Minh', '7777', 'lmd@1995.com', 0),
(12, 'Xuan Thuan', '12345', 'nxt@1995.com', 0),
(13, 'Bui Duc', '999999', 'bmd@1995.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
