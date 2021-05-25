-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 25, 2021 lúc 02:25 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_noithat`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinh_noithat`
--

CREATE TABLE `hinh_noithat` (
  `ma_hinh` int(11) NOT NULL,
  `ma_noi_that` int(11) NOT NULL,
  `hinh` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinh_noithat`
--

INSERT INTO `hinh_noithat` (`ma_hinh`, `ma_noi_that`, `hinh`) VALUES
(1, 2, 'assets/img/amtrainoxkhongghi.webp'),
(2, 13, 'assets/img/banxepgonnhetb01.webp'),
(4, 13, 'assets/img/banxepgonnhetb01-2.webp'),
(5, 14, 'assets/img/dendebangonnhepetite.webp'),
(6, 14, 'assets/img/dendebangonnhepetite-2.webp'),
(8, 15, 'assets/img/dentreosangtronghubert.webp'),
(9, 15, 'assets/img/dentreosangtronghubert-2.webp'),
(10, 16, 'assets/img/ghegobapbenhiconic.webp'),
(11, 16, 'assets/img/ghegobapbenhiconic-2.webp'),
(12, 17, 'assets/img/ghephongkhacharctander.webp'),
(13, 17, 'assets/img/ghephongkhacharctander-2.webp'),
(14, 18, 'assets/img/ghesofagiuongkeoroots.webp'),
(16, 18, 'assets/img/ghesofagiuongkeoroots-2.webp'),
(17, 19, 'assets/img/ghesofaphongkhachs003.webp'),
(18, 19, 'assets/img/ghesofaphongkhachs003-2.webp'),
(19, 20, 'assets/img/ghetualungphongkhachs004.webp'),
(20, 20, 'assets/img/ghetualungphongkhachs004-2.webp'),
(21, 21, 'assets/img/loabluetoothb&obeoplay.webp'),
(22, 21, 'assets/img/loabluetoothb&obeoplay-2.webp'),
(33, 28, 'assets/img/ghetrungtreooval.jpg'),
(35, 43, 'assets/img/thanggonhobut001.jpg'),
(36, 43, 'assets/img/thanggonhobut001-2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_noi_that`
--

CREATE TABLE `loai_noi_that` (
  `ma_loai` int(10) NOT NULL,
  `ten_loai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_noi_that`
--

INSERT INTO `loai_noi_that` (`ma_loai`, `ten_loai`, `mo_ta`) VALUES
(1, 'Nội thất phòng khách', '...'),
(2, 'Nội thất phòng ngủ', '...'),
(3, 'Phụ kiện trang trí', '...');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `noi_that`
--

CREATE TABLE `noi_that` (
  `ma_noi_that` int(11) NOT NULL,
  `ma_loai` int(10) NOT NULL,
  `ten_noi_that` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `gia_noi_that` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `mo_ta` varchar(5000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `noi_that`
--

INSERT INTO `noi_that` (`ma_noi_that`, `ma_loai`, `ten_noi_that`, `gia_noi_that`, `quantity`, `mo_ta`) VALUES
(2, 3, 'Ấm trà inox không ghỉ', 890000, 27, 'Khung sườn: gỗ dầu (Việt Nam) đã xử lý mối mọt theo tiêu chuẩn xuất khẩu Châu Âu\r\nNệm mút: nhập khẩu từ Malaysia\r\nChỉ may: nhập khẩu từ Anh Quốc\r\nDa/ PVC/ Vải: Da Bò nhập khẩu từ Ý/ PVC nhập khẩu từ Thái Lan/ Vải nhập khẩu từ Hàn Quốc'),
(13, 3, 'Bàn xếp gọn nhẹ TB01', 1300000, 32, 'Khung sườn: gỗ dầu (Việt Nam) đã xử lý mối mọt theo tiêu chuẩn xuất khẩu Châu Âu\r\nNệm mút: nhập khẩu từ Malaysia\r\nChỉ may: nhập khẩu từ Anh Quốc\r\nDa/ PVC/ Vải: Da Bò nhập khẩu từ Ý/ PVC nhập khẩu từ Thái Lan/ Vải nhập khẩu từ Hàn Quốc'),
(14, 2, 'Đèn để bàn gọn nhẹ Petite', 690000, 3, 'Khung sườn: gỗ dầu (Việt Nam) đã xử lý mối mọt theo tiêu chuẩn xuất khẩu Châu Âu\r\nNệm mút: nhập khẩu từ Malaysia\r\nChỉ may: nhập khẩu từ Anh Quốc\r\nDa/ PVC/ Vải: Da Bò nhập khẩu từ Ý/ PVC nhập khẩu từ Thái Lan/ Vải nhập khẩu từ Hàn Quốc'),
(15, 3, 'Đèn treo sang trọng Hubert', 1200000, 2, 'Khung sườn: gỗ dầu (Việt Nam) đã xử lý mối mọt theo tiêu chuẩn xuất khẩu Châu Âu\r\nNệm mút: nhập khẩu từ Malaysia\r\nChỉ may: nhập khẩu từ Anh Quốc\r\nDa/ PVC/ Vải: Da Bò nhập khẩu từ Ý/ PVC nhập khẩu từ Thái Lan/ Vải nhập khẩu từ Hàn Quốc'),
(16, 3, 'Ghế gỗ bập bênh Iconic', 700000, 0, 'Khung sườn: gỗ dầu (Việt Nam) đã xử lý mối mọt theo tiêu chuẩn xuất khẩu Châu Âu\r\nNệm mút: nhập khẩu từ Malaysia\r\nChỉ may: nhập khẩu từ Anh Quốc\r\nDa/ PVC/ Vải: Da Bò nhập khẩu từ Ý/ PVC nhập khẩu từ Thái Lan/ Vải nhập khẩu từ Hàn Quốc'),
(17, 1, 'Ghế phòng khách Arctander', 799000, 30, 'Khung sườn: gỗ dầu (Việt Nam) đã xử lý mối mọt theo tiêu chuẩn xuất khẩu Châu Âu\r\nNệm mút: nhập khẩu từ Malaysia\r\nChỉ may: nhập khẩu từ Anh Quốc\r\nDa/ PVC/ Vải: Da Bò nhập khẩu từ Ý/ PVC nhập khẩu từ Thái Lan/ Vải nhập khẩu từ Hàn Quốc'),
(18, 2, 'Ghế sofa giường kéo Roots', 7200000, 0, 'Khung sườn: gỗ dầu (Việt Nam) đã xử lý mối mọt theo tiêu chuẩn xuất khẩu Châu Âu\r\nNệm mút: nhập khẩu từ Malaysia\r\nChỉ may: nhập khẩu từ Anh Quốc\r\nDa/ PVC/ Vải: Da Bò nhập khẩu từ Ý/ PVC nhập khẩu từ Thái Lan/ Vải nhập khẩu từ Hàn Quốc'),
(19, 1, 'Ghế Sofa phòng khách S003', 6800000, 32, 'Khung sườn: gỗ dầu (Việt Nam) đã xử lý mối mọt theo tiêu chuẩn xuất khẩu Châu Âu\r\nNệm mút: nhập khẩu từ Malaysia\r\nChỉ may: nhập khẩu từ Anh Quốc\r\nDa/ PVC/ Vải: Da Bò nhập khẩu từ Ý/ PVC nhập khẩu từ Thái Lan/ Vải nhập khẩu từ Hàn Quốc'),
(20, 1, 'Ghế tựa lưng phòng khách S004', 2400000, 84, 'Khung sườn: gỗ dầu (Việt Nam) đã xử lý mối mọt theo tiêu chuẩn xuất khẩu Châu Âu\r\nNệm mút: nhập khẩu từ Malaysia\r\nChỉ may: nhập khẩu từ Anh Quốc\r\nDa/ PVC/ Vải: Da Bò nhập khẩu từ Ý/ PVC nhập khẩu từ Thái Lan/ Vải nhập khẩu từ Hàn Quốc'),
(21, 3, 'Loa Bluetooth B&O Beoplay', 4550000, 30, 'Cấu tạo vỏ máy\r\nToàn bộ bề mặt phía trên của chiếc loa được phủ một lớp lưới nhôm khá là đẹp và chắc chắn,\r\nphía dưới được bọc bởi một lớp nhựa polyme có khả năng chống Splash nước và chống bụi,\r\ndù cho loa bị va chạm và trầy xước vẫn bảo vệ tốt các nút điều khiển cũng như loa bên trong,\r\nhơn nữa loa B&O BEOPLAY A1 còn được phủ một lớp cao su mềm dưới đáy giúp loa có thể bám dính trên\r\nnhiều bề mặt khác nhau.\r\n\r\nCấu tạo màng loa\r\nB&O có cấu tạo màng loa đơn nhưng với công suất cực đại 2 x 140W nên âm thanh của loa đạt mức độ lớn \r\nhơn so với kích thước thực tại của nó. Vì vậy mà tuy bé nhưng chiếc loa này vẫn mang đến sự sôi động\r\n trong căn nhà bạn. \r\n\r\nBộ trình điều chỉnh thiết bị.\r\nLoa bluetooth B&O Beoplay A1 có kiểu dáng tròn độc đáo được tích hợp dây đeo chắc chắn,\r\ntrọng lượng chỉ 600g cùng kích thước nhỏ gọn nên rất dễ dàng bỏ vào túi và mang theo bên mình.\r\nChống bắn nước, chống bụi\r\n\r\nLoa có khả năng chống bắn nước và chống bụi khi được đóng gói với vỏ hợp kim nhôm,\r\ncác nút tính năng đều được bao phủ bởi lớp vỏ bảo vệ bằng polymer có khả năng chịu được va đập và chống\r\n thấm nước tốt.\r\nÂm thanh vòm 360 độ'),
(28, 3, 'Ghế trứng treo Oval', 1300000, 8, 'Khung sườn: gỗ dầu (Việt Nam) đã xử lý mối mọt theo tiêu chuẩn xuất khẩu Châu Âu\r\nNệm mút: nhập khẩu từ Malaysia\r\nChỉ may: nhập khẩu từ Anh Quốc\r\nDa/ PVC/ Vải: Da Bò nhập khẩu từ Ý/ PVC nhập khẩu từ Thái Lan/ Vải nhập khẩu từ Hàn Quốc'),
(43, 3, 'Thang gỗ nhỏ But001', 650000, 9, 'Khung sườn: gỗ dầu (Việt Nam) đã xử lý mối mọt theo tiêu chuẩn xuất khẩu Châu Âu\r\nNệm mút: nhập khẩu từ Malaysia\r\nChỉ may: nhập khẩu từ Anh Quốc\r\nDa/ PVC/ Vải: Da Bò nhập khẩu từ Ý/ PVC nhập khẩu từ Thái Lan/ Vải nhập khẩu từ Hàn Quốc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(500) NOT NULL,
  `note` text NOT NULL,
  `total` int(11) NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL,
  `ma_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `address`, `note`, `total`, `created_time`, `last_updated`, `ma_status`) VALUES
(37, 'Sử Nguyễn Minh Triết', '0941206924', 'Vĩnh Thuận, Kiên Giang', '', 28100000, 1621662864, 1621662864, 1),
(39, 'Trương Văn Vàng', '0908810838', 'Châu Phú, An giang', '', 1780000, 1621685623, 1621685623, 1),
(41, 'Nguyễn Minh Tiến', '0123456789', 'Ninh Kiều, Cần Thơ', '', 27150000, 1621689109, 1621689109, 1),
(42, 'Tràn Bửu Tài', '0858674212', 'Ô Môn, Cần Thơ', '', 31148000, 1621689184, 1621689184, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_time`, `last_updated`) VALUES
(37, 37, 13, 5, 1300000, 1621662864, 1621662864),
(38, 37, 18, 3, 7200000, 1621662864, 1621662864),
(40, 39, 2, 2, 890000, 1621685623, 1621685623),
(42, 41, 2, 5, 890000, 1621689109, 1621689109),
(43, 41, 15, 2, 1200000, 1621689109, 1621689109),
(44, 41, 16, 1, 700000, 1621689109, 1621689109),
(45, 41, 18, 2, 7200000, 1621689109, 1621689109),
(46, 41, 28, 3, 1300000, 1621689109, 1621689109),
(47, 41, 43, 2, 650000, 1621689109, 1621689109),
(48, 42, 17, 2, 799000, 1621689184, 1621689184),
(49, 42, 19, 1, 6800000, 1621689184, 1621689184),
(50, 42, 21, 4, 4550000, 1621689184, 1621689184),
(51, 42, 28, 3, 1300000, 1621689184, 1621689184),
(52, 42, 43, 1, 650000, 1621689184, 1621689184);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status_orders`
--

CREATE TABLE `status_orders` (
  `ma_status` int(11) NOT NULL,
  `name_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `status_orders`
--

INSERT INTO `status_orders` (`ma_status`, `name_status`) VALUES
(0, 'Chưa thanh toán'),
(1, 'Đã thanh toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `email`, `phone`, `level`) VALUES
(3, 'Sử Nguyễn Minh Triết', 'admin', '$2y$10$NE.BTreiBisnq9S7Qin7VuKA8WzHGDcuHE5PxtFL/pzr1TgiB5bJe', 'bindsu63@gmail.com', '0941206924', 1),
(4, 'Nguyễn Văn A', 'khachhang', '$2y$10$tngrKll/.mT/PCmzhOyMY.IRIt2T1Q0Y96.O2n5bNGZOYMF4BA72q', 'khach@gmail.com', '0916420150', 0),
(187, 'Trần Bửu Tài', 'tranbuutai', '$2y$10$ExsyY74QpZbx9yL.xKXzp.8wxbpSlY1OLEHEjB09KD/sRznWG7zzK', 'tranbuutai@gmail.com', '0858674212', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hinh_noithat`
--
ALTER TABLE `hinh_noithat`
  ADD PRIMARY KEY (`ma_hinh`),
  ADD KEY `ma_noi_that` (`ma_noi_that`);

--
-- Chỉ mục cho bảng `loai_noi_that`
--
ALTER TABLE `loai_noi_that`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `noi_that`
--
ALTER TABLE `noi_that`
  ADD PRIMARY KEY (`ma_noi_that`),
  ADD UNIQUE KEY `ten_noi_that` (`ten_noi_that`),
  ADD KEY `ma_loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_status` (`ma_status`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `status_orders`
--
ALTER TABLE `status_orders`
  ADD PRIMARY KEY (`ma_status`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hinh_noithat`
--
ALTER TABLE `hinh_noithat`
  MODIFY `ma_hinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT cho bảng `loai_noi_that`
--
ALTER TABLE `loai_noi_that`
  MODIFY `ma_loai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=638;

--
-- AUTO_INCREMENT cho bảng `noi_that`
--
ALTER TABLE `noi_that`
  MODIFY `ma_noi_that` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `status_orders`
--
ALTER TABLE `status_orders`
  MODIFY `ma_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hinh_noithat`
--
ALTER TABLE `hinh_noithat`
  ADD CONSTRAINT `FK_hinh_noi_that` FOREIGN KEY (`ma_noi_that`) REFERENCES `noi_that` (`ma_noi_that`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `noi_that`
--
ALTER TABLE `noi_that`
  ADD CONSTRAINT `FK_loai_noi_that_noi_that` FOREIGN KEY (`ma_loai`) REFERENCES `loai_noi_that` (`ma_loai`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_order_status` FOREIGN KEY (`ma_status`) REFERENCES `status_orders` (`ma_status`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `noi_that` (`ma_noi_that`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
