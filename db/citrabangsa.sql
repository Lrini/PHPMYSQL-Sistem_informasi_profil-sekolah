-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2016 at 03:11 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `citrabangsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(23) NOT NULL,
  `Nam_admin` varchar(8) NOT NULL,
  `admin` varchar(8) DEFAULT NULL,
  `pass` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `Nam_admin`, `admin`, `pass`) VALUES
(1, 'iwan', 'iwan', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `alumny`
--

CREATE TABLE IF NOT EXISTS `alumny` (
  `id_alumny` int(23) NOT NULL AUTO_INCREMENT,
  `nama_alumny` varchar(26) NOT NULL,
  `nama_sekolah` varchar(40) NOT NULL,
  `alamat` text,
  `Tahun` int(8) NOT NULL,
  PRIMARY KEY (`id_alumny`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `alumny`
--

INSERT INTO `alumny` (`id_alumny`, `nama_alumny`, `nama_sekolah`, `alamat`, `Tahun`) VALUES
(2, 'Abhie Mahatama Manafe', 'SD Kristen Citra Bangsa', '<p>\r\n	Damai</p>\r\n<p>\r\n	&nbsp;</p>\r\n', 2010),
(3, 'ABIGAIL SAMUELA DAMI', 'SD Kristen Citra Bangsa', '<p>\r\n	Aquarius</p>\r\n', 2010),
(4, 'Abraham P. Simamora', 'SD Kristen Citra Bangsa', '<p>\r\n	Pemuda</p>\r\n', 2010),
(5, 'Abraham V. Liyanto ', 'SD Kristen Citra Bangsa', '<p>\r\n	Kuanino</p>\r\n', 2010),
(6, 'Adam R. I. Ledoh ', 'SD Kristen Citra Bangsa', '<p>\r\n	Alfa Omega</p>\r\n', 2010),
(7, 'ADERESTA MELKIAS NDOEN', 'SD Kristen Citra Bangsa', '<p>\r\n	Pelita 20</p>\r\n', 2010),
(8, 'ADITYA CHRISTIAN CORNELIS ', 'SD Kristen Citra Bangsa', '<p>\r\n	Anggrek</p>\r\n', 2010),
(9, 'ADOLF RINALDY HALOMON SITO', 'SD Kristen Citra Bangsa', '<p>\r\n	Perintis Kemerdekaan</p>\r\n', 2010),
(10, 'ADRIAN DWI KURNIA FRETES', 'SD Kristen Citra Bangsa', '<p>\r\n	Taebenu</p>\r\n', 2010),
(11, 'Adrian Imanuel Dellu', 'SD Kristen Citra Bangsa', '<p>\r\n	Jln. Cak Doko</p>\r\n', 2010),
(12, 'ADVENT KEYZRA OTANU', 'SD Kristen Citra Bangsa', '<p>\r\n	Bumi II</p>\r\n', 2010),
(13, 'Aeyske Dyah Ayu Putri', 'SD Kristen Citra Bangsa', '<p>\r\n	Amanuban</p>\r\n', 2010),
(14, 'AGNES ANDREANI CARMELITA L', 'SD Kristen Citra Bangsa', '<p>\r\n	Frans Seda</p>\r\n', 2010),
(15, 'Agust Rizal Asraka', 'SD Kristen Citra Bangsa', '<p>\r\n	Baumata Barat</p>\r\n', 2010),
(16, 'AKIRA BERNARD GUNAWAN WIRJ', 'SD Kristen Citra Bangsa', '<p>\r\n	Lalamentik</p>\r\n', 2010),
(17, 'Alan Septheodorus Lada', 'SD Kristen Citra Bangsa', '<p>\r\n	Sitarda</p>\r\n', 2010),
(18, 'Albertino R. Madi', 'SD Kristen Citra Bangsa', '<p>\r\n	Ade Irma</p>\r\n', 2010),
(19, 'Aldrian Jack Lede', 'SD Kristen Citra Bangsa', '<p>\r\n	Asam</p>\r\n', 2010),
(20, 'ALDRITZ SATRIA A. PUTRA DA', 'SD Kristen Citra Bangsa', '<p>\r\n	Hati Mulia III</p>\r\n', 2010),
(21, 'ALEGRA CHRISAN HAVANA DETH', 'SD Kristen Citra Bangsa', '<p>\r\n	Perintis Kemerdekaan</p>\r\n', 2010),
(22, 'Alexander E. R. Neonufa', 'SD Kristen Citra Bangsa', '<p>\r\n	H. R. Koroh</p>\r\n', 2010),
(23, 'ALEXANDRA NAWENI ANGELLITA', 'SD Kristen Citra Bangsa', '<p>\r\n	Bumi II</p>\r\n', 2010),
(24, 'ALEXANDRIO VITO PRAWIRA NA', 'SD Kristen Citra Bangsa', '<p>\r\n	Perumnas</p>\r\n', 2010),
(25, 'Alexandro Van Gerrard Nasu', 'SD Kristen Citra Bangsa', '<p>\r\n	Manafe</p>\r\n', 2010),
(26, 'ALFRET T. HANING', 'SD Kristen Citra Bangsa', '<p>\r\n	Pabean</p>\r\n', 2010),
(27, 'Alin Easterlita Cahyadi', 'SD Kristen Citra Bangsa', '<p>\r\n	Lalamentik</p>\r\n', 2010),
(28, 'Alit Mahaputra Manafe', 'SD Kristen Citra Bangsa', '<p>\r\n	Damai</p>\r\n', 2010),
(29, 'Allexandra K. Manu', 'SD Kristen Citra Bangsa', '<p>\r\n	Hati Kudus</p>\r\n', 2010),
(30, 'ALVIN FINA', 'SD Kristen Citra Bangsa', '<p>\r\n	Nangka</p>\r\n', 2010),
(31, 'Alwelson Koroh', 'SD Kristen Citra Bangsa', '<p>\r\n	Tunggal Ika</p>\r\n', 2010),
(32, 'Andi Makson Kase', 'SD Kristen Citra Bangsa', '<p>\r\n	Jln. Dua Lontar</p>\r\n', 2010),
(33, 'Andra R. Nurprayoga ', 'SD Kristen Citra Bangsa', '<p>\r\n	W. J. Lalamentik</p>\r\n', 2010),
(34, 'Anestya A. A. Ludji', 'SD Kristen Citra Bangsa', '<p>\r\n	Eltari</p>\r\n', 2010),
(35, 'ANGEL ALYSIA BIFONI NIAP', 'SD Kristen Citra Bangsa', '<p>\r\n	Adi Sucipto</p>\r\n', 2010),
(36, 'Angelia N. Pangemanan ', 'SD Kristen Citra Bangsa', '<p>\r\n	A. Nisnoni</p>\r\n', 2010),
(37, 'ANGGELO IPDHAN REYNALD MES', 'SD Kristen Citra Bangsa', '<p>\r\n	Perumahan Pitoby</p>\r\n', 2010),
(38, 'Anggra Christian Dethan ', 'SD Kristen Citra Bangsa', '<p>\r\n	Waitama</p>\r\n', 2010),
(39, 'Anna Vryda Bowakh', 'SD Kristen Citra Bangsa', '<p>\r\n	Anggrek</p>\r\n', 2010),
(40, 'Antonius N. T. Silalahi', 'SD Kristen Citra Bangsa', '<p>\r\n	Baumata</p>\r\n', 2010),
(41, 'ANYA VIANI BIRE', 'SD Kristen Citra Bangsa', '<p>\r\n	Kolhua</p>\r\n', 2010),
(42, 'Aprilia C. E. Manafe', 'SD Kristen Citra Bangsa', '<p>\r\n	Kecubung</p>\r\n', 2010),
(43, 'APRILIA CHRISTIN JACOB', 'SD Kristen Citra Bangsa', '<p>\r\n	Murbey</p>\r\n', 2010),
(44, 'APRILIANO THIMOTHY NATUN S', 'SD Kristen Citra Bangsa', '<p>\r\n	RSS OESAPA BLOK A.NO 19</p>\r\n', 2010),
(45, 'Aprilinus D Lopes', 'SD Kristen Citra Bangsa', '<p>\r\n	Dua Lontar</p>\r\n', 2010),
(46, 'Arella C. S. Dima ', 'SD Kristen Citra Bangsa', '<p>\r\n	Amtaran</p>\r\n', 2010),
(47, 'Arinalde Vabia Imanuel Rat', 'SD Kristen Citra Bangsa', '<p>\r\n	Keladi</p>\r\n', 2010),
(48, 'ARLIN BERLIAN JULIA NUNUHI', 'SD Kristen Citra Bangsa', '<p>\r\n	Silawan</p>\r\n', 2010),
(49, 'Arlyciano A. Manoe', 'SD Kristen Citra Bangsa', '<p>\r\n	Adisucipto</p>\r\n', 2010),
(50, 'ARTA NUGRAHA PRASETYA NUBA', 'SD Kristen Citra Bangsa', '<p>\r\n	Bajawa</p>\r\n', 2010);

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id_galeri` int(23) NOT NULL AUTO_INCREMENT,
  `foto` text,
  `nama_foto` text,
  `keterangan` text,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_kegiatan` int(20) NOT NULL,
  PRIMARY KEY (`id_galeri`),
  KEY `id_kegiatan` (`id_kegiatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `foto`, `nama_foto`, `keterangan`, `tanggal`, `id_kegiatan`) VALUES
