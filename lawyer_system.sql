-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 01:55 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyer_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `defendant`
--

CREATE TABLE `defendant` (
  `defendant_id` int(11) NOT NULL,
  `defendant_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `defendant_no` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `enable` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `defendant`
--

INSERT INTO `defendant` (`defendant_id`, `defendant_name`, `defendant_no`, `enable`) VALUES
(1, 'test def 1', '1111111111111', 1),
(2, 'test def 2', '2222222222222', 1),
(3, 'test def 3', '3333333333333', 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `enable` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `enable`) VALUES
(1, 'IT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `document_def`
--

CREATE TABLE `document_def` (
  `doc_def_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `defendant_id` int(11) NOT NULL,
  `doc_def_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `doc_def_no` varchar(13) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `document_def`
--

INSERT INTO `document_def` (`doc_def_id`, `doc_id`, `defendant_id`, `doc_def_name`, `doc_def_no`) VALUES
(4, 3, 1, 'aaaaa', '11111'),
(5, 1, 1, 'test def 1', '1111111111111'),
(8, 11, 1, 'test def 1', '1111111111111'),
(9, 11, 2, 'test def 2', '2222222222222');

-- --------------------------------------------------------

--
-- Table structure for table `document_filedoc`
--

CREATE TABLE `document_filedoc` (
  `doc_file_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `doc_file_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `doc_file_text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `doc_file_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `document_filedoc`
--

INSERT INTO `document_filedoc` (`doc_file_id`, `doc_id`, `doc_file_name`, `doc_file_text`, `doc_file_date`) VALUES
(19, 1, 'asdasdasd', '<h4 style=\"text-align:justify;text-justify:inter-cluster\"><div style=\"text-align: right;\"><span lang=\"TH\" style=\"color: inherit; font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\">วันที่ พฤศจิกายน\nพ.ศ. </span><span style=\"color: inherit; font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\">2562</span></div><span style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\"><div style=\"text-align: right;\"><span style=\"font-size: 16pt; color: inherit;\">เรื่อง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; บอกกล่าวให้ชำระหนี้และบอกกล่าวบังคับจำนอง</span></div><o:p><div style=\"text-align: right;\"><span style=\"font-size: 16pt; color: inherit;\">เรียน&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;นายธนะรัชต์\nไหมใหม่&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ในฐานะ ผู้กู้</span></div></o:p></span><span lang=\"TH\" style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\"><div style=\"text-align: right;\"><span lang=\"TH\" style=\"color: inherit; font-size: 16pt;\">อ้างถึง&nbsp;&nbsp;&nbsp; สัญญากู้เงินและสัญญาจำนอง\nสินเชื่อ</span><span lang=\"TH\" style=\"color: inherit; font-size: 16pt;\">เพื่อธุรกิจ,\nสินเชื่อเบิกเงินเกินบัญชี OD</span></div></span><span lang=\"TH\" style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\"><div style=\"text-align: right;\"><span style=\"font-size: 16pt; color: inherit;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; จำนวน 3 ฉบับ</span></div></span><span lang=\"TH\" style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\"><div style=\"text-align: right;\"><span style=\"font-size: 16pt; color: inherit;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ฉบับลงวันที่ 17\nกันยายน 2561</span></div> </span>&nbsp;&nbsp;&nbsp;&nbsp;<span lang=\"TH\" style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\">ตามที่ </span><span lang=\"TH\" style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\">นายธนะรัชต์ ไหมใหม่ ได้ทำสัญญากู้เงินประเภทสินเชื่อธุรกิจทั่วไป<span style=\"color:red\"> </span>ไปจากธนาคารออมสิน สาขาค่ายธนะรัชต์\nเมื่อวันที่ </span><span style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\">17 <span lang=\"TH\">กันยายน </span>2561 <span lang=\"TH\">&nbsp;เป็นจำนวนเงิน 8</span>00,000 <span lang=\"TH\">บาท\n(แปดแสนบาทถ้วน) ผู้กู้ยอมเสียดอกเบี้ยในอัตราดอกเบี้ยร้อยละ MLR</span>+1.00 <span lang=\"TH\">ต่อปี &nbsp;โดยตกลงจะชำระหนี้ต้นเงินและดอกเบี้ย\nเป็นงวดรายเดือน ภายในวันสุดท้ายของทุกเดือน โดยชำระในงวดแรกในเดือนสิงหาคม </span>25<span lang=\"TH\">61 และผู้กู้ตกลงจะชำระหนี้ให้หมดสิ้นภายในวันที่ 31 กรกฎาคม 2568<br> </span><o:p></o:p></span><span lang=\"TH\" style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\">ในวันดังกล่าว (<a name=\"_Hlk19090514\">วันที่</a>17 กันยายน 2561) </span><span lang=\"TH\" style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\">นายธนะรัชต์\nไหมใหม่ &nbsp;ได้ทำสัญญากู้เงินประเภทสินเชื่อเบิกเงินเกินบัญชี\n</span><span style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\">OD<span lang=\"TH\"> ไปจากธนาคารออมสิน สาขาค่ายธนะรัชต์ &nbsp;เป็นจำนวนเงิน 500</span>,<span lang=\"TH\">000 บาท\n(ห้าแสนบาทถ้วน) ผู้กู้ยอมเสียดอกเบี้ยในอัตราดอกเบี้ยร้อยละ </span>M<span lang=\"TH\">O</span>R+<span lang=\"TH\">1.00 ต่อปี&nbsp;\nโดยคำนวณเป็นรายวันของหนี้เบิกเงินเกินบัญญชีที่ค้างชำระและกำหนดส่งดอกเบี้ย\nเป็นงวดรายเดือน ทุกๆเดือน ภายในวันสุดท้ายของทุกเดือน&nbsp; ทั้งนี้ถือว่า1ปี มี 365 วัน<br> </span><o:p></o:p></span><span lang=\"TH\" style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\">และในวันเดียวกัน &nbsp;นายธนะรัชต์\nไหมใหม่ &nbsp;ได้ทำสัญญาจำนองและจดทะเบียนจำนอง&nbsp; โดยมอบหลักทรัพย์ ไว้เป็นประกัน ดังนี้<br> </span><span style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\">1.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n</span></span><!--[endif]--><span lang=\"TH\" style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\">โฉนดที่ดินเลขที่ 35445</span><span lang=\"TH\" style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif; color: red;\"> </span><span lang=\"TH\" style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\">&nbsp;เลขที่ดิน 42&nbsp;\nหน้าสำรวจ 6161 &nbsp;&nbsp;ตำบลปรารบุรี &nbsp;<br></span><span lang=\"TH\" style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\">อำเภอปราณบุรี &nbsp;จังหวัดประจวบคีรีขันธ์<br>\n</span><span lang=\"TH\" style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\">จำนองไว้ประกันการชำระหนี้เงินกู้ดังกล่าวของท่านไว้ให้กับทางธนาคารฯตามสัญญาจำนอง\nฉบับลงวันที่ วันที่ </span><span style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\">17 <span lang=\"TH\">กันยายน </span>2561<br><o:p></o:p></span><span lang=\"TH\" style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ขณะนี้ ท่านผู้กู้ได้ผิดนัด\nมิได้ชำระหนี้ให้กับทางธนาคารตามสัญญา และธนาคารไม่ประสงค์จะให้ผู้กู้ยืมเงินจำนวนดังกล่าวอีกต่อไป\n&nbsp;&nbsp;คิดภาระหนี้ที่ท่านค้างชำระเพียงวันที่ลงในหนังสือ</span><span lang=\"TH\" style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\">ฉบับนี้\nมียอดหนี้ค้างชำระกับธนาคารเป็นต้นเงินรวมทั้งดอกเบี้ยและดอกเบี้ยพักชำระ รวมเป็นเงินจำนวนทั้งสิ้น <span style=\"color:red\">1,214,956.98 บาท<br><o:p></o:p></span></span><span lang=\"TH\" style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\">โดยหนังสือฉบับนี้ ข้าพเจ้าในฐานะทนายความผู้รับมอบอำนาจจากทางธนาคารออมสิน\nขอบอกกล่าวทวงถามและแจ้งการบังคับจำนองมายังท่านให้นำเงินจำนวนดังกล่าวไปชำระหนี้และไถ่ถอนจำนองให้แก่ธนาคารออมสิน\nสาขาค่ายธนะรัชต์ ภายในกำหนด </span><span style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\">60<span lang=\"TH\"> วัน นับแต่วันที่ท่านได้รับหนังสือฉบับนี้\nหากท่านมีเหตุขัดข้องประการใดขอให้รีบติดต่อธนาคารออมสิน\nภายในกำหนดระยะเวลาดังกล่าว&nbsp;\nเพราะหากท่านเพิกเฉย ข้าพเจ้ามีความจำเป็นต้องดำเนินคดีกับท่านและผู้จำนองตามกฎหมายต่อไป&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br></span><o:p></o:p></span><span lang=\"TH\" style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ขอแสดงความนับถือ<br></span><span style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\"><o:p>&nbsp;<br></o:p></span><span lang=\"TH\" style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\">ลงชื่อ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ทนายความผู้รับมอบอำนาจ<br></span><span lang=\"TH\" style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(นายดรินทร์ ตติยะลาภะ)<br></span><u style=\"\"><span lang=\"TH\" style=\"font-size: 16pt; font-family: &quot;Angsana New&quot;, serif;\">หมายเหตุ\n</span></u><span lang=\"TH\" style=\"font-size: 14pt; font-family: &quot;Angsana New&quot;, serif;\">โปรดติดต่อธนาคารออมสิน (\nศูนย์ควบคุมและบริหารหนี้เขตประจวบคีรีขันธ์ โทรศัพท์ 032-646535ต่อ 4 )</span></h4><p>\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n</p>', '2019-11-20 18:04:38'),
(20, 9, '', '', '2019-11-29 11:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `document_notis`
--

CREATE TABLE `document_notis` (
  `doc_id` int(11) NOT NULL,
  `doc_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `doc_create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `doc_plaintiff_id` int(11) NOT NULL,
  `doc_plaintiff_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `doc_restructuring` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `doc_credit_type` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `doc_county` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `doc_notis_date` date DEFAULT NULL,
  `lawyer_id` int(11) NOT NULL,
  `lawyer_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `doc_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_user` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `document_notis`
--

INSERT INTO `document_notis` (`doc_id`, `doc_no`, `doc_create_date`, `doc_plaintiff_id`, `doc_plaintiff_name`, `doc_restructuring`, `doc_credit_type`, `doc_county`, `doc_notis_date`, `lawyer_id`, `lawyer_name`, `doc_status`, `create_by_user`) VALUES
(1, '123445', '2019-11-19 10:16:28', 2, 'โจท์ที่ 2', 'test1', 'bank33', 'หัวหินนนน', '2019-11-27', 1, '0', 'รอ', ''),
(6, '91629111', '2019-11-19 14:47:36', 1, 'test โจทก์', 'asdsad', 'sdddd', 'sdsdsaa', '0000-00-00', 0, '', 'รอ', 'admin'),
(9, '11112313211', '2019-11-19 14:56:38', 2, 'โจท์ที่ 2', 'dasdasdasd', 'asdasdsa', 'asdasdasd', '1900-11-30', 0, '', 'รอ', 'admin'),
(11, '', '2019-11-19 15:45:50', 1, 'ttttt', '', '', '', '1900-10-31', 1, 'test tar', 'รอ', 'admin'),
(12, '', '2019-11-19 15:46:08', 2, 'โจท์ที่ 2', '', '', '', '0000-00-00', 1, '', 'รอ', 'admin'),
(14, '', '2019-11-19 15:47:46', 0, '', '', '', '', '2019-11-19', 0, '', 'รอ', 'admin'),
(15, '', '2019-11-19 16:14:43', 0, '', '', '', '', NULL, 0, '', 'รอ', 'admin'),
(16, '', '2019-11-19 16:14:50', 0, '', '', '', '', NULL, 0, '', 'รอ', 'admin');

--
-- Triggers `document_notis`
--
DELIMITER $$
CREATE TRIGGER `OnDelete` AFTER DELETE ON `document_notis` FOR EACH ROW BEGIN

DELETE FROM document_def WHERE document_def.doc_id = old.doc_id;

DELETE FROM document_filedoc WHERE document_filedoc.doc_id = old.doc_id;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `lawyer_id` int(11) NOT NULL,
  `lawyer_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `enable` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`lawyer_id`, `lawyer_name`, `enable`) VALUES
