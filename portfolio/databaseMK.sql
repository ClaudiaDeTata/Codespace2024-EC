-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 11:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mktime`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `total`, `order_date`) VALUES
(1, 1, 10100.00, '2024-06-08 11:57:36'),
(6, 7, 10100.00, '2024-06-08 12:39:05'),
(12, 2, 20200.00, '2024-06-09 13:52:59'),
(13, 3, 10100.00, '2024-06-09 13:57:09'),
(14, 4, 10100.00, '2024-06-09 14:01:44'),
(15, 5, 10100.00, '2024-06-09 14:10:11'),
(16, 6, 20200.00, '2024-06-09 14:13:35'),
(17, 8, 10100.00, '2024-06-09 14:21:21'),
(18, 9, 10100.00, '2024-06-09 14:25:35'),
(19, 11, 20200.00, '2024-06-09 16:42:25'),
(20, 14, 20200.00, '2024-06-09 16:46:00');

-- --------------------------------------------------------

--
-- Stand-in structure for view `orders_view`
-- (See below for the actual view)
--
CREATE TABLE `orders_view` (
`order_id` int(10) unsigned
,`user_id` int(10) unsigned
,`total` decimal(8,2)
,`order_date` datetime
);

-- --------------------------------------------------------

--
-- Table structure for table `order_contents`
--

CREATE TABLE `order_contents` (
  `content_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `price` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_contents`
--

INSERT INTO `order_contents` (`content_id`, `order_id`, `item_id`, `quantity`, `price`) VALUES
(1, 1, 4, 1, 10100.00),
(2, 2, 5, 1, 10100.00),
(3, 3, 4, 2, 10100.00),
(4, 4, 4, 3, 10100.00),
(5, 5, 5, 2, 10100.00),
(6, 6, 6, 1, 10100.00),
(7, 7, 4, 1, 10100.00),
(8, 8, 4, 1, 10100.00),
(9, 9, 5, 1, 10100.00),
(10, 10, 5, 1, 10100.00),
(11, 11, 5, 1, 10100.00),
(12, 12, 7, 1, 10100.00),
(13, 12, 9, 1, 10100.00),
(14, 13, 4, 1, 10100.00),
(15, 14, 6, 1, 10100.00),
(16, 15, 7, 1, 10100.00),
(17, 16, 8, 1, 10100.00),
(18, 16, 9, 1, 10100.00),
(19, 17, 9, 1, 10100.00),
(20, 18, 6, 1, 10100.00),
(21, 19, 6, 1, 10100.00),
(22, 19, 7, 1, 10100.00),
(23, 20, 4, 1, 10100.00),
(24, 20, 5, 1, 10100.00);

-- --------------------------------------------------------

--
-- Stand-in structure for view `order_contents_view`
-- (See below for the actual view)
--
CREATE TABLE `order_contents_view` (
`content_id` int(10) unsigned
,`order_id` int(10) unsigned
,`item_id` int(10) unsigned
,`quantity` int(10) unsigned
,`price` decimal(8,2)
);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `item_id` int(10) UNSIGNED NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `item_desc` varchar(200) NOT NULL,
  `item_img` varchar(20) NOT NULL,
  `item_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`item_id`, `item_name`, `item_desc`, `item_img`, `item_price`) VALUES
(4, 'Fossil for Her', 'Stay ahead of the fashion curve with our Modern Chic Women\'s Watch. This stylish accessory combines a contemporary leather strap with a bold, colorful dial.', '../img/herthree.jpg', 10100.00),
(5, 'Omega One for Her', 'Embrace timeless sophistication with our Classic Elegance Women\'s Watch. Featuring a sleek stainless steel band and a minimalist dial, this watch is perfect for any occasion.', '../img/herone.jpg', 10100.00),
(6, 'Schwartz for Her', 'Add a touch of vintage glamour to your collection with our Vintage Glamour Women\'s Watch. The intricate detailing and luxurious gold-tone finish evoke a sense of classic beauty.', '../img/hertwo.jpg', 10100.00),
(7, 'Omega for Him', 'Elevate your style with our Executive Excellence Men\'s Watch. Crafted with premium materials and featuring a bold, masculine design, this timepiece exudes confidence and sophistication.', '../img/himone.jpg', 10100.00),
(8, 'Schwartz for Him', 'Embrace tradition with our Classic Heritage Men\'s Watch. Inspired by timeless design elements, this watch features a sleek leather strap and a refined dial with elegant Roman numeral markers.', '../img/himtwo.jpg', 10100.00),
(9, 'Fossil for Him', 'Achieve peak performance with our Sports Performance Men\'s Watch. Designed for active lifestyles, this rugged timepiece features a durable stainless steel case and a water-resistant design. ', '../img/himthree.jpg', 10100.00);

