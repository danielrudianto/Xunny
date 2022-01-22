-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2022 at 01:26 AM
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
  `title` varchar(500) NOT NULL,
  `displayTitle` varchar(500) NOT NULL,
  `subtitle` text NOT NULL,
  `words` int(255) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date DEFAULT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `displayTitle`, `subtitle`, `words`, `created_by`, `created_date`, `keywords`) VALUES
(1, 'Desain Web Responsif', 'Desain Web Responsif', 'Desain responsif merupakan suatu konsep yang dibangun dimana sebuah website / web application dapat terlihat proposional untuk beragam perangkat yang saat ini ada. Kita akan membagikan bagimana konsep ini akan berpengaruh pada pembuatan ataupun website anda sendiri.', 572, 'Daniel Tri', '2021-09-12', 'Responsive Web Design, Responsive, Responsif, Desain web, Web Developer Indonesia, Web Developer, Jasa Pembuatan Aplikasi'),
(2, 'Hal Krusial Semua Programmer Perlu Ketahui', 'Hal Krusial Semua Programmer Perlu Ketahui', 'Kebiasaan yang baik merupakan salah satu komponen penting untuk menjadi seorang programmer yang baik. Hal ini dikarenakan programmer dituntut untuk selalu update dengan teknologi yang ada. Lalu apa saja kebiasaan yang tepat menjadi hal yang krusial untuk menjadi seorang programmer handal?', 1173, 'Daniel Tri', '2021-09-14', 'Programmer, Programming, Hal Krusial Semua Programmer Perlu Ketahui, Web Developer Indonesia, Web Developer, Jasa Pembuatan Aplikasi'),
(3, 'Kesalahan Programmer Berujung Pada Masalah Keamanan Data', 'Kesalahan Programmer Berujung Pada Masalah Keamanan Data', 'Tidak dapat dipungkiri bahwa keamanan data merupakan salah satu hal yang krusial dalam pembuatan aplikasi. Namun ada beberapa kesalahan yang dapat menyebabkan isu keamanan data yang mungkin kita lalaikan.', 664, 'Daniel Tri', '2021-09-15', 'Kesalahan Programmer, Programmer Pemula, Keamanan Data, Cybersecurity, Web Developer Indonesia, Web Developer, Jasa Pembuatan Aplikasi'),
(4, '5 Framework CSS Terbaik Untuk Pengembangan Website', '5 Framework CSS Terbaik Untuk Pengembangan Website', 'CSS merupakan bahasa yang digunakan untuk membantu mengatur tampilan dari website anda. Saat ini tersedia sejumlah library yang digunakan untuk membantu para developer untuk memastikan website anda tampil dengan baik, simak beberapa library CSS yang kami pilih.', 506, 'Daniel Tri', '2021-09-18', 'CSS, Bootstrap, Foundation, Materialize, Pure, Bulma, Web Developer Indonesia, Web Developer, Jasa Pembuatan Aplikasi'),
(5, 'Tantangan Tanpa Akhir Cara Membuat Desain Website yang Mudah Digunakan', 'Tantangan Tanpa Akhir Cara Membuat Desain Website yang Mudah Digunakan', 'Desain website yang ramah bagi pengguna merupakan tujuan dari seluruh desainer web di dunia. Tantangan ini sangat sulit untuk dipenuhi menimbang dinamika manusia yang secara konstan berubah.', 780, 'Daniel Tri', '2021-09-22', 'Website Design, User Friendly Design, Web Developer Indonesia, Web Developer, Jasa Pembuatan Aplikasi'),
(6, '5 Kepribadian Seorang Programmer Hebat', '5 Kepribadian Seorang Programmer Hebat', 'Seorang arsitek software merupakan posisi penting dalam setiap perusahaan. Arsitek diharapkan dapat berkolaborasi dengan para pemegang keputusan untuk memberikan solusi dan produk yang berguna bagi perusahaan tersebut. Apa saja kepribadian yang dibutuhkan?', 1025, 'Daniel Tri', '2021-09-23', 'Software architect, arsitek software, Kepribadian programmer, Keterpercayaan, Ketabahan, Percaya Diri, Persuasif, Cerdas secara emosional, Web Developer Indonesia, Web Developer, Jasa Pembuatan Aplikasi, IT Developer Indonesia'),
(7, 'Mengapa Anda Perlu Memilih Outsourcing Untuk Kebutuhan IT Perusahaan Anda', 'Mengapa Anda Perlu Memilih Outsourcing Untuk Kebutuhan IT Perusahaan Anda', 'Outsourcing merupakan aktivitas dimana perusahaan mempekerjakan pihak luar untuk\r\nmemberikan layanan, melakukan tugas, atau menangani operasi dalam perusahaan. Saat ini,\r\noutsourcing banyak dilakukan oleh perusahaan karena membawa banyak manfaat bagi\r\nperusahaan. Mari simak beberapa keuntungannya', 602, 'Daniel Tri', '2021-09-24', 'Outsourcing, IT Outsourcing, Kebutuhan IT, Hemat Biaya dan Waktu, Fleksibel, Ahli, Risiko, Web Developer Indonesia, Web Developer, Jasa Pembuatan Aplikasi'),
(8, 'Buat Audiens Anda Terpukau Dengan Trik Ini', 'Buat Audiens Anda Terpukau Dengan Trik Ini', 'Branding dengan menggunakan internet? Mengapa tidak? Mulai dengan satu langkah kecil, buat audiens anda terpukau dengan beberapa trik yang akan kami bagikan untuk meningkatkan kehadiran merek anda.', 645, 'Daniel Tri', '2021-09-25', 'HTML, CSS, Javascript, Flutter, Angular, Vue, ReactJS, Framework, Branding using the Internet, Frontend Developer, Backend developer'),
(9, '5 Framework PHP terbaik untuk pengembangan website', '5 Framework PHP terbaik untuk pengembangan website', 'PHP merupakan salah satu bahasa pemrograman yang sangat populer di kalangan web developer. Saat ini tersedia banyak framework yang digunakan untuk mempermudah para developer membuat aplikasi atau website dengan menggunakan bahasa PHP. Apa saja framework tersebut, mari kita simak di artikel ini', 1255, 'Daniel Tri', '2021-10-01', 'PHP, PHP framework, Yii, Laravel, CodeIgniter, Web Developer Indonesia, Web Developer, Jasa Pembuatan Aplikasi'),
(10, 'Aplikasi Real Time dengan WebSocket', 'Aplikasi Real Time dengan WebSocket', 'Pernahkah anda terbesit bagaimana sebuah real-time application ( aplikasi yang dapat menerima dan mengirimkan data secara hampir spontan ) bekerja? WebSockets merupakan salah satu teknologi yang cukup umum digunakan hari ini bagi para developer untuk melakukan tugas tersebut. Simak artikel kami mengenai websocket disini.', 667, 'Daniel Tri', '2021-10-11', 'Socket.io, socket. websocket, real-time application, Sockette, WS, Realtime application'),
(11, 'Inilah Manfaat Website Bagi Perusahaan Tak Perlu Ragu Untuk Membuatnya', 'Inilah Manfaat Website Bagi Perusahaan Tak Perlu Ragu Untuk Membuatnya', 'Website perusahaan, apakah manfaatnya? Bukan hanya sebagai media informasi dan promosi, namun memiliki website profil perusahaan memiliki banyak kegunaan lainnya. Mari simak artikel ini untuk mengetahui apa saja kegunaannya.', 1029, 'Daniel Tri', '2021-10-16', 'Website, Manfaat website perusahaan, kepercayaan, pemasaran, market, profil, informasi, biaya layanan, riset, tipe customer, edukasi, kualitas layanan, partner bisnis'),
(12, 'Mengenal Aplikasi Customer Relationship Management Apa Saja Manfaatnya', 'Mengenal Aplikasi Customer Relationship Management Apa Saja Manfaatnya', 'Pelanggan merupakan salah satu asset yang penting dalam sebuah perusahaan. Seiring berkembangnya teknologi, CRM telah mengambil alih pelayanan pelanggan untuk meningkatkan pengalaman konsumen dalam menjalankan kerja sama atau transaksi dengan perusahaan tersebut. Apa saja manfaat lain dari CRM? Mari simak manfaatnya disini', 1024, 'Daniel Tri', '2021-10-17', 'Customer Relation Management, CRM, Data Customer, Kinerja, Keuntungan, Pengambilan Keputusan, Keamanan, Keamanan Data, Operasional, Konsumen, Optimal, Otomatis '),
(13, 'Manfaat Menggunakan Aplikasi Keuangan Perusahaan Untuk Bisnis Yang Dijalankan', 'Manfaat Menggunakan Aplikasi Keuangan Perusahaan Untuk Bisnis Yang Dijalankan', 'Mengatur dan memantau keuangan bisnis kita dapat menjadi pekerjaan yang sangat memakan waktu dan tenaga. Sebagaimana penting kah peran teknologi dalam sebuah perusahaan? Dalam artikel ini, kami akan membahas mengenai 9 kegunaan aplikasi keuangan dan bagaimana hal tersebut dapat membantu anda untuk memantau dan mengatur keuangan bisnis anda.', 1081, 'Daniel Tri', '2021-10-19', 'Keuangan, Teknologi, Aplikasi, Hemat waktu, pantau keuangan, terkomputerisasi, terorganisir, inventaris, mobile, bisnis'),
(14, '7 Manfaat Menggunakan Aplikasi Absensi Online Berbasis Web Untuk Perusahaan', '7 Manfaat Menggunakan Aplikasi Absensi Online Berbasis Web Untuk Perusahaan', 'Absensi merupakan komponen penting baik bagi karyawan perusahaan ataupun perusahaan sendiri untuk menjaga performa sumber daya manusia perusahaan. Seiring waktu, sistem absensi telah berkembang untuk menjaga keutuhan data, mengurangi delay, dan mengoptimalisasi jumlah karyawan. Mari kita simak 7 manfaat penggunaan aplikasi absensi untuk bisnis anda.', 1022, 'Daniel Tri', '2021-10-20', 'Absensi, perusahaan, bisnis, web, sumber daya manusia'),
(15, 'Pentingnya Aplikasi Inventory Barang Berbasis Web Dalam Bisnis', 'Pentingnya Aplikasi Inventory Barang Berbasis Web Dalam Bisnis', 'Gudang merupakan salah satu komponen penting dalam jalannya sebuah operasional perusahaan. Tanpa adanya sistem gudang yang baik, perusahaan sendiri dapat mengalami kerugian hingga puluhan atau ratusan juta Rupiah. Oleh karena itu, diperlukan sebuah sistem gudang yang baik untuk menopang potensi kebocoran perusahaan ini. Mari simak pentingnya aplikasi warehouse bagi pengusaha.', 1006, 'Daniel Tri', '2021-10-21', 'Gudang, aplikasi warehouse, operasional perusahaan, sistem gudang'),
(16, 'Ketahui Pentingnya Aplikasi Penjualan Berbasis Web Untuk Bisnis', 'Ketahui Pentingnya Aplikasi Penjualan Berbasis Web Untuk Bisnis', 'Saat ini, mungkin anda sering mendengar istilah POS (Point of Sales), sebuah sistem atau aplikasi yang diperjual belikan dengan tujuan membantu usaha anda seperti toko, laundry, ataupun bengkel dalam penjualannya. Kali ini, kita akan membahas mengenai pentingnya aplikasi penjualan (termasuk POS) untuk bisnis anda.', 1003, 'Daniel Tri', '2021-10-22', 'POS, penjualan, bisnis, point of sales, sistem penjualan'),
(17, 'Keuntungan Penggunaan Aplikasi Manajemen Proyek Konstruksi bagi Perusahaan', 'Keuntungan Penggunaan Aplikasi Manajemen Proyek Konstruksi bagi Perusahaan', 'Perusahaan konstruksi merupakan salah satu perusahaan yang memiliki operasional yang relatif komkpleks. Campuran antara sumber daya manusia, material, dan alat dalam kurun waktu yang terbatas menjadi beberapa tantangan yang dialami sebuah perusahaan kontraktor. Namun seiring berkembangnya teknologi, perusahaan dengan tingkat kompleksitias seperti ini pun mampu untuk mengutilisasi teknologi untuk pengembangan perusahaannya.', 1123, 'Daniel Tri', '2021-10-22', 'Aplikasi kontraktor, teknologi, konstruksi, aplikasi manajemen konstruksi, perencanaan proyek, tracking, perhitungan anggaran, laporan proyek, efisiensi, evaluasi'),
(18, 'Pentingnya Aplikasi Laporan Keuangan Mobile bagi Sebuah Perusahaan', 'Pentingnya Aplikasi Laporan Keuangan Mobile bagi Sebuah Perusahaan', 'Dengan teknologi, anda dapat membaca berita, menonton video, ataupun mendengarkan musik lewat hp atau smartphone anda. Bagaimana dengan keuangan perusahaan anda? Apakah menjadi sangat nyaman apabila anda dapat memantau kondisi perusahaan anda di genggaman tangan anda? Mari simak pentingnya aplikasi laporan keuangan mobile.', 1000, 'Daniel Tri', '2021-10-23', 'Keuangan, Teknologi, Aplikasi, Hemat waktu, pantau keuangan, terkomputerisasi, terorganisir, inventaris, mobile, bisnis'),
(19, 'Mengenal Manfaat Aplikasi Komputer Akuntansi bagi Perusahaan', 'Mengenal Manfaat Aplikasi Komputer Akuntansi bagi Perusahaan', 'Akuntansi merupakan salah satu bagian yang sangat krusial di perusahaan manapun. Seiring dengan waktu, teknologi untuk mempermudah pekerjaan pencatatan dan pelaporan ini semakin banyak. Mari kita coba kenali manfaat aplikasi komputer akuntansi bagi perusahaan', 1025, 'Daniel Tri', '2021-10-23', 'Akuntansi, financial, finance, keuangan, laporan, aplikasi akuntansi'),
(20, 'Fungsi Aplikasi Pengolah Angka yang Menguntungkan Bagi Perusahaan', 'Fungsi Aplikasi Pengolah Angka yang Menguntungkan Bagi Perusahaan', 'Dengan adanya teknologi yang membantu kita untuk melakukan kalkulasi kita tidak lagi perlu melakukan kalkulasi secara manual secara umum. Perusahaan dengan budaya untuk melakukan perhitungan secara manual perlahan mulai beralih ke sistem yang lebih canggih untuk memperoleh hasil yang sama atau lebih dengan sumber daya lebih rendah.', 1030, 'Daniel Tri', '2021-10-23', 'Pengola angka, aplikasi perusahaan, rumus, perhitungan skala besar, grafik, data, cepat, meminimalisir kesalahan, hemat biaya'),
(21, 'Mengenal Aplikasi Penjualan dan Stok Barang dan Urgensinya', 'Mengenal Aplikasi Penjualan dan Stok Barang dan Urgensinya', 'Pencatatan stok dan penjualan merupakan isu yang menantang dan umum bagi hampir seluruh pelaku usaha yang bergerak di bidang perdagangan. Pada artikel ini, kita akan membahas sebagaimana penting aplikasi tersebut dan bagaimana implementasinya.', 1000, 'Daniel Tri', '2021-10-23', 'Stok, penjualan, urgensi, pendataaan, harga jual, neraca keuangan, kondisi persediaan'),
(22, 'Ketahui Apa Saja Manfaat Digital Marketing dalam Ulasan Berikut Ini', 'Ketahui Apa Saja Manfaat Digital Marketing dalam Ulasan Berikut Ini', 'Dunia digital tidak lepas dari istilah digital marketing, sebuah metode marketing baru yang ditawarkan oleh teknologi untuk dapat menjangkau bahkan lebih banyak konsumen sekaligus. Apa saja manfaat melakukan digital marketing hari ini? Mari simak di artikel ini', 1200, 'Daniel Tri', '2021-10-24', 'Digital marketing, hemat biaya, komunikasi, pasar, jangkauan pasar, kompetisi bisnis, real-time, profesional'),
(23, 'Secure Shell dan manfaatnya bagi keamanan informasi', 'Secure Shell dan manfaatnya bagi keamanan informasi', 'Semakin berkembang teknologi, semakin berkembang pula ilmu meretas atau hacking. Untuk itu kita memerlukan keamanan untuk informasi terutama untuk data yang disimpan pada server. Salah satu cara untuk berkomunikasi dengan server yang aman adalah menggunakan Secure Shell atau seringkali disebut SSH. Mari kita bahas pada artikel ini tentang SSH.', 845, 'Daniel Tri', '2021-11-01', 'Enkripsi, SSH, Secure Shell, Encryption, Asymmetric Encryption, Hashing, Symmetrical encryption, Keamanan, Server, Client'),
(24, 'Benarkah Media Promosi Online Paling Efektif Bisa Meningkatkan Penjualan', 'Benarkah Media Promosi Online Paling Efektif Bisa Meningkatkan Penjualan?', 'Media promosi online paling efektif merupakan cara yang dilakukan atau dipakai seorang pebisnis untuk meningkatkan pendapatan. Berbagai bentuk aktivitasnya seperti menginformasikan, membagikan, dan menawarkan produk atau jasa di perusahaan. Hal tersebut dilakukan untuk menarik perhatian public terhadap barang atau jasa yang ditawarkan. Dalam artikel ini, kita akan membahas mengenai media promosi paling efektif untuk meningkatkan penjualan', 1054, 'Daniel Tri', '2021-10-25', 'Promosi online, meningkatkan penjualan, efektif, menawarkan produk, menarik perhatian, brand awareness, loyalitas, jangkauan'),
(25, 'OS Linux Terbaik 2021 Penggunaan Sehari hari', 'OS Linux Terbaik 2021 Penggunaan Sehari hari', 'Operating system Linux merupakan OS yang bersifat open-source dan gratis. Sebagian orang mencoba menghindari Linux dikarenakan ketenarannya terhadap kesulitan pemakaian. Namun pada 2021 ini, Linux telah berubah dan menyajikan beragam pilihan OS yang lebih user friendly. Mari kita simak OS Linux terbaik pada tahun 2021 untuk penggunaan sehari hari', 444, 'Daniel Tri', '2021-11-06', 'Linux, OS Linux\r\n'),
(26, 'Kelebihan dan Kekurangan Linux yang Anda Perlu Ketahui', 'Kelebihan dan Kekurangan Linux yang Anda Perlu Ketahui', 'Operating System Linux telah hadir sejak awal 1990 dan hingga saat ini, OS Linux sangat umum ditemukan di server dikarenakan keamanan dan performanya. Mari kita bahas apa saja kekurangan dan kelebihdan dari OS ini?', 457, 'Daniel Tri', '2021-11-04', 'OS Linux, Performa, OS Gratis, Kelebihan Linux, Kekurangan Linux'),
(27, '9 Manfaat Penulisan Artikel Pada Web Pribadi', '9 Manfaat Penulisan Artikel Pada Web Pribadi', 'mengunggah konten artikel pada website pada dasarnya sangat penting. Ada banyak sekali manfaat yang bisa Anda dapatkan dengan melakukan hal tersebut.Pada artikel ini kami akan membahas 9 manfaat penulisan artikel pada website pribadi', 1003, 'Daniel Tri', '2021-11-09', 'penulisan artikel, website pribadi, visitor website, traffic, social media, SEO'),
(28, 'Cara Promosi Online yang Menarik dan Efektif', 'Cara Promosi Online yang Menarik dan Efektif', 'Berkembangnya dunia digital juga mempengaruhi cara melakukan promosi. Ada banyak cara yang bisa dilakukan, mari kita simak satu per satu metode yang dapat digunakan untuk melakukan promosi online pada artikel ini.', 1068, 'Daniel Tri', '2021-11-12', 'cara promosi online yang menarik, digital marketing, promosi online'),
(29, 'Daftar Aplikasi Customer Service yang Mudah Digunakan', 'Daftar Aplikasi Customer Service yang Mudah Digunakan', 'Aplikasi customer service merupakan sebuah perangkat lunak yang dipakai untuk memudahkan proses dalam pengaduan layanan dari pelanggan atau customer. Aplikasi ini dapat secara signifikan meningkatkan kualitas customer service itu sendiri serta meningkatkan branding pada perusahaan anda. Mari simak Aplikasi customer service yang dapat utilisasi saat ini.', 1065, 'Daniel Tri', '2021-11-18', 'Aplikasi Customer Service'),
(30, '11 Aplikasi Meeting Online yang Memiliki Fitur Lengkap', '11 Aplikasi Meeting Online yang Memiliki Fitur Lengkap', 'Aplikasi meeting online saat ini telah berkembang dengan pesat. Seiring kemajuan teknologi dan kebutuhan atas dasar pandemi COVID-19, banyak developer yang mengembangkan aplikasi meeting online, mari simak 11 Aplikasi meeting online yang memiliki fitur terlengkap saat ini.', 1066, 'Daniel Tri', '2021-11-20', 'Online meeting, Zoom, Whatsapp, Google Meet, Skype, Slack, Cisco Webex, Jitsi Meet, Go To Meeting, Zoho Meeting, Bluejeans Video Converencing, Online Meeting Webinars'),
(31, 'Apa Manfaat Website dalam Bisnis Online Secara Menyeluruh', 'Apa Manfaat Website dalam Bisnis Online Secara Menyeluruh?', 'Seiring perkembangan jaman, teknik marketing dan branding pun telah bergeser ke digital. Perusahaan berlomba - lomba untuk membuat website perusahaan mereka. Namun apa manfaat website dalam bisnis online yang bisa menjadi salah satu pertimbangan untuk dilakukan? Mari simak pembahasannya disini.', 801, 'Daniel Tri', '2021-11-22', 'Manfaat website dalam bisnis online, hemat waktu dan biaya, SEO'),
(32, 'Kenapa Website Saya Sepi Pengunjung', 'Kenapa Website Saya Sepi Pengunjung?', 'Penyebab website sepi pengunjung bisa terjadi akibat berbagai macam hal, seperti pemilihan topik yang kurang sesuai, pemilihan audiens yang tidak tepat, ataupun kualitas SEO yang minim.', 833, 'Daniel Tri', '2021-11-26', 'penyebab website sepi pengunjung, SEO'),
(33, 'Inilah Rekomendasi Aplikasi Penting Manajemen Perusahaan', 'Inilah Rekomendasi Aplikasi Penting Manajemen Perusahaan', 'Secara fundamental, teknologi dibuat dan dikembangkan untuk mempermudah manusia dan perusahaan. Pada artikel ini, kami akan membahas sejumlah aplikasi penting untuk manajemen perusahaan.', 731, 'Daniel Tri', '2021-11-24', 'aplikasi penting manajemen perusahaan, aplikasi, ERP, absensi, payroll, hris, accounting'),
(34, 'Media Interaktif Berbasis Web Terbaik', 'Media Interaktif Berbasis Web Terbaik', 'Penggunaan media interaktif berbasis web ternyata begitu bermanfaat bagi klien. Dengan masa pandemi COVID-19 menyerang, salah satu opsi untuk menurunkan tingkan penyebarannya adalah untuk belajar secara digital. Media interaktif dapat membantu kita untuk melakukan hal tersebut dengan pengalaman semirip mungkin dengan pembelajaran tatap muka.', 857, 'Daniel Tri', '2021-11-27', 'media interaktif berbasis web'),
(35, 'Cara Meningkatkan Traffic Web dengan Cepat', 'Cara Meningkatkan Traffic Web dengan Cepat', 'Salah satu hal, untuk bisa mendapatkan uang yang banyak dari sebuah website itu adalah memiliki pengunjung yang banyak. Terdapat banyak cara untuk meningkatkan traffic untuk website anda, pada artikel ini kami akan membahas beberapa metode tersebut.', 799, 'Daniel Tri', '2021-12-01', 'cara meningkatkan traffic web, SEO, traffic website'),
(36, 'Tren Masa Kini Penggunaan Teknologi AI dalam Web Development', 'Tren Masa Kini Penggunaan Teknologi AI dalam Web Development', 'Teknologi Artificial Intelligence yang saat ini sedang marak dibicarakan merupakan suatu produk teknologi dimana sebuah mesin atau komputer memiliki kemampuan untuk belajar. Pada artikel ini, kami akan membahas bagaimana AI dapat membantu dalam web development.', 700, 'Daniel Tri', '2021-12-02', 'AI dalam web development, Artificial Intelligence, Web development'),
(37, '3 Cara Melihat Traffic Web Orang Lain dengan Mudah', '3 Cara Melihat Traffic Web Orang Lain dengan Mudah', 'Cara melihat traffic web orang lain bisa dikatakan sangat mudah dan bisa dilakukan oleh siapa saja. Saat ini sudah tersedia banyak layanan dari pihak ketiga untuk melakukan hal tersebut. Pada artikel ini, kami akan membahas mengenai bagaimana cara memantau traffic website orang lain.', 831, 'Daniel Tri', '2021-12-04', 'cara melihat traffic web, traffic website'),
(38, 'Mengenal Kegunaan Aplikasi Web Progresif', 'Mengenal Kegunaan Aplikasi Web Progresif', 'Salah satu upaya untuk mengoptimasi performa website adalah Progressive Web Application atau dikenal dengan PWA. Hal ini dikarenakan PWA memiliki banyak digunakan karena memiliki segudang kegunaan aplikasi web progresif yang akan memudahkan para pengguna. Mari simak kegunaan PWA pada artikel ini', 663, 'Daniel Tri', '2021-12-06', 'PWA, Progressive Web Application'),
(39, 'Cara Meningkatkan Penghasilan Adsense dari Web', 'Cara Meningkatkan Penghasilan Adsense dari Web', 'Cara meningkatkan penghasilan dari website bisa dilakukan dengan berbagai macam cara, dan salah satu metode yang paling sederhana adalah menyediakan lahan untuk perushaaan lain dapat beriklan di website anda. Pada artikel ini kami akan membahas bagaimana meningkatkan penghasilan adsense dari website anda.', 818, 'Daniel Tri', '2021-12-15', 'Adsense, penghasilan website'),
(40, 'Aplikasi Surat Masuk dan Surat Keluar Berbasis Web', 'Aplikasi Surat Masuk dan Surat Keluar Berbasis Web', 'Kegiatan surat menyurat merupakan kegiatan yang dilakukan hampir seluruh perusahaan untuk berkomunikasi secara resmi dengan badan, perusahaan, ataupun perorangan baik di dalam atau di luar perusahaan. Aplikasi surat masuk dan surat keluar berbasis web dapat membantu perusahaan untuk menyederhanakan proses ini dan memastikan catatan tersimpan dengan baik.', 848, 'Daniel Tri', '2021-12-15', 'Aplikasi surat menyurat'),
(41, 'Mengenal Regular Expression', 'Mengenal Regular Expression', 'Apa itu regular expression? Mungkin anda mendengar isitlah ini beberapa kali dalam melakukan programming. Istilah ini sangat populer baik di kalangan front end engineer ataupun back end engineer. Pada artikel ini, kita akan membahas mengenai sejarah dan cara kerja regular expression', 554, 'Daniel Tri', '2021-12-17', 'Regular expression, Regex'),
(42, 'Ketahui Apa Saja Manfaat Aplikasi Media Promosi Online', 'Ketahui Apa Saja Manfaat Aplikasi Media Promosi Online', 'Upaya pemasaran dapat dilakukan dengan memanfaatkan berbagai tempat untuk memperluas jangkauan konsumen. Salah satu media dapat dimanfaatkan sebagai upaya membuat jangkauan konsumen luas adalah dengan memanfaatkan aplikasi media promosi online.', 696, 'Daniel Tri', '2022-01-03', 'aplikasi media promosi online, digital marketing'),
(43, 'Fungsi Database Administrator yang Perlu Anda Pahami Secara Detail', 'Fungsi Database Administrator yang Perlu Anda Pahami Secara Detail', 'Fungsi database administrator menjadi penting untuk diketahui semua pihak, khususnya bagi Anda yang bergerak dalam bidang bisnis atau perusahaan. Pada artikel ini, kami akan membahas fungsi seorang database administrator secara rinci.', 806, 'Daniel Tri', '2022-01-05', 'Fungsi database administrator, database'),
(44, 'Aplikasi Monitoring Jaringan Berbasis Web', 'Aplikasi Monitoring Jaringan Berbasis Web', 'Penggunaan aplikasi monitoring jaringan berbasis web begitu penting bagi suatu perusahaan. Aplikasi monitoring dapat membantu perusahaan untuk mengontrol penggunaan jaringan karyawannya. Pada artikel ini, kami akan membahas mengenai pengunaan aplikasi monitoring jaringan berbasis web.', 814, 'Daniel Tri', '2022-01-05', 'aplikasi monitoring jaringan berbasis web'),
(45, 'Manfaat Aplikasi Pembayaran Berbasis Web untuk Segala Transaksi', 'Manfaat Aplikasi Pembayaran Berbasis Web untuk Segala Transaksi', 'Kapasitas untuk bisa memberikan fungsi yang terbaik bagi semua transaksi keuangan memang terus dibutuhkan dari waktu ke waktu. Oleh karena itu, aplikasi untuk melakukan transaksi semakin lama semakin marak untuk digunakan. Pada artikel ini, kami akan membahas mengenai aplikasi pembayaran berbasis web.', 827, 'Daniel Tri', '2022-01-08', 'Aplikasi transaksi, pembayaran'),
(46, 'Penerapan Teknologi Canggih Digital Marketing', 'Penerapan Teknologi Canggih Digital Marketing', 'Memanfaatkan teknologi canggih digital marketing salah satu bentuk strategi pemasaran yang efektif, khususnya dengan memanfaatkan sosial media. Pada artikel ini, kami akan membahas aplikasi teknologi \"canggih\" dalam digital marketing', 732, 'Daniel Tri', '2022-01-11', 'penerapan teknologi canggih, digital marketing'),
(47, 'Keuntungan Aplikasi Input Data Berbasis Web', 'Keuntungan Aplikasi Input Data Berbasis Web', 'Menggunakan aplikasi input data berbasis web, sangat maksimal karena bahasa pemrograman dan fitur lengkapnya. Dengan utilisasi web sebagai platform untuk melakukan input data, kita dapat expand tim kita dengan lebih optimal dan optimalisasi pekerjaan kita.', 834, 'Daniel Tri', '2022-01-14', 'aplikasi input data berbasis web'),
(48, 'Simak Definisi dan Contoh Program Python di Bidang Penjualan', 'Simak Definisi dan Contoh Program Python di Bidang Penjualan', 'Mengenal dan mempelajari bahasa pemrograman python di bidang penjualan dapat dijadikan sebagai hobi yang memberikan peluang memperoleh profesi menjanjikan.', 1020, 'Daniel Tri', '2022-01-17', 'contoh program python penjualan, programmer, software, aplikasi, prototype, data science, bahasa pemrograman, web, kode'),
(49, 'Ketahui cara mudah membuat web dengan PHP', 'Ketahui cara mudah membuat web dengan PHP', 'Membuat web dengan bahasa pemrograman PHP memiliki banyak manfaat dan merupakan salah satu cara untuk menghasilkan web sesuai standar. Pada artikel ini, kami akan membahas bagaimana cara mudah untuk membuat web dengan menggunakan PHP.', 459, 'Daniel Tri', '2022-01-18', 'coding, php, membuat php'),
(50, 'Beberapa tips dan trik belajar coding dari nol', 'Beberapa tips dan trik belajar coding dari nol', 'Dengan banyaknya informasi di dunia kita saat ini, memungkinkan kita untuk mempelajari berbagai macam hal, termasuk coding. Pada artikel ini, akan membahas mengenai tips dan trik belajar coding dari nol.', 413, 'Daniel Tri', '2022-01-19', 'coding, HTML, belajar coding'),
(51, 'Yuk mengenal dan melihat beberapa contoh program python web', 'Yuk mengenal dan melihat beberapa contoh program python web', 'Python merupakan bahasa pemrograman yang cukup populer, dapat digunakan untuk membuat berbagai software web, game, hingga robotic dan artificial intelligence. Pada rtikel ini, kami akan membahas beberapa contoh program sederhana yang dapat dibuat dengan menggunakan Python.', 411, 'Daniel Tri', '2022-01-20', 'python, bahasa pemogrammer, contoh program python'),
(52, 'Simak 4 panduan belajar Bahasa pemrograman c untuk pemula', 'Simak 4 panduan belajar Bahasa pemrograman c++ untuk pemula', 'Jenis pemrograman C++ merupakan salah satu bahasa program paling populer karena sangat powerfull. Meskipun C++ merupakan salah satu bahasa yang \"tua\", namun kekuatan dari bahasa ini menjadikannya masih relevan hingga jaman sekarang.', 427, 'Daniel Tri', '2022-01-20', 'javascript, java, belajarcoding C++, Dynamic memory Allocation'),
(53, 'Mengenal bahasa pemrograman C untuk pemula sejarah dan komponen', 'Mengenal bahasa pemrograman C untuk pemula: sejarah dan komponen', 'Walaupun sudah berusia 45 tahun, bahasa pemrograman C juga masih diminati banyak orang untuk dipelajari. Karena bahasa pemrograman ini masih dapat diaplikasikan ke dalam perangkat lunak - perangkat lunak hari ini. Pada aritkel ini, kami akan membahas bahasa pemrograman C.', 424, 'Daniel Tri', '2022-01-20', 'C, Sejarah C, Komponen C'),
(54, '4 Tips belajar pemrograman web dengan PHP dan MySQL', '4 Tips belajar pemrograman web dengan PHP dan MySQL', 'Dengan belajar pemrograman web dengan PHP dan MySQL, kamu dapat menulis berbagai kode program dapat menghasilkan berbagai aplikasi dan software seperti Website dan Webapps tradisional. Pada artikel ini, kami akan membahas tips untuk belajar pemrograman web menggunakan PHP dan MySQL.', 414, 'Daniel Tri', '2022-01-21', 'PHP, MySQL, web'),
(55, 'Fungsi Software Developer yang Menjamin Kenyamanan Anda', 'Fungsi Software Developer yang Menjamin Kenyamanan Anda', 'Perkembangan dunia teknologi memang menjadi hal yang secara besar dan tentunya akan menghasilkan layanan cukup potensial terkait semua kebutuhan manusia. Software developer dapat membantu anda untuk menyedikan layanan teknologi untuk kepentingan perusahaan anda.', 742, 'Daniel Tri', '2022-01-22', 'Fungsi software developer'),
(56, 'Contoh Bahasa Pemrograman PHP Dijamin Mudah Dipelajari', 'Contoh Bahasa Pemrograman PHP, Dijamin Mudah Dipelajari', 'PHP menjadi salah satu bahasa pemrograman yang perlu dipelajari. Sehingga penting untuk mengetahui contoh bahasa pemrograman PHP untuk memudahkan anda dalam belajar. Dalam artikel ini, kami akan membahas contoh bahasa pemrograman PHP yang dijamin mudah untuk dipelajari.', 403, 'Daniel Tri', '2022-01-22', 'Bahasa Pemrograman PHP, Belajar PHP, Contoh Bahasa Pemrograman, Fungsi PHP'),
(57, 'Pemrograman Web dan Perangkat Bergerak Ini yang Perlu Anda Ketahui', 'Pemrograman Web dan Perangkat Bergerak, Ini yang Perlu Anda Ketahui', 'Semakin canggih teknologi, maka semakin banyak penggunaan program-program komputer tertentu. Sehingga penting untuk mengetahui pemrograman web dan perangkat bergerak supaya anda bisa meningkatkan pengetahuan mengenai pemrograman komputer.', 400, 'Daniel Tri', '2022-01-22', 'Pemrograman Web, Client Server, Perangkat Bergerak, Back End, PWPB Populer');

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
(40, 33, 3),
(41, 34, 3),
(42, 35, 1),
(43, 36, 2),
(44, 37, 4),
(45, 38, 2),
(46, 39, 1),
(47, 41, 2),
(48, 42, 4),
(49, 43, 3),
(50, 44, 3),
(51, 40, 3),
(52, 45, 3),
(53, 46, 4),
(54, 47, 3),
(55, 48, 3),
(56, 49, 2),
(57, 50, 2),
(58, 51, 2),
(59, 52, 2),
(60, 53, 2),
(61, 54, 2),
(62, 55, 3),
(63, 56, 2),
(64, 57, 2);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(255) NOT NULL,
  `blog_id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL
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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `blog_tag`
--
ALTER TABLE `blog_tag`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
