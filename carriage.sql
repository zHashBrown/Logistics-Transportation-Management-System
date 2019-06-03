-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2019-06-03 05:35:00
-- 服务器版本： 10.1.37-MariaDB
-- PHP 版本： 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `carriage`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `Number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`Number`, `Password`) VALUES
('123456789', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- 表的结构 `driver`
--

CREATE TABLE `driver` (
  `Number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CarType` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Carnumber` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TransportType` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Account` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `driver`
--

INSERT INTO `driver` (`Number`, `Password`, `Name`, `CarType`, `Carnumber`, `TransportType`, `Account`) VALUES
('15111111111', '827ccb0eea8a706c4c34a16891f84e7b', '空空', '小型车', 'TJ12345', '食品', 635),
('15111111112', '827ccb0eea8a706c4c34a16891f84e7b', '肥肥', '小型车', 'TJ2351', '食品', 200),
('15111111113', '827ccb0eea8a706c4c34a16891f84e7b', '鼓鼓', '小型车', 'TJ9890', '食品', 800),
('15111111114', '827ccb0eea8a706c4c34a16891f84e7b', '恩恩', '中型车', 'TJ309', '食品', 300),
('15111111115', '827ccb0eea8a706c4c34a16891f84e7b', '往往', '大型车', 'TJ12490', '煤炭', 200),
('15111111116', '827ccb0eea8a706c4c34a16891f84e7b', '不不', '小型车', 'DU768', '金属', 200),
('15111111117', '827ccb0eea8a706c4c34a16891f84e7b', '图图', '小型车', 'YU7803', '服饰', 200),
('15111111118', '827ccb0eea8a706c4c34a16891f84e7b', '咕咕', '大型车', 'GH6786', '木材', 87),
('15111111119', '827ccb0eea8a706c4c34a16891f84e7b', '飒飒', '小型车', 'GJ8989', '煤炭', 430),
('15111111120', '827ccb0eea8a706c4c34a16891f84e7b', '家家', '大型车', 'WH8324', '石油', 42142),
('15111111121', '827ccb0eea8a706c4c34a16891f84e7b', '吱吱', '中型车', 'RY832', '金属', 4252);

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE `orders` (
  `Orderkey` int(11) NOT NULL,
  `Cargoname` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Weight` float DEFAULT NULL,
  `Category` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Begin` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `End` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Pay` float DEFAULT NULL,
  `Status` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Reqtime` date DEFAULT NULL,
  `Publisher` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Publishtime` date DEFAULT NULL,
  `Audit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `orders`
--

INSERT INTO `orders` (`Orderkey`, `Cargoname`, `Weight`, `Category`, `Begin`, `End`, `Pay`, `Status`, `Reqtime`, `Publisher`, `Number`, `Publishtime`, `Audit`) VALUES
(1, '面包', 10, '食品', '北京', '上海', 12, '选定司机', '2018-12-26', '滴滴', '18111111111', '2018-12-04', 2),
(2, '优衣库', 12, '服饰', '上海', '天津', 12, '选定司机', '2018-12-20', '嗯嗯', '18111111112', '2018-12-07', 1),
(3, '煤炭', 13, '煤炭', '黑龙江', '天津', 12, '选定司机', '2018-12-20', '安安', '18111111113', '2018-12-08', 1),
(4, '木材', 14, '木材', '苏州', '河北', 12, '选定司机', '2018-12-19', '茹茹', '18111111114', '2018-12-09', 1),
(5, '石油', 15, '石油', '上海', '云南', 12, '确认收货', '2018-12-29', '咳咳', '18111111115', '2018-12-12', 1),
(6, '蛋糕', 16, '食品', '天津', '沈阳', 12, '等待接单', '2018-12-20', '啾啾', '18111111116', '2018-12-15', 2),
(7, '红木', 123, '木材', '北京', '苏州', 23333, '等待接单', '2019-01-10', '滴滴', '18111111111', '2018-12-17', 2),
(8, '鸡蛋', 2, '食品', '杭州', '北京', 3, '确认收货', '2019-06-03', '郁郁', '18111111117', '2018-12-19', 1),
(9, '螺丝刀', 10, '金属', '北京', '天津', 12, '等待接单', '2018-12-27', '郁郁', '18111111117', '2018-12-21', 1),
(10, '毛巾', 23, '服饰', '苏州', '西藏', 120, '确认收货', '2018-12-27', '嗯嗯', '18111111112', '2018-12-23', 1),
(11, '石油', 100, '石油', '杭州', '上海', 1000, '选定司机', '2018-12-28', '安安', '18111111113', '2019-01-24', 1),
(12, '煤炭', 100, '煤炭', '广州', '上海', 100, '等待接单', '2018-12-29', '久久', '18111111120', '2018-12-26', 1),
(13, '紫檀木', 100, '木材', '杭州', '上海', 1000, '选定司机', '2018-12-31', '茹茹', '18111111114', '2018-12-27', 1),
(14, '牛奶', 1000, '食品', '贵州', '上海', 10000, '到达目的地', '2019-01-10', '咳咳', '18111111115', '2018-12-31', 1),
(15, '面包', 1000, '食品', '浙江', '上海', 100, '等待接单', '2019-01-25', '葱葱', '18111111118', '2019-01-01', 0),
(16, '煤炭', 1000, '煤炭', '贵州', '沈阳', 130, '确认收货', '2018-12-28', '啾啾', '18111111116', '2019-01-05', 1),
(17, '牛奶', 1000, '食品', '贵州', '上海', 100, '等待接单', '2019-01-15', '花花', '18111111121', '2019-01-06', 1),
(19, '螺丝帽', 100, '金属', '辽宁', '上海', 150, '等待接单', '2019-01-17', '久久', '18111111120', '2019-01-08', 1),
(20, '饼干', 120, '食品', '贵州', '天津', 700, '正在运输中', '2018-12-27', '花花', '18111111121', '2019-01-10', 1),
(25, '煤炭', 1166, '煤炭', '天津', '拉萨', 12, '确认收货', '2019-01-22', '滴滴', '18111111111', '2019-01-12', 1),
(26, '红木', 332, '木材', '北京', '上海', 21, '到达目的地', '2019-01-31', '滴滴', '18111111111', '2019-01-15', 1),
(27, '普通木材', 11, '木材', '北京', '上海', 1, '选定司机', '2019-01-30', '滴滴', '18111111111', '2019-01-17', 2),
(28, '紫檀木', 8, '木材', '北京', '上海', 200, '等待接单', '2019-01-30', '咳咳', '18111111115', '2019-01-19', 1),
(29, '沙发', 1235, '木材', '天津', '云南', 100, '确认收货', '2019-01-31', '滴滴', '18111111111', '2019-01-03', 1),
(32, '棉袄', 1000, '服饰', '内蒙古', '苏州', 100, '正在运输中', '2019-01-11', '滴滴', '18111111111', '2019-01-03', 1),
(33, '大辣条', 1, '食品', '内蒙古', '沈阳', 100, '确认收货', '2019-01-03', '滴滴', '18111111111', '2019-01-03', 1),
(34, '大棉袄', 800, '服饰', '天津', '沈阳', 100, '确认收货', '2019-01-04', '滴滴', '18111111111', '2019-01-04', 1),
(35, '123', 1234, '木材', '内蒙古', '天津', 123, '确认收货', '2019-01-17', '滴滴', '18111111111', '2019-01-04', 1),
(36, '家具', 1000, '木材', '上海', '河北', 1000, '等待接单', '2019-06-12', '滴滴', '18111111111', '2019-06-03', 2),
(37, '123', 123, '木材', '北京', '上海', 100, '确认收货', '2019-06-03', '滴滴', '18111111111', '2019-06-03', 1);

-- --------------------------------------------------------

--
-- 表的结构 `owner`
--

CREATE TABLE `owner` (
  `Number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Cargo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Address` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Account` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `owner`
--

INSERT INTO `owner` (`Number`, `Password`, `Name`, `Cargo`, `Address`, `Account`) VALUES
('18111111111', 'e10adc3949ba59abbe56e057f20f883e', '滴滴', '金属', '天津北辰', 12494.5),
('18111111112', 'e10adc3949ba59abbe56e057f20f883e', '嗯嗯', '金属', '天津红桥', 79),
('18111111113', 'e10adc3949ba59abbe56e057f20f883e', '安安', '服饰', '天津滨海', 977),
('18111111114', 'e10adc3949ba59abbe56e057f20f883e', '茹茹', '石油', '天津河西区', 43583),
('18111111115', 'e10adc3949ba59abbe56e057f20f883e', '咳咳', '食品', '河北石家庄', 9548),
('18111111116', 'e10adc3949ba59abbe56e057f20f883e', '啾啾', '金属', '上海静安', 595632),
('18111111117', 'e10adc3949ba59abbe56e057f20f883e', '郁郁', '煤炭', '北京朝阳区', 4383),
('18111111118', 'e10adc3949ba59abbe56e057f20f883e', '葱葱', '食品', '北京宋家庄', 3458),
('18111111119', 'e10adc3949ba59abbe56e057f20f883e', '呼呼', '金属', '河北邢台', 2398),
('18111111120', 'e10adc3949ba59abbe56e057f20f883e', '久久', '食品', '江苏苏州', 1),
('18111111121', 'e10adc3949ba59abbe56e057f20f883e', '花花', '木材', '陕西西安', 3532);

-- --------------------------------------------------------

--
-- 表的结构 `receiveorders`
--

CREATE TABLE `receiveorders` (
  `Receivekey` int(11) NOT NULL,
  `Orderkey` int(11) NOT NULL,
  `Number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `receiveorders`
--

INSERT INTO `receiveorders` (`Receivekey`, `Orderkey`, `Number`, `Name`, `Status`) VALUES
(42, 28, '15111111111', '空空', '已接单'),
(44, 17, '15111111111', '空空', '已接单'),
(45, 25, '15111111111', '空空', '选定司机'),
(47, 29, '15111111111', '空空', '选定司机'),
(48, 15, '15111111111', '空空', '已接单'),
(50, 32, '15111111111', '空空', '选定司机'),
(52, 33, '15111111111', '空空', '选定司机'),
(54, 34, '15111111111', '空空', '选定司机'),
(56, 35, '15111111111', '空空', '选定司机'),
(57, 37, '15111111111', '空空', '选定司机');

--
-- 转储表的索引
--

--
-- 表的索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Number`);

--
-- 表的索引 `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`Number`);

--
-- 表的索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Orderkey`);

--
-- 表的索引 `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`Number`);

--
-- 表的索引 `receiveorders`
--
ALTER TABLE `receiveorders`
  ADD PRIMARY KEY (`Receivekey`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `orders`
--
ALTER TABLE `orders`
  MODIFY `Orderkey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- 使用表AUTO_INCREMENT `receiveorders`
--
ALTER TABLE `receiveorders`
  MODIFY `Receivekey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
