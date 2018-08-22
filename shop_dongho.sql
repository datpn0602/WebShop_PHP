-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 16, 2018 lúc 11:19 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop_dongho`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(300) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `email`, `name`, `password`) VALUES
(1, 'meomeo1301@gmail.com', 'Hoàng Phương Uyên', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(20) NOT NULL,
  `anh` varchar(50) NOT NULL,
  `ngay_cap_nhat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `anh`, `ngay_cap_nhat`) VALUES
(1, 'dh3.jpg', ''),
(2, 'dh2.jpg', ''),
(3, 'dh4.jpg', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `ma_binh_luan` int(11) NOT NULL,
  `ten_kh` varchar(200) NOT NULL,
  `ma_sp` int(11) NOT NULL,
  `binh_luan` varchar(500) NOT NULL,
  `ma_kh` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`ma_binh_luan`, `ten_kh`, `ma_sp`, `binh_luan`, `ma_kh`) VALUES
(31, 'dat', 3, 'dep', 23),
(32, 'dat', 3, 'dep', 23),
(33, 'dat', 3, 'dep', 23),
(34, 'dat', 3, 'dep', 23),
(35, 'dat', 3, 'dep', 23),
(36, 'dat', 3, 'dep', 23),
(37, 'dat', 3, 'dep', 23),
(38, 'dat', 3, 'dep', 23),
(39, 'dat', 3, 'dep', 23),
(40, 'dat', 3, 'dep', 23),
(41, 'dat', 3, 'dep', 23),
(42, 'dat', 3, 'dep', 23),
(43, 'dat', 4, 'beautiful', 23),
(44, 'dat', 4, 'beautiful', 23),
(45, 'dat', 4, 'beautiful', 23),
(46, 'dat', 4, 'beautiful', 23),
(47, '', 81, 'dada', 0),
(48, 'dat', 25, 'dat', 23),
(49, '', 23, 'dd', 0),
(50, '', 43, 'dat\r\n\r\n', 0),
(51, 'tamlong', 88, 'beautiful', 11),
(52, 'dat', 31, 'hahhahaha', 23),
(53, 'dat', 24, 'đẹp lắm', 23),
(54, 'nampv', 23, 'Đồng hồ Aries Gold AG-G120B S-NUM phù hợp cho những buổi gặp gỡ đối tác nhưng vẫn đủ thời trang để đi chơi với bạn bè, bộ sưu tập cổ điển là phải có cho bất cứ ai đang tìm kiếm một chiếc đồng hồ đơn giản', 24),
(55, 'nampv', 23, 'Đồng hồ Aries Gold AG-G120B S-NUM phù hợp cho những buổi gặp gỡ đối tác nhưng vẫn đủ thời trang để đi chơi với bạn bè, bộ sưu tập cổ điển là phải có cho bất cứ ai đang tìm kiếm một chiếc đồng hồ đơn giản', 24),
(56, 'nampv', 43, 'Đồng hồ Aries Gold AG-G120B S-NUM phù hợp cho những buổi gặp gỡ đối tác nhưng vẫn đủ thời trang để đi chơi với bạn bè, bộ sưu tập cổ điển là phải có cho bất cứ ai đang tìm kiếm một chiếc đồng hồ đơn giản với một kích thước đáng nể. ', 24),
(57, 'nampv', 43, 'à một khóa cài dễ dàng, chiếc đồng hồ xây dựng độ tin cậy cao và một cảm giác an toàn cho người dùng', 24),
(58, 'dat', 25, '\r\nĐồng hồ Aries Gold AG-G120B S-NUM phù hợp cho những buổi gặp gỡ đối tác nhưng vẫn đủ thời trang để đi chơi với bạn bè, bộ sưu tập cổ điển là phải có cho bất cứ ai đang tìm kiếm một chiếc đồng hồ đơn giản với một kích thước đáng nể. Được trang bị với một chiếc vòng tay bằng thép vững chắc và một khóa cài dễ dàng, chiếc đồng hồ xây dựng độ tin cậy cao và một cảm giác an toàn cho người dùng.', 23);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `ma_chi_tiet` int(11) NOT NULL,
  `ma_hoa_don` int(11) NOT NULL,
  `ma_sp` int(11) NOT NULL,
  `so_luong` varchar(50) NOT NULL,
  `don_gia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`ma_chi_tiet`, `ma_hoa_don`, `ma_sp`, `so_luong`, `don_gia`) VALUES
(1, 61, 6, '1', '22900000'),
(2, 61, 23, '1', '4225000'),
(3, 61, 43, '2', '5250000'),
(4, 62, 6, '1', '22900000'),
(5, 63, 23, '1', '4225000'),
(6, 63, 92, '2', '7650000'),
(7, 64, 13, '5', '37800000'),
(8, 64, 24, '1', '9225000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `ma_hoa_don` int(11) NOT NULL,
  `ten_nguoi_mua` varchar(50) NOT NULL,
  `dia_chi` varchar(50) NOT NULL,
  `dien_thoai` varchar(50) NOT NULL,
  `xu_ly` varchar(50) NOT NULL,
  `ngay_lap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`ma_hoa_don`, `ten_nguoi_mua`, `dia_chi`, `dien_thoai`, `xu_ly`, `ngay_lap`) VALUES
