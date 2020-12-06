-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2020 lúc 01:46 PM
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
  `id` int(10) UNSIGNED NOT NULL,
  `id_customer` char(50) NOT NULL,
  `date_order` date NOT NULL,
  `total` double NOT NULL,
  `payment` varchar(200) NOT NULL,
  `note` varchar(500) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` double NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id_sp` int(10) UNSIGNED NOT NULL,
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
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `id_type` int(10) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `unit_price` float NOT NULL,
  `promotion_price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp(),
  `new` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `id_type`, `description`, `unit_price`, `promotion_price`, `image`, `unit`, `create_at`, `update_at`, `new`) VALUES
(1, 'Dây chuyền kim cương', 1, 'Dây chuyền xuất xứ từ Sing ga pore, đẳng cấp quý phái và sang trọng', 15000000, 0, 'kimcuong.jpg', '', '2020-11-18 03:50:19', '2020-11-18 03:50:19', 1),
(2, 'Nhẫn kim cương BigStone', 2, 'Những viên kim cương ở độ tinh khiết này có chứa những mảnh nhỏ hoặc rất nhỏ có thể nhìn thấy dưới kính phóng đại x10 và không thể nhìn thấy bằng mắt thường.', 3500000000, 3200000000, 'kimcuong.png', '', '2020-11-18 04:08:02', '2020-11-18 04:08:02', 1),
(4, 'Đá Sapphire Vàng', 3, 'Rất Tốt - AA : Tạp chất nhỏ hoặc tinh thể nhỏ bên trong chỉ có thể nhìn thấy bằng cách kiểm tra cẩn thận, nhưng không phải là vấn đề nghiêm trọng.', 70099000, 6000000, 'nhanvang.png', '', '2020-11-18 04:43:36', '2020-11-18 04:43:36', 1),
(5, 'Đồng hồ vàng Lobinni', 5, 'Nhãn hiệu LOBINNI\r\n\r\nMã sản phẩm No.9021-1\r\n\r\nGiới tính Nam\r\n\r\nKiểu máy Automatic (Máy Cơ)\r\n\r\nĐường kính mặt 40 mm\r\n\r\nĐộ dày 11,3 mm\r\n\r\nChất liệu vỏ Thép không gỉ 316L\r\n\r\nChất liệu dây Thép không gỉ 316L\r\n\r\nChất liệu mặt kính Sapphire\r\n\r\nKhả năng chịu nước 5 ATM\r\n\r\nBảo hành 24 tháng\r\n\r\nĐẶT MUA\r\n', 7300000, 6000000, 'dongho1.png', '', '2020-11-18 05:39:33', '2020-11-18 05:39:33', 1),
(6, 'Bông tai vàng PNJ', 6, 'Dòng trang sức ECZ - Excellent Cubic Zirconia của PNJ được làm từ vàng 10K (41,6% vàng nguyên chất) và đá Swarovski Zirconia nhập khẩu chính từ SWAROVSKI GEMTM .Những viên đá Swarovski Zirconia có độ trong suốt, cắt mài hoàn hảo và tán sắc rực rỡ như kim cương sẽ mang đến một vẻ đẹp cuốn hút, hiện đại và sang trọng.', 2239000, 2000000, 'khuyentai1.png', '', '2020-11-18 05:47:47', '2020-11-18 05:47:47', 1);

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
  `last_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`first_name`, `email`, `password`, `rb_token`, `gender`, `company`, `address`, `code_zip`, `country`, `city`, `updated_at`, `created_at`, `phone`, `last_name`) VALUES
('Nguyễn MInh Hải', 'hainguyency@gmail.com', '$2y$10$SXZf0ZxXQzpD/9w2vba3DOExu24rRG/d5Lf28ao5XiKh9SFTS0tcm', NULL, 1, NULL, 'Hải thượng lãn ông, k6,p6', 98000, NULL, 'ca mau', '2020-11-26 14:31:59', '2020-11-26 14:31:59', '0363757853', ''),
('Lưu', 'hainguyenvk2@gmail.com', '$2y$10$XTV1QN9fTkyCSAiTFbChVOwPZXY0WGtZFovZOXIGDA4.SbUNpNB66', NULL, 1, NULL, 'Hải thượng lãn ông, k6,p6', 98000, NULL, 'ca mau', '2020-11-26 20:06:08', '2020-11-26 20:06:08', '0363757856', 'Linh'),
('Lưu', 'hainguyenvk@gmail.com', '$2y$10$YUctFTKGWakLi9TycmIDL.N44W5sJAr/BRvbWv/bn1LyQ7a5wKmdG', NULL, 1, NULL, 'Hải thượng lãn ông, k6,p6', 98000, NULL, 'ca mau', '2020-11-26 20:06:20', '2020-11-26 20:06:20', '0363757856', 'Linh');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_bill` (`id_bill`);

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
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`id`) REFERENCES `bill_detail` (`id`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `users` (`email`);

--
-- Các ràng buộc cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_ibfk_1` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id`);

--
-- Các ràng buộc cho bảng `listhinhanh`
--
ALTER TABLE `listhinhanh`
  ADD CONSTRAINT `listhinhanh_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `products` (`id`);

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
