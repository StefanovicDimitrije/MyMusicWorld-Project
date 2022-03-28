-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 16, 2022 at 10:50 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mymusicworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_id_user` int(11) NOT NULL,
  `type` enum('albums','tracks') NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `artist` varchar(45) NOT NULL,
  `content_spotify_id` varchar(45) NOT NULL,
  `image` varchar(100) NOT NULL,
  `review_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_review_user` (`fk_id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `fk_id_user`, `type`, `title`, `description`, `artist`, `content_spotify_id`, `image`, `review_date`) VALUES
(9, 18, 'albums', 'The ol reliable', 'I dont think theres anything needed to say about this album. If you know it, you know what I mean. Theres no stop and no filler. From front to end the music doesnt stop and the atmosphere is exactly as they intended. UK? Check. Stupid parties and dirty pubs? Check. Girls, running away from the cops and vampires? Check. Well not really vampires but.. yeah. Its dirty, its rushed, its honest, its authentic and most importantly it still holds up. It still feels fresh and the band still sound like they could very well be the young boys they were when this was recorded. Very nice record, I recommend it to anyone that enjoys.', 'Arctic Monkeys', '50Zz8CkIhATKUlQMbHO3k1', 'https://i.scdn.co/image/ab67616d0000b2736b3fa88bdd4af566fbbf2bbf', '2022-01-16'),
(10, 18, 'albums', 'A journey', 'A journey through the imaginary court filled with beautiful sounds, impressive solos and some of the best progressive melodic passages ever made. Also there is an ambient break near the end for some reason. I love it.', 'King Crimson', '6tVg2Wl9hVKMpHYcAl2V2M', 'https://i.scdn.co/image/ab67616d0000b2730e36a62897cf3f5937bf9c16', '2022-01-16'),
(11, 18, 'albums', 'A hit after another', 'A 40 minute exercise in pure beauty and an exhibition of strong base aesthetic model like this album is. Suspense even when there is no obvious reason why, creating an air tight atmosphere for everyone to enjoy. Near the end it slows down for a bit, creating a sense of an end approaching. An instrumental track, the Enjoy right now, today, finishes the album very nicely. Tied together with every song flowing into each other is a great touch. Easy to get into and an album that brings more every time it is listened to.', 'Tyler, The Creator', '2nkto6YNI4rUYTLqEwWJ3o', 'https://i.scdn.co/image/ab67616d0000b2738940ac99f49e44f59e6f7fb3', '2022-01-16'),
(12, 18, 'albums', 'Rock in the time of Yuga', 'Yes, this is something ive found in my dads old records and instantly fell in love with, probably because of it being one of his favorite bands and because of it feeling so old yet so fresh. Also, my primary language being Serbian, the hooks instantly caught on but along with the great guitar playing and the groovy song structures, it keeps me coming back. Start-and-stop style of music that tends to exist in these areas of the world proves to be entertaining to listen, especially for the first record you encounter. As this was my first Ex Yu Rock/New wave record, i will always hail it as a masterpiece and continue to be a fan of Disciplinas music.', 'Disciplin A Kitschme', '65x4X8lZ06lHsoIlw5gTLZ', 'https://i.scdn.co/image/ab67616d0000b2732268f0086aee7976cf959b3f', '2022-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `mail` varchar(45) NOT NULL,
  `location` varchar(50) NOT NULL,
  `pfp` blob,
  `password` varchar(80) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `mail`, `location`, `pfp`, `password`, `admin`) VALUES
(18, 'user123', 'user@gmail.com', 'Maribor', NULL, '$2y$10$pQW5DSMVTi4mrYjiftr3j.trR6rUUU6YADLJ/xX23oPyEyCQOEp12', 0),
(19, 'adminadmin', 'admin@gmail.com', 'Ljubljana', NULL, '$2y$10$n2gDJ6OnifPNl37aimVIkO5s64ClAvscdo/OMC/6FwsFxl3yv3qQi', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_review_user` FOREIGN KEY (`fk_id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
