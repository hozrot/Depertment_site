-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2016 at 07:02 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `accademic_year`
--

CREATE TABLE `accademic_year` (
  `session` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accademic_year`
--

INSERT INTO `accademic_year` (`session`, `batch`) VALUES
('2008-09', '1st'),
('2009-10', '2nd'),
('2010-11', '3rd'),
('2011-12', '4th'),
('2012-13', '5th'),
('2013-14', '6th'),
('2014-15', '7th'),
('2015-16', '8th');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` text NOT NULL,
  `designation` varchar(100) NOT NULL,
  `depertment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_name` text NOT NULL,
  `banner_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_name`, `banner_title`) VALUES
(7, '1.jpg', ''),
(9, '3.jpg', ''),
(11, '4.jpg', ''),
(12, '2.jpg', ''),
(13, '2360a944-6649-4306-a22f-8b903d016075_4.jpg', ''),
(15, '6.jpg', 'Main Gate');

-- --------------------------------------------------------

--
-- Table structure for table `continious_marks`
--

CREATE TABLE `continious_marks` (
  `student_id` varchar(100) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `attendence` int(11) NOT NULL,
  `class_test_1` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `class_test_2` int(11) NOT NULL,
  `assingment_presentation` int(11) NOT NULL,
  `continious_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `continious_marks`
--

INSERT INTO `continious_marks` (`student_id`, `course_code`, `attendence`, `class_test_1`, `mid`, `class_test_2`, `assingment_presentation`, `continious_total`) VALUES
('1109017', 'CSE 2101', 5, 5, 25, 5, 10, 50),
('1109022', 'CSE 2101', 4, 3, 23, 3, 5, 38),
('1109039', 'CSE 2101', 4, 0, 23, 4, 9, 40),
('1109040', 'CSE 2101', 4, 3, 20, 3, 7, 37);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_code` varchar(50) NOT NULL,
  `course_title` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `depertment` varchar(50) NOT NULL,
  `credits` float NOT NULL,
  `books` varchar(250) NOT NULL,
  `links` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_code`, `course_title`, `level`, `depertment`, `credits`, `books`, `links`) VALUES
('404_NF', 'à¦°à¦¸à¦¾à§Ÿà¦¨à§‡à¦° Chemistry', '', 'Chemestry', 69, 'WTH!!!', 'http://abukashem.com,http://chem.com,http://podma.com,'),
('CSE 2101', 'DLD', '2-1', 'CSE', 3, 'aaaaaaaaa', 'aaaaaa.com'),
('CSE 2102', 'CKT', '2-2', 'CSE', 3, 'ckt............', '..'),
('CSE 2105', 'Database', '3-1', 'CSE', 3, 'sssssss', 'ssssss'),
('CSE 2109', 'CKT Lab', '4-1', 'CSE', 1.5, 'qqqqqqqqqqqqq', 'qqqqqqqqqq.com');

-- --------------------------------------------------------

--
-- Table structure for table `depertment`
--

CREATE TABLE `depertment` (
  `depertment_no` int(11) NOT NULL,
  `depertment_name` varchar(100) NOT NULL,
  `building` varchar(100) NOT NULL,
  `floor_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `depertment`
--

INSERT INTO `depertment` (`depertment_no`, `depertment_name`, `building`, `floor_no`) VALUES
(2, 'CSE', '2nd', '3rd'),
(5, 'Math', '2nd', '2nd'),
(6, 'ETE', '2nd ', '4th'),
(7, 'DM', '2nd', '1st'),
(8, 'Chemestry', '4th', '1st');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designation_id` int(11) NOT NULL,
  `designation_title` varchar(100) NOT NULL,
  `designation_categories` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `designation_title`, `designation_categories`) VALUES
(2, 'Associate Professor', 'Teacher'),
(3, 'Lecturer', 'Teacher'),
(4, 'Precident', 'CSE CLUB'),
(5, 'CR', 'Student'),
(7, 'Clarck', 'Office staff'),
(8, 'Hardware Lab Operator ', 'Office staff'),
(9, 'Software Lab Operator', 'Office staff'),
(10, 'Assistant Professor', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(100) NOT NULL,
  `event_images` text NOT NULL,
  `occasion` varchar(100) NOT NULL,
  `schedule` text NOT NULL,
  `more` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_images`, `occasion`, `schedule`, `more`) VALUES
