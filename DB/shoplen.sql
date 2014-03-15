-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2013 at 02:32 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shoplen`
--

-- --------------------------------------------------------

--
-- Table structure for table `shopcategory`
--

CREATE TABLE IF NOT EXISTS `shopcategory` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent` int(11) DEFAULT NULL,
  `title` varchar(45) NOT NULL,
  `description` text,
  `language` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `shopcategory`
--

INSERT INTO `shopcategory` (`category_id`, `parent`, `title`, `description`, `language`) VALUES
(1, 0, 'Tất len trẻ em', '', ''),
(2, 0, 'Áo len trẻ em', NULL, NULL),
(3, 1, 'Mũ len trẻ em', NULL, NULL),
(4, 1, 'Váy len trẻ em', NULL, NULL),
(5, 2, 'Gang tay trẻ em', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shopcustomer`
--

CREATE TABLE IF NOT EXISTS `shopcustomer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `HoTen` varchar(40) NOT NULL,
  `SDT` varchar(12) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `TenSP` varchar(45) NOT NULL,
  `Hinh` text NOT NULL,
  `SoLuong` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

-- --------------------------------------------------------

--
-- Table structure for table `shopproducts`
--

CREATE TABLE IF NOT EXISTS `shopproducts` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `Ten` varchar(45) NOT NULL,
  `MoTa` text,
  `GiaTien` varchar(45) DEFAULT NULL,
  `Mau` varchar(45) DEFAULT NULL,
  `ChatLieu` varchar(45) DEFAULT NULL,
  `KichCo` varchar(45) DEFAULT NULL,
  `DonVi` varchar(45) DEFAULT NULL,
  `Image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  KEY `fk_products_category` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=135 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `HoTen` varchar(40) NOT NULL,
  `NgayTao` date NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `HoTen`, `NgayTao`) VALUES
('administrator', '0978305112', 'Cuong Ly', '2013-09-02'),
('cuongly', '0978305112', 'Cuong Ly', '2013-09-02'),
('hongly', 'hongly123456', 'Lý thi thu hồng', '2013-09-02');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `shopproducts`
--
ALTER TABLE `shopproducts`
  ADD CONSTRAINT `fk_products_category` FOREIGN KEY (`category_id`) REFERENCES `shopcategory` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
