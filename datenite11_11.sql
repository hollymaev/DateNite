-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 12, 2015 at 12:10 AM
-- Server version: 5.5.41-log
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `datenite`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
`ID` int(40) NOT NULL,
  `act_name` varchar(40) NOT NULL,
  `price_range` varchar(20) NOT NULL,
  `time_of_day` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`ID`, `act_name`, `price_range`, `time_of_day`, `city`) VALUES
(1, 'Go Karting', 'Low', 'All', 'Richmond'),
(2, 'Bowling', 'Low', 'All', 'Vancouver'),
(3, 'Arcade and Billiards', 'Low', 'Evening', 'Richmond'),
(4, 'Staying In', 'Low', 'All', 'Vancouver'),
(5, 'Tourist Attractions', 'Low', 'All', 'Vancouver'),
(6, 'Food Truck Hunting', 'Low', 'Afternoon', 'Vancouver'),
(7, 'Show, Concert, Play', 'All', 'All', 'Vancouver'),
(8, 'Paintball', 'Mid', 'All', 'Richmond'),
(9, 'Wall Climbing', 'Mid', 'Afternoon, Evening', 'Vancouver'),
(11, 'Kayaking', 'Mid', 'All', 'Vancouver'),
(12, 'Aquarium', 'Mid', 'All', 'Vancouver'),
(13, 'Movies', 'High', 'Evening', 'Coquitlam'),
(14, 'Cooking Classes', 'High', 'All', 'Vancouver'),
(15, 'Laser Tag', 'Low', 'All', 'Vancouver'),
(16, 'Skydiving', 'High', 'Morning, Afternoon', 'Vancouver');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
`ID` int(40) NOT NULL,
  `activity_id` int(40) NOT NULL,
  `company_name` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `website` varchar(40) DEFAULT NULL,
  `img_src` varchar(50) DEFAULT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`ID`, `activity_id`, `company_name`, `address`, `phone_number`, `website`, `img_src`, `description`) VALUES
