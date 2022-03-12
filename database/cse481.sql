-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 12, 2022 lúc 06:30 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cse481`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `MaSP` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaK` int(11) NOT NULL,
  `Soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaK` int(11) NOT NULL,
  `TenK` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gioitinh` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ngaysinh` date DEFAULT NULL,
  `Diachi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SĐT` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaK`, `TenK`, `Gioitinh`, `Ngaysinh`, `Diachi`, `SĐT`, `email`, `matkhau`) VALUES
(1, 'Nguyễn Quỳnh Anh', 'Nữ', '2001-06-16', 'Thanh Hóa', '0977123654', 'qa1662001@gmail.com', '123'),
(2, 'Nguyễn Thùy Duong ', 'Nữ', '2001-05-14', NULL, NULL, 'd@gmail.com', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihang`
--

CREATE TABLE `loaihang` (
  `MaLH` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenLH` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaihang`
--

INSERT INTO `loaihang` (`MaLH`, `TenLH`) VALUES
('LH01', 'Áo'),
('LH02', 'Quần'),
('LH03', 'Váy'),
('LH04', 'Phụ kiện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenNV` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gioitinh` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ngaysinh` date DEFAULT NULL,
  `Diachi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SĐT` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenSP` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaLH` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Giaban` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gianhap` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tylegiamgia` float DEFAULT NULL,
  `Soluong` int(11) DEFAULT NULL,
  `Mota` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Trangthai` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `MaLH`, `Giaban`, `Gianhap`, `Tylegiamgia`, `Soluong`, `Mota`, `Trangthai`, `img`) VALUES
('SP01', 'Set đầm màu xanh trẻ trung', 'LH03', '349.000', '299.000', 0, 12, 'Tên sản phẩm: Áo khoác nắp túi\r\nMàu sắc: Xanh\r\nSố đo ngực: 86cm\r\nSố đo dài tay: 57cm\r\nSố đo cửa tay: 20cm\r\nSố đo vai: 34cm\r\nChiều dài áo: 40cm', 'Đang bán', 'dam1.webp');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaK` (`MaK`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaK`);

--
-- Chỉ mục cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`MaLH`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaLH` (`MaLH`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`MaK`) REFERENCES `khachhang` (`MaK`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaLH`) REFERENCES `loaihang` (`MaLH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
