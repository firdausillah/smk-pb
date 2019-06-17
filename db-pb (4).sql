-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 12:06 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul_berita`, `gambar`, `isi`, `tanggal`) VALUES
(10, 'Jadwal UN 2019 SMA/SMK: Tanggal, Mata Pelajaran dan Waktu Pengerjaan', 'Gambar_Berita_1.jpg', '<p>Pemerintah melalui Badan Standar Nasional Pendidikan (BSNP) telah menentukan jadwal pelaksanaan Ujian Nasional ( UN) untuk Tahun Pengajaran 2018-2019. UN 2019 rencananya akan dilaksakan dalam 2 pilihan sistem yakni: Ujian Nasional Berbasis Komputer ( UNBK) dan Ujian Nasional Berbasis Kertas Pensil ( UNKP).&nbsp; Melalui Pedoman Operasional Standar (POS) Penyelenggaraan UN 2019, Bambang Suryadi Ketua BSNP menginformasikan jadwal pelaksanaan UNBK dan UNKP baik untuk jenjang SMP dan SMA. Berdasarkan POS UN 2019 yang diperoleh Kompas.com, berikut jadwal pelaksanaan UN untuk jenjang SMA, SMK dan sederajat:</p>\r\n\r\n<p><strong>&nbsp;Jadwal pelaksanaan UNBK SMK</strong></p>\r\n\r\n<ol>\r\n	<li>Bahasa Indonesia: Senin, 25 Maret 2019, terbagi atas 3 sesi (Pk 07.30 &ndash; Pk 09.30, Pk 10.30&nbsp;&nbsp; Pk12.30 dan Pk 14.00 &ndash; Pk 16.00).</li>\r\n	<li>Matematika: Selasa, 26 Maret 2019, terbagi atas 3 sesi (Pk 07.30 &ndash; Pk 09.30, Pk 10.30 &ndash; Pk12.30 dan Pk 14.00 &ndash; Pk 16.00).</li>\r\n	<li>Bahasa Inggris: Rabu, 27 Maret 2019, terbagi atas 3 sesi (Pk 07.30 &ndash; Pk 09.30, Pk 10.30 &ndash; Pk12.30 dan Pk 14.00 &ndash; Pk 16.00).</li>\r\n	<li>Teori Kejuruan: Kamis, 28 Maret 2019, terbagi atas 3 sesi (Pk 07.30 &ndash; Pk 09.30, Pk 10.30 &ndash; Pk12.30 dan Pk 14.00 &ndash; Pk 16.00).</li>\r\n</ol>\r\n\r\n<p><strong>&nbsp;Jadwal pelaksanaan UNBK SMA/MA </strong></p>\r\n\r\n<ol>\r\n	<li>Bahasa Indonesia: Senin, 1 April 2019, terbagi atas 3 sesi (Pk 07.30 &ndash; Pk 09.30, Pk 10.30 &ndash; Pk12.30 dan Pk 14.00 &ndash; Pk 16.00).</li>\r\n	<li>Matematika: Selasa, 2 April 2019, terbagi atas 3 sesi (Pk 07.30 &ndash; Pk 09.30, Pk 10.30 &ndash; Pk12.30 dan Pk 14.00 &ndash; Pk 16.00).</li>\r\n	<li>Bahasa Inggris: Kamis, 4 April 2019, terbagi atas 3 sesi (Pk 07.30 &ndash; Pk 09.30, Pk 10.30 &ndash; Pk12.30 dan Pk 14.00 &ndash; Pk 16.00).</li>\r\n	<li>Mata Pelajaran Juruan (IPA/IPS/Bahasa/Keagamaan): Senin, 8 April 2019, terbagi atas 3 sesi (Pk 07.30 &ndash; Pk 09.30, Pk 10.30 &ndash; Pk12.30 dan Pk 14.00 &ndash; Pk 16.00).<br />\r\n	<br />\r\n	&nbsp;</li>\r\n</ol>\r\n', '2019-06-17 20:52:43'),
(11, 'Kriteria Kelulusan Siswa', 'Gambar_Berita_2.jpg', '<p>Siswa SMA yang rajin dan pintar itu tidak diluluskan kepala sekolah. Pasalnya, ia dinilai tidak patuh terhadap kepala sekolah. Sebagian guru di sekolah itu sedih dan tidak setuju dengan kebijakan kepsek tersebut. Peristiwa ini terjadi di SMAN 1 Sembalun, Lombok Timur (13/5/2019).</p>\r\n\r\n<p>Beritanya viral di media sosial. Siswa ini tidak lulus karena kritis terhadap kebijakan kepsek. Dia tidak setuju kebijakan kepsek yang memukul siswa dan melarang penggunaan jaket, padahal cuaca sangat dingin (11-12 derajat Celsius) karena musim hujan. Dia juga memprotes pemulangan siswa yang terlambat karena kondisi jalan rusak akibat longsor. Kekesalannya itu ia tuangkan di Facebook.</p>\r\n\r\n<p><strong>Kriteria Kelulusan</strong></p>\r\n\r\n<p>Apakah keputusan kepsek itu bisa dibenarkan? Apa sesungguhnya syarat kelulusan siswa? Kelulusan siswa ditentukan oleh dua hal: akademik dan non-akademik. Biasanya, aspek akademik lebih dominan. Pelanggaran siswa dimaafkan karena alasan kemanusiaan. Diputuskan lewat rapat dewangurudan kepsek.&nbsp;<br />\r\n<br />\r\nSecara akademik, penentu kelulusan adalah nilai rapor dan ujian nasional (UN). Jika nilai gabungan keduanya mencapai batas minimal yang ditentukan, maka siswa harus dinyatakan lulus. Tetapi, siswa yang memiliki kasus berat di sekolah, seperti merusak fasilitas sekolah atau melukai guru, bisa tidak lulus meskipun nilainya memadai.<br />\r\n<br />\r\nSistem kelulusan yang mengakomodasi nilai rapor membuat peluang kelulusan siswa lebih besar. Pada umumnya, guru dan kepsek menginginkan semua siswanya lulus. Nilai UN siswa yang rendah bisa diselamatkan oleh nilai rapor yang bisa jadi bagus.<br />\r\n<br />\r\nBerbeda dengan nilai UN dan nilai rapor yang terukur dan pasti (objektif), penilaian sikap siswa seperti kasus di atas sangat subjektif. Contoh, sebagian guru menangis dan tidak setuju dengan keputusan kepsek. Kabarnya, kepsek menolak permohonan maaf keluarga siswa, hanya karena dilakukan pada hari Minggu.<br />\r\n<br />\r\nMenurut kepsek, keputusan bukan dibuat sendiri dan tanpa alasan, tetapi melalui rapat kelulusan yang dihadiri oleh 17 guru. Bisa jadi para guru hadir, tetapi tidak dicapai kata sepakat atau mereka tidak berani berbeda pendapat. Pada umumnya, bawahan tidak berani berbeda pendapat dengan atasan, atau ada atasan yang tidak bisa menerima kritik dari bawahan.&nbsp;<br />\r\n<br />\r\n<strong>Kinerja Kepsek</strong><br />\r\n<br />\r\nPertanyaannya, siapa yang berhak meluruskan cara pandang kepsek atau guru-guru di sekolah itu? Apakah keputusan ketidaklulusan itu bisa dianulir?<br />\r\n<br />\r\nPengawas sekolah bisa meminta penjelasan kepsek atas keputusannya. Data dan argumentasi ketidaklulusan harus dimajukan kepsek. Secara terpisah, pengawas juga meminta informasi kepada guru-guru dan siswa yang bersangkutan. Misalnya, bagaimana proses rapat kelulusan berlangsung.&nbsp;<br />\r\n<br />\r\nBila data dan argumentasi kepsek dinilai lemah, maka pengawas meminta kepsek meralat keputusannya. Di sini pengawas memposisikan diri sebagai pihak yang mencari kebenaran dan keadilan bagi siswa, bukan mencari kesalahan kepsek. Diupayakan tidak ada pihak yang merasa dihakimi atau digurui. Niat baik harus disampaikan dengan cara yang baik.<br />\r\n<br />\r\nApabila upaya pengawas tidak berhasil, maka dinas pendidikan provinsi harus turun tangan. Jika masih buntu juga, maka gubernur yang harus menyelesaikan masalah ini. Intinya, harus ada dari ketiga pihak tersebut yang maju dan segera menyelamatkan siswa tersebut. Masa depannya ditentukan oleh kecepatan dan kepedulian penanganan perkara tersebut.<br />\r\n<br />\r\nSaatnya pengawas memaksimalkan evaluasi kinerja kepsek. Dia bisa menjadi jembatan komunikasi antara guru dan kepala sekolah. Kepsek yang berkinerja baik layak memperoleh penghargaan. Sebaliknya, kepsek yang tidak kompeten dan berkinerja buruk harus diberi peringatan dan sanksi.<br />\r\n<br />\r\nPengawas menjadi kunci layak atau tidaknya seseorang menjadi kepsek. Pengawas juga berperan sebagai mitra dialog kepsek dalam menjalankan tugasnya. Sebelum keputusan-keputusan krusial dibuat, seharusnya kepsek berkonsultasi dengan pengawas. Pengawas bisa memberikan rekomendasi kepada pihak berwenang tentang nama-nama yang layak dan tidak layak melanjutkan jabatan kepala sekolah.<br />\r\n<br />\r\nKepala sekolah adalah sosok teladan bagi guru dan siswa. Dia harus cerdas sekaligus memiliki integritas. Perkataan, sikap, dan keputusannya menyejukkan bagi warga sekolah. Dengan demikian, guru dan siswa merasa nyaman berada, belajar, dan bekerja di sekolah.&nbsp;<br />\r\n<br />\r\nKurikulum 2013 menekankan pembentukan karakter siswa. Jika guru dan kepala sekolah bisa menjadi teladan dalam nilai-nilai baik, maka karakter siswa akan tumbuh dengan baik. Siswa akan terpengaruh dengan cara melihat dan menyaksikan perilaku guru, bukan dengan apa yang dikatakan dan ditulis oleh guru.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-06-17 20:56:08'),
(12, 'Lulusan SMA dan SMK Bisa Kerja di Industri Farmasi', 'Gambar_Berita_3.jpg', '<p>Lulusan Sekolah Menengah Atas (SMA) atau Sekolah Menengah Kejuruan (SMK) tidak perlu takut atau ragu jika ingin terjun ke industri farmasi. Mereka tetap bisa menggeluti dunia tersebut.</p>\r\n\r\n<p>Head of Kalbe Learning Center Micha Catur Firmanto mengatakan, lulusan SMA, SMK, atau sederajat di Indonesia cukup besar. Namun, mereka juga harus siap untuk melanjutkan kehidupannya dengan bekerja.</p>\r\n\r\n<p>&quot;Harus ada yang peduli, bagaimana pendidikan mereka&nbsp; sendiri untuk bekerja,&quot; kata Micha di Pulo Gadung, Jakarta Timur pada Rabu (6/2/2019).</p>\r\n\r\n<p>Salah satu pusat pembelajaran yang dimiliki perusahaan farmasi di Indonesia adalah Kalbe Learning Center (KLC). Hingga saat ini, pusat pembelajaran ini telah meluluskan 7.476 trainer yang siap bekerja di industri farmasi.</p>\r\n\r\n<p>&quot;Kalbe Learning Center menjadi jembatan penghubung antara calon karyawan lulusan SMK atau SMA dengan seluruh manufaktur farmasi Kalbe dalam mempersiapkan pengetahuan dan keterampilan dasar calon karyawan yang dipersyaratkan untuk bekerja di perusahaan farmasi,&quot; ujar Presiden Direktur PT Kalbe Farma, Vidjongtius.</p>\r\n', '2019-06-17 21:05:34'),
(13, 'Kemdiknas: Aturan Tata Tertib Sekolah Masih Lemah', 'Gambar_Berita_4.jpg', '<p>Dirjen Pendidikan Menengah Kementerian Pendidikan Nasional (Kemdiknas), Hamid Muhammad mengatakan, terjadinya tawuran ataupun kekerasan di lingkungan sekolah yang dilakukan oleh para siswa disebabkan karena lemahnya aturan tata tertib sekolah. Hal ini tentunya tidak terlepas dari peran guru yang dimungkinkan juga tidak mentaati peraturan sekolah itu sendiri.<br />\r\n<br />\r\n&ldquo;Misalnya, sekolah membuat aturan dilarang merokok di sekolah. Para guru beranggapan bahwa aturan itu khusus untuk siswa, dan guru bisa bebas merokok di lingkungan sekolah. Seharusnya, aturan itu berlaku untuk semua,&rdquo; tegas Hamid ketika ditemui di ruangannya di Gedung Kemdiknas, Jakarta, Rabu (21/9).<br />\r\n<br />\r\nHamid yang juga pernah menangani kasus tawuan pelajar SMA&nbsp; Bakti Idhata mengungkapkan, butuh waktu 5 tahun untuk menyelesaikan masalah tersebut. Dikatakan, harus melakukan perbaikan-perbaikan di sekolah itu sendiri. Pertama, kejelasan regulasi&nbsp; sekolah. &ldquo;Ketika anak mendaftar sekolah harus jelas aturannya. Harus ada perjanjian anti kekerasan dan bullyingakan mendapatkan peringatan, namun jika sudah parah, harus dikembalikan kepada orang tua,&rdquo; jelasnya.<br />\r\n<br />\r\nKedua, para guru yang mengajar harus bertugas untuk bisa membentuk karakter siswa. Itu bukanlah tugas guru Agama ataupun Bimbingan Konseling, tetapi semuanya. Ketiga,&nbsp; keteladanan. Serta yang keempat, adalah harus memperbanyak program ekstrakurikuler.<br />\r\n<br />\r\n&ldquo;Jadi jangan sampai anak-anak berkumpul yang arahnya ke hal negatif. Masalahnya, di luar sekolah variannya lebih luas dan bisa mempengaruhi karakter anak. Ini yang akan kita bicarakan dengan kepala sekolah khususnya di DKI Jakarta,&rdquo; imbuhnya.</p>\r\n', '2019-06-17 21:07:20'),
(14, 'Kemdiknas Siapkan Desk Anti-Kekerasan', 'Gambar_Berita_5.jpg', '<p>Kementerian Pendidikan Nasional (Kemdiknas) berencana melakukan pemetaan guna mengatasi dan mencari solusi terhadap tindak kekerasan yang dilakukan oleh para pelajar, khususnya di wilayah DKI Jakarta. Dirjen Pendidikan Menegah Kemdiknas, Hamid Muhammad, menyatakan bahwa pihaknya telah memerintahkan Direktur Pembinaan SMA dan Direktur Pembinaan SMK untuk berkoordinasi dengan semua sekolah di seluruh wilayah DKI Jakarta.<br />\r\n<br />\r\n&ldquo;Minggu depan kami akan koordinasi dengan sekolah-sekolah di DKI Jakarta, namun terutama sekolah-sekolah yang berpotensi melakukan kekerasan semacam ini. Dalam koordinasi pemetaan tersebut, juga akan melibatkan beberapa pengamat pendidikan, sejumlah kepala sekolah memiliki kepedulian dengan sekolah,&rdquo; ungkap Hamid ketika ditemui di ruangannya di Gedung Kemdiknas, Rabu (21/9) sore.<br />\r\n<br />\r\nMenurutnya, dengan cara tersebut Kemdiknas ingin melakukan investigasi penyebab kekerasan di lingkungan sekolah, sekaligus mencarikan solusinya. &ldquo;Bahkan, keputusan yang baru saat ini adalah Kemdiknas berencana akan membuka desk baru yang khusus menangani laporan tindak kekerasan yang terjadi di lingkungan sekolah,&rdquo; ujarnya.<br />\r\n<br />\r\nDesk baru tersebut rencananya akan dibuka di kantor Kemdiknas, maupun di kantor Dinas Pendidikan DKI Jakarta. &ldquo;Ini salah satu bentuk keseriusan pemerintah dalam menangani masalah ini. Kalau ada masalah bulying dari sekolah manapun, dapat dilaporkan ke sini. Ada tim khusus untuk itu karena kejadian ini sudah sangat memalukan. Seharusnya, Jakarta yang meurpakan ibukota bisa menjadi contoh baik bagi daerah lain,&rdquo; tukasnya.<br />\r\n<br />\r\nHamid menambahkan, pihaknya juga tengah meminta data kepada Dinas Pendidikan DKI Jakarta untuk melakukan identifikasi terhadap sekolah-sekolah kerap terlibat tawuran. Pasalnya, tindak kekerasan pelajhar sudah marak dan menjalar ke beberapa sekolah lain.&nbsp;<br />\r\n<br />\r\n&quot;Komando lapangan tentunya ada di tangan Diknas DKI Jakarta, karena ini kewenangan mereka. Kalau ini (tawuran) menjadi kebiasaan di ibukota, dikhawtairkan akan ditiru oleh kota lain. Jakarta kan barometer nasional&rdquo; imbuhnya.&nbsp;</p>\r\n', '2019-06-17 21:10:47');

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
('11222', ' Ir. H. Ade Firdaus', 'kepala.jpg', '1983-06-27', 'jember', '07655577787', 'firdaus@gmail.com', 's1'),
('11333', 'Gunawan Arif,S.E.', 'guru1.jpg', '1988-04-27', 'banyuwangi', '087666555', 'gunawan@gmail.com', 's1'),
('11444', 'Drs, Sujatmiko,S.Sos.', 'guru2.jpg', '1991-01-01', 'banyuwangi', '08654445555', 'jatmikok@gmail.com', 's1'),
('11555', 'Suherman,S.Pd', 'guru31.jpg', '1992-12-12', 'Jember', '088877777666', 'herman@gmail.com', 's1'),
('11666', 'Ahmad Erick,S.Pd.Jas', 'guru4.jpg', '1991-10-10', 'Jember', '07778887666', 'erik@gmail.com', 's1'),
('11777', 'Nur Hidayati,S.Pd.', 'guru5.jpg', '1992-12-12', 'jember', '08877766677676', 'nur@gmail.com', 's1'),
('11888', 'Suharmoko,S.Pd.,M.Pd', 'guru6.jpg', '1989-12-13', 'banyuwangi', '089777666', 'moko@gmail.com', 's1'),
('676763', 'firdausillah', '++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++2.jpg', '2017-09-26', 'jember', '14', 'doddy@gmail.com', 's2');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `jurusan`) VALUES
(4, 'Akuntansi'),
(5, 'Multimedia'),
(6, 'Keperawatan');

-- --------------------------------------------------------

--
-- Table structure for table `kalender`
--

CREATE TABLE IF NOT EXISTS `kalender` (
`id` int(11) NOT NULL,
  `tahun` int(5) NOT NULL,
  `file_kalender` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kalender`
