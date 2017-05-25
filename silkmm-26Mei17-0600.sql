-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2017 at 01:00 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silkmm`
--
CREATE DATABASE IF NOT EXISTS `silkmm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `silkmm`;

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `berkas_id` int(11) NOT NULL,
  `berkas_link` text NOT NULL,
  `fk_berkas_peserta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`berkas_id`, `berkas_link`, `fk_berkas_peserta`) VALUES
(2, 'berkas/5116100001/5116100001.zip', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ceklis`
--

CREATE TABLE `ceklis` (
  `ceklis_id` int(11) NOT NULL,
  `ceklis_kemeja` int(11) DEFAULT NULL,
  `ceklis_almamater` int(11) DEFAULT NULL,
  `ceklis_bawahan` int(11) DEFAULT NULL,
  `ceklis_dasi` int(11) DEFAULT NULL,
  `ceklis_ktm` int(11) DEFAULT NULL,
  `ceklis_waktu` timestamp NULL DEFAULT NULL,
  `fk_ceklis_peserta` int(11) DEFAULT NULL,
  `fk_ceklis_hari` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ceklis`
--

INSERT INTO `ceklis` (`ceklis_id`, `ceklis_kemeja`, `ceklis_almamater`, `ceklis_bawahan`, `ceklis_dasi`, `ceklis_ktm`, `ceklis_waktu`, `fk_ceklis_peserta`, `fk_ceklis_hari`) VALUES
(1, 1, 1, 1, 1, 1, '2017-05-25 17:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `hari_id` int(11) NOT NULL,
  `hari` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`hari_id`, `hari`) VALUES
(1, '2017-05-26'),
(2, '2017-05-27'),
(3, '2017-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kelas_id` int(11) NOT NULL,
  `kelas_kuota` int(11) NOT NULL,
  `kelas_nama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kelas_id`, `kelas_kuota`, `kelas_nama`) VALUES
(1, 30, 'IF 101'),
(2, 30, 'IF 102'),
(3, 30, 'IF 103'),
(4, 30, 'IF 104'),
(5, 100, 'IF 105');

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner`
--

CREATE TABLE `kuesioner` (
  `kuesioner_id` int(11) NOT NULL,
  `kuesioner_time` timestamp NULL DEFAULT NULL,
  `kuesioner_status` char(2) DEFAULT '0',
  `fk_kuesioner_materi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuesioner`
--

INSERT INTO `kuesioner` (`kuesioner_id`, `kuesioner_time`, `kuesioner_status`, `fk_kuesioner_materi`) VALUES
(1, '2017-05-14 20:03:13', '1', 1),
(2, '2017-05-14 20:24:02', '1', 2),
(3, NULL, '0', 3),
(4, NULL, '0', 4),
(5, NULL, '0', 5),
(6, NULL, '0', 6);

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner_jawab`
--

