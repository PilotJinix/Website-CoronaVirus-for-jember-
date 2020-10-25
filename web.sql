-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2020 pada 13.39
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `Username`, `Password`) VALUES
(4, 'pilotjinix', '120500'),
(5, 'meliatya', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `sinop` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `tanggal`, `judul`, `sinop`, `isi`, `gambar`) VALUES
(7, '06/10/2020', 'SISTEM PELAPORAN PELAYANAN KOTA BERBASIS MOBILE MENGGUNAKAN APLIKASI INREPORT', 'dawd', 'dawdawd', 'Tanda Tangan.png'),
(8, '06/15/2020', 'SISTEM PELAPORAN PELAYANAN KOTA BERBASIS MOBILE', 'daw', 'dwadawdwadawd', 'Tanda Tangan.png'),
(9, '06/17/2020', 'JUDUL 3', 'dawd', 'dawdwadad', 'Tanda Tangan.png'),
(10, '06/22/2020', 'JUDUL 4', 'dawdd', 'dawdadawd', 'Tanda Tangan.png'),
(11, '06/10/2020', 'wad', 'dawd', 'sawdwad', 'SURAT-PERNYATAAN-CALON-DIRUT-PDAM_2.pdf'),
(12, '06/10/2020', 'SISTEM PELAPORAN PELAYANAN KOTA BERBASIS MOBILE', 'dawdd', 'dawdaddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'Tanda Tangan.png'),
(13, '06/09/2020', 'daw', 'dawda', 'dawdawda', ''),
(14, '06/09/2020', 'SISTEM PELAPORAN PELAYANAN KOTA BERBASIS MOBILE MENGGUNAKAN APLIKASI INREPORT', 'dawd', 'dawd', ''),
(15, '06/09/2020', 'dawd', 'dawdawd', 'dawd', ''),
(16, '06/10/2020', 'SISTEM PELAPORAN PELAYANAN KOTA BERBASIS MOBILE MENGGUNAKAN APLIKASI INREPORT', 'daw', 'dawdawdad', 'Tanda Tangan.png'),
(17, '06/11/2020', 'SISTEM PELAPORAN PELAYANAN KOTA BERBASIS MOBILE MENGGUNAKAN APLIKASI INREPORT', 'dawda', 'dawdawdad', 'corona-virus-infographic-elements-signs-symptoms-new-corona-virus_1422-98.jpg'),
(18, '06/08/2020', 'SISTEM PELAPORAN PELAYANAN KOTA BERBASIS MOBILE MENGGUNAKAN APLIKASI INREPORT', 'daw', 'cadawd', 'pngtree-symptoms-corona-virus-png-image_5327473.jpg'),
(19, '06/10/2020', 'SISTEM PELAPORAN PELAYANAN KOTA BERBASIS MOBILE MENGGUNAKAN APLIKASI INREPORT', 'daw', 'dawdad', '_112337017_coronavirus_key_symptoms_uk_v2_640-nc.png'),
(20, '06/30/2020', 'SISTEM PELAPORAN PELAYANAN KOTA BERBASIS MOBILE MENGGUNAKAN APLIKASI INREPORT', 'asa', 'dawdawdawdawdawdawdawdawdawdawdawd', 'Biodata-Naysilla-Mirdad-serta-Profil-Biografi-Lengkap-Aktor-Sinetron-Terkenal.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `tanggal` varchar(200) NOT NULL,
  `positif` int(11) NOT NULL,
  `sembuh` int(11) NOT NULL,
  `meninggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `tanggal`, `positif`, `sembuh`, `meninggal`) VALUES
(3, '1', 2, 3, 6),
(4, '03/11/5', 1, 2, 3),
(5, '06/23/2020', 3213, 2, 3),
(6, '06/25/2020', 0, 232, 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
