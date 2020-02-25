-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2020 at 01:51 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(225) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL,
  `foto_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`, `email_admin`, `password_admin`, `foto_admin`) VALUES
(2, 'admin', 'admin@gmail.com', '$2y$10$GkSa7aE9eZXVBBankcm.J.0T25EQVdVMxuwE0cx9GaX7ak1My7l/2', 'test.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_pelanggan`
--

CREATE TABLE `tbl_data_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `email_pelanggan` text NOT NULL,
  `password_pelanggan` varchar(255) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `telpon_pelanggan` varchar(15) NOT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_data_pelanggan`
--

INSERT INTO `tbl_data_pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `telpon_pelanggan`, `jenis_kelamin`) VALUES
(20, 'arman@gmail.com', '$2y$10$srNf9/Gd9HvofeSdohRa2OZfWoN.Z7rVl2zcIBl4ObqFbXcLMJBra', 'arman', 'jl. pulo mangga gang palem kota depok', '081818972724', 'Laki - Laki'),
(30, 'rahmat@gmail.com', '$2y$10$O30.8zcv7ybfXJT7DgEJmeHdq8aIxW9S5mJ19sOxd7VVDfTNLMsEa', 'rahmat', 'jalan menteng', '081246537183', 'Laki - Laki');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_produk`
--

CREATE TABLE `tbl_data_produk` (
  `id_data_produk` int(11) NOT NULL,
  `furniture_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_data_produk`
--

INSERT INTO `tbl_data_produk` (`id_data_produk`, `furniture_id`, `produk_id`) VALUES
(1, 1, 1),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_furniture`
--

CREATE TABLE `tbl_furniture` (
  `id_furniture` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `nama_furniture` varchar(255) NOT NULL,
  `deskripsi_furniture` text NOT NULL,
  `harga_furniture` int(123) NOT NULL,
  `foto_furniture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_furniture`
--

INSERT INTO `tbl_furniture` (`id_furniture`, `produk_id`, `nama_furniture`, `deskripsi_furniture`, `harga_furniture`, `foto_furniture`) VALUES
(35, 21, 'asdasd', '<p>asdadsa</p>', 1000000, '20200218184053.JPG'),
(36, 21, 'asdadasd', '<p>asdad</p>', 900000, '20200218184106.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `harga_produk` varchar(123) DEFAULT NULL,
  `foto_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `nama_produk`, `deskripsi_produk`, `harga_produk`, `foto_produk`) VALUES
(21, 'febri maulana test', '<p>dasdasd</p>', '1900000', '20200218184040.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `harga_transaksi` varchar(128) NOT NULL,
  `foto_pembayaran` varchar(255) DEFAULT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `status_transaksi` enum('0','1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `pelanggan_id`, `produk_id`, `harga_transaksi`, `foto_pembayaran`, `tanggal_transaksi`, `status_transaksi`) VALUES
(1, 20, 21, '9000000', '20200218184040.JPG', '2020-02-09 00:00:00', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_data_pelanggan`
--
ALTER TABLE `tbl_data_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tbl_data_produk`
--
ALTER TABLE `tbl_data_produk`
  ADD PRIMARY KEY (`id_data_produk`);

--
-- Indexes for table `tbl_furniture`
--
ALTER TABLE `tbl_furniture`
  ADD PRIMARY KEY (`id_furniture`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_data_pelanggan`
--
ALTER TABLE `tbl_data_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_data_produk`
--
ALTER TABLE `tbl_data_produk`
  MODIFY `id_data_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_furniture`
--
ALTER TABLE `tbl_furniture`
  MODIFY `id_furniture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
