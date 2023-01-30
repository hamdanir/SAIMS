-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 05:59 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pesantren`
--

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(10) NOT NULL,
  `nama_kegiatan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `keterangan`) VALUES
(24, 'sorogan', ' sorogan'),
(25, 'ngaji', ' ngaji'),
(26, 'jamaah', ' 5 waktu'),
(27, 'bandongan', 'kitab ');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_tes_masuk`
--

CREATE TABLE `nilai_tes_masuk` (
  `id_tes_masuk` int(10) NOT NULL,
  `id_pendaftaran` int(10) NOT NULL,
  `wawancara` int(4) NOT NULL,
  `ngaji` int(4) NOT NULL,
  `peminatan` int(4) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_tes_masuk`
--

INSERT INTO `nilai_tes_masuk` (`id_tes_masuk`, `id_pendaftaran`, `wawancara`, `ngaji`, `peminatan`, `keterangan`) VALUES
(11, 14, 80, 80, 80, 'lanjut'),
(12, 15, 80, 88, 99, 'lanjut'),
(13, 16, 90, 99, 80, 'lajut'),
(14, 17, 78, 99, 65, 'hdsf'),
(15, 18, 22, 22, 22, 'fgs');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `no_hp_santri` int(15) NOT NULL,
  `no_hp_wali` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status_seleksi` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `nama`, `alamat`, `tgl_lahir`, `jk`, `no_hp_santri`, `no_hp_wali`, `email`, `status_seleksi`, `status`) VALUES
(14, 'malvin', 'monjali', '2007-06-05', 'L', 746383826, 2147483647, 'malvin@mail.com', 'Y', 'Diterima'),
(15, 'faisyal', 'kotagede', '2016-06-23', 'L', 4628324, 258372347, 'ical@mail.com', 'Y', 'Diterima'),
(16, 'kung', 'bantul', '2002-07-24', 'L', 47387234, 472648734, 'kung@mail.com', 'Y', 'Diterima'),
(17, 'venna', 'krapyak', '2022-01-18', 'P', 376853624, 32764234, 'venn@mail.com', 'Y', 'Diterima'),
(18, 'boy', 'rumah', '2022-01-20', 'P', 262534, 2347324, 'boy@mail.com', 'N', 'Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(10) NOT NULL,
  `nama_pengguna` varchar(100) NOT NULL,
  `level` enum('admin','wali santri','santri') NOT NULL,
  `email_pengguna` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `level`, `email_pengguna`, `password`, `foto`) VALUES
(1, 'hamdan', 'admin', 'hamdan@email.com', '12345', ''),
(8, 'kung', 'admin', 'kung@mail.com', 'kung', ''),
(12, 'zahro', 'admin', 'kung@mail.com', 'zahro', '');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_kegiatan`
--

CREATE TABLE `penilaian_kegiatan` (
  `id_penilaian` int(10) NOT NULL,
  `NIS` int(10) NOT NULL,
  `id_kegiatan` int(10) NOT NULL,
  `tgl_penilaian` date NOT NULL,
  `nilai` int(4) NOT NULL,
  `keterangan` text NOT NULL,
  `id_admin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `perizinan_kegiatan`
--

CREATE TABLE `perizinan_kegiatan` (
  `id_presensi` int(10) NOT NULL,
  `NIS` int(10) NOT NULL,
  `id_kegiatan` int(10) NOT NULL,
  `tgl_ijin` date NOT NULL,
  `keterangan` text NOT NULL,
  `id_admin` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perizinan_kegiatan`
--

INSERT INTO `perizinan_kegiatan` (`id_presensi`, `NIS`, `id_kegiatan`, `tgl_ijin`, `keterangan`, `id_admin`) VALUES
(6, 6, 24, '2022-01-28', 'sakit', NULL),
(7, 6, 24, '2022-01-29', 'dfsf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `perizinan_pulang`
--

CREATE TABLE `perizinan_pulang` (
  `id_perizinan` int(10) NOT NULL,
  `NIS` int(10) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `keterangan` text NOT NULL,
  `bukti_izin` varchar(30) DEFAULT NULL,
  `id_admin` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perizinan_pulang`
--

INSERT INTO `perizinan_pulang` (`id_perizinan`, `NIS`, `tgl_mulai`, `tgl_selesai`, `keterangan`, `bukti_izin`, `id_admin`) VALUES
(10, 5, '2022-01-28', '2022-02-02', 'walimah', NULL, NULL),
(11, 7, '2022-01-29', '2022-01-30', 'asgfdd', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `NIS` int(10) NOT NULL,
  `id_pendaftaran` int(10) NOT NULL,
  `krs` varchar(100) DEFAULT NULL,
  `bukti_pembayaran` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`NIS`, `id_pendaftaran`, `krs`, `bukti_pembayaran`) VALUES
(5, 14, NULL, NULL),
(6, 15, NULL, NULL),
(7, 16, NULL, NULL),
(8, 17, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `nilai_tes_masuk`
--
ALTER TABLE `nilai_tes_masuk`
  ADD PRIMARY KEY (`id_tes_masuk`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `penilaian_kegiatan`
--
ALTER TABLE `penilaian_kegiatan`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `perizinan_kegiatan`
--
ALTER TABLE `perizinan_kegiatan`
  ADD PRIMARY KEY (`id_presensi`);

--
-- Indexes for table `perizinan_pulang`
--
ALTER TABLE `perizinan_pulang`
  ADD PRIMARY KEY (`id_perizinan`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`NIS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `nilai_tes_masuk`
--
ALTER TABLE `nilai_tes_masuk`
  MODIFY `id_tes_masuk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `penilaian_kegiatan`
--
ALTER TABLE `penilaian_kegiatan`
  MODIFY `id_penilaian` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perizinan_kegiatan`
--
ALTER TABLE `perizinan_kegiatan`
  MODIFY `id_presensi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `perizinan_pulang`
--
ALTER TABLE `perizinan_pulang`
  MODIFY `id_perizinan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `NIS` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
