Create the database as follows:


--
-- Database: `votingDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE IF NOT EXISTS `voters` (
  `Voterid` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Activation` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`Voterid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;
