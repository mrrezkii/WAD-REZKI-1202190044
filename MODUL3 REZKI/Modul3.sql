-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2021 at 06:21 PM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET
AUTOCOMMIT = 0;
START TRANSACTION;
SET
time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Modul3`
--

-- --------------------------------------------------------

--
-- Table structure for table `Buku_Table`
--

CREATE TABLE `Buku_Table`
(
    `id_buku`      int                                                           NOT NULL,
    `judul_buku`   varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
    `penulis_buku` varchar(225)                                                  NOT NULL,
    `tahun_terbit` varchar(225)                                                  NOT NULL,
    `deskripsi`    text                                                          NOT NULL,
    `gambar`       varchar(255)                                                  NOT NULL,
    `tag`          varchar(255)                                                  NOT NULL,
    `bahasa`       varchar(255)                                                  NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Buku_Table`
--

INSERT INTO `Buku_Table` (`id_buku`, `judul_buku`, `penulis_buku`, `tahun_terbit`, `deskripsi`, `gambar`, `tag`,
                          `bahasa`)
VALUES (1, 'Sebuah Seni untuk Bersikap Bodo Amat', 'Rezki_1202190044', '2016',
        'Sebuah Seni untuk Bersikap Bodo Amat: Pendekatan yang Waras Demi Menjalani Hidup yang Baik atau The Subtle Art of Not Giving a F*ck: A Counterintuitive Approach to Living a Good Life adalah buku pertama Mark Manson, seorang narablog kenamaan dengan lebih dari 2 juta pembaca. Dia tinggal di kota New York',
        'buku1.jpg', 'Lainnya', 'Indonesia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Buku_Table`
--
ALTER TABLE `Buku_Table`
    ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Buku_Table`
--
ALTER TABLE `Buku_Table`
    MODIFY `id_buku` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
