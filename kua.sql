-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2021 at 01:57 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kua`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2b$10$zMPPkkkguj21L0MBS7o0IOlIkgMlaYHR0FbQgltFG5JNf.8nxdpQe');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `deskripsi`, `tanggal`) VALUES
(1, 'hello', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe maiores debitis perferendis nihil eveniet, temporibus porro quasi voluptatum velit alias accusamus harum nemo praesentium vel eum corporis laudantium adipisci.', '2021-07-15'),
(2, 'hello', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe maiores debitis perferendis nihil eveniet, temporibus porro quasi voluptatum velit alias accusamus harum nemo praesentium vel eum corporis laudantium adipisci.', '2021-07-15'),
(3, 'hello', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe maiores debitis perferendis nihil eveniet, temporibus porro quasi voluptatum velit alias accusamus harum nemo praesentium vel eum corporis laudantium adipisci.', '2021-07-15'),
(4, 'hello', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe maiores debitis perferendis nihil eveniet, temporibus porro quasi voluptatum velit alias accusamus harum nemo praesentium vel eum corporis laudantium adipisci.', '2021-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id` int(11) NOT NULL,
  `id_pernikahan` int(11) DEFAULT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`id`, `id_pernikahan`, `nama`) VALUES
(23, 4, ''),
(24, 4, ''),
(25, 4, ''),
(26, 4, ''),
(27, 4, ''),
(28, 4, ''),
(29, 4, ''),
(30, 4, ''),
(31, 4, ''),
(32, 4, ''),
(33, 4, ''),
(34, 5, ''),
(35, 5, ''),
(36, 5, ''),
(37, 5, ''),
(38, 5, ''),
(39, 5, ''),
(40, 5, ''),
(41, 5, ''),
(42, 5, ''),
(43, 5, ''),
(44, 5, ''),
(45, 6, ''),
(46, 6, ''),
(47, 6, ''),
(48, 6, ''),
(49, 6, ''),
(50, 6, ''),
(51, 6, ''),
(52, 6, ''),
(53, 6, ''),
(54, 6, ''),
(55, 6, ''),
(56, 7, ''),
(57, 7, ''),
(58, 7, ''),
(59, 7, ''),
(60, 7, ''),
(61, 7, ''),
(62, 7, ''),
(63, 7, ''),
(64, 7, ''),
(65, 7, ''),
(66, 7, ''),
(67, 9, '288389137-n1.pdf'),
(68, 9, '949950183-n3.pdf'),
(69, 9, '1810091507-n5.pdf'),
(70, 9, ''),
(71, 9, ''),
(72, 9, ''),
(73, 9, ''),
(74, 9, ''),
(75, 9, ''),
(76, 9, ''),
(77, 9, ''),
(78, 10, '1607444224-n1.pdf'),
(79, 10, '1190768672-n3.pdf'),
(80, 10, '2052205419-n5.pdf'),
(81, 10, '1650659394-akta_cerai.pdf'),
(82, 10, '1413864308-izin_komandan.pdf'),
(83, 10, '888529967-izin_kedutaan.pdf'),
(84, 10, '1056651528-ktp.pdf'),
(85, 10, '1343907625-kk.pdf'),
(86, 10, '649886135-akta_lahir.pdf'),
(87, 10, '2143619001-foto1.pdf'),
(88, 10, '1902861512-foto2.pdf'),
(89, 11, '1329947504-n1.pdf'),
(90, 11, '592746664-n3.pdf'),
(91, 11, '1954818378-n5.pdf'),
(92, 11, '845744515-akta_cerai.pdf'),
(93, 11, '1651826940-izin_komandan.pdf'),
(94, 11, '49508288-izin_kedutaan.pdf'),
(95, 11, '1742543820-ktp.pdf'),
(96, 11, '1016374409-kk.pdf'),
(97, 11, '139612059-akta_lahir.pdf'),
(98, 11, '527729423-foto1.png'),
(99, 11, '1607126346-foto2.png');

