-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 27, 2020 at 08:39 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alcohol_addiction`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qid` int(11) NOT NULL,
  `question` varchar(256) NOT NULL,
  `option1` varchar(256) NOT NULL,
  `option2` varchar(256) NOT NULL,
  `option3` varchar(256) NOT NULL,
  `option4` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `qid`, `question`, `option1`, `option2`, `option3`, `option4`) VALUES
(1, 1, '  How often do you have a drink containing alcohol ?', 'Monthly or less', '2 to 4 times a month', '2 to 3 times a week', '4 or more times a week.'),
(2, 2, 'How many drinks containing alcohol do you have on a typical day when you are drinking?', '1 or 2', '3 or 4', '5 or 8', '10 or more'),
(3, 3, 'How often do you have six or more drinks on one occasion?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(4, 4, 'How often during the last year have you found that you were not able to stop drinking once you had started?', 'Less than monthly', 'Monthly', ' Weekly', 'Daily or almost daily'),
(5, 5, 'How often during the last year have you failed to do what was normally expected from you because of drinking?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(6, 6, 'How often during the last year have you needed a first drink in the morning to get yourself going after a heavy drinking session?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(7, 7, 'How often during the last year have you had a feeling of guilt or remorse after drinking?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(8, 8, ' How often during the last year have you been unable to remember what happened the night before because you had been drinking?', ' Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(9, 9, '  Have you or someone else been injured as a result of your drinking?', 'No', 'Can not Say', 'Yes, but not in the last year', 'Yes, during the last year'),
(10, 10, ' Has a relative or friend or a doctor or another health worker been concerned about your drinking or suggested you cut down?', 'No', 'Can not Say', 'Yes, but not in the last year', 'Yes, but not in the last year');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
