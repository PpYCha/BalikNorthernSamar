-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 11:48 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nslsidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `AP_ID` int(255) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `middleName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `civilStatus` varchar(100) NOT NULL,
  `presentCompleteAddress` varchar(100) NOT NULL,
  `contactNumberHead` varchar(100) NOT NULL,
  `emailHead` varchar(100) NOT NULL,
  `altContactNumberHead` varchar(100) NOT NULL,
  `altEmailHead` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `municipality` varchar(100) NOT NULL,
  `vehicleToBeUsed` varchar(100) NOT NULL,
  `pointOfOrigin` varchar(100) NOT NULL,
  `dateOfTravel` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`AP_ID`, `firstName`, `middleName`, `lastName`, `dateOfBirth`, `civilStatus`, `presentCompleteAddress`, `contactNumberHead`, `emailHead`, `altContactNumberHead`, `altEmailHead`, `province`, `municipality`, `vehicleToBeUsed`, `pointOfOrigin`, `dateOfTravel`) VALUES
(1, 'Diasan', 'Abria', 'Diaz; ', '0000-00-00', 'Single ', '138, Balite St, Brgy. Acacia, Catarman Northern Samar ', '09100147388 ', 'example@gmail.com ', ' ', ' ', 'Northern Samar ', 'Catarman', 'Public Utility Vehicle ', 'pointOfOrigin', '0000-00-00'),
(2, 'Diasan', 'Abria', 'Diaz; ', '0000-00-00', 'Single ', '138, Balite St, Brgy. Acacia, Catarman Northern Samar ', '09100147388 ', 'example@gmail.com ', ' ', ' ', 'Northern Samar ', 'Catarman', 'Public Utility Vehicle ', 'pointOfOrigin', '0000-00-00'),
(3, 'Diasan', 'Abria', 'Diaz; ', '0000-00-00', 'Single ', '138, Balite St, Brgy. Acacia, Catarman Northern Samar ', '09100147388 ', 'example@gmail.com ', ' ', ' ', 'Northern Samar ', 'Catarman', 'Public Utility Vehicle ', 'pointOfOrigin', '0000-00-00'),
(4, '', 'sadsa', 'asdasd ', '2020-06-24', 'Separated ', 'asdadsada ', ' ', 'asda ', 'asdad ', 'sadsa ', ' ', 'Rosario', 'Private Utilit Vehicle ', 'pointOfOrigin', '2020-06-29'),
(5, '', '', ' ', '0000-00-00', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '', ' ', 'pointOfOrigin', '0000-00-00'),
(6, '', '', ' ', '0000-00-00', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '', ' ', 'pointOfOrigin', '0000-00-00'),
(7, '', '1231', '123 ', '2020-06-04', 'Single ', '12313 ', '123 ', '123 ', '1231 ', '123 ', ' ', 'San Antonio', 'Public Utility Vehicle ', 'pointOfOrigin', '2020-07-01'),
(8, '', '', ' ', '0000-00-00', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '', ' ', 'pointOfOrigin', '0000-00-00'),
(9, 'ffffff', 'mmmm', 'llll ', '2020-06-12', 'Married ', 'adsada ', 'adssa ', 'asdsad ', 'sadad ', 'asdsad ', ' ', 'San Antonio', 'Private Utilit Vehicle ', 'pointOfOrigin', '2020-06-24'),
(10, '123213', '12313', '213312 ', '2020-06-19', 'Separated ', '123213 ', '1231 ', '1231 ', '1231 ', '123 ', ' ', 'Catarman', 'Private Utilit Vehicle ', 'pointOfOrigin', '2020-06-17'),
(11, '', '', ' ', '0000-00-00', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '', ' ', 'pointOfOrigin', '0000-00-00'),
(12, 'asad', 'adsada', 'adsa ', '2020-06-17', 'Married ', 'asdsad ', 'asdasd ', 'adsa ', 'asda ', 'asda ', 'Calbayog ', 'Catubig', 'Private Utilit Vehicle ', 'pointOfOrigin', '2020-06-25'),
(13, '123213', '12313', '213312 ', '2020-06-19', 'Separated ', '123213 ', '1231 ', '1231 ', '1231 ', '123 ', 'Northern Samar ', 'Catarman', 'Private Utilit Vehicle ', 'pointOfOrigin', '2020-06-17'),
(14, '', '', ' ', '0000-00-00', ' ', ' ', ' ', ' ', ' ', ' ', 'Northern Samar ', '', ' ', 'pointOfOrigin', '0000-00-00'),
(15, '', '', ' ', '0000-00-00', ' ', ' ', ' ', ' ', ' ', ' ', 'Northern Samar ', '', ' ', '', '0000-00-00'),
(16, 'asdadad;;;;', '\'\'\'\'', 'adsada ', '2020-07-02', 'Married ', '231231asds ', 'asda ', 'asdsaadssa ', 'sadaasdsa ', '\'\' ', 'Northern Samar ', 'Pambujan', 'Public Utility Vehicle ', 'adssaa', '2020-06-17'),
(17, 'asdadad;;;;', '\'\'\'\'', 'adsada ', '2020-07-02', 'Married ', '231231asds ', 'asda ', 'asdsaadssa ', 'sadaasdsa ', '\'\' ', 'Northern Samar ', 'Pambujan', 'Public Utility Vehicle ', 'adssaa', '2020-06-17'),
(18, 'asdsasad', 'asdsad', 'asdsad ', '2020-06-25', 'Separated ', 'asdsadsa ', 'asda ', 'asdsa ', 'asdas ', 'asdda ', 'Northern Samar ', 'Palapag', 'Public Utility Vehicle ', 'asdsadsad', '2020-06-23'),
(19, 'asdsa', 'asdasda', 'asdsa ', '2020-06-04', 'Widower ', 'aadasd ', 'adsa ', 'adas ', 'asdsa ', 'aasdsa ', 'Northern Samar ', 'Mondragon', 'Private Utilit Vehicle ', 'asdsa', '2020-06-03'),
(20, 'asdsa', 'asda', 'adsa ', '2020-06-10', 'Separated ', 'asdsadsa ', 'asdsad ', 'asdsad ', 'asdasd ', 'adsa ', 'Northern Samar ', 'Pambujan', 'Private Utilit Vehicle ', 'asdsa', '2020-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `m_ID` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `memContactNumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`AP_ID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`m_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `AP_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `m_ID` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
