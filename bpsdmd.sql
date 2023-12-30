-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 02:46 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpsdmd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tadmin`
--

CREATE TABLE `tadmin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `admin` varchar(128) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tadmin`
--

INSERT INTO `tadmin` (`id_admin`, `username`, `admin`, `password`, `foto`, `level`) VALUES
(1, 'ade', 'Ade Fatahilah', '202cb962ac59075b964b07152d234b70', 'IMG_1940.JPG', 1),
(2, 'admin', 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'profile1.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tgambar`
--

CREATE TABLE `tgambar` (
  `id_gambar` int(11) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `id_ruangan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tgambar`
--

INSERT INTO `tgambar` (`id_gambar`, `gambar`, `id_ruangan`) VALUES
(111, 'Aula(I).jpg', 11),
(112, 'Aula(IH).jpg', 11),
(113, 'Aula(I)In.jpg', 11),
(121, 'Asrama(I).jpg', 12),
(122, 'Asrama(I)In.jpg', 12),
(211, 'Aula(II).jpg', 21),
(212, 'Aula(II)In.jpg', 21),
(213, 'Aula(II)s.jpg', 21),
(221, 'Asrama(II).jpg', 22),
(222, 'Asrama(II)In.jpg', 22),
(223, 'Asrama(II)L.jpg', 22),
(251, 'GH.jpg', 25),
(252, 'GH In.jpg', 25);

-- --------------------------------------------------------

--
-- Table structure for table `tkonfirmasipembayaran`
--

CREATE TABLE `tkonfirmasipembayaran` (
  `id_sewa` int(5) NOT NULL,
  `tglbyr` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `nm_kegiatan` varchar(50) NOT NULL,
  `id_ruangan` int(5) NOT NULL,
  `quantity_r` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_berakhir` date NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `total_biaya` int(11) NOT NULL,
  `buktibayar` varchar(128) NOT NULL,
  `statuspembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tpenyewaan`
--

CREATE TABLE `tpenyewaan` (
  `id_sewa` int(5) NOT NULL,
  `tgl_sewa` datetime NOT NULL,
  `id_permohonan` int(11) NOT NULL,
  `nm_kegiatan` varchar(50) NOT NULL,
  `id_ruangan` int(128) NOT NULL,
  `potongan` int(11) NOT NULL,
  `quantity_r` int(11) NOT NULL,
  `lm_sewa` int(11) NOT NULL,
  `peserta` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_berakhir` date NOT NULL,
  `penyelenggara` varchar(128) NOT NULL,
  `buktibyr` varchar(100) NOT NULL,
  `konfirmasi` enum('Menunggu','Sudah Dikonfirmasi','Ditolak') NOT NULL,
  `total_biaya` int(11) NOT NULL,
  `is_read2` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tpenyewaan`
--

INSERT INTO `tpenyewaan` (`id_sewa`, `tgl_sewa`, `id_permohonan`, `nm_kegiatan`, `id_ruangan`, `potongan`, `quantity_r`, `lm_sewa`, `peserta`, `tgl_mulai`, `tgl_berakhir`, `penyelenggara`, `buktibyr`, `konfirmasi`, `total_biaya`, `is_read2`) VALUES
(13, '2022-09-27 02:41:13', 17, 'Pelatihan', 22, 3000000, 1, 1, 150, '2022-09-28', '2022-09-28', 'Dinas Perikanan', 'download4.png', 'Sudah Dikonfirmasi', 250000, 1),
(14, '2022-10-13 13:04:06', 18, 'Pelatihan', 21, 3000000, 1, 1, 100, '2022-09-28', '2022-09-28', 'Dinas Perikanan', 'download5.png', 'Sudah Dikonfirmasi', 3500000, 1),
(16, '2023-08-16 17:03:57', 15, 'Seminar Desain', 11, 0, 1, 1, 150, '2023-08-17', '2023-08-17', 'Erwin', 'Untitled-1.png', 'Sudah Dikonfirmasi', 5000000, 1),
(17, '2023-08-19 20:49:55', 16, 'Pelantikan', 11, 0, 1, 1, 20, '2023-08-20', '2023-08-20', 'Dishub', '', 'Menunggu', 5000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tpermohonan`
--

CREATE TABLE `tpermohonan` (
  `id_permohonan` int(11) NOT NULL,
  `tgl_surat` datetime NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `permohonan` varchar(100) NOT NULL,
  `status` enum('Menunggu','Diterima') NOT NULL,
  `is_read` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tpermohonan`
--

INSERT INTO `tpermohonan` (`id_permohonan`, `tgl_surat`, `nama`, `alamat`, `email`, `no_telp`, `permohonan`, `status`, `is_read`) VALUES
(15, '2022-07-19 09:45:40', 'Erwin', 'Jalan', 'erwin@gmail.com', '+6287814375867', 'Ini_hanya_contoh_surat_lamaran1.docx', 'Menunggu', 1),
(16, '2022-09-27 00:29:25', 'Ade Fatahilah', 'Jalan Trikora', 'adefatahilah3@gmail.com', '+628773777777', 'Ini_hanya_contoh_surat_lamaran5.docx', 'Menunggu', 1),
(17, '2022-09-27 02:39:10', 'Fatahilah Ade', 'Pondok H', 'Fatahilahade@gmail.com', '+6287878787787', 'Ini_hanya_contoh_surat_lamaran6.docx', 'Menunggu', 1),
(18, '2022-10-13 13:00:32', 'Fatahilah Ade', 'Jalan Trikora Pondok Halim Permai', 'adefatahilah3@gmail.com', '+6287737718666', 'Ini_hanya_contoh_surat_lamaran7.docx', 'Menunggu', 1),
(19, '2023-01-23 13:13:47', 'Jalesu', 'Barabai', 'jale@gmail.com', '+62888878', 'Ini_hanya_contoh_surat_lamaran71.docx', 'Menunggu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `truangan`
--

CREATE TABLE `truangan` (
  `id_ruangan` int(5) NOT NULL,
  `nm_ruangan` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `potongan` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `jmlh_r` int(11) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `luas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `truangan`
--

INSERT INTO `truangan` (`id_ruangan`, `nm_ruangan`, `harga`, `potongan`, `keterangan`, `jmlh_r`, `kapasitas`, `luas`) VALUES
(11, 'Gedung/Aula (Kampus I)', 5000000, 3000000, '', 1, 200, 0),
(12, 'Asrama (Kampus I)', 300000, 50000, '', 120, 240, 0),
(21, 'Gedung/Aula (Kampus II)', 3500000, 2500000, '', 1, 160, 0),
(22, 'Asrama (Kampus II)', 250000, 50000, '', 80, 160, 0),
(25, 'Guest House (Kampus II)', 250000, 0, '', 12, 24, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tadmin`
--
ALTER TABLE `tadmin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tgambar`
--
ALTER TABLE `tgambar`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_ruangan` (`id_ruangan`);

--
-- Indexes for table `tkonfirmasipembayaran`
--
ALTER TABLE `tkonfirmasipembayaran`
  ADD PRIMARY KEY (`id_sewa`),
  ADD KEY `id_ruangan` (`id_ruangan`);

--
-- Indexes for table `tpenyewaan`
--
ALTER TABLE `tpenyewaan`
  ADD PRIMARY KEY (`id_sewa`),
  ADD KEY `id_ruangan` (`id_ruangan`),
  ADD KEY `id_permohonan` (`id_permohonan`);

--
-- Indexes for table `tpermohonan`
--
ALTER TABLE `tpermohonan`
  ADD PRIMARY KEY (`id_permohonan`);

--
-- Indexes for table `truangan`
--
ALTER TABLE `truangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tadmin`
--
ALTER TABLE `tadmin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tkonfirmasipembayaran`
--
ALTER TABLE `tkonfirmasipembayaran`
  MODIFY `id_sewa` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tpenyewaan`
--
ALTER TABLE `tpenyewaan`
  MODIFY `id_sewa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tpermohonan`
--
ALTER TABLE `tpermohonan`
  MODIFY `id_permohonan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tgambar`
--
ALTER TABLE `tgambar`
  ADD CONSTRAINT `tgambar_ibfk_1` FOREIGN KEY (`id_ruangan`) REFERENCES `truangan` (`id_ruangan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tpenyewaan`
--
ALTER TABLE `tpenyewaan`
  ADD CONSTRAINT `tpenyewaan_ibfk_2` FOREIGN KEY (`id_permohonan`) REFERENCES `tpermohonan` (`id_permohonan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tpenyewaan_ibfk_3` FOREIGN KEY (`id_ruangan`) REFERENCES `truangan` (`id_ruangan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
