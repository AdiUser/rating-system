-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2019 at 07:14 AM
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
-- Database: `aicte_updated`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `serial` int(2) NOT NULL,
  `faculty_id` int(10) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `report` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `verified` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(2, 12345678, 'graphic era deemed t', '', 'uttarakhan', 0, 1122334455, ' clement town, dehra', 'geuddn@gmail.com', 0, ''),
(3, 0, '', '', '', 0, 0, ' ', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `serial` int(2) NOT NULL,
  `university_id` int(10) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `contact` int(20) NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_joining` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `faculty_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `qualification_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_dept`
--

CREATE TABLE `faculty_dept` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_dept`
--

INSERT INTO `faculty_dept` (`id`, `name`) VALUES
(1, 'Engineering / Technology'),
(2, 'Pharmacy'),
(3, 'Hotel Management and Catering Technology'),
(4, 'Architecture'),
(5, 'Fine Arts'),
(6, 'Design'),
(7, 'Sciences and Humanities');

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

CREATE TABLE `institute` (
  `serial` int(2) NOT NULL,
  `parent_university_id` int(10) NOT NULL,
  `institute_id` int(10) NOT NULL,
  `institute_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `serial` int(2) NOT NULL,
  `university_code` int(10) NOT NULL,
  `university_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `is_state_university` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `institute`
--
ALTER TABLE `institute`
  ADD PRIMARY KEY (`serial`);

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
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `serial` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aicte_admin`
--
ALTER TABLE `aicte_admin`
  MODIFY `serial` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `serial` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty_dept`
--
ALTER TABLE `faculty_dept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `institute`
--
ALTER TABLE `institute`
  MODIFY `serial` int(2) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `serial` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `serial` int(2) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
