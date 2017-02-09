-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Nov 2016 pada 01.52
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_identitas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_guru`
--

CREATE TABLE IF NOT EXISTS `tabel_guru` (
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `mapel` varchar(255) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_guru`
--

INSERT INTO `tabel_guru` (`nip`, `nama`, `mapel`, `no_telp`, `alamat`, `kode`, `username`, `password`) VALUES
('1234567899876321', 'Choirul Huda S.Kom', 'produktif_kj,produktif_soj,produktif_jn 	', '2147483647 	', 'kedawug 	', 'guru', 'irul', '6d99e97c819308b369ed8e2df6d3aa9d');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_mapel`
--

CREATE TABLE IF NOT EXISTS `tabel_mapel` (
  `id` int(10) NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `guru` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_mapel`
--

INSERT INTO `tabel_mapel` (`id`, `mapel`, `guru`) VALUES
(1, 'produktif_kj', 'Choirul Huda S.Kom'),
(2, 'produktif_jn', ''),
(3, 'produktif_soj', 'Choirul Huda S.Kom'),
(4, 'wajib_mat', ''),
(5, 'wajib_bi', ''),
(6, 'wajib_bing', ''),
(7, 'mulok_bd', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_nilai`
--

CREATE TABLE IF NOT EXISTS `tabel_nilai` (
  `nis` varchar(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `produktif_kj` int(3) NOT NULL,
  `produktif_soj` int(3) NOT NULL,
  `produktif_jn` int(3) NOT NULL,
  `wajib_mat` int(3) NOT NULL,
  `wajib_bi` int(3) NOT NULL,
  `wajib_bing` int(3) NOT NULL,
  `mulok_bd` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_nilai`
--

INSERT INTO `tabel_nilai` (`nis`, `nama`, `kelas`, `produktif_kj`, `produktif_soj`, `produktif_jn`, `wajib_mat`, `wajib_bi`, `wajib_bing`, `mulok_bd`) VALUES
('18381173064', 'Annisa Yurlinda Utomo', 'XII TKJ B', 100, 0, 0, 0, 0, 0, 0),
('19351270064', 'Widya Wulansari', 'XII TKJ B', 60, 0, 0, 0, 0, 0, 0),
('19391274064', 'Yulia Devi Ramayanti', 'XII TKJ B', 90, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_siswa`
--

CREATE TABLE IF NOT EXISTS `tabel_siswa` (
  `nis` varchar(225) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_absen` int(255) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_siswa`
--

INSERT INTO `tabel_siswa` (`nis`, `nama`, `no_absen`, `tgl_lahir`, `tempat_lahir`, `agama`, `alamat`, `kode`, `kelas`) VALUES
('18381173064', 'Annisa Yurlinda Utomo', 4, '08 Juli 1999', 'Kendal', 'Islam', 'Blambangan', 'siswa', 'XII TKJ B'),
('19351270064', 'Widya Wulansari', 27, '20 agustus 1999', 'Bangkalan', 'Islam', 'Patal', 'siswa', 'XII TKJ B'),
('19391274064', 'Yulia Devi Ramayanti', 29, '03 Oktober 1998', 'Malang', 'Islam', 'Gondang', 'siswa', 'XII TKJ B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_guru`
--
ALTER TABLE `tabel_guru`
 ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tabel_mapel`
--
ALTER TABLE `tabel_mapel`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_nilai`
--
ALTER TABLE `tabel_nilai`
 ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
 ADD PRIMARY KEY (`nis`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
