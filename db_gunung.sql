-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2020 pada 19.03
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `geojson`
--

CREATE TABLE `geojson` (
  `id` int(11) NOT NULL,
  `geojson` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `geojson`
--

INSERT INTO `geojson` (`id`, `geojson`) VALUES
(16, 'jateng.geojson'),
(17, 'jateng.geojson'),
(18, 'jateng.geojson');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penyebaran`
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
-- Dumping data untuk tabel `tbl_penyebaran`
--

INSERT INTO `tbl_penyebaran` (`id`, `nama_gunung`, `keterangan`, `radius`, `latitude`, `longitude`, `warna`, `status`) VALUES
(16, 'Gunung Merapi', '', '20000', '-7.54067840', '110.4465878', 'red', 'Awas'),
(17, 'Gunung Slamet', '', '10000', '-7.24174605', '109.2192033', 'yellow', 'Siaga'),
(18, 'Gunung Sumbing', '', '3000', '-7.38255544', '110.0764872', 'green', 'Waspada'),
(19, 'Gunung Sindoro', '', '300', '-7.30074837', '109.9974353', 'blue', 'Normal Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penyebaran_poly`
--

CREATE TABLE `tbl_penyebaran_poly` (
  `id` int(11) NOT NULL,
  `nama_gunung` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `koordinat` text DEFAULT NULL,
  `warna` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_penyebaran_poly`
--

INSERT INTO `tbl_penyebaran_poly` (`id`, `nama_gunung`, `keterangan`, `koordinat`, `warna`, `status`) VALUES
(24, 'asdasd', 'asdasd', '{\"type\":\"FeatureCollection\",\"features\":[{\"type\":\"Feature\",\"properties\":{},\"geometry\":{\"type\":\"Polygon\",\"coordinates\":[[[110.686113,-8.026595],[108.611515,-7.569437],[109.90754,-7.340675],[110.686113,-7.08999],[111.279137,-7.08999],[111.279137,-8.026595],[110.686113,-8.026595]]]}}]}', 'yellow', 'Siaga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_user` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`) VALUES
(1, 'wahid', '2b1ddf586a8155d1b59c26c087128380', 'wahid');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `geojson`
--
ALTER TABLE `geojson`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_penyebaran`
--
ALTER TABLE `tbl_penyebaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_penyebaran_poly`
--
ALTER TABLE `tbl_penyebaran_poly`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `geojson`
--
ALTER TABLE `geojson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tbl_penyebaran`
--
ALTER TABLE `tbl_penyebaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tbl_penyebaran_poly`
--
ALTER TABLE `tbl_penyebaran_poly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
