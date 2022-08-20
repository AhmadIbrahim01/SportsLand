-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 08:02 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportsland1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `username`, `password`, `phone`, `address`) VALUES
('ahmadibrahim', 'AI', '123', 76468212, 'سيروب'),
('Omar', 'OS', '123123123', 79153404, 'Saida');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(60) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `quantity` int(40) NOT NULL,
  `total_price` varchar(50) NOT NULL,
  `user_username` varchar(30) NOT NULL,
  `product_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(110) NOT NULL,
  `user_username` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `products` varchar(255) NOT NULL,
  `paid_amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_username`, `phone`, `address`, `products`, `paid_amount`) VALUES
(81, 'akrm123', '764682', 'LIU', 'WMNS(1), VAPOR(1)', '120'),
(82, 'akrm123', '777', 'saida', 'NIKE(1)', '70');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `size` varchar(30) NOT NULL,
  `price` int(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `name`, `size`, `price`, `description`, `image`, `type`) VALUES
(1, 'NIKE REVOLUTION 6 NN', '34', 30, 'Nike Revolution 6 Next Nature Men\'s Road Running Shoes VERSATILE COMFORT WITH FLEXIBLE CUSHIONING.', 'nikerevolution6nn.png', 'shoes'),
(2, 'NIKE COURT LEGACY NN', '40', 60, 'Nike Court Legacy\r\nMen\'s Shoes\r\nCOURT-INSPIRED CLASSIC.', 'nikecourt.png', 'shoes'),
(3, 'VAPOR 14 CLUB TF', '41', 60, 'Nike Mercurial Vapor 14 Club TF\r\nTurf Soccer Shoes\r\nScorch the competition in the Nike Mercurial Vap', 'vapor.png', 'shoes'),
(4, 'NIKE AIR MAX IMPACT 3', '41', 100, 'Nike Air Max Impact 3\r\nBasketball Shoe\r\nCRASH, BOOM, BANG ON THE BASKETBALL COURT.', 'nikepink.png', 'shoes'),
(5, 'NIKE REVOLUTION 6 NN (PSV)', '38', 70, 'The Nike Revolution 6 is all about versatility for little athletes, from all-day play to anytime wea', 'nikeboot.png', 'shoes1'),
(6, 'NIKE AIR MAX BOLT', '40', 60, 'The running-inspired Nike Air Max Bolt features rich overlays, wavy design lines and a whole lot of ', 'nikeairmax.png', 'shoes1'),
(7, 'NIKE COURT VISION LO NN', '41', 50, 'Nike Court Vision Low Next Nature\r\nMen\'s Shoes\r\nFRESH OFF THE COURT.\r\nIn love with the classic look ', 'nikecourt1.png', 'shoes1'),
(8, 'NIKE COURT ROYALE 2 MID', '38', 60, 'A flash from the past, the Nike Court Royale 2 Mid features the same energy that rocked the streets ', 'nikecourt2.png', 'shoes1'),
(9, 'WMNS NIKE REVOLUTION 5', '36', 60, 'Nike Revolution 5\r\nWomen\'s Running Shoe\r\nREVOLUTIONARY COMFORT.\r\nThe Nike Revolution 5 cushions your', 'boot4.png', 'shoes2'),
(10, 'WMNS NIKE ZOOM WINFLO 8 PRM', '37', 80, 'Nike Winflo 8 Premium\r\nWomen\'s Running Shoe\r\nSECURE SUPPORT FOR FAST, EVERYDAY TRAINING.\r\n', 'boot3.png', 'shoes2'),
(11, 'NIKE REACT VISION', '38', 100, 'Nike React Vision\r\nMen\'s Shoe\r\nSURREAL COMFORT. BORN FROM DREAMS.\r\nThe Nike React Vision is a story ', 'boot1.png', 'shoes2'),
(12, 'WMNS NIKE REVOLUTION 5 BLACK', '37', 80, 'REVOLUTIONARY COMFORT.\r\nThe Nike Revolution 5 cushions your stride with soft foam to keep you runnin', 'boot2.png', 'shoes2'),
(13, 'Basketball T-shirt', 's', 30, 'Under Armour Kids\' Basketball Icon T-shirts', 't1.png', 't-shirt'),
(14, 'MANCITY', 'l', 80, 'MANCITY 22-23 Home Kit', 'mckit.png', 't-shirt'),
(15, 'BARCELONA', 'm', 80, 'Barcelona 22-23 home kit', 't3.png', 't-shirt'),
(16, 'ADIDAS', 'm', 30, 'Adidas t-shirt', 't4.png', 't-shirt'),
(17, 'NIKE T-SHIRT', 'm', 30, 'Nike T-Shirt', 'tt7.jpg', 't-shirt1'),
(18, 'NIKE T-SHIRT', 's', 30, 'Nike T-Shirt', 'tt2.jpg', 't-shirt1'),
(19, 'NIKE T-SHIRT', 's', 15, 'Nike T-Shirt', 'tt4.jpg', 't-shirt1'),
(20, 'NIKE T-SHIRT', 's', 30, 'Nike T-Shirt', 'tt6.jpg', 't-shirt1'),
(21, 'Adidas', 'm', 30, 'Adidas T-Shirt', 'ttt1.jpg', 't-shirt2'),
(22, 'PUMA', 'l', 20, 'Puma T-Shirt', 'ttt2.jpg', 't-shirt2'),
(23, 'PUMA', 'l', 40, 'Puma T-Shirt', 'ttt3.jpg', 't-shirt2'),
(24, 'PUMA', 'l', 50, 'Puma T-Shirt', 'ttt4.jpg', 't-shirt2');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`username`, `email`) VALUES
('akrm123', 'akrm@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(30) NOT NULL,
  `stad` varchar(40) NOT NULL,
  `price` int(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `stad`, `price`, `description`, `image`) VALUES
(1, 'Lusail Stadium', 80, 'Host stadium for the final in 2022\r\n80,000-capacity arena\r\nCentrepiece of Lusail City: a state-of-th', 'stad1.png'),
(2, 'Stadium 974', 90, '40,000-capacity arena\r\nConstructed from shipping containers and modular steel\r\nEchoing the nearby po', 'stad2.png'),
(3, 'Al-Janoub Stadium', 60, '40,000-capacity arena\r\nIn the southern city of Al Wakrah\r\nOne of Qatar\'s oldest continuously inhabit', 'stad3.png'),
(4, 'Al-Bayt Stadium', 70, 'Opening match venue\r\n60,000-capacity arena\r\nTraditional nomadic tent design', 'stad4.png');

-- --------------------------------------------------------

--
-- Table structure for table `ticketbought`
--

CREATE TABLE `ticketbought` (
  `id` int(20) NOT NULL,
  `stad` varchar(40) NOT NULL,
  `price` int(40) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticketbought`
