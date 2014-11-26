-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2014 at 01:52 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `adm`
--

-- --------------------------------------------------------

--
-- Table structure for table `sms_draft`
--

CREATE TABLE IF NOT EXISTS `sms_draft` (
  `ID_inbox` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime NOT NULL,
  `pengirim` varchar(20) NOT NULL,
  `penerima` varchar(20) NOT NULL,
  `text_sms` tinytext NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`ID_inbox`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sms_inbox`
--

CREATE TABLE IF NOT EXISTS `sms_inbox` (
  `ID_inbox` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime NOT NULL,
  `pengirim` varchar(20) NOT NULL,
  `penerima` varchar(20) NOT NULL,
  `text_sms` tinytext NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`ID_inbox`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sms_outbox`
--

CREATE TABLE IF NOT EXISTS `sms_outbox` (
  `ID_inbox` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime NOT NULL,
  `pengirim` varchar(20) NOT NULL,
  `penerima` varchar(20) NOT NULL,
  `text_sms` tinytext NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`ID_inbox`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sms_spam`
--

CREATE TABLE IF NOT EXISTS `sms_spam` (
  `ID_inbox` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime NOT NULL,
  `pengirim` varchar(20) NOT NULL,
  `penerima` varchar(20) NOT NULL,
  `text_sms` tinytext NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`ID_inbox`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
