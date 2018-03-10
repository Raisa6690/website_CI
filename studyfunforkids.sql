-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2015 at 03:04 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studyfunforkids`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_user` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `judulartikel` varchar(100) NOT NULL,
  `tglartikel` date NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_user`, `id`, `judulartikel`, `tglartikel`, `isi`) VALUES
(4, 9, 'Jago Membaca Cepat', '2015-11-29', 'Kemampuan membaca cepat terkait erat dengan kemampuan mengenali kata. Manusia mengenali berbagai kata lewat buku dan tulisan yang dibacanya. Kata-kata tersebut disimpan dalam memori otak dan akan dikenali lebih cepat ketika ditemukan kembali pada bahan bacaan yang baru.'),
(7, 10, 'Cara Cepat Belajar Membaca Anak TK', '2015-11-27', 'Pendidikan pada anak balita atau batita, harus memenuhi sifat-sifat:Syarat pertama adalah tidak boleh pasang target karena target akan membebani anak dan membuat stress (Nah kalau ada TK yang mematok anak harus bisa baca ketika selesai TK) ini baru bisa jadi masalah, nanti anak dibebani'),
(4, 11, 'makanan sehat untuk anak-anak', '2014-11-10', 'Kemampuan membaca cepat terkait erat dengan kemampuan mengenali kata. Manusia mengenali berbagai kata lewat buku dan tulisan yang dibacanya. Kata-kata tersebut disimpan dalam memori otak dan akan dikenali lebih cepat ketika ditemukan kembali pada bahan bacaan yang baru.');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `id_user`, `id_artikel`, `komentar`) VALUES
(2, 4, 4, 'haiiiii');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(8) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `terdaftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `nohp`, `email`, `foto`, `level`, `terdaftar`) VALUES
(1, 'danik', '76d5fbb974f54fba7c2ba4cf936fa337', 'danik febrianti', '086666', 'danik@yahoo.com', 'assets/images/users/profil_danik.jpg', 'Admin', '2015-11-07'),
(2, 'okta1', '838b4965396d3dc7aa8533c1b055cbf7', 'oktavianis', '03777', 'okta@yahoo.com', 'assets/images/users/profil_okta.jpg', 'Member', '2015-11-07'),
(3, 'danik', '76d5fbb974f54fba7c2ba4cf936fa337', 'danik', '122', 'danik@yahoo.com', 'assets/images/users/profil_danik.jpg', 'Member', '2015-11-11'),
(4, 'okta', '411d2f5092ce942f2163866113f28168', 'oktavianis_kartika', 'pffft', 'okta@yahoo.com', 'assets/images/users/profil_oktavianis_kartika.jpg', 'Member', '2015-11-21'),
(5, 'irma', '76af47488ac4ecce7c29005f15cf7d0e', 'irma pujadayanti', '456789', 'irma@yahoo.com', 'assets/images/users/profil_irma.jpg', 'Admin', '2015-11-22'),
(7, 'budi', '00dfc53ee86af02e742515cdcf075ed3', 'budi santoso', '676896987', 'budi@yahoo.com', 'assets/images/users/profil_budi.jpg', 'Member', '2015-11-28'),
(10, 'cvv', '05f59f175b8961c00305e4ee7c88f9f2', 'danik', '2456', 'danik@yahoo.com', 'assets/images/users/profil_cvv.jpg', 'Member', '2015-12-10'),
(11, 'dummy', '275876e34cf609db118f3d84b799a790', 'Dummy', '0123456789', 'dummy@dummy.com', 'assets/images/users/profil_dummy.png', 'Member', '2015-12-11'),
(13, 'rasid', '5e2c36e90cd1cc01e3adeafbaef778a3', 'Abdurasyid', '0123456789', 'rasid@dummy.com', 'assets/images/users/profil_rasid.png', 'Admin', '2015-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `tglupload` date NOT NULL,
  `data` varchar(200) NOT NULL,
  `ringkasan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `judul`, `jenis`, `tglupload`, `data`, `ringkasan`) VALUES
(1, 'Lagu', 'lagu', '2015-12-12', 'assets/video/lagu.mp4', 'Test video lagu '),
(2, 'Tutorial ', 'tutorial', '2015-12-12', 'assets/video/tutorial.mp4', 'Test video tutorial '),
(3, 'Tutorial 2', 'tutorial', '2015-12-12', 'assets/video/Adobe Flash CS5 Tutorial - Super Mario Animation (HD) - YouTube.mp4', 'Tutorial kedua'),
(4, 'Helly', 'lagu', '2015-12-12', 'assets/video/Helly Guk Guk Guk - Lagu Anak Anak.mp4', 'Lagu anak-anak'),
(5, 'Tutorial Ralat', 'tutorial', '2015-12-12', 'assets/video/Adobe Flash CS4 Tutorial- How To Use The Bone Tool - YouTube.mp4', 'Ralat....');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
