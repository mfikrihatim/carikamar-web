-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2020 at 05:37 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cuti`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cuti`
--

CREATE TABLE `tbl_cuti` (
  `id` int(11) NOT NULL,
  `tgl_request` date NOT NULL,
  `requester` varchar(50) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `request_date` date NOT NULL,
  `dari_tanggal` date NOT NULL,
  `sampai_tanggal` date NOT NULL,
  `jenis_cuti` varchar(30) NOT NULL,
  `status` varchar(15) NOT NULL,
  `id_date` varchar(15) NOT NULL,
  `id_karyawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cuti`
--

INSERT INTO `tbl_cuti` (`id`, `tgl_request`, `requester`, `keterangan`, `request_date`, `dari_tanggal`, `sampai_tanggal`, `jenis_cuti`, `status`, `id_date`, `id_karyawan`) VALUES
(32, '2020-10-19', 'Joko', 'Reguler', '2020-10-21', '2020-10-29', '2020-10-30', 'ce', 'Approved', 'rMlK60eDx0rps9X', 1),
(33, '2020-10-19', 'Joko', 'Reguler', '0000-00-00', '2020-10-20', '2020-10-27', '12-13', 'Wait For Respon', 'WSr23IqhazVGF6J', 1),
(34, '2020-10-19', 'Joko', 'Reguler', '2020-10-31', '2020-11-07', '2020-12-03', 'fd', 'Wait For Respon', 'Pi1TrXThTyB4V6n', 1),
(35, '2020-10-19', 'Ronaldo', 'Reguler', '0000-00-00', '2020-10-27', '2020-10-27', 'ads', 'Wait For Respon', 'NTsS21JgeHBZ8tw', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Joko', 'Joko', '123456', '1'),
(2, 'Bagus', 'Bagus', '123456', '2'),
(3, 'Ronaldo', 'Ronaldo', '123456', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cuti`
--
ALTER TABLE `tbl_cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cuti`
--
ALTER TABLE `tbl_cuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
