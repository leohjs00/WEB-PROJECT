-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2020 at 11:26 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrentalsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`password`) VALUES
('admin');

-- --------------------------------------------------------

--
-- Table structure for table `aprroval`
--

CREATE TABLE `aprroval` (
  `idupdate` int(11) NOT NULL,
  `availability` varchar(50) NOT NULL,
  `bookingstatus` varchar(255) NOT NULL,
  `carcondition` varchar(255) NOT NULL,
  `currentloc` varchar(255) NOT NULL,
  `staffname` varchar(255) NOT NULL,
  `number` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aprroval`
--

INSERT INTO `aprroval` (`idupdate`, `availability`, `bookingstatus`, `carcondition`, `currentloc`, `staffname`, `number`) VALUES
(1, 'Bezza now at customer', 'Pending', 'Good', 'Penang', 'Mogana Priya', 1111482783),
(2, 'Avanza now free', 'Booked', 'Perfect', 'Kuala Lumpur', 'Harrsion ', 124539432),
(3, 'Myvi at Workshop', 'cancel', 'in maintanance', 'office workshop', '0', 0),
(4, 'Hiece Not available', 'cancel', 'out of country', 'Australia', 'no', 0),
(5, 'Honda Civic now available', 'Success', 'Perfect', 'office ', 'Saras', 123354726);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `idbooking` int(10) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `age` int(20) NOT NULL,
  `icnum` varchar(255) NOT NULL,
  `caddress` varchar(255) NOT NULL,
  `contactnumber` int(255) NOT NULL,
  `licensetype` varchar(100) NOT NULL,
  `carname` varchar(100) NOT NULL,
  `bookingdate` date NOT NULL,
  `returndate` date NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`idbooking`, `fullname`, `age`, `icnum`, `caddress`, `contactnumber`, `licensetype`, `carname`, `bookingdate`, `returndate`, `email`) VALUES
(1, 'Leo Melvin', 20, '000209090159', 'Mata Ayer 2', 1111482783, 'B2,D', 'Bezza', '2020-12-24', '2020-12-25', 'leo@gmail.com'),
(2, 'Danish', 22, '000222090076', 'Kangar', 111112254, 'D', 'Avanza', '2020-12-23', '2020-12-25', 'danish@gmail.com'),
(3, 'Thurkes', 20, '000481090078', 'Pauh,Perlis', 1761551222, 'b2,d', 'MYVI', '2020-12-25', '2020-12-26', 'thurkes@gmail.com'),
(4, 'Suzana Ann', 23, '000510090788', 'sungai petani', 124435635, 'D', 'Hiece', '2020-12-11', '2020-12-17', 'suzanaann55@gmail.com'),
(5, 'Suganesan', 22, '990988109987', 'Sungai Besi', 124453725, 'D', 'Honda Civic', '2020-12-30', '2020-12-31', 'suganesan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `idCar` int(50) NOT NULL,
  `carname` varchar(100) NOT NULL,
  `carbrand` varchar(100) NOT NULL,
  `priceperhour` int(11) NOT NULL,
  `priceperday` int(11) NOT NULL,
  `priceperweek` int(11) NOT NULL,
  `carpicture` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`idCar`, `carname`, `carbrand`, `priceperhour`, `priceperday`, `priceperweek`, `carpicture`) VALUES
(5, 'Bezza', 'Proton', 20, 150, 400, 'images/pic2.jpg'),
(6, 'IRIZ', 'Proton', 63, 488, 280, 'uploads/pic1.jpg'),
(7, 'Avanza', 'Toyota MPV', 30, 300, 150, 'uploads/toyota-avanza-2014-recall-fuel-leak.jpg'),
(8, 'Civic', 'Honda', 50, 600, 200, 'uploads/6d4edd4fecdf4b1f92d0468e0d31e84c_750x420.jpg'),
(9, 'X50', 'Proton', 100, 800, 400, 'uploads/download (1).jpg'),
(10, 'Hiece', 'Toyota', 100, 890, 400, 'uploads/toyota-hiace-for-rent-kl-selangor.png'),
(11, 'MYVI', 'Perodua', 20, 488, 190, 'uploads/Myvi-1.5-SE_1_4_FRONT-LEFT_LIGHTS-ON.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `idCustomer` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`idCustomer`, `username`, `password`) VALUES
(1, 'leo', 'leo123'),
(2, 'herman', 'herman');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `idStaff` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`idStaff`, `username`, `password`) VALUES
(1, 'staff', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`password`);

--
-- Indexes for table `aprroval`
--
ALTER TABLE `aprroval`
  ADD PRIMARY KEY (`idupdate`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`idbooking`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`idCar`),
  ADD UNIQUE KEY `carname` (`carname`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idCustomer`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`idStaff`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aprroval`
--
ALTER TABLE `aprroval`
  MODIFY `idupdate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `idbooking` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `idCar` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idCustomer` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `idStaff` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
