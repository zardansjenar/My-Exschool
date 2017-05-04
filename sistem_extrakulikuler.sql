-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Mei 2017 pada 15.47
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_extrakulikuler`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstrakulikuler`
--

CREATE TABLE `ekstrakulikuler` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `npsn` varchar(50) DEFAULT NULL,
  `hari` varchar(50) DEFAULT NULL,
  `waktu` varchar(50) DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `keterangan` text,
  `nip` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_khusus`
--

CREATE TABLE `informasi_khusus` (
  `id_khusus` int(11) NOT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `keterangan` text,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_umum`
--

CREATE TABLE `informasi_umum` (
  `id_umum` int(11) NOT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatih`
--

CREATE TABLE `pelatih` (
  `nip` varchar(30) NOT NULL,
  `pelatih` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tl` date DEFAULT NULL,
  `no_telp` varchar(14) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `jk` int(11) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `npsn` varchar(50) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `jenis` int(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `no_telp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(50) NOT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tl` date DEFAULT NULL,
  `no_telp` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `jk` int(11) DEFAULT NULL,
  `id_ekstrakulikuler` int(11) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `npsn` (`npsn`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `informasi_khusus`
--
ALTER TABLE `informasi_khusus`
  ADD PRIMARY KEY (`id_khusus`),
  ADD KEY `id_ekstrakulikuler` (`id`);

--
-- Indexes for table `informasi_umum`
--
ALTER TABLE `informasi_umum`
  ADD PRIMARY KEY (`id_umum`);

--
-- Indexes for table `pelatih`
--
ALTER TABLE `pelatih`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`npsn`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `id_ekstrakulikuler` (`id_ekstrakulikuler`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `informasi_khusus`
--
ALTER TABLE `informasi_khusus`
  MODIFY `id_khusus` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `informasi_umum`
--
ALTER TABLE `informasi_umum`
  MODIFY `id_umum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  ADD CONSTRAINT `ekstrakulikuler_ibfk_1` FOREIGN KEY (`npsn`) REFERENCES `sekolah` (`npsn`),
  ADD CONSTRAINT `ekstrakulikuler_ibfk_3` FOREIGN KEY (`nip`) REFERENCES `pelatih` (`nip`);

--
-- Ketidakleluasaan untuk tabel `informasi_khusus`
--
ALTER TABLE `informasi_khusus`
  ADD CONSTRAINT `informasi_khusus_ibfk_1` FOREIGN KEY (`id`) REFERENCES `ekstrakulikuler` (`id`);

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_ekstrakulikuler`) REFERENCES `ekstrakulikuler` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
