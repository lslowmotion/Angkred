-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2016 at 09:21 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

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
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `password`, `nama`) VALUES
('212', '6ece8f860ecc6eb67f672107cd807a3a', 'Laatansa, S.Psi'),
('240', 'ce28eed1511f631af6b2a7bb0a85d636', 'Ranu Wijaya Putra S.Kom');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` varchar(8) NOT NULL,
  `jenis_kegiatan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `jenis_kegiatan`) VALUES
('E.1.', 'Menjadi anggota dalam suatu Panitia/ Badan pada perguruan Tinggi'),
('E.10.', 'Mempunyai prestasi dibidang olahraga/ Humaniora'),
('E.11.', 'Keanggotaan dalam tim penilai jabatan akademik dosen (tiap semester)'),
('E.2.', 'Menjadi anggota panitia/ badan pada lembaga pemerintah'),
('E.3.', 'Menjadi anggota organisasi profesi'),
('E.4.', 'Mewakili Perguruan Tinggi/ Lembaga Pemerintah duduk dalam Panitia Antar Lembaga, tiap kepanitiaan'),
('E.5.', 'Menjadi anggota delegasi Nasional ke pertemuan Internasional'),
('E.6.', 'Berperan serta aktif dalam pengelolaan jurnal ilmiah (pertahun)'),
('E.7.', 'Berperan serta aktif dalam pertemuan ilmiah'),
('E.8.', 'Mendapatkan tanda jasa/ penghargaan'),
('E.9.', 'Menulis buku pelajaran SLTA ke bawah yang diterbitkan dan diedarkan secara nasional');

-- --------------------------------------------------------

--
-- Table structure for table `kum_e`
--

