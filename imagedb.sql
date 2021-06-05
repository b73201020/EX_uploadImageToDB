-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生日期: 2015 年 06 月 03 日 00:25
-- 伺服器版本: 5.5.24-log
-- PHP 版本: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+08:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `imagedb`
--
CREATE DATABASE `imagedb`;
-- --------------------------------------------------------
USE `imagedb`;
--
-- 表的結構 `imagetb`
--
CREATE TABLE IF NOT EXISTS `imagetb` (
  `idno` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT '資料序號(自動遞增)',
  `filename` varchar(50) DEFAULT NULL COMMENT '檔案名稱',
  `filesize` int(11) DEFAULT NULL COMMENT '檔案大小',
  `filetype` varchar(50) DEFAULT NULL COMMENT '檔案類型',
  `filepic` mediumblob COMMENT '檔案內容',
  PRIMARY KEY (`idno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

