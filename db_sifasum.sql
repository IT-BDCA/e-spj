-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Mar 2020 pada 08.37
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

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
-- Struktur dari tabel `tbl_fasilitas`
--

CREATE TABLE `tbl_fasilitas` (
  `id_fasilitas` int(5) NOT NULL,
  `id_jnsfasilitas` int(5) NOT NULL,
  `id_kelurahan` int(11) NOT NULL,
  `id_peta` int(10) NOT NULL,
  `id_users` int(5) NOT NULL,
  `nm_fasilitas` text NOT NULL,
  `lk_fasilitas` text NOT NULL,
  `tgl_posting` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lo_fasilitas` text NOT NULL,
  `la_fasilitas` text NOT NULL,
  `gb_fasilitas` varchar(50) NOT NULL,
  `nm_kegiatan` text NOT NULL,
  `isi_surat` text NOT NULL,
  `nm_barang` text NOT NULL,
  `stn_barang` varchar(20) NOT NULL,
  `jml_barang` int(250) NOT NULL,
  `hrg_satuan` int(250) NOT NULL,
  `total_harga` int(250) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_fasilitas`
--

INSERT INTO `tbl_fasilitas` (`id_fasilitas`, `id_jnsfasilitas`, `id_kelurahan`, `id_peta`, `id_users`, `nm_fasilitas`, `lk_fasilitas`, `tgl_posting`, `lo_fasilitas`, `la_fasilitas`, `gb_fasilitas`, `nm_kegiatan`, `isi_surat`, `nm_barang`, `stn_barang`, `jml_barang`, `hrg_satuan`, `total_harga`, `keterangan`) VALUES
(81, 5, 16, 4, 1, '442/(03)/Obat BLUD/IFRS/RSUD/1/2020', '44203obat-bludifrsrsud12020', '2020-03-10 10:04:29', '-', 'Jl. AKBP Cek Agus No 6534 Rt. 49 Kel 8 Ilir Kec Ilir Timur II Palembang', '', 'Pengadaan Obat-obatan dan Perbekalan Farmasi', 'Sesuai Dengan surat permintaan No: 442/(03)/Obat BLUD/IFRS/RSUD/1/2020, Tanggal (02 Januari 2020) untuk keperluan kegiatan Pengadaan Obat-obatan dan Perbekalan Farmasi di RSUD Sekayu agar pelayanan kesehatan di RSUD Sekayu berjalan dengan baik, kami memesan kepada:', '', '', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jnsfasilitas`
--

CREATE TABLE `tbl_jnsfasilitas` (
  `id_jnsfasilitas` int(5) NOT NULL,
  `nm_jnsfasilitas` varchar(50) NOT NULL,
  `map_jnsfasilitas` text NOT NULL,
  `lk_jnsfasilitas` varchar(150) NOT NULL,
  `st_jnsfasilitas` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jnsfasilitas`
--

INSERT INTO `tbl_jnsfasilitas` (`id_jnsfasilitas`, `nm_jnsfasilitas`, `map_jnsfasilitas`, `lk_jnsfasilitas`, `st_jnsfasilitas`) VALUES
(1, 'Kwitansi Dan Bukti Pembayaran', '&lt;style&gt;.embed-container {position: relative; padding-bottom: 80%; height: 0; max-width: 100%;} .embed-container iframe, .embed-container object, .embed-container iframe{position: absolute; top: 0; left: 0; width: 100%; height: 100%;} small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}&lt;/style&gt;&lt;div class=&quot;embed-container&quot;&gt;&lt;iframe width=&quot;500&quot; height=&quot;400&quot; frameborder=&quot;0&quot; scrolling=&quot;no&quot; marginheight=&quot;0&quot; marginwidth=&quot;0&quot; title=&quot;Masjid Sekayu&quot; src=&quot;//saputradedi.maps.arcgis.com/apps/Embed/index.html?webmap=3ca66dda2b7f435daa7189dae2d8569f&amp;extent=103.6489,-2.997,104.0081,-2.8105&amp;home=true&amp;zoom=true&amp;previewImage=false&amp;scale=true&amp;details=true&amp;legend=true&amp;active_panel=details&amp;basemap_gallery=true&amp;disable_scroll=false&amp;theme=light&quot;&gt;&lt;/iframe&gt;&lt;/div&gt;', 'kwitansi-dan-bukti-pembayaran', 'Y'),
(2, 'Berita Acara Pembayaran', '&lt;style&gt;.embed-container {position: relative; padding-bottom: 80%; height: 0; max-width: 100%;} .embed-container iframe, .embed-container object, .embed-container iframe{position: absolute; top: 0; left: 0; width: 100%; height: 100%;} small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}&lt;/style&gt;&lt;div class=&quot;embed-container&quot;&gt;&lt;iframe width=&quot;500&quot; height=&quot;400&quot; frameborder=&quot;0&quot; scrolling=&quot;no&quot; marginheight=&quot;0&quot; marginwidth=&quot;0&quot; title=&quot;Koordinat Penginapan&quot; src=&quot;//dedisaputra.maps.arcgis.com/apps/Embed/index.html?webmap=90443c68e22343e2967bd9dfe944782b&amp;extent=103.1202,-3.2191,104.5567,-2.4729&amp;home=true&amp;zoom=true&amp;previewImage=false&amp;scale=true&amp;legend=true&amp;disable_scroll=false&amp;theme=light&quot;&gt;&lt;/iframe&gt;&lt;/div&gt;', 'berita-acara-pembayaran', 'Y'),
(3, 'Berita Acara Pemeriksaan Dan Penerimaan Barang', '&lt;style&gt;.embed-container {position: relative; padding-bottom: 80%; height: 0; max-width: 100%;} .embed-container iframe, .embed-container object, .embed-container iframe{position: absolute; top: 0; left: 0; width: 100%; height: 100%;} small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}&lt;/style&gt;&lt;div class=&quot;embed-container&quot;&gt;&lt;iframe width=&quot;500&quot; height=&quot;400&quot; frameborder=&quot;0&quot; scrolling=&quot;no&quot; marginheight=&quot;0&quot; marginwidth=&quot;0&quot; title=&quot;Koordinat RSUD Sekayu&quot; src=&quot;//dedisaputra.maps.arcgis.com/apps/Embed/index.html?webmap=807dca5036c24375ac929b89278da550&amp;extent=103.068,-3.1923,104.5045,-2.4462&amp;home=true&amp;zoom=true&amp;previewImage=false&amp;scale=true&amp;legend=true&amp;disable_scroll=false&amp;theme=light&quot;&gt;&lt;/iframe&gt;&lt;/div&gt;', 'berita-acara-pemeriksaan-dan-penerimaan-barang', 'Y'),
(4, 'Berita Acara Serah Terima Dan Penerimaan Barang', '&lt;style&gt;.embed-container {position: relative; padding-bottom: 80%; height: 0; max-width: 100%;} .embed-container iframe, .embed-container object, .embed-container iframe{position: absolute; top: 0; left: 0; width: 100%; height: 100%;} small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}&lt;/style&gt;&lt;div class=&quot;embed-container&quot;&gt;&lt;iframe width=&quot;500&quot; height=&quot;400&quot; frameborder=&quot;0&quot; scrolling=&quot;no&quot; marginheight=&quot;0&quot; marginwidth=&quot;0&quot; title=&quot;Koordinat Kantor Polisi&quot; src=&quot;//dedisaputra.maps.arcgis.com/apps/Embed/index.html?webmap=a7ff6c44c9eb4b379615123ed12d105c&amp;extent=103.1202,-3.2191,104.5567,-2.4729&amp;home=true&amp;zoom=true&amp;previewImage=false&amp;scale=true&amp;legend=true&amp;disable_scroll=false&amp;theme=light&quot;&gt;&lt;/iframe&gt;&lt;/div&gt;', 'berita-acara-serah-terima-dan-penerimaan-barang', 'Y'),
(5, 'SURAT PESANAN BARANG', '', 'surat-pesanan-barang', 'Y'),
(6, 'Laporan Verifikasi Keuangan', '', 'laporan-verifikasi-keuangan', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelurahan`
--

CREATE TABLE `tbl_kelurahan` (
  `id_kelurahan` int(5) NOT NULL,
  `nm_kelurahan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tlp_perusahaan` varchar(200) NOT NULL,
  `lk_kelurahan` varchar(150) NOT NULL,
  `st_kelurahan` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelurahan`
--

INSERT INTO `tbl_kelurahan` (`id_kelurahan`, `nm_kelurahan`, `alamat`, `tlp_perusahaan`, `lk_kelurahan`, `st_kelurahan`) VALUES
(16, 'PT. Anugrah Argon Medica', 'Jl. AKBP Cek Agus No 6534 Rt.49 Kel 8 Ilir Kec Ilir Timur II Palembang', '-', 'pt-anugrah-argon-medica', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peta`
--

CREATE TABLE `tbl_peta` (
  `id_peta` int(5) NOT NULL,
  `nm_peta` varchar(150) NOT NULL,
  `nip` text NOT NULL,
  `jabatan` text NOT NULL,
  `alamat` text NOT NULL,
  `isi_peta` text NOT NULL,
  `st_peta` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_peta`
--

INSERT INTO `tbl_peta` (`id_peta`, `nm_peta`, `nip`, `jabatan`, `alamat`, `isi_peta`, `st_peta`) VALUES
(4, 'Yulius Hendro Sudiarwanto', '-', 'Kepala Cabang', 'Jl. AKBP Cek Agus No 6534 Rt.49 Kel 8 Ilir Kec Ilir Timur II Palembang', '', 'Y'),
(5, 'Dra. Hanifdar.Apt', '19670730199703 2 001', 'Pejabat Pembuat Komitmen', 'RSUD Sekayu Jl. Kol. Wahid Udin Lk.1 Kayuara, Sekayu', '', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(5) NOT NULL,
  `id_sesi` varchar(50) NOT NULL,
  `nm_user` varchar(50) NOT NULL,
  `ps_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `id_sesi`, `nm_user`, `ps_user`) VALUES
(1, 'ctm7j0s2trjj2iororfvfqnt60', 'admin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `tbl_jnsfasilitas`
--
ALTER TABLE `tbl_jnsfasilitas`
  ADD PRIMARY KEY (`id_jnsfasilitas`);

--
-- Indeks untuk tabel `tbl_kelurahan`
--
ALTER TABLE `tbl_kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indeks untuk tabel `tbl_peta`
--
ALTER TABLE `tbl_peta`
  ADD PRIMARY KEY (`id_peta`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  MODIFY `id_fasilitas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT untuk tabel `tbl_jnsfasilitas`
--
ALTER TABLE `tbl_jnsfasilitas`
  MODIFY `id_jnsfasilitas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelurahan`
--
ALTER TABLE `tbl_kelurahan`
  MODIFY `id_kelurahan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_peta`
--
ALTER TABLE `tbl_peta`
  MODIFY `id_peta` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
