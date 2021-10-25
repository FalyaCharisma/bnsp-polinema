-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 02:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_arsip_surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `nomor_surat` varchar(50) NOT NULL,
  `kategori` enum('Pengumuman','Undangan') NOT NULL,
  `judul` varchar(50) NOT NULL,
  `waktu` date NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `nomor_surat`, `kategori`, `judul`, `waktu`, `file`) VALUES
(1, '2020/PD3/TU/001', 'Pengumuman', 'Nota Dinas WFH', '2020-04-07', ''),
(2, '2020/PD2/TU/022', 'Undangan', 'Undangan Halal BI Halal', '2021-04-21', '.'),
(3, '2020/PD2/TU/023', 'Pengumuman', 'Bantuan Link Aja', '2021-02-01', '.'),
(4, '2020/PD2/TU/024', 'Undangan', 'Rapat Tahun Ajaran Baru', '2021-01-06', '.'),
(6, '2020/PD2/TU/026', 'Pengumuman', 'Bantuan UKT Mahasiswa', '2021-10-10', '.'),
(7, '2020/PD2/TU/027', 'Undangan', 'Studi Banding', '2021-10-07', '.'),
(15, '2020/PD2/TU/028', 'Pengumuman', 'Rapat Yudisium', '2021-10-24', '.pdf'),
(16, '2020/PD2/TU/029', 'Undangan', 'Persiapan Wisuda', '2021-10-24', '2020/PD2/TU/030.pdf'),
(17, '2020/PD2/TU/030', 'Undangan', 'Undangan Studi Banding', '2021-10-25', '2020/PD2/TU/030.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
