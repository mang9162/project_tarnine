-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 11 พ.ค. 2020 เมื่อ 04:02 PM
-- เวอร์ชันของเซิร์ฟเวอร์: 10.4.12-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techprogro_t9test`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `company`
--

CREATE TABLE `company` (
  `no` int(11) NOT NULL,
  `img` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `taxid` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `company`
--

INSERT INTO `company` (`no`, `img`, `name`, `address`, `phone`, `fax`, `taxid`) VALUES
(1, '12795380_443460995864771_2927513966717694732_n.png', 'บริษัท ธุรกิจเนติอินเตอร์ลอว์ จำกัด', '16/9 ถ.เพชรเกษม ต.หัวหิน อ. หัวหิน จ.ประจวบคีรีขันธ์ 77110', '089-744-1721', '032-511-305', '0-7755-59000-57-8');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `defendant`
--

CREATE TABLE `defendant` (
  `defendant_id` int(11) NOT NULL,
  `defendant_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `defendant_no` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `enable` tinyint(1) NOT NULL,
  `race` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `age` int(3) NOT NULL,
  `current_unit` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `current_bloc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `current_road` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `current_alley` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `current_zone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `current_area` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `current_county` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `current_post` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `current_phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `current_number` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `current_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `work_unit` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `work_bloc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `work_road` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `work_alley` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `work_zone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `work_area` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `work_county` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `work_post` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `work_phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `work_number` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `work_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `defendant`
--

INSERT INTO `defendant` (`defendant_id`, `defendant_name`, `defendant_no`, `enable`, `race`, `nationality`, `job`, `birthday`, `age`, `current_unit`, `current_bloc`, `current_road`, `current_alley`, `current_zone`, `current_area`, `current_county`, `current_post`, `current_phone`, `current_number`, `current_email`, `work_unit`, `work_bloc`, `work_road`, `work_alley`, `work_zone`, `work_area`, `work_county`, `work_post`, `work_phone`, `work_number`, `work_email`) VALUES
(1, 'นางสาวรัชดา โอ้อากาศ', '3760100070165', 1, '', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'นายนันทพงศ์ สีตลาภินันท์', '3120300001383', 1, '', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'นางสาวอนุธิดา สิมมา', '3770500227461', 1, '', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'นางสาวกมลวิภา พุมมา ', '3860300270540', 1, '', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'นางถาวอน นพคุณ', '2770500016313', 1, '', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'นายสุชาติ วงษ์สวัสดิ์', '3770300338722', 1, '', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'นายจรัญ ถึงเสียบญวน', '3770500225654', 1, '', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'นายสงกรานต์ พรหมด้วง', '3770300442899', 1, '', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '', '', 1, '', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `enable` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `enable`) VALUES
(1, 'IT', 1);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `document_attc`
--

