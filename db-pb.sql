-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2019 at 03:14 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan_ajar`
--

INSERT INTO `bahan_ajar` (`id_bahan`, `judul_bahan`, `link`) VALUES
(1, 'judul bahan', 'link');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id` int(11) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul_berita`, `gambar`, `isi`, `tanggal`) VALUES
(8, 'judule', 'jd_houston.png', '<p>Jakarta, CNN Indonesia -- Polda Jawa Tengah mencatat korban meninggal dunia akibat kecelakaan lalu lintas selama pelaksanaan Operasi Ketupat Candi 2019 meningkat lebih dari dua kali lipat dibanding periode yang sama tahun sebelumnya.<br />\r\n<br />\r\n&quot;Korban meninggal didominasi kejadian kecelakaan lalu lintas di luar jalur tol,&quot; kata Direktur Lalu Lintas Polda Jawa Tengah Kombes Pol Rudy Antariksa di Semarang, Kamis.<br />\r\n<br />\r\nJumlah korban meninggal akibat kecelakaan lalu lintas selama pelaksanaan Operasi Ketupat Candi 2019 mencapai 32 orang, naik di banding tahun sebelumnya yang mencapai 12 orang.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0000-00-00 00:00:00'),
(9, 'beritau', 'colin-powell-wc-9445708-1-raw.jpg', '<p>lkfdgljdfsgljldf</p>\r\n', '2019-06-13 00:00:00');

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
('676763', 'firdausillah', '++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++2.jpg', '2017-09-26', 'jember', '14', 'doddy@gmail.com', 's2'),
('777777', 'paijona', 'john_maxwell3.jpg', '2017-10-29', 'jember', '09876876786', 'firdausillah123@gmail.com', 's2'),
('999888', 'firdausillah', 'Mahatma-Gandhi,_studio,_1931.jpg', '2017-10-29', 'jember', '18876876', 'doddy@gmail.com', 's2');

--
-- Triggers `guru`
--
DELIMITER //
CREATE TRIGGER `create_user_guru` AFTER INSERT ON `guru`
 FOR EACH ROW begin
insert into user (id, gambar, username, password, level, status) values (NULL, new.gambar, new.nuptk, new.tgl_lahir, 'wali_kelas', 'Aktif');
end
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `delete_user_guru` AFTER DELETE ON `guru`
 FOR EACH ROW begin 
delete  from user where username = old.nuptk;
end
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `update_user_guru` AFTER UPDATE ON `guru`
 FOR EACH ROW begin
if old.nuptk<>new.nuptk or old.gambar<>new.gambar or old.tgl_lahir<>new.tgl_lahir then
update user set username=new.nuptk, password=new.tgl_lahir where username=old.nuptk;
end if;
end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
`id_jurusan` int(11) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `jurusan`) VALUES
(1, 'Keperawatan'),
(3, 'kecelakaan');

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

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kd_kelas`, `kelas`, `golongan`, `id_jurusan`) VALUES
('MJ1', 'XI', 2, 3),
('MM2', 'X', 3, 1),
('MXI1', 'XI', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE IF NOT EXISTS `kurikulum` (
`id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `file_kurikulum` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurikulum`
--

INSERT INTO `kurikulum` (`id`, `judul`, `file_kurikulum`) VALUES
(1, 'jurnal fuzzy', 'cc9f6-penerapan-logika-fuzzy-untuk-rekomendasi-m-commerce.pdf'),
(2, 'jurnal contoh', '891c3-penentuan-prioritas-pembangunan-jalan-desa-menggunakan-rural-access-index-.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
`id_nilai` int(11) NOT NULL,
  `nilai` varchar(100) NOT NULL,
  `nipd` varchar(8) NOT NULL,
  `nuptk` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `nilai_siswa`
--
CREATE TABLE IF NOT EXISTS `nilai_siswa` (
`nama` varchar(50)
,`kelas` varchar(10)
,`jurusan` varchar(50)
,`golongan` int(11)
,`nilai` varchar(100)
,`nama_guru` varchar(50)
);
-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
`id` int(11) NOT NULL,
  `judul_pengumuman` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul_pengumuman`, `isi`, `tanggal`) VALUES
(1, 'lkjljljlkjkljh', ' MENJADI SEKOLAH MENENGAH KEJURUAN YANG UNGGUL, MENGHASILKAN LULUSAN YANG BERIMAN DAN BERTAQWA KEPADA TUHAN YME, BERBUDI, BERBUDI PEKERTI LUHUR DAN BERWAWASAN LINGKUNGAN SERTA MENINGKATKAN DAYA SAING SUMBER DAYA MANUSIA ', '2019-03-22'),
(2, 'jgfhdhgfytuutuytut', ' MENJADI SEKOLAH MENENGAH KEJURUAN YANG UNGGUL, MENGHASILKAN LULUSAN YANG BERIMAN DAN BERTAQWA KEPADA TUHAN YME, BERBUDI, BERBUDI PEKERTI LUHUR DAN BERWAWASAN LINGKUNGAN SERTA MENINGKATKAN DAYA SAING SUMBER DAYA MANUSIA ', '2019-03-22');

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
  `gambar` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kelamin` enum('laki-laki','perempuan') NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `ayah` varchar(50) NOT NULL,
  `ibu` varchar(50) NOT NULL,
  `kd_kelas` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `siswa`
--
DELIMITER //
CREATE TRIGGER `create_user_siswa` AFTER INSERT ON `siswa`
 FOR EACH ROW begin
insert into user (id, gambar, username, password, level, status) values (NULL, new.gambar, new.nipd, new.tgl_lahir, 'siswa', 'Aktif');
end
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `delete_user_siswa` AFTER DELETE ON `siswa`
 FOR EACH ROW begin 
delete from user where username = old.nipd;
end
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `update_user_siswa` AFTER UPDATE ON `siswa`
 FOR EACH ROW begin
if old.nipd<>new.nipd or old.gambar<>new.gambar or old.tgl_lahir<>new.tgl_lahir then
update user set username=new.nipd, password=new.tgl_lahir where username=old.nipd;
end if;
end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` enum('siswa','wali_kelas','admin') NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL DEFAULT 'aktif'
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `gambar`, `username`, `password`, `level`, `status`) VALUES
(31, '++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++6.jpg', 'adminn', 'adminn', 'admin', 'aktif'),
(33, 'john_maxwell3.jpg', '777777', '2017-10-29', 'wali_kelas', 'aktif'),
(36, '++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++2.jpg', '676763', '2017-09-26', 'wali_kelas', 'aktif'),
(37, 'Mahatma-Gandhi,_studio,_1931.jpg', '999888', '2017-10-29', 'wali_kelas', 'aktif');

-- --------------------------------------------------------

--
-- Structure for view `nilai_siswa`
--
DROP TABLE IF EXISTS `nilai_siswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nilai_siswa` AS select `siswa`.`nama` AS `nama`,`kelas`.`kelas` AS `kelas`,`jurusan`.`jurusan` AS `jurusan`,`kelas`.`golongan` AS `golongan`,`nilai`.`nilai` AS `nilai`,`guru`.`nama` AS `nama_guru` from ((((`nilai` join `siswa` on((`nilai`.`nipd` = `siswa`.`nipd`))) join `kelas` on((`siswa`.`kd_kelas` = `kelas`.`kd_kelas`))) join `jurusan` on((`kelas`.`id_jurusan` = `jurusan`.`id_jurusan`))) join `guru` on((`nilai`.`nuptk` = `guru`.`nuptk`)));

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
 ADD PRIMARY KEY (`id`);

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
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`kd_kelas`), ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `kurikulum`
--
ALTER TABLE `kurikulum`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
 ADD PRIMARY KEY (`id_nilai`), ADD KEY `nuptk` (`nuptk`), ADD KEY `nipd` (`nipd`), ADD KEY `nipd_2` (`nipd`);

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
 ADD PRIMARY KEY (`nipd`), ADD KEY `kd_kelas` (`kd_kelas`), ADD KEY `kd_kelas_2` (`kd_kelas`);

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
MODIFY `id_bahan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`nipd`) REFERENCES `siswa` (`nipd`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`nuptk`) REFERENCES `guru` (`nuptk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`kd_kelas`) REFERENCES `kelas` (`kd_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
