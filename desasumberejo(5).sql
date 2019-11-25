-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 02:24 AM
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
(2, 'admin', 'admin@gmail.com', 'admin');

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
  `id_apbd` int(10) NOT NULL,
  `tahun_apbd` varchar(10) NOT NULL,
  `foto_apbd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apbd`
--

INSERT INTO `apbd` (`id_apbd`, `tahun_apbd`, `foto_apbd`) VALUES
(3, '2019', '2019_1569390111.jpg');

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
(3, 'Desa Sumberejo dan Desa Gunungsari di Kota Batu Buka Kembali Pendaftaran Calon Kepala Desa', '2019-09-25 03:10:51.649889', 'Desa Sumberejo Kecamatan Batu dan Desa Gunungsari Kecamatan Bumiaji, Kota Batu kembali membuka pendaftaran bakal calon kepala desa. Hal ini dilakukan karena pendaftar sebelumnya tidak memenuhi verifikasi.\r\n\r\nKasubag Pemerintahan Desa, Bagian Pemerintahan Setda Kota Batu Abdul Salam menjelaskan, di Desa Sumberjo, seluruh pendaftar tidak lolos verifikasi. Lalu, Desa Gunungsari hanya ada 1 pendaftar.\r\n\r\n\"Desa Sumberjo dan Gunungsari membuka kembali pendaftaran calon kades tahap dua ini,\" terang Salam di kantornya, Senin (19/8/2019).\r\n\r\n\r\nTahap kedua ini telah dimulai sejak Jumat (9/8/2019) hingga tanggal 28 Agustus 2019. Jika sampai batas akhir waktu pendaftaran tidak ada bacalon yang mendaftar, maka sesuai aturan bisa dipastikan kedua desa itu tidak bisa mengikuti pilkades serentak.\r\n\r\n', 'Desa_Sumberejo_dan_Desa_Gunungsari_di_Kota_Batu_Buka_Kembali_Pendaftaran_Calon_Kepala_Desa_1569381051.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(10) NOT NULL,
  `judul_berita` varchar(200) NOT NULL,
  `tanggal_berita` datetime(6) DEFAULT CURRENT_TIMESTAMP(6),
  `isi_berita` longtext NOT NULL,
  `foto_berita` varchar(255) DEFAULT NULL,
  `nama_penulis` varchar(30) NOT NULL,
  `status` enum('pending','tolak','terbit') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `tanggal_berita`, `isi_berita`, `foto_berita`, `nama_penulis`, `status`) VALUES
