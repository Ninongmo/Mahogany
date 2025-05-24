-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2024 at 02:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahoganycharmdb3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `first_name`, `middle_name`, `last_name`, `suffix`, `email`, `contact_number`, `address`, `country`) VALUES
(4, 'Argie', 'Masay', 'Rico', '', 'argie,rico.564@gmail.com', '09127195764', 'Seti, Jimenez, MIsamis Occidental', 'Afghanistan'),
(5, 'Argie', 'Masay', 'Rico', '', 'argie,rico.564@gmail.com', '09127195764', 'Seti, Jimenez, MIsamis Occidental', 'Afghanistan'),
(6, 'Charina', 'Bajolo', 'Gomez', '', 'charina.gomez@gmail.com', '09123456789', 'Pines, Oroquieta', 'Afghanistan');

-- --------------------------------------------------------

--
-- Table structure for table `mahogany_products`
--

CREATE TABLE `mahogany_products` (
  `productID` int(5) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_detailsID` int(11) NOT NULL,
  `product_quantity` int(5) NOT NULL,
  `product_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahogany_products`
--

INSERT INTO `mahogany_products` (`productID`, `product_image`, `product_name`, `product_detailsID`, `product_quantity`, `product_price`) VALUES
(122401, 'mahogany pics/bed/Bed.jpg', 'Solid Mahogany Wood Platform Bed', 1, 30, 5000),
(122402, 'mahogany pics/bed/bed2.jpg', 'King Size Mahogany Bed', 2, 30, 5000),
(122403, 'mahogany pics/bed/mahogany french sliegh bed.jpg', 'French Sleigh Mahogany Bed', 3, 30, 5000),
(122404, 'mahogany pics/chair/Admiral Dining Chair.jpg', 'Admiral Dining Mahogany Chair', 4, 59, 750),
(122405, 'mahogany pics/chair/Chair.jpg', 'Carved Mahogany Hall Chair', 5, 60, 750),
(122406, 'mahogany pics/chair/Balloon Back Dining Chair.jpg', 'Balloon Back Dining Chair', 6, 60, 750),
(122407, 'mahogany pics/door/mahogany 4 Lite door slab.jpg', '4 Lite Slab Mahogany Door', 7, 50, 2000),
(122408, 'mahogany pics/door/mahogany storm interior door.jpg', 'Mahogany Storm Interior Door', 8, 50, 2000),
(122409, 'mahogany pics/door/wooden-mahogany-door-beautiful-carved-surround-relief-isolated-white-background-38779234.webp', 'Mahogany Carved Door', 9, 50, 2000),
(122410, 'mahogany pics/vase/handcrafted mahogany african mahogany vase.webp', 'Handcrafted Mahogany Vase', 10, 70, 500),
(122411, 'mahogany pics/vase/mahogany wood fluted vase.jpg', 'Mahogany Wood Fluted Vase', 11, 68, 500),
(122412, 'mahogany pics/vase/mahogany wood vase large.jpg', 'Mahogany Wood Vase Round Shaped', 12, 70, 500),
(122413, 'mahogany pics/guitar/mahogany grand concert acoustic guitar.webp', 'Mahogany Grand Concert Acoustic Guitar', 13, 10, 15000),
(122414, 'mahogany pics/guitar/mahogany cutaway acoustic-electric guitar.webp', 'Mahogany Cutaway Acoustic-Electric Guitar', 14, 10, 15000),
(122415, 'mahogany pics/guitar/mahogany natural burst live acoustic-electric guitar.webp', 'Mahogany Natural Burst Live Acoustic-Electric Guitar', 15, 10, 15000),
(122416, 'mahogany pics/table/mahogany round coffee table.jpg', 'Mahogany Round Coffee Table', 16, 40, 1500),
(122417, 'mahogany pics/table/mahogany square end table.jpg', 'Mahogany Square End Table', 17, 40, 1500),
(122418, 'mahogany pics/table/round shaped solid mahogany table.jpg', 'Mahogany Round Shaped Solid Table', 18, 40, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `mahogany_product_details`
--

CREATE TABLE `mahogany_product_details` (
  `product_detailsID` int(11) NOT NULL,
  `description1` varchar(255) NOT NULL,
  `description2` varchar(255) NOT NULL,
  `description3` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahogany_product_details`
--

INSERT INTO `mahogany_product_details` (`product_detailsID`, `description1`, `description2`, `description3`, `size`, `material`) VALUES
(1, 'Quality solid mahogany build', 'Simple and Sturdy design', 'Crafted by a skilled artisan', 'H: 2ft W: 3.5ft L: 7ft', 'Mahogany'),
(2, 'Quality solid mahogany build', 'Distinguished and Elegant design', 'Crafted by a skilled artisan', 'H: 3ft W: 5ft L: 10ft', 'Mahogany'),
(3, 'Quality solid mahogany build', 'Shiny Sleigh design', 'Crafted by a skilled artisan', 'H: 3ft W: 4ft L: 8ft', 'Mahogany'),
(4, 'Quality solid mahogany build', 'Victorian period styling', 'Gentle curving dome back rest', 'H: 92cm W: 48cm D: 38cm', 'Mahogany'),
(5, 'These chairs were often built by skilled cabinet makers', 'Its unique style and comfort makes.', 'Crafted by a skilled artisan', 'H: 87cm W:44cm D:48cm', 'Mahogany'),
(6, 'Victorian style dining chair', 'A classical balloon back design', 'Crafted by a skill artisan', 'H: 93 cm W: 48 cm D: 52 cm', 'Mahogany'),
(7, 'Quality solid mahogany build', 'Unique design with 4 glass slab', 'Crafted by a skilled artisan', 'H: 6.5ft W: 2.5ft', 'Mahogany'),
(8, 'Quality solid mahogany build', 'Simple and Sturdy Design', 'Crafted by a skilled artisan', 'H: 6.5ft W: 2ft', 'Mahogany'),
(9, 'Quality solid mahogany build', 'Handcarved and Elegant Design', 'Crafted by a skilled artisan', 'H: 8ft W: 4ft', 'Mahogany'),
(10, 'Quality solid mahogany vase', 'Handcrafted and simple design', 'Crafted by a skilled artisan', 'H: 1ft D: 4in. ', 'Mahogany'),
(11, 'Quality solid mahogany vase', 'Unique and a flute design', 'Crafted by a skilled artisan', 'H: 1ft D: 4in.', 'Mahogany'),
(12, 'Quality solid mahogany vase', 'Large, Round and a simple design', 'Crafted by a skilled artisan', 'H: 2ft D: 6in.', 'Mahogany'),
(13, 'Quality solid mahogany guitar', 'Handcrafted and Unique design', 'Crafted by a skilled artisan', 'H: 1ft W: 4in. L: 3ft', 'Mahogany'),
(14, 'Quality solid mahogany guitar', 'Handcrafted and Unique design', 'Crafted by a skilled artisan', 'H: 1ft W: 4in. L: 3ft', 'Mahogany'),
(15, 'Quality solid mahogany guitar', 'Handcrafted and Unique design', 'Crafted by a skilled artisan', 'H: 1ft W: 4in. L: 3ft', 'Mahogany'),
(16, 'Quality solid mahogany table', 'Round table with Bended feet design', 'Crafted by a skilled artisan', 'H: 1ft D: 24in', 'Mahogany'),
(17, 'Quality solid mahogany table', 'Square table with square feet design', 'Crafted by a skilled artisan', 'H: 3ft W: 2in L: 2ft', 'Mahogany'),
(18, 'Quality solid mahogany table', 'Round table with Unique feet design', 'Crafted by a skilled artisan', 'H: 3ft W: 2in L: 2ft', 'Mahogany');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `customerID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `order_date`, `customerID`, `productID`, `quantity`, `total_amount`) VALUES
(4, '2024-04-23', 5, 11, 2, 1000),
(5, '2024-06-09', 6, 122404, 1, 750);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transactionID` int(5) NOT NULL,
  `transaction_number` varchar(15) NOT NULL,
  `orderID` int(5) NOT NULL,
  `customerID` int(5) NOT NULL,
  `status` varchar(20) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transactionID`, `transaction_number`, `orderID`, `customerID`, `status`) VALUES
(5, '6665ce0e56f4a', 5, 6, 'delivered');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `mahogany_products`
--
ALTER TABLE `mahogany_products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `mahogany_product_details`
--
ALTER TABLE `mahogany_product_details`
  ADD PRIMARY KEY (`product_detailsID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transactionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mahogany_products`
--
ALTER TABLE `mahogany_products`
  MODIFY `productID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122419;

--
-- AUTO_INCREMENT for table `mahogany_product_details`
--
ALTER TABLE `mahogany_product_details`
  MODIFY `product_detailsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transactionID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
