-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 07, 2023 at 01:58 AM
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
-- Database: `JEWELRYLANE`
--

-- --------------------------------------------------------

--
-- Table structure for table `Booking`
--

CREATE TABLE `Booking` (
  `id` int(100) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` char(20) DEFAULT NULL,
  `regDate` date DEFAULT NULL,
  `regTime` time DEFAULT NULL,
  `purpose` char(100) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Catalog`
--

CREATE TABLE `Catalog` (
  `id` int(11) NOT NULL,
  `category` varchar(512) DEFAULT NULL,
  `title` varchar(512) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `material` varchar(512) DEFAULT NULL,
  `image` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Catalog`
--

INSERT INTO `Catalog` (`id`, `category`, `title`, `price`, `material`, `image`) VALUES
(1, 'rings', 'Love ring', 1650, 'yellow gold', 'https://int.cartier.com/content/dam/rcq/car/58/71/74/587174.png'),
(2, 'rings', 'Love wedding band', 3550, 'yellow gold', 'https://int.cartier.com/content/dam/rcq/car/63/24/04/632404.png'),
(3, 'rings', 'Love wedding band', 3550, 'pink gold', 'https://int.cartier.com/content/dam/rcq/car/63/24/01/632401.png'),
(4, 'rings', 'Love ring', 6450, 'pink gold', 'https://int.cartier.com/content/dam/rcq/car/19/43/99/2/1943992.png'),
(5, 'rings', 'Panthre de Cartier', 2590, 'white gold', 'https://int.cartier.com/content/dam/rcq/car/10/54/43/2/1054432.png'),
(6, 'rings', 'Les Oiseaux ring', 4790, 'white gold', 'https://int.cartier.com/content/dam/rcq/car/59/13/11/591311.png'),
(7, 'rings', 'Faune et Flore de Cartier', 14300, 'platinum', 'https://int.cartier.com/content/dam/rcq/car/96/29/77/962977.png'),
(8, 'rings', 'Cactus de Cartier', 3990, 'yellow gold', 'https://int.cartier.com/content/dam/rcq/car/16/43/46/7/1643467.png'),
(9, 'rings', 'Vatincelle de Cartier wedding band', 2410, 'yellow gold', 'https://int.cartier.com/content/dam/rcq/car/90/25/83/902583.png'),
(10, 'rings', 'Vatincelle de Cartier wedding band', 2580, 'white gold', 'https://int.cartier.com/content/dam/rcq/car/67/72/85/677285.png'),
(11, 'bracelets', 'Amulette de Cartier', 4450, 'pink gold', 'https://int.cartier.com/content/dam/rcq/car/14/69/46/7/1469467.png'),
(12, 'bracelets', 'Love bracelet', 43200, 'pink gold', 'https://int.cartier.com/content/dam/rcq/car/19/58/58/7/1958587.png'),
(13, 'bracelets', 'Panthre de Cartier', 30600, 'platinum', 'https://int.cartier.com/content/dam/rcq/car/59/36/95/593695.png'),
(14, 'bracelets', 'Faune et Flore de Cartier', 17700, 'platinum', 'https://int.cartier.com/content/dam/rcq/car/59/36/95/593695.png'),
(15, 'bracelets', 'Cactus de Cartier bracelet', 20000, 'yellow gold', 'https://int.cartier.com/content/dam/rcq/car/11/85/31/6/1185316.png'),
(16, 'bracelets', 'Diamants Ligers', 17050, 'pink gold', 'https://int.cartier.com/content/dam/rcq/car/13/86/10/8/1386108.png'),
(17, 'bracelets', 'Juste un Clou', 33100, 'white gold', 'https://int.cartier.com/content/dam/rcq/car/73/63/49/736349.png'),
(18, 'bracelets', 'Santos de Cartier', 33500, 'white gold', 'https://int.cartier.com/content/dam/rcq/car/59/00/34/590034.png'),
(19, 'bracelets', 'Maillon Panthre thin', 33900, 'white gold', 'https://int.cartier.com/content/dam/rcq/car/58/79/21/587921.png'),
(20, 'bracelets', 'Ecrou de Cartier', 17050, 'white gold', 'https://int.cartier.com/content/dam/rcq/car/17/93/96/8/1793968.png'),
(21, 'necklaces', 'Amulette de Cartier', 4950, 'white gold', 'https://int.cartier.com/content/dam/rcq/car/13/61/34/0/1361340.png'),
(22, 'necklaces', 'Love necklace', 8000, 'white gold', 'https://int.cartier.com/content/dam/rcq/car/13/61/34/0/1361340.png'),
(23, 'necklaces', 'Panthre de Cartier', 20200, 'white gold', 'https://int.cartier.com/content/dam/rcq/car/13/65/78/1/1365781.png'),
(24, 'necklaces', 'Caresse Orchides par Cartier', 3500, 'pink gold', 'https://int.cartier.com/content/dam/rcq/car/13/65/78/1/1365781.png'),
(25, 'necklaces', 'Paris Nouvelle Vague', 10600, 'pink gold', 'https://int.cartier.com/content/dam/rcq/car/90/23/92/902392.png'),
(26, 'necklaces', 'Trinity', 8300, 'white gold', 'https://int.cartier.com/content/dam/rcq/car/13/61/55/8/1361558.png'),
(27, 'necklaces', 'Diamants Ligers', 8900, 'yellow gold', 'https://int.cartier.com/content/dam/rcq/car/13/61/40/5/1361405.png'),
(28, 'necklaces', 'Saphirs Ligers de Cartier', 10300, 'pink gold', 'https://int.cartier.com/content/dam/rcq/car/13/61/37/6/1361376.png'),
(29, 'necklaces', 'Diamants Ligers', 15500, 'white gold', 'https://int.cartier.com/content/dam/rcq/car/13/61/37/2/1361372.png'),
(30, 'necklaces', 'Etincelle de Cartier', 4800, 'pink gold', 'https://int.cartier.com/content/dam/rcq/car/13/61/33/2/1361332.png'),
(31, 'earrings', 'Amulette de Cartier', 6700, 'pink gold', 'https://int.cartier.com/content/dam/rcq/car/14/37/79/8/1437798.png'),
(32, 'earrings', 'Love earrings', 5000, 'white gold', 'https://int.cartier.com/content/dam/rcq/car/10/32/57/0/1032570.png'),
(33, 'earrings', 'Panthre de Cartier', 7000, 'platinum', 'https://int.cartier.com/content/dam/rcq/car/58/59/53/585953.png'),
(34, 'earrings', 'Caresse Orchides par Cartier', 3300, 'pink gold', 'https://int.cartier.com/content/dam/rcq/car/15/42/87/8/1542878.png'),
(35, 'earrings', 'Les Oiseaux Libors', 3350, 'white gold', 'https://int.cartier.com/content/dam/rcq/car/97/13/49/971349.png'),
(36, 'earrings', 'Cactus de Cartier', 3080, 'yellow gold', 'https://int.cartier.com/content/dam/rcq/car/10/54/19/4/1054194.png'),
(37, 'earrings', 'Trinity earrings', 3600, 'white gold', 'https://int.cartier.com/content/dam/rcq/car/15/42/77/1/1542771.png'),
(38, 'earrings', 'Diamants Ligers', 2940, 'white gold', 'https://int.cartier.com/content/dam/rcq/car/15/43/07/5/1543075.png'),
(39, 'earrings', 'Etincelle de Cartier', 2900, 'yellow gold', 'https://int.cartier.com/content/dam/rcq/car/14/71/51/7/1471517.png'),
(40, 'earrings', 'Reflection de Cartier', 6500, 'white gold', 'https://int.cartier.com/content/dam/rcq/car/10/58/52/1/1058521.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Booking`
--
ALTER TABLE `Booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Catalog`
--
ALTER TABLE `Catalog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Booking`
--
ALTER TABLE `Booking`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
