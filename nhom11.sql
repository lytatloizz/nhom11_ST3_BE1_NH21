-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2022 lúc 09:25 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom11`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8_vietnamese_ci NOT NULL,
  `content` varchar(500) COLLATE utf8_vietnamese_ci NOT NULL,
  `price` int(11) NOT NULL,
  `day_trading` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `name`, `content`, `price`, `day_trading`) VALUES
(12, 'tuan', 'Điện thoại iPhone 11 64GB,Laptop Asus ZenBook UX325EA i5 1135G7/8GB/512GB/OLED/Cáp/Túi/Win10 (KG363T),Samsung Galaxy S21  5G 256GB,Lenovo IdeaCentre AIO 3 24ITL6 i5 1135G7/8GB/256GB/23.8,', 100350000, '2021-12-21 02:42:06'),
(13, 'tuan', 'Điện thoại iPhone 11 64GB,Laptop Asus ZenBook UX325EA i5 1135G7/8GB/512GB/OLED/Cáp/Túi/Win10 (KG363T),Samsung Galaxy S21  5G 256GB,Lenovo IdeaCentre AIO 3 24ITL6 i5 1135G7/8GB/256GB/23.8,', 100350000, '2021-12-21 02:44:16'),
(14, 'tuan', 'LG Smart TV 50UP7750PTC,Samsung Galaxy Note 20 Ultra 5G,', 35990000, '2021-12-21 02:52:45'),
(16, 'haitu123', 'Điện thoại iPhone 11 64GB,', 16990000, '2021-12-21 03:48:43'),
(18, 'haitu123', 'Laptop Asus ZenBook UX325EA i5 1135G7/8GB/512GB/OLED/Cáp/Túi/Win10 (KG363T),', 23790000, '2021-12-21 03:52:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufactures`
--

CREATE TABLE `manufactures` (
  `manu_id` int(11) NOT NULL,
  `manu_name` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`) VALUES
(2, 'Lenovo'),
(3, 'Samsumg'),
(4, 'LG'),
(5, 'Asus');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `manu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `feature` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `image`, `description`, `feature`, `created_at`) VALUES
(1, 'Điện thoại iPhone 11 64GB', 1, 1, 16990000, 'iphone-11-trang-1-2-org.jpg', 'Tháng 09/2019, Apple đã chính thức trình làng bộ 3 siêu phẩm iPhone 11, trong đó phiên bản iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó.', 1, '2021-12-05 05:22:39'),
(3, 'Laptop Asus ZenBook UX325EA i5 1135G7/8GB/512GB/OLED/Cáp/Túi/Win10 (KG363T)', 5, 2, 23790000, 'asus-zenbook-ux325ea-i5-kg363t-1-org.jpg', 'Chắc chắn hơn bao giờ hết nhờ độ bền chuẩn quân đội, laptop Asus Zenbook UX325EA (KG363T) sở hữu kiểu dáng tinh tế cùng hiệu năng tối ưu nhờ CPU Intel thế hệ 11, giúp bạn xử lý nhanh gọn và chính xác', 1, '2021-12-21 00:19:46'),
(8, 'Lenovo IdeaCentre AIO 3 24ITL6 i5 1135G7/8GB/256GB/23.8', 2, 5, 20590000, 'lenovo-ideacentre-aio-3-24itl6-i5-f0g0009avn-600x600.jpg', 'Lenovo IdeaCentre AIO 3 24ITL6 (F0G0009AVN) là phiên bản máy tính nguyên bộ All-in-one khi được tích hợp đầy đủ các linh kiện đa năng như loa, CPU, camera,... vào chung một màn hình lớn nhưng vẫn sở h', 1, '2021-12-21 00:19:30'),
(41, 'ASUS ROG Phone 5', 5, 1, 22900000, 'asus-rogphone-5.jpg', 'Với những game thủ chuyên nghiệp mong muốn sở hữu một chiếc smartphone gaming có hiệu năng \"siêu cấp\" cho những tựa game.', 0, '2021-10-19 09:58:32'),
(42, 'ASUS ROG Phone 3', 5, 1, 22900000, 'asus-rogphone-3.jpg', 'ROG Phone 3 mang trên mình những công nghệ tiên tiến và thiết kế hầm hố nhất. Với sức mạnh vô đối cùng thời lượng pin khủng.', 1, '2021-12-05 05:23:32'),
(43, 'Apple Macbook Pro M1 2020', 1, 2, 44990000, 'apple-macbook-pro-m1-2020.jpg', 'Apple Macbook Pro M1 2020 được nâng cấp với bộ vi xử lý mới cực kỳ mạnh mẽ, chiếc laptop này sẽ phục vụ tốt cho công việc của bạn, đặc biệt cho lĩnh vực đồ họa, kỹ thuật.', 1, '2021-12-21 00:19:14'),
(44, 'Iphone 13 Pro Max', 1, 1, 33900000, 'iphone-13-pro-max.jpg', 'Chiếc điện thoại đắt đỏ và cùi bắp dành cho con nghiện Táo.', 0, '2021-10-19 09:58:32'),
(45, 'LG Gram 17 i7 1165G7 (12Z90P-G.AHH78A5', 4, 2, 54890000, 'lg-gram-17-i7-17z90pgah.jpg', 'Một chiếc laptop LG với màn hình cực đẹp dành cho các fanboy có điều kiện.', 0, '2021-12-01 09:28:07'),
(46, 'LG Smart TV NanoCell 55NANO86TPA', 4, 4, 21990000, 'lg-smarttv-55nano86tna.jpg', 'Ti vi LG với màn hình cực đại hứng trọn mọi góc nhìn', 0, '2021-10-19 09:58:32'),
(47, 'LG Smart TV 50UP7750PTC', 4, 4, 14990000, 'lg-smarttv-up7750ptc.jpg', 'Phiên bản rẻ tiền nhưng vẫn đủ ', 0, '2021-10-19 09:58:32'),
(48, 'Samsun Galaxy A52S 5G', 3, 3, 10190000, 'samsung-galaxy-a52s-5g.jpg', 'điện thoại mới ra mắt năm 2020 của Samsung', 0, '2021-12-21 00:18:59'),
(49, 'Samsung Galaxy S20 FE', 3, 3, 129900000, 'samsung-galaxy-s20-fan-edition.jpg', 'Chiếc điện thoại S20 phiên bản kỷ niệm dành cho Samsung fan', 0, '2021-12-21 00:18:51'),
(50, 'Smart Tivi Samsung 32 inch UA32T4300', 3, 3, 7600000, 'samsung-smarttv-ua32t4300.jpg', 'Smart Tivi Samsung 32 inch UA32T4300 có thiết kế đẹp mắt, trang nhã giúp nâng tầm không gian sống, mang đến trải nghiệm hình ảnh phong phú.', 1, '2021-12-21 00:18:31'),
(51, 'Samsung Galaxy Note 20 Ultra 5G', 3, 1, 21000000, 'samsung-galaxy-note20-ultra-5g.jpg', 'mẫu điện thoại đẹp mắt của nhà Sam', 1, '2021-12-01 09:11:09'),
(52, 'Samsung Galaxy S21  5G 256GB', 3, 1, 5000000, 'samsung-galaxy-s21-plus-256gb.jpg', 'mẫu điện thoại cao cấp của nhà Sam', 1, '2021-12-04 23:39:38'),
(59, 'nhom11', 8, 1, 100000, '1-1-org-org.jpg', 'adsdawdwasdadww', 1, '2021-12-21 01:21:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

CREATE TABLE `protypes` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'Mobile'),
(2, 'Laptop'),
(3, 'Tablet'),
(4, 'Tivi'),
(5, 'Computer');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id_users` int(8) NOT NULL,
  `username_users` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password_users` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fullname_users` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email_users` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role_users` varchar(13) CHARACTER SET utf8 NOT NULL,
  `question_users` varchar(100) CHARACTER SET utf8 NOT NULL,
  `answer_users` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_users`, `username_users`, `password_users`, `fullname_users`, `email_users`, `role_users`, `question_users`, `answer_users`) VALUES
