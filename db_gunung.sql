-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 08:55 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gunung`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penyebaran`
--

CREATE TABLE `tbl_penyebaran` (
  `id` int(11) NOT NULL,
  `nama_gunung` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `radius` varchar(11) DEFAULT NULL,
  `latitude` varchar(11) DEFAULT NULL,
  `longitude` varchar(11) DEFAULT NULL,
  `warna` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_penyebaran`
--

INSERT INTO `tbl_penyebaran` (`id`, `nama_gunung`, `keterangan`, `radius`, `latitude`, `longitude`, `warna`, `status`) VALUES
(16, 'Gunung Merapi', '', '3000', '-7.54067840', '110.4465878', 'green', 'Waspada'),
(17, 'Gunung Slamet', '', '3000', '-7.24174605', '109.2192033', 'green', 'Waspada'),
(18, 'Gunung Sumbing', '', '300', '-7.38255544', '110.0764872', 'blue', 'Normal Aktif'),
(19, 'Gunung Sindoro', '', '300', '-7.30074837', '109.9974353', 'blue', 'Normal Aktif'),
(20, 'Gunung Semeru', '', '3000', '-8.10800692', '112.9223734', 'green', 'Waspada'),
(21, 'Gunung Arjuno Welirang', '', '300', '-7.72460016', '112.5810239', 'blue', 'Normal Aktif'),
(22, 'Gunung Kelud', '', '300', '-7.94023602', '112.3041917', 'blue', 'Normal Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_user` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`) VALUES
(1, 'wahid', '2b1ddf586a8155d1b59c26c087128380', 'wahid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_penyebaran`
--
ALTER TABLE `tbl_penyebaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_penyebaran`
--
ALTER TABLE `tbl_penyebaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
