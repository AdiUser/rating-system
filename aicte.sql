-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2019 at 05:29 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aicte`
--

-- --------------------------------------------------------

--
-- Table structure for table `acr_points`
--

CREATE TABLE `acr_points` (
  `serial` int(11) NOT NULL,
  `faculty_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `points` int(30) NOT NULL,
  `acr_year` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acr_points`
--

INSERT INTO `acr_points` (`serial`, `faculty_id`, `points`, `acr_year`, `is_active`) VALUES
(1, 'F', 4, '2018-19', 1),
(2, 'F', 4, '2018-19', 1),
(3, 'FACF66616561843', 5, '2018-19', 1),
(4, 'FACF66616561843', 7, '2018-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `serial` int(10) NOT NULL,
  `faculty_id` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sem` int(11) NOT NULL,
  `year_from` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `year_to` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `report` text COLLATE utf8_unicode_ci NOT NULL,
  `is_verified` int(2) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`serial`, `faculty_id`, `name`, `type`, `sem`, `year_from`, `year_to`, `report`, `is_verified`, `is_active`) VALUES
(1, '0', 'fhghj', 'd', 0, '', '', '0459c4957a773c835c58', 0, 0),
(2, '0', 'sf', 'e', 0, '', '', '3ef8493bb5d4b77b0285', 0, 1),
(3, '0', 'fhghj', 'd', 0, '', '', 'a8b77fff25bf737107c6', 0, 1),
(4, '0', 'sf', 'e', 0, '', '', '3057c7a290e98c20b8a2', 0, 1),
(5, '0', 'fhghj', 'd', 0, '', '', '142e7f705dfb30f28b43', 0, 1),
(6, '0', 'sf', 'e', 0, '', '', '4a905ded909171368504', 0, 1),
(7, 'hod', 'My Activity', 'd', 0, '', '', '7b06965fade7fdbeef42932558c44cda.jpg', 0, 0),
(8, 'hod', 'Ammy did that', 'i', 0, '', '', '0266f6fc8a6986a27a780300110e6407.jpg', 0, 1),
(9, 'hod', 'I did that ', 'd', 0, '', '', '5c97ebbc11fa3d0c3a8388ade12ae3a9.jpg', 0, 1),
(10, 'hod', 'I did that', 'departmental', 0, '', '', '304338169e3c3f8d4b4a33d29e398a6b.jpg', 0, 1),
(11, 'hod', 'My New Activity', 'departmental', 0, '', '', '1b4495b1ed3669dd2fbaf15b52cd8a3d.jpg', 0, 0),
(12, 'FACF87192445071', 'Aditya ', 'departmental', 1, '', '', 'c8039d9ec5a0db3934f79d789596f1c7.jpg', 0, 0),
(13, 'FACF66616561843', 'Lab and IT services', 'departmental', 1, '', '', '4cd6e7c1b27831febd898757cf8e6389.jpg', 1, 0),
(14, 'FACF66616561843', 'Cultural Activity Fest', 'social', 1, '', '', '5df9d6ac3dba0f4b9f868ab8d0c0b5c5.png', 0, 0),
(15, 'FACF228661427967', 'New Activity ', 'social', 1, '', '', '8ce25af6d43daead690f4725914fcce0.jpg', 1, 1),
(16, 'FACF228661427967', 'New Activity - 2', 'departmental', 1, '', '', '5abbb0a703605782133107d539c73608.jpg', 0, 1),
(17, 'FAC7712734', 'My New Activity HOD', 'institutional', 0, '', '', 'c715eed7f98ac7151cc321d811fc32c8.jpg', 0, 0),
(18, 'FAC7712734', 'My New Activity HOD-2', 'departmental', 0, '', '', '7da1b66997a2332aa522fbd4a353ca4d.jpg', 0, 0),
(19, 'FAC7712734', 'My HOD Activity', 'departmental', 3, '2018', '2019', 'cb539f6d9772e595e0a624e50b48017c.jpg', 0, 1),
(20, 'FAC7712734', 'HOD Activity HHA', 'departmental', 2, '2018', '2019', '3acf4cb152ab582b76a33641ca35eeb1.jpg', 0, 1),
(21, 'FAC63341992', 'asa', 'social', 1, '', '', 'aa41a6862f82e885b30c2bef65f7c86c.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `aicte_admin`
--

CREATE TABLE `aicte_admin` (
  `serial` int(10) NOT NULL,
  `university_code` int(10) NOT NULL,
  `university_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` int(10) NOT NULL,
  `contact` int(10) NOT NULL,
  `university_address` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `verfied` int(2) NOT NULL,
  `excel` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `aicte_admin`
--

INSERT INTO `aicte_admin` (`serial`, `university_code`, `university_name`, `state`, `district`, `postal_code`, `contact`, `university_address`, `email`, `verfied`, `excel`) VALUES
(1, 123, 'abc', '', 'abc', 0, 123, ' abc', 'xyz', 0, ''),
(2, 12345678, 'graphic era deemed t', '', 'uttarakhan', 0, 1122334455, ' clement town, dehra', 'geuddn@gmail.com', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `departmental_activities`
--

CREATE TABLE `departmental_activities` (
  `id` int(11) NOT NULL,
  `hod_id` varchar(100) NOT NULL,
  `faculty_id` varchar(100) NOT NULL,
  `semister` int(11) NOT NULL,
  `activity_name` text NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) NOT NULL,
  `org_id` varchar(100) DEFAULT NULL,
  `department_name` varchar(100) DEFAULT NULL,
  `department_code` varchar(50) DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `org_id`, `department_name`, `department_code`, `is_active`) VALUES
(1, '0', 'Computer Science', 'CSE', 1),
(2, '0', 'Electrical', 'EC', 1),
(3, '0', 'Mechanical', 'ME', 1),
(4, 'GEUDDN', 'Computer Science', 'CSE', 1),
(5, 'GEUDDN', 'Mechanical Engg.', 'ME', 1),
(6, 'GEUDDN', 'Biotech', 'BIO1Z6', 1),
(7, 'GEUDDN', 'dfghjk', 'dfghjk', 0),
(8, 'GEUDDN', 'fgjkl', 'y', 0),
(9, 'GEUDDN', 'dsfg', 'sdfd', 0),
(10, 'GEUDDN', 'gfgghjkl', 'hgjkl', 0),
(11, 'BISHOP', 'Technology / Education', 'TECH', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `serial` int(2) NOT NULL,
  `university_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `qualification` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_joining` date NOT NULL,
  `department` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `faculty_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `pic` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`serial`, `university_code`, `name`, `contact`, `qualification`, `date_of_joining`, `department`, `level`, `faculty_id`, `address`, `email`, `pic`) VALUES
(1, 'geuddn', 'HOD Anmol Siva Ready', '98917171001', '26', '2019-03-06', '1', '1', 'FACT101', 'Flat No. 456, Big Clown Cottage', 'anmolreadyy@gmail.com', ''),
(2, 'geuddn', 'Aman Misra', '', '26', '2019-03-14', '1', '6', 'FACT102', '', '', ''),
(5, 'GEUDDN', 'HOD Aman Saxena New', '', '', '2020-02-03', '4', '6', 'FAC89352170', '', '', ''),
(6, 'GEUDDN', 'HOD Aditya Saxena', '', '', '2009-02-02', '4', '6', 'FAC63341992', '', '', 'assets/img/84859365aa0d63d8bf2a87cab6c7453e.jpg'),
(7, 'GEUDDN', 'Aditya Saxena', '9897171001', '', '2019-02-03', '4', '1', 'FACF87192445071', '333/1 Beharipur Civil Lines Bareilly', 'adityasaxena503@fmail.con', ''),
(8, 'BISHOP', 'HOD Anmol Siva Ready', '9891771001', '', '2016-02-02', '1', '6', 'FAC7712734', 'Flat 234, Big Butt Cotteges', 'readyy@gmail.com', 'assets/img/5fd5a4e5c8c4027a3924bd22db890a33.jpg'),
(9, 'BISHOP', 'FACULTY Anam Ali', '', '', '2010-11-26', '1', '1', 'FACF428144713880', '', '', ''),
(10, 'BISHOP', 'FACULTY Aman Saxena', '', '', '2011-11-26', '1', '1', 'FACF631305285720', '', '', ''),
(11, 'BISHOP', 'FACULTY Aditya Saxen', '', '', '2011-11-26', '1', '1', 'FACF694551514792', '', '', ''),
(12, 'BISHOP', 'FACULTY Suman Saxena', '', '', '2011-11-26', '1', '2', 'FACF161012001347', '', '', ''),
(13, 'BISHOP', 'FACULTY Ylog Saxena', '', '', '2009-11-26', '1', '3', 'FACF54491606193', '', '', ''),
(14, 'BISHOP', 'FACULTY Yaman Gupta', '9897171001', '', '2009-11-26', '1', '5', 'FACF228661427967', '342 Radhe Madhe, Krishna Conclave, Bareilly', 'yaman@gmail.com', ''),
(15, 'BISHOP', 'FACULTY Kallol Reddy', '9897171001', '', '2013-11-26', '1', '2', 'FACF66616561843', '3567, Subash Nagar, Bareilly', 'reddyready@gmail.ocm', 'assets/img/4aa0af438c3ea33f4adb89c95ecf4ad0.jpg'),
(16, 'BISHOP', 'Bishop_faculty', '', '', '2019-04-23', '1', '10', 'FACF298562939312', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_dept`
--

CREATE TABLE `faculty_dept` (
  `id` int(11) NOT NULL,
  `dept_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_dept`
--

INSERT INTO `faculty_dept` (`id`, `dept_name`) VALUES
(1, 'Engineering / Technology'),
(2, 'Pharmacy'),
(3, 'Hotel Management and Catering Technology'),
(4, 'Architecture'),
(5, 'Fine Arts'),
(6, 'Design'),
(7, 'Sciences and Humanities');

-- --------------------------------------------------------

--
-- Table structure for table `input_qualification`
--

CREATE TABLE `input_qualification` (
  `serial` int(11) NOT NULL,
  `faculty_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `qualification` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `input_qualification`
--

INSERT INTO `input_qualification` (`serial`, `faculty_id`, `qualification`) VALUES
(1, 'FACT5672', '29,36,41'),
(3, 'FACF87192445071', '30,29,36'),
(4, 'FACF66616561843', '36,41'),
(5, 'FAC7712734', '66,67,68');

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

CREATE TABLE `institute` (
  `serial` int(2) NOT NULL,
  `parent_university_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `institute_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `institute_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `institute`
--

INSERT INTO `institute` (`serial`, `parent_university_code`, `institute_code`, `institute_name`, `state`, `district`, `postal_code`) VALUES
(1, 'GEUDDN', 'GEHUDDN1', 'Graphic Era Hill Uni', 'Uttrakhand', '', ''),
(2, 'GEUDDN', '6789', 'GEU-INST', 'Uttrakhand', 'Dehradun', '248002'),
(3, 'BISHOP', 'BISHOP1', 'Bishop Sec. Institute', 'UP', 'Bareilly', '248001');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `level_id` varchar(10) NOT NULL,
  `level_name` varchar(100) NOT NULL,
  `level_package_group` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `level_id`, `level_name`, `level_package_group`) VALUES
(1, '9A', 'Lecturer', '56100'),
(2, '10', 'Lecturer', '57700'),
(3, '11', 'Lecturer (Senior Scale)', '68900'),
(4, '12', 'Lecturer (Selection Grade -I)', '79800'),
(5, '13A1', 'Lecturer (Selection Grade -II) ', '131400'),
(6, '13A-HOD', 'Head of the Department\r\n(HoD)', '131400'),
(7, '13A-P', 'Principal', '131400');

-- --------------------------------------------------------

--
-- Table structure for table `min_qualifications`
--

CREATE TABLE `min_qualifications` (
  `id` int(11) NOT NULL,
  `qualification_name` text NOT NULL,
  `meta_qualification` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `min_qualifications`
--

INSERT INTO `min_qualifications` (`id`, `qualification_name`, `meta_qualification`) VALUES
(29, 'B. E. / B. Tech. / B. S. in relevant discipline with First Class or equivalent.', 'B. E. / B. Tech. / B. S. in relevant discipline with First Class or equivalent.'),
(30, 'B. Pharm. with First Class or equivalent', 'B. Pharm. with First Class or equivalent'),
(31, 'A minimum 4-year Bachelor’s Degree in HMCT with First Class or equivalent.', 'A minimum 4-year Bachelor’s Degree in HMCT with First Class or equivalent.'),
(32, 'B.Arch. or a 4-year Degree in an allied field with First Class or equivalent', 'B.Arch. or a 4-year Degree in an allied field with First Class or equivalent'),
(33, 'Bachelor’s degree in appropriate discipline of Fine Arts (Applied Arts, Painting and Sculpture) or equivalent with First Class or equivalent', 'Bachelor’s degree in appropriate discipline of Fine Arts (Applied Arts, Painting and Sculpture) or equivalent with First Class or equivalent'),
(34, 'Bachelor’s degree in design or a minimum 4-year Diploma in any one of the streams of Design, Fine Arts, Applied Arts and Architecture or Bachelor’s degree in Engineering with First Class or equivalent', 'Bachelor’s degree in design or a minimum 4-year Diploma in any one of the streams of Design, Fine Arts, Applied Arts and Architecture or Bachelor’s degree in Engineering with First Class or equivalent'),
(35, 'Master’s degree in appropriate subject with First Class or equivalent at Bachelor’s or Master’s level', 'Master’s degree in appropriate subject with First Class or equivalent at Bachelor’s or Master’s level'),
(36, 'Bachelor’s and Master’s Degrees in relevant disciplines with First Class', 'Bachelor’s and Master’s Degrees in relevant disciplines with First Class in either of the two at the time of selection.'),
(37, 'Master’s degree with First Class or equivalent in a relevant subject and has cleared the National Eligibility Test (NET) or some similar test', 'A Master’s degree with First Class or equivalent in a relevant subject and, must have cleared the National Eligibility Test (NET) conducted by the UGC or the CSIR, or a similar test accredited by the UGC, like SLET / SET. '),
(38, 'Master\'s degree in relevent discipline', 'Candidates from technical disciplines shall be placed in Level 10 at suitable cell as and when the candidates acquire the Master’s degree in relevant technical discipline.'),
(39, 'Cleared National Eligibility Test (NET) or some similar test', 'Candidates of Sciences and Humanities shall be placed in Level 10 at suitable cell as and when the candidates clear the National Eligibility Test (NET) conducted by the UGC or the CSIR, or a similar test accredited by the UGC, like SLET / SET.'),
(40, 'Completed 5 years of service', 'In case candidates do not acquire relevant Master’s degree in the case of technical disciplines and in case of candidates from Sciences and Humanities do not clear National Eligibility Test (NET) conducted by the UGC or the CSIR, or a similar test accredited by the UGC, like SLET / SET, they shall be placed in appropriate cell of level 10 only after completion of 5 years'),
(41, 'Three weeks of industrial training at the level of Lecturer. ', 'Three weeks of industrial training at the level of Lecturer. '),
(42, 'Two weeks of Faculty Development Programme (FDP) recognised by AICTE/UGC/TEQIP/NITTTR/ Pandit Madan Mohan Malviya National Mission on Teachers and Teaching (PMMMNMTT)/IISc/IIT /University/Govt. and out of which at least one of the FDPs shall be in advanced Pedagogy', 'Two weeks of Faculty Development Programme (FDP) recognised by AICTE/UGC/TEQIP/NITTTR/ Pandit Madan Mohan Malviya National Mission on Teachers and Teaching (PMMMNMTT)/IISc/IIT /University/Govt. and out of which at least one of the FDPs shall be in advanced Pedagogy'),
(43, 'Completed one week faculty development programme and one eight weeks duration MOOCS course with E-Certification by NPTEL-AICTE. ', 'One week faculty development programme as above and one eight weeks duration MOOCS course with E-Certification by NPTEL-AICTE.'),
(44, 'Completed two such eight weeks duration MOOCS courses with E-Certification by NPTELAICTE', 'Completed two such eight weeks duration MOOCS courses with E-Certification by NPTELAICTE'),
(45, 'Minimum 5 years of experience and an average 360 degree feedback score between 8 to 10 on the scale of 10 in the cadre of Lecturer.', 'Minimum 5 years of experience and an average 360 degree feedback score between 8 to 10 on the scale of 10 in the cadre of Lecturer.'),
(46, 'Minimum 6 years of experience and an average 360o feedback score between 5 to < 8 on the scale of 10 in the cadre of Lecturer', 'Minimum 6 years of experience and an average 360o feedback score between 5 to < 8 on the scale of 10 in the cadre of Lecturer'),
(47, 'Minimum qualifications for Lecturer (Senior Scale) + Master\'s Degree with first class or equivalent either at Bachelor\'s or Masterl\'s level.', 'Qualification as prescribed for the post of Lecturer (Senior Scale) necessarily with a Master’s Degree in relevant discipline in First Class or equivalent either at Bachelor’s or at Master’s level.'),
(48, 'Three weeks of industrial training at the level of Lecturer (Senior Scale)', 'Three weeks of industrial training at the level of Lecturer (Senior Scale)'),
(49, 'Completed two weeks of Faculty Development Programme (FDP) recognised by AICTE/UGC/TEQIP/NITTTR/ Pandit Madan Mohan Malviya National Mission on Teachers and Teaching (PMMMNMTT)/IISc/IIT /University/Govt', 'Two weeks of Faculty Development Programme (FDP) recognised by AICTE/UGC/TEQIP/NITTTR/ Pandit Madan Mohan Malviya National Mission on Teachers and Teaching (PMMMNMTT)/IISc/IIT/University/Govt'),
(50, 'Completed one week faculty development programme as above and one eight weeks duration MOOCS course with E-Certification by NPTEL-AICTE.', 'One week faculty development programme as above and one eight weeks duration MOOCS course with E-Certification by NPTEL-AICTE.'),
(51, 'Completed two such eight weeks duration MOOCS courses with E-Certification by NPTEL -AICTE', 'Completed two such eight weeks duration MOOCS courses with E-Certification by NPTEL -AICTE'),
(52, 'Minimum 5 years of experience with an average 360 degree feedback score between 8 to 10 on the scale of 10 in the cadre of Lecturer (Senior Scale)', 'Minimum 5 years of experience with an average 360 degree feedback score between 8 to 10 on the scale of 10 in the cadre of Lecturer (Senior Scale)'),
(53, 'Minimum 6 years of experience with an average 360 degree feedback score between 5 to < 8 on the scale of 10 in the cadre of Lecturer (Senior Scale).', 'Minimum 6 years of experience with an average 360 degree feedback score between 5 to < 8 on the scale of 10 in the cadre of Lecturer (Senior Scale).'),
(54, 'Qualifications as prescribed for the post of Lecturer (Selection Grade - I).', 'Qualifications as prescribed for the post of Lecturer (Selection Grade - I).'),
(55, 'Completed three weeks of industrial training at the level of Lecturer (Selection Grade - I)', 'Three weeks of industrial training at the level of Lecturer (Selection Grade - I)'),
(56, 'Completed two weeks of Faculty Development Programme (FDP) recognised by AICTE/UGC/TEQIP/NITTTR/Pandit Madan Mohan Malviya National Mission on Teachers and Teaching (PMMMNMTT)/IISc/IIT /University/Govt', 'Completed two weeks of Faculty Development Programme (FDP) recognised by AICTE/UGC/TEQIP/NITTTR/Pandit Madan Mohan Malviya National Mission on Teachers and Teaching (PMMMNMTT)/IISc/IIT /University/Govt'),
(57, 'Completed one week faculty development programme as above and one eight weeks duration MOOCS course with E-Certification by NPTEL-AICTE.', 'One week faculty development programme as above and one eight weeks duration MOOCS course with E-Certification by NPTEL-AICTE.'),
(58, 'Completed two eight weeks duration MOOCS courses with E-Certification by NPTEL -AICTE.', 'Completed two such eight weeks duration MOOCS courses with E-Certification by NPTEL -AICTE.'),
(59, 'Ph. D. in relevant discipline with minimum 3 years of experience, 2 research publications in SCI journals/UGC/AICTE/CoA/PCI approved list of journals and an average 360 degree feedback score\r\nbetween 8 to 10 on a scale of 10, all in the cadre of Lecturer (Selection Grade - I) Level - 12.', 'Ph. D. in relevant discipline with minimum 3 years of experience, 2 research publications in SCI journals/UGC/AICTE/CoA/PCI approved list of journals and an average 360 degree feedback score between 8 to 10 on a scale of 10, all in the cadre of Lecturer (Selection Grade - I) Level - 12.'),
(60, 'Ph. D. in relevant discipline with minimum 4 years of experience, 2 research publications in SCI Journals / UGC / AICTE. CoA/ PCI approved list of journals and an average 360o feedback score between 5 to < 8 on a scale of 10, all in the cadre of Lecturer (Selection Grade-I) Level - 12.', 'Ph. D. in relevant discipline with minimum 4 years of experience, 2 research publications in SCI Journals / UGC / AICTE. CoA/ PCI approved list of journals and an average 360o feedback score between 5 to < 8 on a scale of 10, all in the cadre of Lecturer (Selection Grade-I) Level - 12.'),
(61, 'Minimum 6 years of experience with an average 360o feedback score between 8 to 10 on a scale of 10, all in the cadre of Lecturer (Selection Grade-I) Level - 12. ', 'Minimum 6 years of experience with an average 360o feedback score between 8 to 10 on a scale of 10, all in the cadre of Lecturer (Selection Grade-I) Level - 12.'),
(62, 'Minimum 8 years of experience with an average 360o feedback score between 5 to < 8 on a scale of 10, all in the cadre of Lecturer (Selection Grade-I) Level - 12.', 'Minimum 8 years of experience with an average 360 degree feedback score between 5 to < 8 on a scale of 10, all in the cadre of Lecturer (Selection Grade-I) Level - 12.'),
(64, 'Ph. D. in relevant field and First Class at Bachelor’s or Master’s level in the relevant discipline; minimum of 12 years of experience in Teaching/ Research/ Industry, out of which at least 2 years shall be post Ph.D. experience minimum at the level of Lecturer (Selection Grade-I). ', 'Ph. D. in relevant field and First Class at Bachelor’s or Master’s level in the relevant discipline; minimum of 12 years of experience in Teaching/ Research/ Industry, out of which at least 2 years shall be post Ph.D. experience minimum at the level of Lecturer (Selection Grade-I).'),
(65, 'Bachelor’s and Master’s Degree in relevant discipline with minimum of 15 years of experience in Teaching / Research / Industry, out of which at least 3 years shall be at the level of Lecturer (Selection Grade - II)', 'Bachelor’s and Master’s Degree in relevant discipline with minimum of 15 years of experience in Teaching / Research / Industry, out of which at least 3 years shall be at the level of Lecturer (Selection Grade - II)'),
(66, 'Ph.D. and First Class at either Bachelor’s or Master’s level in the relevant discipline with minimum of 16 years of experience in Teaching / Research/ Industry, out of which at least 3 years shall be post Ph.D. experience and 5 years of experience not below the level of HoD', 'Ph.D. and First Class at either Bachelor’s or Master’s level in the relevant discipline with minimum of 16 years of experience in Teaching / Research/ Industry, out of which at least 3 years shall be post Ph.D. experience and 5 years of experience not below the level of HoD'),
(67, 'First Class at Bachelor’s or Master’s level in the relevant discipline and minimum of 20 years of experience in Teaching / Research/ Industry, out of which 5 years of experience not below the level of HoD. ', 'First Class at Bachelor’s or Master’s level in the relevant discipline and minimum of 20 years of experience in Teaching / Research/ Industry, out of which 5 years of experience not below the level of HoD.'),
(68, 'Ph.D. and First class at Bachelor’s or Master’s level in the relevant discipline with minimum of 16 years of experience in Teaching / Research/ Industry out of which 5 years shall be at the level of HoD and 3 years shall be post Ph.D. Experience; An average 360 degree feedback score of 5 to < 8 out of 10 for last 5 years.', 'Ph.D. and First class at Bachelor’s or Master’s level in the relevant discipline with minimum of 16 years of experience in Teaching / Research/ Industry out of which 5 years shall be at the level of HoD and 3 years shall be post Ph.D. Experience; An average 360 degree feedback score of 5 to < 8 out of 10 for last 5 years.'),
(69, 'First class at Bachelor’s or Master’s level in the relevant discipline; minimum of 20 years of experience in Teaching / Research/ Industry, out of which 7 years shall be not below the level of HoD. An average 360o feedback score of 8 to 10 out of 10 for last 5 years.', 'First class at Bachelor’s or Master’s level in the relevant discipline; minimum of 20 years of experience in Teaching / Research/ Industry, out of which 7 years shall be not below the level of HoD. An average 360o feedback score of 8 to 10 out of 10 for last 5 years.');

-- --------------------------------------------------------

--
-- Table structure for table `min_requirements`
--

CREATE TABLE `min_requirements` (
  `id` int(11) NOT NULL,
  `department` varchar(500) NOT NULL,
  `level` varchar(10) NOT NULL,
  `type` varchar(5) NOT NULL,
  `qualifications` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `min_requirements`
--

INSERT INTO `min_requirements` (`id`, `department`, `level`, `type`, `qualifications`) VALUES
(1, '1', '9A', 'd', '29'),
(2, '2', '9A', 'd', '30'),
(3, '3', '9A', 'd', '31'),
(4, '4', '9A', 'd', '32'),
(5, '5', '9A', 'd', '33'),
(6, '6', '9A', 'd', '34'),
(7, '7', '9A', 'd', '35'),
(8, '1', '10', 'd', '29,36'),
(9, '7', '10', 'd', '35,37'),
(10, '1', '10', 'p', '29,38'),
(11, '7', '10', 'p', '35,39'),
(12, '1', '10', 'p', '29,40'),
(13, '7', '10', 'p', '35,40'),
(14, '1', '11', 'p', '29,36,41,42'),
(15, '1', '11', 'p', '29,36,41,43'),
(16, '1', '11', 'p', '29,36,41,44'),
(17, '1', '11', 'p', '29,36,41,42,45'),
(18, '1', '11', 'p', '29,36,41,43,45'),
(19, '1', '11', 'p', '29,36,41,44,45'),
(20, '1', '11', 'p', '29,36,41,42,46'),
(21, '1', '11', 'p', '29,36,41,43,46'),
(22, '1', '11', 'p', '29,36,41,44,46'),
(23, '2', '11', 'p', '30,41,42'),
(24, '2', '11', 'p', '30,41,43'),
(25, '2', '11', 'p', '30,41,44'),
(26, '2', '11', 'p', '30,41,42,45'),
(27, '2', '11', 'p', '30,41,43,45'),
(28, '2', '11', 'p', '30,41,44, 45'),
(29, '2', '11', 'p', '30,41,42,46'),
(30, '2', '11', 'p', '30,41,43,46'),
(31, '2', '11', 'p', '30,41,44, 46'),
(32, '3', '11', 'p', '31,41,42'),
(33, '3', '11', 'p', '31,41,43'),
(34, '3', '11', 'p', '31,41,44'),
(35, '3', '11', 'p', '31,41,42,45'),
(36, '3', '11', 'p', '31,41,43,45'),
(37, '3', '11', 'p', '31,41,44, 45'),
(38, '3', '11', 'p', '31,41,42,46'),
(39, '3', '11', 'p', '31,41,43,46'),
(40, '3', '11', 'p', '31,41,44, 46'),
(41, '4', '11', 'p', '32,41,42'),
(42, '4', '11', 'p', '32,41,43'),
(43, '4', '11', 'p', '32,41,44'),
(44, '4', '11', 'p', '32,41,42,45'),
(45, '4', '11', 'p', '32,41,43,45'),
(46, '4', '11', 'p', '32,41,44, 45'),
(47, '4', '11', 'p', '32,41,42,46'),
(48, '4', '11', 'p', '32,41,43,46'),
(49, '4', '11', 'p', '32,41,44, 46'),
(50, '5', '11', 'p', '33,41,42'),
(51, '5', '11', 'p', '33,41,43'),
(52, '5', '11', 'p', '33,41,44'),
(53, '5', '11', 'p', '33,41,42,45'),
(54, '5', '11', 'p', '33,41,43,45'),
(55, '5', '11', 'p', '33,41,44, 45'),
(56, '5', '11', 'p', '33,41,42,46'),
(57, '5', '11', 'p', '33,41,43,46'),
(58, '5', '11', 'p', '33,41,44, 46'),
(59, '6', '11', 'p', '34,41,42'),
(60, '6', '11', 'p', '34,41,43'),
(61, '6', '11', 'p', '34,41,44'),
(62, '6', '11', 'p', '34,41,42,45'),
(63, '6', '11', 'p', '34,41,43,45'),
(64, '6', '11', 'p', '34,41,44, 45'),
(65, '6', '11', 'p', '34,41,42,46'),
(66, '6', '11', 'p', '34,41,43,46'),
(67, '6', '11', 'p', '34,41,44, 46'),
(68, '7', '11', 'p', '35,37,41,42'),
(69, '7', '11', 'p', '33,37,41,43'),
(70, '7', '11', 'p', '35,37,41,44'),
(71, '7', '11', 'p', '35,37,41,42,45'),
(72, '7', '11', 'p', '35,37,41,43,45'),
(73, '7', '11', 'p', '35,37,41,44, 45'),
(74, '7', '11', 'p', '35,37,41,42,46'),
(75, '7', '11', 'p', '35,37,41,43,46'),
(76, '7', '11', 'p', '35,37,41,44, 46'),
(77, '1', '12', 'p', '47,48,49'),
(78, '1', '12', 'p', '47,48,50'),
(79, '1', '12', 'p', '47,48,51'),
(80, '1', '12', 'p', '47,48,49,52'),
(81, '1', '12', 'p', '47,48,50,52'),
(82, '1', '12', 'p', '47,48,51,52'),
(83, '1', '12', 'p', '47,48,49,53'),
(84, '1', '12', 'p', '47,48,50,53'),
(85, '1', '12', 'p', '47,48,51,53'),
(86, '2', '12', 'p', '47,48,49'),
(87, '2', '12', 'p', '47,48,50'),
(88, '2', '12', 'p', '47,48,51'),
(89, '2', '12', 'p', '47,48,49,52'),
(90, '2', '12', 'p', '47,48,50,52'),
(91, '2', '12', 'p', '47,48,51,52'),
(92, '2', '12', 'p', '47,48,49,53'),
(93, '2', '12', 'p', '47,48,50,53'),
(94, '2', '12', 'p', '47,48,51,53'),
(95, '3', '12', 'p', '47,48,49'),
(96, '3', '12', 'p', '47,48,50'),
(97, '3', '12', 'p', '47,48,51'),
(98, '3', '12', 'p', '47,48,49,52'),
(99, '3', '12', 'p', '47,48,50,52'),
(100, '3', '12', 'p', '47,48,51,52'),
(101, '3', '12', 'p', '47,48,49,53'),
(102, '3', '12', 'p', '47,48,50,53'),
(103, '3', '12', 'p', '47,48,51,53'),
(104, '4', '12', 'p', '47,48,49'),
(105, '4', '12', 'p', '47,48,50'),
(106, '4', '12', 'p', '47,48,51'),
(107, '4', '12', 'p', '47,48,49,52'),
(108, '4', '12', 'p', '47,48,50,52'),
(109, '4', '12', 'p', '47,48,51,52'),
(110, '4', '12', 'p', '47,48,49,53'),
(111, '4', '12', 'p', '47,48,50,53'),
(112, '4', '12', 'p', '47,48,51,53'),
(113, '5', '12', 'p', '47,48,49'),
(114, '5', '12', 'p', '47,48,50'),
(115, '5', '12', 'p', '47,48,51'),
(116, '5', '12', 'p', '47,48,49,52'),
(117, '5', '12', 'p', '47,48,50,52'),
(118, '5', '12', 'p', '47,48,51,52'),
(119, '5', '12', 'p', '47,48,49,53'),
(120, '5', '12', 'p', '47,48,50,53'),
(121, '5', '12', 'p', '47,48,51,53'),
(122, '6', '12', 'p', '47,48,49'),
(123, '6', '12', 'p', '47,48,50'),
(124, '6', '12', 'p', '47,48,51'),
(125, '6', '12', 'p', '47,48,49,52'),
(126, '6', '12', 'p', '47,48,50,52'),
(127, '6', '12', 'p', '47,48,51,52'),
(128, '6', '12', 'p', '47,48,49,53'),
(129, '6', '12', 'p', '47,48,50,53'),
(130, '6', '12', 'p', '47,48,51,53'),
(131, '7', '12', 'p', '47,48,49'),
(132, '7', '12', 'p', '47,48,50'),
(133, '7', '12', 'p', '47,48,51'),
(134, '7', '12', 'p', '47,48,49,52'),
(135, '7', '12', 'p', '47,48,50,52'),
(136, '7', '12', 'p', '47,48,51,52'),
(137, '7', '12', 'p', '47,48,49,53'),
(138, '7', '12', 'p', '47,48,50,53'),
(139, '7', '12', 'p', '47,48,51,53'),
(140, '1', '13A1-L', 'p', '54,55,56'),
(141, '1', '13A1-L', 'p', '54,55,57'),
(142, '1', '13A1-L', 'p', '54,55,58'),
(143, '1', '13A1-L', 'p', '54,55,56,59'),
(144, '1', '13A1-L', 'p', '54,55,56,60'),
(145, '1', '13A1-L', 'p', '54,55,56,61'),
(146, '1', '13A1-L', 'p', '54,55,56,62'),
(147, '1', '13A1-L', 'p', '54,55,57,59'),
(148, '1', '13A1-L', 'p', '54,55,57,60'),
(149, '1', '13A1-L', 'p', '54,55,57,61'),
(150, '1', '13A1-L', 'p', '54,55,56,62'),
(151, '1', '13A1-L', 'p', '54,55,58,59'),
(152, '1', '13A1-L', 'p', '54,55,58,60'),
(153, '1', '13A1-L', 'p', '54,55,56,61'),
(154, '1', '13A1-L', 'p', '54,55,56,62'),
(155, '2', '13A1-L', 'p', '54,55,56'),
(156, '2', '13A1-L', 'p', '54,55,57'),
(157, '2', '13A1-L', 'p', '54,55,58'),
(158, '2', '13A1-L', 'p', '54,55,56,59'),
(159, '2', '13A1-L', 'p', '54,55,56,60'),
(160, '2', '13A1-L', 'p', '54,55,56,61'),
(161, '2', '13A1-L', 'p', '54,55,56,62'),
(162, '2', '13A1-L', 'p', '54,55,57,59'),
(163, '2', '13A1-L', 'p', '54,55,57,60'),
(164, '2', '13A1-L', 'p', '54,55,57,61'),
(165, '2', '13A1-L', 'p', '54,55,56,62'),
(166, '2', '13A1-L', 'p', '54,55,58,59'),
(167, '2', '13A1-L', 'p', '54,55,58,60'),
(168, '2', '13A1-L', 'p', '54,55,56,61'),
(169, '2', '13A1-L', 'p', '54,55,56,62'),
(170, '3', '13A1-L', 'p', '54,55,56'),
(171, '3', '13A1-L', 'p', '54,55,57'),
(172, '3', '13A1-L', 'p', '54,55,58'),
(173, '3', '13A1-L', 'p', '54,55,56,59'),
(174, '3', '13A1-L', 'p', '54,55,56,60'),
(175, '3', '13A1-L', 'p', '54,55,56,61'),
(176, '3', '13A1-L', 'p', '54,55,56,62'),
(177, '3', '13A1-L', 'p', '54,55,57,59'),
(178, '3', '13A1-L', 'p', '54,55,57,60'),
(179, '3', '13A1-L', 'p', '54,55,57,61'),
(180, '3', '13A1-L', 'p', '54,55,56,62'),
(181, '3', '13A1-L', 'p', '54,55,58,59'),
(182, '3', '13A1-L', 'p', '54,55,58,60'),
(183, '3', '13A1-L', 'p', '54,55,56,61'),
(184, '3', '13A1-L', 'p', '54,55,56,62'),
(185, '4', '13A1-L', 'd', '54,55,56'),
(186, '4', '13A1-L', 'd', '54,55,57'),
(187, '4', '13A1-L', 'd', '54,55,58'),
(188, '4', '13A1-L', 'd', '54,55,56,59'),
(189, '4', '13A1-L', 'd', '54,55,56,60'),
(190, '4', '13A1-L', 'd', '54,55,56,61'),
(191, '4', '13A1-L', 'd', '54,55,56,62'),
(192, '4', '13A1-L', 'd', '54,55,57,59'),
(193, '4', '13A1-L', 'd', '54,55,57,60'),
(194, '4', '13A1-L', 'd', '54,55,57,61'),
(195, '4', '13A1-L', 'd', '54,55,56,62'),
(196, '4', '13A1-L', 'd', '54,55,58,59'),
(197, '4', '13A1-L', 'd', '54,55,58,60'),
(198, '4', '13A1-L', 'd', '54,55,56,61'),
(199, '4', '13A1-L', 'd', '54,55,56,62'),
(200, '5', '13A1-L', 'd', '54,55,56'),
(201, '5', '13A1-L', 'd', '54,55,57'),
(202, '5', '13A1-L', 'd', '54,55,58'),
(203, '5', '13A1-L', 'd', '54,55,56,59'),
(204, '5', '13A1-L', 'd', '54,55,56,60'),
(205, '5', '13A1-L', 'd', '54,55,56,61'),
(206, '5', '13A1-L', 'd', '54,55,56,62'),
(207, '5', '13A1-L', 'd', '54,55,57,59'),
(208, '5', '13A1-L', 'd', '54,55,57,60'),
(209, '5', '13A1-L', 'd', '54,55,57,61'),
(210, '5', '13A1-L', 'd', '54,55,56,62'),
(211, '5', '13A1-L', 'd', '54,55,58,59'),
(212, '5', '13A1-L', 'd', '54,55,58,60'),
(213, '5', '13A1-L', 'd', '54,55,56,61'),
(214, '5', '13A1-L', 'd', '54,55,56,62'),
(215, '6', '13A1-L', 'd', '54,55,56'),
(216, '6', '13A1-L', 'd', '54,55,57'),
(217, '6', '13A1-L', 'd', '54,55,58'),
(218, '6', '13A1-L', 'd', '54,55,56,59'),
(219, '6', '13A1-L', 'd', '54,55,56,60'),
(220, '6', '13A1-L', 'd', '54,55,56,61'),
(221, '6', '13A1-L', 'd', '54,55,56,62'),
(222, '6', '13A1-L', 'd', '54,55,57,59'),
(223, '6', '13A1-L', 'd', '54,55,57,60'),
(224, '6', '13A1-L', 'd', '54,55,57,61'),
(225, '6', '13A1-L', 'd', '54,55,56,62'),
(226, '6', '13A1-L', 'd', '54,55,58,59'),
(227, '6', '13A1-L', 'd', '54,55,58,60'),
(228, '6', '13A1-L', 'd', '54,55,56,61'),
(229, '6', '13A1-L', 'd', '54,55,56,62'),
(230, '7', '13A1-L', 'd', '54,55,56'),
(231, '7', '13A1-L', 'd', '54,55,57'),
(232, '7', '13A1-L', 'd', '54,55,58'),
(233, '7', '13A1-L', 'd', '54,55,56,59'),
(234, '7', '13A1-L', 'd', '54,55,56,60'),
(235, '7', '13A1-L', 'd', '54,55,56,61'),
(236, '7', '13A1-L', 'd', '54,55,56,62'),
(237, '7', '13A1-L', 'd', '54,55,57,59'),
(238, '7', '13A1-L', 'd', '54,55,57,60'),
(239, '7', '13A1-L', 'd', '54,55,57,61'),
(240, '7', '13A1-L', 'd', '54,55,56,62'),
(241, '7', '13A1-L', 'd', '54,55,58,59'),
(242, '7', '13A1-L', 'd', '54,55,58,60'),
(243, '7', '13A1-L', 'd', '54,55,56,61'),
(244, '7', '13A1-L', 'd', '54,55,56,62'),
(245, '1', '13A-HOD', 'd', '64'),
(246, '1', '13A-HOD', 'd', '65'),
(247, '1', '13A-P', 'd', '66'),
(248, '1', '13A-P', 'd', '67'),
(249, '1', '13A-P', 'p', '68'),
(250, '1', '13A-P', 'p', '69');

-- --------------------------------------------------------

--
-- Table structure for table `qualification_proof`
--

CREATE TABLE `qualification_proof` (
  `id` int(11) NOT NULL,
  `faculty_id` varchar(100) NOT NULL,
  `qualification_id` varchar(10) NOT NULL,
  `proof` text NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_verified` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualification_proof`
--

INSERT INTO `qualification_proof` (`id`, `faculty_id`, `qualification_id`, `proof`, `is_active`, `is_verified`) VALUES
(1, 'FACF87192445071', '29', 'C:/xampp/htdocs/rating-system/assets/proof/DataFile3.txt', 1, 0),
(2, 'FACF87192445071', '36', 'C:/xampp/htdocs/rating-system/assets/proof/DataFile4.txt', 1, 0),
(3, 'FACF66616561843', '36', 'C:/xampp/htdocs/rating-system/assets/proof/AICTE_LOGO.png', 1, 1),
(4, 'FACF66616561843', '41', 'C:/xampp/htdocs/rating-system/assets/proof/logo_new.png', 1, 0),
(5, 'FAC7712734', '66', 'C:/xampp/htdocs/rating-system/assets/proof/83d48d1f66ce6041a22c015cf2092038.jpg', 1, 0),
(6, 'FAC7712734', '67', 'C:/xampp/htdocs/rating-system/assets/proof/436c847bfdbd3e46d912cb1a7f4ae043.jpg', 1, 0),
(7, 'FAC7712734', '68', 'C:/xampp/htdocs/rating-system/assets/proof/3ef8493bb5d4b77b0285b9eb50333541.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `serial` int(2) NOT NULL,
  `faculty_id` int(10) NOT NULL,
  `feedback_from_id` int(10) NOT NULL,
  `teaching_process` int(10) NOT NULL,
  `student_feedback` int(10) NOT NULL,
  `departmental_activity` int(10) NOT NULL,
  `institutional_activity` int(10) NOT NULL,
  `acr` int(10) NOT NULL,
  `contribution_to_society` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `serial` int(2) NOT NULL,
  `university_roll_number` int(10) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `course` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `semester` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `branch` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_feedback`
--

CREATE TABLE `student_feedback` (
  `id` int(11) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `faculty_id` varchar(100) NOT NULL,
  `semister` int(11) NOT NULL,
  `activity_name` text NOT NULL,
  `points` int(11) NOT NULL,
  `keywords` text NOT NULL,
  `remarks` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teaching_process`
--

CREATE TABLE `teaching_process` (
  `serial` int(11) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL,
  `year` varchar(10) NOT NULL,
  `subject_code` varchar(100) NOT NULL,
  `total_classes` int(11) NOT NULL,
  `held_classes` int(11) NOT NULL,
  `teaching_proof` mediumtext NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teaching_process`
--

INSERT INTO `teaching_process` (`serial`, `faculty_id`, `semester`, `year`, `subject_code`, `total_classes`, `held_classes`, `teaching_proof`, `is_active`) VALUES
(1, 'FACF66616561843', 1, '2018-19', 'TET-10', 2, 1, 'C:/xampp/htdocs/rating-system/assets/proof/AICTE_LOGO2.png', 0),
(13, 'FACF66616561843', 1, '2017-18', 'TET-EE', 9, 5, 'C:/xampp/htdocs/rating-system/assets/proof/c498a0a34722b2ff14ed20f0151e91b16.jpg', 1),
(14, 'FACF66616561843', 1, '4567', '5678', 568, 5678, 'C:/xampp/htdocs/rating-system/assets/proof/geu.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `technical_level`
--

CREATE TABLE `technical_level` (
  `id` int(100) NOT NULL,
  `level_id` varchar(500) NOT NULL,
  `level_name` varchar(500) NOT NULL,
  `level_package_group` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technical_level`
--

INSERT INTO `technical_level` (`id`, `level_id`, `level_name`, `level_package_group`) VALUES
(1, '10', 'Assistant Professor', '57700'),
(2, '11', 'Assistant Professor (Senior Scale)', '68900'),
(3, '12', 'Assistant Professor (Selection Grade)', '79800'),
(4, '13A1', 'Associate Professor ', '131400'),
(5, '14', 'Professor', '144200'),
(6, '15', 'Senior Professor', '182200'),
(7, '14', 'Principal/Director', '144200');

-- --------------------------------------------------------

--
-- Table structure for table `technical_min_qualifications`
--

CREATE TABLE `technical_min_qualifications` (
  `id` int(11) NOT NULL,
  `qualification_name` varchar(1000) NOT NULL,
  `meta_qualification` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technical_min_qualifications`
--

INSERT INTO `technical_min_qualifications` (`id`, `qualification_name`, `meta_qualification`) VALUES
(101, 'B. E. / B. Tech. / B. S. and M. E. / M. Tech. / M. S. or Integrated M. Tech. in relevant branch\r\nwith first class or equivalent in any one of the degrees.', 'B. E. / B. Tech. / B. S. and M. E. / M. Tech. / M. S. or Integrated M. Tech. in relevant branch\r\nwith first class or equivalent in any one of the degrees.'),
(102, 'Bachelor’s Degree in any discipline and Master’s Degree in Business Administration / PGDM /\r\nC. A. / ICWA/ M. Com. with First Class or equivalent and two years of professional experience\r\nafter acquiring the degree of Master’s degree.', 'Bachelor’s Degree in any discipline and Master’s Degree in Business Administration / PGDM /\r\nC. A. / ICWA/ M. Com. with First Class or equivalent and two years of professional experience\r\nafter acquiring the degree of Master’s degree.'),
(103, 'B. Pharm. and M. Pharm. in the relevant specialization with First Class or equivalent in any one\r\nof the two degrees.', 'B. Pharm. and M. Pharm. in the relevant specialization with First Class or equivalent in any one\r\nof the two degrees.'),
(104, 'B. E. / B. Tech. / B. S. and M.E. / M. Tech. / M. S. or Integrated M. Tech. in relevant branch with\r\nFirst Class or equivalent in any one of the degrees', 'B. E. / B. Tech. / B. S. and M.E. / M. Tech. / M. S. or Integrated M. Tech. in relevant branch with\r\nFirst Class or equivalent in any one of the degrees'),
(105, 'B. E., B. Tech. and MCA with First Class or equivalent in any one of the two degrees', 'B. E., B. Tech. and MCA with First Class or equivalent in any one of the two degrees'),
(106, 'Graduation of three years’ duration with Mathematics as a compulsory subject and MCA with\r\nFirst Class or equivalent with 2 years of relevant experience after acquiring degree of MCA', 'Graduation of three years’ duration with Mathematics as a compulsory subject and MCA with\r\nFirst Class or equivalent with 2 years of relevant experience after acquiring degree of MCA'),
(107, 'Minimum 4 years Bachelor’s Degree in HMCT and Master’s Degree in HMCT or in relevant\r\ndisciplines with First Class or equivalent in any one of the two degrees.', 'Minimum 4 years Bachelor’s Degree in HMCT and Master’s Degree in HMCT or in relevant\r\ndisciplines with First Class or equivalent in any one of the two degrees.'),
(108, 'Minimum 4 years Bachelor’s Degree in HMCT with First Class or equivalent and minimum of 5\r\nyears of relevant experience at a managerial level not less than Assistant Manager in a 4 - star\r\nHotel or in a similar position in the hospitality industry/ tourism industry', 'Minimum 4 years Bachelor’s Degree in HMCT with First Class or equivalent and minimum of 5\r\nyears of relevant experience at a managerial level not less than Assistant Manager in a 4 - star\r\nHotel or in a similar position in the hospitality industry/ tourism industry'),
(109, 'B. Arch. and M. Arch. or equivalent Master’s degree in an allied field with First Class in any one\r\nof the two degrees, and minimum 2 years’ experience in the Architecture profession.', 'B. Arch. and M. Arch. or equivalent Master’s degree in an allied field with First Class in any one\r\nof the two degrees, and minimum 2 years’ experience in the Architecture profession.'),
(110, 'B. Arch. with First class or equivalent and minimum of 5 years’ experience in the Architecture\r\nprofession', 'B. Arch. with First class or equivalent and minimum of 5 years’ experience in the Architecture\r\nprofession'),
(111, 'Bachelor’s degree in Architecture / Planning / Civil Engineering or Master’s degree in\r\nGeography / Economics / Sociology or equivalent AND Master of Planning or equivalent with\r\nFirst class or equivalent in either in Master of Planning or any above degrees with 2 years of\r\nrelevant experience', 'Bachelor’s degree in Architecture / Planning / Civil Engineering or Master’s degree in\r\nGeography / Economics / Sociology or equivalent AND Master of Planning or equivalent with\r\nFirst class or equivalent in either in Master of Planning or any above degrees with 2 years of\r\nrelevant experience'),
(112, 'Bachelor’s Degree or minimum 4 year Diploma in any one of the streams of Design, Fine Arts,\r\nApplied Arts and Architecture or Bachelor’s degree in Engineering with First class or equivalent', 'Bachelor’s Degree or minimum 4 year Diploma in any one of the streams of Design, Fine Arts,\r\nApplied Arts and Architecture or Bachelor’s degree in Engineering with First class or equivalent'),
(113, 'Master’s degree or equivalent Post Graduate Diploma in relevant disciplines with First Class or\r\nequivalent in a concerned / relevant /allied subject of Industrial Design / Visual Communication /\r\nFine Arts / Applied Arts / Architecture / Interaction Design / New Media Studies / Design\r\nManagement / Ergonomics / Human Factors Engineering / Indian Craft Studies and related fields\r\nof Engineering or Design.', 'Master’s degree or equivalent Post Graduate Diploma in relevant disciplines with First Class or\r\nequivalent in a concerned / relevant /allied subject of Industrial Design / Visual Communication /\r\nFine Arts / Applied Arts / Architecture / Interaction Design / New Media Studies / Design\r\nManagement / Ergonomics / Human Factors Engineering / Indian Craft Studies and related fields\r\nof Engineering or Design.'),
(114, 'Minimum 2 years of professional design experience in Industry / research organization / Design\r\nstudios', 'Minimum 2 years of professional design experience in Industry / research organization / Design\r\nstudios'),
(115, 'Bachelor’s and Master’s degree in the relevant branch with First Class or equivalent in any one\r\nof the two degrees and minimum 2 years of relevant professional experience', 'Bachelor’s and Master’s degree in the relevant branch with First Class or equivalent in any one\r\nof the two degrees and minimum 2 years of relevant professional experience'),
(116, 'The qualifications for recruitment and promotions for faculty in the disciplines of Basic Sciences,\r\nSocial Science and Humanities shall be as per the UGC Notification No. F.1-2/2017(EC/PS)\r\nDated 18th July, 2018 and UGC guidelines issued from time to time.', 'The qualifications for recruitment and promotions for faculty in the disciplines of Basic Sciences,\r\nSocial Science and Humanities shall be as per the UGC Notification No. F.1-2/2017(EC/PS)\r\nDated 18th July, 2018 and UGC guidelines issued from time to time.'),
(117, 'Qualifications prescribed for the post of Assistant Professor', 'Qualifications prescribed for the post of Assistant Professor'),
(118, 'Qualifications prescribed for the post of Assistant Professor', 'Qualifications prescribed for the post of Assistant Professor'),
(119, 'Should have satisfied any one of the below mentioned set of requirements', 'Should have satisfied any one of the below mentioned set of requirements'),
(120, 'Qualifications as prescribed for the post of Assistant Professor (Senior Scale)', 'Qualifications as prescribed for the post of Assistant Professor (Senior Scale)'),
(121, 'Should have completed minimum training requirements as per Annexure - III.', 'Should have completed minimum training requirements as per Annexure - III.'),
(122, 'Should have satisfied any one of the below mentioned set of requirements.', 'Should have satisfied any one of the below mentioned set of requirements.'),
(123, 'Ph.D. degree in the relevant field and First class or equivalent at either Bachelor’s or Master’s\r\nlevel in the relevant branch', 'Ph.D. degree in the relevant field and First class or equivalent at either Bachelor’s or Master’s\r\nlevel in the relevant branch'),
(124, 'At least total 6 research publications in SCI journals / UGC / AICTE approved list of journals', 'At least total 6 research publications in SCI journals / UGC / AICTE approved list of journals'),
(125, 'Minimum of 8 years of experience in teaching / research / industry out of which at least 2 years\r\nshall be Post Ph.D. experience.', 'Minimum of 8 years of experience in teaching / research / industry out of which at least 2 years\r\nshall be Post Ph.D. experience.'),
(126, 'Ph. D. degree in relevant field and First class or equivalent at either Bachelor’s or Master’s level\r\nin the relevant branch', 'Ph. D. degree in relevant field and First class or equivalent at either Bachelor’s or Master’s level\r\nin the relevant branch'),
(127, 'Should have completed minimum training requirements as per Annexure – III', 'Should have completed minimum training requirements as per Annexure – III'),
(128, 'Should have satisfied any one of the below mentioned set of requirements.', 'Should have satisfied any one of the below mentioned set of requirements.'),
(129, 'Ph. D. degree in relevant field and First class or equivalent at either Bachelor’s or Master’s level\r\nin the relevant branch', 'Ph. D. degree in relevant field and First class or equivalent at either Bachelor’s or Master’s level\r\nin the relevant branch'),
(130, 'Minimum of 10 years of experience in teaching / research / industry out of which at least 3 years\r\nshall be at a post equivalent to that of an Associate Professor', 'Minimum of 10 years of experience in teaching / research / industry out of which at least 3 years\r\nshall be at a post equivalent to that of an Associate Professor'),
(131, 'At least 6 research publications at the level of Associate Professor in SCI journals / UGC /\r\nAICTE approved list of journals and at least 2 successful Ph.D. guided as Supervisor / Cosupervisor till the date of eligibility of promotion', 'At least 6 research publications at the level of Associate Professor in SCI journals / UGC /\r\nAICTE approved list of journals and at least 2 successful Ph.D. guided as Supervisor / Cosupervisor till the date of eligibility of promotion'),
(132, 'At least 10 research publications at the level of Associate Professor in SCI journals / UGC /\r\nAICTE approved list of journals till the date of eligibility of promotion.', 'At least 10 research publications at the level of Associate Professor in SCI journals / UGC /\r\nAICTE approved list of journals till the date of eligibility of promotion.'),
(133, 'Ph. D. degree in relevant field and First Class or equivalent at either Bachelor’s or Master’s level\r\nin the relevant branch', 'Ph. D. degree in relevant field and First Class or equivalent at either Bachelor’s or Master’s level\r\nin the relevant branch'),
(134, 'Should have satisfied any one of the below mentioned set of requirements', 'Should have satisfied any one of the below mentioned set of requirements'),
(135, 'Ph. D. degree in the relevant field', 'Ph. D. degree in the relevant field'),
(136, 'Minimum ten years of experience in the cadre of Professor', 'Minimum ten years of experience in the cadre of Professor'),
(137, 'At least 8 research publications in SCI journals / UGC / AICTE approved list of journals, should\r\nhave at least 2 successful Ph. D. guided as Supervisor / Co-Supervisor as a Professor', 'At least 8 research publications in SCI journals / UGC / AICTE approved list of journals, should\r\nhave at least 2 successful Ph. D. guided as Supervisor / Co-Supervisor as a Professor'),
(138, 'At least 8 research publications in SCI journals / UGC / AICTE approved list of journals, should\r\nhave provided academic leadership as institution head at least for 3 years at the level of Professor', 'At least 8 research publications in SCI journals / UGC / AICTE approved list of journals, should\r\nhave provided academic leadership as institution head at least for 3 years at the level of Professor'),
(139, 'At least 8 research publications in SCI journals / UGC / AICTE approved list of journals, should\r\nhave provided educational leadership at state / national level at least for 3 years at the level of\r\nProfessor.', 'At least 8 research publications in SCI journals / UGC / AICTE approved list of journals, should\r\nhave provided educational leadership at state / national level at least for 3 years at the level of\r\nProfessor.'),
(140, 'At least one patent awarded', 'At least one patent awarded'),
(141, 'Development of one MOOC course applicable at national platform', 'Development of one MOOC course applicable at national platform'),
(142, 'Ph. D. degree and First Class or equivalent at either Bachelor’s or Master’s level in the relevant\r\nbranch', 'Ph. D. degree and First Class or equivalent at either Bachelor’s or Master’s level in the relevant\r\nbranch'),
(143, 'At least two successful Ph.D. guided as supervisor / Co-Supervisor and minimum 8 research\r\npublications in SCI journals / UGC / AICTE approved list of journals', 'At least two successful Ph.D. guided as supervisor / Co-Supervisor and minimum 8 research\r\npublications in SCI journals / UGC / AICTE approved list of journals'),
(144, 'Minimum 15 years of experience in teaching / research/ industry, out of which at least 3 years\r\nshall be at the post equivalent to that of Professor', 'Minimum 15 years of experience in teaching / research/ industry, out of which at least 3 years\r\nshall be at the post equivalent to that of Professor');

-- --------------------------------------------------------

--
-- Table structure for table `technical_requirement`
--

CREATE TABLE `technical_requirement` (
  `id` int(11) NOT NULL,
  `department` varchar(50) NOT NULL,
  `level` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technical_requirement`
--

INSERT INTO `technical_requirement` (`id`, `department`, `level`, `type`, `qualification`) VALUES
(51, '1', '10', 'd', '101'),
(52, '', '10', 'd', '102'),
(53, '', '10', 'd', '103'),
(54, '', '10', 'd', '104'),
(55, '', '10', 'd', '105'),
(56, '', '10', 'd', '106'),
(57, '', '10', 'd', '104,105'),
(58, '', '10', 'd', '104,106'),
(59, '', '10', 'd', '105,106'),
(60, '', '10', 'd', '107'),
(61, '', '10', 'd', '108'),
(62, '', '10', 'd', '107,108'),
(63, '', '10', 'd', '109'),
(64, '', '10', 'd', '110'),
(65, '', '10', 'd', '109,110'),
(66, '', '10', 'd', '111'),
(67, '', '10', 'd', '112,113,114'),
(68, '', '10', 'd', '115'),
(69, '', '10', 'd', '116'),
(70, '', '11', 'p', '117,118,119'),
(71, '', '12', 'p', '120,121,122'),
(72, '', '13A1', 'd', '123,124,125'),
(73, '', '13A1', 'p', '126,127,128'),
(74, '', '14', 'd', '129,130,131'),
(75, '', '14', 'd', '129,130,132'),
(76, '', '14', 'p', '133,134'),
(77, '', '15', 'p', '135,136,137,140'),
(78, '', '15', 'p', '135,136,138,140'),
(79, '', '15', 'p', '135,136,139,140'),
(80, '', '15', 'p', '135,136,137,141'),
(81, '', '15', 'p', '135,136,138,141'),
(82, '', '15', 'p', '135,136,139,141'),
(83, '', '14', 'd', '142,143,144');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `serial` int(2) NOT NULL,
  `firstname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`serial`, `firstname`, `lastname`, `email`) VALUES
(1, 'John', 'Doe', 'john@example.com'),
(2, 'John', 'Doe', 'john@example.com'),
(3, 'John', 'Doe', 'john@example.com'),
(4, 'John', 'Doe', 'john@example.com'),
(5, 'John', 'Doe', 'john@example.com'),
(6, 'Mickey', 'Mouse', ''),
(7, 'Mickey', 'Mouse', ''),
(8, 'Mickey', 'Mouse', ''),
(9, 'kartikay', 'sawhney', 'karrtikay.sawhney@geu.ac.in'),
(10, 'shivanshu', 'gupta', 'jahsgdhjasdbhagdb');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `serial` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `section` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `proof` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `serial` int(5) NOT NULL,
  `university_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `university_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `technical_diploma` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_state_university` int(2) NOT NULL,
  `district` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `logo` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`serial`, `university_code`, `university_name`, `state`, `technical_diploma`, `is_state_university`, `district`, `postal_code`, `address`, `contact`, `email`, `logo`) VALUES
(1, 'GEUDDN', 'Graphic Era University', 'Uttrakhand', 'diploma', 1, 'fghjkl', '2346578', 'ertyuiertyui', '344567890', '34567890', 'assets/img/dd3fbcb6766fcfccc8412cf02917ecbe.jpg'),
(7, '6567899', 'My Custom University 2', 'DFGHJK', '', 1, 'FGHJK', '56879900', '', '', '', ''),
(11, 'GHJK', 'Grand High Jam Kuth', 'GHJK', '', 1, 'Kashmir', '290118', '33/1 New Red Street, White Villa', '9897171001', 'adityasaxne$@gmail.com', 'assets/img/7bb36ff7f4051bac875fb9f886677b63.jpg'),
(12, 'BISHOP', 'Bishop Conrad Senior Secondary Institute', 'UP', 'technical', 1, 'Bareilly', '248001', '52 Cant, Near White Villa', '9897171001', 'pingus@bishop.co.in', 'assets/img/1d7b932ecbf88915c937b0ca6b6fabcd.jpg'),
(13, '1231324124', 'ABCDEFGH', 'Uttarakhand', '', 1, 'Dehradun', '248001', '', '', '', ''),
(14, '12413131', 'ABCDEFGHIJKLM', 'Uttarakhand', 'diploma', 1, 'Dehradun', '248001', '', '', '', ''),
(15, '1234567890', 'XYZ University', 'Delhi', 'technical', 1, 'Delhi', '11001100', '', '', '', ''),
(21, '5674567567', 'ABCDEFGHIJKLM', 'West Bengal', 'diploma', 0, 'Kolkata', '12312413', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `login_type` enum('Login','Feedback') NOT NULL,
  `code` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('admin','university','institute','faculty','student','head-of-department') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `login_type`, `code`, `username`, `password`, `role`) VALUES
(1, 'Login', 'GEUDDN', 'geu', '61dfe5971515d0d8ba5f6c5f99e5700c', 'university'),
(2, 'Login', 'GEHUDDN', 'gehu', '4a6a6e51843d2ba4a67c344825ab4ab1', 'institute'),
(3, 'Login', 'geuddn', 'hod', '17d84f171d54c301fabae1391a125c4e', 'head-of-department'),
(4, 'Login', 'geuddn', 'faculty', 'd561c7c03c1f2831904823a95835ff5f', 'faculty'),
(5, 'Login', 'aicte', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(8, 'Login', 'GHJK', 'GHJK', 'cdee058ed6a1c749a0a987a0147ab9e8', 'university'),
(9, 'Login', '6789', '6789', '46d045ff5190f6ea93739da6c0aa19bc', 'institute'),
(10, 'Login', 'GEUDDN', 'FAC63341992', '27f217228db365d93739090ad3d74618', 'head-of-department'),
(11, 'Login', 'GEUDDN', 'FACF87192445071', '7fd5f62297216dfd83324ca17d54b5bb', 'faculty'),
(13, 'Login', 'BISHOP', 'BISHOP', '1834d375f684613c725d039a10db1976', 'university'),
(14, 'Login', 'BISHOP1', 'BISHOP1', 'a00474d79eec08234e69c6dc7b893910', 'institute'),
(15, 'Login', 'BISHOP', 'FAC7712734', '180ab0bb6108b51bc66cef70f648fe04', 'head-of-department'),
(16, 'Login', 'BISHOP', 'FACF428144713880', '4721cdff879e7721bd2dab62e6f4cd19', 'faculty'),
(17, 'Login', 'BISHOP', 'FACF631305285720', 'ded0405659c19d74a7cef697e520fe9b', 'faculty'),
(18, 'Login', 'BISHOP', 'FACF694551514792', 'fca5aaffe57655ee779d78ff64fdf9ad', 'faculty'),
(19, 'Login', 'BISHOP', 'FACF161012001347', '7e840be443ab751b1976799703e1610c', 'faculty'),
(20, 'Login', 'BISHOP', 'FACF54491606193', '7e1ea12f235ac2947ede5ba600b82a88', 'faculty'),
(21, 'Login', 'BISHOP', 'FACF228661427967', '816662ddd9eded893c07d41d1019a08d', 'faculty'),
(22, 'Login', 'BISHOP', 'FACF66616561843', '5e87cc9828dbe83f069aac6ad715224b', 'faculty'),
(23, 'Login', '1231324124', '1231324124', '2146f28a0f17a6d529df7071c99991ae', 'university'),
(24, 'Login', '12413131', '12413131', '5d2df67629dd8144cc51e922203e28b3', 'university'),
(25, 'Login', '1234567890', '1234567890', 'e807f1fcf82d132f9bb018ca6738a19f', 'university'),
(26, 'Login', '1234567890', '1234567890', 'e807f1fcf82d132f9bb018ca6738a19f', 'university'),
(27, 'Login', '1234567890', '1234567890', 'e807f1fcf82d132f9bb018ca6738a19f', 'university'),
(28, 'Login', '1234567890', '1234567890', 'e807f1fcf82d132f9bb018ca6738a19f', 'university'),
(29, 'Login', '1234567890', '1234567890', 'e807f1fcf82d132f9bb018ca6738a19f', 'university'),
(30, 'Login', '1234567890', '1234567890', 'e807f1fcf82d132f9bb018ca6738a19f', 'university'),
(31, 'Login', '5674567567', '5674567567', '1f71f47da20047376b5d55057a258954', 'university'),
(32, 'Login', 'BISHOP', 'FACF298562939312', '08744c3d5a580177916b6d725222dbf3', 'faculty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acr_points`
--
ALTER TABLE `acr_points`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `aicte_admin`
--
ALTER TABLE `aicte_admin`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `departmental_activities`
--
ALTER TABLE `departmental_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `faculty_dept`
--
ALTER TABLE `faculty_dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input_qualification`
--
ALTER TABLE `input_qualification`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `institute`
--
ALTER TABLE `institute`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `min_qualifications`
--
ALTER TABLE `min_qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `min_requirements`
--
ALTER TABLE `min_requirements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualification_proof`
--
ALTER TABLE `qualification_proof`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `student_feedback`
--
ALTER TABLE `student_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teaching_process`
--
ALTER TABLE `teaching_process`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `technical_level`
--
ALTER TABLE `technical_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technical_min_qualifications`
--
ALTER TABLE `technical_min_qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technical_requirement`
--
ALTER TABLE `technical_requirement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acr_points`
--
ALTER TABLE `acr_points`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `serial` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `aicte_admin`
--
ALTER TABLE `aicte_admin`
  MODIFY `serial` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departmental_activities`
--
ALTER TABLE `departmental_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `serial` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `faculty_dept`
--
ALTER TABLE `faculty_dept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `input_qualification`
--
ALTER TABLE `input_qualification`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `institute`
--
ALTER TABLE `institute`
  MODIFY `serial` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `min_qualifications`
--
ALTER TABLE `min_qualifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `min_requirements`
--
ALTER TABLE `min_requirements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `qualification_proof`
--
ALTER TABLE `qualification_proof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `serial` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `serial` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_feedback`
--
ALTER TABLE `student_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teaching_process`
--
ALTER TABLE `teaching_process`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `serial` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `serial` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
