-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2016 at 08:41 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `user_id`, `question_id`, `description`) VALUES
(2, 12, 12, 'I\'m not sure why trans_status() isn\'t returning, but I would use the built in helper from the Codeigniter database helper like this and we can try and troubleshoot: I\'m not sure why trans_status() isn\'t returning, but I would use the built in helper from the Codeigniter database helper like this and we can try and troubleshoot:I\'m not sure why trans_status() isn\'t returning, but I would use the built in helper from the Codeigniter database helper like this and we can try and troubleshoot:I\'m not sure why trans_status() isn\'t returning, but I would use the built in helper from the Codeigniter database helper like this and we can try and troubleshoot:I\'m not sure why trans_status() isn\'t returning, but I would use the built in helper from the Codeigniter database helper like this and we can try and troubleshoot:I\'m not sure why trans_status() isn\'t returning, but I would use the built in helper from the Codeigniter database helper like this and we can try and troubleshoot:'),
(3, 12, 13, 'Try Go to System -> Configuration -> Web -> Secure\r\n\r\nCheck if "Base Link URL" is set with "https".\r\n\r\nCheck that "Use Secure URLs in Frontend" is set to Yes.'),
(4, 13, 12, 'As the title says, how does it work? What happends behind the scenes when i use Async Model Binding for example in a GridView control?\r\n\r\nAlso, are there disadvantages of using this approach?\r\n\r\nThanks!'),
(5, 12, 16, 'As the title says, how does it work? What happends behind the scenes when i use Async Model Binding for example in a GridView control?\r\n\r\nAlso, are there disadvantages of using this approach?\r\n\r\nThanks!'),
(6, 13, 16, 'for International Settlements And I keep getting this error because of this: UnicodeEncodeError: \'ascii\' codec can\'t encode characters in position 12-15: ordinal not in range(128)'),
(7, 13, 14, 'I am not too familiar with Javascript, but I need some help with a dropdown menu originally built only using CSS. As the page developed,'),
(8, 12, 12, 'I\'m not sure why trans_status() isn\'t returning, but I would use the built in helper from the Codeigniter database helper like this and we can try and troubleshoot:'),
(9, 13, 12, 'I\'m not sure why trans_status() isn\'t returning, but I would use the built in helper from the Codeigniter database helper like this and we can try and troubleshoot:'),
(10, 13, 12, 'I\'m not sure why trans_status() isn\'t returning, but I would use the built in helper from the Codeigniter database helper like this and we can try and troubleshoot:'),
(11, 12, 12, 'I\'m not sure why trans_status() isn\'t returning, but I would use the built in helper from the Codeigniter database helper like this and we can try and troubleshoot:');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `title` varchar(120) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `user_id`, `title`, `description`, `created_at`) VALUES
(12, 12, 'Couchbase with Laravel: Data cannot be inserted in the couchbase', 'I am new to couchbase and laravel. I am developing an entry form. I am using couchbase as database and in the back-end i am using laravel. when ever i try to insert data in the couchbase, although the query run, but it prints the data on the screen, rather than it stores in the database. Please help me in this issue', '2016-12-20'),
(13, 13, 'What is eloquent in laravel  ?', 'I am confused about has many belongstomany and several other eloquent relationships can anyone explain please.', '2016-12-20'),
(14, 13, 'CSS Dropdown menu - with Javascript', 'I am not too familiar with Javascript, but I need some help with a dropdown menu originally built only using CSS. As the page developed, we had a developer add some Javascript to autofill in the list items (li) using information stored in our .js file.', '2016-12-20'),
(15, 13, 'Dynamically Add Bootstrap Class to element Angular 2', 'I have a page that will have a handful of input boxes that I want to be able to flag have this structure a few times on the page and I want to be able to a bootstrap class (has-danger) to them based on a the click event handler', '2016-12-20'),
(16, 13, 'Unicode encode error while uploading python dataframe', 'In one of the files that I\'m trying to upload, it has value: Banque des RÃƒÆ’Ã‚Â¨glements Internationaux (BRI) - BÃƒÆ’Ã‚Â¢le / Bank for International Settlements\r\n\r\nAnd I keep getting this error because of this: UnicodeEncodeError: \'ascii\' codec can\'t encode characters in position 12-15: ordinal not in range(128)', '2016-12-20'),
(21, 13, 'SQL query to find player with maximum runs', 'With the table of separate runs, making the sums will mean reading entire table each time so for performance it would be good to have the sums precomputed somewhere, maybe even in Player table, with updates', '2016-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `tag_name` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`) VALUES
(39, ' JS'),
(38, 'CSS'),
(37, 'relationship'),
(36, 'php'),
(34, 'couchbase'),
(33, 'laravel'),
(40, ' HTML'),
(41, ' twitter'),
(42, 'python'),
(43, ' dframe'),
(52, ' database'),
(50, 'db'),
(51, 'sql'),
(49, 'sqllite');

-- --------------------------------------------------------

--
-- Table structure for table `tags_question`
--

CREATE TABLE `tags_question` (
  `id` int(10) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags_question`
--

INSERT INTO `tags_question` (`id`, `tag_id`, `question_id`) VALUES
(12, 35, 12),
(11, 34, 12),
(10, 33, 12),
(13, 33, 13),
(14, 36, 13),
(15, 37, 13),
(16, 38, 14),
(17, 39, 14),
(18, 40, 14),
(19, 38, 15),
(20, 41, 15),
(21, 40, 15),
(22, 42, 16),
(23, 43, 16),
(24, 49, 20),
(25, 36, 20),
(26, 50, 20),
(27, 51, 21),
(28, 52, 21);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `qualification` varchar(55) NOT NULL,
  `profession` varchar(55) NOT NULL,
  `bio` varchar(55) NOT NULL,
  `website` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `qualification`, `profession`, `bio`, `website`, `password`) VALUES
(13, 'Talha khan khalil', 'talhakhankhalil@gmail.com', 'BSc Software Engineering ', 'Software Engineer', 'Yes', 'talha.com', '7d2731ef68f1d34e02a42aedaaf68cad'),
(12, 'Haider Ali', 'haider@gmail.com', 'BSc Software Engineering ', 'Software Engineer', 'Software Engr', 'grabtopc.com', '4a9618951d55fa3fab9200151cadf007');

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

CREATE TABLE `voting` (
  `id` int(11) NOT NULL,
  `vote_count` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags_question`
--
ALTER TABLE `tags_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voting`
--
ALTER TABLE `voting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `tags_question`
--
ALTER TABLE `tags_question`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `voting`
--
ALTER TABLE `voting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
