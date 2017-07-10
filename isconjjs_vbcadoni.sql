-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2017 at 07:50 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isconjjs_vbcadoni`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cart_user_id` int(11) NOT NULL,
  `cart_series_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `cart_user_id`, `cart_series_id`) VALUES
(20, 6, 2),
(21, 6, 3),
(24, 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_image` varchar(255) NOT NULL,
  `course_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_image`, `course_slug`) VALUES
(9, 'BANKING', 'Bank-Nationalization-Hindi.jpg', 'banking'),
(10, 'SSC', 'ssclogo.jpg', 'ssc'),
(11, 'IBPS', 'download.jpg', 'ibps'),
(12, 'INSURANCE', 'Insurance 2.jpg', 'insurance'),
(13, 'Non Banking', 'Our Logo1.tif', 'non-banking');

-- --------------------------------------------------------

--
-- Table structure for table `daily_updates`
--

CREATE TABLE `daily_updates` (
  `update_id` int(11) NOT NULL,
  `update_content` text NOT NULL,
  `edit_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_updates`
--

INSERT INTO `daily_updates` (`update_id`, `update_content`, `edit_time`) VALUES
(1, '<ol>\r\n	<li>\r\n	<p><strong>Lorem ipsum dolor sit amet, te quas clita sed, eu eam aliquid tincidunt, esse decore accusam et nam. Cu nonumes civibus voluptatibus est, paulo omnes</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>nam et, an ubique fuisset singulis duo. Eum ea dolorum legendos mnesarchum, natum pertinacia comprehensam per ne.</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Et alii habeo definitionem mea, sit error postea no.</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>In ignota alienum erroribus pro, pro et tamquam vituperata persequeris. Nostrud commune interesset mei at, viris tation accusamus te has. Eo</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>s augue aliquam principes eu, sale utamur vix at, eu per quando suscipit tractatos.</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Mel meis vituperata ne. Voluptua indoctum eam eu, cu quem urbanitas pro.</strong></p>\r\n	</li>\r\n</ol>\r\n', '2017-05-23 04:47:20'),
(2, '<p><strong>Lorem ipsum dolor sit amet, te quas clita sed, eu eam aliquid tincidunt, esse decore accusam et nam. Cu nonumes civibus voluptatibus est, paulo omnes nam et, an ubique fuisset singulis duo. Eum ea dolorum legendos mnesarchum, natum pertinacia comprehensam per ne. Et alii habeo definitionem mea, sit error postea no.</strong></p>\r\n\r\n<p><strong>In ignota alienum erroribus pro, pro et tamquam vituperata persequeris. Nostrud commune interesset mei at, viris tation accusamus te has. Eos augue aliquam principes eu, sale utamur vix at, eu per quando suscipit tractatos. Mel meis vituperata ne. Voluptua indoctum eam eu, cu quem urbanitas pro.</strong><br />\r\n&nbsp;</p>\r\n', '2017-05-23 04:47:55');

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

CREATE TABLE `ques` (
  `q_id` int(11) NOT NULL,
  `q_index` int(250) NOT NULL,
  `q_passage` text NOT NULL,
  `q_name` text NOT NULL,
  `q_image` varchar(100) NOT NULL,
  `q_optiona` text NOT NULL,
  `q_optiona_img` varchar(100) NOT NULL,
  `q_optionb` text NOT NULL,
  `q_optionb_img` varchar(100) NOT NULL,
  `q_optionc` text NOT NULL,
  `q_optionc_img` varchar(100) NOT NULL,
  `q_optiond` text NOT NULL,
  `q_optiond_img` varchar(100) NOT NULL,
  `q_optione` text NOT NULL,
  `q_optione_img` varchar(100) NOT NULL,
  `q_type` char(100) NOT NULL,
  `q_answer` char(20) NOT NULL,
  `q_paper_id` int(11) NOT NULL,
  `q_paper_section` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`q_id`, `q_index`, `q_passage`, `q_name`, `q_image`, `q_optiona`, `q_optiona_img`, `q_optionb`, `q_optionb_img`, `q_optionc`, `q_optionc_img`, `q_optiond`, `q_optiond_img`, `q_optione`, `q_optione_img`, `q_type`, `q_answer`, `q_paper_id`, `q_paper_section`, `timestamp`) VALUES
(10, 1, '', 'Mindfire Solutions started in October of 1999, with the purpose of providing expert software services globally, and has steadily grown to its 1000-seat facilities at 2 engineering centers.', '', 'HTML', '', 'CSS', '', 'AJAX', '', 'JAVASCRipt', '', 'PHP', '', '', 'd', 1, 1, '2017-06-10 16:31:46'),
(11, 2, '', 'We are clear in our vision of building a software engineering powerhouse, and we do not spend time and energy in activities which are not our core competence.', '', 'Codeigniter', '', 'HTML', '', 'AJAX', '', 'JSS', '', 'Hypertext Preprocessor', '', '', 'b', 1, 1, '2017-06-10 16:31:46'),
(12, 3, '<p>sum dolor sit amet, pericula omittantur sea ne. Te fuisset volutpat quo, in everti labores delicatissimi mea, at nam liber percipit similique. Ei alii dolorum admodum eos, ut mel paulo postea qualisque. Percipitur sadipscing at mea, congue soluta iuvaret sit ne.</p>\r\n\r\n<p>Suas nibh cu sed, debet scripta oporteat no qui. Te ius melius scripta honestatis. Sed mundi utamur perfecto te, facete consectetuer ex usu. Discere docendi eum ea, cum cu eirmod quaeque copiosae. Vix cu assum civibus. Nemore albucius ut vel. Est an quis delenit legendos, sit dicant tritani iracundia an.</p>\r\n', 'Thus we stand here today, a focused group of dedicated people, an organization that proudly chose to stick to its knitting!', '', 'Css', '', 'Ajax', '', 'PHP', '', 'YII', '', 'Laravel', '', '', 'a', 1, 1, '2017-06-10 16:31:46'),
(13, 4, '<p>&nbsp;</p>\r\n\r\n<p>Soon after we started in 1999, there was the huge hullabaloo of Y2K which fizzled out. We got a few projects and worked diligently, taking each day as it came while keeping an eye on the future.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Then the dot-com bust and 9/11 happened. The IT/software industry in India saw massive slowdown, and a number of companies shut down. We trudged on.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>We stabilized and started growing in the mid-2000s again. Having survived the early-2000 downturn, we were determined to not let future events affect us. When the 2009 recession hit, we came through unscathed.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>From a position of doing any</p>\r\n', 'Thus we stand here today, a focused group of dedicated people, an organization that proudly chose to stick to its knitting!', '', 'HTML', '', 'CSs', '', 'AJAX', '', 'Jquery', '', 'JS', '', '', 'e', 1, 1, '2017-06-10 16:31:46'),
(14, 5, '<p>Lorem ipsum dolor sit amet, eam summo delenit ad, pro honestatis contentiones in, meis propriae deterruisset quo ea. Sit ludus saepe ei. Ex nec vitae doming option. Quod molestiae mei an, falli nobis molestiae ut vix. Id rebum apeirian ius.</p>\r\n\r\n<p>Vix facer solet liberavisse te, sale harum impetus ut usu. Ne eius harum mei. Qui omnis augue graeci id, sit ea minim saepe invenire, commodo regione in mei. Cu saperet labores pri, dissentiet signiferumque cu eam.</p>\r\n', '', '', ', vocent equidem', '', ', vocent equidem', '', 'v', '', ', vocent equidem', '', ', vocent equidem', '', '', 'b', 1, 1, '2017-06-10 16:31:46'),
(15, 6, '<p>Lorem ipsum dolor sit amet, eam summo delenit ad, pro honestatis contentiones in, meis propriae deterruisset quo ea. Sit ludus saepe ei. Ex nec vitae doming option. Quod molestiae mei an, falli nobis molestiae ut vix. Id rebum apeirian ius.</p>\r\n\r\n<p>Vix facer solet liberavisse te, sale harum impetus ut usu. Ne eius harum mei. Qui omnis augue graeci id, sit ea minim saepe invenire, commodo regione in mei. Cu saperet labores pri, dissentiet signiferumque cu eam.</p>\r\n', '', '', ', vocent equidem', '', ', vocent equidem', '', ', vocent equidem', '', ', vocent equidem', '', ', vocent equidem', '', '', 'c', 1, 1, '2017-06-10 16:31:46'),
(16, 7, '<p>Lorem ipsum dolor sit amet, eam summo delenit ad, pro honestatis contentiones in, meis propriae deterruisset quo ea. Sit ludus saepe ei. Ex nec vitae doming option. Quod molestiae mei an, falli nobis molestiae ut vix. Id rebum apeirian ius.</p>\r\n\r\n<p>Vix facer solet liberavisse te, sale harum impetus ut usu. Ne eius harum mei. Qui omnis augue graeci id, sit ea minim saepe invenire, commodo regione in mei. Cu saperet labores pri, dissentiet signiferumque cu eam.</p>\r\n', '', '', ', vocent equidem', '', ', vocent equidem', '', 'v', '', ', vocent equidem', '', ', vocent equidem', '', '', 'b', 1, 1, '2017-06-10 16:31:46'),
(17, 8, '<p>Lorem ipsum dolor sit amet, eam summo delenit ad, pro honestatis contentiones in, meis propriae deterruisset quo ea. Sit ludus saepe ei. Ex nec vitae doming option. Quod molestiae mei an, falli nobis molestiae ut vix. Id rebum apeirian ius.</p>\r\n\r\n<p>Vix facer solet liberavisse te, sale harum impetus ut usu. Ne eius harum mei. Qui omnis augue graeci id, sit ea minim saepe invenire, commodo regione in mei. Cu saperet labores pri, dissentiet signiferumque cu eam.</p>\r\n', '', '', ', vocent equidem', '', ', vocent equidem', '', ', vocent equidem', '', ', vocent equidem', '', ', vocent equidem', '', '', 'c', 1, 1, '2017-06-10 16:31:46'),
(18, 9, '<p>Lorem ipsum dolor sit amet, eam summo delenit ad, pro honestatis contentiones in, meis propriae deterruisset quo ea. Sit ludus saepe ei. Ex nec vitae doming option. Quod molestiae mei an, falli nobis molestiae ut vix. Id rebum apeirian ius.</p>\r\n\r\n<p>Vix facer solet liberavisse te, sale harum impetus ut usu. Ne eius harum mei. Qui omnis augue graeci id, sit ea minim saepe invenire, commodo regione in mei. Cu saperet labores pri, dissentiet signiferumque cu eam.<br />\r\n&nbsp;</p>\r\n', 'saepe invenire, commodo regione in mei. Cu saperet labores pri, dissentiet signiferumque cu eam.', '', 'saepe invenire, commodo regione in mei.  ', '', 'signiferumque cu eam.', '', 'ntiet signiferumque cu eam.', '', 'saepe invenire, c', '', 'saepe invenire, commodo regione in mei. Cu saperet labo', '', '', 'b', 1, 1, '2017-06-10 16:31:46'),
(19, 10, '<p>Lorem ipsum dolor sit amet, eam summo delenit ad, pro honestatis contentiones in, meis propriae deterruisset quo ea. Sit ludus saepe ei. Ex nec vitae doming option. Quod molestiae mei an, falli nobis molestiae ut vix. Id rebum apeirian ius.</p>\r\n\r\n<p>Vix facer solet liberavisse te, sale harum impetus ut usu. Ne eius harum mei. Qui omnis augue graeci id, sit ea minim saepe invenire, commodo regione in mei. Cu saperet labores pri, dissentiet signiferumque cu eam.<br />\r\n&nbsp;</p>\r\n', 'saepe invenire, commodo regione in mei. Cu saperet labores pri, dissentiet signiferumque cu eam.', '', 'saepe invenire, commodo regione in mei', '', 'saepe invenire, commodo regione in', '', 'saepe invenire, commodo regione in mei. Cu sap', '', 'saepe invenire, commodo regione in mei. Cu saperet labores pri, ', '', ' cu eam.', '', '', 'c', 1, 1, '2017-06-10 16:31:46'),
(22, 11, '', 'Add Questions for Test Papr 7 Add Questions for Test Papr 7 Add Questions for Test Papr 7', '', 'Add Questions for Test Papr 7', '', 'Add Questions for Test Papr 7', '', 'Add Questions for Test Papr 7', '', 'Add Questions for Test Papr 7', '', 'Add Questions for Test Papr 7', '', '', 'b', 1, 2, '2017-06-10 16:31:46'),
(23, 12, '', 'Add Questions for Test Papr 7Add Questions for Test Papr 7Add Questions for Test Papr 7', '', 'v', '', 'Add Questions for Test Papr 7', '', 'Add Questions for Test Papr 7', '', 'Add Questions for Test Papr 7', '', 'Add Questions for Test Papr 7', '', '', 'a', 1, 2, '2017-06-10 16:31:46'),
(24, 13, '', 'Add Questions for Test Papr 7Add Questions for Test Papr 7Add Questions for Test Papr 7', '', 'Add Questions for Test Papr 7', '', 'Add Questions for Test Papr 7', '', 'Add Questions for Test Papr 7', '', 'Add Questions for Test Papr 7', '', 'v', '', '', 'a', 1, 2, '2017-06-10 16:31:46'),
(25, 14, '', 'Add Questions for Test Papr 7Add Questions for Test Papr 7Add Questions for Test Papr 7Add Questions for Test Papr 7', '', 'Add Questions for Test Papr 7', '', 'Add Questions for Test Papr 7', '', 'Add Questions for Test Papr 7', '', 'Add Questions for Test Papr 7', '', 'Add Questions for Test Papr 7', '', '', 'a', 1, 2, '2017-06-10 16:31:46'),
(26, 15, '', 'Add Questions for Test Papr 7', '', 'Add Questions for Test Papr 7', '', 'Add Questions for Test Papr 7', '', 'Add Questions for Test Papr 7', '', 'Add Questions for Test Papr 7', '', 'Add Questions for Test Papr 7', '', '', 'a', 1, 2, '2017-06-10 16:31:46'),
(27, 16, '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dumm', '', 'unknown printer', '', 'reader will be', '', 'as opposed', '', 'and a search', '', 'unknown printer', '', '', 'a', 1, 2, '2017-06-10 16:31:46'),
(28, 17, '', 'default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infa', '', ' a search for ''lor ', '', ' web sites still in their infa', '', 'default model tex ', '', ' xt, and a search for ''lore ', '', ' any web sites still ', '', '', 'd', 1, 2, '2017-06-10 16:31:46'),
(29, 18, '', 'Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is th', '', ' f model sentence structures ', '', 'Latin words, combined w ', '', 'Latin words, combined with ', '', 'Latin words, combi ', '', ' Lorem Ip ks reaso ', '', '', 'c', 1, 2, '2017-06-10 16:31:46'),
(30, 19, '', ' ful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is th', '', 'Latin words, comb ', '', ' h a handful of  ', '', 'Latin words, com ur ', '', ' asonable. The generated Lorem ', '', 'Latin words, combine ', '', '', 'a', 1, 2, '2017-06-10 16:31:46'),
(32, 20, '', 'qqq2222hhhhhhhhhhhhhhhhhhhh', '', 'q1', '', 'q2', '', 'q3', '', 'q4', '', 'q5', '', '', 'a', 1, 2, '2017-06-11 10:01:37'),
(33, 21, '', 'QQQQ2222', '', 'Q1', '', 'Q2', '', 'Q3', '', 'Q4', '', 'Q5', '', '', 'a', 1, 3, '2017-06-11 17:05:14'),
(34, 22, '', 'QQQQ2222', '', 'Q1', '', 'Q2', '', 'Q3', '', 'Q4', '', 'Q5', '', '', 'a', 1, 3, '2017-06-11 17:05:51'),
(35, 23, '', 'gjhgj', '', 'jhgjhgj', '', 'gjhgjhg', '', 'jgjhgjhg', '', 'jgjhgjhg', '', 'jgjhgjhg', '', '', 'c', 1, 3, '2017-06-13 17:19:21'),
(36, 1, '', 'jhgjh', 'img/questions/36/Q36_que_img.jpg', 'jh', '', 'jhg', 'img/questions/36/Q36_option_b_img.jpg', 'jhgj', '', 'hgj', '', 'hgjgj', '', '', 'a', 2, 1, '2017-06-28 16:24:18'),
(37, 2, '', 'jh', '', 'gjh', '', 'gj', '', 'jhg', 'img/questions/37/Q37_option_c_img.jpg', 'gjh', '', 'hgj', '', '', 'a', 2, 1, '2017-06-28 16:46:23');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(25) NOT NULL,
  `user_id` int(25) NOT NULL,
  `paper_id` int(25) NOT NULL,
  `answer` varchar(5000) NOT NULL,
  `correct_ans` int(250) NOT NULL,
  `wrong_ans` int(250) NOT NULL,
  `time_taken` time(6) NOT NULL,
  `total_que` int(250) NOT NULL,
  `attempted_que` int(250) NOT NULL,
  `completed` tinyint(1) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `user_id`, `paper_id`, `answer`, `correct_ans`, `wrong_ans`, `time_taken`, `total_que`, `attempted_que`, `completed`, `timestamp`) VALUES
