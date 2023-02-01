-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2023 pada 08.31
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`) VALUES
(1, '1A Reg BJM'),
(2, '1B Reg BJM'),
(3, '2A Reg BJM'),
(5, '2B Reg BJM'),
(6, '3A Reg BJM'),
(7, '3B Reg BJM'),
(8, '4A Reg BJM'),
(9, '4B Reg BJM'),
(10, '5A Reg BJM'),
(11, '5B Reg BJM'),
(12, '6A Reg BJM'),
(13, '6B Reg BJM'),
(14, '7A Reg BJM'),
(15, '7B Reg BJM'),
(16, '8A Reg BJM'),
(17, '8B Reg BJM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` char(11) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mahasiswa`, `jk`, `id_prodi`, `id_semester`, `id_kelas`, `id_tahun`) VALUES
('2010010001', 'Putri Ridha Amalia', 'P', 3, 3, 7, 6),
('2010010002', 'Afan Zein', 'L', 7, 3, 7, 6),
('2010010003', 'Iqbal Habibie', 'L', 7, 3, 7, 6),
('2010010149', 'Aqsal Arya Buana', 'L', 3, 9, 6, 3),
('2010010296', 'Aldi Tiarahman', 'L', 1, 3, 6, 6),
('2010010377', 'Nadia Nabila', 'P', 2, 5, 10, 5),
('2010010420', 'Gina Rahmah Yulia', 'P', 2, 5, 11, 5),
('2010010441', 'Muhammad Robbianoor Ilhamni', 'L', 2, 5, 10, 5),
('2010010568', 'Muhammad Ade Indra Mustafa', 'L', 1, 5, 11, 5),
('2010010646', 'Muhammad Edwan Nidzar', 'L', 2, 5, 10, 5),
('2010010689', 'Muhammad Abdillah', 'L', 2, 5, 11, 5),
('2010010724', 'Maldini Haryadi Saputra', 'L', 1, 5, 10, 5),
('2010010756', 'I Gusti Agus Andika Gunawan', 'L', 1, 5, 10, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`) VALUES
(1, 'Fakultas Teknik'),
(2, 'Fakultas Teknologi Informasi'),
(3, 'Fakultas Studi Islam'),
(5, 'Fakultas Keguruan dan Ilmu Pendidikan'),
(6, 'Fakultas Ekonomi'),
(7, 'Fakultas Hukum'),
(8, 'Fakultas Ilmu Sosial dan Ilmu Politik'),
(9, 'Fakultas Pertanian'),
(10, 'Fakultas Kesehatan Masyarakat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE `semester` (
  `id_semester` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `semester`
--

INSERT INTO `semester` (`id_semester`, `semester`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_angkatan`
--

CREATE TABLE `tahun_angkatan` (
  `id_tahun` int(11) NOT NULL,
  `tahun_angkatan` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tahun_angkatan`
--

INSERT INTO `tahun_angkatan` (`id_tahun`, `tahun_angkatan`) VALUES
(1, 2017),
(3, 2018),
(4, 2019),
(5, 2020),
(6, 2021),
(7, 2022),
(8, 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `role`) VALUES
(1, 'edwan', 'edwan', 'Edwan Nidzar', 'admin'),
(2, 'admin', 'admin', 'admin', 'admin'),
(3, 'user', 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `id_prodi` (`id_prodi`),
  ADD KEY `id_semester` (`id_semester`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_tahun` (`id_tahun`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indeks untuk tabel `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indeks untuk tabel `tahun_angkatan`
--
ALTER TABLE `tahun_angkatan`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `semester`
--
ALTER TABLE `semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tahun_angkatan`
--
ALTER TABLE `tahun_angkatan`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
