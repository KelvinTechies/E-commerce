-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 03:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auto`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `Business name` varchar(255) NOT NULL,
  `House Address` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Phone number` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Company Address` varchar(255) NOT NULL,
  `New Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `id` int(11) NOT NULL,
  `Product_name` varchar(1000) NOT NULL,
  `Product_brand` varchar(1000) NOT NULL,
  `Product_Mileage` varchar(255) NOT NULL,
  `Product_description` text NOT NULL,
  `Product_year` varchar(1000) NOT NULL,
  `Product_price` int(11) NOT NULL,
  `Date_uploaded` varchar(50) NOT NULL,
  `Product_image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`id`, `Product_name`, `Product_brand`, `Product_Mileage`, `Product_description`, `Product_year`, `Product_price`, `Date_uploaded`, `Product_image`) VALUES
(30, 'car', 'lexus e350', '', '', '2016', 5448, '2022-04-28', '[\"62581c50a9ba36.64664451.jpg\"]'),
(31, 'car', 'lexus e350', '', '', '2016', 5448, '2022-04-28', '[\"62581c6f5e56f2.05450046.jpg\"]'),
(33, 'car', 'lexus e350', '', '', '2016', 5448, '2022-04-28', '[\"62581d01e25e19.72981031.jpg\"]'),
(34, 'car', 'lexus e350', '', '', '2016', 5448, '2022-04-28', '[\"62581d3ddbed74.68477231.jpg\"]'),
(35, 'car', 'lexus e350', '', '', '2017', 444444, '2022-04-14', '[\"62582102acf137.09853334.jpg\"]');

-- --------------------------------------------------------

--
-- Table structure for table `auto_info`
--

CREATE TABLE `auto_info` (
  `id` int(11) NOT NULL,
  `Fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `User_type` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Business name` varchar(255) NOT NULL,
  `House Address` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Phone number` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Company Adress` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auto_info`
--

