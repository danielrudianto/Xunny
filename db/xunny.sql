-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 04:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

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
  `subtitle` text NOT NULL,
  `words` int(255) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date DEFAULT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `subtitle`, `words`, `created_by`, `created_date`, `keywords`) VALUES
(1, 'Desain Web Responsif', 'Desain responsif merupakan suatu konsep yang dibangun dimana sebuah website / web application dapat terlihat proposional untuk beragam perangkat yang saat ini ada. Kita akan membagikan bagimana konsep ini akan berpengaruh pada pembuatan ataupun website anda sendiri.', 572, 'Daniel Tri', '2021-09-12', 'Responsive Web Design, Responsive, Responsif, Desain web, Web Developer Indonesia, Web Developer, Jasa Pembuatan Aplikasi'),
(2, 'Hal Krusial Semua Programmer Perlu Ketahui', 'Kebiasaan yang baik merupakan salah satu komponen penting untuk menjadi seorang programmer yang baik. Hal ini dikarenakan programmer dituntut untuk selalu update dengan teknologi yang ada. Lalu apa saja kebiasaan yang tepat menjadi hal yang krusial untuk menjadi seorang programmer handal?', 1173, 'Daniel Tri', '2021-09-14', 'Programmer, Programming, Hal Krusial Semua Programmer Perlu Ketahui, Web Developer Indonesia, Web Developer, Jasa Pembuatan Aplikasi'),
(3, 'Kesalahan Programmer Berujung Pada Masalah Keamanan Data', 'Tidak dapat dipungkiri bahwa keamanan data merupakan salah satu hal yang krusial dalam pembuatan aplikasi. Namun ada beberapa kesalahan yang dapat menyebabkan isu keamanan data yang mungkin kita lalaikan.', 664, 'Daniel Tri', '2021-09-15', 'Kesalahan Programmer, Programmer Pemula, Keamanan Data, Cybersecurity, Web Developer Indonesia, Web Developer, Jasa Pembuatan Aplikasi'),
(4, '5 Framework CSS Terbaik Untuk Pengembangan Website', 'CSS merupakan bahasa yang digunakan untuk membantu mengatur tampilan dari website anda. Saat ini tersedia sejumlah library yang digunakan untuk membantu para developer untuk memastikan website anda tampil dengan baik, simak beberapa library CSS yang kami pilih.', 506, 'Daniel Tri', '2021-09-18', 'CSS, Bootstrap, Foundation, Materialize, Pure, Bulma, Web Developer Indonesia, Web Developer, Jasa Pembuatan Aplikasi'),
(5, 'Tantangan Tanpa Akhir Cara Membuat Desain Website yang Mudah Digunakan', 'Desain website yang ramah bagi pengguna merupakan tujuan dari seluruh desainer web di dunia. Tantangan ini sangat sulit untuk dipenuhi menimbang dinamika manusia yang secara konstan berubah.', 780, 'Daniel Tri', '2021-09-22', 'Website Design, User Friendly Design, Web Developer Indonesia, Web Developer, Jasa Pembuatan Aplikasi'),
(6, '5 Kepribadian Seorang Programmer Hebat', 'Seorang arsitek software merupakan posisi penting dalam setiap perusahaan. Arsitek diharapkan dapat berkolaborasi dengan para pemegang keputusan untuk memberikan solusi dan produk yang berguna bagi perusahaan tersebut. Apa saja kepribadian yang dibutuhkan?', 1025, 'Daniel Tri', '2021-09-23', 'Software architect, arsitek software, Kepribadian programmer, Keterpercayaan, Ketabahan, Percaya Diri, Persuasif, Cerdas secara emosional, Web Developer Indonesia, Web Developer, Jasa Pembuatan Aplikasi, IT Developer Indonesia'),
(7, 'Mengapa Anda Perlu Memilih Outsourcing Untuk Kebutuhan IT Perusahaan Anda', 'Outsourcing merupakan aktivitas dimana perusahaan mempekerjakan pihak luar untuk\r\nmemberikan layanan, melakukan tugas, atau menangani operasi dalam perusahaan. Saat ini,\r\noutsourcing banyak dilakukan oleh perusahaan karena membawa banyak manfaat bagi\r\nperusahaan. Mari simak beberapa keuntungannya', 602, 'Daniel Tri', '2021-09-24', 'Outsourcing, IT Outsourcing, Kebutuhan IT, Hemat Biaya dan Waktu, Fleksibel, Ahli, Risiko, Web Developer Indonesia, Web Developer, Jasa Pembuatan Aplikasi'),
(8, 'Buat Audiens Anda Terpukau Dengan Trik Ini', 'Branding dengan menggunakan internet? Mengapa tidak? Mulai dengan satu langkah kecil, buat audiens anda terpukau dengan beberapa trik yang akan kami bagikan untuk meningkatkan kehadiran merek anda.', 645, 'Daniel Tri', '2021-09-25', 'HTML, CSS, Javascript, Flutter, Angular, Vue, ReactJS, Framework, Branding using the Internet, Frontend Developer, Backend developer'),
(9, '5 Framework PHP terbaik untuk pengembangan website', 'PHP merupakan salah satu bahasa pemrograman yang sangat populer di kalangan web developer. Saat ini tersedia banyak framework yang digunakan untuk mempermudah para developer membuat aplikasi atau website dengan menggunakan bahasa PHP. Apa saja framework tersebut, mari kita simak di artikel ini', 1255, 'Daniel Tri', '2021-10-01', 'PHP, PHP framework, Yii, Laravel, CodeIgniter, Web Developer Indonesia, Web Developer, Jasa Pembuatan Aplikasi'),
(10, 'Aplikasi Real Time dengan WebSocket', 'Pernahkah anda terbesit bagaimana sebuah real-time application ( aplikasi yang dapat menerima dan mengirimkan data secara hampir spontan ) bekerja? WebSockets merupakan salah satu teknologi yang cukup umum digunakan hari ini bagi para developer untuk melakukan tugas tersebut. Simak artikel kami mengenai websocket disini.', 667, 'Daniel Tri', '2021-10-11', 'Socket.io, socket. websocket, real-time application, Sockette, WS, Realtime application'),
(11, 'Inilah Manfaat Website Bagi Perusahaan Tak Perlu Ragu Untuk Membuatnya', 'Website perusahaan, apakah manfaatnya? Bukan hanya sebagai media informasi dan promosi, namun memiliki website profil perusahaan memiliki banyak kegunaan lainnya. Mari simak artikel ini untuk mengetahui apa saja kegunaannya.', 1029, 'Daniel Tri', '2021-10-16', 'Website, Manfaat website perusahaan, kepercayaan, pemasaran, market, profil, informasi, biaya layanan, riset, tipe customer, edukasi, kualitas layanan, partner bisnis'),
(12, 'Mengenal Aplikasi Customer Relationship Management Apa Saja Manfaatnya', 'Pelanggan merupakan salah satu asset yang penting dalam sebuah perusahaan. Seiring berkembangnya teknologi, CRM telah mengambil alih pelayanan pelanggan untuk meningkatkan pengalaman konsumen dalam menjalankan kerja sama atau transaksi dengan perusahaan tersebut. Apa saja manfaat lain dari CRM? Mari simak manfaatnya disini', 1024, 'Daniel Tri', '2021-10-17', 'Customer Relation Management, CRM, Data Customer, Kinerja, Keuntungan, Pengambilan Keputusan, Keamanan, Keamanan Data, Operasional, Konsumen, Optimal, Otomatis '),
(13, 'Manfaat Menggunakan Aplikasi Keuangan Perusahaan Untuk Bisnis Yang Dijalankan', 'Mengatur dan memantau keuangan bisnis kita dapat menjadi pekerjaan yang sangat memakan waktu dan tenaga. Sebagaimana penting kah peran teknologi dalam sebuah perusahaan? Dalam artikel ini, kami akan membahas mengenai 9 kegunaan aplikasi keuangan dan bagaimana hal tersebut dapat membantu anda untuk memantau dan mengatur keuangan bisnis anda.', 1081, 'Daniel Tri', '2021-10-19', 'Keuangan, Teknologi, Aplikasi, Hemat waktu, pantau keuangan, terkomputerisasi, terorganisir, inventaris, mobile, bisnis'),
(14, '7 Manfaat Menggunakan Aplikasi Absensi Online Berbasis Web Untuk Perusahaan', 'Absensi merupakan komponen penting baik bagi karyawan perusahaan ataupun perusahaan sendiri untuk menjaga performa sumber daya manusia perusahaan. Seiring waktu, sistem absensi telah berkembang untuk menjaga keutuhan data, mengurangi delay, dan mengoptimalisasi jumlah karyawan. Mari kita simak 7 manfaat penggunaan aplikasi absensi untuk bisnis anda.', 1022, 'Daniel Tri', '2021-10-20', 'Absensi, perusahaan, bisnis, web, sumber daya manusia'),
(15, 'Pentingnya Aplikasi Inventory Barang Berbasis Web Dalam Bisnis', 'Gudang merupakan salah satu komponen penting dalam jalannya sebuah operasional perusahaan. Tanpa adanya sistem gudang yang baik, perusahaan sendiri dapat mengalami kerugian hingga puluhan atau ratusan juta Rupiah. Oleh karena itu, diperlukan sebuah sistem gudang yang baik untuk menopang potensi kebocoran perusahaan ini. Mari simak pentingnya aplikasi warehouse bagi pengusaha.', 1006, 'Daniel Tri', '2021-10-21', 'Gudang, aplikasi warehouse, operasional perusahaan, sistem gudang'),
(16, 'Ketahui Pentingnya Aplikasi Penjualan Berbasis Web Untuk Bisnis', 'Saat ini, mungkin anda sering mendengar istilah POS (Point of Sales), sebuah sistem atau aplikasi yang diperjual belikan dengan tujuan membantu usaha anda seperti toko, laundry, ataupun bengkel dalam penjualannya. Kali ini, kita akan membahas mengenai pentingnya aplikasi penjualan (termasuk POS) untuk bisnis anda.', 1003, 'Daniel Tri', '2021-10-22', 'POS, penjualan, bisnis, point of sales, sistem penjualan'),
(17, 'Keuntungan Penggunaan Aplikasi Manajemen Proyek Konstruksi bagi Perusahaan', 'Perusahaan konstruksi merupakan salah satu perusahaan yang memiliki operasional yang relatif komkpleks. Campuran antara sumber daya manusia, material, dan alat dalam kurun waktu yang terbatas menjadi beberapa tantangan yang dialami sebuah perusahaan kontraktor. Namun seiring berkembangnya teknologi, perusahaan dengan tingkat kompleksitias seperti ini pun mampu untuk mengutilisasi teknologi untuk pengembangan perusahaannya.', 1123, 'Daniel Tri', '2021-10-22', 'Aplikasi kontraktor, teknologi, konstruksi, aplikasi manajemen konstruksi, perencanaan proyek, tracking, perhitungan anggaran, laporan proyek, efisiensi, evaluasi'),
(18, 'Pentingnya Aplikasi Laporan Keuangan Mobile bagi Sebuah Perusahaan', 'Dengan teknologi, anda dapat membaca berita, menonton video, ataupun mendengarkan musik lewat hp atau smartphone anda. Bagaimana dengan keuangan perusahaan anda? Apakah menjadi sangat nyaman apabila anda dapat memantau kondisi perusahaan anda di genggaman tangan anda? Mari simak pentingnya aplikasi laporan keuangan mobile.', 1000, 'Daniel Tri', '2021-10-23', 'Keuangan, Teknologi, Aplikasi, Hemat waktu, pantau keuangan, terkomputerisasi, terorganisir, inventaris, mobile, bisnis'),
(19, 'Mengenal Manfaat Aplikasi Komputer Akuntansi bagi Perusahaan', 'Akuntansi merupakan salah satu bagian yang sangat krusial di perusahaan manapun. Seiring dengan waktu, teknologi untuk mempermudah pekerjaan pencatatan dan pelaporan ini semakin banyak. Mari kita coba kenali manfaat aplikasi komputer akuntansi bagi perusahaan', 1025, 'Daniel Tri', '2021-10-23', 'Akuntansi, financial, finance, keuangan, laporan, aplikasi akuntansi'),
(20, 'Fungsi Aplikasi Pengolah Angka yang Menguntungkan Bagi Perusahaan', 'Dengan adanya teknologi yang membantu kita untuk melakukan kalkulasi kita tidak lagi perlu melakukan kalkulasi secara manual secara umum. Perusahaan dengan budaya untuk melakukan perhitungan secara manual perlahan mulai beralih ke sistem yang lebih canggih untuk memperoleh hasil yang sama atau lebih dengan sumber daya lebih rendah.', 1030, 'Daniel Tri', '2021-10-23', 'Pengola angka, aplikasi perusahaan, rumus, perhitungan skala besar, grafik, data, cepat, meminimalisir kesalahan, hemat biaya'),
(21, 'Mengenal Aplikasi Penjualan dan Stok Barang dan Urgensinya', 'Pencatatan stok dan penjualan merupakan isu yang menantang dan umum bagi hampir seluruh pelaku usaha yang bergerak di bidang perdagangan. Pada artikel ini, kita akan membahas sebagaimana penting aplikasi tersebut dan bagaimana implementasinya.', 1000, 'Daniel Tri', '2021-10-23', 'Stok, penjualan, urgensi, pendataaan, harga jual, neraca keuangan, kondisi persediaan'),
(22, 'Ketahui Apa Saja Manfaat Digital Marketing dalam Ulasan Berikut Ini', 'Dunia digital tidak lepas dari istilah digital marketing, sebuah metode marketing baru yang ditawarkan oleh teknologi untuk dapat menjangkau bahkan lebih banyak konsumen sekaligus. Apa saja manfaat melakukan digital marketing hari ini? Mari simak di artikel ini', 1200, 'Daniel Tri', '2021-10-24', 'Digital marketing, hemat biaya, komunikasi, pasar, jangkauan pasar, kompetisi bisnis, real-time, profesional'),
(23, 'Mengenal Pentingnya Aplikasi Antrian Berbasis Web yang Memudahkan Pekerjaan', 'Aplikasi antrian berbasis web bisa dibilang merupakan suatu aplikasi yang dirancang oleh suatu pihak untuk mempermudah kegiatan dalam masyarakat. Kegiatan ini biasanya akan menyangkut dalam kegiatan yang mengarah dalam keramaian. Hal inilah yang kemudian membuat suatu lembaga atau perusahaan memberlakukan sistem antrian. Menjaga ketertiban dan memberikan pelayanan lebih maksimal tentu adalah alasannya.', 1100, 'Daniel Tri', '2021-10-25', 'antrian online, aplikasi antrian, fitur suara, data penyimpanan'),
(24, 'Benarkah Media Promosi Online Paling Efektif Bisa Meningkatkan Penjualan', 'Media promosi online paling efektif merupakan cara yang dilakukan atau dipakai seorang pebisnis untuk meningkatkan pendapatan. Berbagai bentuk aktivitasnya seperti menginformasikan, membagikan, dan menawarkan produk atau jasa di perusahaan. Hal tersebut dilakukan untuk menarik perhatian public terhadap barang atau jasa yang ditawarkan. Dalam artikel ini, kita akan membahas mengenai media promosi paling efektif untuk meningkatkan penjualan', 1100, 'Daniel Tri', '2021-10-25', 'Promosi online, meningkatkan penjualan, efektif, menawarkan produk, menarik perhatian, brand awareness, loyalitas, jangkauan'),
(25, 'OS Linux Terbaik 2021 Penggunaan Sehari hari', 'Operating system Linux merupakan OS yang bersifat open-source dan gratis. Sebagian orang mencoba menghindari Linux dikarenakan ketenarannya terhadap kesulitan pemakaian. Namun pada 2021 ini, Linux telah berubah dan menyajikan beragam pilihan OS yang lebih user friendly. Mari kita simak OS Linux terbaik pada tahun 2021 untuk penggunaan sehari hari', 765, 'Daniel Tri', '2021-11-06', 'Linux, OS Linux\r\n'),
(26, 'Kelebihan dan Kekurangan Linux yang Anda Perlu Ketahui', 'Operating System Linux telah hadir sejak awal 1990 dan hingga saat ini, OS Linux sangat umum ditemukan di server dikarenakan keamanan dan performanya. Mari kita bahas apa saja kekurangan dan kelebihdan dari OS ini?', 449, 'Daniel Tri', '2021-11-04', 'OS Linux, Performa, OS Gratis, Kelebihan Linux, Kekurangan Linux'),
(27, '9 Manfaat Penulisan Artikel Pada Web Pribadi', 'mengunggah konten artikel pada website pada dasarnya sangat penting. Ada banyak sekali manfaat yang bisa Anda dapatkan dengan melakukan hal tersebut.Pada artikel ini kami akan membahas 9 manfaat penulisan artikel pada website pribadi', 1003, 'Daniel Tri', '2021-11-09', 'penulisan artikel, website pribadi, visitor website, traffic, social media, SEO'),
(28, 'Cara Promosi Online Yang Menarik dan Efektif', 'Berkembangnya dunia digital juga mempengaruhi cara melakukan promosi. Ada banyak cara yang bisa dilakukan, mari kita simak satu per satu metode yang dapat digunakan untuk melakukan promosi online pada artikel ini.', 1068, 'Daniel Tri', '2021-11-12', 'cara promosi online yang menarik, digital marketing, promosi online'),
(29, 'Daftar Aplikasi Customer Service yang Mudah Digunakan', 'Aplikasi customer service merupakan sebuah perangkat lunak yang dipakai untuk memudahkan proses dalam pengaduan layanan dari pelanggan atau customer. Aplikasi ini dapat secara signifikan meningkatkan kualitas customer service itu sendiri serta meningkatkan branding pada perusahaan anda. Mari simak Aplikasi customer service yang dapat utilisasi saat ini.', 1065, 'Daniel Tri', '2021-11-18', 'Aplikasi Customer Service'),
(30, '11 Aplikasi Meeting Online yang Memiliki Fitur Lengkap', 'Aplikasi meeting online saat ini telah berkembang dengan pesat. Seiring kemajuan teknologi dan kebutuhan atas dasar pandemi COVID-19, banyak developer yang mengembangkan aplikasi meeting online, mari simak 11 Aplikasi meeting online yang memiliki fitur terlengkap saat ini.', 1066, 'Daniel Tri', '2021-11-20', 'Online meeting, Zoom, Whatsapp, Google Meet, Skype, Slack, Cisco Webex, Jitsi Meet, Go To Meeting, Zoho Meeting, Bluejeans Video Converencing, Online Meeting Webinars'),
(31, 'Apa Manfaat Website dalam Bisnis Online Secara Menyeluruh', 'Seiring perkembangan jaman, teknik marketing dan branding pun telah bergeser ke digital. Perusahaan berlomba - lomba untuk membuat website perusahaan mereka. Namun apa manfaat website dalam bisnis online yang bisa menjadi salah satu pertimbangan untuk dilakukan? Mari simak pembahasannya disini.', 801, 'Daniel Tri', '2021-11-22', 'Manfaat website dalam bisnis online, hemat waktu dan biaya, SEO'),
(32, 'Kenapa Website Saya Sepi Pengunjung', 'Penyebab website sepi pengunjung bisa terjadi akibat berbagai macam hal, seperti pemilihan topik yang kurang sesuai, pemilihan audiens yang tidak tepat, ataupun kualitas SEO yang minim.', 833, 'Daniel Tri', '2021-11-26', 'penyebab website sepi pengunjung, SEO'),
(33, 'Inilah Rekomendasi Aplikasi Penting Manajemen Perusahaan', 'Secara fundamental, teknologi dibuat dan dikembangkan untuk mempermudah manusia dan perusahaan. Pada artikel ini, kami akan membahas sejumlah aplikasi penting untuk manajemen perusahaan.', 731, 'Daniel Tri', '2021-11-24', 'aplikasi penting manajemen perusahaan, aplikasi, ERP, absensi, payroll, hris, accounting'),
(34, 'Media Interaktif Berbasis Web Terbaik', 'Penggunaan media interaktif berbasis web ternyata begitu bermanfaat bagi klien. Dengan masa pandemi COVID-19 menyerang, salah satu opsi untuk menurunkan tingkan penyebarannya adalah untuk belajar secara digital. Media interaktif dapat membantu kita untuk melakukan hal tersebut dengan pengalaman semirip mungkin dengan pembelajaran tatap muka.', 857, 'Daniel Tri', '2021-11-27', 'media interaktif berbasis web'),
(35, 'Cara Meningkatkan Traffic Web dengan Cepat', 'Salah satu hal, untuk bisa mendapatkan uang yang banyak dari sebuah website itu adalah memiliki pengunjung yang banyak. Terdapat banyak cara untuk meningkatkan traffic untuk website anda, pada artikel ini kami akan membahas beberapa metode tersebut.', 799, 'Daniel Tri', '2021-12-01', 'cara meningkatkan traffic web, SEO, traffic website'),
(36, 'Tren Masa Kini, Penggunaan Teknologi AI dalam Web Development', 'Teknologi Artificial Intelligence yang saat ini sedang marak dibicarakan merupakan suatu produk teknologi dimana sebuah mesin atau komputer memiliki kemampuan untuk belajar. Pada artikel ini, kami akan membahas bagaimana AI dapat membantu dalam web development.', 700, 'Daniel Tri', '2021-12-02', 'AI dalam web development, Artificial Intelligence, Web development');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tag`
--

CREATE TABLE `blog_tag` (
  `id` int(255) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `tags_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_tag`
--

INSERT INTO `blog_tag` (`id`, `blog_id`, `tags_id`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 3, 2),
(4, 4, 2),
(5, 5, 2),
(6, 6, 2),
(7, 7, 3),
(8, 8, 1),
(9, 9, 2),
(10, 10, 2),
(11, 11, 1),
(12, 11, 4),
(13, 12, 3),
(14, 13, 3),
(15, 14, 3),
(16, 15, 3),
(17, 16, 3),
(18, 17, 2),
(19, 18, 3),
(20, 19, 3),
(21, 20, 3),
(22, 21, 3),
(23, 20, 3),
(24, 23, 2),
(25, 24, 4),
(26, 25, 3),
(27, 25, 2),
(28, 26, 2),
(29, 26, 3),
(30, 27, 1),
(31, 27, 4),
(32, 28, 4),
(33, 29, 3),
(34, 30, 3),
(35, 31, 4),
(36, 32, 1),
(38, 33, 3),
(39, 34, 3),
(40, 35, 1),
(41, 36, 2);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(255) NOT NULL,
  `blog_id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `website` varchar(50) DEFAULT NULL,
  `comment` text NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `blog_id`, `name`, `website`, `comment`, `created_on`) VALUES
