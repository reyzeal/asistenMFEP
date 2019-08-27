-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2019 at 07:44 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asisten`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(6) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'Tari', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `aspek`
--

CREATE TABLE `aspek` (
  `id_aspek` int(3) NOT NULL,
  `id_sesi` int(3) NOT NULL,
  `nama_aspek` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aspek`
--

INSERT INTO `aspek` (`id_aspek`, `id_sesi`, `nama_aspek`) VALUES
(4, 1, 'Administrasi'),
(5, 1, 'Kompetensi'),
(6, 1, 'Microteaching'),
(7, 1, 'Wawancara');

-- --------------------------------------------------------

--
-- Table structure for table `gap`
--

CREATE TABLE `gap` (
  `id_gap` int(3) NOT NULL,
  `selisih` int(3) NOT NULL,
  `bobot` float NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gap`
--

INSERT INTO `gap` (`id_gap`, `selisih`, `bobot`, `keterangan`) VALUES
(2, 0, 5, 'Tidak ada selisih (Kompetensi sesuai dengan kebutuhan)'),
(3, 1, 4.5, 'Kompetensi individu kelebihan 1 tingkat '),
(4, -1, 4, 'Kompetensi individu kekurangan 1 tingkat'),
(5, 2, 3.5, 'Kompetensi individu kelebihan 2 tingkat'),
(6, -2, 3, 'Kompetensi individu kekurangan 2 tingkat'),
(7, 3, 2.5, 'Kompetensi kelebihan 3 tingkat'),
(8, -3, 2, 'Kompetensi kekurangan 3 tingkat'),
(9, 4, 1.5, 'Kompetensi kelebihan 4 tingkat'),
(10, -4, 1, 'Kompetensi kekurangan 4 tingkat');

-- --------------------------------------------------------

--
-- Table structure for table `kompetensi`
--

CREATE TABLE `kompetensi` (
  `id_kompetensi` int(3) NOT NULL,
  `id_pendaftaran` int(3) NOT NULL,
  `pemrograman` varchar(5) NOT NULL,
  `jaringan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kompetensi`
--

INSERT INTO `kompetensi` (`id_kompetensi`, `id_pendaftaran`, `pemrograman`, `jaringan`) VALUES
(49, 26, '70', '40');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(3) NOT NULL,
  `id_aspek` int(3) NOT NULL,
  `nama_kriteria` varchar(35) NOT NULL,
  `tipe` enum('CF','SF') NOT NULL,
  `nilai_target` int(2) NOT NULL,
  `bobot_evaluasi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `id_aspek`, `nama_kriteria`, `tipe`, `nilai_target`, `bobot_evaluasi`) VALUES
