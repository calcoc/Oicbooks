-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014 年 12 朁E05 日 08:09
-- サーバのバージョン： 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oic_books`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `tbl_books`
--

CREATE TABLE IF NOT EXISTS `tbl_books` (
  `BOOKS_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `BOOKS_ISBN` varchar(13) DEFAULT NULL,
  `BOOKS_ISSN` varchar(8) DEFAULT NULL,
  `BOOKS_NAME` varchar(64) DEFAULT NULL,
  `BOOKS_HIRA` varchar(64) DEFAULT NULL,
  `BOOKS_KANA` varchar(64) DEFAULT NULL,
  `BOOKS_CATEGORY` varchar(32) DEFAULT NULL,
  `BOOKS_GENRE` varchar(32) DEFAULT NULL,
  `BOOKS_WRITER` varchar(64) DEFAULT NULL,
  `BOOKS_COMPANY` varchar(32) DEFAULT NULL,
  `BOOKS_DAY` date NOT NULL,
  `BOOKS_TANKA` int(10) DEFAULT NULL,
  `BOOKS_PRICE` int(10) DEFAULT NULL,
  `BOOKS_SALE` int(10) DEFAULT NULL,
  `BOOKS_IMAGE` varchar(64) DEFAULT NULL,
  `BOOKS_COMMENT` varchar(1024) DEFAULT NULL,
  `BOOKS_DeletFlag` int(1) DEFAULT '0',
  PRIMARY KEY (`BOOKS_ID`),
  UNIQUE KEY `BOOKS_ID` (`BOOKS_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- テーブルのデータのダンプ `tbl_books`
--

INSERT INTO `tbl_books` (`BOOKS_ID`, `BOOKS_ISBN`, `BOOKS_ISSN`, `BOOKS_NAME`, `BOOKS_HIRA`, `BOOKS_KANA`, `BOOKS_CATEGORY`, `BOOKS_GENRE`, `BOOKS_WRITER`, `BOOKS_COMPANY`, `BOOKS_DAY`, `BOOKS_TANKA`, `BOOKS_PRICE`, `BOOKS_SALE`, `BOOKS_IMAGE`, `BOOKS_COMMENT`, `BOOKS_DeletFlag`) VALUES
(1, '9784088704531', NULL, 'ハイキュー！（１）', 'はいきゅー', 'ハイキュー', '漫画', 'スポーツ', '古舘春一', '集英社', '2012-06-04', 300, 500, 450, 'haikyu1.jpg', 'あああ', 0),
(2, NULL, '1346888X', '琉球医学会誌', 'りゅうきゅういがくかいざっし', 'リュウキュウイガクカイザッシ', '雑誌', '医学', '琉球医学会 ', '琉球医学会 ', '1998-08-10', 400, 600, 550, 'ryukyu.jpg', 'いいいい', 0),
(3, '58483', NULL, 'ああああ', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, 0),
(5, NULL, NULL, 'いいい', NULL, NULL, NULL, '', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, 0),
(6, '9784091231802', '', '銀の匙', 'ぎんのさじ', 'ギンノサジ', '漫画', 'コメディー', '荒川弘', '集英社', '2011-07-07', 300, 500, 450, 'ginnnosazi1.jpg', '', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `tbl_deliver`
--

CREATE TABLE IF NOT EXISTS `tbl_deliver` (
  `DELIVER_CD` varchar(9) NOT NULL,
  `RECEIVE_CD` varchar(9) NOT NULL,
  `DELIVER_INTEND` date NOT NULL,
  `MEMBER_ID` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`DELIVER_CD`),
  KEY `MEMBER_ID` (`MEMBER_ID`),
  KEY `RECEIVE_CD` (`RECEIVE_CD`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `tbl_member`
--

CREATE TABLE IF NOT EXISTS `tbl_member` (
  `MEMBER_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `TEMPORARY_PASS` varchar(32) DEFAULT NULL,
  `MEMBER_NAME` varchar(32) DEFAULT NULL,
  `MEMBER_KANA` varchar(32) DEFAULT NULL,
  `MEMBER_SEX` int(1) DEFAULT NULL,
  `MEMBER_ADDRESS1` varchar(64) DEFAULT NULL,
  `MEMBER_ADDRESS2` varchar(64) DEFAULT NULL,
  `MEMBER_TEL` varchar(11) DEFAULT NULL,
  `TEMPORARY_MAIL` varchar(64) DEFAULT NULL,
  `MEMBER_HISTORY` varchar(12) DEFAULT NULL,
  `MEMBER_DeleteFlag` int(1) DEFAULT '0',
  PRIMARY KEY (`MEMBER_ID`),
  UNIQUE KEY `MEMBER_ID` (`MEMBER_ID`),
  KEY `TEMPORARY_PASS` (`TEMPORARY_PASS`),
  KEY `TEMPORARY_MAIL` (`TEMPORARY_MAIL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- テーブルの構造 `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `ORDER_CD` varchar(9) NOT NULL,
  `BOOKS_ID` bigint(20) unsigned NOT NULL,
  `ORDER_DAY` date NOT NULL,
  `ORDER_COUNT` int(10) NOT NULL,
  PRIMARY KEY (`ORDER_CD`),
  KEY `BOOKS_ID` (`BOOKS_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `tbl_receive`
--

CREATE TABLE IF NOT EXISTS `tbl_receive` (
  `RECEIVE_CD` varchar(9) NOT NULL,
  `MEMBER_ID` bigint(20) unsigned NOT NULL,
  `BOOKS_ID` bigint(20) unsigned NOT NULL,
  `RECEIVE_COUNT` int(10) NOT NULL,
  `RECEIVE_DAY` date NOT NULL,
  PRIMARY KEY (`RECEIVE_CD`),
  KEY `MEMBER_ID` (`MEMBER_ID`),
  KEY `BOOKS_ID` (`BOOKS_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `tbl_sales`
--

CREATE TABLE IF NOT EXISTS `tbl_sales` (
  `SALES_CD` varchar(9) NOT NULL,
  `SEND_CD` varchar(9) NOT NULL,
  `SALES_PRICE` int(20) NOT NULL,
  `SALES_DAY` date NOT NULL,
  PRIMARY KEY (`SALES_CD`),
  KEY `SEND_CD` (`SEND_CD`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `tbl_send`
--

CREATE TABLE IF NOT EXISTS `tbl_send` (
  `SEND_CD` varchar(9) NOT NULL,
  `RECEIVE_CD` varchar(9) NOT NULL,
  `SEND_DAY` date NOT NULL,
  PRIMARY KEY (`SEND_CD`),
  KEY `RECEIVE_CD` (`RECEIVE_CD`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `tbl_stocked`
--

CREATE TABLE IF NOT EXISTS `tbl_stocked` (
  `STOCKED_ID` varchar(9) NOT NULL,
  `ORDER_ID` varchar(9) NOT NULL,
  `STOCKED_DAY` date NOT NULL,
  PRIMARY KEY (`STOCKED_ID`),
  KEY `ORDER_ID` (`ORDER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `tbl_temporary`
--

CREATE TABLE IF NOT EXISTS `tbl_temporary` (
  `TEMPORARY_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `TEMPORARY_MAIL` varchar(64) DEFAULT NULL,
  `TEMPORARY_PASS` varchar(64) DEFAULT NULL,
  `TEMPORARY_DeleteFlag` int(1) NOT NULL,
  `registrationDate` date DEFAULT NULL,
  PRIMARY KEY (`TEMPORARY_ID`),
  UNIQUE KEY `TEMPORARY_ID` (`TEMPORARY_ID`),
  UNIQUE KEY `TEMPORARY_PASS` (`TEMPORARY_PASS`),
  UNIQUE KEY `TEMPORARY_PASS_2` (`TEMPORARY_PASS`),
  UNIQUE KEY `TEMPORARY_MAIL` (`TEMPORARY_MAIL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- テーブルの構造 `tbl_warehouse`
--

CREATE TABLE IF NOT EXISTS `tbl_warehouse` (
  `BOOKS_ID` bigint(20) unsigned NOT NULL,
  `BOOKSWAREHOUSE_COUNT` int(10) NOT NULL,
  PRIMARY KEY (`BOOKS_ID`),
  KEY `BOOKS_ID` (`BOOKS_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `tbl_deliver`
--
ALTER TABLE `tbl_deliver`
  ADD CONSTRAINT `tbl_deliver_ibfk_1` FOREIGN KEY (`RECEIVE_CD`) REFERENCES `tbl_receive` (`RECEIVE_CD`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_deliver_ibfk_2` FOREIGN KEY (`MEMBER_ID`) REFERENCES `tbl_member` (`MEMBER_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- テーブルの制約 `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD CONSTRAINT `tbl_member_ibfk_1` FOREIGN KEY (`TEMPORARY_PASS`) REFERENCES `tbl_temporary` (`TEMPORARY_PASS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_member_ibfk_2` FOREIGN KEY (`TEMPORARY_MAIL`) REFERENCES `tbl_temporary` (`TEMPORARY_MAIL`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- テーブルの制約 `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`BOOKS_ID`) REFERENCES `tbl_books` (`BOOKS_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- テーブルの制約 `tbl_receive`
--
ALTER TABLE `tbl_receive`
  ADD CONSTRAINT `tbl_receive_ibfk_1` FOREIGN KEY (`MEMBER_ID`) REFERENCES `tbl_member` (`MEMBER_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_receive_ibfk_2` FOREIGN KEY (`BOOKS_ID`) REFERENCES `tbl_books` (`BOOKS_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- テーブルの制約 `tbl_sales`
--
ALTER TABLE `tbl_sales`
  ADD CONSTRAINT `tbl_sales_ibfk_1` FOREIGN KEY (`SEND_CD`) REFERENCES `tbl_send` (`SEND_CD`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- テーブルの制約 `tbl_stocked`
--
ALTER TABLE `tbl_stocked`
  ADD CONSTRAINT `tbl_stocked_ibfk_1` FOREIGN KEY (`ORDER_ID`) REFERENCES `tbl_order` (`ORDER_CD`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- テーブルの制約 `tbl_warehouse`
--
ALTER TABLE `tbl_warehouse`
  ADD CONSTRAINT `tbl_warehouse_ibfk_1` FOREIGN KEY (`BOOKS_ID`) REFERENCES `tbl_receive` (`MEMBER_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
