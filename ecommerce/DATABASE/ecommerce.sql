-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 06, 2018 at 09:30 AM
-- Server version: 5.7.22
-- PHP Version: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Nike'),
(2, 'Adidas'),
(3, 'Sony'),
(4, 'samsung'),
(5, 'Sony'),
(6, 'JD'),
(10, 'Apple');

-- --------------------------------------------------------

--
-- Table structure for table `carte`
--

CREATE TABLE `carte` (
  `p_id` int(255) NOT NULL,
  `ip_add` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carte`
--

INSERT INTO `carte` (`p_id`, `ip_add`) VALUES
(1, '::1'),
(2, '::1'),
(52, '::1'),
(53, '::1'),
(62, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`p_id`, `ip_add`) VALUES
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(44, '::1'),
(49, '::1'),
(1, '::1'),
(46, '::1'),
(3, '::1'),
(47, '::1'),
(45, '::1'),
(48, '::1'),
(2, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Clothing'),
(2, 'Safety'),
(3, 'Computers'),
(4, 'Phones'),
(5, 'Technology'),
(6, 'Watches');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_ip`, `customer_name`, `customer_email`, `customer_pass`) VALUES
(2, '::1', 'Tom', 'tom@urbanviolet.uk', '1234'),
(3, '::1', 'sdfsdf', 'sdfsdf', 'sdfsdf'),
(4, '::1', 'sdfsdf', 'sdfsdfsdfsdf', 'sdfsdfsdf'),
(44, '::1', 'sadfasdf', 'sdafasdf', 'asdfasdf'),
(45, '::1', 'asdfasdf', 'asdfasdf', 'asdfasdf'),
(46, '::1', 'asdfasdf', 'asdfasdf', 'asdfadsf'),
(47, '::1', 'asdfasdf', 'asdfasdf', 'adfadsf'),
(48, '::1', 'adfasdf', 'asdfasdf', 'sadfadsfasdfasdfasdf'),
(49, '::1', 'asdfasdf', 'asdfasdf', 'adsfasdf'),
(50, '::1', 'adfasdf', 'adsfasdf', 'afasdfadsf'),
(51, '::1', 'adsfasdf', '', ''),
(52, '::1', '', '', ''),
(53, '::1', 'adfasdf', 'asdfasdf', 'asdfasdf'),
(54, '::1', 'adfasdf', 'asdfasdf', 'asdfasdf'),
(55, '::1', 'sdfsdf', 'sdfsdf', 'sdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(52, 2, 6, 'Blue Helmet', 40, '<p>sdsdf</p>', 'blueHelmet.jpg', 'sdfsdf'),
(53, 2, 1, 'Bag', 500, '<p>sdfadsfas</p>', 'blueBag.jpg', 'bag, clothing, shopping'),
(54, 1, 1, 'Shoes', 100, '<p>sdfsdf</p>', 'blueShoe.jpg', 'shoes, shoe, trainer, clothing'),
(55, 1, 6, 'Pram', 300, '<p>fadsfasdf</p>', 'bluePram.jpg', 'pram, baby, '),
(56, 5, 1, 'Technology', 500, '<p>tech, tech, tech</p>', 'blueTech.png', 'tech, technology, computers'),
(57, 1, 1, 'Hat', 50, '<p>adfadsf</p>', 'blueHat.jpg', 'hat'),
(58, 2, 1, 'Umbrella', 30, '<p>adfasdf</p>', 'blueUmbrella.png', 'umbrella, rain'),
(59, 1, 5, 'Bag', 20, '<p>adfadsf</p>', 'blueBag.jpg', 'asdfadsf'),
(60, 5, 1, 'Controller', 25, '<p>afdadsf</p>', 'blueController.jpg', 'adsfasdf'),
(61, 5, 1, 'headphones', 200, '<p>adfasdf</p>', 'blueHeadphones.jpg', 'sadfasdf'),
(62, 6, 1, 'Watch', 750, '<p>adsfasdf</p>', 'blueWatch.jpg', 'asdfadsf'),
(64, 1, 1, 'lkjljljljlklkjlk', 50, '<p>sdfsdf</p>', 'blueTech.png', 'sdfsdfsdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `carte`
--
ALTER TABLE `carte`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
