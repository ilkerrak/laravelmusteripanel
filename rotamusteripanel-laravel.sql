-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 06, 2021 at 11:42 PM
-- Server version: 10.1.47-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rotamusteripanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `customer_fullname` varchar(25) NOT NULL,
  `customer_tcno` int(11) NOT NULL,
  `customer_phone` int(11) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_address` varchar(200) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_fullname`, `customer_tcno`, `customer_phone`, `customer_email`, `customer_address`, `updated_at`) VALUES
(2, 'Ali AK', 147896325, 1234555555, 'ilkerrakk52@gmail.com', 'PEYAMİ SAFA CADDESİ \r\nBAĞCILAR/İSTANBUL', '2021-03-06 20:27:20'),
(3, 'İlker AK', 123456799, 1234567891, 'info@ilkerak.com', 'BAŞAKŞEHİR/İSTANBUL', '2021-03-06 20:27:08');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_fullname` varchar(100) NOT NULL,
  `orders_no` int(11) NOT NULL,
  `orders_date` date NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_price` decimal(10,0) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_fullname`, `orders_no`, `orders_date`, `product_name`, `product_quantity`, `product_price`, `updated_at`) VALUES
(1, 'İlker AK', 87, '2020-07-05', 'Ürün 2', 3, '898', '2021-03-06 20:24:45'),
(3, 'Ali AK', 734, '2021-01-20', 'Ürün 1', 2, '879', '2021-03-06 20:27:40'),
(4, 'İlker AK', 566, '2021-03-01', 'Ürün 3', 1, '110', '2021-03-06 23:29:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
