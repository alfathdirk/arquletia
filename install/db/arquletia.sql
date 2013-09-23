-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2013 at 08:35 PM
-- Server version: 5.5.31-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `arquletia`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('20000c05eb27fbc727eafde3aa85b8a5', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.63 Safari/537.31', 1368453256, 'a:5:{s:9:"user_data";s:0:"";s:8:"username";s:10:"alfathdirk";s:6:"usr_id";s:1:"2";s:5:"email";s:16:"alfath@yahoo.com";s:5:"login";i:1;}'),
('27f00cc4ac201fd830d1655a2965853f', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.63 Safari/537.31', 1368605843, ''),
('3640e68250c30b1f0dba6604fa033699', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.63 Safari/537.31', 1368618865, ''),
('ed7c7fcabebf4b427bdc80a34236eadd', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.63 Safari/537.31', 1368605181, 'a:5:{s:9:"user_data";s:0:"";s:8:"username";s:5:"admin";s:6:"usr_id";s:1:"1";s:5:"email";s:17:"admin@example.com";s:5:"login";i:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `edow`
--

CREATE TABLE IF NOT EXISTS `edow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_time` date NOT NULL,
  `updated_time` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE IF NOT EXISTS `keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `key`, `level`, `ignore_limits`, `date_created`) VALUES
(1, '123456', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `privilege_role`
--

CREATE TABLE IF NOT EXISTS `privilege_role` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `uri` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) unsigned NOT NULL,
  `created_time` datetime NOT NULL,
  `created_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_time` datetime NOT NULL,
  `updated_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `privilege_role`
--

INSERT INTO `privilege_role` (`id`, `role_id`, `uri`, `status`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
(1, 1, '*', 1, '2013-04-03 00:00:00', '', '2013-04-03 00:00:00', ''),
(3, 2, 'users/change_password', 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(4, 3, 'users/user_main', 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(5, 4, 'kemana/aja', 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(6, 3, 'users', 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(7, 5, '*', 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(8, 3, 'users/change_password', 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE IF NOT EXISTS `province` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(5) NOT NULL,
  `status` int(11) unsigned NOT NULL,
  `created_time` datetime NOT NULL,
  `created_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_time` datetime NOT NULL,
  `updated_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=35 ;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `code`, `name`, `country_id`, `status`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
(1, '00', 'UNKNOWN PROVINCE', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(2, '11', 'ACEH', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(3, '12', 'SUMATERA UTARA', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(4, '13', 'SUMATERA BARAT', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(5, '14', 'RIAU', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(6, '15', 'JAMBI', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(7, '16', 'SUMATERA SELATAN', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(8, '17', 'BENGKULU', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(9, '18', 'LAMPUNG', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(10, '19', 'KEPULAUAN BANGKA BELITUNG', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(11, '21', 'KEPULAUAN RIAU', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(12, '31', 'DKI JAKARTA', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(13, '32', 'JAWA BARAT', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(14, '33', 'JAWA TENGAH', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(15, '34', 'DI YOGYAKARTA', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(16, '35', 'JAWA TIMUR', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(17, '36', 'BANTEN', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(18, '51', 'BALI', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(19, '52', 'NUSA TENGGARA BARAT', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(20, '53', 'NUSA TENGGARA TIMUR', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(21, '61', 'KALIMANTAN BARAT', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(22, '62', 'KALIMANTAN TENGAH', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(23, '63', 'KALIMANTAN SELATAN', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(24, '64', 'KALIMANTAN TIMUR', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(25, '71', 'SULAWESI UTARA', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(26, '72', 'SULAWESI TENGAH', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(27, '73', 'SULAWESI SELATAN', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(28, '74', 'SULAWESI TENGGARA', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(29, '75', 'GORONTALO', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(30, '76', 'SULAWESI BARAT', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(31, '81', 'MALUKU', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(32, '82', 'MALUKU UTARA', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(33, '91', 'PAPUA BARAT', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys'),
(34, '94', 'PAPUA', 98, 1, '2013-03-29 03:32:03', '', '2013-03-29 03:32:03', 'sys');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_role` varchar(255) NOT NULL,
  `created_time` date NOT NULL,
  `updated_time` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `user_role`, `created_time`, `updated_time`) VALUES
(1, 'admin', '0000-00-00', '2013-05-04'),
(3, 'Viewer', '0000-00-00', '0000-00-00'),
(4, 'member', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `sysparam`
--

CREATE TABLE IF NOT EXISTS `sysparam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(255) NOT NULL,
  `key_value` varchar(255) NOT NULL,
  `key_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sysparam`
--

INSERT INTO `sysparam` (`id`, `group`, `key_value`, `key_name`) VALUES
(1, 'gender', '1', 'Pria'),
(2, 'gender', '2', 'Wanita');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(11) unsigned NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `ym_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_time` datetime NOT NULL,
  `created_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_time` datetime NOT NULL,
  `updated_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `first_name`, `last_name`, `gender`, `address`, `ym_id`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin@example.com', 'Admin', 'users', 1, 'Jl komp', '', '2013-04-16 00:00:00', '', '0000-00-00 00:00:00', ''),
(2, 'alfathdirk', '5f4dcc3b5aa765d61d8327deb882cf99', 'alfath@yahoo.com', 'alfath', 'alfathdirk', 1, 'jl komp poinmas', '', '2013-04-16 00:00:00', '', '0000-00-00 00:00:00', ''),
(7, 'edow', '5f4dcc3b5aa765d61d8327deb882cf99', 'edow', 'edow', 'ahiww', 1, 'jl sukabumi', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_role`
--

CREATE TABLE IF NOT EXISTS `users_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users_role`
--

INSERT INTO `users_role` (`id`, `users_id`, `role_id`) VALUES
(1, 1, 1),
(3, 2, 4),
(4, 7, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