CREATE TABLE `document_attc` (
  `attc_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `attc_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อแนบ',
  `attc_file` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'ที่อยู่ไฟล์',
  `attc_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ประเภทแนบ แนบไฟล์/คำพิพาก',
  `attc_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `document_attc`
--

INSERT INTO `document_attc` (`attc_id`, `doc_id`, `attc_name`, `attc_file`, `attc_type`, `attc_date`) VALUES
(20, 26, '', '20200511025804pmVPRT_CourseOutline.pdf', '1', '2020-05-11 14:58:04');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `document_def`
--

CREATE TABLE `document_def` (
  `doc_def_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `defendant_id` int(11) NOT NULL,
  `doc_def_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `doc_def_no` varchar(13) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `document_def`
--

INSERT INTO `document_def` (`doc_def_id`, `doc_id`, `defendant_id`, `doc_def_name`, `doc_def_no`) VALUES
(23, 26, 1, 'นางสาวรัชดา โอ้อากาศ', '3760100070165'),
(24, 26, 2, 'นายนันทพงศ์ สีตลาภินันท์', '3120300001383'),
(25, 26, 3, 'นางสาวอนุธิดา สิมมา', '3770500227461'),
(26, 26, 4, 'นางสาวกมลวิภา พุมมา ', '3860300270540');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `document_filedoc`
--

CREATE TABLE `document_filedoc` (
  `doc_file_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `doc_file_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `doc_file_text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `doc_file_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `document_filedoc`
--

INSERT INTO `document_filedoc` (`doc_file_id`, `doc_id`, `doc_file_name`, `doc_file_text`, `doc_file_date`) VALUES
(29, 26, 'บอกกล่าวให้ชำระหนี้และบอกกล่าวบังคับจำนอง', '<div style=\"text-align: center; \"><font face=\"Arial Black\"><span style=\"font-family: Arial;\">วันที่ พฤศจิกายน พ.ศ. 2562</span></font></div><div><font face=\"Arial Black\"><span style=\"font-family: Arial;\">เรื่อง&nbsp; &nbsp; &nbsp;บอกกล่าวให้ชำระหนี้และบอกกล่าวบังคับจำนอง&nbsp;</span></font></div><div><span style=\"font-family: Arial; text-align: right;\">เรียน&nbsp; &nbsp; &nbsp;นายธีระชัย ใจเย็น&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ในฐานะ ผู้กู้และผู้ค้ำประกัน</span></div><div><font face=\"Arial Black\"><span style=\"font-family: Arial;\">อ้างถึง</span><span style=\"white-space: pre; font-family: Arial;\">	</span><span style=\"font-family: Arial;\">สัญญากู้เงินและสัญญาจำนอง สินเชื่อเพื่อธุรกิจทั่วไป จำนวน 2 ฉบับ</span></font></div><div><font face=\"Arial Black\"><span style=\"white-space: pre; font-family: Arial;\">	</span><span style=\"font-family: Arial;\">ฉบับลงวันที่ 27 พฤศจิกายน 2557&nbsp;</span></font></div><div style=\"\"><font face=\"Arial Black\"><span style=\"font-family: Arial;\">&nbsp; &nbsp; &nbsp; &nbsp; ตามที่ นายธีระชัย ใจเย็น ได้ทำสัญญากู้เงินประเภทสินเชื่อธุรกิจทั่วไป ไปจากธนาคารออมสิสาขากุยบุรี เมื่อวันที่ 27 พฤศจิกายน 2557 เป็นจำนวนเงิน 12,000,000 บาท (สิบสองล้านบาทถ้วน) ผู้กู้ยอมเสียดอกเบี้ยในอัตราดอกเบี้ยร้อยละ MLR+1.00 ต่อปี&nbsp; โดยตกลงจะชำระหนี้ต้นเงินและดอกเบี้ย เป็นงวดรายเดือน ภายในวันที่ 27 ของทุกเดือน โดยชำระในงวดแรกในเดือนธันวาคม 2557 และผู้กู้ตกลงจะชำระหนี้ให้หมดสิ้นภายในวันที่ 27 พฤศจิกายน 2564&nbsp;</span></font></div><div><font face=\"Arial Black\"><span style=\"font-family: Arial;\">และในวันเดียวกัน&nbsp; นายธีระชัย ใจเย็น ได้ทำสัญญาจำนองและจดทะเบียนจำนอง&nbsp; โดยมอบหลักทรัพย์ ไว้เป็นประกัน ดังนี้&nbsp;</span></font></div><div><font face=\"Arial Black\"><span style=\"font-family: Arial;\">1.</span><span style=\"white-space: pre; font-family: Arial;\">	</span><span style=\"font-family: Arial;\">โฉนดที่ดินเลขที่ 30610&nbsp; เลขที่ดิน 24&nbsp; หน้าสำรวจ 18568&nbsp; &nbsp;ตำบลหัวหิน&nbsp;&nbsp;</span></font></div><div><font face=\"Arial Black\"><span style=\"font-family: Arial;\">อำเภอหัวหิน&nbsp; จังหวัดประจวบคีรีขันธ์&nbsp;</span></font></div><div><font face=\"Arial Black\"><span style=\"font-family: Arial;\">จำนองไว้ประกันการชำระหนี้เงินกู้ดังกล่าวของท่านไว้ให้กับทางธนาคารฯตามสัญญาจำนอง ฉบับลงวันที่ วันที่ 27 พฤศจิกายน 2557</span></font></div><div><font face=\"Arial Black\"><span style=\"white-space: pre; font-family: Arial;\">	</span><span style=\"font-family: Arial;\">ขณะนี้ ท่านผู้กู้ได้ผิดนัด มิได้ชำระหนี้ให้กับทางธนาคารตามสัญญา และธนาคารไม่ประสงค์จะให้ผู้กู้ยืมเงินจำนวนดังกล่าวอีกต่อไป&nbsp; &nbsp;คิดภาระหนี้ที่ท่านค้างชำระเพียงวันที่ลงในหนังสือฉบับนี้ มียอดหนี้ค้างชำระกับธนาคารเป็นต้นเงินรวมทั้งดอกเบี้ยและดอกเบี้ยพักชำระ รวมเป็นเงินจำนวนทั้งสิ้น 12,849,261.69&nbsp; บาท&nbsp; &nbsp; &nbsp;&nbsp;</span></font></div><div><font face=\"Arial Black\"><span style=\"font-family: Arial;\">โดยหนังสือฉบับนี้ ข้าพเจ้าในฐานะทนายความผู้รับมอบอำนาจจากทางธนาคารออมสิน ขอบอกกล่าวทวงถามและแจ้งการบังคับจำนองมายังท่านให้นำเงินจำนวนดังกล่าวไปชำระหนี้และไถ่ถอนจำนองให้แก่ธนาคารออมสิน สาขาบ้านแหลม ภายในกำหนด 60 วัน นับแต่วันที่ท่านได้รับหนังสือฉบับนี้ หากท่านมีเหตุขัดข้องประการใดขอให้รีบติดต่อธนาคารออมสิน ภายในกำหนดระยะเวลาดังกล่าว&nbsp; เพราะหากท่านเพิกเฉย ข้าพเจ้ามีความจำเป็นต้องดำเนินคดีกับท่านและผู้จำนองตามกฎหมายต่อไป&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></font></div><div><font face=\"Arial Black\"><span style=\"font-family: Arial;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ขอแสดงความนับถือ</span></font></div><div><font face=\"Arial Black\"><span style=\"font-family: Arial;\">&nbsp;</span></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face=\"Arial Black\"><span style=\"font-family: Arial;\"> </span></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face=\"Arial Black\"><span style=\"font-family: Arial;\">ลงชื่อ</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style=\"font-family: Arial;\">ทนายความผู้รับมอบอำนาจ</span></font></div><div><font face=\"Arial Black\"><span style=\"white-space: pre; font-family: Arial;\">		</span>&nbsp; &nbsp;&nbsp;</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face=\"Arial Black\"><span style=\"font-family: Arial;\">(นายดรินทร์ ตติยะลาภะ)</span></font></div><div><font face=\"Arial Black\"><span style=\"font-family: Arial;\">หมายเหตุ โปรดติดต่อธนาคารออมสิน ( ศูนย์ควบคุมและบริหารหนี้เขตประจวบคีรีขันธ์ โทรศัพท์ 032-646535ต่อ 4 )</span></font></div><div><br></div>', '2020-04-28 10:25:29');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `document_findasset`
--

CREATE TABLE `document_findasset` (
  `doc_id` int(11) NOT NULL,
  `doc_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `doc_create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `doc_plaintiff_id` int(11) NOT NULL,
  `doc_plaintiff_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `lawyer_id` int(11) NOT NULL,
  `lawyer_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `doc_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `document_investigate`
--

CREATE TABLE `document_investigate` (
  `doc_id` int(11) NOT NULL,
  `doc_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `document_notis`
--

CREATE TABLE `document_notis` (
  `doc_id` int(11) NOT NULL,
  `doc_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `doc_create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `doc_plaintiff_id` int(11) NOT NULL,
  `doc_plaintiff_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `doc_restructuring` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `doc_credit_type` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `doc_county` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `doc_notis_date` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `doc_recive_notis_date` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `doc_sue_date` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lawyer_id` int(11) NOT NULL,
  `lawyer_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `doc_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `create_by_user` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `doc_cleardate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `doc_duedate` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `doc_duedate2` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `doc_duedate3` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `doc_blackid` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `doc_redid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `doc_capital` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `document_notis`
--

INSERT INTO `document_notis` (`doc_id`, `doc_no`, `doc_create_date`, `doc_plaintiff_id`, `doc_plaintiff_name`, `doc_restructuring`, `doc_credit_type`, `doc_county`, `doc_notis_date`, `doc_recive_notis_date`, `doc_sue_date`, `lawyer_id`, `lawyer_name`, `doc_status`, `create_by_user`, `doc_cleardate`, `doc_duedate`, `doc_duedate2`, `doc_duedate3`, `doc_blackid`, `doc_redid`, `doc_capital`) VALUES
(26, '200427165801', '2020-04-27 16:57:12', 1, 'ธนาคารออมสิน สาขาปราณบุรี', '', '', 'หัวหิน', '', NULL, NULL, 1, 'นายดรินทร์ ตติยะลาภะ', 'รอ', 'admin', '', NULL, NULL, NULL, 'ผบ1150/2563', '', '107689.17'),
(35, '', '2020-05-11 14:28:13', 0, '', '', '', '', NULL, NULL, NULL, 0, '', 'รอ', 'admin', '', NULL, NULL, NULL, NULL, '', '0.00');

--
-- ทริกเกอร์ `document_notis`
--
DELIMITER $$
CREATE TRIGGER `OnDelete` AFTER DELETE ON `document_notis` FOR EACH ROW BEGIN

DELETE FROM document_def WHERE document_def.doc_id = old.doc_id;

DELETE FROM document_filedoc WHERE document_filedoc.doc_id = old.doc_id;

DELETE FROM document_report WHERE document_report.doc_id = old.doc_id;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `document_report`
--

CREATE TABLE `document_report` (
  `doc_report_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `doc_report_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `doc_report_text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `report_id` int(11) NOT NULL,
  `doc_report_date` datetime NOT NULL DEFAULT current_timestamp(),
  `doc_report_lastedit` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `document_report`
--

INSERT INTO `document_report` (`doc_report_id`, `doc_id`, `doc_report_name`, `doc_report_text`, `report_id`, `doc_report_date`, `doc_report_lastedit`) VALUES
(14, 26, '', '{\"report\":[{\"text_id\":\"doc_report_id\",\"value\":\"14\"},{\"text_id\":\"text1\",\"value\":\"ผบ1150\"},{\"text_id\":\"text2\",\"value\":\"63\"},{\"text_id\":\"text3\",\"value\":\"\"},{\"text_id\":\"text4\",\"value\":\"\"},{\"text_id\":\"text5\",\"value\":\"หัวหิน\"},{\"text_id\":\"text6\",\"value\":\"\"},{\"text_id\":\"text8\",\"value\":\"\"},{\"text_id\":\"text9\",\"value\":\"\"},{\"text_id\":\"text10\",\"value\":\"\"},{\"text_id\":\"text13\",\"value\":\"ธนาคารออมสิน สาขาปราณบุรี\"},{\"text_id\":\"text14\",\"value\":\"นายดรินทร์ ตติยะลาภะ\"},{\"text_id\":\"text16\",\"value\":\"นายดรินทร์ ตติยะลาภะ\"},{\"text_id\":\"text17\",\"value\":\"ธนาคารออมสิน สาขาปราณบุรี\"},{\"text_id\":\"text18\",\"value\":\"นายดรินทร์ ตติยะลาภะ\"},{\"text_id\":\"text19\",\"value\":\"  1   1  0  0  4   0  0   8  7  9   1  0   4\"},{\"text_id\":\"text20\",\"value\":\"2479/2546\"},{\"text_id\":\"text21\",\"value\":\"ใบอนุญาติ\"},{\"text_id\":\"text22\",\"value\":\"29/66\"},{\"text_id\":\"text23\",\"value\":\"หมู่ 11\"},{\"text_id\":\"text24\",\"value\":\"บางกระดี่\"},{\"text_id\":\"text25\",\"value\":\"35/1\"},{\"text_id\":\"text26\",\"value\":\"แสมดำ\"},{\"text_id\":\"text27\",\"value\":\"บางขุนเทียน\"},{\"text_id\":\"text28\",\"value\":\"กรุงเทพ\"},{\"text_id\":\"text29\",\"value\":\"10150\"},{\"text_id\":\"text30\",\"value\":\"097-1326510\"},{\"text_id\":\"text31\",\"value\":\"012-325456\"},{\"text_id\":\"text32\",\"value\":\"mang9162@gmail.com\"},{\"text_id\":\"text33\",\"value\":\"499\"},{\"text_id\":\"text34\",\"value\":\"12223\"},{\"text_id\":\"text35\",\"value\":\"1\"},{\"text_id\":\"text36\",\"value\":\"231313\"},{\"text_id\":\"text37\",\"value\":\"11311\"},{\"text_id\":\"text38\",\"value\":\"21121\"},{\"text_id\":\"text39\",\"value\":\"2121212\"},{\"text_id\":\"text40\",\"value\":\"21221\"},{\"text_id\":\"text41\",\"value\":\"21212\"},{\"text_id\":\"text42\",\"value\":\"2121\"},{\"text_id\":\"text43\",\"value\":\"mmmm@hotmail.com\"},{\"text_id\":\"text44\",\"value\":\"ธนาคารออมสิน สาขาปราณบุรี\"},{\"text_id\":\"text45\",\"value\":\"นายดรินทร์ ตติยะลาภะ\"},{\"text_id\":\"text47\",\"value\":\"\"},{\"text_id\":\"unit_1\",\"value\":\"\"},{\"text_id\":\"bloc_1\",\"value\":\"\"},{\"text_id\":\"zone_1\",\"value\":\"\"},{\"text_id\":\"area_1\",\"value\":\"\"},{\"text_id\":\"county_1\",\"value\":\"\"},{\"text_id\":\"unit_2\",\"value\":\"\"},{\"text_id\":\"bloc_2\",\"value\":\"\"},{\"text_id\":\"zone_2\",\"value\":\"\"},{\"text_id\":\"area_2\",\"value\":\"\"},{\"text_id\":\"county_2\",\"value\":\"\"},{\"text_id\":\"unit_3\",\"value\":\"\"},{\"text_id\":\"bloc_3\",\"value\":\"\"},{\"text_id\":\"zone_3\",\"value\":\"\"},{\"text_id\":\"area_3\",\"value\":\"\"},{\"text_id\":\"county_3\",\"value\":\"\"},{\"text_id\":\"unit_4\",\"value\":\"\"},{\"text_id\":\"bloc_4\",\"value\":\"\"},{\"text_id\":\"zone_4\",\"value\":\"\"},{\"text_id\":\"area_4\",\"value\":\"\"},{\"text_id\":\"county_4\",\"value\":\"\"},{\"text_id\":\"text11\",\"value\":\"ธนาคารออมสิน สาขาปราณบุรี\"},{\"text_id\":\"text12\",\"value\":\"นางสาวรัชดา โอ้อากาศ ที่1 กับพวกรวม 4 คน\"},{\"text_id\":\"text15\",\"value\":\"                                                                              \"},{\"text_id\":\"text46\",\"value\":\"\"}],\"doc_report_id\":14}', 1, '2020-04-28 14:56:23', NULL),
(15, 26, '', '', 2, '2020-04-28 14:56:23', NULL),
(16, 26, '', '', 3, '2020-04-28 14:56:23', NULL),
(17, 26, '', '', 4, '2020-04-28 14:56:23', NULL),
(18, 26, '', '', 5, '2020-04-28 14:56:23', NULL),
(19, 26, '', '', 6, '2020-04-28 14:56:23', NULL),
(20, 26, '', '', 7, '2020-04-28 14:56:23', NULL),
(21, 26, '', '', 8, '2020-04-28 14:56:23', NULL);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `createat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lawyer`
--

CREATE TABLE `lawyer` (
  `lawyer_id` int(11) NOT NULL,
  `lawyer_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `lawyer_tex_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `race` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `age` int(3) NOT NULL,
  `submit_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `submit_info` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `current_unit` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `current_bloc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `current_road` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `current_alley` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `current_zone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `current_area` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `current_county` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `current_post` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `current_phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `current_number` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `current_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `work_unit` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `work_bloc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `work_road` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `work_alley` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `work_zone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `work_area` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `work_county` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `work_post` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `work_phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `work_number` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `work_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `enable` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `lawyer`
--

INSERT INTO `lawyer` (`lawyer_id`, `lawyer_name`, `lawyer_tex_no`, `race`, `nationality`, `job`, `birthday`, `age`, `submit_no`, `submit_info`, `current_unit`, `current_bloc`, `current_road`, `current_alley`, `current_zone`, `current_area`, `current_county`, `current_post`, `current_phone`, `current_number`, `current_email`, `work_unit`, `work_bloc`, `work_road`, `work_alley`, `work_zone`, `work_area`, `work_county`, `work_post`, `work_phone`, `work_number`, `work_email`, `enable`) VALUES
(1, 'นายดรินทร์ ตติยะลาภะ', '1100400879104', 'จีน', 'ไทย', 'ทนายความ', '1997-02-10', 21, '2479/2546', 'ใบอนุญาติ', '29/66', 'หมู่ 11', 'บางกระดี่', '35/1', 'แสมดำ', 'บางขุนเทียน', 'กรุงเทพ', '10150', '097-1326510', '012-325456', 'mang9162@gmail.com', '499', '12223', '1', '231313', '11311', '21121', '2121212', '21221', '21212', '2121', 'mmmm@hotmail.com', 1),
(2, 'นายธนพงศ์ สุขขะปัญญา', '', '', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `permission`
--

CREATE TABLE `permission` (
  `permission_id` int(11) NOT NULL,
  `permission_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `enable` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `permission`
--

INSERT INTO `permission` (`permission_id`, `permission_name`, `enable`) VALUES
(0, 'Super Admin', 0),
(1, 'Admin', 1),
(2, 'User', 1);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `plaintiff`
--

CREATE TABLE `plaintiff` (
  `plaintiff_id` int(11) NOT NULL,
  `plaintiff_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `plaintiff_tex_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `enable` tinyint(1) NOT NULL,
  `race` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `age` int(3) NOT NULL,
  `current_unit` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `current_bloc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `current_road` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `current_alley` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `current_zone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `current_area` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `current_county` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `current_post` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `current_phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `current_number` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `current_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `work_unit` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `work_bloc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `work_road` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `work_alley` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `work_zone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `work_area` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `work_county` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `work_post` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `work_phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `work_number` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `work_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `plaintiff`
--

INSERT INTO `plaintiff` (`plaintiff_id`, `plaintiff_name`, `plaintiff_tex_no`, `enable`, `race`, `nationality`, `job`, `birthday`, `age`, `current_unit`, `current_bloc`, `current_road`, `current_alley`, `current_zone`, `current_area`, `current_county`, `current_post`, `current_phone`, `current_number`, `current_email`, `work_unit`, `work_bloc`, `work_road`, `work_alley`, `work_zone`, `work_area`, `work_county`, `work_post`, `work_phone`, `work_number`, `work_email`) VALUES
(1, 'ธนาคารออมสิน สาขาปราณบุรี', '', 1, 'ไทย', 'ไทย', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `report_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `report_info` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `report_file` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `permission` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `report`
--

INSERT INTO `report` (`report_id`, `report_name`, `report_info`, `report_file`, `permission`) VALUES
(1, 'ใบแต่งทนาย', 'ใบแต่งตั้งทนาย', 'lawyer_report.php', NULL),
(2, 'คำแถลงขอส่งหมายและปิดหมาย', 'คำแถลงขอส่งหมายและปิดหมาย', 'statement_request_report.php', NULL),
(3, 'คำขอท้ายฟ้อง', 'คำขอท้ายฟ้อง', 'request_consumer_report.php', NULL),
(4, 'คำฟ้อง', 'คำฟ้อง', 'indictment_report.php', NULL),
(5, 'บัญชีพยาน', 'บัญชีพยาน', 'acc_witness_report.php', NULL),
(6, 'คำแถลงขอส่งสำเนาเอกสาร', 'คำแถลงขอส่งสำเนาเอกสาร', 'request_copy_report.php', NULL),
(7, 'คำร้องกำหนดวันนัดพิจารณาเกินกว่า 30 วัน', 'คำร้องกำหนดวันนัดพิจารณาเกินกว่า 30 วัน', 'request_last30days_repost.php', NULL),
(8, 'หมายเรียกจำเลย', 'หมายเรียกจำเลย', 'call_defendant_report.php', NULL);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `user_account`
--

CREATE TABLE `user_account` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '827ccb0eea8a706c4c34a16891f84e7b',
  `createat` datetime NOT NULL DEFAULT current_timestamp(),
  `enable` tinyint(1) NOT NULL DEFAULT 1,
  `permission` int(11) NOT NULL DEFAULT 2,
  `ref_lawyerid` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `user_account`
--

INSERT INTO `user_account` (`id`, `username`, `password`, `createat`, `enable`, `permission`, `ref_lawyerid`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '2019-11-18 15:49:37', 1, 0, 0),
(14, 'root', '827ccb0eea8a706c4c34a16891f84e7b', '2020-05-08 11:23:23', 1, 2, 0);

--
-- ทริกเกอร์ `user_account`
--
DELIMITER $$
CREATE TRIGGER `add_permission` AFTER INSERT ON `user_account` FOR EACH ROW INSERT INTO `user_permission` (`userid`) VALUES (new.`id`)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `del_permission` AFTER DELETE ON `user_account` FOR EACH ROW DELETE FROM `user_permission` WHERE `user_permission`.`userid` = old.`id`
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `user_permission`
--

CREATE TABLE `user_permission` (
  `userid` int(11) NOT NULL,
  `menu1` tinyint(1) NOT NULL DEFAULT 1,
  `menu2` tinyint(1) NOT NULL DEFAULT 1,
  `menu3` tinyint(1) NOT NULL DEFAULT 1,
  `menu4` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `user_permission`
--

INSERT INTO `user_permission` (`userid`, `menu1`, `menu2`, `menu3`, `menu4`) VALUES
(1, 1, 1, 1, 1),
(14, 1, 1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`no`);

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
-- Indexes for table `document_attc`
--
ALTER TABLE `document_attc`
  ADD PRIMARY KEY (`attc_id`);

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
-- Indexes for table `document_findasset`
--
ALTER TABLE `document_findasset`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `document_notis`
--
ALTER TABLE `document_notis`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `document_report`
--
ALTER TABLE `document_report`
  ADD PRIMARY KEY (`doc_report_id`);

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
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `defendant`
--
ALTER TABLE `defendant`
  MODIFY `defendant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `document_attc`
--
ALTER TABLE `document_attc`
  MODIFY `attc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `document_def`
--
ALTER TABLE `document_def`
  MODIFY `doc_def_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `document_filedoc`
--
ALTER TABLE `document_filedoc`
  MODIFY `doc_file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `document_findasset`
--
ALTER TABLE `document_findasset`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `document_notis`
--
ALTER TABLE `document_notis`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `document_report`
--
ALTER TABLE `document_report`
  MODIFY `doc_report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `lawyer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `plaintiff`
--
ALTER TABLE `plaintiff`
  MODIFY `plaintiff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
