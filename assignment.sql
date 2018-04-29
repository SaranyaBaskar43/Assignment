-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2018 at 04:29 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` varchar(250) NOT NULL,
  `course_type` varchar(250) NOT NULL,
  `course_name` varchar(250) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_id`, `course_type`, `course_name`, `created_on`) VALUES
(2, '69Bku0KoEeWZtA4u62x6lQ', 'v2.ondemand', 'Gamification', '2018-04-29 02:11:07'),
(3, '5zjIsJq-EeW_wArffOXkOw', 'v2.ondemand', 'Vital Signs: Understanding What the Body Is Telling Us', '2018-04-29 02:13:07'),
(4, 'v9CQdBkhEeWjrA6seF25aw', 'v2.ondemand', 'Modern Art & Ideas', '2018-04-29 02:14:47'),
(5, 'QgmoVdT2EeSlhSIACx2EBw', 'v2.ondemand', 'The Evolving Universe', '2018-04-29 02:20:46'),
(6, 'KlAJ6oysEeW79RIwiAyGoQ', 'v2.ondemand', 'Successful Presentation', '2018-04-29 02:21:36'),
(7, 'YGjPHOZYEeWGngqV7V698w', 'v2.ondemand', 'å²è¨˜ï¼ˆä¸€ï¼‰ï¼ˆShi-ji (1) ï¼‰', '2018-04-29 02:22:21'),
(8, 'YGjPHOZYEeWGngqV7V698w', 'v2.ondemand', 'å²è¨˜ï¼ˆä¸€ï¼‰ï¼ˆShi-ji (1) ï¼‰', '2018-04-29 02:22:49'),
(9, 'opX5uCGvEearhhL0e-FIDw', 'v2.ondemand', 'ÐÑÑ‚Ñ€Ð¾Ñ„Ð¸Ð·Ð¸ÐºÐ°: Ð¾Ñ‚ Ð·Ð²ÐµÐ·Ð´ Ð´Ð¾ Ð³Ñ€Ð°Ð½Ð¸Ñ† Ð’ÑÐµÐ»ÐµÐ½Ð½Ð¾Ð¹', '2018-04-29 02:24:21'),
(10, 'rc5KG0aUEeWG1w6arGoEIQ', 'v2.ondemand', 'Accounting Analytics', '2018-04-29 02:25:06'),
(11, 'ct7G8DVLEeWfzhKP8GtZlQ', 'v2.ondemand', 'Build a Modern Computer from First Principles: From Nand to Tetris (Project-Centered Course)', '2018-04-29 03:36:01'),
(12, 'sUpST4RAEeawAApvKZgcCQ', 'v2.ondemand', 'Fundamentals of Scalable Data Science', '2018-04-29 03:46:48'),
(13, 'KlAJ6oysEeW79RIwiAyGoQ', 'v2.ondemand', 'Successful Presentation', '2018-04-29 03:50:37');
