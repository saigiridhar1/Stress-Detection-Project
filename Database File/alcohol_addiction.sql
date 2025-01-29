-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2024 at 03:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 4, 6, 'hello', '2020-06-28 15:50:22', 0),
(2, 6, 4, 'how are you', '2020-06-28 15:51:08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `counselors`
--

CREATE TABLE `counselors` (
  `id` int(11) NOT NULL,
  `c_name` varchar(256) NOT NULL,
  `c_address` varchar(256) NOT NULL,
  `c_email` varchar(256) NOT NULL,
  `c_contact` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `counselors`
--

INSERT INTO `counselors` (`id`, `c_name`, `c_address`, `c_email`, `c_contact`, `username`, `password`) VALUES
(6, 'Tejas Yallal', 'bgm', 'tejasyallal01@gmail.com', '7795615096', 'tej6', '666');

-- --------------------------------------------------------

--
-- Table structure for table `emotion_data`
--

CREATE TABLE `emotion_data` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `DATE` varchar(256) NOT NULL,
  `EMOTION` varchar(256) NOT NULL,
  `TEST_SCORE` int(11) NOT NULL,
  `ANALYSIS` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emotion_data`
--

INSERT INTO `emotion_data` (`ID`, `NAME`, `DATE`, `EMOTION`, `TEST_SCORE`, `ANALYSIS`) VALUES
(0, '0', '0', '0', 0, '0'),
(631, '0', '2024', '0', 89, '0'),
(0, 'Name', 'Date', 'Emotion', 0, 'Analysis'),
(631, 'asss', '2024-07-17 17:50:12', 'relaxed', 89, 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'glenn', 'glenn'),
(2, 'aster', '123'),
(3, 'tej1', '111');

-- --------------------------------------------------------

--
-- Table structure for table `login1`
--

CREATE TABLE `login1` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login1`
--

INSERT INTO `login1` (`user_id`, `username`, `password`) VALUES
(1, 'johnsmith', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(2, 'peterParker', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(3, 'davidMoore', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(4, 'tej1', '$2y$10$l8O7.ko5/3evzA313cbP0e53RTc2DgxM8s/E0Sji4MEkj0jt5cAO6'),
(5, 'tej6', '666'),
(6, 'doctor', '$2y$10$ZRcfXw8VqqZj6ooCoR27Puc3B6AmDRD08WlUSNj4EcOGbUAONoCiW');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 4, '2020-06-28 15:31:10', 'no'),
(2, 6, '2020-06-28 15:50:49', 'no'),
(3, 4, '2020-06-28 15:51:15', 'no'),
(4, 6, '2020-06-28 16:18:30', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `username`, `msg`) VALUES
(55, 'glenn', 'hi aster, are you there?'),
(56, 'aster', 'oh, yes. how are you?'),
(57, 'aster', 'hi'),
(111, 'tej1', '132123'),
(112, 'aster', 'hello'),
(113, 'aster', 'hello'),
(114, 'tej1', 'hello'),
(115, 'tej1', 'hello'),
(116, 'tej1', 'hello'),
(117, 'tej1', 'hello'),
(118, 'tej1', 'hey'),
(119, 'tej1', 'hello'),
(120, 'ak', 'hello'),
(121, 'suri', 'I am suri'),
(122, 'tej1', 'hello'),
(123, 'tej1', 'hello1'),
(124, 'tej1', 'hellll'),
(125, 'tej8', 'It was Great Experience using this app'),
(126, 'tej8', 'hello'),
(127, 'tej8', 'hey');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `question` varchar(256) NOT NULL,
  `option1` varchar(256) NOT NULL,
  `option2` varchar(256) NOT NULL,
  `option3` varchar(256) NOT NULL,
  `option4` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `qid`, `question`, `option1`, `option2`, `option3`, `option4`) VALUES
(1, 1, 'How often do you have a drink containing alcohol ?', 'Monthly or less', '2 to 4 times a month', '2 to 3 times a week', '4 or more times a week.'),
(2, 2, 'How many drinks containing alcohol do you have on a typical day when you are drinking?', '1 or 2', '3 or 4', '5 or 8', '10 or more'),
(3, 3, 'How often do you have six or more drinks on one occasion?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(4, 4, 'How often during the last year have you found that you were not able to stop drinking once you had started?', 'Less than monthly', 'Monthly', ' Weekly', 'Daily or almost daily'),
(5, 5, 'How often during the last year have you failed to do what was normally expected from you because of drinking?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(6, 6, 'How often during the last year have you needed a first drink in the morning to get yourself going after a heavy drinking session?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(7, 7, 'How often during the last year have you had a feeling of guilt or remorse after drinking?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(8, 8, ' How often during the last year have you been unable to remember what happened the night before because you had been drinking?', ' Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(9, 9, '  Have you or someone else been injured as a result of your drinking?', 'No', 'Can not Say', 'Yes, but not in the last year', 'Yes, during the last year'),
(10, 10, '  Has a relative or friend or a doctor or another health worker been concerned about your drinking or suggested you cut down...?', 'No', 'Can not Say', 'Yes, but not in the last year', 'Yes, but not in the last year');

-- --------------------------------------------------------

--
-- Table structure for table `questions1`
--

CREATE TABLE `questions1` (
  `id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `question` varchar(256) NOT NULL,
  `option1` varchar(256) NOT NULL,
  `option2` varchar(256) NOT NULL,
  `option3` varchar(256) NOT NULL,
  `option4` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `questions1`
--

INSERT INTO `questions1` (`id`, `qid`, `question`, `option1`, `option2`, `option3`, `option4`) VALUES
(1, 1, '      How often do you have a Masala or anything containing Tobacco... ?', 'Monthly or less', '2 to 4 times a month', '2 to 3 times a week', '4 or more times a week.'),
(2, 2, 'How many drinks containing alcohol do you have on a typical day when you are drinking?', '1 or 2', '3 or 4', '5 or 8', '10 or more'),
(3, 3, 'How often do you have six or more drinks on one occasion?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(4, 4, 'How often during the last year have you found that you were not able to stop drinking once you had started?', 'Less than monthly', 'Monthly', ' Weekly', 'Daily or almost daily'),
(5, 5, 'How often during the last year have you failed to do what was normally expected from you because of drinking?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(6, 6, 'How often during the last year have you needed a first drink in the morning to get yourself going after a heavy drinking session?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(7, 7, 'How often during the last year have you had a feeling of guilt or remorse after drinking?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(8, 8, ' How often during the last year have you been unable to remember what happened the night before because you had been drinking?', ' Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(9, 9, '  Have you or someone else been injured as a result of your drinking?', 'No', 'Can not Say', 'Yes, but not in the last year', 'Yes, during the last year'),
(10, 10, '  Has a relative or friend or a doctor or another health worker been concerned about your drinking or suggested you cut down...?', 'No', 'Can not Say', 'Yes, but not in the last year', 'Yes, but not in the last year');

-- --------------------------------------------------------

--
-- Table structure for table `questions2`
--

CREATE TABLE `questions2` (
  `id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `question` varchar(256) NOT NULL,
  `option1` varchar(256) NOT NULL,
  `option2` varchar(256) NOT NULL,
  `option3` varchar(256) NOT NULL,
  `option4` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `questions2`
--

INSERT INTO `questions2` (`id`, `qid`, `question`, `option1`, `option2`, `option3`, `option4`) VALUES
(1, 1, '    How often do you Smoke... ?', 'Monthly or less', '2 to 4 times a month', '2 to 3 times a week', '4 or more times a week.'),
(2, 2, ' How many ciggrats containing do you have on a typical day when you are working?', '1 or 2', '3 or 4', '5 or 8', '10 or more'),
(3, 3, ' How often do you have six or more ciggrats on one occasion?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(4, 4, ' How often during the last year have you found that you were not able to stop smoking once you had started?', 'Less than monthly', 'Monthly', ' Weekly', 'Daily or almost daily'),
(5, 5, ' How often during the last year have you failed to do what was normally expected from you because of smoking?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(6, 6, ' How often during the last year have you needed a first cigarette in the morning to get yourself going after a heavy smoking session?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(7, 7, ' How often during the last year have you had a feeling of guilt or remorse after smoking?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(8, 8, '  How many cigarettes do you smoke per day?', '5 o 10', '6 to 10', '11 to 20', '20 or more'),
(9, 9, ' How soon after you wake up do you smoke your first cigarette?', 'Within 5 minutes', ' 6-30 minutes', '31-60 minutes', 'After 60 minutes'),
(10, 10, 'Have you ever tried to quit smoking?', 'Yes, multiple times', ' Yes, once', ' No, but I have considered it', 'No, I do not want to quit');

-- --------------------------------------------------------

--
-- Table structure for table `questions3`
--

CREATE TABLE `questions3` (
  `id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `question` varchar(256) NOT NULL,
  `option1` varchar(256) NOT NULL,
  `option2` varchar(256) NOT NULL,
  `option3` varchar(256) NOT NULL,
  `option4` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `questions3`
--

INSERT INTO `questions3` (`id`, `qid`, `question`, `option1`, `option2`, `option3`, `option4`) VALUES
(1, 1, '    How often do you have a Drugs... ?', 'Monthly or less', '2 to 4 times a month', '2 to 3 times a week', '4 or more times a week.'),
(2, 2, 'How many drinks containing alcohol do you have on a typical day when you are drinking?', '1 or 2', '3 or 4', '5 or 8', '10 or more'),
(3, 3, 'How often do you have six or more drinks on one occasion?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(4, 4, 'How often during the last year have you found that you were not able to stop drinking once you had started?', 'Less than monthly', 'Monthly', ' Weekly', 'Daily or almost daily'),
(5, 5, 'How often during the last year have you failed to do what was normally expected from you because of drinking?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(6, 6, 'How often during the last year have you needed a first drink in the morning to get yourself going after a heavy drinking session?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(7, 7, 'How often during the last year have you had a feeling of guilt or remorse after drinking?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(8, 8, ' How often during the last year have you been unable to remember what happened the night before because you had been drinking?', ' Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(9, 9, '   Have you or someone else been injured as a result of your drinking?', 'No', 'Can not Say', 'Yes, but not in the last year', 'Yes, during the last year'),
(10, 10, '  Has a relative or friend or a doctor or another health worker been concerned about your drug or suggested you cut down?', 'Never', 'Can not Say', 'Yes, but not in the last year', 'Yes, but not in the last year');

-- --------------------------------------------------------

--
-- Table structure for table `questions4`
--

CREATE TABLE `questions4` (
  `id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `question` varchar(256) NOT NULL,
  `option1` varchar(256) NOT NULL,
  `option2` varchar(256) NOT NULL,
  `option3` varchar(256) NOT NULL,
  `option4` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `questions4`
--

INSERT INTO `questions4` (`id`, `qid`, `question`, `option1`, `option2`, `option3`, `option4`) VALUES
(1, 1, 'Do you often feel overwhelmed by the number of tasks and projects you need to manage at work?', 'Monthly or less', '2 to 4 times a month', '2 to 3 times a week', 'every moment'),
(2, 2, 'How frequently do you feel stressed about meeting tight deadlines?', '1 or 2 days', '3 or 4 days', '5 or 8 hours', '10 or more days'),
(3, 3, 'Do you struggle to maintain a healthy balance between your work responsibilities and personal life?', 'yes', 'no', 'both 1 and 2', 'none'),
(4, 4, 'How often do you find yourself working late hours or on weekends to complete work tasks?', 'everyday', 'every alternate day', ' Weekly', 'monthly'),
(5, 5, 'Are you satisfied with your current role and the tasks you perform at work?', 'yes', 'no', 'mostly', 'none of above'),
(6, 6, 'Do you feel that you have adequate support from your colleagues and supervisors?', 'yes', 'no', 'mostly yes', 'mostly no'),
(7, 7, 'How often do you experience conflicts or disagreements with your team members?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(8, 8, 'Do you frequently experience physical symptoms such as headaches, fatigue, or insomnia that you attribute to work stress?', ' Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(9, 9, 'How often do you feel anxious, worried, or tense about work-related issues?', 'No', 'Can not Say', 'Yes, but not in the last year', 'Yes, during the last year'),
(10, 10, 'Do you feel constant pressure to perform at a high level and meet expectations?', 'No', 'Can not Say', 'Yes, but not in the last year', 'Yes, but not in the last year');

-- --------------------------------------------------------

--
-- Table structure for table `questions5`
--

CREATE TABLE `questions5` (
  `id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `question` varchar(256) NOT NULL,
  `option1` varchar(256) NOT NULL,
  `option2` varchar(256) NOT NULL,
  `option3` varchar(256) NOT NULL,
  `option4` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `questions5`
--

INSERT INTO `questions5` (`id`, `qid`, `question`, `option1`, `option2`, `option3`, `option4`) VALUES
(1, 1, ' How often do you use Social Media ?', 'Monthly or less', '2 to 4 times a month', '2 to 3 times a week', '4 or more times a week.'),
(2, 2, 'How many drinks containing alcohol do you have on a typical day when you are drinking?', '1 or 2', '3 or 4', '5 or 8', '10 or more'),
(3, 3, 'How often do you have six or more drinks on one occasion?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(4, 4, 'How often during the last year have you found that you were not able to stop drinking once you had started?', 'Less than monthly', 'Monthly', ' Weekly', 'Daily or almost daily'),
(5, 5, 'How often during the last year have you failed to do what was normally expected from you because of drinking?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(6, 6, 'How often during the last year have you needed a first drink in the morning to get yourself going after a heavy drinking session?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(7, 7, 'How often during the last year have you had a feeling of guilt or remorse after drinking?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(8, 8, ' How often during the last year have you been unable to remember what happened the night before because you had been drinking?', ' Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(9, 9, '  Have you or someone else been injured as a result of your drinking?', 'No', 'Can not Say', 'Yes, but not in the last year', 'Yes, during the last year'),
(10, 10, '  Has a relative or friend or a doctor or another health worker been concerned about your drinking or suggested you cut down...?', 'No', 'Can not Say', 'Yes, but not in the last year', 'Yes, but not in the last year');

-- --------------------------------------------------------

--
-- Table structure for table `questions6`
--

CREATE TABLE `questions6` (
  `id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `question` varchar(256) NOT NULL,
  `option1` varchar(256) NOT NULL,
  `option2` varchar(256) NOT NULL,
  `option3` varchar(256) NOT NULL,
  `option4` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `questions6`
--

INSERT INTO `questions6` (`id`, `qid`, `question`, `option1`, `option2`, `option3`, `option4`) VALUES
(1, 1, ' How often do you have Food?', 'Monthly or less', '2 to 4 times a month', '2 to 3 times a week', '4 or more times a week.'),
(2, 2, 'How many drinks containing alcohol do you have on a typical day when you are drinking?', '1 or 2', '3 or 4', '5 or 8', '10 or more'),
(3, 3, 'How often do you have six or more drinks on one occasion?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(4, 4, 'How often during the last year have you found that you were not able to stop drinking once you had started?', 'Less than monthly', 'Monthly', ' Weekly', 'Daily or almost daily'),
(5, 5, 'How often during the last year have you failed to do what was normally expected from you because of drinking?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(6, 6, 'How often during the last year have you needed a first drink in the morning to get yourself going after a heavy drinking session?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(7, 7, 'How often during the last year have you had a feeling of guilt or remorse after drinking?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(8, 8, ' How often during the last year have you been unable to remember what happened the night before because you had been drinking?', ' Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(9, 9, '  Have you or someone else been injured as a result of your drinking?', 'No', 'Can not Say', 'Yes, but not in the last year', 'Yes, during the last year'),
(10, 10, '  Has a relative or friend or a doctor or another health worker been concerned about your drinking or suggested you cut down...?', 'No', 'Can not Say', 'Yes, but not in the last year', 'Yes, but not in the last year');

-- --------------------------------------------------------

--
-- Table structure for table `questions7`
--

CREATE TABLE `questions7` (
  `id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `question` varchar(256) NOT NULL,
  `option1` varchar(256) NOT NULL,
  `option2` varchar(256) NOT NULL,
  `option3` varchar(256) NOT NULL,
  `option4` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `questions7`
--

INSERT INTO `questions7` (`id`, `qid`, `question`, `option1`, `option2`, `option3`, `option4`) VALUES
(1, 1, ' How often do you Play Video Games ?', 'Monthly or less', '2 to 4 times a month', '2 to 3 times a week', '4 or more times a week.'),
(2, 2, 'How many drinks containing alcohol do you have on a typical day when you are drinking?', '1 or 2', '3 or 4', '5 or 8', '10 or more'),
(3, 3, 'How often do you have six or more drinks on one occasion?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(4, 4, 'How often during the last year have you found that you were not able to stop drinking once you had started?', 'Less than monthly', 'Monthly', ' Weekly', 'Daily or almost daily'),
(5, 5, 'How often during the last year have you failed to do what was normally expected from you because of drinking?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(6, 6, 'How often during the last year have you needed a first drink in the morning to get yourself going after a heavy drinking session?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(7, 7, 'How often during the last year have you had a feeling of guilt or remorse after drinking?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(8, 8, ' How often during the last year have you been unable to remember what happened the night before because you had been drinking?', ' Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(9, 9, '  Have you or someone else been injured as a result of your drinking?', 'No', 'Can not Say', 'Yes, but not in the last year', 'Yes, during the last year'),
(10, 10, '  Has a relative or friend or a doctor or another health worker been concerned about your drinking or suggested you cut down...?', 'No', 'Can not Say', 'Yes, but not in the last year', 'Yes, but not in the last year');

-- --------------------------------------------------------

--
-- Table structure for table `questions8`
--

CREATE TABLE `questions8` (
  `id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `question` varchar(256) NOT NULL,
  `option1` varchar(256) NOT NULL,
  `option2` varchar(256) NOT NULL,
  `option3` varchar(256) NOT NULL,
  `option4` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `questions8`
--

INSERT INTO `questions8` (`id`, `qid`, `question`, `option1`, `option2`, `option3`, `option4`) VALUES
(1, 1, 'How often do you have a drink containing alcohol ?', 'Monthly or less', '2 to 4 times a month', '2 to 3 times a week', '4 or more times a week.'),
(2, 2, 'How many drinks containing alcohol do you have on a typical day when you are drinking?', '1 or 2', '3 or 4', '5 or 8', '10 or more'),
(3, 3, 'How often do you have six or more drinks on one occasion?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(4, 4, 'How often during the last year have you found that you were not able to stop drinking once you had started?', 'Less than monthly', 'Monthly', ' Weekly', 'Daily or almost daily'),
(5, 5, 'How often during the last year have you failed to do what was normally expected from you because of drinking?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(6, 6, 'How often during the last year have you needed a first drink in the morning to get yourself going after a heavy drinking session?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(7, 7, 'How often during the last year have you had a feeling of guilt or remorse after drinking?', 'Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(8, 8, ' How often during the last year have you been unable to remember what happened the night before because you had been drinking?', ' Less than monthly', 'Monthly', 'Weekly', 'Daily or almost daily'),
(9, 9, '  Have you or someone else been injured as a result of your drinking?', 'No', 'Can not Say', 'Yes, but not in the last year', 'Yes, during the last year'),
(10, 10, '  Has a relative or friend or a doctor or another health worker been concerned about your drinking or suggested you cut down...?', 'No', 'Can not Say', 'Yes, but not in the last year', 'Yes, but not in the last year');

-- --------------------------------------------------------

--
-- Table structure for table `test_score`
--

CREATE TABLE `test_score` (
  `id` int(11) NOT NULL,
  `uname` varchar(256) NOT NULL,
  `score` varchar(256) NOT NULL,
  `dot` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `test_score`
--

INSERT INTO `test_score` (`id`, `uname`, `score`, `dot`) VALUES
(1, 'tej', '10', '2020-03-23'),
(2, 'tej', '28', '2020-03-23'),
(3, 'tej', '29', '2020-03-23'),
(4, 'Akanksha', '30', '2020-03-26'),
(5, 'tej', '100', '2020-03-27'),
(6, 'tej', '95', '2020-03-27'),
(7, 'tej1', '97.5', '2020-05-31'),
(8, '', '55', '2020-05-31'),
(9, 'vedax@gmail.com', '45', '2024-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `email_id` varchar(256) NOT NULL,
  `age` int(255) NOT NULL,
  `uname` varchar(256) NOT NULL,
  `pswd` varchar(256) NOT NULL,
  `DOJ` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `email_id`, `age`, `uname`, `pswd`, `DOJ`) VALUES
(16, 'tejas yallal', '', 23, 'tej', '111', '2020-03-20'),
(18, 'tejas', 'tejasyallal21@gmail.com', 23, 'tej1', '111', '2020-03-24'),
(19, 'Akanksha', '', 30, 'ak', '123', '2020-03-24'),
(20, 'tejas', '', 23, 'ok', '111', '2020-03-24'),
(21, 'Akanksha Uchagaonakar', '', 30, 'Akanksha', '111', '2020-03-26'),
(22, 'suresh', '', 50, 'suri', '111', '2020-03-30'),
(23, 'Tejas Y', 'tejasyallal21@gmail.com', 23, 'tej8', '1234', '2020-05-31'),
(24, 'vedax123', 'vedax@gmail.com', 25, 'vedax@gmail.com', 'veda123', '2024-07-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `counselors`
--
ALTER TABLE `counselors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login1`
--
ALTER TABLE `login1`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions1`
--
ALTER TABLE `questions1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions2`
--
ALTER TABLE `questions2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions3`
--
ALTER TABLE `questions3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions4`
--
ALTER TABLE `questions4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions5`
--
ALTER TABLE `questions5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions6`
--
ALTER TABLE `questions6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions7`
--
ALTER TABLE `questions7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions8`
--
ALTER TABLE `questions8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_score`
--
ALTER TABLE `test_score`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `counselors`
--
ALTER TABLE `counselors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login1`
--
ALTER TABLE `login1`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `questions1`
--
ALTER TABLE `questions1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `questions2`
--
ALTER TABLE `questions2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `questions3`
--
ALTER TABLE `questions3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `questions4`
--
ALTER TABLE `questions4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `questions5`
--
ALTER TABLE `questions5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `questions6`
--
ALTER TABLE `questions6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `questions7`
--
ALTER TABLE `questions7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `questions8`
--
ALTER TABLE `questions8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `test_score`
--
ALTER TABLE `test_score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
