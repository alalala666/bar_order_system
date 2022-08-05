-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-12-30 10:20:24
-- 伺服器版本： 10.4.17-MariaDB
-- PHP 版本： 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db_c107193232`
--
CREATE DATABASE IF NOT EXISTS `db_c107193232` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_c107193232`;

-- --------------------------------------------------------

--
-- 資料表結構 `bbb`
--

CREATE TABLE `bbb` (
  `A` int(11) NOT NULL,
  `Name` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `number` varchar(20) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `bbb`
--

INSERT INTO `bbb` (`A`, `Name`, `count`, `number`, `id`) VALUES
(31, 1, 1, '5', 5),
(32, 6, 1, '5', 5),
(33, 1, 1, '1', 2),
(34, 2, 2, '1', 2),
(35, 3, 1, '1', 2),
(36, 4, 1, '1', 2),
(37, 6, 2, '2', 7),
(38, 8, 1, '2', 7),
(39, 9, 2, '3', 1),
(40, 6, 1, '3', 1),
(41, 1, 1, '5', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `account` varchar(10) NOT NULL DEFAULT '',
  `password` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(10) NOT NULL DEFAULT '',
  `sex` char(2) NOT NULL DEFAULT '',
  `year` tinyint(4) NOT NULL DEFAULT 0,
  `month` tinyint(4) NOT NULL DEFAULT 0,
  `day` tinyint(4) NOT NULL DEFAULT 0,
  `telephone` varchar(20) NOT NULL DEFAULT '',
  `cellphone` varchar(20) NOT NULL DEFAULT '',
  `address` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `url` varchar(50) NOT NULL DEFAULT '',
  `comment` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `manager`
--

INSERT INTO `manager` (`id`, `account`, `password`, `name`, `sex`, `year`, `month`, `day`, `telephone`, `cellphone`, `address`, `email`, `url`, `comment`) VALUES
(1, 'bartender', '1234', '阿凱', '男', 80, 6, 24, '(02) 2368-5978', '(0968) 568-854', '台北市大安區師大路 20 號', 'kai@ms17.url.com.tw', 'http://www.kai.com.tw', '這是 guest 帳號'),
(2, 'waiter', '123', '225', '男', 100, 4, 1, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `account` varchar(10) NOT NULL DEFAULT '',
  `password` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(10) NOT NULL DEFAULT '',
  `sex` char(2) NOT NULL DEFAULT '',
  `year` tinyint(4) NOT NULL DEFAULT 0,
  `month` tinyint(4) NOT NULL DEFAULT 0,
  `day` tinyint(4) NOT NULL DEFAULT 0,
  `telephone` varchar(20) NOT NULL DEFAULT '',
  `cellphone` varchar(20) NOT NULL DEFAULT '',
  `address` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `url` varchar(50) NOT NULL DEFAULT '',
  `comment` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `account`, `password`, `name`, `sex`, `year`, `month`, `day`, `telephone`, `cellphone`, `address`, `email`, `url`, `comment`) VALUES
(1, 'guest', 'guest', '阿凱', '男', 80, 6, 24, '(02) 2368-5978', '(0968) 568-854', '台北市大安區師大路 20 號', 'kai@ms17.url.com.tw', 'http://www.kai.com.tw', '這是 guest 帳號'),
(12, 'user7', '777', '77', '男', 7, 7, 7, '', '', '', '', 'http://', ''),
(11, 'user6', '666', '666', '男', 6, 6, 6, '', '', '', '', 'http://', ''),
(8, 'user3', '333', '333', '男', 3, 3, 3, '', '', '', '', 'http://', ''),
(9, 'user4', '444', '444', '女', 44, 4, 4, '', '', '', '', 'http://', ''),
(10, 'user5', '555', '55', '男', 5, 5, 5, '', '', '', '', 'http://', ''),
(7, 'user2', '222', '22', '男', 2, 2, 2, '', '', '', '', 'http://', ''),
(2, 'user1', '123', '2225', '男', 22, 2, 2, '', '', '', '', '', ''),
(13, 'user8', '888', '8', '男', 8, 8, 8, '', '', '', '', 'http://', ''),
(14, 'user9', '999', '9', '男', 9, 9, 9, '', '', '', '', 'http://', '');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `bbb`
--
ALTER TABLE `bbb`
  ADD PRIMARY KEY (`A`);

--
-- 資料表索引 `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bbb`
--
ALTER TABLE `bbb`
  MODIFY `A` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
