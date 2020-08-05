-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Agu 2020 pada 15.46
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
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_absen`
--

CREATE TABLE `tabel_absen` (
  `id` int(250) NOT NULL,
  `nik` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `chekin` varchar(100) NOT NULL,
  `chekout` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_absen`
--

INSERT INTO `tabel_absen` (`id`, `nik`, `nama`, `jabatan`, `password`, `chekin`, `chekout`) VALUES
(9809, 262138, 'Rafizhafran halim', 'mahasiswa', '123', 'new member', 'new member'),
(9810, 262138, 'Rafizhafran halim', 'mahasiswa', '123', '03/08/2020 20:35:16', 'jangan lupa checkout'),
(9811, 262138, 'Rafizhafran halim', 'mahasiswa', '123', 'checkout sukses', '03/08/2020 20:35:20'),
(9812, 777, 'admin', 'admin', '123', 'admin', 'admin'),
(9813, 140401, 'M. Fiqram Habil', 'karyawan', '123', 'new member', 'new member'),
(9814, 140401, 'M. Fiqram Habil', 'karyawan', '123', '03/08/2020 20:45:25', 'jangan lupa checkout'),
(9815, 140401, 'M. Fiqram Habil', 'karyawan', '123', 'checkout sukses', '03/08/2020 20:45:29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_absen`
--
ALTER TABLE `tabel_absen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_absen`
--
ALTER TABLE `tabel_absen`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9816;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
