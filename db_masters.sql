-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jul 2020 pada 16.56
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_masters`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_dosen`
--

CREATE TABLE `t_dosen` (
  `id_dosen` int(20) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `NID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_dosen`
--

INSERT INTO `t_dosen` (`id_dosen`, `nama_dosen`, `NID`) VALUES
(20201, 'fahmi', 202020),
(20202, 'Fahrudin', 212121);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_khs`
--

CREATE TABLE `t_khs` (
  `id_dosen` int(20) NOT NULL,
  `id_mahasiswa` int(20) NOT NULL,
  `id_mapel` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_khs`
--

INSERT INTO `t_khs` (`id_dosen`, `id_mahasiswa`, `id_mapel`) VALUES
(20201, 200100, 101);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_mahasiswa`
--

CREATE TABLE `t_mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_mahasiswa`
--

INSERT INTO `t_mahasiswa` (`id_mhs`, `nama`) VALUES
(200100, 'Viki ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_mapel`
--

CREATE TABLE `t_mapel` (
  `id_mapel` int(20) NOT NULL,
  `mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_mapel`
--

INSERT INTO `t_mapel` (`id_mapel`, `mapel`) VALUES
(101, 'Pemrograman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pesan`
--

CREATE TABLE `t_pesan` (
  `id_dosen` int(20) NOT NULL,
  `id_mapel` int(20) NOT NULL,
  `pesan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_pesan`
--

INSERT INTO `t_pesan` (`id_dosen`, `id_mapel`, `pesan`) VALUES
(20201, 101, 'masuk');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_dosen`
--
ALTER TABLE `t_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `t_khs`
--
ALTER TABLE `t_khs`
  ADD PRIMARY KEY (`id_dosen`,`id_mahasiswa`,`id_mapel`);

--
-- Indeks untuk tabel `t_mapel`
--
ALTER TABLE `t_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_dosen`
--
ALTER TABLE `t_dosen`
  MODIFY `id_dosen` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20203;

--
-- AUTO_INCREMENT untuk tabel `t_mapel`
--
ALTER TABLE `t_mapel`
  MODIFY `id_mapel` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
