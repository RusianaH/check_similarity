-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Agu 2021 pada 15.09
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `detector`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tahun` year(4) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `files`
--

INSERT INTO `files` (`id`, `nama`, `nim`, `judul`, `tahun`, `deskripsi`) VALUES
(1, 'tri', '180180010', 'pengembangan aplikasi sistem order barang menggunakan bahasa C++', 2022, 'belum selesai'),
(2, 'azzahra', '180180010', 'aplikasi plagiat menggunakan bahasa C++', 2021, 'belum selesai'),
(3, 'rusiana hilma', '180180035', 'implementasi menggunakan bahasa java', 2021, 'belum selesai'),
(5, 'rizki mela', '180180034', 'aplikasi plagiat menggunakan bahasa C++', 2021, 'belum selesai'),
(60000000, 'Tiara', '180180032', 'pengembangan aplikasi sistem order barang di kantor pos', 2021, 'belum selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbcosine`
--

CREATE TABLE `tbcosine` (
  `id` int(11) UNSIGNED NOT NULL,
  `idjudul` int(11) DEFAULT NULL,
  `count` float DEFAULT NULL,
  `persen` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbcosine`
--

INSERT INTO `tbcosine` (`id`, `idjudul`, `count`, `persen`) VALUES
(1, 1, 0, '0%'),
(2, 2, 0.411149, '41.114914596813%'),
(3, 3, 0.793424, '79.342365323244%'),
(4, 5, 0.411149, '41.114914596813%'),
(5, 60000000, 0, '0%');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbdfidf`
--

CREATE TABLE `tbdfidf` (
  `id` int(11) UNSIGNED NOT NULL,
  `idtoken` int(11) DEFAULT NULL,
  `df` int(11) DEFAULT NULL,
  `n` int(11) DEFAULT NULL,
  `idf` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbdfidf`
--

INSERT INTO `tbdfidf` (`id`, `idtoken`, `df`, `n`, `idf`) VALUES
(1, 1, 2, 6, 0.477121),
(2, 2, 0, 6, 0),
(3, 3, 0, 6, 0),
(4, 4, 0, 6, 0),
(5, 5, 0, 6, 0),
(6, 6, 0, 6, 0),
(7, 7, 4, 6, 0.176091),
(8, 8, 0, 6, 0),
(9, 9, 0, 6, 0),
(10, 10, 0, 6, 0),
(11, 11, 0, 6, 0),
(12, 12, 0, 6, 0),
(13, 13, 2, 6, 0.477121),
(14, 14, 0, 6, 0),
(15, 15, 0, 6, 0),
(16, 16, 0, 6, 0),
(17, 17, 0, 6, 0),
(18, 18, 0, 6, 0),
(19, 19, 3, 6, 0.30103),
(20, 20, 4, 6, 0.176091);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbdidfkaliqidf`
--

CREATE TABLE `tbdidfkaliqidf` (
  `id` int(11) UNSIGNED NOT NULL,
  `idtoken` int(11) DEFAULT NULL,
  `count` float DEFAULT NULL,
  `idjudul` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbdidfkaliqidf`
--

INSERT INTO `tbdidfkaliqidf` (`id`, `idtoken`, `count`, `idjudul`) VALUES
(1, 1, 0, 1),
(2, 2, 0, 1),
(3, 3, 0, 1),
(4, 4, 0, 1),
(5, 5, 0, 1),
(6, 6, 0, 1),
(7, 7, 0, 1),
(8, 8, 0, 1),
(9, 9, 0, 1),
(10, 10, 0, 1),
(11, 11, 0, 1),
(12, 12, 0, 1),
(13, 13, 0, 1),
(14, 14, 0, 1),
(15, 15, 0, 1),
(16, 16, 0, 1),
(17, 17, 0, 1),
(18, 18, 0, 1),
(19, 19, 0, 1),
(20, 20, 0, 1),
(21, 1, 0, 2),
(22, 2, 0, 2),
(23, 3, 0, 2),
(24, 4, 0, 2),
(25, 5, 0, 2),
(26, 6, 0, 2),
(27, 7, 0, 2),
(28, 8, 0, 2),
(29, 9, 0, 2),
(30, 10, 0, 2),
(31, 11, 0, 2),
(32, 12, 0, 2),
(33, 13, 0, 2),
(34, 14, 0, 2),
(35, 15, 0, 2),
(36, 16, 0, 2),
(37, 17, 0, 2),
(38, 18, 0, 2),
(39, 19, 0.0906191, 2),
(40, 20, 0, 2),
(41, 1, 0, 3),
(42, 2, 0, 3),
(43, 3, 0, 3),
(44, 4, 0, 3),
(45, 5, 0, 3),
(46, 6, 0, 3),
(47, 7, 0, 3),
(48, 8, 0, 3),
(49, 9, 0, 3),
(50, 10, 0, 3),
(51, 11, 0, 3),
(52, 12, 0, 3),
(53, 13, 0.227644, 3),
(54, 14, 0, 3),
(55, 15, 0, 3),
(56, 16, 0, 3),
(57, 17, 0, 3),
(58, 18, 0, 3),
(59, 19, 0, 3),
(60, 20, 0, 3),
(61, 1, 0, 5),
(62, 2, 0, 5),
(63, 3, 0, 5),
(64, 4, 0, 5),
(65, 5, 0, 5),
(66, 6, 0, 5),
(67, 7, 0, 5),
(68, 8, 0, 5),
(69, 9, 0, 5),
(70, 10, 0, 5),
(71, 11, 0, 5),
(72, 12, 0, 5),
(73, 13, 0, 5),
(74, 14, 0, 5),
(75, 15, 0, 5),
(76, 16, 0, 5),
(77, 17, 0, 5),
(78, 18, 0, 5),
(79, 19, 0.0906191, 5),
(80, 20, 0, 5),
(81, 1, 0, 60000000),
(82, 2, 0, 60000000),
(83, 3, 0, 60000000),
(84, 4, 0, 60000000),
(85, 5, 0, 60000000),
(86, 6, 0, 60000000),
(87, 7, 0, 60000000),
(88, 8, 0, 60000000),
(89, 9, 0, 60000000),
(90, 10, 0, 60000000),
(91, 11, 0, 60000000),
(92, 12, 0, 60000000),
(93, 13, 0, 60000000),
(94, 14, 0, 60000000),
(95, 15, 0, 60000000),
(96, 16, 0, 60000000),
(97, 17, 0, 60000000),
(98, 18, 0, 60000000),
(99, 19, 0, 60000000),
(100, 20, 0, 60000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbdn`
--

CREATE TABLE `tbdn` (
  `id` int(11) UNSIGNED NOT NULL,
  `idjudul` int(11) DEFAULT NULL,
  `idtoken` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbdn`
--

INSERT INTO `tbdn` (`id`, `idjudul`, `idtoken`, `count`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 0),
(3, 1, 3, 0),
(4, 1, 4, 0),
(5, 1, 5, 0),
(6, 1, 6, 0),
(7, 1, 7, 1),
(8, 1, 8, 0),
(9, 1, 9, 0),
(10, 1, 10, 0),
(11, 1, 11, 0),
(12, 1, 12, 0),
(13, 1, 13, 0),
(14, 1, 14, 0),
(15, 1, 15, 0),
(16, 1, 16, 0),
(17, 1, 17, 0),
(18, 1, 18, 0),
(19, 1, 19, 0),
(20, 1, 20, 1),
(21, 2, 1, 0),
(22, 2, 2, 0),
(23, 2, 3, 0),
(24, 2, 4, 0),
(25, 2, 5, 0),
(26, 2, 6, 0),
(27, 2, 7, 1),
(28, 2, 8, 0),
(29, 2, 9, 0),
(30, 2, 10, 0),
(31, 2, 11, 0),
(32, 2, 12, 0),
(33, 2, 13, 0),
(34, 2, 14, 0),
(35, 2, 15, 0),
(36, 2, 16, 0),
(37, 2, 17, 0),
(38, 2, 18, 0),
(39, 2, 19, 1),
(40, 2, 20, 1),
(41, 3, 1, 0),
(42, 3, 2, 0),
(43, 3, 3, 0),
(44, 3, 4, 0),
(45, 3, 5, 0),
(46, 3, 6, 0),
(47, 3, 7, 0),
(48, 3, 8, 0),
(49, 3, 9, 0),
(50, 3, 10, 0),
(51, 3, 11, 0),
(52, 3, 12, 0),
(53, 3, 13, 1),
(54, 3, 14, 0),
(55, 3, 15, 0),
(56, 3, 16, 0),
(57, 3, 17, 0),
(58, 3, 18, 0),
(59, 3, 19, 0),
(60, 3, 20, 1),
(61, 5, 1, 0),
(62, 5, 2, 0),
(63, 5, 3, 0),
(64, 5, 4, 0),
(65, 5, 5, 0),
(66, 5, 6, 0),
(67, 5, 7, 1),
(68, 5, 8, 0),
(69, 5, 9, 0),
(70, 5, 10, 0),
(71, 5, 11, 0),
(72, 5, 12, 0),
(73, 5, 13, 0),
(74, 5, 14, 0),
(75, 5, 15, 0),
(76, 5, 16, 0),
(77, 5, 17, 0),
(78, 5, 18, 0),
(79, 5, 19, 1),
(80, 5, 20, 1),
(81, 60000000, 1, 1),
(82, 60000000, 2, 0),
(83, 60000000, 3, 0),
(84, 60000000, 4, 0),
(85, 60000000, 5, 0),
(86, 60000000, 6, 0),
(87, 60000000, 7, 1),
(88, 60000000, 8, 0),
(89, 60000000, 9, 0),
(90, 60000000, 10, 0),
(91, 60000000, 11, 0),
(92, 60000000, 12, 0),
(93, 60000000, 13, 0),
(94, 60000000, 14, 0),
(95, 60000000, 15, 0),
(96, 60000000, 16, 0),
(97, 60000000, 17, 0),
(98, 60000000, 18, 0),
(99, 60000000, 19, 0),
(100, 60000000, 20, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbdnidfpangkat`
--

CREATE TABLE `tbdnidfpangkat` (
  `id` int(11) UNSIGNED NOT NULL,
  `idtoken` int(11) DEFAULT NULL,
  `count` float DEFAULT NULL,
  `idjudul` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbdnidfpangkat`
--

INSERT INTO `tbdnidfpangkat` (`id`, `idtoken`, `count`, `idjudul`) VALUES
(1, 1, 0.227644, 1),
(2, 2, 0, 1),
(3, 3, 0, 1),
(4, 4, 0, 1),
(5, 5, 0, 1),
(6, 6, 0, 1),
(7, 7, 0.031008, 1),
(8, 8, 0, 1),
(9, 9, 0, 1),
(10, 10, 0, 1),
(11, 11, 0, 1),
(12, 12, 0, 1),
(13, 13, 0, 1),
(14, 14, 0, 1),
(15, 15, 0, 1),
(16, 16, 0, 1),
(17, 17, 0, 1),
(18, 18, 0, 1),
(19, 19, 0, 1),
(20, 20, 0.031008, 1),
(21, 1, 0, 2),
(22, 2, 0, 2),
(23, 3, 0, 2),
(24, 4, 0, 2),
(25, 5, 0, 2),
(26, 6, 0, 2),
(27, 7, 0.031008, 2),
(28, 8, 0, 2),
(29, 9, 0, 2),
(30, 10, 0, 2),
(31, 11, 0, 2),
(32, 12, 0, 2),
(33, 13, 0, 2),
(34, 14, 0, 2),
(35, 15, 0, 2),
(36, 16, 0, 2),
(37, 17, 0, 2),
(38, 18, 0, 2),
(39, 19, 0.0906191, 2),
(40, 20, 0.031008, 2),
(41, 1, 0, 3),
(42, 2, 0, 3),
(43, 3, 0, 3),
(44, 4, 0, 3),
(45, 5, 0, 3),
(46, 6, 0, 3),
(47, 7, 0, 3),
(48, 8, 0, 3),
(49, 9, 0, 3),
(50, 10, 0, 3),
(51, 11, 0, 3),
(52, 12, 0, 3),
(53, 13, 0.227644, 3),
(54, 14, 0, 3),
(55, 15, 0, 3),
(56, 16, 0, 3),
(57, 17, 0, 3),
(58, 18, 0, 3),
(59, 19, 0, 3),
(60, 20, 0.031008, 3),
(61, 1, 0, 5),
(62, 2, 0, 5),
(63, 3, 0, 5),
(64, 4, 0, 5),
(65, 5, 0, 5),
(66, 6, 0, 5),
(67, 7, 0.031008, 5),
(68, 8, 0, 5),
(69, 9, 0, 5),
(70, 10, 0, 5),
(71, 11, 0, 5),
(72, 12, 0, 5),
(73, 13, 0, 5),
(74, 14, 0, 5),
(75, 15, 0, 5),
(76, 16, 0, 5),
(77, 17, 0, 5),
(78, 18, 0, 5),
(79, 19, 0.0906191, 5),
(80, 20, 0.031008, 5),
(81, 1, 0.227644, 60000000),
(82, 2, 0, 60000000),
(83, 3, 0, 60000000),
(84, 4, 0, 60000000),
(85, 5, 0, 60000000),
(86, 6, 0, 60000000),
(87, 7, 0.031008, 60000000),
(88, 8, 0, 60000000),
(89, 9, 0, 60000000),
(90, 10, 0, 60000000),
(91, 11, 0, 60000000),
(92, 12, 0, 60000000),
(93, 13, 0, 60000000),
(94, 14, 0, 60000000),
(95, 15, 0, 60000000),
(96, 16, 0, 60000000),
(97, 17, 0, 60000000),
(98, 18, 0, 60000000),
(99, 19, 0, 60000000),
(100, 20, 0, 60000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbq`
--

CREATE TABLE `tbq` (
  `id` int(11) UNSIGNED NOT NULL,
  `idtoken` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbq`
--

INSERT INTO `tbq` (`id`, `idtoken`, `count`) VALUES
(1, 1, 0),
(2, 2, 0),
(3, 3, 0),
(4, 4, 0),
(5, 5, 0),
(6, 6, 0),
(7, 7, 0),
(8, 8, 0),
(9, 9, 0),
(10, 10, 0),
(11, 11, 0),
(12, 12, 0),
(13, 13, 1),
(14, 14, 0),
(15, 15, 0),
(16, 16, 0),
(17, 17, 0),
(18, 18, 0),
(19, 19, 1),
(20, 20, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbqidfpangkat`
--

CREATE TABLE `tbqidfpangkat` (
  `id` int(11) UNSIGNED NOT NULL,
  `idtoken` int(11) DEFAULT NULL,
  `count` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbqidfpangkat`
--

INSERT INTO `tbqidfpangkat` (`id`, `idtoken`, `count`) VALUES
(1, 1, 0),
(2, 2, 0),
(3, 3, 0),
(4, 4, 0),
(5, 5, 0),
(6, 6, 0),
(7, 7, 0),
(8, 8, 0),
(9, 9, 0),
(10, 10, 0),
(11, 11, 0),
(12, 12, 0),
(13, 13, 0.227644),
(14, 14, 0),
(15, 15, 0),
(16, 16, 0),
(17, 17, 0),
(18, 18, 0),
(19, 19, 0.0906191),
(20, 20, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbtoken`
--

CREATE TABLE `tbtoken` (
  `id` int(11) NOT NULL,
  `term` varchar(30) NOT NULL,
  `count` int(11) NOT NULL,
  `bobot` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbtoken`
--

INSERT INTO `tbtoken` (`id`, `term`, `count`, `bobot`) VALUES
(1, 'sistem', 2, NULL),
(2, 'informasi', 1, NULL),
(3, 'majemuk', 1, NULL),
(4, 'bertingkat', 1, NULL),
(5, 'pencernaan', 1, NULL),
(6, 'tubuh', 1, NULL),
(7, 'aplikasi', 3, NULL),
(8, 'pembasmi', 1, NULL),
(9, 'nyamuk', 1, NULL),
(10, 'manajemen', 1, NULL),
(11, 'peserta', 1, NULL),
(12, 'lapangan', 1, NULL),
(13, 'implementasi', 1, NULL),
(14, 'php', 1, NULL),
(15, 'android', 1, NULL),
(16, 'menggunakan', 2, NULL),
(17, 'database', 1, NULL),
(18, 'mysql', 1, NULL),
(19, 'plagiat', 1, NULL),
(20, 'bahasa', 1, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `last_login` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `full_name`, `phone`, `role`, `last_login`, `created_at`, `is_active`) VALUES
(3, 'rusianahlm', 'admin', 'rusianahlm@gmail.com', 'rusiana hilma', '082350964363', 'admin', '2021-07-08 06:09:08', '2021-05-26 07:07:54', 1),
(4, 'user', 'user', 'user@gmail.com', 'users', '081263174170', 'user', '2021-08-07 12:53:41', '2021-08-07 12:53:41', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbcosine`
--
ALTER TABLE `tbcosine`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbdfidf`
--
ALTER TABLE `tbdfidf`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbdidfkaliqidf`
--
ALTER TABLE `tbdidfkaliqidf`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbdn`
--
ALTER TABLE `tbdn`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbdnidfpangkat`
--
ALTER TABLE `tbdnidfpangkat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbq`
--
ALTER TABLE `tbq`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbqidfpangkat`
--
ALTER TABLE `tbqidfpangkat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbtoken`
--
ALTER TABLE `tbtoken`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60000001;

--
-- AUTO_INCREMENT untuk tabel `tbcosine`
--
ALTER TABLE `tbcosine`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbdfidf`
--
ALTER TABLE `tbdfidf`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tbdidfkaliqidf`
--
ALTER TABLE `tbdidfkaliqidf`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `tbdn`
--
ALTER TABLE `tbdn`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `tbdnidfpangkat`
--
ALTER TABLE `tbdnidfpangkat`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `tbq`
--
ALTER TABLE `tbq`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tbqidfpangkat`
--
ALTER TABLE `tbqidfpangkat`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tbtoken`
--
ALTER TABLE `tbtoken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
