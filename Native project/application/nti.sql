-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 10:50 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nti`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `street` varchar(30) DEFAULT NULL,
  `building` varchar(10) NOT NULL,
  `flat` int(11) DEFAULT NULL,
  `floor` int(11) NOT NULL,
  `notes` text DEFAULT NULL,
  `userID` int(11) NOT NULL,
  `regionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userID` int(11) DEFAULT NULL,
  `role` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `ArName` varchar(20) DEFAULT NULL,
  `EnName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `ArName`, `EnName`) VALUES
(1, 'سامسونج', 'Samsung'),
(2, 'ابل', 'Apple'),
(3, 'ال جي', 'LG'),
(4, 'زانوسي', 'Zanussi'),
(5, 'توشيبا', 'Toshiba'),
(6, 'فينكس', 'Phoenix'),
(7, 'جالاكسي', 'Galaxy');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `arName` varchar(40) NOT NULL,
  `enName` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `arName`, `enName`) VALUES
(1, 'اجهزة منزلية', 'appliances'),
(2, 'اجهزة الكترونية', 'Electronics'),
(3, 'هواتف محمولة', 'Mobile Phones'),
(4, 'اجهزة رياضية', 'Sports Ware');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `lat` varchar(20) DEFAULT NULL,
  `lng` varchar(20) DEFAULT NULL,
  `distance` decimal(10,0) DEFAULT NULL,
  `arName` varchar(20) DEFAULT NULL,
  `enName` varchar(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'active',
  `regionId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `code` varchar(30) DEFAULT NULL,
  `discount` decimal(2,0) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `startTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `endTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `minOrders` int(11) DEFAULT NULL,
  `usageCount` int(11) NOT NULL,
  `countPerUser` int(11) DEFAULT NULL,
  `maxOrder` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `startDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `endDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `discount` decimal(2,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(10) DEFAULT NULL,
  `total` decimal(10,0) NOT NULL DEFAULT 0,
  `couponID` int(11) DEFAULT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `code`, `date`, `status`, `total`, `couponID`, `userID`) VALUES
(1, NULL, '2021-04-07 20:17:29', NULL, '0', NULL, 12),
(2, NULL, '2021-04-07 20:17:29', NULL, '0', NULL, 11),
(3, NULL, '2021-04-07 20:18:18', NULL, '0', NULL, 12),
(4, NULL, '2021-04-07 20:18:18', NULL, '0', NULL, 11),
(5, NULL, '2021-04-07 20:19:18', NULL, '0', NULL, 11),
(6, NULL, '2021-04-07 20:19:18', NULL, '0', NULL, 10),
(7, NULL, '2021-04-07 20:19:18', NULL, '0', NULL, 12),
(8, NULL, '2021-04-07 20:19:18', NULL, '0', NULL, 11),
(9, NULL, '2021-04-07 20:19:18', NULL, '0', NULL, 10),
(10, NULL, '2021-04-07 20:19:18', NULL, '0', NULL, 11),
(11, NULL, '2021-04-07 20:19:18', NULL, '0', NULL, 10),
(12, NULL, '2021-04-07 20:19:18', NULL, '0', NULL, 12),
(13, NULL, '2021-04-07 20:19:18', NULL, '0', NULL, 11),
(14, NULL, '2021-04-07 20:19:18', NULL, '0', NULL, 12),
(15, NULL, '2021-04-07 20:19:18', NULL, '0', NULL, 11),
(16, NULL, '2021-04-07 20:19:18', NULL, '0', NULL, 10);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `amount` decimal(10,0) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `productcoupons`
--

CREATE TABLE `productcoupons` (
  `productID` int(11) DEFAULT NULL,
  `couponID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `productorders`
--

CREATE TABLE `productorders` (
  `productID` int(11) DEFAULT NULL,
  `orderID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productorders`
--

INSERT INTO `productorders` (`productID`, `orderID`) VALUES
(4, 1),
(4, 2),
(4, 4),
(3, 7),
(8, 11),
(12, 14),
(9, 16);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `arName` varchar(40) NOT NULL,
  `arSpecs` varchar(40) NOT NULL,
  `enName` varchar(40) NOT NULL,
  `enSpecs` varchar(40) NOT NULL,
  `photo` varchar(100) DEFAULT 'default.png',
  `subCatID` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `brandID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `arName`, `arSpecs`, `enName`, `enSpecs`, `photo`, `subCatID`, `createdAt`, `brandID`) VALUES
(3, 'شاشة 42 بوصة', 'يييييبب ثقفقثثثثثثف ثققققققققققققف', '42 inch LED screen', 'dddddddddddddddddddddddddddd', 'product-2.jpg', 7, '2021-04-07 15:14:56', 3),
(4, 'A6', 'Lorem Lorem Lorem Lorem Lorem Lorem Lore', 'A6', 'Lorem Lorem Lorem Lorem Lorem Lorem Lore', 'product-1.jpg', 9, '2021-04-07 15:15:04', 1),
(8, 'لابتوب', 'لابتوب لابتوب لابتوب لابتوبلابتوبلابتوب ', 'Laptop', 'cccccccccccccccccccccccc', 'product-3.jpg', 10, '2021-04-07 15:19:16', 5),
(9, 'دفاية زيت', 'بيسسسسسسسس يسبببب سيببببببب سيببببببب', 'Oil Heater', 'dddddfd gfddddddddg gggggg', 'product-4.jpg', 6, '2021-04-07 15:19:16', 5),
(12, 'دراجة ', 'يببببببببببببب', 'Bicycle', '', 'product-4.jpg', 11, '2021-04-07 15:24:15', 7);

-- --------------------------------------------------------

--
-- Table structure for table `productsoffers`
--

CREATE TABLE `productsoffers` (
  `offerID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `priceAfterDiscount` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `productspecs`
--

CREATE TABLE `productspecs` (
  `productID` int(11) NOT NULL,
  `specsID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `lat` varchar(20) NOT NULL,
  `lng` varchar(20) NOT NULL,
  `ArName` varchar(20) DEFAULT NULL,
  `EnName` varchar(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'active',
  `distance` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `productID` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `rev` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `userID`, `productID`, `rate`, `rev`) VALUES
(1, 12, 12, 2, NULL),
(2, 11, 12, 2, NULL),
(3, 10, 12, 5, NULL),
(4, 12, 3, 5, NULL),
(5, 12, 8, 2, NULL),
(6, 12, 4, 5, NULL),
(7, 11, 3, 2, NULL),
(9, 11, 9, 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `specs`
--

CREATE TABLE `specs` (
  `id` int(11) NOT NULL,
  `arName` varchar(40) DEFAULT NULL,
  `enName` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `arName` varchar(40) NOT NULL,
  `enName` varchar(40) NOT NULL,
  `categoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `arName`, `enName`, `categoryID`) VALUES
(1, 'مشاية كهربائية', 'Electric treadmill', 4),
(6, 'دفاية ', 'Heater', 1),
(7, 'شاشة ذكية', 'Smart Screen', 2),
(9, 'هاتف ذكي', 'Smart phone', 3),
(10, 'لابتوب', 'Laptop', 2),
(11, 'دراجة', 'Bicycle', 4),
(12, 'ثلاجة', 'Refrigerator', 1),
(13, 'طابعات', 'Printer', 2),
(14, 'ميزان الكتروني', 'Electronic scale', 2),
(15, 'هاتف محمول عادي', 'Mobile Phone with a Physical pad', 3);

-- --------------------------------------------------------

--
-- Table structure for table `usercoupons`
--

CREATE TABLE `usercoupons` (
  `userId` int(11) DEFAULT NULL,
  `couponID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userproducts`
--

CREATE TABLE `userproducts` (
  `userID` int(11) NOT NULL,
  `productID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `birthday` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `photo` varchar(100) DEFAULT 'default.png',
  `code` varchar(10) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `phone`, `birthday`, `photo`, `code`, `createdAt`, `status`) VALUES
(10, 'Mohamad', '123456', 'm.elnomrossie@gmail.com', '12345678811', '2021-04-20 19:10:37', 'default.png', NULL, '2021-04-07 19:11:49', 1),
(11, 'Hassan', '123456', 'Hassan@gmail.com', '12345678901', '2021-04-22 19:11:58', 'default.png', NULL, '2021-04-07 19:13:13', 1),
(12, 'alaa', '12345678', 'alaa@gmail.com', NULL, NULL, 'default.png', NULL, '2021-04-07 19:13:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `amount` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `userID` int(11) DEFAULT NULL,
  `productID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD KEY `userID` (`userID`),
  ADD KEY `regionID` (`regionID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ArName` (`ArName`),
  ADD UNIQUE KEY `EnName` (`EnName`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `userId` (`userId`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regionId` (`regionId`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `composite unique` (`id`,`userID`),
  ADD KEY `couponID` (`couponID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `productcoupons`
--
ALTER TABLE `productcoupons`
  ADD KEY `productID` (`productID`),
  ADD KEY `couponID` (`couponID`);

--
-- Indexes for table `productorders`
--
ALTER TABLE `productorders`
  ADD UNIQUE KEY `composite unique` (`orderID`,`productID`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subCatID` (`subCatID`),
  ADD KEY `brandID` (`brandID`);

--
-- Indexes for table `productsoffers`
--
ALTER TABLE `productsoffers`
  ADD KEY `offerID` (`offerID`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `productspecs`
--
ALTER TABLE `productspecs`
  ADD KEY `productID` (`productID`),
  ADD KEY `specsID` (`specsID`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_index` (`userID`,`productID`),
  ADD KEY `productID` (`productID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `specs`
--
ALTER TABLE `specs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `usercoupons`
--
ALTER TABLE `usercoupons`
  ADD KEY `userId` (`userId`),
  ADD KEY `couponID` (`couponID`);

--
-- Indexes for table `userproducts`
--
ALTER TABLE `userproducts`
  ADD KEY `userID` (`userID`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD KEY `userID` (`userID`),
  ADD KEY `productID` (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `specs`
--
ALTER TABLE `specs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `address_ibfk_2` FOREIGN KEY (`regionID`) REFERENCES `region` (`id`);

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `products` (`id`);

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`regionId`) REFERENCES `region` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`couponID`) REFERENCES `coupons` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`);

--
-- Constraints for table `productcoupons`
--
ALTER TABLE `productcoupons`
  ADD CONSTRAINT `productcoupons_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `productcoupons_ibfk_2` FOREIGN KEY (`couponID`) REFERENCES `coupons` (`id`);

--
-- Constraints for table `productorders`
--
ALTER TABLE `productorders`
  ADD CONSTRAINT `productorders_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `productorders_ibfk_2` FOREIGN KEY (`orderID`) REFERENCES `orders` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `brandID` FOREIGN KEY (`brandID`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`subCatID`) REFERENCES `subcategories` (`id`);

--
-- Constraints for table `productsoffers`
--
ALTER TABLE `productsoffers`
  ADD CONSTRAINT `productsoffers_ibfk_1` FOREIGN KEY (`offerID`) REFERENCES `offers` (`id`),
  ADD CONSTRAINT `productsoffers_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `products` (`id`);

--
-- Constraints for table `productspecs`
--
ALTER TABLE `productspecs`
  ADD CONSTRAINT `productspecs_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `productspecs_ibfk_2` FOREIGN KEY (`specsID`) REFERENCES `specs` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `products` (`id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`id`);

--
-- Constraints for table `usercoupons`
--
ALTER TABLE `usercoupons`
  ADD CONSTRAINT `usercoupons_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `usercoupons_ibfk_2` FOREIGN KEY (`couponID`) REFERENCES `coupons` (`id`);

--
-- Constraints for table `userproducts`
--
ALTER TABLE `userproducts`
  ADD CONSTRAINT `userproducts_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `userproducts_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `products` (`id`);

--
-- Constraints for table `wallet`
--
ALTER TABLE `wallet`
  ADD CONSTRAINT `wallet_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
