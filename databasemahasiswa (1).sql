-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 01 Jul 2024 pada 16.45
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databasemahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datamahasiswa`
--

CREATE TABLE `datamahasiswa` (
  `id` int NOT NULL,
  `full_name` text COLLATE utf8mb4_general_ci NOT NULL,
  `email` text COLLATE utf8mb4_general_ci NOT NULL,
  `password` text COLLATE utf8mb4_general_ci NOT NULL,
  `handphonne` text COLLATE utf8mb4_general_ci NOT NULL,
  `gender` text COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `datamahasiswa`
--

INSERT INTO `datamahasiswa` (`id`, `full_name`, `email`, `password`, `handphonne`, `gender`, `alamat`) VALUES
(1, 'Ikhwan Sabri Wibowo', 'sabriwibowoikhwan@gmail.com', '57ef997af0ca6121aff0fe1a4dc3fd08a37e2bb2dd7ba47d3a2c29190388f339', '2147483647', 'pria', 'Villa Tangerang Elok'),
(2, 'sobari', 'sobari@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '2147483647', 'pria', 'VTE'),
(8, 'wibowo', 'wibowo1@gmail.com', 'b3a8e0e1f9ab1bfe3a36f231f676f78bb30a519d2b21e6c530c0eee8ebb4a5d0', '2147483647', 'pria', 'pasir jayay'),
(9, 'Ikhwan Sabri Wibowo', 'sabriwibowoikhwan1@gmail.com', '35a9e381b1a27567549b5f8a6f783c167ebf809f1c4d6a9e367240484d8ce281', '2147483647', 'pria', 'Villa Tangerang Elok blok a3'),
(14, 'ikhwan12', 'ikhwan123@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '0857888888', 'pria', 'elok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int NOT NULL,
  `nama` text COLLATE utf8mb4_general_ci NOT NULL,
  `nim` text COLLATE utf8mb4_general_ci NOT NULL,
  `lauk_utama` text COLLATE utf8mb4_general_ci NOT NULL,
  `lauk_tambahan1` text COLLATE utf8mb4_general_ci NOT NULL,
  `lauk_tambahan2` text COLLATE utf8mb4_general_ci NOT NULL,
  `catatan` text COLLATE utf8mb4_general_ci NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `nama`, `nim`, `lauk_utama`, `lauk_tambahan1`, `lauk_tambahan2`, `catatan`, `waktu`) VALUES
(9, 'Ikhwan', '230931', 'Ayam bakar bukit tiara', 'Telor', 'Tumis Kangkung', 'Buat Ibu Ita', '2024-07-03 16:16:48'),
(10, 'Ahmad Fauzi', '123456789', 'Ayam Goreng', 'Tahu', 'Tempe', 'Suka pedas', '2024-07-01 16:20:34'),
(11, 'Budi Santoso', '987654321', 'Ikan Bakar', 'Sambal', 'Sayur Asem', 'Tidak suka pedas', '2024-07-01 16:20:34'),
(12, 'Citra Lestari', '112233445', 'Rendang', 'Kentang', 'Bihun', 'Tidak ada catatan khusus', '2024-07-01 16:20:34'),
(13, 'Dedi Prasetyo', '998877665', 'Sate', 'Lontong', 'Acar', 'Suka manis', '2024-07-01 16:20:34'),
(14, 'Erika Putri', '556677889', 'Gulai', 'Sayur Bayam', 'Perkedel', 'Makan sedikit', '2024-07-01 16:20:34'),
(15, 'Faisal Akbar', '665544332', 'Sup', 'Bakwan', 'Kerupuk', 'Tidak ada catatan khusus', '2024-07-01 16:20:34'),
(16, 'Gita Purnama', '443322110', 'Nasi Goreng', 'Telur', 'Sosis', 'Suka asin', '2024-07-01 16:20:34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
