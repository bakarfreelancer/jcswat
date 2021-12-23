--
-- Database: `jcswat`
--

-- --------------------------------------------------------
--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'subscriber',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY(s_no)
);

--
-- Table structure for table `event_news`
--

CREATE TABLE `event_news` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `news_message` varchar(255) NOT NULL,
  `publish_date` datetime NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY(s_no)
);

--
-- Table structure for table `bs_admissions`
--

CREATE TABLE `bs_admissions` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `matric_group` varchar(255) NOT NULL,
  `matric_marks_obtain` varchar(255) NOT NULL,
  `matric_total_marks` varchar(255) NOT NULL,
  `matric_board` varchar(255) NOT NULL,
  `fsc_group` varchar(255) NOT NULL,
  `marks_obtain` varchar(255) NOT NULL,
  `total_marks` varchar(255) NOT NULL,
  `board` varchar(255) NOT NULL,
  `deptt` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  CONSTRAINT sno_fk FOREIGN KEY(user_id) REFERENCES users(s_no) ON DELETE CASCADE, 
  PRIMARY KEY(sno)
);


--
-- Table structure for table `fsc_admissions`
--

CREATE TABLE `fsc_admissions` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `matric_group` varchar(255) NOT NULL,
  `matric_marks_obtain` varchar(255) NOT NULL,
  `matric_total_marks` varchar(255) NOT NULL,
  `matric_board` varchar(255) NOT NULL,
  `deptt` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  CONSTRAINT sno1_fk FOREIGN KEY(user_id) REFERENCES users(s_no) ON DELETE CASCADE, 
  PRIMARY KEY(sno)
);
