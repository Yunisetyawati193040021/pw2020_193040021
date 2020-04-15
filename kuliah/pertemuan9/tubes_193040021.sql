-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 00.29
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
-- Database: `tubes_193040021`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `elektronik`
--

CREATE TABLE `elektronik` (
  `id` int(10) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `warna` char(15) DEFAULT NULL,
  `stok` int(5) DEFAULT NULL,
  `harga` int(25) DEFAULT NULL,
  `foto` char(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `elektronik`
--

INSERT INTO `elektronik` (`id`, `nama`, `warna`, `stok`, `harga`, `foto`) VALUES
(1, 'LG 22LD350', 'Black', 220, 4500000, 'tv.JPG'),
(2, 'Canon EOS M6 Mark', 'Black', 600, 13750000, 'camera.JPG'),
(3, 'Samsung 1/2PK AR05HCFSVURN', 'Black,White', 520, 3620000, 'ac.JPG'),
(4, 'Laptop HP Notebook Pav 15-DB0005AU', 'Blue,Black,Whit', 150, 3500000, 'leptop.PNG'),
(5, 'PHILIPS HD 3132 Pemium RiceCooker', 'Red,Gold,Black,', 345, 497000, 'ricecooker.JPG'),
(6, 'TOSHIBA GR-WG66ED', 'Blue-Grey,Black', 660, 7500000, 'kulkas.JPG'),
(7, 'Cosmos Dsk Fan Kipas Angin Meja12LDA', 'Grey,Black', 213, 187000, 'kipas.PNG'),
(8, 'BLENDER ELECTROLUX EBR3416', 'Lightblue', 361, 648000, 'blender.JPG'),
(9, 'Panasonic Microwave Oven', 'Black,Grey,Drak', 320, 1680000, 'microwave.JPG'),
(10, 'PHILIPS Setrika HD 1173/80', 'Black,Pink-Whit', 278, 342000, 'setrika.JPG'),
(11, 'Kompor Gas Glass/Kaca-W888', 'Green-Black', 570, 850000, 'kompor.JFIF'),
(12, 'SHARP Mesin Cuci Twin Tub ES-T86CL-HK', 'Grey-White', 990, 1990000, 'mesincuci.JPG'),
(13, 'SANKEN HWD-C590 Dispenser', 'Black,Silver', 432, 3000000, 'dispenser.JPG'),
(14, 'Lenco SCD-580-boombox-CD-USB', 'White', 890, 1408000, 'radio.JPG'),
(15, 'ASUS All-inOne V222UAK-WA541T', 'White,Gold', 800, 9660000, 'pc.JPG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
