-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2017 at 03:07 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a1120136`
--
CREATE DATABASE IF NOT EXISTS `a1120136` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `a1120136`;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `level` varchar(10) NOT NULL,
  `uuid` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`fname`, `lname`, `email`, `password`, `level`, `uuid`) VALUES
('asdf', 'asdf', 'asdf', 'f0e4c2f76c58916ec258f246851bea091d14d4247a2fc3e18694461b1816e13b', 'basic', 12);

-- --------------------------------------------------------

--
-- Table structure for table `admin_accounts`
--

CREATE TABLE `admin_accounts` (
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `rank` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`username`, `password`, `rank`) VALUES
('rsparks', '4312a9d796bc0235202ddae99e9af52fdda48e91b1593c1d1015e8c295eff465', 'admin'),
('admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category`) VALUES
('Attire'),
('Audio/Visual'),
('Bakery'),
('Catering'),
('Children\'s Party'),
('Decorations'),
('DJ'),
('Entertainment'),
('Event Planning'),
('Florist'),
('Getaway'),
('Hair/Makeup'),
('MC\'s & Officiants'),
('Party Rentals'),
('Photography'),
('Photo Booth'),
('Rehersal Dinner'),
('Shopping'),
('Transportation'),
('Venues'),
('Misc');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `State` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`State`, `City`) VALUES
('CA', 'Anaheim'),
('CA', 'Bakersfield'),
('CA', 'Beach Cities'),
('CA', 'Temecula/Escondido'),
('CA', 'Fresno'),
('CA', 'Glendale/Pasadena'),
('CA', 'Los Angeles'),
('CA', 'Long Beach'),
('CA', 'Oakland'),
('CA', 'Orange'),
('CA', 'Oxnard'),
('CA', 'Palm Springs'),
('AZ', 'Gilbert'),
('AZ', 'Phoenix'),
('AZ', 'Phoenix'),
('AZ', 'Chandler');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `acctid` int(10) NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `rating` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`acctid`, `address`, `category`, `city`, `state`, `email`, `id`, `name`, `phone`, `rating`, `url`) VALUES
(1, '3701 S Vineyard Ave', 'Catering', 'Palm Springs', 'CA', 'ryan@ryanmsparks.com', 'ryansparks', 'Ryan\'s Test Coordination company', '3038817685', '5', 'http://www.ryanmsparks.com'),
(2, '5397 S Wadsworth Blvd', 'Coordination', 'Palm Springs', 'CA', 'test@subparcoordination.co\r\n', 'testcoordinationcompany', 'Subpar Coordination Company', '3039897581', '5', 'http://www.google.com'),
(3, 'fdijokjpdsfaskdcv;jasdklc', 'Coordination', 'Gilbert', 'AZ', 'ryan@ryanmsparks.com', 'ryansparks', 'Test Coordination Company', '3039897581', '6', 'google.com'),
(4, 'dfasdfasdf', 'Coordination', 'Palm Springs', 'CA', 'fasdfgasgrg', 'fasdfrge', 'gergsfasce', 'fwaqefca', 'ewfwaef', 'fawefc'),
(5, 'dfasdfasdf', 'Coordination', 'Palm Springs', 'CA', 'fasdfgasgrg', 'fasdfrge', 'gergsfasce', 'fwaqefca', 'ewfwaef', 'fawefc'),
(6, 'dfasdfasdf', 'Coordination', 'Palm Springs', 'CA', 'fasdfgasgrg', 'fasdfrge', 'gergsfasce', 'fwaqefca', 'ewfwaef', 'fawefc'),
(7, 'dfasdfasdf', 'Coordination', 'Palm Springs', 'CA', 'fasdfgasgrg', 'fasdfrge', 'gergsfasce', 'fwaqefca', 'ewfwaef', 'fawefc'),
(8, 'dfasdfasdf', 'Coordination', 'Palm Springs', 'CA', 'fasdfgasgrg', 'fasdfrge', 'gergsfasce', 'fwaqefca', 'ewfwaef', 'fawefc'),
(9, 'dfasdfasdf', 'Coordination', 'Palm Springs', 'CA', 'fasdfgasgrg', 'fasdfrge', 'gergsfasce', 'fwaqefca', 'ewfwaef', 'fawefc');

