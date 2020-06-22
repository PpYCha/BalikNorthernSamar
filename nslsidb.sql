-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 09:58 AM
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
  `dateOfTravel` date NOT NULL,
  `dateAdded` date NOT NULL,
  `travelpass_path` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `profilePic_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`AP_ID`, `firstName`, `middleName`, `lastName`, `dateOfBirth`, `civilStatus`, `presentCompleteAddress`, `contactNumberHead`, `emailHead`, `altContactNumberHead`, `altEmailHead`, `province`, `municipality`, `vehicleToBeUsed`, `pointOfOrigin`, `dateOfTravel`, `dateAdded`, `travelpass_path`, `profilePic_path`) VALUES
(40, 'Thurman ', '', 'Grimes ', '2020-06-24', 'Married ', '90 Jones Ridge, Poblacion, Talisay 1001 Bataan ', '292-634-730 ', 'wisoky.coty@hotmail.com ', ' 339-08-5750 ', ' ', 'Northern Samar ', 'Pambujan', 'Public Utility Vehicle ', '90 Jones Ridge, Poblacion, Talisay 1001 Bataan', '2020-06-22', '2020-06-18', '1592460531.jpg', ''),
(41, 'Amelie ', '', 'Kertzmann ', '2020-05-11', 'Single ', '24/05 Hagenes Mall, Poblacion, Iligan 9951 Bulacan ', '463-256-805 ', 'nikolaus.emerald@conroy.com ', '751-54-6377 ', ' ', 'Northern Samar ', 'Pambujan', 'Private Utiliy Vehicle ', '24/05 Hagenes Mall, Poblacion, Iligan 9951 Bulacan', '2020-06-23', '2020-06-18', '1592460679.jpg', ''),
(42, 'Lemuel ', '', 'Ebert ', '2021-02-03', 'Single ', '78/43 Ullrich Tunnel, Labo 3703 Bukidnon ', '412-679-419 ', 'jordi.wiza@hill.com ', ' ', ' ', 'Northern Samar ', 'San Roque', 'Public Utility Vehicle ', '78/43 Ullrich Tunnel, Labo 3703 Bukidnon', '2020-06-25', '2020-06-18', '1592460786.png', ''),
(43, 'Dr. Cristina', '', 'Kassulke IV ', '2020-06-16', 'Single ', '51/77 Olson Junction Suite 399, Poblacion, Butuan 7359 Biliran ', '471-303-107 ', 'rosina71@gmail.com ', ' ', ' ', 'Northern Samar ', 'Silvino Lobos', 'Public Utility Vehicle ', '51/77 Olson Junction Suite 399, Poblacion, Butuan 7359 Biliran', '2020-06-28', '2020-06-18', '1592461003.png', ''),
(44, 'aaaaa', 'aaa', 'aaaa ', '2020-06-19', 'Separated ', 'aaa ', 'aa ', 'aa ', 'aa ', 'aaa ', 'Northern Samar ', 'San Isidro', 'Public Utility Vehicle ', 'aaa', '2020-06-29', '2020-06-22', '1592783694.jpg', ''),
(45, 'adsda', 'sdad', 'dasdsa ', '2020-06-11', 'Married ', 'adas ', 'adsad ', 'dasdsa ', 'dsada ', 'asda ', 'Northern Samar ', 'San Jose', 'Private Utiliy Vehicle ', 'asdsa', '2020-06-17', '2020-06-22', '1592807263.png', '1592807263.jpg'),
(46, 'Alex', 'Gonzales', 'Olesco ', '2020-06-16', 'Separated ', 'hshsha ', 'hahaha ', 'hs ', 'hshhsh ', 'ha ', 'Northern Samar ', 'Gamay', 'Private Utiliy Vehicle ', 'bshxd', '2020-06-10', '2020-06-22', '1592807398.jpg', '1592807398.jpg'),
(47, 'asd', 'saasdas', 'asdsa ', '2020-06-21', 'Married ', 'asdasdsa ', 'asda ', 'asd ', 'asdsa ', 'aasdsa ', 'Northern Samar ', 'San Jose', 'Public Utility Vehicle ', 'asda', '2020-06-25', '2020-06-22', '1592811785.jpg', '1592811785.jpg');

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
  `profilePic_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`m_ID`, `Name`, `memContactNumber`, `memAddr`, `AP_ID`, `profilePic_path`) VALUES
(70, 'Dr. Makenzie Rogahn', '269-883-007', 'Baybay, Catmarn', 43, '0'),
(71, 'Kavon Kulas', '764-349-641', 'Talisay, Catmarn', 43, '0'),
(72, 'Gretchen Jacobson V', '916-018-165', 'Ipil-ipil, Catmarn', 43, '0'),
(73, 'aa', 'aa', 'aaa', 44, '0'),
(74, 'bbb', 'bb', 'bbb', 44, '0'),
(75, 'ccc', 'ccc', 'ccc', 44, '0');

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
  MODIFY `AP_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `m_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