(1, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 'Ly Tat Loi', '', 'admin', 'về php?', 'b58352556eb190eba6f9bfc28c68fdff'),
(2, 'admin2', 'c84258e9c39059a89ab77d846ddab909', 'Bui Tan Minh', '', 'admin', 'về php?', 'b58352556eb190eba6f9bfc28c68fdff'),
(3, 'Sontungmtp', '59bd505e1adf4de462f6e13e7e2fd4d6', 'Nguyen Thanh Tung', '', 'normal', 'Hải Tú ... lép?', '840aa8c707c79545f8117731b17475e3'),
(6, 'jonnydang123', 'ba6bc6b201a8e3e18a1579418d4e6aac', 'Jonny Dang', '', 'normal', 'một cộng hai bằng mấy', '07159c47ee1b19ae4fb9c40d480856c4'),
(7, 'haitu123', '033372e1fb5b522c61bf6ab4ab54469c', 'Hải tú', 'buitanminh@gmail.com', 'normal', 'một công hai bằng mấy', '07159c47ee1b19ae4fb9c40d480856c4'),
(8, 'admin3', '0192023a7bbd73250516f069df18b500', 'Trần Thanh Tuấn', '', 'admin', 'la thay cua ai?', '84ab36b2995bb3949db34038a2b24c64'),
(12, 'tuan', '25d55ad283aa400af464c76d713c07ad', 'Trần Thanh Tuấn', 'tranthanhtuan.no1@gmail.com', 'normal', 'sau a la', '92eb5ffee6ae2fec3ad71c777531578f'),
(15, 'lytatloi', '2c3065cd74cd0c24e09f19d388b13dad', 'Lý Tất Lợi', 'lytatloizz.no1@gmail.com', 'normal', ':)', 'c4f531c3970ac07ba1f678764af59cd0'),
(16, 'tuan1', '25d55ad283aa400af464c76d713c07ad', 'Trần Thanh Tuấn', 'tranthanhtuan.no1@gmail.com', 'normal', 'sau a la', '92eb5ffee6ae2fec3ad71c777531578f'),
(17, 'nhom11', '25d55ad283aa400af464c76d713c07ad', 'Trần Thanh Tuấn', 'tranthanhtuan.no1@gmail.com', 'normal', 'la thay cua ai?', '84ab36b2995bb3949db34038a2b24c64');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `manufactures`
--
ALTER TABLE `manufactures`
  ADD PRIMARY KEY (`manu_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `protypes`
--
ALTER TABLE `protypes`
  ADD PRIMARY KEY (`type_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `username_users` (`username_users`),
  ADD UNIQUE KEY `id_users` (`id_users`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `manufactures`
--
ALTER TABLE `manufactures`
  MODIFY `manu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `protypes`
--
ALTER TABLE `protypes`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
