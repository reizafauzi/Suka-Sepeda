-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2019 at 10:33 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sepeda`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `gambar` varchar(255) NOT NULL DEFAULT 'default.png',
  `theme` varchar(20) NOT NULL DEFAULT 'sb_admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `nama`, `status`, `gambar`, `theme`) VALUES
(2, 'admin@admin.com', 'admin', 'admin', 1, 'default.png', 'sb_admin');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(2) NOT NULL,
  `id_kategori` int(2) NOT NULL,
  `nama_gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `id_kategori`, `nama_gambar`) VALUES
(1, 1, '3be50-a5.jpg'),
(2, 1, '32d50-a6.jpg'),
(3, 1, '27243-a9.jpg'),
(4, 2, '2ff43-f6.jpg'),
(5, 2, '3bcb0-ban.jpg'),
(6, 3, '4dd89-h7.jpg'),
(7, 3, '04586-w3.jpg'),
(8, 3, '1c016-i9.jpeg'),
(9, 2, '0d0b2-f5.jpg'),
(10, 2, '7820c-f8.jpg'),
(11, 2, 'bc46d-f3.jpg'),
(12, 3, '2383a-untitled.jpg'),
(13, 3, '6c23c-w1.jpg'),
(14, 3, '3e155-h9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(1) NOT NULL,
  `nama_kategory` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategory`) VALUES
(1, 'sepeda bmx '),
(2, 'sepeda balap'),
(3, 'sepeda gunung ');

-- --------------------------------------------------------

--
-- Table structure for table `suku_cadang`
--

CREATE TABLE `suku_cadang` (
  `id` int(2) NOT NULL,
  `id_kategori` int(2) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suku_cadang`
--

INSERT INTO `suku_cadang` (`id`, `id_kategori`, `nama`, `isi`, `gambar`) VALUES
(1, 1, 'BMX Bars ', '<p>\r\n	GT Power Handlebar 22.2mm BICYCLE BMX DYNO FREESTYLE BARS CRUISER OLD SCHOOL</p>\r\n', '19414-c1.jpg'),
(2, 1, 'Staats Racing BMX ', '<p>\r\n	Bike Frame 20.5in XXL TT 20&quot; Wheels</p>\r\n', '1e8f0-c2.jpg'),
(3, 1, 'BMX Tire Redline', '<p>\r\n	Black Redline Ornate 20&quot;x2.125&quot; Freestyle Bicycle Tires BMX Bike Tire</p>\r\n', '413c6-c3.jpg'),
(4, 1, 'SPRIMO SIMMONS', '<p>\r\n	BMX bike SPROCKET 28t gear PRIMO SIMMONS BMX 22mm X 48 SPLINE DRIVE new</p>\r\n', 'a61d4-c4.jpg'),
(5, 1, 'BMX Chromoly Fork', '<h4>\r\n	BMX Chromoly Fork</h4>\r\n', 'd1c92-c5.jpg'),
(6, 1, 'Fly roey tripod seat', '<p>\r\n	Seat type : tripod - Seat size : slim - Weight : 214g (seat) 114g(post)</p>\r\n', 'a80ec-c6.jpg'),
(7, 3, 'Suspensi depan(Fork Depan) suntour axon Travel 100mm', '<p>\r\n	- air/hydraulic remote speed lock w/rebound adjust, discbrake only</p>\r\n<p>\r\n	- berat : 1600 gram - streerer tube : A7075 alloy</p>\r\n<p>\r\n	- category : 26&rdquo;, C-country, All mountain, Enduro</p>\r\n', '8ba01-r1.jpg'),
(8, 3, 'Hub Novatov 4 in 1 ', '<p>\r\n	-For XD/DH/FR/AM -Easy Tools, Replaceable bearing</p>\r\n<p>\r\n	-Quick Release, True Axle 15mm and 20mm Ready</p>\r\n', 'e922f-r2.jpg'),
(9, 3, 'Frame United Patrol 512', '<p>\r\n	-Rear Shock Ario 3.2</p>\r\n<p>\r\n	-Berat : 3,05kg</p>\r\n<p>\r\n	-Travel 5&rdquo; (Eye to Eye 19cm)</p>\r\n', 'd1d0d-r3.jpg'),
(10, 2, 'Wheelset Roadbike ', '<p>\r\n	700c Wh-R010 10/11speed</p>\r\n', 'b4e4f-d1.jpg'),
(11, 2, 'Frame Mosso Road Bike 702TB3', '<p>\r\n	Size 52cm - Including Headset &amp; Fork - Aluminium 7005 Triple Butted - Super Light - High Strength Heat Treated - Best Material - Best Structure - The Best Torque Force</p>\r\n', '0674c-d2.jpg'),
(12, 2, 'Cinelli DINAMO', '<p>\r\n	Cinelli DINAMO 31.8mm Aluminum Road Bicycle Black 42cm Dropbar Drop Bar</p>\r\n', '5b1f7-d3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tjm_menu`
--

CREATE TABLE `tjm_menu` (
  `id` int(11) NOT NULL,
  `parent_menu` int(11) NOT NULL DEFAULT '1',
  `nama_menu` varchar(50) NOT NULL,
  `url_menu` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `urutan` tinyint(3) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `type` enum('Admin') NOT NULL DEFAULT 'Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tjm_menu`
--

INSERT INTO `tjm_menu` (`id`, `parent_menu`, `nama_menu`, `url_menu`, `icon`, `urutan`, `status`, `type`) VALUES
(1, 1, 'root', '/', '', 0, 0, 'Admin'),
(2, 1, 'dashboard', 'admin/dashboard', 'fa fa-fw fa-dashboard', 1, 1, 'Admin'),
(3, 1, 'User Admin', 'admin/useradmin', 'fa fa-users', 99, 1, 'Admin'),
(4, 1, 'Menu', 'admin/menu', 'fa fa-gear', 100, 1, 'Admin'),
(30, 1, 'Kategori', 'admin/kategori', ' glyphicon glyphicon-th', 2, 1, 'Admin'),
(31, 1, 'suku cadang', 'admin/sperpart', 'glyphicon glyphicon-cog', 3, 1, 'Admin'),
(32, 1, 'gambar', 'admin/galeri', 'glyphicon glyphicon-picture', 5, 1, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suku_cadang`
--
ALTER TABLE `suku_cadang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tjm_menu`
--
ALTER TABLE `tjm_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `suku_cadang`
--
ALTER TABLE `suku_cadang`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tjm_menu`
--
ALTER TABLE `tjm_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
