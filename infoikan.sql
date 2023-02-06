-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 03:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infoikan`
--

-- --------------------------------------------------------

--
-- Table structure for table `ikan_hias`
--

CREATE TABLE `ikan_hias` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nama_ilmiah` varchar(255) NOT NULL,
  `ukuran_ikan` varchar(255) NOT NULL,
  `kesulitan` varchar(255) NOT NULL,
  `sifat` varchar(255) NOT NULL,
  `panjang_umur` varchar(255) NOT NULL,
  `makanan` varchar(255) NOT NULL,
  `ukuran_akuarium` varchar(255) NOT NULL,
  `suhu_optimal` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ikan_hias`
--

INSERT INTO `ikan_hias` (`id`, `nama`, `nama_ilmiah`, `ukuran_ikan`, `kesulitan`, `sifat`, `panjang_umur`, `makanan`, `ukuran_akuarium`, `suhu_optimal`, `gambar`) VALUES
(1, 'Neon Tetra', 'Paracheirodon innesi', '3,5 – 4 cm', 'Mudah dipelihara', 'Damai', '5 - 8 tahun', 'Jentik nyamuk, cacing, kutu air, pelet', '40 liters', '20 – 28 °C', 'neon_tetra.jpg'),
(2, 'Harlequin Rasboras', 'Trigonostigma heteromorpha', '3,5 - 5 cm', 'Mudah dipelihara', 'Damai', '6 tahun tau lebih', 'Pelet, jentik nyamuk, cacing darah, cacing beku, larva serangga.', '40 liters', '22 – 28 °C', 'harlequin-rasbora-1378462-03-f63f75bedf424e409f83beb7ffcd00fa.jpeg'),
(3, 'Black Tetra', 'Gymnocorymbus ternetzi', '2,5 - 6 cm', 'Tidak terlalu mudah dipelihara', 'Sedikit agresif', '3 - 5 tahun', 'Pelet, serangga, cacing, jentik nyamuk, spirulina.', '55 liters', '20 - 26°C', 'black_tetra.jpg'),
(4, 'Ember  Tetra', 'Hyphessobrycon amandae', '- 2,5 cm', 'Mudah dipelihara', 'Damai', '2 - 4 tahun', 'Pelet, tanaman, daphnia dan artemia', '35-40 liters', '22 - 28°C', 'Ikan-tetra-oranye.jpg'),
(5, 'Discus', 'Symphysodon', '15-20 cm', 'Sulit dipelihara', 'Damai', '5 tahunan', 'Pelet, cacing', '189 liters', '28 - 31°C', 'fish-5970565-1920-bbOs5xt.jpg'),
(6, 'Cupang', 'Bettas', '2 - 6 cm', 'Mudah dipelihara', 'Agresif', '2 - 5 tahun', 'Pelet, cacing, daphnia, artemia, jentik nyamuk, ', '19 liters', '24 - 27°C', 'download.jpg'),
(7, 'Manfish', 'Pterophyllum scalare', '7, 5 – 18 cm', 'Sulit dipelihara', 'Agresif', '10 tahun lebih', 'Pelet, cacing, daphnia, artemia, jentik nyamuk', '120 liters', '25 - 28°C', 'jenis-ikan-manfish-zabra.jpg'),
(8, 'Black Ghost Knifefish', 'Apteronotus albifron', '4 - 50 cm', 'Sulit dipelihara', 'Agresif', '15 tahunan', 'Pelet, cacing, jentik nyamuk', '300 liters', '22 - 27°C', 'blackghost1.jpg'),
(9, 'Zebra Danio', 'Danio rerio', '2 - 5 cm', 'Mudah dipelihara', 'Tidak terlalu agresif', '3,5 – 5,5 tahun', 'Pelet, alga, serangga, dan kutu air, cacing', '40 liters', '18 - 24°C', 'zevra.jpg'),
(10, 'Lemon Cichlid', 'Labidochromis caeruleus', '13 cm', 'Mudah dipelihara', 'Damai', '9 tahun', 'cacing sutera, kutu air, udang air asin', '160 liters', '24 - 30°C', 'ikan-lemon-diakuarium.png'),
(11, 'Oscar', 'Astronotus ocellatus', '25 - 30 cm', 'Sulit dipelihara', 'Agresif', '20 tahun', 'Ikan kecil, pelet, serangga', '208 liters', '23 - 27°C', 'BDP_Ikan_Oscar.png'),
(12, 'Emperor Tetra', 'Nematobrycon palmeri', '2 - 6 cm', 'Mudah dipelihara', 'Damai', '6 tahunan', 'Pelet, cacing, daphnia, artemia, jentik nyamuk', '90 Litre', '22 - 27°C', 'emperor-tetra.jpg'),
(13, 'Molly', 'Poecilia sphenops', '5 - 7 cm', 'Mudah dipelihara', 'Damai', '3 - 5 tahun', 'Pelet, cacing, daphnia, artemia, jentik nyamuk', '35-40 liters', '22 - 25°C', 'ikan_molly-1_width-800.jpg'),
(14, 'Guppy', 'Poecilia reticulata', '2 - 6 cm', 'Mudah dipelihara', 'Damai', '1 - 3 tahun', 'Pelet, cacing, daphnia, artemia, jentik nyamuk', '35-40 liters', '22 - 27°C', 'guppy.jpg'),
(15, 'Chinese Algae Eater', 'Gyrinocheilus aymonieri', '12 cm', 'Mudah dipelihara', 'Damai', '5 - 10 tahun', 'Lumut', '200 liters', '24 - 26°C', 'cae_2_-_aquascapebatang.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id` int(11) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id`, `nama_toko`, `alamat`, `link`) VALUES
(1, 'Aqua Deal Pekanbaru', 'Jl. Angsa I Satu No.9, Kampung Melayu, Sukajadi, Pekanbaru City, Riau 28124, Indonesia', 'https://goo.gl/maps/sTK7tANSK6fWW66N6'),
(2, 'Grosir Ikan Hias Pekanbaru', 'Jalan Soekarno - Hatta, Maharatu, Pekanbaru City, Riau, Indonesia', 'https://goo.gl/maps/97dwTScdiKtnBEKq7'),
(3, 'Peternakan Ikan Hias Jaya', 'Simpang Tiga, Pekanbaru City, Riau, Indonesia', 'https://goo.gl/maps/gax3rYtRrvnfkXEY6'),
(4, 'Aneka Aquarium', 'Jalan Sultan Syarif Qasim, RW.Kecamatqn 50, Pesisir, Pekanbaru City, Riau, Indonesia', 'https://goo.gl/maps/mZHmrwY4vWmyUFRYA'),
(5, 'Hidayat Citra Aquarium', 'Jalan HR. Soebrantas, Sidomulyo Barat, Pekanbaru City, Riau, Indonesia', 'https://goo.gl/maps/hjWNW9WNZSLaFhvdA'),
(6, 'Guppy Pekanbaru', 'Blk. R, Sidomulyo Barat, Pekanbaru City, Riau, Indonesia', 'https://g.page/Guppy-Pekanbaru?share'),
(7, 'Grosir Ikan Cupang Zikri Abizar', 'Gang Irkab, RT.01/RW.13, Sidomulyo Timur, Pekanbaru City, Riau, Indonesia', 'https://goo.gl/maps/NMesWqT8i6HNmtGc9'),
(8, 'Rumah Beta Pekanbaru (RBP)', 'Jalan Tengku Bey Jl. Ilham, Simpang Tiga, Pekanbaru City, Riau, Indonesia', 'https://goo.gl/maps/8MKAgfQXjynZaXKC9'),
(9, 'As Betta Farm Pekanbaru', 'Jalan Hangtuah Ujung, Rejosari, Pekanbaru City, Riau, Indonesia', 'https://goo.gl/maps/okrA3KqGYZ3Ftpv2A'),
(10, 'Aquarium 99', 'Rumbai, Jalan Sekolah, Meranti Pandak, Pekanbaru City, Riau, Indonesia', 'https://goo.gl/maps/FjeT52uxhiU1hhQs6');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gambar`, `role`, `date_created`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$645Ofe8PyZFDxuQiQ12vKeGYqWWf/yhSvyMtUgQx3L7qM0ntUkugm', 'default.jpg', 'Admin', 1650698684),
(2, 'User', 'user@gmail.com', '$2y$10$5qQIf/22tIrXjrWT2gYEd.jxgKIfRWtibFrIXKvpqOidCOyn.ZbS6', 'default.jpg', 'User', 1650698727),
(3, 'tes', 'tes@gmail.com', '$2y$10$KLFLwsjT9WH6uDZIhEJiZ.BHnAuwnCtQWtvOrBXh0bEBA9L7MBPmG', 'default.jpg', 'User', 1651547732),
(4, 'aaaaa', 'aaaaa@gmail.com', '$2y$10$oF3Ibz/oWo7COT29Q352/u.ZrTK6HggLEEkJKqQBugnoTZAhy3VeC', 'default.jpg', 'Admin', 1656214040);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ikan_hias`
--
ALTER TABLE `ikan_hias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ikan_hias`
--
ALTER TABLE `ikan_hias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
