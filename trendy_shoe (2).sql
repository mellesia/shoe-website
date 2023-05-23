-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 04:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
--

-- --------------------------------------------------------

--
-- Table structure for table `order_drtails`
--

CREATE TABLE `order_drtails` (
  `details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `shoe_name` varchar(80) NOT NULL,
  `price` double NOT NULL,
  `product_desc` varchar(300) NOT NULL,
  `categoryid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `shoe_name`, `price`, `product_desc`, `categoryid`) VALUES
(1, 'Black Boot', 550, 'black boot ', 3),
(2, 'Black Boot', 700, 'black boot ', 3),
(4, 'Black Heels', 600, 'Black Heels', 1),
(5, 'Blue Heels', 450, 'Blue Heels', 1),
(6, 'Black Heels', 500, 'Black Heels', 1),
(8, 'beige Sandal', 400, 'beige Sandal', 5),
(9, 'Black Sandal', 450, 'Black Sandal', 5),
(10, 'Brown Sandal', 750, 'Brown Sandal', 5),
(12, 'Black Sandal', 680, 'Black Sandal', 5),
(13, 'Black Sandal', 799, 'Black Sandal', 5),
(14, 'Black Slipper', 450, 'summer black Slipper', 6),
(15, 'Black Slipper', 400, 'Black Slipper', 6),
(16, 'Blue Slipper', 300, 'Blue Slipper', 6),
(17, 'Mint Green Slipper', 589, 'Mint Green Slipper', 6),
(18, 'Sneakers', 700, 'Sneakers', 4),
(19, 'Brown Sneakers', 650, 'Brown Sneakers', 4),
(20, 'Sneakers', 600, 'White Sneakers', 4),
(21, 'White Sneakers', 750, 'White Sneakers', 4),
(22, 'Black Sneakers', 899, 'Black Sneakers', 4),
(23, 'White Sneakers', 799, 'White Sneakers', 4),
(24, 'Beige Flat', 500, 'Beige Flat', 2),
(25, 'Baby Blue Flat', 799, 'Baby Blue Flat', 2),
(26, 'Black Flat', 400, 'Black Flat', 2),
(27, 'Dark Green Flat', 499, 'Dark Green Flat', 2),
(28, 'Baby Pink Flat', 500, 'Baby Pink Flat', 2),
(29, 'Black Flat', 599, 'Black Flat', 2),
(30, 'White Flat', 699, 'White Flat', 2),
(31, 'Black Flat', 599, 'Black Flat', 2),
(32, 'Tiger Flat', 799, 'Tiger Flat', 2),
(33, 'Black Flat', 699, 'Black Flat', 2);

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE `productcategory` (
  `categoryid` int(11) NOT NULL,
  `category_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productcategory`
--

INSERT INTO `productcategory` (`categoryid`, `category_name`) VALUES
(1, 'Heels'),
(2, 'Flats'),
(3, 'Boots'),
(4, 'Sneakers\r\n'),
(5, 'Sandal'),
(6, 'Slippers');

-- --------------------------------------------------------

--
-- Table structure for table `shoe_image`
--

CREATE TABLE `shoe_image` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shoe_image`
--

INSERT INTO `shoe_image` (`image_id`, `image_name`, `product_id`) VALUES
(1, 'images/products/boots1.jpg', 1),
(2, 'images/products/boots2.jpg', 2),
(3, 'images/products/flat.jpg', 24),
(4, 'images/products/flat1.jpg', 25),
(5, 'images/products/flat2.jpg', 26),
(6, 'images/products/flat3.jpg', 27),
(7, 'images/products/flat4.jpg', 28),
(8, 'images/products/flat5.jpg', 29),
(9, 'images/products/flat6.jpg', 30),
(10, 'images/products/flat7.jpg', 31),
(11, 'images/products/flat8.jpg', 32),
(12, 'images/products/flat9.jpg', 33),
(13, 'images/products/heels1.jpg', 4),
(14, 'images/products/heels2.jpg', 5),
(15, 'images/products/heels3.jpg', 6),
(16, 'images/products/sand1.jpg', 8),
(17, 'images/products/sand2.jpg', 9),
(18, 'images/products/sand3.jpg', 10),
(19, 'images/products/sand4.jpg', 13),
(20, 'images/products/sand5.jpg', 12),
(21, 'images/products/sli1.jpg', 14),
(22, 'images/products/sli2.jpg', 15),
(23, 'images/products/sli4.jpg', 16),
(24, 'images/products/sli5.jpg', 17),
(25, 'images/products/sn1.jpg', 20),
(26, 'images/products/sn2.jpg', 21),
(27, 'images/products/sn3.jpg', 21),
(28, 'images/products/sn4.jpg', 23),
(29, 'images/products/sn5.jpg', 22),
(30, 'images/products/sn6.jpg', 23);

-- --------------------------------------------------------

--
-- Table structure for table `shoe_order`
--

CREATE TABLE `shoe_order` (
  `order_id` int(11) NOT NULL,
  `delivery_date` datetime NOT NULL DEFAULT current_timestamp(),
  `total_price` double NOT NULL,
  `shoping_cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shoping_cart`
--

CREATE TABLE `shoping_cart` (
  `shoping_cart_id` int(11) NOT NULL,
  `order_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(80) NOT NULL,
  `lastName` varchar(80) NOT NULL,
  `username` varchar(50) NOT NULL,
  `addres` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `username`, `addres`, `phone`, `email`, `password`) VALUES
(1, 'Theodora', 'Maher', 'theo', 'ttttttttttttt', '012847361', '204062@eru.edu.eg', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79'),
(2, 'Kkkk', 'Llll', 'llll', 'mmmmm', 'nhhhh', 'hh@gmail.com', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79'),
(3, 'Mellesia', 'Maged', 'mmmm', 'mmmmm', '100225', 'mallos@gmail.com', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79'),
(4, 'Fdsafdsafd', 'Jkjlfdsaffd', 'jklfdsafd', 'jklfdsafd', '100225', 'ahmed@yahoo.com', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85'),
(5, 'Koko', 'Yfuewioyrewuiqo', 'Yfuewioyrewuiqo', 'ttttttttttttt', '5998989', 'ahsmed@gmail.com', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_drtails`
--
ALTER TABLE `order_drtails`
  ADD PRIMARY KEY (`details_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `shoe_image`
--
ALTER TABLE `shoe_image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `shoe_order`
--
ALTER TABLE `shoe_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `shoping_cart_id` (`shoping_cart_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `shoping_cart`
--
ALTER TABLE `shoping_cart`
  ADD PRIMARY KEY (`shoping_cart_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_drtails`
--
ALTER TABLE `order_drtails`
  MODIFY `details_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `shoe_image`
--
ALTER TABLE `shoe_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `shoe_order`
--
ALTER TABLE `shoe_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shoping_cart`
--
ALTER TABLE `shoping_cart`
  MODIFY `shoping_cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_drtails`
--
ALTER TABLE `order_drtails`
  ADD CONSTRAINT `order_drtails_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `order_drtails_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `shoe_order` (`order_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `productcategory` (`categoryid`);

--
-- Constraints for table `shoe_image`
--
ALTER TABLE `shoe_image`
  ADD CONSTRAINT `shoe_image_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `shoe_order`
--
ALTER TABLE `shoe_order`
  ADD CONSTRAINT `shoe_order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `shoe_order_ibfk_2` FOREIGN KEY (`shoping_cart_id`) REFERENCES `shoping_cart` (`shoping_cart_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
