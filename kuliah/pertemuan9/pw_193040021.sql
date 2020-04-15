-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 00.28
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040021`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` int(15) DEFAULT NULL,
  `email` char(25) DEFAULT NULL,
  `jurusan` char(25) NOT NULL,
  `gambar` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Yuni Setyawati', 193040021, 'yunisetyawati21@gmail.com', 'Teknik Informatika', 'yuni.JPG'),
(2, 'Yanida Nur Nabila', 1930400022, 'yanidanurnabila22@gmail.c', 'Teknik Informatika', 'yanida.jpeg'),
(3, 'Rika Ayuni', 193010048, 'rikaayuni38@gmail.com', 'Teknik Industri', 'ayu.JPEG'),
(4, 'Taufik Hidayat', 193040019, 'taufikhidayat19@gmail.com', 'Teknik Informatika', 'taufik.JPG'),
(5, 'Silvi Fitriawati', 193040028, 'silvifitriawati28@gmail.c', 'Teknik Informatika', 'silvi.JPG'),
(6, 'Daffa Akhdan Fadillah', 193040036, 'Daffaakhdan36@gmail.com', 'Teknik Informatika', 'daffa.JPEG'),
(7, 'Kareena Kardin', 193040035, 'kareenakardin35@gmai.com', 'Teknik Informatika', 'kareena.JPEG'),
(8, 'Zahra Dwi Ameilia', 193040027, 'zahraameilia27@gmai.com', 'Teknik Informatika', 'zahra.JPG'),
(9, 'Seli Suhaeli Septian', 193040015, 'selisuhaeli15@gmail.com', 'Teknik Informatika', 'seli.JPG'),
(10, 'Alsa Lira', 193040079, 'alsalira79@gmail.com', 'Teknik Informatika', 'alsa.JPEG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