(4, 5, 1, '[{"q_id":"10","answer":"b","result":false,"review":false,"status":"answered"}]', 0, 1, '00:00:00.016666', 23, 1, 0, '2017-06-18 10:28:43'),
(5, 5, 1, '[{"q_id":"10","answer":"a","result":false,"review":false,"status":"answered"},{"q_id":"11","answer":"c","result":false,"review":true,"status":"answered and forReview"},{"q_id":"12","answer":"b","result":false,"review":false,"status":"answered"}]', 0, 3, '00:00:00.166666', 23, 3, 0, '2017-06-18 10:31:20'),
(6, 5, 1, '[{"q_id":"10","answer":"b","result":false,"review":false,"status":"answered"},{"q_id":"11","answer":"a","result":false,"review":false,"status":"answered"}]', 0, 2, '00:00:10.000000', 23, 2, 0, '2017-06-18 10:44:37'),
(7, 5, 1, '[{"q_id":"10","answer":"b","result":false,"review":false,"status":"answered"},{"q_id":"11","answer":"d","result":false,"review":false,"status":"answered"},{"q_id":"12","answer":"d","result":false,"review":false,"status":"answered"}]', 0, 3, '00:00:00.166666', 23, 3, 0, '2017-06-18 11:12:08'),
(8, 5, 1, '[{"q_id":"10","answer":"a","result":false,"review":false,"status":"answered"},{"q_id":"11","answer":"b","result":true,"review":false,"status":"answered"},{"q_id":"12","answer":"b","result":false,"review":false,"status":"answered"}]', 1, 2, '00:00:00.133333', 23, 3, 0, '2017-06-18 11:13:30'),
(9, 5, 1, '[{"q_id":"10","result":false,"review":false,"status":"not answered"},{"q_id":"11","answer":"b","result":true,"review":false,"status":"answered"}]', 1, 1, '00:00:10.000000', 23, 2, 0, '2017-06-18 11:21:18'),
(10, 5, 1, '[{"q_id":"10","answer":"a","result":false,"review":false,"status":"answered"}]', 0, 1, '00:00:00.366666', 23, 1, 0, '2017-06-18 11:32:02'),
(11, 5, 1, '[{"q_id":"10","answer":"a","result":false,"review":false,"status":"answered"},{"q_id":"11","answer":"b","result":true,"review":false,"status":"answered"},{"q_id":"12","result":false,"review":true,"status":"forReview"}]', 1, 2, '00:00:00.533333', 23, 3, 0, '2017-06-18 11:38:07'),
(12, 5, 1, '[{"q_id":"10","answer":"e","result":false,"review":false,"status":"answered"},{"q_id":"11","answer":"c","result":false,"review":false,"status":"answered"},{"q_id":"12","answer":"c","result":false,"review":false,"status":"answered"},{"q_id":"13","answer":"c","result":false,"review":false,"status":"answered"},{"q_id":"14","answer":"c","result":false,"review":false,"status":"answered"},{"q_id":"15","answer":"c","result":true,"review":false,"status":"answered"},{"q_id":"16","answer":"c","result":false,"review":false,"status":"answered"},{"q_id":"17","answer":"c","result":true,"review":false,"status":"answered"},{"q_id":"18","answer":"c","result":false,"review":false,"status":"answered"},{"q_id":"19","answer":"d","result":false,"review":false,"status":"answered"}]', 2, 8, '00:00:10.000000', 23, 10, 0, '2017-06-18 16:44:29'),
(13, 5, 1, '[]', 0, 0, '00:00:10.000000', 23, 0, 0, '2017-06-18 17:07:06'),
(14, 5, 1, '[]', 0, 0, '00:00:10.000000', 23, 0, 0, '2017-06-18 17:11:48'),
(15, 5, 1, '[]', 0, 0, '00:00:00.200000', 23, 0, 0, '2017-06-18 17:31:35'),
(16, 5, 1, '[]', 0, 0, '00:00:00.400000', 23, 0, 0, '2017-06-18 17:34:20'),
(17, 5, 1, '[]', 0, 0, '00:00:00.150000', 23, 0, 0, '2017-06-18 17:40:54');

