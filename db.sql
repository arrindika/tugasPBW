-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Apr 2018 pada 18.10
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `Nama` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Subject` varchar(30) DEFAULT NULL,
  `Message` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `Nama`, `Email`, `Subject`, `Message`) VALUES
(10, 'Arrindika Pradana', 'arrindika.pradana@gmail.com', 'aa', 'aa'),
(11, 'Cindy Gulla', 'gullacindy048@gmail.com', 'hehe', 'hehe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminat`
--

CREATE TABLE `peminat` (
  `id` int(11) NOT NULL,
  `tahun` int(8) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminat`
--

INSERT INTO `peminat` (`id`, `tahun`, `jumlah`) VALUES
(1, 2010, 1491),
(2, 2011, 1520),
(3, 2012, 1559),
(4, 2013, 1598),
(5, 2014, 1619),
(6, 2015, 1643),
(7, 2016, 1671),
(8, 2017, 1792);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nrp` varchar(14) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `asal` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nrp`, `nama`, `asal`) VALUES
(4, '5216100087', 'Arrindika Pradana', 'Surabaya'),
(5, '5216100025', 'Juleha Rokibun', 'Medan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminat`
--
ALTER TABLE `peminat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `peminat`
--
ALTER TABLE `peminat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
