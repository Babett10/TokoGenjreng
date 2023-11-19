-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 10:25 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_gitar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Gitar'),
(2, 'Bass'),
(3, 'Amplifier'),
(4, 'Pedal'),
(5, 'Aksesoris');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `telepon` int(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_keranjang` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `stok`, `harga`, `id_jenis`, `merk`, `gambar`, `deskripsi`) VALUES
(1, 'Gibson Les Paul Standard \'50s', 100, 2999, 1, 'Gibson', 'Guitar_1.jpg', 'The new Les Paul™ Standard returns to the classic design that made it relevant, played, and loved – shaping sound across generations and genres of music. It pays tribute to Gibson\'s Golden Era of innovation and brings authenticity back to life. The Les Paul Standard \'50s has a solid mahogany body with a maple top and a rounded 50s-style mahogany neck with a rosewood fingerboard and trapezoid inlays.'),
(2, 'Squier Sonic Telecaster', 100, 228, 1, 'Squier', 'Guitar_2.png', 'The Squier Sonic™ Telecaster® is ready to launch any musical adventure into warp speed, offering iconic Fender® style and inspiring tone for players at any stage. This Tele® sports a slim and inviting “C”-shaped neck profile and a thin, lightweight body for optimal playing comfort while a pair of Squier® single-coil pickups chime with crystal clarity for a wide variety of versatile tones.'),
(3, 'Gibson SG Standard \'61', 100, 1999, 1, 'Gibson', 'Guitar_3.jpg', 'The SG Standard ‘61 returns to the classic design that made it relevant, played, and loved -- shaping sound across generations and genres of music. In 1961, the Les Paul™ model was put on hiatus, and an all-new design evolved into what is today known as the SG™ or “solid guitar.” '),
(4, 'Fender 75th Anniversary Commemorative Jazz Bass', 100, 2300, 2, 'Fender', 'Bass_1.png', 'The 75th Anniversary Commemorative Jazz Bass dihias dengan finish Bourbon Burst 2-Warna yang indah di atas ash body dengan hardware emas. Neck maple one-piece menampilkan profil neck \"C\" yang ramping, pinggiran fingerboard yang digulung, lapisan satin \"Super-Natural\" dan neck heel yang terpahat untuk kenyamanan dan kemudahan bermain yang tak tertandingi.'),
(5, 'BOSS Katana 100 - 1x12Inch Mark 2', 100, 424, 3, 'BOSS', 'Ampli_1.png', 'BOSS Katana MkII takes the acclaimed Katana guitar amp series to the next level, turbocharging the core platform with more sounds, more effects, and more features. Newly voiced variations are now available for all five amp characters, doubling the tonal options. And the onboard effects categories have been expanded from three to five, providing even more real-time processing to choose from. '),
(6, 'BOSS DS-1W Waza Craft Distortion', 100, 166, 4, 'BOSS', 'Pedal_1.png', 'Introduced in 1978 among the earliest models in the BOSS compact series, the orange DS-1 redefined the sound of distortion and remains as influential today as ever. Its hard-edged attack and smooth sustain have made it the best-selling compact effect to date, and its distinctive tone is behind the signature sounds of a long list of rock and alternative icons.'),
(11, 'Fender Player Precision Bass Electric Guitar, Pau Ferro FB, Candy Apple Red', 100, 987, 2, 'Fender', 'Bass_2.png', 'There’s nothing more classic than a Fender electric bass, and the Player Precision Bass is as authentic as it gets—genuine Fender style and the rumbling, seismic sound that spawned a thousand imitations. With its smooth playing feel and spotlight-ready style, this thunderous bass is ready to enter the studio or prowl the stage and help show the world your creative vision.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `produk` (`id_produk`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `keranjang` (`id_keranjang`),
  ADD KEY `pelanggan` (`id_pelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `jenis` (`id_jenis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `keranjang` FOREIGN KEY (`id_keranjang`) REFERENCES `keranjang` (`id_keranjang`),
  ADD CONSTRAINT `pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `jenis` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
