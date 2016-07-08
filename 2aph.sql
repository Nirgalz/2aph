-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 08, 2016 at 03:59 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `2aph`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `created`, `modified`, `user_id`) VALUES
(1, 'Ceci est un article', 'possédant un contenu', '2016-07-07 12:46:40', '2016-07-07 12:46:40', 3),
(2, 'ceci est un deuxième article', 'avec un autre contenu', '2016-07-07 12:46:55', '2016-07-07 12:46:55', 2);

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE IF NOT EXISTS `forums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`id`, `name`, `created`, `modified`) VALUES
(1, 'General Discussion', '2013-12-06', '2013-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `phinxlog`
--

CREATE TABLE IF NOT EXISTS `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`) VALUES
(20160706140808, 'CreateUsers', '2016-07-06 12:09:02', '2016-07-06 12:09:02');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_id` int(11) NOT NULL,
  `forum_id` int(11) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `content` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `topic_id`, `forum_id`, `created`, `modified`, `content`, `user_id`) VALUES
(1, 1, 1, '2013-12-10', '2013-12-10', 'Test1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE IF NOT EXISTS `regions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `website` varchar(255) NOT NULL,
  `direction` varchar(255) NOT NULL,
  `responsible_name` varchar(255) NOT NULL,
  `responsible_phone` varchar(255) NOT NULL,
  `responsible_email` varchar(255) NOT NULL,
  `management_body` text NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `name`, `type`, `street`, `city`, `zip_code`, `website`, `direction`, `responsible_name`, `responsible_phone`, `responsible_email`, `management_body`, `description`) VALUES
(1, 'lorraine', 'aide standard', 'rue du camembert', 'epinal', 88000, 'http://book.cakephp.org/', 'le directeur', 'andré dupoirier', '49593458', 'a.poire@poirier.fr', 'cet organisme', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `forum_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `content`, `created`, `modified`, `forum_id`, `user_id`) VALUES
(1, 'Test', 'Test Topic', '2013-12-06', '2013-12-06', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE_USERNAME` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `admin`, `created`, `modified`) VALUES
(2, 'admin', NULL, '$2y$10$L4NiBYoDAvImFbirKKBJiekCYvgYAOYqcw5de9UEYNN3Gb2pLqNXW', 1, '2016-07-07 08:28:40', '2016-07-07 08:28:40'),
(3, 'test', NULL, '$2y$10$iQ46d6/tdWog7Kv7W6QN9OiRqgcvpSXjBRVRzRgNJB0RO3p1jEU5W', 0, '2016-07-07 08:41:22', '2016-07-07 08:41:22'),
(4, 'caker', 'caker@gmail.com', '080a38b5f8259776ec5ca984488af588d063932a', 0, '2013-12-06 00:00:00', '2013-12-06 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
