-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2018 at 03:36 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `refojunior`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `isi` mediumtext NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `meta` varchar(255) NOT NULL,
  `keywords` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `link`, `cover`, `isi`, `id_kategori`, `tanggal`, `meta`, `keywords`) VALUES
(1, 'Tips Sukses Interview', 'tips-sukses-interview', 'blog-1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, modi, autem error pariatur consectetur quasi laborum delectus nisi ullam veritatis itaque mollitia eligendi sapiente iusto obcaecati eos reprehenderit nobis hic.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, modi, autem error pariatur consectetur quasi laborum delectus nisi ullam veritatis itaque mollitia eligendi sapiente iusto obcaecati eos reprehenderit nobis hic.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, modi, autem error pariatur consectetur quasi laborum delectus nisi ullam veritatis itaque mollitia eligendi sapiente iusto obcaecati eos reprehenderit nobis hic.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, modi, autem error pariatur consectetur quasi laborum delectus nisi ullam veritatis itaque mollitia eligendi sapiente iusto obcaecati eos reprehenderit nobis hic.', 1, '2018-01-19', 'Interview adalah hal yang wajib dikuasai oleh sebagian orang, bagaimana tidak? interview dapat dijadikan penilaian untuk diterima atau tidaknya seorang calon karyawan. Maka dari itu berikut tips and trick sukses interview versi saya', 'interview, tips sukses interview, cara bisa interview, bagaimana interview yang baik'),
(24, 'Rich Brian', 'rich-brian', '60868702.jpg', '<p>j</p>\r\n', 2, '2018-01-19', 'Rich chigga adalah rapper asal indonesia', 'cw1'),
(25, 'Harus nih diisi? Edit', 'harus-di-isi-edit', 'ayana2.jpg', '<p>harus diisi dulu guys</p>\r\n', 2, '2018-01-19', 'harus diisi', 'harus diisi');

-- --------------------------------------------------------

--
-- Table structure for table `gudang_gambar`
--

CREATE TABLE `gudang_gambar` (
  `id_gambar` int(11) NOT NULL,
  `nama_gambar` varchar(255) NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gudang_gambar`
--

INSERT INTO `gudang_gambar` (`id_gambar`, `nama_gambar`, `judul_artikel`, `tanggal`) VALUES
(1, 'contoh.jpg', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `keterangan`) VALUES
(1, 'Tips & Trick', 'Berisi tips tips dan trik yang berguna'),
(2, 'Ilustration', 'we'),
(3, 'Cek', 'Bisa'),
(4, 'Flash', 'Success');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id_port` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_sistem` varchar(255) NOT NULL,
  `link` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi` mediumtext NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id_port`, `tanggal`, `nama_sistem`, `link`, `gambar`, `isi`, `id_kategori`) VALUES
(1, '2018-01-19', 'Sistem Orderan Khusus Berbasis Web Untuk Perusahaan', 'sistem-orderan-khusus', 'port-1.jpg', 'This is a system that i created for a company, this system is using codeigniter and bootstrap.', 1),
(6, '2018-01-19', 'Aplikasi Perpustakaan Berbasis Web', 'aplikasi-perpustakaan-berbasis-web', 'port-2.jpg', '<p>aplikasi perpus</p>\r\n', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'administrator', '61d120181a90490c5e63d7a6ffbcd6393d2cc3ee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `gudang_gambar`
--
ALTER TABLE `gudang_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_port`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `gudang_gambar`
--
ALTER TABLE `gudang_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_port` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