-- --------------------------------------------------------

--
-- Table structure for table `pending_businesses`
--

CREATE TABLE `pending_businesses` (
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `url` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `pcfirst` varchar(50) NOT NULL,
  `pclast` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `servicetype` varchar(50) NOT NULL,
  `paid` tinyint(1) NOT NULL,
  `datesubmitted` date NOT NULL,
  `additional` text NOT NULL,
  `uuid` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_businesses`
--

INSERT INTO `pending_businesses` (`name`, `address`, `url`, `description`, `pcfirst`, `pclast`, `phone`, `email`, `servicetype`, `paid`, `datesubmitted`, `additional`, `uuid`) VALUES
('Ryan\'s Business', '3701 S Vineyard Ave', 'http://www.ryanmsparks.com', 'A lovely coordination business in the heart of phoenix arizona.', 'Ryan', 'Sparks', '3038817685', 'ryan@ryanmsparks.com', 'basic', 0, '2017-07-22', '', 1),
('asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'basic', 0, '2017-07-22', '', 2),
('asfd', 'rga', 'gsdfg', 'sgdfs', 'fdgs', 'asfg', 'asdf', 'dffg', 'logo', 0, '2017-07-22', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `text_content`
--

CREATE TABLE `text_content` (
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='contains textual values for pages like home and about. ';

--
-- Dumping data for table `text_content`
--

INSERT INTO `text_content` (`id`, `content`) VALUES
('home', '<table style="height: 39px; margin-left: auto; margin-right: auto;" width="85%" cellpadding="15"><caption>Â </caption>\r\n<tbody>\r\n<tr>\r\n<td style="width: 181px; text-align: center;"><span style="font-size: 14pt;"><em><strong>Â What we do?</strong></em></span></td>\r\n<td style="width: 181px; text-align: center;"><span style="font-size: 14pt;"><em><strong>Tools we offer</strong></em>Â </span></td>\r\n<td style="width: 181px; text-align: center;"><span style="font-size: 14pt;">Â <strong><em>Partners</em></strong></span></td>\r\n</tr>\r\n<tr>\r\n<td style="width: 181px;"><span style="font-size: 12pt;">We seek out businesses that are a part of the party planing industry, and incorporate them into our database of companies, enhancing the word-of-mouth quality of reviews, service, and decision making. Â </span></td>\r\n<td style="width: 181px;"><span style="font-size: 12pt;">In the top right of your screen, you should see the "Plan it!" button. Â There, you can find recommendations, contact businesses, review them, and store them for later! Â The planning behind parties just got a whole lot easier. Â </span></td>\r\n<td style="width: 181px;"><span style="font-size: 12pt;">As a nonprofit corporation, we partner with many businesses in the industry to keep us funded and afloat, and keep the best coordination service helping you. Â Companies partnered with MyPerfectPartyPlan.com will never receive preferential treatment in our database. Â </span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h2 class="font_2" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; font-weight: normal; font-stretch: normal; font-size: 22px; line-height: normal; font-family: Arial, \'ï½ï½“ ï½ã‚´ã‚·ãƒƒã‚¯\', \'ms pgothic\', ë‹ì›€, dotum, helvetica, sans-serif; text-align: center;">My Perfect Party Plan.Com<span style="background-color: transparent;">Â is a word of mouth network, helping individuals find the best party and event companies as well as their supporting businesses inÂ </span>their area. Â We bring Party Planners, Event Coordinators, Musicians,DJ\'S, Entertainers, Chefs, Bakers and so much more, all under one website for the purpose ofÂ connecting them with their niche market in their specific local. Â Our directory includes most major cities in all 50 states. Â <span style="background: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: #c41bc4;">My Perfect Party Plan.com</span><span style="background-color: transparent;">Â is a US based, paid subscriptionÂ supported website,containing crowd sourced reviews of local businesses.</span></h2>\r\n<p><span style="background-color: transparent;">Many more text files here etc etc</span></p>\r\n<p>let\'s add some more stuff</p>\r\n<p>lorem ipsom dolor soajsdfoi</p>\r\n<p>dsfoaijsdfp</p>\r\n<p>fajsidojfosadifj;asdifkjÂ </p>\r\n<p>dsfakjsdf</p>\r\n<table style="height: 73px;" width="804">\r\n<tbody>\r\n<tr>\r\n<td style="width: 194px;">Â </td>\r\n<td style="width: 194px;">dsfasd</td>\r\n<td style="width: 194px;">dfasd</td>\r\n<td style="width: 194px;">Â </td>\r\n</tr>\r\n<tr>\r\n<td style="width: 194px;">fas</td>\r\n<td style="width: 194px;">Â </td>\r\n<td style="width: 194px;">Â </td>\r\n<td style="width: 194px;">Â </td>\r\n</tr>\r\n<tr>\r\n<td style="width: 194px;">Â </td>\r\n<td style="width: 194px;">dfadf</td>\r\n<td style="width: 194px;">Â </td>\r\n<td style="width: 194px;">dff</td>\r\n</tr>\r\n</tbody>\r\n</table>'),
('about', '<h2 class="font_2" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; font-weight: normal; font-stretch: normal; font-size: 22px; line-height: normal; font-family: Arial, \'ï½ï½“ ï½ã‚´ã‚·ãƒƒã‚¯\', \'ms pgothic\', ë‹ì›€, dotum, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; color: #c41bc4;">My Perfect Party Plan.Com</span>Â is a word of mouth network, helping individuals find the best party and event companies as well as their supporting businesses in their area.</h2>\r\n<h2 class="font_2" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; font-weight: normal; font-stretch: normal; font-size: 22px; line-height: normal; font-family: Arial, \'ï½ï½“ ï½ã‚´ã‚·ãƒƒã‚¯\', \'ms pgothic\', ë‹ì›€, dotum, helvetica, sans-serif;">Â </h2>\r\n<h2 class="font_2" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; font-weight: normal; font-stretch: normal; font-size: 22px; line-height: normal; font-family: Arial, \'ï½ï½“ ï½ã‚´ã‚·ãƒƒã‚¯\', \'ms pgothic\', ë‹ì›€, dotum, helvetica, sans-serif;">We bring Party Planners, Event Coordinators, Musicians,DJ\'S, Entertainers, Chefs, Bakers and so much more, all under one website for the purpose ofÂ connecting them with their niche market in their specific local.</h2>\r\n<h2 class="font_2" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; font-weight: normal; font-stretch: normal; font-size: 22px; line-height: normal; font-family: Arial, \'ï½ï½“ ï½ã‚´ã‚·ãƒƒã‚¯\', \'ms pgothic\', ë‹ì›€, dotum, helvetica, sans-serif;">Â </h2>\r\n<h2 class="font_2" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; font-weight: normal; font-stretch: normal; font-size: 22px; line-height: normal; font-family: Arial, \'ï½ï½“ ï½ã‚´ã‚·ãƒƒã‚¯\', \'ms pgothic\', ë‹ì›€, dotum, helvetica, sans-serif;">Our directory includes most major cities in all 50 states.</h2>\r\n<h2 class="font_2" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; font-weight: normal; font-stretch: normal; font-size: 22px; line-height: normal; font-family: Arial, \'ï½ï½“ ï½ã‚´ã‚·ãƒƒã‚¯\', \'ms pgothic\', ë‹ì›€, dotum, helvetica, sans-serif;">Â </h2>\r\n<h2 class="font_2" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; font-weight: normal; font-stretch: normal; font-size: 22px; line-height: normal; font-family: Arial, \'ï½ï½“ ï½ã‚´ã‚·ãƒƒã‚¯\', \'ms pgothic\', ë‹ì›€, dotum, helvetica, sans-serif;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; color: #c41bc4;">My Perfect Party Plan.com</span>Â is a US based, paid subscriptionÂ supported website,containing crowd sourced reviews of local businesses.</h2>'),
('photos', ''),
('directory', ''),
('contact', ''),
('getlisted', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`acctid`);

--
-- Indexes for table `pending_businesses`
--
ALTER TABLE `pending_businesses`
  ADD PRIMARY KEY (`uuid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `uuid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `acctid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pending_businesses`
--
ALTER TABLE `pending_businesses`
  MODIFY `uuid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
