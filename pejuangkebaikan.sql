-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Agu 2022 pada 04.55
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pejuangkebaikan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_amil`
--

CREATE TABLE `data_amil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cabang_rumahzakat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_rekening` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `atas_nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surat_pernyataan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aktiv` tinyint(1) NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_amil`
--

INSERT INTO `data_amil` (`id`, `no_ktp`, `nama_lengkap`, `nomor_hp`, `email`, `cabang_rumahzakat`, `nama_bank`, `no_rekening`, `atas_nama`, `surat_pernyataan`, `ktp`, `aktiv`, `alamat`, `date_created`, `updated_at`) VALUES
(220808050500001, '14440144', 'Putra Nuryansyah', '085123124', 'putra@gmail.com', 'Pusat', 'BCA', '123515155', 'Putra', 'surat_pernyataan/ky2jqG8ZYJNGioDFr8kFPDowJyviaxgBGqpzVeNm.jpg', 'ktp/azsIq1We6edDhiqyeeqGLOvF2zfWAH06iWjOOHmx.jpg', 1, 'Pekanbaru', '2022-08-04 20:13:00', '2022-08-04 21:00:18'),
(220808050551511, '144000003146', 'Muhammad Yusuf', '08510091515', 'yusuf@gmail.com', 'Rumah Zakat Rumba', NULL, NULL, NULL, NULL, NULL, 1, 'Pekanbaru', '2022-08-05 01:41:51', '2022-08-05 01:41:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `donatur`
--

CREATE TABLE `donatur` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomorhp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_amil` bigint(20) UNSIGNED NOT NULL,
  `date_registrasi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `donatur`
--

INSERT INTO `donatur` (`id`, `nama`, `nomorhp`, `email`, `id_amil`, `date_registrasi`) VALUES
(134513, 'Alex Putra', '0855931516', 'alex@gmail.com', 220808050500001, '2022-08-05 01:35:00'),
(12341515, 'Toha Dibro', '08591235015', 'toha@gmail.com', 220808050500001, '2022-08-04 20:14:04'),
(12341516, 'Elsi Pertiwi', '0841251515', 'elsipertiwi@gmail.com', 220808050500001, '2022-08-05 01:35:50'),
(12341517, 'Zakhir naik', '08531616', 'zakir@gmail.com', 220808050500001, '2022-08-05 01:35:50'),
(12341518, 'Agus Hashari', '084151515', 'agus@gmail.com', 220808050500001, '2022-08-05 01:36:29'),
(12341520, 'Semina Lestari', '08123515', 'semina@gmail.com', 220808050500001, '2022-08-05 01:37:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(161, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(162, '2022_07_26_085314_create__data__amil', 1),
(163, '2022_07_27_015340_create_program', 1),
(164, '2022_07_27_022035_create_user', 1),
(165, '2022_07_27_034956_create_donatur', 1),
(166, '2022_07_27_042522_create_transaksi', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `program`
--

CREATE TABLE `program` (
  `id_program` bigint(20) UNSIGNED NOT NULL,
  `nama_program` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `program`
--

INSERT INTO `program` (`id_program`, `nama_program`, `status`, `date_created`) VALUES
(1, 'Zakat Program 1', 1, '2022-08-04 20:13:29'),
(2, 'Zakat Program 2', 1, '2022-08-04 20:13:29'),
(3, 'Wakaf Program 1', 1, '2022-08-04 20:13:40'),
(4, 'Wakaf Program 2', 1, '2022-08-04 20:13:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` bigint(20) UNSIGNED NOT NULL,
  `date_transaksi` datetime NOT NULL,
  `id_donatur` bigint(20) UNSIGNED NOT NULL,
  `atasnama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_program` bigint(20) UNSIGNED NOT NULL,
  `nominal` bigint(20) NOT NULL,
  `id_amil` bigint(20) UNSIGNED NOT NULL,
  `metode_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `date_transaksi`, `id_donatur`, `atasnama`, `no_hp`, `email`, `id_program`, `nominal`, `id_amil`, `metode_pembayaran`, `status_pembayaran`, `update_data`) VALUES
(1, '2022-07-01 03:14:17', 12341515, 'Toha', 85192151, 'toha@gmail.com', 1, 130000, 220808050500001, 'Gopay', 'Success', '2022-08-04 20:14:48'),
(2, '2021-10-08 09:36:12', 12341518, 'Agus', 8513515, 'agus@gmail.com', 3, 20000, 220808050500001, 'Shopie Pay', 'Success', '2022-08-05 02:37:22'),
(3, '2022-08-24 09:36:12', 12341516, 'Elsi', 801351, 'elsi@gmail.com', 3, 100000, 220808050500001, 'Paypal', 'Success', '2022-08-05 02:37:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_amil` bigint(20) UNSIGNED NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_date` datetime DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `aktiv` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `id_amil`, `password`, `remember_token`, `last_login_date`, `date_created`, `updated_at`, `aktiv`) VALUES
(1, 'putra_nur', 220808050500001, '$2y$10$tnqD1Xt1i0dCUOtwweyYaOeiTv9jiNB5bFlnlvgFS5GspZyKB81fW', NULL, '2022-08-05 09:02:15', '2022-08-04 20:13:00', '2022-08-05 02:02:15', 1),
(2, 'yusuf_m', 220808050551511, '$2y$10$vtP.QQmES/G2gXV5VZ16.OBeSCkgJj4k.8K7ee6z7Wg3Fnvs0jX3a', NULL, '2022-08-05 08:42:09', '2022-08-05 01:41:51', '2022-08-05 01:42:09', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_amil`
--
ALTER TABLE `data_amil`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_amil_no_ktp_unique` (`no_ktp`),
  ADD UNIQUE KEY `data_amil_nomor_hp_unique` (`nomor_hp`),
  ADD UNIQUE KEY `data_amil_email_unique` (`email`),
  ADD UNIQUE KEY `data_amil_no_rekening_unique` (`no_rekening`);

--
-- Indeks untuk tabel `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donatur_id_amil_foreign` (`id_amil`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `transaksi_id_donatur_foreign` (`id_donatur`),
  ADD KEY `transaksi_id_program_foreign` (`id_program`),
  ADD KEY `transaksi_id_amil_foreign` (`id_amil`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_username_unique` (`username`),
  ADD KEY `user_id_amil_foreign` (`id_amil`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_amil`
--
ALTER TABLE `data_amil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220808050551512;

--
-- AUTO_INCREMENT untuk tabel `donatur`
--
ALTER TABLE `donatur`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12341521;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `program`
--
ALTER TABLE `program`
  MODIFY `id_program` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `donatur`
--
ALTER TABLE `donatur`
  ADD CONSTRAINT `donatur_id_amil_foreign` FOREIGN KEY (`id_amil`) REFERENCES `user` (`id_amil`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_id_amil_foreign` FOREIGN KEY (`id_amil`) REFERENCES `user` (`id_amil`),
  ADD CONSTRAINT `transaksi_id_donatur_foreign` FOREIGN KEY (`id_donatur`) REFERENCES `donatur` (`id`),
  ADD CONSTRAINT `transaksi_id_program_foreign` FOREIGN KEY (`id_program`) REFERENCES `program` (`id_program`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_id_amil_foreign` FOREIGN KEY (`id_amil`) REFERENCES `data_amil` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
