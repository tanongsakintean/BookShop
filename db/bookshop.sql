-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2021 at 09:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(100) NOT NULL,
  `category` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`cate_id`, `cate_name`, `category`) VALUES
(1, 'สารคดี', 1),
(2, 'บันเทิงคดี ', 2),
(5, 'สิ่งพิมพ์', 3),
(6, 'ตำรา', 4),
(7, 'วารสาร', 5),
(8, ' นิตยสาร', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `mem_id` int(11) NOT NULL,
  `mem_email` varchar(200) NOT NULL,
  `mem_password` varchar(200) NOT NULL,
  `mem_name` varchar(100) NOT NULL,
  `mem_address` text NOT NULL,
  `mem_phone` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `lastlogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`mem_id`, `mem_email`, `mem_password`, `mem_name`, `mem_address`, `mem_phone`, `status`, `lastlogin`) VALUES
(1, 'user@hotmail.com', '1111', 'name lname', 'df SODFKNSJDFDF', '00000000', 2, '2021-03-15 03:30:06'),
(2, 'admin@gmail.com', '11', 'admin admin', 'ที่60/1เดกาอใเมืองจ.สุพรรณบุรี', '00000000', 1, '2021-03-15 03:32:58');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `order_id` int(11) NOT NULL,
  `mem_id` int(100) UNSIGNED NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `order_date` date NOT NULL,
  `order_tranfer` datetime NOT NULL,
  `order_total` double NOT NULL,
  `pay_status` varchar(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `bank_amont` double NOT NULL,
  `bank_date` date NOT NULL,
  `bank_time` time NOT NULL,
  `bank_in` varchar(100) NOT NULL,
  `bank_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_order_item`
--

CREATE TABLE `tb_order_item` (
  `id` int(20) NOT NULL,
  `pro_id` int(50) UNSIGNED NOT NULL,
  `qty` int(50) UNSIGNED NOT NULL,
  `pro_price` double NOT NULL,
  `order_id` int(50) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `pro_detail` text NOT NULL,
  `pro_price` int(100) NOT NULL,
  `pro_amont` int(200) NOT NULL,
  `category` int(10) NOT NULL,
  `pro_img1` text NOT NULL,
  `pro_img2` text NOT NULL,
  `pro_img3` text NOT NULL,
  `pro_img4` text NOT NULL,
  `pro_img5` text NOT NULL,
  `pro_hit` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`pro_id`, `pro_name`, `pro_detail`, `pro_price`, `pro_amont`, `category`, `pro_img1`, `pro_img2`, `pro_img3`, `pro_img4`, `pro_img5`, `pro_hit`) VALUES
(1, ' test', 'ao vOSNDV', 50, 50, 1, 'fk4opig gpeg rgep te4go.jpg', 'gpiekkdf kgweo grpowe [pkgr.jpg', '0polgm b,nm ro,,rpkrepmm rpmpore pomt oph km pmg kmgt pkmg pkmg kpmg pkmgh l g o,g lg.jpg', 'Antec-Computer-Case-TORQUE-Black-and-White-1-16052868601423565454565446545465444.jpg', 'fk4opig gpeg rgep te4go.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tb_order_item`
--
ALTER TABLE `tb_order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_order_item`
--
ALTER TABLE `tb_order_item`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
