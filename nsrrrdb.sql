-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2020 at 04:04 AM
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
-- Database: `nsrrrdb`
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
  `dateOfTravel` date NOT NULL,
  `dateAdded` date NOT NULL,
  `travelpass_path` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `profilePic_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`AP_ID`, `firstName`, `middleName`, `lastName`, `dateOfBirth`, `civilStatus`, `presentCompleteAddress`, `contactNumberHead`, `emailHead`, `altContactNumberHead`, `altEmailHead`, `province`, `municipality`, `vehicleToBeUsed`, `pointOfOrigin`, `dateOfTravel`, `dateAdded`, `travelpass_path`, `profilePic_path`) VALUES
(104, 'Marlen ', '', 'Ritchie ', '2020-07-10', 'Widower ', '28/62 Hansen Port, Poblacion, Lapu-Lapu 9407 Cagayan ', '523-465-708 ', ' erin14@white.org ', ' ', ' ', 'Northern Samar ', 'San Jose', 'Public Utility Vehicle ', '28/62 Hansen Port, Poblacion, Lapu-Lapu 9407 Cagayan', '2020-07-09', '2020-06-29', '1593412547.jpg', '1593412547.jpg'),
(105, 'Prof. Theresa ', '', 'Johns ', '2020-07-10', 'Separated ', '25A Braun Wall, Poblacion, Meycauayan 2361 Isabela ', '192-990-298 ', 'fvonrueden@gmail.com ', ' ', ' ', 'Northern Samar ', 'San Antonio', 'Public Utility Vehicle ', '25A Braun Wall, Poblacion, Meycauayan 2361 Isabela', '2020-07-11', '2020-06-29', '1593412838.jpg', '1593412838.jpg'),
(106, 'asda', 'dsadsa', 'sdsad ', '2020-06-26', 'Married ', 'asdas ', 'asd ', 'sadsad ', 'sadad ', 'dasdasd ', 'Northern Samar ', 'San Jose', 'Private Utiliy Vehicle ', 'asdsadad', '2020-06-26', '2020-06-29', '1593415211.jpg', '1593415211.jpg'),
(107, 'asds', 'adsada', 'sdasdasd ', '2020-07-03', 'Separated ', 'asda ', 'asdasd ', 'asd ', 'sadasd ', 'as ', 'Northern Samar ', 'San Isidro', 'Private Utiliy Vehicle ', 'asdasdsa', '2020-07-09', '2020-06-29', '1593415473.png', '1593415473.jpg'),
(108, 'adsaa\'\'\'', '\'\'\'', '\'\'\' ', '2020-07-01', 'Separated ', '\'\' ', '\'\'\' ', '\'\' ', '\'\' ', '\'\' ', 'Northern Samar ', 'San Jose', 'Public Utility Vehicle ', 'asdada', '2020-07-09', '2020-06-30', '1593481957.jpg', '1593481957.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`id`, `name`, `user_name`, `password`) VALUES
(1, 'administrator', 'admin', 'admin'),
(2, 'administrator', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `m_ID` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `memContactNumber` varchar(100) NOT NULL,
  `memAddr` varchar(100) NOT NULL,
  `AP_ID` int(11) NOT NULL,
  `memProfilePic_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`m_ID`, `Name`, `memContactNumber`, `memAddr`, `AP_ID`, `memProfilePic_path`) VALUES
(119, 'AAAAAAAAAA', 'AAAAAAAAAAAA', 'AAAAAAAA', 105, '1593412838.jpg'),
(120, 'BBBBB', 'BBBBBB', 'BBBBB', 105, '1593412838.jpg'),
(121, 'adsa', 'asdsa', 'asdsad', 106, '1593415211.png'),
(122, 'asd', 'adad', 'adadadasdd', 106, '1593415211.jpg'),
(123, 'asd', 'adada', 'dsadad', 107, '1593415473.jpg'),
(124, '', '', '', 107, '1593415473.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`AP_ID`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `AP_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `m_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
