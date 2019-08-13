-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 12:41 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(1) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `username`, `password`) VALUES
(1, 'jainil', 'jbpatel123');

-- --------------------------------------------------------

--
-- Table structure for table `cart_info`
--

CREATE TABLE `cart_info` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(200) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `qty` int(200) NOT NULL,
  `price` int(200) NOT NULL,
  `total_amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_info`
--

INSERT INTO `cart_info` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amount`) VALUES
(10, 2, '0', 2, 'Basmati Rise', '3.png', 4, 15, 60),
(11, 5, '0', 2, 'Air Freshener', '19.png', 4, 5, 20),
(12, 10, '0', 2, 'Fresh Sweet Lime', '32.png', 2, 11, 22),
(13, 13, '0', 2, 'Orange Soft Drink', '49.png', 2, 11, 22),
(14, 20, '0', 2, 'Sumeru Green Pees', '65.png', 5, 18, 90),
(16, 1, '0', 3, 'Fortune Sunflower Oil', '1.png', 3, 6, 18),
(18, 7, '0', 1, 'Princeware Packaging ', '21.png', 2, 14, 28);

-- --------------------------------------------------------

--
-- Table structure for table `categorie_info`
--

CREATE TABLE `categorie_info` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL,
  `file_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorie_info`
--

INSERT INTO `categorie_info` (`cat_id`, `cat_title`, `file_name`) VALUES
(1, 'Kitchen', 'kitchen'),
(2, 'Households', 'household'),
(3, 'Veggies & Fruits', 'vegetables'),
(5, 'Beverages', 'drinks'),
(6, 'Pet Food', 'pet'),
(7, 'Frozen Foods', 'frozen'),
(9, 'Bread & Bakery', 'bread');

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_title` text NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL,
  `hot_product` tinyint(1) NOT NULL,
  `discount_in_%` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`product_id`, `product_cat`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`, `hot_product`, `discount_in_%`) VALUES
(1, 1, 'Fortune Sunflower Oil', 6, 'Fortune Sunflower Oil', '1.png', 'Fortune Sunflower Oil branded food', 1, 5),
(2, 1, 'Basmati Rise', 20, 'Basmati Rise (5 Kg)', '3.png', 'Basmati Rise 5Kg branded food', 1, 6),
(3, 2, 'Dishwash Gel, Lemon ', 7, 'Dishwash Gel, Lemon (1.5 Ltr)', '17.png', 'Dishwash Gel, Lemon 1.5Ltr household items', 0, 0),
(4, 2, 'Dish Wash Bar', 14, 'Dish Wash Bar (500 Gm)', '18.png', 'Dish Wash Bar 500Gm household items', 0, 0),
(5, 2, 'Air Freshener', 5, 'Air Freshener (50 Gm)', '19.png', 'Air Freshener 50Gm room household item', 1, 0),
(6, 2, 'Toilet Cleaner Expert', 7, 'Toilet Cleaner Expert (1 Ltr)', '20.png', 'Toilet Cleaner Expert 1Ltr household item', 0, 0),
(7, 2, 'Princeware Packaging ', 14, 'Princeware Packaging Container Pack ', '21.png', 'Princeware Packaging Container Pack bottle ', 1, 0),
(8, 2, 'Signoraware Container ', 16, 'Signoraware Container Center Press (900 Ml)', '22.png', 'Princeware Packaging Container Pack bottle ', 0, 0),
(9, 3, 'Fresh Bananas', 5, 'Fresh Bananas (1 Kg)', '29.png', 'Fresh Bananas fruits ', 0, 0),
(10, 3, 'Fresh Sweet Lime', 11, 'Fresh Sweet Lime (500 Gm)', '32.png', 'Fresh Sweet Lime fruits', 0, 0),
(11, 3, 'Fresh Mango Dasheri', 11, 'Fresh Mango Dasheri (1 Kg)', '10.png', 'Fresh Mango Dasheri fruits', 0, 0),
(12, 3, 'Fresh Apple Red', 4, 'Fresh Apple Red (1 Kg)', '11.png', 'Fresh Apple Red fruits', 0, 0),
(13, 5, 'Orange Soft Drink', 11, 'Orange Soft Drink (250 Ml)', '49.png', 'Orange Soft Drink mirinda', 0, 0),
(14, 5, 'Coco Cola Zero Can', 4, 'Coco Cola Zero Can (330 Ml)', '15.png', 'Coco Cola Zero Can drinks ', 0, 0),
(15, 5, 'Sprite Bottle', 4, 'Sprite Bottle (2 Ltr)', '52.png', 'Sprite Bottle drinks ', 0, 0),
(16, 5, 'Mixed Fruit Juice', 7, 'Mixed Fruit Juice (1 Ltr)', '13.png', 'Mixed Fruit Juice tropicana ', 0, 0),
(17, 6, 'Can - Tuna For Cats', 12, 'Can - Tuna For Cats (400 Gm)', '57.png', 'Can Tuna For Cats cat-food ', 0, 0),
(18, 6, 'Dogs Food - Junior', 13, 'Dogs Food - Junior (4 Kg)', '4.png', 'Dogs Food - Junior dog-food ', 0, 0),
(19, 7, 'Pepper Salami', 13, 'Pepper Salami (250 Gm)', '64.png', 'Pepper Salami frozen-food', 0, 0),
(20, 7, 'Sumeru Green Pees', 18, 'Sumeru Green Pees (500 Gm)', '65.png', 'Sumeru Green Pees frozen-food', 0, 0),
(21, 8, 'Raisin Rolls', 16, 'Raisin Rolls (2 In 1 Pack)', '37.png', 'Raisin Rolls Bread Bakery', 0, 0),
(22, 8, 'Bread Wheat Pita', 17, 'Bread Wheat Pita (250 Gm)', '39.png', 'Bread Wheat Pita Bread Bakery', 0, 0),
(25, 8, 'Pepsi soft drink', 10, 'Pepsi soft drink(2 Ltr)', '2.png', 'Pepsi soft drink kitchen', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `user_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'light', 'light@gmail.com', 'd927235ca1164e20b0ef2e5fc5b2491f', '8200245048', '', ''),
(2, 'kil', 'kil@gmail.com', 'a3728fef273d883a0cbbd41581a38875', '8200245048', '', ''),
(3, 'jainil', 'jb@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1234567890', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_info`
--
ALTER TABLE `cart_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorie_info`
--
ALTER TABLE `categorie_info`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart_info`
--
ALTER TABLE `cart_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categorie_info`
--
ALTER TABLE `categorie_info`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_info`
--
ALTER TABLE `product_info`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
