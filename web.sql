-- phpMyAdmin SQL Dump
-- version 4.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016-03-17 23:30:02
-- 服务器版本： 5.6.28-log
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb1`
--

CREATE TABLE `tb1` (
  `id` int(10) DEFAULT NULL,
  `value` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb1`
--

INSERT INTO `tb1` (`id`, `value`) VALUES
(10, 395),
(10, 65);

-- --------------------------------------------------------

--
-- 表的结构 `tp_borrow`
--

CREATE TABLE `tp_borrow` (
  `id` int(10) NOT NULL,
  `usename` varchar(20) DEFAULT NULL,
  `borrowtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `retuen` smallint(2) DEFAULT NULL,
  `retuentime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `address` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tp_equipment`
--

CREATE TABLE `tp_equipment` (
  `id` int(10) NOT NULL,
  `serialnumber` varchar(32) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `new` varchar(20) DEFAULT NULL,
  `owner` varchar(20) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp_equipment`
--

INSERT INTO `tp_equipment` (`id`, `serialnumber`, `name`, `status`, `new`, `owner`, `time`) VALUES
(21, '热认为', '而我', 'free', 'newbuy', ' 人啊所得税', '2016-03-11 04:10:16'),
(22, '123456', '示波器', 'free', 'newbuy', '图像所', '2016-03-11 04:12:30');

-- --------------------------------------------------------

--
-- 表的结构 `tp_user`
--

CREATE TABLE `tp_user` (
  `id` int(10) NOT NULL COMMENT '主键',
  `username` varchar(20) NOT NULL,
  `password` char(64) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp_user`
--

INSERT INTO `tp_user` (`id`, `username`, `password`, `email`, `type`) VALUES
(1, 'text', '123456', '27123@162.com', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tp_borrow`
--
ALTER TABLE `tp_borrow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_equipment`
--
ALTER TABLE `tp_equipment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `serialnumber` (`serialnumber`);

--
-- Indexes for table `tp_user`
--
ALTER TABLE `tp_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`password`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `tp_borrow`
--
ALTER TABLE `tp_borrow`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `tp_equipment`
--
ALTER TABLE `tp_equipment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- 使用表AUTO_INCREMENT `tp_user`
--
ALTER TABLE `tp_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