CREATE TABLE `kuesioner_jawab` (
  `kuesioner_jawab_id` int(11) NOT NULL,
  `kuesioner_jawab_id_peserta` int(11) DEFAULT NULL,
  `kuesioner_jawab_11` int(11) DEFAULT NULL,
  `kuesioner_jawab_12` int(11) DEFAULT NULL,
  `kuesioner_jawab_13` int(11) DEFAULT NULL,
  `kuesioner_jawab_14` int(11) DEFAULT NULL,
  `kuesioner_jawab_15` int(11) DEFAULT NULL,
  `kuesioner_jawab_16` int(11) DEFAULT NULL,
  `kuesioner_jawab_21` int(11) DEFAULT NULL,
  `kuesioner_jawab_22` int(11) DEFAULT NULL,
  `kuesioner_jawab_23` int(11) DEFAULT NULL,
  `kuesioner_jawab_24` int(11) DEFAULT NULL,
  `kuesioner_jawab_25` int(11) DEFAULT NULL,
  `kuesioner_jawab_26` int(11) DEFAULT NULL,
  `kuesioner_jawab_kritik_saran` text,
  `kuesioner_jawab_31` int(11) DEFAULT NULL,
  `kuesioner_jawab_32` int(11) DEFAULT NULL,
  `kuesioner_jawab_33` int(11) DEFAULT NULL,
  `kuesioner_jawab_41` int(11) DEFAULT NULL,
  `kuesioner_jawab_42` int(11) DEFAULT NULL,
  `fk_kuesioner_jawab_kuesioner` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuesioner_jawab`
--

INSERT INTO `kuesioner_jawab` (`kuesioner_jawab_id`, `kuesioner_jawab_id_peserta`, `kuesioner_jawab_11`, `kuesioner_jawab_12`, `kuesioner_jawab_13`, `kuesioner_jawab_14`, `kuesioner_jawab_15`, `kuesioner_jawab_16`, `kuesioner_jawab_21`, `kuesioner_jawab_22`, `kuesioner_jawab_23`, `kuesioner_jawab_24`, `kuesioner_jawab_25`, `kuesioner_jawab_26`, `kuesioner_jawab_kritik_saran`, `kuesioner_jawab_31`, `kuesioner_jawab_32`, `kuesioner_jawab_33`, `kuesioner_jawab_41`, `kuesioner_jawab_42`, `fk_kuesioner_jawab_kuesioner`) VALUES
(1, 1, 4, 3, 3, 3, 4, 4, 3, 3, 3, 4, 3, 4, 'Tetap dijaga semangatnya kak! Cayo!', 3, 3, 3, 4, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `materi_id` int(11) NOT NULL,
  `materi_nama` varchar(100) NOT NULL,
  `materi_pemateri` varchar(50) DEFAULT NULL,
  `materi_fasil` varchar(50) DEFAULT NULL,
  `fk_materi_kelas` int(11) DEFAULT NULL,
  `fk_materi_hari` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`materi_id`, `materi_nama`, `materi_pemateri`, `materi_fasil`, `fk_materi_kelas`, `fk_materi_hari`) VALUES
(1, 'Analisis Tema', 'Irfan Hanif', 'Panji Rimawan', 5, 1),
(2, '1-Persepsi', 'Muhammad Hanif', 'Hania Maghfira', 1, 1),
(3, '1-Persepsi', 'Rayhan Gema', 'Hero Akbar', 2, 1),
(4, '2-Kesalahan Berpikir', 'Rani Aulia H.', 'Faiq', 1, 2),
(5, '2-Kesalahan Berpikir', 'Afifah Asmar Sari', 'Firman Aqil', 2, 2),
(6, '2-Kesalahan Berpikir', 'Ghaly Aditya', 'Illham Hanafi', 3, 2),
(7, '3-Mendengar Aktif', 'Panji Rimawan', 'Firman Aqil', 1, 2),
(8, '3-Mendengar Aktif', 'Afifah Asmar Sari', 'Rani Aulia H.', 2, 2),
(9, '4-Berbicara Efektif', 'Irfan Hanif', 'Faiq', 1, 2),
(10, '4-Berbicara Efektif', 'Hania Maghfira', 'Hero Akbar', 2, 2),
(11, '5-A.K.U', 'Muhammad Hanif', 'Rayhan Gema', 1, 2),
(12, '5-A.K.U', 'Elva Maulidah', 'Ghaly Aditya', 2, 2),
(13, '6-AEC', 'Gilang Faqih', 'Illham Hanafi', 5, 2),
(14, '7-S.R.K', 'Illham Hanafi', 'Rani Aulia H.', 1, 3),
(15, '7-S.R.K', 'Afifah Asmar Sari', 'Setyassida Novian', 2, 3),
(16, '8-Pengenalan Diri', 'Faiq', 'Panji Rimawan', 1, 3),
(17, '8-Pengenalan Diri', 'Firman Aqil', 'Ghaly Aditya', 2, 3),
(18, '9-Pengembangan Diri', 'Setyassida Novian', 'Shidqi P', 1, 3),
(19, '9-Pengembangan Diri', 'Irfan Hanif', 'Hania Maghfira', 2, 3),
(20, '10-Aku Mahasiswa', 'Imran Ibnu Fajri', 'Rani Aulia H.', 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pa`
--

CREATE TABLE `pa` (
  `pa_id` int(11) NOT NULL,
  `pa_waktu` datetime DEFAULT NULL,
  `pa_soal_1` text NOT NULL,
  `pa_soal_2` text,
  `pa_soal_3` text,
  `pa_soal_4` text,
  `pa_soal_5` text,
  `fk_pa_materi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pa`
--

INSERT INTO `pa` (`pa_id`, `pa_waktu`, `pa_soal_1`, `pa_soal_2`, `pa_soal_3`, `pa_soal_4`, `pa_soal_5`, `fk_pa_materi`) VALUES
(1, '2017-05-15 04:20:50', 'Pemahaman terhadap tema yang diberikan oleh tim pemandu.', 'Pemahaman terhadap makna dari kebersamaan.', 'Pemahaman terhadap tujuan dari kebersamaan.', NULL, NULL, 1),
(2, '2017-05-26 01:52:06', 'Pemahaman terhadap faktor yang memengaruhi persepsi', 'Pemahaman terhadap dampak positif-negatif dari persepsi', NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pa_jawab`
--

CREATE TABLE `pa_jawab` (
  `pa_jawab_id` int(11) NOT NULL,
  `pa_jawab_id_peserta` int(11) DEFAULT NULL,
  `pa_jawab_1` varchar(5) DEFAULT NULL,
  `pa_jawab_2` varchar(5) DEFAULT NULL,
  `pa_jawab_3` varchar(5) DEFAULT NULL,
  `pa_jawab_4` varchar(5) DEFAULT NULL,
  `pa_jawab_5` varchar(5) DEFAULT NULL,
  `fk_pa_jawab_pa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pa_jawab`
--

INSERT INTO `pa_jawab` (`pa_jawab_id`, `pa_jawab_id_peserta`, `pa_jawab_1`, `pa_jawab_2`, `pa_jawab_3`, `pa_jawab_4`, `pa_jawab_5`, `fk_pa_jawab_pa`) VALUES
(1, 1, '88', '89', NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengumumans`
--

CREATE TABLE `pengumumans` (
  `pengumuman_id` int(11) NOT NULL,
  `pengumuman_judul` varchar(250) NOT NULL,
  `pengumuman_waktu` datetime NOT NULL,
  `pengumuman_konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumumans`
--

INSERT INTO `pengumumans` (`pengumuman_id`, `pengumuman_judul`, `pengumuman_waktu`, `pengumuman_konten`) VALUES
(3, 'Pengumuman Pendaftaran', '2017-05-14 17:49:43', 'Deadline : 20 Mei 2017\nBerkas diupload di bit.ly/asda-wq\nGO!!'),
(5, 'Penutupan Pendaftaran', '2017-05-26 03:45:37', 'BESOK!!\r\nMinggu, 28 Mei 2017 akan ditutup pendaftaran LKMM Pra-TD FTIf ITS.\r\nSegera daftarkan diri kamu sekarang juga!!!');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `peserta_id` int(11) NOT NULL,
  `peserta_nrp` varchar(12) NOT NULL,
  `peserta_nama` varchar(100) NOT NULL,
  `peserta_motivasi` text NOT NULL,
  `peserta_status` int(11) DEFAULT NULL,
  `fk_peserta_kelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`peserta_id`, `peserta_nrp`, `peserta_nama`, `peserta_motivasi`, `peserta_status`, `fk_peserta_kelas`) VALUES
(1, '5116100001', 'Nezar Mahardika', 'Ingin menambah ilmu dan kenalan.', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `rolename` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `rolename`) VALUES
(1, 'pemandu'),
(2, 'oc'),
(3, 'peserta');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `roles_id` int(10) UNSIGNED NOT NULL,
  `nrp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `roles_id`, `nrp`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, '5114100075', '$2y$10$Sc90yENUa8FMFwZGiudBHuKfdiPaMefl15QwNmyHKB0Li3iBNioi6', 'qau69dV3TUogpFJbtx9lq4pSEdPNIrW5tKBM8vmso1QjVavarLDyTRN5BeaB', '2017-05-25 05:55:15', '2017-05-25 05:55:15'),
(2, 2, '5114100052', '$2y$10$u0geTzq8Stx.zdVC2vKVguLsi7Xo3wvcTptdbiZMUYnEVIGzzxfdq', 'dnKGEPM8cf18T7MTZiQHkOYJzKVYHnyLqUM7NXWm490n1t6rftD0ieZtSS7q', '2017-05-25 06:00:19', '2017-05-25 06:00:19'),
(3, 2, '5114100116', '$2y$10$MfkfBBTcZiY36vhao5a9nuUUt5uqf3S/Q/ltiRWKtcLID2SpLSABe', NULL, '2017-05-25 06:01:25', '2017-05-25 06:01:25'),
(4, 3, '5116100001', '$2y$10$lBozzGqv2a7v/6hSn6tEx.wzlYYuZqZwuDipTUNv6BMCxeXonkeNm', 'vMXJfj3iEqjeoF8H7dv9P2ldK6JGZhZHpenctUJbenlp6QmM4qzGFSnCm2U3', '2017-05-25 05:57:40', '2017-05-25 05:57:40'),
(5, 3, '5116100002', '$2y$10$JDWoK9DcWwUVAHiTTeDLSuffNBrdCD3I3LDLS1NuGfdnDagtVZP.2', NULL, '2017-05-25 06:02:41', '2017-05-25 06:02:41'),
(6, 3, '5116100003', '$2y$10$c6n.icZshb.mKOggXqU47udLqlkC3O50ojxbrslomMuN/VakBMw1.', NULL, '2017-05-25 06:04:45', '2017-05-25 06:04:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`berkas_id`),
  ADD KEY `FK_berkas` (`fk_berkas_peserta`);

--
-- Indexes for table `ceklis`
--
ALTER TABLE `ceklis`
  ADD PRIMARY KEY (`ceklis_id`),
  ADD KEY `FK_ceklis` (`fk_ceklis_peserta`),
  ADD KEY `FK_ceklis_hari` (`fk_ceklis_hari`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`hari_id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kelas_id`);

--
-- Indexes for table `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD PRIMARY KEY (`kuesioner_id`),
  ADD KEY `FK_kuesioner` (`fk_kuesioner_materi`);

--
-- Indexes for table `kuesioner_jawab`
--
ALTER TABLE `kuesioner_jawab`
  ADD PRIMARY KEY (`kuesioner_jawab_id`),
  ADD KEY `FK_kuesioner_jawab` (`fk_kuesioner_jawab_kuesioner`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`materi_id`),
  ADD KEY `FK_materi` (`fk_materi_hari`),
  ADD KEY `FK_materi_kelas` (`fk_materi_kelas`);

--
-- Indexes for table `pa`
--
ALTER TABLE `pa`
  ADD PRIMARY KEY (`pa_id`),
  ADD KEY `FK_pa` (`fk_pa_materi`);

--
-- Indexes for table `pa_jawab`
--
ALTER TABLE `pa_jawab`
  ADD PRIMARY KEY (`pa_jawab_id`),
  ADD KEY `FK_pa_jawab` (`fk_pa_jawab_pa`);

--
-- Indexes for table `pengumumans`
--
ALTER TABLE `pengumumans`
  ADD PRIMARY KEY (`pengumuman_id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`peserta_id`),
  ADD KEY `FK_peserta` (`fk_peserta_kelas`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `berkas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ceklis`
--
ALTER TABLE `ceklis`
  MODIFY `ceklis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hari`
--
ALTER TABLE `hari`
  MODIFY `hari_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `kelas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kuesioner`
--
ALTER TABLE `kuesioner`
  MODIFY `kuesioner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kuesioner_jawab`
--
ALTER TABLE `kuesioner_jawab`
  MODIFY `kuesioner_jawab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `materi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `pa`
--
ALTER TABLE `pa`
  MODIFY `pa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pa_jawab`
--
ALTER TABLE `pa_jawab`
  MODIFY `pa_jawab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengumumans`
--
ALTER TABLE `pengumumans`
  MODIFY `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `peserta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `berkas`
--
ALTER TABLE `berkas`
  ADD CONSTRAINT `FK_berkas` FOREIGN KEY (`fk_berkas_peserta`) REFERENCES `peserta` (`peserta_id`);

--
-- Constraints for table `ceklis`
--
ALTER TABLE `ceklis`
  ADD CONSTRAINT `FK_ceklis` FOREIGN KEY (`fk_ceklis_peserta`) REFERENCES `peserta` (`peserta_id`),
  ADD CONSTRAINT `FK_ceklis_hari` FOREIGN KEY (`fk_ceklis_hari`) REFERENCES `hari` (`hari_id`);

--
-- Constraints for table `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD CONSTRAINT `FK_kuesioner` FOREIGN KEY (`fk_kuesioner_materi`) REFERENCES `materi` (`materi_id`);

--
-- Constraints for table `kuesioner_jawab`
--
ALTER TABLE `kuesioner_jawab`
  ADD CONSTRAINT `FK_kuesioner_jawab` FOREIGN KEY (`fk_kuesioner_jawab_kuesioner`) REFERENCES `kuesioner` (`kuesioner_id`);

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `FK_materi` FOREIGN KEY (`fk_materi_hari`) REFERENCES `hari` (`hari_id`),
  ADD CONSTRAINT `FK_materi_kelas` FOREIGN KEY (`fk_materi_kelas`) REFERENCES `kelas` (`kelas_id`);

--
-- Constraints for table `pa`
--
ALTER TABLE `pa`
  ADD CONSTRAINT `FK_pa` FOREIGN KEY (`fk_pa_materi`) REFERENCES `materi` (`materi_id`);

--
-- Constraints for table `pa_jawab`
--
ALTER TABLE `pa_jawab`
  ADD CONSTRAINT `FK_pa_jawab` FOREIGN KEY (`fk_pa_jawab_pa`) REFERENCES `pa` (`pa_id`);

--
-- Constraints for table `peserta`
--
ALTER TABLE `peserta`
  ADD CONSTRAINT `FK_peserta` FOREIGN KEY (`fk_peserta_kelas`) REFERENCES `kelas` (`kelas_id`);
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
