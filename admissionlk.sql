-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 11:13 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admissionlk`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat`) VALUES
(1, 'proximity\r\n'),
(2, 'alumni'),
(3, 'sibling'),
(4, 'staff'),
(5, 'officer'),
(6, 'foreign\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `election`
--

CREATE TABLE `election` (
  `sid` int(20) NOT NULL,
  `year` int(20) NOT NULL,
  `district` varchar(100) NOT NULL,
  `gndiv` varchar(100) NOT NULL,
  `polldiv` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `houseno` int(20) NOT NULL,
  `serialno` int(20) NOT NULL,
  `ename` varchar(100) NOT NULL,
  `ecount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `sclname` varchar(100) NOT NULL,
  `sclcat` varchar(100) NOT NULL,
  `scladdress` varchar(100) NOT NULL,
  `scldistrict` varchar(100) NOT NULL,
  `sclgndiv` varchar(100) NOT NULL,
  `sclid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `shortname` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `locale` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `prox_mark` int(20) NOT NULL,
  `alum_mark` int(20) NOT NULL,
  `sib_mark` int(20) NOT NULL,
  `staff_mark` int(20) NOT NULL,
  `officer_mark` int(20) NOT NULL,
  `foriegn_mark` int(20) NOT NULL,
  `best_cat` varchar(100) NOT NULL,
  `prox_gfullname` varchar(255) DEFAULT NULL,
  `prox_gshortname` varchar(255) DEFAULT NULL,
  `prox_gnic` varchar(255) DEFAULT NULL,
  `prox_gisLankan` tinyint(1) DEFAULT NULL,
  `prox_greligion` varchar(255) DEFAULT NULL,
  `prox_paddress` varchar(255) DEFAULT NULL,
  `prox_telephone` int(10) DEFAULT NULL,
  `prox_district` varchar(255) DEFAULT NULL,
  `prox_divsec` varchar(255) DEFAULT NULL,
  `prox_gndiv` varchar(255) DEFAULT NULL,
  `prox_scl1Name` varchar(255) DEFAULT NULL,
  `prox_scl1cat` varchar(255) DEFAULT NULL,
  `prox_scl1dist` int(11) DEFAULT NULL,
  `prox_scl2Name` varchar(255) DEFAULT NULL,
  `prox_scl2cat` varchar(255) DEFAULT NULL,
  `prox_scl2dist` int(11) DEFAULT NULL,
  `prox_scl3Name` varchar(255) DEFAULT NULL,
  `prox_scl3cat` varchar(255) DEFAULT NULL,
  `prox_scl3dist` int(11) DEFAULT NULL,
  `prox_scl4Name` varchar(255) DEFAULT NULL,
  `prox_scl4cat` varchar(255) DEFAULT NULL,
  `prox_scl4dist` int(11) DEFAULT NULL,
  `prox_scl5Name` varchar(255) DEFAULT NULL,
  `prox_scl5cat` varchar(255) DEFAULT NULL,
  `prox_scl5dist` int(11) DEFAULT NULL,
  `prox_scl6Name` varchar(255) DEFAULT NULL,
  `prox_scl6cat` varchar(255) DEFAULT NULL,
  `prox_scl6dist` int(11) DEFAULT NULL,
  `yearsIneRegApplicant` int(11) DEFAULT NULL,
  `yearsineregSpouse` int(11) DEFAULT NULL,
  `yearsineregGuardian` int(11) DEFAULT NULL,
  `hasDocsOwnership` tinyint(1) DEFAULT NULL,
  `hasDocsOtherProof` tinyint(1) DEFAULT NULL,
  `prox_nearSclCount` int(11) DEFAULT NULL,
  `alu_classCount` int(11) DEFAULT NULL,
  `alu_eduCount` int(11) DEFAULT NULL,
  `alu_edu1` varchar(255) DEFAULT NULL,
  `alu_edu2` varchar(255) DEFAULT NULL,
  `alu_edu3` varchar(255) DEFAULT NULL,
  `alu_edu4` varchar(255) DEFAULT NULL,
  `alu_edu5` varchar(255) DEFAULT NULL,
  `alu_coCurCount` int(11) DEFAULT NULL,
  `alu_coCur1` varchar(255) DEFAULT NULL,
  `alu_coCur2` varchar(255) DEFAULT NULL,
  `alu_coCur3` varchar(255) DEFAULT NULL,
  `alu_coCur4` varchar(255) DEFAULT NULL,
  `alu_coCur5` varchar(255) DEFAULT NULL,
  `alu_sclDevCount` int(11) DEFAULT NULL,
  `alu_sclDev1` varchar(255) DEFAULT NULL,
  `alu_sclDev2` varchar(255) DEFAULT NULL,
  `alu_sclDev3` varchar(255) DEFAULT NULL,
  `alu_sclDev4` varchar(255) DEFAULT NULL,
  `sib_count` int(11) DEFAULT NULL,
  `sib_isFromGrade1` tinyint(1) DEFAULT NULL,
  `sib_yearsSpend` int(11) DEFAULT NULL,
  `sib_awards` int(11) DEFAULT NULL,
  `sib_child1name` varchar(255) DEFAULT NULL,
  `sib_child1no` int(11) DEFAULT NULL,
  `sib_child1grade` int(11) DEFAULT NULL,
  `sib_child1yearsSpend` int(11) DEFAULT NULL,
  `sib_child2name` varchar(255) DEFAULT NULL,
  `sib_child2no` int(11) DEFAULT NULL,
  `sib_child2grade` int(11) DEFAULT NULL,
  `sib_child2yearsSpend` int(11) DEFAULT NULL,
  `sib_child3name` varchar(255) DEFAULT NULL,
  `sib_child3no` int(11) DEFAULT NULL,
  `sib_child3grade` int(11) DEFAULT NULL,
  `sib_child3yearsSpend` int(11) DEFAULT NULL,
  `staff_post` varchar(255) DEFAULT NULL,
  `staff_serviceYears` int(11) DEFAULT NULL,
  `staff_isDisff` tinyint(1) DEFAULT NULL,
  `staff_serviceYearsDiff` int(11) DEFAULT NULL,
  `staff_serviceYearsNonDIff` int(11) DEFAULT NULL,
  `staff_sameScl` varchar(255) DEFAULT NULL,
  `staff_isSameSclYears` tinyint(1) DEFAULT NULL,
  `staff_resDist` int(11) DEFAULT NULL,
  `offc_resDist` int(11) DEFAULT NULL,
  `offc_serviceYears` int(11) DEFAULT NULL,
  `foreign_yearsLived` int(11) DEFAULT NULL,
  `foreign_reason` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `fullname`, `shortname`, `religion`, `locale`, `dob`, `sex`, `prox_mark`, `alum_mark`, `sib_mark`, `staff_mark`, `officer_mark`, `foriegn_mark`, `best_cat`, `prox_gfullname`, `prox_gshortname`, `prox_gnic`, `prox_gisLankan`, `prox_greligion`, `prox_paddress`, `prox_telephone`, `prox_district`, `prox_divsec`, `prox_gndiv`, `prox_scl1Name`, `prox_scl1cat`, `prox_scl1dist`, `prox_scl2Name`, `prox_scl2cat`, `prox_scl2dist`, `prox_scl3Name`, `prox_scl3cat`, `prox_scl3dist`, `prox_scl4Name`, `prox_scl4cat`, `prox_scl4dist`, `prox_scl5Name`, `prox_scl5cat`, `prox_scl5dist`, `prox_scl6Name`, `prox_scl6cat`, `prox_scl6dist`, `yearsIneRegApplicant`, `yearsineregSpouse`, `yearsineregGuardian`, `hasDocsOwnership`, `hasDocsOtherProof`, `prox_nearSclCount`, `alu_classCount`, `alu_eduCount`, `alu_edu1`, `alu_edu2`, `alu_edu3`, `alu_edu4`, `alu_edu5`, `alu_coCurCount`, `alu_coCur1`, `alu_coCur2`, `alu_coCur3`, `alu_coCur4`, `alu_coCur5`, `alu_sclDevCount`, `alu_sclDev1`, `alu_sclDev2`, `alu_sclDev3`, `alu_sclDev4`, `sib_count`, `sib_isFromGrade1`, `sib_yearsSpend`, `sib_awards`, `sib_child1name`, `sib_child1no`, `sib_child1grade`, `sib_child1yearsSpend`, `sib_child2name`, `sib_child2no`, `sib_child2grade`, `sib_child2yearsSpend`, `sib_child3name`, `sib_child3no`, `sib_child3grade`, `sib_child3yearsSpend`, `staff_post`, `staff_serviceYears`, `staff_isDisff`, `staff_serviceYearsDiff`, `staff_serviceYearsNonDIff`, `staff_sameScl`, `staff_isSameSclYears`, `staff_resDist`, `offc_resDist`, `offc_serviceYears`, `foreign_yearsLived`, `foreign_reason`) VALUES
(1, 'Kadira Vithanage Hiran Erandika', 'Hiran Vithana ', 'Buddhist', 'Sinhala', '1995-12-07', 'male', 0, 0, 0, 0, 0, 0, '', 'Kadira Vithanage Hemakumara', 'Hemakumara', '952334383v', 1, 'Buddhist', '217/12,\r\nRose Garden,\r\nBatuwatta', 767241048, 'Gampaha', 'Gampaha', 'Batuwatta', 'Ananda College', 'National', 2, 'Royal College', 'National', 10, 'Nalanda College', 'National', 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, 1, 1, 2, 10, 3, 'prefect', 'captian ', 'secretary ', NULL, NULL, 3, 'swimming', 'chess', 'cricket', NULL, NULL, 2, 'donation to library', 'donation ', NULL, NULL, 2, 2, 2, 3, 'Nisal\r\n', 1, 2, 2, 'Viran', 3, 7, 7, NULL, NULL, NULL, NULL, 'CEO', 5, 2, 5, 1, 'yes', 3, 5, 5, 5, 1, 'government sector');

-- --------------------------------------------------------

--
-- Table structure for table `studentschool`
--

CREATE TABLE `studentschool` (
  `sid` int(20) NOT NULL,
  `sclid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(20) NOT NULL,
  `order_id` int(50) NOT NULL,
  `amount` decimal(9,2) NOT NULL,
  `response_code` int(10) NOT NULL,
  `response_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `order_id`, `amount`, `response_code`, `response_desc`) VALUES
(1, 15478952, '100.00', 0, 'PAID'),
(2, 15478955, '10.00', 0, 'PAID'),
(3, 15478958, '50.00', 1, 'FAILED'),
(4, 15478959, '60.00', 0, 'PAID');

-- --------------------------------------------------------

--
-- Table structure for table `user_cat`
--

CREATE TABLE `user_cat` (
  `user` int(50) NOT NULL,
  `cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
