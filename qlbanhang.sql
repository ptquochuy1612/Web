-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 27, 2018 at 01:27 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlbanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdathang`
--

DROP TABLE IF EXISTS `chitietdathang`;
CREATE TABLE IF NOT EXISTS `chitietdathang` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DatHangID` int(11) DEFAULT NULL,
  `MaSP` int(11) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `Gia` decimal(10,0) DEFAULT NULL,
  `TinhTrang` int(11) DEFAULT NULL,
  `NgayDuKienGiaoHang` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

DROP TABLE IF EXISTS `danhmuc`;
CREATE TABLE IF NOT EXISTS `danhmuc` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Ten` varchar(51) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `dathang`
--

DROP TABLE IF EXISTS `dathang`;
CREATE TABLE IF NOT EXISTS `dathang` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) DEFAULT NULL,
  `TongGia` decimal(10,0) DEFAULT NULL,
  `LoaiGiaoHang` int(11) DEFAULT NULL,
  `TinhTrang` int(11) DEFAULT NULL,
  `NgayTao` datetime DEFAULT NULL,
  `NgayDuKienGiaoHang` datetime DEFAULT NULL,
  `DiaChiNhanHangID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `diachinhanhang`
--

DROP TABLE IF EXISTS `diachinhanhang`;
CREATE TABLE IF NOT EXISTS `diachinhanhang` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NguoiDungID` int(11) DEFAULT NULL,
  `TenNguoiNhan` varchar(51) DEFAULT NULL,
  `SoDienThoai` varchar(11) DEFAULT NULL,
  `DiaChiGiaoHang` varchar(51) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

DROP TABLE IF EXISTS `nguoidung`;
CREATE TABLE IF NOT EXISTS `nguoidung` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `SoDienThoai` varchar(11) DEFAULT NULL,
  `DiaChi` varchar(51) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `HinhAnh` varchar(20) DEFAULT NULL,
  `Quyen` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `nhasanxuat`
--

DROP TABLE IF EXISTS `nhasanxuat`;
CREATE TABLE IF NOT EXISTS `nhasanxuat` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Ten` varchar(51) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MaSP` varchar(10) DEFAULT NULL,
  `TenSP` varchar(51) DEFAULT NULL,
  `LoaiSP` int(11) DEFAULT NULL,
  `NhaSanXuatID` int(11) DEFAULT NULL,
  `XuatXu` varchar(50) DEFAULT NULL,
  `MoTa` varchar(51) DEFAULT NULL,
  `NgayTao` datetime DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `HinhAnh` varchar(20) DEFAULT NULL,
  `Gia` decimal(10,0) DEFAULT NULL,
  `LuotXem` int(11) DEFAULT NULL,
  `TinhTrang` binary(1) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatID`, `XuatXu`, `MoTa`, `NgayTao`, `SoLuong`, `HinhAnh`, `Gia`, `LuotXem`, `TinhTrang`) VALUES
(1, NULL, 'a', 1, 1, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(2, NULL, 'b', 1, 1, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(3, NULL, 'c', 1, 1, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(4, NULL, 'd', 1, 1, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(5, NULL, 'e', 1, 1, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(6, NULL, 'f', 2, 2, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(7, NULL, 'g', 2, 2, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(8, NULL, 'h', 2, 2, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(9, NULL, 'i', 2, 2, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(10, NULL, 'j', 2, 2, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(11, NULL, 'k', 3, 3, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(12, NULL, 'l', 3, 3, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(13, NULL, 'm', 3, 3, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(14, NULL, 'n', 3, 3, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(15, NULL, 'o', 3, 3, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(16, NULL, 'p', 4, 4, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(17, NULL, 'q', 4, 4, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(18, NULL, 'r', 4, 4, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(19, NULL, 's', 4, 4, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(20, NULL, 't', 4, 4, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(21, NULL, 'u', 5, 5, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(22, NULL, 'v', 5, 5, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(23, NULL, 'x', 5, 5, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(24, NULL, 'y', 5, 5, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(25, NULL, 'aa', 5, 5, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(26, NULL, 'bb', 6, 6, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(27, NULL, 'cc', 6, 6, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(28, NULL, 'dd', 6, 6, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(29, NULL, 'ee', 6, 6, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(30, NULL, 'ff', 6, 6, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(31, NULL, 'gg', 7, 7, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(32, NULL, 'hh', 7, 7, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(33, NULL, 'ii', 7, 7, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(34, NULL, 'jj', 7, 7, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(35, NULL, 'kk', 7, 7, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(36, NULL, 'll', 8, 8, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(37, NULL, 'mm', 8, 8, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(38, NULL, 'nn', 8, 8, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(39, NULL, 'oo', 8, 8, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30),
(40, NULL, 'pp', 8, 8, 'TPHCM', '', '2018-12-27 00:00:00', 1, '', '0', 0, 0x30);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
