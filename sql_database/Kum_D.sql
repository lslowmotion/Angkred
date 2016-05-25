-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2016 at 07:10 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_angkred`
--

-- --------------------------------------------------------

--
-- Table structure for table `kum_d`
--

CREATE TABLE IF NOT EXISTS `kum_d` (
  `id_kumd` int(11) NOT NULL,
  `id_kredit` int(2) NOT NULL,
  `uraian_kegiatan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `satuan_hasil` varchar(15) NOT NULL,
  `volume_kegiatan` int(2) NOT NULL,
  `angka_kredit` varchar(4) NOT NULL,
  `jumlah_angkakredit` varchar(4) NOT NULL,
  `bukti` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kum_d`
--

INSERT INTO `kum_d` (`id_kumd`, `id_kredit`, `uraian_kegiatan`, `tanggal`, `satuan_hasil`, `volume_kegiatan`, `angka_kredit`, `jumlah_angkakredit`, `bukti`) VALUES
(2, 9, 'asdadsad', '2016-05-05', 'Tiap Program', 1, '2', '2', ''),
(3, 6, 'adafdvxcvcvbcvb', '2016-05-05', 'Tiap Program', 1, '2', '2', ''),
(4, 6, 'Kegiatan', '2016-05-19', 'Tiap Program', 1, '2', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `kum_d_kredit`
--

CREATE TABLE IF NOT EXISTS `kum_d_kredit` (
  `options` int(2) NOT NULL,
  `kredit` varchar(4) NOT NULL,
  `satuan_hasil` varchar(15) NOT NULL,
  `komponen` varchar(200) NOT NULL,
  `parent2` varchar(200) NOT NULL,
  `parent1` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kum_d_kredit`
--

INSERT INTO `kum_d_kredit` (`options`, `kredit`, `satuan_hasil`, `komponen`, `parent2`, `parent1`) VALUES
(1, '5.5', 'Tiap Semester', 'D.1. Menduduki jabatan pimpinan pada lembaga pemerintahan/ pejabat negara yang harus dibebaskan dari jabatan organiknya tiap semester', '', ''),
(2, '3', 'Tiap Program', 'D.2. Melaksanakan pengembangan hasil pendidikan, dan penelitian yang dapat dimanfaatkan oleh masyarakat/ industri setiap program', '', ''),
(4, '4', 'Tiap Program', 'Tingkat Internasional tiap program', 'Dalam satu semester atau lebih', 'D.3. Memberi latihan/ penyuluhan/ penataran/ ceramah pada masyarakat, terjadwal/ terprogram'),
(5, '3', 'Tiap Program', 'Tingkat Nasional, tiap program', 'Dalam satu semester atau lebih', 'D.3. Memberi latihan/ penyuluhan/ penataran/ ceramah pada masyarakat, terjadwal/ terprogram'),
(6, '2', 'Tiap Program', 'Tingkat Lokal, tiap program', 'Dalam satu semester atau lebih', 'D.3. Memberi latihan/ penyuluhan/ penataran/ ceramah pada masyarakat, terjadwal/ terprogram'),
(8, '3', 'Tiap Program', 'Tingkat Internasional, tiap program', 'Kurang dari satu semester dan minimal satu bulan', 'D.3. Memberi latihan/ penyuluhan/ penataran/ ceramah pada masyarakat, terjadwal/ terprogram'),
(9, '2', 'Tiap Program', 'Tingkat Nasional, tiap program', 'Kurang dari satu semester dan minimal satu bulan', 'D.3. Memberi latihan/ penyuluhan/ penataran/ ceramah pada masyarakat, terjadwal/ terprogram'),
(10, '1', 'Tiap Program', 'Tingkat Lokal, tiap program', 'Kurang dari satu semester dan minimal satu bulan', 'D.3. Memberi latihan/ penyuluhan/ penataran/ ceramah pada masyarakat, terjadwal/ terprogram'),
(11, '1', 'Tiap Program', 'Insidental, tiap kegiatan/ program', 'Kurang dari satu semester dan minimal satu bulan', 'D.3. Memberi latihan/ penyuluhan/ penataran/ ceramah pada masyarakat, terjadwal/ terprogram'),
(13, '1.5', 'Tiap Program', 'Berdasarkan bidang keahlian, tiap program', 'D.4. Memberi pelayanan kepada masyarakat atau kegiatan lain yang menunjang pelaksanaan tugas pemerintahan dan pembangunan', ''),
(14, '1', 'Tiap Program', 'Berdasarkan penugasan lembaga perguruan tinggi, tiap program', 'D.4. Memberi pelayanan kepada masyarakat atau kegiatan lain yang menunjang pelaksanaan tugas pemerintahan dan pembangunan', ''),
(15, '0.5', 'Tiap Program', 'Berdasarkan fungsi/ jabatan tiap program', 'D.4. Memberi pelayanan kepada masyarakat atau kegiatan lain yang menunjang pelaksanaan tugas pemerintahan dan pembangunan', ''),
(16, '3', 'Tiap Karya', 'D.5. Membuat/ menulis karya pengabdian pada masyarakat yang tidak dipublikasikan tiap karya', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kum_d`
--
ALTER TABLE `kum_d`
  ADD PRIMARY KEY (`id_kumd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kum_d`
--
ALTER TABLE `kum_d`
  MODIFY `id_kumd` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