(9, 'drtghgfh', '3.jpg', 'valentine Day', 'dfghdfh', '<p>Departments about buet.jpgThe academic departments of the university offer degree programs in different engineering, architecture, planning, and science disciplines. All the departments except Dept. of Humanities have the postgraduate programs, while the departments of Architecture, Urban and Regional Planning, Civil Engineering,</p>'),
(10, 'test2', '4.jpg', '222', 'd2', '<p>Departments about buet.jpgThe academic departments of the university offer degree programs in different engineering, architecture, planning, and science disciplines. All the departments except Dept. of Humanities have the postgraduate programs, while the departments of Architecture, Urban and Regional Planning, Civil Engineering,</p>'),
(11, 'test3', '6.jpg', '3333', 'f3', '<p>Departments about buet.jpgThe academic departments of the university offer degree programs in different engineering, architecture, planning, and science disciplines. All the departments except Dept. of Humanities have the postgraduate programs, while the departments of Architecture, Urban and Regional Planning, Civil Engineering,</p>'),
(12, 'à¦Ÿà§‡à¦¸à§à¦Ÿ à¦ˆà¦­à§‡à¦¨à§à¦Ÿ ', '7.jpg', '', '', '<p>The Stanford Computer Science Department was founded in 1965. &nbsp;A&nbsp;half-century on, the department is a force for innovation, scientific&nbsp;discovery and world-wide impact. &nbsp;We are particularly proud of&nbsp;the&nbsp;graduates of our programs, many of whom are leaders in academia,&nbsp;industry and government.</p>'),
(13, 'à¦Ÿà§‡à¦¸à§à¦Ÿ à§¨ ', 'bridge.jpg', '', '', '<p>The Stanford Computer Science Department was founded in 1965. &nbsp;A&nbsp;half-century on, the department is a force for innovation, scientific&nbsp;discovery and world-wide impact. &nbsp;We are particularly proud of&nbsp;the&nbsp;graduates of our programs, many of whom are leaders in academia,&nbsp;industry and government.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `final_marks`
--

CREATE TABLE `final_marks` (
  `student_id` varchar(100) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `continious_total` int(11) NOT NULL,
  `1st_examiner_marks` int(11) NOT NULL,
  `2nd_examiner_marks` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final_marks`
--

INSERT INTO `final_marks` (`student_id`, `course_code`, `continious_total`, `1st_examiner_marks`, `2nd_examiner_marks`, `total`) VALUES
('1109017', 'CSE 2101', 50, 41, 42, 92),
('1109022', 'CSE 2101', 50, 45, 38, 92),
('1109039', 'CSE 2101', 50, 20, 25, 73),
('1109040', 'CSE 2101', 50, 35, 25, 80);

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `hall_id` int(11) NOT NULL,
  `hall_name` varchar(100) NOT NULL,
  `hall_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`hall_id`, `hall_name`, `hall_image`) VALUES
(32, 'à¦®à§à¦•à§à¦¤à¦¾à¦° à¦à¦²à¦¾à¦¹à§€ à¦¹à¦²', 'brur_hall1.jpg'),
(33, 'à¦¶à§‡à¦– à¦«à¦œà¦¿à¦²à¦¾à¦¤à§à¦¨à§à¦¨à§‡à¦¸à¦¾ à¦®à§à¦œà¦¿à¦¬ à¦¹à¦²', 'brur_hall1.jpg'),
(34, 'à¦¬à¦™à§à¦—à¦¬à¦¨à§à¦§à§ à¦¶à§‡à¦– à¦®à§à¦œà¦¿à¦¬ à¦¹à¦² ', 'brur_hall1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hometown`
--

CREATE TABLE `hometown` (
  `town_no` int(11) NOT NULL,
  `town_name` varchar(100) NOT NULL,
  `devision` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hometown`
--

INSERT INTO `hometown` (`town_no`, `town_name`, `devision`, `country`) VALUES
(3, 'Rangpur', 'Rangpur', 'Bangladesh'),
(4, 'Panchagar', 'Rangpur', 'Bangladesh'),
(5, 'Noakhali', 'Dhaka', 'Bangladesh'),
(6, 'Nilphamari', 'Rangpur', 'Bangladesh'),
(7, 'Thakurgaon', 'Rangpur', 'Bangladesh'),
(8, 'Dinajpur', 'Rangpur', 'Bangladesh'),
(9, 'Bogra', 'Rajshahi', 'Bangladesh'),
(10, 'Rajshahi', 'Rajshahi', 'Bangladesh'),
(11, 'Naogaon', 'Rajshahi', 'Bangladesh'),
(12, 'Nator', 'Rajshahi', 'Bangladesh'),
(13, 'Shirajgonj', 'Dhaka', 'Bangladesh'),
(14, 'Gaibandha', 'Rangpur', 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `notice_id` int(11) NOT NULL,
  `notice_title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `banner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`notice_id`, `notice_title`, `description`, `banner`) VALUES
(1, 'à¦­à¦°à§à¦¤à¦¿ à¦ªà¦°à¦¿à¦•à§à¦·à¦¾ ', '<p>The Stanford Computer Science Department was founded in 1965. &nbsp;A&nbsp;half-century on, the department is a force for innovation, scientific&nbsp;discovery and world-wide impact. &nbsp;We are particularly proud of&nbsp;the&nbsp;graduates of our programs, many of whom are leaders in academia,&nbsp;industry and government.</p>', '2.jpg'),
(2, 'à¦Ÿà§‡à¦¸à§à¦Ÿ', '<p>The Stanford Computer Science Department was founded in 1965. &nbsp;A&nbsp;half-century on, the department is a force for innovation, scientific&nbsp;discovery and world-wide impact. &nbsp;We are particularly proud of&nbsp;the&nbsp;graduates of our programs, many of whom are leaders in academia,&nbsp;industry and government.</p>', '3.jpg'),
(3, 'à¦¨à¦¿à§Ÿà§‹à¦— ', '<p>The Stanford Computer Science Department was founded in 1965. &nbsp;A&nbsp;half-century on, the department is a force for innovation, scientific&nbsp;discovery and world-wide impact. &nbsp;We are particularly proud of&nbsp;the&nbsp;graduates of our programs, many of whom are leaders in academia,&nbsp;industry and government.</p>', '1.jpg'),
(6, 'à¦Ÿà§‡à¦¸à§à¦Ÿ à§¨ ', '<p>The Stanford Computer Science Department was founded in 1965. &nbsp;A&nbsp;half-century on, the department is a force for innovation, scientific&nbsp;discovery and world-wide impact. &nbsp;We are particularly proud of&nbsp;the&nbsp;graduates of our programs, many of whom are leaders in academia,&nbsp;industry and government.</p>', 'sea.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `office_staff`
--

CREATE TABLE `office_staff` (
  `staff_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `depertment` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `hometown` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office_staff`
--

INSERT INTO `office_staff` (`staff_id`, `first_name`, `last_name`, `email`, `photo`, `depertment`, `designation`, `contact`, `address`, `hometown`, `gender`) VALUES
(1, 'Nur ', 'Alam', 'nur@gmail.com', 'nuralam.jpg', 'CSE', 'Hardware Lab Operator', '017---------', 'Rangpur', 'Rangpur', 'male'),
(2, 'Ershaad', 'Alam', 'ershad@gmail.com', 'arshad vai.jpg', 'CSE', 'Clarck', '017---------', 'Rangpur', 'Rangpur', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `recent_news`
--

CREATE TABLE `recent_news` (
  `recent_news_id` int(11) NOT NULL,
  `recent_news_title` text NOT NULL,
  `recent_image` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recent_news`
--

INSERT INTO `recent_news` (`recent_news_id`, `recent_news_title`, `recent_image`, `description`) VALUES
(2, 'à¦•à¦®à§à¦ªà¦¿à¦‰à¦Ÿà¦¾à¦° à¦¸à¦¾à§Ÿà§‡à¦¨à§à¦¸ à¦…à¦¨à§à¦·à¦¦à§‡à¦° à¦ªà¦¿à¦•à¦¨à¦¿à¦•', '2360a944-6649-4306-a22f-8b903d016075_4.jpg', '<p>Departments about buet.jpgThe academic departments of the university offer degree programs in different engineering, architecture, planning, and science disciplines. All the departments except Dept. of Humanities have the postgraduate programs, while the departments of Architecture, Urban and Regional Planning, Civil Engineering, Water Resources Engineering, Electrical and Electronic Engineering, Computer Science and Engineering, Chemical Engineering, Materials and Metallurgi</p>'),
(3, 'à¦ªà¦¿à¦•à¦¨à¦¿à¦• à¦¸à¦«à¦²à¦­à¦¾à¦¬à§‡ à¦¸à¦®à§à¦ªà¦¨à§à¦¨ ', '', ''),
(4, 'à§¨à§¦à§§à§§-à§§à§¨ à¦¬à¦°à§à¦·à§‡à¦° à¦«à¦¾à¦‡à¦¨à¦¾à¦² à¦ªà¦°à¦¿à¦•à§à¦·à¦¾ à¦¶à§‡à¦· ', '', ''),
(5, 'à¦‰à§Žà¦¸à¦¬', 'shelter.jpg', '<p>The Stanford Computer Science Department was founded in 1965. &nbsp;A&nbsp;half-century on, the department is a force for innovation, scientific&nbsp;discovery and world-wide impact. &nbsp;We are particularly proud of&nbsp;the&nbsp;graduates of our programs, many of whom are leaders in academia,&nbsp;industry and government.</p>'),
(6, 'à¦Ÿà§‡à¦¸à§à¦Ÿ', '4.jpg', '<p>The Stanford Computer Science Department was founded in 1965. &nbsp;A&nbsp;half-century on, the department is a force for innovation, scientific&nbsp;discovery and world-wide impact. &nbsp;We are particularly proud of&nbsp;the&nbsp;graduates of our programs, many of whom are leaders in academia,&nbsp;industry and government.</p>'),
(7, 'à¦Ÿà§‡à¦¸à§à¦Ÿ à§¨', 'bridge.jpg', '<p>The Stanford Computer Science Department was founded in 1965. &nbsp;A&nbsp;half-century on, the department is a force for innovation, scientific&nbsp;discovery and world-wide impact. &nbsp;We are particularly proud of&nbsp;the&nbsp;graduates of our programs, many of whom are leaders in academia,&nbsp;industry and government.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `student_id` int(11) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `attendence` int(11) NOT NULL,
  `class_test_1` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `class_test_2` int(11) NOT NULL,
  `assingment_presentation` int(11) NOT NULL,
  `final` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `gp` int(11) NOT NULL,
  `lg` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `depertment` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `hall_name` varchar(50) NOT NULL,
  `hometown` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `first_name`, `last_name`, `email`, `photo`, `depertment`, `session`, `batch`, `date_of_birth`, `address`, `contact`, `gender`, `hall_name`, `hometown`) VALUES
(1109017, 'Maniha ', 'Iffat', 'mou@gmail.com', 'mou.JPG', 'CSE', '2011-12', '4th', '0000-00-00', 'Rangpur', '017---------', 'female', 'à¦¶à§‡à¦– à¦«à¦œà¦¿à¦²à¦¾à¦¤à§à¦¨à§à¦¨à§‡à¦¸à¦¾ ', 'Rangpur'),
(1109022, 'Ashraful', 'Alam', 'ashraful@gmail.com', 'ashraful.JPG', 'CSE', '2011-12', '4th', '0000-00-00', 'Rangpur', '017---------', 'male', 'à¦®à§à¦•à§à¦¤à¦¾à¦° à¦à¦²à¦¾à¦¹à§€ à¦¹à¦²', 'Rangpur'),
(1109039, 'Shahid', 'Mia', 'mia@gmail.com', 'shahid mia.jpg', 'CSE', '2011-12', '4th', '0000-00-00', 'Rangpur', '017---------', 'male', 'à¦¬à¦™à§à¦—à¦¬à¦¨à§à¦§à§ à¦¶à§‡à¦– à¦®à§à¦œà¦¿', 'Rangpur'),
(1109040, 'Asir', 'Mossaddek', 'sakib@gmail.com', 'sakib.JPG', 'CSE', '2011-12', '4th', '0000-00-00', 'Rangpur', '017---------', 'male', 'à¦®à§à¦•à§à¦¤à¦¾à¦° à¦à¦²à¦¾à¦¹à§€ à¦¹à¦²', 'Rangpur');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `depertment` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `edu_back` varchar(250) NOT NULL,
  `experience` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `hometown` varchar(100) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `first_name`, `last_name`, `email`, `photo`, `depertment`, `designation`, `edu_back`, `experience`, `address`, `hometown`, `contact`, `gender`) VALUES
(18, 'Dr. Abu Kalam ', 'Md. Farid Ul Islam', 'farid@gmail.com', 'forid.jpg', 'CSE', 'Associate Professor', 'Rajshahi University', '...', 'Khamar Mor , Rangpur', 'Rangpur', '01712135849', 'male'),
(19, 'Md. ', 'Shamsuzzaman', 'sobuz@gmail.com', 'samsu.jpg', 'CSE', 'Lecturer', 'Rajshahi University', '...', '..', 'Rangpur', '017---------', 'male'),
(20, 'Prodip', 'Kumar ', 'prodip@gmail.com', 'prodip.jpg', 'CSE', 'Lecturer', 'Rajshahi University', '...', 'a', 'Thakurgaon', '0171......', 'male'),
(21, 'Md. Ileas', 'Pramanik', 'ileass@gmail.com', 'ip.jpg', 'CSE', 'Assistant Professor', 'Rajshahi University', '....', '...', 'Rangpur', '017---------', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'ali', 'ali', 'ali@gmail.com'),
(2, 'nabila', 'nabila', 'nabila@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `welcome_note`
--

CREATE TABLE `welcome_note` (
  `welcome_note_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `designation` varchar(100) NOT NULL,
  `words` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `welcome_note`
--

INSERT INTO `welcome_note` (`welcome_note_id`, `name`, `image`, `designation`, `words`) VALUES
(7, 'Md. IleasÂ Pramanik', 'ip.jpg', 'Assistant Professor', '<p><span style="font-family: arial,helvetica,sans-serif;">The Department of Computer Science and Engineering was established on 12 October, 2008 as one of the six founding departments Begum Rokeya University, Rangpur started its journey with. Initially started under the faculty of Science and Engineering, the department now operates under the Faculty of Engineering and Technology.<br /><br />Since the beginning of its establishment, the department has been able to attract the very best students who secure topmost merit positions in the undergraduate admission test every year. In the academic session 2009-2010, the number of students enrolled in the undergraduate program was increased from 50 to 60 which was later dropped to 45 in 2013-2014 academic session. The department thrives to play a very special role in preparing future technology leaders and innovators of the country as well as the globe in the domain of Computer Science and Engineering. </span></p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accademic_year`
--
ALTER TABLE `accademic_year`
  ADD PRIMARY KEY (`session`),
  ADD UNIQUE KEY `batch` (`batch`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `continious_marks`
--
ALTER TABLE `continious_marks`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `student_id` (`student_id`),
  ADD UNIQUE KEY `student_id_2` (`student_id`),
  ADD UNIQUE KEY `student_id_3` (`student_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `depertment`
--
ALTER TABLE `depertment`
  ADD PRIMARY KEY (`depertment_no`),
  ADD UNIQUE KEY `depertment_name` (`depertment_name`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `final_marks`
--
ALTER TABLE `final_marks`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`hall_id`);

--
-- Indexes for table `hometown`
--
ALTER TABLE `hometown`
  ADD PRIMARY KEY (`town_no`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `office_staff`
--
ALTER TABLE `office_staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `recent_news`
--
ALTER TABLE `recent_news`
  ADD PRIMARY KEY (`recent_news_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `welcome_note`
--
ALTER TABLE `welcome_note`
  ADD PRIMARY KEY (`welcome_note_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `depertment`
--
ALTER TABLE `depertment`
  MODIFY `depertment_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `hall_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `hometown`
--
ALTER TABLE `hometown`
  MODIFY `town_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `office_staff`
--
ALTER TABLE `office_staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `recent_news`
--
ALTER TABLE `recent_news`
  MODIFY `recent_news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `welcome_note`
--
ALTER TABLE `welcome_note`
  MODIFY `welcome_note_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
