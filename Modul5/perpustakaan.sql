-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 06:07 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(20) NOT NULL,
  `judul_buku` varchar(500) NOT NULL,
  `penulis` varchar(500) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `tahun_terbit` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun_terbit`) VALUES
(10, 'Atomic Habits', 'James Clear ', 'Gramedia ', 2018),
(11, 'Sebuah Seni untuk Bersikap Bodo Amat', 'Mark Manson', 'Grasindo', 2016),
(12, 'Filosofi Teras', ' Henry Manampiring', 'Kompas', 2018),
(13, 'Berani Tidak Disukai', 'Ichiro Kishimi dan Fumitake Koga', 'Gramedia', 2019),
(14, 'I Want To Die But I Want To Eat Tteokpokki', 'Baek Se Hee', 'Haru', 2019),
(15, 'You Do You: Discovering Life Through Experiments & Self-Awareness ', 'Fellexandro Ruby', 'Gramedia', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(20) NOT NULL,
  `nama_member` varchar(250) NOT NULL,
  `nomor_member` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_mendaftar` datetime NOT NULL,
  `tgl_terakhir_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `nomor_member`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`) VALUES
(20, 'Oyen', '1000', 'Beruntung', '2023-05-07 08:30:00', '2023-05-02'),
(21, 'Ana', '1001', 'Martapura', '2023-05-15 10:35:00', '2023-05-17'),
(22, 'Aqiila', '1002', 'Banjarmasin', '2023-05-09 10:36:00', '2023-05-11'),
(23, 'Nestania', '1003', 'HKSN', '2023-05-13 14:41:00', '2023-05-15'),
(24, 'Yufanda', '1004', 'Banjarbaru', '2023-05-03 12:40:00', '2023-05-05'),
(25, 'Intan', '1005', 'Meranti', '2023-05-11 15:00:00', '2023-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(20) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_buku`, `id_member`, `tgl_peminjaman`, `tgl_kembali`) VALUES
(20, 12, 22, '2023-05-01', '2023-05-06'),
(21, 10, 24, '2023-05-04', '2023-05-09'),
(22, 15, 23, '2023-05-08', '2023-05-13'),
(23, 14, 21, '2023-05-11', '2023-05-16'),
(24, 13, 25, '2023-05-16', '2023-05-21'),
(25, 11, 20, '2023-05-17', '2023-05-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