(13, 'Undangan Warga Sumberejo ', '2019-09-25 10:07:53.456201', 'Kepada seluruh warga Sumberejo diharapkan datang pada acara peresmian taman desa sumberejo pada hari jumat, 27 September 2019 di Balaikota Desa Sumberejo. Undangan terlampir', 'Undangan_Warga_Sumberejo__1574311022.jpg', 'Desa Sumberejo', 'terbit'),
(14, 'Tiga Bakal Calon Tak Lolos Verifikasi, Desa Sumberejo Buka Pendaftaran Pilkades Tahap III', '2019-09-25 10:18:40.055897', 'Bukan hanya Desa Gunungsari Kecamatan Bumiaji yang harus membuka pendaftaran pemilihan kepala desa (pilkades) tahap dua. Desa Sumberejo, Kecamatan Batu juga harus melakukan pendaftaran tahap dua.\r\n\r\nDesa Sumberejo terpaksa harus melakukan  pembukaan pendaftaran tahap dua, lantaran bakal calon tidak memenuhi persyaratan. Desa Sumberejo tersebut tidak memenuhi persyaratan karena empat bakal calon yang mengambil formulir tidak lolos verifikasi.\r\n\r\nMereka yang melakukan pilkades Desa Sumberejo ada Riyanto (incumbent), Tekat, dan Novi Dwi Istika. “Sayangnya ada yang persyaratan yang tidak memenuhi,” ungkap Kasubag Pemerintahan Desa Bag Pemerintahan Kota Batu, Abdul Salam.\r\n\r\nSedangkan di Desa Gunungsari hanya memiliki satu bakal calon kepala desa yakni Andi Susili yang merupakan incambent. Karena itu pendaftaran tahap II dibuka pada 9-28 Agustus mendatang. “Hal ini mengacu pada Perda Kota Batu No 1 tahun 2015 tentang Desa dan Diubah No 5 tahun 2018. Serta Perwali No 32 tahun 2016 yang diubah No 76 tahun 2017,” katanya.\r\n\r\nSedang dalam Pilkades tahun 2019 ini ada 11 desa yang mengikuti. Ada 35 bakal calon kepala desa yang mengambil formulir. Di masing-masing desa itu ada bakal calon yang melakukan pendaftaran rata-rata 2-5 orang per desanya. Dari data 11 desa yang masuk di Bagian Pemerintahan Kota Batu, berikut nama calon yang telah mengambil formulir.\r\n\r\nAntara lain di Kecamatan Bumiaji ada Desa Tulungrejo yang memiliki lima bakal calon yakni Mardianto, Prastiono, Adi Sasmito, Suliono (incumbent), dan Arrohman Mustofa.\r\n\r\nLalu di Desa Bumiaji ada Edi Susanto (incumbent), Suhariono, dam Ali Mustofa (mantan anggota DPRD). Kemudian Desa Gunungsari ada satu orang yakni Andi Susili (incumbent). Lainnya di Desa Punten ada Hening Trisunu (Sekdes Punten) dan Suliani. Sedangkan di Desa Giripurno ada Maskut dan Suntoro.\r\n\r\nUntuk di Kecamatan Batu ada Desa Sidomulyo bakal calon kepala desa yang mendaftar ada Suharto (incumbent), Hanafi (anggota BPD ), Hernanto (mantan sekdes). Lalu di Desa Sumberejo ada Riyanto (incumbent), Tekat, dan Novi Dwi Istika. Kemudian Desa Oro-Oro Ombo ada Wiweko (incamben), Lukito Bowo, Kandam, Heri pranowo, dan Gatot.\r\n\r\nSedangkan di Kecamatan Junrejo ada Desa Beji bakal calonnya ada Wawan Sulistiono, Deni Cahyono, Iwan Riswanto, dan Dedi Irawan.Lalu untuk Desa Torongrejo ada Moh Yakni (Mantan Sekdes), Kateni (incumbent), Sugeng Santoso yang juga yang juga mantan kades, dan Jaya. Dan di Desa Junrejo ada Andi faizal H (incumbent), Rohmad Santoso (mantan kades), dan Hadi Wignya (mantan kasun).', 'Tiga_Bakal_Calon_Tak_Lolos_Verifikasi,_Desa_Sumberejo_Buka_Pendaftaran_Pilkades_Tahap_III_1574311007.jpeg', 'Desa Sumberejo', 'terbit'),
(15, 'Sumberejo Jadi Desa Percontohan Pemberdayaan Desa', '2019-09-26 08:57:47.698804', '  Hari sabtu kemarin (6/01) kantor Balai Desa Sumberejo terlihat penuh oleh rombongan dari Desa Manyarejo Gresik. Mulai pukul 11.30 WIB, rombongan yang berjumlah sekitar 80 orang termasuk mengunjungi Desa Sumberejo yaitu dalam rangka studi banding pemberdayaan desa. Rombongan dari Gresik merupakan gabungan dari tim pembentukan dan penguatan kader pemberdayaan Desa Manyarejo Kecamatan Manyar Kabupaten Gresik sekaligus sebagian perangkat desa seperti Kepdes dan Sekdes. Kader yang diikutkan pada kegiatan studi banding ini merupakan gabungan ibu-ibu dari anggota guru, PKK, maupun ibu-ibu pejabat desa. Kunjungan ini bertujuan untuk menambah wawasan dan bagi kader Desa Manyarejo untuk pemberdayaan desa terlebih dalam mempercantik lingkungan yang notabene memiliki kemiripan dengan Desa Sumberejo yaitu sebagai lingkungan sentra sayuran.\r\n\r\n            Kegiatan ini dibuka dengan pembacaan susunan acara dan doa oleh mahasiswa KKM dari UIN Malang yang sedang mengabdi di Desa Sumberejo. Acara dilanjutkan dengan sambutan oleh Kepala Desa Manyarejo. Tidak mengambil waktu lama, acara selanjutnya yakni acara inti yang diisi materi oleh Bapak Suharsono, S.H selaku koordinator Desa Wisata Sumberejo sekaligus perangkat desa. Materi yang disampaikan bertema pengelolaan lingkungan berbasir masyarakat yang meliputi (KRPL) Kawasan Rumah Pangan Lestari dan bank sampah. Setelah mendapatkan materi, rombongan diajak untuk berkeliling di RW 07 yang baru saja mendapatkan juara pertama sebagai kampung tercantik se-Kota Batu di tahun 2018.  Diharapkan acara ini dapat mempererat tali silaturrahim antar Desa Manyarejo dan Desa Sumberejo sekaligus adanya transfer ilmu antardesa sehingga program pemberdayaan desa dapat terlaksana secara maksimal.', 'Sumberejo_Jadi_Desa_Percontohan_Pemberdayaan_Desa_1574310995.jpg', 'Desa Sumberejo', 'terbit'),
(17, 'Ini berita', '2019-09-26 11:48:29.448525', 'Ini berita', 'Ini_berita_1574310962.jpg', 'Desa Sumberejo', 'terbit'),
(19, 'mari kita coba', '2019-11-21 10:56:09.009369', 'haiiii', 'mari_kita_coba_1574311041.jpg', 'Desa Sumberejo', 'pending'),
(20, 'bismillah', '2019-11-21 12:30:09.112392', 'haiiii', 'bismillah_1574314209.png', 'momo', 'terbit'),
(22, 'apa', '2019-11-22 22:47:33.501493', 'apa an yaa', 'apa_1574437653.jpg', 'nisa', 'tolak'),
(23, 'Empat hari menuju idul adha', '2019-11-24 08:39:21.991348', 'alhamudlillah sudah menjelang idul adha', 'Empat_hari_menuju_idul_adha_1574559561.jpg', 'afifah', 'tolak');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `id_berita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `username`, `email`, `isi`, `id_berita`) VALUES
(40, 'ty', 'nuranisa@gmail.com', 'hg', 17),
(42, 'ty', 'nuranisa@gmail.com', 'hg', 17),
(44, 'wrewtre', 'nuranisa@gmail.com', 'w2', 17),
(45, 'anisa', 'nuranisa@gmail.com', 'x', 17),
(46, '165150201111248', 'admin@gmail.com', 'ffff', 17),
(48, 'afifah', 'ifa@gmail.com', 'hai juga :)', 20),
(49, 'ifa', 'ifa@gmail.com', 'berita apa ini?', 17);

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
  `caption_foto` varchar(255) NOT NULL,
  `tanggal_foto` datetime DEFAULT CURRENT_TIMESTAMP,
  `foto_galeri` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `judul_foto`, `caption_foto`, `tanggal_foto`, `foto_galeri`) VALUES
(5, 'Walikota dan Wakil Walikota Batu Berikan Motivasi 38 Calon Kepala Desa', '', '2019-09-26 07:12:25', 'Walikota_dan_Wakil_Walikota_Batu_Berikan_Motivasi_38_Calon_Kepala_Desa_1569456745.jpeg'),
(6, 'Pilkades Desa Sumberejo', '', '2019-09-26 07:13:40', 'Pilkades_Desa_Sumberejo_1569456820.jpg'),
(7, 'Pelatihan Situs Keuangan Desa Batu', '', '2019-09-26 07:15:33', 'Pelatihan_Situs_Keuangan_Desa_Batu_1569456933.jpg'),
(8, 'Pengajian Desa Sumberejo', '', '2019-09-26 08:59:23', 'Pengajian_Desa_Sumberejo_1569463163.jpg'),
(10, 'Suasana Tahun Baru 2019', '', '2019-09-26 09:01:36', 'Suasana_Tahun_Baru_2019_1569463296.png');

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
(1, 'desasumberejobatu@gmail.com', '(0341)- 598908', NULL, 'desasumberejobatukota', 'sumberejo', 'sumberejodesa');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(11) NOT NULL,
  `judul_layanan` varchar(256) NOT NULL,
  `tanggal_layanan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isi_layanan` longtext NOT NULL,
  `foto_layanan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `judul_layanan`, `tanggal_layanan`, `isi_layanan`, `foto_layanan`) VALUES
