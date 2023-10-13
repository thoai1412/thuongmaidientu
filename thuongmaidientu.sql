-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 04, 2023 lúc 06:50 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thuongmaidientu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_pass` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `admin_name` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `admin_email` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `admin_phone` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_pass`, `admin_name`, `admin_email`, `admin_phone`) VALUES
(1, 'abc123', 'Lvt', 'lvt@gmail.com', '123456789'),
(2, 'admin', 'Luan', 'luan@gmail.com', '2032002'),
(35, 'asd123', 'das', 'hhii1i@gmail.com', '372022188'),
(38, 'admin', 'admin', 'admin@gmail.com', '2222222');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`) VALUES
(1, 'iphone'),
(2, 'Samsung'),
(3, 'Oppo'),
(4, 'Xiaomi'),
(5, 'Vivo'),
(6, 'Realme'),
(7, 'Nokia'),
(8, 'Mobell'),
(9, 'itel'),
(10, 'Masstel');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Điện thoại'),
(2, 'Ốp lưng'),
(3, 'Phụ kiện'),
(4, 'Ưu đãi'),
(17, 'iPad');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `donhang_id` int(11) NOT NULL,
  `sanpham_name` text COLLATE utf8_vietnamese_ci NOT NULL,
  `khachhang_name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `khachhang_phone` varchar(11) COLLATE utf8_vietnamese_ci NOT NULL,
  `donhang_gia` int(11) NOT NULL,
  `donhang_diachi` text COLLATE utf8_vietnamese_ci NOT NULL,
  `yeucau` text COLLATE utf8_vietnamese_ci NOT NULL,
  `ngaydat` datetime NOT NULL DEFAULT current_timestamp(),
  `donhang_tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`donhang_id`, `sanpham_name`, `khachhang_name`, `khachhang_phone`, `donhang_gia`, `donhang_diachi`, `yeucau`, `ngaydat`, `donhang_tinhtrang`) VALUES
(34, '  iPhone 14 Pro Max – New Fullbox(sl:2);  iPhone 13 Pro Max Mạ Vàng Emperial Dragon(sl:3);', ' Lê Vĩnh Thoại ', ' 789789789 ', 568980000, 'abcduongxyz,Quận Gò Vấp,Hồ Chí Minh', 'Xuat hoa don', '2022-12-03 00:00:00', 0),
(49, '  iPhone 14 Pro Max – New Fullbox(sl:3);  iPhone 13 Pro Max Mạ Vàng Emperial Dragon(sl:1);', ' Trương Hoàng Luân ', '01678761240', 268970000, 'abcduongxyz,Huyện Kế Sách,Sóc Trăng', 'Không Xuat hoa don', '2022-12-03 00:00:00', 0),
(50, '  iPhone 14 Pro Max – New Fullbox(sl:3);  iPhone 13 Pro Max Mạ Vàng Emperial Dragon(sl:1);', ' Trương Hoàng Luân ', '0836151007', 268970000, '(Nhận tại cửa hàng)145 Nguyễn Thị Minh Khai, Phường Phạm Ngũ Lão, Quận 1, Hồ Chí Minh', 'Xuat hoa don', '2022-12-03 00:00:00', 0),
(59, '  iPhone 13 Pro Max Mạ Vàng Emperial Dragon(sl:1);', ' Trương Hoàng Luân ', '01678761240', 167000000, '(Nhận tại cửa hàng)145 Nguyễn Thị Minh Khai, Phường Phạm Ngũ Lão, Quận 1, Hồ Chí Minh', 'Không Xuat hoa don', '2022-12-10 10:12:45', 0),
(63, '  Nokia(sl:1);', ' Trương Hoàng Luân ', '0836151007 ', 1500000, '(Nhận tại cửa hàng)145 Nguyễn Thị Minh Khai, Phường Phạm Ngũ Lão, Quận 1, Hồ Chí Minh', 'Không Xuat hoa don', '2022-12-04 00:00:00', 1),
(64, '  iPhone 13 Pro Max Mạ Vàng Emperial Dragon(sl:3);  iPhone 14 Pro Max – New Fullbox(sl:1);', ' Trương Hoàng Luân ', '01678761240', 534990000, 'abcduongxyz,Huyện Bình Đại,Bến Tre', 'Xuat hoa don', '2022-12-04 00:00:00', 0),
(66, '  iPhone 14 Pro Max – New Fullbox(sl:1);', ' Trương Hoàng Luân ', '0836151007', 33990000, '(Nhận tại cửa hàng)145 Nguyễn Thị Minh Khai, Phường Phạm Ngũ Lão, Quận 1, Hồ Chí Minh', 'Không Xuat hoa don', '2022-12-10 11:19:29', 0),
(67, '  iPhone 14 Pro Max Gold Solaris Edition Limited 500 256 Gb(sl:1);', ' Trương Hoàng Luân ', '0327633446', 136000000, '(Nhận tại cửa hàng)145 Nguyễn Thị Minh Khai, Phường Phạm Ngũ Lão, Quận 1, Hồ Chí Minh', 'Không Xuat hoa don', '2022-12-10 11:19:35', 0),
(75, '  iPhone 14 Pro Max – New Fullbox(sl:1);', ' Trương Hoàng Luân ', '01678761240', 33990000, '(Nhận tại cửa hàng)145 Nguyễn Thị Minh Khai, Phường Phạm Ngũ Lão, Quận 1, Hồ Chí Minh', 'Không Xuat hoa don', '2022-12-10 11:26:19', 0),
(94, '  iPhone 13 Pro Max Mạ Vàng Emperial Dragon(sl:2);', ' Nguyễn Quang Trung ', ' 0372022188', 334000000, '(Nhận tại cửa hàng)145 Nguyễn Thị Minh Khai, Phường Phạm Ngũ Lão, Quận 1, Hồ Chí Minh', 'Không Xuat hoa don', '2022-12-17 00:00:00', 0),
(98, '  iPhone 13 Pro Max Mạ Vàng Emperial Dragon(sl:2);', ' Nguyễn Quang Trung ', ' 0372022188', 334000000, '(Nhận tại cửa hàng)145 Nguyễn Thị Minh Khai, Phường Phạm Ngũ Lão, Quận 1, Hồ Chí Minh', 'Không Xuat hoa don', '2022-12-17 00:00:00', 0),
(105, '  Nokia(sl:2);', 'Trương Hoàng Luân', '0836151007', 3400000, '63A,Tp Bến Tre,Bến Tre', 'Xuat hoa don', '2022-12-17 14:58:19', 1),
(108, '  iPhone 13 Pro Max Mạ Vàng Emperial Dragon(sl:2);', 'Trương Hoàng Luân', '0836151007', 334000000, 'AAAA,Huyện Ba Tri,Bến Tre', 'Xuat hoa don', '2022-12-22 13:11:00', 1),
(109, '  Samsung Galaxy Z(sl:1);', 'Trương Hoàng Luân', '0836151007', 29490000, '(Nhận tại cửa hàng)145 Nguyễn Thị Minh Khai, Phường Phạm Ngũ Lão, Quận 1, Hồ Chí Minh', 'Xuat hoa don', '2023-01-01 17:21:12', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `khachhang_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `sanpham_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giohang_soluong` int(11) NOT NULL,
  `sanpham_gia` int(11) NOT NULL,
  `sanpham_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`khachhang_email`, `sanpham_id`, `sanpham_name`, `giohang_soluong`, `sanpham_gia`, `sanpham_img`) VALUES
('lvt@gmail.com', 1, 'iPhone 14 Pro Max – New Fullbox', 2, 33990000, 'p-1.png'),
('lvt@gmail.com', 2, 'iPhone 14 Pro Max Gold Solaris Limited 500 1 Tb', 1, 155000000, 'p-2.png'),
('trung@gmail.com', 4, 'iPhone 14 Pro Max – New Fullbox', 1, 33990000, 'p-4.png '),
('luan@gmail.com', 1, 'iPhone 14 Pro Max – New Fullbox', 2, 33990000, 'p-1.png ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hotro`
--

