-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2020 lúc 01:46 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `my_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(244) UNSIGNED NOT NULL,
  `id_customer` char(50) NOT NULL,
  `date_order` date NOT NULL DEFAULT current_timestamp(),
  `total` double NOT NULL,
  `payment` varchar(200) DEFAULT NULL,
  `note` varchar(500) DEFAULT NULL,
  `address_another` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `trang_thai` varchar(20) NOT NULL,
  `sdt_khac` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `id_customer`, `date_order`, `total`, `payment`, `note`, `address_another`, `created_at`, `updated_at`, `trang_thai`, `sdt_khac`) VALUES
(11, 'hainguyenc88@gmail.com', '2020-12-02', 3570099000, NULL, NULL, NULL, '2020-12-02 12:46:29', '2020-12-03 04:37:43', 'Đã thanh toán', NULL),
(12, 'hainguyenc88@gmail.com', '2020-12-03', 400000000, NULL, NULL, NULL, '2020-12-02 21:01:13', '2020-12-03 17:23:39', 'Đang vận chuyển', NULL),
(13, 'hainguyenc88@gmail.com', '2020-12-04', 200000000, NULL, NULL, NULL, '2020-12-03 17:47:22', '2020-12-04 15:43:09', 'Đã xác nhận', NULL),
(14, 'hainguyenc88@gmail.com', '2020-12-04', 200000000, NULL, NULL, NULL, '2020-12-03 17:47:40', '2020-12-03 22:30:03', 'Đã thanh toán', NULL),
(15, 'hainguyenc88@gmail.com', '2020-12-04', 400000000, NULL, NULL, NULL, '2020-12-03 22:14:05', '2020-12-03 23:17:01', 'Đã xác nhận', NULL),
(16, 'hainguyency@gmail.com', '2020-12-05', 16780600000, NULL, NULL, NULL, '2020-12-04 18:52:13', '2020-12-04 15:43:22', 'Đã thanh toán', NULL),
(17, 'hainguyency@gmail.com', '2020-12-04', 26804000, NULL, NULL, NULL, '2020-12-04 08:09:02', '2020-12-04 15:44:34', 'Đã xác nhận', NULL),
(18, 'hainguyency@gmail.com', '2020-12-04', 44304000, NULL, NULL, NULL, '2020-12-04 08:12:22', '2020-12-04 15:45:01', 'Đang vận chuyển', NULL),
(19, 'hainguyency@gmail.com', '2020-12-04', 70700000, NULL, NULL, NULL, '2020-12-04 08:28:20', '2020-12-04 08:28:20', 'Chờ xác nhận', NULL),
(20, 'hainguyency@gmail.com', '2020-12-04', 64700000, NULL, NULL, NULL, '2020-12-04 08:53:31', '2020-12-04 08:53:31', 'Chờ xác nhận', NULL),
(21, 'hainguyency@gmail.com', '2020-12-04', 64700000, NULL, NULL, NULL, '2020-12-04 09:03:27', '2020-12-04 09:03:27', 'Chờ xác nhận', NULL),
(22, 'hainguyency@gmail.com', '2020-12-04', 64700000, NULL, NULL, NULL, '2020-12-04 09:04:13', '2020-12-04 09:04:13', 'Chờ xác nhận', NULL),
(23, 'hainguyency@gmail.com', '2020-12-04', 64700000, NULL, '5235325235', NULL, '2020-12-04 09:06:58', '2020-12-04 09:06:58', 'Chờ xác nhận', NULL),
(24, 'hainguyency@gmail.com', '2020-12-04', 17500000, 'card', NULL, NULL, '2020-12-04 09:08:35', '2020-12-04 09:08:35', 'Chờ xác nhận', NULL),
(25, 'hainguyency@gmail.com', '2020-12-04', 64700000, 'card', NULL, NULL, '2020-12-04 09:25:30', '2020-12-04 09:25:30', 'Chờ xác nhận', NULL),
(26, 'hainguyency@gmail.com', '2020-12-04', 64700000, NULL, NULL, '4', '2020-12-04 09:26:52', '2020-12-04 09:26:52', 'Chờ xác nhận', NULL),
(27, 'hainguyency@gmail.com', '2020-12-04', 70700000, 'card', 'hi hi gửi hàng nhanh nha', 'Gửi đến địa chỉ này nha', '2020-12-04 14:44:12', '2020-12-04 14:44:12', 'Chờ xác nhận', NULL),
(28, 'hainguyency@gmail.com', '2020-12-04', 17500000, 'card', '4242442', '444', '2020-12-04 15:42:40', '2020-12-04 15:42:40', 'Chờ xác nhận', '4444');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id_bill` int(244) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` double NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `product` int(255) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id_bill`, `quantity`, `unit_price`, `updated_at`, `created_at`, `product`) VALUES
(12, 2, 200000000, '2020-12-02 21:01:13', '2020-12-02 21:01:13', 20),
(15, 6, 6000000, '2020-12-03 22:14:05', '2020-12-03 22:14:05', 22),
(15, 2, 200000000, '2020-12-03 22:14:05', '2020-12-03 22:14:05', 20),
(16, 2, 8390300000, '2020-12-04 18:52:13', '2020-12-04 18:52:13', 23),
(17, 1, 26804000, '2020-12-04 08:09:02', '2020-12-04 08:09:02', 30),
(18, 1, 17500000, '2020-12-04 08:12:22', '2020-12-04 08:12:22', 26),
(18, 1, 26804000, '2020-12-04 08:12:22', '2020-12-04 08:12:22', 30),
(19, 1, 64700000, '2020-12-04 08:28:20', '2020-12-04 08:28:20', 33),
(19, 1, 6000000, '2020-12-04 08:28:20', '2020-12-04 08:28:20', 22),
(20, 1, 64700000, '2020-12-04 08:53:31', '2020-12-04 08:53:31', 33),
(21, 1, 64700000, '2020-12-04 09:03:27', '2020-12-04 09:03:27', 33),
(22, 1, 64700000, '2020-12-04 09:04:13', '2020-12-04 09:04:13', 33),
(23, 1, 64700000, '2020-12-04 09:06:58', '2020-12-04 09:06:58', 33),
(24, 1, 17500000, '2020-12-04 09:08:35', '2020-12-04 09:08:35', 26),
(25, 1, 64700000, '2020-12-04 09:25:30', '2020-12-04 09:25:30', 33),
(26, 1, 64700000, '2020-12-04 09:26:53', '2020-12-04 09:26:53', 33),
(27, 1, 6000000, '2020-12-04 14:44:12', '2020-12-04 14:44:12', 22),
(27, 1, 64700000, '2020-12-04 14:44:12', '2020-12-04 14:44:12', 33),
(28, 1, 17500000, '2020-12-04 15:42:40', '2020-12-04 15:42:40', 26);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `note` varchar(200) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `listhinhanh`
--