(1, 'Pengurusan Akte Kelahiran', '2019-11-25 00:33:18', 'test.', 'Pengurusan_Akte_Kelahiran_1574641998.jpg');

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
(4, 'Karang Taruna ', 'Karang_Taruna__1569381224.png', 'Karang Taruna adalah organisasi kepemudaan di Indonesia. Karang Taruna merupakan wadah pengembangan generasi muda nonpartisan, yang tumbuh atas dasar kesadaran dan rasa tanggung jawab sosial dari, oleh dan untuk masyarakat khususnya generasi muda di wilayah Desa / Kelurahan atau komunitas sosial sederajat, yang terutama bergerak dibidang kesejahteraan sosial. Sebagai organisasi sosial kepemudaan Karang Taruna merupakan wadah pembinaan dan pengembangan serta pemberdayaan dalam upaya mengembangkan kegiatan ekonomis produktif dengan pendayagunaan semua potensi yang tersedia dilingkungan baik sumber daya manusia maupun sumber daya alam yang telah ada. Sebagai organisasi kepemudaan, Karang Taruna berpedoman pada Pedoman Dasar dan Pedoman Rumah Tangga di mana telah pula diatur tentang struktur penggurus dan masa jabatan dimasing-masing wilayah mulai dari Desa / Kelurahan sampai pada tingkat Nasional. Semua ini wujud dari pada regenerasi organisasi demi kelanjutan organisasi serta pembinaan anggota Karang Taruna baik dimasa sekarang maupun masa yang akan datang.\r\n\r\nKarang Taruna beranggotakan pemuda dan pemudi (dalam AD/ART nya diatur keanggotaannya mulai dari pemuda/i berusia mulai dari 11 – 45 tahun) dan batasan sebagai Pengurus adalah berusia mulai 17 – 35 tahun.\r\n\r\nKarang Taruna didirikan dengan tujuan memberikan pembinaan dan pemberdayaan kepada para remaja, misalnya dalam bidang keorganisasian, ekonomi, olahraga, ketrampilan, advokasi, keagamaan dan kesenian.'),
(5, 'Linmas', 'Linmas_1569381271.png', 'Istilah Linmas yang merupakan singkatan dari Perlindungan Masyarakat telah mengalami distorsi pengertian sehingga terjebak dalam anggapan umum yang hanya mengaitkan dengan sebuah fungsi dalam masyarakat yaitu fungsi linmas atau lebih dikenal dengan Pertahanan Sipil atau Hansip. Merunut kepada kenyataan tersebut maka perlu di gali kembali tentang istilah dan pengertian dari Perlindungan Masyarakat dan Satuan Perlindungan Masyarakat (Satlinmas) itu sendiri. \r\nPengertian Satuan Perlindungan Masyarakat dapat ditemukan pada Peraturan menteri Dalam Negeri Nomor 10 Tahun 2009 tentang Penugasan Satuan Perlindungan Masyarakat Dalam Penanganan Ketenteraman, Ketertiban, Dan Keamanan Penyelenggaraan Pemilihan Umum pada pasal 1 butir 1 yaitu : Satuan Perlindungan Masyarakat yang selanjutnya disebut Satuan Linmas adalah warga masyarakat yang disiapkan dan dibekali pengetahuan serta keterampilan untuk melaksanakan kegiatan penanganan bencana guna mengurangi dan memperkecil akibat bencana, serta ikut memelihara keamanan, ketentraman dan ketertiban masyarakat, kegiatan sosial kemasyarakatan. \r\n\r\n'),
(6, 'Pembinaan Kesejahteraan Keluarga', 'Pembinaan_Kesejahteraan_Keluarga_1569381337.png', '10 Program Pokok PKK pada hakikatnya merupakan kebutuhan dasar manusia, yaitu:\r\n1. Penghayatan dan Pengamalan Pancasila\r\n2. Gotong Royong\r\n3. Pangan\r\n4. Sandang\r\n5. Perumahan dan Tatalaksana Rumah Tangga\r\n6. Pendidikan dan Keterampilan\r\n7. Kesehatan\r\n8. Pengembangan Kehidupan Berkoperasi\r\n9. Kelestarian Lingkungan Hidup\r\n10. Perencanaan Sehat');

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
(2, '2019', 'Drs Riayanto', 'Kepala Desa'),
(3, '2019', 'Surasan Spd', 'Sekretaris Desa'),
(4, '2019', 'Suyanto', 'Kepala Dusun Sumberejo'),
(5, '2019', 'Abdul Munib', 'Kasi Kesra'),
(6, '2019', 'Sukendri', 'Kasi Pelayanan');

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
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id_saran`, `email`, `isi`) VALUES
(1, '087859342343123', 'tolong tambahkan informasi alur permintaan surat dan sebagainya'),
(2, 'ifa@gmail.com', 'pingin bisa komen bagian organisasi dong :)');

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
(5, 'Santero', 'Santero_1569382260.png', 'Santero merupakan sebuah produk minuman yang diproduksi dari santrean desa sumberejo kota batu. Santero merupakan produk minuman sari buah yang terbuat dari bunga rosella. Usaha ini diproduksi oleh kelompok usaha bersama, yang terdiri dari 10 orang warga santrean desa sumberejo, salah satunya ialah ibu partimah. Awal mula bu partimah beserta para tetangganya yang berjumlah 10 orang itu, memiliki ide untuk memproduksi minuman sari buah santero ini, dikarenakan dulunya bunga rosella banyak dicari untuk dikeringkan, ternyata selain itu bisa juga dibuat menjadi minuman. Dari situlah sebuah ide untuk memproduksi bunga rosella menjadi minuman sari buah santero bermula. Mulanya bu partimah beserta para tetangganya yang berjumlah 10 0rang itu, memulai usaha ini pada tahun 2009 dengan modal awal tiga juta rupiah, yang dikumpulkan dari iuaran tiga ratus ribu per orang. Namun usaha tersebut sempat vakum pada bulan april di tahun 2009, dikarenakan alat-alat produksi rusak.\r\n\r\nTahun 2012, usaha ini mendapat bantuan alat-alat produksi dari pemberdayaan perempuan. Kemudian usaha ini berlanjut hingga sekarang. Hingga saat ini santero memiliki lima varian rasa yaitu, jambu, apel, jeruk, sirsak dan nanas. Santero bisa berkembang hingga sekarang, bermula dari memperkenalkan produk ini dari mulut ke mulut. Sampai saat ini santero sudah terkirim ke luar kota batu. Minuman sari buah santero dikemas ke dalam gelas-gelas kecil, dan dijual per dus. Dalam satu dus berisi 24 gelas kecil yang dihargai 22 ribu rupiah per dus. Produksi dilakukan by order, jadi ketika ada memesan baru akan diproduksi. Hingga saat ini tercatat kenaikan jumlah pesanan terjadi pada bulan puasa, yang berkisar hingga 1000 dus bahkan lebih. Hingga saat ini keuntungan yang dicapai dalam pertahunnya bisa mencapai hingga 50 juta rupuah.'),
(6, 'Kripik Pisang Nawang Sari', 'Kripik_Pisang_Nawang_Sari_1569461300.png', 'Desa sumberejo merupakan salah satu desa yang berada di kota Batu. Sama halnya dengan desa lainnya. Desa ini mempunyai beberapa UMKM atau usaha mikro kecil menengah yang dirintis oleh beberapa warga yang ada di sana. Salah satu umkmnya ialah kripik pisang “Nawang Sari”. Usaha kripik pisang dimulai sejak tahun 2012 oleh pengusaha rumahan yang terletak pada dusun Santrean. Modal awal yang digunakan dalam usaha tersebut, dimulai dari setundun pisang yang kemudian dipasarkan dilingkungan sekitar dan dipromosikan dari mulut ke mulut.');

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
  ADD PRIMARY KEY (`id_apbd`);

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
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

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
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

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
  MODIFY `id_apbd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `etnis`
--
ALTER TABLE `etnis`
  MODIFY `id_etnis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id_org` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `perangkat`
--
ALTER TABLE `perangkat`
  MODIFY `id_perangkat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profesi`
--
ALTER TABLE `profesi`
  MODIFY `id_profesi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `umkm`
--
ALTER TABLE `umkm`
  MODIFY `id_umkm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
