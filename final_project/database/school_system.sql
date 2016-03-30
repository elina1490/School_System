-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2014 at 06:52 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school_system`
--
CREATE DATABASE IF NOT EXISTS `school_system` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `school_system`;

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE IF NOT EXISTS `infos` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `_1a1` int(2) NOT NULL,
  `_1a2` int(2) NOT NULL,
  `_1b1` int(2) NOT NULL,
  `_1b2` int(2) NOT NULL,
  `_1b3` int(2) NOT NULL,
  `_1b4` int(2) NOT NULL,
  `_1b5` int(2) NOT NULL,
  `_1b6` int(2) NOT NULL,
  `_1c1` int(2) NOT NULL,
  `_1c2` int(2) NOT NULL,
  `_1c3` int(2) NOT NULL,
  `_1c4` int(2) NOT NULL,
  `_2a1` int(2) NOT NULL,
  `_2a2` int(2) NOT NULL,
  `_2a3` int(2) NOT NULL,
  `_2a4` int(2) NOT NULL,
  `_2a5` int(2) NOT NULL,
  `_2a6` int(2) NOT NULL,
  `_2a7` int(2) NOT NULL,
  `_2b1` int(2) NOT NULL,
  `_2b2` int(2) NOT NULL,
  `_2b3` int(2) NOT NULL,
  `_2b4` int(2) NOT NULL,
  `_3a1` int(2) NOT NULL,
  `_3a2` int(2) NOT NULL,
  `_3a3` int(2) NOT NULL,
  `_3a4` int(2) NOT NULL,
  `_3a5` int(2) NOT NULL,
  `_3b1` int(2) NOT NULL,
  `_3b2` int(2) NOT NULL,
  `_3b3` int(2) NOT NULL,
  `_3b4` int(2) NOT NULL,
  `_3b5` int(2) NOT NULL,
  `_3b6` int(2) NOT NULL,
  `_3b7` int(2) NOT NULL,
  `_3b8` int(2) NOT NULL,
  `_3b9` int(2) NOT NULL,
  `_4a1` int(2) NOT NULL,
  `_4a2` int(2) NOT NULL,
  `_4a3` int(2) NOT NULL,
  `_5a1` int(2) NOT NULL,
  `_5a2` int(2) NOT NULL,
  `_5a3` int(2) NOT NULL,
  `_5a4` int(2) NOT NULL,
  `_6a1` int(2) NOT NULL,
  `_6a2` int(2) NOT NULL,
  `_6a3` int(2) NOT NULL,
  `_6a4` int(2) NOT NULL,
  `_6a5` int(2) NOT NULL,
  `_6a6` int(2) NOT NULL,
  `_6b1` int(2) NOT NULL,
  `_6b2` int(2) NOT NULL,
  `_6b3` int(2) NOT NULL,
  `_6b4` int(2) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`login_id`, `firstname`, `lastname`, `email`, `_1a1`, `_1a2`, `_1b1`, `_1b2`, `_1b3`, `_1b4`, `_1b5`, `_1b6`, `_1c1`, `_1c2`, `_1c3`, `_1c4`, `_2a1`, `_2a2`, `_2a3`, `_2a4`, `_2a5`, `_2a6`, `_2a7`, `_2b1`, `_2b2`, `_2b3`, `_2b4`, `_3a1`, `_3a2`, `_3a3`, `_3a4`, `_3a5`, `_3b1`, `_3b2`, `_3b3`, `_3b4`, `_3b5`, `_3b6`, `_3b7`, `_3b8`, `_3b9`, `_4a1`, `_4a2`, `_4a3`, `_5a1`, `_5a2`, `_5a3`, `_5a4`, `_6a1`, `_6a2`, `_6a3`, `_6a4`, `_6a5`, `_6a6`, `_6b1`, `_6b2`, `_6b3`, `_6b4`) VALUES
(4, 'Diego', 'Ramos', 'diego@hotmail.com', 4, 3, 3, 3, 3, 3, 2, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 3, 3, 3, 1, 3, 2),
(5, 'Brarack', 'Putin', 'bp@gmail.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `speciality` varchar(40) NOT NULL,
  `module_1` int(2) NOT NULL,
  `module_2` int(2) NOT NULL,
  `module_3` int(2) NOT NULL,
  `module_4` int(2) NOT NULL,
  `module_5` int(2) NOT NULL,
  `module_6` int(2) NOT NULL,
  `_flag` int(2) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`login_id`, `firstname`, `lastname`, `email`, `speciality`, `module_1`, `module_2`, `module_3`, `module_4`, `module_5`, `module_6`, `_flag`) VALUES
(1, 'Mary ', 'Lopez', 'ml@hotmail.com', 'Mathematician', 1, 2, 4, 3, 1, 4, 1),
(2, 'Paul', 'James', 'pj@gmail.com', 'Historical', 3, 4, 4, 2, 3, 4, 1),
(3, 'Lucy', 'Vebber', 'sil@hotmail.com', 'Philologist', 2, 3, 4, 4, 4, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'teacher1', '1a1dc91c907325c69271ddf0c944bc72', 'teacher'),
(2, 'teacher2', '1a1dc91c907325c69271ddf0c944bc72', 'teacher'),
(3, 'teacher3', '1a1dc91c907325c69271ddf0c944bc72', 'teacher'),
(4, 'principal', '1a1dc91c907325c69271ddf0c944bc72', 'principal'),
(5, 'admin', '1a1dc91c907325c69271ddf0c944bc72', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
