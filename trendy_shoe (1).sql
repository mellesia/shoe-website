-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 12:47 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `order_drtails`
--

CREATE TABLE order_drtails (
  details_id int NOT NULL,
  order_id int NOT NULL,
  product_id int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE product (
  `product_id` int NOT NULL,
  `shoe_name` varchar(80) NOT NULL,
  `price` double NOT NULL,
  `product_desc` varchar(300) NOT NULL,
  `categoryid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE productcategory (
  categoryid int NOT NULL,
  category_name varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shoe_image`
--

CREATE TABLE shoe_image (
  image_id int NOT NULL,
  image_name varchar(100) NOT NULL,
  product_id int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shoe_order`
--

CREATE TABLE shoe_order (
  order_id int NOT NULL,
  delivery_date datetime NOT NULL DEFAULT current_timestamp(),
  total_price double NOT NULL,
  shoping_cart_id int NOT NULL,
  user_id int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shoping_cart`
--

CREATE TABLE shoping_cart (
  shoping_cart_id int NOT NULL,
  order_amount int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE users (
  id int NOT NULL,
  firstName varchar(80) NOT NULL,
  lastName varchar(80) NOT NULL,
  username varchar(50) NOT NULL,
  addres varchar(200) NOT NULL,
  phone varchar(20) NOT NULL,
  email varchar(300) NOT NULL,
  password varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO users (`id`, `firstName`, `lastName`, `username`, `addres`, `phone`, `email`, `password`) VALUES
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
ALTER TABLE order_drtails
  ADD PRIMARY KEY (`details_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE product
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE productcategory
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `shoe_image`
--
ALTER TABLE shoe_image
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `shoe_order`
--
ALTER TABLE shoe_order
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `shoping_cart_id` (`shoping_cart_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `shoping_cart`
--
ALTER TABLE shoping_cart
  ADD PRIMARY KEY (`shoping_cart_id`);

--
-- Indexes for table `users`
--
ALTER TABLE users
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_drtails`
--
ALTER TABLE order_drtails
  MODIFY `details_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE product
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productcategory`
--
ALTER TABLE productcategory
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shoe_image`
--
ALTER TABLE shoe_image
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shoe_order`
--
ALTER TABLE shoe_order
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shoping_cart`
--
ALTER TABLE `shoping_cart`
  MODIFY `shoping_cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE users
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_drtails`
--
ALTER TABLE order_drtails
  ADD CONSTRAINT `order_drtails_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `order_drtails_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `shoe_order` (`order_id`);

--
-- Constraints for table `product`
--
ALTER TABLE product
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `productcategory` (`categoryid`);

--
-- Constraints for table `shoe_image`
--
ALTER TABLE shoe_image
  ADD CONSTRAINT `shoe_image_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `shoe_order`
--
ALTER TABLE shoe_order
  ADD CONSTRAINT `shoe_order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `shoe_order_ibfk_2` FOREIGN KEY (`shoping_cart_id`) REFERENCES `shoping_cart` (`shoping_cart_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