-- --------------------------------------------------------

--
-- Stand-in structure for view `products_view`
-- (See below for the actual view)
--
CREATE TABLE `products_view` (
`item_id` int(10) unsigned
,`item_name` varchar(20)
,`item_desc` varchar(200)
,`item_img` varchar(20)
,`item_price` decimal(10,2)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `reg_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `pass`, `reg_date`) VALUES
(1, 'Claudia', 'De Tata', 'detatacl@gmail.com', '123', '2024-06-02 20:59:03'),
(2, 'Robert', 'Redford', 'robert@gmail.com', '258', '2024-06-03 09:27:04'),
(3, 'Kelly', 'Lang', 'langk@gmail.com', '147', '2024-06-03 09:45:33'),
(4, 'Matt', 'Macallan', 'macmat@gmail.com', '369', '2024-06-03 09:47:27'),
(5, 'Ronnie', 'Red', 'redr@gmail.com', '147', '2024-06-03 11:36:51'),
(6, 'Julie', 'Cepeda', 'julie@gmail.com', '987', '2024-06-03 13:13:44'),
(7, 'Gerry', 'Pino', 'cde@gmail.com', '123', '2024-06-04 20:06:22'),
(8, 'Fred', 'Flintstone', 'fredflintstone@example.com', 'password999', '2023-05-01 00:00:00'),
(9, 'John', 'Green', 'green@gmail.com', '147', '2024-06-06 09:37:41'),
(10, 'Rosa', 'Lopez', 'rosa@gmail.com', '258', '2024-06-06 12:34:04'),
(11, 'Debbie', 'Reynold', 'dbr@gmail.com', '159', '2024-06-09 15:15:42'),
(12, 'Ryan', 'Blair', 'ryanblair@gmail.com', '558', '2024-06-09 15:16:54'),
(13, 'Sally', 'Summer', 'sallyss@gmail.com', '16987', '2024-06-09 15:18:05'),
(14, 'Mino', 'Mani', 'minomani@gmail.com', '1258', '2024-06-09 16:44:02');

-- --------------------------------------------------------

--
-- Stand-in structure for view `users_view`
-- (See below for the actual view)
--
CREATE TABLE `users_view` (
`user_id` int(10) unsigned
,`first_name` varchar(20)
,`last_name` varchar(40)
,`email` varchar(60)
,`pass` varchar(40)
,`reg_date` datetime
);

-- --------------------------------------------------------

--
-- Structure for view `orders_view`
--
DROP TABLE IF EXISTS `orders_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `orders_view`  AS SELECT `orders`.`order_id` AS `order_id`, `orders`.`user_id` AS `user_id`, `orders`.`total` AS `total`, `orders`.`order_date` AS `order_date` FROM `orders` ;

-- --------------------------------------------------------

--
-- Structure for view `order_contents_view`
--
DROP TABLE IF EXISTS `order_contents_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `order_contents_view`  AS SELECT `order_contents`.`content_id` AS `content_id`, `order_contents`.`order_id` AS `order_id`, `order_contents`.`item_id` AS `item_id`, `order_contents`.`quantity` AS `quantity`, `order_contents`.`price` AS `price` FROM `order_contents` ;

-- --------------------------------------------------------

--
-- Structure for view `products_view`
--
DROP TABLE IF EXISTS `products_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `products_view`  AS SELECT `products`.`item_id` AS `item_id`, `products`.`item_name` AS `item_name`, `products`.`item_desc` AS `item_desc`, `products`.`item_img` AS `item_img`, `products`.`item_price` AS `item_price` FROM `products` ;

-- --------------------------------------------------------

--
-- Structure for view `users_view`
--
DROP TABLE IF EXISTS `users_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `users_view`  AS SELECT `users`.`user_id` AS `user_id`, `users`.`first_name` AS `first_name`, `users`.`last_name` AS `last_name`, `users`.`email` AS `email`, `users`.`pass` AS `pass`, `users`.`reg_date` AS `reg_date` FROM `users` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_contents`
--
ALTER TABLE `order_contents`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order_contents`
--
ALTER TABLE `order_contents`
  MODIFY `content_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `item_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;