CREATE TABLE `kum_e` (
  `id_kum` varchar(7) NOT NULL,
  `id_kegiatan` varchar(8) NOT NULL,
  `komponen_kegiatan` varchar(200) DEFAULT NULL,
  `angka_kredit` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kum_e`
--

INSERT INTO `kum_e` (`id_kum`, `id_kegiatan`, `komponen_kegiatan`, `angka_kredit`) VALUES
('E.1.A', 'E.1.', 'Sebagai Ketua/ Wakil ketua merangkap anggota, tiap tahun.', 3),
('E.1.B', 'E.1.', 'Sebagai Anggota, tiap tahun', 2),
('E.10.A', 'E.10.', 'Tingkat Internasional, tiap piagam/ medali', 5),
('E.10.B', 'E.10.', 'Tingkat Nasional, tiap piagam/ medali', 3),
('E.10.C', 'E.10.', 'Tingkat Daerah/Lokal, tiap piagam/ medali', 1),
('E.11', 'E.11.', 'Keanggotaan dalam tim penilai jabatan akademik dosen (tiap semester)', 0.5),
('E.2.A.1', 'E.2.', 'Panitia Pusat, sebagai Ketua/ Wakil Ketua, tiap kepanitiaan', 3),
('E.2.A.2', 'E.2.', 'Panitia Pusat, sebagai Anggota, tiap kepanitiaan', 2),
('E.2.B.1', 'E.2.', 'Panitia Daerah, sebagai Ketua/ Wakil Ketua, tiap kepanitiaan', 2),
('E.2.B.2', 'E.2.', 'Panitia Daerah, sebagai Anggota, tiap kepanitiaan', 1),
('E.3.A.1', 'E.3.', 'Tingkat Internasional, sebagai Pengurus tiap periode jabatan', 2),
('E.3.A.2', 'E.3.', 'Tingkat Internasional, sebagai Anggota atas permintaan, tiap periode jabatan', 1),
('E.3.A.3', 'E.3.', 'Tingkat Internasional, sebagai Anggota, tiap periode jabatan', 0.5),
('E.3.B.1', 'E.3.', 'Tingkat Nasional, sebagai Pengurus, tiap periode jabatan', 1.5),
('E.3.B.2', 'E.3.', 'Tingkat Nasional, sebagai Anggota atas permintaan, tiap periode jabatan', 1),
('E.3.B.3', 'E.3.', 'Tingkat Nasional, sebagai Anggota, tiap periode jabatan', 0.5),
('E.4', 'E.4.', 'Mewakili Perguruan Tinggi/Lembaga Pemerintah duduk dalam Panitia Antar Lembaga, tiap kepanitiaan', 1),
('E.5.A', 'E.5.', 'Sebagai Ketua delegasi, tiap kegiatan', 3),
('E.5.B', 'E.5.', 'Sebagai Anggota, tiap kegiatan', 2),
('E.6.A', 'E.6.', 'Editor/dewan penyunting/dewan redaksi jurnal ilmiah internasional', 4),
('E.6.B', 'E.6.', 'Editor/dewan penyunting/dewan redaksi jurnal ilmiah nasional', 2),
('E.7.A.1', 'E.7.', 'Tingkat Internasional/ Nasional/ Regional sebagai Ketua, tiap kegiatan', 3),
('E.7.A.2', 'E.7.', 'Tingkat Internasional/ Nasional/ Regional sebagai Anggota/ peserta, tiap kegiatan', 2),
('E.7.B.1', 'E.7.', 'Di lingkungan Perguruan Tinggi sebagai Ketua, tiap kegiatan', 2),
('E.7.B.2', 'E.7.', 'Di lingkungan Perguruan Tinggi sebagai Anggota/ peserta, tiap kegiatan', 1),
('E.8.A', 'E.8.', 'Penghargaan/ tanda jasa Satya lencana 30 tahun', 3),
('E.8.B', 'E.8.', 'Penghargaan/ tanda jasa Satya lencana 20 tahun', 2),
('E.8.C', 'E.8.', 'Penghargaan/ tanda jasa Satya lencana 10 tahun', 1),
('E.8.D', 'E.8.', 'Tingkat Internasional, tiap tanda jasa/ penghargaan', 5),
('E.8.E', 'E.8.', 'Tingkat Nasional, tiap tanda jasa/ penghargaan', 3),
('E.8.F', 'E.8.', 'Tingkat Daerah/Lokal, tiap tanda jasa/ penghargaan', 1),
('E.9.A', 'E.9.', 'Buku SMTA atau setingkat, tiap buku', 5),
('E.9.B', 'E.9.', 'Buku SMTP atau setingkat, tiap buku', 5),
('E.9.C', 'E.9.', 'Buku SD atau setingkat, tiap buku', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pengambilan_kume`
--

CREATE TABLE `pengambilan_kume` (
  `id` int(5) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `id_kum` varchar(7) NOT NULL,
  `uraian_kegiatan` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `satuan_hasil` varchar(30) NOT NULL,
  `volume_kegiatan` int(2) NOT NULL,
  `file_bukti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengambilan_kume`
--

INSERT INTO `pengambilan_kume` (`id`, `nip`, `id_kum`, `uraian_kegiatan`, `tanggal`, `satuan_hasil`, `volume_kegiatan`, `file_bukti`) VALUES
(2, '240', 'E.1.A', 'uraian', '2016-10-12', 'kegiatan', 0, ''),
(3, '240', 'E.1.A', 'uraian', '2014-12-10', 'kegiatan', 0, ''),
(4, '240', 'E.2.B.1', 'uraian', '0000-00-00', '2', 6, ''),
(5, '240', 'E.3.A.3', 'uraian', '2016-03-01', 'kegiatan', 3, ''),
(6, '240', 'E.1.A', 'Uraian', '2016-11-12', 'kegiatan lagi', 2, ''),
(7, '240', 'E.1.A', 'Ini Uraian', '2016-01-01', 'kegiatan lagi', 3, ''),
(8, '240', 'E.3.A.1', 'Ini Uraian Ya', '2016-05-01', 'Tingkiwing', 7, ''),
(9, '240', 'E.4', 'Tingka', '2015-06-08', 'Lala', 4, ''),
(10, '240', 'E.2.A.2', 'Test', '2016-08-03', '90', 60, ''),
(11, '240', 'E.2.A.1', 'Uraian', '2015-12-02', 'hujan', 8, ''),
(12, '240', 'E.2.A.2', '3', '2016-02-12', '111', 1, ''),
(13, '240', 'E.1.A', '1', '2016-12-12', '8', 8, ''),
(14, '240', 'E.3.A.2', '90', '0000-00-00', '90', 90, ''),
(15, '240', 'E.2.A.1', '14', '0000-00-00', '14', 14, ''),
(16, '240', 'E.2.A.1', '1!', '0000-00-00', '1', 1, ''),
(17, '240', 'E.4', '5^7', '0000-00-00', '(', 8, ''),
(18, '240', 'E.2.B.2', '1', '0000-00-00', '2', 2, ''),
(19, '240', 'E.4', '2', '0000-00-00', '4', 2, '240/1463980257pedoman_umum_pkl.pdf'),
(20, '240', 'E.4', 'Ranu Belum Mandi', '2016-05-06', 'Kegiatan Lah Yau', 7, '1463987507Curriculum Vitae(CV).pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `kum_e`
--
ALTER TABLE `kum_e`
  ADD PRIMARY KEY (`id_kum`),
  ADD KEY `id_kegiatan` (`id_kegiatan`);

--
-- Indexes for table `pengambilan_kume`
--
ALTER TABLE `pengambilan_kume`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengambilan_kume`
--
ALTER TABLE `pengambilan_kume`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kum_e`
--
ALTER TABLE `kum_e`
  ADD CONSTRAINT `kum_e_ibfk_1` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`) ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
