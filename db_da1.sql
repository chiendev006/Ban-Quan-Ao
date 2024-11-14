-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2024 at 02:27 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id_binhluan` int(11) NOT NULL,
  `id_taikhoan` int(11) DEFAULT NULL,
  `noi_dung` text DEFAULT NULL,
  `ngay_tao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_hoa_don`
--

CREATE TABLE `chi_tiet_hoa_don` (
  `id_cthd` int(11) NOT NULL,
  `id_hoadon` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `gia` decimal(10,2) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gio_hang`
--

CREATE TABLE `gio_hang` (
  `id_giohang` int(11) NOT NULL,
  `id_sp` int(11) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `id_taikhoan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hoadon` int(11) NOT NULL,
  `id_khachhang` int(11) DEFAULT NULL,
  `hinh_thuc_thanh_toan` varchar(50) DEFAULT NULL,
  `trang_thai` varchar(20) DEFAULT NULL,
  `tongtien` decimal(10,2) DEFAULT NULL,
  `ho_ten` varchar(100) DEFAULT NULL,
  `dia_chi` varchar(255) DEFAULT NULL,
  `sdt` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id_khachhang` int(11) NOT NULL,
  `ho_ten` varchar(100) DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `sdt` varchar(20) DEFAULT NULL,
  `dia_chi` varchar(255) DEFAULT NULL,
  `hinh_anh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kho_anh`
--

CREATE TABLE `kho_anh` (
  `id_hinhanh` int(11) NOT NULL,
  `id_sp` int(11) DEFAULT NULL,
  `ten_hinhanh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kich_co`
--

CREATE TABLE `kich_co` (
  `id_kichco` int(11) NOT NULL,
  `loai_kich_co` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mau_sac`
--

CREATE TABLE `mau_sac` (
  `id_mausac` int(11) NOT NULL,
  `ten_mau` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `id_sp` int(11) NOT NULL,
  `id_mau_sac` int(11) DEFAULT NULL,
  `id_kich_co` int(11) DEFAULT NULL,
  `id_hinhanh` int(11) DEFAULT NULL,
  `id_danh_muc` int(11) DEFAULT NULL,
  `ten_sp` varchar(100) DEFAULT NULL,
  `gia_sp` decimal(10,2) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `loai` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_taikhoan` int(11) NOT NULL,
  `id_khachhang` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `matkhau` varchar(100) DEFAULT NULL,
  `ten` varchar(50) DEFAULT NULL,
  `sdt` varchar(20) DEFAULT NULL,
  `Field` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id_binhluan`),
  ADD KEY `id_taikhoan` (`id_taikhoan`);

--
-- Indexes for table `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD PRIMARY KEY (`id_cthd`),
  ADD KEY `id_hoadon` (`id_hoadon`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Indexes for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`id_giohang`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_taikhoan` (`id_taikhoan`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hoadon`),
  ADD KEY `id_khachhang` (`id_khachhang`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Indexes for table `kho_anh`
--
ALTER TABLE `kho_anh`
  ADD PRIMARY KEY (`id_hinhanh`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Indexes for table `kich_co`
--
ALTER TABLE `kich_co`
  ADD PRIMARY KEY (`id_kichco`);

--
-- Indexes for table `mau_sac`
--
ALTER TABLE `mau_sac`
  ADD PRIMARY KEY (`id_mausac`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_sp`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_taikhoan`),
  ADD KEY `id_khachhang` (`id_khachhang`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`id_taikhoan`) REFERENCES `taikhoan` (`id_taikhoan`);

--
-- Constraints for table `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD CONSTRAINT `chi_tiet_hoa_don_ibfk_1` FOREIGN KEY (`id_hoadon`) REFERENCES `hoadon` (`id_hoadon`) ON DELETE CASCADE,
  ADD CONSTRAINT `chi_tiet_hoa_don_ibfk_2` FOREIGN KEY (`id_sanpham`) REFERENCES `san_pham` (`id_sp`) ON DELETE CASCADE;

--
-- Constraints for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `gio_hang_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`),
  ADD CONSTRAINT `gio_hang_ibfk_2` FOREIGN KEY (`id_taikhoan`) REFERENCES `taikhoan` (`id_taikhoan`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`id_khachhang`) REFERENCES `khach_hang` (`id_khachhang`);

--
-- Constraints for table `kho_anh`
--
ALTER TABLE `kho_anh`
  ADD CONSTRAINT `kho_anh_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`);

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`id_khachhang`) REFERENCES `khach_hang` (`id_khachhang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
