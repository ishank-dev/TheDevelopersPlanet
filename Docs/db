-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 17, 2019 at 11:31 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.8
 SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
  /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
 --
-- Database: `social`
--
 -- --------------------------------------------------------
 --
-- Table structure for table `blog_post`
--
 CREATE TABLE `blog_post` (
`id` int(11) NOT NULL,
`title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
`published` datetime NOT NULL,
`content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
`author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
 -- --------------------------------------------------------
 --
-- Table structure for table `comments`--
 CREATE TABLE `comments` (
`id` int(11) NOT NULL,
`post_body` text NOT NULL,
`posted_by` varchar(60) NOT NULL,
`posted_to` varchar(60) NOT NULL,
`date_added` datetime NOT NULL,
`removed` varchar(3) NOT NULL,
`post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 --
-- Dumping data for table `comments`
--
 INSERT INTO `comments` (`id`, `post_body`, `posted_by`, `posted_to`, `date_added`,
`removed`, `post_id`) VALUES
(29, 'Ishank Sharma', 'ishank_sharma', 'ishank_sharma', '2019-08-10 22:55:12', 'no', 126),
(30, 'heyo', 'ishank_sharma', 'aa_aa', '2019-08-11 12:02:14', 'no', 125),
(31, 'Comments Working', 'ishank_sharma', 'ishank_sharma', '2019-08-16 16:04:12', 'no',
134),
(32, 'Video embedding working!', 'aman_bhatnagar', 'aman_bhatnagar', '2019-08-16
16:06:58', 'no', 135),
(33, 'Hello World', 'ishank_sharma', 'ishank_sharma', '2019-08-17 23:14:48', 'no', 131),
(34, 'okay lets do it', 'ishank_sharma', 'ishank_sharma', '2019-08-17 23:14:59', 'no', 132),
(35, 'fgdfgdfg', 'ishank_sharma', 'ishank_sharma', '2019-08-28 18:30:52', 'no', 138),
(36, 'WOW!!', 'kiran_dalawai', 'ishank_sharma', '2019-08-30 23:52:06', 'no', 131),
(37, 'Ishank', 'ishank_sharma', 'aman_bhatnagar', '2019-08-31 00:00:14', 'no', 135),
(38, 'This is Raghav Maheshwari', 'ishank_sharma', 'kiran_dalawai', '2019-08-31 14:22:22',
'no', 139),
(39, 'Hello', 'ishank_sharma', 'kiran_dalawai', '2019-09-08 16:40:16', 'no', 139),
(40, '', 'ishank_sharma', 'kiran_dalawai', '2019-09-08 16:40:18', 'no', 139),
(41, 'esaedasd', 'ishank_sharma', 'ishank_sharma', '2019-09-08 16:40:40', 'no', 129),
(42, 'asas', 'ishank_sharma', 'kiran_dalawai', '2019-09-08 16:40:51', 'no', 139),
(43, 'asas', 'ishank_sharma', 'kiran_dalawai', '2019-09-08 16:40:57', 'no', 139),
(44, 'asdasda', 'ishank_sharma', 'aman_bhatnagar', '2019-09-08 16:42:20', 'no', 135),
(45, 'Cool Wallpaper!', 'ishank_sharma', 'ishank_sharma', '2019-09-17 23:47:50', 'no', 163);
 -- --------------------------------------------------------
 ---- Table structure for table `friend_requests`
--
 CREATE TABLE `friend_requests` (
`id` int(11) NOT NULL,
`user_to` varchar(50) NOT NULL,
`user_from` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 --
-- Dumping data for table `friend_requests`
--
 INSERT INTO `friend_requests` (`id`, `user_to`, `user_from`) VALUES
(18, 'aa_aa', 'ishank_sharma'),
(20, 'test_test', 'ishank_sharma');
 -- --------------------------------------------------------
 --
-- Table structure for table `likes`
--
 CREATE TABLE `likes` (
`id` int(11) NOT NULL,
`username` varchar(60) NOT NULL,
`post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 --
-- Dumping data for table `likes`
--
 INSERT INTO `likes` (`id`, `username`, `post_id`) VALUES
(45, 'ishank_sharma', 125),
(46, 'ishank_sharma', 132),
(48, 'ishank_sharma', 134),
(49, 'aman_bhatnagar', 135),
(50, 'ishank_sharma', 135),
(51, 'kiran_dalawai', 139),
(53, 'ishank_sharma', 160),
(54, 'ishank_sharma', 163); -- --------------------------------------------------------
 --
-- Table structure for table `messages`
--
 CREATE TABLE `messages` (
`id` int(11) NOT NULL,
`user_to` varchar(50) NOT NULL,
`user_from` varchar(50) NOT NULL,
`body` text NOT NULL,
`date` datetime NOT NULL,
`opened` varchar(3) NOT NULL,
`viewed` varchar(3) NOT NULL,
`deleted` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 --
-- Dumping data for table `messages`
--
 INSERT INTO `messages` (`id`, `user_to`, `user_from`, `body`, `date`, `opened`, `viewed`,
`deleted`) VALUES
(65, 'aa_aa', 'ishank_sharma', 'ummmm', '2019-08-06 23:58:27', 'no', 'no', 'no'),
(66, 'aman_bhatnagar', 'test_test', 'test', '2019-08-08 17:29:52', 'yes', 'yes', 'no'),
(67, 'aa_aa', 'ishank_sharma', 'is that you alex?\r\n', '2019-08-11 12:01:44', 'no', 'no', 'no'),
(68, 'aa_aa', 'ishank_sharma', 'hmm maybe\r\n', '2019-08-14 20:11:30', 'no', 'no', 'no'),
(69, 'aman_bhatnagar', 'ishank_sharma', 'Heyyyy', '2019-08-16 16:05:53', 'yes', 'yes', 'no'),
(70, 'test_test', 'ishank_sharma', 'asdasd', '2019-08-17 23:14:17', 'no', 'no', 'no'),
(71, 'aman_bhatnagar', 'ishank_sharma', 'sdkjfbsdlkjhfslkjdf\r\n\\', '2019-08-27 18:53:31',
'no', 'no', 'no'),
(72, 'ishank_sharma', 'ishank_sharma', 'Hey', '2019-08-30 23:13:53', 'yes', 'yes', 'no'),
(73, 'ishank_sharma', 'kiran_dalawai', 'Hi IShank Brooooo!!\r\n', '2019-08-30 23:52:22', 'yes',
'yes', 'no'),
(74, 'kiran_dalawai', 'ishank_sharma', 'Heyyy', '2019-08-30 23:52:59', 'no', 'no', 'no'),
(75, 'kiran_dalawai', 'ishank_sharma', 'Ishank', '2019-09-08 16:49:17', 'no', 'no', 'no'),
(76, 'kiran_dalawai', 'ishank_sharma', 'Ishank', '2019-09-08 16:52:25', 'no', 'no', 'no'),
(77, 'kiran_dalawai', 'ishank_sharma', 'sdksdk', '2019-09-10 00:15:47', 'no', 'no', 'no');
 -- --------------------------------------------------------
--
-- Table structure for table `migration_versions`
--
 CREATE TABLE `migration_versions` (
`version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
`executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
 --
-- Dumping data for table `migration_versions`
--
 INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20190831082050', '2019-08-31 08:24:54');
 -- --------------------------------------------------------
 --
-- Table structure for table `notifications`
--
 CREATE TABLE `notifications` (
`id` int(11) NOT NULL,
`user_to` varchar(50) NOT NULL,
`user_from` varchar(50) NOT NULL,
`message` text NOT NULL,
`link` varchar(100) NOT NULL,
`datetime` datetime NOT NULL,
`opened` varchar(3) NOT NULL,
`viewed` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 --
-- Dumping data for table `notifications`
--
 INSERT INTO `notifications` (`id`, `user_to`, `user_from`, `message`, `link`, `datetime`,
`opened`, `viewed`) VALUES
(33, 'aa_aa', 'ishank_sharma', 'Ishank Sharma liked your post', 'post.php?id=125', '2019-08-11
12:02:05', 'no', 'no'),
(34, 'aa_aa', 'ishank_sharma', 'Ishank Sharma commented on your post', 'post.php?id=125','2019-08-11 12:02:14', 'no', 'no'),
(35, 'aman_bhatnagar', 'ishank_sharma', 'Ishank Sharma liked your post', 'post.php?id=135',
'2019-08-27 18:53:44', 'no', 'no'),
(36, 'ishank_sharma', 'kiran_dalawai', 'Kiran Dalawai commented on your post', 'post.php
id=131', '2019-08-30 23:52:06', 'yes', 'yes'),
(37, 'aman_bhatnagar', 'ishank_sharma', 'Ishank Sharma commented on your post',
'post.php?id=135', '2019-08-31 00:00:14', 'no', 'no'),
(38, 'kiran_dalawai', 'ishank_sharma', 'Ishank Sharma liked your post', 'post.php?id=139',
'2019-08-31 14:21:56', 'no', 'no'),
(39, 'kiran_dalawai', 'ishank_sharma', 'Ishank Sharma commented on your post', 'post.php
id=139', '2019-08-31 14:22:22', 'no', 'no'),
(40, 'kiran_dalawai', 'ishank_sharma', 'Ishank Sharma commented on your post', 'post.php
id=139', '2019-09-08 16:40:16', 'no', 'no'),
(41, 'kiran_dalawai', 'ishank_sharma', 'Ishank Sharma commented on your post', 'post.php
id=139', '2019-09-08 16:40:18', 'no', 'no'),
(42, 'kiran_dalawai', 'ishank_sharma', 'Ishank Sharma commented on your post', 'post.php
id=139', '2019-09-08 16:40:51', 'no', 'no'),
(43, 'kiran_dalawai', 'ishank_sharma', 'Ishank Sharma commented on your post', 'post.php
id=139', '2019-09-08 16:40:57', 'no', 'no'),
(44, 'aman_bhatnagar', 'ishank_sharma', 'Ishank Sharma commented on your post',
'post.php?id=135', '2019-09-08 16:42:20', 'no', 'no');
 -- --------------------------------------------------------
 --
-- Table structure for table `posts`
--
 CREATE TABLE `posts` (
`id` int(11) NOT NULL,
`body` text NOT NULL,
`added_by` varchar(60) NOT NULL,
`user_to` varchar(60) NOT NULL,
`date_added` datetime NOT NULL,
`user_closed` varchar(3) NOT NULL,
`deleted` varchar(3) NOT NULL,
`likes` int(11) NOT NULL,
`image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 --
-- Dumping data for table `posts`--
 INSERT INTO `posts` (`id`, `body`, `added_by`, `user_to`, `date_added`, `user_closed`,
`deleted`, `likes`, `image`) VALUES
(125, 'No', 'aa_aa', 'none', '2019-08-06 19:56:15', 'no', 'no', 0, ''),
(126, 'Ishank Sharma\r\n', 'ishank_sharma', 'none', '2019-08-10 22:55:00', 'no', 'yes', 0, ''),
(127, 'Ishank Sharma\r\n', 'ishank_sharma', 'none', '2019-08-10 22:58:57', 'no', 'yes', 0, ''),
(128, 'I\'m tired of being upset about mass shootings and the government\'s lack of
progress to end them. I\'m particularly tired of the partisan bickering around talking points
that have no basis in fact. The left wants this to be about guns. The right wants to blame
mental illness and video games. What is needed is deep analysis to look at the causes, craft
a fact-based solution, and then implement it.', 'ishank_sharma', 'none', '2019-08-12
19:02:08', 'no', 'no', 0, ''),
(129, 'Like many of you, I watched eight-plus hours of Democratic debates last week, and
they seem to be getting worse over time. The last effort made it look like CNN was trying
harder to create drama than to help people make a choice among the candidates. We have
a ton of technology -- some new, some in place for decades -- that could make this process
far more informative.', 'ishank_sharma', 'none', '2019-08-12 19:02:20', 'no', 'yes', 0, ''),
(130, 'Launching a new car company and getting it to global scale doesn\'t happen often,
and it has been a long time since there has been a successful launch of one in the United
States. Tesla really stands alone as the only new U.S. car company of scale since American
Motors and Studebaker failed decades ago, when three auto companies then dominated
the U.S. industry.', 'ishank_sharma', 'none', '2019-08-12 19:02:33', 'no', 'yes', 0, ''),
(131, 'It was bound to happen. Salesforce was going to China at some point, and it
announced that action this week saying it was partnering with Alibaba. There are so many
ways to read this, but I don\'t have the filters to resist comparing the announcement to
what Robin Williams once said about cocaine: \"Cocaine is God\'s way of telling you you are
making too much money.\"', 'ishank_sharma', 'none', '2019-08-12 19:02:59', 'no', 'yes', 0, ''),
(132, 'IShank Sharma', 'ishank_sharma', 'none', '2019-08-14 15:51:43', 'no', 'yes', 0, ''),
(133, 'This is the workplan', 'ishank_sharma', 'none', '2019-08-14 20:11:05', 'no', 'yes', 0,
'assets/images/posts/5d541d81a5bfbRegistration Form (1).png'),
(134, 'This is a sample post!!', 'ishank_sharma', 'none', '2019-08-16 16:04:00', 'no', 'yes', 0,
'assets/images/posts/5d568698f1573Registration Form (1).png'),
(135, '<br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed
3_odWVNb_Qw\'></iframe><br>', 'aman_bhatnagar', 'none', '2019-08-16 16:06:44', 'no', 'no',
0, ''),
(136, 'hello', 'ddd_ddddd', 'none', '2019-08-21 01:55:24', 'no', 'no', 0, ''),
(137, 'No\r\n', 'ishank_sharma', 'none', '2019-08-21 20:11:49', 'no', 'yes', 0, ''),
(138, 'Ishank', 'ishank_sharma', 'none', '2019-08-27 18:53:58', 'no', 'yes', 0, ''),
(139, 'This is Kiran Dalawai', 'kiran_dalawai', 'none', '2019-08-30 23:51:45', 'no', 'no', 0, ''),
(140, 'sadasdasd', 'ishank_sharma', 'none', '2019-09-08 17:15:41', 'no', 'yes', 0, ''),
(141, 'asdasdasd', 'ishank_sharma', 'none', '2019-09-08 17:15:43', 'no', 'yes', 0, ''),(142, 'dsafsadfSAdfasdsadf', 'ishank_sharma', 'none', '2019-09-08 17:15:46', 'no', 'yes', 0, ''),
(143, 'asfSDfaSd', 'ishank_sharma', 'none', '2019-09-08 17:15:49', 'no', 'yes', 0, ''),
(144, 'dgesadgfsadgfsadg', 'ishank_sharma', 'none', '2019-09-08 17:15:56', 'no', 'yes', 0, ''),
(145, 'sadgasdfwaeradsf', 'ishank_sharma', 'none', '2019-09-08 17:16:00', 'no', 'yes', 0, ''),
(146, 'sdfasdfgsdfgwas', 'ishank_sharma', 'none', '2019-09-08 17:16:15', 'no', 'yes', 0, ''),
(147, 'dsrgfzsdzxcvzxczcvdf', 'ishank_sharma', 'none', '2019-09-08 17:16:22', 'no', 'yes', 0, ''),
(148, 'dfASdcszxcgbsafasdfsg', 'ishank_sharma', 'none', '2019-09-08 17:16:26', 'no', 'yes', 0, ''),
(149, 'dfsADfSDFAKHJSD,KJ HAGdf\r\n\r\n', 'ishank_sharma', 'none', '2019-09-08 17:16:40',
'no', 'yes', 0, ''),
(150, 'hdfhgtdfbxcb', 'ishank_sharma', 'none', '2019-09-08 17:16:46', 'no', 'yes', 0, ''),
(151, 'Recogmiseeeeeeeeeeee', 'ishank_sharma', 'none', '2019-09-08 17:16:52', 'no', 'yes', 0,
''),
(152, 'Recogmiseeeeeeeeeeee', 'ishank_sharma', 'none', '2019-09-08 17:16:59', 'no', 'yes', 0,
''),
(153, 'skddasndma,sd', 'ishank_sharma', 'none', '2019-09-10 00:36:32', 'no', 'yes', 0, ''),
(154, 'ASnm c,mzxlcnsldc mzclksD', 'ishank_sharma', 'none', '2019-09-10 00:36:37', 'no', 'yes',
0, ''),
(155, 'dsdnms c,ZCjnsdc zXcklsdcs, d', 'ishank_sharma', 'none', '2019-09-10 00:36:42', 'no',
'yes', 0, ''),
(156, 'dsdnms c,ZCjnsdc zXcklsdcs, d', 'ishank_sharma', 'none', '2019-09-10 00:36:51', 'no',
'yes', 0, ''),
(157, 'dsdnms c,ZCjnsdc zXcklsdcs, d', 'ishank_sharma', 'none', '2019-09-10 00:37:01', 'no',
'yes', 0, ''),
(158, 'dsdnms c,ZCjnsdc zXcklsdcs, d', 'ishank_sharma', 'none', '2019-09-10 00:37:12', 'no',
'yes', 0, ''),
(159, 'dsdnms c,ZCjnsdc zXcklsdcs, d', 'ishank_sharma', 'none', '2019-09-10 00:37:33', 'no',
'yes', 0, ''),
(160, 'Maintain 8.5+ CGPA (9+ shall be great).\r\nDo Competitive Coding on Codeforces
Daily(atleast for complete 4years of Engineering). Use C++ or Java.\r\nApply Internships
every summer starting from 1st year itself(just apply you will get the internships for 2
months in summer at startups) (learn HTML, CSS, Bootstrap, Python).\r\nParticipate in
Coding competitions on Hackerearth, Codechef, codeforces, Hackerrank, interviewbit. Get
good rank in competitions and mention them in your Resume as Achievements
\r\nCompetitive programming is the road to success in CSE.\r\n\r\nParticipate in ACM ICPC,
Google Code Jam, Hackercup, Code Agon. And mention these in your resume, you will get
Interview calls from many big companies.\r\n\r\n(Learn OOP, Operating Systems, Computer
Networks during your college studies.\r\n\r\nIf you are not doing Competitive
programming then forget the dream of getting a good job at a Product Company
\r\n\r\nDon\'t get distracted by the buzz tech words like ML, Deep Learning, Block chain etc
\r\n\r\nJust practice coding on Codeforces/Codechef that\'s it you will get a good Job at a
good company and will get to work on very good Projects there.\r\n\r\nDon\'t worry about
doing personal projects during College, just do Internships for 2 months at Startups from1st year itself and mention them as experience and Projects.\r\n\r\nJust do Competitive
Programming everyday in C++ or Java.\r\n\r\nP.S. Take this answer seriously\r\n\r\nEdit 1:
Addressing one of the comments that after doing only Competitive Programming, one will
find their job work tough.\r\n\r\nNo it\'s not that way. If you are able to develop problem
solving skills through Competitive Programming, you will not find projects at your job
tough, you will be able to keep calm and think the solution for problems at your job
\r\n\r\nAnyway, doing Internships during Summer (2 months) from 1st year itself shall give
you enough exposure to development things.\r\n\r\nIn the rest of your time just do
Competitive Programming.', 'ishank_sharma', 'none', '2019-09-10 00:42:22', 'no', 'no', 0, ''),
(161, 'Don\'t mess up with the topper or intelligent dude of your batch. Life can turn the
table anytime.\r\nDon\'t be the Lord of the last bench. Seems cool during college but hit
you hard in future.\r\nDon\'t bunk class too often, it\'s ok to bunk sometimes. (My mistakes
\r\nFriends, Lover, Forever, Together all these are illusions. Stop watching Bollywood crap
\r\nKeep learning something new. Keep on reading, you will always learn something new
\r\nDon\'t get into a relationship until you have achieved something. Because money and
love both matter equally.\r\nFind your passion, don\'t just want to get placed in some
MNCs.\r\nFind your motivation, it can be anyone your partner, dreams, anything. Mostly I
think it\'s girl if you love her truly. xD\r\nDon\'t let your emotions overcome your
intelligence. (Post-breakup tips)\r\nHave discipline in life. It will work everywhere
\r\nRemember one thing... Well dressed man is hotter than a bare-chested guy with six
packs.\r\nDon\'t get addicted to social media, if you want, get addicted to Quora.\r\nStop
watching motivational videos and quotes, instead start doing it.\r\nDon\'t stop giving your
best just because someone hasn\'t credited you.\r\nMovies like Student of the year and 3
idiots are completely fictional, Rancho is an a$$hole, I repeat a$$hole.', 'ishank_sharma',
'none', '2019-09-10 00:51:24', 'no', 'no', 0, ''),
(162, 'Don\'t mess up with the topper or intelligent dude of your batch. Life can turn the
table anytime.\r\nDon\'t be the Lord of the last bench. Seems cool during college but hit
you hard in future.\r\nDon\'t bunk class too often, it\'s ok to bunk sometimes. (My mistakes
\r\nFriends, Lover, Forever, Together all these are illusions. Stop watching Bollywood crap
\r\nKeep learning something new. Keep on reading, you will always learn something new
\r\nDon\'t get into a relationship until you have achieved something. Because money and
love both matter equally.\r\nFind your passion, don\'t just want to get placed in some
MNCs.\r\nFind your motivation, it can be anyone your partner, dreams, anything. Mostly I
think it\'s girl if you love her truly. xD\r\nDon\'t let your emotions overcome your
intelligence. (Post-breakup tips)\r\nHave discipline in life. It will work everywhere
\r\nRemember one thing... Well dressed man is hotter than a bare-chested guy with six
packs.\r\nDon\'t get addicted to social media, if you want, get addicted to Quora.\r\nStop
watching motivational videos and quotes, instead start doing it.\r\nDon\'t stop giving your
best just because someone hasn\'t credited you.\r\nMovies like Student of the year and 3
idiots are completely fictional, Rancho is an a$$hole, I repeat a$$hole.', 'ishank_sharma',
'none', '2019-09-10 00:51:50', 'no', 'no', 0, ''),
(163, 'My new wallpaper', 'ishank_sharma', 'none', '2019-09-10 00:56:08', 'no', 'no', 0, 'assetsimages/posts/5d76a74ff23e3mikael-gustafsson-amongtrees-2-8.jpg'),
(164, 'Machine Learning is a field of computer science concerned with developing systems
that can learn from data.\r\n\r\nLike statistics and linear algebra, probability is another
foundational field that supports machine learning. Probability is a field of mathematics
concerned with quantifying uncertainty.\r\n\r\nMany aspects of machine learning are
uncertain, including, most critically, observations from the problem domain and the
relationships learned by models from that data. As such, some understanding of probability
and tools and methods used in the field are required by a machine learning practitioner to
be effective. Perhaps not initially, but certainly in the long run.\r\n\r\nIn this post, you will
discover some of the key resources that you can use to learn about the parts of probability
required for machine learning.\r\n\r\nAfter reading this post, you will know
\r\n\r\nReferences that you can use to discover topics on probability.\r\nBooks, chapters,
and sections that cover probability in the context of machine learning.\r\nA division
between foundational probability topics and machine learning methods that leverage
probability.', 'ishank_sharma', 'none', '2019-09-10 00:59:44', 'no', 'no', 0, '');
 -- --------------------------------------------------------
 --
-- Table structure for table `trends`
--
 CREATE TABLE `trends` (
`title` varchar(50) NOT NULL,
`hits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 --
-- Dumping data for table `trends`
--
 INSERT INTO `trends` (`title`, `hits`) VALUES
('Sd', 1),
('Asasa', 1),
('Asas', 3),
('Ishank', 10),
('Sharma', 2),
('Sasas', 1),
('Yess', 1),
('Earth', 2),
('Beautifulrnrn', 1),
('Drfdf', 1),('Saas', 1),
('Picture', 1),
('Universe', 2),
('Repost', 2),
('Panda', 2),
('Googles', 1),
('Selfdriving', 1),
('Cars', 1),
('Robots', 1),
('Lot', 1),
('Press', 1),
('Companys', 1),
('Real', 1),
('Future', 1),
('Machine', 12),
('Learning', 13),
('Technology', 2),
('Enables', 1),
('Computers', 1),
('Smarter', 1),
('Personalrnrn', 1),
('Eric', 1),
('Schmidt', 1),
('Google', 2),
('Chairman', 1),
('Broadly', 1),
('3', 3),
('Types', 1),
('Algorithmsrn1', 1),
('Supervised', 2),
('LearningrnHow', 3),
('Algorithm', 5),
('Consist', 1),
('Target', 2),
('Outcome', 4),
('Variable', 3),
('Dependent', 1),
('Predicted', 1),
('Set', 3),
('Predictors', 1),
('Independent', 2),
('Variables', 3),('Using', 3),
('Generate', 1),
('Function', 2),
('Map', 1),
('Inputs', 1),
('Desired', 2),
('Outputs', 1),
('Training', 2),
('Process', 2),
('Continues', 1),
('Model', 1),
('Achieves', 1),
('Level', 1),
('Accuracy', 1),
('Data', 3),
('Examples', 2),
('Regression', 5),
('Decision', 2),
('Tree', 1),
('Random', 1),
('Forest', 1),
('KNN', 1),
('Logistic', 2),
('Etcrnrn', 1),
('Rnrn2', 1),
('Unsupervised', 2),
('Predict', 1),
('Estimate', 2),
('Clustering', 1),
('Population', 1),
('Widely', 1),
('Segmenting', 1),
('Customers', 1),
('Specific', 2),
('Intervention', 1),
('Apriori', 1),
('Kmeansrnrn', 1),
('Rnrn3', 1),
('Reinforcement', 2),
('Trained', 1),
('Decisions', 2),
('Exposed', 1),('Environment', 1),
('Trains', 1),
('Continually', 1),
('Trial', 1),
('Error', 1),
('Learns', 1),
('Past', 1),
('Experience', 2),
('Tries', 1),
('Capture', 1),
('Knowledge', 1),
('Accurate', 1),
('Business', 1),
('Example', 1),
('Markov', 1),
('Processrnrn', 1),
('Dont', 7),
('Confused', 1),
('Name', 1),
('Classification', 1),
('Discrete', 1),
('Values', 3),
('Binary', 1),
('01', 1),
('Yesno', 1),
('Truefalse', 1),
('Based', 2),
('Simple', 2),
('Words', 2),
('Predicts', 2),
('Probability', 10),
('Occurrence', 1),
('Event', 1),
('Fitting', 1),
('Logit', 2),
('Hence', 1),
('Output', 1),
('Lies', 1),
('0', 1),
('1', 2),
('ExpectedrnrnAgain', 1),
('Try', 1),('Understand', 2),
('ExamplernrnLets', 1),
('Friend', 1),
('Puzzle', 1),
('Solve', 3),
('2', 4),
('Scenarios', 1),
('Imagine', 1),
('Wide', 1),
('Range', 1),
('Puzzles', 1),
('Quizzes', 1),
('Attempt', 1),
('Subjects', 1),
('Study', 1),
('Trignometry', 1),
('Tenth', 1),
('Grade', 2),
('70', 1),
('Hand', 1),
('Fifth', 1),
('History', 1),
('Question', 1),
('Getting', 4),
('Answer', 2),
('30', 1),
('Provides', 1),
('Hello', 2),
('Posting', 1),
('Editorials', 1),
('Codechef', 2),
('Post', 5),
('Posts', 3),
('Friends', 2),
('Youtube', 1),
('Videos', 3),
('Embedded', 1),
('Writing', 1),
('Url', 1),
('News', 1),
('Feedrn', 1),
('Sharmarnis', 1),('RnCoolrnbut', 1),
('Lazy', 1),
('Anythingrn', 1),
('RnEnter', 1),
('Wallpaper', 2),
('Sharmamamammarn', 1),
('Talk', 1),
('Importantrn', 1),
('DevRant', 1),
('Sharmarn', 2),
('Tired', 2),
('Upset', 1),
('Mass', 1),
('Shootings', 1),
('Governments', 1),
('Lack', 1),
('Progress', 1),
('Particularly', 1),
('Partisan', 1),
('Bickering', 1),
('Talking', 1),
('Basis', 1),
('Left', 1),
('Guns', 1),
('Blame', 1),
('Mental', 1),
('Illness', 1),
('Video', 1),
('Games', 1),
('Deep', 2),
('Analysis', 1),
('Look', 2),
('Causes', 1),
('Craft', 1),
('Factbased', 1),
('Solution', 2),
('Implement', 1),
('Watched', 1),
('Eightplus', 1),
('Hours', 1),
('Democratic', 1),
('Debates', 1),('Week', 2),
('Worse', 1),
('Time', 3),
('Effort', 1),
('CNN', 1),
('Trying', 1),
('Harder', 1),
('Create', 1),
('Drama', 1),
('Help', 1),
('People', 1),
('Choice', 1),
('Candidates', 1),
('Ton', 1),
('Decades', 2),
('Informative', 1),
('Launching', 1),
('Car', 2),
('Company', 3),
('Global', 1),
('Scale', 2),
('Doesnt', 1),
('Happen', 2),
('Successful', 1),
('Launch', 1),
('United', 1),
('Tesla', 1),
('Stands', 1),
('American', 1),
('Motors', 1),
('Studebaker', 1),
('Failed', 1),
('Ago', 1),
('Auto', 1),
('Companies', 1),
('Dominated', 1),
('Industry', 1),
('Bound', 1),
('Salesforce', 1),
('China', 1),
('Announced', 1),
('Action', 1),('Saying', 1),
('Partnering', 1),
('Alibaba', 1),
('Read', 1),
('Filters', 1),
('Resist', 1),
('Comparing', 1),
('Announcement', 1),
('Robin', 1),
('Williams', 1),
('Cocaine', 2),
('Gods', 1),
('Telling', 1),
('Money', 3),
('Workplan', 1),
('Sample', 1),
('Norn', 1),
('Kiran', 1),
('Dalawai', 1),
('Sadasdasd', 1),
('Asdasdasd', 1),
('DsafsadfSAdfasdsadf', 1),
('AsfSDfaSd', 1),
('Dgesadgfsadgfsadg', 1),
('Sadgasdfwaeradsf', 1),
('Sdfasdfgsdfgwas', 1),
('Dsrgfzsdzxcvzxczcvdf', 1),
('DfASdcszxcgbsafasdfsg', 1),
('DfsADfSDFAKHJSDKJ', 1),
('HAGdfrnrn', 1),
('Hdfhgtdfbxcb', 1),
('Recogmiseeeeeeeeeeee', 2),
('Skddasndmasd', 1),
('ASnm', 1),
('Cmzxlcnsldc', 1),
('MzclksD', 1),
('Dsdnms', 5),
('CZCjnsdc', 5),
('ZXcklsdcs', 5),
('Maintain', 1),
('85', 1),
('CGPA', 1),('9', 1),
('GreatrnDo', 1),
('Competitive', 6),
('Coding', 3),
('Codeforces', 2),
('Dailyatleast', 1),
('Complete', 1),
('4years', 1),
('Engineering', 1),
('JavarnApply', 1),
('Internships', 4),
('Summer', 3),
('Starting', 1),
('1st', 3),
('Itselfjust', 1),
('Apply', 1),
('Months', 3),
('Startups', 2),
('Learn', 5),
('HTML', 1),
('CSS', 1),
('Bootstrap', 1),
('PythonrnParticipate', 1),
('Competitions', 2),
('Hackerearth', 1),
('Hackerrank', 1),
('Interviewbit', 1),
('Rank', 1),
('Mention', 3),
('Resume', 2),
('AchievementsrnCompetitive', 1),
('Programming', 6),
('Road', 1),
('Success', 1),
('CSErnrnParticipate', 1),
('ACM', 1),
('ICPC', 1),
('Code', 2),
('Jam', 1),
('Hackercup', 1),
('Agon', 1),
('Interview', 1),('Calls', 1),
('CompaniesrnrnLearn',('OOP', 1),
('Operating', 1),
('Systems', 2),
('Computer', 2),
('Networks', 1),
('College', 4),
('StudiesrnrnIf', 1),
('Doing', 6),
('Forget', 1),
('Dream', 1),
('Job', 4),
('Product', 1),
('CompanyrnrnDont', 1),
('Distracted', 1),
('Buzz', 1),
('Tech', 1),
('ML', 1),
('Block', 1),
('Chain', 1),
('EtcrnrnJust', 1),
('Practice', 1),
('CodeforcesCodechef',('Thats', 1),
('Projects', 3),
('TherernrnDont', 1),
('Worry', 1),
('Personal', 1),
('ProjectsrnrnJust', 1),
('Everyday', 1),
('JavarnrnPS', 1),
('SeriouslyrnrnEdit', 1),
('Addressing', 1),
('Comments', 1),
('ToughrnrnNo', 1),
('Able', 2),
('Develop', 1),
('Solving', 1),
('Skills', 1),
('Tough', 1),
('Calm', 1),1),
1),
('JobrnrnAnyway', 1),
('Exposure', 1),
('Development', 1),
('ThingsrnrnIn', 1),
('Rest', 1),
('Mess', 2),
('Topper', 2),
('Intelligent', 2),
('Dude', 2),
('Batch', 2),
('Life', 4),
('Table', 2),
('AnytimernDont', 2),
('Lord', 2),
('Bench', 2),
('Cool', 2),
('Hit', 2),
('Hard', 2),
('FuturernDont', 2),
('Bunk', 4),
('Class', 2),
('Ok', 2),
('Sometimes', 2),
('MistakesrnFriends',('Lover', 2),
('Forever', 2),
('Illusions', 2),
('Stop', 4),
('Watching', 4),
('Bollywood', 2),
('CraprnKeep', 2),
('Reading', 3),
('NewrnDont', 2),
('Relationship', 2),
('Achieved', 2),
('Love', 4),
('Matter', 2),
('EquallyrnFind', 2),
('Passion', 2),
('Placed', 2),
('MNCsrnFind', 2),
('Motivation', 2),2),
('Partner', 2),
('Dreams', 2),
('Girl', 2),
('Truly', 2),
('XDrnDont', 2),
('Emotions', 2),
('Overcome', 2),
('Intelligence', 2),
('Postbreakup', 2),
('TipsrnHave', 2),
('Discipline', 2),
('EverywherernRemember', 2),
('Dressed', 2),
('Hotter', 2),
('Barechested', 2),
('Guy', 2),
('SixpacksrnDont', 2),
('Addicted', 4),
('Social', 2),
('Media', 2),
('QuorarnStop', 2),
('Motivational', 2),
('Quotes', 2),
('Instead', 2),
('Start', 2),
('ItrnDont', 2),
('Giving', 2),
('Hasnt', 2),
('Credited', 2),
('YournMovies', 2),
('Student', 2),
('Idiots', 2),
('Completely', 2),
('Fictional', 2),
('Rancho', 2),
('Ahole', 4),
('Repeat', 2),
('Field', 4),
('Science', 1),
('Concerned', 2),
('Developing', 1),
('DatarnrnLike', 1),('Statistics', 1),
('Linear', 1),
('Algebra', 1),
('Foundational', 2),
('Supports', 1),
('Mathematics', 1),
('Quantifying', 1),
('UncertaintyrnrnMany', 1),
('Aspects', 1),
('Uncertain', 1),
('Including', 1),
('Critically', 1),
('Observations', 1),
('Domain', 1),
('Relationships', 1),
('Learned', 1),
('Models', 1),
('Understanding', 1),
('Tools', 1),
('Methods', 2),
('Required', 2),
('Practitioner', 1),
('Effective', 1),
('Initially', 1),
('RunrnrnIn', 1),
('Discover', 2),
('Key', 1),
('Resources', 1),
('LearningrnrnAfter', 1),
('KnowrnrnReferences', 1),
('Topics', 2),
('ProbabilityrnBooks', 1),
('Chapters', 1),
('Sections', 1),
('Cover', 1),
('Context', 1),
('LearningrnA', 1),
('Division', 1),
('Leverage', 1);
 -- --------------------------------------------------------
--
-- Table structure for table `users`
--
 CREATE TABLE `users` (
`id` int(11) NOT NULL,
`first_name` varchar(25) NOT NULL,
`last_name` varchar(25) NOT NULL,
`username` varchar(100) NOT NULL,
`email` varchar(100) NOT NULL,
`password` varchar(255) NOT NULL,
`signup_date` date NOT NULL,
`profile_pic` varchar(255) NOT NULL,
`num_posts` int(11) NOT NULL,
`num_likes` int(11) NOT NULL,
`user_closed` varchar(3) NOT NULL,
`friend_array` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 --
-- Dumping data for table `users`
--
 INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`,
`signup_date`, `profile_pic`, `num_posts`, `num_likes`, `user_closed`, `friend_array`) VALUES
(26, 'Ishank', 'Sharma', 'ishank_sharma', 'Ishank@gmail.com',
'fc5e038d38a57032085441e7fe7010b0', '2019-08-06', 'assets/images/profile_pics
5d696035bf4b1avataaars (1).png', 36, 4, 'no',
',aman_bhatnagar,kiran_dalawai,random_person,'),
(29, 'Sagar', 'Gaur', 'sagar_gaur', 'Sagar@gmail.com',
'fc5e038d38a57032085441e7fe7010b0', '2019-08-06', 'assets/images/profile_pics/default
image_5.jpg', 0, 0, 'no', ','),
(31, 'Aman', 'Bhatnagar', 'aman_bhatnagar', 'Aman@gmail.com',
'fc5e038d38a57032085441e7fe7010b0', '2019-08-06', 'assets/images/profile_pics/default
image_5.jpg', 1, 2, 'no', ',ishank_sharma,'),
(32, 'Aa', 'Aa', 'aa_aa', 'A@a.a', '594f803b380a41396ed63dca39503542', '2019-08-06', 'assets
images/profile_pics/default/image_10.jpg', 1, 1, 'no', ','),
(33, '', '', 'ray_roberts', 'M1sf3t+ed@gmail.com', 'eb1beaa9de504874842b08774692a992',
'2019-08-08', 'assets/images/profile_pics/default/avataaars(1).png', 0, 0, 'no', ','),
(34, 'Test', 'Test', 'test_test', 'Test@test.com', '05a671c66aefea124cc08b76ea6d30bb',
'2019-08-08', 'assets/images/profile_pics/default/image_11.jpg', 0, 0, 'no', ','),
(35, 'Ddd', 'Ddddd', 'ddd_ddddd', 'Dddd2d@d.com', '5f4dcc3b5aa765d61d8327deb882cf99','2019-08-21', 'assets/images/profile_pics/default/image_3.jpg', 1, 0, 'yes', ','),
(36, 'Kiran', 'Dalawai', 'kiran_dalawai', 'Kiran@gmail.com',
'fc5e038d38a57032085441e7fe7010b0', '2019-08-30', 'assets/images/profile_pics/default
image_14.jpg', 1, 1, 'no', ',ishank_sharma,'),
(37, 'Aman', 'Bhatnagar', 'aman_bhatnagar_1', 'Aman123@gmail.com',
'fc5e038d38a57032085441e7fe7010b0', '2019-09-08', 'assets/images/profile_pics/default
avataaars(3).png', 0, 0, 'no', ','),
(38, 'Random', 'Person', 'random_person', 'Random@gmail.com',
'fc5e038d38a57032085441e7fe7010b0', '2019-09-10', 'assets/images/profile_pics/default
image_4.jpg', 0, 0, 'no', ',ishank_sharma,');
 --
-- Indexes for dumped tables
--
 --
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
ADD PRIMARY KEY (`id`);
 --
-- Indexes for table `comments`
--
ALTER TABLE `comments`
ADD PRIMARY KEY (`id`);
 --
-- Indexes for table `friend_requests`
--
ALTER TABLE `friend_requests`
ADD PRIMARY KEY (`id`);
 --
-- Indexes for table `likes`
--
ALTER TABLE `likes`
ADD PRIMARY KEY (`id`);
 --
-- Indexes for table `messages`
--ALTER TABLE `messages`
ADD PRIMARY KEY (`id`);
 --
-- Indexes for table `migration_versions`
--
ALTER TABLE `migration_versions`
ADD PRIMARY KEY (`version`);
 --
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
ADD PRIMARY KEY (`id`);
 --
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
 --
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46; --
-- AUTO_INCREMENT for table `friend_requests`
--
ALTER TABLE `friend_requests`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
 --
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
 --
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
 --
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
 --
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;
 --
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;
 /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
