-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2019 at 02:07 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db-pb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahan_ajar`
--

CREATE TABLE IF NOT EXISTS `bahan_ajar` (
`id_bahan` int(11) NOT NULL,
  `judul_bahan` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id_berita` int(11) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `gambar`, `isi`, `tanggal`) VALUES
(1, 'judul', '.png', 'isi', '2019-03-02 17:00:00'),
(2, 'lkj', 'default.jpg', 'lkjljlkjkl', '2019-03-02 17:00:00'),
(3, 'berita ke tiga', 'default.jpg', 'Oke teman-teman hasil jadinya seperti pada gambar diatas, dan itu merupakan contoh sederhananya tentang Cara Membuat Pop Up Gambar dengan Bootstrap Cukup mudah kan teman-teman ?, dan untuk pengembangannya silahkan teman-teman modifikasi sesuai selera dan keinginan teman-teman.\r\n\r\nCukup sekian pembahasan kali ini tentang Cara Membuat Pop Up Gambar dengan Bootstrap semoga dapat bermanfaat buat teman-teman yang masih pemula dalam bootstrap ini dan sampai bertemu dipembahasan selanjutnya ya.', '2019-03-21 04:29:02'),
(4, 'judul berita', '.jpg', 'kjhklhkjlhgetAllBerita', '2019-03-21 07:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `dt_beranda`
--

CREATE TABLE IF NOT EXISTS `dt_beranda` (
`id` int(11) NOT NULL,
  `judul_gambar` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_beranda`
--

INSERT INTO `dt_beranda` (`id`, `judul_gambar`, `deskripsi`, `gambar`, `status`) VALUES
(20, 'slide1asdf', 'slide1 merupakan slide uji coba', '20.png', 'aktif'),
(21, 'slide 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae sunt voluptate eius nemo magni, blanditiis qui unde. Quibusdam, iure amet facilis ipsa consequuntur. Sapiente iusto, asperiores! Cumque ducimus iusto quam.\r\n', 'default.jpg', 'aktif'),
(22, 'jkljljklj', 'lkjljlkjlkjklj', '1524.jpg', 'aktif'),
(23, 'lkjhlkh', 'lkjhkjhklh', 'a355d-marker.jpg', 'aktif'),
(24, 'kjhhhhh', 'upload gambar', '', 'aktif'),
(25, 'lkjlkj', '<p>\n	lkjlkjljlk</p>\n', '1bcd0-marker.jpg', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `ekskul`
--

CREATE TABLE IF NOT EXISTS `ekskul` (
`id_ekskul` int(11) NOT NULL,
  `nama_ekskul` varchar(100) NOT NULL,
  `ket_ekskul` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nuptk` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pendidikan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nuptk`, `nama`, `gambar`, `tgl_lahir`, `alamat`, `no_hp`, `email`, `pendidikan`) VALUES
('876786799', 'lkjhkjhkljh', 'default.jpg', '2012-05-25', 'jember', '098', 'doddy@gmail.com', 's4'),
('9879798797987', 'jhkkhkhkh', 'contoh.jpg', '2015-01-18', 'lkjlkjlkj', '987987', 'firdausillah123@gmail.com', 's3');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
`id_jurusan` int(11) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `ket_jurusan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `jurusan`, `ket_jurusan`) VALUES
(1, 'Keperawatan', 'Berdasarkan INPRES REVITALISASI SMK sebagai perekat stakeholder dan Peraturan Pemerintah No. 48 tahun 2008 Pendanaan Pendidikan dan No 17 Tentang Pengelolaan serta Penyelenggaraan Pendidiikan dan perubahannya, disebutkan bahwa SMKN 1 Surabaya adalah Badan Layanan Umum Daerah (BLUD) Kementerian Pendidikan dan Kebudayaan pada bidang pengembangan dan pelatihan SMK yang berada dibawah tanggung jawab Direktorat Jenderal GTK. SMKN 1 Surabaya memiliki tugas melaksanakan pengembangan karakter dan mutu pendidikan masyarakat salah satunya dengan Program Pendidikan Perhotelan yang bertujuan melatih langsung tentang tanggung jawab praktek bidang Perhotelan secara profesional.'),
(3, 'kecelakaan', 'Ditlantas Polda Jatim menyampaikan Program Millenial Road Safety Festival yang akan di selenggarakan pada 17 Maret 2019 Pukul 06.00 WIB lokasi di Jembatan Suramadu Surabaya. Latar belakang kegiatan ini diselenggarakan atas pernyataan WHO - PBB bahwa kecelakaan lalu lintas menempati urutan kelima jumlah manusia meninggal dunia. Peringkat pertama  jantung koroner, kedua sakit paru-paru, ketiga diabetes, keempat TBC dan kelima adalah korban kecelakaan lulu lintas.\r\n\r\nHasil Anev kecelakaan lalu lintas Ditlantas Polda Jatim, Korban kecelakaan lalu lintas peringkat tertinggi diakhibatkan oleh kendaraan roda 2 atau sepeda motor  dan kontributor terbesar yang menjadi korban kecelakaan lalu lintas ditinjau dari usia adalah usia millenial 17 sampai dengan 35 tahun.\r\n\r\nPada tahun 2018 di Jatim tercatat 24.688 kejadian jumlah ini menunjukkan tingkat fasilitas korban meninggal dunia akibat kecelakaan lalu lintas sejumlah 5.257 orang, rata rata 15 orang meninggal dunia per hari. Yang didominasi sebagai korban kecelakaan adalah generasi millenial ( sebesar 52%)\r\n\r\nKecelakaan lalu lintas yang menghilangkan nyawa usia produktif bisa menghilangkan potensi anak bangsa sebagai penentu masa depan bangsa dan negara, kondisi seperti ini tentu tidak boleh terus berlangsung. Kita harus segera mengambil langkah strategis yang tepat dan efektif guna membangun pola pikir, kesadaran dan kebiasaan positif pada segenap generasi millenial sebagai pengguna jalan  dan diharapkan akan membentuk budaya tertib berlalu lintas guna terciptanya Kamseltibcar Lantas.\r\n\r\nMillenial Road Safety Festival merupakan program nasional yang bertujuan meningkatkan kesadaran  dan ketertiban berlalu lintas guna terciptanya KAMSELTIBCAR LANTAS.');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kd_kelas` varchar(10) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `golongan` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE IF NOT EXISTS `kurikulum` (
`id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `file_kurikulum` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
`id_nilai` int(11) NOT NULL,
  `nilai` varchar(100) NOT NULL,
  `nipd` int(8) NOT NULL,
  `kd_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
`id` int(11) NOT NULL,
  `judul_pengumuman` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul_pengumuman`, `isi`, `tanggal`) VALUES
