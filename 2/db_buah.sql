-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 12:52 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_buah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `id_jabatan`, `username`, `password`) VALUES
(1, 'Pimpinan', 1, 'admin', '$2y$10$V7zDd2Fz3QBmWFz3UnZBM.vjDK.AOTTjIdssUY8rhcBjEEJrxY7ma'),
(2, 'Admin Gudang', 2, 'gudang', '$2y$10$V7zDd2Fz3QBmWFz3UnZBM.vjDK.AOTTjIdssUY8rhcBjEEJrxY7ma');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Admin'),
(2, 'Admin Gudang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_biaya`
--

CREATE TABLE `tb_biaya` (
  `id_biaya` int(255) NOT NULL,
  `id_admin` int(255) DEFAULT NULL,
  `id_gudang` int(255) DEFAULT NULL,
  `keperluan` varchar(255) DEFAULT NULL,
  `biaya` int(255) DEFAULT NULL,
  `tgl_transaksi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_biaya`
--

INSERT INTO `tb_biaya` (`id_biaya`, `id_admin`, `id_gudang`, `keperluan`, `biaya`, `tgl_transaksi`) VALUES
(2, 2, 2, 'penting', 200000, '2020-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gudang`
--

CREATE TABLE `tb_gudang` (
  `id_gdg` int(255) NOT NULL,
  `nm_gudang` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gudang`
--

INSERT INTO `tb_gudang` (`id_gdg`, `nm_gudang`) VALUES
(2, 'gdg2b'),
(3, 'gdg 3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis`
--

CREATE TABLE `tb_jenis` (
  `id_jns` int(255) NOT NULL,
  `nm_jenis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenis`
--

INSERT INTO `tb_jenis` (`id_jns`, `nm_jenis`) VALUES
(2, 'mangga kediri'),
(3, 'jmb');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penerimaanstokgudang`
--

CREATE TABLE `tb_penerimaanstokgudang` (
  `id_pnsgdg` int(255) NOT NULL,
  `id_admin` int(255) DEFAULT NULL,
  `id_jenis` int(255) DEFAULT NULL,
  `id_gudang` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  `tgl_terima` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penerimaanstokgudang`
--

INSERT INTO `tb_penerimaanstokgudang` (`id_pnsgdg`, `id_admin`, `id_jenis`, `id_gudang`, `jumlah`, `tgl_terima`) VALUES
(7, 2, 2, '2', '123', '2020-03-20'),
(8, 2, 3, '3', '322', '2020-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengirimstokgudang`
--

CREATE TABLE `tb_pengirimstokgudang` (
  `id_pgrimgdg` int(255) NOT NULL,
  `id_admin` int(255) DEFAULT NULL,
  `id_jenis` int(255) DEFAULT NULL,
  `id_gudang` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  `tgl_kirim` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengirimstokgudang`
--

INSERT INTO `tb_pengirimstokgudang` (`id_pgrimgdg`, `id_admin`, `id_jenis`, `id_gudang`, `jumlah`, `tgl_kirim`) VALUES
(1, 2, 1, '1', '12', '2020-03-19'),
(3, 2, 0, '3', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tb_biaya`
--
ALTER TABLE `tb_biaya`
  ADD PRIMARY KEY (`id_biaya`);

--
-- Indexes for table `tb_gudang`
--
ALTER TABLE `tb_gudang`
  ADD PRIMARY KEY (`id_gdg`);

--
-- Indexes for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  ADD PRIMARY KEY (`id_jns`) USING BTREE;

--
-- Indexes for table `tb_penerimaanstokgudang`
--
ALTER TABLE `tb_penerimaanstokgudang`
  ADD PRIMARY KEY (`id_pnsgdg`) USING BTREE;

--
-- Indexes for table `tb_pengirimstokgudang`
--
ALTER TABLE `tb_pengirimstokgudang`
  ADD PRIMARY KEY (`id_pgrimgdg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_biaya`
--
ALTER TABLE `tb_biaya`
  MODIFY `id_biaya` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_gudang`
--
ALTER TABLE `tb_gudang`
  MODIFY `id_gdg` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  MODIFY `id_jns` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_penerimaanstokgudang`
--
ALTER TABLE `tb_penerimaanstokgudang`
  MODIFY `id_pnsgdg` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_pengirimstokgudang`
--
ALTER TABLE `tb_pengirimstokgudang`
  MODIFY `id_pgrimgdg` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
