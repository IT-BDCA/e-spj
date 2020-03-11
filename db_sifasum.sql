-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2019 at 12:02 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sifasum`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fasilitas`
--

CREATE TABLE `tbl_fasilitas` (
  `id_fasilitas` int(5) NOT NULL,
  `id_jnsfasilitas` int(5) NOT NULL,
  `id_kelurahan` int(11) NOT NULL,
  `id_users` int(5) NOT NULL,
  `nm_fasilitas` varchar(120) NOT NULL,
  `lk_fasilitas` text NOT NULL,
  `tgl_posting` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lo_fasilitas` varchar(300) NOT NULL,
  `la_fasilitas` varchar(300) NOT NULL,
  `gb_fasilitas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fasilitas`
--

INSERT INTO `tbl_fasilitas` (`id_fasilitas`, `id_jnsfasilitas`, `id_kelurahan`, `id_users`, `nm_fasilitas`, `lk_fasilitas`, `tgl_posting`, `lo_fasilitas`, `la_fasilitas`, `gb_fasilitas`) VALUES
(1, 1, 6, 0, 'Masjid Al-Hidayah', 'Jalan Raya Muara Teladan, Muara Teladan, Sekayu, Kabupaten Musi Banyuasin, Sumatera Selatan', '2019-07-13 00:00:00', '', '', ''),
(2, 3, 4, 1, 'Rumah Waras Mawar Melati', 'rumah-waras-mawar-melati', '2019-07-25 13:43:53', '-32323212', '-21212323212', '452a2e73497bd1ac066b2ee59f2be11f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jnsfasilitas`
--

CREATE TABLE `tbl_jnsfasilitas` (
  `id_jnsfasilitas` int(5) NOT NULL,
  `nm_jnsfasilitas` varchar(50) NOT NULL,
  `map_jnsfasilitas` text NOT NULL,
  `lk_jnsfasilitas` varchar(150) NOT NULL,
  `st_jnsfasilitas` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jnsfasilitas`
--

INSERT INTO `tbl_jnsfasilitas` (`id_jnsfasilitas`, `nm_jnsfasilitas`, `map_jnsfasilitas`, `lk_jnsfasilitas`, `st_jnsfasilitas`) VALUES
(1, 'Masjid', '&lt;style&gt;.embed-container {position: relative; padding-bottom: 80%; height: 0; max-width: 100%;} .embed-container iframe, .embed-container object, .embed-container iframe{position: absolute; top: 0; left: 0; width: 100%; height: 100%;} small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}&lt;/style&gt;&lt;div class=&quot;embed-container&quot;&gt;&lt;iframe width=&quot;100%&quot; height=&quot;400&quot; frameborder=&quot;0&quot; scrolling=&quot;no&quot; marginheight=&quot;0&quot; marginwidth=&quot;0&quot; title=&quot;Koordinat Masjid&quot; src=&quot;//www.arcgis.com/apps/Embed/index.html?webmap=d48438ac10744ca193736b589e8f3031&amp;extent=103.1532,-3.1992,104.5897,-2.453&amp;home=true&amp;zoom=true&amp;previewImage=false&amp;scale=true&amp;legendlayers=true&amp;disable_scroll=true&amp;theme=light&quot;&gt;&lt;/iframe&gt;&lt;/div&gt;', 'masjid', 'Y'),
(2, 'Penginapan', '', 'penginapan', 'Y'),
(3, 'Rumah Sakit', '', 'rumah-sakit', 'Y'),
(4, 'Kantor Polisi', '', 'kantor-polisi', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelurahan`
--

CREATE TABLE `tbl_kelurahan` (
  `id_kelurahan` int(5) NOT NULL,
  `nm_kelurahan` varchar(50) NOT NULL,
  `lk_kelurahan` varchar(150) NOT NULL,
  `st_kelurahan` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelurahan`
--

INSERT INTO `tbl_kelurahan` (`id_kelurahan`, `nm_kelurahan`, `lk_kelurahan`, `st_kelurahan`) VALUES
(1, 'Bailangu', '', 'Y'),
(2, 'Balai Agung', '', 'Y'),
(3, 'Bandar Jaya', '', 'Y'),
(4, 'Kayuara', 'kayuara', 'Y'),
(5, 'Lumpatan', '', 'Y'),
(6, 'Muara Teladan', '', 'Y'),
(7, 'Rimba Ukur', '', 'Y'),
(8, 'Serasan Jaya', '', 'Y'),
(9, 'Soak Baru', '', 'Y'),
(10, 'Sukarami', '', 'Y'),
(11, 'Sungai Batang', '', 'Y'),
(12, 'Sungai Medak', 'sungai-medak', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peta`
--

CREATE TABLE `tbl_peta` (
  `id_peta` int(5) NOT NULL,
  `nm_peta` varchar(150) NOT NULL,
  `isi_peta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_peta`
--

INSERT INTO `tbl_peta` (`id_peta`, `nm_peta`, `isi_peta`) VALUES
(1, 'Peta Banyuasin', '&lt;style&gt;.embed-container {position: relative; padding-bottom: 80%; height: 0; max-width: 100%;} .embed-container iframe, .embed-container object, .embed-container iframe{position: absolute; top: 0; left: 0; width: 100%; height: 100%;} small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}&lt;/style&gt;&lt;div class=&quot;embed-container&quot;&gt;&lt;iframe width=&quot;100%&quot; height=&quot;400&quot; frameborder=&quot;0&quot; scrolling=&quot;no&quot; marginheight=&quot;0&quot; marginwidth=&quot;0&quot; title=&quot;Fasilitas Umum Kecamatan Sekayu&quot; src=&quot;//www.arcgis.com/apps/Embed/index.html?webmap=90695e1d2ae74d90ae9f59cd726dbb4b&amp;extent=102.5227,-3.2671,105.3956,-1.7744&amp;home=true&amp;zoom=true&amp;previewImage=false&amp;scale=true&amp;legend=true&amp;disable_scroll=false&amp;theme=light&quot;&gt;&lt;/iframe&gt;&lt;/div&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(5) NOT NULL,
  `id_sesi` varchar(50) NOT NULL,
  `nm_user` varchar(50) NOT NULL,
  `ps_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `id_sesi`, `nm_user`, `ps_user`) VALUES
(1, 'vfn2c0qn9pt3bl30e8d613n4b5', 'admin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `tbl_jnsfasilitas`
--
ALTER TABLE `tbl_jnsfasilitas`
  ADD PRIMARY KEY (`id_jnsfasilitas`);

--
-- Indexes for table `tbl_kelurahan`
--
ALTER TABLE `tbl_kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indexes for table `tbl_peta`
--
ALTER TABLE `tbl_peta`
  ADD PRIMARY KEY (`id_peta`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  MODIFY `id_fasilitas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_jnsfasilitas`
--
ALTER TABLE `tbl_jnsfasilitas`
  MODIFY `id_jnsfasilitas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_kelurahan`
--
ALTER TABLE `tbl_kelurahan`
  MODIFY `id_kelurahan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_peta`
--
ALTER TABLE `tbl_peta`
  MODIFY `id_peta` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
