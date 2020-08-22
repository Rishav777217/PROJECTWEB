-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2020 at 09:59 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `EmailId` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Name` varchar(24) NOT NULL,
  `ProfilePic` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`EmailId`, `Password`, `Name`, `ProfilePic`) VALUES
('r@gmailcom', '123', 'Roman', 'captain-america-avengers-2.jpg'),
('s@gmailcom', '1234', 'Seth', ''),
('bhardwajrishav89@gmail.com', 'rish', 'Rishav Bhardwaj', 'captain-america-avengers-2.jpg'),
('bhardwajrishav89@gmail.com', 'rish', 'Rishav Bhardwaj', 'captain-america-avengers-2.jpg'),
('ste@gmail.com', 'ste', 'steve rogers', ''),
('w@gmail.com', 'win', 'Winter Soldier', ''),
('hawk@gmail.com', 'haw', 'Hawk eye', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
