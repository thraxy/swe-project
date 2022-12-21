-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 04:01 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkinggarage`
--

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE `entries` (
  `name` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zipcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`name`, `address`, `city`, `state`, `zipcode`) VALUES
('test', '100 park blvd', 'some', 'where', 0),
('test', '100 park blvd', 'some', 'where', 0),
('test2', '123 park blvd', 'some', 'where', 1),
('SP+ Parking', '115 N 5th Street', 'Camden', 'NJ', 8102),
('Camden Technology Center Parking Garage', '622-698 Penn Street', 'Camden', 'NJ', 8102),
('Waterfront Garage', '10 Delaware Ave', 'Camden', 'NJ', 8102),
('Camden Parking Authority', '16S S 5th Street', 'Camden', 'NJ', 8103),
('43 South 2nd Street Garage', '43 S 2nd Street', 'Philadelphia', 'PA', 19106),
('Park America', '215 N 2nd Street', 'Philadelphia', 'PA', 19106),
('Washington Square Garage', '249 S 6th Street', 'Philadelphia', 'PA', 19106),
('430 Federal St Parking', '430 Federal Street', 'Camden', 'NJ', 8103),
('Edgewater Garage', '2301 Race Street', 'Philadelphia', 'PA', 19103),
('North Street Parking Garage', '75 W North St', 'Bethlehem', 'PA', 18018),
('Latimer Garage', '1510 Latimer St', 'Philadelphia', 'PA', 19102),
('ABM Parking Lot', '1305 Market St', 'Philadelphia', 'PA', 19107);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
