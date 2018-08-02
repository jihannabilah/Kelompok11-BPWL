-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Agu 2018 pada 23.01
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatbox`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `drzchat`
--

CREATE TABLE `drzchat` (
  `nomor` int(3) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `pesan` varchar(200) NOT NULL,
  `waktu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `drzchat`
--

INSERT INTO `drzchat` (`nomor`, `nama`, `pesan`, `waktu`) VALUES
(1, 'Admin', 'Jihan Nabilah bergabung dalam chat', '00:00:00'),
(2, 'Admin', 'Jihan Nabilah bergabung dalam chat', '16:58:00'),
(3, 'Admin', 'Jihan Nabilah bergabung dalam chat', '22:05:00'),
(4, 'Admin', 'Jihan Nabilah bergabung dalam chat', '22:20'),
(5, 'Admin', 'Putra Aulia Sani bergabung dalam chat', '22:30'),
(6, 'Putra Aulia Sani', 'Hi jihan', '22:30'),
(7, 'Admin', 'Putra Aulia Sani bergabung dalam chat', '22:36'),
(8, 'Putra Aulia Sani', 'Aku disini', '22:36'),
(11, 'Admin', 'Putra Aulia Sani bergabung dalam chat', '02:19'),
(12, 'Putra Aulia Sani', 'Hi jihan', '02:19'),
(13, 'Admin', 'Herrera bergabung dalam chat', '03:56'),
(14, 'Herrera', 'Hi jihan', '03:56');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `drzchat`
--
ALTER TABLE `drzchat`
  ADD PRIMARY KEY (`nomor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `drzchat`
--
ALTER TABLE `drzchat`
  MODIFY `nomor` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