(2, 4, 'IPK', 'CF', 5, 0.6),
(3, 4, 'nilai_kuliah', 'CF', 4, 0.1),
(4, 4, 'Sertifikat', 'SF', 3, 0),
(5, 5, 'Kompetensi', 'CF', 4, 0),
(6, 6, 'Suara', 'CF', 4, 0),
(7, 6, 'Penguasaan Materi', 'SF', 3, 0),
(8, 6, 'Sikap', 'CF', 4, 0),
(9, 6, 'Interaksi', 'CF', 5, 0),
(10, 7, 'Karakter', 'SF', 3, 0),
(11, 7, 'Komitmen', 'CF', 5, 0),
(12, 7, 'Konsisten', 'CF', 5, 0),
(13, 6, 'Penyampaian Materi', 'SF', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `makul`
--

CREATE TABLE `makul` (
  `id_makul` int(3) NOT NULL,
  `id_kriteria` int(3) NOT NULL,
  `nama_makul` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makul`
--

INSERT INTO `makul` (`id_makul`, `id_kriteria`, `nama_makul`) VALUES
(1, 3, 'Algoritma 1 Teori '),
(2, 3, 'Algoritma 2 Teori '),
(3, 3, 'Algoritma 1 Praktikum'),
(4, 3, 'Algoritma 2 Praktikum'),
(5, 3, 'Jaringan Komputer Teori'),
(6, 3, 'Jaringan Komputer Praktikum');

-- --------------------------------------------------------

--
-- Table structure for table `master_nilai`
--

CREATE TABLE `master_nilai` (
  `id_masternilai` int(3) NOT NULL,
  `nama_nilai` varchar(5) NOT NULL,
  `bobot_nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_nilai`
--

INSERT INTO `master_nilai` (`id_masternilai`, `nama_nilai`, `bobot_nilai`) VALUES
(1, 'A', 4),
(2, 'B+', 3.5),
(3, 'B', 3),
(4, 'C+', 2.5),
(5, 'C', 2),
(6, 'D', 1.5),
(7, 'E', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_kuliah`
--

CREATE TABLE `nilai_kuliah` (
  `id_nilai` int(3) NOT NULL,
  `id_pendaftaran` int(3) NOT NULL,
  `id_makul` int(3) NOT NULL,
  `id_masternilai` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_kuliah`
--

INSERT INTO `nilai_kuliah` (`id_nilai`, `id_pendaftaran`, `id_makul`, `id_masternilai`) VALUES
(111, 26, 1, 2),
(112, 26, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_reviewer`
--

CREATE TABLE `nilai_reviewer` (
  `id_nilaireviewer` int(3) NOT NULL,
  `id_reviewpendaftar` int(3) NOT NULL,
  `id_kriteria` int(3) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_reviewer`
--

INSERT INTO `nilai_reviewer` (`id_nilaireviewer`, `id_reviewpendaftar`, `id_kriteria`, `nilai`) VALUES
(6, 1, 6, 5),
(7, 1, 7, 4),
(8, 1, 8, 4),
(9, 1, 9, 2),
(10, 1, 13, 5),
(11, 1, 10, 5),
(12, 1, 11, 4),
(13, 1, 12, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(3) NOT NULL,
  `id_sesi` int(3) NOT NULL,
  `nim` int(13) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `nama_panggilan` varchar(20) NOT NULL,
  `temp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(25) NOT NULL,
  `alamat_rumah` text NOT NULL,
  `alamat_kos` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ipk` float NOT NULL,
  `bahasa_asing` text NOT NULL,
  `bahasa_program` text NOT NULL,
  `sertifikasi` enum('Y','N') NOT NULL,
  `organisasi` text NOT NULL,
  `pekerjaan` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `transkrip` varchar(100) NOT NULL,
  `status` varchar(35) NOT NULL,
  `status_generate` enum('Belum','Sudah','Perubahan') NOT NULL,
  `total_pf` float NOT NULL,
  `total_mf` float DEFAULT NULL,
  `status_akhir` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `id_sesi`, `nim`, `nama_lengkap`, `nama_panggilan`, `temp_lahir`, `tgl_lahir`, `agama`, `alamat_rumah`, `alamat_kos`, `no_hp`, `email`, `ipk`, `bahasa_asing`, `bahasa_program`, `sertifikasi`, `organisasi`, `pekerjaan`, `foto`, `transkrip`, `status`, `status_generate`, `total_pf`, `total_mf`, `status_akhir`) VALUES
(26, 1, 123150089, 'Marella Putri', 'lala', 'Bandung', '2019-08-14', 'Islam', 'Komplek Babarsari', 'Komplek Babarsari', '0987654321', 'auliasabidin01@gmail.com', 3.96, 'sadasd', 'asdasdsadsa', 'Y', 'asdsad', '', 'images/glasses-and-brain-icon2.png', 'images/glasses-and-brain-icon3.png', 'Lolos', 'Sudah', 14.2, 4.6, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `reviewer`
--

CREATE TABLE `reviewer` (
  `id_reviewer` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviewer`
--

INSERT INTO `reviewer` (`id_reviewer`, `nama`, `jabatan`, `username`, `password`) VALUES
(1, 'Sri Rahayu Astari, ST', 'Asisten', 'tari', 'f024197cc16a7c1eda2e4c677616051d'),
(3, 'Rifki Indra P', 'Kalab Jaringan', 'rifki', '2a5c4c5a5ba1c332279685ddec507cd9'),
(4, 'Wilis Kaswidjanti', 'Kalab Komputasi', 'wilis', 'a893162efddc0fd532ce528242d82197');

-- --------------------------------------------------------

--
-- Table structure for table `review_pendaftar`
--

CREATE TABLE `review_pendaftar` (
  `id_reviewpendaftar` int(3) NOT NULL,
  `id_reviewer` int(3) NOT NULL,
  `id_pendaftaran` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_pendaftar`
--

INSERT INTO `review_pendaftar` (`id_reviewpendaftar`, `id_reviewer`, `id_pendaftaran`) VALUES
(1, 1, 26);

-- --------------------------------------------------------

--
-- Table structure for table `sesi`
--

CREATE TABLE `sesi` (
  `id_sesi` int(3) NOT NULL,
  `nama_sesi` varchar(30) NOT NULL,
  `buka` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sesi`
--

INSERT INTO `sesi` (`id_sesi`, `nama_sesi`, `buka`) VALUES
(1, 'Genap 2019/2020', 'Y'),
(2, 'Ganjil 2018/2019', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `aspek`
--
ALTER TABLE `aspek`
  ADD PRIMARY KEY (`id_aspek`),
  ADD KEY `id_sesi` (`id_sesi`);

--
-- Indexes for table `gap`
--
ALTER TABLE `gap`
  ADD PRIMARY KEY (`id_gap`);

--
-- Indexes for table `kompetensi`
--
ALTER TABLE `kompetensi`
  ADD PRIMARY KEY (`id_kompetensi`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`),
  ADD KEY `id_aspek` (`id_aspek`);

--
-- Indexes for table `makul`
--
ALTER TABLE `makul`
  ADD PRIMARY KEY (`id_makul`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `master_nilai`
--
ALTER TABLE `master_nilai`
  ADD PRIMARY KEY (`id_masternilai`);

--
-- Indexes for table `nilai_kuliah`
--
ALTER TABLE `nilai_kuliah`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran`),
  ADD KEY `id_makul` (`id_makul`),
  ADD KEY `id_masternilai` (`id_masternilai`);

--
-- Indexes for table `nilai_reviewer`
--
ALTER TABLE `nilai_reviewer`
  ADD PRIMARY KEY (`id_nilaireviewer`),
  ADD KEY `id_reviewependaftar` (`id_reviewpendaftar`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `id_sesi` (`id_sesi`);

--
-- Indexes for table `reviewer`
--
ALTER TABLE `reviewer`
  ADD PRIMARY KEY (`id_reviewer`);

--
-- Indexes for table `review_pendaftar`
--
ALTER TABLE `review_pendaftar`
  ADD PRIMARY KEY (`id_reviewpendaftar`),
  ADD KEY `id_review` (`id_reviewer`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran`);

--
-- Indexes for table `sesi`
--
ALTER TABLE `sesi`
  ADD PRIMARY KEY (`id_sesi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aspek`
--
ALTER TABLE `aspek`
  MODIFY `id_aspek` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gap`
--
ALTER TABLE `gap`
  MODIFY `id_gap` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kompetensi`
--
ALTER TABLE `kompetensi`
  MODIFY `id_kompetensi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `makul`
--
ALTER TABLE `makul`
  MODIFY `id_makul` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `master_nilai`
--
ALTER TABLE `master_nilai`
  MODIFY `id_masternilai` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nilai_kuliah`
--
ALTER TABLE `nilai_kuliah`
  MODIFY `id_nilai` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `nilai_reviewer`
--
ALTER TABLE `nilai_reviewer`
  MODIFY `id_nilaireviewer` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `reviewer`
--
ALTER TABLE `reviewer`
  MODIFY `id_reviewer` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `review_pendaftar`
--
ALTER TABLE `review_pendaftar`
  MODIFY `id_reviewpendaftar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sesi`
--
ALTER TABLE `sesi`
  MODIFY `id_sesi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aspek`
--
ALTER TABLE `aspek`
  ADD CONSTRAINT `aspek_ibfk_1` FOREIGN KEY (`id_sesi`) REFERENCES `sesi` (`id_sesi`);

--
-- Constraints for table `kompetensi`
--
ALTER TABLE `kompetensi`
  ADD CONSTRAINT `kompetensi_ibfk_1` FOREIGN KEY (`id_pendaftaran`) REFERENCES `pendaftaran` (`id_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD CONSTRAINT `kriteria_ibfk_1` FOREIGN KEY (`id_aspek`) REFERENCES `aspek` (`id_aspek`);

--
-- Constraints for table `makul`
--
ALTER TABLE `makul`
  ADD CONSTRAINT `makul_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`);

--
-- Constraints for table `nilai_kuliah`
--
ALTER TABLE `nilai_kuliah`
  ADD CONSTRAINT `nilai_kuliah_ibfk_1` FOREIGN KEY (`id_pendaftaran`) REFERENCES `pendaftaran` (`id_pendaftaran`),
  ADD CONSTRAINT `nilai_kuliah_ibfk_2` FOREIGN KEY (`id_makul`) REFERENCES `makul` (`id_makul`),
  ADD CONSTRAINT `nilai_kuliah_ibfk_3` FOREIGN KEY (`id_masternilai`) REFERENCES `master_nilai` (`id_masternilai`);

--
-- Constraints for table `nilai_reviewer`
--
ALTER TABLE `nilai_reviewer`
  ADD CONSTRAINT `nilai_reviewer_ibfk_1` FOREIGN KEY (`id_reviewpendaftar`) REFERENCES `review_pendaftar` (`id_reviewpendaftar`),
  ADD CONSTRAINT `nilai_reviewer_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`);

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_ibfk_1` FOREIGN KEY (`id_sesi`) REFERENCES `sesi` (`id_sesi`);

--
-- Constraints for table `review_pendaftar`
--
ALTER TABLE `review_pendaftar`
  ADD CONSTRAINT `review_pendaftar_ibfk_1` FOREIGN KEY (`id_reviewer`) REFERENCES `reviewer` (`id_reviewer`),
  ADD CONSTRAINT `review_pendaftar_ibfk_2` FOREIGN KEY (`id_pendaftaran`) REFERENCES `pendaftaran` (`id_pendaftaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
