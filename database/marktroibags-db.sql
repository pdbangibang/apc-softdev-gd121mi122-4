-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2015 at 03:40 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `marktroibags-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idNo` int(11) NOT NULL,
  `id` int(11) NOT NULL DEFAULT '1',
  `fname` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `company_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role` int(2) NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idNo`, `id`, `fname`, `lname`, `contact_no`, `username`, `company_name`, `company_description`, `shipping_address`, `auth_key`, `role`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Princess', 'Admin', '7296621', 'admin1', 'APC', NULL, 'makati City', 'sBJ1NJnnxEP6FcIlQPF8Ug_C_T_8b-SN', 0, '$2y$13$szoCnZ66mthjEOZG6aUx/.hdQAdPg8YJ5kWxwiwelLVixTQ2dmlw2', NULL, 'pdbangibang@student.apc.edu.ph', 10, 1439801093, 1439801093),
(2, 1, 'admin', 'admin', '12345', 'admin', 'APC', NULL, 'Humabon Magallanes', 'y3LLXm_G6JEYj82dUoAMomogA0rIu20m', 0, '$2y$13$KUkjhvylbwknrw8z7p6uLuE4TfgF8RDgwXFQPdaq7FTsn.vo0cH8W', NULL, 'demonstration@apc.edu.ph', 10, 1427533223, 1427533223),
(3, 1, 'Leslie', 'Samonte', '09268869977', 'lsamonte', 'apc', NULL, '123 lala city', 'wymuQbrm3jFvABjCrJzM0U7I8SQoZOnc', 0, '$2y$13$Jm.hhSoOZ.K8LBSD8kWOEeHuu6RESLnyu4bTKUh6bxnb3bVIsbCG2', NULL, 'lesliemsamonte@gmail.com', 10, 1436846904, 1436846904),
(4, 1, 'Hannah', 'Bangibang', '7296621', 'admin01', 'APC', NULL, 'makati City', '6aQ_hVbNjK0BBJBB49vgIZ3_C4NgD0nS', 0, '$2y$13$BgferM9NlFcS2qejGXduZuhBjgRSe4JjIxk77MjVZVXnwZHMhd1BW', NULL, 'hannahbangibang@gmail.com', 10, 1439265833, 1439265833),
(13, 1, 'Princess', 'Hannah', '7296621', 'admin02', 'BDO', NULL, 'bangkal, makati city', 'X6dKo9eLK1iVFCq6LO3t3Q9hKv6eJfmY', 0, '$2y$13$Qd2rRqFNg3N8rMnDzD04iu4f/Qv/qwdFfaSZprwf2wIsLHYyEazo2', NULL, 'hannybee13@yahoo.com', 10, 1439818629, 1439818629);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1426342267),
('m130524_201442_init', 1426342278);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `user_id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` varchar(45) NOT NULL,
  `specification` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `shippingaddress` varchar(100) NOT NULL,
  `date` varchar(45) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`user_id`, `username`, `product_id`, `qty`, `specification`, `id`, `shippingaddress`, `date`, `status`) VALUES
(7, 'demo', 6, '5,000', '', 12, '3 Humabon St Magallanes Makati City', '04-08-2015', 'initiallized');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `logo`) VALUES
(6, 'Backpack', 'A sturdy bag designed for carrying articles on a person''s back, having shoulder straps and often mounted on a lightweight frame.', 'uploads/Backpack.jpg'),
(7, 'Clutch Bag', 'A small flat bag without a handle, carried by women, especially on formal occasions. Designed to hold a few necessities like a driver''s license, a cellphone, and a credit card.', 'uploads/Clutch Bag.jpg'),
(8, 'Duffel Bag', 'A large, cylindrical bag, especially of canvas, for carrying personal belongings, originally used by military personnel.', 'uploads/Duffel Bag.jpg'),
(9, 'Laptop', 'Backpacks, messenger bags, briefcases, and top loaders are the four main kinds of laptop bags. ', 'uploads/Laptop.jpg'),
(10, 'Purse', 'A usually closable bag used for carrying keys, a wallet, and other personal items, especially by women; a handbag.', 'uploads/Purse.jpg'),
(11, 'Shoulder Bag', 'A handbag carried by a strap that is looped over the shoulder.', 'uploads/Shoulder Bag.jpg'),
(12, 'Sports/Travelling', 'A large cylindrical bag made of cloth or other fabric with a drawstring closure at the top. It is often used to carry luggage or sports equipment by people who travel in the outdoors.', ''),
(16, 'sample bag', 'sample sample', 'uploads/sample bag.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE IF NOT EXISTS `promotion` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` varchar(45) NOT NULL,
  `avail` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `id` int(45) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `order_id`, `user_id`, `username`) VALUES
