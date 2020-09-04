-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2019-09-11 18:35:23
-- 服务器版本： 5.7.26
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itcast`
--

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `edu` varchar(20) NOT NULL,
  `salary` decimal(19,2) DEFAULT NULL,
  `province` varchar(20) NOT NULL,
  `height` int(11) NOT NULL,
  `hobby` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`id`, `name`, `sex`, `age`, `edu`, `salary`, `province`, `height`, `hobby`) VALUES
(12, '周小姐', '女', 27, '研究生', '6000.00', '河南省', 180, NULL),
(14, '宋飞扬', '女', 16, '高中', '800.00', '河南省', 180, NULL),
(23, '力王', '男', 37, '高中', '1234.00', '河南', 178, NULL),
(24, '王水娃', '未知', 22, '本科', '2300.00', '新疆省', 155, NULL),
(26, '周亚', '女', 29, '大专', '6000.00', '河南省', 170, '爬山,游泳'),
(27, '周大梦', '男', 15, '大专', '1234.00', '贵州省', 150, '读书,看报'),
(28, '赵飞翔', '男', 18, '研究生', '7000.00', '云南省', 174, '打游戏,游泳');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