-- --------------------------------------------------------

--
-- Table structure for table `test_paper`
--

CREATE TABLE `test_paper` (
  `paper_id` int(11) NOT NULL,
  `paper_name` varchar(255) NOT NULL,
  `paper_slug` varchar(255) NOT NULL,
  `paper_image` varchar(255) NOT NULL,
  `paper_type` varchar(255) NOT NULL,
  `paper_section_1` varchar(200) NOT NULL,
  `paper_section_1_que` int(11) NOT NULL,
  `paper_section_2` varchar(200) NOT NULL,
  `paper_section_2_que` int(11) NOT NULL,
  `paper_section_3` varchar(200) NOT NULL,
  `paper_section_3_que` int(11) NOT NULL,
  `paper_section_4` varchar(200) NOT NULL,
  `paper_section_4_que` int(11) NOT NULL,
  `paper_section_5` varchar(200) NOT NULL,
  `paper_section_5_que` int(11) NOT NULL,
  `paper_num_que` int(11) NOT NULL,
  `paper_duration` int(11) NOT NULL,
  `paper_instruction` text NOT NULL,
  `paper_series_id` int(11) NOT NULL,
  `paper_course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_paper`
--

INSERT INTO `test_paper` (`paper_id`, `paper_name`, `paper_slug`, `paper_image`, `paper_type`, `paper_section_1`, `paper_section_1_que`, `paper_section_2`, `paper_section_2_que`, `paper_section_3`, `paper_section_3_que`, `paper_section_4`, `paper_section_4_que`, `paper_section_5`, `paper_section_5_que`, `paper_num_que`, `paper_duration`, `paper_instruction`, `paper_series_id`, `paper_course_id`) VALUES
(1, 'Test paper 1', 'test-paper-1', 'Brass-Multi-Point-Earthing-Rod-MEA010-736.jpg', 'Simple Question Answer', 'section1', 10, 'section2', 10, 'section', 3, '', 0, '', 0, 23, 10, '<p>In recent years we have all been exposed to dire media reports concerning the impending demise of global coal and oil reserves, but the depletion of another key non-renewable resource continues without receiving much press at all. Helium &ndash; an inert, odourless, monatomic element known to lay people as the substance that makes balloons float and voices squeak when inhaled &ndash; could be gone from this planet within a generation.</p>\r\n', 3, 9),
(2, 'abcd', 'abcd', 'map_home.jpg', 'Simple Question Answer', 'sec-1', 60, 'sec-1', 30, '', 0, '', 0, '', 0, 90, 100, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n', 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `test_series`
--

CREATE TABLE `test_series` (
  `series_id` int(11) NOT NULL,
  `series_name` text NOT NULL,
  `series_popular` int(11) NOT NULL,
  `series_image` varchar(255) NOT NULL,
  `series_actual_price` varchar(255) NOT NULL,
  `series_type` varchar(30) NOT NULL,
  `series_discount_price` varchar(255) NOT NULL,
  `series_body` text NOT NULL,
  `series_slug` text NOT NULL,
  `edit_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `series_course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_series`
--

INSERT INTO `test_series` (`series_id`, `series_name`, `series_popular`, `series_image`, `series_actual_price`, `series_type`, `series_discount_price`, `series_body`, `series_slug`, `edit_time`, `series_course_id`) VALUES
(2, 'SSC CGL TIER I 2017 Online Test Series', 0, 'SSC_Topper_Test_Series.png', '', 'PRACTISE', '', '<p>Joined:&nbsp;13/05/2014</p>\r\n\r\n<p>Posts:&nbsp;4</p>\r\n\r\n<p><a href="http://ckeditor.com/comment/131979#comment-131979">The problem with that is that</a></p>\r\n\r\n<p>The problem with that is that ALL of the content is then encoded including the actual HTML used to format the content in ckeditor.&nbsp; I may not have made clear that the code snippets will appear within a fully formatted collection of text and images and so if I use htmlspecialchars I lose the layout..</p>\r\n\r\n<p>Wed, 05/14/2014 - 08:56</p>\r\n\r\n<p><a href="http://ckeditor.com/comment/131980#comment-131980">#4</a></p>\r\n\r\n<p><a href="http://ckeditor.com/users/reinmar">reinmar</a></p>\r\n\r\n<p><a href="http://ckeditor.com/users/reinmar"><img alt="reinmar''s picture" src="http://www.gravatar.com/avatar/ad95417b7f537fcd291736935164470f.jpg?d=http%3A//c.cksource.com/a/1/img/default_avatar.png&amp;s=83&amp;r=G" /></a></p>\r\n\r\n<p>Joined:&nbsp;24/08/2012</p>\r\n\r\n<p>Posts:&nbsp;647</p>\r\n\r\n<p><a href="http://ckeditor.com/comment/131980#comment-131980">No, you&#39;ll not lose the</a></p>\r\n\r\n<p>No, you&#39;ll not lose the layout (unless you have a bug somewhere else). By encoding content before printing it to textarea you&#39;ll produce this:</p>\r\n\r\n<pre>\r\n&amp;lt;p&amp;gt;&amp;amp;lt;?php echo &quot;me&quot;; ?&amp;amp;gt;&amp;lt;/p&amp;gt;\r\n&amp;lt;p&amp;gt;&amp;amp;lt;p&amp;amp;gt;Hello&amp;amp;lt;/p&amp;amp;gt;&amp;lt;/p&amp;gt;</pre>\r\n\r\n<p>Note that the real &lt;p&gt; tag has been transformed to &amp;lt;p&amp;gt; so will be read as &lt;p&gt;. But the &lt;p&gt; which was already encoded will be transformed to&nbsp;&amp;amp;lt;p&amp;amp;gt;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="http://twitter.com/reinmarpl">Piotrek (Reinmar) Koszuli?ski</a><br />\r\nCKEditor JavaScript Developer<br />\r\n--<br />\r\nCKSource -&nbsp;<a href="http://cksource.com/">http://cksource.com</a><br />\r\n--</p>\r\n', 'ssc-cgl-tier-i-2017-online-test-series', '2017-06-13 17:34:05', 9),
(3, 'Banking Online Test Series Complete Kit', 1, 'Bank_Comt_ KIT_(Extended).png', '', 'PRACTISE', '', '<p>um.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', 'banking-online-test-series-complete-kit', '2017-05-19 02:26:45', 9),
(4, 'SSC CGL 2017 All Rounder Package', 1, 'Bank-Nationalization-Hindi.jpg', '', 'PRACTISE', '', '<p>&lt;p&gt;&amp;lt;p&amp;gt;&amp;amp;lt;p&amp;amp;gt;&amp;amp;amp;lt;p&amp;amp;amp;gt;ADDA 247 is proud to announce a comprehensive online Test Series for&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;strong&amp;amp;amp;gt;SSC CGL 2017 exam&amp;amp;amp;lt;/strong&amp;amp;amp;gt;. The test series are designed as per the&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;strong&amp;amp;amp;gt;latest pattern&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;amp;nbsp;of the exam, and aims to provide maximum benefits to aspirants in terms of preparation. Desire is the key to motivation, but it&amp;amp;amp;amp;#39;s determination and commitment to an unrelenting pursuit of your goal - a commitment to excellence - that will enable you to attain the success you seek. If you don&amp;amp;amp;amp;rsquo;t start now you will be left behind in this race.&amp;amp;amp;lt;/p&amp;amp;amp;gt; &amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;/p&amp;amp;amp;gt; &amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;SALIENT FEATURES &amp;amp;amp;amp;ndash;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt; &amp;amp;amp;lt;ul&amp;amp;amp;gt; &amp;amp;amp;lt;li&amp;amp;amp;gt;BASED ON LATEST PATTERN&amp;amp;amp;lt;/li&amp;amp;amp;gt; &amp;amp;amp;lt;li&amp;amp;amp;gt;BI-LINGUAL (BOTH ENGLISH AND HINDI)&amp;amp;amp;lt;/li&amp;amp;amp;gt; &amp;amp;amp;lt;li&amp;amp;amp;gt;DETAILED SOLUTIONS&amp;amp;amp;lt;/li&amp;amp;amp;gt; &amp;amp;amp;lt;li&amp;amp;amp;gt;AVAILABLE BOTH IN APP AND WEBSITE&amp;amp;amp;lt;/li&amp;amp;amp;gt; &amp;amp;amp;lt;li&amp;amp;amp;gt;CAN BE ACCESSED 24 X 7&amp;amp;amp;lt;/li&amp;amp;amp;gt; &amp;amp;amp;lt;/ul&amp;amp;amp;gt; &amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;/p&amp;amp;amp;gt; &amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;ABOUT THE PACKAGE-&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt; &amp;amp;amp;lt;p&amp;amp;amp;gt;Our package consists of&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;strong&amp;amp;amp;gt;350 + TESTS&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;Our test series is based on the&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;strong&amp;amp;amp;gt;latest pattern&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;amp;nbsp;and is prepared meticulously by ADDA 247 team in association with&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;strong&amp;amp;amp;gt;Career Power&amp;amp;amp;lt;/strong&amp;amp;amp;gt;. We have left no stone unturned to provide you with the test series of every format possible.&amp;amp;amp;lt;/p&amp;amp;amp;gt; &amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;/p&amp;amp;amp;gt; &amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;*MOCK DESCRIPTION (350 + TOTAL TESTS)&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt; &amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;/p&amp;amp;amp;gt; &amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;/p&amp;amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;&amp;lt;/p&amp;gt;&lt;/p&gt;</p>\n', 'ssc-cgl-2017-all-rounder-package', '2017-06-14 16:34:15', 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_mobile` varchar(20) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_status` varchar(25) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_mobile`, `user_password`, `user_status`, `timestamp`) VALUES
(5, 'Paurush Ankit', 'paurush.oph@gmail.com', '7531855396', 'd7724ce2cf11da74f959ae3dedbe1e44', 'approved', '2017-07-01 17:07:28.066340'),
(6, 'Paurush Ankit', 'test@gmail.com', '7531855396', 'd7724ce2cf11da74f959ae3dedbe1e44', '', '2017-06-29 17:19:17.873722'),
(7, 'Paurush Ankit', 'test@gmail.comaa', '7531855396', 'd7724ce2cf11da74f959ae3dedbe1e44', '', '2017-06-29 17:19:17.873722'),
(8, 'ATUL KUMAR DIVEDI', 'atul.divedi88@gmail.com', '8896443101', 'e10adc3949ba59abbe56e057f20f883e', '', '2017-06-29 17:19:17.873722');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `daily_updates`
--
ALTER TABLE `daily_updates`
  ADD PRIMARY KEY (`update_id`);

--
-- Indexes for table `ques`
--
ALTER TABLE `ques`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_paper`
--
ALTER TABLE `test_paper`
  ADD PRIMARY KEY (`paper_id`);

--
-- Indexes for table `test_series`
--
ALTER TABLE `test_series`
  ADD PRIMARY KEY (`series_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `daily_updates`
--
ALTER TABLE `daily_updates`
  MODIFY `update_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ques`
--
ALTER TABLE `ques`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `test_paper`
--
ALTER TABLE `test_paper`
  MODIFY `paper_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `test_series`
--
ALTER TABLE `test_series`
  MODIFY `series_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
