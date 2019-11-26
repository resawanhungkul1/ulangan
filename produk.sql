-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2019 at 06:22 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `produk`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk1`
--

CREATE TABLE `produk1` (
  `id` int(100) NOT NULL,
  `nama_produk` varchar(191) NOT NULL,
  `jenis_produk` varchar(200) NOT NULL,
  `harga_satuan` int(200) NOT NULL,
  `jumlah_barang` int(200) NOT NULL,
  `total_harga` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk1`
--

INSERT INTO `produk1` (`id`, `nama_produk`, `jenis_produk`, `harga_satuan`, `jumlah_barang`, `total_harga`) VALUES
(17, 'based', 'baju', 100, 3, '300');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk1`
--
ALTER TABLE `produk1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk1`
--
ALTER TABLE `produk1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
