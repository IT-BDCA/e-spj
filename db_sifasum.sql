-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Mar 2020 pada 09.09
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
-- Struktur dari tabel `tbl_bastpb`
--

CREATE TABLE `tbl_bastpb` (
  `id_bastpb` int(5) NOT NULL,
  `id_jnsfasilitas` int(10) NOT NULL,
  `id_peta` int(5) NOT NULL,
  `id_users` int(5) NOT NULL,
  `nip` int(50) NOT NULL,
  `jabatan` text NOT NULL,
  `alamat` text NOT NULL,
  `telepon` text NOT NULL,
  `pihak` text NOT NULL,
  `nomor` text NOT NULL,
  `tgl_surat` text NOT NULL,
  `nmr_suratpesanan` text NOT NULL,
  `nm_barang` text NOT NULL,
  `jumlah` text NOT NULL,
  `satuan` text NOT NULL,
  `hrg_satuan` text NOT NULL,
  `total_harga` text NOT NULL,
  `total_dibayar` text NOT NULL,
  `dibulatkan` text NOT NULL,
  `terbilang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `jml_barang` text NOT NULL,
  `hrg_satuan` int(250) NOT NULL,
  `total_harga` int(250) NOT NULL,
  `keterangan` text NOT NULL,
  `nm_penyedia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_fasilitas`
--

INSERT INTO `tbl_fasilitas` (`id_fasilitas`, `id_jnsfasilitas`, `id_kelurahan`, `id_peta`, `id_users`, `nm_fasilitas`, `lk_fasilitas`, `tgl_posting`, `lo_fasilitas`, `la_fasilitas`, `gb_fasilitas`, `nm_kegiatan`, `isi_surat`, `nm_barang`, `stn_barang`, `jml_barang`, `hrg_satuan`, `total_harga`, `keterangan`, `nm_penyedia`) VALUES
(93, 5, 0, 0, 1, '442/(03)/Obat BLUD/IFRS/RSUD/1/2020', '44203obat-bludifrsrsud12020', '2020-03-16 09:54:56', '-', 'Jl. AKBP Cek Agus No 6534 Rt. 49 Kel 8 Ilir Kec Ilir Timur II Palembang', '', 'Pengadaan Obat-obatan dan Perbekalan Farmasi', '', 'NOVOMIX-30 @5 FLEXPEN\r\nNOVORAPID @5 FLEXPEN', 'BOX\r\nBOX', '2', 0, 0, '-\r\n-', 'PT. Anugrah Argon Medica');

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
(1, 'KWITANSI DAN BUKTI PEMBAYARAN', '', 'kwitansi-dan-bukti-pembayaran', 'Y'),
(2, 'BERITA ACARA PEMBAYARAN', '', 'berita-acara-pembayaran', 'Y'),
(3, 'BERITA ACARA PEMERIKSAAN DAN PENERIMAAN BARANG', '', 'berita-acara-pemeriksaan-dan-penerimaan-barang', 'Y'),
(4, 'BERITA ACARA SERAH TERIMA DAN PENERIMAAN BARANG', '', 'berita-acara-serah-terima-dan-penerimaan-barang', 'Y'),
(5, 'SURAT PESANAN BARANG', '', 'surat-pesanan-barang', 'Y'),
(6, 'LAPORAN VERIFIKASI KEUANGAN', '', 'laporan-verifikasi-keuangan', 'Y');

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
(1, 'gng5vu5fqgmds90q97ocrbv1l4', 'admin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_bastpb`
--
ALTER TABLE `tbl_bastpb`
  ADD PRIMARY KEY (`id_bastpb`);

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
-- AUTO_INCREMENT untuk tabel `tbl_bastpb`
--
ALTER TABLE `tbl_bastpb`
  MODIFY `id_bastpb` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  MODIFY `id_fasilitas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

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
