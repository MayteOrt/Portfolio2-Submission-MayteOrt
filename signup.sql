-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 10:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bake`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `parentname` varchar(25) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `donation` varchar(25) NOT NULL,
  `grade` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`parentname`, `phone`, `donation`, `grade`) VALUES
('Kate Sharma', '813-444-5689', 'Sugar Cookie', '3rd Grade'),
('Siena Britton', '756-785-2974', 'Madeleines', '5th Grade'),
('Paolo Haynes', '352-457-5555', 'Macarons', '3rd Grade'),
('Amira Cash', '251-547-6726', 'Cannoli', '2nd Grade'),
('Pippa Miles', '222-578-6987', 'Peach Crumb Bars', '1st Grade'),
('Ebonie Webb', '756-457-8989', 'Lemon Bars', '4th Grade'),
('Tai Gates', '424-725-1235', 'Chocolate Chip Cookies', '3rd Grade'),
('Saylor Blackwell', '352-565-3541', 'Banana Chiffon Cake', '5th Grade'),
('Connor Becks', '222-445-7845', 'Classic Blondies', '2nd Grade'),
('Astraea Nocturne', '813-457-2513', 'Lemon Chiffon Cake', '1st Grade');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
