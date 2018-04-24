-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018-04-13 16:03:07
-- 服务器版本： 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xiaochengxu`
--
CREATE DATABASE IF NOT EXISTS `xiaochengxu` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `xiaochengxu`;

-- --------------------------------------------------------

--
-- 表的结构 `address`
--

CREATE TABLE `address` (
  `addressid` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `addressoid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- 表的结构 `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `useropenid` varchar(100) NOT NULL,
  `commodityid` int(11) NOT NULL,
  `idnumber` varchar(11) NOT NULL,
  `time` datetime NOT NULL,
  `delivery` int(1) NOT NULL DEFAULT '0',
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `cart`
--

INSERT INTO `cart` (`cartid`, `useropenid`, `commodityid`, `idnumber`, `time`, `delivery`, `address`) VALUES
(20, 'oJsT54ia6SAXPyi5eL4fz31xVcx8', 9, '1523533582', '2018-04-12 19:46:22', 0, '1');

-- --------------------------------------------------------

--
-- 表的结构 `commodity`
--

CREATE TABLE `commodity` (
  `id` int(11) NOT NULL,
  `commodityname` varchar(600) NOT NULL,
  `type1` varchar(50) NOT NULL,
  `type2` varchar(50) NOT NULL,
  `img` varchar(150) NOT NULL,
  `describe` text NOT NULL,
  `price` int(5) NOT NULL,
  `addtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `commodity`
--

INSERT INTO `commodity` (`id`, `commodityname`, `type1`, `type2`, `img`, `describe`, `price`, `addtime`) VALUES
(1, '新鲜叶子护肤品套装', '美妆', '套装', 'hz1.jpg', '<p>\r\n	<span style="font-family:sans-serif;font-size:13.12px;background-color:#FFFFFF;">新鲜叶子护肤品套装正品补水保湿水乳液霜女学生草本纯植物化妆品</span>\r\n</p>\r\n<p>\r\n	<span style="font-family:sans-serif;font-size:13.12px;background-color:#FFFFFF;"><img src="/lzuet/etadmin/editor/attached/image/20180403/20180403111621_80213.jpg" alt="" /><br />\r\n</span>\r\n</p>\r\n<p>\r\n	<span style="font-family:sans-serif;font-size:13.12px;background-color:#FFFFFF;"><img src="/lzuet/etadmin/editor/attached/image/20180403/20180403111643_52816.jpg" alt="" /><br />\r\n</span>\r\n</p>', 239, '0000-00-00 00:00:00'),
(2, '珀莱雅套装', '美妆', '套装', 'hz2.jpg', '珀莱雅套装', 128, '0000-00-00 00:00:00'),
(9, '新鲜叶子护肤品套装', '服装', '女装', 'hz1.jpg', '新鲜叶子护肤品套装正品补水保湿水乳液霜女学生草本纯植物化妆品', 239, '0000-00-00 00:00:00'),
(10, '珀莱雅套装', '服装', '男鞋', 'hz2.jpg', '珀莱雅套装', 128, '0000-00-00 00:00:00'),
(14, 'hahaha啊', '电子', '额', '1523626776.jpg', '<p>\r\n	<img src="/xiaochengxu/admin/editor/attached/image/20180413/20180413153910_77895.png" alt="" />\r\n</p>\r\n<p>\r\n	<em>哈哈哈</em>\r\n</p>', 34, '2018-04-13 21:39:36'),
(15, '11啊啊', '食品', '地方法', '1523628133.png', '11', 12, '2018-04-13 22:02:13');

-- --------------------------------------------------------

--
-- 表的结构 `type1`
--

CREATE TABLE `type1` (
  `type1_id` int(11) NOT NULL,
  `type1_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `type1`
--

INSERT INTO `type1` (`type1_id`, `type1_name`) VALUES
(1, '服装'),
(2, '食品'),
(3, '电子'),
(4, '百货'),
(5, '美妆');

-- --------------------------------------------------------

--
-- 表的结构 `type2`
--

CREATE TABLE `type2` (
  `type2_id` int(11) NOT NULL,
  `type2_name` varchar(50) NOT NULL,
  `type2_fatherid` int(11) NOT NULL,
  `type2_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `useropenid` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `sex` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`userid`, `useropenid`, `username`, `city`, `province`, `country`, `sex`) VALUES
(1, '1', '666666', '666666', '', '', 0),
(2, '', '1', '123456789', '', '', 0),
(3, '', '6', '666', '', '', 0),
(4, '', '00001', '123456789', '', '', 0),
(5, '', '00002', '1', '', '', 0),
(12, 'oJsT54ia6SAXPyi5eL4fz31xVcx8', '幻夜', 'Cangzhou', 'Hebei', 'China', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`addressid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `commodity`
--
ALTER TABLE `commodity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type1`
--
ALTER TABLE `type1`
  ADD PRIMARY KEY (`type1_id`);

--
-- Indexes for table `type2`
--
ALTER TABLE `type2`
  ADD PRIMARY KEY (`type2_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `address`
--
ALTER TABLE `address`
  MODIFY `addressid` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- 使用表AUTO_INCREMENT `commodity`
--
ALTER TABLE `commodity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- 使用表AUTO_INCREMENT `type1`
--
ALTER TABLE `type1`
  MODIFY `type1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `type2`
--
ALTER TABLE `type2`
  MODIFY `type2_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
