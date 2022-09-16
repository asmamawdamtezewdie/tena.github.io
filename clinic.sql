-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 08:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `adultdata`
--

CREATE TABLE `adultdata` (
  `adid` int(11) NOT NULL,
  `mrn` varchar(100) NOT NULL,
  `date_reg` date NOT NULL,
  `namee` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `gfname` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `date_birth` date NOT NULL,
  `age` varchar(12) NOT NULL,
  `region` varchar(100) NOT NULL,
  `subcity` varchar(100) NOT NULL,
  `katena` varchar(100) NOT NULL,
  `kebele` varchar(100) NOT NULL,
  `house_number` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adultdata`
--

INSERT INTO `adultdata` (`adid`, `mrn`, `date_reg`, `namee`, `fname`, `gfname`, `sex`, `date_birth`, `age`, `region`, `subcity`, `katena`, `kebele`, `house_number`, `phone`, `status`) VALUES
(1, '1000', '2022-06-08', 'kasahun', 'kasahun', 'kehali', 'male', '2022-06-08', ' 36', 'amahra', 'Estgojam', ' mekel', 'arajo', '12223', '0938951000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `bid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `hnum` varchar(100) NOT NULL,
  `ward` varchar(100) NOT NULL,
  `age` int(21) NOT NULL,
  `sex` varchar(23) NOT NULL,
  `type` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `hemag` varchar(100) NOT NULL,
  `hemac` varchar(100) NOT NULL,
  `MCH` varchar(100) NOT NULL,
  `mach` varchar(200) NOT NULL,
  `RBC` varchar(100) NOT NULL,
  `ret` varchar(100) NOT NULL,
  `luk` varchar(100) NOT NULL,
  `neu` varchar(100) NOT NULL,
  `bas` varchar(100) NOT NULL,
  `lym` varchar(100) NOT NULL,
  `mono` varchar(100) NOT NULL,
  `plate` varchar(100) NOT NULL,
  `Bleed` varchar(100) NOT NULL,
  `clot` varchar(100) NOT NULL,
  `coag` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`bid`, `name`, `hnum`, `ward`, `age`, `sex`, `type`, `date`, `hemag`, `hemac`, `MCH`, `mach`, `RBC`, `ret`, `luk`, `neu`, `bas`, `lym`, `mono`, `plate`, `Bleed`, `clot`, `coag`, `status`) VALUES