-- --------------------------------------------------------

--
-- Table structure for table `kua`
--

CREATE TABLE `kua` (
  `id` int(11) NOT NULL,
  `kode_kua` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kua`
--

INSERT INTO `kua` (`id`, `kode_kua`, `kota`, `kecamatan`) VALUES
(1, '0045', 'kupang', 'kelapa lima');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` enum('pria','wanita') NOT NULL,
  `kewarganegaraan` enum('WNI','WNA') NOT NULL,
  `umur` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_tlp` varchar(12) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `agama` enum('katolik','kristen','islam','budha','hindu','konghucu') NOT NULL,
  `status` enum('lajang','duda','janda') NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `kewarganegaraan`, `umur`, `email`, `no_tlp`, `pekerjaan`, `alamat`, `agama`, `status`, `foto`) VALUES
(19, '23123213', 'qweqweqwe', 'qwe', '2021-07-02', 'pria', 'WNI', '12', 'reynerneo@gmail.com', '123', 'qweqwew', 'qwewqe', 'katolik', 'lajang', '749356999-foto_suami.png'),
(20, '1', 'andha', 'mof', '2021-07-01', 'pria', 'WNI', '21', 're@gmail', '1111', 'sss', 'asd', 'kristen', 'lajang', '647394069-foto_istri.png'),
(23, '23123213', 'reyner', 'qweqweqe', '2021-06-28', 'pria', 'WNA', '12', 'reynerneo08@gmail.com', '123', 'ewew', 'qwewqe', 'katolik', 'lajang', '1183029091-foto_suami.png'),
(24, '1', 'andha', 'mof', '2021-07-01', 'pria', 'WNI', '21', 're@gmail', '1111', 'sss', 'asd', 'katolik', 'lajang', '1736946756-foto_istri.png');

-- --------------------------------------------------------

--
-- Table structure for table `pernikahan`
--

CREATE TABLE `pernikahan` (
  `id` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `id_kua` int(11) NOT NULL,
  `no_daftar` varchar(255) NOT NULL,
  `id_pasangan` int(11) NOT NULL,
  `tempat_nikah` varchar(255) NOT NULL,
  `tanggal_nikah` date NOT NULL,
  `alamat` text NOT NULL,
  `approve` enum('pending','approved','rejected') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pernikahan`
--

INSERT INTO `pernikahan` (`id`, `id_penduduk`, `id_kua`, `no_daftar`, `id_pasangan`, `tempat_nikah`, `tanggal_nikah`, `alamat`, `approve`) VALUES
(10, 19, 1, '11', 20, 'qwe', '2021-07-08', 'oeba', 'pending'),
(11, 23, 1, '12', 24, 'hotel', '2021-07-02', 'oeba', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `saksi`
--

CREATE TABLE `saksi` (
  `id` int(11) NOT NULL,
  `id_pernikahan` int(11) DEFAULT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saksi`
--

INSERT INTO `saksi` (`id`, `id_pernikahan`, `nik`, `nama`, `umur`, `alamat`) VALUES
(3, 4, '2123123', 'helo', '24', 'oeba'),
(4, 5, '', '', '', ''),
(5, 6, '', '', '', ''),
(6, 7, '', '', '', ''),
(7, 9, '2123123', 'helo', '24', 'oeba'),
(8, 10, '2123123', 'helo', '24', 'oeba'),
(9, 11, '2123123', 'helo', '24', 'oeba');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `nama`, `email`, `deskripsi`) VALUES
(1, 'reyner', 'reynerneo08@gmail.com', 'hello this is me, back with me again'),
(2, 'andha', 'andha@gmail.com', 'hai i\'m sandra, u can call me andha');

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
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kua`
--
ALTER TABLE `kua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pernikahan`
--
ALTER TABLE `pernikahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saksi`
--
ALTER TABLE `saksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `kua`
--
ALTER TABLE `kua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pernikahan`
--
ALTER TABLE `pernikahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `saksi`
--
ALTER TABLE `saksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