(1, 25, 'Test', 'https://test.com', 'Terima kasih atas ilmunya, saya percaya pembahasan ini dapat membantu banyak  orang untuk membuat website mereka lebih baik lagi.', '2021-11-08 15:43:26'),
(2, 25, 'Test', 'https://test.com', 'Terima kasih atas ilmunya, saya percaya pembahasan ini dapat membantu banyak  orang untuk membuat website mereka lebih baik lagi.', '2021-11-08 15:43:26'),
(3, 25, 'Test', 'https://test.com', 'Terima kasih atas ilmunya, saya percaya pembahasan ini dapat membantu banyak  orang untuk membuat website mereka lebih baik lagi.', '2021-11-08 15:43:26'),
(4, 25, 'Test', 'https://test.com', 'Terima kasih atas ilmunya, saya percaya pembahasan ini dapat membantu banyak  orang untuk membuat website mereka lebih baik lagi.', '2021-11-08 15:43:26'),
(5, 25, 'Test', 'https://test.com', 'Terima kasih atas ilmunya, saya percaya pembahasan ini dapat membantu banyak  orang untuk membuat website mereka lebih baik lagi.', '2021-11-08 15:43:26'),
(6, 25, 'Test', 'https://test.com', 'Terima kasih atas ilmunya, saya percaya pembahasan ini dapat membantu banyak  orang untuk membuat website mereka lebih baik lagi.', '2021-11-08 15:43:26'),
(7, 25, 'Test', 'https://test.com', 'Terima kasih atas ilmunya, saya percaya pembahasan ini dapat membantu banyak  orang untuk membuat website mereka lebih baik lagi.', '2021-11-08 15:43:26'),
(8, 25, 'Test', 'https://test.com', 'Terima kasih atas ilmunya, saya percaya pembahasan ini dapat membantu banyak  orang untuk membuat website mereka lebih baik lagi.', '2021-11-08 15:43:26'),
(9, 25, 'Test', 'https://test.com', 'Terima kasih atas ilmunya, saya percaya pembahasan ini dapat membantu banyak  orang untuk membuat website mereka lebih baik lagi.', '2021-11-08 15:43:26'),
(10, 25, 'Test', 'https://test.com', 'Terima kasih atas ilmunya, saya percaya pembahasan ini dapat membantu banyak  orang untuk membuat website mereka lebih baik lagi.', '2021-11-08 15:43:26'),
(11, 25, 'Test', 'https://test.com', 'Terima kasih atas ilmunya, saya percaya pembahasan ini dapat membantu banyak  orang untuk membuat website mereka lebih baik lagi.', '2021-11-08 15:43:26'),
(12, 25, 'Test', 'https://test.com', 'Terima kasih atas ilmunya, saya percaya pembahasan ini dapat membantu banyak  orang untuk membuat website mereka lebih baik lagi.', '2021-11-08 15:43:26'),
(13, 25, 'Test', 'https://test.com', 'Terima kasih atas ilmunya, saya percaya pembahasan ini dapat membantu banyak  orang untuk membuat website mereka lebih baik lagi.', '2021-11-08 15:43:26'),
(14, 25, 'Test', 'https://test.com', 'Terima kasih atas ilmunya, saya percaya pembahasan ini dapat membantu banyak  orang untuk membuat website mereka lebih baik lagi.', '2021-11-08 15:43:26'),
(15, 25, 'Test', 'https://test.com', 'Terima kasih atas ilmunya, saya percaya pembahasan ini dapat membantu banyak  orang untuk membuat website mereka lebih baik lagi.', '2021-11-08 15:43:26'),
(16, 25, 'Test', 'https://test.com', 'Terima kasih atas ilmunya, saya percaya pembahasan ini dapat membantu banyak  orang untuk membuat website mereka lebih baik lagi.', '2021-11-08 15:43:26'),
(17, 25, 'Daniel Tri', 'https://test.com', 'as;dlfkjas ;dflkjasd; flkajs ;dflkasdf', '0000-00-00 00:00:00'),
(18, 25, 'Daniel Tri', 'https://test.com', 'Hallo, saya telah bergerak di bidang ini.', '2021-12-03 07:45:06'),
(19, 16, 'Daniel Tri', '', 'Saya suka artikel seperti ini.', '2021-12-03 07:55:25');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`) VALUES
(1, 'SEO'),
(2, 'Programming'),
(3, 'Aplikasi'),
(4, 'Digital Marketing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tag`
--
ALTER TABLE `blog_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`),
  ADD KEY `tags_id` (`tags_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `blog_tag`
--
ALTER TABLE `blog_tag`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_tag`
--
ALTER TABLE `blog_tag`
  ADD CONSTRAINT `blog_tag_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`),
  ADD CONSTRAINT `blog_tag_ibfk_2` FOREIGN KEY (`tags_id`) REFERENCES `tags` (`id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