(55, 'Mai Văn Nam', 'Hà Nội', '133', '', '0000-00-00'),
(56, 'Phân Nhân Đạt', 'Hà Nội', '133', '', '0000-00-00'),
(57, 'Phân Nhân Đạt', 'Hà Nội', '133', '', '0000-00-00'),
(58, 'Nguyễn Văn Hùng', 'Hà Nội', '2525', '', '0000-00-00'),
(59, 'Nguyễn Văn Hùng', 'Ninh Bình', '133', '', '0000-00-00'),
(60, 'Nguyễn Văn Hùng', 'Hà Nội', '111111111111', '', '0000-00-00'),
(61, 'Nguyễn Văn Hùng', 'Hà Nội', '133', '', '0000-00-00'),
(62, 'Nguyễn Văn Hùng', 'Hà Nội', '133', '', '0000-00-00'),
(63, 'Phân Nhân Đạt', 'Hà Nội', '01672505286', '', '2018-06-06'),
(64, 'Phân Nhân Đạt', 'Hà nội', '12121212', '', '2018-06-07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `ma_kh` int(11) NOT NULL,
  `ten_kh` varchar(35) NOT NULL,
  `dia_chi` varchar(50) NOT NULL,
  `dien_thoai` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gioi_tinh` varchar(10) NOT NULL,
  `ten_tai_khoan` varchar(35) NOT NULL,
  `mat_khau` varchar(45) NOT NULL,
  `hinh_anh` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`ma_kh`, `ten_kh`, `dia_chi`, `dien_thoai`, `email`, `gioi_tinh`, `ten_tai_khoan`, `mat_khau`, `hinh_anh`) VALUES
(4, 'Phan Nhân Đạt', 'Hà Nội', 2147483647, 'phannhandat@gmail.com', '0', 'phandat', '202cb962ac59075b964b07152d234b70', ''),
(6, 'Nguyễn Văn Nam', 'Hà Nội', 1414153535, 'namnv@gmail.com', 'Nam', 'vannam', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(7, 'Lưu Anh Tiến', 'Bắc Ninh', 454646464, 'tienluu@gmail.com', 'Nam', 'anhtien', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(8, 'Hương Lan', 'Hà Nội', 56456456, 'lanhuong@gmail.com', 'Nam', 'huonghuong123', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(9, 'Hoàng Thị Giang', 'Hà Nội', 14145436, 'hoanggiang@gmail.com', 'Nữ', 'Giang0902', '202cb962ac59075b964b07152d234b70', ''),
(11, 'Long Tam', 'Hà Nội', 43453453, 'tamlong@gmail.com', 'Nam', 'tamlong', '202cb962ac59075b964b07152d234b70', ''),
(12, 'Hoàng Long', 'Hà Nội', 14145436, 'longhoang@gmail.com', 'Nam', 'longlong', '202cb962ac59075b964b07152d234b70', ''),
(13, 'Mai Vũ', 'Hà Nội', 24252, 'vumai@gmail.com', 'Nữ', 'maivu1234', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(15, 'dat', 'Hà Nội', 2114, 'dâd', 'Nam', 'dâdada', '202cb962ac59075b964b07152d234b70', ''),
(16, 'dat', 'adasd', 0, 'qưeqwe', 'Nam', 'qưeqw', '202cb962ac59075b964b07152d234b70', ''),
(17, 'ád', 'ádsa', 0, 'ads', 'Nam', 'sfs', '202cb962ac59075b964b07152d234b70', ''),
(18, 'ád', 'ádsa', 0, 'ads', 'Nam', 'sfs', '202cb962ac59075b964b07152d234b70', ''),
(19, 'Hương Mai', 'Hà Nam', 2147483647, 'maimai@gmail.com', 'Nam', 'maimai', '202cb962ac59075b964b07152d234b70', ''),
(20, 'Hoàng Long', 'ha noi', 2147483647, 'phannhandat@gmail.com', 'Nam', 'meomeo1301@gmail.com', '202cb962ac59075b964b07152d234b70', ''),
(21, 'Pham Văn Dương', 'Bắc Ninh', 12313, 'adaddd', 'Nam', 'meomeo1301@gmail.com', '202cb962ac59075b964b07152d234b70', ''),
(22, 'aaaa', 'aaaa', 0, '', 'Nam', 'meomeo1301@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
(23, 'dat', '', 0, '', 'Nam', 'dat', '202cb962ac59075b964b07152d234b70', 'avt.jpg'),
(24, 'nam', '', 0, '', 'Nam', 'nampv', '202cb962ac59075b964b07152d234b70', 'avt1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `ma_loai_sp` int(11) NOT NULL,
  `loai_dong_ho` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`ma_loai_sp`, `loai_dong_ho`) VALUES
(1, 'Đồng hồ nam'),
(2, 'Đồng hồ nữ'),
(3, 'Đồng hồ đôi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasx`
--

CREATE TABLE `nhasx` (
  `ma_nsx` int(11) NOT NULL,
  `ten_nsx` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `show_nsx` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `nhasx`
--

INSERT INTO `nhasx` (`ma_nsx`, `ten_nsx`, `show_nsx`) VALUES
(1, 'Epos Swiss', 1),
(2, 'Citizen', 1),
(3, 'Casio', 1),
(4, 'Eris', 1),
(5, 'Jacque Lemans', 1),
(6, 'Geneva', 0),
(7, 'Citizen', 0),
(8, 'Stuhrling Original', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `ma_sp` int(11) NOT NULL,
  `ten_sp` varchar(40) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `hinh_anh` varchar(100) NOT NULL,
  `ma_loai_sp` int(11) NOT NULL,
  `ma_nsx` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `thong_tin` varchar(200) NOT NULL,
  `so_luong_ban` int(11) NOT NULL,
  `chi_tiet_sp` varchar(200) NOT NULL,
  `khuyen_mai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`ma_sp`, `ten_sp`, `don_gia`, `hinh_anh`, `ma_loai_sp`, `ma_nsx`, `so_luong`, `thong_tin`, `so_luong_ban`, `chi_tiet_sp`, `khuyen_mai`) VALUES
(3, ' Đồng hồ Epos Swiss 3420.156.22.20.32', 59700000, 'epos_swiss_03.png', 3, 1, 4242, ' Đồng hồ Epos Swiss 3420.156.22.20.32', 2598, 'chi tiết', '0'),
(4, ' Đồng hồ Epos Swiss 3387.152.22.16.32', 36000000, 'epos_swiss_05.png', 1, 1, 4545, ' Đồng hồ Epos Swiss 3387.152.22.16.32', 847, 'chi tiết', '1'),
(5, ' Đồng hồ Epos Swiss 8000.700.20.85.15', 15100000, 'epos_swiss_07.png', 1, 1, 122, '', 1, 'chi tiết', '0'),
(6, ' Đồng hồ Epos Swiss 3327.12.22.16.1', 22900000, 'epos_swiss_09.png', 2, 1, 321, 'Đồng hồ Thụy Sỹ Epos 3411.131.24.18.25 có mặt màu trắng viền mạ vàng kết hợp với dây da màu đen sang trọng giúp cánh mày râu định hình nên phong thái của mình không chỉ ở văn phòng làm việc mà ngay cả', 40, 'chi tiết', '0'),
(8, 'Đồng hồ Epos 3423.133.20.18.25', 34500000, 'epos_swiss_18.png', 2, 1, 5757, 'Đồng hồ nam Thụy Sỹ Epos 3423.133.20.18.25 được thiết kế dành riêng cho những chàng trai trẻ trung, năng động. Sở hữu kiểu mặt tròn nam tính và mạnh mẽ, các chi tiết trang trí như vạch chia giờ, kim đ', 4055, 'chi tiết', '1'),
(10, ' Đồng hồ Epos 3424.183.20.18.25', 36000000, 'epos_swiss_20.png', 3, 1, 898, 'Một dòng cơ lên cót bằng tay lộ máy phía sau hoàn toàn và một phần phía mặt trên của đồng hồ vừa lạ mắt vừa quen thuộc. Cùng với đó là công nghệ mạ vàng PVD cao cấp và mức độ chịu nước cao làm cho các', 332, 'chi tiết', '1'),
(11, ' Đồng hồ Epos 3432.132.22.25.32', 30400000, 'epos_swiss_21.png', 1, 1, 15, 'Đồng hồ Epos 3432.132.22.25.32', 8, 'chi tiết', '1'),
(12, ' Đồng hồ Epos 3432.132.22.25.15', 27100000, 'epos_swiss_22.png', 3, 1, 35, 'Đồng hồ Epos 3432.132.22.25.15', 12, 'chi tiết', '1'),
(13, ' Đồng hồ Epos 3434.183.20.35.24', 37800000, 'epos_swiss_2_03.png', 3, 1, 81, 'Đồng hồ Epos 3432.132.22.25.15', 16, 'chi tiết', '1'),
(14, ' Đồng hồ Epos 3433.228.24.16.25', 62100000, 'epos_swiss_2_05.png', 3, 1, 77, ' Đồng hồ Epos 3433.228.24.16.25', 4, 'chi tiết', '1'),
(15, ' Đồng hồ Epos 3432.132.22.20.15', 27100000, 'epos_swiss_2_07.png', 3, 1, 427, 'Đồng hồ Epos 3432.132.22.20.15', 85, 'chi tiết', '0'),
(16, ' Đồng hồ Epos 3432.132.22.20.32', 30400000, 'epos_swiss_2_09.png', 1, 1, 3, 'Đồng hồ Epos 3432.132.22.20.32', 2, 'chi tiết', '1'),
(17, ' Đồng hồ Epos 3434.183.24.38.25', 40500000, 'epos_swiss_2_11.png', 1, 1, 42, 'Đồng hồ Epos 3434.183.24.38.25', 0, 'chi tiết', '0'),
(18, ' Đồng hồ Epos 3387.152.22.18.32', 36000000, 'epos_swiss_2_18.png', 2, 1, 4, ' Đồng hồ Epos 3387.152.22.18.32', 0, 'chi tiết', '0'),
(19, ' Đồng hồ Epos 3387.152.22.18.15', 31600000, 'epos_swiss_2_19.png', 1, 1, 56, ' Đồng hồ Epos 3387.152.22.18.15', 48, 'chi tiết', '0'),
(20, ' Đồng hồ Epos 3387.152.22.16.15', 31600000, 'epos_swiss_2_20.png', 1, 1, 32, ' Đồng hồ Epos 3387.152.22.16.15', 19, 'chi tiết', '0'),
(21, ' Đồng hồ Epos 3387.152.22.15.32', 36000000, 'epos_swiss_2_21.png', 2, 1, 23, ' Đồng hồ Epos 3387.152.22.15.32', 13, 'chi tiết', '0'),
(22, ' Đồng hồ Epos 3390.152.22.16.25', 33000000, 'epos_swiss_2_22.png', 3, 1, 59, ' Đồng hồ Epos 3390.152.22.16.25', 20, 'chi tiết', '1'),
(23, ' Đồng hồ Aries Gold AG-L5026 G-MOP', 4225000, 'eris_1_01.png', 3, 4, 23, ' Đồng hồ Aries Gold AG-L5026 G-MOP', 1, 'chi tiết', '1'),
(24, ' Đồng hồ Aries Gold AG-G9005 S-S', 9225000, 'eris_1_02.png', 2, 4, 97, ' Đồng hồ Aries Gold AG-G9005 S-S', 16, 'chi tiết', '0'),
(25, ' Đồng hồ Aries Gold AG-G7003 BK-BKRG', 5472000, 'eris_1_03.png', 2, 4, 656, ' Đồng hồ Aries Gold AG-G7003 BK-BKRG', 55, 'chi tiết', '1'),
(28, ' Đồng hồ Aries Gold L5003 S-S', 3725000, 'eris_1_06.png', 3, 4, 8686, ' Đồng hồ Aries Gold L5003 S-S', 5224, 'chi tiết', '1'),
(29, ' Đồng hồ Aries Gold G7003 S-BUS', 5472000, 'eris_1_07.png', 3, 4, 8643, ' Đồng hồ Aries Gold G7003 S-BUS', 2673, 'chi tiết', '0'),
(30, ' Đồng hồ Aries Gold L5024Z G-W', 4725000, 'eris_1_08.png', 3, 4, 5653, ' Đồng hồ Aries Gold L5024Z G-W', 4215, 'chi tiết', '1'),
(31, ' Đồng hồ Aries Gold G1013Z S-S-L', 2475000, 'eris_1_09.png', 3, 4, 66, ' Đồng hồ Aries Gold G1013Z S-S-L', 58, 'chi tiết', '1'),
(32, ' Đồng hồ Aries Gold G1013Z S-S', 2475000, 'eris_1_10.png', 2, 4, 322, ' Đồng hồ Aries Gold G1013Z S-S', 294, 'chi tiết', '0'),
(33, ' Đồng hồ Aries Gold KR68Q S-BU12S', 4475000, 'eris_2_03.png', 2, 4, 62, ' Đồng hồ Aries Gold KR68Q S-BU12S', 43, 'chi tiết', '0'),
(34, ' Đồng hồ nữ Aries Gold AG-L5025Z S-MOP', 3225000, 'eris_2_05.png', 2, 4, 355, ' Đồng hồ nữ Aries Gold AG-L5025Z S-MOP', 266, 'chi tiết', '1'),
(35, ' Đồng hồ Aries Gold AG-G102 G-BU', 5472500, 'eris_2_07.png', 1, 4, 98, ' Đồng hồ Aries Gold AG-G102 G-BU', 8, 'chi tiết', '1'),
(36, ' Đồng hồ nam Aries Gold G1009 G-RW', 4725000, 'eris_2_09.png', 3, 4, 656, ' Đồng hồ nam Aries Gold G1009 G-RW', 533, 'chi tiết', '1'),
(37, ' Đồng hồ nữ Aries Gold L5015Z S-BK', 4975000, 'eris_2_11.png', 3, 4, 32, ' Đồng hồ nữ Aries Gold L5015Z S-BK', 20, 'chi tiết', '1'),
(38, ' Đồng hồ nữ Aries Gold L1011 G-S', 4475000, 'eris_2_18.png', 2, 4, 689, ' Đồng hồ nữ Aries Gold L1011 G-S', 50, 'chi tiết', '1'),
(39, ' Đồng hồ nam Aries Gold G1016Z S-S', 3725000, 'eris_2_19.png', 3, 4, 64, ' Đồng hồ nam Aries Gold G1016Z S-S', 54, 'chi tiết', '0'),
(40, ' Đồng hồ nữ Aries Gold L5011 G-WMOP', 4975000, 'eris_2_20.png', 1, 4, 652, ' Đồng hồ nữ Aries Gold L5011 G-WMOP', 613, 'chi tiết', '0'),
(41, ' Đồng hồ nam Aries Gold G1009 S-RW', 4225000, 'eris_2_21.png', 1, 4, 232, ' Đồng hồ nam Aries Gold G1009 S-RW', 105, 'chi tiết', '1'),
(42, ' Đồng hồ nam Aries Gold G1013Z S-BU-L', 2475000, 'eris_2_22.png', 3, 4, 7575, ' Đồng hồ nam Aries Gold G1013Z S-BU-L', 1839, 'chi tiết', '0'),
(43, 'Đồng hồ Citizen NH8350-83L', 5250000, 'citizen_1_03.png', 2, 2, 23, 'Đồng hồ Citizen NH8350-83L', 22, 'chi tiết', '0'),
(44, 'Đồng hồ Citizen CT-BD0041-89A', 2960000, 'citizen_1_05.png', 1, 2, 445, 'Đồng hồ Citizen CT-BD0041-89A', 366, 'chi tiết', '0'),
(45, 'Đồng hồ nam Citizen NP4060-57E', 7450000, 'citizen_1_07.png', 2, 2, 263, 'Đồng hồ nam Citizen NP4060-57E', 40, 'chi tiết', '0'),
(46, 'Đồng hồ nam Citizen NJ2166-55B', 7350000, 'citizen_1_09.png', 2, 2, 495, 'Đồng hồ nam Citizen NJ2166-55B', 268, 'chi tiết', '0'),
(47, 'Đồng hồ nam Citizen NH8384-14E', 6800000, 'citizen_1_11.png', 2, 2, 385, 'Đồng hồ nam Citizen NH8384-14E', 23, 'chi tiết', '1'),
(48, 'Đồng hồ nam Citizen NH8383-17E', 6800000, 'citizen_1_18.png', 2, 2, 956, 'Đồng hồ nam Citizen NH8383-17E', 489, 'chi tiết', '0'),
(49, 'Đồng hồ nam Citizen NH8381-12L', 5800000, 'citizen_1_19.png', 2, 2, 646, 'Đồng hồ nam Citizen NH8381-12L', 545, 'chi tiết', '0'),
(50, 'Đồng hồ nam Citizen NH8375-82E', 6100000, 'citizen_1_20.png', 3, 2, 2626, 'Đồng hồ nam Citizen NH8375-82E', 305, 'chi tiết', '0'),
(51, 'Đồng hồ nam Citizen NH8370-86E', 5300000, 'citizen_1_21.png', 3, 2, 56, 'Đồng hồ nam Citizen NH8370-86E', 9, 'chi tiết', '1'),
(52, 'Đồng hồ nam Citizen NH8350-59L', 5250000, 'citizen_1_22.png', 2, 2, 323, 'Đồng hồ nam Citizen NH8350-59L', 53, 'chi tiết', '0'),
(53, 'Đồng hồ nam Citizen NH7524-55A', 7770000, 'citizen_2_03.png', 3, 2, 459, 'Đồng hồ nam Citizen NH7524-55A', 115, 'chi tiết', '1'),
(54, 'Đồng hồ nam Citizen NH7490-55E', 6720000, 'citizen_2_05.png', 1, 2, 2626, 'Đồng hồ nam Citizen NH7490-55E', 2344, 'chi tiết', '0'),
(55, 'Đồng hồ nữ Citizen EZ6312-52E', 3530000, 'citizen_2_07.png', 3, 2, 774, 'Đồng hồ nữ Citizen EZ6312-52E', 310, 'chi tiết', '0'),
(56, 'Đồng hồ nữ Citizen EU6002-51P', 3400000, 'citizen_2_09.png', 3, 2, 5656, 'Đồng hồ nữ Citizen EU6002-51P', 37, 'chi tiết', '0'),
(57, 'Đồng hồ nam Citizen NP4074-52A', 8300000, 'citizen_2_11.png', 3, 2, 232, 'Đồng hồ nam Citizen NP4074-52A', 58, 'chi tiết', '0'),
(58, 'Đồng hồ nữ Citizen EU6000-57E', 2850000, 'citizen_2_18.png', 1, 2, 654, 'Đồng hồ nữ Citizen EU6000-57E', 16, 'chi tiết', '0'),
(59, 'Đồng hồ Citizen EJ6083-59E', 3410000, 'citizen_2_19.png', 1, 2, 232, 'Đồng hồ Citizen EJ6083-59E', 230, 'chi tiết', '0'),
(60, 'Đồng hồ nam Citizen EJ6081-54E', 2840000, 'citizen_2_20.png', 1, 2, 663, 'Đồng hồ nam Citizen EJ6081-54E', 412, 'chi tiết', '0'),
(61, 'Đồng hồ nam Citizen BI1088-53E', 3410000, 'citizen_2_21.png', 2, 2, 265, 'Đồng hồ nam Citizen BI1088-53E', 181, 'chi tiết', '1'),
(62, 'Đồng hồ nam Citizen BI1050-81E', 2850000, 'citizen_2_22.png', 2, 2, 2323, 'Đồng hồ nam Citizen BI1050-81E', 332, 'chi tiết', '1'),
(63, 'Đồng hồ Jacques Lemans JL3594L-15IG', 8665000, 'jacques_1_03.png', 1, 5, 232, 'Đồng hồ Jacques Lemans JL3594L-15IG', 19, 'chi tiết', '1'),
(64, 'Đồng hồ Jacques Lemans JL3635L5IG', 4390000, 'jacques_1_05.png', 1, 5, 2323, 'Đồng hồ Jacques Lemans JL3635L5IG-B', 733, 'chi tiết', '0'),
(65, 'Đồng hồ Jacques Lemans JL64205IG W', 4265000, 'jacques_1_07.png', 3, 5, 551, 'Đồng hồ Jacques Lemans JL64205IG W', 387, 'chi tiết', '1'),
(66, 'Đồng hồ Jacques Lemans JL3635L5RG', 4390000, 'jacques_1_09.png', 3, 5, 356, 'Đồng hồ Jacques Lemans JL3635L5RG', 240, 'chi tiết', '1'),
(67, 'Đồng hồ Jacques Lemans JL3635L5RG', 4390000, 'jacques_1_11.png', 1, 5, 651, 'Đồng hồ Jacques Lemans JL3635L5RG', 97, 'chi tiết', '0'),
(68, 'Jacques Lemans JL3638L5', 4080000, 'jacques_1_18.png', 1, 5, 546, 'Jacques Lemans JL3638L5', 450, 'chi tiết', '1'),
(69, 'Đồng hồ nữ Jacques Lemans JL3638L5R', 4080000, 'jacques_1_19.png', 3, 5, 249, 'Đồng hồ nữ Jacques Lemans JL3638L5R', 119, 'chi tiết', '0'),
(70, 'Jacques Lemans JL5308B5', 4080000, 'jacques_1_20.png', 2, 5, 356, 'Jacques Lemans JL5308B5', 221, 'chi tiết', '1'),
(71, 'Jacques Lemans JL3638L5B', 4080000, 'jacques_1_21.png', 1, 5, 663, 'Jacques Lemans JL3638L5B', 404, 'chi tiết', '0'),
(72, 'Đồng hồ Jacques Lemans JL36505RG', 3575000, 'jacques_1_22.png', 3, 5, 665, 'Đồng hồ Jacques Lemans JL36505RG', 499, 'chi tiết', '0'),
(73, 'Đồng hồ Jacques Lemans JL38025IG', 4130000, 'jacques_2_03.png', 3, 5, 333, 'Đồng hồ Jacques Lemans JL38025IG', 237, 'chi tiết', '0'),
(74, 'Đồng hồ Jacques Lemans JL38445IG', 3575000, 'jacques_2_05.png', 1, 5, 236, 'Đồng hồ Jacques Lemans JL38445IG', 100, 'chi tiết', '1'),
(75, 'Đồng hồ Jacques Lemans JL3638L5IG', 4080000, 'jacques_2_07.png', 3, 5, 5989, 'Đồng hồ Jacques Lemans JL3638L5IG', 829, 'chi tiết', '1'),
(76, 'Đồng hồ Jacques Lemans JL3638L5IG', 4080000, 'jacques_2_09.png', 1, 5, 2323, 'Đồng hồ Jacques Lemans JL3638L5IG', 410, 'chi tiết', '1'),
(77, 'Jacques Lemans JL6305B5', 3300000, 'jacques_2_11.png', 1, 5, 2338, 'Jacques Lemans JL6305B5', 1237, 'chi tiết', '1'),
(78, 'Đồng hồ Jacques Lemans JL3648B5', 4265000, 'jacques_2_18.png', 3, 5, 2559, 'Đồng hồ Jacques Lemans JL3648B5', 697, 'chi tiết', '1'),
(79, 'Jacques Lemans JL36505', 2890000, 'jacques_2_19.png', 1, 5, 2335, 'Jacques Lemans JL36505', 1659, 'chi tiết', '0'),
(80, 'Jacques Lemans JL38025', 4130000, 'jacques_2_20.png', 3, 5, 999, 'Jacques Lemans JL38025', 759, 'chi tiết', '0'),
(81, 'Đồng hồ nữ Jacques Lemans JL38445', 4130000, 'jacques_2_21.png', 3, 5, 5552, 'Đồng hồ nữ Jacques Lemans JL38445', 4691, 'chi tiết', '0'),
(82, 'Đồng hồ Jacques Lemans JL37735RG-R', 3850000, 'jacques_2_22.png', 1, 5, 3366, 'Đồng hồ Jacques Lemans JL37735RG-R', 1333, 'chi tiết', '1'),
(87, 'Đồng hồ Casio EFR-546SG-7AVUDF', 4455000, 'casio_2_11.png', 3, 3, 615, 'Đồng hồ Casio EFR-546SG-7AVUDF', 561, 'chi tiết', '1'),
(88, 'Đồng hồ Casio EQB-500D-1ADR', 12308000, 'casio_2_18.png', 2, 3, 323, 'Đồng hồ Casio EQB-500D-1ADR', 239, 'chi tiết', '0'),
(91, 'Đồng hồ Casio EQS-500DB-1A2DR', 7650000, 'casio_2_21.png', 2, 3, 5656, 'Đồng hồ Casio EQS-500DB-1A2DR', 874, 'chi tiết', '1'),
(92, 'Đồng hồ Casio EQS-500DB-1A1DR', 7650000, 'casio_2_22.png', 2, 3, 2323, 'Đồng hồ Casio EQS-500DB-1A1DR', 248, 'chi tiết', '1'),
(93, 'Đồng hồ Casio MTP-1169G-9ARDF', 1328000, 'casio_3_03.png', 3, 3, 133, 'Đồng hồ Casio MTP-1169G-9ARDF', 97, 'chi tiết', '1'),
(96, 'Đồng hồ Casio LTP-1237D-7ADF', 1080000, 'casio_3_09.png', 1, 3, 3234, 'Đồng hồ Casio LTP-1237D-7ADF', 1464, 'chi tiết', '0'),
(97, 'Đồng hồ Casio LTP-1275D-1ADF', 878000, 'casio_3_11.png', 3, 3, 232, 'Đồng hồ Casio LTP-1275D-1ADF', 200, 'chi tiết', '1'),
(98, 'Đồng hồ Casio LTP-1302D-1A1VDF', 1170000, 'casio_3_18.png', 1, 3, 32, 'Đồng hồ Casio LTP-1302D-1A1VDF', 19, 'chi tiết', '0'),
(99, 'Đồng hồ Casio LTP-1302D-1A2VDF', 1170000, 'casio_3_19.png', 3, 3, 565, 'Đồng hồ Casio LTP-1302D-1A2VDF', 563, 'chi tiết', '1'),
(100, 'Đồng hồ Casio LTP-1310D-2BVDF', 1080000, 'casio_3_20.png', 2, 3, 565, 'Đồng hồ Casio LTP-1310D-2BVDF', 182, 'chi tiết', '1'),
(101, 'Đồng hồ Casio LTP-1314D-1AVDF', 1170000, 'casio_3_21.png', 1, 3, 2365, 'Đồng hồ Casio LTP-1314D-1AVDF', 599, 'chi tiết', '0'),
(102, 'Đồng hồ Casio MTP-1165A-1C2DF', 1148000, 'casio_3_22.png', 2, 3, 3232, 'Đồng hồ Casio MTP-1165A-1C2DF', 103, 'chi tiết', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`ma_binh_luan`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`ma_chi_tiet`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`ma_hoa_don`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`ma_loai_sp`);

--
-- Chỉ mục cho bảng `nhasx`
--
ALTER TABLE `nhasx`
  ADD PRIMARY KEY (`ma_nsx`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ma_sp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `ma_binh_luan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `ma_chi_tiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `ma_hoa_don` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `ma_loai_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `nhasx`
--
ALTER TABLE `nhasx`
  MODIFY `ma_nsx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ma_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
