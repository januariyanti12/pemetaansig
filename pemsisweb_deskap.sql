-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 03:28 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemsisweb_deskap`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kb`
--

CREATE TABLE `jenis_kb` (
  `id_jenis_kb` int(50) NOT NULL,
  `nama_kb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kb`
--

INSERT INTO `jenis_kb` (`id_jenis_kb`, `nama_kb`) VALUES
(1, 'KB Implan'),
(2, 'KB Suntik'),
(3, 'KB Pil');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_ks`
--

CREATE TABLE `jenis_ks` (
  `id_jenis_ks` int(50) NOT NULL,
  `nama_ks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_ks`
--

INSERT INTO `jenis_ks` (`id_jenis_ks`, `nama_ks`) VALUES
(1, 'Keluarga Pra Sejahtera'),
(2, 'Keluarga Sejahtera I'),
(3, 'Keluarga Sejahtera Tahap II'),
(4, 'Keluarga Sejahtera Tahap III'),
(5, 'Keluarga Sejahtera Tahap III Plus');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_rt`
--

CREATE TABLE `jenis_rt` (
  `id_jenis_rt` int(50) NOT NULL,
  `rt_rw` varchar(50) NOT NULL,
  `kelurahan_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_rt`
--

INSERT INTO `jenis_rt` (`id_jenis_rt`, `rt_rw`, `kelurahan_id`) VALUES
(1, 'RT001 RW001', 1),
(2, 'RT004 RW001', 1),
(3, 'RT008 RW001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kabupaten` int(50) NOT NULL,
  `nama_kabupaten` varchar(50) NOT NULL,
  `provinsi_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id_kabupaten`, `nama_kabupaten`, `provinsi_id`) VALUES
(1, 'Kubu Raya', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(50) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL,
  `kabupaten_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`, `kabupaten_id`) VALUES
(1, 'Sungai Raya', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id_kelurahan` int(50) NOT NULL,
  `nama_kelurahan` varchar(50) NOT NULL,
  `kecamatan_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id_kelurahan`, `nama_kelurahan`, `kecamatan_id`) VALUES
(1, 'Desa Kapur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_penduduk` varchar(100) CHARACTER SET utf8 NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_penduduk`, `lat`, `lng`) VALUES
(1, 'Nurdiana', -0.059810, 109.377937),
(2, 'Eggy Ramadhan A.', -0.061050, 109.379662),
(3, 'Aisyah', -0.059580, 109.378273),
(4, 'Mariyam', -0.059650, 109.378181),
(5, 'Agustina', -0.059630, 109.378159),
(6, 'Nurjanah', -0.059790, 109.377953),
(7, 'Widiarti', -0.059530, 109.378357),
(8, 'Yeni Ristianti, S.Pd', -0.060850, 109.379967),
(9, 'Dinda Trisiwi', -0.059620, 109.378197),
(10, 'Merry Andriani', -0.059360, 109.378632),
(11, 'Desi Nurmala S.D', -0.058640, 109.379700),
(12, 'Eni Noviani', -0.058690, 109.379608),
(13, 'Sariyati', -0.062020, 109.379868),
(14, 'Mistinah', -0.061950, 109.379936),
(15, 'Yanti', -0.061950, 109.379951),
(16, 'Nurhayati', -0.061940, 109.379967),
(17, 'Sartini', -0.061930, 109.379982),
(18, 'Sanima', -0.061860, 109.380081),
(19, 'Sumarni', -0.061290, 109.379593),
(20, 'Rohimah', -0.061180, 109.379761),
(21, 'Maryam', -0.060930, 109.380119),
(22, 'Siti Hawa', -0.060680, 109.380493),
(23, 'Simah', -0.060460, 109.380798),
(24, 'Anisa', -0.060420, 109.380829),
(25, 'Anisa', -0.060340, 109.380943),
(26, 'Sintiana', -0.060290, 109.381020),
(27, 'Ramlah', -0.062250, 109.380180),
(28, 'Natalia', -0.062100, 109.380409),
(29, 'Ana Mariana', -0.061940, 109.380600),
(30, 'Ana Mariana', -0.061940, 109.380600),
(31, 'Rini Sartika Suri', -0.062150, 109.379570),
(32, 'Farida', -0.062290, 109.379829),
(33, 'Megawati', -0.062530, 109.379929),
(34, 'Surtina', -0.061730, 109.381233),
(35, 'Yenni Febriyanti', -0.061100, 109.381783),
(36, 'Megawati', -0.062700, 109.380188),
(37, 'Ria Harianti', -0.062810, 109.380379),
(38, 'Evi Rahmawati', -0.062210, 109.380562),
(39, 'Iis Naini', -0.062030, 109.380768),
(40, 'Misdah', -0.061760, 109.381157),
(41, 'Parmiana', -0.060970, 109.382294),
(42, 'Rahma Hera, S.Pd', -0.060810, 109.382217),
(43, 'Riski Rahayu', -0.060730, 109.382271),
(44, 'Fitriah', -0.060700, 109.382309),
(45, 'Marsiti', -0.060620, 109.382408),
(46, 'Syarifah Dewi Hanny', -0.060520, 109.382584),
(47, 'Diana', -0.060210, 109.383018),
(48, 'Amelia Melida', -0.062810, 109.380173),
(49, 'Kiki Fitria Sari, S.Pd', -0.062920, 109.380257),
(50, 'Livia', -0.062900, 109.380470);

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int(50) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `id_jenis_rt` int(20) NOT NULL,
  `id_jenis_kb` int(11) NOT NULL,
  `id_jenis_ks` int(11) NOT NULL,
  `nomor_kk` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nama_kb` varchar(100) NOT NULL,
  `rt_rw` varchar(100) NOT NULL,
  `nama_ks` varchar(100) NOT NULL,
  `latitude` float(9,6) NOT NULL,
  `longitude` float(9,6) NOT NULL,
  `polygon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id_penduduk`, `id_lokasi`, `id_jenis_rt`, `id_jenis_kb`, `id_jenis_ks`, `nomor_kk`, `nik`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `nama_kb`, `rt_rw`, `nama_ks`, `latitude`, `longitude`, `polygon`) VALUES
(1, 1, 1, 3, 5, '6112012206082622', '6112015412750004', 'Nurdiana', 'Perempuan', '1975-12-14', 'Gg.H.Gani', 'KB Pil', 'RT 001 RW 001', 'Keluarga Sejahtera III Plus', 0.000000, 0.000000, ''),
(2, 2, 1, 3, 5, '6112011901170011', '6104175402950004', 'Eggy Ramadhan A.', 'Perempuan', '1995-02-14', 'Komplek Vila Kurnia', 'KB Pil', 'RT 001 RW 001', 'Keluarga Sejahtera III Plus', 0.000000, 0.000000, ''),
(3, 3, 1, 3, 3, '6112010810200019', '6112014907920005', 'Aisyah', 'Perempuan', '1992-07-09', 'Gg. H. Gani', 'KB Pil', 'RT 001 RW 001', 'Keluarga Sejahtera II', -0.059650, 109.378159, ''),
(4, 4, 1, 3, 4, '6112012104170006', '6112094608850013', 'Mariyam', 'Perempuan', '1985-08-06', 'Gg. H.gani', 'KB Pil', 'RT 001 RW 001', 'Keluarga Sejahtera III', 0.000000, 0.000000, ''),
(5, 5, 1, 3, 5, '6112012907150021', '6112010507760021', 'Agustina', 'Perempuan', '1976-11-30', 'Gg. H.gani', 'KB Pil', 'RT 001 RW 001', 'Keluarga Sejahtera III Plus', 0.000000, 0.000000, ''),
(6, 6, 1, 3, 3, '6102070311100007', '6102077009860001', 'Nurjanah', 'Perempuan', '1986-09-30', 'Gg. H. gani', 'KB Pil', 'RT 001 RW 001', 'Keluarga Sejahtera II', -0.059450, 109.378487, ''),
(7, 7, 1, 2, 5, '6112012402140015', '6112015008870007', 'Widiarti', 'Perempuan', '1987-08-10', 'Gg.H.Gani', 'KB Suntik', 'RT 001 RW 001', 'Keluarga Sejahtera III Plus', 0.000000, 0.000000, ''),
(8, 8, 1, 2, 5, '6112010804150017', '6103205512890005', 'Yeni Ristianti, S.Pd', 'Perempuan', '1989-12-15', 'Villa Kurnia', 'KB Suntik', 'RT 001 RW 001', 'Keluarga Sejahtera III Plus', 0.000000, 0.000000, ''),
(9, 9, 1, 2, 5, '6112010512180018', '6112016702970005', 'Dinda Trisiwi', 'Perempuan', '1997-02-02', 'Gg. H.Gani', 'KB Suntik', 'RT 001 RW 001', 'Keluarga Sejahtera III Plus', 0.000000, 0.000000, ''),
(10, 10, 1, 3, 5, '6112012005150005', '6112015203890013', 'Merry Andriani', 'Perempuan', '1988-05-12', 'Gg. H.Gani', 'KB Pil', 'RT 001 RW 001', 'Keluarga Sejahtera III Plus', 0.000000, 0.000000, ''),
(11, 11, 1, 3, 4, '6171021809130004', '6112015107910011', 'Desi Nurmala S.D', 'Perempuan', '1991-07-11', 'Gg. H.Gani', 'KB Pil', 'RT 001 RW 001', 'Keluarga Sejahtera III', 0.000000, 0.000000, ''),
(12, 12, 1, 3, 5, '6112012901140010', '6112015708880013', 'Eni Noviani', 'Perempuan', '1988-08-17', 'Gg. H.Gani', 'KB Pil', 'RT 001 RW 001', 'Keluarga Sejahtera III Plus', 0.000000, 0.000000, ''),
(13, 13, 3, 3, 5, '6112010508200032', '6112094503980010', 'Sariyati', 'Perempuan', '1998-03-05', 'Gg. H.Aziz', 'KB Pil', 'RT 008 RW 001', 'Keluarga Sejahtera III Plus', 0.000000, 0.000000, ''),
(14, 14, 3, 3, 4, '6112011709100012', '6112015402900010', 'Mistinah', 'Perempuan', '1980-02-14', 'Gg.H.Aziz', 'KB Pil', 'RT 008 RW 001', 'Keluarga Sejahtera III', 0.000000, 0.000000, ''),
(15, 15, 3, 3, 3, '6112011102100103', '6112014804780011', 'Yanti', 'Perempuan', '1978-04-08', 'Gg. H.Aziz', 'KB Pil', 'RT 008 RW 001', 'Keluarga Sejahtera II', -0.061210, 109.379402, ''),
(16, 16, 3, 3, 4, '6112012904200001', '6112015906950009', 'Nurhayati', 'Perempuan', '1987-08-21', 'Gg. H.Aziz', 'KB Pil', 'RT 008 RW 001', 'Keluarga Sejahtera III', 0.000000, 0.000000, ''),
(17, 17, 3, 3, 3, '6112012112090055', '6112014305760012', 'Sartini', 'Perempuan', '1976-05-03', 'Gg. H.Aziz', 'KB Pil', 'RT 008 RW 001', 'Keluarga Sejahtera II', -0.061100, 109.379562, ''),
(18, 18, 3, 3, 4, '6112010809090085', '6112015205800012', 'Sanima', 'Perempuan', '1980-05-12', 'Gg. H.Aziz', 'KB Pil', 'RT 008 RW 001', 'Keluarga Sejahtera III', 0.000000, 0.000000, ''),
(19, 19, 3, 2, 5, '6112012511090125', '6112015802800002', 'Sumarni', 'Perempuan', '1980-02-18', 'Gg. H.Sani', 'KB Suntik', 'RT 008 RW 001', 'Keluarga Sejahtera III Plus', 0.000000, 0.000000, ''),
(20, 20, 3, 3, 4, '6112013004120038', '6112015201910016', 'Rohimah', 'Perempuan', '1981-01-12', 'Gg. H.Sani', 'KB Pil', 'RT 008 RW 001', 'Keluarga Sejahtera III', 0.000000, 0.000000, ''),
(21, 21, 3, 3, 5, '6112012306140007', '6112014808940002', 'Maryam', 'Perempuan', '1994-08-04', 'Gg. H.Sani', 'KB Pil', 'RT 008 RW 001', 'Keluarga Sejahtera III Plus', 0.000000, 0.000000, ''),
(22, 22, 3, 3, 4, '6112010305110035', '6112014606830019', 'Siti Hawa', 'Perempuan', '1983-06-06', 'Gg. H.Sani', 'KB Pil', 'RT 008 RW 001', 'Keluarga Sejahtera III', 0.000000, 0.000000, ''),
(23, 23, 3, 2, 4, '6112012501110033', '6112015005830018', 'Simah', 'Perempuan', '1983-05-10', 'Gg. H.Sani', 'KB Suntik', 'RT 008 RW 001 ', 'Keluarga Sejahtera III', 0.000000, 0.000000, ''),
(24, 24, 3, 3, 5, '6112012705110027', '6112014710830021', 'Anisa', 'Perempuan', '1983-10-07', 'Gg. H.Sani', 'KB Pil', 'RT 008 RW 001', 'Keluarga Sejahtera III Plus', 0.000000, 0.000000, ''),
(25, 25, 3, 1, 4, '6112011910120023', '6171024511920004', 'Anisa', 'Pontianak', '1992-11-05', 'Gg. H.Sani', 'KB Implan', 'RT 008 RW 001', 'Keluarga Sejahtera III', 0.000000, 0.000000, ''),
(26, 26, 3, 1, 3, '6112010801110033', '6112016510850011', 'Sintiana', 'Perempuan', '1985-10-25', 'Gg. H.Sani', 'KB Implan', 'RT 008 RW 001', 'Keluarga Sejahtera II', -0.060570, 109.380379, ''),
(27, 27, 2, 3, 5, '6112011201100066', '6112014608780014', 'Ramlah', 'Perempuan', '1985-10-20', 'Gg. Sulaiman', 'KB Pil', 'RT 004 RW 001', 'Keluarga Sejahtera III Plus', 0.000000, 0.000000, '');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nm_pengguna` varchar(20) NOT NULL,
  `kt_sandi` varchar(150) NOT NULL,
  `level` enum('Admin','User') NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nm_pengguna`, `kt_sandi`, `level`) VALUES
(1, 'admin', '$2y$10$oNX.X8jgLhNclHBeI8ytT.1vODlml8.AN1Ieb.rSIChhCa1e7cS0S', 'Admin'),
(2, 'user', '$2y$10$oNX.X8jgLhNclHBeI8ytT.1vODlml8.AN1Ieb.rSIChhCa1e7cS0S', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna_kb`
--

CREATE TABLE `pengguna_kb` (
  `id_pengguna_kb` int(11) NOT NULL,
  `nomor_kk` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kb` varchar(50) NOT NULL,
  `jenis_rt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna_kb`
--

INSERT INTO `pengguna_kb` (`id_pengguna_kb`, `nomor_kk`, `nik`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `jenis_kb`, `jenis_rt`) VALUES
(1, '6112012206082622', '6112015412750004', 'Nurdiana', 'Perempuan', '1975-12-14', 'KB Pil', 'RT 001 RW 001'),
(2, '6112011901170011', '6104175402950004', 'Eggy Ramadhan A.', 'Perempuan', '1995-02-14', 'KB Pil', 'RT 001 RW 001'),
(3, '6112010810200019', '6112014907920005', 'Aisyah', 'Perempuan', '1992-07-09', 'KB Pil', 'RT 001 RW 001'),
(4, '6112012104170006', '6112094608850013', 'Mariyam', 'Perempuan', '1985-08-06', 'KB Pil', 'RT 001 RW 001'),
(5, '6112012907150021', '6112010507760021', 'Agustina', 'Perempuan', '1976-11-30', 'KB Pil', 'RT 001 RW 001'),
(6, '6102070311100007', '6102077009860001', 'Nurjanah', 'Perempuan', '1986-09-30', 'KB Pil', 'RT 001 RW 001'),
(7, '6112012402140015', '6112015008870007', 'Widiarti', 'Perempuan', '1987-08-10', 'KB Suntik', 'RT 001 RW 001'),
(8, '6112010804150017', '6103205512890005', 'Yeni Ristianti, S.Pd', 'Perempuan', '1989-12-15', 'KB Suntik', 'RT 001 RW 001'),
(9, '6112011307200014', '6112016102860008', 'Haini Susanti', 'Perempuan', '1986-02-21', 'KB Pil', 'RT 001 RW 001'),
(10, '6112010512180018', '6112016702970005', 'Dinda Trisiwi', 'Perempuan', '1997-02-02', 'KB Suntik', 'RT 001 RW 001'),
(11, '6171021809130004', '6112015107910011', 'Desi Nurmala S.D', 'Perempuan', '1991-07-11', 'KB Pil', 'RT 001 RW 001'),
(12, '6112012005150005', '6112015203890013', 'Merry Andriani', 'Perempuan', '1988-05-12', 'KB Pil', 'RT 001 RW 001'),
(13, '6112012901140010', '6112015708880013', 'Eni Noviani', 'Perempuan', '1988-08-17', 'KB Pil', 'RT 001 RW 001'),
(14, '6112011201100066', '6112014608780014', 'Ramlah', 'Perempuan', '1985-10-20', 'KB Pil', 'RT 004 RW 001'),
(15, '6112012407120020', '6108106110870001', 'Natalia', 'Perempuan', '1987-10-21', 'KB Suntik', 'RT 004 RW 001'),
(16, '6112010812110055 ', '6112014108850013', 'Ana Mariana', 'Perempuan', '1985-08-01', 'KB Suntik', 'RT 004 RW 001'),
(17, '6112010907190006', '6112016709690005', 'Rini Sartika Suri', 'Perempuan', '1989-09-27', 'KB Suntik', 'RT 004 RW 001'),
(18, '6112012511110042', '6112918362830002', 'Farida', 'Perempuan', '1983-02-23', 'KB Implan', 'RT 004 RW 001'),
(19, '6112012603190028', '6112014809880004', 'Megawati', 'Perempuan', '1988-09-08', 'KB Implan', 'RT 004 RW 001'),
(20, '6112012411100005', '6112016807760006', 'Surtina', 'Perempuan', '1976-07-28', 'KB Pil', 'RT 004 RW 001'),
(21, '6112012608150007', '6112014202890011', 'Yenni Febriyanti', 'Perempuan', '1989-02-02', 'KB Pil', 'RT 004 RW 001'),
(22, '6112013006150010', '6101177006980001', 'Megawati', 'Perempuan', '1988-08-30', 'KB Pil', 'RT 004 RW 001'),
(23, '6112010610090092', '6112014809890009', 'Ria Harianti', 'Perempuan', '1989-09-08', 'KB Pil', 'RT 004 RW 001'),
(24, '6112012906100033', '6112014305920012', 'Evi Rahmawati', 'Perempuan', '1992-05-03', 'KB Suntik', 'RT 004 RW 001'),
(25, '6112010803180003', '6112015810970014', 'Iis Naini', 'Perempuan', '1997-10-18', 'KB Pil', 'RT 004 RW 001'),
(26, '6112010606180007', '6104175404770005', 'Misdah', 'Perempuan', '1977-04-14', 'KB Pil', 'RT 004 RW 001'),
(27, '6112011204170004', '6112015512950013', 'Parmiana', 'Perempuan', '1995-12-15', 'KB Pil', 'RT 004 RW 001'),
(28, '6112010912160013', '3503065203930003', 'Rahma Hera, S.Pd', 'Perempuan', '1993-03-12', 'KB Suntik', 'RT 004 RW 001'),
(29, '6112013108150006', '6112017109940010', 'Riski Rahayu', 'Perempuan', '1994-06-11', 'KB Pil', 'RT 004 RW 001'),
(30, '6112012601120017', '6112015003900007', 'Fitriah', 'Perempuan', '1990-03-10', 'KB Suntik', 'RT 004 RW 001'),
(31, '6112011710090008', '6112016312910003', 'Marsiti', 'Perempuan', '1991-12-23', 'KB Implan', 'RT 004 RW 001'),
(32, '6112011302150017', '6102154506900003', 'Syarifah Dewi Hanny', 'Perempuan', '1990-05-05', 'KB Implan', 'RT 004 RW 001'),
(33, '6112011401110021', '6112016404830016', 'Diana', 'Perempuan', '1983-04-24', 'KB Suntik', 'RT 004 RW 001'),
(34, '6112010610090057', '6112015003840009', 'Amelia Melida', 'Perempuan', '1984-03-10', 'KB Implan', 'RT 004 RW 001'),
(35, '6112011609130018', '6171034501850012', 'Kiki Fitria Sari, S.Pd', 'Perempuan', '1985-01-05', 'KB Pil', 'RT 004 RW 001'),
(36, '6112011406160001', '6112014803980008', 'Livia', 'Perempuan', '1998-03-08', 'KB Pil', 'RT 004 RW 001'),
(37, '6112010508200032', '6112094503980010', 'Sariyati', 'Perempuan', '1998-03-05', 'KB Pil', 'RT 008 RW 001'),
(38, '6112011709100012', '6112015402900010', 'Mistinah', 'Perempuan', '1980-02-14', 'KB Pil', 'RT 008 RW 001'),
(39, '6112011102100103', '6112014804780011', 'Yanti', 'Perempuan', '1978-04-08', 'KB Pil', 'RT 008 RW 001'),
(40, '6112012904200001', '6112015906950009', 'Nurhayati', 'Perempuan', '1987-08-21', 'KB Pil', 'RT 008 RW 001'),
(41, '6112012112090055', '6112014305760012', 'Sartini', 'Perempuan', '1976-05-03', 'KB Pil', 'RT 008 RW 001'),
(42, '6112010809090085', '6112015205800012', 'Sanima', 'Perempuan', '1980-05-12', 'KB Pil', 'RT 008 RW 001'),
(43, '6112012511090125', '6112015802800002', 'Sumarni', 'Perempuan', '1980-02-18', 'KB Suntik', 'RT 008 RW 001'),
(44, '6112013004120038', '6112015201910016', 'Rohimah', 'Perempuan', '1981-01-12', 'KB Pil', 'RT 008 RW 001'),
(45, '6112012306140007', '6112014808940002', 'Maryam', 'Perempuan', '1994-08-04', 'KB Pil', 'RT 008 RW 001'),
(46, '6112010305110035', '6112014606830019', 'Siti Hawa', 'Perempuan', '1983-06-06', 'KB Pil', 'RT 008 RW 001'),
(47, '6112012501110033', '6112015005830018', 'Simah', 'Perempuan', '1983-05-10', 'KB Suntik', 'RT 008 RW 001'),
(48, '6112012705110027', '6112014710830021', 'Anisa', 'Perempuan', '1983-10-07', 'KB Pil', 'RT 008 RW 001'),
(49, '6112011910120023', '6171024511920004', 'Anisa', 'Perempuan', '1992-11-05', 'KB Implan', 'RT 008 RW 001'),
(50, '6112010801110033', '6112016510850011', 'Sintiana', 'Perempuan', '1985-10-25', 'KB Implan', 'RT 008 RW 001');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(50) NOT NULL,
  `nama_provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'Kalimantan Barat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_kb`
--
ALTER TABLE `jenis_kb`
  ADD PRIMARY KEY (`id_jenis_kb`);

--
-- Indexes for table `jenis_ks`
--
ALTER TABLE `jenis_ks`
  ADD PRIMARY KEY (`id_jenis_ks`);

--
-- Indexes for table `jenis_rt`
--
ALTER TABLE `jenis_rt`
  ADD PRIMARY KEY (`id_jenis_rt`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `pengguna_kb`
--
ALTER TABLE `pengguna_kb`
  ADD PRIMARY KEY (`id_pengguna_kb`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_kb`
--
ALTER TABLE `jenis_kb`
  MODIFY `id_jenis_kb` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jenis_ks`
--
ALTER TABLE `jenis_ks`
  MODIFY `id_jenis_ks` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jenis_rt`
--
ALTER TABLE `jenis_rt`
  MODIFY `id_jenis_rt` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kabupaten` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id_kelurahan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id_penduduk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengguna_kb`
--
ALTER TABLE `pengguna_kb`
  MODIFY `id_pengguna_kb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