--

INSERT INTO `kalender` (`id`, `tahun`, `file_kalender`) VALUES
(3, 2018, 'kalender_akademik_2018-2019.pdf');

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
('A', 'X', 1, 4),
('K', 'X', 1, 6),
('M', 'X', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE IF NOT EXISTS `kurikulum` (
`id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `file_kurikulum` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurikulum`
--

INSERT INTO `kurikulum` (`id`, `judul`, `file_kurikulum`) VALUES
(4, 'Kurikulum SMK Puspabangsa', 'STRUKTUR_Perdirjen_07_2018_OK_rev.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
`id_nilai` int(11) NOT NULL,
  `nilai` varchar(100) NOT NULL,
  `nipd` varchar(8) NOT NULL,
  `nuptk` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nilai`, `nipd`, `nuptk`) VALUES
(1, 'Nilai_1111.pdf', '1111', '11222'),
(2, 'Nilai_1112.pdf', '1112', '11222'),
(3, 'Nilai_2222.pdf', '2222', '11222'),
(4, 'Nilai_4354.pdf', '4354', '11222'),
(5, 'Nilai_4444.pdf', '4444', '11222'),
(6, 'Nilai_3333.pdf', '3333', '11222'),
(7, 'Nilai_5555.pdf', '5555', '11222'),
(8, 'Nilai_5578.pdf', '5578', '11222'),
(9, 'Nilai_7678.pdf', '7678', '11222'),
(10, 'Nilai_9898.pdf', '9898', '11222');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul_pengumuman`, `isi`, `tanggal`) VALUES
(4, 'Perekrutan Kerja', '<p>Mohon Alumni Jurusan Administrasi Perkantoran Lulusan tahun 2017, lulusan tahun 2018 yang belum bekerja untuk datang pada :</p>\r\n\r\n<p>Hari : Kamis, Tanggal 9 Agustus 2018<br />\r\nTempat : Aula SMK Puspabangsa 2<br />\r\nAcara : Sosialisasi Perekrutan PJB anak Perusahaan PLN</p>\r\n\r\n<p>Karena sangat penting mohon datang tepat waktu.</p>\r\n', '0000-00-00'),
(5, 'Tes Bahasa Inggris', '<p>&nbsp;</p>\r\n\r\n<p>Diberitahukan Kpd. Seluruh siswa kls XII diwajibkan hadir pd<strong>&nbsp;tgl.24 Feb 2018</strong>. U/ mengikuti Test Bhs Inggris.<br />\r\n1.&nbsp;<strong>Gel. 1 (07.00-09.30) :</strong><br />\r\nXII APK 1 s.d 5, XII AK 1 s.d 5, XII APH 1 s.d 2, XII BC 1.<br />\r\n<strong>2. Gel. 2 (09.30-12.00) :</strong><br />\r\nXII AK 6, XII TKJ 1 s.d 2, XII RPL 1 s.d 2, XII DKV 1 s.d 2, XII MM 1 s.d 2, XII PBR 1 s.d 3, XII BC 2<br />\r\n<br />\r\nRuang yg digunakan<strong>&nbsp;Blok C &amp; F</strong><br />\r\nMengenakan &quot;<strong>Seragam Batik Sekolah</strong>&quot;<br />\r\n&nbsp;</p>\r\n', '0000-00-00'),
(6, 'Imunisasi Difteri', '<p>Imunisasi ORI (Difteri) untuk Siswa SMK Puspa Bangsa&nbsp;diadakan pada&nbsp;</p>\r\n\r\n<p>Tanggal 22 Februari 2018 untuk Kelas X</p>\r\n\r\n<p>Tanggal 23 Februari 2018 untuk Kelas XII</p>\r\n\r\n<p>Tanggal 26 Februari 2018 untuk Kelas XI</p>\r\n', '0000-00-00');

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
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nipd`, `nama`, `gambar`, `tgl_lahir`, `kelamin`, `agama`, `alamat`, `no_hp`, `ayah`, `ibu`, `kd_kelas`) VALUES
('1111', 'Hasanah Ulaili', '299_1.jpg', '1999-06-18', 'perempuan', 'Islam', 'Jember', '08566655543', 'Ai', 'Ana', 'A'),
('1112', 'Fitaloka Aristatik M', 'aldila_devy_agustine.jpg', '2000-06-19', 'laki-laki', 'Islam', 'Jember', '09876543234', 'Aleho', 'Tukini', 'A'),
('2222', 'Alaya Nillo', '299_3.jpg', '1999-06-06', 'perempuan', 'Islam', 'jember', '08766544257', 'Niko', 'Ita', 'A'),
('3333', 'Firdaus Ababb', 'a_muzaki_bastomi.jpg', '1999-06-12', 'laki-laki', 'Islam', 'jember', '2345678765', 'Ibra', 'Iliyin', 'M'),
('4354', 'Siti Jamilah', 'agustina_eka_d.jpg', '2000-06-15', 'perempuan', 'Islam', 'jember', '4567854567', 'tito', 'tita', 'A'),
('4444', 'Surya Bima Putra', 'abdillah_fakih3.jpg', '2000-06-19', 'laki-laki', 'Islam', 'Jember', '087444555345', 'Paijo', 'Lastri', 'A'),
('5555', 'Alaino Pratama', 'abdul_aziz_a.jpg', '2000-06-22', 'laki-laki', 'Islam', 'Jember', '098654323456', 'Tamin', 'Tini', 'M'),
('5578', 'Asti Rahayu', 'anastasya_kusumo_retno.jpg', '2019-06-27', 'perempuan', 'Islam', 'banyuwangi', '345674567767', 'Ponijan', 'Poniyah', 'K'),
('7678', 'Lala Linaidah', 'alvin_nurun.jpg', '2000-06-03', 'laki-laki', 'Islam', 'Jember', '08766677754', 'Bimo', 'binda', 'K'),
('9898', 'Aldimas ', 'aditya_ruswandi.jpg', '2001-06-29', 'laki-laki', 'Islam', 'banyuwangi', '4567654345', 'Paijo', 'ilmi', 'K');

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
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `gambar`, `username`, `password`, `level`, `status`) VALUES
(31, '++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++6.jpg', 'adminn', 'adminn', 'siswa', 'aktif'),
(36, '++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++2.jpg', '676763', '2017-09-26', 'wali_kelas', 'aktif'),
(37, '299_1.jpg', '1111', '1999-06-18', 'siswa', 'aktif'),
(38, '299_3.jpg', '2222', '1999-06-06', 'siswa', 'aktif'),
(39, 'a_muzaki_bastomi.jpg', '3333', '1999-06-12', 'siswa', 'aktif'),
(40, 'abdillah_fakih3.jpg', '4444', '2000-06-19', 'siswa', 'aktif'),
(41, 'abdul_aziz_a.jpg', '5555', '2000-06-22', 'siswa', 'aktif'),
(42, 'aldila_devy_agustine.jpg', '1112', '2000-06-19', 'siswa', 'aktif'),
(43, 'agustina_eka_d.jpg', '4354', '2000-06-15', 'siswa', 'aktif'),
(44, 'anastasya_kusumo_retno.jpg', '5578', '2019-06-27', 'siswa', 'aktif'),
(45, 'alvin_nurun.jpg', '7678', '2000-06-03', 'siswa', 'aktif'),
(46, 'aditya_ruswandi.jpg', '9898', '2001-06-29', 'siswa', 'aktif'),
(47, 'kepala.jpg', '11222', '1983-06-27', 'wali_kelas', 'aktif'),
(48, 'guru1.jpg', '11333', '1988-04-27', 'wali_kelas', 'aktif'),
(49, 'guru2.jpg', '11444', '1991-01-01', 'wali_kelas', 'aktif'),
(50, 'guru31.jpg', '11555', '1992-12-12', 'wali_kelas', 'aktif'),
(51, 'guru4.jpg', '11666', '1991-10-10', 'wali_kelas', 'aktif'),
(52, 'guru5.jpg', '11777', '1992-12-12', 'wali_kelas', 'aktif'),
(53, 'guru6.jpg', '11888', '1989-12-13', 'wali_kelas', 'aktif');

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
-- Indexes for table `kalender`
--
ALTER TABLE `kalender`
 ADD PRIMARY KEY (`id`);

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
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
MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kalender`
--
ALTER TABLE `kalender`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kurikulum`
--
ALTER TABLE `kurikulum`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
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
