-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 11:16 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `virago`
--

-- --------------------------------------------------------

--
-- Table structure for table `acceptedjobs`
--

CREATE TABLE `acceptedjobs` (
  `id` int(11) NOT NULL,
  `AJ_uniqueID` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `JB_UniqueID` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `JS_UniqueID` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acceptedjobs`
--

INSERT INTO `acceptedjobs` (`id`, `AJ_uniqueID`, `JB_UniqueID`, `JS_UniqueID`, `comment`) VALUES
(1, 'AJ_5ac8bb39c7ba72.73579935', 'JB_5ac70cc4337165.56900132', 'VIRAGO_JS_5aaca7648a62b8.12909527', 'I will come 30 earlier. '),
(2, 'AJ_5ac8bb4e0b0e46.86018858', 'JB_5ac70cc4337165.56900132', 'VIRAGO_JS_5aaca7648a62b8.12909527', 'I will come 30 earlier. '),
(3, 'AJ_5ac8bb60ea69f6.41738934', 'JB_5ac70cc4337165.56900132', 'VIRAGO_JS_5aaca7648a62b8.12909527', 'dfjdmxcgfmk rsyhm rytg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`) VALUES
(1, 'Cleaner'),
(2, 'Communication'),
(3, 'Cook'),
(4, 'House Keeper'),
(5, 'Care Giver'),
(6, 'Service'),
(7, 'Tailor'),
(8, 'Superviser'),
(9, 'Tutor'),
(10, 'Babysitter'),
(11, 'Gardener'),
(12, 'Caterer'),
(13, 'Hair Stylist'),
(14, 'MakeUp Artist'),
(15, 'Driver'),
(16, 'Plunber'),
(17, 'Florist'),
(18, 'Event Planner'),
(19, 'Marketer'),
(20, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `ID` int(11) NOT NULL,
  `firstName` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `CL_UniqueID` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `userType` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`ID`, `firstName`, `lastName`, `email`, `password`, `address`, `phone`, `CL_UniqueID`, `userType`) VALUES
(2, 'Thierno Abdoul Rahimi', 'Diallo', 'rimi18@virago.com', '123456', 'Jalan Imbi', '01111111111', 'VIRAGO_CLT_5aaca9cb52d6a5.95659237', 1);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8_unicode_ci NOT NULL,
  `userID` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--


-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `ID` int(11) NOT NULL,
  `jobTitel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `stDate` date NOT NULL,
  `edDate` date NOT NULL,
  `stTime` time NOT NULL,
  `status` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'available',
  `JB_UniqueID` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `CL_UniqueID` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`ID`, `jobTitel`, `address`, `category`, `price`, `stDate`, `edDate`, `stTime`, `status`, `JB_UniqueID`, `CL_UniqueID`) VALUES
(1, 'House Cleanning', 'Jalan Damansara, desa kiara condominium', 'cleanning', 100, '2018-03-02', '2018-03-03', '16:00:00', 'available', 'JB_5aaca9cb52d6a5.95659237', 'VIRAGO_CLT_5aaca9cb52d6a5.95659237'),
(2, 'House Cleanning', 'Jalan Damansara Desa Kiara Condominium 695-20-04', 'Cleaner', 250, '2018-03-20', '2018-03-21', '16:00:00', 'available', 'JB_5aaec05d610953.99287767', 'VIRAGO_CLT_5aaca9cb52d6a5.95659237'),
(6, 'Babysitting', 'Damansara Height', 'Babysitter', 150, '2018-03-26', '2018-03-26', '20:00:00', 'available', 'JB_5ab3ff75ce5aa3.74173423', 'VIRAGO_CLT_5aaca9cb52d6a5.95659237'),
(7, 'Marketing', 'Damansara Height', 'Marketer', 1400, '2018-03-26', '2018-03-30', '21:00:00', 'available', 'JB_5ab407b01ebd07.09062721', 'VIRAGO_CLT_5aaca9cb52d6a5.95659237'),
(8, 'Babysitting', 'Jalan Help University', 'Babysitter', 250, '2018-03-23', '2018-03-23', '18:30:00', 'available', 'JB_5ab45f28036115.33436115', 'VIRAGO_CLT_5aaca9cb52d6a5.95659237'),
(9, 'Care Giver', 'Jalan Help University', 'Care Giver', 250, '2018-04-09', '2018-04-10', '14:00:00', 'available', 'JB_5ac70cc4337165.56900132', 'VIRAGO_CLT_5aaca9cb52d6a5.95659237');

-- --------------------------------------------------------

--
-- Table structure for table `jobseekers`
--

CREATE TABLE `jobseekers` (
  `jobSeekersID` int(11) NOT NULL,
  `firstName` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `specialty` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `JS_UniqueID` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `userType` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jobseekers`
--

INSERT INTO `jobseekers` (`jobSeekersID`, `firstName`, `lastName`, `email`, `password`, `address`, `phone`, `specialty`, `JS_UniqueID`, `userType`) VALUES
(1, 'Thierno Abdoul Rahimi', 'Diallo', 'tard916@gmail.com', '7894561', 'Jalan Damansara, KL 60000', '12345678901', 'House Cook', 'VIRAGO_JS_5aa5e4e37f1542.78562560', 0),
(2, 'Emmanuel', 'Olalere', 'ema@virago.com', '12345678', 'Jalan IKEA, Kuala Lumpur Malaysia', '01000000000', 'cook', 'VIRAGO_JS_5aaca7648a62b8.12909527', 0),
(3, 'Thierno Abdoul Rahimi', 'Diallo', 'tard916@outlook.com', '123456789', 'Jalan Damansara', '0122231343', 'cook', 'VIRAGO_JS_5aae127e8e3b95.65419630', 0),
(4, 'Alpha Oumar', 'Sall', 'alpha@virago.com', '1234567', 'Jalan Imbi', '012003300', 'cleaner', 'VIRAGO_JS_5aaf0032a77ae2.39579290', 0),
(5, 'Emanuel', 'sSomethin', 'g@mail.com', 'password', '28 jalan damansara', '019225848', 'Cleaner', 'VIRAGO_JS_5ab45beeb7c769.52337267', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `userType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `email`, `password`, `userType`) VALUES
('VIRAGO_JS_5aa5e4e37f1542.78562560', 'Thierno Abdoul Rahimi', 'tard916@gmail.com', '7894561', 0),
('VIRAGO_JS_5aaca7648a62b8.12909527', 'Emmanuel', 'ema@virago.com', '12345678', 0),
('VIRAGO_JS_5aae127e8e3b95.65419630', 'Thierno Abdoul Rahimi', 'tard916@outlook.com', '123456789', 0),
('VIRAGO_JS_5aaf0032a77ae2.39579290', 'Alpha Oumar', 'alpha@virago.com', '1234567', 0),
('VIRAGO_JS_5ab45beeb7c769.52337267', 'Emanuel', 'g@mail.com', 'password', 0),
('VIRAGO_CLT_5aaca9cb52d6a5.95659237', 'Thierno Abdoul Rahimi', 'rimi18@virago.com', '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acceptedjobs`
--
ALTER TABLE `acceptedjobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `jobseekers`
--
ALTER TABLE `jobseekers`
  ADD PRIMARY KEY (`jobSeekersID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acceptedjobs`
--
ALTER TABLE `acceptedjobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jobseekers`
--
ALTER TABLE `jobseekers`
  MODIFY `jobSeekersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
