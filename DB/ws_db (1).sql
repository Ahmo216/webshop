-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 26, 2019 at 07:54 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ws_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(200) NOT NULL,
  `Category` varchar(64) NOT NULL,
  `Price` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `Category`, `Price`, `Description`, `Image`) VALUES
(13, 'ACER Swift 3 ', 'Choose Category', 750, '  Great laptop , great price . Here wo go now lets goooo.', 'huawei honor view.jpg'),
(46, 'ACER A515-52G', 'Laptops', 1250, 'Powerful, everyday computing at your side.', 'ACER A515-52G.png'),
(68, 'Sony Xperia E5', 'cellphones', 900, 'Do you really want a phone that is not made in Japan ? Really ? Do you ? ', 'sony xperia E5.jpg'),
(69, 'Tesla 3.4 IPS', 'cellphones', 250, 'Great phone for great price ', 'Tesla 3.4 IPS.jpg'),
(70, 'Tesla LED 32T319', 'tv', 650, 'Cannot afford a Sony ? Tesla will do the job. ', 'TESLA LED 32T319.jpg'),
(71, 'Tesla LED 32T319', 'tv', 850, 'We are trying really hard .', 'Tesla LED 32T3119BH.jpg'),
(72, 'Xiaomi Redmi2', 'cellphones', 950, 'Everything you need . ', 'xiaomi redmis2.jpg'),
(67, 'Sony LED ULTRAHD', 'tv', 3000, 'ULTRA HD from Japan . Are you not entertained?  ', 'Sony LED ULTRAHD.jpg'),
(66, 'Sony LED KDL49xE', 'tv', 1900, 'LED display that will blow your mind ! ', 'Sony LED KDL-49xE.jpg'),
(64, 'Samsung QLEE65', 'tv', 2500, 'Best Tv on market.', 'Samsung QLED QE65Q7F.jpg'),
(60, 'LG LED 43UK6200', 'tv', 2000, '4K . But do you really need one ? ', 'LG LED 43UK6200.jpg'),
(59, 'LG LED 32LK500', 'tv', 1100, 'Motion picture as good as it gets ', 'LG LED 32LK500.jpg'),
(58, 'Lenovo IP330', 'Laptops', 1220, 'Lenovo delivers .Again.', 'lenovo IP330-15.jpg'),
(56, 'HP 15-064', 'Laptops', 1000, 'Yet another HP ', 'Laptop hp15-064.jpg'),
(57, 'Lenovo IDEAPAD330', 'Laptops', 1300, 'As good as it gets ! ', 'Lenovo ideapad330-15.jpg'),
(54, 'Huawei P20 Lite', 'cellphones', 1300, 'How many camera lenses do you want ? We will deliver .', 'Huawei p20 lite.jpg'),
(53, 'Huawei Honor View', 'cellphones', 1000, 'All the way from China to blow your mind ! ', 'huawei honor view.jpg'),
(52, 'HTC Desire Black 12 ', 'cellphones', 900, 'Reliable . Fast . Smooth. ', 'HTC desire 12 Black.jpg'),
(49, 'ASUS VivoBook Flip', 'Laptops', 1500, 'Underwhelming performance; Uneven build quality; Poor webcam; Lots of bloatware', 'Asus VivoBook flip 14.png'),
(48, 'ACER Swift 3 ', 'Laptops', 1250, 'Its Acer and its Red . Great laptop.', 'ACER Swift 3 SF314.jpg'),
(47, 'Apple Iphone XS', 'cellphones', 1000, 'Super Retina in two sizes â€” including the largest display ever on an iPhone. Even faster Face ID. ', 'apple iphone xs.jpg'),
(65, 'Sony LED KD43X', 'tv', 1900, 'Its Sony . Its good . ', 'Sony LED KD43X.jpg'),
(63, 'Samsung Galaxy S10 EDGE', 'cellphones', 1500, 'S10 but EDGE . That explains why I cost so much more ! ', 'samsung galaxy s10edge.jpg'),
(62, 'Samsung Galaxy S10', 'cellphones', 1000, 'All has been already said. As good as it gets . ', 'samsung galaxy s10.jpg'),
(61, 'Samsung 43NU7022', 'tv', 1750, 'Great design. Silky smooth performance.', 'Samsung 43NU7022.jpg'),
(55, 'HP 58ea', 'Laptops', 900, 'Great laptop at great price .', 'laptop hp 1wy58ea.png'),
(51, 'HP ENVY 13', 'Laptops', 700, 'Windows 10\r\nIntelÂ® Coreâ„¢ processors\r\nUltra-slim notebook at just 12.9mm\r\nImpossibly thin. Enviably engineered.', 'HP ENVY 13ah0021.jpg'),
(50, 'ASUS x541', 'Laptops', 1120, 'Delivers great quality at great price .', 'Asus x541nadm668.jpg'),
(43, 'ACER Swift 3 ', 'Choose Category', 750, '  Great laptop , great price . Here wo go now lets goooo.', 'huawei honor view.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(6) NOT NULL DEFAULT 'user',
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(26, 'ahmo', 'ahmed.s216@hotmail.com', 'admin', '2b78d28b47070741fd075eb2c13e2e8d'),
(30, 'Damir123', 'damir@gmail.com', 'user', 'e10adc3949ba59abbe56e057f20f883e'),
(29, 'Hasim', 'HasimTaci@gmail.com', 'user', 'e10adc3949ba59abbe56e057f20f883e'),
(39, 'medo', 'masaimedo@gmail.com', 'user', 'e10adc3949ba59abbe56e057f20f883e'),
(32, 'El Bake', 'Bakir@outlook.com', 'user', '202cb962ac59075b964b07152d234b70'),
(33, 'Vedran', 'Vecinjo@outlook.com', 'user', '202cb962ac59075b964b07152d234b70'),
(34, 'Sasa', 'sasa.gavric@outlook.com', 'user', '202cb962ac59075b964b07152d234b70'),
(35, 'Tinki Vinki', 'teletabisi@gmail.com', 'user', 'e10adc3949ba59abbe56e057f20f883e'),
(38, 'Mensur', 'Mensa@outlook.com', 'user', 'e10adc3949ba59abbe56e057f20f883e'),
(37, 'Emir Zilic', 'jalajalaosmanagaaa@gmail.com', 'user', 'e10adc3949ba59abbe56e057f20f883e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
