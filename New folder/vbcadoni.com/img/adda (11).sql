-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2017 at 04:10 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `adda`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
`cart_id` int(11) NOT NULL,
  `cart_user_id` int(11) NOT NULL,
  `cart_series_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `cart_user_id`, `cart_series_id`) VALUES
(20, 6, 2),
(21, 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
`course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_image` varchar(255) NOT NULL,
  `course_slug` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_image`, `course_slug`) VALUES
(9, 'BANKING', 'Bank-Nationalization-Hindi.jpg', 'banking'),
(10, 'SSC', 'ssclogo.jpg', 'ssc'),
(11, 'IBPS', 'download.jpg', 'ibps'),
(12, 'INSURANCE', 'Insurance 2.jpg', 'insurance');

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

CREATE TABLE IF NOT EXISTS `ques` (
`q_id` int(11) NOT NULL,
  `q_passage` text NOT NULL,
  `q_name` text NOT NULL,
  `q_optiona` text NOT NULL,
  `q_optionb` text NOT NULL,
  `q_optionc` text NOT NULL,
  `q_optiond` text NOT NULL,
  `q_optione` text NOT NULL,
  `q_type` char(100) NOT NULL,
  `q_answer` char(20) NOT NULL,
  `q_paper_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`q_id`, `q_passage`, `q_name`, `q_optiona`, `q_optionb`, `q_optionc`, `q_optiond`, `q_optione`, `q_type`, `q_answer`, `q_paper_id`) VALUES
(10, '', 'Mindfire Solutions started in October of 1999, with the purpose of providing expert software services globally, and has steadily grown to its 1000-seat facilities at 2 engineering centers.', 'HTML', 'CSS', 'AJAX', 'JAVASCRipt', 'PHP', '', 'd', 10),
(11, '', 'We are clear in our vision of building a software engineering powerhouse, and we do not spend time and energy in activities which are not our core competence.', 'Codeigniter', 'HTML', 'AJAX', 'JSS', 'Hypertext Preprocessor', '', 'b', 10),
(12, '<p>sum dolor sit amet, pericula omittantur sea ne. Te fuisset volutpat quo, in everti labores delicatissimi mea, at nam liber percipit similique. Ei alii dolorum admodum eos, ut mel paulo postea qualisque. Percipitur sadipscing at mea, congue soluta iuvaret sit ne.</p>\r\n\r\n<p>Suas nibh cu sed, debet scripta oporteat no qui. Te ius melius scripta honestatis. Sed mundi utamur perfecto te, facete consectetuer ex usu. Discere docendi eum ea, cum cu eirmod quaeque copiosae. Vix cu assum civibus. Nemore albucius ut vel. Est an quis delenit legendos, sit dicant tritani iracundia an.</p>\r\n', 'Thus we stand here today, a focused group of dedicated people, an organization that proudly chose to stick to its knitting!', 'Css', 'Ajax', 'PHP', 'YII', 'Laravel', '', 'a', 11),
(13, '<p>&nbsp;</p>\r\n\r\n<p>Soon after we started in 1999, there was the huge hullabaloo of Y2K which fizzled out. We got a few projects and worked diligently, taking each day as it came while keeping an eye on the future.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Then the dot-com bust and 9/11 happened. The IT/software industry in India saw massive slowdown, and a number of companies shut down. We trudged on.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>We stabilized and started growing in the mid-2000s again. Having survived the early-2000 downturn, we were determined to not let future events affect us. When the 2009 recession hit, we came through unscathed.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>From a position of doing any</p>\r\n', 'Thus we stand here today, a focused group of dedicated people, an organization that proudly chose to stick to its knitting!', 'HTML', 'CSs', 'AJAX', 'Jquery', 'JS', '', 'e', 11),
(14, '<p>Lorem ipsum dolor sit amet, eam summo delenit ad, pro honestatis contentiones in, meis propriae deterruisset quo ea. Sit ludus saepe ei. Ex nec vitae doming option. Quod molestiae mei an, falli nobis molestiae ut vix. Id rebum apeirian ius.</p>\r\n\r\n<p>Vix facer solet liberavisse te, sale harum impetus ut usu. Ne eius harum mei. Qui omnis augue graeci id, sit ea minim saepe invenire, commodo regione in mei. Cu saperet labores pri, dissentiet signiferumque cu eam.</p>\r\n', '', ', vocent equidem', ', vocent equidem', 'v', ', vocent equidem', ', vocent equidem', '', 'b', 14),
(15, '<p>Lorem ipsum dolor sit amet, eam summo delenit ad, pro honestatis contentiones in, meis propriae deterruisset quo ea. Sit ludus saepe ei. Ex nec vitae doming option. Quod molestiae mei an, falli nobis molestiae ut vix. Id rebum apeirian ius.</p>\r\n\r\n<p>Vix facer solet liberavisse te, sale harum impetus ut usu. Ne eius harum mei. Qui omnis augue graeci id, sit ea minim saepe invenire, commodo regione in mei. Cu saperet labores pri, dissentiet signiferumque cu eam.</p>\r\n', '', ', vocent equidem', ', vocent equidem', ', vocent equidem', ', vocent equidem', ', vocent equidem', '', 'c', 14),
(16, '<p>Lorem ipsum dolor sit amet, eam summo delenit ad, pro honestatis contentiones in, meis propriae deterruisset quo ea. Sit ludus saepe ei. Ex nec vitae doming option. Quod molestiae mei an, falli nobis molestiae ut vix. Id rebum apeirian ius.</p>\r\n\r\n<p>Vix facer solet liberavisse te, sale harum impetus ut usu. Ne eius harum mei. Qui omnis augue graeci id, sit ea minim saepe invenire, commodo regione in mei. Cu saperet labores pri, dissentiet signiferumque cu eam.</p>\r\n', '', ', vocent equidem', ', vocent equidem', 'v', ', vocent equidem', ', vocent equidem', '', 'b', 14),
(17, '<p>Lorem ipsum dolor sit amet, eam summo delenit ad, pro honestatis contentiones in, meis propriae deterruisset quo ea. Sit ludus saepe ei. Ex nec vitae doming option. Quod molestiae mei an, falli nobis molestiae ut vix. Id rebum apeirian ius.</p>\r\n\r\n<p>Vix facer solet liberavisse te, sale harum impetus ut usu. Ne eius harum mei. Qui omnis augue graeci id, sit ea minim saepe invenire, commodo regione in mei. Cu saperet labores pri, dissentiet signiferumque cu eam.</p>\r\n', '', ', vocent equidem', ', vocent equidem', ', vocent equidem', ', vocent equidem', ', vocent equidem', '', 'c', 14),
(18, '<p>Lorem ipsum dolor sit amet, eam summo delenit ad, pro honestatis contentiones in, meis propriae deterruisset quo ea. Sit ludus saepe ei. Ex nec vitae doming option. Quod molestiae mei an, falli nobis molestiae ut vix. Id rebum apeirian ius.</p>\r\n\r\n<p>Vix facer solet liberavisse te, sale harum impetus ut usu. Ne eius harum mei. Qui omnis augue graeci id, sit ea minim saepe invenire, commodo regione in mei. Cu saperet labores pri, dissentiet signiferumque cu eam.<br />\r\n&nbsp;</p>\r\n', 'saepe invenire, commodo regione in mei. Cu saperet labores pri, dissentiet signiferumque cu eam.', 'saepe invenire, commodo regione in mei.  ', 'signiferumque cu eam.', 'ntiet signiferumque cu eam.', 'saepe invenire, c', 'saepe invenire, commodo regione in mei. Cu saperet labo', '', 'b', 13),
(19, '<p>Lorem ipsum dolor sit amet, eam summo delenit ad, pro honestatis contentiones in, meis propriae deterruisset quo ea. Sit ludus saepe ei. Ex nec vitae doming option. Quod molestiae mei an, falli nobis molestiae ut vix. Id rebum apeirian ius.</p>\r\n\r\n<p>Vix facer solet liberavisse te, sale harum impetus ut usu. Ne eius harum mei. Qui omnis augue graeci id, sit ea minim saepe invenire, commodo regione in mei. Cu saperet labores pri, dissentiet signiferumque cu eam.<br />\r\n&nbsp;</p>\r\n', 'saepe invenire, commodo regione in mei. Cu saperet labores pri, dissentiet signiferumque cu eam.', 'saepe invenire, commodo regione in mei', 'saepe invenire, commodo regione in', 'saepe invenire, commodo regione in mei. Cu sap', 'saepe invenire, commodo regione in mei. Cu saperet labores pri, ', ' cu eam.', '', 'c', 13),
(22, '', 'Add Questions for Test Papr 7 Add Questions for Test Papr 7 Add Questions for Test Papr 7', 'Add Questions for Test Papr 7', 'Add Questions for Test Papr 7', 'Add Questions for Test Papr 7', 'Add Questions for Test Papr 7', 'Add Questions for Test Papr 7', '', 'b', 15),
(23, '', 'Add Questions for Test Papr 7Add Questions for Test Papr 7Add Questions for Test Papr 7', 'v', 'Add Questions for Test Papr 7', 'Add Questions for Test Papr 7', 'Add Questions for Test Papr 7', 'Add Questions for Test Papr 7', '', 'a', 15),
(24, '', 'Add Questions for Test Papr 7Add Questions for Test Papr 7Add Questions for Test Papr 7', 'Add Questions for Test Papr 7', 'Add Questions for Test Papr 7', 'Add Questions for Test Papr 7', 'Add Questions for Test Papr 7', 'v', '', 'a', 15),
(25, '', 'Add Questions for Test Papr 7Add Questions for Test Papr 7Add Questions for Test Papr 7Add Questions for Test Papr 7', 'Add Questions for Test Papr 7', 'Add Questions for Test Papr 7', 'Add Questions for Test Papr 7', 'Add Questions for Test Papr 7', 'Add Questions for Test Papr 7', '', 'a', 15),
(26, '', 'Add Questions for Test Papr 7', 'Add Questions for Test Papr 7', 'Add Questions for Test Papr 7', 'Add Questions for Test Papr 7', 'Add Questions for Test Papr 7', 'Add Questions for Test Papr 7', '', 'a', 15);

-- --------------------------------------------------------

--
-- Table structure for table `test_paper`
--

CREATE TABLE IF NOT EXISTS `test_paper` (
`paper_id` int(11) NOT NULL,
  `paper_name` varchar(255) NOT NULL,
  `paper_slug` varchar(255) NOT NULL,
  `paper_image` varchar(255) NOT NULL,
  `paper_type` varchar(255) NOT NULL,
  `paper_num_que` int(11) NOT NULL,
  `paper_duration` int(11) NOT NULL,
  `paper_instruction` text NOT NULL,
  `paper_series_id` int(11) NOT NULL,
  `paper_course_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `test_paper`
--

INSERT INTO `test_paper` (`paper_id`, `paper_name`, `paper_slug`, `paper_image`, `paper_type`, `paper_num_que`, `paper_duration`, `paper_instruction`, `paper_series_id`, `paper_course_id`) VALUES
(4, 'Challenger Puzzle Set 09', 'challenger-puzzle-set-09-1', 'apex.png', 'Simple Question Answer Type', 5, 40, 'survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Why do we use it?It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 2, 9),
(5, 'Test paper 1', 'test-paper-1', 'Bank_Comt_ KIT_(Extended).png', 'Simple Question Answer Type', 2, 10, '<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n', 3, 9),
(6, 'test paper1', 'test-paper1', 'download.jpg', 'Simple Question Answer Type', 4, 10, '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true gener</p>\r\n', 4, 11),
(7, 'test paper 2', 'test-paper-2', 'download.jpg', 'Simple Question Answer Type', 2, 10, '<ol>\r\n	<li>Lorem ipsum dolor sit amet, mei eu nisl feugait, mea ex vidit tractatos, te clita aeterno pro. Ea quod liber nominati vis, munere meliore pertinacia ut vel, causae hendrerit qui et. His no detraxit intellegat, in vix laudem perfecto appellantur. Nonumes interpretaris ut eum. Eam ut vitae ubique reprimique.</li>\r\n	<li>Ei diam ferri sententiae eum, ius cu dicant definitiones, paulo ignota adolescens nam ad. Ei debitis posidonium vim. Ea eam vidisse diceret. Usu atqui saperet deserunt ut. Est veritus perpetua ex, ad has quis necessitatibus.</li>\r\n	<li>Fabellas perfecto antiopam ius te, nemore sadipscing ea has. Adhuc sadipscing theophrastus mea eu. Ponderum salutandi adolescens vel te. Sea solet dicunt euismod ea, ea cum soluta laoreet tincidunt. Ut legimus scriptorem eum, ei dicant delenit sed.</li>\r\n	<li>Id eum tempor offendit, scripta aperiri bonorum quo ex. Alii dicunt quodsi ex nam. Ius ad facilis salutatus. Ancillae persecuti eam te, no vel rebum verterem. Eam ad nostrud eloquentiam, te mea quodsi noluisse iracundia, noster veritus ocurreret at est. Voluptatum referrentur accommodare id vel. Cu probatus legendos eos, mazim labitur an mei.</li>\r\n	<li>Vel cu sale saperet accumsan. Vivendo pertinacia theophrastus at mel, pro fierent conceptam ne, euripidis maiestatis ad eos. Cum ea vidit tibique. Ei eripuit mediocrem eam, sale voluptaria signiferumque nec ei.</li>\r\n</ol>\r\n', 3, 9),
(8, 'test apper 3', 'test-apper-3', 'step2.png', 'Simple Question Answer Type', 3, 0, '<p>as</p>\r\n', 2, 9),
(9, 'mindfiresolutions noida', 'mindfiresolutions-noida', 'a2.jpg', 'Simple Question Answer Type', 10, 30, '<p>Mindfire Solutions started in October of 1999, with the purpose of providing expert software services globally, and has steadily grown to its 1000-seat facilities at 2 engineering centers.</p>\r\n\r\n<p><br />\r\nIn its heart and soul, Mindfire is a software service provider, with unrelenting focus on&nbsp;<a href="http://www.mindfiresolutions.com/offshore-small-team-software-development.htm">small-team offshore software development</a>&nbsp;using&nbsp;<a href="http://www.mindfiresolutions.com/agile-methods-at-mindfire.htm">Agile methods for distributed teams</a>, all amid a unique&nbsp;<a href="http://www.mindfiresolutions.com/culture-at-mindfire.htm">Mindfire culture</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>We are clear in our vision of building a software engineering powerhouse, and we do not spend time and energy in activities which are not our core competence.<br />\r\n<br />\r\nOur vision is &quot;to be a globally respected, professional and innovative software services and technology company&quot;.<br />\r\n<br />\r\nOur mission statement reinforces our vision: &quot;Imagine. Think. Plan. Act. Deliver. Improve.&quot;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>During past 17 years, we have successfully delivered&nbsp;<a href="http://www.mindfiresolutions.com/projects.htm" target="_blank">2000+ engagements</a>&nbsp;with&nbsp;<a href="http://www.mindfiresolutions.com/clients.htm" target="_blank">500+ clients</a>.</p>\r\n', 2, 9),
(10, 'MIndfire Solutions', 'mindfire-solutions', '2.png', 'Simple Question Answer Type', 2, 10, '<p>Mindfire Solutions started in October of 1999, with the purpose of providing expert software services globally, and has steadily grown to its 1000-seat facilities at 2 engineering centers.</p>\r\n\r\n<p><br />\r\nIn its heart and soul, Mindfire is a software service provider, with unrelenting focus on&nbsp;<a href="http://www.mindfiresolutions.com/offshore-small-team-software-development.htm">small-team offshore software development</a>&nbsp;using&nbsp;<a href="http://www.mindfiresolutions.com/agile-methods-at-mindfire.htm">Agile methods for distributed teams</a>, all amid a unique&nbsp;<a href="http://www.mindfiresolutions.com/culture-at-mindfire.htm">Mindfire culture</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>We are clear in our vision of building a software engineering powerhouse, and we do not spend time and energy in activities which are not our core competence.<br />\r\n<br />\r\nOur vision is &quot;to be a globally respected, professional and innovative software services and technology company&quot;.<br />\r\n<br />\r\nOur mission statement reinforces our vision: &quot;Imagine. Think. Plan. Act. Deliver. Improve.&quot;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>During past 17 years, we have successfully delivered&nbsp;<a href="http://www.mindfiresolutions.com/projects.htm" target="_blank">2000+ engagements</a>&nbsp;with&nbsp;<a href="http://www.mindfiresolutions.com/clients.htm" target="_blank">500+ clients</a>.</p>\r\n', 2, 9),
(11, 'Lorem ipsum dolor sit ame', 'lorem-ipsum-dolor-sit-ame', '2.png', 'Passage Type', 2, 10, '<ul>\r\n	<li>sum dolor sit amet, pericula omittantur sea ne. Te fuisset volutpat quo, in everti labores delicatissimi mea, at nam liber percipit similique. Ei alii dolorum admodum eos, ut mel paulo postea qualisque.</li>\r\n	<li>Percipitur sadipscing at mea, congue soluta iuvaret sit ne.</li>\r\n	<li>Suas nibh cu sed, debet scripta oporteat no qui.</li>\r\n	<li>Te ius melius scripta honestatis. Sed mundi utamur perfecto te, facete consectetuer ex usu.</li>\r\n	<li>Discere docendi eum ea, cum cu eirmod quaeque copiosae. Vix cu assum civibus. Nemore albucius ut vel. Est an quis delenit legendos, sit dicant tritani iracundia an.</li>\r\n</ul>\r\n', 4, 11),
(12, 'tset paper 4', 'tset-paper-4', 'apex.png', 'Simple Question Answer', 2, 10, '<h2>Definition and Usage</h2>\r\n\r\n<p>The ready event occurs when the DOM (document object model) has been loaded.</p>\r\n\r\n<p>Because this event occurs after the document is ready, it is a good place to have all other jQuery events and functions. Like in the example above.</p>\r\n\r\n<p>The ready() method specifies what happens when a ready event occurs.</p>\r\n\r\n<p><strong>Tip:</strong>&nbsp;The ready() method should not be used together with &lt;body onload=&quot;&quot;&gt;.</p>\r\n\r\n<hr />\r\n<h2>Syntax</h2>\r\n\r\n<p>Two syntaxes can be used:&nbsp;</p>\r\n\r\n<p>$(document).ready(<em>function</em>)</p>\r\n\r\n<p>The ready() method can only be used on the current document, so no selector is required:</p>\r\n\r\n<p>$(<em>function</em>)</p>\r\n', 2, 9),
(13, 'Test Papr 5', 'test-papr-5', 'apex.png', 'Passage And Question Both', 2, 10, '<h2>Definition and Usage</h2>\r\n\r\n<p>The ready event occurs when the DOM (document object model) has been loaded.</p>\r\n\r\n<p>Because this event occurs after the document is ready, it is a good place to have all other jQuery events and functions. Like in the example above.</p>\r\n\r\n<p>The ready() method specifies what happens when a ready event occurs.</p>\r\n\r\n<p><strong>Tip:</strong>&nbsp;The ready() method should not be used together with &lt;body onload=&quot;&quot;&gt;.</p>\r\n\r\n<hr />\r\n<h2>Syntax</h2>\r\n\r\n<p>Two syntaxes can be used:&nbsp;</p>\r\n\r\n<p>$(document).ready(<em>function</em>)</p>\r\n\r\n<p>The ready() method can only be used on the current document, so no selector is required:</p>\r\n\r\n<p>$(<em>function</em>)</p>\r\n', 2, 9),
(14, 'Test Papr 6', 'test-papr-6', 'ponzi frontend.png', 'Passage Type', 2, 10, '<p>The ready event occurs when the DOM (document object model) has been loaded.</p>\r\n\r\n<p>Because this event occurs after the document is ready, it is a good place to have all other jQuery events and functions. Like in the example above.</p>\r\n\r\n<p>The ready() method specifies what happens when a ready event occurs.</p>\r\n\r\n<p><strong>Tip:</strong>&nbsp;The ready() method should not be used together with &lt;body onload=&quot;&quot;&gt;.</p>\r\n\r\n<hr />\r\n<h2>Syntax</h2>\r\n\r\n<p>Two syntaxes can be used:&nbsp;</p>\r\n\r\n<p>$(document).ready(<em>function</em>)</p>\r\n\r\n<p>The ready() method can only be used on the current document, so no selector is required:</p>\r\n\r\n<p>$(<em>function</em>)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Parameter</th>\r\n			<th>Description</th>\r\n		</tr>\r\n		<tr>\r\n			<td><em>function</em></td>\r\n			<td>Required. Specifies the function to run after the document is loaded</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<hr />\r\n<p><a href="https://www.w3schools.com/jquery/jquery_ref_events.asp">? jQuery Event Methods</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="https://www.w3schools.com/colors/colors_picker.asp">COLOR PICKER</a></p>\r\n\r\n<p><a href="https://www.w3schools.com/colors/colors_picker.asp"><img alt="colorpicker" src="https://www.w3schools.com/images/colorpicker.gif" /></a></p>\r\n\r\n<p><a href="https://www.w3schools.com/howto/default.asp">LEARN MORE</a></p>\r\n\r\n<p><a href="https://www.w3schools.com/howto/howto_js_tabs.asp">Tabs</a><br />\r\n<a href="https://www.w3schools.com/howto/howto_css_dropdown.asp">Dropdowns</a><br />\r\n<a href="https://www.w3schools.com/howto/howto_js_accordion.asp">Accordions</a><br />\r\n<a href="https://www.w3schools.com/howto/howto_js_weight_converter.asp">Convert Weights</a><br />\r\n<a href="https://www.w3schools.com/howto/howto_css_animate_buttons.asp">Animated Buttons</a><br />\r\n<a href="https://www.w3schools.com/howto/howto_js_sidenav.asp">Side Navigation</a><br />\r\n<a href="https://www.w3schools.com/howto/howto_js_topnav.asp">Top Navigation</a><br />\r\n<a href="https://www.w3schools.com/howto/howto_js_animate.asp">JS Animations</a><br />\r\n<a href="https://www.w3schools.com/howto/howto_css_modals.asp">Modal Boxes</a><br />\r\n<a href="https://www.w3schools.com/howto/howto_js_progressbar.asp">Progress Bars</a><br />\r\n<a href="https://www.w3schools.com/howto/howto_css_parallax.asp">Parallax</a><br />\r\n<a href="https://www.w3schools.com/howto/howto_css_login_form.asp">Login Form</a><br />\r\n<a href="https://www.w3schools.com/howto/howto_html_include.asp">HTML Includes</a><br />\r\n<a href="https://www.w3schools.com/howto/howto_google_maps.asp">Google Maps</a><br />\r\n<a href="https://www.w3schools.com/howto/howto_css_loader.asp">Loaders</a><br />\r\n<a href="https://www.w3schools.com/howto/howto_css_tooltip.asp">Tooltips</a><br />\r\n<a href="https://www.w3schools.com/howto/howto_js_slideshow.asp">Slideshow</a><br />\r\n<a href="https://www.w3schools.com/howto/howto_js_filter_lists.asp">Filter List</a><br />\r\n<a href="https://www.w3schools.com/howto/howto_js_sort_list.asp">Sort List</a></p>\r\n\r\n<p>SHARE</p>\r\n\r\n<p>&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<p><a href="https://www.w3schools.com/cert/default.asp" target="_blank">CERTIFICATES</a></p>\r\n\r\n<p>HTML, CSS, JavaScript, PHP, jQuery, Bootstrap and XML.</p>\r\n\r\n<p><a href="https://www.w3schools.com/cert/default.asp" target="_blank">Read More &raquo;</a></p>\r\n\r\n<hr />\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<hr />\r\n<p><a href="javascript:void(0);" onclick="displayError();return false">REPORT ERROR</a></p>\r\n\r\n<p><a href="javascript:void(0);" onclick="printPage();return false;" target="_blank">PRINT PAGE</a></p>\r\n\r\n<p><a href="https://www.w3schools.com/forum/default.asp" target="_blank">FORUM</a></p>\r\n\r\n<p><a href="https://www.w3schools.com/about/default.asp" target="_top">ABOUT</a></p>\r\n\r\n<hr />\r\n<p>Top 10 Tutorials</p>\r\n\r\n<p><a href="https://www.w3schools.com/html/default.asp">HTML Tutorial</a><br />\r\n<a href="https://www.w3schools.com/css/default.asp">CSS Tutorial</a><br />\r\n<a href="https://www.w3schools.com/js/default.asp">JavaScript Tutorial</a><br />\r\n<a href="https://www.w3schools.com/w3css/default.asp">W3.CSS Tutorial</a><br />\r\n<a href="https://www.w3schools.com/bootstrap/default.asp">Bootstrap Tutorial</a><br />\r\n<a href="https://www.w3schools.com/sql/default.asp">SQL Tutorial</a><br />\r\n<a href="https://www.w3schools.com/php/default.asp">PHP Tutorial</a><br />\r\n<a href="https://www.w3schools.com/jquery/default.asp">jQuery Tutorial</a><br />\r\n<a href="https://www.w3schools.com/angular/default.asp">Angular Tutorial</a><br />\r\n<a href="https://www.w3schools.com/xml/default.asp">XML Tutorial</a></p>\r\n\r\n<p>Top 10 References</p>\r\n\r\n<p><a href="https://www.w3schools.com/tags/default.asp">HTML Reference</a><br />\r\n<a href="https://www.w3schools.com/cssref/default.asp">CSS Reference</a><br />\r\n<a href="https://www.w3schools.com/jsref/default.asp">JavaScript Reference</a><br />\r\n<a href="https://www.w3schools.com/w3css/w3css_references.asp">W3.CSS Reference</a><br />\r\n<a href="https://www.w3schools.com/browsers/default.asp">Browser Statistics</a><br />\r\n<a href="https://www.w3schools.com/php/php_ref_array.asp">PHP Reference</a><br />\r\n<a href="https://www.w3schools.com/colors/colors_names.asp">HTML Colors</a><br />\r\n<a href="https://www.w3schools.com/charsets/default.asp">HTML Character Sets</a><br />\r\n<a href="https://www.w3schools.com/jquery/jquery_ref_selectors.asp">jQuery Reference</a><br />\r\n<a href="https://www.w3schools.com/angular/angular_ref_directives.asp">AngularJS Reference</a></p>\r\n\r\n<p>Top 10 Examples</p>\r\n\r\n<p><a href="https://www.w3schools.com/html/html_examples.asp">HTML Examples</a><br />\r\n<a href="https://www.w3schools.com/css/css_examples.asp">CSS Examples</a><br />\r\n<a href="https://www.w3schools.com/js/js_examples.asp">JavaScript Examples</a><br />\r\n<a href="https://www.w3schools.com/w3css/w3css_examples.asp">W3.CSS Examples</a><br />\r\n<a href="https://www.w3schools.com/js/js_dom_examples.asp">HTML DOM Examples</a><br />\r\n<a href="https://www.w3schools.com/php/php_examples.asp">PHP Examples</a><br />\r\n<a href="https://www.w3schools.com/asp/asp_examples.asp">ASP Examples</a><br />\r\n<a href="https://www.w3schools.com/jquery/jquery_examples.asp">jQuery Examples</a><br />\r\n<a href="https://www.w3schools.com/angular/angular_examples.asp">Angular Examples</a><br />\r\n<a href="https://www.w3schools.com/xml/xml_examples.asp">XML Examples</a></p>\r\n\r\n<p>Web Certificates</p>\r\n\r\n<p><a href="https://www.w3schools.com/cert/default.asp">HTML Certificate</a><br />\r\n<a href="https://www.w3schools.com/cert/default.asp">CSS Certificate</a><br />\r\n<a href="https://www.w3schools.com/cert/default.asp">JavaScript Certificate</a><br />\r\n<a href="https://www.w3schools.com/cert/default.asp">jQuery Certificate</a><br />\r\n<a href="https://www.w3schools.com/cert/default.asp">PHP Certificate</a><br />\r\n<a href="https://www.w3schools.com/cert/default.asp">Bootstrap Certificate</a><br />\r\n<a href="https://www.w3schools.com/cert/default.asp">XML Certificate</a></p>\r\n\r\n<hr />\r\n<p>W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our&nbsp;<a href="https://www.w3schools.com/about/about_copyright.asp">terms of use</a>,&nbsp;<a href="https://www.w3schools.com/about/about_privacy.asp">cookie and privacy policy</a>.&nbsp;<a href="https://www.w3schools.com/about/about_copyright.asp">Copyright 1999-2017</a>&nbsp;by Refsnes Data. All Rights Reserved.<br />\r\n<a href="https://www.w3schools.com/w3css/">Powered by W3.CSS</a>.<br />\r\n&nbsp;</p>\r\n', 2, 9),
(15, 'Test Papr 7', 'test-papr-7', 'apex.png', 'Simple Question Answer', 5, 10, '<p>Lorem ipsum dolor sit amet, eam summo delenit ad, pro honestatis contentiones in, meis propriae deterruisset quo ea. Sit ludus saepe ei. Ex nec vitae doming option. Quod molestiae mei an, falli nobis molestiae ut vix. Id rebum apeirian ius.</p>\r\n\r\n<p>Vix facer solet liberavisse te, sale harum impetus ut usu. Ne eius harum mei. Qui omnis augue graeci id, sit ea minim saepe invenire, commodo regione in mei. Cu saperet labores pri, dissentiet signiferumque cu eam.</p>\r\n\r\n<p>Mel nibh delectus adversarium ut, vocent equidem vim ut. No mea rebum civibus disputando. Munere percipitur est eu, ut quo decore meliore consequat. Ea eum ludus dicam, homero similique ea eum, an mei nibh intellegam.</p>\r\n\r\n<p>At delicata abhorreant nam, causae democritum mel ex, eam no accumsan reprehendunt. Ludus semper et sea. Vis id movet dicunt. Id eirmod constituto qui. Ex nec falli tincidunt, ea mazim movet quando duo. Enim discere ea his, vero quidam id mea.</p>\r\n\r\n<p>Augue feugiat no ius, indoctum theophrastus id ius. Nam id mutat interesset, ea eros mollis veritus mei. Numquam dolorum commune vel ne. Id his sint lobortis. Ad his magna utinam feugiat, vix brute possim an, pri eros duis tincidunt cu. Mea autem accusam adipisci an, his et ubique vulputate honestatis, vis te vidit reque definitionem.</p>\r\n', 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `test_series`
--

CREATE TABLE IF NOT EXISTS `test_series` (
`series_id` int(11) NOT NULL,
  `series_name` text NOT NULL,
  `series_image` varchar(255) NOT NULL,
  `series_actual_price` varchar(255) NOT NULL,
  `series_discount_price` varchar(255) NOT NULL,
  `series_body` text NOT NULL,
  `series_slug` text NOT NULL,
  `edit_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `series_course_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `test_series`
--

INSERT INTO `test_series` (`series_id`, `series_name`, `series_image`, `series_actual_price`, `series_discount_price`, `series_body`, `series_slug`, `edit_time`, `series_course_id`) VALUES
(2, 'SSC CGL TIER I 2017 Online Test Series', 'SSC_Topper_Test_Series.png', '1299', ' 999.00', '<p>Joined:&nbsp;13/05/2014</p>\r\n\r\n<p>Posts:&nbsp;4</p>\r\n\r\n<p><a href="http://ckeditor.com/comment/131979#comment-131979">The problem with that is that</a></p>\r\n\r\n<p>The problem with that is that ALL of the content is then encoded including the actual HTML used to format the content in ckeditor.&nbsp; I may not have made clear that the code snippets will appear within a fully formatted collection of text and images and so if I use htmlspecialchars I lose the layout..</p>\r\n\r\n<p>Wed, 05/14/2014 - 08:56</p>\r\n\r\n<p><a href="http://ckeditor.com/comment/131980#comment-131980">#4</a></p>\r\n\r\n<p><a href="http://ckeditor.com/users/reinmar">reinmar</a></p>\r\n\r\n<p><a href="http://ckeditor.com/users/reinmar"><img alt="reinmar''s picture" src="http://www.gravatar.com/avatar/ad95417b7f537fcd291736935164470f.jpg?d=http%3A//c.cksource.com/a/1/img/default_avatar.png&amp;s=83&amp;r=G" /></a></p>\r\n\r\n<p>Joined:&nbsp;24/08/2012</p>\r\n\r\n<p>Posts:&nbsp;647</p>\r\n\r\n<p><a href="http://ckeditor.com/comment/131980#comment-131980">No, you&#39;ll not lose the</a></p>\r\n\r\n<p>No, you&#39;ll not lose the layout (unless you have a bug somewhere else). By encoding content before printing it to textarea you&#39;ll produce this:</p>\r\n\r\n<pre>\r\n&amp;lt;p&amp;gt;&amp;amp;lt;?php echo &quot;me&quot;; ?&amp;amp;gt;&amp;lt;/p&amp;gt;\r\n&amp;lt;p&amp;gt;&amp;amp;lt;p&amp;amp;gt;Hello&amp;amp;lt;/p&amp;amp;gt;&amp;lt;/p&amp;gt;</pre>\r\n\r\n<p>Note that the real &lt;p&gt; tag has been transformed to &amp;lt;p&amp;gt; so will be read as &lt;p&gt;. But the &lt;p&gt; which was already encoded will be transformed to&nbsp;&amp;amp;lt;p&amp;amp;gt;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="http://twitter.com/reinmarpl">Piotrek (Reinmar) Koszuli?ski</a><br />\r\nCKEditor JavaScript Developer<br />\r\n--<br />\r\nCKSource -&nbsp;<a href="http://cksource.com/">http://cksource.com</a><br />\r\n--</p>\r\n', 'ssc-cgl-tier-i-2017-online-test-series', '2017-04-15 11:41:40', 9),
(3, 'Banking Online Test Series Complete Kit', 'Bank_Comt_ KIT_(Extended).png', ' 9,999.00', '3499.00', '<p>&lt;p&gt;Adda247 brings this banking preparation bonanza with a comprehensive kit covering each and every aspect of bank exam preparation for all aspirants.&amp;nbsp;&lt;strong&gt;There is a Mega Discount of 65% on this complete kit of worth Rs.9999 that you can avail for Rs. 3499 till 25th&amp;nbsp;March&amp;rsquo;17.&lt;/strong&gt;&amp;nbsp;This complete package can be your effective tool in preparing for all bank exams whether it is SBI, IBPS, NIACL, IPPB or RRB. The kit will have Full-Length Mocks of all bank exams, Practice Set, sectional test, topic wise test and much more.&lt;/p&gt; &lt;p&gt;ADDA 247 is proud to announce a comprehensive online Test Series for&amp;nbsp;&lt;strong&gt;Banking Exams Complete Kit&lt;/strong&gt;. The test series are designed as per the&amp;nbsp;&lt;strong&gt;latest pattern&lt;/strong&gt;&amp;nbsp;of the exam, and aims to provide maximum benefits to aspirants in terms of preparation. Desire is the key to motivation, but it&amp;#39;s determination and commitment to an unrelenting pursuit of your goal - a commitment to excellence - that will enable you to attain the success you seek. If you don&amp;rsquo;t start now you will be left behind in this race.&lt;/p&gt; &lt;p&gt;&amp;nbsp;&lt;/p&gt; &lt;p&gt;&lt;strong&gt;*SALIENT FEATURES&lt;/strong&gt;&lt;/p&gt; &lt;p&gt;-BASED ON LATEST PATTERN&lt;br /&gt; -BI-LINGUAL (BOTH ENGLISH AND HINDI)&lt;br /&gt; -DETAILED SOLUTIONS&lt;br /&gt; -AVAILABLE BOTH IN APP AND WEBSITE&lt;br /&gt; -CAN BE ACCESSED 24 X 7&lt;br /&gt; -WEEKLY GK UPDATE PRACTICE SET&lt;br /&gt; -WEEKLY BANKING AWARENESS PRACTICE SET&lt;/p&gt;</p>\r\n', 'banking-online-test-series-complete-kit', '2017-04-15 11:41:47', 9),
(4, 'SSC CGL 2017 All Rounder Package', 'Bank-Nationalization-Hindi.jpg', '4,000', '1599', '<p>&lt;p&gt;&amp;lt;p&amp;gt;&amp;amp;lt;p&amp;amp;gt;&amp;amp;amp;lt;p&amp;amp;amp;gt;ADDA 247 is proud to announce a comprehensive online Test Series for&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;strong&amp;amp;amp;gt;SSC CGL 2017 exam&amp;amp;amp;lt;/strong&amp;amp;amp;gt;. The test series are designed as per the&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;strong&amp;amp;amp;gt;latest pattern&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;amp;nbsp;of the exam, and aims to provide maximum benefits to aspirants in terms of preparation. Desire is the key to motivation, but it&amp;amp;amp;amp;#39;s determination and commitment to an unrelenting pursuit of your goal - a commitment to excellence - that will enable you to attain the success you seek. If you don&amp;amp;amp;amp;rsquo;t start now you will be left behind in this race.&amp;amp;amp;lt;/p&amp;amp;amp;gt; &amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;/p&amp;amp;amp;gt; &amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;SALIENT FEATURES &amp;amp;amp;amp;ndash;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt; &amp;amp;amp;lt;ul&amp;amp;amp;gt; &amp;amp;amp;lt;li&amp;amp;amp;gt;BASED ON LATEST PATTERN&amp;amp;amp;lt;/li&amp;amp;amp;gt; &amp;amp;amp;lt;li&amp;amp;amp;gt;BI-LINGUAL (BOTH ENGLISH AND HINDI)&amp;amp;amp;lt;/li&amp;amp;amp;gt; &amp;amp;amp;lt;li&amp;amp;amp;gt;DETAILED SOLUTIONS&amp;amp;amp;lt;/li&amp;amp;amp;gt; &amp;amp;amp;lt;li&amp;amp;amp;gt;AVAILABLE BOTH IN APP AND WEBSITE&amp;amp;amp;lt;/li&amp;amp;amp;gt; &amp;amp;amp;lt;li&amp;amp;amp;gt;CAN BE ACCESSED 24 X 7&amp;amp;amp;lt;/li&amp;amp;amp;gt; &amp;amp;amp;lt;/ul&amp;amp;amp;gt; &amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;/p&amp;amp;amp;gt; &amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;ABOUT THE PACKAGE-&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt; &amp;amp;amp;lt;p&amp;amp;amp;gt;Our package consists of&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;strong&amp;amp;amp;gt;350 + TESTS&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;Our test series is based on the&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;strong&amp;amp;amp;gt;latest pattern&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;amp;nbsp;and is prepared meticulously by ADDA 247 team in association with&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;strong&amp;amp;amp;gt;Career Power&amp;amp;amp;lt;/strong&amp;amp;amp;gt;. We have left no stone unturned to provide you with the test series of every format possible.&amp;amp;amp;lt;/p&amp;amp;amp;gt; &amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;/p&amp;amp;amp;gt; &amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;*MOCK DESCRIPTION (350 + TOTAL TESTS)&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt; &amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;/p&amp;amp;amp;gt; &amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;/p&amp;amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;&amp;lt;/p&amp;gt;&lt;/p&gt;</p>\r\n', 'ssc-cgl-2017-all-rounder-package', '2017-04-01 17:10:46', 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_mobile` varchar(20) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_mobile`, `user_password`) VALUES
(5, 'Paurush Ankit', 'paurush.oph@gmail.com', '7531855396', 'd7724ce2cf11da74f959ae3dedbe1e44'),
(6, 'Paurush Ankit', 'test@gmail.com', '7531855396', 'd7724ce2cf11da74f959ae3dedbe1e44'),
(7, 'Paurush Ankit', 'test@gmail.comaa', '7531855396', 'd7724ce2cf11da74f959ae3dedbe1e44');

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
-- Indexes for table `ques`
--
ALTER TABLE `ques`
 ADD PRIMARY KEY (`q_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `ques`
--
ALTER TABLE `ques`
MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `test_paper`
--
ALTER TABLE `test_paper`
MODIFY `paper_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `test_series`
--
ALTER TABLE `test_series`
MODIFY `series_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