(1, 15, 'Planet Lazer', '100 Braid St', '(604)-515-4244', 'http://planetlazer.net/', NULL, 'Get your heart rate pumping and try a game of glow in the dark laser tag! All the fun without the pain.'),
(3, 1, 'Richmond Go Karting', '6631 Sidaway Rd', '(604) 278-6184', 'www.richmondgokarts.com/', NULL, 'Take a drive and race against the finish line at the outdoor Richmond Go Karts.\r\n'),
(4, 2, 'Commodore Bowling', '838 Granville St', '604.681.1531', 'http://commodorelanes.com/', NULL, 'STRIKE! Nothing like a good old game of bowling'),
(5, 2, 'Rev''s', '5502 Lougheed Hwy', '(604) 299-9381', 'www.revs.ca/', NULL, 'STRIKE! Nothing like a good old game of bowling'),
(6, 2, 'Town ''n'' Country', '745 SE Marine Dr', '604-325-2695', 'http://tncbowl.ca/', NULL, 'STRIKE! Nothing like a good old game of bowling'),
(7, 3, 'E-Spot', '7951 Alderbridge Way', '(604) 232-9963', 'http://www.espot.me/', NULL, 'Channel your inner child and get the chance to play your beloved arcade games. Internet gaming, billiards, and more!'),
(8, 5, 'Bloedel Conservatory', '4600 Cambie St', '(604) 873-7000', 'http://vancouver.ca/parks-recreation-cul', NULL, 'Take a tour inside the conservatory where you get to see all kinds of exotic wildlife, tropical forests and flowers.'),
(9, 5, 'Vancouver Lookout', '555 W Hastings St', '(604) 689-0421', 'www.vancouverlookout.com/', NULL, 'Get a bird’s eye view of the beautiful city of Vancouver.'),
(10, 6, 'Mom''s Grilled Cheese Truck', 'Howe St & Robson St', '(604)-767-9768', 'http://momsgrilledcheesetruck.com/', NULL, 'Try a taste of some of Vancouver’s famous local food trucks and satisfy those tastebuds.'),
(11, 6, 'Tacofino Cantina', 'Robson St & Howe St', '604-253-8226', 'http://tacofino.com/', NULL, 'Try a taste of some of Vancouver’s famous local food trucks and satisfy those tastebuds.'),
(12, 6, 'Vij''s Railway Express', 'W Georgia St', '(604)-639-3335', 'vijsrailwayexpress.com', NULL, 'Try a taste of some of Vancouver’s famous local food trucks and satisfy those tastebuds.'),
(13, 6, 'Japadog', '530 Robson St', '(604)-569-1158', 'www.japadog.com/', NULL, 'Try a taste of some of Vancouver’s famous local food trucks and satisfy those tastebuds.'),
(14, 1, 'TBC Indoor Racing', '2100 Viceroy Pl', '604.232.9196', NULL, NULL, 'Take a drive and race against the finish line at TBC Indoor Racing!'),
(15, 5, 'Science World', '1455 Quebec St', '(604) 443-7440', 'https://www.scienceworld.ca', NULL, 'For the curious ones in your life. Take your significant other to Science World and explore the world''s greatest mysteries solved through science! There''s always special exhibits going on twice a year, so be sure to catch them! They''re only there for a limited time.'),
(16, 5, 'H. R. MacMillan Space Centre', '1100 Chestnut St', '(604) 738-2855', 'www.spacecentre.ca/gms', NULL, 'Ah the wonder of the dark void that is space. The H.R. MacMillan Space Centre is perfect for times when you''re feeling curious about the world. Probably after you''ve finished watching the Star Wars trilogy.'),
(17, 5, 'Spokes Bicycle Rentals', '1798 Georgia St W', '(604)-688-5141', 'http://www.spokesbicyclerentals.com/', NULL, 'What''s a date without tandem biking involved? Perfect for first dates and always more fun with more people. Definitely a double date kind of feel.'),
(18, 1, 'Richmond Indoor Paintball', '160-6631 Westminster Highway', '(604)-278-8897', 'www.richmondpaintball.ca/', NULL, 'Be careful when you take your significant other here. Things can get competitive really fast. This intense game of paintball will get your blood pumping and your inner sniper self jumping for joy.'),
(19, 9, 'Cliffhanger Climbing', '670 Industrial Ave', '604-874-2400', 'http://cliffhangerclimbing.com/vancouver', NULL, 'Wall climbing is great for when you''re wanting that rush of adrenaline as you climb higher and higher. Would not recommend to people scared of heights however.'),
(21, 11, 'Deep Cove Kayak', '2156 Banbury Rd', '604.929.2268', 'http://www.deepcovekayak.com/', NULL, 'Kayaking is an absolute must in the Summer. with the cold water right beneath you and the sun in your face, who doesn''t have a good time?'),
(22, 12, 'Vancouver Aquarium', '845 Avison Way', '(604) 659-3474', 'www.vanaqua.org/', NULL, 'A Vancouver favourite for date ideas. For 19+ users, the Vancouver Aquarium After Hours takes place once a year, so get your tickets before they sell out!'),
(23, 13, 'Silvercity Coquitlam & VIP', '170 Schoolhouse Street', '(604) 523-2911', 'www.cineplex.com/', NULL, 'Feeling a fancy night at the movies? Try out the Silvercity Theatre in Coquitlam! Their 19+ VIP section of the theatre is something worth trying with someone who shares the same love of movies as you.'),
(24, 14, 'The Dirty Apron', '540 Beatty Street', '(604)-879-8588', 'www.dirtyapron.com', NULL, 'Try something new and take up some cooking classes! It''s a good way to see how your significant other will do under the kitchen heat.'),
(25, 16, 'Skydive Vancouver', '1792 Alberni St', '(604) 327-5867', 'www.vancouver-skydiving.bc.ca/', NULL, 'ADRENALINE JUNKIES, THIS IS YOUR SIGN! Although planning this date can take more time, this is something that you''ll never forget.');

-- --------------------------------------------------------

--
-- Table structure for table `prefs`
--

CREATE TABLE IF NOT EXISTS `prefs` (
`ID` int(40) NOT NULL,
  `act_id` int(40) NOT NULL,
  `user_id` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`ID` int(40) NOT NULL,
  `uname` varchar(40) NOT NULL,
  `fname` varchar(40) DEFAULT NULL,
  `lname` varchar(40) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
 ADD PRIMARY KEY (`ID`), ADD KEY `activity_id` (`activity_id`), ADD KEY `activity_id_2` (`activity_id`);

--
-- Indexes for table `prefs`
--
ALTER TABLE `prefs`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `act_id` (`act_id`,`user_id`), ADD KEY `user_id` (`user_id`), ADD KEY `act_id_2` (`act_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
MODIFY `ID` int(40) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
MODIFY `ID` int(40) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `prefs`
--
ALTER TABLE `prefs`
MODIFY `ID` int(40) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `ID` int(40) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `company`
--
ALTER TABLE `company`
ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`activity_id`) REFERENCES `activity` (`ID`);

--
-- Constraints for table `prefs`
--
ALTER TABLE `prefs`
ADD CONSTRAINT `prefs_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID`),
ADD CONSTRAINT `prefs_ibfk_1` FOREIGN KEY (`act_id`) REFERENCES `activity` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