(24, '20150309_094239.jpg', 'Sekolah Citra Bangsa', NULL, '2016-12-15 13:28:18', 1),
(26, '20150309_094304.jpg', 'Sekolah Citra Bangsa', NULL, '2016-12-15 13:29:48', 1),
(27, '20150309_094707.jpg', 'Sekolah Citra Bangsa', NULL, '2016-12-15 13:30:40', 1),
(29, 'P6021008.JPG', 'Sekolah Citra Bangsa', NULL, '2016-12-15 13:33:01', 2),
(30, 'P6021010.JPG', 'Sekolah Citra Bangsa', NULL, '2016-12-15 13:33:42', 2),
(31, 'P6021013.JPG', 'Sekolah Citra Bangsa', NULL, '2016-12-15 13:34:30', 2),
(32, 'P6021014.JPG', 'Sekolah Citra Bangsa', NULL, '2016-12-15 13:35:11', 2),
(33, 'P6021018.JPG', 'Sekolah Citra Bangsa', NULL, '2016-12-15 13:36:11', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kagiatan`
--

CREATE TABLE IF NOT EXISTS `kagiatan` (
  `id_kegiatan` int(20) NOT NULL AUTO_INCREMENT,
  `nam_keg` varchar(26) NOT NULL,
  PRIMARY KEY (`id_kegiatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kagiatan`
--

INSERT INTO `kagiatan` (`id_kegiatan`, `nam_keg`) VALUES
(1, 'Buku Tabungan Siswa'),
(2, 'Ret-ret Belo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_informasi`
--

CREATE TABLE IF NOT EXISTS `tbl_informasi` (
  `id_informasi` int(23) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isi` text,
  `id_admin` int(23) NOT NULL,
  PRIMARY KEY (`id_informasi`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_informasi`
--

INSERT INTO `tbl_informasi` (`id_informasi`, `judul`, `tanggal`, `isi`, `id_admin`) VALUES
(4, 'Karya Wisata', '2016-12-15 13:07:14', '<p style="text-align: justify;">\r\n	Mengakhiri tahun pelajaran 2016-2017 ini, SD Kristen Citra Bangsa akan mengadakan karya wisata ( bertamasya ) ke obyek wisata di wilayah Bello. Adapun pelaksanaan karya wisata tersebut adalah:</p>\r\n<p style="text-align: justify;">\r\n	Hari/tgl : Jumat, 8 Desember 2016</p>\r\n<p style="text-align: justify;">\r\n	Waktu : 07.00 wita (Kumpul di SD Kristen Citra Bangsa, persiapan dan sembahayang sebelum berangkat)</p>\r\n<p style="text-align: justify;">\r\n	Bagi anak anak kelas I s/d V yang ingin ikut, dipersilakan mendaftar pada wali kelasnya masing-masing, dengan biaya @ Rp. 120.000,-. Sementara untuk kelas VI diharapkan seluruhnya mengikuti kegiatan tamasya ini.</p>\r\n<p style="text-align: justify;">\r\n	Demikian pengumuman ini kami sampaikan untuk maklum</p>\r\n', 1),
(5, 'Kerja Praktek', '2016-12-15 19:12:47', '<p>\r\n	Syalommmmmm</p>\r\n', 1),
(6, 'Foo', '2016-12-15 23:17:58', '<p>\r\n	qweurujn</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_renungan`
--

CREATE TABLE IF NOT EXISTS `tbl_renungan` (
  `id_renungan` int(23) NOT NULL AUTO_INCREMENT,
  `judul_ren` text NOT NULL,
  `tanggal_ren` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isi_ren` text NOT NULL,
  `id_admin` int(23) NOT NULL,
  PRIMARY KEY (`id_renungan`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_renungan`
--

INSERT INTO `tbl_renungan` (`id_renungan`, `judul_ren`, `tanggal_ren`, `isi_ren`, `id_admin`) VALUES
(3, 'Engkau Sungguh Baik', '2016-12-15 13:14:50', '<p>\r\n	Bacaan: <a class="ui-state-default ui-corner-all" href="http://alkitab.mobi/renungan/rh/2016/12/13/#ayat" id="bibletexts-toggle"><em>2 Tawarikh 7:1-10</em></a></p>\r\n<div>\r\n	<p>\r\n		Begitu Salomo mengakhiri syafaatnya, api Tuhan menyambar, membakar kurban persembahan. Tuhan mendengarkan doa umat-Nya. Sontak, umat bersujud dan berseru, &quot;Sebab Ia baik! Bahwasanya untuk selama-lamanya kasih setia-Nya!&quot; Seruan itu bukan ucapan bibir belaka. Itu meluap dari hati yang tergetar karena mengalami kasih Tuhan.</p>\r\n	<p>\r\n		Tengah malam, seorang pria terjaga. Dadanya sangat nyeri, tubuhnya lemas. Sedikit saja ia bergerak, nyerinya menjadi-jadi, tubuhnya makin lemas. Dia tak yakin akan bisa melewati malam itu. Kondisi itu membuat pria tadi melihat hidupnya lebih benderang. Betapa tahun-tahun yang ia hidupi bersama keluarganya adalah tahun-tahun penuh rahmat, yang bukan haknya, tetapi Tuhan menganugerahkan kepadanya. Hatinya tergetar. Dengan penuh kepasrahan, dipanjatkannya syukur sepenuh jiwa. Dan, ajaib! Nyerinya lenyap, tubuhnya pulih. Paginya, ia bangun, dan bekerja seperti biasa.</p>\r\n	<p>\r\n		Lama sesudah peristiwa itu, dari radio mobil kantor, didengarnya sebuah nyanyian. &quot;Bapa, Engkau sungguh baik. Kasih-Mu melimpah di hidupku...&quot; Lagu itu sudah sering didengarnya. Tetapi kini, lagu itu baginya sangat berbeda. Ia begitu terharu. Dengan suara bergetar, ia senandungkan lagu itu perlahan. Tiba-tiba, dadanya serasa penuh. Ia menahan dirinya dari tersedan. Tetapi, tak terbendung, air matanya merebak. Di bawah tatapan keheranan sopir yang mengantarnya, air mata syukur bergulir di kedua pipinya. &quot;Bapa, Engkau sungguh baik...&quot; --EE/Renungan Harian</p>\r\n</div>\r\n<p>\r\n	* * *<br />\r\n	ATAS HAL-HAL YANG BAIK, SEDIKIT PUN KITA TAK PERNAH BERHAK.<br />\r\n	NAMUN, TUHAN MENGANUGERAHKANNYA PADA KITA.</p>\r\n<p>\r\n	* * *</p>\r\n', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_ibfk_1` FOREIGN KEY (`id_kegiatan`) REFERENCES `kagiatan` (`id_kegiatan`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  ADD CONSTRAINT `tbl_informasi_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_renungan`
--
ALTER TABLE `tbl_renungan`
  ADD CONSTRAINT `tbl_renungan_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE;
