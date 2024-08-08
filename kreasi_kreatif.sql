-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Agu 2024 pada 04.43
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kreasi_kreatif`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lives`
--

CREATE TABLE `lives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `post_as` enum('HOST','STUDIO') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lives`
--

INSERT INTO `lives` (`id`, `title`, `thumbnail`, `content`, `post_as`, `created_at`, `updated_at`) VALUES
(1, 'Lara Kusuma', '8SOGpK4yGLQ1KQkLllHMkkuY6ALyQG-metaSG9zdDEucG5n-.png', '<p>22 Thun</p>', 'HOST', '2024-07-31 00:07:21', '2024-07-31 00:07:21'),
(6, 'Aiden Davidson', 'HDf4NlyGdkduamexjvuL35TWIWbd9x-metaSG9zdDIucG5n-.png', '<p>26 Tahun</p>', 'HOST', '2024-07-31 21:47:00', '2024-07-31 21:47:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_12_073551_create_sections_table', 2),
(6, '2024_07_15_072642_create_partners_table', 3),
(7, '2024_07_15_095820_create_settings_table', 4),
(8, '2024_07_30_071526_create_lives_table', 5),
(9, '2024_07_30_170859_create_lives_table', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `partners`
--

INSERT INTO `partners` (`id`, `title`, `thumbnail`, `content`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Seruni Living', 'cNmx1udM2pO2CtGVE2G9BQQHhE2NT6-metac2VydW5pLnBuZw==-.png', '<p>Seruni Living is a unique local brand with a floral print design that is applied into home decor products such as pillowcases, wall decorations, also fashion product such as bags, scarves and hijabs</p>', 'https://www.instagram.com/seruniliving/', '2024-07-22 03:45:23', '2024-07-22 03:56:04'),
(3, 'Stero-bac', 'PT7FQXw2L5JLEhDqBYWHOApB8QeDT9-metac3Rlcm9iaWMucG5n-.png', '<p>&nbsp;Stero-Bac adalah cairan dengan berbahan dasar alkohol untuk hygienisasi tangan dengan standar medis disertai komponen perawatan kulit. Memudahkan penetrasi ke pori-pori tangan, lipatan dan kepalan tangan, ujung kuku, cepat kering dan tidak lengket.&nbsp;</p>', 'https://www.instagram.com/sterobac.id/', '2024-07-22 03:54:11', '2024-07-22 03:54:11'),
(4, 'Senus', 'g9EjfwhqqmWIoU2P1uG6WYHlbuex1h-metac2VudXMucG5n-.png', '<p>Senus adalah perusahaan peralatan elektronik seperti pengering rambut, pengeriting, catok rambut, dan air purifier yang didirikan di Indonesia. Kami berkomitmen untuk menyediakan produk berkualitas yang dirancang untuk memenuhi kebutuhan gaya hidup modern. Dengan teknologi terkini dan design elegan, setiap produk yang kami tawarkan memberikan kenyamanan dan efisiensi bagi semua pelanggan kami</p>', 'https://senus.id/', '2024-07-23 02:19:28', '2024-07-23 02:19:28'),
(5, 'Tropee Bebe', 'BO2le14KPGPVFKkIiQR8F2mJgmInUW-metadHJvcGVlLnBuZw==-.png', '<p>PT Mitra Sukses Bersama Distribusindo merupakan perseroan di Jakarta yang bergerak dalam distribusi produk perlengkapan bayi pemegang hak atas produk merk Tropee Bebe. PT. Mitra Sukses Bersama Distribusindo melakukan pengiriman ke berbagai kota dan daerah di Indonesia.</p>', 'https://www.instagram.com/tropeebebe.id/', '2024-07-23 02:27:19', '2024-07-26 00:35:15'),
(7, 'ITO EN', 'BI4l1nGcEYuJEJv8syeSpsNxuCaJDT-metaSXRvIEVuLnBuZw==-.png', '<p>Pabrik Teh No. 1 di Jepang dengan pelopor dan pabrik susu susu UHT No. 1 di Indonesia * Berdasarkan unit penjualan dari Januari hingga Desember 2016 (Hak Cipta @ 2016 Inryou Souken)&nbsp;</p>', 'https://itoen-ultrajaya.co.id/id/', '2024-07-23 02:32:41', '2024-07-23 02:32:41'),
(9, 'Indomilk Kids', 'RBylCBHqGohZIHwp6xXeieYKjGBDBZ-metaSW5kb21pbGsgS2lkcy5wbmc=-.png', '<p>Indomilk Kids adalah suatu perusahaan yang membuat susu uht yang di peruntukan untuk anak anak&nbsp;</p>', 'https://www.indomilk.com/id/brand/indomilk-kids', '2024-07-23 02:42:50', '2024-07-23 02:42:50'),
(10, 'BeBe SMART', 'xVCxicncFASy7Jx55O9CZMJIPsQvYM-metaQmViZSBTbWFydC5wbmc=-.png', '<p><strong><em>Bebe Smart</em></strong> adalah salah satu brand mainan anak edukasi yang sudah dipercaya untuk membantu tumbuh kembang anak.</p>', 'https://www.bebe-smart.com/id', '2024-07-23 02:47:11', '2024-07-23 02:47:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `post_as` enum('JUMBOTRON','ABOUT') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sections`
--

INSERT INTO `sections` (`id`, `title`, `thumbnail`, `content`, `post_as`, `created_at`, `updated_at`) VALUES
(1, 'Kreasi Kreatif', 'cOy2QTowt14Ydkf9hOqZpxCRaE54gb-metadGlrdG9rLmpwZWc=-.jpeg', '<h2>CARI UNTUNG SEBANYAK BANYAKNYA LEWAT LIVE SHOPPING</h2><h3>Kami Bantu Untuk Host, Studio, dan Alat Alat Untuk Jual Produk Produk Kamu Secara Online di Live Shopping</h3>', 'JUMBOTRON', '2024-07-14 00:04:37', '2024-07-14 00:04:37'),
(4, 'Tentang KREASI LIVE SHOPPING', '7fgiikkxCwEqkYPbmrUGueGDFc6owE-metadGVudGFuZy5wbmc=-.png', '<p>Kreasi adalah agensi yang membantu merek/produk untuk mengatur streaming langsung di platform sosial media.<br><br>Kami menawarkan kamu layanan lengkap dengan kemampuan tim untuk memberikan Ide-ide kreatif didukung dengan alat profesional. Serta penawaran harga lebih terjangkau, sehingga memberikan efensiasi biaya untuk bisnis kamu.</p>', 'ABOUT', '2024-07-23 03:05:16', '2024-07-23 03:05:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `key`, `label`, `value`, `type`, `created_at`, `updated_at`) VALUES
(1, '_site_name', 'Judul Situs', 'Kreasi Kreatif', 'text', '2024-07-15 03:30:03', '2024-07-15 03:30:03'),
(2, '_location', 'Alamat Kantor', '10, Jl.Kemang Timur VI No.5, Rt.10/Rw.4, Bangka, Kec.Mampang Prpt, Kota Jakarta Selatan, Daerah khusus Ibukota Jakarta', 'text', '2024-07-15 03:30:03', '2024-07-15 03:30:03'),
(3, '_Email', 'Email', 'Info@Kreasi.co.id', 'text', '2024-07-15 03:30:03', '2024-07-15 03:30:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'fadzry', 'kreasikreatif@gmail.com', NULL, '$2y$10$.lsoK7u88LjQ1tXYxxB1DOoHEH3tJMj9CbPK6WUqWwjaRDxxGSB/S', NULL, '2024-07-12 01:35:46', '2024-07-12 01:35:46');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `lives`
--
ALTER TABLE `lives`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lives`
--
ALTER TABLE `lives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
