-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2020 at 10:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE `stud` (
  `Reg_Num` int(4) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Stream` varchar(20) NOT NULL,
  `Address` varchar(400) NOT NULL,
  `Reg_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`Reg_Num`, `Name`, `Password`, `Email`, `Contact`, `Stream`, `Address`, `Reg_date`) VALUES
(2, 'Artemis Fowl', 'fowl_artem', 'fowl.jr1996@gmail.com', 2147483647, 'B.sc', 'Ireland, Castle High', '2020-09-09 09:50:47.044330'),
(10, 'Morty Smith', 'dumbassmor', 'morty455013@gmail.com', 47483647, 'Select Stream', 'United States, Seattle', '2020-09-10 11:07:53.072472'),
(11, 'Frank Castle', 'Castle fra', 'castle.frank@gmail.com', 2147483647, 'B.sc', 'United States, Seattle', '2020-09-10 11:45:02.035682'),
(12, 'Erick Cartman', 'Carrtman', 'cartman916@gmail.com', 2147483647, 'Select Stream', 'United States, Nevada', '2020-09-10 12:51:38.270529');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stud`
--
ALTER TABLE `stud`
  ADD PRIMARY KEY (`Reg_Num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stud`
--
ALTER TABLE `stud`
  MODIFY `Reg_Num` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
