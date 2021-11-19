-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2019 at 06:01 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `client name` varchar(255) NOT NULL,
  `rid` int(11) NOT NULL,
  `car name` varchar(255) NOT NULL,
  `car seats` int(11) NOT NULL,
  `gasoline type` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:default; 1:rented; 2:available;',
  `capacity` int(11) NOT NULL,
  `speed` int(11) NOT NULL,
  `transmission` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:auto; 1:manual;',
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `client name`, `rid`, `car name`, `car seats`, `gasoline type`, `price`, `image`, `description`, `status`, `capacity`, `speed`, `transmission`, `image2`, `image3`) VALUES
(30, 'tadmin@gmail.com', 5, 'asd', 666, 'Premium', 123123, 'front (1).jpg', 'asdfasdf', 1, 3123123, 12312, 0, 'download.png', 'sampleeee.jpg'),
(32, 'admin@gmail.com', 2, 'mitsubishi Montero Sports', 7, 'Super', 3500, 'front (8).jpg', 'good for family trip and barkada Outing', 1, 4500, 220, 1, NULL, NULL),
(33, 'admin@gmail.com', 2, 'mitsubishi pajero Sports', 7, 'Super', 3300, 'front (9).jpg', 'good for family trip and barkada Outing', 2, 4500, 220, 1, NULL, NULL),
(34, 'admin@gmail.com', 2, 'honda Jazz', 5, 'Premium', 3500, 'front (1).jpg', 'good for family trip and barkada Outing', 0, 2000, 220, 1, NULL, NULL),
(35, 'admin@gmail.com', 2, 'ford ranger', 5, 'Unleaded', 3800, 'front (3).jpg', 'good for family trip and barkada Outing', 2, 3500, 220, 1, NULL, NULL),
(36, 'admin@gmail.com', 2, 'Toyota Hillux', 5, 'Super', 3900, 'Front (10).jpg', 'good for family trip and barkada Outing', 2, 3200, 220, 0, NULL, NULL),
(37, 'admin@gmail.com', 2, 'Honda Civic', 5, 'Premium', 2500, 'front (11).jpg', 'good for family trip and barkada Outing', 0, 2500, 220, 0, NULL, NULL),
(38, 'admin@gmail.com', 2, 'Hyundai Elantra', 5, 'Premium', 2600, 'front (12).jpg', 'good for family trip and barkada Outing', 0, 2500, 220, 0, NULL, NULL),
(39, 'admin@gmail.com', 2, 'Toyota Vios', 5, 'Premium', 2400, 'vios-car.png', 'good for family trip and barkada Outing', 0, 2500, 220, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `driver_rate`
--

CREATE TABLE `driver_rate` (
  `id` int(11) NOT NULL,
  `to` varchar(255) NOT NULL,
  `rate` int(11) NOT NULL,
  `from` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver_rate`
--

INSERT INTO `driver_rate` (`id`, `to`, `rate`, `from`, `date`) VALUES
(1, 'bene@bene.bene', 1, '', '2019-01-09 16:39:28'),
(2, 'bene@bene.bene', 5, '', '2019-01-09 16:39:30'),
(3, 'bene@bene.bene', 3, '', '2019-01-09 16:39:33'),
(4, 'bene@bene.bene', 3, 'bene@bene.bene', '2019-01-09 16:39:35'),
(5, 'bene@bene.bene', 4, 'bene@bene.bene', '2019-01-09 16:39:37'),
(6, 'bene@bene.bene', 1, 'bene@bene.bene', '2019-01-09 16:39:39');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id` int(11) NOT NULL,
  `renter name` varchar(255) NOT NULL,
  `client name` varchar(255) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `price` int(11) NOT NULL COMMENT 'actual price',
  `driver` varchar(255) NOT NULL DEFAULT '0' COMMENT '0:no driver; 1:driver;',
  `gate` int(11) NOT NULL DEFAULT '0' COMMENT '0:no; 1:yes;',
  `passenger` int(11) NOT NULL,
  `province` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `gas fee` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `car id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:default; 1:accepted; 2:declined;',
  `history` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:available; 1:deleted;',
  `payed` int(11) NOT NULL DEFAULT '0' COMMENT '0:no; 1:yes;'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id`, `renter name`, `client name`, `start`, `end`, `price`, `driver`, `gate`, `passenger`, `province`, `city`, `reason`, `gas fee`, `created`, `car id`, `status`, `history`, `payed`) VALUES
(10, 'tadmin@gmail.com', 'kev_pajarillaga@yahoo.com', '2018-11-29', '2018-12-02', 3000, '1', 0, 10, 'nueva vizcaya', '', 'Trip lang gumala', 0, '2018-11-09 06:38:08', 30, 2, 0, 0),
(19, 'admin@gmail.com', 'tadmin@gmail.com', '2018-12-23', '2018-12-28', 5000, '1', 1, 5, 'Bulacan', 'Pandi', 'trip lang gumala', 0, '2018-12-22 14:38:37', 36, 1, 0, 1),
(20, 'admin@gmail.com', 'tadmin@gmail.com', '2018-12-24', '2018-12-24', 2000, '1', 1, 4, 'Batangas', 'Cuenca', 'trip lang gumala', 0, '2018-12-25 13:43:02', 35, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `outbox`
--

CREATE TABLE `outbox` (
  `id` int(11) NOT NULL,
  `car id` int(11) NOT NULL,
  `renter name` varchar(255) NOT NULL,
  `client name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:accepted; 1:declined',
  `history` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:available; 1:deleted;',
  `date submitted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outbox`
--

INSERT INTO `outbox` (`id`, `car id`, `renter name`, `client name`, `message`, `status`, `history`, `date submitted`) VALUES
(3, 23, 'admin@gmail.com', 'tadmin@gmail.com', 'idk', 1, 1, '2018-10-26'),
(4, 25, 'admin@gmail.com', 'tadmin@gmail.com', 'wala akong pake', 1, 1, '2018-10-26'),
(6, 24, 'admin@gmail.com', 'tadmin@gmail.com', 'okay, take care.', 0, 1, '2018-10-26'),
(7, 32, 'admin@gmail.com', 'tadmin@gmail.com', '...', 0, 1, '2018-11-02'),
(8, 30, 'tadmin@gmail.com', 'kev_pajarillaga@yahoo.com', 'Too far', 1, 1, '2018-11-09'),
(9, 30, 'tadmin@gmail.com', 'admin@gmail.com', 'Have a safe trip', 0, 1, '2018-11-14'),
(10, 30, 'tadmin@gmail.com', 'admin@gmail.com', 'null', 1, 1, '2018-11-14'),
(11, 35, 'admin@gmail.com', 'tadmin@gmail.com', '...', 0, 1, '2018-11-28'),
(12, 36, 'admin@gmail.com', 'tadmin@gmail.com', '...', 0, 1, '2018-12-22'),
(13, 35, 'admin@gmail.com', 'tadmin@gmail.com', 'Take care', 0, 0, '2018-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `client name` varchar(255) NOT NULL,
  `owner name` varchar(255) NOT NULL,
  `total expenses` int(11) NOT NULL,
  `cash` int(11) NOT NULL,
  `customer change` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `car name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0:available; 1:deleted;'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `client name`, `owner name`, `total expenses`, `cash`, `customer change`, `date`, `car name`, `status`) VALUES
(2, 'tadmin@gmail.com', 'admin@gmail.com', 0, 500, 500, '2018-12-25 14:20:33', 'ford ranger', 1),
(3, 'bene@bene.bene', 'admin@gmail.com', 1000, 40000, 39000, '2019-01-09 15:54:22', 'mitsubishi pajero Sports', 0),
(4, 'bene@bene.bene', 'admin@gmail.com', 1000, 4999, 3999, '2019-01-09 15:55:21', 'mitsubishi pajero Sports', 0),
(5, 'bene@bene.bene', 'admin@gmail.com', 1000, 48989, 47989, '2019-01-09 15:56:08', 'mitsubishi pajero Sports', 0),
(6, 'bene@bene.bene', 'admin@gmail.com', 1000, 123123, 122123, '2019-01-09 15:57:27', 'mitsubishi pajero Sports', 0),
(7, 'bene@bene.bene', 'admin@gmail.com', 1000, 123123, 122123, '2019-01-09 15:57:57', 'mitsubishi pajero Sports', 0),
(8, 'bene@bene.bene', 'admin@gmail.com', 1000, 123123, 122123, '2019-01-09 16:00:29', 'mitsubishi pajero Sports', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `design` float NOT NULL,
  `friendly` float NOT NULL,
  `satisfying` float NOT NULL,
  `overall` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `carID` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:available; 1:deleted;'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `email`, `carID`, `time`, `status`) VALUES
(3, 'tadmin@gmail.com', 32, '2018-11-28 12:39:09', 0),
(6, 'kev_magtalas@yahoo.com', 35, '2018-11-28 12:58:30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `star`
--

CREATE TABLE `star` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `rate` int(11) NOT NULL,
  `dt_rated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `DoB` date NOT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `accType` int(11) NOT NULL COMMENT '0:user; 1:mm; 2:admin; 3: driver;',
  `first name` varchar(255) NOT NULL,
  `middle name` varchar(255) DEFAULT NULL,
  `last name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:inactive; 1:active; 2:deleted;',
  `verified` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: no; 1: yes;'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `image`, `username`, `password`, `email`, `contact`, `address`, `DoB`, `Created`, `accType`, `first name`, `middle name`, `last name`, `status`, `verified`) VALUES
(2, '', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', '09217589622', 'Mabini Street Purok 4, #025', '2000-09-08', '2019-01-02 11:41:26', 2, 'Admin', NULL, 'z3d4', 1, 1),
(3, '', 'Chrissy', '0f5520e286068354bce303a1627cdefc', 'chrissy@gmail.com', '0923564524', 'Maria theresa', '1999-06-02', '2019-01-02 12:06:28', 1, 'Christian', 'F', 'Christian', 2, 1),
(4, '', 'chadora27', 'dd708d1d139112def103fc5fae02752f', 'magtalas888@yahoo.com', '09752093747', 'magsaysay bayombong N.V.', '1998-09-27', '2019-01-02 12:06:31', 0, 'kevin', 'pajarillaga', 'kevin', 1, 1),
(5, '44156985_715383432161510_8026243550561697792_n.jpg', 'tadmin', '21232f297a57a5a743894a0e4a801fc3', 'tadmin@gmail.com', '09253083283', 'magsaysay bayombong N.V.', '1999-09-08', '2019-01-09 14:11:54', 0, 'tadmin', 'hakdog', 'tadmin', 1, 1),
(6, '', 'chadora000', '21232f297a57a5a743894a0e4a801fc3', 'kev_magtalas@yahoo.com', '09752093747', 'magsaysay bayombong N.V.', '1998-09-27', '2019-01-02 12:06:36', 2, 'kevin', 'pajarillaga', 'kevin', 1, 1),
(7, '', 'chadora00', 'dd708d1d139112def103fc5fae02752f', 'kev_magtalas1@yahoo.com', '09752093747', 'magsaysay bayombong N.V.', '1998-09-27', '2018-11-17 03:15:13', 0, 'kevin ', 'pajarillaga', 'kevin ', 0, 0),
(8, '', 'chadora00', 'dd708d1d139112def103fc5fae02752f', 'magtalas999@yahoo.com', '09752093747', 'magsaysay bayombong N.V.', '1998-09-27', '2018-11-17 03:15:15', 0, 'kevin ', 'pajarillaga', 'kevin ', 0, 0),
(9, '', 'chadora99', 'dd708d1d139112def103fc5fae02752f', 'kev_pajarillaga@yahoo.com', '09752093747', 'magsaysay bayombong N.V.', '1998-09-27', '2018-11-17 03:15:18', 0, 'kevin ', 'pajarillaga', 'kevin ', 0, 0),
(10, '', 'sample', '5e8ff9bf55ba3508199d22e984129be6', 'sample@gmail.com', '09253083283', 'magsaysay bayombong N.V.', '2000-12-09', '2018-12-14 08:32:10', 1, 'test', '', 'test', 0, 0),
(11, '', 'z3_d4', '5f4dcc3b5aa765d61d8327deb882cf99', 'z3@gmail.com', '09454720666', 'Nueva Ecija Cabanatuan City', '1999-09-08', '2019-01-09 17:01:00', 3, 'Benedict', 'Romero', 'Benedict', 1, 1),
(12, '', 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'admin2@gmail.com', '09253083283', 'Jan lang sa kanto', '1999-09-08', '2019-01-09 16:59:08', 3, 'Admin', '', 'Admin', 1, 1),
(13, '', 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'admin3@gmail.com', '09253083283', 'Jan lang sa kanto', '1999-09-08', '2019-01-09 16:59:00', 3, 'Admin', '', 'Admin', 1, 1),
(14, 'logo.png', 'bene', '21232f297a57a5a743894a0e4a801fc3', 'bene@bene.bene', '09253083283', 'Bartese', '1999-09-08', '2019-01-09 15:00:31', 3, 'bene', '', 'bene', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver_rate`
--
ALTER TABLE `driver_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outbox`
--
ALTER TABLE `outbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `star`
--
ALTER TABLE `star`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `driver_rate`
--
ALTER TABLE `driver_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `outbox`
--
ALTER TABLE `outbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `star`
--
ALTER TABLE `star`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
