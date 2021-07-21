-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 21, 2021 at 09:59 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dipa_tes`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `address_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `kota_id` int(11) NOT NULL,
  `kode_pos` varchar(100) NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `contact_person` varchar(25) NOT NULL,
  `type_alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`address_id`, `customer_id`, `alamat`, `kota_id`, `kode_pos`, `no_telp`, `contact_person`, `type_alamat`) VALUES
(1, 6, 'Bogor', 1, '1729', '8789', '789789', 'Alamat Faktur'),
(2, 5, 'Bandung', 1, '45', '54', '5435', 'Alamat Pengirim'),
(5, 8, 'Cileungsi', 1, '16820', '088898988', '0217989789', 'Alamat Faktur');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `npwp`, `nama`, `area`, `type`) VALUES
(4, '5435435', 'Abdul Rosid', 'Jawa', 'Non Industry'),
(5, '34324324', 'Abizar', 'Jawa', 'Industry'),
(6, '34232432434', 'Anissa', 'Jawa', 'Industry'),
(8, '23543543545', 'Ahmad', 'Jawa', 'Industry');

-- --------------------------------------------------------

--
-- Table structure for table `cuti_karyawan`
--

CREATE TABLE `cuti_karyawan` (
  `id` int(11) NOT NULL,
  `nomor_induk` varchar(100) NOT NULL,
  `tanggal_mulai` datetime NOT NULL,
  `lama_cuti` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuti_karyawan`
--

INSERT INTO `cuti_karyawan` (`id`, `nomor_induk`, `tanggal_mulai`, `lama_cuti`, `keterangan`) VALUES
(1, 'IP06001', '2021-07-22 13:13:52', 2, 'Acara keluarga'),
(2, 'IP06002', '2021-07-23 13:13:52', 2, 'Acara penting'),
(3, 'IP06003', '2019-02-13 16:25:41', 1, 'nenek sakit'),
(4, 'IP07004', '2019-02-27 16:25:41', 1, 'imunisasi anak'),
(5, 'IP07006', '2019-02-20 16:27:28', 5, 'menikah'),
(6, 'IP07007', '2019-02-15 16:27:28', 1, 'nenek sakit');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nomor_induk` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_lahir` datetime NOT NULL,
  `tanggal_masuk` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nomor_induk`, `nama`, `alamat`, `tanggal_lahir`, `tanggal_masuk`) VALUES
(1, 'IP06001', 'Agus', 'Jln Gajah Mada 115A, Jakarta Pusat', '2021-07-21 06:11:41', '2020-07-01 06:11:41'),
(2, 'IP06002', 'Amin', 'Jln. Bungur sari v', '2021-07-21 06:11:41', '2019-07-04 06:11:41'),
(3, 'IP06003', 'Yusuf', 'Jln Yosodipuro 15, Surakarta', '2021-07-22 16:14:06', '2006-07-14 16:14:06'),
(4, 'IP07004', 'Alyssa', 'Jln Cendana No.6, Bandung', '1983-02-11 16:14:06', '2007-01-24 16:14:06'),
(5, 'IP07006', 'Afika', 'Jln Pejaten Barat No.6A', '1987-03-13 16:14:06', '2007-06-14 16:14:06'),
(6, 'IP07007', 'James', 'Jln Padjajaran No.111, Bandung', '1988-05-18 16:14:06', '2006-06-15 16:14:06'),
(7, 'IP09008', 'Octavanus', 'Jln Gajah Mada 101, Semarang', '2021-07-20 16:14:06', '2021-07-15 16:14:06'),
(8, 'IP09009', 'Nugroho', 'Ljn Duren Tiga 196, Jakarta selatan', '2021-07-22 16:14:06', '2021-07-14 16:14:06'),
(9, 'IP09010', 'Raisa', 'Jln Nangka Jakarta selatan', '2021-07-15 16:14:06', '2021-07-30 16:14:06');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `kota_id` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`kota_id`, `nama_kota`) VALUES
(1, 'Jakarta'),
(2, 'Bogor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `cuti_karyawan`
--
ALTER TABLE `cuti_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`kota_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cuti_karyawan`
--
ALTER TABLE `cuti_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `kota_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