(5, 12, 6, 'demo'),
(6, 12, 6, 'demo'),
(7, 12, 6, 'demo');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(2) NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `contact_no`, `username`, `company_name`, `company_description`, `shipping_address`, `auth_key`, `role`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'marktroi', 'bags', '09272016877', 'marktroibags-admin', 'marktroibags', 'manufacturing', 'Alabang, Muntinlupa', 'tboWIZFl47996Fcsfy57YXwS2QoWl8j8', 0, '$2y$13$dLTfvZim.sVdfNOBV/tkcuTTH3SmXounCU4qCvhzrmXoksef1YjHG', NULL, 'marktroibags@gmail.com', 10, 1426359931, 1426359931),
(2, 'admin', 'admin', '12345', 'admin', 'APC', NULL, 'Humabon Magallanes', 'y3LLXm_G6JEYj82dUoAMomogA0rIu20m', 0, '$2y$13$KUkjhvylbwknrw8z7p6uLuE4TfgF8RDgwXFQPdaq7FTsn.vo0cH8W', NULL, 'demonstration@apc.edu.ph', 10, 1427533223, 1427533223),
(3, 'Leslie', 'Samonte', '09268869977', 'lsamonte', 'apc', NULL, '123 lala city', 'wymuQbrm3jFvABjCrJzM0U7I8SQoZOnc', 0, '$2y$13$Jm.hhSoOZ.K8LBSD8kWOEeHuu6RESLnyu4bTKUh6bxnb3bVIsbCG2', NULL, 'lesliemsamonte@gmail.com', 10, 1436846904, 1436846904),
(4, 'Hannah', 'Bangibang', '7296621', 'admin01', 'APC', NULL, 'makati City', '6aQ_hVbNjK0BBJBB49vgIZ3_C4NgD0nS', 0, '$2y$13$BgferM9NlFcS2qejGXduZuhBjgRSe4JjIxk77MjVZVXnwZHMhd1BW', NULL, 'hannahbangibang@gmail.com', 10, 1439265833, 1439265833),
(6, 'demo', 'demo', 'demo', 'demo', 'APC', NULL, 'Humabon Magallanes', '8urHe0RqNuerCN2oPGM9jvpBCKRiVPjY', 0, '$2y$13$KoNYWb8Nx07dLsnIHPPOKePg5E2B2AQsqMUrcuOdiqcupR88g.cPW', NULL, 'demonstration2@apc.edu.ph', 10, 1427533355, 1427533355),
(7, 'Troi', 'Bolton', '12345', 'user1', 'user1 company', NULL, 'Bangkal', 'Nc_im7-2piRLyph_cr2WG5Zt0VeqofqR', 0, '$2y$13$z7hDHk.Xq4CeYk8OITzY2.igleNeU/sL0cz3b0HqYvEhB0yamz.7u', NULL, 'user1@gmail.com', 10, 1428468788, 1428468788),
(9, 'Princess', 'Hannah', '7296621', 'admin02', 'BDO', NULL, 'bangkal, makati city', 'yBJXz5U8qVB5YCT3BitTbo432CWjm7Pi', 0, '$2y$13$1m/GgbU0NjgQasWPAhToc.ck26VrtheNloAF7DLvJ94NtG.m5A4i6', NULL, 'hannybee13@yahoo.com', 10, 1439818629, 1439818629),
(10, 'test', 'test', '1234567', 'test01', 'school', NULL, 'makati city', 'P6WnsHQG1nyUuk1WSLz6kKwRVoLn7_4Q', 0, '$2y$13$RzDfn9EBPiYL.7MfIlZvC.ytXq5fyJZ8VB7Q/x7jucjCphn8irrry', NULL, 'test@gmail.com', 10, 1439818731, 1439818731);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idNo`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`), ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`), ADD KEY `order_id` (`order_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idNo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `promotion`
--
ALTER TABLE `promotion`
ADD CONSTRAINT `promotion_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`),
ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
