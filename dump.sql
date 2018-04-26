-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2018 at 08:32 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `superdate`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `profile_to` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `profile_to`, `comment`) VALUES
(23, 5, 'Looking good!'),
(24, 6, 'Wanna meetup? XoXo');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(10) NOT NULL,
  `name` char(40) NOT NULL,
  `gender` char(20) NOT NULL,
  `superpower` char(120) NOT NULL,
  `Interested_in` char(20) NOT NULL,
  `profile_pic` varchar(350) NOT NULL,
  `age` int(3) NOT NULL,
  `weight` varchar(3) NOT NULL,
  `height` varchar(3) NOT NULL,
  `like` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `name`, `gender`, `superpower`, `Interested_in`, `profile_pic`, `age`, `weight`, `height`, `like`) VALUES
(1, 'Superman', 'Male', 'Strong and can fly', 'Female', 'https://i.ytimg.com/vi/fa549RILAWo/maxresdefault.jpg', 58, '99', '198', 13),
(2, 'Batman', 'M', 'Strong', 'Females', 'https://upload.wikimedia.org/wikipedia/en/thumb/1/17/Batman-BenAffleck.jpg/200px-Batman-BenAffleck.jpg', 57, '98', '198', 6),
(3, 'Captain America', 'Male', 'American', 'Females', 'http://cdn1us.denofgeek.com/sites/denofgeekus/files/styles/article_width/public/2016/05/captain-america-figure_0.png?itok=bfjgROwr', 46, '76', '188', 9),
(4, 'Spiderman', 'M', 'Can use spiderweb', 'F', 'https://images-na.ssl-images-amazon.com/images/I/511KrMXsnqL._SY450_.jpg', 35, '77', '178', 7),
(5, 'Super Girl', 'F', 'Same as superman', 'M', 'http://media.comicbook.com/2017/09/supergirl-season-3-premiere-promo-1020042-1280x0.jpg', 27, '66', '170', 9),
(6, 'Harley Quinn', 'F', 'Crazy', 'F', 'https://consequenceofsound.files.wordpress.com/2017/12/margot-robbie-harley-quinn-movie.png?w=807', 38, '50', '180', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_to` (`profile_to`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`profile_to`) REFERENCES `profile` (`profile_id`) ON DELETE CASCADE;
