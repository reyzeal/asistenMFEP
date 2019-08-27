-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 06:40 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'sisfo', '0155a13b6bf88b8443b4c4b025a9fefc');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `isi` text NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `tgl`, `isi`, `file`) VALUES
(141, 'Lorem Ipsum Lorem Lorem Ipsuuum', '2018-08-28', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque semper ex quis odio vestibulum viverra vulputate quis justo. Aliquam aliquet, justo eget viverra aliquet, massa dui bibendum enim, vitae porttitor tellus ex quis nibh. Sed a aliquam felis, id molestie tellus. Fusce accumsan nisi enim, ut placerat nulla pharetra quis. Suspendisse rutrum sodales ipsum vitae tincidunt. Mauris tincidunt porta justo, quis pharetra libero. Etiam nec tincidunt tortor.</p>\r\n</body>\r\n</html>', 'berita/sanji__one_piece__minimalist_wallpaper_by_greenmapple17-daczm4t.png'),
(142, 'Lorem Ipsum Lorem Ipsum Ipsum', '2018-08-23', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque semper ex quis odio vestibulum viverra vulputate quis justo. Aliquam aliquet, justo eget viverra aliquet, massa dui bibendum enim, vitae porttitor tellus ex quis nibh. Sed a aliquam felis, id molestie tellus. Fusce accumsan nisi enim, ut placerat nulla pharetra quis. Suspendisse rutrum sodales ipsum vitae tincidunt. Mauris tincidunt porta justo, quis pharetra libero. Etiam nec tincidunt tortor.</p>\r\n</body>\r\n</html>', 'berita/839874-superman-logo-wallpapers-3840x2160-4k.jpg'),
(137, 'Lorem Ipsum Dolor Sit Amet', '2018-08-16', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque semper ex quis odio vestibulum viverra vulputate quis justo. Aliquam aliquet, justo eget viverra aliquet, massa dui bibendum enim, vitae porttitor tellus ex quis nibh. Sed a aliquam felis, id molestie tellus. Fusce accumsan nisi enim, ut placerat nulla pharetra quis. Suspendisse rutrum sodales ipsum vitae tincidunt. Mauris tincidunt porta justo, quis pharetra libero. Etiam nec tincidunt tortor.</p>\r\n</body>\r\n</html>', 'berita/artificial-intelligence-3382509_960_720.png'),
(138, 'Lorem Ipsum', '2018-08-26', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque semper ex quis odio vestibulum viverra vulputate quis justo. Aliquam aliquet, justo eget viverra aliquet, massa dui bibendum enim, vitae porttitor tellus ex quis nibh. Sed a aliquam felis, id molestie tellus. Fusce accumsan nisi enim, ut placerat nulla pharetra quis. Suspendisse rutrum sodales ipsum vitae tincidunt. Mauris tincidunt porta justo, quis pharetra libero. Etiam nec tincidunt tortor.</p>\r\n</body>\r\n</html>', 'berita/download.jpg'),
(139, 'Lorem Ipsum Lorem', '2018-08-12', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque semper ex quis odio vestibulum viverra vulputate quis justo. Aliquam aliquet, justo eget viverra aliquet, massa dui bibendum enim, vitae porttitor tellus ex quis nibh. Sed a aliquam felis, id molestie tellus. Fusce accumsan nisi enim, ut placerat nulla pharetra quis. Suspendisse rutrum sodales ipsum vitae tincidunt. Mauris tincidunt porta justo, quis pharetra libero. Etiam nec tincidunt tortor.</p>\r\n</body>\r\n</html>', 'berita/5208486-wallpaper-one-piece.png'),
(140, 'Lorem Ipsum Lorem Lorem', '2018-08-28', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque semper ex quis odio vestibulum viverra vulputate quis justo. Aliquam aliquet, justo eget viverra aliquet, massa dui bibendum enim, vitae porttitor tellus ex quis nibh. Sed a aliquam felis, id molestie tellus. Fusce accumsan nisi enim, ut placerat nulla pharetra quis. Suspendisse rutrum sodales ipsum vitae tincidunt. Mauris tincidunt porta justo, quis pharetra libero. Etiam nec tincidunt tortor.</p>\r\n</body>\r\n</html>', 'berita/sxRURqa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(5) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bidang` varchar(30) NOT NULL,
  `pendidikan` varchar(500) NOT NULL,
  `penelitian` text NOT NULL,
  `pengabdian` text NOT NULL,
  `pelatihan` text NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nip`, `nama`, `email`, `bidang`, `pendidikan`, `penelitian`, `pengabdian`, `pelatihan`, `file`) VALUES
(1, '1975 04 12 2005 01 1001', 'Agus Sasmito ', 'sasmito_skom@yahoo.com', 'Sistem Cerdas ', 'Ilmu Komputer S2 UGM', '<!DOCTYPE html>\n<html>\n<head>\n</head>\n<body>\n<ol>\n<li>Penelitian Terapan LPPM UPN Veteran Yogyakarta 2013 dengan Judul "GDSS untuk Menentukan Prioritas Proyek" sebagai peneliti ke-2</li>\n<li>Menulis di Procedding Seminar Nasional SESINDO 2013 dengan Judul Metode Data Mining Untuk Mengetahui Tingkat Loyalitas Konsumen Pada Merek Produk" sebagai penulis mandiri</li>\n<li>Visualisasi Teori Optimalisasi Biaya Transportasi Untuk Pembelajaran Riset Operasi</li>\n<li>Model Penelusuran Citra Digital Pada Database Citra Menggunakan Pendekatan Perhitungan Kedekatan Pola Warna</li>\n<li>Implementasi Algoritma Koloni Semut pada Proses Pencarian Jalur Terpendek Jalan Protokol di Kota Yogyakarta</li>\n<li>Pengembangan Sistem Cerdas Menggunakan Penalaran Berbasis Kasus (Case Based Reasoning) Untuk Diagnosa Penyakit Akibat Virus Eksantema</li>\n<li>Sistem Pakar Dengan Beberapa Knowledge Base Menggunakan Probabilitas Bayes Dan Mesin Inferensi Forward Chaining</li>\n<li>E-Learning Cerdas dengan Personalisasi Menggunakan Teknik Data Mining dan Decision Support System</li>\n</ol>\n</body>\n</html>', '<!DOCTYPE html>\n<html>\n<head>\n</head>\n<body>\n<p>Memberikan ceramah di Balai Besar Kerajinan dan Batik Yogyakarta tentang penerapan ICT di Instansi Pemerintah</p>\n</body>\n</html>', '<!DOCTYPE html>\n<html>\n<head>\n</head>\n<body>\n<ul>\n<li>Pelatihan Pembelajaran Berbasis Teknologi Informasi dan Komunikasi</li>\n<li>Workshop Penulisan Buku</li>\n<li>Konferensi Nasional Sistem Informasi (KNSI) 2014 STMIK. Dipanegara Makasar</li>\n</ul>\n</body>\n</html>', 'dosen/agussasmito.JPG'),
(2, '2 7302 00 0225 1', 'Bambang Yuwono,S.T.,M.T.', 'bambangy@gmail.com', 'Ilmu Komputer , Image Processi', 'Teknik Informatika, UNIVERSITAS AHMAD DAHLAN', '<ol>\r\n<li>Menulis Artikel Ilmiah "Sistem Pakar Berbasis Web Untuk Mendiagnosa Penyakit Gigi Menggunakan Metode Certainty Factor" (Penulis pertama  dari tiga Penulis)</li>\r\n<li>Sistem Pakar Berbasis Web untuk Mengidentifikasi Jenis dan Penyakit pada Bunga Mawar</li>\r\n<li>Perancangan dan Implementasi Jaringan Syaraf Tiruan untuk Mendiagnosa Jenis Penyakit Kandungan</li>\r\n<li>Hybrid Computational with Fuzzy Neural Network</li>\r\n<li>System Development In Search Data Book Library Using Voice Commands</li>\r\n<li>Implementasi Algoritma Koloni Semut pada Proses Pencarian Jalur Terpendek Jalan Protokol di Kota Yogyakarta</li>\r\n<li>Perancangan dan Pengembangan Sistem Pakar Berbasis WAP untuk Diagnosa Penyakit Gigi</li>\r\n<li>Pengembangan Sistem Pakar Online Untuk Diagnosa Penyakit Gigi</li>\r\n<li>Diagnosa Gangguan Saluran Pernafasan Menggunakan Jaringan Syaraf Tiruan Backpropagation</li>\r\n<li>Aplikasi Enkripsi Pengiriman File Suara Menggunakan Algoritma Blowfish</li>\r\n<li>Agent Untuk Pemantau Keamanan Server Pada Jaringan Internet Menggunakan Mobile Device</li>\r\n<li>Aplikasi Jaringan Syaraf Tiruan untuk Mendiagnosa Gangguan Saluran Pernafasan</li>\r\n<li>Sistem Pencarian Data Buku Di Perpustakaan Menggunakan Perintah Suara</li>\r\n<li>Sistem Pakar Diagnosa Penyakit Ayam Menggunakan Perintah Suara</li>\r\n<li>Perancangan dan Pengembangan Sistem Pakar Berbasis WAP untuk Diagnosa Penyakit Gigi</li>\r\n<li>Pengembangan Sistem Pakar Online Untuk Diagnosa Penyakit Gigi</li>\r\n<li>Image Smoothing Menggunakan Mean Filtering, Median Filtering, Modus Filtering dan Gaussian Filtering</li>\r\n<li>Sistem Pendukung Keputusan Menggunakan Metode Promethee (Studi Kasus : Stasiun Pengisian Bahan Bakar Umum)</li>\r\n<li>Pengembangan Sistem Pakar Pada Perangkat Mobile Untuk Mendiagnosa Penyakit Gigi</li>\r\n<li>Aplikasi Penilaian Kualitas Jasa/Layanan Retail Dengan Metode Retail Service Quality Dan Analytic Hierarchy Process</li>\r\n<li></li>\r\n</ol>', '<p>Pelatihan Internet dan Pembuatan Blog di TPA Masjid Ukhuwah Keniten, Tamanmartani, Kalasan, Sleman (Tim beranggotakan 4 orang.</p>', '', 'dosen/bayu.JPG'),
(4, '2 7009 02 0234 1', 'Budi Santosa, S.Si.,M.T.', 'dissan@gmail.com', 'Software Engineering, Geograph', 'Ilmu Komputer UNIVERSITAS GADJAH MADA', '<ol>\r\n<li>Menulis makalah prosiding berjudul "SIG Berbasis Web Pemetaan Tingkat Resiko Gempa Bumi Menggunakan Metode Gutenberg-Richter  di DIY (Studi Kasus Pada BMKG Stasiun Geofisika DIY)"  (Peneliti Pertama dari 3 Peneliti)</li>\r\n<li>Analisa dan Perancangan Web Services untuk Sistem Informasi Universitas</li>\r\n<li>SIG Penyebaran Penduduk Berdasarkan Tingkat Usia Di Kabupaten Sleman Berbasis Web</li>\r\n<li>SIG Pemetaan Fasilitas Pelayanan Kesehatan Kabupaten Magelang</li>\r\n<li>Web Based Application for Mapping of Public Health Services and Facilities</li>\r\n<li>Pemanfaatan Content Management System (CMS) SIG untuk Penyajian Data Hasil Pemilu</li>\r\n<li>Web Portal Alumni, dengan studi kasus di UPN "Veteran" Yogyakarta</li>\r\n<li>Analisa Pemrosesan Data Secara Online (Online analytical Processing/OLAP) Untuk Dunia Pendidikan</li>\r\n<li>Perancangan Content Management System untuk Aplikasi Sistem Informasi</li>\r\n<li>Pemanfaatan Sistem Informasi Geografis Open Source Untuk Pelayanan Kesehatan Masyarakat di Yogyakarta</li>\r\n<li>Simulasi Monte Carlo-AHP Untuk Pemilihan dan Pengalokasian Vendor Yang Optimal</li>\r\n<li>Pengembangan Perangkat Lunak Sistem Informasi Geografis Berbasis Web</li>\r\n<li>Analisa Data Transaksional Pada E-Commerce Dengan Teknologi Olap (On-Line Analytical Process)</li>\r\n<li>Remastering Distro Ubuntu untuk Menunjang Pembelajaran Informatika</li>\r\n<li>Aplikasi Mobile Commerce Penjualan Buku (Studi Kasus Pada Penerbit Pro-U Media Yogyakarta)</li>\r\n</ol>', '<p>Pelatihan Penggunaan Internet dan Pembuatan Blog TPA Masjid Ukhuwwah Keniten Tamanmartani</p>', 'yuuyuyuyu', 'dosen/budisantosa.JPG'),
(5, '2 7512 00 0229 1', 'Dessyanto Boedi Prasetyo,S.T.,M.T.', 'dess95@gmail.com', 'Pemrograman Jaringan', 'Teknik Elektro Universitas Gadjah Mada', '<ol>\r\n<li>Menulis naskah "Pemanfaatan Teknologi Datamining dalam Menentukan Efektifitas Penyebaran Brosur", Penulis Ketiga,  Jurnal Telematika Vol. 10 No. 2 Jan 2014 ISSN: 1829 - 667X</li>\r\n<li>Aplikasi SMS Notifikasi Kesehatan Balita</li>\r\n<li>Securing Short Message Service Using Encryption</li>\r\n<li>Aplikasi Kompresi SMS Berbasis Java ME dengan Metode Kompresi LZW-Huffman</li>\r\n<li>Aplikasi Kamera Video Untuk Pemantau Keadaan Suatu Ruangan</li>\r\n<li>Aplikasi Quickcount Pemilihan Presiden RI Menggunakan Teknologi Mobile</li>\r\n<li>Perbandingan Kinerja Ip Sec Dan Ssl</li>\r\n<li>Sistem Pemesanan Makanan Menggunakan Mikrokontroller ATMEGA8535</li>\r\n<li>Analisa Data Transaksional Pada E-Commerce Dengan Teknologi Olap (On-Line Analytical Process)</li>\r\n<li>Remastering Distro Ubuntu untuk Menunjang Pembelajaran Informatika</li>\r\n<li>Aplikasi Mobile Commerce Penjualan Buku (Studi Kasus Pada Penerbit Pro-U Media Yogyakarta)</li>\r\n<li>Aplikasi E-Learning Studi Kasus UPN Veteran Yogyakarta</li>\r\n</ol>', '<p>Pelatihan Penggunaan Internet dan Pembuatan Blog TPA Masjid Ukuwah Keniten Taman martani Sleman</p>', '', 'dosen/dessy.JPG'),
(6, '2 6202 95 0006 1', 'Frans Richard Kodong,S.T.,M.Kom.', 'frkodong@gmail.com', 'Sistem Informasi', 'Teknik Perminyakan  UPN ', '<ol>\r\n<li>Seminar Nasional Ilmu Komputer (SENAIK), Samarinda, Kaltim, November 2013, Judul makalah : Pemodelan Komponen Sistem Panas Bumi Dengan Metode Gaya Berat Menggunakan MATLAB. Penulis pertama dari tiga penulis</li>\r\n<li>E-Government Performance Based Model</li>\r\n<li>Aplikasi Penentuan Status Gunung Berapi Menggunakan Telemetri Suhu</li>\r\n<li>Sistem Informasi Peta Situasi Kampus UPN "Veteran" Yogyakarta</li>\r\n<li>Pengembangan Customer Relationship Management</li>\r\n<li>Sistem Pendukung Keputusan Menggunakan Metode Promethee (Studi Kasus : Stasiun Pengisian Bahan Bakar Umum)</li>\r\n<li>Teknologi Informasi Dan Komunikasi di bidang Bimbingan Konseling</li>\r\n<li>Sistem Pendukung Keputusan Penentuan Hotel Dengan menggunakan Metode Promitee dan AHP</li>\r\n</ol>', '', '', 'dosen/richard.JPG'),
(7, '2 7706 11 0301 1', 'Heriyanto, A.Md.,S.Kom.,M.Cs.', 'mr_heriyanto_skom@yahoo.com', 'Jaringan Komputer', 'Teknik Infromatika INSTITUT SAINS DAN TEKNOLOGI ', '<ol>\r\n<li>Menulis Makalah penelitian Jurnal Telamatika dgn Judul Rekayasa Perangkat Lunak utk Klasifikasi Bacaan Iqro melalui Voice Recognation Menggunakan Metode Sampling Deviasi Everage Energy & Deviasi Wave,Vol.10,No.2 Jan 2014  ISSN:1829-667X penulis 1 dari 2</li>\r\n<li>Penelitian Sistem Keamanan dengan Kunci Kombinasi Sendiri Metode Substitusi</li>\r\n<li>Penggunaan Metode Exact Match untuk Menentukan Kemiripan Naskah Dokumen Teks</li>\r\n<li>Analisa Indeks Wan Utk Lagu Dangdut dan Pop</li>\r\n</ol>', '<p>Laporan IBM Kelompok Usaha Kerajinan Gypsum</p>', '', 'dosen/heryanto.JPG'),
(9, '2 7106 96 0065 1', 'Heru Cahya Rustamaji, S.Si.,M.T.', 'herucr@gmail.com', 'Teknik Informatika', 'Ilmu Komputer UNIVERSITAS GADJAH MADA', '<ol>\r\n<li>Melaksanakan penelitian dengan judul "Pemetaan Risiko Rantai Pasok dan Penyusunan Contingency Plans dalam rangka pendukung  rantai pasok industri furnitur yang sustainable"</li>\r\n<li>Sistem Pendukung Keputusan Pemilihan Jurusan Di SMU Dengan Logika Fuzzy</li>\r\n<li>Aplikasi SMS Pengingat Ibu Hamil</li>\r\n<li>Aplikasi Kompresi SMS Berbasis Java ME dengan Metode Kompresi LZW-Huffman</li>\r\n<li>Web Portal Alumni, dengan studi kasus di UPN “Veteran” Yogyakarta</li>\r\n<li>Aplikasi Blog Jejaring Sosial Dalam Rangka Meningkatkan Kapabilitas Inovasi UKM Batik Tulis di Kabupaten Bantul</li>\r\n<li>Analisa Peringkat Webometrics UPN “Veteran” Yogyakarta</li>\r\n<li>Diagnosa Gangguan Saluran Pernafasan Menggunakan Jaringan Syaraf Tiruan Backpropagation </li>\r\n<li>Penguatan Ekonomi Lokal Melalui E-Readiness dengan berbasis One Village One Product</li>\r\n<li>Aplikasi E-Learning Studi Kasus UPN Veteran Yogyakarta</li>\r\n</ol>', '<p>Memberikan pelatihan administrasi lansia di kantor kelurahan panembahan</p>', '', 'dosen/heru.JPG'),
(11, '2 7607 00 0230 1', 'Juwairiah, S.Si.,M.T.', 'juwai_riah@yahoo.com', 'Sistem Informasi', 'Matematika, UNIVERSITAS GADJAH MADA', '<ol>\r\n<li>Menulis Naskah " Aplikasi Penyisipan Pesan Rahasia Dalam Gambar Pada Handphone Android Menggunakan Kriptografi dengan Algoritma RSA dan Steganografi dengan Algoritma LSB" (penulis pertama dari tiga penulis)</li>\r\n<li>Perancangan Framework Umum Untuk Diagnosis Kegagalan Sistem Informasi Berbasis Web Menggunakan Pembelajaran Mesin</li>\r\n<li>Aplikasi Mobile untuk Monitoring Pendidikan Siswa Sekolah Berbasis Android</li>\r\n<li>Sistem Pakar Berbasis Web Penentu Pasal Tindak Pidana Narkotika</li>\r\n<li>Aplikasi Quickcount Pemilihan Presiden RI Menggunakan Teknologi Mobile</li>\r\n<li>Aplikasi Pembelajaran Integral Berbasis WEB</li>\r\n<li>Simulasi Antrian Nasabah Dengan Multiteller Untuk Analisis Dalam Menentukan Jumlah Teller Ideal</li>\r\n<li>Aplikasi Kriptografi File Menggunakan Algoritma Blowfish</li>\r\n</ol>', '', '', 'dosen/juwai.JPG'),
(12, '1960 09 22 1984 03 1001', 'Nur Heri Cahyana, S.T.,M.Kom.', 'ohmyon_rn@yahoo.co.id', 'DSS', 'Teknik Informatika UPN ', '<ol>\r\n<li>menulis dengan judul "Group Decision Support System (GDSS) untuk Menentukan Prioritas Proyek" dalam jurnal TELEMATIKA  jurnal informatika dan teknologi informasi vol.10 No.2 Januari 2014 ISSN: 1829-667X, sebagai penulis pertama</li>\r\n<li>Aplikasi Pengisian Pulsa Elektronik Satu Kartu Multi Operator</li>\r\n<li>Sistem Humidifier Dan Temperaturizer Digunakan Dalam Penyiraman Otomatis Tanaman</li>\r\n<li>Sistem Keamanan Penangkal Pencurian Bahan Pustaka</li>\r\n<li>Sistem Informasi Berbasis Web Panduan Diet Bagi Penderita Penyakit Jantung</li>\r\n<li>Aplikasi Pengambilan Investasi Properti Dengan Metoda Promethee</li>\r\n<li>Aplikasi Penilaian Kualitas Jasa/Layanan Retail Dengan Metode Retail Service Quality Dan Analytic Hierarchy Process</li>\r\n</ol>', '', '', 'dosen/nurheri.JPG'),
(15, '1977 07 25 2005 01 1001', 'Dr. Awang Hendrianto Pratomo, S.T.,M.T.', 'awang.upn@gmail.com', 'Image Processing, Autonomous R', 'Universitas Islam Indonesia Yogyakarta', '<ol>\r\n<li>Desktop Protection Pada Windows Xp</li>\r\n<li>Sistem Pakar Pendeteksian Kerusakan Mesin Sepeda Motor</li>\r\n<li>Pengembangan Aplikasi Sistem Pendukung Keputusan Pemilihan Makanan Sehat Berbasis SMS</li>\r\n<li>Illumination Systems for Autonomous Robot: Implementation and Design</li>\r\n<li>A study on image callibration technique for otonomous robot</li>\r\n<li>Model dan Teknik Kalibrasi Citra Untuk Sistem Autonomous Robotic</li>\r\n<li>Position and Obstacle Avoidance Algorithm in Robot Soccer</li>\r\n<li>Algoritma Strategi Untuk Menghindari Rintangan Pada Robot Sepak Bola</li>\r\n</ol>', 'xx', '', 'dosen/no-user-image7.jpg'),
(16, '2 7203 97 0142 1', 'Hafsah, S.Si.,M.T.', 'hafsahotha@gmail.com', 'Information System, Artificial', 'Ilmu Komputer, Institut Sains & Teknologi AKPRIND ', '<ol>\r\n<li>Sistem Pendukung Keputusan Pemilihan Jurusan Di SMU Dengan Logika Fuzzy</li>\r\n<li>Sistem Humidifier Dan Temperaturizer Digunakan Dalam Penyiraman Otomatis Tanaman</li>\r\n<li>Perancangan Aplikasi Online Menggunakan Basis Data Fuzzy Untuk Menentukan Topologi Daerah Pertanian Dan Jenis Tanaman Pertanian</li>\r\n<li>Aplikasi Mobile untuk Monitoring Pendidikan Siswa Sekolah Berbasis Android</li>\r\n<li>Sistem Pendukung Keputusan Penentuan Hotel Dengan menggunakan Metode Promitee dan AHP</li>\r\n<li>Aplikasi Berbasis Web Pemilihan Obyek Pariwisata Di Yogyakarta Menggunakan Metode Tahani</li>\r\n</ol>', '', '', 'dosen/hafsah.jpg'),
(17, '2 7708 02 0235 1', 'Herlina Jayadianti, S.T.,M.T.**', 'jayadianti@lycos.com', 'Artificial Intelligence, Ontol', 'Teknik Informatika UPN ', '<ol>\r\n<li>Strategi pengelolaan pengetahuan (Knowledge management) pemilihan anggota legislatif di Daerah Istimewa Yogyakarta</li>\r\n<li>Aplikasi Pengenalan Bendera Negara Menggunakan Histogram Citra</li>\r\n<li>Penerapan Teknologi Semantic Web untuk Menentukan Pilihan Jalur Bis Trans Jogya</li>\r\n<li>Penerapan Teknologi Semantic Web pada Aplikasi Pencarian Koleksi Perpustakaan</li>\r\n</ol>', '', '', 'dosen/no-user-image1.jpg'),
(18, '2 6811 96 0066 1', 'Novrido Charibaldi, S.Kom.,M.Kom.**', 'novrido@gmail.com', 'Object-Oriented System', 'Teknik Infromatika Sekolah Tinggi Sains dan Teknol', '<ol>\r\n<li>Aplikasi Kamera Video Untuk Pemantau Keadaan Suatu Ruangan</li>\r\n<li>Aplikasi Email Menggunakan J2ME</li>\r\n<li>Pengembangan Aplikasi Pendukung Keputusan Untuk Menentukan Pekerjaan di Bidang Teknologi Informasi</li>\r\n<li>Aplikasi Enkripsi Pengiriman File Suara Menggunakan Algoritma Blowfish</li>\r\n<li>Mobile Game Halma Player</li>\r\n<li>Penerapan Teknologi Semantic Web untuk Menentukan Pilihan Jalur Bis Trans Jogya</li>\r\n<li>Penerapan Teknologi Semantic Web pada Aplikasi Pencarian Koleksi Perpustakaan</li>\r\n</ol>', '', '', 'dosen/no-user-image5.jpg'),
(19, '2 8201 13 0425 1', 'Mangaras Yanu Florestiyanto, S.T., M.Eng.', 'mangaras.yanu@upnyk.ac.id', 'Teknik Informatika', 'Teknik Informatika UPN ', '<p>Evaluasi Kesiapan Pengguna dalam Implementasi Enterprise Resource Planning Menggunakan Metode Technology Readiness Index</p>', '', '', 'dosen/no-user-image6.jpg'),
(20, '2 0000 00 0000 0', 'Simon Pulung Nugroho, S.Kom.*', 'simonpulung@yahoo.com', 'Teknik Informatika', 'Teknik Informatika STIMIK AKAKOM Yogyakarta', '<p>Pengembangan Group Decision Support System Menggunakan Metode Fuzzy Analytic Hierarchy Process Group</p>', '', '', 'dosen/no-user-image4.jpg'),
(21, '2 8305 11 0300 1', 'Oliver Samuel Simanjuntak, S.Kom., M.Eng.', 'oliversimanjuntak@yahoo.com', 'Teknik Informatika', 'Teknik Informatika UKDW Yogyakarta', '<p>Pemodelan Pengoperasian MCAP Dalam Rangka Pemberdayaan Masyarakat Menuju Masyarakat Informasi di DIY</p>', '', '', 'dosen/no-user-image3.jpg'),
(947, '2 8307 12 04181', 'Rifki Indra Perwira, S.Kom., M.Eng', '', 'Jaringan Komputer, Otomata', 'Ilmu Komputer UGM', '', '', '', 'dosen/no-user-image2.jpg'),
(948, '1976 12 24 2005 01 1001', 'Hidayatulah Himawan, S.T., M.M., M.Eng.', 'if.iwan@gmail.com', 'Sistem Informasi', 'Teknik Informatika UNIVERSITAS ISLAM INDONESIA ', '<ol style="font-family: Arial, Helvetica, sans-serif; font-size: small; line-height: 19.2px;">\r\n<li>Menulis Naskah "Pemanfaatan Teknologi Data Mining Dalam Menentukan Efektifitas Penyebaran Brosur", Jurnal Telematika ISSN 1829-667, Vol. 10, No. 2, Januari 2014, P. 111-118, sebagai penulis ke 2 dari 3 penulis</li>\r\n<li>E-Government : Sistem dalam Efisiensi dan Efektifitas Perpajakan</li>\r\n<li>Keamanan Transaksi E-Commerce dengan Menggunakan GSM</li>\r\n<li>E-Tourism : Antara Konsep dan Implementasi dalam Mendukung industri Pariwisata di Indonesia</li>\r\n<li>Aplikasi Teknologi Green Computing Melalui Optimalisasi Kinerja Komputer</li>\r\n<li>Analisa Dan Perancangan Sistem Pembelajaran Online Menggunakan Metode Parsing</li>\r\n<li>Saving Time Execution Prima Numbers Generators Using Bit Array Structure</li>\r\n<li>Aplikasi Pembelajaran Online Pada Proses Pencarian Data</li>\r\n<li>Rancang Bangun Pengembangan Pola Pengetahuan Melalui Sistem Pembelajaran Online</li>\r\n<li>Penerapan Change Management untuk Meningkatkan Proses Bisnis dalam Meraih Keunggulan Kompetitif Organisasi</li>\r\n<li>Perancangan Arsitektur Informasi untuk Mendukung Keberlangsungan Proses Bisnis Enterprise WEB</li>\r\n</ol>', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: small; line-height: 19.2px;">Penyuluhan dan Pelatihan Penggunaan Internet dan Pembuatan Blog TPA Masjid Ukhuwwah Keniten, Tamanmartani, Sleman.</span></p>', '', 'dosen/iwan.JPG'),
(949, '2 6404 96 0139 1', 'Herry Sofyan, S.T.,M.Kom.', 'herrysofyan@gmail.com', 'Ilmu Komputer, Basis Data', ' Teknik Perminyakan, UPN ', '<ol style="font-family: Arial, Helvetica, sans-serif; font-size: small; line-height: 19.2px;">\r\n<li>Melakukan penelitian berjudul "Pengembangan Intelegent Agent pada Sistem Informasi Keuangan untuk Lembaga Sertifikasi Pariwisata Wiyata Nusantara Yogyakarta" sampai tahap akhir. Peneliti pertama/ketua dari dua orang peneliti.</li>\r\n<li>Aplikasi Supply Chain Management Berbasis Short Message Service (SMS) Gateway</li>\r\n<li>Aplikasi MRP (Material Requirement Planning) untuk Proses Penentuan Kebutuhan Material Pada Industri Manufaktur</li>\r\n<li>SIG Penyebaran Penduduk Berdasarkan Tingkat Usia Di Kabupaten Sleman Berbasis Web</li>\r\n<li>Pengembangan Aplikasi Layanan Pertanahan Berbasis Web Pada Kantor BPN (Badan Pertanahan Nasional) Kabupaten Badung</li>\r\n<li>Aplikasi Pengolahan Citra Digital pada Telepon Seluler</li>\r\n<li>Sistem Pencarian Citra Digital Menggunakan Content-Based</li>\r\n<li>Pengembangan Group Decision Support System Menggunakan Metode Fuzzy Analytic Hierarchy Process Group</li>\r\n<li>Aplikasi Laporan Hasil Survei Non Seismik Berbasis Web untuk Kontraktor Kontrak Kerja Sama (KKKS) pada Badan Pelaksana Kegiatan Usaha Hulu Minyak dan Gas (BPMIGAS)</li>\r\n<li>Pengembangan Metodologi Data Mining pada Database Manufaktur</li>\r\n<li>Visualisasi Luas Daerah Pengurasan Sumur Minyak</li>\r\n</ol>', '', '', 'dosen/herrysofyan.JPG'),
(967, ' 2 7604 00 0226 1', 'Wilis Kaswidjanti.,S.Si.,M.Kom', 'wilis.kas@gmail.com', 'Ilmu Komputer', 'S2 Universitas Gadjah Mada Yogyakarta ', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 'dosen/423584_2626233582458_325505198_n.jpg'),
(968, ' 2 7107 98 0180 1 ', 'Yuli Fauziah, S.T., M.T.', '', 'Sistem Komputer dan Informasi', 'S2 Universitas Gadjah Mada Yogyakarta', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 'dosen/no-user-image8.jpg'),
(969, '2 7104 98 0181 1', 'Paryati, S.T., M.Kom.', '', 'Artificial Intelligence', 'S2 Universitas Gadjah Mada Yogyakarta', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 'dosen/no-user-image71.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(3) NOT NULL,
  `file` varchar(100) NOT NULL,
  `keterangan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `file`, `keterangan`) VALUES
(48, 'file/Modul_Prak_Algo1.zip', 'Algoritma dan Pemrograman 1'),
(49, 'file/Modul_PBO.zip', 'Modul PBO'),
(50, 'file/Modul_Struktur_Data.zip', 'Modul Struktur Data');

-- --------------------------------------------------------

--
-- Table structure for table `kalendar`
--

CREATE TABLE `kalendar` (
  `id` int(3) NOT NULL,
  `tahun` varchar(30) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kalendar`
--

INSERT INTO `kalendar` (`id`, `tahun`, `file`) VALUES
(1, '2018/2019', 'images/Blanko_Ijin_Belajar.doc');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE `kurikulum` (
  `id` int(3) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurikulum`
--

INSERT INTO `kurikulum` (`id`, `tahun`, `file`) VALUES
(365, '2018/2019', 'images/health.docx');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `sejarah` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `tujuan` text NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `sejarah`, `visi`, `misi`, `tujuan`, `file`) VALUES
(1, 'dfgdfgdfg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque semper ex quis odio vestibulum viverra vulputate quis justo. Aliquam aliquet, justo eget viverra aliquet, massa dui bibendum enim, vitae porttitor tellus ex quis nibh. Sed a aliquam felis, id molestie tellus. Fusce accumsan nisi enim, ut placerat nulla pharetra quis. Suspendisse rutrum sodales ipsum vitae tincidunt. Mauris tincidunt porta justo, quis pharetra libero. Etiam nec tincidunt tortor.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ol>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque semper ex quis odio vestibulum viverra vulputate quis justo. Aliquam aliquet, justo eget viverra aliquet, massa dui bibendum enim, vitae porttitor tellus ex quis nibh.</li>\r\n<li>Sed a aliquam felis, id molestie tellus. Fusce accumsan nisi enim, ut placerat nulla pharetra quis.</li>\r\n<li>Suspendisse rutrum sodales ipsum vitae tincidunt. Mauris tincidunt porta justo, quis pharetra libero. Etiam nec tincidunt tortor.</li>\r\n</ol>\r\n</body>\r\n</html>', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(3) NOT NULL,
  `file` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `file`, `link`) VALUES
(29, 'slide/mobile_app1.jpg', '#'),
(30, 'slide/2.jpg', '#'),
(27, 'slide/760210_7215_2.jpg', '#'),
(25, 'slide/slider1.jpg', 'ss'),
(24, 'slide/desert.jpg', 'rekrut.id.i'),
(26, 'slide/web_app1.jpg', 'll');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(5) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pelatihan` text NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `nik`, `nama`, `email`, `pelatihan`, `file`) VALUES
(416, '12345678', 'Kintaka', 'tarisrtari@yahoo.com', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>weqwe</p>\r\n</body>\r\n</html>', 'staff/team_member.jpg'),
(417, '', 'Sugeng Rahmadi', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 'staff/nopoto.jpg'),
(418, '', 'Rahayu Ari O', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 'staff/team_member2.jpg'),
(419, '', 'Sri Rahayu Astari, ST', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 'staff/team_member3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `id` int(5) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`id`, `file`) VALUES
(34, 'images/struktur.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kalendar`
--
ALTER TABLE `kalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=970;
--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `kalendar`
--
ALTER TABLE `kalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=366;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=420;
--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
