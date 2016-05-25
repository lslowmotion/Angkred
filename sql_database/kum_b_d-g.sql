-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Mei 2016 pada 06.19
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_angkred`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kum_b_d-g`
--

CREATE TABLE `kum_b_d-g` (
  `id` int(11) NOT NULL,
  `komponen_kegiatan` varchar(50) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `batasMax` int(11) NOT NULL,
  `angkred` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kum_b_d-g`
--

INSERT INTO `kum_b_d-g` (`id`, `komponen_kegiatan`, `kode`, `batasMax`, `angkred`) VALUES
(1, 'Membimbing Disertasi', 'II.D.1.a', 4, 8),
(2, 'Membimbing Tesis', 'II.D.1.b', 6, 3),
(3, 'Membimbing Skripsi', 'II.D.1.c', 8, 1),
(4, 'Membimbing TA', 'II.D.1.d', 10, 1),
(5, 'Pembimbing Pembantu Disertasi', 'II.D.2.a', 4, 6),
(6, 'Pembimbing Pembantu Tesis', 'II.D.2.b', 6, 2),
(7, 'Pembimbing Pembantu Skripsi', 'II.D.2.c', 8, 0.5),
(8, 'Pembimbing Pembantu TA', 'II.D.2.d', 10, 0.5),
(9, 'Bertugas Ketua Penguji Ujian Akhir', 'II.E.1', 4, 1),
(10, 'Bertugas Anggota Penguji Ujian Akhir', 'II.E.2', 8, 0.5),
(11, 'Membina Kegiatan Mahasiswa di bidang akademik dan ', 'II.F', 2, 2),
(12, 'Mengembangkan program kuliah yang mempunyai nilai ', 'II.G', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kum_b_d-g`
--
ALTER TABLE `kum_b_d-g`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kum_b_d-g`
--
ALTER TABLE `kum_b_d-g`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
