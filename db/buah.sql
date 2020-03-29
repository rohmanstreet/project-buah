-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2020 at 08:12 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buah`
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
(2, 'Admin Gudang', 2, 'gudang', '$2y$10$V7zDd2Fz3QBmWFz3UnZBM.vjDK.AOTTjIdssUY8rhcBjEEJrxY7ma'),
(5, 'Abdur Rohman', 1, 'rohman', '$2y$10$KFwOgihxemPrsqgyDQeeJOzCzL.qXy.yFd9soWpDr5NvwIWp5A9Ty');

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
-- Table structure for table `tbl_penerimaanstokgudang`
--

CREATE TABLE `tbl_penerimaanstokgudang` (
  `id_pnsgdg` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `nm_jenis` varchar(25) NOT NULL,
  `nm_gudang` varchar(25) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penerimaanstokgudang`
--

INSERT INTO `tbl_penerimaanstokgudang` (`id_pnsgdg`, `id_admin`, `nm_jenis`, `nm_gudang`, `jumlah`, `tgl`) VALUES
(1, 2, 'Podang', 'gudang cirebon', 89, '2020-03-29'),
(2, 2, 'Manalagi', 'gudang jombang', 80, '2020-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `tb_biaya`
--

CREATE TABLE `tb_biaya` (
  `id_biaya` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `nm_gudang` varchar(25) NOT NULL,
  `biaya` int(11) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_biaya`
--

INSERT INTO `tb_biaya` (`id_biaya`, `id_admin`, `keperluan`, `nm_gudang`, `biaya`, `tgl`) VALUES
(2, 2, 'Rokok', 'gudang cirebon', 25000, '2020-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gudang`
--

CREATE TABLE `tb_gudang` (
  `id_gdg` int(11) NOT NULL,
  `nm_gudang` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gudang`
--

INSERT INTO `tb_gudang` (`id_gdg`, `nm_gudang`) VALUES
(1, 'gudang cirebon'),
(2, 'gudang jombang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis`
--

CREATE TABLE `tb_jenis` (
  `id_jns` int(11) NOT NULL,
  `nm_jenis` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis`
--

INSERT INTO `tb_jenis` (`id_jns`, `nm_jenis`) VALUES
(1, 'Podang'),
(2, 'Manalagi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengirimantoko`
--

CREATE TABLE `tb_pengirimantoko` (
  `id_kirimtoko` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `nm_gudang` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengirimantoko`
--

INSERT INTO `tb_pengirimantoko` (`id_kirimtoko`, `id_admin`, `nm_gudang`, `alamat`, `jenis`, `jumlah`, `tgl`) VALUES
(1, 2, 'gudang cirebon', 'adoh', 'Podang', 50, '2020-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengirimstokgudang`
--

CREATE TABLE `tb_pengirimstokgudang` (
  `id_pgrimgdg` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `gudang` varchar(25) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengirimstokgudang`
--

INSERT INTO `tb_pengirimstokgudang` (`id_pgrimgdg`, `id_admin`, `jenis`, `gudang`, `jumlah`, `tgl`) VALUES
(1, 2, 'Podang', 'gudang cirebon', 70, '2020-03-30');

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
-- Indexes for table `tbl_penerimaanstokgudang`
--
ALTER TABLE `tbl_penerimaanstokgudang`
  ADD PRIMARY KEY (`id_pnsgdg`);

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
  ADD PRIMARY KEY (`id_jns`);

--
-- Indexes for table `tb_pengirimantoko`
--
ALTER TABLE `tb_pengirimantoko`
  ADD PRIMARY KEY (`id_kirimtoko`);

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_penerimaanstokgudang`
--
ALTER TABLE `tbl_penerimaanstokgudang`
  MODIFY `id_pnsgdg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_biaya`
--
ALTER TABLE `tb_biaya`
  MODIFY `id_biaya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_gudang`
--
ALTER TABLE `tb_gudang`
  MODIFY `id_gdg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  MODIFY `id_jns` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_pengirimantoko`
--
ALTER TABLE `tb_pengirimantoko`
  MODIFY `id_kirimtoko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_pengirimstokgudang`
--
ALTER TABLE `tb_pengirimstokgudang`
  MODIFY `id_pgrimgdg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
