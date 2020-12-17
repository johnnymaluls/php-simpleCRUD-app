-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 12:03 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee2`
--

CREATE TABLE `employee2` (
  `ID` int(11) NOT NULL,
  `Fname` varchar(80) NOT NULL,
  `Mname` varchar(80) NOT NULL,
  `Lname` varchar(80) NOT NULL,
  `Gender` char(1) NOT NULL,
  `Birthdate` datetime NOT NULL,
  `Startdate` datetime NOT NULL,
  `Address` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee2`
--

INSERT INTO `employee2` (`ID`, `Fname`, `Mname`, `Lname`, `Gender`, `Birthdate`, `Startdate`, `Address`) VALUES
(4, 'hjgjhg', 'Boyles', 'asdasd', 'F', '1994-04-22 00:00:00', '2002-08-12 00:00:00', 'Las Pinas'),
(5, 'Karen ', 'Boyle', 'Cardenas', 'F', '1994-07-20 00:00:00', '2020-05-22 00:00:00', 'Makati'),
(6, 'Boyd ', 'Cardenas', 'Leonard', 'M', '1995-12-21 00:00:00', '2018-09-27 00:00:00', 'Makati'),
(7, 'Fannie', 'Leonard', 'Whitney', 'F', '1994-01-01 00:00:00', '2017-05-16 00:00:00', 'Malabon'),
(8, 'Felicia', 'Traynor', 'Hendricks', 'F', '1996-05-07 00:00:00', '2019-03-12 00:00:00', 'Caloocan'),
(9, 'Ciaran', 'Sampson', 'Lewis', 'F', '1994-08-12 00:00:00', '2017-04-15 00:00:00', 'Pateros'),
(10, 'Kester ', 'Hendricks', 'Johnson', 'M', '1991-04-14 00:00:00', '2018-03-04 00:00:00', 'Quezon City'),
(11, 'Yusuf ', 'Mccall', 'Wiggins', 'M', '1990-08-12 00:00:00', '2018-01-01 00:00:00', 'Valenzuela'),
(12, 'Joyce ', 'Pinoy', 'Cano', 'F', '1997-09-09 00:00:00', '2019-12-25 00:00:00', 'Navotas'),
(13, 'Lyla', 'Barrow', 'Solis', 'F', '1991-06-13 00:00:00', '2019-02-23 00:00:00', 'Basilan'),
(14, 'Theodore ', 'Evelyn', 'Mosby', 'M', '1994-12-25 00:00:00', '2019-02-16 00:00:00', 'San Juan'),
(16, 'Lily', 'Jane', 'Collins', 'F', '1992-06-22 00:00:00', '2017-02-28 00:00:00', 'Valenzuela'),
(17, 'Robin', 'Charles', 'Scherbatzky', 'F', '1989-09-12 00:00:00', '2018-10-31 00:00:00', 'Sulu'),
(18, 'Marshall', 'Matt', 'Eriksen', 'M', '1990-08-11 00:00:00', '2018-04-06 00:00:00', 'Paranaque'),
(19, 'Daisy', 'Rose', 'Summers', 'F', '1990-06-12 00:00:00', '2018-07-12 00:00:00', 'Taguig'),
(21, 'Mia', 'Beck', 'Whitaker', 'F', '1899-12-07 00:00:00', '2018-12-31 00:00:00', 'Cebu'),
(22, 'iiiuiu', 'Eastwood', 'Blair', 'F', '1992-02-29 00:00:00', '2018-09-26 00:00:00', 'Quezon City'),
(23, 'Cassie', 'Choi', 'Laine', 'F', '1990-11-20 00:00:00', '2018-09-28 00:00:00', 'Caloocan'),
(24, 'George', 'Boy', 'Clooney', 'M', '1990-07-17 00:00:00', '2018-09-25 00:00:00', 'Cavite'),
(25, 'Lily', 'Jones', 'Radar', 'F', '1990-11-20 00:00:00', '2018-09-27 00:00:00', 'Taguig'),
(26, 'Leah', 'Bridgette', 'Gohti', 'F', '1990-07-23 00:00:00', '2018-09-27 00:00:00', 'San Juan'),
(27, 'Piper', 'Lee', 'Peri', 'F', '1990-11-13 00:00:00', '2018-09-28 00:00:00', 'Malabon'),
(28, 'Tania', 'Terra', 'Lynn', 'F', '1990-07-12 00:00:00', '2018-09-27 00:00:00', 'Pasig'),
(29, 'Bob', 'Bobbinson', 'Marley', 'M', '1990-10-16 00:00:00', '2018-09-28 00:00:00', 'Pasig'),
(30, 'July', 'June', 'Whitaker', 'M', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Alabama'),
(31, 'Zackery', 'Bush', 'Alford', 'M', '1991-01-22 00:00:00', '2018-09-28 00:00:00', 'Florida'),
(32, 'Maria', 'Palad', 'Okinawa', 'F', '1990-12-17 00:00:00', '2018-09-28 00:00:00', 'Delaware'),
(33, 'Johnny', 'Joe', 'Simps', 'M', '1990-10-13 00:00:00', '2018-09-07 00:00:00', 'Iowa'),
(34, 'Natalie', 'Lee', 'Portman', 'F', '1990-08-20 00:00:00', '2018-09-17 00:00:00', 'Iowa'),
(35, 'Augusto Cesar', 'Salvador', 'Dela Cruz', 'M', '1996-10-25 00:00:00', '2018-09-27 00:00:00', 'Mandaluyong'),
(36, 'Bradd', 'Dickinson', 'Pitt', 'M', '1992-12-11 00:00:00', '2018-09-26 00:00:00', 'Delaware'),
(37, 'John', 'Rey', 'Malulan', 'M', '1992-11-10 00:00:00', '2018-09-28 00:00:00', 'Pasig'),
(38, 'Zildjian', 'Alejandro', 'Recongco', 'M', '1990-12-30 00:00:00', '2018-09-26 00:00:00', 'Makati'),
(39, 'Aram', 'Mapagmahal', 'Sarmiento', 'M', '1990-11-20 00:00:00', '2018-09-27 00:00:00', 'Mandaluyong'),
(40, 'Reyansh', 'Arnav', 'Muhammad', 'M', '1990-12-20 00:00:00', '2018-09-21 00:00:00', 'Pasig'),
(41, 'Madhavaditya', 'Dhruv', 'Krishna', 'M', '1995-03-12 00:00:00', '2018-09-28 00:00:00', 'Navotas'),
(42, 'Kabir', 'Arush', 'Rudra', 'M', '1990-12-22 00:00:00', '2018-09-26 00:00:00', 'Delaware'),
(43, 'Rajesh', 'Vijay', 'Bodhi', 'M', '1991-11-08 00:00:00', '2018-09-28 00:00:00', 'Ohio'),
(44, 'Djardel', 'Mampu', 'Mampusti', 'M', '1990-12-16 00:00:00', '2018-09-18 00:00:00', 'Mandaluyong'),
(45, 'Fathima ', 'Eastwood', 'Choi', 'F', '1992-12-30 00:00:00', '2018-09-14 00:00:00', 'Muntinlupa'),
(46, 'Sean', 'Tracy', 'Ang', 'F', '1994-10-25 00:00:00', '2018-09-28 00:00:00', 'Caloocan'),
(47, 'Caiomhe', 'Reed', 'Schaefer', 'F', '1990-09-19 00:00:00', '2018-09-28 00:00:00', 'Delaware'),
(48, 'Rohan', ' Siddharth', 'Advik', 'M', '1990-04-19 00:00:00', '2018-09-28 00:00:00', 'Iowa'),
(51, 'Eliseo', 'Osorio', 'Cipriano', 'M', '1994-06-26 00:00:00', '2018-09-27 00:00:00', 'Pasig'),
(52, 'James Joseph', 'Solis', 'Loyola', 'M', '1994-09-13 00:00:00', '2018-07-27 00:00:00', 'Cavite'),
(53, 'Mark Anthony', 'Soliza', 'Pinon', 'M', '1994-01-10 00:00:00', '2018-09-28 00:00:00', 'Pasig'),
(54, 'Josel James', 'Favia', 'Fetalino', 'M', '1994-02-17 00:00:00', '2018-09-18 00:00:00', 'Manila'),
(56, 'NIno', 'Russell', 'Malquez', 'M', '1994-09-07 00:00:00', '2018-09-28 00:00:00', 'Manila'),
(57, 'Kharl', 'Russell', 'Malquez', 'M', '1994-09-28 00:00:00', '2018-09-28 00:00:00', 'Manila'),
(59, 'Blathnaid', 'Eastwood', 'Collins', 'F', '1990-10-19 00:00:00', '2018-09-14 00:00:00', 'Pasig'),
(60, 'Clodagh', 'Cruz', 'Stinson', 'F', '1990-09-01 00:00:00', '2018-09-27 00:00:00', 'Delaware'),
(61, 'Einin', 'Eithne', 'Eimear', 'F', '1990-03-19 00:00:00', '2018-09-28 00:00:00', 'Ohio'),
(62, 'John Paul', 'Guiquing', 'Rey', 'M', '1992-02-02 00:00:00', '1992-02-02 00:00:00', 'Pasig City');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `Name`, `Type`, `Username`, `password`) VALUES
(1, 'johnrey', 'admin', 'johnrey', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee2`
--
ALTER TABLE `employee2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee2`
--
ALTER TABLE `employee2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