CREATE TABLE `tbl_hotro` (
  `hotro_id` int(11) NOT NULL,
  `hotro_hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hotro_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hotro_sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hotro_tieude` int(100) NOT NULL,
  `hotro_noidung` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `hotro_chude` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_hotro`
--

INSERT INTO `tbl_hotro` (`hotro_id`, `hotro_hoten`, `hotro_email`, `hotro_sdt`, `hotro_tieude`, `hotro_noidung`, `hotro_chude`) VALUES
(3, 'Truong hoang luan', 'luantruongltbt@gmail.com', '0000000', 0, 'Nhân viên tư vấn non', 'Khiếu nại'),
(4, 'Truong hoang luan', 'animeschoollife1@gmail.com', '0000000000', 222, '22', 'Tư vấn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `khachhang_id` int(11) NOT NULL,
  `khachhang_pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `khachhang_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `khachhang_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `khachhang_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`khachhang_id`, `khachhang_pass`, `khachhang_name`, `khachhang_phone`, `khachhang_email`) VALUES
(1, '123', 'Trương Hoàng Luân', '0836151007', 'luan@gmail.com'),
(2, '123', 'Nguyễn Quang Trung', '888888888', 'trung@gmail.com'),
(3, '123', 'Lê Vĩnh Thoại', '789789789', 'thoai@gmail.com'),
(5, '123qwe', 'Lê Phúc Nhân', '0944444444', 'nhan@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `sanpham_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sanpham_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sanpham_mota` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `sanpham_gia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sanpham_soluong` int(100) NOT NULL,
  `sanpham_daban` int(11) NOT NULL,
  `sanpham_img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sanpham_active` int(11) NOT NULL,
  `sanpham_hot` int(11) NOT NULL,
  `sanpham_brand` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sanpham_img_mini1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sanpham_img_mini2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sanpham_img_mini3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sanpham_img_mini4` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`sanpham_id`, `category_id`, `sanpham_name`, `sanpham_mota`, `sanpham_gia`, `sanpham_soluong`, `sanpham_daban`, `sanpham_img`, `sanpham_active`, `sanpham_hot`, `sanpham_brand`, `sanpham_img_mini1`, `sanpham_img_mini2`, `sanpham_img_mini3`, `sanpham_img_mini4`) VALUES
