-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 14, 2022 lúc 07:19 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

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
-- Cấu trúc bảng cho bảng `chitietsanpham`
--

CREATE TABLE `chitietsanpham` (
  `MaSP` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size1` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size2` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size3` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size4` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img1` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota4` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietsanpham`
--

INSERT INTO `chitietsanpham` (`MaSP`, `size1`, `size2`, `size3`, `size4`, `img1`, `img2`, `img3`, `mota1`, `mota2`, `mota3`, `mota4`) VALUES
('SP01', 'Size S', 'Size M', 'Size L', 'Size XL', 'dam1.png', '[value-7]', '[value-8]', 'Màu sắc: Xanh', 'Số đo ngực: 86cm,\r\nSố đo dài tay: 57cm,\r\nSố đo cửa', '[value-11]', '[value-12]'),
('SP02', 'S', 'M', 'L', 'XL', 'a1.png', 'a12.png', 'a13.png', 'Áo len đan vintage Pullover Cardigan', 'Chất liệu: Len', NULL, NULL),
('SP03', 'S', 'M', 'L', 'XL', 'hd2.webp', 'hd21.webp', 'hd22.webp', 'HADES BASIC WHITE TEE', NULL, NULL, NULL),
('SP04', 'S', 'M', 'L', 'XL', 'd1.jpg', 'd12.jpg', 'd13.jpg', 'Đầm Adel Flower Dress', 'Size S : dài 113cm - ngang ngực 92cm', 'Size M: dài 114cm - ngang ngực 96cm', 'Size L: dài 115cm - ngang ngực 100cm'),
('SP05', 'S', 'M', 'L', 'XL', 'd2.png', 'd22.png', 'd23.png', 'Đầm hoa gân tăm', 'Phong cách: Cơ bản, Boho, Hàn Quốc, Tối giản, Retr', NULL, NULL),
('SP05', 'S', 'M', 'L', 'XL', 'd2.png', 'd22.png', 'd23.png', 'Đầm hoa gân tăm', 'Phong cách: Cơ bản, Hàn Quốc, Tối giản, Retro', NULL, NULL),
('SP06', 'S', 'M', 'L', NULL, 'a2.png', 'a21.png', 'a22.png', 'Checked Sweater len', 'Size S: dài 66cm - ngang ngực 118cm', 'Size M: dài 67cm - ngang ngực 122cm', 'Size L: dài 68cm - ngang ngực 126cm'),
('SP07', 'S', 'M', 'L', NULL, 'd3.png', 'd31.png', 'd32.png', 'Đầm Jeong suông gân tăm - Đầm len phong cách Hàn Q', 'Size S: dài 95cm - ngang ngực 104cm', 'Size M: dài 96cm - ngang ngực 106cm', 'Size L: dài 97cm - ngang ngực 108cm'),
('SP08', 'S', 'M', 'L', NULL, 'q1.png', 'q11.png', 'q12.png', 'Quần culottes gân tăm', 'Màu sắc: Be, Nâu d.d302a', NULL, NULL),
('SP08', 'S', 'M', 'L', NULL, 'q1.png', 'q11.png', 'q12.png', 'Quần culottes gân tăm', 'Màu sắc: Be, Nâu, Rêu', NULL, NULL),
('SP09', 'S', 'M', 'L', NULL, 'q2.png', 'q21.png', 'q22.png', 'Quần ống suông 2 cúc', 'Màu sắc: Be, Nâu, Đen', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `MaSP` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaK` int(11) NOT NULL,
  `soluong` int(11) DEFAULT NULL,
  `size` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`MaSP`, `MaK`, `soluong`, `size`) VALUES
('SP06', 1, 7, 'SizeL');

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
  `Giaban` double(3,3) DEFAULT NULL,
  `Gianhap` decimal(18,3) DEFAULT NULL,
  `Tylegiamgia` double(2,2) DEFAULT NULL,
  `Soluong` int(11) DEFAULT NULL,
  `Mota` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Trangthai` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ngaynhap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `MaLH`, `Giaban`, `Gianhap`, `Tylegiamgia`, `Soluong`, `Mota`, `Trangthai`, `img`, `Ngaynhap`) VALUES
('SP01', 'Set đầm màu xanh trẻ trung', 'LH03', 349.000, '299.000', 0.15, 12, 'Tên sản phẩm: Áo khoác nắp túi\nMàu sắc: Xanh\nSố đo ngực: 86cm\nSố đo dài tay: 57cm\nSố đo cửa tay: 20cm\nSố đo vai: 34cm\nChiều dài áo: 40cm', 'Đang bán', 'dam1.webp', '2022-01-11'),
('SP02', 'Áo len đan vintage Pullover Ca', 'LH01', 320.000, '250.000', 0.00, 12, 'Tên sản phẩm: Áo len đan vintage Pullover Cardigan\r\nSize: S - M - L - XL', 'Đang bán', 'a1.png', '2022-01-11'),
('SP03', 'HADES BASIC WHITE TEE', 'LH01', 380.000, '250.000', 0.10, 20, 'Tên sản phẩm: HADES BASIC WHITE TEE\r\nChất liệu: Cotton 2 chiều 100%, thêu\r\nMàu sắc: Trắng\r\nForm áo: Oversize', 'Đang bán', 'hd2.webp', '2022-01-21'),
('SP04', 'Đầm Adel Flower Dress', 'LH03', 390.000, '299.000', 0.10, 15, 'Tên sản phẩm: Đầm Adel Flower Dress\r\nPhong cách: Cơ bản, Hàn Quốc, Retro\r\nSize: S - M - L', 'Đang bán', 'd1.jpg', '2022-01-25'),
('SP05', 'Đầm hoa gân tăm', 'LH03', 310.000, '299.000', 0.00, 15, 'Tên sản phẩm: Đầm hoa gân tăm\r\nPhong cách: Cơ bản, Boho, Hàn Quốc, Tối giản, Retro\r\n', 'Đang bán', 'd2.png', '2022-01-23'),
('SP06', 'Checked Sweater len', 'LH01', 390.000, '250.000', 0.15, 20, 'Tên sản phẩm: Checked Sweater len\r\nPhong cách: Cơ bản, Boho, Hàn Quốc, Tối giản, Retro\r\nSize: S - M - L', 'Đang bán', 'a2.png', '2022-01-04'),
('SP07', 'Đầm Jeong suông gân tăm', 'LH03', 385.000, '250.000', 0.10, 10, 'Tên sản phẩm: Đầm Jeong suông gân tăm\r\nPhong cách: Cơ bản, Boho, Hàn Quốc, Tối giản, Retro\r\nSize: XS - S - M - L - XL', 'Đang bán', 'd3.png', '2022-01-16'),
('SP08', 'Quần culottes gân tăm', 'LH02', 310.000, '250.000', 0.15, 20, 'Tên sản phẩm: Quần culottes gân tăm\r\nKiểu quần: Quần Culottes\r\nSize: S - M - L', 'Đang bán', 'q1.png', '2022-02-21'),
('SP09', 'Quần ống suông 2 cúc', 'LH02', 280.000, '140.000', 0.00, 20, 'Tên sản phẩm: Quần ống suông 2 cúc\r\nMàu sắc: Be - Nâu - Đen\r\nSize : S - M - L', 'Đang bán', 'q2.png', '2022-01-15');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD KEY `MaSP` (`MaSP`);

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
-- Các ràng buộc cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD CONSTRAINT `chitietsanpham_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

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
