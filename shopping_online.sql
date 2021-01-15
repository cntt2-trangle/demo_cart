-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql:3306
-- Generation Time: Jan 15, 2021 at 09:51 AM
-- Server version: 8.0.22
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `description`) VALUES
(1, 'Zoe Z14', 405000, 'https://product.hstatic.net/1000271846/product/dsc_4061_5c039e052afe4db4a7caadfb5c265ac6_large.jpg', '- Kiểu dáng thể thao, mạnh mẽ,phù hợp với các bạn trong độ tuổi 12-30. Đế cao su bền chắc, có độ bám cao. Thích hợp khi tham gia các hoạt động thể thao, đạp xe, du lịch, đi chơi theo nhóm, ... Dễ dàng kết hợp với hầu hết các phong cách thời trang như: Giày đôi, giày nhóm....'),
(2, 'Zoe Mesh', 405000, 'https://product.hstatic.net/1000271846/product/dscf0976_59b3a1a454b04735bfea667371850661_large.jpg', '- Kiểu dáng thể thao, mạnh mẽ,phù hợp với các bạn trong độ tuổi 12-30. Đế cao su bền chắc, có độ bám cao. Thích hợp khi tham gia các hoạt động thể thao, đạp xe, du lịch, đi chơi theo nhóm, ... Dễ dàng kết hợp với hầu hết các phong cách thời trang như: Giày đôi, giày nhóm....'),
(3, 'Zoe DC', 170000, 'https://product.hstatic.net/1000271846/product/dsc_0187_0456a9c201244e6784fcc3526c43aaf0_large.jpg', '- Kiểu dáng thể thao, mạnh mẽ,phù hợp với các bạn trong độ tuổi 12-30. Đế cao su bền chắc, có độ bám cao. Thích hợp khi tham gia các hoạt động thể thao, đạp xe, du lịch, đi chơi theo nhóm, ... Dễ dàng kết hợp với hầu hết các phong cách thời trang như: Giày đôi, giày nhóm....'),
(4, 'Zoe Change', 405000, 'https://product.hstatic.net/1000271846/product/dsc_0856_8665d26265714d62aa67e5ef27744287_large.jpg', '- Kiểu dáng thể thao, mạnh mẽ,phù hợp với các bạn trong độ tuổi 12-30. Đế cao su bền chắc, có độ bám cao. Thích hợp khi tham gia các hoạt động thể thao, đạp xe, du lịch, đi chơi theo nhóm, ... Dễ dàng kết hợp với hầu hết các phong cách thời trang như: Giày đôi, giày nhóm....'),
(5, 'Zoe OS', 153000, 'https://product.hstatic.net/1000271846/product/dsc_8254_ef003236e0e745a3bb13019ad5cee14a_large.jpg', '- Kiểu dáng thể thao, mạnh mẽ,phù hợp với các bạn trong độ tuổi 12-30. Đế cao su bền chắc, có độ bám cao. Thích hợp khi tham gia các hoạt động thể thao, đạp xe, du lịch, đi chơi theo nhóm, ... Dễ dàng kết hợp với hầu hết các phong cách thời trang như: Giày đôi, giày nhóm....'),
(6, 'Zoe MF', 468000, 'https://product.hstatic.net/1000271846/product/dscf8138_5387244f1ba74bee88cf78d39c6a686f_large.jpg', '- Kiểu dáng thể thao, mạnh mẽ,phù hợp với các bạn trong độ tuổi 12-30. Đế cao su bền chắc, có độ bám cao. Thích hợp khi tham gia các hoạt động thể thao, đạp xe, du lịch, đi chơi theo nhóm, ... Dễ dàng kết hợp với hầu hết các phong cách thời trang như: Giày đôi, giày nhóm....');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
