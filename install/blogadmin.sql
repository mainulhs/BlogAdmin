-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2016 at 03:26 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blogadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
`id` int(11) NOT NULL,
  `fileName` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `path` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `fileName`, `description`, `name`, `size`, `type`, `path`) VALUES
(1, 'Doc file', 'none', '6A69C369-E9E8-4873-A274-FEFD8664A8D2.jpg', '182201', 'image/jpeg', '../public/upload/6A69C369-E9E8-4873-A274-FEFD8664A');

-- --------------------------------------------------------

--
-- Table structure for table `education_info`
--

CREATE TABLE IF NOT EXISTS `education_info` (
`id` int(11) NOT NULL,
  `degreeName` varchar(50) DEFAULT NULL,
  `institutionName` varchar(255) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `passYear` varchar(50) DEFAULT NULL,
  `cgpa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education_info`
--

INSERT INTO `education_info` (`id`, `degreeName`, `institutionName`, `subject`, `passYear`, `cgpa`) VALUES
(6, 'S.S.C', 'Barahatia Adrasha High School', 'Science', '2008', '5.00'),
(7, 'H.S.C', 'Satkania Govt. College', 'Science', '2010', '3.70'),
(8, 'B.Sc', 'University of Science & Technology Chittagong (USTC)', 'Computer Science & Engineering (CSE)', '2015', '3.70');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE IF NOT EXISTS `experience` (
`id` int(11) NOT NULL,
  `companyName` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `startDate` varchar(50) DEFAULT NULL,
  `endDate` varchar(50) DEFAULT NULL,
  `jyear` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `companyName`, `position`, `description`, `startDate`, `endDate`, `jyear`) VALUES
(6, 'Apple', 'Software engineer', 'A professional web designer and web developer from Chittagong, Bangladesh. I create creative designs', '2016/04/06', '2016/04/06', '2 Years'),
(7, 'Twitter', ' Creative Direction ', 'A professional web designer and web developer from Chittagong, Bangladesh. I create creative designs', '2016/04/06', '2016/04/06', '1 Year'),
(8, 'Envato', ' UI/UX Designer', 'A professional web designer and web developer from Chittagong, Bangladesh. I create creative designs', '2016/04/06', '2016/04/06', '1 month');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE IF NOT EXISTS `gallary` (
`id` int(11) NOT NULL,
  `imageName` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `path` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id`, `imageName`, `name`, `size`, `type`, `path`, `description`) VALUES
(1, 'Projects', '9683B485-05ED-479E-816F-DB5AA4C693FA.jpg', '116905', 'image/jpeg', '../public/upload/9683B485-05ED-479E-816F-DB5AA4C69', 'none'),
(2, 'Coffees', '831C7B84-893A-425F-A388-7E9E9D795297.jpg', '122060', 'image/jpeg', '../public/upload/831C7B84-893A-425F-A388-7E9E9D795', 'none'),
(3, 'Clients', 'C4FB1A61-4F87-45D3-8FF9-FF3527A90F3C.jpg', '112321', 'image/jpeg', '../public/upload/C4FB1A61-4F87-45D3-8FF9-FF3527A90', 'none'),
(4, 'Contests Won', '6AAEE3D3-AA72-4FB8-BAA1-96EE43829048.jpg', '97337', 'image/jpeg', '../public/upload/6AAEE3D3-AA72-4FB8-BAA1-96EE43829', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `hobbie`
--

CREATE TABLE IF NOT EXISTS `hobbie` (
`id` int(11) NOT NULL,
  `h_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hobbie`
--

INSERT INTO `hobbie` (`id`, `h_name`) VALUES
(1, 'Space'),
(4, 'Music'),
(5, 'Traveling'),
(6, 'Video Games'),
(7, 'Movies'),
(8, 'Forest'),
(9, 'Books'),
(10, 'Photos');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'pass123'),
(5, 'sumon', 'st123');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
`id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `path` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
`id` int(11) NOT NULL,
  `imageName` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `path` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile_info`
--

CREATE TABLE IF NOT EXISTS `profile_info` (
`id` int(11) NOT NULL,
  `title` varchar(10) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `gender` char(20) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `fathername` varchar(50) DEFAULT NULL,
  `mothername` varchar(50) DEFAULT NULL,
  `pre_address` varchar(100) DEFAULT NULL,
  `per_address` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `path` varchar(50) DEFAULT NULL,
  `maritial_st` char(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_info`
--

INSERT INTO `profile_info` (`id`, `title`, `firstname`, `lastname`, `gender`, `designation`, `fathername`, `mothername`, `pre_address`, `per_address`, `city`, `country`, `nationality`, `email`, `mobile`, `religion`, `dob`, `age`, `name`, `size`, `type`, `path`, `maritial_st`) VALUES
(3, 'Mr.', 'Mainul', 'Hassan', 'Male', 'Software Engineer', 'Abu Shama', 'Meherun nissa', 'Lal Khan Bazar', 'Lohagara', 'Chittagong', 'Bangladesh', 'Bangladeshi', 'mainul_hs@yahoo.com', '01558950834', 'Islam', '1992/04/11', 24, '5C242CF2-C586-4D2A-9707-36091D29AAF1.jpg', '182201', 'image/jpeg', '../public/upload/5C242CF2-C586-4D2A-9707-36091D29A', 'Single');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
`id` int(11) NOT NULL,
  `serviceName` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `path` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `serviceName`, `description`, `name`, `size`, `type`, `path`) VALUES
(2, 'Inovative Ideas', 'A professional web designer and web developer from Chittagong, Bangladesh. I create creative designs  and creative solutions.', 'A2AC7C9B-47CA-416D-936F-9BFC3F4211A7.jpg', '172019', 'image/jpeg', '../public/upload/A2AC7C9B-47CA-416D-936F-9BFC3F421'),
(3, 'Clean code', 'A professional web designer and web developer from Chittagong, Bangladesh. I create creative designs  and creative solutions.', '690A8105-7B2F-473D-A0F9-C204FA30A9D6.jpg', '122060', 'image/jpeg', '../public/upload/690A8105-7B2F-473D-A0F9-C204FA30A'),
(4, 'HTML5', 'A professional web designer and web developer from Chittagong, Bangladesh. I create creative designs  and creative solutions.', '03AB46C5-E30C-4238-AF00-9B3028C12457.jpg', '98447', 'image/jpeg', '../public/upload/03AB46C5-E30C-4238-AF00-9B3028C12'),
(5, 'WordPress', 'A professional web designer and web developer from Chittagong, Bangladesh. I create creative designs  and creative solutions.', '37FFA7E8-1441-45F1-A87F-13D4F12D7F70.jpg', '122060', 'image/jpeg', '../public/upload/37FFA7E8-1441-45F1-A87F-13D4F12D7');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE IF NOT EXISTS `skill` (
`id` int(11) NOT NULL,
  `skillName` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `percentage` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `skillName`, `description`, `percentage`) VALUES
(5, 'Web-Designer and Back-end Developer', 'A professional web designer and web developer from Chittagong, Bangladesh. I create creative designs  and creative solutions.', '95%'),
(7, 'HTML5/CSS3', 'HTML5/CSS3', '95%'),
(8, 'C / C++', 'C / C++', '98%'),
(9, 'PHP', 'PHP', '75%'),
(10, 'MySQL', 'MySQL', '80%'),
(11, 'WordPress', 'WordPress', '70%'),
(12, 'Photoshop', 'Photoshop', '50%'),
(13, 'Web Design', 'Web Design', '75%');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
`id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `path` varchar(50) DEFAULT NULL,
  `caption` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `title`, `name`, `size`, `type`, `path`, `caption`) VALUES
(4, 'Mainul Hassan', '844D3CF6-04BF-4F7E-9B38-1E89D79115A6.jpg', '182201', 'image/jpeg', '../public/upload/844D3CF6-04BF-4F7E-9B38-1E89D7911', 'Formal Pic');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
`id` int(11) NOT NULL,
  `p_name` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `path` varchar(50) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `content` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE IF NOT EXISTS `testimonial` (
`id` int(11) NOT NULL,
  `p_name` varchar(50) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `com_name` varchar(50) DEFAULT NULL,
  `p_comment` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `path` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education_info`
--
ALTER TABLE `education_info`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hobbie`
--
ALTER TABLE `hobbie`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_info`
--
ALTER TABLE `profile_info`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `education_info`
--
ALTER TABLE `education_info`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hobbie`
--
ALTER TABLE `hobbie`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profile_info`
--
ALTER TABLE `profile_info`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
