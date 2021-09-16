-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Sep 2021 pada 21.34
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `extranet`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_kamar`
--

CREATE TABLE `fasilitas_kamar` (
  `id` int(11) NOT NULL,
  `informasi_umum_detail_id` int(11) NOT NULL,
  `fasilitas_kamar_detail_id` int(11) NOT NULL,
  `availability_tipe_kamar_id` text NOT NULL COMMENT 'Data Array',
  `status_id` int(1) NOT NULL COMMENT '0 = Tidak Aktif, 1 = Aktif',
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas_kamar`
--

INSERT INTO `fasilitas_kamar` (`id`, `informasi_umum_detail_id`, `fasilitas_kamar_detail_id`, `availability_tipe_kamar_id`, `status_id`, `created_by`, `created_date`, `updated_by`, `updated_date`, `deleted_by`, `deleted_date`) VALUES
(1, 1, 2, '[\"2\"]', 1, 25, '2021-07-10 09:20:54', 25, '2021-07-10 09:53:10', NULL, NULL),
(2, 1, 1, '[\"3\",\"4\"]', 0, 1, '2021-07-14 13:57:47', 1, '2021-07-14 13:58:41', 1, '2021-07-14 14:00:52'),
(3, 14, 8, '[\"1\",\"2\",\"3\",\"4\"]', 1, 1, '2021-07-17 09:37:22', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_properti`
--

CREATE TABLE `fasilitas_properti` (
  `id` int(11) NOT NULL,
  `informasi_umum_detail_id` int(11) NOT NULL,
  `fasilitas_properti_detail_id` int(11) NOT NULL,
  `flag_free` int(1) NOT NULL COMMENT '0 = No, 1 = Yes',
  `flag_fullday` int(1) NOT NULL COMMENT '0 = No, 1 = Yes',
  `status_id` int(1) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas_properti`
--

INSERT INTO `fasilitas_properti` (`id`, `informasi_umum_detail_id`, `fasilitas_properti_detail_id`, `flag_free`, `flag_fullday`, `status_id`, `created_by`, `created_date`, `updated_by`, `updated_date`, `deleted_by`, `deleted_date`) VALUES
(1, 1, 2, 1, 1, 1, 22, '2021-07-10 13:13:55', NULL, NULL, NULL, NULL),
(2, 2, 0, 0, 0, 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
(3, 14, 1, 1, 1, 1, 1, '2021-07-17 09:06:48', NULL, NULL, NULL, NULL),
(4, 0, 1, 1, 1, 1, 1, '2021-08-08 11:02:47', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto_kamar`
--

CREATE TABLE `foto_kamar` (
  `id` int(11) NOT NULL,
  `tipe_kamar_id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `foto_tipe_id` int(11) NOT NULL,
  `status_id` int(1) NOT NULL COMMENT '0 = Tidak Aktif, 1 = Aktif',
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `foto_kamar`
--

INSERT INTO `foto_kamar` (`id`, `tipe_kamar_id`, `foto`, `foto_tipe_id`, `status_id`, `created_by`, `created_date`, `updated_by`, `updated_date`, `deleted_by`, `deleted_date`) VALUES
(1, 0, '[]', 0, 1, NULL, '2021-07-26 14:06:00', NULL, '2021-07-26 14:15:15', NULL, '2021-07-26 14:10:21'),
(2, 2, '[\"http://localhost/smart-city-ci/uploads/foto_kamar/4.PNG\"]', 1, 1, NULL, '2021-07-26 14:06:39', NULL, NULL, NULL, NULL),
(3, 1, '[\"http://localhost/smart-city-ci/uploads/foto_kamar/8.PNG\",\"http://localhost/smart-city-ci/uploads/foto_kamar/81.PNG\"]', 1, 1, NULL, '2021-07-26 14:06:56', NULL, NULL, NULL, NULL),
(4, 10, '[\"http://localhost/carikamar-web/admin/upload/kamar/1.PNG\",\"http://localhost/carikamar-web/admin/upload/kamar/11.PNG\"]', 9, 0, NULL, '2021-07-29 11:13:05', NULL, '2021-07-29 11:17:54', 22, '2021-07-29 11:18:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto_properti`
--

CREATE TABLE `foto_properti` (
  `id` int(11) NOT NULL,
  `informasi_umum_detail_id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `foto_tipe_id` int(11) NOT NULL,
  `status_id` int(1) NOT NULL COMMENT '0 = Tidak Aktif, 1 = Aktif',
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `foto_properti`
--

INSERT INTO `foto_properti` (`id`, `informasi_umum_detail_id`, `foto`, `foto_tipe_id`, `status_id`, `created_by`, `created_date`, `updated_by`, `updated_date`, `deleted_by`, `deleted_date`) VALUES
(9, 2, '[\"http://localhost/smart-city-ci/uploads/foto_properti/86.PNG\",\"http://localhost/smart-city-ci/uploads/foto_properti/87.PNG\",\"http://localhost/smart-city-ci/uploads/foto_properti/88.PNG\"]', 1, 1, NULL, '2021-07-26 12:23:01', NULL, '2021-07-26 13:58:48', NULL, NULL),
(10, 0, '[]', 0, 0, NULL, '2021-07-26 12:23:11', NULL, '2021-07-26 14:00:26', NULL, '2021-07-26 14:02:05'),
(11, 1, '[]', 1, 1, NULL, '2021-07-26 12:24:38', NULL, NULL, NULL, NULL),
(12, 1, '[]', 1, 1, NULL, '2021-07-26 12:26:27', NULL, NULL, NULL, NULL),
(13, 1, '[]', 1, 1, NULL, '2021-07-26 12:49:15', NULL, NULL, NULL, NULL),
(14, 2, '[]', 1, 1, NULL, '2021-07-26 12:49:26', NULL, NULL, NULL, NULL),
(15, 2, '[]', 1, 1, NULL, '2021-07-26 12:51:33', NULL, NULL, NULL, NULL),
(16, 2, '[]', 1, 1, NULL, '2021-07-26 13:43:29', NULL, NULL, NULL, NULL),
(17, 2, '[]', 1, 1, NULL, '2021-07-26 13:44:15', NULL, NULL, NULL, NULL),
(18, 2, '[]', 1, 1, NULL, '2021-07-26 13:45:37', NULL, NULL, NULL, NULL),
(19, 2, '[]', 1, 1, NULL, '2021-07-26 13:46:16', NULL, NULL, NULL, NULL),
(20, 2, '[]', 1, 1, NULL, '2021-07-26 13:53:59', NULL, NULL, NULL, NULL),
(21, 2, '[]', 1, 1, NULL, '2021-07-26 13:54:39', NULL, NULL, NULL, NULL),
(22, 2, '[]', 1, 1, NULL, '2021-07-26 13:55:17', NULL, NULL, NULL, NULL),
(23, 2, '[\"http://localhost/smart-city-ci/uploads/foto_properti/4.PNG\",\"http://localhost/smart-city-ci/uploads/foto_properti/41.PNG\"]', 1, 1, NULL, '2021-07-26 13:56:00', NULL, NULL, NULL, NULL),
(24, 2, '[\"http://localhost/smart-city-ci/uploads/foto_properti/42.PNG\"]', 1, 1, NULL, '2021-07-26 13:56:19', NULL, NULL, NULL, NULL),
(25, 3, '[]', 8, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 14, '[]', 13, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 3, '[]', 16, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 1, '[]', 15, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 2, '[]', 16, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 2, '[]', 5, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 7, '[\"http://localhost/carikamar-web/admin/upload/properti/1.PNG\",\"http://localhost/carikamar-web/admin/upload/properti/11.PNG\",\"http://localhost/carikamar-web/admin/upload/properti/12.PNG\"]', 8, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 1, '[\"http://localhost/carikamar-web/admin/upload/properti/prosedur_pengembangan.png\"]', 1, 0, NULL, NULL, NULL, '2021-07-29 10:41:31', 22, '2021-07-29 10:43:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto_tipe`
--

CREATE TABLE `foto_tipe` (
  `id` int(11) NOT NULL,
  `nama_tipe_foto` varchar(100) NOT NULL,
  `flag_foto` int(1) NOT NULL COMMENT '1 = Foto Properti, 2 = Foto Kamar',
  `status_id` int(1) NOT NULL COMMENT '0 = Tidak Aktif, 1 = Aktif	'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `foto_tipe`
--

INSERT INTO `foto_tipe` (`id`, `nama_tipe_foto`, `flag_foto`, `status_id`) VALUES
(1, 'Exterior / Building', 1, 1),
(2, 'Lobby', 1, 1),
(3, 'Swimming Pool', 1, 1),
(4, 'Entertaiment Facility', 1, 1),
(5, 'Sport Facility', 1, 1),
(6, 'Please Select Caption', 1, 1),
(7, 'Bedroom', 1, 1),
(8, 'Bathroom', 1, 1),
(9, 'Functional Hall', 1, 1),
(10, 'Restaurant', 1, 1),
(11, 'Bar, Cafe and Lounge', 1, 1),
(12, 'Nearby View and Attractions', 1, 1),
(13, 'Hotel Service', 1, 1),
(14, 'Common Space', 1, 1),
(15, 'Others', 1, 1),
(16, 'Bedroom', 2, 1),
(17, 'Bathroom', 2, 1),
(18, 'Others', 2, 1),
(19, 'Test 2', 2, 0),
(20, 'test', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_pembayaran`
--

CREATE TABLE `informasi_pembayaran` (
  `id` int(11) NOT NULL,
  `informasi_umum_detail_id` int(11) NOT NULL,
  `pilihan_metode` int(1) NOT NULL COMMENT '1 = Bank Transfer, 2 = VCC',
  `master_bank_id` int(11) NOT NULL,
  `nomor_akun` varchar(100) NOT NULL,
  `pemilik_akun` varchar(100) NOT NULL,
  `rencana_pembayaran` int(1) NOT NULL COMMENT '1 = In Advance, 2 = Weekly, 3 = Monthly',
  `status_id` int(1) NOT NULL COMMENT '0 = Tidak Aktif, 1 = Aktif',
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi_pembayaran`
--

INSERT INTO `informasi_pembayaran` (`id`, `informasi_umum_detail_id`, `pilihan_metode`, `master_bank_id`, `nomor_akun`, `pemilik_akun`, `rencana_pembayaran`, `status_id`, `created_by`, `created_date`, `updated_by`, `updated_date`, `deleted_by`, `deleted_date`) VALUES
(1, 2, 1, 2, '321', 'qwer', 1, 1, 0, '2021-07-25 06:20:18', 0, '2021-07-25 06:22:23', 0, '2021-07-25 06:24:21'),
(2, 1, 2, 1, '321', 'asd', 3, 1, 22, '2021-07-25 12:22:50', 22, '2021-07-25 14:03:57', NULL, NULL),
(3, 0, 1, 1, '1212', 'D', 0, 1, 1, '2021-08-08 12:44:26', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_penandatangan_kontrak`
--

CREATE TABLE `informasi_penandatangan_kontrak` (
  `id` int(11) NOT NULL,
  `informasi_umum_detail_id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `role_kontrak_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `flag_menyetujui` int(1) NOT NULL COMMENT '0 = Tidak, 1 = Ya',
  `status_id` int(1) NOT NULL COMMENT '0 = Tidak Aktif , 1 = Aktif',
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi_penandatangan_kontrak`
--

INSERT INTO `informasi_penandatangan_kontrak` (`id`, `informasi_umum_detail_id`, `nama_lengkap`, `role_kontrak_id`, `email`, `no_hp`, `flag_menyetujui`, `status_id`, `created_by`, `created_date`, `updated_by`, `updated_date`, `deleted_by`, `deleted_date`) VALUES
(1, 14, 'update', 5, 'qwe123@gmail.com', '0857123', 1, 1, 0, '2021-07-25 06:45:54', 22, '2021-07-25 14:55:07', 0, '2021-07-25 06:47:45'),
(2, 12, 'test ing', 4, 'abc123@gmail.com', '012312456', 1, 0, 22, '2021-07-25 14:49:41', NULL, NULL, 22, '2021-07-25 14:55:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_umum_detail`
--

CREATE TABLE `informasi_umum_detail` (
  `id` int(11) NOT NULL,
  `fk_id_users` int(11) NOT NULL,
  `tipe_properti_id` int(11) NOT NULL,
  `nama_properti` varchar(250) CHARACTER SET latin1 NOT NULL,
  `nama_badan_hukum` varchar(250) CHARACTER SET latin1 NOT NULL,
  `lokasi_maps` varchar(500) CHARACTER SET latin1 NOT NULL,
  `alamat_jalan` varchar(250) CHARACTER SET latin1 NOT NULL,
  `kode_pos` varchar(20) CHARACTER SET latin1 NOT NULL,
  `no_telp` varchar(50) CHARACTER SET latin1 NOT NULL,
  `jumlah_kamar` int(11) NOT NULL,
  `flag_chanel_manager` int(1) NOT NULL COMMENT '0 = No, 1 = Yes',
  `user_id` int(11) DEFAULT NULL,
  `status_id` int(1) NOT NULL COMMENT '0 = Tidak Aktif, 1 = Aktif, 2 = Pending',
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `informasi_umum_detail`
--

INSERT INTO `informasi_umum_detail` (`id`, `fk_id_users`, `tipe_properti_id`, `nama_properti`, `nama_badan_hukum`, `lokasi_maps`, `alamat_jalan`, `kode_pos`, `no_telp`, `jumlah_kamar`, `flag_chanel_manager`, `user_id`, `status_id`, `created_by`, `created_date`, `updated_by`, `updated_date`, `deleted_by`, `deleted_date`) VALUES
(1, 24, 4, 'Hotel 88', 'Negara', 'Oyo@gmail.com', 'Jalan pepek asu ', '42231', '08888', 1, 0, NULL, 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
(61, 24, 4, 'OYO\r\n', 'Negara', 'Oyo@gmail.com', 'Jalan pepek asu ', '42231', '08888', 1, 0, NULL, 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_umum_kontak`
--

CREATE TABLE `informasi_umum_kontak` (
  `id` int(11) NOT NULL,
  `fk_id_users` int(11) DEFAULT NULL,
  `informasi_umum_detail_id` int(11) NOT NULL,
  `jenis_kontak` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `no_telp_kantor` varchar(20) NOT NULL,
  `extension` varchar(20) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `flag_fullday` int(11) DEFAULT NULL COMMENT '0 = No, 1 = Yes',
  `status_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi_umum_kontak`
--

INSERT INTO `informasi_umum_kontak` (`id`, `fk_id_users`, `informasi_umum_detail_id`, `jenis_kontak`, `nama_lengkap`, `email`, `no_hp`, `no_telp_kantor`, `extension`, `jabatan`, `flag_fullday`, `status_id`, `created_by`, `created_date`, `updated_by`, `updated_date`, `deleted_by`, `deleted_date`) VALUES
(39, 24, 50, 'manager', 'BAGUS SUHENDRIYATNO', 'bagussuhendri19@gmail.com', '087720729291', '44', 'vnvbnvbnvn', 'manager IT', 1, 1, 1, '2021-08-03 20:24:31', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_bank`
--

CREATE TABLE `master_bank` (
  `id` int(11) NOT NULL,
  `nama_bank` varchar(100) NOT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `status_id` int(1) NOT NULL COMMENT '0 = Tidak Aktif, 1 = Aktif	'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_bank`
--

INSERT INTO `master_bank` (`id`, `nama_bank`, `deskripsi`, `status_id`) VALUES
(1, 'PT. BANK CENTRAL ASIA Tbk.', '', 1),
(2, 'BANK MANDIRI(PERSERO) Tbk.', '', 1),
(3, 'qwe', 'rty', 0),
(4, 'update', '123qwerty										', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_fasilitas_kamar_detail`
--

CREATE TABLE `master_fasilitas_kamar_detail` (
  `id` int(11) NOT NULL,
  `fasilitas_kamar_header_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status_id` int(1) NOT NULL COMMENT '0 = Tidak Aktif, 1 = Aktif	'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_fasilitas_kamar_detail`
--

INSERT INTO `master_fasilitas_kamar_detail` (`id`, `fasilitas_kamar_header_id`, `nama`, `status_id`) VALUES
(1, 1, 'Internet Access Wifi Charges Apply', 1),
(2, 1, 'Hair Dryer', 1),
(3, 1, 'Dishwasher', 1),
(4, 2, 'Complimentary Bottled Water', 1),
(5, 2, 'Mini Bar', 1),
(6, 2, 'Refrigerator', 1),
(7, 2, 'rty', 0),
(8, 1, '2', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_fasilitas_kamar_header`
--

CREATE TABLE `master_fasilitas_kamar_header` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `urutan` int(1) NOT NULL,
  `status_id` int(1) NOT NULL COMMENT '0 = Tidak Aktif, 1 = Aktif	'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_fasilitas_kamar_header`
--

INSERT INTO `master_fasilitas_kamar_header` (`id`, `nama`, `urutan`, `status_id`) VALUES
(1, 'Room & Laundry', 1, 1),
(2, 'Food & Drinks', 2, 1),
(3, 'Entertainment', 3, 1),
(4, 'Room Configuration & Access', 4, 1),
(5, 'Bathroom & Pool', 5, 1),
(6, 'test', 123, 1),
(7, 'rty', 2, 0),
(8, '2', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_fasilitas_properti_detail`
--

CREATE TABLE `master_fasilitas_properti_detail` (
  `id` int(11) NOT NULL,
  `fasilitas_properti_header_id` int(11) NOT NULL,
  `nama` varchar(250) CHARACTER SET latin1 NOT NULL,
  `flag_free` int(1) NOT NULL COMMENT '0 = Tidak Muncul, 1 = Muncul',
  `flag_fullday` int(1) NOT NULL COMMENT '0 = Tidak Muncul, 1 = Muncul',
  `status_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_fasilitas_properti_detail`
--

INSERT INTO `master_fasilitas_properti_detail` (`id`, `fasilitas_properti_header_id`, `nama`, `flag_free`, `flag_fullday`, `status_id`) VALUES
(1, 1, 'Area Parkir', 1, 0, 1),
(2, 1, 'Layanan Kamar', 0, 1, 1),
(3, 1, 'Berangkas', 0, 0, 1),
(4, 1, 'Area Wifi Umum', 0, 0, 1),
(5, 1, 'Kedai Kopi / Caffe', 0, 0, 1),
(6, 2, 'Kamar Mandi yang Dapat Diakses', 0, 0, 1),
(7, 2, 'Parkir yang Dapat Diakses', 0, 0, 1),
(8, 2, 'Jalur Perjalanan yang Dapat Diakses', 0, 0, 1),
(9, 2, 'Aksesibilitas Dalam Kamar', 0, 0, 1),
(10, 2, 'Tisu Dalam Kamar Mandi', 0, 0, 1),
(11, 1, 'Aturan', 0, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_fasilitas_properti_header`
--

CREATE TABLE `master_fasilitas_properti_header` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 NOT NULL,
  `urutan` int(1) NOT NULL,
  `status_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_fasilitas_properti_header`
--

INSERT INTO `master_fasilitas_properti_header` (`id`, `nama`, `urutan`, `status_id`) VALUES
(1, 'Umum', 1, 1),
(2, 'Aksesibilitas', 2, 1),
(3, 'Bisnis', 3, 1),
(4, 'Konektivitas', 4, 1),
(5, 'Fasilitas', 5, 1),
(6, 'Aturan', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_perjanjian_kontrak`
--

CREATE TABLE `master_perjanjian_kontrak` (
  `id` int(11) NOT NULL,
  `detail_perjanjian_kontrak` text NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `status_id` int(1) NOT NULL COMMENT '0 = Tidak Aktif, 1 = Aktif	'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_perjanjian_kontrak`
--

INSERT INTO `master_perjanjian_kontrak` (`id`, `detail_perjanjian_kontrak`, `deskripsi`, `status_id`) VALUES
(1, '										 qwe', '1										 										', 0),
(2, 'DDD', 'CCC', 0),
(3, 'test', '123', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_promo`
--

CREATE TABLE `master_promo` (
  `id` int(11) NOT NULL,
  `nama_promo` varchar(100) NOT NULL,
  `persen_promo` decimal(10,0) NOT NULL,
  `max_promo` decimal(10,0) NOT NULL,
  `tgl_mulai` datetime NOT NULL,
  `tgl_akhir` datetime NOT NULL,
  `flag_hotel` int(11) NOT NULL COMMENT '1 = Untuk Semua Hotel, 2 = Hanya Untuk 1 Hotel Saja (Di Create Oleh Admin Hotel)',
  `informasi_umum_detail_id` int(11) DEFAULT NULL,
  `status_id` int(1) NOT NULL COMMENT '0 = Tidak Aktif, 1 = Aktif',
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` date DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_promo`
--

INSERT INTO `master_promo` (`id`, `nama_promo`, `persen_promo`, `max_promo`, `tgl_mulai`, `tgl_akhir`, `flag_hotel`, `informasi_umum_detail_id`, `status_id`, `created_by`, `created_date`, `updated_by`, `updated_date`, `deleted_by`, `deleted_date`) VALUES
(1, 'TESTING', '10', '15', '2020-09-10 10:00:00', '2020-09-20 15:00:00', 2, 2, 1, 0, '2021-08-17 09:33:40', 22, '2021-08-17', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_role`
--

CREATE TABLE `master_role` (
  `id` int(11) NOT NULL,
  `nama_role` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `status_id` int(1) NOT NULL COMMENT '0 = Tidak Aktif, 1 = Aktif'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_role`
--

INSERT INTO `master_role` (`id`, `nama_role`, `deskripsi`, `status_id`) VALUES
(1, 'Admin Hotel', '										 Test', 1),
(2, 'Admin', 'Test123', 1),
(3, 'SuperAdmin', 'SuperAdmin', 0),
(4, 'Bambang', 'TR', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_role_kontrak`
--

CREATE TABLE `master_role_kontrak` (
  `id` int(11) NOT NULL,
  `nama_role_kontrak` varchar(100) NOT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `status_id` int(1) NOT NULL COMMENT '0 = Tidak Aktif, 1 = Aktif	'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_role_kontrak`
--

INSERT INTO `master_role_kontrak` (`id`, `nama_role_kontrak`, `deskripsi`, `status_id`) VALUES
(1, 'Business Owner', NULL, 1),
(2, 'General Manager', NULL, 1),
(3, 'Director of Sales Marketing', '', 1),
(4, 'Revenue Manager', NULL, 1),
(5, 'E-commerce Manager', NULL, 1),
(6, 'test', '123', 0),
(7, '123', '										 qwe', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_tipe_kamar`
--

CREATE TABLE `master_tipe_kamar` (
  `id` int(11) NOT NULL,
  `nama_tipe_kamar` varchar(100) NOT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `status_id` int(1) NOT NULL COMMENT '0 = Tidak Aktif, 1 = Aktif	'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_tipe_kamar`
--

INSERT INTO `master_tipe_kamar` (`id`, `nama_tipe_kamar`, `deskripsi`, `status_id`) VALUES
(1, 'Single', 'Jomblo', 1),
(2, 'Double', 'Married', 1),
(3, 'Twin', 'Keluarga', 1),
(4, 'Triple', NULL, 1),
(5, 'Standar', NULL, 1),
(6, '123', '										 test', 0),
(7, 'qwe', 'rty', 0),
(8, 'VIP', 'Ada', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_tipe_kasur`
--

CREATE TABLE `master_tipe_kasur` (
  `id` int(11) NOT NULL,
  `nama_tipe_kasur` varchar(100) NOT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `status_id` int(1) NOT NULL COMMENT '0 = Tidak Aktif, 1 = Aktif	'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_tipe_kasur`
--

INSERT INTO `master_tipe_kasur` (`id`, `nama_tipe_kasur`, `deskripsi`, `status_id`) VALUES
(1, 'Single', 'TEST', 1),
(2, 'Double', NULL, 1),
(3, '', 'rty', 0),
(4, 'Queen', NULL, 1),
(5, 'King', NULL, 1),
(6, '123', '										 456778', 0),
(7, 'qwe', 'rty', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_tipe_properti`
--

CREATE TABLE `master_tipe_properti` (
  `id` int(11) NOT NULL,
  `nama_tipe` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` text NOT NULL,
  `status_id` int(1) NOT NULL COMMENT '0 = Tidak Aktif, 1 = Aktif',
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_tipe_properti`
--

INSERT INTO `master_tipe_properti` (`id`, `nama_tipe`, `deskripsi`, `foto`, `status_id`, `created_by`, `created_date`, `updated_by`, `updated_date`, `deleted_by`, `deleted_date`) VALUES
(2, 'Apartement', 'HHHHAAA', '[\"http://localhost/smart-city-ci/uploads/11.PNG\"]', 1, 0, '0000-00-00 00:00:00', 22, '2021-07-09 11:53:23', NULL, NULL),
(3, 'Villa', 'GG edan', '[\"http://localhost/smart-city-ci/uploads/12.PNG\"]', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
(4, 'Hotel', 'Penginapan ', '', 1, 1, '2021-06-25 00:17:27', NULL, NULL, NULL, NULL),
(5, 'Ruko', 'COO', '[]', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
(6, 'Ruko VIP', 'INI Mantul', '', 1, 22, '2021-07-09 06:59:31', NULL, NULL, NULL, NULL),
(7, 'Ruko VVVV', 'VVVVVV', '', 0, 22, '2021-07-09 11:52:22', NULL, NULL, 22, '2021-07-09 14:18:17'),
(8, '123', '456', '[]', 0, 0, '0000-00-00 00:00:00', 0, '2021-07-14 12:00:41', 0, '2021-07-14 12:24:55'),
(9, '23', '45567', '[\"http://localhost/smart-city-ci/uploads/master_tipe_properti/prosedur_pengembangan.png\"]', 0, 0, '2021-07-14 12:00:07', 0, '2021-07-14 12:20:32', NULL, NULL),
(10, 'Test Data API Update', '45567', '[]', 0, 0, '2021-07-15 02:23:25', 0, '2021-07-15 02:23:55', 0, '2021-07-15 02:24:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_user`
--

CREATE TABLE `master_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `foto` text NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `status_id` int(1) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_user`
--

INSERT INTO `master_user` (`id`, `nama`, `email`, `password`, `foto`, `role_id`, `status_id`, `created_by`, `created_date`, `updated_by`, `updated_date`, `deleted_by`, `deleted_date`) VALUES
(24, 'admin', '123@qwewq.com', '123', 'http://localhost/carikamar-web/admin/upload/user/prosedur_pengembangan1.png', 1, 1, 16, '2021-07-08 18:26:16', 16, '2021-07-08 18:49:46', NULL, NULL),
(23, 'Bagus', 'bagus@bagus.com', 'bagus123', '', NULL, 0, 16, '2021-07-08 18:25:58', NULL, NULL, 16, '2021-07-08 18:50:39'),
(22, 'Fikri', 'fikri@fikri.com', '123', 'http://localhost/carikamar-web/admin/upload/user/Logo_Unbin.jpg', 2, 1, 16, '2021-07-08 18:18:22', 22, '2021-07-10 10:01:32', NULL, NULL),
(21, 'test123', '321@2321.com', '321', '', NULL, 0, 16, '2021-07-08 18:16:39', NULL, NULL, 22, '2021-07-10 10:01:55'),
(20, 'test', '123@qwewq.com', '123', '', NULL, 0, 16, '2021-07-08 18:07:50', NULL, NULL, 22, '2021-07-10 10:01:58'),
(19, 'Admin2', 'admin@admin1.com', '0192023a7bbd73250516f069df18b500', '[]', NULL, 0, 0, '0000-00-00 00:00:00', NULL, NULL, 22, '2021-07-10 10:02:02'),
(18, 'Admin2', 'admin@admin1.com', '0192023a7bbd73250516f069df18b500', '[]', NULL, 0, 0, '0000-00-00 00:00:00', NULL, NULL, 22, '2021-07-10 10:02:06'),
(16, 'Admin', 'admin@admin.com', '123123', '[]', NULL, 0, 0, '0000-00-00 00:00:00', NULL, NULL, 22, '2021-07-10 10:02:09'),
(17, 'Admin1', 'admin@admin1.com', '4297f44b13955235245b2497399d7a93', '[\"http://localhost/smart-city-ci/uploads/1.PNG\"]', NULL, 0, 0, '0000-00-00 00:00:00', NULL, NULL, 22, '2021-07-10 10:02:13'),
(25, 'FRB-admin', '123@qwewq.com', '12323', 'http://localhost/carikamar-web/admin/upload/user/prosedur_pengembangan_(2).png', 1, 1, 16, '2021-07-08 18:32:36', NULL, NULL, NULL, NULL),
(26, 'Jakarta', '123@qwewq.com', '123', '', NULL, 0, 16, '2021-07-08 18:39:46', NULL, NULL, 22, '2021-07-10 10:02:16'),
(27, 'FRB-admin', '123@qwewq.com', 'asdsad', 'http://localhost/carikamar-web/admin/upload/user/prosedur_pengembangan_(2).png', NULL, 1, 16, '2021-07-08 18:55:13', NULL, NULL, NULL, NULL),
(28, 'Jakarta', '123@qwewq.com', 'qw3q2', 'http://localhost/carikamar-web/admin/upload/user/prosedur_pengembangan_(2)1.png', NULL, 1, 16, '2021-07-08 18:57:18', NULL, NULL, NULL, NULL),
(29, 'test', 'admin@admin.com', '123456', '', 1, 1, 0, '2021-07-12 09:53:46', NULL, NULL, NULL, NULL),
(30, 'test', '123@qwewq.com', '123456', '', 1, 1, 0, '2021-07-12 10:00:31', NULL, NULL, NULL, NULL),
(31, 'test', 'test@test.com', '123456', '', 1, 0, 0, '2021-07-12 10:02:00', NULL, NULL, NULL, NULL),
(32, 'Admin Fikri', 'fikri@gmail.com', '4297f44b13955235245b2497399d7a93', '[\"http://caka.extranet.carikamar.id/uploads/t.PNG\"]', 1, 0, 0, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
(34, 'Fikri Hatim 123', 'fikritest@gmail.com', '123456', '', 1, 1, 0, '2021-07-22 20:05:25', NULL, NULL, NULL, NULL),
(33, 'Test Update', 'HHHH', '123123123', '[]', NULL, 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
(40, 'TESTTEST', 'HHHH', '123123123', '[\"http://localhost/smart-city-ci/uploads/13.PNG\",\"http://localhost/smart-city-ci/uploads/14.PNG\"]', NULL, 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
(39, 'Admin2', 'admin@admin1.com', '0192023a7bbd73250516f069df18b500', '[\"http://localhost/smart-city-ci/uploads/p.png\"]', NULL, 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
(38, 'Adminarray', 'admin@admin1.com', '0192023a7bbd73250516f069df18b500', '[\"http://localhost/smart-city-ci/uploads/33.PNG\"]', NULL, 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
(41, 'Adminarray1', 'admin@admin1.com', '0192023a7bbd73250516f069df18b500', '[]', NULL, 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
(42, 'Admin21', 'admin@admin1.com', '0192023a7bbd73250516f069df18b500', '[\"http://localhost/smart-city-ci/uploads/4.PNG\",\"http://localhost/smart-city-ci/uploads/41.PNG\"]', NULL, 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
(43, 'eko hariyanto', 'ekohariyanto.ikt@gmail.com', 'elang123', '', 1, 1, 0, '2021-08-08 13:40:18', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `promo`
--

CREATE TABLE `promo` (
  `id` int(11) NOT NULL,
  `informasi_umum_detail_id` int(11) NOT NULL,
  `promo_id` int(11) NOT NULL,
  `tipe_kamar_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `properti_detail`
--

CREATE TABLE `properti_detail` (
  `id` int(11) NOT NULL,
  `fk_id_users` int(11) DEFAULT NULL,
  `informasi_umum_detail_id` int(11) NOT NULL,
  `mata_uang` varchar(100) NOT NULL,
  `flag_kawasan` int(1) NOT NULL COMMENT '1 = Tersedia 24 Jam, 2 = Tidak Tersedia 24 Jam',
  `waktu_checkin` time NOT NULL,
  `waktu_checkout` time NOT NULL,
  `jarak_ke_kota` decimal(10,0) NOT NULL,
  `jumlah_lantai` int(11) NOT NULL,
  `biaya_sarapan_tambahan` decimal(10,0) NOT NULL,
  `master_cancel_id` int(11) DEFAULT NULL,
  `master_style_id` varchar(100) DEFAULT NULL COMMENT 'Tipe data Array (Boleh lebih dari 1)',
  `status_id` int(1) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `properti_detail`
--

INSERT INTO `properti_detail` (`id`, `fk_id_users`, `informasi_umum_detail_id`, `mata_uang`, `flag_kawasan`, `waktu_checkin`, `waktu_checkout`, `jarak_ke_kota`, `jumlah_lantai`, `biaya_sarapan_tambahan`, `master_cancel_id`, `master_style_id`, `status_id`, `created_by`, `created_date`, `updated_by`, `updated_date`, `deleted_by`, `deleted_date`) VALUES
(2, 24, 1, 'Rupe', 1, '00:00:00', '00:00:00', '2', 10, '10', 4, '5', 1, 0, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
(4, 24, 61, 'IDR', 1, '16:45:00', '11:51:00', '12', 12, '10000', NULL, NULL, 1, 22, '2021-07-10 10:46:02', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `properti_detail_master_cancel`
--

CREATE TABLE `properti_detail_master_cancel` (
  `id` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `status_id` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `properti_detail_master_cancel`
--

INSERT INTO `properti_detail_master_cancel` (`id`, `nama`, `status_id`) VALUES
(2, 'Non Refundable', 1),
(3, 'Cancel 1D Prior Arrival 1 Night Charge, No Show 1 Night Charge', 1),
(4, 'Cancel 1D Prior Arrival 1 Night Charge, No Show 100% Charge', 1),
(5, 'Cancel 3D Prior Arrival 1 Night Charge, No Show 1 Night Charge', 1),
(6, 'Cancel 3D Prior Arrival 1 Night Charge, No Show 100% Charge', 1),
(7, 'CancellllAA', 0),
(8, 'Bondol ', 0),
(9, 'admin', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `properti_detail_master_style`
--

CREATE TABLE `properti_detail_master_style` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status_id` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `properti_detail_master_style`
--

INSERT INTO `properti_detail_master_style` (`id`, `nama`, `status_id`) VALUES
(1, 'Adventure', 1),
(2, 'Airport', 1),
(3, 'Budget', 1),
(4, 'Backpacker', 1),
(5, 'Shopping', 1),
(6, 'Bapack-Bapack', 1),
(7, 'Radya Smith EliasAAA', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `review_kontrak`
--

CREATE TABLE `review_kontrak` (
  `id` int(11) NOT NULL,
  `informasi_penandatangan_kontrak_id` int(11) NOT NULL,
  `perjanjian_kontrak_id` int(11) NOT NULL,
  `flag_menyetujui` int(1) NOT NULL COMMENT '0 = Tidak, 1 = Ya',
  `status_id` int(1) NOT NULL COMMENT '0 = Tidak Aktif, 1 = Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `review_kontrak`
--

INSERT INTO `review_kontrak` (`id`, `informasi_penandatangan_kontrak_id`, `perjanjian_kontrak_id`, `flag_menyetujui`, `status_id`) VALUES
(1, 2, 1, 0, 0),
(2, 0, 3, 1, 1),
(3, 0, 3, 2, 1),
(4, 1, 3, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_kamar`
--

CREATE TABLE `tipe_kamar` (
  `id` int(11) NOT NULL,
  `informasi_umum_detail_id` int(11) NOT NULL,
  `nama_kamar` varchar(100) NOT NULL,
  `master_tipe_kamar_id` int(11) NOT NULL,
  `master_tipe_kasur_id` int(11) NOT NULL,
  `maksimum_kapasitas` int(11) NOT NULL,
  `maksimum_extra_bed` decimal(10,0) NOT NULL,
  `harga_extra_bed` decimal(10,0) NOT NULL,
  `ukuran_kamar_lebar` decimal(10,2) NOT NULL,
  `ukuran_kamar_panjang` decimal(10,2) NOT NULL,
  `harga_kamar` decimal(10,2) NOT NULL,
  `flag_included_breakfast` int(11) DEFAULT NULL COMMENT '0 = Tidak, 1 = Ya',
  `jumlah_kamar` int(11) NOT NULL,
  `status_id` int(1) NOT NULL COMMENT '0 = Tidak Aktif, 1 = Aktif	',
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tipe_kamar`
--

INSERT INTO `tipe_kamar` (`id`, `informasi_umum_detail_id`, `nama_kamar`, `master_tipe_kamar_id`, `master_tipe_kasur_id`, `maksimum_kapasitas`, `maksimum_extra_bed`, `harga_extra_bed`, `ukuran_kamar_lebar`, `ukuran_kamar_panjang`, `harga_kamar`, `flag_included_breakfast`, `jumlah_kamar`, `status_id`, `created_by`, `created_date`, `updated_by`, `updated_date`, `deleted_by`, `deleted_date`) VALUES
(11, 3, 'RRRSSSS', 3, 2, 10, '444', '444', '10.00', '4.00', '44444.00', 1, 0, 1, 1, '2021-07-17 18:07:53', NULL, NULL, NULL, NULL),
(10, 2, 'Tyai', 4, 2, 10000, '11111', '11111', '11.00', '11.00', '30000.00', 1, 0, 1, 1, '2021-07-17 17:55:36', NULL, NULL, NULL, NULL),
(9, 3, 'Tyai', 2, 3, 12, '12', '122222', '11.00', '11.00', '30000.00', 1, 0, 1, 1, '2021-07-17 17:42:36', NULL, NULL, NULL, NULL),
(8, 9, 'sdafsda', 3, 4, 12, '111', '122222', '11.00', '11.00', '111111.00', 1, 0, 1, 1, '2021-07-17 17:40:19', NULL, NULL, NULL, NULL),
(7, 3, 'RRRRR', 1, 2, 10000, '123', '122222', '11.00', '11.00', '11111.00', 1, 0, 1, 1, '2021-07-17 17:38:55', NULL, NULL, NULL, NULL),
(12, 4, 'TTTTT', 2, 2, 10, '10', '1000', '10.00', '10.00', '44444.00', 1, 0, 1, 1, '2021-07-17 18:10:10', NULL, NULL, NULL, NULL),
(13, 4, 'TTTTT', 2, 1, 10, '10', '1000', '10.00', '10.00', '44444.00', NULL, 0, 1, 1, '2021-07-17 18:10:11', NULL, NULL, NULL, NULL),
(14, 3, 'TTTTTAAAAAAAAAA', 3, 2, 444, '444', '1000', '10.00', '10.00', '10000.00', 1, 0, 1, 1, '2021-07-17 18:11:01', NULL, NULL, NULL, NULL),
(15, 7, 'AAAAAAAAAAAAA', 3, 2, 444, '444', '1000', '10.00', '10.00', '10000.00', NULL, 0, 1, 1, '2021-07-17 18:11:01', NULL, NULL, NULL, NULL),
(16, 2, 'qwe', 2, 5, 967, '87', '1200', '12.00', '23.00', '12345.00', 0, 0, 1, 1, '2021-07-19 04:58:54', NULL, NULL, NULL, NULL),
(17, 3, 'qwe123', 1, 2, 123, '123', '1200', '123.00', '321.00', '2.00', NULL, 0, 1, 1, '2021-07-19 04:58:54', NULL, NULL, NULL, NULL),
(18, 14, 'test1', 1, 2, 123, '321', '234', '2.00', '3.00', '50000.00', 0, 4, 1, 1, '2021-07-19 05:03:51', NULL, NULL, NULL, NULL),
(19, 14, 'test2', 2, 3, 321, '123', '123', '3.00', '32.00', '1230000.00', NULL, 1, 1, 1, '2021-07-19 05:03:51', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fasilitas_properti`
--
ALTER TABLE `fasilitas_properti`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `foto_kamar`
--
ALTER TABLE `foto_kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `foto_properti`
--
ALTER TABLE `foto_properti`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `foto_tipe`
--
ALTER TABLE `foto_tipe`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi_pembayaran`
--
ALTER TABLE `informasi_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi_penandatangan_kontrak`
--
ALTER TABLE `informasi_penandatangan_kontrak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi_umum_detail`
--
ALTER TABLE `informasi_umum_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi_umum_kontak`
--
ALTER TABLE `informasi_umum_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_bank`
--
ALTER TABLE `master_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_fasilitas_kamar_detail`
--
ALTER TABLE `master_fasilitas_kamar_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_fasilitas_kamar_header`
--
ALTER TABLE `master_fasilitas_kamar_header`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_fasilitas_properti_detail`
--
ALTER TABLE `master_fasilitas_properti_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fasilitas_properti_header_id` (`fasilitas_properti_header_id`);

--
-- Indeks untuk tabel `master_fasilitas_properti_header`
--
ALTER TABLE `master_fasilitas_properti_header`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_perjanjian_kontrak`
--
ALTER TABLE `master_perjanjian_kontrak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_promo`
--
ALTER TABLE `master_promo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_role`
--
ALTER TABLE `master_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_role_kontrak`
--
ALTER TABLE `master_role_kontrak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_tipe_kamar`
--
ALTER TABLE `master_tipe_kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_tipe_kasur`
--
ALTER TABLE `master_tipe_kasur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_tipe_properti`
--
ALTER TABLE `master_tipe_properti`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_user`
--
ALTER TABLE `master_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `properti_detail`
--
ALTER TABLE `properti_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `properti_detail_master_cancel`
--
ALTER TABLE `properti_detail_master_cancel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `properti_detail_master_style`
--
ALTER TABLE `properti_detail_master_style`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `review_kontrak`
--
ALTER TABLE `review_kontrak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `fasilitas_properti`
--
ALTER TABLE `fasilitas_properti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `foto_kamar`
--
ALTER TABLE `foto_kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `foto_properti`
--
ALTER TABLE `foto_properti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `foto_tipe`
--
ALTER TABLE `foto_tipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `informasi_pembayaran`
--
ALTER TABLE `informasi_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `informasi_penandatangan_kontrak`
--
ALTER TABLE `informasi_penandatangan_kontrak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `informasi_umum_detail`
--
ALTER TABLE `informasi_umum_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `informasi_umum_kontak`
--
ALTER TABLE `informasi_umum_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `master_bank`
--
ALTER TABLE `master_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `master_fasilitas_kamar_detail`
--
ALTER TABLE `master_fasilitas_kamar_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `master_fasilitas_kamar_header`
--
ALTER TABLE `master_fasilitas_kamar_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `master_fasilitas_properti_detail`
--
ALTER TABLE `master_fasilitas_properti_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `master_fasilitas_properti_header`
--
ALTER TABLE `master_fasilitas_properti_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `master_perjanjian_kontrak`
--
ALTER TABLE `master_perjanjian_kontrak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `master_promo`
--
ALTER TABLE `master_promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `master_role`
--
ALTER TABLE `master_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `master_role_kontrak`
--
ALTER TABLE `master_role_kontrak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `master_tipe_kamar`
--
ALTER TABLE `master_tipe_kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `master_tipe_kasur`
--
ALTER TABLE `master_tipe_kasur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `master_tipe_properti`
--
ALTER TABLE `master_tipe_properti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `master_user`
--
ALTER TABLE `master_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `promo`
--
ALTER TABLE `promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `properti_detail`
--
ALTER TABLE `properti_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `properti_detail_master_cancel`
--
ALTER TABLE `properti_detail_master_cancel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `properti_detail_master_style`
--
ALTER TABLE `properti_detail_master_style`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `review_kontrak`
--
ALTER TABLE `review_kontrak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `master_fasilitas_properti_detail`
--
ALTER TABLE `master_fasilitas_properti_detail`
  ADD CONSTRAINT `master_fasilitas_properti_detail_ibfk_1` FOREIGN KEY (`fasilitas_properti_header_id`) REFERENCES `master_fasilitas_properti_header` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
