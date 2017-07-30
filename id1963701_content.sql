-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 21, 2017 at 11:37 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id1963701_content`
--

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
-- Table structure for table `Cities`
--

CREATE TABLE `Cities` (
  `State` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Cities`
--

INSERT INTO `Cities` (`State`, `City`) VALUES
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
('CA', 'Palm Springs');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `acctid` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
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
('0001', '3701 S Vineyard Ave', 'Coordination', 'Palm Springs', 'CA', 'ryan@ryanmsparks.com', 'ryansparks', 'Ryan\'s Test Coordination company', '3038817685', '5', 'http://www.ryanmsparks.com'),
('0002', '5397 S Wadsworth Blvd', 'Coordination', 'Palm Springs', 'CA', 'test@subparcoordination.co\r\n', 'testcoordinationcompany', 'Subpar Coordination Company', '3039897581', '5', 'http://www.google.com');

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
('home', '<br />\r\n		Yo yo yo bitch this shit\'ll pull from an sql database soon.  Don\'t me i\'m test shit.  Lorem ipsum dolor sit amet whatever whatever whatever wahtever i\'m sure i\'ll figure out what this is supposed to say.  blah blah blah.  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. \r\n\r\n		<br /><br />Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?<br /> <br />'),
('about', 'My Perfect Party Plan.Com is a word of mouth network, helping individuals find the best party and event companies as well as their supporting businesses in their area. <br /><br />We bring Party Planners, Event Coordinators, Musicians,DJ\'S, Entertainers, Chefs, Bakers and so much more, all under one website for the purpose of connecting them with their niche market in their specific local.<br /><br />Our directory includes most major cities in all 50 states. <br /><br />My Perfect Party Plan.com is a US based, paid subscription supported website,containing crowd sourced reviews of local businesses.'),
('photos', ''),
('directory', ''),
('contact', ''),
('getlisted', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
