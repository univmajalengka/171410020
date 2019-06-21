-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2019 pada 14.46
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengolahdata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji`
--

CREATE TABLE `gaji` (
  `Id_gaji` int(11) NOT NULL,
  `id_gol` int(11) NOT NULL,
  `Gaji_pokok` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gaji`
--

INSERT INTO `gaji` (`Id_gaji`, `id_gol`, `Gaji_pokok`) VALUES
(2, 2, 2500000),
(3, 3, 3000000),
(4, 4, 3500000),
(5, 5, 4000000),
(6, 6, 4500000),
(7, 7, 5000000),
(8, 8, 5500000),
(9, 9, 6000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `golongan`
--

CREATE TABLE `golongan` (
  `Id_gol` int(11) NOT NULL,
  `Golongan` varchar(5) NOT NULL,
  `T_kawin` double NOT NULL,
  `T_anak` double NOT NULL,
  `T_umum` double NOT NULL,
  `Askes` double NOT NULL,
  `id_jab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `golongan`
--

INSERT INTO `golongan` (`Id_gol`, `Golongan`, `T_kawin`, `T_anak`, `T_umum`, `Askes`, `id_jab`) VALUES
(1, '1', 1000000, 500000, 200000, 400000, 1),
(2, '2', 800000, 500000, 300000, 400000, 2),
(3, '3', 1700000, 700000, 340000, 400000, 3),
(4, '4', 2440000, 660000, 340000, 400000, 4),
(5, '5', 1200000, 690000, 300000, 400000, 1),
(6, '6', 1500000, 600000, 300000, 400000, 2),
(7, '7', 2000000, 700000, 500000, 400000, 3),
(8, '8', 1200000, 400000, 250000, 400000, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jab` int(11) NOT NULL,
  `Jabatan` varchar(50) NOT NULL,
  `T_Struktural` double NOT NULL,
  `T_Fungsional` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jab`, `Jabatan`, `T_Struktural`, `T_Fungsional`) VALUES
(1, 'admin1', 300000, 300000),
(2, 'admin2', 250000, 250000),
(3, 'admin3', 350000, 400000),
(4, 'admin4', 500000, 500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `Id_pegawai` int(11) NOT NULL,
  `NIP` varchar(30) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `JK` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Jml_anak` smallint(6) NOT NULL,
  `Tempat_lahir` varchar(50) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Telp` varchar(30) NOT NULL,
  `Id_jab` int(11) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`Id_pegawai`, `NIP`, `Nama`, `JK`, `Status`, `Alamat`, `Jml_anak`, `Tempat_lahir`, `Tanggal_lahir`, `Telp`, `Id_jab`, `id_user`) VALUES
(1, '018643678', 'Reyza Reantino', 'L', 'Lajang', 'Desa Rajawangi', 0, 'Majalengka', '1997-12-16', '082128907979', 1, 1),
(2, '027456370', 'Didin Rudini', 'L', 'Lajang', 'Desa Ranji Kulon', 0, 'Majalengka', '1996-02-07', '089665778221', 2, 2),
(3, '037762286', 'Dadan Romadhoni', 'L', 'Lajang', 'Desa Bongas', 0, 'Majalengka', '1997-01-11', '089601607670', 3, 3),
(4, '049927330', 'Yoshiolo', 'L', 'Lajang', 'Desa Heuleut', 0, 'Majalengka', '1997-02-05', '081233119854', 4, 4),
(5, '057225630', 'Fulan', 'L', 'Lajang', 'Desa Leuwimunding', 0, 'Majalengka', '1998-02-08', '087724543117', 5, 5),
(6, '065589434', 'Baswedan', 'L', 'Lajang', 'Desa Sukahaji', 0, 'Majalengka', '1999-04-05', '0877233798222', 6, 6),
(7, '072293774', 'Diki Ihan', 'L', 'Lajang', 'Desa Bongas', 0, 'Majalengka', '1998-07-01', '089662766112', 7, 7),
(8, '082218987', 'Inayma', 'P', 'Lajang', 'Desa Simpeureum', 0, 'Majalengka', '1998-02-09', '081123357668', 8, 8),
(9, '091178654', 'Gesi ', 'P', 'Lajang', 'Desa Rajagaluh', 0, 'Majalengka', '1999-11-08', '082128874432', 9, 9),
(10, '0107564745', 'Dania Herliana', 'P', 'Lajang', 'Desa Ciparay', 0, 'Majalengka', '1998-12-07', '087723543773', 10, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggajian`
--

CREATE TABLE `penggajian` (
  `Id_gajian` int(11) NOT NULL,
  `NIP` varchar(30) NOT NULL,
  `tgl_gajian` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Gaji_pokok` double NOT NULL,
  `T_kawin` double NOT NULL,
  `T_anak` double NOT NULL,
  `T_struktural` double NOT NULL,
  `T_fungsional` double NOT NULL,
  `T_beras` double NOT NULL,
  `Pajak` double NOT NULL,
  `T_umum` double NOT NULL,
  `Askes` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penggajian`
--

INSERT INTO `penggajian` (`Id_gajian`, `NIP`, `tgl_gajian`, `Gaji_pokok`, `T_kawin`, `T_anak`, `T_struktural`, `T_fungsional`, `T_beras`, `Pajak`, `T_umum`, `Askes`) VALUES
(0, '', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1, '0162268654', '2019-03-05 05:45:09', 2000000, 300000, 200000, 100000, 100000, 100000, 100000, 150000, 400000),
(2, '027556339', '2019-03-05 05:45:09', 1800000, 150000, 200000, 75000, 75000, 75000, 75000, 150000, 400000),
(3, '037622988', '2019-03-05 05:45:09', 2200000, 310000, 200000, 200000, 200000, 150000, 100000, 230000, 400000),
(4, '047773383', '2019-03-05 05:45:09', 2000000, 200000, 200000, 200000, 200000, 150000, 150000, 150000, 400000),
(5, '056651107', '2019-03-05 05:45:09', 2900000, 200000, 200000, 200000, 200000, 150000, 150000, 200000, 400000),
(6, '069098822', '2019-03-05 05:45:09', 2500000, 230000, 220000, 200000, 200000, 150000, 150000, 300000, 400000),
(7, '075564322', '2019-03-05 05:45:09', 3000000, 500000, 200000, 200000, 200000, 200000, 200000, 300000, 400000),
(8, '085534383', '2019-03-05 05:45:09', 3100000, 500000, 200000, 200000, 200000, 200000, 200000, 300000, 400000),
(9, '092234238', '2019-03-05 05:45:09', 3500000, 550000, 350000, 300000, 300000, 300000, 300000, 300000, 400000),
(10, '010882454', '2019-03-05 05:45:09', 5000000, 500000, 400000, 400000, 400000, 400000, 400000, 400000, 400000),
(15, '', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `password`, `username`) VALUES
(1, 'rey', 'rey'),
(2, 'eqa', 'eqa'),
(3, 'tdtddt', 'djdytdyd'),
(4, 'jdhhd', 'hdhdh'),
(5, 'ddr', 'julit'),
(6, 'rewqa', 'oikolo'),
(7, 'kulon', 'trews'),
(8, 'jujiw', 'jokolp'),
(9, 'hokil', 'hujik'),
(10, 'hujik', 'nunik');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_jabatan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_jabatan` (
`id_jab` int(11)
,`Jabatan` varchar(50)
,`T_Struktural` double
,`T_Fungsional` double
,`Id_gol` int(11)
,`Golongan` varchar(5)
,`Askes` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_pegawai`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_pegawai` (
`Id_pegawai` int(11)
,`Nama` varchar(50)
,`JK` varchar(10)
,`Alamat` varchar(50)
,`username` varchar(10)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_jabatan`
--
DROP TABLE IF EXISTS `view_jabatan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_jabatan`  AS  select `a`.`id_jab` AS `id_jab`,`a`.`Jabatan` AS `Jabatan`,`a`.`T_Struktural` AS `T_Struktural`,`a`.`T_Fungsional` AS `T_Fungsional`,`b`.`Id_gol` AS `Id_gol`,`b`.`Golongan` AS `Golongan`,`b`.`Askes` AS `Askes` from (`jabatan` `a` join `golongan` `b` on((`b`.`id_jab` = `a`.`id_jab`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_pegawai`
--
DROP TABLE IF EXISTS `view_pegawai`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pegawai`  AS  select `a`.`Id_pegawai` AS `Id_pegawai`,`a`.`Nama` AS `Nama`,`a`.`JK` AS `JK`,`a`.`Alamat` AS `Alamat`,`b`.`username` AS `username` from (`pegawai` `a` join `user` `b` on((`b`.`id_user` = `a`.`id_user`))) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`Id_gaji`);

--
-- Indeks untuk tabel `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`Id_gol`),
  ADD KEY `id_jab` (`id_jab`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jab`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`Id_pegawai`),
  ADD KEY `Id_jab` (`Id_jab`),
  ADD KEY `Id_gol` (`id_user`);

--
-- Indeks untuk tabel `penggajian`
--
ALTER TABLE `penggajian`
  ADD PRIMARY KEY (`Id_gajian`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `golongan`
--
ALTER TABLE `golongan`
  ADD CONSTRAINT `golongan_ibfk_1` FOREIGN KEY (`id_jab`) REFERENCES `jabatan` (`Id_jab`);

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
