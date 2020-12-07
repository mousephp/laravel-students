-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 04, 2019 lúc 11:07 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlyhocsinh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_01_011957_create_student_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `student_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_age` datetime NOT NULL,
  `student_class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_class_teacher` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `students`
--

INSERT INTO `students` (`student_id`, `student_image`, `student_name`, `student_age`, `student_class`, `student_class_teacher`, `student_address`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'gNpV_masieu.jpg', 'Mã siêu', '1990-05-09 00:00:00', 'Bắn súng', 'Thầy pack', 'Phú thọ', NULL, '2019-12-01 10:06:11', '2019-12-02 19:26:19'),
(2, '1sIk_giacatluong.jpg', 'Gia cát lượng', '2014-05-09 00:00:00', 'Lớp 10', 'Lý nhã kỳ', 'Vũng tàu', NULL, '2019-12-01 10:07:06', '2019-12-01 21:50:54'),
(3, '3pyg_dienvi.jpg', 'Điển vy', '2014-05-09 00:00:00', 'tin2  k9', 'Hồ ngọc hà', 'Hà nội', NULL, '2019-12-01 10:07:46', '2019-12-01 21:52:49'),
(4, 'ZD5a_dieuthuyen.jpg', 'Điêu thuyền', '2014-05-09 00:00:00', 'Lớp mẫu giáo', 'Điêu thuyền', 'Hải phòng', NULL, '2019-12-01 10:10:40', '2019-12-01 20:59:24'),
(5, 'wHZ7_hoxanhi.jpg', 'Hồ xa nhi', '2014-05-09 00:00:00', 'tin2  k9', 'Thúy kiều', 'Hồ xa nhi', NULL, '2019-12-01 10:13:28', '2019-12-01 19:02:06'),
(6, 'mtm5_huachu.jpg', 'Hứa chử', '2015-10-28 00:00:00', 'Lớp võ tiểu học', 'Thúy vân', 'Vĩnh phúc', NULL, '2019-12-01 10:13:55', '2019-12-01 21:00:18'),
(7, 'E:\\xampp\\tmp\\php9669.tmp', 'Đỗ tùng', '2018-10-28 00:00:00', 'tin2  k9', 'Tăng thanh hà', 'Long biên', NULL, '2019-12-01 10:15:17', '2019-12-01 21:53:24'),
(8, 'swqm_dienvi.jpg', 'Đỗ tùng', '2018-10-28 00:00:00', 'tin2  k9', 'Hằng nga', 'bo thay', NULL, '2019-12-01 10:18:35', '2019-12-01 13:56:45'),
(9, 'pYm1_lubo.jpg', 'Lữ bố', '2018-10-28 00:00:00', 'tin2  k9', 'Trâm anh', 'Đà nẵng', NULL, '2019-12-01 10:20:24', '2019-12-01 21:49:48'),
(10, 'TbTC_tonquyen.jpg', 'Tôn quyền', '2018-10-28 00:00:00', 'tin2  k9', 'Ngọc hân', 'Tây ninh', NULL, '2019-12-01 10:21:19', '2019-12-01 19:32:01'),
(11, 'E:\\xampp\\tmp\\php9789.tmp', 'Đỗ tùng', '2018-09-26 00:00:00', 'tin2  k9', 'Hằng nga', 'abc', '2019-12-01 19:18:31', '2019-12-01 10:21:51', '2019-12-01 19:18:31'),
(12, 'zZ54_dieuthuyen.jpg', 'Điêu thuyền', '2013-07-24 00:00:00', 'Lớp người mẫu', 'Võ tòng', 'Đồ sơn', NULL, '2019-12-01 10:23:24', '2019-12-01 21:03:19'),
(13, '', 'Đỗ tùng', '2017-11-28 00:00:00', 'tin2  k9', 'Hằng nga', 'bfdb', '2019-12-01 19:25:36', '2019-12-01 10:46:19', '2019-12-01 19:25:36'),
(14, '7W5O_dienvi.jpg', 'Cung le', '2016-12-26 00:00:00', 'tin2  k9', 'Hằng nga', 'ADXS', '2019-12-01 19:24:13', '2019-12-01 10:54:55', '2019-12-01 19:24:13'),
(15, 'pW5w_vungchieuquan.jpg', 'Vương chiêu quân', '1998-04-14 00:00:00', 'Công nghệ phần mền', 'Hoàng thùy linh', 'Cầu giấy', NULL, '2019-12-01 19:33:39', '2019-12-01 19:33:39'),
(16, 'YgDD_thanhlong.jpg', 'Thành long', '1949-04-16 00:00:00', 'Lớp 12', 'Cách cách', 'Cần thơ', NULL, '2019-12-01 21:42:58', '2019-12-01 21:42:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dotung', 'admin@gmail.com', '$2y$10$frVyZ1ROOXTa72Fbf9775Ohrpvho9FrAYED6M3Goe1plHHPi2FZ22', NULL, 'MIZAxImMfXrgJWx4958QfCdGbho87Kg4VjqF9AZOKqiwUG7flMz6V3qb7EhO', '2019-12-01 09:59:45', '2019-12-03 00:46:48'),
(2, 'TonTrungSon', 'tontrungson@gmail.com', '$2y$10$bFaG31X.3wW8Nx3dLnP/zOpAe3MlqBfgu0s6TKLPuNlu/wwV8q7WS', NULL, 'x3CDESURamk2xG2oSMm8BbPqc7zm3GpRnaONV14gEnkY9d1iXLQdVZtDypYt', '2019-12-01 19:35:12', '2019-12-02 18:33:03'),
(3, 'DanVinhHung', 'danvinhhung@gmail.com', '$2y$10$DnyoOsei7senY6Hdq7zbJ.aOadFxkRStMrHjzxpxbRGAs/pPMkhI2', NULL, NULL, '2019-12-01 19:37:25', '2019-12-01 19:37:25'),
(6, 'aaaaa', 'tontrungson1@gmail.com', '$2y$10$0uCdolSJ81/YuMCsDjU13eSn7uPC9ji.QCnM8rXlPHc8scdHXHzvG', NULL, 'xEXU2e4w4LXcuceIofHAZ8qEbKUTGgvMLWjDqBDune8XSV5XcK9yJNpsC1ps', '2019-12-01 19:39:45', '2019-12-02 20:05:16'),
(8, 'Tonggiang', 'tonggiang@gmail.com', '$2y$10$PaeSCLWPPS7jlIvqOQ2znub2Djf37EfVcTBmmwq0Xe.eaVGAH9igS', NULL, NULL, '2019-12-03 02:41:31', '2019-12-03 02:41:31'),
(9, 'Lylienket', 'lylienket@gmail.com', '$2y$10$1oARuGjqFQjQE.9mcuR72OesBNqQZvOAtwrodEjPoYUamvwrdZLnC', NULL, NULL, '2019-12-03 20:50:44', '2019-12-03 20:50:44'),
(10, 'ddddd', 'ddddd@gmail.com', '$2y$10$843VdMLyaXh9s8duQ7ZM4OMFYbUEmkNKGNk7P4P5tgChB.ladhUnG', NULL, 'fGKqSVQB4RJSNnYzNS8NHrnn3SeT6ejq8GbULXf9Px5Rt04wKBdTGkZulELu', '2019-12-03 21:13:40', '2019-12-04 02:54:42'),
(11, 'ThanhLong', 'thanhlong@gmail.com', '$2y$10$SuvNDJstk9TU1o93Zasnvu6JQHcTjBVe/5vcrcnwPco36FfvAoYfG', NULL, NULL, '2019-12-03 21:17:34', '2019-12-03 21:17:34');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
