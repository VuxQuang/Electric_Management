-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th5 23, 2024 lúc 03:24 PM
-- Phiên bản máy phục vụ: 5.7.33
-- Phiên bản PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `electric`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dienke`
--

CREATE TABLE `dienke` (
  `madk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `makh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysx` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaylap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dienke`
--

INSERT INTO `dienke` (`madk`, `makh`, `ngaysx`, `ngaylap`, `mota`, `trangthai`, `create_at`, `create_by`, `update_at`, `update_by`, `created_at`, `updated_at`) VALUES
('11111111', 'KH1', '2024-05-12 00:00:00', '2024-05-13 00:00:00', 'a', '1', '2024-05-23 15:08:41', 'duongvankhai2022001@gmail.com', '2024-05-23 15:08:41', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giadien`
--

CREATE TABLE `giadien` (
  `mabac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenbac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tusokw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `densokw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dongia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngayapdung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giadien`
--

INSERT INTO `giadien` (`mabac`, `tenbac`, `tusokw`, `densokw`, `dongia`, `ngayapdung`, `create_at`, `create_by`, `update_at`, `update_by`, `created_at`, `updated_at`) VALUES
('1', 'Bậc 1', '11', '21', '1200', '2024-05-23', '2024-05-23 11:23:57', 'duongvankhai2022001@gmail.com', '2024-05-23 11:23:57', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `madk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ky` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tungay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `denngay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chisodau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chisocuoi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongthanhtien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaylaphd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `madk`, `ky`, `tungay`, `denngay`, `chisodau`, `chisocuoi`, `tongthanhtien`, `ngaylaphd`, `tinhtrang`, `create_at`, `create_by`, `created_at`, `updated_at`) VALUES
('HD17164777', '11111111', '5', '2024-05-23 15:21:40', '2024-05-23 15:21:40', '0', '67', '83214', '2024-05-23 15:21:40', '1', '2024-05-23 15:21:40', 'duongvankhai2022001@gmail.com', NULL, NULL),
('HD17164777', '11111111', '5', '2024-05-23 15:21:40', '2024-05-23 15:23:07', '67', '76', '11178', '2024-05-23 15:23:07', '1', '2024-05-23 15:23:07', 'duongvankhai2022001@gmail.com', NULL, NULL),
('HD17164778', '11111111', '5', '2024-05-23 15:21:40', '2024-05-23 15:23:22', '67', '76', '11178', '2024-05-23 15:23:22', '1', '2024-05-23 15:23:22', 'duongvankhai2022001@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cmnd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `dt`, `diachi`, `cmnd`, `email`, `create_at`, `create_by`, `update_at`, `update_by`, `created_at`, `updated_at`) VALUES
('KH1', 'Duong Khai', '0986768678', 'Hà Tây', '001201017788', 'duongvankhai2022001@gmail.com', '2024-05-23 15:07:35', 'duongvankhai2022001@gmail.com', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_04_04_084708_create_sessions_table', 1),
(7, '2024_05_21_105527_create_dienkes_table', 1),
(8, '2024_05_21_105557_create_gia_diens_table', 1),
(9, '2024_05_21_105612_create_khach_hangs_table', 1),
(10, '2024_05_21_110625_create_hoa_dons_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('HJXh9Mb4pJNuBMtAH1fZ6LhzZibme62B9SqeS5LP', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiNzViT0I2QnlLckFqZHBhVlh3UWlOaHY1NkhSMENjN1dWajNkSmkxOCI7czozOiJ1cmwiO2E6MDp7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRESy9HakFtOTlzZGlHQWRkOGJySTRlSkV3OEJzWTdrbW5iZFpVV0RuQzFmRlZCYVpQM3NWRyI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkREsvR2pBbTk5c2RpR0FkZDhickk0ZUpFdzhCc1k3a21uYmRaVVdEbkMxZkZWQmFaUDNzVkciO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI4OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvaG9hZG9uIjt9fQ==', 1716477805),
('WkzvW48lMC0ykDmOvpRs6idj40gSRyH70dKdgZQy', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZTdySnlCODVBczRhNEE5QmtRRXFpTnB0SERldzcyZ3pvakRuZ0w4ViI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716474024);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'duongvankhai2022001@gmail.com', 'duongvankhai2022001@gmail.com', NULL, '$2y$10$DK/GjAm99sdiGAdd8brI4eJEw8BsY7kmnbdZUWDnC1fFVBaZP3sVG', NULL, NULL, NULL, NULL, NULL, '2024-05-21 06:15:43', '2024-05-21 06:15:43');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