CREATE TABLE `listhinhanh` (
  `id_sp` int(255) UNSIGNED NOT NULL,
  `id_anh` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `listhinhanh`
--

INSERT INTO `listhinhanh` (`id_sp`, `id_anh`, `image`) VALUES
(1, 1, 'nhanvang.png'),
(1, 2, 'khuyentai1.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `title` varchar(200) NOT NULL,
  `context` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update-at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(255) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `id_type` int(10) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `unit_price` float NOT NULL,
  `promotion_price` float DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `new` int(11) NOT NULL,
  `star` int(1) NOT NULL,
  `trang_thai` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `id_type`, `description`, `unit_price`, `promotion_price`, `image`, `unit`, `new`, `star`, `trang_thai`, `updated_at`, `created_at`) VALUES
(20, 'ĐỒNG HỒ HUBLOT 2', 5, 'REFERENCE\r\nM124300-0001\r\nMODEL CASE\r\nOyster, 41 mm, Oystersteel\r\nBEZEL\r\ndạng bầu\r\nWATER-RESISTANCE\r\nKhả năng chống thấm nước lên đến mức 100m/330 feet\r\nMOVEMENT\r\nPerpetual, máy cơ, tự lên dây\r\nCALIBRE\r\n3230, Nhà sản xuất Rolex\r\nPOWER RESERVE\r\nXấp xỉ 70 tiếng\r\nBRACELET\r\nOyster, mối nối ba mảnh dạng phẳng\r\nDIAL\r\nCERTIFICATION\r\nĐộ chuẩn xác ưu việt (chứng nhận COSC + Rolex sau khi lắp đặt hoàn chỉnh)', 200000000, 150000000, 'dongho110.png', NULL, 1, 0, 'Hiện', '2020-12-04 18:58:48', '2020-12-02 20:59:37'),
(22, 'ENAMEL MEDUSA MEDALLION RING', 5, 'Gold tone ring with central Medusa Head set within colored enamel. All Versace Jewelry products are lead and nickel free. All the materials are hypoallergenic.', 6000000, NULL, 'PR0411_NUN3094.jpg', NULL, 1, 0, 'Hiện', '2020-12-04 07:30:54', '2020-12-03 18:34:37'),
(23, 'Đồng Hồ Rolex Cosmograph Daytona 116595rbowdp Rainbow Rolex', 5, 'Mã SP 116595RBOWDP\r\nXuất xứ Thụy Sỹ\r\nGiới tính Nam\r\nLoại máy Caliber Rolex 4130 - Trữ cót 72 giờ\r\nKích cỡ mặt số 40mm\r\nĐộ dày 12.63mm\r\nMàu vỏ Vàng Hồng\r\nChất liệu vỏ 18kt Rose Gold\r\nLoại dây 18kt Rose Gold\r\nLoại kính Sapphire\r\nChống nước 100m\r\nBảo hành 5 năm', 10000000000, 8390300000, '541f8d3e9602675c3e1389.jpg', NULL, 1, 0, 'Hiện', '2020-12-04 18:45:56', '2020-12-04 18:26:59'),
(24, 'Đồng hồ Rolex Oyster Perpetual 116238 Datejust 36', 5, 'Mã SP 116238\r\nXuất xứ Thụy Sĩ\r\nGiới tính Nam\r\nLoại máy Automatic Caliber 3135. 31 chân kính. Tần số dao động 28.800 vph. Trữ cót 48h\r\nKích cỡ mặt số 36 mm\r\nMàu vỏ Vàng\r\nChất liệu vỏ Vàng khối 18k\r\nLoại dây Kim loại\r\nLoại kính Sapphire\r\nChống nước 100 m\r\nBảo hành 5 năm toàn cầu', 741000000, 717000000, '541f8d3e9602675c3e1380.jpg', NULL, 1, 0, 'Hiện', '2020-12-04 18:43:31', '2020-12-04 18:28:20'),
(25, 'Đồng hồ Rolex Datejust 126231 Jubilee', 5, 'Xuất xứ Thụy Sỹ\r\nGiới tính Nam - nữ\r\nLoại máy Automatic Rolex Calibre 3235, 28.800 vph, 31 chân kính, 70 giờ trữ cót\r\nKích cỡ mặt số 36mm\r\nMàu vỏ Trắng - Vàng hồng\r\nChất liệu vỏ Thép - Vàng 18k\r\nLoại dây Kim loại\r\nLoại kính Sapphire\r\nChống nước 100m\r\nBảo hành 5 năm quốc tế', 299000000, NULL, '386.png', NULL, 1, 0, 'Hiện', '2020-12-04 18:29:29', '2020-12-04 18:29:29'),
(26, 'Nhẫn vàng cho nam', 2, 'Nhẫn đẹp sang trọng quý phái', 17500000, NULL, 'nhan-nam-dep-nhat-2019-trang-suc-da-quy59.jpg', NULL, 1, 0, 'Hiện', '2020-12-04 18:41:26', '2020-12-04 18:41:26'),
(27, 'Đồng hồ Rolex 126231-0013 Datejust 36mm Jubilee', 5, 'Mã SP 126231-0013\r\nXuất xứ Thụy Sỹ\r\nGiới tính Nam\r\nLoại máy Automatic Rolex Calibre 3235, 28.800 vph, 31 chân kính, 70 giờ trữ cót\r\nKích cỡ mặt số 36 mm\r\nMàu vỏ Trắng/Vàng hồng\r\nChất liệu vỏ Thép không gỉ/Vàng khối 18k\r\nLoại dây Kim loại\r\nLoại kính Sapphire\r\nChống nước 100 mét\r\nBảo hành 5 năm quốc tế', 258000000, NULL, '613.jpg', NULL, 1, 0, 'Hiện', '2020-12-04 18:54:05', '2020-12-04 18:54:05'),
(28, 'Đồng Hồ Rolex Gmt-Master Ii Automatic 126710blnr', 5, 'Mã SP 126710BLNR\r\nXuất xứ Thụy Sỹ\r\nGiới tính Nam\r\nLoại máy Caliber Rolex3285 - Trữ cót 70 giờ\r\nKích cỡ mặt số 40mm\r\nĐộ dày 11mm\r\nMàu vỏ Trắng\r\nChất liệu vỏ Thép\r\nLoại dây Thép\r\nLoại kính Sapphire\r\nChống nước 100m\r\nBảo hành 5 Năm', 381000000, 261261000, '750.jpg', NULL, 1, 0, 'Hiện', '2020-12-04 18:55:30', '2020-12-04 18:55:30'),
(29, 'NHẪN NỮ 085-1014R7020VC1', 5, 'Loại sản phẩm: Nhẫn nữ\r\n\r\nĐá chính:Kim cương trắng\r\nHình dạng: Round\r\n\r\nTrọng lượng (cts):0.34 cts\r\n\r\nĐá phụ:Kim cương trắng\r\n\r\nMàu:Vàng trắng\r\n\r\nĐộ tinh khiết:IF\r\n\r\nKiểm định:IGI\r\n\r\nKích thước (mm):4.48 mm\r\n\r\nChất liệu: Vàng 14k', 44557000, NULL, 'y78.png', NULL, 1, 0, 'Hiện', '2020-12-04 07:31:04', '2020-12-04 19:00:47'),
(30, 'NHẪN NỮ 0415R6804VA1', 2, 'Loại sản phẩm:Nhẫn kim cương \r\n\r\nĐá chính:Kim cương trắng\r\n\r\nMàu:Vàng trắng\r\n\r\nChất liệu:Vàng 18k', 26804000, NULL, 'g83.png', NULL, 1, 0, 'Hiện', '2020-12-04 19:03:59', '2020-12-04 19:03:59'),
(31, 'NHẪN KIM CƯƠNG 0714R7071VC1', 2, 'Loại sản phẩm: Nhẫn kim cương\r\n\r\nĐá chính:Kim cương trắng\r\n\r\nMàu:Vàng hồng\r\n\r\nChất liệu:Vàng 14k', 46826000, NULL, 'j15.png', NULL, 1, 0, 'Hiện', '2020-12-04 19:09:30', '2020-12-04 19:09:30'),
(32, 'NHẪN EMERALD GJR697', 2, 'Loại sản phẩm:Nhẫn, Nhẫn nữ\r\n\r\nĐá chính:Emerald\r\n\r\nĐá phụ:Kim cương tự nhiên\r\n\r\nMàu:Vàng trắng\r\n\r\nTrọng lượng đá chính:1.14\r\n\r\nChất liệu:Vàng 14k', 25890000, NULL, 'f70.jpg', NULL, 1, 0, 'Hiện', '2020-12-04 07:36:47', '2020-12-04 19:10:49'),
(33, 'MẶT DÂY KIM CƯƠNG DJP717', 1, 'Loại sản phẩm:Mặt dây\r\n\r\nĐá chính:Kim cương 8 Hearts & 8 Arrows\r\nHình dạng: Round\r\n\r\nMàu:Vàng trắng\r\n\r\nKiểm định:IGI\r\n\r\nChất liệu:Vàng 14k', 64700000, NULL, 'eee84.jpg', NULL, 1, 0, 'Hiện', '2020-12-04 07:28:35', '2020-12-04 07:28:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `link`, `image`) VALUES
(1, '2', 'daychuyen.jpg'),
(2, '3', 'trangsuc.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuoctinh`
--

CREATE TABLE `thuoctinh` (
  `id_loai` int(10) UNSIGNED NOT NULL,
  `id_thuoctinh` int(10) UNSIGNED NOT NULL,
  `tenthuoctinh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thuoctinh`
--

INSERT INTO `thuoctinh` (`id_loai`, `id_thuoctinh`, `tenthuoctinh`) VALUES
(1, 1, 'Mặt kim cương'),
(1, 2, 'Mặt trái tim '),
(1, 3, 'Dây chuyền vàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_product`
--

CREATE TABLE `type_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update-at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `type_product`
--

INSERT INTO `type_product` (`id`, `name`, `description`, `image`, `create_at`, `update-at`) VALUES
(1, 'Dây chuyền', 'Dây chuyền ', '', '2020-11-18 03:47:20', '2020-11-18 03:47:20'),
(2, 'Nhẫn', '', '', '2020-11-18 04:06:02', '2020-11-18 04:06:02'),
(3, 'Đá quý ', '', '', '2020-11-18 04:39:54', '2020-11-18 04:39:54'),
(5, 'Đồng hồ', '', '', '2020-11-18 05:31:37', '2020-11-18 05:31:37'),
(6, 'Bông tai', '', '', '2020-11-18 05:46:18', '2020-11-18 05:46:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `first_name` varchar(255) DEFAULT NULL,
  `email` char(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `rb_token` varchar(100) DEFAULT NULL,
  `gender` int(1) NOT NULL,
  `company` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `code_zip` int(6) NOT NULL,
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `phone` varchar(11) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `image` char(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`first_name`, `email`, `password`, `rb_token`, `gender`, `company`, `address`, `code_zip`, `country`, `city`, `updated_at`, `created_at`, `phone`, `last_name`, `user_type`, `image`) VALUES
('Trần', 'hainguyenc88@gmail.com', '$2y$10$IQJ7V6KDgyhiaWcf/cpWiuYhhxgmopCffsa0BJI5w/vLTYTG7.8Ca', NULL, 1, NULL, 'Hải thượng lãn ông, k6,p6', 98000, 'VN', 'ca mau', '2020-12-01 02:13:55', '2020-12-01 02:13:55', '0363757855', 'Dần', 'admin', ''),
('Nguyễn', 'hainguyency@gmail.com', '$2y$10$SXZf0ZxXQzpD/9w2vba3DOExu24rRG/d5Lf28ao5XiKh9SFTS0tcm', NULL, 1, NULL, '22222', 98000, 'Ind', 'Cần thơ', '2020-12-04 08:08:30', '2020-11-26 14:31:59', '0363757853', 'Minh Hải', '', 'ga11-removebg-preview63.png'),
('Lưu', 'hainguyenvk2@gmail.com', '$2y$10$XTV1QN9fTkyCSAiTFbChVOwPZXY0WGtZFovZOXIGDA4.SbUNpNB66', NULL, 1, NULL, 'Hải thượng lãn ông, k6,p6', 98000, NULL, 'ca mau', '2020-11-26 20:06:08', '2020-11-26 20:06:08', '0363757856', 'Linh', '', ''),
('Lưu', 'hainguyenvk@gmail.com', '$2y$10$YUctFTKGWakLi9TycmIDL.N44W5sJAr/BRvbWv/bn1LyQ7a5wKmdG', NULL, 1, NULL, 'Hải thượng lãn ông, k6,p6', 98000, NULL, 'ca mau', '2020-11-26 20:06:20', '2020-11-26 20:06:20', '0363757856', 'Linh', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD KEY `id_bill` (`id_bill`),
  ADD KEY `product` (`product`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `listhinhanh`
--
ALTER TABLE `listhinhanh`
  ADD PRIMARY KEY (`id_sp`,`id_anh`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Type_product` (`id_type`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thuoctinh`
--
ALTER TABLE `thuoctinh`
  ADD PRIMARY KEY (`id_loai`,`id_thuoctinh`);

--
-- Chỉ mục cho bảng `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(244) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `users` (`email`);

--
-- Các ràng buộc cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_ibfk_1` FOREIGN KEY (`product`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `Type_product` FOREIGN KEY (`id_type`) REFERENCES `type_product` (`id`);

--
-- Các ràng buộc cho bảng `thuoctinh`
--
ALTER TABLE `thuoctinh`
  ADD CONSTRAINT `thuoctinh_ibfk_1` FOREIGN KEY (`id_loai`) REFERENCES `type_product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
