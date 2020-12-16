-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2020-12-16 04:20:45
-- 服务器版本： 5.6.49-cll-lve
-- PHP 版本： 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `classwnm608`
--

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `category` varchar(64) NOT NULL,
  `image_main` varchar(256) NOT NULL,
  `image_other` varchar(512) NOT NULL,
  `image_thumb` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `sales_volume` varchar(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `date_create`, `date_modify`, `category`, `image_main`, `image_other`, `image_thumb`, `description`, `sales_volume`) VALUES
(1, 'Summer Street', 0.99, '2020-11-09 13:03:20', '2020-11-09 13:03:20', 'Photographed', 'summer_street.jpg', 'summer_street.jpg,summer_street_1.jpg,summer_street_2.jpg,summer_street_3.jpg', 'summer_street.jpg', 'The summer streets photographed on film.', '34'),
(2, 'Overexposure', 0.98, '2020-11-11 13:12:36', '2020-11-15 13:12:36', 'Photographed', 'overexposure.jpg', 'overexposure.jpg,overexposure_1.jpg,overexposure_2.jpg,overexposure_3.jpg,overexposure_4.jpg', 'overexposure.jpg', 'Overexposured films.', '24'),
(3, 'Wait For Winter', 0.98, '2020-11-09 13:15:10', '2020-11-09 13:15:10', 'Photographed', 'wait_winter.jpg', 'wait_winter.jpg,wait_winter_1.jpg,wait_winter_2.jpg,wait_winter_3.jpg,wait_winter_4.jpg', 'wait_winter.jpg', 'The snow-covered landscape photographed on film.', '52'),
(4, 'Memory of items', 1.28, '2020-11-09 13:16:14', '2020-11-09 13:16:14', 'Graphic', 'memory.jpg', 'memory.jpg,memory_1.jpg,memory_2.jpg,memory_3.jpg', 'memory.jpg', 'A series of graphic design with old items.', '28'),
(5, '24 Hours Off', 1.24, '2020-11-09 13:17:22', '2020-11-09 13:17:22', 'Graphic', '24_hours.jpg', '24_hours.jpg,24_hours_1.jpg,24_hours_2.jpg,24_hours_3.jpg', '24_hours.jpg', 'A series of graphic design made from 24 hours off.', '47'),
(6, 'Psychedelic', 1.20, '2020-11-09 13:37:10', '2020-11-17 13:19:10', 'Graphic', 'psychedelic.jpg', 'psychedelic.jpg,psychedelic_1.jpg,psychedelic_2.jpg', 'psychedelic.jpg', 'A series of graphic design with photographs.', '32'),
(7, 'Dreamland', 1.99, '2020-11-09 13:20:00', '2020-11-09 13:20:00', 'Handmade', 'dreamland.jpg', 'dreamland.jpg,dreamland_1.jpg,dreamland_2.jpg', 'dreamland.jpg', 'Handmade collage postcards.', '35'),
(8, 'Beginning of Galaxy', 1.99, '2020-11-09 13:21:01', '2020-11-09 13:21:01', 'Handmade', 'galaxy.jpg', 'galaxy.jpg,galaxy_1.jpg,galaxy_2.jpg', 'galaxy.jpg', 'Handmade collage postcards.', '32'),
(9, 'Black & White', 1.99, '2020-11-09 13:22:04', '2020-11-09 13:22:04', 'Handmade', 'black_white.jpg', 'black_white.jpg,black_white_1.jpg,black_white_2.jpg', 'black_white.jpg', 'Handmade collage postcards.', '18'),
(10, 'Valentine\'s Day', 1.08, '2020-11-09 13:22:56', '2020-11-09 13:22:56', 'Illustration', 'valentine_day.jpg', 'valentine_day.jpg,valentine_day_1.jpg,valentine_day_2.jpg,valentine_day_3.jpg,valentine_day_4.jpg', 'valentine_day.jpg', 'ShurAn’s illustration for Valentine’s Day.', '28'),
(11, 'Merry Christmas', 1.08, '2020-11-09 13:23:48', '2020-11-09 13:23:48', 'Illustration', 'merry_christmas.jpg', 'merry_christmas.jpg,merry_christmas_1.jpg,merry_christmas_2.jpg,merry_christmas_3.jpg,merry_christmas_4.jpg', 'merry_christmas.jpg', 'ShurAn’s illustration for Christmas.', '22'),
(12, 'Our Little World', 1.08, '2020-11-09 13:42:46', '2020-11-17 13:24:46', 'Illustration', 'little_world.jpg', 'little_world.jpg,little_world_1.jpg,little_world_2.jpg,little_world_3.jpg,little_world_4.jpg', 'little_world.jpg', 'ShurAn’s illustration by artistic oil painting stick.', '29'),
(20, 'FLowers', 1.20, '2020-12-15 21:42:47', '2020-12-15 21:42:47', 'Photograph', '', 'flowers.jpg,flowers_1.jpg,flowers_2.jpg,flowers_3.jpg', 'flowers.jpg', 'The flowers photographed on film.', '');

--
-- 转储表的索引
--

--
-- 表的索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
