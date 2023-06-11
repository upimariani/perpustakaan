-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Apr 2023 pada 14.31
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `alamat`, `no_hp`, `username`, `password`) VALUES
(1, 'admin', 'Kuningan Jawa Barat', '085156727367', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `nama_anggota` varchar(125) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `jk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nis`, `nama_anggota`, `kelas`, `jk`) VALUES
(1, '2321456', 'Salsa', '7', 1),
(2, '32569875', 'Zainal', '7', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `sampul` text NOT NULL,
  `no_isbn` varchar(20) NOT NULL,
  `judul` text NOT NULL,
  `pengarang` varchar(125) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `penerbit` varchar(125) NOT NULL,
  `jml_buku` int(11) NOT NULL,
  `sisa_buku` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `sinopsis` text DEFAULT NULL,
  `file` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `id_kategori`, `kelas`, `sampul`, `no_isbn`, `judul`, `pengarang`, `tahun`, `penerbit`, `jml_buku`, `sisa_buku`, `status`, `create_at`, `sinopsis`, `file`) VALUES
(2, 1, '6', 'Bahasa-Inggris-BS-KLS-V-cover2.png', '78956-5899-21', 'Filsafat Ilmu Agama', 'Danar Sutardi', '2022', 'Danar Sutardi', 2, 2, 0, '2022-09-22 03:11:14', '<p><span style=\"background-color: rgb(0, 255, 0);\">gjkfgdfryyh</span></p>', 'Bahasa-Indonesia-BS-KLS-V1.pdf'),
(3, 1, '6', 'Islam-BS-KLS-V-cover1.png', '1233sdss', 'zdsd', 'sds', '1212', 'sdsd', 15, 15, 0, '2023-02-05 12:24:32', '<p>sfsdfsd</p>', 'Bahasa-Indonesia-BS-KLS-V1.pdf'),
(4, 1, '6', 'Matematika-BS-KLS-IV-cover2.png', '23212asda', 'asaas', 'aa', '2321', 'SFDGER', 8, 8, 0, '2023-02-05 12:24:53', '<p>cgvfgdfdf</p>', 'Matematika-BS-KLS-IV1.pdf'),
(5, 1, '5', 'Bahasa-Indonesia-BS-KLS-V-cover1.png', '4342321dfd', 'sdfsds', 'asewqeq', '3221', 'sfdfds', 2, 2, 0, '2023-02-05 12:25:13', '<p>fvhgfh</p>', 'Islam-BS-KLS-I1.pdf'),
(6, 1, '5', 'Bahasa-Indonesia-BS-KLS-I-Cover1.png', '2321ffd', 'scssf', 'ghgjyh', '45667', 'ghgfjf', 8, 8, 0, '2023-02-05 12:25:33', '<p>vhgfhgf</p>', 'Matematika-Vol-1-BS-KLS-V1.pdf'),
(7, 1, '5', 'Kumpulan-Puisi_Dian-Ratnawati_Rev-1_0_Convert_Cover-Depan-600x8571.jpg', '2343453dfd', 'bjgf', 'esdrf', '2022', 'sdsd', 100, 100, 0, '2023-02-05 12:30:08', '<p>dfdfdx</p>', 'Islam-BS-KLS-I11.pdf'),
(8, 1, '4', 'Pengantar-Dasar-Matematika_-Sri-Suryanti-rev-1_0-depan1.jpg', 'sads123234', 'cgfgd', 'xdfgds', '2321', 'sdsd', 1, 1, 0, '2023-02-05 12:37:13', '<p>fcgfd</p>', 'Matematika-BS-KLS-IV11.pdf'),
(9, 1, '4', 'Matematika-Vol-1-BS-KLS-V-cover1.png', 'cgfgrf3434', 'asaas', 'asewqeq', '1212', 'SFDGER', 150, 150, 0, '2023-02-05 12:37:32', '<p>hfghfg</p>', 'Bahasa-Inggris-BS-KLS-V11.pdf'),
(10, 1, '3', 'Matematika-BS-KLS-IV-cover3.png', '23212asdsdsds', 'asaas', 'asewqeq', '45667', 'sdsd', 150, 150, 0, '2023-02-05 12:38:00', '<p>vhghd</p>', 'Biodata_Igrily_Alhadist1.pdf'),
(11, 1, '2', 'Bahasa-Indonesia-BS-KLS-I-Cover11.png', '23212asdacg', 'zdsd', 'asewqeq', '3221', 'sdsd', 15, 15, 0, '2023-02-05 12:38:22', '<p>vhghghg</p>', '533-Article_Text-2222-1-10-2019123111.pdf'),
(12, 1, '1', 'Matematika-BS-KLS-IV-cover4.png', 'sdsd34', 'dfdsa', 'dsfgds', '2022', 'SFDGER', 1, 1, 0, '2023-02-05 12:44:50', '<p>dgdfgs</p>', 'Bahasa-Indonesia-BS-KLS-V11.pdf'),
(13, 1, '1', 'Matematika-Vol-1-BS-KLS-V-cover11.png', '1233sdss', 'fdgdf', 'dfg', '2022', 'SFDGER', 15, 15, 0, '2023-02-05 12:45:51', '<p>sfdfds</p>', 'jago-ngomong-bahasa-inggris-revisi-3_1-Convert-depan-521x768.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_peminjaman`
--

CREATE TABLE `detail_peminjaman` (
  `id_detail` int(11) NOT NULL,
  `id_pinjam` varchar(30) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `jml` int(11) NOT NULL,
  `stat_pinjam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_peminjaman`
--

INSERT INTO `detail_peminjaman` (`id_detail`, `id_pinjam`, `id_buku`, `jml`, `stat_pinjam`) VALUES
(1, 'P20220922tG73l', 2, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_ebook`
--

CREATE TABLE `history_ebook` (
  `id_histori` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `history_ebook`
--

INSERT INTO `history_ebook` (`id_histori`, `id_anggota`, `id_buku`, `time`) VALUES
(1, 1, 2, '2023-01-09 14:27:01'),
(2, 1, 2, '2023-01-09 14:27:12'),
(3, 1, 2, '2023-01-09 14:27:55'),
(4, 1, 7, '2023-02-05 12:30:38'),
(5, 1, 3, '2023-04-05 11:01:10'),
(6, 1, 3, '2023-04-05 11:02:02'),
(7, 1, 3, '2023-04-05 11:02:11'),
(8, 1, 3, '2023-04-05 11:02:56'),
(9, 1, 4, '2023-04-05 11:35:02'),
(10, 1, 4, '2023-04-05 11:37:21'),
(11, 1, 4, '2023-04-05 11:38:41'),
(12, 1, 4, '2023-04-05 12:14:10'),
(13, 1, 2, '2023-04-05 12:27:35'),
(14, 1, 2, '2023-04-05 12:28:02'),
(15, 1, 10, '2023-04-05 12:30:35'),
(16, 1, 10, '2023-04-05 12:30:51'),
(17, 1, 3, '2023-04-05 12:30:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_buku`
--

CREATE TABLE `kategori_buku` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(125) NOT NULL,
  `no_rak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_buku`
--

INSERT INTO `kategori_buku` (`id_kategori`, `nama_kategori`, `no_rak`) VALUES
(1, 'Filsafat', '1189'),
(2, 'Bahasa Indonesia', '8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` varchar(30) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `tgl_pinjam` varchar(20) NOT NULL,
  `bts_pinjam` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `stat_pinjam_all` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `id_anggota`, `id_admin`, `tgl_pinjam`, `bts_pinjam`, `time`, `stat_pinjam_all`) VALUES
('P20220922tG73l', 1, 1, '2022-09-22', '2022-09-29', '2022-09-22 04:32:04', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_kembali` int(11) NOT NULL,
  `id_detail` int(11) NOT NULL,
  `tgl_kembali` varchar(15) NOT NULL,
  `denda` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`id_kembali`, `id_detail`, `tgl_kembali`, `denda`) VALUES
(1, 1, '2022-09-22', '0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `history_ebook`
--
ALTER TABLE `history_ebook`
  ADD PRIMARY KEY (`id_histori`);

--
-- Indeks untuk tabel `kategori_buku`
--
ALTER TABLE `kategori_buku`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_kembali`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `history_ebook`
--
ALTER TABLE `history_ebook`
  MODIFY `id_histori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `kategori_buku`
--
ALTER TABLE `kategori_buku`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_kembali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