(1, 'lkjljljlkjkljh', ' MENJADI SEKOLAH MENENGAH KEJURUAN YANG UNGGUL, MENGHASILKAN LULUSAN YANG BERIMAN DAN BERTAQWA KEPADA TUHAN YME, BERBUDI, BERBUDI PEKERTI LUHUR DAN BERWAWASAN LINGKUNGAN SERTA MENINGKATKAN DAYA SAING SUMBER DAYA MANUSIA ', '2019-03-22 04:01:36'),
(2, 'jgfhdhgfytuutuytut', ' MENJADI SEKOLAH MENENGAH KEJURUAN YANG UNGGUL, MENGHASILKAN LULUSAN YANG BERIMAN DAN BERTAQWA KEPADA TUHAN YME, BERBUDI, BERBUDI PEKERTI LUHUR DAN BERWAWASAN LINGKUNGAN SERTA MENINGKATKAN DAYA SAING SUMBER DAYA MANUSIA ', '2019-03-22 04:01:36');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
`id` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `tujuan` text NOT NULL,
  `sejarah` text NOT NULL,
  `sambutan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `visi`, `misi`, `tujuan`, `sejarah`, `sambutan`) VALUES
(1, 'MENJADI SEKOLAH MENENGAH KEJURUAN YANG UNGGUL, MENGHASILKAN LULUSAN YANG BERIMAN DAN BERTAQWA KEPADA TUHAN YME, BERBUDI, BERBUDI PEKERTI LUHUR DAN BERWAWASAN LINGKUNGAN SERTA MENINGKATKAN DAYA SAING SUMBER DAYA MANUSIA ', ' 1.   Menanamkan Keimanan dan ketakwaan melalui pengamalan ajaran agama 2.   Mengoptimalkan proses pembelajaran dan bimbingan. 3.   Mengembangkan bidang Ilmu Pengetahuan dan Teknologi berdasarkan minat, bakat, dan potensi peserta didik. 4.   Membina kemandirian peserta didik melalui kegiatan pembiasaan, kewirausahaan, dan pengembangan diri yang terencana dan berkesinambungan. 5.   Menjalin kerjasama yang harmonis antar warga sekolah, dan lembaga lain yang terkait.', '', 'lkj', 'lkj');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nipd` varchar(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `ayah` varchar(50) NOT NULL,
  `ibu` varchar(50) NOT NULL,
  `kd_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nipd`, `nama`, `gambar`, `tgl_lahir`, `agama`, `alamat`, `no_hp`, `ayah`, `ibu`, `kd_kelas`) VALUES
('7865', 'lkjh', 0, '2008-10-26', 'kjlkjlkjl', 'lkjlkjlkj', '987987', 'jhkk', 'kjhkhjkh', 'kjhkjh'),
('98978787', 'paijo', 0, '2016-09-28', 'lkjh', 'banyuwangi', '0987658745678', 'lkjhjh', 'lkjhkljh', 'XA388');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  `level` enum('siswa','wali_kelas','admin') NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL DEFAULT 'aktif'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 'aktif'),
(2, 'siswa', 'siswa', 'siswa', 'aktif'),
(3, 'guru', 'guru', 'wali_kelas', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan_ajar`
--
ALTER TABLE `bahan_ajar`
 ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `dt_beranda`
--
ALTER TABLE `dt_beranda`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ekskul`
--
ALTER TABLE `ekskul`
 ADD PRIMARY KEY (`id_ekskul`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`nuptk`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
 ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kurikulum`
--
ALTER TABLE `kurikulum`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
 ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`nipd`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahan_ajar`
--
ALTER TABLE `bahan_ajar`
MODIFY `id_bahan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dt_beranda`
--
ALTER TABLE `dt_beranda`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `ekskul`
--
ALTER TABLE `ekskul`
MODIFY `id_ekskul` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kurikulum`
--
ALTER TABLE `kurikulum`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