--

INSERT INTO `ticketbought` (`id`, `stad`, `price`, `description`, `image`, `user_username`) VALUES
(2, 'Stadium', 90, '40,000-capacity', 'stad2.png', 'ahmad'),
(3, 'Al-Janoub', 60, '40,000-capacity', 'stad3.png', 'ahmad'),
(4, 'Al-Bayt', 70, 'Opening', 'stad4.png', 'ahmad');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `email` varchar(50) NOT NULL,
  `psw` varchar(16) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `fname`, `lname`, `gender`, `email`, `psw`, `address`) VALUES
('ahhmm', 'ahmad', 'ibrahim', 'M', 'a2@gmail.com', '122', 'saida'),
('ahmad', 'ahmad', 'ibrahim', 'M', 'ahmad@gmail.com', '12345678', 'Saida'),
('akrm123', 'akrm', 'amro', 'M', 'akrm@gmail.com', '123', 'Saida'),
('pwm', 'ahmad', 'ibrahim', 'M', 'a2@gmail.com', '112', 'saida');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `test` (`user_username`),
  ADD KEY `test2` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `test1` (`user_username`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD KEY `test6` (`username`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticketbought`
--
ALTER TABLE `ticketbought`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test9` (`user_username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ticketbought`
--
ALTER TABLE `ticketbought`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `test` FOREIGN KEY (`user_username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `test2` FOREIGN KEY (`product_id`) REFERENCES `store` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `test1` FOREIGN KEY (`user_username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD CONSTRAINT `test6` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticketbought`
--
ALTER TABLE `ticketbought`
  ADD CONSTRAINT `test9` FOREIGN KEY (`user_username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