INSERT INTO `auto_info` (`id`, `Fullname`, `email`, `User_type`, `password`, `Business name`, `House Address`, `State`, `Phone number`, `Country`, `Company Adress`, `City`) VALUES
(1, 'Marvelous ', 'Markel123@gmail.com', 'admin', '698d51a19d8a121ce581499d7b701668', '', '', '', '', '', '', ''),
(5, 'kelvin Osas', 'marvelouswilson@gmail.com', 'customer', '$2y$10$OhXSwTujpSDoqxBUFu5ZfOmt413GTjUPP5TE0FMEPfSfzKtW5N6gS', 'vinx Media', 'San francisco', 'Otawa', '08162942636', 'France', 'Munich', 'Singapore'),
(6, 'kelvin kel', 'sakel@gmail.com', 'customer', '$2y$10$JoL/yLfWzaciMaQxe.LFBOTzXuhFsK6nIpOV1vQCqLXic94PyD1YG', '', '', '', '', '', '', ''),
(8, 'lvin', 'kev@gmail.com', 'customer', '$2y$10$S6zcQbUzJhXoaTIL9SjIhukYQH5ZkwlQkrjXlXnpcR14UtF50uXuG', '', '', '', '', '', '', ''),
(9, 'male', 'kel@gmail.com', 'admin', '$2y$10$OAWA7BjZDnrhx9PmH9XTveO4hclb8CWaJhXsEEof2BT9ATdOYEMFO', ' Marvelous', 'San francisco', 'Otawa', '08162942636', 'Bahrain', 'Munich', 'Singapore'),
(11, 'KELVIN', 'kel123@text.com', 'customer', '$2y$10$bSy8tWFOqvaYYZed38sQveR5RgRMz28ClcyZKe79Hiq.g32u2Q6DK', 'Kelz Designs    ', 'Mexico', 'Costa rica', '08162942636', 'Afghanistan', 'Brazil', 'Peru'),
(12, 'tester', 'text@gmail.com', 'customer', '$2y$10$cox8zEJTibMiWRDnx43ZdeDdmczIv3nZFbtWy5mE7rjeacZBc0Kpe', 'Nosakhare Motors', 'Monaco', 'Berlin', '08162942636', 'Afghanistan', 'Augsburg', 'Paris'),
(13, 'kelvin', 'marvelouswilsokkkkn@gmail.com', 'customer', '$2y$10$vKI6SPm/us6MrPT/ZNVRLuJ7xl5Y7uFdpTVtmd0p9nBjH/xxRLKNK', ' kru       ', 'Monaco', 'Edo state', '08162942636', 'Afghanistan', 'Brazil', 'Singapore'),
(14, 'dtdtc', 'klv@gmail.com', 'customer', '$2y$10$eDsKSt8fOLkAVM60cji8BuTcZQk34NVt0pREmQcSHHzJJBqKVEH1m', '', '', '', '', '', '', ''),
(15, 'happy', 'kel1293@text.com', 'customer', '$2y$10$2MRXI3pAeDIvyT1Wizok5u107zdffqdzY/nkej1TxXvKhbPEGki8a', ' kru', 'San francisco', 'Otawa', '08162942636', 'Barbados', 'Munich', 'Singapore'),
(16, 'kelvin Osas', 'markel1123@gmail.com', 'customer\n', '$2y$10$RWRGE1t5qAGn5JxbqBf3eOokiqhE/bW./2EzokuaGfFRGK51HN.GW', '', '', '', '', '', '', ''),
(17, 'kelvin Osas', 'markel1223@gmail.com', 'admin', '$2y$10$CtKwImEcAvnHlskRsOePAekttykBldpS5WM6awaPwusqDI6XluTxi', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cart_product`
--

CREATE TABLE `cart_product` (
  `id` int(11) NOT NULL,
  `User_id` varchar(255) NOT NULL,
  `Product_quantity` varchar(1000) NOT NULL,
  `Product_price` varchar(255) NOT NULL,
  `Product_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_product`
--

INSERT INTO `cart_product` (`id`, `User_id`, `Product_quantity`, `Product_price`, `Product_id`) VALUES
(98, '8', '1', '', '33'),
(101, '14', '1', '', '33'),
(102, '11', '6', '', '33'),
(108, '9', '1', '', '33');

-- --------------------------------------------------------

--
-- Table structure for table `ordered_product`
--

CREATE TABLE `ordered_product` (
  `id` int(255) NOT NULL,
  `Product_id` varchar(255) NOT NULL,
  `Product_brand` varchar(255) NOT NULL,
  `Product_name` varchar(255) NOT NULL,
  `Product_image` varchar(255) NOT NULL,
  `User_id` int(255) NOT NULL,
  `Total` varchar(200) NOT NULL,
  `Quantity` varchar(1000) NOT NULL,
  `Status` text NOT NULL,
  `Time` time(6) NOT NULL,
  `Date` date NOT NULL,
  `Tracking id` varchar(100) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Sub_total` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordered_product`
--

INSERT INTO `ordered_product` (`id`, `Product_id`, `Product_brand`, `Product_name`, `Product_image`, `User_id`, `Total`, `Quantity`, `Status`, `Time`, `Date`, `Tracking id`, `Price`, `Sub_total`) VALUES
(62, '33', 'lexus e350', 'car', '[\"62581d01e25e19.72981031.jpg\"]', 11, '', '1', 'Delivered', '09:49:33.000000', '2022-06-23', 'Theo80a930c4f9', '5448', '0'),
(63, '35', 'lexus e350', 'car', '[\"62582102acf137.09853334.jpg\"]', 11, '', '19', 'Delivered', '09:49:33.000000', '2022-06-23', 'Theo80a930c4f9', '444444', '0'),
(64, '44', 'Lexus', 'Lexus RX 350', '[\"62a0cc230cc716.77801694.jpg\"]', 5, '', '4', 'Delivered', '09:53:27.000000', '2022-06-23', 'Theoa6494d67fc', '15000000', '0'),
(65, '43', 'World warII', 'Ship', '[\"6266a3862f84d4.85787104.jpg\"]', 5, '', '2', 'Delivered', '09:53:27.000000', '2022-06-23', 'Theoa6494d67fc', '210000000', '0'),
(66, '33', 'lexus e350', 'car', '[\"62581d01e25e19.72981031.jpg\"]', 6, '', '10', 'Pending', '10:29:02.000000', '2022-06-23', 'Theobcddb06017', '5448', '0'),
(67, '39', 'Yamaha 2000', 'Tricycle', '[\"62594ce75a0940.52748899.jpg\"]', 6, '', '11', 'Pending', '10:29:02.000000', '2022-06-23', 'Theobcddb06017', '250000', '0'),
(68, '42', 'Amageddon 5000', 'Ship', '[\"6266a1bdba2185.40369893.jpg\"]', 6, '', '12', 'Delivered', '10:29:02.000000', '2022-06-23', 'Theobcddb06017', '150000', '0'),
(69, '33', 'lexus e350', 'car', '[\"62581d01e25e19.72981031.jpg\"]', 12, '', '1', 'Pending', '12:17:25.000000', '2022-06-27', 'Theo3a3cb2e417', '5448', '0'),
(70, '33', 'lexus e350', 'car', '[\"62581d01e25e19.72981031.jpg\"]', 12, '', '1', 'Pending', '12:22:59.000000', '2022-06-27', 'Theod73182af27', '5448', '0'),
(71, '33', 'lexus e350', 'car', '[\"62581d01e25e19.72981031.jpg\"]', 12, '', '1', 'Pending', '12:42:14.000000', '2022-06-27', 'Theobc51496c8a', '5448', '0'),
(72, '33', 'lexus e350', 'car', '[\"62581d01e25e19.72981031.jpg\"]', 12, '', '1', 'Pending', '12:54:32.000000', '2022-06-27', 'Theod05e173992', '5448', '0'),
(73, '35', 'lexus e350', 'car', '[\"62582102acf137.09853334.jpg\"]', 12, '', '1', 'Pending', '12:54:32.000000', '2022-06-27', 'Theod05e173992', '444444', '0'),
(74, '33', 'lexus e350', 'car', '[\"62581d01e25e19.72981031.jpg\"]', 12, '', '1', 'Pending', '01:58:51.000000', '2022-06-27', 'Theoca0ac05c2d', '5448', '0'),
(75, '30', 'lexus e350', 'car', '[\"62581c50a9ba36.64664451.jpg\"]', 12, '', '1', 'Pending', '01:58:51.000000', '2022-06-27', 'Theoca0ac05c2d', '5448', '0'),
(76, '33', 'lexus e350', 'car', '[\"62581d01e25e19.72981031.jpg\"]', 12, '', '1', 'Delivered', '02:10:54.000000', '2022-06-27', 'Theo6253b2c037', '5448', '0'),
(78, '34', 'lexus e350', 'car', '[\"62581d3ddbed74.68477231.jpg\"]', 15, '', '1', 'Pending', '01:29:20.000000', '2022-07-06', 'Theod5692b76a4', '5448', '0');

-- --------------------------------------------------------

--
-- Table structure for table `wish_list`
--

CREATE TABLE `wish_list` (
  `id` int(11) NOT NULL,
  `User_id` varchar(255) NOT NULL,
  `Product_quantity` varchar(255) NOT NULL,
  `Product_price` varchar(255) NOT NULL,
  `Product_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wish_list`
--

INSERT INTO `wish_list` (`id`, `User_id`, `Product_quantity`, `Product_price`, `Product_id`) VALUES
(1, '2', '', '', '29'),
(2, '2', '', '', '30'),
(3, '2', '', '', '32'),
(4, '2', '', '', '31'),
(5, '2', '', '', '42'),
(13, '6', '', '', '30'),
(14, '6', '', '', '33'),
(15, '6', '', '', '35'),
(16, '6', '', '', '34'),
(17, '6', '', '', '31'),
(18, '15', '', '', '34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auto_info`
--
ALTER TABLE `auto_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_product`
--
ALTER TABLE `cart_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordered_product`
--
ALTER TABLE `ordered_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `auto_info`
--
ALTER TABLE `auto_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cart_product`
--
ALTER TABLE `cart_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `ordered_product`
--
ALTER TABLE `ordered_product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `wish_list`
--
ALTER TABLE `wish_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