(1, 1, 'iPhone 14 Pro Max – New Fullbox', 'Thông tin của iPhone 14 Pro Max – New Fullbox', '33990000', 10, 0, 'p-1.png', 1, 1, 'iphone', 'p-1-1.png', 'p-1-2.png', 'p-1-3.png', 'p-1-4.png'),
(2, 1, 'iPhone 14 Pro Max Gold Solaris Limited 500 1 Tb', 'Thông tin của iPhone 14 Pro Max Gold Solaris Limited 500 1 Tb', '155000000', 8, 0, 'p-2.png', 1, 1, 'iphone', 'p-2-1.png', 'p-2-2.png', 'p-2-3.png', 'p-2-4.png'),
(3, 1, 'iPhone 14 Pro Max Gold Solaris Edition Limited 500 256 Gb', 'Thông tin của iPhone 14 Pro Max Gold Solaris Edition Limited 500 256 Gb', '136000000', 6, 0, 'p-3.png', 1, 1, 'iphone', 'p-3-1.png', 'p-3-2.png', 'p-3-3.png', 'p-3-4.png'),
(4, 1, 'iPhone 14 Pro Max – New Fullbox', 'Thông tin của iPhone 14 Pro Max – New Fullbox', '33990000', 9, 0, 'p-4.png', 1, 1, 'iphone', 'p-4-1.png', 'p-4-2.png', 'p-4-3.png', 'p-4-4.png'),
(5, 1, 'iPhone 13 Pro Max Mạ Vàng Emperial Dragon', 'Thông tin của iPhone 13 Pro Max Mạ Vàng Emperial Dragon', '167000000', 5, 0, 'p-5.png', 1, 1, 'iphone', 'p-5-1.png', 'p-5-2.png', 'p-5-3.png', 'p-5-4.png'),
(7, 1, 'Nokia', 'NOKIAAAAA', '1700000', 9, 0, 'nokia-2_4-fjord-front_back-int.png', 0, 0, 'Nokia', '', '', '', ''),
(14, 1, 'Samsung Galaxy Z', '', '29490000', 5, 5, 'samsung_galaxy_Z.PNG', 0, 0, 'Samsung', 'samsung_galaxy_Z_1.PNG', 'samsung_galaxy_Z_2.PNG', 'samsung_galaxy_Z_3.PNG', 'samsung_galaxy_Z_4.PNG'),
(16, 1, 'OPPO Reno8 Pro 5G', 'Thông tin điện thoại Oppo', '17990000', 10, 0, 'oppo1.png', 0, 0, 'Oppo', 'oppo1-1.png', 'oppo1-2.png', 'oppo1-3.png', 'oppo1-4.png'),
(19, 1, 'Itell 6502', 'Thông tin điện thoại Itell 6502', '2290000', 5, 0, 'itell6502-2290000-1.png', 0, 0, 'itel', 'itell6502-2290000-2.png', 'itell6502-2290000-3.png', 'itell6502-2290000-4.png', 'itell6502-2290000-5.png'),
(20, 1, 'Masstel Lux', 'Thông tin điện thoại Masstel Lux', '850000', 5, 0, 'masstellux20-850000-1.png', 0, 0, 'Masstel', 'masstellux20-850000-2.png', 'masstellux20-850000-3.png', 'masstellux20-850000-4.png', 'masstellux20-850000-5.png'),
(21, 1, 'Mobell Rock 4', 'Điện thoại Mobell Rock 4', '810000', 8, 0, 'mobellrock4-810000-1.png', 0, 0, 'Mobell', 'mobellrock4-810000-2.png', 'mobellrock4-810000-3.png', 'mobellrock4-810000-4.png', 'mobellrock4-810000-5.png'),
(22, 1, 'Realme 8 Pro', 'Điện thoại Realme', '6990000', 7, 0, 'realme-6990000-1.png', 0, 0, 'Realme', 'realme-6990000-2.png', 'realme-6990000-3.png', 'realme-6990000-4.png', 'realme-6990000-5.png'),
(23, 1, 'Vivo X80', 'Điện thoại Vivo', '18900000', 5, 0, 'vivox80-18900000-1.png', 0, 0, 'Vivo', 'vivox80-18900000-2.png', 'vivox80-18900000-3.png', 'vivox80-18900000-4.png', 'vivox80-18900000-5.png'),
(24, 1, 'Xiaomi Redmi Note 11', 'Xiaomi', '5200000', 5, 0, 'xiaomiredmi-5200000-1.png', 0, 0, 'Xiaomi', 'xiaomiredmi-5200000-2.png', 'xiaomiredmi-5200000-3.png', 'xiaomiredmi-5200000-4.png', 'xiaomiredmi-5200000-5.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slider_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_img`, `slider_active`) VALUES
(1, '1.png', 1),
(2, '2.png', 1),
(3, '3.png', 1),
(4, '4.png', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`donhang_id`),
  ADD KEY `sanpham_id` (`sanpham_name`(1024)),
  ADD KEY `khachhang_id` (`khachhang_name`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD KEY `sanpham_id` (`sanpham_id`);

--
-- Chỉ mục cho bảng `tbl_hotro`
--
ALTER TABLE `tbl_hotro`
  ADD PRIMARY KEY (`hotro_id`);

--
-- Chỉ mục cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`khachhang_id`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`sanpham_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `donhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT cho bảng `tbl_hotro`
--
ALTER TABLE `tbl_hotro`
  MODIFY `hotro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `khachhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD CONSTRAINT `tbl_giohang_ibfk_1` FOREIGN KEY (`sanpham_id`) REFERENCES `tbl_sanpham` (`sanpham_id`);

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `tbl_sanpham_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
