-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2021 at 03:33 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xunny`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `subtitle` varchar(300) NOT NULL,
  `words` int(255) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date DEFAULT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `subtitle`, `words`, `created_by`, `created_date`, `keywords`) VALUES
(1, 'Desain Web Responsif', 'Desain responsif merupakan suatu konsep yang dibangun dimana sebuah website / web application dapat terlihat proposional untuk beragam perangkat yang saat ini ada. Kita akan membagikan bagimana konsep ini akan berpengaruh pada pembuatan ataupun website anda sendiri.', 572, 'Daniel Tri', '2021-09-12', 'Responsive Web Design, Responsive, Responsif, Desain web, Web Developer Indonesia, Web Developer, Jasa Pembuatan Aplikasi, IT Developer Indonesia'),
(2, 'Hal Krusial Semua Programmer Perlu Ketahui', 'Kebiasaan yang baik merupakan salah satu komponen penting untuk menjadi seorang programmer yang baik. Hal ini dikarenakan programmer dituntut untuk selalu update dengan teknologi yang ada. Lalu apa saja kebiasaan yang tepat menjadi hal yang krusial untuk menjadi seorang programmer handal?', 1173, 'Daniel Tri', '2021-09-14', 'Programmer, Programming, Hal Krusial Semua Programmer Perlu Ketahui, Web Developer Indonesia, Web Developer, Jasa Pembuatan Aplikasi, IT Developer Indonesia'),
(3, 'Kesalahan Programmer Berujung Pada Masalah Keamanan Data', 'Tidak dapat dipungkiri bahwa keamanan data merupakan salah satu hal yang krusial dalam pembuatan aplikasi. Namun ada beberapa kesalahan yang dapat menyebabkan isu keamanan data yang mungkin kita lalaikan.', 664, 'Daniel Tri', '2021-09-15', 'Kesalahan Programmer, Programmer Pemula, Keamanan Data, Cybersecurity, Web Developer Indonesia, Web Developer, Jasa Pembuatan Aplikasi, IT Developer Indonesia'),
(4, '5 Framework CSS Terbaik Untuk Pengembangan Website', 'CSS merupakan bahasa yang digunakan untuk membantu mengatur tampilan dari website anda. Saat ini tersedia sejumlah library yang digunakan untuk membantu para developer untuk memastikan website anda tampil dengan baik, simak beberapa library CSS yang kami pilih.', 506, 'Daniel Tri', '2021-09-18', 'CSS, Bootstrap, Foundation, Materialize, Pure, Bulma, Web Developer Indonesia, Web Developer, Jasa Pembuatan Aplikasi,IT Developer Indonesia'),
(5, 'Tantangan Tanpa Akhir Cara Membuat Desain Website yang Mudah Digunakan', 'Desain website yang ramah bagi pengguna merupakan tujuan dari seluruh desainer web di dunia. Tantangan ini sangat sulit untuk dipenuhi menimbang dinamika manusia yang secara konstan berubah.', 780, 'Daniel Tri', '2021-09-22', 'Website Design, User Friendly Design, Web Developer Indonesia, Web Developer, Jasa Pembuatan Aplikasi, IT Developer Indonesia'),
(6, '5 Kepribadian Seorang Programmer Hebat', 'Seorang asitek software merupakan posisi penting dalam setiap perusahaan. Arsitek diharapkan dapat berkolaborasi dengan para pemegang keputusan untuk memberikan solusi dan produk yang berguna bagi perusahaan tersebut. Apa saja kepribadian yang dibutuhkan?', 500, 'Daniel Tri', '2021-09-23', 'Software architect, Kepribadian programmer, Keterpercayaan, Ketabahan, Percaya Diri, Persuasif, Cerdas secara emosional, Web Developer Indonesia, Web Developer, Jasa Pembuatan Aplikasi, IT Developer Indonesia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
