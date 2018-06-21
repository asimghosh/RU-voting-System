-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2012 at 01:54 AM
-- Server version: 5.1.36-community-log
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ovs`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE IF NOT EXISTS `candidate` (
  `CandidateID` int(11) NOT NULL AUTO_INCREMENT,
  `abc` varchar(1) NOT NULL,
  `Position` varchar(200) NOT NULL,
  `Party` varchar(100) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `MiddleName` varchar(100) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Photo` varchar(200) NOT NULL,
  PRIMARY KEY (`CandidateID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=191 ;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`CandidateID`, `abc`, `Position`, `Party`, `FirstName`, `LastName`, `MiddleName`, `Gender`, `Year`, `Photo`) VALUES
(101, 'c', '1st Year Representative', 'Pig Party', 'Raphael Victor', 'Combate', 'Romarate', 'Male', '1st year', 'upload/photo0317.jpg'),
(102, 'c', '1st Year Representative', 'Horse Party', 'Mary Ver', 'Pamposa', 'Libo-on', 'FeMale', '1st year', 'upload/photo0900.jpg'),
(103, 'c', '1st Year Representative', 'Pig Party', 'Rowan Jennele', 'Villamor', 'Totot', 'FeMale', '1st year', 'upload/2012-10-13 16.37.13.jpg'),
(100, 'e', '3rd Year Representative', 'Horse Party', 'Achilles', 'Palma', 'wla', 'Male', '3rd year', 'upload/539324_3623195908310_933066000_n.jpg'),
(137, 'c', '1st Year Representative', 'Horse Party', 'Jeza Marie', 'Telmoso', 'Agbay', 'FeMale', '1st year', 'upload/2012-10-13 16.38.18.jpg'),
(136, 'c', '1st Year Representative', 'Horse Party', 'Ailyn', 'Tanaleon', 'Labos', 'FeMale', '1st year', 'upload/2012-10-13 16.37.36.jpg'),
(95, 'a', 'Governor', 'Pig Party', 'Achilles', 'Palma', 'Namoca', 'Male', '3rd year', 'upload/539324_3623195908310_933066000_n.jpg'),
(133, 'c', '1st Year Representative', 'Horse Party', 'Michelle', 'De Asis', 'Dedior', 'FeMale', '1st year', 'upload/SAM_0419.JPG'),
(135, 'c', '1st Year Representative', 'Pig Party', 'Golda', 'Nepomuceno', 'Palma', 'FeMale', '1st year', 'upload/SAM_4493.JPG'),
(134, 'c', '1st Year Representative', 'Horse Party', 'Veronica', 'Bianayco', 'Dwarso', 'FeMale', '1st year', 'upload/SAM_0418.JPG'),
(131, 'c', '1st Year Representative', 'Pig Party', 'Brian Paul', 'Sablan', 'Silla', 'Male', '1st year', 'upload/IMG_4211.JPG'),
(128, 'b', 'Vice-Governor', 'Pig Party', 'Joneil', 'Constantino', 'Palma', 'Male', '3rd year', 'upload/joneil.jpg'),
(129, 'b', 'Vice-Governor', 'lynksys', 'Cristian', 'Sausa', 'dela cruz', 'Male', '2nd year', 'upload/DSC00920.jpg'),
(130, 'c', '1st Year Representative', 'Smart Party', 'Jorgielyn', 'Serfino', 'Calibre', 'Male', '1st year', 'upload/185257_425222344194052_226314123_n.jpg'),
(138, 'c', '1st Year Representative', 'Pig Party', 'May', 'Mendoza', 'Alvarez', 'FeMale', '1st year', 'upload/SAM_5366.JPG'),
(139, 'c', '1st Year Representative', 'Horse Party', 'Denmark', 'Tabiolo', 'Ramos', 'Male', '1st year', 'upload/CIMG2420.JPG'),
(143, 'd', '2nd Year Representative', 'Smart Party', 'Anamae', 'Alquizar', 'dela cruz', 'FeMale', '2nd year', 'upload/218106_390683254330677_1126048305_n.jpg'),
(144, 'd', '2nd Year Representative', 'Smart Party', 'Cristine', 'Yanson', 'dela cruz', 'FeMale', '2nd year', 'upload/183594_520948794585644_506109043_n.jpg'),
(145, 'd', '2nd Year Representative', 'Smart Party', 'Jerson', 'Vargas', 'dela cruz', 'Male', '2nd year', 'upload/428227_349953155024026_1124991126_n.jpg'),
(146, 'd', '2nd Year Representative', 'lynksys', 'Anton Victor', 'Jacobo', 'dela cruz', 'Male', '2nd year', 'upload/561684_473563706001588_1347765805_n.jpg'),
(147, 'd', '2nd Year Representative', 'Horse Party', 'Stephanie', 'Villanueva', 'Batoon', 'FeMale', '2nd year', 'upload/DSC_7898.JPG'),
(148, 'd', '2nd Year Representative', 'lynksys', 'Dean Martin', 'Tingson', 'dela cruz', 'Male', '2nd year', 'upload/199254_180070498706527_7521385_n.jpg'),
(149, 'd', '2nd Year Representative', 'lynksys', 'marven', 'actub', 'Pityr', 'Male', '2nd year', 'upload/555629_492876134073689_1322157649_n.jpg'),
(150, 'd', '2nd Year Representative', 'lynksys', 'jetro', 'Vargas', 'Serw', 'Male', '2nd year', 'upload/jetro.jpg'),
(151, 'd', '2nd Year Representative', 'lynksys', 'jed', 'Vargas', 'Sewruio', 'Male', '2nd year', 'upload/jed.jpg'),
(152, 'd', '2nd Year Representative', 'Smart Part', 'kzille', 'naynay', 'dela cruz', 'Male', '2nd year', 'upload/293896_417785301600923_1313159027_n.jpg'),
(153, 'd', '2nd Year Representative', 'Pig Party', 'Freddie', 'Clavel', 'dela cruz', 'Male', '2nd year', 'upload/251449_481190595235619_433937958_n.jpg'),
(154, 'd', '2nd Year Representative', 'Pig Party', 'Mark', 'dominic', 'dela cruz', 'Male', '2nd year', 'upload/579875_417245051645924_2106200816_n.jpg'),
(155, 'e', '3rd Year Representative', 'Pig Party', 'Fernrose', 'Olarte', 'Otopera', 'FeMale', '3rd year', 'upload/default.jpg'),
(175, 'f', '4th Year Representative', 'Horse Party', 'Lonida', 'Delez', 'Deres', 'FeMale', '4th year', 'upload/[large][AnimePaper]wallpapers_Mobile-Suit-Gundam-Seed-Destiny_Rukawa11(1.33)__THISRES__72873.jpg'),
(158, 'f', '3rd Year Representative', 'Pig Party', 'Michael', 'Jomero', 'Dert', 'Male', '3rd year', 'upload/1.jpg'),
(159, 'e', '3rd Year Representative', 'Pig Party', 'Cristine', 'Yanson', 'Poo', 'FeMale', '3rd year', 'upload/312212_286103561418274_100000558960309_1109905_270256889_n.jpg'),
(173, 'e', '3rd Year Representative', 'Horse Party', 'Jomar', 'Pabuaya', 'Pomono', 'Male', '3rd year', 'upload/Between_Darkness_and_Wonder_Black_Purity_HD_Wallpaper.jpg'),
(162, 'f', '3rd Year Representative', 'Pig Party', 'Victor', 'Jacobo', 'Job', 'Male', '3rd year', 'upload/Iron_Man_Movie_by_anaheim_420.jpg'),
(174, 'e', '3rd Year Representative', 'Horse Party', 'Alan', 'De La Torre', 'Bouno', 'Male', '3rd year', 'upload/[large][AnimePaper]wallpapers_Mobile-Suit-Gundam-Seed-Destiny_Rukawa11(1.33)__THISRES__72873.jpg'),
(164, 'f', '3rd Year Representative', 'Pig Party', 'Honeylee', 'Magbanua', 'Mubu', 'FeMale', '3rd year', 'upload/CodeGeass-DarknessLightEye.jpg'),
(165, 'e', '3rd Year Representative', 'Horse Party', 'Charito', 'Puray', 'Numoi', 'FeMale', '3rd year', 'upload/Iron_Man_Movie_by_anaheim_420.jpg'),
(170, 'e', '3rd Year Representative', 'Horse Party', 'Jorgielyn', 'Serfino', 'Gugor', 'FeMale', '3rd year', 'upload/185257_425222344194052_226314123_n.jpg'),
(171, 'e', '3rd Year Representative', 'Pig Party', 'Thea Marie', 'Soberano', 'Gopot', 'FeMale', '3rd year', 'upload/3394-41802d1177765259-nice-notepad-icon-notepad.png'),
(188, 'e', '3rd Year Representative', 'dbb', 'Christian', 'Sausa', 'pooly', 'Male', '3rd year', 'upload/IMG_4213.JPG'),
(176, 'f', '4th Year Representative', 'Horse Party', 'Eunice', 'Bautista', 'Fererr', 'FeMale', '4th year', 'upload/1.jpg'),
(177, 'f', '4th Year Representative', 'Horse Party', 'Al Mario', 'Small', 'Herera', 'Male', '4th year', 'upload/2.jpg'),
(178, 'f', '4th Year Representative', 'Horse Party', 'Louise', 'Po', 'Monas', 'FeMale', '4th year', 'upload/1280x1024-autobots-logo-right.jpg'),
(179, 'f', '4th Year Representative', 'Horse Party', 'Michael', 'Cachero', 'Serrero', 'Male', '4th year', 'upload/3394-41802d1177765259-nice-notepad-icon-notepad.png'),
(180, 'f', '4th Year Representative', 'Horse Party', 'Ailyn', 'Barameda', 'Monoop', 'FeMale', '4th year', 'upload/47057982.png'),
(181, 'f', '4th Year Representative', 'Pig Party', 'Joanna', 'Bustillo', 'Fotor', 'FeMale', '4th year', 'upload/1202462187.png'),
(182, 'f', '4th Year Representative', 'Pig Party', 'Lovely Mae', 'Jurilla', 'Hereroo', 'FeMale', '4th year', 'upload/12819748323869.jpg'),
(183, 'f', '4th Year Representative', 'Pig Party', 'Zac', 'Efron', 'Herrerar', 'Male', '4th year', 'upload/100227023905969.png'),
(184, 'f', '4th Year Representative', 'Pig Party', 'Alex', 'Pettyfer', 'Gert', 'Male', '4th year', 'upload/924988520653134968.png'),
(185, 'f', '4th Year Representative', 'Pig Party', 'Hugh', 'Jackman', 'Komon', 'Male', '4th year', 'upload/Between_Darkness_and_Wonder_Black_Purity_HD_Wallpaper.jpg'),
(186, 'f', '4th Year Representative', 'Pig Party', 'Gerald', 'Anderson', 'Ferrera', 'Male', '4th year', 'upload/black-abstract-windows7-seven-desktop-wallpaper-1600x1200.jpg'),
(190, 'a', 'Governor', 'party2x', 'Sherwin', 'Laylon', 'Deres', 'Male', '3rd year', 'upload/293896_417785301600923_1313159027_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `history_id` int(11) NOT NULL AUTO_INCREMENT,
  `data` varchar(30) NOT NULL,
  `action` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `user` varchar(20) NOT NULL,
  PRIMARY KEY (`history_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=569 ;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_id`, `data`, `action`, `date`, `user`) VALUES
(568, 'john kevin lorayna', 'Login', '2012-11-08 09:46:23', 'admin'),
(567, 'john kevin lorayna', 'Logout', '2012-11-08 09:45:59', 'admin'),
(566, 'john kevin lorayna', 'Login', '2012-11-08 09:44:41', 'admin'),
(565, 'john kevin lorayna', 'Login', '2012-11-03 20:24:08', 'admin'),
(564, 'Achilles Palma', 'Deleted Voter', '10/25/2012 11:1:39', 'admin'),
(563, 'john kevin lorayna', 'Login', '2012-10-25 10:48:40', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `User_id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `User_Type` varchar(50) NOT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `FirstName`, `LastName`, `UserName`, `Password`, `User_Type`) VALUES
(2, 'john kevin', 'lorayna', 'admin', 'admin', 'admin'),
(5, 'john kevin', 'lorayna', 'jkev', 'jkev', 'Admin'),
(4, 'Stephnanie', 'Villanueva', 'teph', 'teph', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE IF NOT EXISTS `voters` (
  `VoterID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `MiddleName` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Status` varchar(20) NOT NULL,
  PRIMARY KEY (`VoterID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`VoterID`, `FirstName`, `LastName`, `MiddleName`, `Username`, `Password`, `Year`, `Status`) VALUES
(24, 'Maricon', 'Itona', 'M.', '20100333', 'concon', '1st year', 'Voted'),
(23, 'Raphael Victor', 'Combate', 'R.', '20100222', 'raprap', '1st year', 'Unvoted'),
(17, 'May', 'Mendoza', 'Alvijos', '20100323', 'may', '1st year', 'Unvoted'),
(18, 'Golda', 'Nepomuceno', 'Molentin', '20100316', 'golda', '1st year', 'Unvoted'),
(19, 'Shiera Mae', 'Tuting', 'Terer', '20100968', 'shiera', '3rd year', 'Unvoted'),
(20, 'Mary Ver', 'Libo-on', 'M', '20100381', 'mary', '1st year', 'Unvoted'),
(21, 'John Kevin', 'Lorayna', 'Amos', '20100412', 'kevin', '1st year', 'Unvoted'),
(22, 'Denmark', 'Tabiolo', 'R', '20100111', 'denmark', '1st year', 'Unvoted'),
(16, 'Sherwin', 'Laylon', 'Delicana', '20100349', 'zac', '3rd year', 'Unvoted'),
(25, 'Joneil', 'Constantino', 'N.', '20100333', 'joneil', '3rd year', 'Unvoted'),
(26, 'Charito', 'Puray', 'N.', '20100444', 'char', '3rd year', 'Unvoted'),
(27, 'Honeylee', 'Magbanua', 'M.', '20100555', 'honey', '3rd year', 'Unvoted'),
(28, 'Jonald', 'Pamposa', 'T.', '20100666', 'jonald', '2nd year', 'Unvoted'),
(29, 'Michelle', 'De Asis', 'R.', '20100777', 'mich', '1st year', 'Unvoted'),
(30, 'Rowan', 'Villamor', 'O.', '20100888', 'rowan', '1st year', 'Unvoted'),
(31, 'Fernrose', 'Olarte', 'P.', '20100123', 'fern', '3rd year', 'Unvoted'),
(32, 'Ryan', 'Malbata-an', 'P.', '20100246', 'ryan', '2nd year', 'Unvoted'),
(33, 'Ariane Mae', 'Ferrer', 'I.', '20100395', 'mae', '2nd year', 'Unvoted'),
(34, 'Jamilah', 'Lomot', 'Y.', '20100567', 'jam', '2nd year', 'Voted'),
(35, 'Lonida', 'Delez', 'P.', '20100678', 'kring', '4th year', 'Unvoted'),
(36, 'Allan', 'De La Torre', 'O.', '20100876', 'allan', '4th year', 'Unvoted'),
(37, 'Lovelyn', 'Jurilla', 'D.', '20100126', 'lovelyn', '4th year', 'Unvoted'),
(38, 'Stephanie', 'Villanueva', 'T.', '20100986', 'teph', '2nd year', 'Unvoted'),
(39, 'Zac', 'Efron', 'O.', '20100945', 'zac', '4th year', 'Unvoted'),
(40, 'Hugh', 'Jackman', 'Y.', '20100786', 'hugh', '4th year', 'Unvoted'),
(41, 'Gerald', 'Anderson', 'O.', '20100865', 'gerald', '4th year', 'Unvoted'),
(42, 'Alex', 'Pettyfer', 'Z.', '20100432', 'alex', '4th year', 'Unvoted'),
(44, 'Cristine', 'Yanson', 'P.', '20100764', 'cris', '3rd year', 'Unvoted'),
(45, 'Jomar', 'Pabuaya', 'U.', '20100561', 'jomar', '3rd year', 'Unvoted'),
(48, 'Anamae', 'Alquizar', 'dela Cruz', '20100113', 'sarge', '2nd year', 'Voted');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE IF NOT EXISTS `votes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CandidateID` int(11) NOT NULL,
  `votes` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=206 ;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`ID`, `CandidateID`, `votes`) VALUES
(205, 0, 0),
(204, 0, 0),
(203, 153, 0),
(202, 129, 0),
(201, 95, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