(1, 'hello', 'gtg', 'dfg', 0, 'male', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(2, 'hello', 'gtg', 'dfg', 0, 'male', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(3, 'kasahun', '', '', 0, 'male', 'Bed Patient', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(4, 'kasahun', 'gtg', 'dfg', 3, 'male', 'Bed Patient', '2022-06-13', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(5, 'asmamaw', 'gtg', 'dfg', 0, 'male', 'Bed Patient', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(6, 'hello', 'gtg', 'dfg', 0, 'male', '', '0000-00-00', 'fgfgh', '', '', '', '', 'assssmmmma', '', '', 'asmmmmmm', 'trertrtytryty', '', '', '', '', 'werwr', 1),
(7, 'hello', 'gtg', 'dfg', 0, 'male', '', '0000-00-00', '', 'ertertert', '', '', '', 'tyrtyyu', 'rtrytry', '', 'ertret', '', 'ghfhg', 'huuhuyuiyu', '', '', '', 1),
(8, 'dfdg', 'xcvc', 'dfgfg', 0, 'male', 'Bed Patient', '0000-00-00', 'asdfdzxc', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(9, 'dfdg', 'xcvc', 'dfgfg', 0, 'male', 'Bed Patient', '0000-00-00', 'elfieir;tioer', 'sdafsdf', 'sdfdfd', '', '', '', '', '', '', '', '', '', '', '', 'asmamamamamamamam', 1),
(10, 'selamenesh', '', '', 0, 'male', 'Bed Patient', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(11, 'selamanesh', '', 'gfdhfgh', 3, 'male', 'Bed Patient', '2022-06-15', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(12, 'hello', 'gtg', 'dfg', 0, 'male', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(13, 'hello', 'gtg', 'dfg', 0, 'male', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(14, 'hello', 'gtg', 'dfg', 0, 'male', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(15, '', '', '', 0, 'male', 'Bed Patient', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(16, '', '', '', 0, 'male', 'Bed Patient', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(17, '', '', '', 0, 'male', 'Bed Patient', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `card_room`
--

CREATE TABLE `card_room` (
  `cardid` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_room`
--

INSERT INTO `card_room` (`cardid`, `username`, `password`) VALUES
(3, 'card', 'card');

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `dateid` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`dateid`, `date`) VALUES
(1, '2022-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `dental_room`
--

CREATE TABLE `dental_room` (
  `dental_roomid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `etatdata`
--

CREATE TABLE `etatdata` (
  `etatid` int(11) NOT NULL,
  `mrn` varchar(100) NOT NULL,
  `date_reg` date NOT NULL,
  `namee` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `gfname` varchar(100) NOT NULL,
  `sex` int(100) NOT NULL,
  `date_birth` date NOT NULL,
  `age` int(100) NOT NULL,
  `region` varchar(200) NOT NULL,
  `subcity` varchar(200) NOT NULL,
  `katena` varchar(200) NOT NULL,
  `kebele` varchar(200) NOT NULL,
  `house_number` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etatdata`
--

INSERT INTO `etatdata` (`etatid`, `mrn`, `date_reg`, `namee`, `fname`, `gfname`, `sex`, `date_birth`, `age`, `region`, `subcity`, `katena`, `kebele`, `house_number`, `phone`, `status`) VALUES
(1, '1000', '2022-06-08', 'kasahun', 'kasahun', 'kehali', 0, '2022-06-08', 36, 'amahra', 'Estgojam', ' mekel', 'arajo', '12223', '0938951000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `mrn` varchar(50) NOT NULL,
  `history` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `mrn`, `history`) VALUES
(1, '         \r\n      kkdsfjjosdfdsfklasdklfkasd', ''),
(2, '         \r\n      dsfjsdjfgkdrsogsd\r\nsadjsajfjsdkf\r', '1004'),
(3, '         \r\n      DSFKSDLFIDS\r\nSDJFISERFSDFIO\r\nSMDR', '1004'),
(4, '1004', '         \r\n      fjkdfsdkfjgirsuto\r\nsdfjisle8rt8e\r\nasdjlieurteio\r\na,sjdri'),
(5, '1200015', '         \r\n      d.kfjrwutwertioepry0e\r\nwejiwruweiteito\r\nweqwieuiriewtuiert\r\nqwreuiweitreiwt\r\najiruweilrsmkldjkdfrie\r\niruewiureor'),
(6, '1200015', '         \r\n      hello asmamaw'),
(7, '1004', '         \r\n      ');

-- --------------------------------------------------------

--
-- Table structure for table `labratory_room`
--

CREATE TABLE `labratory_room` (
  `labratoryid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labratory_room`
--

INSERT INTO `labratory_room` (`labratoryid`, `username`, `password`) VALUES
(2, 'labratory', 'labratory');

-- --------------------------------------------------------

--
-- Table structure for table `opd_room`
--

CREATE TABLE `opd_room` (
  `opd_roomid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opd_room`
--

INSERT INTO `opd_room` (`opd_roomid`, `username`, `password`) VALUES
(2, 'opd', 'opd');

-- --------------------------------------------------------

--
-- Table structure for table `opd_room_parsitology_data`
--

CREATE TABLE `opd_room_parsitology_data` (
  `opdparasitid` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `sex` varchar(78) NOT NULL,
  `mrn` varchar(100) NOT NULL,
  `opdno` varchar(100) NOT NULL,
  `bedno` varchar(100) NOT NULL,
  `datebirth` date NOT NULL,
  `tel` varchar(100) NOT NULL,
  `patient_address` varchar(200) NOT NULL,
  `order_by` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `specimen_type` varchar(100) NOT NULL,
  `sam_colected_by` varchar(100) NOT NULL,
  `lab_serial_no` varchar(100) NOT NULL,
  `test1` varchar(200) NOT NULL,
  `test2` varchar(200) NOT NULL,
  `test3` varchar(200) NOT NULL,
  `test4` varchar(200) NOT NULL,
  `test5` varchar(200) NOT NULL,
  `test6` varchar(200) NOT NULL,
  `test7` varchar(200) NOT NULL,
  `test8` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `doneby` varchar(200) NOT NULL,
  `checkedby` varchar(200) NOT NULL,
  `approvedby` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opd_room_parsitology_data`
--

INSERT INTO `opd_room_parsitology_data` (`opdparasitid`, `pname`, `age`, `sex`, `mrn`, `opdno`, `bedno`, `datebirth`, `tel`, `patient_address`, `order_by`, `date`, `specimen_type`, `sam_colected_by`, `lab_serial_no`, `test1`, `test2`, `test3`, `test4`, `test5`, `test6`, `test7`, `test8`, `comment`, `doneby`, `checkedby`, `approvedby`, `status`) VALUES
(1, 'ertrt54', 0, '', '1000', '', '', '2022-06-15', '', '', '', '0000-00-00', '', '', '', '', '', '', '', 'test5', '', '', '', '', '', '', '', 1),
(2, 'anteneh', 0, '', '', '', '', '2022-06-22', '', '', '', '2022-06-23', '', '', '', '', '', '', '', 'test5', '', '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `opd_room_urindata`
--

CREATE TABLE `opd_room_urindata` (
  `opdid` int(11) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `age` varchar(100) NOT NULL,
  `sex` varchar(56) NOT NULL,
  `MRN` varchar(100) NOT NULL,
  `ward` varchar(100) NOT NULL,
  `bedno` varchar(34) NOT NULL,
  `datebirth` date NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `patientaddress` varchar(200) NOT NULL,
  `orderby` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `specimin` varchar(200) NOT NULL,
  `site` varchar(200) NOT NULL,
  `diagno` varchar(200) NOT NULL,
  `samcollby` varchar(100) NOT NULL,
  `initial` varchar(100) NOT NULL,
  `labserial` varchar(100) NOT NULL,
  `rbc` varchar(100) NOT NULL,
  `color` varchar(78) NOT NULL,
  `wbc` varchar(100) NOT NULL,
  `trans` varchar(100) NOT NULL,
  `wbcast` varchar(100) NOT NULL,
  `foam` varchar(100) NOT NULL,
  `rbccast` varchar(200) NOT NULL,
  `ph` varchar(200) NOT NULL,
  `waxy` varchar(200) NOT NULL,
  `blood` varchar(200) NOT NULL,
  `ephical` varchar(200) NOT NULL,
  `gravity` varchar(200) NOT NULL,
  `parasite` varchar(200) NOT NULL,
  `albu` varchar(200) NOT NULL,
  `bacteria` varchar(200) NOT NULL,
  `gluco` varchar(100) NOT NULL,
  `yeast` varchar(100) NOT NULL,
  `keton` varchar(100) NOT NULL,
  `crystals` varchar(100) NOT NULL,
  `doneby` varchar(100) NOT NULL,
  `appby` varchar(100) NOT NULL,
  `logdate` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opd_room_urindata`
--

INSERT INTO `opd_room_urindata` (`opdid`, `pname`, `age`, `sex`, `MRN`, `ward`, `bedno`, `datebirth`, `mobile`, `patientaddress`, `orderby`, `date`, `specimin`, `site`, `diagno`, `samcollby`, `initial`, `labserial`, `rbc`, `color`, `wbc`, `trans`, `wbcast`, `foam`, `rbccast`, `ph`, `waxy`, `blood`, `ephical`, `gravity`, `parasite`, `albu`, `bacteria`, `gluco`, `yeast`, `keton`, `crystals`, `doneby`, `appby`, `logdate`, `status`) VALUES
(1, 'ertrt54', '45', 'male', '', '', '', '2022-06-22', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 1),
(2, 'wehuwhr', '12', 'male', 'jdfdffdf', '', '', '0000-00-00', '6', 'fgf', '', '2022-06-15', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 1),
(3, 'wehuwhr', '12', '', 'jdfdffdf', '', '', '0000-00-00', '6', 'fgf', '', '2022-06-15', '', '', '', '', '', '', '', 'dfgdfgfd', 'sdfsdf', 'sdfsdf', '', '', '', 'asdsad', 'sdfsdaf', '', '', '', '', '', '', '', '', '', '', '', '', '2022-06-21', 1),
(4, 'wendimu', '', 'male', '', '', '4', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 1),
(5, 'bekaser', '', 'male', '', '', '8', '2017-06-11', '', '', '', '2016-06-11', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 1),
(6, 'hello asmamaw damte', '', 'male', '', '', '-1', '0000-00-00', '', '', '', '2022-06-23', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 1),
(7, 'fkgokporeot', '-7', 'male', 'rtrywqe', '', '-6', '0000-00-00', '16', 'rtrtytr', '', '2022-06-08', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 1),
(8, 'ertrt54', '45', '', '', '', '', '2022-06-22', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 1),
(9, '', '', 'male', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 1),
(10, 'ertrt54', '45', '', '', '', '', '2022-06-22', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patientdata`
--

CREATE TABLE `patientdata` (
  `cardid` int(11) NOT NULL,
  `mrn` varchar(100) NOT NULL,
  `date_reg` date NOT NULL,
  `name` varchar(10) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `gfname` varchar(200) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `date_birth` date NOT NULL,
  `age` varchar(34) NOT NULL,
  `region` varchar(200) NOT NULL,
  `subcity` varchar(200) NOT NULL,
  `katena` varchar(200) NOT NULL,
  `kebele` varchar(200) NOT NULL,
  `house_number` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientdata`
--

INSERT INTO `patientdata` (`cardid`, `mrn`, `date_reg`, `name`, `fname`, `gfname`, `sex`, `date_birth`, `age`, `region`, `subcity`, `katena`, `kebele`, `house_number`, `phone`, `status`) VALUES
(12, '1004', '2022-06-14', ' nati', 'ybeltal', 'kehali', 'male', '2022-06-22', ' 13', 'amahra', 'Estgojam', ' mekel', 'arajo', '12223', '0933556860', 1),
(13, '1200015', '2022-06-22', ' asmamaw', 'damte', 'zewdie', 'male', '2022-06-23', ' 23', 'amhara', 'motta', ' sedie', 'amba', '87995', '0933556860', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pedatricopddata`
--

CREATE TABLE `pedatricopddata` (
  `pedid` int(11) NOT NULL,
  `patientname` varchar(100) NOT NULL,
  `age` int(32) NOT NULL,
  `ward` varchar(100) NOT NULL,
  `history` varchar(100) NOT NULL,
  `radiology` varchar(100) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `serialno` varchar(100) NOT NULL,
  `prev` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pedatricopddatault`
--

CREATE TABLE `pedatricopddatault` (
  `pedid` int(11) NOT NULL,
  `dat` date NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `medication` varchar(100) NOT NULL,
  `stren` varchar(100) NOT NULL,
  `dossage` varchar(100) NOT NULL,
  `history` varchar(100) NOT NULL,
  `scan` varchar(21) NOT NULL,
  `read` varchar(34) NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pedatric_opd_room`
--

CREATE TABLE `pedatric_opd_room` (
  `ped_roomid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pedatric_opd_room`
--

INSERT INTO `pedatric_opd_room` (`ped_roomid`, `username`, `password`) VALUES
(2, 'pedatric', 'pedatric');

-- --------------------------------------------------------

--
-- Table structure for table `triageroomarrange`
--

CREATE TABLE `triageroomarrange` (
  `problemid` int(11) DEFAULT NULL,
  `problem` varchar(250) NOT NULL,
  `room` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `triageroomarrange`
--

INSERT INTO `triageroomarrange` (`problemid`, `problem`, `room`, `status`) VALUES
(NULL, '', '', 0),
(NULL, 'dfjkjdskfjd', '4', 0),
(NULL, '', '4', 0),
(NULL, '', '', 0),
(NULL, 'dfgdgdfg', 'ghfgjfg', 0),
(NULL, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `triage_room`
--

CREATE TABLE `triage_room` (
  `triageid` int(11) NOT NULL,
  `username` varchar(34) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `triage_room`
--

INSERT INTO `triage_room` (`triageid`, `username`, `password`) VALUES
(2, 'triage', 'triage');

-- --------------------------------------------------------

--
-- Table structure for table `ultrasounddata`
--

CREATE TABLE `ultrasounddata` (
  `ultid` int(11) NOT NULL,
  `dat` date NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `weightt` varchar(100) NOT NULL,
  `age` int(23) NOT NULL,
  `typee` varchar(100) NOT NULL,
  `medication` varchar(100) NOT NULL,
  `stren` varchar(100) NOT NULL,
  `dossage` varchar(100) NOT NULL,
  `history` varchar(200) NOT NULL,
  `scan` varchar(56) NOT NULL,
  `readd` varchar(45) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ultrasounddata`
--

INSERT INTO `ultrasounddata` (`ultid`, `dat`, `fname`, `lname`, `weightt`, `age`, `typee`, `medication`, `stren`, `dossage`, `history`, `scan`, `readd`, `status`) VALUES
(1, '2022-06-23', 'asmamaw', '', '', 0, 'Abdominal', '', '', '', '			\r\n		', 'YES', 'YES', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ultrasound_room`
--

CREATE TABLE `ultrasound_room` (
  `ultrasound_roomid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ultrasound_room`
--

INSERT INTO `ultrasound_room` (`ultrasound_roomid`, `username`, `password`) VALUES
(3, 'ultrasound', 'ultrasound');

-- --------------------------------------------------------

--
-- Table structure for table `xraydata`
--

CREATE TABLE `xraydata` (
  `xrayid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `patientname` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `ward` varchar(100) NOT NULL,
  `history` varchar(100) NOT NULL,
  `radiology` varchar(100) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `serialno` varchar(100) NOT NULL,
  `prev` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xraydata`
--

INSERT INTO `xraydata` (`xrayid`, `status`, `patientname`, `age`, `ward`, `history`, `radiology`, `doctor`, `serialno`, `prev`) VALUES
(1, 1, '', 0, '', '', '', '', '', ''),
(2, 1, 'asmamaw', 45, '', '', '			\r\n		', '', '', '			\r\n		'),
(3, 1, 'ewjfiejr', 0, 'ermket', 'werjewkjr', '			\r\n		', '', '', '			\r\n		'),
(4, 1, 'hello', 3434, '', '', '			\r\n		', '', '', '			\r\n		'),
(5, 1, '', 0, '', '', '', '', '', '			\r\n		'),
(6, 1, '', 0, '', '', '', '', '', '			\r\n		');

-- --------------------------------------------------------

--
-- Table structure for table `xray_room`
--

CREATE TABLE `xray_room` (
  `xray_roomid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xray_room`
--

INSERT INTO `xray_room` (`xray_roomid`, `username`, `password`) VALUES
(2, 'xray', 'xray');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adultdata`
--
ALTER TABLE `adultdata`
  ADD PRIMARY KEY (`adid`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `card_room`
--
ALTER TABLE `card_room`
  ADD PRIMARY KEY (`cardid`);

--
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`dateid`);

--
-- Indexes for table `dental_room`
--
ALTER TABLE `dental_room`
  ADD PRIMARY KEY (`dental_roomid`);

--
-- Indexes for table `etatdata`
--
ALTER TABLE `etatdata`
  ADD PRIMARY KEY (`etatid`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labratory_room`
--
ALTER TABLE `labratory_room`
  ADD PRIMARY KEY (`labratoryid`);

--
-- Indexes for table `opd_room`
--
ALTER TABLE `opd_room`
  ADD PRIMARY KEY (`opd_roomid`);

--
-- Indexes for table `opd_room_parsitology_data`
--
ALTER TABLE `opd_room_parsitology_data`
  ADD PRIMARY KEY (`opdparasitid`);

--
-- Indexes for table `opd_room_urindata`
--
ALTER TABLE `opd_room_urindata`
  ADD PRIMARY KEY (`opdid`);

--
-- Indexes for table `patientdata`
--
ALTER TABLE `patientdata`
  ADD PRIMARY KEY (`cardid`);

--
-- Indexes for table `pedatricopddata`
--
ALTER TABLE `pedatricopddata`
  ADD PRIMARY KEY (`pedid`);

--
-- Indexes for table `pedatricopddatault`
--
ALTER TABLE `pedatricopddatault`
  ADD PRIMARY KEY (`pedid`);

--
-- Indexes for table `pedatric_opd_room`
--
ALTER TABLE `pedatric_opd_room`
  ADD PRIMARY KEY (`ped_roomid`);

--
-- Indexes for table `triage_room`
--
ALTER TABLE `triage_room`
  ADD PRIMARY KEY (`triageid`);

--
-- Indexes for table `ultrasounddata`
--
ALTER TABLE `ultrasounddata`
  ADD PRIMARY KEY (`ultid`);

--
-- Indexes for table `ultrasound_room`
--
ALTER TABLE `ultrasound_room`
  ADD PRIMARY KEY (`ultrasound_roomid`);

--
-- Indexes for table `xraydata`
--
ALTER TABLE `xraydata`
  ADD PRIMARY KEY (`xrayid`);

--
-- Indexes for table `xray_room`
--
ALTER TABLE `xray_room`
  ADD PRIMARY KEY (`xray_roomid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adultdata`
--
ALTER TABLE `adultdata`
  MODIFY `adid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `card_room`
--
ALTER TABLE `card_room`
  MODIFY `cardid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `date`
--
ALTER TABLE `date`
  MODIFY `dateid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dental_room`
--
ALTER TABLE `dental_room`
  MODIFY `dental_roomid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `etatdata`
--
ALTER TABLE `etatdata`
  MODIFY `etatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `labratory_room`
--
ALTER TABLE `labratory_room`
  MODIFY `labratoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `opd_room`
--
ALTER TABLE `opd_room`
  MODIFY `opd_roomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `opd_room_parsitology_data`
--
ALTER TABLE `opd_room_parsitology_data`
  MODIFY `opdparasitid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `opd_room_urindata`
--
ALTER TABLE `opd_room_urindata`
  MODIFY `opdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patientdata`
--
ALTER TABLE `patientdata`
  MODIFY `cardid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pedatricopddata`
--
ALTER TABLE `pedatricopddata`
  MODIFY `pedid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedatricopddatault`
--
ALTER TABLE `pedatricopddatault`
  MODIFY `pedid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedatric_opd_room`
--
ALTER TABLE `pedatric_opd_room`
  MODIFY `ped_roomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `triage_room`
--
ALTER TABLE `triage_room`
  MODIFY `triageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ultrasounddata`
--
ALTER TABLE `ultrasounddata`
  MODIFY `ultid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ultrasound_room`
--
ALTER TABLE `ultrasound_room`
  MODIFY `ultrasound_roomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `xraydata`
--
ALTER TABLE `xraydata`
  MODIFY `xrayid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `xray_room`
--
ALTER TABLE `xray_room`
  MODIFY `xray_roomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
