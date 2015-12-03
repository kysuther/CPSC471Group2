-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2015 at 04:21 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `CPSC471_MusicDatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `albumID` int(5) NOT NULL AUTO_INCREMENT,
  `albumName` varchar(255) NOT NULL,
  `year` int(4) NOT NULL,
  `numTracks` int(100) NOT NULL,
  `AID` int(5) NOT NULL,
  PRIMARY KEY (`albumID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`albumID`, `albumName`, `year`, `numTracks`, `AID`) VALUES
(6, 'rocknroll', 1917, 1, 17),
(7, 'Single', 2010, 0, 19),
(8, 'Purpose', 2015, 15, 26),
(9, '25', 2015, 18, 27),
(10, 'pschoPassGOING', 1989, 65, 28),
(11, 'Made in the AM', 2015, 15, 29),
(15, 'Single', 1990, 18, 30),
(16, 'Single', 2131, 211, 30),
(17, 'THEUnderWOOD', 1594, 90, 31),
(18, 'CEE Creen Hits', 1990, 9, 32),
(19, 'Single', 1856, 5, 33),
(20, 'Crystal Skull Is Bad', 1789, 45, 34),
(21, 'Daughters ', 2005, 14, 35),
(22, 'David Guetta and the Fake DJs', 1420, 420, 36),
(23, 'Back to the Future', 1892, 5, 37),
(24, 'Clean Money', 1589, 8, 38),
(25, 'Justin Bieber', 1953, 5, 39),
(26, 'Drake Dance is Dank Meme', 1958, 59, 40),
(27, 'Eminem', 1995, 6, 41),
(28, 'Rap God', 6561, 5, 41),
(29, 'Far West Closure', 1958, 5862, 43),
(30, 'Monkey and Apes', 2001, 8, 44),
(31, 'The Test Album', 1990, 8, 39),
(32, 'JTAlbum', 1998, 45, 40),
(33, 'Ilike the weekend', 2015, 34, 47),
(34, 'Yes', 2056, 90, 46),
(35, 'Cara me Please', 1990, 34, 47),
(36, 'HERE', 2015, 34, 40),
(37, '1989', 1990, 13, 51),
(38, 'bad', 9088, 3, 48),
(39, 'Name', 1990, 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE IF NOT EXISTS `artists` (
  `ArtistID` int(5) NOT NULL AUTO_INCREMENT,
  `name` char(255) NOT NULL,
  `webpage` varchar(255) DEFAULT NULL,
  `CollabArtistID` int(5) NOT NULL,
  PRIMARY KEY (`ArtistID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`ArtistID`, `name`, `webpage`, `CollabArtistID`) VALUES
(17, 'work', 'work.com', 0),
(18, 'B.o.B. (feat. Hayley Williams)', 'bob1.com', 53),
(19, 'Beach House', 'beachhouse.com', 0),
(20, 'Beyoncé', 'beyonce.com', 0),
(21, 'Big Boi (feat. Cutty)', 'bigboi.com', 0),
(22, 'Black Eyed Peas', 'bep.com', 0),
(23, 'Black Eyed Peas 2', 'bep2.com', 0),
(24, 'Black Eyed Peas 3', 'bep3.com', 0),
(25, 'Brad Paisley', 'bradpaisley.com', 0),
(26, 'Justin Bieber', 'JB.com', 0),
(27, 'Adele', 'AD.com', 0),
(28, 'FLEIR EAST', 'SAX>COM', 0),
(29, 'One Direction', '1D.com', 0),
(30, 'Caribou', 'caribou.com', 0),
(31, 'Carrie Underwood', 'carrieunderwood.com', 0),
(32, 'Cee Lo Green', 'ceelo.com', 0),
(33, 'Chris Brown (feat. Tyga & Kevin McCall)', 'chrisbrown.com', 0),
(34, 'Crystal Castles', 'crystalcastles.com', 0),
(35, 'Daughtry', 'daughtry.com', 0),
(36, 'David Guetta (feat. Akon)', 'davidguetta.com', 0),
(37, 'Delorean', 'delorean.com', 0),
(38, 'Dirty Money', 'dirtymoney.com', 0),
(39, 'DJ Khaled (feat. T-Pain-Ludacris-Snoop Dogg)', 'khaled.com', 0),
(40, 'Drake', 'drake.com', 0),
(41, 'Eminem', 'eminem.com', 0),
(43, 'Far East Movement (feat. Cataracs & Dev)', 'fareastmovement.com', 0),
(44, 'Gorillaz', 'gorillaz.com', 0),
(45, 'Andrew Dong', 'Somopage.com', 0),
(46, 'Justin Timberlake', 'Jt.com', 0),
(47, 'The Weeknd', 'WK.com', 0),
(48, 'Shawn Mendes', 'Stiches.com', 0),
(49, 'Alessia Cara', 'AC.com', 0),
(50, 'Selena Gomez', 'SG.com', 0),
(51, 'Taylor Swift', 'TS.com', 0),
(52, 'Arianna Grande', 'AG.com', 0),
(53, 'Hayley Williams', 'HW.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `band`
--

CREATE TABLE IF NOT EXISTS `band` (
  `ArtistID` int(5) NOT NULL,
  `numOfMembers` int(100) NOT NULL,
  PRIMARY KEY (`ArtistID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contain`
--

CREATE TABLE IF NOT EXISTS `contain` (
  `TID` int(5) NOT NULL,
  `Pname` varchar(255) NOT NULL,
  `PUID` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`TID`,`Pname`,`PUID`),
  KEY `Pname` (`Pname`),
  KEY `PUID` (`PUID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contain`
--

INSERT INTO `contain` (`TID`, `Pname`, `PUID`) VALUES
(6, 'name2', 3),
(6, 'name3', 3),
(12, 'name2', 3),
(6, 'AndrewPlay1', 4),
(7, 'AndrewPlay1', 4),
(7, 'AndrewPlay2', 4),
(8, 'AndrewPlay1', 4),
(9, 'AndrewPlay1', 4),
(7, 'Favorites', 5),
(8, 'Favorites', 5),
(11, 'Favorites', 5),
(15, 'Favorites', 5),
(19, 'Pump up', 5),
(20, 'Pump up', 5),
(22, 'Favorites', 5),
(23, 'Pump up', 5),
(24, 'Favorites', 5),
(29, 'Pump up', 5),
(32, 'Pump up', 5),
(33, 'Pump up', 5),
(38, 'Favorites', 5),
(40, 'Pump up', 5);

-- --------------------------------------------------------

--
-- Table structure for table `madeof`
--

CREATE TABLE IF NOT EXISTS `madeof` (
  `TID` int(5) NOT NULL,
  `ALID` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`TID`,`ALID`),
  KEY `ALID` (`ALID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `performs`
--

CREATE TABLE IF NOT EXISTS `performs` (
  `AID` int(5) NOT NULL,
  `TID` int(5) NOT NULL,
  PRIMARY KEY (`AID`,`TID`),
  KEY `TID` (`TID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE IF NOT EXISTS `playlist` (
  `name` varchar(255) NOT NULL,
  `uid` int(5) NOT NULL DEFAULT '0',
  `Type` varchar(255) NOT NULL,
  PRIMARY KEY (`name`,`uid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`name`, `uid`, `Type`) VALUES
('AndrewPlay1', 4, 'PUB'),
('AndrewPlay2', 4, 'PUB'),
('Favorites', 5, ''),
('name2', 3, 'P'),
('name3', 3, 'P'),
('Pump up', 5, ''),
('Seventeen Thirty Eight', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `recordingstudio`
--

CREATE TABLE IF NOT EXISTS `recordingstudio` (
  `postalCode` varchar(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `CEO` varchar(255) DEFAULT NULL,
  `streetNo` int(5) NOT NULL,
  `streetName` varchar(255) NOT NULL,
  PRIMARY KEY (`postalCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `releases`
--

CREATE TABLE IF NOT EXISTS `releases` (
  `AID` int(5) NOT NULL,
  `ALID` int(5) NOT NULL,
  PRIMARY KEY (`AID`,`ALID`),
  KEY `ALID` (`ALID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `solo`
--

CREATE TABLE IF NOT EXISTS `solo` (
  `ArtistID` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ArtistID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE IF NOT EXISTS `song` (
  `trackID` int(5) NOT NULL AUTO_INCREMENT,
  `sample` char(255) DEFAULT NULL,
  `songName` char(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `Length` varchar(255) NOT NULL,
  `remixTrackNo` int(5) DEFAULT NULL,
  `uid` int(5) DEFAULT NULL,
  `AID` int(5) NOT NULL,
  PRIMARY KEY (`trackID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`trackID`, `sample`, `songName`, `genre`, `Length`, `remixTrackNo`, `uid`, `AID`) VALUES
(6, NULL, 'workwork', 'rock', '2:1', NULL, NULL, 17),
(7, NULL, 'Airplanes', 'Rap', '4:23', NULL, NULL, 18),
(8, NULL, 'Norway', 'Electronic', '4:51', NULL, NULL, 19),
(9, NULL, 'Halo', 'Country', '2:35', NULL, NULL, 20),
(10, NULL, 'Shutterbugg', 'Rock', '4:23', NULL, NULL, 21),
(11, NULL, 'Rock That Body', 'Dubstep', '4:23', NULL, NULL, 22),
(12, NULL, 'I Gotta Feeling', 'Pop', '4:53', NULL, NULL, 23),
(13, NULL, 'Imma Be', 'Heavy Metal', '3:24', NULL, NULL, 24),
(14, NULL, 'Water', 'Pop', '4:01', NULL, NULL, 25),
(15, NULL, 'Sorry', 'POP', '3:45', NULL, NULL, 26),
(16, NULL, 'Love Yourself', 'POP', '3:45', NULL, NULL, 27),
(17, NULL, 'HELLO!', 'DAT MUSIC', '3:56', NULL, NULL, 28),
(18, NULL, 'PERFECT', 'POP', '2:34', NULL, NULL, 29),
(19, NULL, 'I''ll SHow You', 'DEM FEELS', '2:90', NULL, NULL, 26),
(20, NULL, 'Odessa', 'Pop', '3:23', NULL, NULL, 27),
(21, NULL, 'Undo It', 'Electronic', '3:00', NULL, NULL, 28),
(22, NULL, 'F**k You', 'Electronic', '2:22', NULL, NULL, 29),
(23, NULL, 'Deuces', 'Rap', '4:23', NULL, NULL, 30),
(24, NULL, 'Baptism', 'Rock', '4:32', NULL, NULL, 31),
(25, NULL, 'Life After You', 'Dubstep', '4:32', NULL, NULL, 32),
(26, NULL, 'Sexy Bitch', 'Pop', '3:23', NULL, NULL, 33),
(27, NULL, 'Real Love', 'Rock', '2:43', NULL, NULL, 34),
(28, NULL, 'Hello Good Morning', 'Dubstep', '3:12', NULL, NULL, 35),
(29, NULL, 'All I Do Is Win', 'Pop', '3:15', NULL, NULL, 25),
(30, NULL, 'Over', 'Rock', '3:40', NULL, NULL, 38),
(31, NULL, 'Not Afraid', 'Pop', '3:42', NULL, NULL, 41),
(32, NULL, 'Love the Way You Lie', 'Country', '2:43', NULL, NULL, 41),
(33, NULL, 'Like A G6', 'Electronic', '2:45', NULL, NULL, 43),
(34, NULL, 'Stylo (feat. Mos Def)', 'Dubstep', '3:43', NULL, NULL, 44),
(35, NULL, 'The Cover', 'Rock', '4:56', NULL, NULL, 45),
(36, NULL, 'Cry Me A River', 'Pop', '4:34', NULL, NULL, 46),
(37, NULL, 'The Hills', 'RnB', '5:34', NULL, NULL, 47),
(38, NULL, 'Stitches', 'Pop', '2:45', NULL, NULL, 21),
(39, NULL, 'Here', 'Pop', '9:45', NULL, NULL, 52),
(40, NULL, 'Same Old Love', 'Pop', '2:89', NULL, NULL, 45),
(41, NULL, 'Wildest Dream', 'Pop', '3:45', NULL, NULL, 51),
(42, NULL, 'Focus', 'bad', '4:56', NULL, NULL, 52);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(5) NOT NULL AUTO_INCREMENT,
  `Fname` char(255) NOT NULL,
  `Lname` char(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `TID` int(5) NOT NULL,
  `AID` int(5) NOT NULL,
  `ALID` int(5) DEFAULT NULL,
  `Type` varchar(255) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `Fname`, `Lname`, `email`, `password`, `TID`, `AID`, `ALID`, `Type`) VALUES
(3, 'Kyle', 'Sutherland', 'kysuther@live.ca', '$2y$10$MHkh0wAcmOrgAjrEnadxae9EFAipiHqYZwkUIAX/Wq6kFyj2HRL2S', 0, 0, NULL, 'admin'),
(4, 'Andrew', 'Dong', 'andrew.mh.dong@gmail.com', '$2y$10$e2cpY8ex9u5/t27N1uEgCe/Q2KO4L3HNsi.Rpg4HPtpc9wW.zDbDm', 0, 0, NULL, 'admin'),
(5, 'Joshua', 'Hong', 'joshua1hong@hotmail.com', '$2y$10$/up258qvM2WtqrEp6vuL8OvWHz0lSJJsH3FSP1OyF9J2MtuzOH9Zi', 0, 0, NULL, 'admin'),
(6, 'Jaco', 'Cuc', 'test@test.com', '$2y$10$scNvIiu1X9k1z24U4TckmeBBj50wdkTTOVRij4EfAI1.wiYrbZ082', 0, 0, NULL, 'user'),
(7, 'Kharlie', 'Kheung', 'kk@123.com', '$2y$10$QXVVlli9IMwkFo8WwMtnZOIopCUrapXVwrIBz/2KMg655HSYN60Nq', 0, 0, NULL, 'user'),
(8, 'Andre', 'Donga', 'adonga@qwertop.com', '$2y$10$1BMHKxDxTLpptgGqFyma6.GvVbM7KUUFLoNieX5mRZnjU9z56O0a6', 0, 0, NULL, 'user'),
(9, 'Jsh', 'Honaga', 'jh@tester.com', '$2y$10$vWZWID2yHNdY/iQWft4fy.Is4.uAGfj/UlxPp4ocJ3z6oacxvTOda', 0, 0, NULL, 'user'),
(10, 'Brian', 'Brzezina', 'bbking@cpsc471.com', '$2y$10$kpm9.ErI/wi5JqRuQj4c5ewG58mIIjt4AxcjEaK4iP.66f4WkeRaW', 0, 0, NULL, 'user'),
(11, 'Bob', 'Builder', 'bobbuilder@cpsc471.com', '$2y$10$C.BuaI9K4sczjJ84In/AlOkt/lZ6lKbzARrpU/mnxHx4YgkOaC/ze', 0, 0, NULL, 'user'),
(12, 'Paul', 'Hui', 'ph@123.com', '$2y$10$STTChAh.zQM9jsTVkvBLK.RFAiEQQjy2davIwncrjdmBiQNB3jIfi', 0, 0, NULL, 'user'),
(13, 'Jackie', 'Chan', 'adventures@321.com', '$2y$10$H5N7n6zHIi1TDsS.NzKgwO/lKXp476WKdO.hnu1fvcbWEyFW81kXi', 0, 0, NULL, 'user'),
(14, 'Exo', 'Kai', 'kai@exo12.com', '$2y$10$Xj/PK1E9fpBXtgM/Dcl1/.hnKZv2zMhV12JvhopyxWyxDl8pdWz8e', 0, 0, NULL, 'user'),
(15, 'Paul', 'Hui', 'paul@charliecheungfanclub.com', '$2y$10$veJyNER32k2y2MdWx853kenN6Z/GTW3GYiXASwV/2iw5/t/ebgOIa', 0, 0, NULL, 'user'),
(16, 'Not', 'Charlie', 'whoop@whoopwhoop.com', '$2y$10$B1.Z9iZTk1lbh8x1DvYnJ./b8XQn7ga67MEHg0KiWEQsUpTvGrG06', 0, 0, NULL, 'user'),
(17, 'Taylor', 'Swift', '1989@1989.com', '$2y$10$A2hrE/cVf5.VO2IyAMPOSuQXck53.xzAieZ8AnJxojRkphVzfDJIS', 0, 0, NULL, 'user'),
(18, 'Jackson', 'Wang', 'got7@jyp.com', '$2y$10$CLybBQvgMQssDI5o8mp.Q./kAgvRYfruRWi./btoxLqIVU4KOSOka', 0, 0, NULL, 'user'),
(19, 'Vernon', 'Chwe', 'seventeenvernon@hansol.com', '$2y$10$dMZBSHqejC9yRc3i1YIwEuaZXlWWVsZGi5pSvQjmusMwQd5Kcq/zC', 0, 0, NULL, 'user'),
(20, 'Regina', 'George', 'queen@122.com', '$2y$10$4KVJxd1MeXLwpgYFNNddMu4YPDlgbt/CZKvP2zRMQyh7qhiqMc7H.', 0, 0, NULL, 'user'),
(21, 'Yugi', 'Oh', 'duel@ddddduel.com', '$2y$10$KB46ZW7L7L9sm0hFdC3Cp.k0I96h.cneOhXcIKumPcBerOxb9S6aG', 0, 0, NULL, 'user'),
(22, 'Taco', 'Bell', 'tb@taco.com', '$2y$10$EkuGhAQwZGXg42kI7B95G.Lo1fHlBRLTUOs2CTnZQhxKvn3nB1A8S', 0, 0, NULL, 'user'),
(23, 'Franklin', 'Wong', 'wong@123.com', '$2y$10$DNNoYOo7lkvwoAqNqfCF2.nCAg2AeGRokUQMD0T7VuEd0Mt2yAQoi', 0, 0, NULL, 'user'),
(24, 'dasfae', 'gewaga', 'qwert@asdf.com', '$2y$10$Fpd9aJ19h8VNzxj2B/AnZu/o54/rwuivvoJ4O1jZt04mfEfiKiW.6', 0, 0, NULL, 'user'),
(25, 'tester5000', '1234', 'tester5000@200.com', '$2y$10$SzHgBZUP322PwV9WnPHPHuYoGScmAY3S2qVsgJPtdzUpmWaG/b87e', 0, 0, NULL, 'user'),
(26, 'new', 'user', 'user123@user123.com', '$2y$10$GF/DF.kMN1E122tshIUkeOyimiYYPA/n06VkDggEXZWaRxjROKOIG', 0, 0, NULL, 'user'),
(27, 'iwanan', 'test', 'tester12@tester12.com', '$2y$10$jFTpx50qHxqys1UmAnYfROsKIWLB5wBROfePHDHVlwSgLhME4YTei', 0, 0, NULL, 'user'),
(28, 'Ibrahim', 'Karakira', 'Apluswork@cpsc471.com', '$2y$10$.o8i/2j3H4wWKFIjzNpsKefK5mz4r1n6RhVjUcl3Y0b29NYKBNyD2', 0, 0, NULL, 'user'),
(29, 'Bob', 'Jones', 'bob@jones.com', '$2y$10$LK9WH0M7SzKmECTcwG9hsOMwOyPWok4cFXi1.J/3gn.elQkuNIsXe', 0, 0, NULL, 'user'),
(30, 'bob', 'notjones', 'bob@notjones.com', '$2y$10$o63MCe4OOs5/kCI.CKYfSuw/OshEttHBdB03xbvj5uBWUJzPzzTQu', 0, 0, NULL, 'user');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `band`
--
ALTER TABLE `band`
  ADD CONSTRAINT `band_ibfk_1` FOREIGN KEY (`ArtistID`) REFERENCES `artists` (`ArtistID`);

--
-- Constraints for table `contain`
--
ALTER TABLE `contain`
  ADD CONSTRAINT `contain_ibfk_3` FOREIGN KEY (`PUID`) REFERENCES `user` (`userID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `contain_ibfk_1` FOREIGN KEY (`TID`) REFERENCES `song` (`trackID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `contain_ibfk_2` FOREIGN KEY (`Pname`) REFERENCES `playlist` (`name`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `madeof`
--
ALTER TABLE `madeof`
  ADD CONSTRAINT `madeof_ibfk_1` FOREIGN KEY (`TID`) REFERENCES `song` (`trackID`),
  ADD CONSTRAINT `madeof_ibfk_2` FOREIGN KEY (`ALID`) REFERENCES `album` (`albumID`);

--
-- Constraints for table `performs`
--
ALTER TABLE `performs`
  ADD CONSTRAINT `performs_ibfk_1` FOREIGN KEY (`TID`) REFERENCES `song` (`trackID`),
  ADD CONSTRAINT `performs_ibfk_2` FOREIGN KEY (`AID`) REFERENCES `artists` (`ArtistID`);

--
-- Constraints for table `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `playlist_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `releases`
--
ALTER TABLE `releases`
  ADD CONSTRAINT `releases_ibfk_1` FOREIGN KEY (`ALID`) REFERENCES `album` (`albumID`),
  ADD CONSTRAINT `releases_ibfk_2` FOREIGN KEY (`AID`) REFERENCES `artists` (`ArtistID`);

--
-- Constraints for table `solo`
--
ALTER TABLE `solo`
  ADD CONSTRAINT `solo_ibfk_1` FOREIGN KEY (`ArtistID`) REFERENCES `artists` (`ArtistID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
