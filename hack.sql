-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2015 �?02 ??06 ??18:07
-- 伺服器版本: 5.6.16
-- PHP 版本： 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `hack`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `usr` text COLLATE utf8_bin NOT NULL,
  `pwd` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 資料表的匯出資料 `admin`
--

INSERT INTO `admin` (`usr`, `pwd`) VALUES
('iamadmin', '21232f297a57a5a743894a0e4a801fc3'),
('anotheradmin', '77190a453de27d36cf357467f2e54d18');

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 資料表的匯出資料 `news`
--

INSERT INTO `news` (`id`, `title`, `content`) VALUES
(0, '這是測試OuO', 'test'),
(1, '世界第一美男子選出，據說是現在在清大講資安的高中生	', '黃X仁好帥\r\nX志仁好萌\r\n黃志X好正\r\n<3<3<3<3<3<3<3<3\r\nYA'),
(2, '警告：有癡漢出沒於清大請多加提防', '癡漢是誰RRRRR\r\n好恐怖OAO\r\n快點把他抓出來\r\n第一個抓到的小隊可以加分(?'),
(3, '廢文', '這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文這是廢文'),
(4, '你知道我做這個充滿漏洞的網站做得超累得嗎QAQ', '好累喔\r\n我要睡覺了\r\n晚安Bye\r\n2015/2/25 1:12'),
(5, '感覺4不吉利要多一篇', '這是第五篇<br>這是第五篇<br>這是第五篇<br>這是第五篇<br>這是第五篇<br>這是第五篇<br>這是第五篇<br>這是第五篇<br>這是第五篇<br>這是第五篇<br>這是第五篇<br>這是第五篇<br>有沒有很開心啊OwO/'),
(6, '殭屍出沒請注意', '清大有殭屍出沒欸<br>\r\n啊....這樣啊<br>.<br>.<br>.<br>.<br>.<br>.<br>\r\n好恐怖QAQQQQQQQQQQQQ<br>\r\n殭屍不要來ㄘ我啦QAQ<br>\r\n我不好ㄘQAQ<br>\r\n啊...算了<br>\r\n其實殭屍還蠻可愛der<3<3<3'),
(7, 'QAQ', 'OAO');

-- --------------------------------------------------------

--
-- 資料表結構 `sqli`
--

CREATE TABLE IF NOT EXISTS `sqli` (
  `username` text COLLATE utf8_bin NOT NULL,
  `password` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 資料表的匯出資料 `sqli`
--

INSERT INTO `sqli` (`username`, `password`) VALUES
('admin123', 'df03b8ec51a1f6a390a3fec8705ff3b4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
