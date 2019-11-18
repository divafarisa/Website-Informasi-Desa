-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2019 at 09:40 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desasumberejo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email_admin` varchar(25) NOT NULL,
  `password_admin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `password_admin`) VALUES
(1, 'diva', 'diva_fardiana7@gmail.com', 'fardianarisa'),
(2, 'bella', 'bella_maram@gmail.com', 'divakekenyangan123');

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id_agama` int(10) NOT NULL,
  `nama_agama` varchar(200) NOT NULL,
  `lk_agama` int(10) NOT NULL,
  `pr_agama` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id_agama`, `nama_agama`, `lk_agama`, `pr_agama`) VALUES
(1, 'Islam', 800, 80),
(2, 'Katolik', 500, 100);

-- --------------------------------------------------------

--
-- Table structure for table `apbd`
--

CREATE TABLE `apbd` (
  `Id_apbd` int(11) NOT NULL,
  `tahun_apbd` int(11) NOT NULL,
  `foto_apbd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apbd`
--

INSERT INTO `apbd` (`Id_apbd`, `tahun_apbd`, `foto_apbd`) VALUES
(1, 2019, 'INFO GRAFIK 2019.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(10) NOT NULL,
  `judul_artikel` varchar(200) NOT NULL,
  `tanggal_artikel` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `isi_artikel` text NOT NULL,
  `foto_artikel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `tanggal_artikel`, `isi_artikel`, `foto_artikel`) VALUES
(2, 'Anak Indonesia, Harus Sehat, Berpendidikan, dan Berbudi Pekerti', '2019-07-24 15:43:06.104166', 'Hari ini, Selasa 23 Juli dikenal sebagai Hari Anak Nasional. Adakah yang memperingatinya? Sepertinya tidak terdengar sama sekali gaungnya? Sangat disayangkan! Padahal kita semua tahu bahwa anak adalah generasi penerus, baik dalam skala keluarga, masyarakat, bangsa dan negara.\r\n\r\nDalam rangka memperingati dan memberi makna Hari Anak Nasional tahun ini, saya ingin urun rembug untuk menyegarkan dan menegaskan kembali kepada kita bersama bagaimana seharusnya dan sebaiknya \"melindungi anak-anak kita\" sebagai generasi penerus. Menurut saya, anak-anak kita harus sehat, berpendidikan dan berbudi pekerti.', 'Anak_Indonesia,_Harus_Sehat,_Berpendidikan,_dan_Berbudi_Pekerti_1563982986.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(10) NOT NULL,
  `judul_berita` varchar(200) NOT NULL,
  `tanggal_berita` datetime(6) DEFAULT CURRENT_TIMESTAMP(6),
  `isi_berita` longtext NOT NULL,
  `foto_berita` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `tanggal_berita`, `isi_berita`, `foto_berita`) VALUES
(11, 'Mimin Samini Dapat Paket Umroh dari Undian Sruput Rejeki ', '2019-07-23 19:11:07.018951', 'SURYAMALANG.COM - Mimin Samini mendapat paket umroh dari undian Sruput Rejeki TORASUSU MALANG periode 21 Juli 2019.\r\n\r\nMimin Samini adalah warga Mojowarno Mojorejo Rt 06/RW 03 Batu 081333326xxx.\r\n\r\nBerikut ini daftar pemenang uang cash Rp 500.000 undian Sruput Rejeki TORASUSU MALANG periode 21 Juli 2019.\r\n\r\n1. Sucipto , Jl. Sumbersari Malang 089517426xxx.\r\n\r\n2. Umi Indayati, Jl. LA Sucipto Gg Taruna 3 No,41 rt.06/rw.03 Pandanwangi Blimbing 083834654xxx.\r\n\r\n3. Adi Kuswanto, Purworejo rt.08/rw.02 Pakis 085100515xxx.\r\n\r\n4. Slamet Riadi, Jl. Dorowati Timur rt.02/rw.08 Lawang 085954327xxx.\r\n\r\n5. Rohmad Zainudin , Dusun Plumbang Desa Pandesari Rt.01/rw.01 Kec. Ngantang 08818449xxx.\r\n\r\n6. Weni Mei Susanti, Dsn. Balerejo rt.016/rw.04 Dampit 081336506xxx.\r\n\r\n7. Sutiani, Perum Banjararum AV-12 Singosari 081249659xxx.\r\n\r\n\r\n\r\nArtikel ini telah tayang di suryamalang.com dengan judul Mimin Samini Dapat Paket Umroh dari Undian Sruput Rejeki TORASUSU MALANG Periode 21 Juli 2019, https://suryamalang.tribunnews.com/2019/07/21/mimin-samini-dapat-paket-umroh-dari-undian-sruput-rejeki-torasusu-malang-periode-21-juli-2019.\r\n\r\nEditor: Zainuddin', 'Mimin_Samini_Dapat_Paket_Umroh_dari_Undian_Sruput_Rejeki__1563981608.jpg'),
(12, 'Jefri Nichol, Aktor \'Dear Nathan\' yang Terjerat Narkoba', '2019-07-23 20:42:43.392638', 'Jakarta, CNN Indonesia -- Aktor muda Jefri Nichol ditangkap Kasat Narkoba Polres Jakarta Selatan dalam kasus narkotika. Ia ditangkap di kawasan Jakarta Selatan siang tadi. Pihak keluarga disebut telah menyambangi Polres Jaksel.\r\n\r\nJefri Nichol merupakan artis kedua, setelah Nunung, yang ditangkap polisi terkait penyalahgunaan narkotika dalam sepekan terakhir. \r\n\r\nAktor kelahiran 15 Januari 1999 ini memulai kariernya sebagai model yang kemudian beralih ke dunia akting pada 2013 melalui mini seri Kami Rindu Ayah, kisah kehidupan Ustad Jefri Al-Buchori. \r\n', 'Jefri_Nichol,_Aktor_Dear_Nathan_yang_Terjerat_Narkoba_1563981634.jpg'),
(13, 'Ayam', '2019-08-06 09:52:48.746126', 'ayam', 'Ayam_1565059968.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `etnis`
--

CREATE TABLE `etnis` (
  `id_etnis` int(10) NOT NULL,
  `nama_etnis` varchar(200) NOT NULL,
  `lk_etnis` int(10) NOT NULL,
  `pr_etnis` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etnis`
--

INSERT INTO `etnis` (`id_etnis`, `nama_etnis`, `lk_etnis`, `pr_etnis`) VALUES
(1, 'Sunda', 900, 100),
(2, 'Jawa', 1000, 60);

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(10) NOT NULL,
  `judul_foto` varchar(200) NOT NULL,
  `caption_foto` text NOT NULL,
  `tanggal_foto` datetime DEFAULT CURRENT_TIMESTAMP,
  `foto_galeri` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `judul_foto`, `caption_foto`, `tanggal_foto`, `foto_galeri`) VALUES
(1, 'Foto Kegiatan', 'Kegiatan Mojorejo', '2019-07-24 10:36:37', 'Foto_Kegiatan_1563939397.jpeg'),
(2, 'Kegiatan Bersama', 'Taman Mojorejo', '2019-07-24 11:06:32', 'Kegiatan_Bersama_1563941192.jpeg'),
(3, 'Practice', 'Ruang Rapat', '2019-07-24 14:26:23', 'Practice_1563953183.jpeg'),
(4, 'Foto Kegiatan', 'Ruang Rapat', '2019-07-24 14:31:25', 'Foto_Kegiatan_1563953485.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(10) NOT NULL,
  `email_kontak` varchar(200) NOT NULL,
  `nohp_kontak` varchar(200) NOT NULL,
  `nowa_kontak` varchar(200) DEFAULT NULL,
  `ig_kontak` varchar(200) DEFAULT NULL,
  `fb_kontak` varchar(200) DEFAULT NULL,
  `tw_kontak` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `email_kontak`, `nohp_kontak`, `nowa_kontak`, `ig_kontak`, `fb_kontak`, `tw_kontak`) VALUES
(1, 'desasumberejobatu@gmail.com', '(0341)- 598908', '-', 'sumberejo', 'sumberejo', 'sumberejo');

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE `organisasi` (
  `id_org` int(10) NOT NULL,
  `nama_org` varchar(200) NOT NULL,
  `foto_org` varchar(255) NOT NULL,
  `deskripsi_org` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`id_org`, `nama_org`, `foto_org`, `deskripsi_org`) VALUES
(1, 'diva', 'diva_1564665098.jpg', 'diva 2'),
(2, 'imron', 'imron_1564665082.png', 'imroon'),
(3, 'Bella', 'Bella_1565162288.jpg', 'Bella');

-- --------------------------------------------------------

--
-- Table structure for table `perangkat`
--

CREATE TABLE `perangkat` (
  `id_perangkat` int(10) NOT NULL,
  `tahun_perangkat` varchar(10) NOT NULL,
  `nama_perangkat` varchar(255) NOT NULL,
  `jabatan_perangkat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perangkat`
--

INSERT INTO `perangkat` (`id_perangkat`, `tahun_perangkat`, `nama_perangkat`, `jabatan_perangkat`) VALUES
(1, '2000', 'diva', 'kepala desa');

-- --------------------------------------------------------

--
-- Table structure for table `profesi`
--

CREATE TABLE `profesi` (
  `id_profesi` int(10) NOT NULL,
  `nama_profesi` varchar(200) NOT NULL,
  `lk_profesi` int(10) NOT NULL,
  `pr_profesi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profesi`
--

INSERT INTO `profesi` (`id_profesi`, `nama_profesi`, `lk_profesi`, `pr_profesi`) VALUES
(1, 'Petani', 70, 75);

-- --------------------------------------------------------

--
-- Table structure for table `umkm`
--

CREATE TABLE `umkm` (
  `id_umkm` int(10) NOT NULL,
  `nama_umkm` varchar(50) NOT NULL,
  `foto_umkm` varchar(255) NOT NULL,
  `deskripsi_umkm` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `umkm`
--

INSERT INTO `umkm` (`id_umkm`, `nama_umkm`, `foto_umkm`, `deskripsi_umkm`) VALUES
(4, 'bella', 'myhome_0.jpg', 'bellaaa2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `apbd`
--
ALTER TABLE `apbd`
  ADD PRIMARY KEY (`Id_apbd`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `etnis`
--
ALTER TABLE `etnis`
  ADD PRIMARY KEY (`id_etnis`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id_org`);

--
-- Indexes for table `perangkat`
--
ALTER TABLE `perangkat`
  ADD PRIMARY KEY (`id_perangkat`);

--
-- Indexes for table `profesi`
--
ALTER TABLE `profesi`
  ADD PRIMARY KEY (`id_profesi`);

--
-- Indexes for table `umkm`
--
ALTER TABLE `umkm`
  ADD PRIMARY KEY (`id_umkm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id_agama` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `apbd`
--
ALTER TABLE `apbd`
  MODIFY `Id_apbd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `etnis`
--
ALTER TABLE `etnis`
  MODIFY `id_etnis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id_org` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `perangkat`
--
ALTER TABLE `perangkat`
  MODIFY `id_perangkat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profesi`
--
ALTER TABLE `profesi`
  MODIFY `id_profesi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `umkm`
--
ALTER TABLE `umkm`
  MODIFY `id_umkm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