(1, 'test ทนาย', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `permission_id` int(11) NOT NULL,
  `permission_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `enable` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`permission_id`, `permission_name`, `enable`) VALUES
(1, 'admin Permission', 1);

-- --------------------------------------------------------

--
-- Table structure for table `plaintiff`
--

CREATE TABLE `plaintiff` (
  `plaintiff_id` int(11) NOT NULL,
  `plaintiff_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `enable` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `plaintiff`
--

INSERT INTO `plaintiff` (`plaintiff_id`, `plaintiff_name`, `enable`) VALUES
(1, 'test โจทก์', 1),
(2, 'โจท์ที่ 2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id` int(11) NOT NULL,
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `department` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `enable` tinyint(1) NOT NULL,
  `permission` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `code`, `username`, `password`, `image`, `name`, `phone`, `email`, `position`, `department`, `create_date`, `enable`, `permission`) VALUES
(3, '91629162', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '', 'Tanakon Admin', 971326510, 'mang_9162@hotmail.com', 'AdminJaa', 1, '2019-11-18 15:49:37', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `defendant`
--
ALTER TABLE `defendant`
  ADD PRIMARY KEY (`defendant_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `document_def`
--
ALTER TABLE `document_def`
  ADD PRIMARY KEY (`doc_def_id`);

--
-- Indexes for table `document_filedoc`
--
ALTER TABLE `document_filedoc`
  ADD PRIMARY KEY (`doc_file_id`);

--
-- Indexes for table `document_notis`
--
ALTER TABLE `document_notis`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`lawyer_id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `plaintiff`
--
ALTER TABLE `plaintiff`
  ADD PRIMARY KEY (`plaintiff_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `defendant`
--
ALTER TABLE `defendant`
  MODIFY `defendant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `document_def`
--
ALTER TABLE `document_def`
  MODIFY `doc_def_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `document_filedoc`
--
ALTER TABLE `document_filedoc`
  MODIFY `doc_file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `document_notis`
--
ALTER TABLE `document_notis`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `lawyer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plaintiff`
--
ALTER TABLE `plaintiff`
  MODIFY `plaintiff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
