-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2018 at 03:06 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(4) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `P_Name` varchar(200) NOT NULL,
  `User_name` varchar(20) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `Price` int(10) NOT NULL,
  `Image` varchar(2000) NOT NULL,
  `Date` date NOT NULL,
  `SubTotal` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `Category`, `P_Name`, `User_name`, `Quantity`, `Price`, `Image`, `Date`, `SubTotal`) VALUES
(15, 'Sony', 'Sony Bravia KLV', 'nirmal651', 1, 29499, 'sony-bravia1532252046.jpg', '2018-07-23', 29499),
(16, 'Canon', 'Canon EOS 3000D', 'nirmal651', 1, 35000, 'canon-eos1532250763.jpg', '2018-07-23', 35000),
(17, 'Xiaomi', 'Xioami Redmi Note 5', 'nirmal651', 2, 7500, 'redmi51532251200.jpg', '2018-07-23', 22500),
(18, 'Titan', 'Titan Modern Bandhan', 'nirmal651', 7, 10145, 'titan-bandhan1532251660.jpg', '2018-07-23', 81160),
(19, 'HP', 'HP Envy 13', '', 6, 51000, 'envy1532249849.jpg', '2018-07-23', 357000),
(21, 'Xiaomi', 'Redmi Y2', '', 3, 12000, 'xiaomi-redmi-y21532251358.jpg', '2018-07-24', 48000),
(22, 'EA Sports', 'NHL 18', '', 1, 2399, 'ea-nhl1532253578.jpg', '2018-07-24', 2399),
(23, 'Sega', 'Sonic the Hedgehog', '', 3, 1500, 'sega-sonic1532253783.jpg', '2018-07-26', 7500),
(24, 'Sega', 'Sonic the Hedgehog', 'anita', 1, 1500, 'sega-sonic1532253783.jpg', '2018-07-26', 1500),
(25, 'Sony', 'Sony Bravia KLV Television', '', 1, 29499, 'sony-bravia1532252046.jpg', '2018-07-26', 29499),
(26, 'Nikon', 'Nikon Coolpix A10', '', 1, 10000, '2Nikon-A101532250876.jpg', '2018-08-22', 10000),
(27, 'Nikon', 'Nikon Coolpix A10', 'rahul123', 1, 10000, '2Nikon-A101532250876.jpg', '2018-08-22', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `level1_category`
--

CREATE TABLE `level1_category` (
  `level1_id` int(3) NOT NULL,
  `root_id` int(3) NOT NULL,
  `level1_name` varchar(100) NOT NULL,
  `Level` int(3) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level1_category`
--

INSERT INTO `level1_category` (`level1_id`, `root_id`, `level1_name`, `Level`) VALUES
(1, 1, 'Computers & Laptops', 2),
(2, 1, 'Cameras', 2),
(6, 1, 'Mobiles', 2),
(7, 1, 'Watches', 2),
(10, 1, 'Television', 2),
(11, 1, 'Audio', 2),
(12, 1, 'Car Electronics', 2),
(13, 1, 'Video Games', 2),
(14, 1, 'Gaming Console', 2),
(15, 1, 'Accessories', 2);

-- --------------------------------------------------------

--
-- Table structure for table `level2_category`
--

CREATE TABLE `level2_category` (
  `level2_id` int(3) NOT NULL,
  `level1_id` int(3) NOT NULL,
  `level2_name` varchar(100) NOT NULL,
  `Level` int(3) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level2_category`
--

INSERT INTO `level2_category` (`level2_id`, `level1_id`, `level2_name`, `Level`) VALUES
(1, 1, 'HP', 3),
(6, 2, 'Canon', 3),
(7, 2, 'Nikon', 3),
(8, 6, 'Xiaomi', 3),
(9, 6, 'HTC', 3),
(10, 7, 'Titan', 3),
(11, 7, 'Casio', 3),
(20, 1, 'Apple', 3),
(21, 10, 'Sony', 3),
(22, 10, 'Phillips', 3),
(23, 11, 'JBL', 3),
(24, 11, 'Bose', 3),
(25, 12, 'Pioneer', 3),
(26, 12, 'Kenwood', 3),
(27, 13, 'EA Sports', 3),
(28, 13, 'Sega', 3),
(29, 14, 'Microsoft', 3),
(30, 14, 'Nintendo', 3),
(31, 15, 'Logitech', 3),
(32, 15, 'iBall', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(3) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `P_name` varchar(100) NOT NULL,
  `User_name` varchar(50) NOT NULL,
  `Quantity` int(3) NOT NULL,
  `Total` int(10) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `Category`, `P_name`, `User_name`, `Quantity`, `Total`, `Contact`, `Address`) VALUES
(7, 'MacBook', 'HP Envy', 'rahul123', 1, 100000, 2147483647, 'kjadjadklasklasdkllkadslkas'),
(8, 'Canon', 'Canon 1000', 'rahul123', 1, 10000, 2147483647, 'kjadjadklasklasdkllkadslkas'),
(9, 'Canon', 'Canon 1000', 'rahul123', 1, 10000, 2147483647, 'gbgf'),
(10, 'MacBook', 'HP Envy', 'rahul123', 1, 100000, 1234567890, 'Ahmedabad Gujarat'),
(11, 'MacBook', 'HP Envy', 'rahul123', 1, 100000, 1234567890, 'Ahmedabad Gujarat'),
(12, 'MacBook', 'HP Envy', 'rahul123', 3, 300000, 1234567890, 'Ahmedabad Gujarat'),
(13, 'Cadio', 'Cadio', 'rahul123', 2, 40000, 2147483647, 'Ahmedabad'),
(14, 'MacBook', 'HP Envy', 'rahul123', 1, 100000, 2147483647, 'Ahmedabad'),
(15, 'Canon', 'Canon 1000', 'rahul123', 1, 10000, 2147483647, 'adad'),
(16, 'Canon', 'Canon 1000', 'rahul123', 1, 10000, 2147483647, 'amd'),
(17, 'Nikon', 'Nikon Coolpix A10', 'rahul123', 1, 10000, 2147483647, 'Amd'),
(18, 'Xiaomi', 'Redmi Y2', 'rahul123', 4, 48000, 2147483647, 'Amd'),
(19, 'Xiaomi', 'Xioami Redmi Note 5', 'nirmal651', 4, 30000, 2147483647, 'Ahmedabad'),
(20, 'Kenwood', 'Kenwood KAC-PS404', 'nirmal651', 1, 35000, 2147483647, 'amd'),
(21, 'Titan', 'Titan Modern Bandhan', 'karan', 1, 10145, 2147483647, 'India'),
(22, 'Canon', 'Canon IXUS 185', 'rahul123', 7, 25000, 2147483647, 'India'),
(23, 'Canon', 'Canon EOS 3000D', 'rahul123', 2, 35000, 2147483647, 'India'),
(24, 'HP', 'HP Envy 13', 'rahul123', 3, 204000, 2147483647, 'India'),
(25, 'Sony', 'Sony Bravia KLV Television', 'rahul123', 1, 29499, 2147483647, 'India'),
(26, 'HP', 'HP Envy 13', 'rahul123', 5, 459000, 2147483647, 'amd'),
(27, 'Canon', 'Canon EOS 3000D', 'rahul123', 1, 35000, 2147483647, 'amd'),
(28, 'HP', 'HP Envy 13', 'rahul123', 4, 204000, 2147483647, 'India'),
(29, 'Sega', 'Sonic the Hedgehog', 'rahul123', 1, 1500, 2147483647, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(3) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Details` varchar(300) NOT NULL,
  `Price` int(10) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `P_id` int(3) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `CreateDate` datetime NOT NULL,
  `UpdateDate` datetime NOT NULL,
  `Visibility` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Category`, `Name`, `Details`, `Price`, `Image`, `Quantity`, `P_id`, `Status`, `CreateDate`, `UpdateDate`, `Visibility`) VALUES
(44, 'HP', 'HP Envy 13', 'New HP Envy Laptop with 8GB RAM , 256 GB SSD , Intel Integrated Graphics', 51000, 'envy1532249849.jpg', 10, 1, 1, '2018-07-22 10:57:29', '2018-07-22 10:57:29', 1),
(45, 'HP', 'HP Spectre x360', '(Laptop)The entry-level model of the x360 , an Intel Core i5, 8GB of RAM, and a 256GB SSD', 120000, 'spectre1532250244.jpg', 20, 1, 1, '2018-07-22 11:04:04', '2018-07-22 11:04:04', 1),
(46, 'Apple', 'MacBook Pro', 'The model of the MacBook Pro Laptop has 8GB of RAM and a 256GB SSD', 125000, 'macpro1532250408.jpg', 15, 20, 1, '2018-07-22 11:06:48', '2018-07-22 11:06:48', 1),
(47, 'Apple', 'MacBook Air', 'The Air model of the Apple Laptop has 8GB of RAM and a 128GB SSD', 65000, 'macbook-air1532250513.jpg', 5, 20, 1, '2018-07-22 11:08:33', '2018-07-22 11:08:33', 1),
(48, 'Canon', 'Canon IXUS 185', 'Canon IXUS 190 20 MP Digital Camera with 10x Optical Zoom, Memory Card', 25000, 'canon-ixus1532250656.jpg', 15, 6, 1, '2018-07-22 11:10:56', '2018-07-22 11:10:56', 1),
(49, 'Canon', 'Canon EOS 3000D', 'Canon Eos 3000D 24.1MP Digital SLR Camera (Black) with 18-55 and 55-250mm is II Lens, 16GB card', 35000, 'canon-eos1532250763.jpg', 2, 6, 1, '2018-07-22 11:12:43', '2018-07-22 11:12:43', 1),
(50, 'Nikon', 'Nikon Coolpix A10', 'Nikon Coolpix A10 Point and Shoot Digital Camera (Black) with 16GB Memory Card', 10000, '2Nikon-A101532250876.jpg', 9, 7, 1, '2018-07-22 11:14:36', '2018-07-22 11:14:36', 1),
(51, 'Nikon', 'Nikon Coolpix A900', 'Take the compact A900 on your next adventure. This travel-friendly camera packs 20.3 effective megapixels with a backside illumination CMOS image sensor', 19900, 'coolpix-A9001532250962.jpg', 40, 7, 1, '2018-07-22 11:16:02', '2018-07-22 11:16:02', 1),
(52, 'Xiaomi', 'Xioami Redmi Note 5', 'The Redmi model mobile with the largest display. 18:9 aspect ratio: Custom new ... system-level optimizations. Redmi Note 5: QualcommÂ® SnapdragonTM 625 ', 7500, 'redmi51532251200.jpg', 20, 8, 1, '2018-07-22 11:20:00', '2018-07-22 11:20:00', 1),
(53, 'Xiaomi', 'Redmi Y2', 'Redmi Y2 mobile features a 16MP front camera and an LED Self- ie-light with 4500K temperature to simulate natural white light. Now you have perfect selfies', 12000, 'xiaomi-redmi-y21532251358.jpg', 8, 8, 1, '2018-07-22 11:22:38', '2018-07-22 11:22:38', 1),
(54, 'HTC', 'HTC Desire 828', 'HTC Desire 828 dual sim Android smartphone mobile.Features 5.5 display, MT6753 chipset, 13 MP primary camera, 4 MP front camera', 9200, 'htc-desire1532251501.jpg', 5, 9, 1, '2018-07-22 11:25:01', '2018-07-22 11:25:01', 1),
(55, 'HTC', 'HTC U Ultra', 'HTC U Ultra Android smartphone. Announced Jan 2017. Features 5.7â€³ Super LCD5 display, Snapdragon 821 chipset, 12 MP primary camera, 16 MP front ', 22490, 'htc-ultra1532251575.jpg', 10, 9, 1, '2018-07-22 11:26:15', '2018-07-22 11:26:15', 1),
(56, 'Titan', 'Titan Modern Bandhan', 'Titan Neo Bandhan White Dial Analog Watches ID 15842481SL01 for Pair with Brown Strap, Round Shap and Leather Material of 3 ATM Water', 10145, 'titan-bandhan1532251660.jpg', 3, 10, 1, '2018-07-22 11:27:40', '2018-07-22 11:27:40', 1),
(57, 'Titan', 'Tommy Hilfiger Mens Chronograph', 'Tommy Hilfiger Grey dial Analog Watch for Men. Tommy Hilfiger. Watches ... Tommy Hilfiger Silver Dial Analog Watch', 6900, 'titan-tommy1532251738.jpg', 5, 10, 1, '2018-07-22 11:28:58', '2018-07-22 11:28:58', 1),
(58, 'Casio', 'Casio G-Shock', 'G-Shock Watches by Casio - the ultimate tough watch. Water resistant watch, shock resistant watch - built with uncompromising passion.', 7195, 'caso-gshock1532251801.jpg', 8, 11, 1, '2018-07-22 11:30:01', '2018-07-22 11:30:01', 1),
(59, 'Sony', 'Sony Bravia KLV Television', 'KLV-W772E Series. Wide colour gamut tv ... KLV-W622E Series ... KLV-R422E Series ... KLV W512D Series .... Explore the exciting world of YouTube with BRAVIA', 29499, 'sony-bravia1532252046.jpg', 10, 21, 1, '2018-07-22 11:34:06', '2018-07-22 11:34:06', 1),
(60, 'Sony', 'Sony KLV Television', 'KLV-W772E Series. Wide colour gamut tv with TRILUMINOS Display; Supports High Dynamic Range (HDR) video; Instant YouTube access and Wi-Fi', 19999, 'sony-klv1532252111.jpg', 15, 21, 1, '2018-07-22 11:35:11', '2018-07-22 11:35:11', 1),
(61, 'Phillips', 'Phillips 24PFL3951', 'This Philips 24PFL3951/V7 TV has Pixel Plus HD and noise reduction feature for depth, clarity and better details. Its 240 Hz perfect motion rate ', 12400, 'philips-11532252207.jpg', 5, 22, 1, '2018-07-22 11:36:47', '2018-07-22 11:36:47', 1),
(62, 'JBL', 'JBL C100SI', 'JBL Legendary Sound; Powerful Drivers deliver thumping Bass; Lightweight and Comfortable with 3 sizes of ear tips that are included', 799, 'jbl-c1001532252355.jpg', 5, 23, 1, '2018-07-22 11:39:15', '2018-07-22 11:39:15', 1),
(63, 'JBL', 'JBL T450BT', 'JBL T450BT on-ear wireless headphones bring you JBL Pure Bass sound, up to 11 hours of audio playback, a microphone to manage calls in a design', 2799, 'jbl-t451532252501.jpg', 6, 23, 1, '2018-07-22 11:41:41', '2018-07-22 11:41:41', 1),
(64, 'Bose', 'Bose Sound Sport Free', 'Go completely wireless with the comfortable Bose SoundSport Free wireless headphones. These true wireless earbuds will stay secure', 18990, 'bose-sport1532252568.jpg', 20, 24, 1, '2018-07-22 11:42:48', '2018-07-22 11:42:48', 1),
(65, 'Bose', 'Bose Quiet Comfort 35 2', 'QuietComfort 35 wireless headphones II have the Google Assistant built right in. That means you can play music, receive texts, manage your daily tasks', 29363, 'bose-comfort1532252644.jpg', 8, 24, 1, '2018-07-22 11:44:04', '2018-07-22 11:44:04', 1),
(66, 'Pioneer', 'Pioneer AVIC F80BT', 'Buy Pioneer AVIC-F80BT (Car Stereos) with features like Android Auto, Apple CarPlayâ„¢, Hybrid Positioning system, In-built DSP, HDMI.', 2500, 'pioneer-f801532252892.jpg', 5, 25, 1, '2018-07-22 11:48:12', '2018-07-22 11:48:12', 1),
(67, 'Pioneer', 'Pioneer AVIC-F980BT', 'This exclusive car stereo has Map data for more than 7000 cities & 600,000 towns/villages across India. Powered by Apple CarPlay, this stereo extends your iPhone experience in the car. ... You can now retain the steering mounted Audio controls of your car with the Learning SWC feature', 38000, 'pioneer-f9801532252970.jpg', 7, 25, 1, '2018-07-22 11:49:30', '2018-07-22 11:49:30', 1),
(68, 'Kenwood', 'Kenwood KAC-PS404', 'KAC-PS404New. Performance Standard Serie 4/3/2ch Power Amplifier. Performance Standard series amplifiers are designed to be our best sounding amplifiers', 35000, 'kenwood-11532253068.jpg', 5, 26, 1, '2018-07-22 11:51:08', '2018-07-22 11:51:08', 1),
(69, 'Kenwood', 'Kenwood KAC-PS702EX', 'KAC-PS702EXNew. Performance Standard Serie Stereo Power Amplifier. Performance Standard series amplifiers are designed to be our best sounding speaker', 25000, 'kenwood-21532253152.jpg', 5, 26, 1, '2018-07-22 11:52:32', '2018-07-22 11:52:32', 1),
(71, 'EA Sports', 'FIFA 18', 'Get the latest news, trailers and more from FIFA 19 EA SPORTS. ... Get FIFA 18 today and download the free World Cup update on PlayStation 4, Xbox One, PC', 2499, 'ea-fifa1532253514.jpg', 20, 27, 1, '2018-07-22 11:58:34', '2018-07-22 11:58:34', 1),
(72, 'EA Sports', 'NHL 18', 'NHL 18 is an ice hockey simulation video game developed by EA Canada and published by EA Sports. It was released on Playstation 4 and Xbox One', 2399, 'ea-nhl1532253578.jpg', 10, 27, 1, '2018-07-22 11:59:38', '2018-07-22 11:59:38', 1),
(73, 'Sega', 'Sonic the Hedgehog', 'Sonic the Hedgehog is the fastest thing alive. Along with his friends Tails, Knckles and Amy, Sonic speeds around the planet to battle injustice and defeat his enemy', 1500, 'sega-sonic1532253783.jpg', 5, 28, 1, '2018-07-22 12:03:03', '2018-07-22 12:03:03', 1),
(74, 'Microsoft', 'XBOX 360', 'Jump ahead with Xbox One. Play over 1,300 games on the only consoles designed to play the best games of the past, present, and future.', 13999, 'xbox3601532253894.jpg', 8, 29, 1, '2018-07-22 12:04:54', '2018-07-22 12:04:54', 1),
(75, 'Microsoft', 'XBOX 1', 'Games play best on Xbox One. ... Play over 1,300 games, including over 200 console exclusives and over 400 Xbox classics. ... Enjoy true 4K gaming on Xbox One X, along with 4K video streaming and a 4K Blu-rayâ„¢ player on both Xbox One consoles.', 25990, 'xbox11532253956.jpg', 2, 29, 1, '2018-07-22 12:05:56', '2018-07-22 12:05:56', 1),
(76, 'Nintendo', 'Nintendo Switch', 'The Nintendo Switch is the seventh major video game console developed by Nintendo. Known in development by its codename NX', 26790, 'nitento-switch1532254042.jpg', 6, 30, 1, '2018-07-22 12:07:22', '2018-07-22 12:07:22', 1),
(77, 'Nintendo', 'Nintendo Wii', 'Console with original Nintendo brand Wii remote, sensor bar, AV cable, and power', 43947, 'wii1532254237.jpg', 12, 30, 1, '2018-07-22 12:10:37', '2018-07-22 12:10:37', 1),
(78, 'EA Sports', 'FIFA 18', 'FIFA 18 is a football simulation video game in the FIFA series of video games, developed and published by Electronic Arts', 2499, 'ea-fifa1532254299.jpg', 10, 27, 1, '2018-07-22 12:11:39', '2018-07-22 12:11:39', 1),
(79, 'Logitech', 'MX Master 2S', 'Logitech MX Master 2 wireless mouse designed for power user comfort and performance', 7693, 'mx-master1532254385.jpg', 15, 31, 1, '2018-07-22 12:13:05', '2018-07-22 12:13:05', 1),
(80, 'Logitech', 'MX Anywhere 2S', 'Logitech MX Anywhere 2 wireless mouse is designed or mobile work. Connects to up to 3 devices and works on almost any surface with darkfield laser tech.', 4794, 'mx-anywhere1532254457.jpg', 30, 31, 1, '2018-07-22 12:14:17', '2018-07-22 12:14:17', 1),
(81, 'iBall', 'iBall LilKey A6', 'With the key feature being the distinctive Chiclet Keys, iBall LilKey A6 Keyboard is all about compactness. The soft-touch keys have integrated numeric pad', 2499, 'lilkey1532254527.jpg', 19, 32, 1, '2018-07-22 12:15:27', '2018-07-22 12:15:27', 1),
(82, 'iBall', 'Winner', 'This entry level keyboard from iBall is a complete Winner! Elegant but sturdy, iBall Winner comes with soft-feel keys, which ensure a comfortable typing', 1500, 'iball-winner1532254589.jpg', 8, 32, 1, '2018-07-22 12:16:29', '2018-07-22 12:16:29', 1),
(83, 'Sega', 'Football Manager 2018', 'Emotion and control like never before. New features in Football Manager 2018 take you places only imaginable', 2000, 'sega-fm1532254724.jpg', 20, 28, 1, '2018-07-22 12:18:44', '2018-07-22 12:18:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `id` int(3) NOT NULL,
  `E-Mail` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` varchar(40) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Gender` text NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Phone` int(12) NOT NULL,
  `Type` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`id`, `E-Mail`, `Password`, `FirstName`, `LastName`, `Username`, `Gender`, `Address`, `Phone`, `Type`) VALUES
(2, 'rahuleee@gmail.com', 'rahul', 'Rahul', 'Kumar', 'rahul123', 'male', 'Patna', 2147483647, 0),
(3, 'raikunal2512@yahoo.com', 'hodor', 'Kunal', 'Rai', 'kunal2512', 'Male', 'India', 23452124, 1),
(4, 'nirmal651@gmail.com', 'nirmal', 'Nirmal', 'Rai', 'nirmal651', 'male', 'Ahmedabad', 2147483647, 0),
(5, 'anita@gmail.com', 'anita', 'Anita', 'Rai', 'anita', 'female', 'Ahmedabad', 2147483647, 0),
(6, 'vk@gmail.com', 'vikram', 'Vikram', 'Rathore', 'vikram', 'male', 'India', 2147483647, 0),
(7, 'kk@gmail.com', 'karan', 'Karan', 'Gupta', 'karan', 'male', 'India', 1234567890, 0);

-- --------------------------------------------------------

--
-- Table structure for table `root_category`
--

CREATE TABLE `root_category` (
  `root_id` int(3) NOT NULL,
  `root_name` varchar(100) NOT NULL,
  `Level` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `root_category`
--

INSERT INTO `root_category` (`root_id`, `root_name`, `Level`) VALUES
(1, 'root', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level1_category`
--
ALTER TABLE `level1_category`
  ADD PRIMARY KEY (`level1_id`),
  ADD UNIQUE KEY `Name` (`level1_name`),
  ADD KEY `P_id` (`root_id`);

--
-- Indexes for table `level2_category`
--
ALTER TABLE `level2_category`
  ADD PRIMARY KEY (`level2_id`),
  ADD KEY `First_id` (`level1_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_ibfk_1` (`P_id`);

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Username_2` (`Username`);

--
-- Indexes for table `root_category`
--
ALTER TABLE `root_category`
  ADD PRIMARY KEY (`root_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `level1_category`
--
ALTER TABLE `level1_category`
  MODIFY `level1_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `level2_category`
--
ALTER TABLE `level2_category`
  MODIFY `level2_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `registered`
--
ALTER TABLE `registered`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `root_category`
--
ALTER TABLE `root_category`
  MODIFY `root_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `level1_category`
--
ALTER TABLE `level1_category`
  ADD CONSTRAINT `level1_category_ibfk_1` FOREIGN KEY (`root_id`) REFERENCES `root_category` (`root_id`);

--
-- Constraints for table `level2_category`
--
ALTER TABLE `level2_category`
  ADD CONSTRAINT `level2_category_ibfk_1` FOREIGN KEY (`level1_id`) REFERENCES `level1_category` (`level1_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`P_id`) REFERENCES `level2_category` (`level2_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
