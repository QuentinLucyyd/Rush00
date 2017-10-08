-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 08, 2017 at 08:13 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rush00`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `artist` varchar(20) NOT NULL,
  `release-date` varchar(30) NOT NULL DEFAULT 'N/A',
  `album-cover` text NOT NULL,
  `tracks` int(11) NOT NULL,
  `label` text NOT NULL,
  `genre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`ID`, `name`, `artist`, `release-date`, `album-cover`, `tracks`, `label`, `genre`) VALUES
(1, '4 Your Eyez Only', 'J Cole', '9 December 2016', 'https://upload.wikimedia.org/wikipedia/en/b/bb/J._Cole_%E2%80%94_4_Your_Eyez_Only_album_cover.jpg', 10, 'Dreamville Records', 'Hip-Hop'),
(2, 'DAMN', 'Kendrick Lamar', '14 April 2017', 'https://images.genius.com/413ce2e1200981ad7114c3b04836378a.1000x1000x1.jpg', 13, 'Top Dawg Entertainment', 'Hip-Hop'),
(3, 'Silence in the Snow', 'Trivium', '2 October 2015', 'https://i0.wp.com/ampsandgreenscreens.com/wp-content/uploads/2015/10/Trivium-Silence-in-the-Snow-Cover.jpg', 8, 'Michael Baskette', 'Heavy Metal'),
(4, 'Drunk', 'Thundercat', '24 February 2017', 'http://brainfeeder.net/thundercat/images/car1.jpg', 23, 'Brainfeeder', 'Soul'),
(7, 'Blank Face', 'ScHoolboy Q', '8 July 2016', 'https://upload.wikimedia.org/wikipedia/en/3/33/Blankfacelpcover.jpg', 13, 'Top Dawg Entertainment', 'Hip-Hop'),
(8, 'Awaken, My Love!', 'Donald Glover', '2 December 2016', 'https://upload.wikimedia.org/wikipedia/en/8/87/Awaken%2C_My_Love%21.jpg', 8, 'N/A', 'R&B'),
(9, 'Untitled Unmastered', 'Kendrick Lamar', '4 March 2016', 'https://images.genius.com/5f1c41f4867a6c648af16f3e3865d0d7.1000x1000x1.jpg', 8, 'Interscope Records', 'Hip-Hop'),
(10, 'Anti', 'Rihanna', ' 28 January 2016', 'https://upload.wikimedia.org/wikipedia/en/3/32/Rihanna_-_Anti.png', 13, 'Westbury Road Entertainment', 'R&B'),
(11, 'The Healing Component', 'Mick Jenkins', '23 September 2016', 'http://images.genius.com/88b47731a4a7dbb6863e5f69187873c6.1000x1000x1.jpg', 13, 'Cinematic', 'Hip-Hop'),
(12, 'To Pimp a Butterfly', 'Kendrick Lamar', '23 September 2015', 'https://upload.wikimedia.org/wikipedia/en/f/f6/Kendrick_Lamar_-_To_Pimp_a_Butterfly.png', 13, 'Top Dawg Entertainment', 'Hip-Hop');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(120) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `t_date` datetime NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `country` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `t_date`, `name`, `surname`, `country`, `email`) VALUES
(1, 'QuentinLucyyd', '63a9f0ea7bb98050796b649e85481845', '2017-10-08 18:08:02', 'Quentin', 'Manamela', 'South Africa', 'qkotsedi@gmail.com'),
(2, 'Lucyyd', '7b24afc8bc80e548d66c4e7ff72171c5', '2017-10-08 18:12:42', 'Quentin', 'Kill', 'South Africa', 'quintonacid@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
